<?php

namespace frontend\models\enquiry;

use Yii;

/**
 * This is the model class for table "enquiry_guest_count".
 *
 * @property int $id
 * @property int $plan
 * @property int $adults
 * @property int $children
 * @property int|null $enquiry_id
 *
 * @property Enquiry $enquiry
 */
class EnquiryGuestCount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enquiry_guest_count';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['plan', 'adults', 'children', 'enquiry_id'], 'integer'],
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
            'plan' => 'Plan',
            'adults' => 'Adults',
            'children' => 'Children',
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

    public function getEnquiryGuestCountChildAge()
    {
        return $this->hasMany(EnquiryGuestCountChildAge::className(), ['plan_id' => 'id']);
    }
}
