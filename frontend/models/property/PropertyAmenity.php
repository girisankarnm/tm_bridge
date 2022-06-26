<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "property_amenity".
 *
 * @property int $id
 * @property int|null $property_id
 * @property int|null $amenity_id
 *
 * @property Amenity $amenity
 * @property Property $property
 * @property PropertyAmenitySuboption[] $propertyAmenitySuboptions
 */
class PropertyAmenity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_amenity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_id', 'amenity_id'], 'integer'],
            [['amenity_id'], 'exist', 'skipOnError' => true, 'targetClass' => Amenity::className(), 'targetAttribute' => ['amenity_id' => 'id']],
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
            'amenity_id' => 'Amenity ID',
        ];
    }

    /**
     * Gets query for [[Amenity]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAmenity()
    {
        return $this->hasOne(Amenity::className(), ['id' => 'amenity_id']);
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
     * Gets query for [[PropertyAmenitySuboptions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyAmenitySuboptions()
    {
        return $this->hasMany(PropertyAmenitySuboption::className(), ['property_amenity_id' => 'id']);
    }
}
