<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "property_complimentary_amenity".
 *
 * @property int $id
 * @property int|null $property_id
 * @property string|null $name
 *
 * @property Property $property
 */
class PropertyComplimentaryAmenity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_complimentary_amenity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_id'], 'integer'],
            [['name'], 'string', 'max' => 80],
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
            'name' => 'Name',
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
}
