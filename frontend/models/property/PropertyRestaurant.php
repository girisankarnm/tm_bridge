<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "property_restaurant".
 *
 * @property int $id
 * @property int|null $property_id
 * @property int|null $count
 *
 * @property Property $property
 * @property PropertyRestaurantCuisineOptionMap[] $propertyRestaurantCuisineOptionMaps
 * @property PropertyRestaurantFoodOptionMap[] $propertyRestaurantFoodOptionMaps
 */
class PropertyRestaurant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_restaurant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_id', 'count'], 'integer'],
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
            'count' => 'Count',
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

    /**
     * Gets query for [[PropertyRestaurantCuisineOptionMaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyRestaurantCuisineOptionMaps()
    {
        return $this->hasMany(PropertyRestaurantCuisineOptionMap::className(), ['restaurant_id' => 'id']);
    }

    /**
     * Gets query for [[PropertyRestaurantFoodOptionMaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyRestaurantFoodOptionMaps()
    {
        return $this->hasMany(PropertyRestaurantFoodOptionMap::className(), ['restaurant_id' => 'id']);
    }
}
