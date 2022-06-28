<?php

namespace frontend\models\operator;

use common\models\User;
use frontend\models\Property\Property;
use Yii;

/**
 * This is the model class for table "property_favourite".
 *
 * @property int $id
 * @property int|null $property_id
 * @property int|null $operator_id
 *
 * @property User $operator
 * @property Property $property
 */
class PropertyFavourite extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_favourite';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_id', 'operator_id'], 'integer'],
            [['operator_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['operator_id' => 'id']],
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
        ];
    }

    /**
     * Gets query for [[Operator]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperator()
    {
        return $this->hasOne(User::className(), ['id' => 'operator_id']);
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
