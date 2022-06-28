<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "room_amenity".
 *
 * @property int $id
 * @property int|null $room_id
 * @property int|null $amenity_id
 *
 * @property Amenity $amenity
 * @property Room $room
 * @property RoomAmenitySuboption[] $roomAmenitySuboptions
 */
class RoomAmenity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room_amenity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room_id', 'amenity_id'], 'integer'],
            [['amenity_id'], 'exist', 'skipOnError' => true, 'targetClass' => Amenity::className(), 'targetAttribute' => ['amenity_id' => 'id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['room_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'room_id' => 'Room ID',
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
     * Gets query for [[Room]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }

    /**
     * Gets query for [[RoomAmenitySuboptions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomAmenitySuboptions()
    {
        return $this->hasMany(RoomAmenitySuboption::className(), ['room_amenity_id' => 'id']);
    }
}
