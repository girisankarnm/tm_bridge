<?php

namespace frontend\models\enquiry;

use Yii;
use yii\base\Model;

class BasicDetails extends Model{
    public $id;
    public $guest_name;
    public $nationality_id;
    public $tour_start_date;
    public $tour_duration;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'id', 'guest_name', 'nationality_id', 'tour_start_date', 'tour_duration' ], 'required'],            
        ];
    }
}