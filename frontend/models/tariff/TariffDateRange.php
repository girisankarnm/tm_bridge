<?php

namespace frontend\models\tariff;
use Yii;
use frontend\models\property\Property;
use frontend\models\tariff\RoomTariffDatewise;
use frontend\models\RoomTariffSupplimentMeal;
use frontend\models\RoomTariffWeekdaywise;
use frontend\models\RoomTariffMandatoryDinner;
use Carbon\Carbon;


/**
 * This is the model class for table "tariff_date_range".
 *
 * @property int $id
 * @property string|null $from_date
 * @property string|null $to_date
 * @property int|null $property_id
 * @property int|null $parent
 * @property int $status 
 * @property int tariff_type
 *
 * @property Property $property
 * @property RoomTariffDatewise[] $roomTariffDatewises
 * @property RoomTariffMandatoryDinner[] $roomTariffMandatoryDinners
 * @property RoomTariffSupplimentMeal[] $roomTariffSupplimentMeals
 * @property RoomTariffWeekdaywise[] $roomTariffWeekdaywises
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
            [['status', 'tariff_type'], 'required'],
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
            'tariff_type' => 'Tariff type'
        ];
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
     * Gets query for [[RoomTariffMandatoryDinners]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomTariffMandatoryDinners()
    {
        return $this->hasMany(RoomTariffMandatoryDinner::className(), ['date_range_id' => 'id']);
    }

    /**
     * Gets query for [[RoomTariffSupplimentMeals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomTariffSupplimentMeals()
    {
        return $this->hasMany(RoomTariffSupplimentMeal::className(), ['date_range_id' => 'id']);
    }

    /**
     * Gets query for [[RoomTariffWeekdaywises]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomTariffWeekdaywises()
    {
        return $this->hasMany(RoomTariffWeekdaywise::className(), ['range_id' => 'id']);
    }

    public function getNestingCount() {
        return $this->find()->where(['parent' => $this->id])->count();
    }
}
