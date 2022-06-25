<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "property_swimming_pool_type".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property PropertySwimmingPoolTypeMap[] $propertySwimmingPoolTypeMaps
 */
class PropertySwimmingPoolType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_swimming_pool_type';
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
     * Gets query for [[PropertySwimmingPoolTypeMaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertySwimmingPoolTypeMaps()
    {
        return $this->hasMany(PropertySwimmingPoolTypeMap::className(), ['pool_type_id' => 'id']);
    }
}
