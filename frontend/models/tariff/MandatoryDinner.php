<?php

namespace frontend\models\tariff;
use frontend\models\property\Property;
use frontend\models\property\PropertyMealImpact;

use Yii;

/**
 * This is the model class for table "mandatory_dinner".
 *
 * @property int $id
 * @property string|null $date
 * @property string|null $name
 * @property float|null $rate_adult
 * @property float|null $rate_child
 * @property int|null $meal_impact_id
 * @property int|null $property_id
 * @property int|null $date_range_id
 *
 * @property TariffDateRange $dateRange
 * @property PropertyMealImpact $mealImpact
 * @property Property $property
 */
class MandatoryDinner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mandatory_dinner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['rate_adult', 'rate_child'], 'number'],
            [['meal_impact_id', 'property_id', 'date_range_id'], 'integer'],
            [['name'], 'string', 'max' => 80],
            [['date_range_id'], 'exist', 'skipOnError' => true, 'targetClass' => TariffDateRange::className(), 'targetAttribute' => ['date_range_id' => 'id']],
            [['meal_impact_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertyMealImpact::className(), 'targetAttribute' => ['meal_impact_id' => 'id']],
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
            'date' => 'Date',
            'name' => 'Name',
            'rate_adult' => 'Rate Adult',
            'rate_child' => 'Rate Child',
            'meal_impact_id' => 'Meal Impact ID',
            'property_id' => 'Property ID',
            'date_range_id' => 'Date Range ID',
        ];
    }

    /**
     * Gets query for [[DateRange]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDateRange()
    {
        return $this->hasOne(TariffDateRange::className(), ['id' => 'date_range_id']);
    }

    /**
     * Gets query for [[MealImpact]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMealImpact()
    {
        return $this->hasOne(PropertyMealImpact::className(), ['id' => 'meal_impact_id']);
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