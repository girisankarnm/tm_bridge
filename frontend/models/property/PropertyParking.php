<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "property_parking".
 *
 * @property int $id
 * @property int|null $property_id
 *
 * @property Property $property
 * @property PropertyParkingTypeMap[] $propertyParkingTypeMaps
 */
class PropertyParking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_parking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_id'], 'integer'],
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
     * Gets query for [[PropertyParkingTypeMaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyParkingTypeMaps()
    {
        return $this->hasMany(PropertyParkingTypeMap::className(), ['parking_id' => 'id']);
    }
}
