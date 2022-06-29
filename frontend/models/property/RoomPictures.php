<?php

namespace frontend\models\property;

use frontend\models\property\Room;
use Yii;

/**
 * This is the model class for table "room_pictures".
 *
 * @property int $id
 * @property int|null $room_id
 * @property string $name
 * @property string|null $description
 *
 * @property Room $room
 */
class RoomPictures extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room_pictures';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room_id'], 'integer'],
            [['name'], 'required'],
            [['name', 'description'], 'string', 'max' => 80],
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
            'name' => 'Name',
            'description' => 'Description',
        ];
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
}
