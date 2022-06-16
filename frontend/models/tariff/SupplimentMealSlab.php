<?php

namespace frontend\models\tariff;

use Yii;

/**
 * This is the model class for table "suppliment_meal_slab".
 *
 * @property int $id
 * @property int|null $meal_type_id
 * @property float|null $rate_adult
 * @property float|null $rate_child
 * @property int|null $tariff_id
 *
 * @property SupplimentMealType $mealType
 * @property SupplimentMeal $tariff
 */
class SupplimentMealSlab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'suppliment_meal_slab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['meal_type_id', 'tariff_id'], 'integer'],
            [['rate_adult', 'rate_child'], 'number'],
            [['meal_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => SupplimentMealType::className(), 'targetAttribute' => ['meal_type_id' => 'id']],
            [['tariff_id'], 'exist', 'skipOnError' => true, 'targetClass' => SupplimentMeal::className(), 'targetAttribute' => ['tariff_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'meal_type_id' => 'Meal Type ID',
            'rate_adult' => 'Rate Adult',
            'rate_child' => 'Rate Child',
            'tariff_id' => 'Tariff ID',
        ];
    }

    /**
     * Gets query for [[MealType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMealType()
    {
        return $this->hasOne(SupplimentMealType::className(), ['id' => 'meal_type_id']);
    }

    /**
     * Gets query for [[Tariff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTariff()
    {
        return $this->hasOne(SupplimentMeal::className(), ['id' => 'tariff_id']);
    }
}
