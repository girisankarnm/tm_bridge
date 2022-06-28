<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "property_restaurant_cuisine_option_map".
 *
 * @property int $id
 * @property int|null $restaurant_id
 * @property int|null $cuisine_option_id
 *
 * @property PropertyRestaurantCuisineOption $cuisineOption
 * @property PropertyRestaurant $restaurant
 */
class PropertyRestaurantCuisineOptionMap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_restaurant_cuisine_option_map';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['restaurant_id', 'cuisine_option_id'], 'integer'],
            [['cuisine_option_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertyRestaurantCuisineOption::className(), 'targetAttribute' => ['cuisine_option_id' => 'id']],
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
            'cuisine_option_id' => 'Cuisine Option ID',
        ];
    }

    /**
     * Gets query for [[CuisineOption]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCuisineOption()
    {
        return $this->hasOne(PropertyRestaurantCuisineOption::className(), ['id' => 'cuisine_option_id']);
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
