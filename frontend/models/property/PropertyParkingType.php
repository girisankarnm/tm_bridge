<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "property_parking_type".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property PropertyParkingTypeMap[] $propertyParkingTypeMaps
 */
class PropertyParkingType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_parking_type';
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
     * Gets query for [[PropertyParkingTypeMaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyParkingTypeMaps()
    {
        return $this->hasMany(PropertyParkingTypeMap::className(), ['parking_type_id' => 'id']);
    }
}
