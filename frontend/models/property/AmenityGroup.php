<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "amenity_group".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property Amenity[] $amenities
 */
class AmenityGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'amenity_group';
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
     * Gets query for [[Amenities]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAmenities()
    {
        return $this->hasMany(Amenity::className(), ['nest_under_id' => 'id']);
    }

    /**
     * Gets query for [[Amenities]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomAmenities()
    {
        return $this->hasMany(Amenity::className(), ['nest_under_id' => 'id'])->where(['display_level_id' => 2]);
    }
}
