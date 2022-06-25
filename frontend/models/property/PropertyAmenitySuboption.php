<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "property_amenity_suboption".
 *
 * @property int $id
 * @property int|null $property_amenity_id
 * @property int|null $sub_option_id
 *
 * @property PropertyAmenity $propertyAmenity
 * @property AmenitySubOption $subOption
 */
class PropertyAmenitySuboption extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_amenity_suboption';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_amenity_id', 'sub_option_id'], 'integer'],
            [['property_amenity_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertyAmenity::className(), 'targetAttribute' => ['property_amenity_id' => 'id']],
            [['sub_option_id'], 'exist', 'skipOnError' => true, 'targetClass' => AmenitySubOption::className(), 'targetAttribute' => ['sub_option_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'property_amenity_id' => 'Property Amenity ID',
            'sub_option_id' => 'Sub Option ID',
        ];
    }

    /**
     * Gets query for [[PropertyAmenity]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyAmenity()
    {
        return $this->hasOne(PropertyAmenity::className(), ['id' => 'property_amenity_id']);
    }

    /**
     * Gets query for [[SubOption]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubOption()
    {
        return $this->hasOne(AmenitySubOption::className(), ['id' => 'sub_option_id']);
    }
}
