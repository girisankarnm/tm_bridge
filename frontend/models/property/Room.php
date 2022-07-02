<?php

namespace frontend\models\property;

use frontend\models\operator\EnquiryRoomSelection;
use frontend\models\user\User;
use Yii;

/**
 * This is the model class for table "room".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $type_id
 * @property int|null $view_id
 * @property int|null $meal_plan_id
 * @property int|null $count
 * @property int|null $size
 * @property int|null $child_policy_same_as_property
 * @property int|null $restricted_for_child
 * @property int|null $restricted_for_child_below_age
 * @property int|null $same_tariff_for_single_occupancy
 * @property int|null $number_of_adults
 * @property int|null $number_of_kids_on_sharing
 * @property int|null $number_of_extra_beds
 * @property int|null $extra_bed_type_id
 * @property string|null $is_base
 * @property int|null $property_id
 * @property int $status
 * @property int|null $owner_id
 *
 * @property EnquiryRoomSelection[] $enquiryRoomSelections
 * @property PropertyRoomExtraBedType $extraBedType
 * @property PropertyMealPlan $mealPlan
 * @property User $owner
 * @property Property $property
 * @property RoomAmenity[] $roomAmenities
 * @property RoomPictures[] $roomPictures
 * @property RoomTariffDatewise[] $roomTariffDatewises
 * @property RoomTariffWeekdaywiseRooms[] $roomTariffWeekdaywiseRooms
 * @property RoomTariffWeekdaywise[] $roomTariffWeekdaywises
 * @property RoomType $type
 * @property PropertyRoomView $view
 */
class Room extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_id', 'view_id', 'meal_plan_id', 'count', 'size', 'child_policy_same_as_property', 'restricted_for_child', 'restricted_for_child_below_age', 'same_tariff_for_single_occupancy', 'number_of_adults', 'number_of_kids_on_sharing', 'number_of_extra_beds', 'extra_bed_type_id', 'property_id', 'status', 'owner_id'], 'integer'],
            [['name', 'is_base'], 'string', 'max' => 80],
            [['type_id','name','view_id','meal_plan_id','count'],'required'],
            [['extra_bed_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertyRoomExtraBedType::className(), 'targetAttribute' => ['extra_bed_type_id' => 'id']],
            [['meal_plan_id'], 'exist', 'skipOnError' => false, 'targetClass' => PropertyMealPlan::className(), 'targetAttribute' => ['meal_plan_id' => 'id']],
            [['property_id'], 'exist', 'skipOnError' => true, 'targetClass' => Property::className(), 'targetAttribute' => ['property_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => false, 'targetClass' => RoomType::className(), 'targetAttribute' => ['type_id' => 'id']],
            [['owner_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['owner_id' => 'id']],
            [['view_id'], 'exist', 'skipOnError' => false, 'targetClass' => PropertyRoomView::className(), 'targetAttribute' => ['view_id' => 'id']],
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
            'type_id' => 'Type ID',
            'view_id' => 'View ID',
            'meal_plan_id' => 'Meal Plan ID',
            'count' => 'Count',
            'size' => 'Size',
            'child_policy_same_as_property' => 'Child Policy Same As Property',
            'restricted_for_child' => 'Restricted For Child',
            'restricted_for_child_below_age' => 'Restricted For Child Below Age',
            'same_tariff_for_single_occupancy' => 'Same Tariff for Single Occupancy',
            'number_of_adults' => 'Number Of Adults',
            'number_of_kids_on_sharing' => 'Number Of Kids On Sharing',
            'number_of_extra_beds' => 'Number Of Extra Beds',
            'extra_bed_type_id' => 'Extra Bed Type ID',
            'is_base' => 'Is Base',
            'property_id' => 'Property ID',
            'status' => 'Status',
            'owner_id' => 'Owner ID',
        ];
    }

    /**
     * Gets query for [[EnquiryRoomSelections]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEnquiryRoomSelections()
    {
        return $this->hasMany(EnquiryRoomSelection::className(), ['room_id' => 'id']);
    }

    /**
     * Gets query for [[ExtraBedType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExtraBedType()
    {
        return $this->hasOne(PropertyRoomExtraBedType::className(), ['id' => 'extra_bed_type_id']);
    }

    /**
     * Gets query for [[MealPlan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMealPlan()
    {
        return $this->hasOne(PropertyMealPlan::className(), ['id' => 'meal_plan_id']);
    }

    /**
     * Gets query for [[Owner]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(User::className(), ['id' => 'owner_id']);
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
     * Gets query for [[RoomAmenities]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomAmenities()
    {
        return $this->hasMany(RoomAmenity::className(), ['room_id' => 'id']);
    }

    /**
     * Gets query for [[RoomPictures]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomPictures()
    {
        return $this->hasMany(RoomPictures::className(), ['room_id' => 'id']);
    }

    /**
     * Gets query for [[RoomTariffDatewises]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomTariffDatewises()
    {
        return $this->hasMany(RoomTariffDatewise::className(), ['room_id' => 'id']);
    }

    /**
     * Gets query for [[RoomTariffWeekdaywiseRooms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomTariffWeekdaywiseRooms()
    {
        return $this->hasMany(RoomTariffWeekdaywiseRooms::className(), ['room_id' => 'id']);
    }

    /**
     * Gets query for [[RoomTariffWeekdaywises]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomTariffWeekdaywises()
    {
        return $this->hasMany(RoomTariffWeekdaywise::className(), ['room_id' => 'id']);
    }

    /**
     * Gets query for [[Type]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(RoomType::className(), ['id' => 'type_id']);
    }

    /**
     * Gets query for [[View]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getView()
    {
        return $this->hasOne(PropertyRoomView::className(), ['id' => 'view_id']);
    }
}
