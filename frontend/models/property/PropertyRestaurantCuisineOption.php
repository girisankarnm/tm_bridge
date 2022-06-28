<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "property_restaurant_cuisine_option".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property PropertyRestaurantCuisineOptionMap[] $propertyRestaurantCuisineOptionMaps
 */
class PropertyRestaurantCuisineOption extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_restaurant_cuisine_option';
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
     * Gets query for [[PropertyRestaurantCuisineOptionMaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyRestaurantCuisineOptionMaps()
    {
        return $this->hasMany(PropertyRestaurantCuisineOptionMap::className(), ['cuisine_option_id' => 'id']);
    }
}
