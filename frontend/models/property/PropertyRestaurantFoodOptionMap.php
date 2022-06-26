<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "property_restaurant_food_option_map".
 *
 * @property int $id
 * @property int|null $restaurant_id
 * @property int|null $food_option_id
 *
 * @property PropertyRestaurantFoodOption $foodOption
 * @property PropertyRestaurant $restaurant
 */
class PropertyRestaurantFoodOptionMap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_restaurant_food_option_map';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['restaurant_id', 'food_option_id'], 'integer'],
            [['food_option_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertyRestaurantFoodOption::className(), 'targetAttribute' => ['food_option_id' => 'id']],
            [['restaurant_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertyRestaurant::className(), 'targetAttribute' => ['restaurant_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'restaurant_id' => 'Restaurant ID',
            'food_option_id' => 'Food Option ID',
        ];
    }

    /**
     * Gets query for [[FoodOption]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFoodOption()
    {
        return $this->hasOne(PropertyRestaurantFoodOption::className(), ['id' => 'food_option_id']);
    }

    /**
     * Gets query for [[Restaurant]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRestaurant()
    {
        return $this->hasOne(PropertyRestaurant::className(), ['id' => 'restaurant_id']);
    }
}
