<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client_requested_option".
 *
 * @property int $id
 * @property int|null $type
 * @property int|null $type_id
 * @property int|null $key
 * @property string|null $value
 */
class ClientRequestedOption extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client_requested_option';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'key'], 'integer'],
            [['value'], 'string', 'max' => 255],
            [['value'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'type_id' => 'Type ID',
            'key' => 'Key',
            'value' => 'Value',
        ];
    }
}
