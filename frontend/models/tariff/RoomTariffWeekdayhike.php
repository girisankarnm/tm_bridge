<?php

namespace frontend\models\tariff;
use frontend\models\property\Property;
use frontend\models\property\Room;
use Yii;

/**
 * This is the model class for table "room_tariff_weekdayhike".
 *
 * @property int $id
 * @property int|null $property_id
 * @property int|null $room_id
 * @property int|null $range_id
 * @property int $status
 *
 * @property Property $property
 * @property TariffDateRange $range
 * @property Room $room
 * @property RoomTariffSlabWeekdayhike[] $roomTariffSlabWeekdayhikes
 * @property RoomTariffWeekdayhikeDays[] $roomTariffWeekdayhikeDays
 */
class RoomTariffWeekdayhike extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room_tariff_weekdayhike';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_id', 'room_id', 'range_id', 'status'], 'integer'],
            [['range_id'], 'exist', 'skipOnError' => true, 'targetClass' => TariffDateRange::className(), 'targetAttribute' => ['range_id' => 'id']],
            [['property_id'], 'exist', 'skipOnError' => true, 'targetClass' => Property::className(), 'targetAttribute' => ['property_id' => 'id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['room_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'property_id' => 'Property ID',
            'room_id' => 'Room ID',
            'range_id' => 'Range ID',
            'status' => 'Status',
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
     * Gets query for [[Range]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRange()
    {
        return $this->hasOne(TariffDateRange::className(), ['id' => 'range_id']);
    }

    /**
     * Gets query for [[Room]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }

    /**
     * Gets query for [[RoomTariffSlabWeekdayhikes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomTariffSlabWeekdayhikes()
    {
        return $this->hasMany(RoomTariffSlabWeekdayhike::className(), ['tariff_id' => 'id']);
    }

    /**
     * Gets query for [[RoomTariffWeekdayhikeDays]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomTariffWeekdayhikeDays()
    {
        return $this->hasMany(RoomTariffWeekdayhikeDays::className(), ['tariff_id' => 'id']);
    }
}