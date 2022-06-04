<?php

namespace frontend\models\enquiry;

use frontend\models\property\Property;
use Yii;

/**
 * This is the model class for table "enquiry_room_selection".
 *
 * @property int $id
 * @property int|null $enquiry_id
 * @property int $property_id
 * @property int $room_id
 * @property int $enquiry_accommodation_id
 * @property string $day
 * @property int|null $status
 * @property int $hotel_policy_pax_count_adult
 * @property int $hotel_policy_pax_count_child
 * @property int $hotel_policy_pax_count_infant
 * @property int $slab_id
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
            [['enquiry_id', 'property_id', 'room_id', 'enquiry_accommodation_id', 'status', 'hotel_policy_pax_count_adult', 'hotel_policy_pax_count_child', 'hotel_policy_pax_count_infant', 'slab_id'], 'integer'],
            [['property_id', 'room_id', 'enquiry_accommodation_id', 'day', 'hotel_policy_pax_count_adult', 'hotel_policy_pax_count_child', 'hotel_policy_pax_count_infant', 'slab_id'], 'required'],
            [['day'], 'safe'],
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
            'hotel_policy_pax_count_adult' => 'Hotel Policy Pax Count Adult',
            'hotel_policy_pax_count_child' => 'Hotel Policy Pax Count Child',
            'hotel_policy_pax_count_infant' => 'Hotel Policy Pax Count Infant',
            'slab_id' => 'Slab ID',
        ];
    }

    public function getProperty()
    {
        return $this->hasOne(Property::className(), ['id' => 'property_id']);
    }
}
