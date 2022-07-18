<?php

namespace frontend\models\property;

use Yii;
use yii\base\Model;
use common\models\User;
use frontend\models\Country;
use frontend\models\Location;
use frontend\models\Destination;

class AddressLocation extends Model{
    public $id;
    public $country_id;
    public $location_id;
    public $destination_id;
    public $address;
    public $postal_code;
    public $locality;
    
  
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [            
            [['country_id' , 'location_id', 'destination_id', 'address','postal_code', 'locality', 'id'], 'required'],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['country_id' => 'id']],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'id']],
            [['destination_id'], 'exist', 'skipOnError' => true, 'targetClass' => Destination::className(), 'targetAttribute' => ['destination_id' => 'id']],
            [['postal_code',], 'number', 'min' => 5,  ],
            [['postal_code',], 'number', 'max' => 6, ]
        ];
    }
}