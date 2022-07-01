<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "property_room_extra_bed_type".
 *
 * @property int $id
 * @property string $name
 * @property int $status
 */
class PropertyRoomExtraBedType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_room_extra_bed_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status'], 'integer'],
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
            'status' => 'Status',
        ];
    }
}