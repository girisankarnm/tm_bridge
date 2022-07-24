<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "edit_request".
 *
 * @property int $id
 * @property int|null $type
 * @property int|null $type_id
 * @property int|null $key
 * @property string|null $value
 * @property string|null $description
 */
class EditRequest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'edit_request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id','optional', 'key'], 'integer'],
            [['value', 'description'], 'string', 'max' => 255],
            [['value', 'description'], 'required'],
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
            'description' => 'Description',
        ];
    }
}
