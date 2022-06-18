<?php

namespace frontend\models\tariff;

use Yii;
use yii\base\Model;
use frontend\models\tariff\MotherDateRange;
use frontend\models\tariff\TariffDateRange;
use Carbon\Carbon;

class DateRange extends Model{
    public $id;
    public $property_id;
    //public $room_id;
    public $from_date;
    public $to_date;
    private $errorMessage;
    public $parent;

    function __construct() {
        $this->from_date = Carbon::parse(Carbon::now()->addDays(1))->format('d M Y');
        $this->to_date = Carbon::parse(Carbon::now()->addDays(5))->format('d M Y');       
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'id','from_date', 'to_date', 'property_id','parent'], 'required'],            
        ];
    }

    public function setLastError($errorMessage) {
       $this->errorMessage = $errorMessage;
    }

    public function getLastError() {
        return $this->errorMessage;
    }
    public function isValidMotherDateRange() {
        $this->errorMessage = "";

        $from_date = Carbon::createFromFormat('d M Y', $this->from_date)->toDateString();
        $to_date = Carbon::createFromFormat('d M Y', $this->to_date)->toDateString();

        
        $mother_ranges = TariffDateRange::find()
        ->where(['property_id' => $this->property_id])
        ->andWhere(['parent' => 0])
        ->andWhere(['!=', 'id', $this->id])
        ->all();
        $bValid = true;

        foreach ($mother_ranges as $mother_range) 
        { 
            $stored_from_date = Carbon::createFromFormat('Y-m-d', $mother_range->from_date)->toDateString();
            $stored_to_date = Carbon::createFromFormat('Y-m-d', $mother_range->to_date)->toDateString();

            //Date mismatch - new date is equal to exisiting start/end date
            if($from_date == $stored_from_date || $from_date == $stored_to_date ||
            $to_date == $stored_from_date || $to_date == $stored_to_date
            ) {
                $bValid = false;
                $this->errorMessage .= "The date range (from/to date) already exists";
                break;
            }

            //If the new daterange is well inside existing range
            if( $from_date > $stored_from_date &&  $to_date < $stored_to_date )
            {
                $bValid = false;
                $this->errorMessage .= "New daterange is inside existing mother date range. Better to use nesting instead";
                break;
            }

            //if the new mother date cover an existing mother date
            if( $from_date < $stored_from_date &&  $to_date > $stored_to_date )
            {
                $bValid = false;
                $this->errorMessage .= "New daterange is covering an existing mother date range.";
                break;
            }

            if( ($from_date >= $stored_from_date &&  $from_date <= $stored_to_date) ||
            ($to_date >= $stored_from_date &&  $to_date <= $stored_to_date )
            )
            {
                $bValid = false;
                $this->errorMessage .= "From/to date is inside an existing mother date range";
                //$this->errorMessage .= $from_date.$to_date." | ". $stored_from_date.$stored_to_date;
                break;
            }
        }

        if( $from_date > $to_date) {
            $bValid = false;
            $this->errorMessage = "To date can't less than from date.";
        }

        if(!$bValid) {
            $this->addError("from_date", "Invalid mother date");
            $this->addError("to_date", "Invalid mother date");
        }
        else {
            $this->from_date = $from_date;
            $this->to_date = $to_date;
            $this->errorMessage = "Good to proceed";
        }

        return $bValid;
    }

    public function isValidChildDateRange($tariff_type = 1) {
        $this->errorMessage = "";
        $bValid = true;

        $from_date = Carbon::createFromFormat('d M Y', $this->from_date)->toDateString();
        $to_date = Carbon::createFromFormat('d M Y', $this->to_date)->toDateString();

        $this->from_date = $from_date;
        $this->to_date = $to_date;

        $mother_range = TariffDateRange::find()
        ->where(['property_id' => $this->property_id])
        ->andWhere(['id' => $this->parent])
        ->one();

        if($from_date > $to_date ){
            $this->errorMessage = "From date can not be higher than to date";
            $this->addError("from_date", "Invalid child date");
            $this->addError("to_date", "Invalid child date");
            return false;
        }

        if($from_date <= $mother_range->from_date || $to_date >= $mother_range->to_date) {            
            $this->errorMessage = "Child date in conflict with mother date";
            $this->addError("from_date", "Invalid child date");
            $this->addError("to_date", "Invalid child date");
            return false;
        }

        $child_ranges = TariffDateRange::find()
        ->where(['property_id' => $this->property_id])
        ->andWhere(['parent' => $this->parent])
        ->andWhere(['tariff_type' => $tariff_type])
        ->all();

        foreach ($child_ranges as $child_range) 
        { 
            $stored_from_date = Carbon::createFromFormat('Y-m-d', $child_range->from_date)->toDateString();
            $stored_to_date = Carbon::createFromFormat('Y-m-d', $child_range->to_date)->toDateString();

            //Date mismatch - new date is equal to exisiting start/end date
            if($from_date == $stored_from_date || $from_date == $stored_to_date ||
            $to_date == $stored_from_date || $to_date == $stored_to_date
            ) {
                $bValid = false;
                $this->errorMessage .= "The date range (from/to date) already exists";
                break;
            }

            if($from_date < $stored_from_date &&  $to_date > $stored_from_date && $to_date < $stored_to_date )
            {
                $bValid = false;
                $this->errorMessage .= "From/to date is inside an existing mother date range 1 ".$stored_from_date;
                break;
            }

            if ($from_date > $stored_from_date && $from_date < $stored_to_date  &&  $to_date > $stored_to_date ) {
                $bValid = false;
                $this->errorMessage .= "From/to date is inside an existing mother date range 2 ".$stored_from_date;
                break;
            }
    
        }

        if(!$bValid) {
            $this->addError("from_date", "Invalid child date");
            $this->addError("to_date", "Invalid child date");
        }
        else {
            $this->errorMessage = "Good to proceed";
        }

        return $bValid;
    }


}