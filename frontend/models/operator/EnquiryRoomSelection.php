<?php

namespace frontend\models\operator;

use frontend\models\Enquiry\Enquiry;
use frontend\models\Enquiry\EnquiryAccommodation;
use frontend\models\Property\Property;
use frontend\models\Property\Room;
use frontend\models\Tariff\RoomTariffSlab;
use Yii;

/**
 * This is the model class for table "enquiry_room_selection".
 *
 * @property int $id
 * @property int $enquiry_id
 * @property int $property_id
 * @property int $room_id
 * @property int $enquiry_accommodation_id
 * @property string|null $day
 * @property int|null $status
 * @property int $rooming_mode
 * @property int $hotel_policy_pax_count_adult
 * @property int $hotel_policy_pax_count_child
 * @property int $hotel_policy_pax_count_infant
 * @property int $slab_id
 * @property int $room
 * @property int $eba
 * @property int $cwb
 * @property int $cnb
 * @property int $sgl
 *
 * @property Enquiry $enquiry
 * @property EnquiryAccommodation $enquiryAccommodation
 * @property Property $property
 * @property Room $room0
 * @property RoomTariffSlab $slab
 */
class EnquiryRoomSelection extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enquiry_room_selection';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['enquiry_id', 'property_id', 'room_id', 'enquiry_accommodation_id', 'rooming_mode', 'hotel_policy_pax_count_adult', 'hotel_policy_pax_count_child', 'hotel_policy_pax_count_infant', 'slab_id', 'room', 'eba', 'cwb', 'cnb', 'sgl'], 'required'],
            [['enquiry_id', 'property_id', 'room_id', 'enquiry_accommodation_id', 'status', 'rooming_mode', 'hotel_policy_pax_count_adult', 'hotel_policy_pax_count_child', 'hotel_policy_pax_count_infant', 'slab_id', 'room', 'eba', 'cwb', 'cnb', 'sgl'], 'integer'],
            [['day'], 'safe'],
            [['enquiry_accommodation_id'], 'exist', 'skipOnError' => true, 'targetClass' => EnquiryAccommodation::className(), 'targetAttribute' => ['enquiry_accommodation_id' => 'id']],
            [['enquiry_id'], 'exist', 'skipOnError' => true, 'targetClass' => Enquiry::className(), 'targetAttribute' => ['enquiry_id' => 'id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['room_id' => 'id']],
            [['property_id'], 'exist', 'skipOnError' => true, 'targetClass' => Property::className(), 'targetAttribute' => ['property_id' => 'id']],
            [['slab_id'], 'exist', 'skipOnError' => true, 'targetClass' => RoomTariffSlab::className(), 'targetAttribute' => ['slab_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'enquiry_id' => 'Enquiry ID',
            'property_id' => 'Property ID',
            'room_id' => 'Room ID',
            'enquiry_accommodation_id' => 'Enquiry Accommodation ID',
            'day' => 'Day',
            'status' => 'Status',
            'rooming_mode' => 'Rooming Mode',
            'hotel_policy_pax_count_adult' => 'Hotel Policy Pax Count Adult',
            'hotel_policy_pax_count_child' => 'Hotel Policy Pax Count Child',
            'hotel_policy_pax_count_infant' => 'Hotel Policy Pax Count Infant',
            'slab_id' => 'Slab ID',
            'room' => 'Room',
            'eba' => 'Eba',
            'cwb' => 'Cwb',
            'cnb' => 'Cnb',
            'sgl' => 'Sgl',
        ];
    }

    /**
     * Gets query for [[Enquiry]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEnquiry()
    {
        return $this->hasOne(Enquiry::className(), ['id' => 'enquiry_id']);
    }

    /**
     * Gets query for [[EnquiryAccommodation]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEnquiryAccommodation()
    {
        return $this->hasOne(EnquiryAccommodation::className(), ['id' => 'enquiry_accommodation_id']);
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
     * Gets query for [[Room0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoom0()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }

    /**
     * Gets query for [[Slab]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSlab()
    {
        return $this->hasOne(RoomTariffSlab::className(), ['id' => 'slab_id']);
    }
    public function getSelectionmanual(){
        return $this->hasOne(EnquirySelectionManualApplied::className(), ['enquiry_room_selection_id' => 'id']);
    }
}
