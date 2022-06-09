<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "property_contacts".
 *
 * @property int $id
 * @property string|null $sales_name
 * @property string|null $reservation_name
 * @property string|null $front_office_name
 * @property string|null $accounts_office_name
 * @property string|null $sales_phone
 * @property string|null $reservation_phone
 * @property string|null $front_office_phone
 * @property string|null $accounts_office_phone
 * @property string|null $sales_email
 * @property string|null $reservation_email
 * @property string|null $front_office_email
 * @property string|null $accounts_office_email
 * @property int $property_id
 *
 * @property Property $property
 */
class PropertyContacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_id'], 'required'],
            [['property_id'], 'integer'],
            [['sales_name', 'reservation_name', 'front_office_name', 'accounts_office_name', 'sales_email', 'reservation_email', 'front_office_email', 'accounts_office_email'], 'string', 'max' => 255],
            [['sales_phone', 'reservation_phone', 'front_office_phone', 'accounts_office_phone'], 'string', 'max' => 15],
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
            'sales_name' => 'Sales Name',
            'reservation_name' => 'Reservation Name',
            'front_office_name' => 'Front Office Name',
            'accounts_office_name' => 'Accounts Office Name',
            'sales_phone' => 'Sales Phone',
            'reservation_phone' => 'Reservation Phone',
            'front_office_phone' => 'Front Office Phone',
            'accounts_office_phone' => 'Accounts Office Phone',
            'sales_email' => 'Sales Email',
            'reservation_email' => 'Reservation Email',
            'front_office_email' => 'Front Office Email',
            'accounts_office_email' => 'Accounts Office Email',
            'property_id' => 'Property ID',
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
