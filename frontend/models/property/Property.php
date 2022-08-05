<?php

namespace frontend\models\property;

use frontend\models\property\PropertySmokingPolicy;
use Yii;
use common\models\User;
use frontend\models\Country;
use frontend\models\Destination;
use frontend\models\Location;
use frontend\models\TourMatrixActiveRecord;
use frontend\models\tariff\TariffNationalityGroupName;

/**
 * This is the model class for table "property".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $country_id
 * @property int|null $location_id
 * @property int|null $destination_id
 * @property string|null $address
 * @property string|null $postal_code
 * @property string|null $locality
 * @property int|null $property_type_id
 * @property int|null $property_category_id
 * @property string|null $website
 * @property string|null $image
 * @property string|null $logo
 * @property int|null $legal_status_id
 * @property string|null $pan_number
 * @property string|null $pan_image
 * @property string|null $business_licence_number
 * @property string|null $business_licence_image
 * @property string|null $gst_number
 * @property string|null $gst_image
 * @property string|null $bank_account_number
 * @property string|null $bank_account_name
 * @property string|null $bank_name
 * @property string|null $ifsc_code
 * @property string|null $swift_code
 * @property string|null $cheque_image
 * @property int|null $terms_and_conditons1
 * @property int|null $terms_and_conditons2
 * @property int|null $terms_and_conditons3
 * @property int|null $twenty_four_hours_check_in
 * @property int|null $check_in_time
 * @property int|null $check_out_time
 * @property int|null $smoking_policy_id
 * @property int|null $pets_policy_id
 * @property int|null $cancellation_has_period_charge
 * @property int|null $cancellation_has_admin_charge
 * @property int|null $admin_cancellation_type
 * @property float|null $cancellation_lumsum_amount
 * @property int|null $cancellation_percentage_rate
 * @property float|null $cancellation_per_adult_amount
 * @property float|null $cancellation_per_kids_amount
 * @property int|null $cancellation_full_refund_days
 * @property int|null $cancellation_no_refund_days
 * @property int|null $allow_child_of_all_ages
 * @property int|null $restricted_for_child
 * @property int|null $restricted_for_child_below_age
 * @property int|null $allow_complimentary
 * @property int|null $complimentary_from_age
 * @property int|null $complimentary_to_age
 * @property int|null $allow_child_rate
 * @property int|null $child_rate_from_age
 * @property int|null $child_rate_to_age
 * @property int|null $allow_adult_rate
 * @property int|null $adult_rate_age
 * @property int|null $have_weekday_hike
 * @property int|null $provide_extra_meals
 * @property int|null $provide_honeymoon_inclusions
 * @property int|null $provide_compulsory_inclusions
 * @property int|null $have_complimentary_services
 * @property int|null $have_swimming_pool
 * @property int|null $have_restaurant
 * @property int|null $have_parking
 * @property int|null $room_tariff_same_for_all
 * @property int|null $status
 * @property int|null $owner_id
 *
 * @property CancellationRefundPeriod[] $cancellationRefundPeriods
 * @property Country $country
 * @property Destination $destination
 * @property EnquiryRoomSelection[] $enquiryRoomSelections
 * @property Location $location
 * @property User $owner
 * @property PropertyPetsPolicy $petsPolicy
 * @property PropertyAmenity[] $propertyAmenities
 * @property PropertyCategory $propertyCategory
 * @property PropertyComplimentaryAmenity[] $propertyComplimentaryAmenities
 * @property PropertyContacts[] $propertyContacts
 * @property PropertyFavourite[] $propertyFavourites
 * @property PropertyParking[] $propertyParkings
 * @property PropertyPictures[] $propertyPictures
 * @property PropertyRestaurant[] $propertyRestaurants
 * @property PropertySlabAssignment[] $propertySlabAssignments
 * @property PropertySwimmingPool[] $propertySwimmingPools
 * @property PropertyType $propertyType
 * @property RoomTariffCompulsoryInclusion[] $roomTariffCompulsoryInclusions
 * @property RoomTariffDatewise[] $roomTariffDatewises
 * @property RoomTariffHoneymoonInclusion[] $roomTariffHoneymoonInclusions
 * @property RoomTariffMandatoryDinner[] $roomTariffMandatoryDinners
 * @property RoomTariffSupplimentMeal[] $roomTariffSupplimentMeals
 * @property RoomTariffWeekdaywise[] $roomTariffWeekdaywises
 * @property Room[] $rooms
 * @property PropertySmokingPolicy $smokingPolicy
 * @property TariffDateRange[] $tariffDateRanges
 * @property TariffNationalityGroupName[] $tariffNationalityGroupNames
 * @property UserPropertyMap[] $userPropertyMaps
 */
class Property extends TourMatrixActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_id', 'location_id', 'destination_id', 'property_type_id', 'property_category_id', 'legal_status_id', 'terms_and_conditons1', 'terms_and_conditons2', 'terms_and_conditons3', 'twenty_four_hours_check_in', 'check_in_time', 'check_out_time', 'smoking_policy_id', 'pets_policy_id', 'cancellation_has_period_charge', 'cancellation_has_admin_charge', 'admin_cancellation_type', 'cancellation_percentage_rate', 'cancellation_full_refund_days', 'cancellation_no_refund_days', 'allow_child_of_all_ages', 'restricted_for_child', 'restricted_for_child_below_age', 'allow_complimentary', 'complimentary_from_age', 'complimentary_to_age', 'allow_child_rate', 'child_rate_from_age', 'child_rate_to_age', 'allow_adult_rate', 'adult_rate_age', 'have_weekday_hike', 'provide_extra_meals', 'provide_honeymoon_inclusions', 'provide_compulsory_inclusions', 'have_complimentary_services', 'have_swimming_pool', 'have_restaurant', 'have_parking', 'room_tariff_same_for_all', 'status', 'owner_id'], 'integer'],
            [['cancellation_lumsum_amount', 'cancellation_per_adult_amount', 'cancellation_per_kids_amount'], 'number'],
            [['name', 'postal_code', 'locality', 'pan_number', 'pan_image', 'business_licence_number', 'business_licence_image', 'gst_number', 'gst_image', 'bank_account_number', 'bank_account_name', 'bank_name', 'ifsc_code', 'swift_code', 'cheque_image'], 'string', 'max' => 80],
            [['address', 'website', 'image', 'logo'], 'string', 'max' => 256],
            [['property_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertyCategory::className(), 'targetAttribute' => ['property_category_id' => 'id']],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['country_id' => 'id']],
            [['destination_id'], 'exist', 'skipOnError' => true, 'targetClass' => Destination::className(), 'targetAttribute' => ['destination_id' => 'id']],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'id']],
//            [['pets_policy_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertyPetsPolicy::className(), 'targetAttribute' => ['pets_policy_id' => 'id']],
            [['property_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertyType::className(), 'targetAttribute' => ['property_type_id' => 'id']],
//            [['smoking_policy_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertySmokingPolicy::className(), 'targetAttribute' => ['smoking_policy_id' => 'id']],
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
            'name' => 'Name',
            'country_id' => 'Country ID',
            'location_id' => 'Location ID',
            'destination_id' => 'Destination ID',
            'address' => 'Address',
            'postal_code' => 'Postal Code',
            'locality' => 'Locality',
            'property_type_id' => 'Property Type ID',
            'property_category_id' => 'Property Category ID',
            'website' => 'Website',
            'image' => 'Image',
            'logo' => 'Logo',
            'legal_status_id' => 'Legal Status ID',
            'pan_number' => 'Pan Number',
            'pan_image' => 'Pan Image',
            'business_licence_number' => 'Business Licence Number',
            'business_licence_image' => 'Business Licence Image',
            'gst_number' => 'Gst Number',
            'gst_image' => 'Gst Image',
            'bank_account_number' => 'Bank Account Number',
            'bank_account_name' => 'Bank Account Name',
            'bank_name' => 'Bank Name',
            'ifsc_code' => 'Ifsc Code',
            'swift_code' => 'Swift Code',
            'cheque_image' => 'Cheque Image',
            'terms_and_conditons1' => 'Terms And Conditons 1',
            'terms_and_conditons2' => 'Terms And Conditons 2',
            'terms_and_conditons3' => 'Terms And Conditons 3',
            'twenty_four_hours_check_in' => 'Twenty Four Hours Check In',
            'check_in_time' => 'Check In Time',
            'check_out_time' => 'Check Out Time',
            'smoking_policy_id' => 'Smoking Policy ID',
            'pets_policy_id' => 'Pets Policy ID',
            'cancellation_has_period_charge' => 'Cancellation Has Period Charge',
            'cancellation_has_admin_charge' => 'Cancellation Has Admin Charge',
            'admin_cancellation_type' => 'Admin Cancellation Type',
            'cancellation_lumsum_amount' => 'Cancellation Lumsum Amount',
            'cancellation_percentage_rate' => 'Cancellation Percentage Rate',
            'cancellation_per_adult_amount' => 'Cancellation Per Adult Amount',
            'cancellation_per_kids_amount' => 'Cancellation Per Kids Amount',
            'cancellation_full_refund_days' => 'Cancellation Full Refund Days',
            'cancellation_no_refund_days' => 'Cancellation No Refund Days',
            'allow_child_of_all_ages' => 'Allow Child Of All Ages',
            'restricted_for_child' => 'Restricted For Child',
            'restricted_for_child_below_age' => 'Restricted For Child Below Age',
            'allow_complimentary' => 'Allow Complimentary',
            'complimentary_from_age' => 'Complimentary From Age',
            'complimentary_to_age' => 'Complimentary To Age',
            'allow_child_rate' => 'Allow Child Rate',
            'child_rate_from_age' => 'Child Rate From Age',
            'child_rate_to_age' => 'Child Rate To Age',
            'allow_adult_rate' => 'Allow Adult Rate',
            'adult_rate_age' => 'Adult Rate Age',
            'have_weekday_hike' => 'Have Weekday Hike',
            'provide_extra_meals' => 'Provide Extra Meals',
            'provide_honeymoon_inclusions' => 'Provide Honeymoon Inclusions',
            'provide_compulsory_inclusions' => 'Provide Compulsory Inclusions',
            'have_complimentary_services' => 'Have Complimentary Services',
            'have_swimming_pool' => 'Have Swimming Pool',
            'have_restaurant' => 'Have Restaurant',
            'have_parking' => 'Have Parking',
            'room_tariff_same_for_all' => 'Room Tariff Same For All',
            'status' => 'Status',
            'owner_id' => 'Owner ID',
        ];
    }

    /**
     * Gets query for [[CancellationRefundPeriods]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCancellationRefundPeriods()
    {
        return $this->hasMany(CancellationRefundPeriod::className(), ['property_id' => 'id']);
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
     * Gets query for [[EnquiryRoomSelections]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEnquiryRoomSelections()
    {
        return $this->hasMany(EnquiryRoomSelection::className(), ['property_id' => 'id']);
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
     * Gets query for [[Owner]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(User::className(), ['id' => 'owner_id']);
    }

    /**
     * Gets query for [[PetsPolicy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPetsPolicy()
    {
        return $this->hasOne(PropertyPetsPolicy::className(), ['id' => 'pets_policy_id']);
    }

    /**
     * Gets query for [[PropertyAmenities]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyAmenities()
    {
        return $this->hasMany(PropertyAmenity::className(), ['property_id' => 'id']);
    }

    /**
     * Gets query for [[PropertyCategory]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyCategory()
    {
        return $this->hasOne(PropertyCategory::className(), ['id' => 'property_category_id']);
    }

    /**
     * Gets query for [[PropertyComplimentaryAmenities]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyComplimentaryAmenities()
    {
        return $this->hasMany(PropertyComplimentaryAmenity::className(), ['property_id' => 'id']);
    }

    /**
     * Gets query for [[PropertyContacts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyContacts()
    {
        return $this->hasMany(PropertyContacts::className(), ['property_id' => 'id']);
    }

    /**
     * Gets query for [[PropertyFavourites]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyFavourites()
    {
        return $this->hasMany(PropertyFavourite::className(), ['property_id' => 'id']);
    }

    /**
     * Gets query for [[PropertyParkings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyParkings()
    {
        return $this->hasMany(PropertyParking::className(), ['property_id' => 'id']);
    }

    /**
     * Gets query for [[PropertyPictures]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyPictures()
    {
        return $this->hasMany(PropertyPictures::className(), ['property_id' => 'id']);
    }

    /**
     * Gets query for [[PropertyRestaurants]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyRestaurants()
    {
        return $this->hasMany(PropertyRestaurant::className(), ['property_id' => 'id']);
    }

    /**
     * Gets query for [[PropertySlabAssignments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertySlabAssignments()
    {
        return $this->hasMany(PropertySlabAssignment::className(), ['property_id' => 'id']);
    }

    /**
     * Gets query for [[PropertySwimmingPools]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertySwimmingPools()
    {
        return $this->hasMany(PropertySwimmingPool::className(), ['property_id' => 'id']);
    }

    /**
     * Gets query for [[PropertyType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyType()
    {
        return $this->hasOne(PropertyType::className(), ['id' => 'property_type_id']);
    }

    /**
     * Gets query for [[RoomTariffCompulsoryInclusions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomTariffCompulsoryInclusions()
    {
        return $this->hasMany(RoomTariffCompulsoryInclusion::className(), ['property_id' => 'id']);
    }

    /**
     * Gets query for [[RoomTariffDatewises]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomTariffDatewises()
    {
        return $this->hasMany(RoomTariffDatewise::className(), ['property_id' => 'id']);
    }

    /**
     * Gets query for [[RoomTariffHoneymoonInclusions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomTariffHoneymoonInclusions()
    {
        return $this->hasMany(RoomTariffHoneymoonInclusion::className(), ['property_id' => 'id']);
    }

    /**
     * Gets query for [[RoomTariffMandatoryDinners]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomTariffMandatoryDinners()
    {
        return $this->hasMany(RoomTariffMandatoryDinner::className(), ['property_id' => 'id']);
    }

    /**
     * Gets query for [[RoomTariffSupplimentMeals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomTariffSupplimentMeals()
    {
        return $this->hasMany(RoomTariffSupplimentMeal::className(), ['property_id' => 'id']);
    }

    /**
     * Gets query for [[RoomTariffWeekdaywises]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoomTariffWeekdaywises()
    {
        return $this->hasMany(RoomTariffWeekdaywise::className(), ['property_id' => 'id']);
    }

    /**
     * Gets query for [[Rooms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRooms()
    {
        return $this->hasMany(Room::className(), ['property_id' => 'id']);
    }

    /**
     * Gets query for [[SmokingPolicy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSmokingPolicy()
    {
        return $this->hasOne(PropertySmokingPolicy::className(), ['id' => 'smoking_policy_id']);
    }

    /**
     * Gets query for [[TariffDateRanges]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTariffDateRanges()
    {
        return $this->hasMany(TariffDateRange::className(), ['property_id' => 'id']);
    }

    /**
     * Gets query for [[TariffNationalityGroupNames]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTariffNationalityGroupNames()
    {
        return $this->hasMany(TariffNationalityGroupName::className(), ['property_id' => 'id']);
    }

    /**
     * Gets query for [[UserPropertyMaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserPropertyMaps()
    {
        return $this->hasMany(UserPropertyMap::className(), ['property_id' => 'id']);
    }

    public function validateData() {
        $basic_details = new BasicDetails();       

        $basic_details->id = $this->id;
        $basic_details->name = $this->name;
        $basic_details->property_type_id = $this->property_type_id;
        $basic_details->property_category_id = $this->property_category_id;
        $basic_details->website = $this->website;
        $basic_details->image = $this->image;
        $basic_details->logo = $this->logo;

        $address_location = new AddressLocation();
        $address_location->id = $this->id;
        $address_location->country_id = $this->country_id;
        $address_location->location_id = $this->location_id;
        $address_location->destination_id = $this->destination_id;
        $address_location->address = $this->address;
        $address_location->postal_code = $this->postal_code;
        $address_location->locality = $this->locality;

        $legal_tax_documentation = new LegalTaxDocumentation();
        $legal_tax_documentation->id = $this->id;
        $legal_tax_documentation->legal_status_id = $this->legal_status_id;
        $legal_tax_documentation->pan_number = $this->pan_number;
        $legal_tax_documentation->business_licence_number = $this->business_licence_number;
        $legal_tax_documentation->gst_number = $this->gst_number;
        $legal_tax_documentation->bank_name = $this->bank_name;
        $legal_tax_documentation->bank_account_name = $this->bank_account_name;
        $legal_tax_documentation->bank_account_number = $this->bank_account_number;
        $legal_tax_documentation->ifsc_code = $this->ifsc_code;
        $legal_tax_documentation->swift_code = $this->swift_code;
        $legal_tax_documentation->pan_image = $this->pan_image;
        $legal_tax_documentation->business_licence_image = $this->business_licence_image;
        $legal_tax_documentation->gst_image = $this->gst_image;
        $legal_tax_documentation->cheque_image = $this->cheque_image;               

        $terms = new TermsConditions();
        $terms->id = $this->id;
        $terms->terms_and_conditons1 = $this->terms_and_conditons1;
        $terms->terms_and_conditons2 = $this->terms_and_conditons2;
        $terms->terms_and_conditons3 = $this->terms_and_conditons3;

        $basic_details_validated = false;
        $address_location_validated  = false;
        $legal_tax_documentation_validated  = false;
        $terms_validated = false;
        $rooms_validated  = false;

        if( $basic_details->validate()) {
            $basic_details_validated = true;
        }

        if( $address_location->validate()) {
            $address_location_validated = true;
        }

        if( $legal_tax_documentation->validate()) {
            $legal_tax_documentation_validated = true;
        }

        if( ($terms->terms_and_conditons1 && $terms->terms_and_conditons2 && $terms->terms_and_conditons1) ) {  
            $terms_validated = true;
        }
        
        if( count($this->rooms) > 0 ) {
            $rooms_validated = true;
        } 
               
        return ( $basic_details_validated && 
                $address_location_validated &&
                $legal_tax_documentation_validated && 
                $terms_validated &&
                $rooms_validated
            );
    }
}
