<?php

namespace frontend\models\property;

use Yii;
use yii\base\Model;
//use frontend\models\PropertyType;
//use frontend\models\PropertyCategory;
use frontend\models\property\PropertyCategory;
use frontend\models\property\PropertyType;

class BasicDetails extends Model{
    public $id;
    public $name;
    public $property_type_id;
    public $property_category_id;
    public $website;
    public $image;
    public $logo;
    
  
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [            
            [[ 'id', 'name', 'property_type_id' , 'property_category_id'], 'required'],            
            [['property_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => \frontend\models\property\PropertyType::className(), 'targetAttribute' => ['property_type_id' => 'id']],
            [['property_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => \frontend\models\property\PropertyCategory::className(), 'targetAttribute' => ['property_category_id' => 'id']],
        ];
    }
}