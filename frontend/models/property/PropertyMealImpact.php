<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "property_meal_impact".
 *
 * @property int $id
 * @property string $name
 * @property int $status
 *
 * @property MandatoryDinner[] $mandatoryDinners
 */
class PropertyMealImpact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_meal_impact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 80],
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
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[MandatoryDinners]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMandatoryDinners()
    {
        return $this->hasMany(MandatoryDinner::className(), ['meal_impact_id' => 'id']);
    }
}
