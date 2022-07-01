<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "property_restaurant_food_option".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property PropertyRestaurantFoodOptionMap[] $propertyRestaurantFoodOptionMaps
 */
class PropertyRestaurantFoodOption extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_restaurant_food_option';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
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
        ];
    }

    /**
     * Gets query for [[PropertyRestaurantFoodOptionMaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyRestaurantFoodOptionMaps()
    {
        return $this->hasMany(PropertyRestaurantFoodOptionMap::className(), ['food_option_id' => 'id']);
    }
}
