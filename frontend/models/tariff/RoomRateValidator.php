<?php

namespace frontend\models\tariff;

use Yii;
use frontend\models\tariff\TariffDateRange;
use frontend\models\TariffNationalityGroupName;
use frontend\models\property\Room;
use frontend\models\property\Property;
use Carbon\Carbon;
use yii\web\NotFoundHttpException;
use yii\web\ForbiddenHttpException;

class RoomRateValidator {
    public $property;
    public $date_range;
    public $room_names;
    public $error_messages;

    public function getLastError() {
        return $this->errorMessage;
    }

    public function getLastErrorMessages() {
        return $this->error_messages;
    }

    function __construct($date_range) {
        $this->room_names = array();
        $this->error_messages = array();

        if($date_range != NULL) {
            $this->date_range = $date_range;
        }
        $this->property = $this->date_range->getProperty()->one();
        
        /* $property = NULL;       
        if ($property_id != 0) {
            $property = Property::find()
            ->where(['id' => $property_id])
            ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
            ->one();
            
            if ($property == NULL){
                throw new NotFoundHttpException("ROOM Error");
            }
            $this->property = $property;
        }
        else {
            throw new NotFoundHttpException("Property id not set");
        } */
        
    }

    public function validateProperty() {
        //$this->property
    }
    public function validateRoomTariff() {
        //ROOM TARIFF VALIDATION
        if($this->date_range == NULL) {
            array_push($this->error_messages, "Date range is NULL");
            return false;
        }

        if (count($this->date_range->roomTariffDatewises) < 0) {            
            //echo "Not defined any room tariff for date range </br>";;
            array_push($this->error_messages, "Not defined tariff for any rooms for this date range");
            return false;
        }

        if($this->property == NULL) {
            array_push($this->error_messages, "Property is NULL/Invalid");
            return false;
        }
        
        $rooms = Room::find()
        ->where(['property_id' => $this->property->id])
        ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
        ->all();
        
        if ($rooms == NULL){
            array_push($this->error_messages, "Rooms not availble/NULL/Invalid");
            return false;
        }
        
        $nationality_count = 0;
        if( !$this->property->room_tariff_same_for_all) {
            $nationalities = TariffNationalityGroupName::find()->where(['property_id' => $this->property->id])->all();
            $nationality_count = count($nationalities);
        }
           
        $bValidated = true;
        foreach($rooms as $room) {
            $tariffs = $this->date_range->getRoomTariffDatewises()->andWhere(['room_id' => $room->id])->all();
            if(count($tariffs) == 0 ) {
                //echo $room->name. ": Room tariff are not defined."."</br>";
                array_push($this->error_messages, $room->name. ": Tariff not defined.");
                $bValidated = false;
                continue;
            }

            //This should not happen as we store tariff for all nationalites together.
            if (count($tariffs) < ($nationality_count + 1)) {
                //echo $room->name. ": Tariff is not defined for all nationalities."."</br>";
                array_push($this->error_messages, $room->name. ": Tariff is not defined for all nationalities");
                $bValidated = false;
            }            
        }

        return $bValidated;
        //MEAL TARIFF VALIDATION
    }

    public function validateMealTariff() {
        if (count($this->date_range->roomTariffSupplimentMeals) == 0) {
            array_push($this->error_messages, "Meal tariff: Not defined any meal tariff for date range");
            return false;
        }

        return true;
    }

    public function validateWeekdayHike() {
        if ($this->property->have_weekday_hike) {
            if (count($this->date_range->roomTariffWeekdaywises) == 0) {
                array_push($this->error_messages,"Weekday Hike: Not defined any week day hike for date range");
                return false;
            }
        }

        return true;
    }

    public function validateMandatoryDinner() {
        //echo $this->property->provide_compulsory_inclusions;
        if ($this->property->provide_compulsory_inclusions) {
            if (count($this->date_range->roomTariffMandatoryDinners) == 0) {                            
                array_push($this->error_messages, "Mandatory dinner: Not defined any mandatory dinner for date range");
                return false;
            }
        }

        return true;
    }

    public function getRoomNames(){
        return $this->room_names;
    }

    public function validate() {
        $rooms = Room::find()
            ->where(['property_id' => $this->date_range->property_id])
            ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
            ->all();

        $bValidated = true;        
        foreach($rooms as $room) {            
            $tariffs = $this->date_range->getRoomTariffDatewises()->andWhere(['room_id' => $room->id])->all();
            if(count($tariffs) == 0 ) {
                //echo $room->name. ": Tariff are not defined."."</br>";                             
                array_push($this->room_names, $room->name);
                $bValidated = false;                            
                continue;
            }
        }
        return $bValidated;
    }
}