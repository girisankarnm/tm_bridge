<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "cancellation_refund_period".
 *
 * @property int $id
 * @property int|null $property_id
 * @property int|null $from_date
 * @property int|null $to_date
 * @property int|null $percentage
 *
 * @property Property $property
 */
class CancellationRefundPeriod extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cancellation_refund_period';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_id', 'from_date', 'to_date', 'percentage'], 'integer'],
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
            'property_id' => 'Property ID',
            'from_date' => 'From Date',
            'to_date' => 'To Date',
            'percentage' => 'Percentage',
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
}
