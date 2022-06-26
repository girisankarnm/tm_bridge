<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "room_amenity_suboption".
 *
 * @property int $id
 * @property int|null $room_amenity_id
 * @property int|null $sub_option_id
 *
 * @property RoomAmenity $roomAmenity
 * @property AmenitySubOption $subOption
 */
class RoomAmenitySuboption extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room_amenity_suboption';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room_amenity_id', 'sub_option_id'], 'integer'],
            [['room_amenity_id'], 'exist', 'skipOnError' => true, 'targetClass' => RoomAmenity::className(), 'targetAttribute' => ['room_amenity_id' => 'id']],
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
            'room_amenity_id' => 'Room Amenity ID',
            'sub_option_id' => 'Sub Option ID',
        ];
    }

    /**
     * Gets query for [[RoomAmenity]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomAmenity()
    {
        return $this->hasOne(RoomAmenity::className(), ['id' => 'room_amenity_id']);
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
