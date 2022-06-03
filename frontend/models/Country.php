<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property int $id
 * @property string $name
 * @property string|null $nationality
 * @property string|null $country_code
 * @property string|null $phone_code
 * @property string|null $currency_name
 * @property string|null $currency_symbol
 * @property string|null $currency_code
 * @property int $status
 *
 * @property Destination[] $destinations
 * @property Location[] $locations
 * @property State[] $states
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status'], 'integer'],
            [['name', 'nationality'], 'string', 'max' => 80],
            [['country_code', 'phone_code'], 'string', 'max' => 5],
            [['currency_name'], 'string', 'max' => 50],
            [['currency_symbol', 'currency_code'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'nationality' => 'Nationality',
            'country_code' => 'Country Code',
            'phone_code' => 'Phone Code',
            'currency_name' => 'Currency Name',
            'currency_symbol' => 'Currency Symbol',
            'currency_code' => 'Currency Code',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Destinations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDestinations()
    {
        return $this->hasMany(Destination::className(), ['country_id' => 'id']);
    }

    /**
     * Gets query for [[Locations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocations()
    {
        return $this->hasMany(Location::className(), ['country_id' => 'id']);
    }

    /**
     * Gets query for [[States]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStates()
    {
        return $this->hasMany(State::className(), ['country_id' => 'id']);
    }
}
