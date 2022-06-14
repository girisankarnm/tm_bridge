<?php

namespace frontend\models\enquiry;

use Yii;
use frontend\models\Destination;
use frontend\models\property\PropertyMealPlan;

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
 * @property Enquiry $enquiry
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
            [['enquiry_id'], 'exist', 'skipOnError' => true, 'targetClass' => Enquiry::className(), 'targetAttribute' => ['enquiry_id' => 'id']],
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
     * Gets query for [[Enquiry]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEnquiry()
    {
        return $this->hasOne(Enquiry::className(), ['id' => 'enquiry_id']);
    }
}