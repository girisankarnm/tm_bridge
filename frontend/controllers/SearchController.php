<?php

namespace frontend\controllers;

use frontend\models\operator\EnquiryPropertySelection;
use frontend\models\operator\PropertyFavourite;
use frontend\models\Destination;
use frontend\models\Enquiry\EnquiryAccommodation;
use frontend\models\operator\EnquiryRoomSelection;
use frontend\models\property\Amenity;
use frontend\models\Enquiry\Enquiry;
use frontend\models\Enquiry\EnquiryGuestCountChildAge;
use frontend\models\property\PropertyAmenity;
use frontend\models\property\PropertyCategory;
use frontend\models\property\PropertyMealPlan;
use frontend\models\property\PropertyParking;
use frontend\models\property\PropertyRestaurant;
use frontend\models\property\PropertyRoomView;
use frontend\models\property\PropertySwimmingPool;
use frontend\models\property\PropertyType;
use frontend\models\property\RoomAmenity;
use frontend\models\Tariff\Rooming;
use frontend\models\property\RoomType;
use Yii;
use yii\db\Exception;
use yii\db\Query;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;
use yii\web\Controller;
use frontend\models\property\Property;
use frontend\models\property\Room;
use function Couchbase\defaultDecoder;
use yii\data\Pagination;


class SearchController extends Controller
{

    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    function cmp($a, $b){
        return (max(array_column($a['sizes'], 'weight')) <=>
            max(array_column($b['sizes'], 'weight'))) * -1;
    }
    public function actionCreate()
    {
        $this->layout = 'main-search';
        $request = Yii::$app->request;

        $enquiry_id = $request->get('enquiryID');
        if ($request->isPost) {
            $enquiry_id = $request->post('enquiryID');
        }
//        $enquiry_id = 1 ;
        $EnquiryFromList = Enquiry::find()->where(['id' => $enquiry_id])->one();


        $propertyTypes = PropertyType::find()->all();
        $propertyRatings = PropertyCategory::find()->all();
        $roomTypes = RoomType::find()->all();
        $roomViews = PropertyRoomView::find()->all();
        $foodTypes = PropertyMealPlan::find()->all();
        $propertyAmenities = Amenity::find()->where(['display_level_id' => [1, 3]])->all();
        $roomAmenities = Amenity::find()->where(['display_level_id' => [2, 3]])->all();


        $EnquiryDestinationID = array();
        $EnquiryDestinations = array();

        $r = 0;
        foreach ($EnquiryFromList->enquiryAccommodations as $destination) {
            if (!in_array($destination->destination->id, $EnquiryDestinationID)) {
                array_push($EnquiryDestinationID, $destination->destination->id);
                $EnquiryDestinations[$r]['id'] = $destination->destination->id;
                $EnquiryDestinations[$r]['name'] = $destination->destination->name;
                $r++;
            }
        }
        $property_destination_name = "";
        $property_destination = $request->post('destination', '');
        $property_type = $request->post('property_type', '');
        $property_rating = $request->post('property_rating', '');
        $room_type = $request->post('room_type', '');
        $room_view = $request->post('room_view', '');
        $food_type = $request->post('food_type', '');
        //TODO: Occupancy default is set to 1
        $occupancy = $request->post('Occupancy', 1);

        $property_aminity = $request->post('property_amenity', '');           //[1];
        $swimmingpool_aminity = $request->post('swimming_pool', null);
        $restaurant_aminity = $request->post('restaurant', null);; //true
        $parking_aminity = $request->post('parking', null);;  //true
        $room_aminity = $request->post('room_amenity', '');  //[3]
        $enquiry_accommodation = $request->post('accommodation_id', '');
        $searchKeywords =  $request->post('search_property', '');
        $pageNo =  $request->post('page_no', 1);
        $TotalPages = "" ;
//        return $this->asJson($searchKeywords);

        $searchResult = array();
        $resultType = 0; // Initial load page status
        $enqDestinationAccommodation = array();
        $selectedEnqAccommodation = array();
        $pagination = new Pagination(['totalCount' => 0]);
        if ($request->isPost && $property_destination != null) {

            //Destination Name for display
            $property_destination_name = Destination::find()->where(['id'=>$property_destination])->one()->name;

            $enqDestinationAccommodation = EnquiryAccommodation::find()->where(['enquiry_id' => $enquiry_id, 'destination_id' => $property_destination])->all();
            $selectedEnqAccommodation = EnquiryAccommodation::find()->where(['id' => $enquiry_accommodation])->all();
            $resultType = 1;   // Search result status

            $tableName = Room::tableName();
            $swimmingPoOl = PropertySwimmingPool::tableName();
            $tableAminity = PropertyAmenity::tableName();
            $tableParking = PropertyParking::tableName();
            $tableRestaurant = PropertyRestaurant::tableName();
            $tableRoomAminity = RoomAmenity::tableName();


            $subQuerySwimmingPool = (new Query())->select('*')->from($swimmingPoOl . ' t2')->where('t1.property_id=t2.property_id');
            $subQueryParking = (new Query())->select('*')->from($tableParking . ' t4')->where('t1.property_id=t4.property_id');
            $subQueryRestaurant = (new Query())->select('*')->from($tableRestaurant . ' t5')->where('t1.property_id=t5.property_id');


            $subQueryAminity = (new Query())->select('*')->from($tableAminity . ' t3')->where('property_id=t3.property_id');
            $subQueryRoomAminity = (new Query())->select('*')->from($tableRoomAminity . ' t6')->where('room_id=t6.room_id');


            $Rooms = Room::find()->from($tableName . ' t1')->joinWith('property')->Where(['=', 'property.destination_id', $property_destination]);


            if (($searchKeywords) && ($searchKeywords != null)) {
                $Rooms->andWhere(['like', 'property.name', $searchKeywords]);
            }
            if (($property_type) && ($property_type != null)) {
                $Rooms->andWhere(['property_type_id' => $property_type]);
            }
            if (($property_rating) && ($property_rating != null)) {
                $Rooms->andWhere(['like', 'property.property_category_id', $property_rating]);
            }
            if (($room_type) && ($room_type != null)) {
                $Rooms->andWhere(['type_id' => $room_type]);
            }
            if (($room_view) && ($room_view != null)) {
                $Rooms->andWhere(['view_id' => $room_view]);
            }
            if (($food_type) && ($food_type != null)) {
                $Rooms->andWhere(['meal_plan_id' => [1, 2],]);
            }
            if (($occupancy) && ($occupancy != null)) {
                $Rooms->andWhere(['>', '(number_of_adults + number_of_extra_beds)', $occupancy]);
            }
            if (($property_aminity) && ($property_aminity != null)) {

                $Rooms->joinWith(['property.propertyAmenities' => function ($query) {
                    $query->from(PropertyAmenity::tableName() . ' c2');
                }], true, 'INNER JOIN')
                    ->andFilterWhere(['in', 'c2.amenity_id', $property_aminity])
                    ->having($subQueryAminity->count() . '>=' . count($property_aminity));
            }
            if (($swimmingpool_aminity) && ($swimmingpool_aminity != null)) {

                $Rooms->andwhere(['exists', $subQuerySwimmingPool]);
            }
            if (($parking_aminity) && ($parking_aminity != null)) {
                $Rooms->andwhere(['exists', $subQueryParking]);
            }
            if (($restaurant_aminity) && ($restaurant_aminity != null)) {
                $Rooms->andwhere(['exists', $subQueryRestaurant]);
            }
            if (($room_aminity) && ($room_aminity != null)) {
                // $q->from(RoomAmenity::tableName() . ' c1' ) is to define alias for roomAmenities
                $Rooms->joinWith(['roomAmenities' => function ($query) {
                    $query->from(RoomAmenity::tableName() . ' c1');
                }], true, 'INNER JOIN')
                    ->andFilterWhere(['in', 'c1.amenity_id', $room_aminity])
                    ->having($subQueryRoomAminity->count() . '>=' . count($room_aminity));
            }

//            $count = $Rooms->count();

            // create a pagination object with the total count
//            $pagination = new Pagination(['totalCount' => $count,'defaultPageSize' => 3]);
//            return $this->asJson($pagination->limit);

//            return $this->asJson($start_from);
            // limit the query using the pagination and retrieve the articles
            $totalProps =   clone $Rooms;
            $totalPropID =   $totalProps->groupBy(['property_id'])->select('property_id')->column();
//            $TotalPages = count($totalPropID);
            $limit = 2 ;
            // Number of pages required.
            $TotalPages = ceil(count($totalPropID) / $limit);

            $start_from = ($pageNo-1) * $limit;

            $totalPropID =  array_slice($totalPropID,$start_from,$limit);


            $Rooms = $Rooms->where(['property_id' => $totalPropID])->all();
//            $Rooms = $Rooms->all();
//        return $this->asJson($totalPropID);

            $enquiry = Enquiry::find()->where(['id' => $enquiry_id])->with(['enquiryAccommodations' => function ($query) use ($property_destination, $enquiry_accommodation) {
                $query->Where(['destination_id' => $property_destination])->andwhere(['id' => $enquiry_accommodation]);
            }])->one();
            $EnquiryMinChildAgeArray = array();
            foreach ($enquiry->enquiryAccommodations as $enquiryAccommodation) {
                $guestCountPlan = $enquiryAccommodation->guestCountPlan;
                $MinChildAge = array();

                foreach ($guestCountPlan->enquiryGuestCountChildAges as $childAge) {
                    $MinChildAge[] = $childAge->age;
                }
                if (!empty($MinChildAge)) {
                    array_push($EnquiryMinChildAgeArray, min($MinChildAge));
                }

            }
            $EnquiryMinChildAge = null;
            if (!empty($EnquiryMinChildAgeArray)) {
                $EnquiryMinChildAge = min($EnquiryMinChildAgeArray);
            }
//        return $this->asJson($EnquiryMinChildAge);
            $searchResult = array();
            $j = 0;
            foreach ($Rooms as $key => $Room) {


                $ageRestriction = $Room->restricted_for_child_below_age;
                if ($Room->child_policy_same_as_property == 1) {
                 // if child age policy is same as property
                    $ageRestriction = $Room->property->restricted_for_child_below_age;
                }

                if ($EnquiryMinChildAge > $ageRestriction) {
                    $property = $Room->property;
                    $totalRate = 0;
                    $totalRackRate = 0;
                    $roomselectionStatus = array();
                    $count = count($enquiry->enquiryAccommodations);
                    $mandatoryDinner = false ;
                    foreach ($enquiry->enquiryAccommodations as $i => $enquiryAccommodation) {

                        $guestCount = $enquiryAccommodation->guestCountPlan;
                        $enqMealplan = $enquiryAccommodation->mealPlan->name;
//                      $guestCount = $enquiry->enquiryAccommodation[1]->guestCountPlan;
                        $totalGuestCount = $guestCount->adults + $guestCount->children;
                        $property = $Room->property;
                        $childCount = 0;
                        $adultCount = $guestCount->adults;
                        $infantCount = 0;
                        $Day = $enquiryAccommodation->day;
                        $nationality_id = $enquiry->nationality_id;


//                        if ($guestCount->children != 0) {
//                            $property_child_rate_from_age = $property->child_rate_from_age;
//                            $property_child_rate_to_age = $property->child_rate_to_age;
//
//                            $property_adult_rate_age = $property->adult_rate_age;
//
//                            foreach ($guestCount->enquiryGuestCountChildAge as $childAgeEnquiry) {
//
//                                //Apply Property Child Policy
//
//                                $PolicyOutput = $this->CheckProperyChild($property_child_rate_from_age, $property_child_rate_to_age, $property_adult_rate_age, $childAgeEnquiry->age);
//
//                                if ($PolicyOutput === 1) {
//
//                                    $childCount = $childCount + $childAgeEnquiry->count;
//
//                                } else if ($PolicyOutput === 2) {
//                                    $adultCount = $adultCount + $childAgeEnquiry->count;
//                                } else {
//                                    $infantCount = $infantCount + $childAgeEnquiry->count;
//                                }
//                            }
//
//                        }
//                        $enquiryRoomitems['room_id'] = $Room->id;
//                        $enquiryRoomitems['property_id'] = $property->id;
//                        $enquiryRoomitems['childCount'] = $childCount;
//                        $enquiryRoomitems['adultCount'] = $adultCount;
//                        $enquiryRoomitems['infantCount'] = $infantCount;
//                        $enquiryRoomitems['totalGuestCount'] = $totalGuestCount;
//                        $enquiryRoomitems['day'] = $Day;
//                        $enquiryRoomitems['nationality_id'] = $nationality_id;
//                    return $this->asJson($enquiryRoomitems);
                        $rooming = new Rooming();
//                        $rooming->SetAdultChildInfant($adultCount, $childCount, $infantCount);
//                    $rooming->SetRoomBedRequirement($enquiry_no_rooms, $enquiry_eba, $enquiry_cwb, $enquiry_cnb, $enquiry_single);
                        $rooming->initialize($Day, $nationality_id, $Room->id, $property->id, $enquiry_id, $rate_type = 1);
                        $rooming->_R55();
//                    $rooming->_R40();
                        $totalRate = $totalRate + $rooming->_R55();
//                    return $this->asJson($rooming->_26C());

                        $searchResult[$property->name]['property'] = $Room->property;

                        //Check Favourite
                        //TODO: Operator ID
                        $operatorID = 1;
                        $favouriteProperty = PropertyFavourite::find()->where(['property_id' => $property->id])->andWhere(['operator_id' => $operatorID])->one();
                        $favouriteStatus = false;
                        if ($favouriteProperty) {
                            $favouriteStatus = true;
                        }

                        if ($rooming->N9() != 0){
                            $mandatoryDinner  = true;
                        }

                        $searchResult[$property->name]['favourite'] = $favouriteStatus;
                        $searchResult[$property->name]['man_dinner'] = $mandatoryDinner;

                        $searchResult[$property->name]['property_rooms'][$j]['RoomDetails'] = $Room;
                        $searchResult[$property->name]['property_rooms'][$j]['total_rate'] = $totalRate; //number_format($totalRate);
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['date'] = $Day;
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['enquiry_meal_plan'] = $enqMealplan;
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['tariff_meal_plan'] = $rooming->N3A();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['slab_id'] = $rooming->_4A1();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['meal_plan_over_ride'] = $rooming->N3B();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['mandatory_dinner'] = $rooming->N9();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['lowestRate'] = $rooming->_R55();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['room'] = $rooming->_R80();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['room_value'] = $rooming->_4A();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['EBA'] = $rooming->_R81();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['EBA_value'] = $rooming->_4B();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['CWB'] = $rooming->_R82();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['CWB_value'] = $rooming->_4C();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['CNB'] = $rooming->_R83();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['CNB_value'] = $rooming->_4D();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['SGL'] = $rooming->_R84();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['SGL_value'] = $rooming->_4E();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['FOC'] = $rooming->_R85();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['Total'] = $rooming->_R86();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['room_mouse_over'] = $rooming->_4A_MO_1();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['eba_mouse_over'] = $rooming->_4B_MO_1();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['cwb_mouse_over'] = $rooming->_4C_MO_1();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['cnb_mouse_over'] = $rooming->_4D_MO_1();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['sgl_mouse_over'] = $rooming->_4E_MO_1();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['room_day_hike_mouse_over'] = $rooming->_4A_MO_2();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['eba_day_hike_mouse_over'] = $rooming->_4B_MO_2();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['cwb_day_hike_mouse_over'] = $rooming->_4C_MO_2();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['cnb_day_hike_mouse_over'] = $rooming->_4D_MO_2();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['sgl_day_hike_mouse_over'] = $rooming->_4E_MO_2();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['meal_plan_adult_mouse_over'] = $rooming->N3C();
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['meal_plan_child_mouse_over'] = $rooming->N3D();

                        // Policy Applied Adult,Child and Infant Count
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['infantCount'] = $rooming->_1C() ? $rooming->_1C():0;
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['ChildCount'] = $rooming->_1B() ? $rooming->_1B():0;
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['AdultCount'] = $rooming->_1A() ? $rooming->_1A():0;

                        //Enquiry Adult and Child Count
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['EnquiryAdultCount'] = $guestCount->adults;
                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['EnquiryChildCount'] = $guestCount->children;

                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['enquiryAccommodation_id'] = $enquiryAccommodation->id;

                        // Check if room is selected for this enquiry for this day
                        $SelectedenquiryRooms = EnquiryRoomSelection::find()->where(['room_id' => $Room->id, 'enquiry_accommodation_id' => $enquiryAccommodation->id])->one();


                        if ($SelectedenquiryRooms) {
                            $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['selected'] = 0;
                            if (!in_array(0, $roomselectionStatus)) {
                                array_push($roomselectionStatus, 0);
                            }

                        } else {
                            $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['selected'] = 1;

                            if (!in_array(1, $roomselectionStatus)) {
                                array_push($roomselectionStatus, 1);
                            }
                        }

                        if ($i == $count - 1) {
                            // process last element
                            if (count($roomselectionStatus) == 2) {
                                $searchResult[$property->name]['property_rooms'][$j]['selectionStatus'] = 2; //Partially Selacted
                            } else {
                                foreach ($roomselectionStatus as $status) {

                                    if ($status == 0) {
                                        $searchResult[$property->name]['property_rooms'][$j]['selectionStatus'] = 1; //All Selected
                                    } else {
                                        $searchResult[$property->name]['property_rooms'][$j]['selectionStatus'] = 0; //None Selected

                                    }

                                }

                            }

                        }


                        $rooming->initialize($Day, $nationality_id, $Room->id, $property->id, $enquiry_id, $rate_type = 0);
                        $rooming->_R55();
//                    $rooming->_R40();
                        $totalRackRate = $totalRackRate + $rooming->_R55();
                        $searchResult[$property->name]['property_rooms'][$j]['total_rack_rate'] = number_format($totalRackRate);
                    }


                    $j++;
                }


            }

        }

        // Count of all seleEnquiryRoomSelection.php
        //EnquiryPropertySelection.phpcted property in this destination
        $SelectedenquiryRooms = EnquiryRoomSelection::find()->where(['enquiry_id' => $enquiry_id])
            ->joinWith('enquiryAccommodation')->Where(['=', 'destination_id', $property_destination])->all();


        $selected_props = array();
        foreach ($SelectedenquiryRooms as $SelectedenquiryRoom) {
            if (!in_array($SelectedenquiryRoom->property_id, $selected_props)) {
                array_push($selected_props, $SelectedenquiryRoom->property_id);
            }
        }
        $totalPropSelected = count($selected_props);

//foreach ($searchResult as $prop){
////    return $this->asJson($prop);
//    foreach ($prop['property_rooms'] as $rooms){
//        return $this->asJson($rooms['selectionStatus']);
//    }
//
//}
//

        $SortType = $request->post('sort_property', 'F');


      if (($SortType) && $SortType == 'F') {
          // Sort by favourite
          $F = $this->SortByFavourites($searchResult);
          array_multisort($F, SORT_DESC, $searchResult);
      }

        if (($SortType) && $SortType == 'HP') {
            //Sort by Price
            //For Descending  order
            usort($searchResult, function ($a, $b) {
                return max(array_column($b['property_rooms'], 'total_rate')) <=>
                    max(array_column($a['property_rooms'], 'total_rate'));
            });

        }
        if (($SortType) && $SortType == 'LP') {
            //For Ascending   order Price
            usort($searchResult, function ($a, $b) {
                return (max(array_column($a['property_rooms'], 'total_rate')) <=>
                        max(array_column($b['property_rooms'], 'total_rate'))) * -1;
            });
        }

        if (($SortType) && (($SortType == 'HS') || ($SortType == 'LS'))) {
//            return $this->asJson($SortType);

            // Sort by property star rating/category
            // SORT_DESC - High to Low
            // SORT_ASC - Low to High
            $R = $this->SortByRating($searchResult);
            if ($SortType == 'HS'){
                array_multisort($R, SORT_DESC, $searchResult);
            }else{
                array_multisort($R, SORT_ASC, $searchResult);
            }
        }

//        return $this->asJson($searchResult);
//        return $this->render('index', ['searchResult' => $searchResult, 'EnquiryID' => $enquiry->id]);

        return $this->render('enquirysearch',
            ['searchResult' => $searchResult, 'EnquiryID' => $enquiry_id,
                'enquiry' => $EnquiryFromList, 'EnquiryDestinations' => $EnquiryDestinations,
                'propertyTypes' => $propertyTypes, 'propertyRatings' => $propertyRatings,
                'roomTypes' => $roomTypes, 'roomViews' => $roomViews, 'foodTypes' => $foodTypes,
                'propertyAmenities' => $propertyAmenities, 'roomAmenities' => $roomAmenities,
                'resultType' => $resultType, 'DestinationAccommodation' => $enqDestinationAccommodation,
                'selectedEnqAccommodation' => $selectedEnqAccommodation, 'totalPropSelected' => $totalPropSelected,'property_destination_name'=>$property_destination_name,'property_destinationID'=>$property_destination,
                  'page'=>$pageNo,'TotalPages'=>$TotalPages]);
    }


    public function SortByFavourites($searchResult){

        $t = [];
        foreach ($searchResult as $key => $properties) {
            $t[$key] = $properties['favourite'];
        }
        return $t ;
    }
    public function SortByRating($searchResult){

        $R = [];
        foreach ($searchResult as $key => $properties) {
            $R[$key]['property'] = $properties['property']['property_category_id'];
        }
        return $R ;
    }

     public function SortByPrice($searchResult){

        $P = [];
        foreach ($searchResult as $key => $properties) {

            foreach ($properties['property_rooms'] as $index => $rooms){
                $p[$key]['property_rooms'][$index]['total_rate'] = $rooms['total_rate'] ;
            }
        }
        return $P ;
    }

    public function actionSelectedproperty(){

        //TODO: Fetch data if only enquiry belongs to current users owner id

        $enquiryID = Yii::$app->request->get('enquiryID');
        $destinationID = Yii::$app->request->get('destinationID');
        $nationality_id = 1;

//        $searchResult = array();


            $enquiryProperySelected = EnquiryRoomSelection::find()->where(['enquiry_id' => $enquiryID])->joinWith('property')
                ->Where(['=', 'property.destination_id', $destinationID])
                ->orderBy([
                    'day' => SORT_ASC
                ])->all();

            $propertyID = array();
            foreach ($enquiryProperySelected as $EPS) {
                if (!in_array($EPS->property_id, $propertyID)) {         //Array of selected properties
                    array_push($propertyID, $EPS->property_id);
                }
            }

            $TotalDestinationPropertyCount = Count($propertyID);     //Total Property Selected In Particular Destination


            $enquiryDestination = Enquiry::find()->where(['id' => 1])->with(['enquiryAccommodation' => function ($query) use ($destinationID) {
                $query->Where(['destination_id' => $destinationID, 'status' => 1]);
            }])->one();



            $searchResult = array();
            $j = 0;
            foreach ($enquiryProperySelected as $key => $Propselected) {



                $property = Property::find()->where(['id' => $Propselected->property_id])->one();

                $room = Room::find()->where(['id' => $Propselected->room_id])->one();
                $destinationName = $property->destination->name;
                $childCount = $Propselected->hotel_policy_pax_count_child;
                $adultCount = $Propselected->hotel_policy_pax_count_adult;
                $infantCount = $Propselected->hotel_policy_pax_count_infant;


                $Day = $Propselected->day;

                // Apply Rooming Procedure to get lowest rate

                $rooming = new Rooming();

                $rooming->initialize($Day, $nationality_id, $room->id, $property->id,$enquiryID, $rate_type = 1);
                $rooming->SetAdultChildInfant($adultCount, $childCount, $infantCount);


                //Check Favourite
                //TODO: Operator ID
                $operatorID = 1;
                $favouriteProperty = PropertyFavourite::find()->where(['property_id' => $property->id])->andWhere(['operator_id' => $operatorID])->one();
                $favouriteStatus = false;
                if ($favouriteProperty) {
                    $favouriteStatus = true;
                }


                $searchResult[$destinationName]['property'][$property->name]['day'][$Propselected->day]['room_details'][$j]['room'] = $room;

                $searchResult[$destinationName]['property'][$property->name]['property_details'] = $property;

                $searchResult[$destinationName]['property'][$property->name]['favourite'] = $favouriteStatus;

                $searchResult[$destinationName]['property'][$property->name]['day'][$Propselected->day]['room_details'][$j]['rooming']['lowest_rate'] =  $rooming->_R55();
                $searchResult[$destinationName]['property'][$property->name]['day'][$Propselected->day]['room_details'][$j]['rooming']['tariff_meal_plan'] =  $rooming->N3A();
                $searchResult[$destinationName]['property'][$property->name]['day'][$Propselected->day]['room_details'][$j]['rooming']['meal_plan_over_ride'] =  $rooming->N3B();

                $searchResult[$destinationName]['property'][$property->name]['day'][$Propselected->day]['room_details'][$j]['rooming']['select_id'] =  $Propselected->id;
                $searchResult[$destinationName]['destination']['property_count'] = $TotalDestinationPropertyCount;

                $j++;
            }


        return $this->render('selectedproperty',['searchResult' => $searchResult]);
    }
    public function actionDeleteselectedroom(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $request = \Yii::$app->request;

        $selectedroomID = $request->post('id');

        $selectedRoom = EnquiryRoomSelection::find()->where(['id' => $selectedroomID])->one();

        $selectedRoom->delete();

        return array('status' => 0, 'message' => "Data Deleted Successfully");
    }




    public function CheckProperyChild($P_Chld_Age_F, $P_Chld__Age_T, $P_Adult_Age, $E_Chld_Age)
    {
        if (($P_Chld_Age_F <= $E_Chld_Age) && ($E_Chld_Age <= $P_Chld__Age_T)) {

            $AgeBarrier = 1;  // Child
        } elseif (($P_Adult_Age <= $E_Chld_Age)) {

            $AgeBarrier = 2;  // Adult

        } else {
            $AgeBarrier = 3;  // Infant
        }
        return $AgeBarrier;
    }

    public function actionDestinationdates()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $enquiryID = Yii::$app->request->get('enquiry_id');
        $destinationID = Yii::$app->request->get('destination_id');

        $enquiryAccommodation = EnquiryAccommodation::find()->where(['enquiry_id' => $enquiryID, 'destination_id' => $destinationID])->all();

        return array('status' => 0, 'data' => $enquiryAccommodation);

    }

    public function actionDeleteselectedrooms()
    {

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $enquiryID = json_decode(Yii::$app->request->post('enquiry_id'));
        $roomID = json_decode(Yii::$app->request->post('room_id'));
        $AccommodationID = json_decode(Yii::$app->request->post('AccommodationID'));

        $room = Room::find()->where(['id' => $roomID])->one();

        $selectedRoom = EnquiryRoomSelection::find()->where(['enquiry_id' => $enquiryID])->andWhere(['room_id' => $roomID])->andWhere(['enquiry_accommodation_id' => $AccommodationID])->one();
        $selectedRoom->delete();

        $selectedRoomDeleteCheck = EnquiryRoomSelection::find()->where(['enquiry_id' => $enquiryID])->andWhere(['property_id' => $room->property->id])->all();

        if (!$selectedRoomDeleteCheck) {
            $enqPropSelected = EnquiryPropertySelection::find()->where(['enquiry_id' => $enquiryID])->andWhere(['property_id' => $room->property->id])->one();
            $enqPropSelected->delete();
        }
        return array('status' => 0, 'message' => "Selected Room Deleted!");

    }

    public function actionEnquirysingleroomselectioncreate()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $enquiryID = json_decode(Yii::$app->request->post('enquiry_id'));
        $roomID = json_decode(Yii::$app->request->post('room_id'));
        $infant_count = json_decode(Yii::$app->request->post('infant_count'));
        $child_count = json_decode(Yii::$app->request->post('child_count'));
        $adultCount = json_decode(Yii::$app->request->post('adultCount'));
        $AccommodationID = json_decode(Yii::$app->request->post('AccommodationID'));
        $slab_id = json_decode(Yii::$app->request->post('slab_id'));
        $Room = json_decode(Yii::$app->request->post('room'));
        $eba = json_decode(Yii::$app->request->post('eba'));
        $cwb = json_decode(Yii::$app->request->post('cwb'));
        $cnb = json_decode(Yii::$app->request->post('cnb'));
        $sgl = json_decode(Yii::$app->request->post('sgl'));
        $room = Room::find()->where(['id' => $roomID])->one();

        $transaction = Yii::$app->db->beginTransaction();
        try
        {

        $enquiryRoomSelected = new EnquiryRoomSelection();
        $enquiryRoomSelected->enquiry_id = $enquiryID;
        $enquiryRoomSelected->room_id = $roomID;
        $enquiryRoomSelected->property_id = $room->property->id;

        $enquiry_accommodation = EnquiryAccommodation::find()
            ->where(['id' => $AccommodationID])
            ->one();
        $enquiryRoomSelected->enquiry_accommodation_id = $AccommodationID;
        $enquiryRoomSelected->day = $enquiry_accommodation->day;
        $enquiryRoomSelected->status = 0;
        $enquiryRoomSelected->hotel_policy_pax_count_adult = $adultCount;
        $enquiryRoomSelected->hotel_policy_pax_count_child = $child_count;
        $enquiryRoomSelected->hotel_policy_pax_count_infant = $infant_count;
        $enquiryRoomSelected->rooming_mode = 1; //Auto Rooming
        $enquiryRoomSelected->room = $Room;
        $enquiryRoomSelected->eba = $eba;
        $enquiryRoomSelected->cwb = $cwb;
        $enquiryRoomSelected->cnb = $cnb;
        $enquiryRoomSelected->sgl = $sgl;
        $enquiryRoomSelected->slab_id = 1; //$slab_id;
        $enquiryRoomSelected->save();

        //Property Selection table save
            $enqPropSelected = EnquiryPropertySelection::find()->where(['enquiry_id' => $enquiryID])->andWhere(['property_id' => $room->property->id])->one();
            if (!$enqPropSelected) {
                $enquiryPropertyselected = new EnquiryPropertySelection();
                $enquiryPropertyselected->enquiry_id = $enquiryID;
                $enquiryPropertyselected->status = 0;
                $enquiryPropertyselected->property_id = $room->property->id;
                $enquiryPropertyselected->hotel_policy_pax_count_adult = $adultCount;
                $enquiryPropertyselected->hotel_policy_pax_count_child = $child_count;
                $enquiryPropertyselected->hotel_policy_pax_count_infant = $infant_count;
                $enquiryPropertyselected->save();
            }

            $transaction->commit();
        } catch (\Exception $e) {
            $transaction->rollBack();
            throw $e;
        } catch (\Throwable $e) {

            $transaction->rollBack();
            throw $e;
        }

        return array('status' => 0, 'message' => "Room for this day selected !", 'data' => $enquiryRoomSelected);
    }

    public function actionEnquiryroomselectioncreate()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $accommodation_policy = json_decode(Yii::$app->request->post('accommodation_policy'));
        $enquiryID = json_decode(Yii::$app->request->post('enquiry_id'));
        $roomID = json_decode(Yii::$app->request->post('room_id'));
        $destinationID = json_decode(Yii::$app->request->post('destination_id'));

        $accommodation_ids = array();
        foreach ($accommodation_policy as $A) {
            array_push($accommodation_ids, $A->accommodation_id);
        }

        $SelectedenquiryRooms = EnquiryRoomSelection::find()->where(['room_id' => $roomID])->select('enquiry_accommodation_id')->asArray()->all();

        $SelectedenquiryRoomAccom_ids = array();

        foreach ($SelectedenquiryRooms as $SelectedenquiryRoom) {

            array_push($SelectedenquiryRoomAccom_ids, $SelectedenquiryRoom['enquiry_accommodation_id']);
        }

        $checkExistingSelectedRoom = count(array_intersect($accommodation_ids, $SelectedenquiryRoomAccom_ids));


        if ($checkExistingSelectedRoom > 0) {
            return array('status' => 1, 'message' => "This Room is already selected for this dates", 'data' => $checkExistingSelectedRoom);
        }

        $room = Room::find()->where(['id' => $roomID])->one();

        // Total property selected exceed 10 validation

        // Count of all selected property in this destination
        $SelectedenquiryRooms = EnquiryRoomSelection::find()->where(['enquiry_id' => $enquiryID])
            ->joinWith('enquiryAccommodation')->Where(['=', 'destination_id', $destinationID])->all();
        $selected_props = array();
        foreach ($SelectedenquiryRooms as $SelectedenquiryRoom) {
            if (!in_array($SelectedenquiryRoom->property_id, $selected_props)) {
                array_push($selected_props, $SelectedenquiryRoom->property_id);
            }
        }
        $totalPropSelected = count($selected_props);
        $currentSelectedProperty = $room->property->id;
        $CurrentSelectedPropertyExist = in_array($currentSelectedProperty, $selected_props);
         if (($totalPropSelected == 10) && ($CurrentSelectedPropertyExist == false)){
             return array('status' => 2, 'message' => "Total property selection limit exceeded");

         }

        $transaction = Yii::$app->db->beginTransaction();
        try
        {
            $enqPropSelected = EnquiryPropertySelection::find()->where(['enquiry_id' => $enquiryID])->andWhere(['property_id' => $room->property->id])->one();
//            if (!$enqPropSelected) {
//                return array('status' => 3, 'message' => "no props",'data'=>$room->property);
//            }
//

            foreach ($accommodation_policy as $AP) {

            $enquiryRoomSelected = new EnquiryRoomSelection();
            $enquiryRoomSelected->enquiry_id = $enquiryID;
            $enquiryRoomSelected->room_id = $roomID;
            $enquiryRoomSelected->property_id = $room->property->id;

            $enquiry_accommodation = EnquiryAccommodation::find()
                ->where(['id' => $AP->accommodation_id])
                ->one();
            $enquiryRoomSelected->enquiry_accommodation_id = $AP->accommodation_id;
            $enquiryRoomSelected->day = $enquiry_accommodation->day;
            $enquiryRoomSelected->status = 0;
            $enquiryRoomSelected->hotel_policy_pax_count_adult = $AP->adultCount;
            $enquiryRoomSelected->hotel_policy_pax_count_child = $AP->child_count;
            $enquiryRoomSelected->hotel_policy_pax_count_infant = $AP->infant_count;
            $enquiryRoomSelected->rooming_mode = 1; //Auto Rooming
            $enquiryRoomSelected->slab_id = 1; // $AP->slab_id;
            $enquiryRoomSelected->room = $AP->room;
            $enquiryRoomSelected->eba = $AP->eba;
            $enquiryRoomSelected->cwb = $AP->cwb;
            $enquiryRoomSelected->cnb = $AP->cnb;
            $enquiryRoomSelected->sgl = $AP->sgl;
            $enquiryRoomSelected->save();

            //Property Selection table save
            $enqPropSelected = EnquiryPropertySelection::find()->where(['enquiry_id' => $enquiryID])->andWhere(['property_id' => $room->property->id])->one();
            if (!$enqPropSelected) {
                $enquiryPropertyselected = new EnquiryPropertySelection();
                $enquiryPropertyselected->enquiry_id = $enquiryID;
                $enquiryPropertyselected->status = 0;
                $enquiryPropertyselected->property_id = $room->property->id;
                $enquiryPropertyselected->hotel_policy_pax_count_adult = $AP->adultCount;
                $enquiryPropertyselected->hotel_policy_pax_count_child = $AP->child_count;
                $enquiryPropertyselected->hotel_policy_pax_count_infant = $AP->infant_count;
                $enquiryPropertyselected->save();
//                if (! $enquiryPropertyselected->save()) {
//                    throw new Exception($enquiryPropertyselected->errors);
//                }
            }
        }
            $transaction->commit();
        } catch (\Exception $e) {
            $transaction->rollBack();
            throw $e;
        } catch (\Throwable $e) {

            $transaction->rollBack();
            throw $e;
        }
        return array('status' => 0, 'message' => "Room with dates saved !", 'data' => $accommodation_policy);

    }

    public function actionMakepropertyfavourite(){
        // Todo:// Get Operator ID from current users parent ID

        $operatorID  = 1 ;
        $request = Yii::$app->request ;
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $property_id = $request->post('property_id');
        $favouriteProperty = PropertyFavourite::find()->where(['property_id' => $property_id])->andWhere(['operator_id' => $operatorID])->one();


        if ($favouriteProperty){
            $favouriteProperty->delete();
            return array('status' => 1, 'message' => "Property removed as favourite");
        }else{
            $favouriteProperty =   new PropertyFavourite();
            $favouriteProperty->property_id =$property_id;
            $favouriteProperty->operator_id =$operatorID;
            $favouriteProperty->save();
            return array('status' => 0, 'message' => "Property added as favourite");

        }

    }

}
