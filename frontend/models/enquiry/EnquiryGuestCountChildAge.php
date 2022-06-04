<?php

namespace frontend\models\enquiry;

use Yii;

/**
 * This is the model class for table "enquiry_guest_count_child_age".
 *
 * @property int $id
 * @property int|null $plan_id
 * @property int $age
 * @property int $count
 *
 * @property EnquiryGuestCount $plan
 */
class EnquiryGuestCountChildAge extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enquiry_guest_count_child_age';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['plan_id', 'age', 'count'], 'integer'],
            [['plan_id'], 'exist', 'skipOnError' => true, 'targetClass' => EnquiryGuestCount::className(), 'targetAttribute' => ['plan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'plan_id' => 'Plan ID',
            'age' => 'Age',
            'count' => 'Count',
        ];
    }

    /**
     * Gets query for [[Plan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlan()
    {
        return $this->hasOne(EnquiryGuestCount::className(), ['id' => 'plan_id']);
    }
}
