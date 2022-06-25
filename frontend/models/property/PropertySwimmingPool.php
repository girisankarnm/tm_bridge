<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "property_swimming_pool".
 *
 * @property int $id
 * @property int|null $property_id
 * @property int|null $count
 *
 * @property Property $property
 * @property PropertySwimmingPoolTypeMap[] $propertySwimmingPoolTypeMaps
 */
class PropertySwimmingPool extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_swimming_pool';
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
     * Gets query for [[PropertySwimmingPoolTypeMaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertySwimmingPoolTypeMaps()
    {
        return $this->hasMany(PropertySwimmingPoolTypeMap::className(), ['pool_id' => 'id']);
    }
}
