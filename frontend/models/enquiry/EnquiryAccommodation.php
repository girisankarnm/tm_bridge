<?php

namespace frontend\models\enquiry;

use Yii;

/**
 * This is the model class for table "enquiry_accommodation".
 *
 * @property int $id
 * @property string|null $day
 * @property int|null $status
 * @property int $destination_id
 * @property int $meal_plan_id
 * @property int $guest_count_plan_id
 * @property int|null $enquiry_id
 *
 * @property Destination $destination
 * @property Enquiry $enquiry
 * @property EnquiryGuestCount $guestCountPlan
 * @property PropertyMealPlan $mealPlan
 */
class EnquiryAccommodation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enquiry_accommodation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['day'], 'safe'],
            [['status', 'destination_id', 'meal_plan_id', 'guest_count_plan_id', 'enquiry_id'], 'integer'],
            [['destination_id', 'meal_plan_id', 'guest_count_plan_id'], 'required'],
            [['destination_id'], 'exist', 'skipOnError' => true, 'targetClass' => Destination::className(), 'targetAttribute' => ['destination_id' => 'id']],
            [['enquiry_id'], 'exist', 'skipOnError' => true, 'targetClass' => Enquiry::className(), 'targetAttribute' => ['enquiry_id' => 'id']],
            [['guest_count_plan_id'], 'exist', 'skipOnError' => true, 'targetClass' => EnquiryGuestCount::className(), 'targetAttribute' => ['guest_count_plan_id' => 'id']],
            [['meal_plan_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertyMealPlan::className(), 'targetAttribute' => ['meal_plan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'day' => 'Day',
            'status' => 'Status',
            'destination_id' => 'Destination ID',
            'meal_plan_id' => 'Meal Plan ID',
            'guest_count_plan_id' => 'Guest Count Plan ID',
            'enquiry_id' => 'Enquiry ID',
        ];
    }

    /**
     * Gets query for [[Destination]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDestination()
    {
        return $this->hasOne(Destination::className(), ['id' => 'destination_id']);
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
     * Gets query for [[GuestCountPlan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGuestCountPlan()
    {
        return $this->hasOne(EnquiryGuestCount::className(), ['id' => 'guest_count_plan_id']);
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
}
