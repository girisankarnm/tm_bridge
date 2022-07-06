<?php

namespace frontend\models\tariff;
use frontend\models\enquiry\EnquiryAccommodation;
use frontend\models\enquiry\EnquiryGuestCountChildAge;
use frontend\models\property\Property;
use frontend\models\property\Room;
use frontend\models\enquiry\Enquiry;
use frontend\models\property\PropertySlabAssignment;

use Yii;

define("EP", 1);
define("CP", 2);
define("MAP", 3);
define("AP", 4);

define("BREAKFAST", 1);
define("LUNCH", 2);
define("DINNER", 3);

class Rooming
{
    private $property = null;
    private $room = null;
    private $enquiry = null;

    private $date_based_slab = null;
    private $weekday_hike_slab = null;
    private $supplimentary_slab = null;
    private $mandatory_slab = null;

    private $meal_cost_adult = 0;
    private $meal_cost_child = 0;
    private $add_meal_plan = false;
    private $room_tariff_datewise_slab_id = 0;
    private $mandatory_dinner_cost = 0;
    private $in_tariff_meal_plan = 0;
    private $in_enquiry_meal_plan = 0;
    private $enquiry_meal_plan_override = false;
    private $meals_plan = array("EP", "CP", "MAP", "AP");

    private $break_fast_adult = 0;
    private $break_fast_child = 0;
    private $lunch_adult = 0;
    private $lunch_child = 0;
    private $dinner_adult = 0;
    private $dinner_child = 0;

    //5 Rooms and Bed Requirements
    private $rooms = 0;
    private $EBA = 0;
    private $CWB = 0;
    private $CNB = 0;
    private $SGL = 0;

    //Enquiry
    private $adults = 0;
    private $child = 0;
    private $infant = 0;

    private $room_rate = 0;
    private $EBA_rate = 0;
    private $CWB_rate = 0;
    private $CNB_rate = 0;
    private $SGL_rate = 0;

    private $initialized = false;


    public function ResetManualEntries(){
        $this->rooms = 0;
        $this->EBA = 0;
        $this->CWB = 0;
        $this->CNB = 0;
        $this->SGL = 0;
    }


    /* function __construct($property, $room) {
        $this->property = $property;
        $this->room = $room;
    } */

    //Use rate_type = 0 for rack rate, rate_type = 1, for default slab
    public function initialize($accomodation_date, $nationality_id, $room_id, $property_id, $enquiry_id, $rate_type = 1){
        $result = false;

        if ($property_id != 0) {
            $this->property = Property::find()
            ->where(['id' => $property_id])
            ->one();
        }
        if ($this->property == NULL){
            return false;
        }

        if ($room_id != 0) {
            $this->room = Room::find()
            ->where(['id' => $room_id])
            ->one();
        }
        if ($this->room == NULL){
            return false;
        }

        if ($enquiry_id != 0) {
            $this->enquiry = Enquiry::find()
            ->where(['id' => $enquiry_id])
            ->one();
        }
        if ($this->enquiry == NULL){
            return false;
        }

        //Room rate
        $nationality_group_id = 0;
        if($this->property->room_tariff_same_for_all) {
            $nationality_group_id = 0;
        }
        else {
            //Find nationality group assoicated with guest country
//            $nationaliy_group = TariffNationalityTable::find()
//            ->select('group_id')
//            ->where(['country_id' => $this->enquiry->nationality_id])
//            ->joinWith('group')->where(['property_id'=>2])
//            ->one();
            $nationaliy_group = TariffNationalityTable::find()
                ->select('group_id')
                ->where(['country_id' => $this->enquiry->nationality_id])
                ->joinWith('group')->andWhere(['tariff_nationality_group_name.property_id'=>$property_id])
                ->all();


            if($nationaliy_group != NULL) {
                $nationality_group_id = $nationaliy_group[0]['group_id'];
            }
            else {
                $nationality_group_id = 0;
            }
        }

        if( $rate_type != 0) {
            $assigned_slab = PropertySlabAssignment::find()
            ->select('slab_number')
            ->where(['property_id' => $this->property->id])
            ->andwhere(['operator_id' => $this->enquiry->owner_id])
            ->one();

            if($assigned_slab != NULL) {
                $rate_type = $assigned_slab->slab_number;
            }
            else
            {
                $rate_type = 1;
            }
        }

        $rows = (new \yii\db\Query())
        ->select(['room_tariff_datewise.id', 'DATEDIFF(tariff_date_range.to_date, tariff_date_range.from_date) AS date_difference' ])
        ->from('tariff_date_range')
        ->where(['<=', 'from_date', $accomodation_date])
        ->andWhere(['>=', 'to_date', $accomodation_date])
        ->leftJoin('room_tariff_datewise', 'room_tariff_datewise.date_range_id = tariff_date_range.id' )
        ->andWhere(['=', 'nationality_id', $nationality_group_id])
        ->andWhere(['=', 'room_id', $room_id])
        ->orderBy('date_difference ASC')
        ->one();

        if($rows != false) {
            $tariff_id = $rows['id'];
            $room_tariff = RoomTariffDatewise::findOne(['id' => $tariff_id]);

            if($room_tariff != null) {
                //Get rack rate
                if( $rate_type === 0) {
                    $this->date_based_slab = $room_tariff->getRoomTariffSlabs()
                    ->where(['=', 'number', $rate_type])
                    ->one();
                }
                else
                 {
                    //Get assigned slab rate
                     //$x = $rate_type;
                    do {
                        $this->date_based_slab = $room_tariff->getRoomTariffSlabs()
                        ->where(['=', 'number', $rate_type])
                        ->one();
                        $rate_type = $rate_type - 1;
                        if($this->date_based_slab != NULL) {
                            break;
                        };
                    }
                    while ($rate_type > 0);
                 }

                if($this->date_based_slab != null) {
                    $this->room_tariff_datewise_slab_id = $this->date_based_slab->id;
                    //Rate available
                }
                else
                {
                    //TODO: Rate not available
                    //Room rate not available

                }
            }
        }

        //Weekday hike
        $rows = (new \yii\db\Query())
        ->select(['room_tariff_weekdayhike.id', 'DATEDIFF(tariff_date_range.to_date, tariff_date_range.from_date) AS date_difference' ])
        ->from('tariff_date_range')
        ->where(['<=', 'tariff_date_range.from_date', $accomodation_date])
        ->andWhere(['>=', 'tariff_date_range.to_date', $accomodation_date])
        ->leftJoin('room_tariff_weekdayhike', 'tariff_date_range.id  = room_tariff_weekdayhike.date_range_id')
        ->andWhere(['=', 'room_tariff_weekdayhike.room_id', $room_id])
        ->orderBy('date_difference ASC')
        ->one();

        if($rows != false) {
            $tariff_id = $rows["id"];
            $weekday_hike = RoomTariffWeekdayhike::findOne(['id' => $tariff_id]);
            if($weekday_hike != null) {
                $day_of_the_week = date('w', strtotime($accomodation_date));
                foreach ($weekday_hike->roomTariffWeekdayhikeDays as $tariff_days) {
                    if ($day_of_the_week == $tariff_days->day){
                        $this->weekday_hike_slab = $weekday_hike->getRoomTariffSlabWeekdayhikes()
                        ->one();
                    }
                }
            }
        }

        //echo "<br/>Suppliment meals<br/>";

        //Suppliment meals
        $rows = (new \yii\db\Query())
        ->select(['suppliment_meal.id', 'DATEDIFF(tariff_date_range.to_date, tariff_date_range.from_date) AS date_difference' ])
        ->from('tariff_date_range')
        ->where(['<=', 'tariff_date_range.from_date', $accomodation_date])
        ->andWhere(['>=', 'tariff_date_range.to_date', $accomodation_date])
        ->leftJoin('suppliment_meal', 'tariff_date_range.id  = suppliment_meal.date_range_id')
        ->andWhere(['=', 'suppliment_meal.property_id', $property_id])
        ->orderBy('date_difference ASC')
        ->one();

        if($rows != false) {
            $tariff_id = $rows["id"];
            $suppliment_meal = SupplimentMeal::findOne(['id' => $tariff_id]);
            if($suppliment_meal != null) {
                $this->supplimentary_slab = $suppliment_meal->getSupplimentMealSlabs();
            }
        }

       // echo "<br/>Mandatory Dinner<br/>";

        $rows = (new \yii\db\Query())
        ->select(['mandatory_dinner.id', 'DATEDIFF(tariff_date_range.to_date, tariff_date_range.from_date) AS date_difference' ])
        ->from('tariff_date_range')
        ->where(['<=', 'tariff_date_range.from_date', $accomodation_date])
        ->andWhere(['>=', 'tariff_date_range.to_date', $accomodation_date])
        ->leftJoin('mandatory_dinner', 'tariff_date_range.id  = mandatory_dinner.date_range_id')
        ->andWhere(['=', 'mandatory_dinner.property_id', $property_id])
        ->orderBy('date_difference ASC')
        ->one();

        if($rows != false) {
            $tariff_id = $rows["id"];
            $mandatory_dinner_tariff = MandatoryDinner::findOne(['id' => $tariff_id]);
            if($mandatory_dinner_tariff != null) {
                $this->mandatory_slab = $mandatory_dinner_tariff;
                //var_dump($mandatory_dinner_tariff);
            }
        }


        //Apply room child policy to enquiry children
        $enquiry_accomodation = $this->enquiry->getEnquiryAccommodations()->where(['=',  'day', $accomodation_date])->one();
        //$enquiry_accomodation = EnquiryAccommodation::find()->where(['day' => $accomodation_date])->one();
        if ($enquiry_accomodation == NULL)
            return;

        $adults = $enquiry_accomodation->guestCountPlan->adults;
        $infants = EnquiryGuestCountChildAge::find()
        ->where(['plan_id' => $enquiry_accomodation->guest_count_plan_id])
        ->andWhere(['>=', 'age', $this->property->complimentary_from_age ])
        ->andWhere(['<', 'age', $this->property->complimentary_to_age ])
        ->sum("count");

        $child = EnquiryGuestCountChildAge::find()
        ->where(['plan_id' => $enquiry_accomodation->guest_count_plan_id])
        ->andWhere(['>=', 'age', $this->property->child_rate_from_age ])
        ->andWhere(['<', 'age', $this->property->child_rate_to_age ])
        ->sum("count");

        $total_child = $enquiry_accomodation->guestCountPlan->children;
        $adults = $adults + ( $total_child - ($infants + $child));

        $this->adults = $adults;
        $this->child = $child;
        $this->infant = $infants;

        $this->_mealPlan($accomodation_date);
        $this->_mandatoryDinner();

        return $result;
    }


    public function _mealPlan($accomodation_date) {
        $meal_cost_adult = 0;
        $meal_cost_child = 0;

        $enquiry_accomodation = EnquiryAccommodation::find()->where(['day' => $accomodation_date])->one();
        if ($enquiry_accomodation == NULL) {
            return;
        }

        $this->in_enquiry_meal_plan = $enquiry_accomodation->mealPlan->index;
        if($this->room->mealPlan->index >  $this->in_enquiry_meal_plan) {
            $this->in_tariff_meal_plan = $this->room->mealPlan->index;
            $this->enquiry_meal_plan_override = true;
        }
        else {
            $this->in_tariff_meal_plan = $this->in_enquiry_meal_plan;
        }

        if ( $this->supplimentary_slab == NULL){
            return;
        }

        if( $this->in_enquiry_meal_plan > $this->room->mealPlan->index ) {
            $this->add_meal_plan  = true;
            if( $this->room->mealPlan->index == EP )
            {
                switch ( $this->in_enquiry_meal_plan) {
                    case CP:
                        $suppliment_meal = $this->supplimentary_slab->where(['meal_type_id' => BREAKFAST])->one();
                        $meal_cost_adult = $suppliment_meal->rate_adult;
                        $meal_cost_child = $suppliment_meal->rate_child;

                        $this->break_fast_adult = $suppliment_meal->rate_adult;
                        $this->break_fast_child = $suppliment_meal->rate_child;
                        break;

                    case MAP:
                        $suppliment_meal = $this->supplimentary_slab->where(['meal_type_id' => BREAKFAST])->one();
                        $meal_cost_adult = $suppliment_meal->rate_adult;
                        $meal_cost_child = $suppliment_meal->rate_child;
                        $this->break_fast_adult = $suppliment_meal->rate_adult;
                        $this->break_fast_child = $suppliment_meal->rate_child;

                        $suppliment_meal = $this->supplimentary_slab->where(['meal_type_id' => DINNER])->one();
                        $meal_cost_adult = $meal_cost_adult  + $suppliment_meal->rate_adult;
                        $meal_cost_child = $meal_cost_child  + $suppliment_meal->rate_child;
                        $this->dinner_adult = $suppliment_meal->rate_adult;
                        $this->dinner_child = $suppliment_meal->rate_child;

                        break;
                    case AP:
                        $suppliment_meal = $this->supplimentary_slab->where(['meal_type_id' => BREAKFAST])->one();
                        $meal_cost_adult = $suppliment_meal->rate_adult;
                        $meal_cost_child = $suppliment_meal->rate_child;
                        $this->break_fast_adult = $suppliment_meal->rate_adult;
                        $this->break_fast_child = $suppliment_meal->rate_child;

                        $suppliment_meal = $this->supplimentary_slab->where(['meal_type_id' => LUNCH])->one();
                        $meal_cost_adult = $meal_cost_adult + $suppliment_meal->rate_adult;
                        $meal_cost_child = $meal_cost_child + $suppliment_meal->rate_child;
                        $this->lunch_adult = $suppliment_meal->rate_adult;
                        $this->lunch_child = $suppliment_meal->rate_child;

                        $suppliment_meal = $this->supplimentary_slab->where(['meal_type_id' => DINNER])->one();
                        $meal_cost_adult = $meal_cost_adult + $suppliment_meal->rate_adult;
                        $meal_cost_child = $meal_cost_child + $suppliment_meal->rate_child;
                        $this->dinner_adult = $suppliment_meal->rate_adult;
                        $this->dinner_child = $suppliment_meal->rate_child;
                        break;
                }
            }
            else if( $this->room->mealPlan->index == CP ) {
                switch ( $this->in_enquiry_meal_plan ) {
                    case MAP:
                        $suppliment_meal = $this->supplimentary_slab->where(['meal_type_id' => DINNER])->one();
                        $meal_cost_adult = $suppliment_meal->rate_adult;
                        $meal_cost_child = $suppliment_meal->rate_child;
                        $this->dinner_adult = $suppliment_meal->rate_adult;
                        $this->dinner_child = $suppliment_meal->rate_child;
                        break;

                    case AP:
                        $suppliment_meal = $this->supplimentary_slab->where(['meal_type_id' => LUNCH])->one();
                        $meal_cost_adult = $suppliment_meal->rate_adult;
                        $meal_cost_child = $suppliment_meal->rate_child;
                        $this->lunch_adult = $suppliment_meal->rate_adult;
                        $this->lunch_child = $suppliment_meal->rate_child;

                        $suppliment_meal = $this->supplimentary_slab->where(['meal_type_id' => DINNER])->one();
                        $meal_cost_adult = $meal_cost_adult + $suppliment_meal->rate_adult;
                        $meal_cost_child = $meal_cost_child + $suppliment_meal->rate_child;
                        $this->dinner_adult = $suppliment_meal->rate_adult;
                        $this->dinner_child = $suppliment_meal->rate_child;
                        break;
                }
            }
            else if($this->room->mealPlan->index == MAP) {
                if( $this->in_enquiry_meal_plan == AP ) {
                    $suppliment_meal = $this->supplimentary_slab->where(['meal_type_id' => LUNCH])->one();
                    $meal_cost_adult = $suppliment_meal->rate_adult;
                    $meal_cost_child = $suppliment_meal->rate_child;
                    $this->lunch_adult = $suppliment_meal->rate_adult;
                    $this->lunch_child = $suppliment_meal->rate_child;
                }
            }
        }

        $this->meal_cost_adult = $meal_cost_adult;
        $this->meal_cost_child = $meal_cost_child;
    }

    public function _mandatoryDinner(){
        if ( !$this->property->provide_compulsory_inclusions ){
            return;
        }

        if ( !$this->mandatory_slab ){
            return;
        }

        //10A Mandatory dinner cost
        $mandatory_dinner_cost = ($this->mandatory_slab->rate_adult * $this->adults) + ($this->mandatory_slab->rate_child * $this->child );

        //10B Discount on MAP/AP plan calculation
        $dinner_discount = 0;
        //TODO: $this->meal_cost_adult is total rate for that day includes B + L + D, we need only Dinner rate while applying discount
        if ($mandatory_dinner_cost > 0){
            if ($this->in_tariff_meal_plan >= 3 ) {
                //(MAP or AP)
                $dinner_discount = ($this->meal_cost_adult * $this->adults) + ($this->meal_cost_child * $this->child);
            }
        }

        //10C Net Dinner Amount
        $this->mandatory_dinner_cost = $mandatory_dinner_cost - $dinner_discount;
    }

    public function _4A(){
        $datewise_amount = 0;
        $weekday_hike_amount = 0;

        if($this->date_based_slab != null) {
            $datewise_amount = $this->date_based_slab->room_rate;
        }

        if($this->weekday_hike_slab != null) {
            $weekday_hike_amount = $this->weekday_hike_slab->room_rate;
        }

        $rate = $datewise_amount + $weekday_hike_amount;

        if ($this->add_meal_plan) {
            $rate = $rate + $this->meal_cost_adult ;
        }

        return $rate;
    }

    public function _4A_MO_1(){
        if($this->date_based_slab != null) {
            return floatval($this->date_based_slab->room_rate);
        }

        return 0;
    }

    public function _4A_MO_2(){
        if($this->weekday_hike_slab != null) {
            return floatval($this->weekday_hike_slab->room_rate);
        }

        return 0;
    }

    public function _4A_MO_3(){
        return floatval($this->meal_cost_adult * $this->room->number_of_adults);
    }

    //Room rate slab id
    public function _4A1(){
        return $this->room_tariff_datewise_slab_id;
    }

    public function _4B(){
        $datewise_amount = 0;
        $weekday_hike_amount = 0;

        if($this->date_based_slab != null) {
            $datewise_amount = $this->date_based_slab->adult_with_extra_bed;
        }

        if($this->weekday_hike_slab != null) {
            $weekday_hike_amount = $this->weekday_hike_slab->adult_with_extra_bed;
        }

        $rate = $datewise_amount + $weekday_hike_amount;

        if ($this->add_meal_plan) {
            $rate = $rate + $this->meal_cost_adult;
        }
        return $rate;
    }

    public function _4B_MO_1(){
        if($this->date_based_slab != null) {
            return floatval($this->date_based_slab->adult_with_extra_bed);
        }

        return 0;
    }

    public function _4B_MO_2(){
        if($this->weekday_hike_slab != null) {
            return floatval($this->weekday_hike_slab->adult_with_extra_bed);
        }

        return 0;
    }

    public function _4B_MO_3(){
        if ($this->add_meal_plan) {
            return ($this->meal_cost_adult * $this->room->number_of_extra_beds);
        }

        return 0;
    }

    public function _4C(){
        $datewise_amount = 0;
        $weekday_hike_amount = 0;

        if($this->date_based_slab != null) {
            $datewise_amount = $this->date_based_slab->child_with_extra_bed;
        }

        if($this->weekday_hike_slab != null) {
            $weekday_hike_amount = $this->weekday_hike_slab->child_with_extra_bed;
        }

        $rate = $datewise_amount + $weekday_hike_amount;
        if ($this->add_meal_plan) {
            $rate = $rate + $this->meal_cost_child ;
        }

        return $rate;
    }

    public function _4C_MO_1(){
        if($this->date_based_slab != null) {
            return floatval($this->date_based_slab->child_with_extra_bed);
        }

        return 0;
    }

    public function _4C_MO_2(){
        if($this->weekday_hike_slab != null) {
            return floatval($this->weekday_hike_slab->child_with_extra_bed);
        }

        return 0;
    }

    public function _4C_MO_3(){
        if ($this->add_meal_plan) {
            return ($this->meal_cost_child * $this->room->number_of_extra_beds);
        }

        return 0;
    }

    public function _4D(){
        $datewise_amount = 0;
        $weekday_hike_amount = 0;

        if($this->date_based_slab != null) {
            $datewise_amount = $this->date_based_slab->child_sharing_bed;
        }

        if($this->weekday_hike_slab != null) {
            $weekday_hike_amount = $this->weekday_hike_slab->child_sharing_bed;
        }

        $rate = $datewise_amount + $weekday_hike_amount;
        if ($this->add_meal_plan) {
            $rate = $rate + $this->meal_cost_child ;
        }

        return $rate;
    }

    public function _4D_MO_1(){
        if($this->date_based_slab != null) {
            return floatval($this->date_based_slab->child_sharing_bed);
        }

        return 0;
    }

    public function _4D_MO_2(){
        if($this->weekday_hike_slab != null) {
            return floatval($this->weekday_hike_slab->child_sharing_bed);
        }

        return 0;
    }

    public function _4D_MO_3(){
        if ($this->add_meal_plan) {
            return ($this->meal_cost_child * $this->room->number_of_kids_on_sharing);
        }

        return 0;
    }

    public function _4E(){
        $datewise_amount = 0;
        $weekday_hike_amount = 0;

        if($this->date_based_slab != null) {
            $datewise_amount = $this->date_based_slab->single_occupancy;
        }

        if($this->weekday_hike_slab != null) {
            $weekday_hike_amount = $this->weekday_hike_slab->single_occupancy;
        }

        $rate = $datewise_amount + $weekday_hike_amount;
        if ($this->add_meal_plan) {
            $rate = $rate + $this->meal_cost_adult ;
        }

        return $rate;
    }

    public function _4E_MO_1(){
        if($this->date_based_slab != null) {
            return floatval($this->date_based_slab->single_occupancy);
        }

        return 0;
    }

    public function _4E_MO_2(){
        if($this->weekday_hike_slab != null) {
            return floatval($this->weekday_hike_slab->single_occupancy);
        }

        return 0;
    }

    public function _4E_MO_3(){
        if ($this->add_meal_plan) {
            return ($this->meal_cost_adult * 1);
        }

        return 0;
    }


    public function SetRoomBedRequirement($enquiry_room, $enquiry_EBA, $enquiry_CWB, $enquiry_CNB, $enquiry_SGL){
        $this->rooms = $enquiry_room;
        $this->EBA = $enquiry_EBA;
        $this->CWB = $enquiry_CWB;
        $this->CNB = $enquiry_CNB;
        $this->SGL = $enquiry_SGL;
    }

    public function SetAdultChildInfant($adults, $child, $infant) {
        $this->adults = $adults;
        $this->child = $child;
        $this->infant = $infant;
    }

    public function SetTariff($room_rate, $EBA_rate, $CWB_rate, $CNB_rate, $SGL_rate){
        /* $this->room_rate = $room_rate;
        $this->EBA_rate = $EBA_rate;
        $this->CWB_rate = $CWB_rate;
        $this->CNB_rate = $CNB_rate;
        $this->SGL_rate = $SGL_rate; */
    }

    public function N1(){
        $result = "";
        $result ="Infant: ". $this->property->complimentary_from_age. " - ".$this->property->complimentary_to_age." YR |  Child: ".$this->property->child_rate_from_age." - ".$this->property->child_rate_to_age." YR";
        return $result;
    }

    //Child Policy
    public function N1A(){
        $result = "";
        if($this->property->restricted_for_child) {
            $result ="Entry restricted for child below ".$this->property->restricted_for_child_below_age."YRs";
        }

        if($this->room->restricted_for_child) {
            $result ="Entry restricted for child below ".$this->room->restricted_for_child_below_age."YRs";
        }
        return $result;
    }

    //Guest Count in Enquiry TODO
    public function N2(){
        $result = "";
        return $result;
    }

    //Meal Plan in Enquiry
    public function N3(){
        $result = "";
        if ($this->in_enquiry_meal_plan > 0 &&  $this->in_enquiry_meal_plan < 5) {
            $result =  $this->meals_plan[($this->in_enquiry_meal_plan - 1)];
        }
        return $result;
    }

    //Meal Plan in Tariff
    public function N3A(){
        $result = "";
        if ($this->in_tariff_meal_plan > 0 &&  $this->in_tariff_meal_plan < 5) {
            $result =  $this->meals_plan[($this->in_tariff_meal_plan - 1)];
        }
        return $result;
    }

    //Enquiry meal plan over ride by room meal plan
    public function N3B(){
        return $this->enquiry_meal_plan_override;
    }

    public function N3C(){
        return "B ". floatval($this->break_fast_adult)." | L ".floatval($this->lunch_adult)." | D ".floatval($this->dinner_adult);
    }

    public function N3D(){
        return "B ". floatval($this->break_fast_child)." | L ".floatval($this->lunch_child)." | D ".floatval($this->dinner_child);
    }


     //Nationality in Enquiry TODO
     public function N4(){
        $result = "";
        return $result;
    }

    //Date of Stay in Enquiry TODO
    public function N5(){
        $result = "";
        return $result;
    }

    //View Enquiry Details
    public function N6(){
        $result = "";
        return $result;
    }

    //OP Status
    public function N7(){
        $result = "";
        return $result;
    }

    //View SRR (Also refer notes for SP 5A to 5F)
    public function N8(){
        $result = "";
        return $result;
    }

    //Mandatory dinner cost
    public function N9(){
        return $this->mandatory_dinner_cost;
    }

    public function _1A(){
        $result = $this->adults;
        return $result;
    }

    public function _1B(){
        $result = $this->child;
        return $result;
    }

    public function _1C(){
        $result = $this->infant;
        return $result;
    }

    public function _2A(){
        return $this->room->number_of_adults;
    }

    public function _2B(){
        return $this->room->number_of_extra_beds;
    }

    public function _2C(){
        return $this->room->number_of_kids_on_sharing;
    }

    public function _2D(){
        return $this->room->number_of_adults + $this->room->number_of_extra_beds + $this->room->number_of_kids_on_sharing;
    }

    private function getAssignedSlabWeekdayhike($accomodation_date, $room_id) {
        //SELECT id, from_date, to_date, room_tariff_weekdaywise_id, DATEDIFF(to_date, from_date) AS date_difference
        //FROM `room_tariff_date_range_weekdaywise` WHERE from_date < '2022-03-2' AND to_date > '2022-03-2' ORDER BY date_difference ASC

        $result = false;
        $rows = (new \yii\db\Query())
        ->select(['id', 'from_date', 'to_date', 'room_tariff_weekdaywise_id', 'DATEDIFF(to_date, from_date) AS date_difference' ])
        ->from('room_tariff_date_range_weekdaywise')
        ->where(['<', 'from_date', $accomodation_date])
        ->andWhere(['>', 'to_date', $accomodation_date])
        ->orderBy('date_difference ASC')
        ->one();

        if($rows != false) {
            $tariff_id = $rows["room_tariff_weekdaywise_id"];
            $weekday_hike = RoomTariffWeekdaywise::findOne(['id' => $tariff_id, 'room_id' => $room_id]);
            if($weekday_hike != null) {
                $this->weekday_hike_slab = $weekday_hike->getRoomTariffSlabWeekdaywises()
                ->one();
                if($this->weekday_hike_slab != null) {
                    //echo $this->weekday_hike_slab["room_rate"];
                    //var_dump($this->weekday_hike_slab);
                    $result = true;
                }
            }
        }
        return $result;
    }

    private function getAssignedSlabRoomRate($accomodation_date, $nationality_id /*, $room_id*/) {
        $result = false;
        $rows = (new \yii\db\Query())
        ->select(['id', 'from_date', 'to_date', 'tariff_id', 'DATEDIFF(to_date, from_date) AS date_difference' ])
        ->from('room_tariff_date_range')
        ->where(['<', 'from_date', $accomodation_date])
        ->andWhere(['>', 'to_date', $accomodation_date])
        ->orderBy('date_difference ASC')
        ->one();

        if($rows != false) {
            $tariff_id = $rows["tariff_id"];
            $room_tariff = RoomTariffDatewise::findOne(['id' => $tariff_id, 'nationality_id' => $nationality_id]);
            if($room_tariff != null) {
                $this->date_based_slab = $room_tariff->getRoomTariffSlabs()
                ->where(['=', 'number', "1"]) //Use slab 1 as default
                ->one();
                if($this->date_based_slab != null) {
                    $result = true;
                }
            }
        }
        return $result;
    }

    //6. Totals
    //Required beds
    public function _3A(){
        $result = $this->rooms * $this->_2A() + $this->EBA + $this->CWB + $this->CNB + $this->SGL;
        return $result;
    }

    public function _1D(){
        $result = $this->_1A() + $this->_1B() + $this->_1C();
        return $result;
    }

    //5.	Special Tariff (SRR) – To be done later under operations module.
    public function _5A(){ $result = 0; return $result; }
    public function _5B(){ $result = 0; return $result; }
    public function _5C(){ $result = 0; return $result; }
    public function _5D(){ $result = 0; return $result; }
    public function _5E(){ $result = 0; return $result; }
    public function _5F(){ $result = 0; return $result; }

    //5. Rooms & Bed Requirement
    public function _Rooms(){
        return $this->rooms;
    }
    public function _EBA(){
        return $this->EBA;
    }
    public function _CWB(){
        return $this->CWB;
    }
    public function _CNB(){
        return $this->CNB;
    }
    public function _SGL(){
        return $this->SGL;
    }


    //7.  Allocation (Bed Type < To > Pax Type)
    public function _7A(){
        $result = 0;
        if ($this->SGL > 0) {
            if ($this->_1A() > 0) {
                if ($this->SGL > $this->_1A()) {
                    $result =  $this->_1A();
                }
                else {
                    $result = $this->SGL;
                }
            }
        }
        return $result;
    }

    public function _7B(){
        $result = 0;
        if ($this->EBA > 0) {
            if ($this->_1A() > 0) {
                if ($this->EBA > ($this->_1A() - $this->_7A()) ) {
                    $result =  $this->_1A() - $this->_7A();
                }
                else {
                    $result = $this->EBA;
                }
            }
        }
        return $result;
    }

    public function _7C(){
        $result = 0;
        if ($this->rooms > 0) {
            if ($this->_1A() > 0) {
                if ( ($this->rooms * $this->_2A()) > ($this->_1A() - $this->_7A() - $this->_7B() ) ) {
                    $result =  $this->_1A() - $this->_7A() - $this->_7B();
                }
                else {
                    $result = ($this->rooms * $this->_2A());
                }
            }
        }
        return $result;
    }

    public function _7D(){
        $result = 0;
        if ($this->CWB > 0) {
            if ($this->_1B() > 0) {
                if ( $this->CWB  > $this->_1B() ) {
                    $result =  $this->_1B();
                }
                else {
                    $result = $this->CWB;
                }
            }
        }
        return $result;
    }

    public function _7E(){
        $result = 0;
        if ($this->CWB > 0) {
            if ($this->_1C() > 0) {
                if ( ($this->CWB - $this->_7D()) > $this->_1C() ) {
                    $result =  $this->_1C();
                }
                else {
                    $result = $this->CWB- $this->_7D();
                }
            }
        }
        return $result;
    }

    public function _7F(){
        $result = 0;
        if ($this->CNB > 0) {
            if ($this->_1C() > 0) {
                if ( $this->CNB - $this->_7D() > ( $this->_1C() - $this->_7E()) ) {
                    $result =  $this->_1C() - $this->_7E();
                }
                else {
                    $result = $this->CNB;
                }
            }
        }
        return $result;
    }

    public function _7G(){
        $result = 0;
        if ($this->CNB > 0) {
            if ($this->_1B() > 0) {
                if ( $this->CNB - $this->_7F() > ( $this->_1B() - $this->_7D()) ) {
                    $result =  $this->_1B() - $this->_7D();
                }
                else {
                    $result = $this->CNB - $this->_7F() ;
                }
            }
        }
        return $result;
    }

    public function _7H(){
        $result = 0;
        if ($this->rooms > 0) {
            if ($this->_1B() > 0) {
                if ( ( ($this->rooms * $this->_2A()) - $this->_7C() ) > ( $this->_1B() - $this->_7D() - $this->_7G()) ) {
                    $result =  $this->_1B() - $this->_7D() - $this->_7G();
                }
                else {
                    $result = $this->rooms * $this->_2A() - $this->_7C();
                }
            }
        }
        return $result;
    }

    public function _7I(){
        $result = 0;
        if ($this->rooms > 0) {
            if ($this->_1C() > 0) {
                if ( ( ($this->rooms * $this->_2A()) - ($this->_7C() - $this->_7H()) ) > ( $this->_1C() - $this->_7E() - $this->_7F()) ) {
                    $result = $this->_1C() - $this->_7E() - $this->_7F();
                }
                else {
                    $result = $this->rooms * $this->_2A() - $this->_7C() -  $this->_7H();
                }
            }
        }
        return $result;
    }

    public function _7J(){
        $result = ($this->rooms * $this->_2A()) - $this->_7C() - $this->_7H() - $this->_7I();
        return $result;
    }
    public function _7K(){
        $result = $this->EBA - $this->_7B();
        return $result;
    }
    public function _7L(){
        $result = $this->CWB - $this->_7D() - $this->_7E();
        return $result;
    }
    public function _7M(){
        $result = $this->CNB - $this->_7G() - $this->_7F();
        return $result;
    }
    public function _7N(){
        $result = $this->SGL - $this->_7A();
        return $result;
    }
    public function _7O(){
        $result = $this->_7A() + $this->_7B() + $this->_7C();
        return $result;
    }
    public function _7P(){
        $result = $this->_7D() + $this->_7G() + $this->_7H();
        return $result;
    }
    public function _7Q(){
        $result = $this->_7E() + $this->_7F() + $this->_7I();
        return $result;
    }
    public function _7R(){
        $result = $this->_7N() + $this->_7K() + $this->_7L() + $this->_7M() + $this->_7J();
        return $result;
    }
    public function _7S(){
        $result = $this->_1A() - $this->_7O();
        return $result;
    }
    public function _7T(){
        $result = $this->_1B() - $this->_7P();
        return $result;
    }
    public function _7U(){
        $result = $this->_1C() - $this->_7Q();
        return $result;
    }
    public function _7V(){
        $result = $this->_7S() + $this->_7T() + $this->_7U();
        return $result;
    }

   //8. Bed Utilization Matrix

    public function _T1(){
        $result = $this->rooms * $this->_2A();
        return $result;
    }
    public function _T2(){
        $result = $this->_7C() + $this->_7H() + $this->_7I();
        return $result;
    }
    public function _T3(){
        $result = $this->_T1() - $this->_T2();
        return $result;
    }

    public function _T4(){
        return $this->rooms * $this->_2B();
    }

    public function _T5(){
        $result = $this->EBA + $this->CWB;
        return $result;
    }

    public function _T6(){
        $result = $this->_T4() - $this->_T5();
        return $result;
    }

    public function _T7(){
        $result = $this->rooms * $this->_2C();
        return $result;
    }

    public function _T8(){
        $result = $this->CNB;
        return $result;
    }

    public function _T9(){
        $result = $this->_T7() - $this->_T8();
        return $result;
    }

    public function _T10(){
        $result = $this->SGL;
        return $result;
    }

    public function _T11(){
        $result = $this->SGL;
        return $result;
    }

    public function _T12(){
        $result = $this->_T10() - $this->_T11();
        return $result;
    }

    public function _T13(){
        $result = $this->_T1() + $this->_T4() + $this->_T7() + $this->_T10();
        return $result;
    }

    public function _T14(){
        $result = $this->_T2() + $this->_T5() + $this->_T8() + $this->_T11();
        return $result;
    }

    public function _T15(){
        $result = $this->_T3() + $this->_T6() + $this->_T9() + $this->_T12();
        return $result;
    }

    //9. FOC calculation (Infants)
    public function _8A(){
        $result = $this->rooms * $this->_2C();
        return $result;
    }
    public function _8B(){
        $result = $this->_1C();
        return $result;
    }
    public function _8C(){
        $result = 0;
        if ($this->_8B() > $this->_8A()) {
            $result = $this->_8B() - $this->_8A();
        }
        return $result;
    }
    public function _8D(){
        $result = $this->_8B() -  $this->_8C();
        return $result;
    }
    public function _8E(){
        $result = $this->CNB;
        return $result;
    }

    //10. Tariff calculation
    public function _6A(){
        $result = 0;
        if ($this->rooms > 0 ){
            if ($this->_5A() > 0 ) {
                $result = $this->_5A() * $this->rooms;
            }
            else {
                $result = $this->_4A() * $this->rooms;
            }
        }

        return $result;
    }

    public function _6B(){
        $result = 0;
        if ($this->EBA > 0 ){
            if ($this->_5B() > 0 ){
                $result = $this->_5B() * $this->EBA;
            }
            else {
                $result = $this->_4B() * $this->EBA;
            }
        }

        return $result;
    }

    public function _6C(){
        $result = 0;
        if ($this->CWB > 0 ){
            if ($this->_5C() > 0 ){
                $result = $this->_5C() * $this->CWB;
            }
            else {
                $result = $this->_4C() * $this->CWB;
            }
        }
        return $result;
    }

    public function _6D(){
        $result = 0;
        if ($this->CNB - $this->_8D() > 0 ){
            if ($this->_5D() > 0 ){
                $result = ($this->CNB - $this->_8D()) * $this->_5D();
            }
            else {
                $result = ($this->CNB - $this->_8D()) * $this->_4D();
            }
        }
        return $result;
    }

    public function _6E(){
        $result = 0;
        if ($this->SGL > 0 ){
            if ($this->_5E() > 0 ){
                $result = $this->_5E() * $this->SGL;
            }
            else {
                $result = $this->_4E() * $this->SGL;
            }
        }
        return $result;
    }

    //TODO: This function require to return "Error" text
    public function _7W(){
        $result = 0;
        if ($this->_7V() == 0 ){
            $result = $this->_6A() + $this->_6B() + $this->_6C() + $this->_6D() + $this->_6E() + $this->N9();
        }

        return $result;
    }

    //11. Results
    public function  _R1(){
        $result = "OK";
        if ($this->_7V() > 0 ){
            $result = "Error";
        }
        return $result;
    }

    public function  _R2(){
        $result = "";
        if ($this->_7V() > 0 ){
            $result = "Allocation Pending ";
            if ($this->_7S() > 0 ){
                $result = $result."Adult: ". $this->_7S()." | ";
            }

            if ($this->_7T() > 0 ){
                $result = $result."Child: ". $this->_7T()." | ";
            }

            if ($this->_7U() > 0 ){
                $result = $result."Infant: ". $this->_7U()." | ";
            }
        }

        return $result;
    }

    public function _R3(){
        $result = "";

        if ($this->_T3() < 0) {
            $result = $result. "DB: ".$this->_T3() * -1;
        }

        if ($this->_T6() < 0) {
            $result = $result. "EB: ".$this->_T6() * -1;
        }

        if ($this->_T9() < 0) {
            $result = $result. "SB: ".$this->_T9() * -1;
        }

        return $result;
    }

    public function _R4(){
        $result = "";
        if ($this->rooms > 0) {
            $result = $this->rooms. "X ";
            if ($this->_5A() > 0) {
                $result = $result.$this->_5A();
            }
            else {
                $result = $result.$this->_4A();
            }
        }
        return $result;
    }

    public function  _R5(){
        $result = "";
        if ($this->EBA > 0) {
            $result = $this->EBA. " X ";
            if($this->_5B() > 0) {
                $result = $result.$this->_5B();
            }
            else {
                $result = $result.$this->_4B();
            }

        }
        return $result;
    }

    public function  _R6(){
        $result = "";
        if ($this->CWB > 0) {
            $result = $this->CWB. " X ";
            if($this->_5C() > 0) {
                $result = $result.$this->_5C();
            }
            else {
                $result = $result.$this->_4C();
            }
        }

        return $result;
    }

    public function  _R7(){
        $result = "";
        if ($this->CNB - $this->_8D() > 0) {
            $result = ($this->CNB - $this->_8D()). " X ";
            if ($this->_5D() > 0) {
                $result = $result.$this->_5D();
            }
            else {
                $result = $result.$this->_4D();
            }

        }
        return $result;
    }
    public function  _R8(){
        $result = "";
        if ($this->SGL > 0) {
            $result = $this->SGL." X ";
            if ($this->_5E() > 0) {
                $result = $result.$this->_5E();
            }
            else {
                $result = $result.$this->_4E();
            }
        }
        return $result;
    }

    public function  _R9(){
        $result = "";
        if ($this->_8D() > 0) {
            $result = $this->_8D()." Infants";
        }
        return $result;
    }

    public function _R10(){
        $result = "Error";
        if ($this->_7V() == 0) {
            $result = $this->_7W();
        }
        return $result;
    }

    public function _R11(){
        $result = "";
        if ($this->rooms > 0) {
            $result = $this->rooms;
        }
        return $result;
    }

    public function _R12(){
        $result = "";
        if ($this->EBA > 0) {
            $result = $this->EBA;
        }
        return $result;
    }

    public function _R13(){
        $result = "";
        if ($this->CWB > 0) {
            $result = $this->CWB;
        }
        return $result;
    }

     public function _R14(){
        $result = "";
        if ($this->CNB - $this->_8D() > 0) {
            $result = $this->CNB - $this->_8D();
        }
        return $result;
    }

    public function _R15(){
        $result = "";
        if ($this->SGL > 0) {
            $result = $this->SGL;
        }
        return $result;
    }

    public function _R16(){
        $result = "";
        if ($this->_8D() > 0) {
            $result = $this->_8D()." Infants";
        }
        return $result;
    }

    public function _R17(){
        $result = "";
        if ($this->_7V() == 0) {
            if ($this->_5F() > 0) {
                $result = $this->_5F();
            }
        }
        return $result;
    }

    public function _R18(){
        $result = "";
        if ($this->_1A() > 0) {
            $result = "DB: ".$this->_7C(). " | EB: ".$this->_7B(). "| SGL: ".$this->_7A() ;
        }
        return $result;
    }

    public function _R19(){
        $result = "";
        if ($this->_1B() > 0) {
            $result = "DB: ".$this->_7H(). " | EB: ".$this->_7D(). "| SB: ".$this->_7G() ;
        }
        return $result;
    }

    public function _R20(){
        $result = "";
        if ($this->_1C() > 0) {
            $result = "DB: ".$this->_7I(). " | EB: ".$this->_7E(). "| SB: ".$this->_7F() ;
        }
        return $result;
    }

    //AUTO ROOMING


    public function _25A(){
        $result = 0;
        if ($this->_1C() > 0) {
            $result = ceil($this->_1A() / ($this->_2A() + $this->_2B()));
        }
        return $result;
    }

    public function _25B(){
        $result = 0;
        $result = $this->_25A() * $this->_2A();
        return $result;
    }

    public function _25C(){
        $result = 0;
        $result = $this->_25A() * $this->_2B();
        return $result;
    }

    public function _25D(){
        $result = 0;
        $result = $this->_25A() * $this->_2C();
        return $result;
    }

    public function _25E(){
        $result = 0;

        if($this->_1A() > $this->_25B()){
            $result = $this->_25B();
        }
        else {
            $result = $this->_1A();
        }

        return $result;
    }



    public function _25F(){
        $result = 0;
        $result = $this->_1A() - $this->_25E();
        return $result;
    }
    public function _25G(){
        $result = 0;
        $result = $this->_25B() - $this->_25E();
        return $result;
    }

    public function _25H(){
        $result = 0;
        if($this->_1B() > $this->_25G()){
            $result = $this->_25G();
        }
        else {
            $result = $this->_1B();
        }

        return $result;
    }

    public function _25I(){
        $result = 0;
        $result = $this->_1B() - $this->_25H();
        return $result;
    }

    public function _25J(){
        $result = 0;
        $result = $this->_25G() - $this->_25H();
        return $result;
    }


    public function _25K(){
        $result = 0;

        if($this->_1C() > $this->_25J()){
            $result = $this->_25J();
        }
        else {
            $result = $this->_1C();
        }

        return $result;
    }

    public function _25L(){
        $result = 0;
        $result = $this->_1C() - $this->_25K();
        return $result;
    }

    public function _25M(){
        $result = 0;
        if($this->_25F() > $this->_25C()){
            $result = $this->_25C();
        }
        else {
            $result = $this->_25F();
        }

        return $result;
    }

    public function _25N(){
        $result = 0;
        $result = $this->_25C() - $this->_25M();
        return $result;
    }
    public function _25O(){
        $result = 0;
        if($this->_25L() > $this->_25D()){
            $result = $this->_25D();
        }
        else {
            $result = $this->_25L();
        }

        return $result;
    }
    public function _25P(){
        $result = 0;
        $result = $this->_25L() - $this->_25O();
        return $result;
    }

    public function _25Q(){
        $result = 0;
        $result = $this->_25D() - $this->_25O();
        return $result;
    }

    public function _25R(){
        $result = 0;
        if($this->_25I() > $this->_25Q()){
            $result = $this->_25Q();
        }
        else {
            $result = $this->_25I();
        }

        return $result;
    }
    public function _25S(){
        $result = 0;
        $result = $this->_25I() - $this->_25R();
        return $result;
    }

    public function _25T(){
        $result = 0;
        if($this->_25S() > $this->_25N()){
            $result = $this->_25N();
        }
        else {
            $result = $this->_25S();
        }
        return $result;
    }

    public function _25U(){
        $result = 0;
        $result = $this->_25N() - $this->_25T();
        return $result;
    }

    public function _25V(){
        $result = 0;
        if($this->_25P() > $this->_25U()){
            $result = $this->_25U();
        }
        else {
            $result = $this->_25P();
        }
        return $result;
    }

    public function _26A() {
        $result =  $this->_1B() -  $this->_25H() - $this->_25T() - $this->_25R();
        return $result;
    }
    public function _26B() {
        $result =  $this->_1C() - $this->_25K() - $this->_25O() - $this->_25V();
        return $result;
    }
    public function _26C() {
        $result =  ceil(($this->_26A() + $this->_26B())  / $this->_2D());
        return $result;
    }
    public function _26D() {
        $result =  $this->_25A() + $this->_26C();
        return $result;
    }
    public function _26E() {
        $result =  $this->_26D() * $this->_2A();
        return $result;
    }
    public function _26F() {
        $result =  $this->_26D() * $this->_2B();
        return $result;
    }
    public function _26G() {
        $result =  $this->_26D() * $this->_2C();
        return $result;
    }

    public function _27A() {
        $result = 0;
        if($this->_1A() > $this->_26E()){
            $result = $this->_26E() - $this->_27B();
        }
        else {
            $result = $this->_1A() - $this->_27B();
        }
        return $result;
    }

    public function _27B() {
        $result = 0;
        if($this->_1A() == 1 ) {
            if( ($this->_1A() + $this->_1B() + $this->_1C()) == 1) {
                $result = 1;
            }
        }
        return $result;
    }
    public function _27C() {
        $result = 0;
        $result = $this->_1A() - $this->_27A() - $this->_27B();
        return $result;
    }

    public function _27D() {
        $result = 0;
        $result = $this->_26E() - $this->_27A();
        return $result;
    }

    public function _27E() {
        $result = 0;
        if($this->_1B() > $this->_27D()){
            $result = $this->_27D();
        }
        else {
            $result = $this->_1B();
        }
        return $result;
    }
    public function _27F() {
        $result = 0;
        $result = $this->_1B() - $this->_27E();
        return $result;
    }
    public function _27G() {
        $result = 0;
        $result = $this->_27D() - $this->_27E();
        return $result;
    }

    public function _27H() {
        $result = 0;
        if($this->_1C() > $this->_27G()){
            $result = $this->_27G();
        }
        else {
            $result = $this->_1C();
        }
        return $result;
    }
    public function _27I() {
        $result = 0;
        $result = $this->_1C() - $this->_27H();
        return $result;
    }

    public function _27J() {
        $result = 0;
        if($this->_27C() > $this->_26F()){
            $result = $this->_26F();
        }
        else {
            $result = $this->_27C();
        }
        return $result;
    }

    public function _27K() {
        $result = 0;
        $result = $this->_26F() - $this->_27J();
        return $result;
    }

    public function _27L() {
        $result = 0;
        if($this->_27I() > $this->_26G()){
            $result = $this->_26G();
        }
        else {
            $result = $this->_27I();
        }
        return $result;
    }

    public function _27M() {
        $result = 0;
        $result = $this->_27I() - $this->_27L();
        return $result;
    }

    public function _27N() {
        $result = 0;
        $result = $this->_26G() - $this->_27L();
        return $result;
    }

    public function _27O() {
        $result = 0;
        if($this->_27F() > $this->_27N()){
            $result = $this->_27N();
        }
        else {
            $result = $this->_27F();
        }
        return $result;
    }
    public function _27P() {
        $result = 0;
        $result = $this->_27F() - $this->_27O();
        return $result;
    }

    public function _27Q() {
        $result = 0;
        if($this->_27P() > $this->_27K()){
            $result = $this->_27K();
        }
        else {
            $result = $this->_27P();
        }
        return $result;
    }

    public function _27R() {
         $result = 0;
         $result = $this->_27K() - $this->_27Q();
         return $result;
    }

    public function _27S() {
        $result = 0;
        if($this->_27M() > $this->_27R()){
            $result = $this->_27R();
        }
        else {
            $result = $this->_27M();
        }
        return $result;
    }

    public function _R40(){
        $result = 0;
        $result = $this->_26D() - $this->_27B();
        return $result;
    }

    public function _R41(){
        $result = 0;
        if($this->_27J() > 0){
            $result = $this->_27J();
        }
        return $result;
    }

    public function _R42(){
        $result = 0;
        if($this->_27Q() + $this->_27S() > 0){
            $result = $this->_27Q() + $this->_27S();
        }
        return $result;
    }

    public function _R43(){
        $result = 0;
        if($this->_27O() > 0){
            $result = $this->_27O();
        }
        return $result;
    }

    public function _R44(){
        $result = $this->_27B();
        return $result;
    }

    public function _R45(){
        $result = $this->_27L();
        return $result;
    }

    public function _R50(){
        $result = 0;
        if($this->_R40() > 0){
            if($this->_5A() > 0){
                $result = $this->_5A() * $this->_R40();
            }
            else {
                $result = $this->_4A() * $this->_R40();
            }
        }
        return $result;
    }

    public function _R51(){
        $result = 0;
        if($this->_R41() > 0){
            if($this->_5B() > 0){
                $result = $this->_5B() * $this->_R41();
            }
            else {
                $result = $this->_4B() * $this->_R41();
            }
        }
        return $result;
    }

    public function _R52(){
        $result = 0;
        if($this->_R42() > 0){
            if($this->_5C() > 0){
                $result = $this->_5C() * $this->_R42();
            }
            else {
                $result = $this->_4C() * $this->_R42();
            }
        }
        return $result;
    }

    public function _R53(){
        $result = 0;
        if($this->_R43() > 0){
            if($this->_5D() > 0){
                $result = $this->_5D() * $this->_R43();
            }
            else {
                $result = $this->_4D() * $this->_R43();
            }
        }
        return $result;
    }

    public function _R54(){
        $result = 0;
        if($this->_R44() > 0){
            if($this->_5E() > 0){
                $result = $this->_5E() * $this->_R44();
            }
            else {
                $result = $this->_4E() * $this->_R44();
            }
        }
        return $result;
    }

    public function _R55(){
        $result = $this->_R50() + $this->_R51() + $this->_R52() + $this->_R53() + $this->_R54() + $this->N9();
        return $result;
    }

    //Pax-wise Bed Allocation

    public function _R60(){
        $result = "Adult: ".$this->_1A();
        return $result;
    }
    public function _R61(){
        $result = "Child: ".$this->_1B();
        return $result;
    }
    public function _R62(){
        $result = "Infant: ".$this->_1C();
        return $result;
    }
    public function _R63(){
        $result = "DB: ".$this->_27A()." | EB: ".$this->_27J();
        if($this->_27B() > 0) {
            $result = $result." | SGL Room: ".$this->_27B();
        }
        return $result;
    }

    public function _R64(){
        $result = "DB: ".$this->_27E() + " | EB: ". $this->_27Q(). " | SB: ".$this->_27O();
        return $result;
    }

    public function _R65(){
        $result = "DB: ".$this->_27H() + " | EB: ". $this->_27S(). " | SB: ".$this->_27L();
        return $result;
    }

    //Tariff – Slab Rate Basis
    public function _R80(){
        $result = "";
        if($this->_R40() > 0) {
            $result = $this->_R40(). " X ";
            if($this->_5A() > 0) {
                $result = $result.$this->_5A();
            }
            else {
                $result = $result.$this->_4A();
            }
        }
        return $result;
    }

    public function _R81(){
        $result = "";
        if($this->_R41() > 0) {
            $result = $this->_R41(). " X ";
            if($this->_5B() > 0) {
                $result = $result.$this->_5B();
            }
            else {
                $result = $result.$this->_4B();
            }
        }
        return $result;
    }

    public function _R82(){
        $result = "";
        if($this->_R42() > 0) {
            $result = $this->_R42(). " X ";
            if($this->_5C() > 0) {
                $result = $result.$this->_5C();
            }
            else {
                $result = $result.$this->_4C();
            }
        }
        return $result;
    }
    public function _R83(){
        $result = "";
        if($this->_R43() > 0) {
            $result = $this->_R43(). " X ";
            if($this->_5D() > 0) {
                $result = $result.$this->_5D();
            }
            else {
                $result = $result.$this->_4D();
            }
        }
        return $result;
    }
    public function _R84(){
        $result = "";
        if($this->_R44() > 0) {
            $result = $this->_R44(). " X ";
            if($this->_5E() > 0) {
                $result = $result.$this->_5E();
            }
            else {
                $result = $result.$this->_4E();
            }
        }
        return $result;
    }


    public function _R85(){
        $result = "";
        if($this->_27L() > 0) {
            $result = $this->_27L()." Infant";
        }
        return $result;
    }

    public function _R86(){
        $result = $this->_R55();
        return $result;
    }

    //Tariff – Lumpsum Basis
    public function _R87(){
        return  $this->_R40();
    }
    public function _R88(){
        return  $this->_R41();
    }
    public function _R89(){
        return  $this->_R42();
    }
    public function _R90(){
        return  $this->_R43();
    }
    public function _R91(){
        return  $this->_R44();
    }
    public function _R92(){
        $result = "";
        if($this->_27L()) {
            $result = $this->_27L()." Infant";
        }
        return $result;
    }
    public function _R93(){
        $result = "";
        if($this->_5F()) {
            $result = $this->_5F();
        }
    }
}
