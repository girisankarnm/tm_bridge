<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "amenity_sub_option".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $amenity_id
 *
 * @property Amenity $amenity
 */
class AmenitySubOption extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'amenity_sub_option';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['amenity_id'], 'integer'],
            [['name'], 'string', 'max' => 80],
            [['amenity_id'], 'exist', 'skipOnError' => true, 'targetClass' => Amenity::className(), 'targetAttribute' => ['amenity_id' => 'id']],
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
}
