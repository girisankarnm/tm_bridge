<?php

namespace frontend\models\operator;

use Yii;
use yii\base\Model;
use common\models\User;
use frontend\models\PropertyType;
use frontend\models\PropertyCategory;

class BasicDetails extends Model{
    public $id;
    public $name;
    public $website;
    public $logo_image;
    public $v_card_image_front;
    public $v_card_image_back;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'id', 'name'], 'required'],
            [['website'], 'string'],
        ];
    }
}
