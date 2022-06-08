<?php

namespace frontend\models\operator;

use Yii;

/**
 * This is the model class for table "operator_contacts".
 *
 * @property int $id
 * @property string|null $name1
 * @property string|null $name2
 * @property string|null $phone1
 * @property string|null $phone2
 * @property string|null $email1
 * @property string|null $email2
 * @property int $operator_id
 *
 * @property Operator $operator
 */
class OperatorContacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'operator_contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['operator_id'], 'required'],
            [['operator_id'], 'integer'],
            [['name1', 'name2', 'email1', 'email2'], 'string', 'max' => 255],
            [['phone1', 'phone2'], 'string', 'max' => 15],
            [['operator_id'], 'exist', 'skipOnError' => true, 'targetClass' => Operator::className(), 'targetAttribute' => ['operator_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name1' => 'Name 1',
            'name2' => 'Name 2',
            'phone1' => 'Phone 1',
            'phone2' => 'Phone 2',
            'email1' => 'Email 1',
            'email2' => 'Email 2',
            'operator_id' => 'Operator ID',
        ];
    }

    /**
     * Gets query for [[Operator]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperator()
    {
        return $this->hasOne(Operator::className(), ['id' => 'operator_id']);
    }
}
