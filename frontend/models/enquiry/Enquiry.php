<?php

namespace frontend\models\enquiry;
use frontend\models\enquiry\EnquiryAccommodation;
use frontend\models\enquiry\EnquiryGuestCount;
use frontend\models\tariff\TariffNationalityGroupName;
use frontend\models\Country;
use frontend\models\user\User;

use Yii;

/**
 * This is the model class for table "enquiry".
 *
 * @property int $id
 * @property string $enquiry_no
 * @property string $guest_name
 * @property int|null $nationality_id
 * @property string|null $tour_start_date
 * @property int $tour_duration
 * @property string|null $email1
 * @property string|null $email2
 * @property string|null $contact1
 * @property string|null $contact2
 * @property int|null $guest_count_same_on_all_days
 * @property int|null $owner_id
 *
 * @property EnquiryAccommodation[] $enquiryAccommodations
 * @property EnquiryGuestCount[] $enquiryGuestCounts
 * @property EnquiryPropertySelection[] $enquiryPropertySelections
 * @property EnquiryRoomSelection[] $enquiryRoomSelections
 * @property Country $nationality
 * @property User $owner
 */
class Enquiry extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enquiry';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['enquiry_no', 'guest_name'], 'required'],
            [['nationality_id', 'tour_duration', 'guest_count_same_on_all_days', 'owner_id'], 'integer'],
            [['tour_start_date'], 'safe'],
            [['enquiry_no', 'guest_name'], 'string', 'max' => 80],
            [['email1', 'email2'], 'string', 'max' => 255],
            [['contact1', 'contact2'], 'string', 'max' => 15],
            [['nationality_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['nationality_id' => 'id']],
            [['owner_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['owner_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'enquiry_no' => 'Enquiry No',
            'guest_name' => 'Guest Name',
            'nationality_id' => 'Nationality ID',
            'tour_start_date' => 'Tour Start Date',
            'tour_duration' => 'Tour Duration',
            'email1' => 'Email 1',
            'email2' => 'Email 2',
            'contact1' => 'Contact 1',
            'contact2' => 'Contact 2',
            'guest_count_same_on_all_days' => 'Guest Count Same On All Days',
            'owner_id' => 'Owner ID',
        ];
    }

    /**
     * Gets query for [[EnquiryAccommodations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEnquiryAccommodations()
    {
        return $this->hasMany(EnquiryAccommodation::className(), ['enquiry_id' => 'id']);
    }

    /**
     * Gets query for [[EnquiryGuestCounts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEnquiryGuestCounts()
    {
        return $this->hasMany(EnquiryGuestCount::className(), ['enquiry_id' => 'id']);
    }

    /**
     * Gets query for [[EnquiryPropertySelections]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEnquiryPropertySelections()
    {
        return $this->hasMany(EnquiryPropertySelection::className(), ['enquiry_id' => 'id']);
    }

    /**
     * Gets query for [[EnquiryRoomSelections]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEnquiryRoomSelections()
    {
        return $this->hasMany(EnquiryRoomSelection::className(), ['enquiry_id' => 'id']);
    }

    /**
     * Gets query for [[Nationality]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNationality()
    {
        return $this->hasOne(Country::className(), ['id' => 'nationality_id']);
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
}
