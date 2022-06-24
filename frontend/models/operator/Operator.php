<?php

namespace frontend\models\operator;

use Yii;

/**
 * This is the model class for table "operator".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $name
 * @property string|null $logo_image
 * @property string|null $website
 * @property string|null $v_card_image_front
 * @property string|null $v_card_image_back
 * @property int|null $country_id
 * @property int|null $location_id
 * @property int|null $destination_id
 * @property string|null $address
 * @property string|null $postal_code
 * @property string|null $locality
 * @property int|null $legal_status_id
 * @property string|null $pan_number
 * @property string|null $pan_image
 * @property string|null $gst_number
 * @property string|null $gst_image
 * @property string|null $bank_account_number
 * @property string|null $bank_account_name
 * @property string|null $bank_name
 * @property string|null $ifsc_code
 * @property string|null $swift_code
 * @property string|null $cheque_image
 * @property int|null $terms_and_conditons
 * @property int|null $owner_id
 *
 * @property Country $country
 * @property Destination $destination
 * @property Location $location
 * @property OperatorContacts[] $operatorContacts
 * @property User $owner
 * @property User $user
 */
class Operator extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'operator';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'country_id', 'location_id', 'destination_id', 'legal_status_id', 'terms_and_conditons', 'owner_id'], 'integer'],
            [['name', 'logo_image', 'v_card_image_front', 'v_card_image_back', 'postal_code', 'locality', 'pan_number', 'pan_image', 'gst_number', 'gst_image', 'bank_account_number', 'bank_account_name', 'bank_name', 'ifsc_code', 'swift_code', 'cheque_image'], 'string', 'max' => 80],
            [['website', 'address'], 'string', 'max' => 256],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['country_id' => 'id']],
            [['destination_id'], 'exist', 'skipOnError' => true, 'targetClass' => Destination::className(), 'targetAttribute' => ['destination_id' => 'id']],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'id']],
            [['owner_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['owner_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => 'Name',
            'logo_image' => 'Logo Image',
            'website' => 'Website',
            'v_card_image_front' => 'V Card Image Front',
            'v_card_image_back' => 'V Card Image Back',
            'country_id' => 'Country ID',
            'location_id' => 'Location ID',
            'destination_id' => 'Destination ID',
            'address' => 'Address',
            'postal_code' => 'Postal Code',
            'locality' => 'Locality',
            'legal_status_id' => 'Legal Status ID',
            'pan_number' => 'Pan Number',
            'pan_image' => 'Pan Image',
            'gst_number' => 'Gst Number',
            'gst_image' => 'Gst Image',
            'bank_account_number' => 'Bank Account Number',
            'bank_account_name' => 'Bank Account Name',
            'bank_name' => 'Bank Name',
            'ifsc_code' => 'Ifsc Code',
            'swift_code' => 'Swift Code',
            'cheque_image' => 'Cheque Image',
            'terms_and_conditons' => 'Terms And Conditons',
            'owner_id' => 'Owner ID',
        ];
    }

    /**
     * Gets query for [[Country]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }

    /**
     * Gets query for [[Destination]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDestination()
    {
        return $this->hasOne(Destination::className(), ['id' => 'destination_id']);
    }

    /**
     * Gets query for [[Location]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocation()
    {
        return $this->hasOne(Location::className(), ['id' => 'location_id']);
    }

    /**
     * Gets query for [[OperatorContacts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperatorContacts()
    {
        return $this->hasMany(OperatorContacts::className(), ['operator_id' => 'id']);
    }

    /**
     * Gets query for [[Owner]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(User::className(), ['id' => 'owner_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
