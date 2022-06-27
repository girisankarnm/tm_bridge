<?php

namespace frontend\models\operator;

use frontend\models\Enquiry\Enquiry;
use frontend\models\Property\Property;
use Yii;

/**
 * This is the model class for table "enquiry_property_selection".
 *
 * @property int $id
 * @property int $status
 * @property int $enquiry_id
 * @property int $property_id
 * @property int $hotel_policy_pax_count_adult
 * @property int $hotel_policy_pax_count_child
 * @property int $hotel_policy_pax_count_infant
 *
 * @property Enquiry $enquiry
 * @property Property $property
 * @property Srr[] $srrs
 */
class EnquiryPropertySelection extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enquiry_property_selection';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'enquiry_id', 'property_id', 'hotel_policy_pax_count_adult', 'hotel_policy_pax_count_child', 'hotel_policy_pax_count_infant'], 'required'],
            [['status', 'enquiry_id', 'property_id', 'hotel_policy_pax_count_adult', 'hotel_policy_pax_count_child', 'hotel_policy_pax_count_infant'], 'integer'],
            [['enquiry_id'], 'exist', 'skipOnError' => true, 'targetClass' => Enquiry::className(), 'targetAttribute' => ['enquiry_id' => 'id']],
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
            'status' => 'Status',
            'enquiry_id' => 'Enquiry ID',
            'property_id' => 'Property ID',
            'hotel_policy_pax_count_adult' => 'Hotel Policy Pax Count Adult',
            'hotel_policy_pax_count_child' => 'Hotel Policy Pax Count Child',
            'hotel_policy_pax_count_infant' => 'Hotel Policy Pax Count Infant',
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
     * Gets query for [[Property]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProperty()
    {
        return $this->hasOne(Property::className(), ['id' => 'property_id']);
    }

    /**
     * Gets query for [[Srrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSrrs()
    {
        return $this->hasMany(Srr::className(), ['property_selection_id' => 'id']);
    }
}
