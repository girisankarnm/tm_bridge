<?php

namespace frontend\models\tariff;
use frontend\models\property\Property;
use frontend\models\tariff\RoomTariffDatewise;
use frontend\models\tariff\SupplimentMeal;
use frontend\models\tariff\RoomTariffWeekdayhike;
use frontend\models\tariff\MandatoryDinner;

use Carbon\Carbon;

use Yii;

/**
 * This is the model class for table "tariff_date_range".
 *
 * @property int $id
 * @property string|null $from_date
 * @property string|null $to_date
 * @property int|null $property_id
 * @property int|null $parent
 * @property int|null $status
 * @property int|null $tariff_type
 *
 * @property MandatoryDinner[] $mandatoryDinners
 * @property Property $property
 * @property RoomTariffDatewise[] $roomTariffDatewises
 * @property RoomTariffWeekdayhike[] $roomTariffWeekdayhikes
 * @property SupplimentMeal[] $supplimentMeals
 */
class TariffDateRange extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tariff_date_range';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['from_date', 'to_date'], 'safe'],
            [['property_id', 'parent', 'status', 'tariff_type'], 'integer'],
            [['property_id'], 'exist', 'skipOnError' => true, 'targetClass' => Property::className(), 'targetAttribute' => ['property_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'from_date' => 'From Date',
            'to_date' => 'To Date',
            'property_id' => 'Property ID',
            'parent' => 'Parent',
            'status' => 'Status',
            'tariff_type' => 'Tariff Type',
        ];
    }

    /**
     * Gets query for [[MandatoryDinners]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMandatoryDinners()
    {
        return $this->hasMany(MandatoryDinner::className(), ['date_range_id' => 'id']);
    }

    /**
     * Gets query for [[Property]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProperty()
    {
        return $this->hasOne(Property::className(), ['id' => 'property_id']);
    }

    /**
     * Gets query for [[RoomTariffDatewises]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomTariffDatewises()
    {
        return $this->hasMany(RoomTariffDatewise::className(), ['date_range_id' => 'id']);
    }

    /**
     * Gets query for [[RoomTariffWeekdayhikes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomTariffWeekdayhikes()
    {
        return $this->hasMany(RoomTariffWeekdayhike::className(), ['range_id' => 'id']);
    }

    /**
     * Gets query for [[SupplimentMeals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSupplimentMeals()
    {
        return $this->hasMany(SupplimentMeal::className(), ['date_range_id' => 'id']);
    }

    public function getNestingCount() {
        return $this->find()->where(['parent' => $this->id])->count();
    }
}
