<?php

namespace frontend\models\property;
use Yii;
use frontend\models\operator\Operator;

/**
 * This is the model class for table "property_slab_assignment".
 *
 * @property int $id
 * @property int $property_id
 * @property int $operator_id
 * @property int $slab_number
 * @property string $assigned_date
 *
 * @property Operator $operator
 * @property Property $property
 */
class PropertySlabAssignment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_slab_assignment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_id', 'operator_id', 'slab_number', 'assigned_date'], 'required'],
            [['property_id', 'operator_id', 'slab_number'], 'integer'],
            [['assigned_date'], 'safe'],
            [['operator_id'], 'exist', 'skipOnError' => true, 'targetClass' => Operator::className(), 'targetAttribute' => ['operator_id' => 'id']],
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
            'operator_id' => 'Operator ID',
            'slab_number' => 'Slab Number',
            'assigned_date' => 'Assigned Date',
        ];
    }

    /**
     * Gets query for [[Operator]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperator()
    {
        return $this->hasOne(Operator::className(), ['id' => 'operator_id']);
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
