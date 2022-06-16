<?php

namespace frontend\models\tariff;
use frontend\models\tariff\TariffDateRange;
use frontend\models\property\Property;
use frontend\models\property\Room;
use Yii;

/**
 * This is the model class for table "room_tariff_datewise".
 *
 * @property int $id
 * @property int|null $nationality_id
 * @property int|null $property_id
 * @property int|null $room_id
 * @property int|null $date_range_id
 * @property int $status
 *
 * @property TariffDateRange $dateRange
 * @property Property $property
 * @property Room $room
 * @property RoomTariffDateRange[] $roomTariffDateRanges
 * @property RoomTariffSlab[] $roomTariffSlabs
 */
class RoomTariffDatewise extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room_tariff_datewise';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nationality_id', 'property_id', 'room_id', 'date_range_id', 'status'], 'integer'],
            [['date_range_id'], 'exist', 'skipOnError' => true, 'targetClass' => TariffDateRange::className(), 'targetAttribute' => ['date_range_id' => 'id']],
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
            'nationality_id' => 'Nationality ID',
            'property_id' => 'Property ID',
            'room_id' => 'Room ID',
            'date_range_id' => 'Date Range ID',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[DateRange]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDateRange()
    {
        return $this->hasOne(TariffDateRange::className(), ['id' => 'date_range_id']);
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
     * Gets query for [[Room]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }

    /**
     * Gets query for [[RoomTariffDateRanges]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomTariffDateRanges()
    {
        return $this->hasMany(RoomTariffDateRange::className(), ['tariff_id' => 'id']);
    }

    /**
     * Gets query for [[RoomTariffSlabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomTariffSlabs()
    {
        return $this->hasMany(RoomTariffSlab::className(), ['tariff_id' => 'id']);
    }
}
