<?php

namespace frontend\controllers;

use frontend\models\property\AmenityGroup;
use frontend\models\property\CancellationRefundPeriod;
use frontend\models\Country;
use frontend\models\Destination;
use frontend\models\LegalDocsImages;
use frontend\models\Location;
use frontend\models\property\AddressLocation;
use frontend\models\property\LegalTaxDocumentation;
use frontend\models\property\PropertyAmenity;
use frontend\models\property\PropertyAmenitySuboption;
use frontend\models\property\PropertyComplimentaryAmenity;
use frontend\models\property\PropertyLegalStatus;
use frontend\models\property\PropertyParking;
use frontend\models\property\PropertyParkingType;
use frontend\models\property\PropertyParkingTypeMap;
use frontend\models\property\PropertyPetsPolicy;
use frontend\models\property\PropertyRestaurant;
use frontend\models\property\PropertyRestaurantCuisineOption;
use frontend\models\property\PropertyRestaurantCuisineOptionMap;
use frontend\models\property\PropertyRestaurantFoodOption;
use frontend\models\property\PropertyRestaurantFoodOptionMap;
use frontend\models\property\PropertySmokingPolicy;
use frontend\models\property\PropertySwimmingPool;
use frontend\models\property\PropertySwimmingPoolType;
use frontend\models\property\PropertySwimmingPoolTypeMap;
use frontend\models\property\RoomAmenity;
use frontend\models\property\RoomAmenitySuboption;
use frontend\models\property\TermsConditions;
use frontend\models\tariff\RoomTariffDatewise;
use frontend\models\tariff\TariffNationalityGroupName;
use frontend\models\tariff\TariffNationalityTable;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;

use frontend\models\property\BasicDetails;
use frontend\models\property\PropertyType;
use frontend\models\property\PropertyCategory;
use frontend\models\property\Property;
use frontend\models\property\PropertyImage;
use frontend\models\property\PropertyContacts;
use frontend\models\property\PropertyPictures;
use frontend\models\property\RoomPictures;
use frontend\models\property\Room;
use frontend\models\property\RoomType;
use frontend\models\property\PropertyRoomView;
use frontend\models\property\PropertyMealPlan;
use frontend\models\property\PropertyRoomExtraBedType;
use frontend\models\MasterEditRequest;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\helpers\Url;

class PropertyController extends Controller
{
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;

        if (Yii::$app->user->isGuest) {
            Yii::$app->user->loginRequired();
            return;
        }

        if (Yii::$app->user->identity->user_type != 1) {
            throw new ForbiddenHttpException();
        }

        return parent::beforeAction($action);
    }

    private function getProperty()
    {
        if (!isset($_GET['id'])) {
            throw new NotFoundHttpException();
        }

        $property = NULL;
        $property_id = (int)Yii::$app->request->get('id');
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();

            if ($property == NULL) {
                throw new NotFoundHttpException();
            }
        } else {
            throw new NotFoundHttpException();
        }

        /*     $property = Property::find()
            ->where(['id' => $property_id])
            ->one(); */
        if ($property == NULL) {
            throw new NotFoundHttpException();
        }

        return $property;
    }

    public function actionHome()
    {
        $this->layout = 'tm_main';
        $roles = Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId());
        if (ArrayHelper::keyExists('HotelOwner', $roles, false)) {

            $properties = Property::find()->where(['owner_id' => Yii::$app->user->identity->getOWnerId()])->all();
        } else {
            $usr = Yii::$app->user->identity;
            $assigned_properties = $usr->getUserPropertyMaps()->select(['property_id'])->column();

            $properties = Property::find()
                ->where(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->andWhere(['in', 'id', $assigned_properties])
                ->all();
        }

        if (count($properties) > 0 ) {
            return $this->render('home', ['properties' => $properties]);
        }

        return $this->render('empty', []);
    }

    public function actionValidate()
    {
        $property = $this->getProperty();

        $basic_details = new BasicDetails();
        $basic_details->id = $property->id;
        $basic_details->name = $property->name;
        $basic_details->property_type_id = $property->property_type_id;
        $basic_details->property_category_id = $property->property_category_id;
        $basic_details->website = $property->website;
        $basic_details->image = $property->image;
        $basic_details->logo = $property->logo;

        $address_location = new AddressLocation();
        $address_location->id = $property->id;
        $address_location->country_id = $property->country_id;
        $address_location->location_id = $property->location_id;
        $address_location->destination_id = $property->destination_id;
        $address_location->address = $property->address;
        $address_location->postal_code = $property->postal_code;
        $address_location->locality = $property->locality;

        $legal_tax_documentation = new LegalTaxDocumentation();
        $legal_tax_documentation->id = $property->id;
        $legal_tax_documentation->legal_status_id = $property->legal_status_id;
        $legal_tax_documentation->pan_number = $property->pan_number;
        $legal_tax_documentation->business_licence_number = $property->business_licence_number;
        $legal_tax_documentation->gst_number = $property->gst_number;
        $legal_tax_documentation->bank_name = $property->bank_name;
        $legal_tax_documentation->bank_account_name = $property->bank_account_name;
        $legal_tax_documentation->bank_account_number = $property->bank_account_number;
        $legal_tax_documentation->ifsc_code = $property->ifsc_code;
        $legal_tax_documentation->swift_code = $property->swift_code;
        $legal_tax_documentation->pan_image = $property->pan_image;
        $legal_tax_documentation->business_licence_image = $property->business_licence_image;
        $legal_tax_documentation->gst_image = $property->gst_image;
        $legal_tax_documentation->cheque_image = $property->cheque_image;

        $terms = new TermsConditions();
        $terms->id = $property->id;
        $terms->terms_and_conditons1 = $property->terms_and_conditons1;
        $terms->terms_and_conditons2 = $property->terms_and_conditons2;
        $terms->terms_and_conditons3 = $property->terms_and_conditons3;

        $basic_details_results = NULL;
        $address_location_results = NULL;
        $legal_tax_documentation_results = NULL;
        $terms_results = NULL;

        if( !$basic_details->validate()) {
            $basic_details_results = $basic_details->errors;
        }

        if( !$address_location->validate()) {
            $address_location_results = $address_location->errors;
        }

        if( !$legal_tax_documentation->validate()) {
            $legal_tax_documentation_results = $legal_tax_documentation->errors;
        }

        if( !($terms->terms_and_conditons1 && $terms->terms_and_conditons2 && $terms->terms_and_conditons1) ) {
            $terms->addError('rooms', "Terms and conditions not accepted");
            $terms_results = $terms->errors;
        }

        if( count($property->rooms) == 0) {
            $property->addError('rooms', "Not defined room categories");
        }

        $this->layout = 'tm_main';
        return $this->render('validation', [
            'property' => $property,
            'basic_details' => $basic_details_results,
            'address_location' => $address_location_results,
            'legal_tax_documentation' => $legal_tax_documentation_results,
            'terms' => $terms_results
        ]);


    }
    public function actionBasicdetails()
    {
        $this->layout = 'tm_main';
        $property = NULL;
        if (isset($_GET['id'])) {
            $property_id = Yii::$app->request->get('id');
            $property = Property::find()
                ->where(['id' => $property_id])
                ->andWhere(['owner_id' => Yii::$app->user->getId()])
                ->one();

            if ($property == NULL) {
                throw new NotFoundHttpException();
            }
        }

        $type = MasterEditRequest::find()->where(['name' => 'property type'])->one();
        $rating = MasterEditRequest::find()->where(['name' => 'property rating'])->one();
        $property_name = MasterEditRequest::find()->where(['name' => 'property name'])->one();
//        return $this->asJson($type);

        $basic_details = new BasicDetails();
        $property_image = new PropertyImage();
        if ($property == NULL) {
            $property = new Property();
            $basic_details->id = 0;
            $property_image->scenario = "create";
        } else {
            $basic_details->id = $property->id;
            $basic_details->name = $property->name;
            $basic_details->property_type_id = $property->property_type_id;
            $basic_details->property_category_id = $property->property_category_id;
            $basic_details->website = $property->website;
            $basic_details->image = $property->image;
            $basic_details->logo = $property->logo;
        }

        $show_terms_tab = true;
        if ($property->terms_and_conditons1 == 1 &&
            $property->terms_and_conditons2 == 1 &&
            $property->terms_and_conditons3 == 1) {
            $show_terms_tab = false;
        }

        $property_types = ArrayHelper::map(PropertyType::find()->asArray()->all(), 'id', 'name');
        $property_categories = ArrayHelper::map(PropertyCategory::find()->asArray()->all(), 'id', 'name');
//         $property_image = new PropertyImage();
        return $this->render('basic_details', [
            'basic_details' => $basic_details,
            'property_types' => $property_types,
            'property_categories' => $property_categories,
            'property_image' => $property_image,
            'show_terms_tab' => $show_terms_tab,
            'property' => $property,
            'type' => $type->id,
            'rating' => $rating->id,
            'property_name' => $property_name
        ]);

    }

    public function actionSavepropertybasic()
    {
        $basic_details = new BasicDetails();

        if (!$basic_details->load(Yii::$app->request->post())) {
            echo "Load failed";
        }

        $property_image = new PropertyImage();
        $property_image->proFile = UploadedFile::getInstance($property_image, 'proFile');
        $property_image->logoFile = UploadedFile::getInstance($property_image, 'logoFile');

        $property_id = Yii::$app->request->post('property_id');

        //Check this prooerty owned by this user
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->one();

            if ($property == NULL) {
                //Property (id) doesn't exists
                throw new NotFoundHttpException();
            }
        } else {
            $property = new Property();
        }

        $property->name = $basic_details->name;
        $property->property_type_id = $basic_details->property_type_id;
        $property->property_category_id = $basic_details->property_category_id;
        $property->website = $basic_details->website;
        $property->owner_id = Yii::$app->user->getId();
//        $property->owner_id =2;

        if ($property_image->proFile != null) {
            $file_name = uniqid('', true) . '.' . $property_image->proFile->extension;
            if ($property_image->upload($property_image->proFile, $file_name)) {
                //TODO: Will we allow to proceed if image upload fails
                $property->image = $file_name;

            } else {
//                echo "Image upload failed";
            }
        } else {
            if (empty($property->image)) {
//                echo "Profile image (Mandatory) upload failed";
            }
        }

        if ($property_image->logoFile != null) {

            $file_namelogo = uniqid('', true) . '.' . $property_image->logoFile->extension;

            if ($property_image->upload($property_image->logoFile, $file_namelogo)) {
                //TODO: Will we allow to proceed if image upload fails
                $property->logo = $file_namelogo;

            } else {
//                echo "Image upload failed";
            }
        } else {
            if (empty($property->logo)) {
//                echo "Profile image (Mandatory) upload failed";
            }
        }

        if ($property->save(false)) {

            Yii::$app->session->setFlash('success', "Property created successfully.");
            return $this->redirect(['property/addressandlocation', 'id' => $property->getPrimaryKey()]);
        } else {
            Yii::$app->session->setFlash('error', "Property creation failed.");
            $property_types = ArrayHelper::map(PropertyType::find()->asArray()->all(), 'id', 'name');
            $property_categories = ArrayHelper::map(PropertyCategory::find()->asArray()->all(), 'id', 'name');
            return $this->render('basic_details', ['basic_details' => $basic_details, 'property_types' => $property_types, 'property_categories' => $property_categories, 'property_image' => $property_image]);
        }
    }

    public function actionAddressandlocation()
    {
        $this->layout = 'tm_main';
        $property_id = Yii::$app->request->get('id');
        $property = NULL;
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->andWhere(['owner_id' => Yii::$app->user->getId()])
                ->one();
        }

        if ($property == NULL) {
            //Property (id) doesn't exists
            return $this->render('not_found', []);
            //throw new NotFoundHttpException();
        }

        $country = MasterEditRequest::find()->where(['name' => 'country'])->one();
        $location = MasterEditRequest::find()->where(['name' => 'location'])->one();
        $destination = MasterEditRequest::find()->where(['name' => 'destination'])->one();
        $pin_code = MasterEditRequest::find()->where(['name' => 'pin code'])->one();

        $address_location = new AddressLocation();
        $address_location->id = $property->id;
        $address_location->country_id = $property->country_id;
        $address_location->location_id = $property->location_id;
        $address_location->destination_id = $property->destination_id;
        $address_location->address = $property->address;
        $address_location->postal_code = $property->postal_code;
        $address_location->locality = $property->locality;

        $countries = ArrayHelper::map(Country::find()->asArray()->all(), 'id', 'name');
        $locations = ArrayHelper::map(Location::find()->where(['country_id' => $property->country_id])->asArray()->all(), 'id', 'name');
        $destinations = ArrayHelper::map(Destination::find()->where(['location_id' => $property->location_id])->asArray()->all(), 'id', 'name');

        $show_terms_tab = true;
        if ($property->terms_and_conditons1 == 1 &&
            $property->terms_and_conditons2 == 1 &&
            $property->terms_and_conditons3 == 1) {
            $show_terms_tab = false;
        }

//        return $this->asJson($countries);
        return $this->render('address_and_locations', [
                'address_location' => $address_location,
                'countries' => $countries,
                'locations' => $locations,
                'destinations' => $destinations,
                'show_terms_tab' => $show_terms_tab,
                'property' => $property,
                'location' => $location->id,
                'destination' => $destination->id,
                'country' => $country->id,
                'pin_code' => $pin_code->id,
            ]
        );
    }
    public function actionLocationlist(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $country_id = Yii::$app->request->get('countryID');
        $locations = ArrayHelper::map(Location::find()->where(['country_id' => $country_id])->asArray()->all(), 'id', 'name');
        return $locations ;
    }
    public function actionDestinationlist(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $location_id = Yii::$app->request->get('location_id');
        $destinations = ArrayHelper::map(Destination::find()->where(['location_id' => $location_id])->asArray()->all(), 'id', 'name');
        return $destinations ;
    }

    public function actionSavepropertyaddresslocation()
    {
        $address_location = new AddressLocation();
        if (!$address_location->load(Yii::$app->request->post())) {
            //TODO
            echo "Load failed";
        }

        $property_id = $address_location->id;
        $property = NULL;
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
//                ->andWhere(['owner_id' => Yii::$app->user->getId()])
                ->one();
        }

        if ($property == NULL) {
            //Property (id) doesn't exists
            return $this->render('not_found', []);
        }

        if (!$address_location->validate()) {
            $countries = ArrayHelper::map(Country::find()->asArray()->all(), 'id', 'name');
            $locations = ArrayHelper::map(Location::find()->where(['country_id' => 1])->asArray()->all(), 'id', 'name');
            $destinations = ArrayHelper::map(Destination::find()->asArray()->all(), 'id', 'name');

            return $this->render('address_location', [
                    'address_location' => $address_location,
                    'countries' => $countries,
                    'locations' => $locations,
                    'destinations' => $destinations
                ]
            );
        }

        //Validation success
        $property->country_id = $address_location->country_id;
        $property->location_id = $address_location->location_id;
        $property->destination_id = $address_location->destination_id;
        $property->address = $address_location->address;
        $property->postal_code = $address_location->postal_code;
        $property->locality = $address_location->locality;

        if ($property->save(false)) {
            Yii::$app->session->setFlash('success', "Address and location updated successfully.");
            return $this->redirect(['property/legaltax', 'id' => $property->getPrimaryKey()]);
        } else {
            Yii::$app->session->setFlash('error', "Address and location updation failed.");
            $countries = ArrayHelper::map(Country::find()->asArray()->all(), 'id', 'name');
            $locations = ArrayHelper::map(Location::find()->where(['country_id' => 1])->asArray()->all(), 'id', 'name');
            $destinations = ArrayHelper::map(Destination::find()->asArray()->all(), 'id', 'name');

            return $this->render('address_location', [
                    'address_location' => $address_location,
                    'countries' => $countries,
                    'locations' => $locations,
                    'destinations' => $destinations
                ]
            );
        }
    }

    public function actionLegaltax()
    {
        $this->layout = 'tm_main';
        $property_id = Yii::$app->request->get('id');
        //Check this prooerty owned by this user
        $property = NULL;
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->andWhere(['owner_id' => Yii::$app->user->getId()])
                ->one();
        }

        if ($property == NULL) {
            //Property (id) doesn't exists
            return $this->render('not_found', []);
        }

        $property_legal_status = MasterEditRequest::find()->where(['name' => 'legal status'])->one();
        $pan_number = MasterEditRequest::find()->where(['name' => 'pan number'])->one();
        $business_license_number = MasterEditRequest::find()->where(['name' => 'business license number'])->one();
        $bank_name = MasterEditRequest::find()->where(['name' => 'bank name'])->one();
        $account_number = MasterEditRequest::find()->where(['name' => 'account number'])->one();
        $account_name = MasterEditRequest::find()->where(['name' => 'account name'])->one();
        $ifsc_code = MasterEditRequest::find()->where(['name' => 'ifsc code'])->one();


        $legal_tax_documentation = new LegalTaxDocumentation();
        $legal_tax_documentation->id = $property->id;
        $legal_tax_documentation->legal_status_id = $property->legal_status_id;
        $legal_tax_documentation->pan_number = $property->pan_number;
        $legal_tax_documentation->business_licence_number = $property->business_licence_number;
        $legal_tax_documentation->gst_number = $property->gst_number;
        $legal_tax_documentation->bank_name = $property->bank_name;
        $legal_tax_documentation->bank_account_name = $property->bank_account_name;
        $legal_tax_documentation->bank_account_number = $property->bank_account_number;
        $legal_tax_documentation->ifsc_code = $property->ifsc_code;
        $legal_tax_documentation->swift_code = $property->swift_code;
        $legal_tax_documentation->pan_image = $property->pan_image;
        $legal_tax_documentation->business_licence_image = $property->business_licence_image;
        $legal_tax_documentation->gst_image = $property->gst_image;
        $legal_tax_documentation->cheque_image = $property->cheque_image;

        $legal_status = ArrayHelper::map(PropertyLegalStatus::find()->asArray()->all(), 'id', 'name');
        $legal_docs_images = new LegalDocsImages();

        //TODO: If any of the image is empty, the scenario will be 'create' and require to upload all the images.
        //TOFIX: create separate model for PAN, BLN and GST Images and if empty set scenario 'create' for that model only
        //TODO: move LegalDocsImages to property folder
        if($property->pan_image == NULL ||
            $property->business_licence_image == NULL ) {

            $legal_docs_images->scenario = "create";
        }

        $gst_image_is_there = 0;
        if( $property->gst_image != NULL) {
            //GST image required during edit
            $gst_image_is_there = 1;
        }

        $show_terms_tab = true;
        if ($property->terms_and_conditons1 == 1 &&
            $property->terms_and_conditons2 == 1 &&
            $property->terms_and_conditons3 == 1) {
            $show_terms_tab = false;
        }

        return $this->render('legal_and_tax', [
            'legal_tax_documentation' => $legal_tax_documentation,
            'legal_status' => $legal_status,
            'legal_docs_images' => $legal_docs_images,
            'show_terms_tab' => $show_terms_tab,
            'gst_image_is_there' => $gst_image_is_there,
            'property' => $property,
            'legal_status_id' => $property_legal_status->id,
            'pan_number' => $pan_number->id,
            'business_license_number' => $business_license_number->id,
            'bank_name' => $bank_name->id,
            'account_number' => $account_number->id,
            'account_name' => $account_name->id,
            'ifsc_code' => $ifsc_code->id,
        ]);
    }

    public function actionSavelegaltax()
    {
        $legal_tax_documentation = new LegalTaxDocumentation();
        $legal_tax_documentation->setAttributes($_POST['LegalTaxDocumentation'], false);
        if (!$legal_tax_documentation->load(Yii::$app->request->post())) {
            //TODO
            echo "Load failed";
        }

        $property_id = $legal_tax_documentation->id;
        $property = NULL;
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
//                ->andWhere(['owner_id' => Yii::$app->user->getId()])
                ->one();
        }

        if ($property == NULL) {
            //Property (id) doesn't exists
            return $this->render('not_found', []);
        }

        //Validation success
        $property->legal_status_id = $legal_tax_documentation->legal_status_id;
        $property->pan_number = $legal_tax_documentation->pan_number;
        $property->business_licence_number = $legal_tax_documentation->business_licence_number;
        $property->gst_number = trim($legal_tax_documentation->gst_number);
        $property->bank_name = $legal_tax_documentation->bank_name;
        $property->bank_account_name = $legal_tax_documentation->bank_account_name;
        $property->bank_account_number = $legal_tax_documentation->bank_account_number;
        $property->ifsc_code = $legal_tax_documentation->ifsc_code;
//        $property->pan_image = $legal_tax_documentation->pan_image;
//        $property->business_licence_image = $legal_tax_documentation->business_licence_image;
//        $property->gst_image =  $legal_tax_documentation->gst_image;
//        $property->swift_code = $legal_tax_documentation->swift_code;

        $legal_doc_images = new LegalDocsImages();
        $legal_doc_images->pan_image = UploadedFile::getInstance($legal_doc_images, 'pan_image');
        $legal_doc_images->gst_image = UploadedFile::getInstance($legal_doc_images, 'gst_image');
        $legal_doc_images->business_licence_image = UploadedFile::getInstance($legal_doc_images, 'business_licence_image');

        //PAN
        if ($legal_doc_images->pan_image != null) {
            $file_name = uniqid('', true) . '.' . $legal_doc_images->pan_image->extension;
            if ($legal_doc_images->upload($legal_doc_images->pan_image, $file_name)) {
                //TODO: Will we allow to proceed if image upload fails
                $property->pan_image = $file_name;

            } else {
//                echo "Image upload failed";
            }
        } else {
            if (empty($property->pan_image)) {
//                echo "Profile image (Mandatory) upload failed";
            }
        }

        //GST upload if GST number is enterd
        if(strlen($property->gst_number) > 0 ) {
            if ($legal_doc_images->gst_image != null) {
                $file_name = uniqid('', true) . '.' . $legal_doc_images->gst_image->extension;
                if ($legal_doc_images->upload($legal_doc_images->gst_image, $file_name)) {
                    //TODO: Will we allow to proceed if image upload fails
                    $property->gst_image = $file_name;

                } else {
    //                echo "Image upload failed";
                }
            } else {
                if (empty($property->gst_image)) {
    //                echo "Profile image (Mandatory) upload failed";
                }
            }
        } else {
            //TODO: Delete already uploaded GST image and set image name as NULL
            if (is_file('uploads/' . $property->gst_image)) {
                if (!unlink('uploads/' . $property->gst_image)) {
                //TODO: Log error, with file name that cannot delete file
                }           
            }
            $property->gst_image = NULL;
        }

        //Licence
        if ($legal_doc_images->business_licence_image != null) {
            $file_name = uniqid('', true) . '.' . $legal_doc_images->business_licence_image->extension;
            if ($legal_doc_images->upload($legal_doc_images->business_licence_image, $file_name)) {
                //TODO: Will we allow to proceed if image upload fails
                $property->business_licence_image = $file_name;

            } else {
//                echo "Image upload failed";
            }
        } else {
            if (empty($property->business_licence_image)) {
//                echo "Profile image (Mandatory) upload failed";
            }
        }

        if ($property->save(false)) {
            Yii::$app->session->setFlash('success', "Property documents updated successfully.");
            return $this->redirect(['property/contact', 'id' => $property->getPrimaryKey()]);
        } else {
            Yii::$app->session->setFlash('error', "Property documents updation failed.");
            $legal_status = ArrayHelper::map(PropertyLegalStatus::find()->asArray()->all(), 'id', 'name');
            $legal_docs_images = new LegalDocsImages();
            return $this->render('legal_and_tax', ['legal_tax_documentation' => $legal_tax_documentation, 'legal_status' => $legal_status, 'legal_docs_images' => $legal_docs_images]);
        }
    }

    public function actionContact()
    {
        $this->layout = 'tm_main';
        $property_id = Yii::$app->request->get('id');
        $property = NULL;
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();
        }

        if ($property == NULL) {
            //Property (id) doesn't exists
            return $this->render('not_found', []);
        }

        $contact = PropertyContacts::find()
            ->where(['property_id' => $property_id])
            ->one();

        if ($contact == NULL) {
            $contact = new PropertyContacts();
            $contact->property_id = $property_id;
        }

        $show_terms_tab = 1;
        if ($property->terms_and_conditons1 == 1 &&
            $property->terms_and_conditons2 == 1 &&
            $property->terms_and_conditons3 == 1) {
            $show_terms_tab = 0;
        }

        return $this->render('contact_details', ['contact' => $contact, 'property' => $property, 'show_terms_tab' => $show_terms_tab]);
    }

    public function actionSavecontactdetails()
    {
        $property_id = $_POST['PropertyContacts']['property_id'];
        $property = NULL;
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();
        }

        if ($property == NULL) {
            //Property (id) doesn't exists
            throw new NotFoundHttpException();
        }

        $contacts = PropertyContacts::find()
            ->where(['property_id' => $property_id])
            ->one();

        if ($contacts == NULL) {
            $contacts = new PropertyContacts();
        }

        if (isset($_POST['PropertyContacts'])) {
            $contacts->sales_name = $_POST['PropertyContacts']['sales_name'];
            $contacts->reservation_name = $_POST['PropertyContacts']['reservation_name'];
            $contacts->front_office_name = $_POST['PropertyContacts']['front_office_name'];
            $contacts->accounts_office_name = $_POST['PropertyContacts']['accounts_office_name'];
            $contacts->sales_phone = $_POST['PropertyContacts']['sales_phone'];
            $contacts->reservation_phone = $_POST['PropertyContacts']['reservation_phone'];
            $contacts->front_office_phone = $_POST['PropertyContacts']['front_office_phone'];
            $contacts->accounts_office_phone = $_POST['PropertyContacts']['accounts_office_phone'];
            $contacts->sales_email = $_POST['PropertyContacts']['sales_email'];
            $contacts->reservation_email = $_POST['PropertyContacts']['reservation_email'];
            $contacts->front_office_email = $_POST['PropertyContacts']['front_office_email'];
            $contacts->accounts_office_email = $_POST['PropertyContacts']['accounts_office_email'];
            $contacts->property_id = $property_id;

            if ($contacts->validate()) {
                $contacts->save();
                $property->save();

                $show_terms_tab = Yii::$app->request->post('show_terms_tab');
                $redirect_url = 'property/';
                $redirect_url .= ($show_terms_tab == 1) ? "termsandconditions" : "home";
                return $this->redirect([$redirect_url, 'id' => $property_id]);
            } else {
                return $this->render('contact_details', ['contact' => $contacts]);
            }
        }
    }

    public function actionSavecontactdetails1()
    {
        $property_id = $_POST['PropertyContacts']['property_id'];

        $property = NULL;
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();
        }

        if ($property == NULL) {
            //Property (id) doesn't exists
            throw new NotFoundHttpException();
        }

        $contacts = PropertyContacts::find()
            ->where(['property_id' => $property_id])
            ->one();

        if ($contacts == NULL) {
            $contacts = new PropertyContacts();
        }

        if (isset($_POST['PropertyContacts'])) {
            $contacts->sales_name = $_POST['PropertyContacts']['sales_name'];
            $contacts->reservation_name = $_POST['PropertyContacts']['reservation_name'];
            $contacts->front_office_name = $_POST['PropertyContacts']['front_office_name'];
            $contacts->accounts_office_name = $_POST['PropertyContacts']['accounts_office_name'];
            $contacts->sales_phone = $_POST['PropertyContacts']['sales_phone'];
            $contacts->reservation_phone = $_POST['PropertyContacts']['reservation_phone'];
            $contacts->front_office_phone = $_POST['PropertyContacts']['front_office_phone'];
            $contacts->accounts_office_phone = $_POST['PropertyContacts']['accounts_office_phone'];
            $contacts->sales_email = $_POST['PropertyContacts']['sales_email'];
            $contacts->reservation_email = $_POST['PropertyContacts']['reservation_email'];
            $contacts->front_office_email = $_POST['PropertyContacts']['front_office_email'];
            $contacts->accounts_office_email = $_POST['PropertyContacts']['accounts_office_email'];
            $contacts->property_id = $property_id;
        }

        if ($property->save(false)) {
            Yii::$app->session->setFlash('success', "Property documents updated successfully.");
            return $this->redirect(['property/termsandconditions', 'id' => $property->getPrimaryKey()]);
        } else {
            return $this->render('contact_details', ['contact' => $contacts]);
        }
    }

    public function actionTermsandconditions()
    {
        $property_id = Yii::$app->request->get('id');
        $property = NULL;
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();
        }

        if ($property == NULL) {
            //Property (id) doesn't exists
            return $this->render('not_found', []);
        }

        if ($property->terms_and_conditons1 == 1 &&
            $property->terms_and_conditons2 == 1 &&
            $property->terms_and_conditons3 == 1) {
            throw new ForbiddenHttpException();
        }

        $terms = new TermsConditions();
        $terms->id = $property->id;
        $terms->terms_and_conditons1 = $property->terms_and_conditons1;
        $terms->terms_and_conditons2 = $property->terms_and_conditons2;
        $terms->terms_and_conditons3 = $property->terms_and_conditons3;

        $this->layout = 'tm_main';
        return $this->render('terms_and_conditions', ['terms' => $terms, 'property' => $property,]);
    }

    public function actionSaveterms()
    {
        $terms = new TermsConditions();
        if (!$terms->load(Yii::$app->request->post())) {
            //TODO
            echo "Load failed";
        }

        $property_id = $terms->id;
        $property = NULL;
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();
        }

        if ($property == NULL) {
            //Property (id) doesn't exists
            throw new NotFoundHttpException();
        }

        if ($terms->terms_and_conditons1 == 1 &&
            $terms->terms_and_conditons2 == 1 &&
            $terms->terms_and_conditons3 == 1) {
            $property->terms_and_conditons1 = 1;
            $property->terms_and_conditons2 = 1;
            $property->terms_and_conditons3 = 1;
        }

        if ($property->save(false)) {
            //Yii::$app->session->setFlash('success', "Property documents updated successfully.");
            return $this->redirect(['property/home', 'id' => $property->getPrimaryKey()]);
        } else {
            Yii::$app->session->setFlash('error', "Terms and condition updation failed.");
            $terms = new TermsConditions();
            $terms->id = $property->id;
            $terms->terms_and_conditons1 = $property->terms_and_conditons1;
            $terms->terms_and_conditons2 = $property->terms_and_conditons2;
            $terms->terms_and_conditons3 = $property->terms_and_conditons3;

            return $this->render('terms_and_conditions', ['terms' => $terms]);
        }
    }


    public function actionRules()
    {
        $this->layout = 'tm_main';
        $property = $this->getProperty();

        //If basic details is not completely filled, show validation result
        if( !($property->country_id && $property->legal_status_id && $property->property_type_id)) {
            return $this->redirect(['property/validate', 'id' => $property->getPrimaryKey()]);
        }

        $smoking_policy = ArrayHelper::map(PropertySmokingPolicy::find()->asArray()->all(), 'id', 'name');
        $pets_policy = ArrayHelper::map(PropertyPetsPolicy::find()->asArray()->all(), 'id', 'name');
        return $this->render('rules_and_policies', ['property' => $property, 'smoking_policy' => $smoking_policy, 'pets_policy' => $pets_policy]);
    }

    public function actionSavecheckincheckout()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if (!isset($_REQUEST['property_id'])) {
            return array('status' => 2, 'message' => "Invalid input. Property missing.", 'data' => 0);
        }

        $property_id = Yii::$app->request->post('property_id');

        //Check this proerty owned by this user
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->one();

            if ($property == NULL) {
                return array('status' => 2, 'message' => "Property (id) doesn't exists", 'data' => 0);
            }
        } else {
            return array('status' => 2, 'message' => "Property id cannot zero", 'data' => 0);
        }

        $property->twenty_four_hours_check_in = Yii::$app->request->post('twenty_four_hours_check_in');
//        if ( !$property->twenty_four_hours_check_in ) {
        if ($property->twenty_four_hours_check_in) {
            $property->check_in_time = Yii::$app->request->post('check_in_time');
            $property->check_out_time = Yii::$app->request->post('check_out_time');
        }

        if ($property->save()) {
//            return Yii::$app->request->post('CSRF');
            return array('status' => 0, 'message' => "Property Checkin/Check out time updated successfully", 'data' => 0);
        }

        return array('status' => 1, 'message' => "Failed to update Checkin/Check out policy.", 'data' => 0);
    }

    public function actionSavesmokingpolicy()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if (!isset($_REQUEST['property_id'])) {
            return array('status' => 2, 'message' => "Invalid input. Property id missing.", 'data' => 0);;
        }

        $property_id = Yii::$app->request->post('property_id');

        //TODO: Check this proerty owned by this user
        if ($property_id != 0) {

            $property = Property::find()
                ->where(['id' => $property_id])
                ->one();

            if ($property == NULL) {
                return array('status' => 2, 'message' => "Property (id) doesn't exists", 'data' => 0);
            }
        } else {
            return array('status' => 2, 'message' => "Property id cannot zero", 'data' => 0);
        }

        $property->smoking_policy_id = Yii::$app->request->post('smoking_policy_id');

        if ($property->save()) {
            return array('status' => 0, 'message' => "Property Smoking policy updated successfully", 'data' => 0);
        }

        return array('status' => 1, 'message' => "Failed to update Smoking policy.", 'data' => 0);
    }

    public function actionSavepetspolicy()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if (!isset($_REQUEST['property_id'])) {
            return array('status' => 2, 'message' => "Invalid input. Property id missing.", 'data' => 0);;
        }

        $property_id = Yii::$app->request->post('property_id');

        //TODO: Check this proerty owned by this user
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->one();

            if ($property == NULL) {
                return array('status' => 2, 'message' => "Property (id) doesn't exists", 'data' => 0);
            }
        } else {
            return array('status' => 2, 'message' => "Property id cannot zero", 'data' => 0);
        }

        $property->pets_policy_id = Yii::$app->request->post('pets_policy_id');
        if ($property->save()) {
            return array('status' => 0, 'message' => "Property Pets policy updated successfully", 'data' => 0);
        }

        return array('status' => 1, 'message' => "Failed to update Pets policy.", 'data' => 0);
    }

    public function actionSavecancellationcharges()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if (!isset($_REQUEST['property_id'])) {
            return array('status' => 2, 'message' => "Invalid input. Property id missing.", 'data' => 0);;
        }

        $property_id = Yii::$app->request->post('property_id');
        //Check this prooerty owned by this user
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->one();

            if ($property == NULL) {
                return array('status' => 2, 'message' => "Property (id) doesn't exists", 'data' => 0);
            }
        } else {
            return array('status' => 2, 'message' => "Property id cannot zero", 'data' => 0);
        }

        $property->cancellation_has_period_charge = Yii::$app->request->post('cancellation_has_period_charge');
        $property->cancellation_has_admin_charge = Yii::$app->request->post('cancellation_has_admin_charge');
        $property->admin_cancellation_type = Yii::$app->request->post('admin_cancellation_type');
        $property->cancellation_lumsum_amount = Yii::$app->request->post('cancellation_lumsum_amount');
        $property->cancellation_percentage_rate = Yii::$app->request->post('cancellation_percentage_rate');
        $property->cancellation_per_adult_amount = Yii::$app->request->post('cancellation_per_adult_amount');
        $property->cancellation_per_kids_amount = Yii::$app->request->post('cancellation_per_kids_amount');
        $property->cancellation_full_refund_days = Yii::$app->request->post('cancellation_full_refund_days');
        $property->cancellation_no_refund_days = Yii::$app->request->post('cancellation_no_refund_days');

        //Store peridwise rates
        if ($property->cancellation_has_period_charge) {
            $period_data = Yii::$app->request->post('period_data');
            parse_str($period_data, $periodDataArray);
            $period_count = count($periodDataArray["percentage"]);

            //Delete previous period definition, before adding new period definition
            if ($period_count > 0) {
                CancellationRefundPeriod::deleteAll(['property_id' => $property_id]);
            }

            for ($i = 0; $i < $period_count; $i++) {
                $canellation_period = new CancellationRefundPeriod();
                $canellation_period->property_id = $property_id;
                $canellation_period->percentage = $periodDataArray["percentage"][$i];
                $canellation_period->from_date = $periodDataArray["from_days"][$i];
                $canellation_period->to_date = $periodDataArray["to_days"][$i];

                $canellation_period->save();
            }
        }

        if ($property->save()) {
            return array('status' => 0, 'message' => "Property Cancellation policy updated successfully", 'data' => 0);
        }
    }

    public function actionSavechildpolicy()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if (!isset($_REQUEST['property_id'])) {
            return array('status' => 2, 'message' => "Invalid input. Property id missing.", 'data' => 0);
        }

        $property_id = Yii::$app->request->post('property_id');
        //Check this prooerty owned by this user
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->one();

            if ($property == NULL) {
                return array('status' => 2, 'message' => "Property (id) doesn't exists", 'data' => 0);
            }
        } else {
            return array('status' => 2, 'message' => "Property id cannot zero", 'data' => 0);
        }

        $property->allow_child_of_all_ages = Yii::$app->request->post('allow_child_of_all_ages');
        $property->restricted_for_child = Yii::$app->request->post('restricted_for_child');
        $property->restricted_for_child_below_age = Yii::$app->request->post('restricted_for_child_below_age');
        $property->allow_complimentary = Yii::$app->request->post('allow_complimentary');
        $property->complimentary_from_age = Yii::$app->request->post('complimentary_from_age');
        $property->complimentary_to_age = Yii::$app->request->post('complimentary_to_age');
        $property->allow_child_rate = Yii::$app->request->post('allow_child_rate');
        $property->child_rate_from_age = Yii::$app->request->post('child_rate_from_age');
        $property->child_rate_to_age = Yii::$app->request->post('child_rate_to_age');
        $property->allow_adult_rate = Yii::$app->request->post('allow_adult_rate');
        $property->adult_rate_age = Yii::$app->request->post('adult_rate_age');

        if ($property->save()) {
            return array('status' => 0, 'message' => "Property Cancellation policy updated successfully", 'data' => 0);
        } else {
            return array('status' => 5, 'message' => "Property Cancellation policy update failed", 'data' => 0);
        }

    }

    public function actionNationalities()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $group_id = Yii::$app->request->get('group_id');
        $property_id = Yii::$app->request->get('property_id');
        $group_names = TariffNationalityGroupName::find()->where(['property_id' => $property_id])->andWhere(['<>', 'id', $group_id])->all();

        $all_linked_nationalities = array();
        $i = 0;
        foreach ($group_names as $group) {
            foreach ($group->tariffNationalityTables as $table) {
                $all_linked_nationalities[$i] = $table->country_id;
                $i++;
            }
        }

        //Edit mode?
        $linked_nationalities_in_group = array();
        if ($group_id != 0) {
            $linked_group = TariffNationalityGroupName::find()->where(['id' => $group_id])->one();
            $i = 0;
            foreach ($linked_group->tariffNationalityTables as $country) {
                $linked_nationalities_in_group[$i] = $country->country_id;
                $i++;
            }
        }

        $countries = Country::find()->where(['not in', 'id', $all_linked_nationalities])->all();
        $countries_list = ArrayHelper::toArray($countries, ['frontend\models\Country' => ['id', 'name']]);
        //return $countries_list;

        $nationality = array('available_countries' => $countries_list, 'countries_in_group' => $linked_nationalities_in_group);
        //return $nationality;

        return array('status' => 0, 'message' => "Successfully updated nationality.", 'data' => $nationality);
    }

    public function actionSavenationalities()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $group_id = Yii::$app->request->post('group_id');
        $property_id = Yii::$app->request->post('property_id');
        $nationalities = Yii::$app->request->post('nationalities');
        $name = Yii::$app->request->post('name');


        $transaction = Yii::$app->db->beginTransaction();
        try {

            $group_name = null;
            if ($group_id != 0) {
                $group_name = TariffNationalityGroupName::find()->where(['id' => $group_id])->one();
            }

            if ($group_name == null) {
                $group_name = new TariffNationalityGroupName();
            }

            $country_count = count($nationalities);
            if ($country_count > 0) {
                TariffNationalityTable::deleteAll(['group_id' => $group_id]);
            }

            $group_name->name = $name;
            $group_name->property_id = $property_id;
            $group_name->save();

            for ($i = 0; $i < $country_count; $i++) {
                $tariff_nationality = new TariffNationalityTable();
                $tariff_nationality->country_id = $nationalities[$i];
                $tariff_nationality->group_id = $group_name->getPrimaryKey();
                $tariff_nationality->save();
            }

            $property = Property::find()->where(['id' => $property_id])->one();
            $property->room_tariff_same_for_all = Yii::$app->request->post('room_tariff_same_for_all');
            $property->save();
            $transaction->commit();

        } catch (\Exception $e) {
            $transaction->rollBack();
            throw $e;
        } catch (\Throwable $e) {
            $transaction->rollBack();
            throw $e;
        }
        $tableData = $this->renderPartial('_nationality_based_tariff_table', ['property' => $property]);

        return array('status' => 0, 'message' => "Successfully updated nationality.", 'data' => $tableData);
    }

    public function actionSavetariffoption()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if (!isset($_REQUEST['property_id'])) {
            return array('status' => 2, 'message' => "Invalid input. Property id missing.", 'data' => 0);;
        }

        $property_id = Yii::$app->request->post('property_id');


        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();

            if ($property == NULL) {
                return array('status' => 2, 'message' => "Property (id) doesn't exists", 'data' => 0);
            }
        } else {
            return array('status' => 2, 'message' => "Property id cannot zero", 'data' => 0);
        }

        $property->room_tariff_same_for_all = Yii::$app->request->post('room_tariff_same_for_all');
        if ($property->save()) {
            return array('status' => 0, 'message' => "Property Tariff option updated successfully", 'data' => 0);
        } else {
            return array('status' => 1, 'message' => "Failed to update Tariff option", 'data' => 0);
        }
    }

    public function actionSavemandatorydinneroption()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if (!isset($_REQUEST['property_id'])) {
            return array('status' => 2, 'message' => "Invalid input. Property id missing.", 'data' => 0);;
        }

        $property_id = Yii::$app->request->post('property_id');


        //TODO: Check this proerty owned by this user
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->one();

            if ($property == NULL) {
                return array('status' => 2, 'message' => "Property (id) doesn't exists", 'data' => 0);
            }
        } else {
            return array('status' => 2, 'message' => "Property id cannot zero", 'data' => 0);
        }

        $property->provide_compulsory_inclusions = Yii::$app->request->post('provide_compulsory_inclusions');

        if ($property->save()) {
            return array('status' => 0, 'message' => "Property Mandatory dinner option updated successfully", 'data' => 0);
        } else {
            return array('status' => 1, 'message' => "Failed to update Mandatory dinner option", 'data' => 0);
        }
    }

    public function actionSaveweekdayhikeoption()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if (!isset($_REQUEST['property_id'])) {
            return array('status' => 2, 'message' => "Invalid input. Property id missing.", 'data' => 0);;
        }

        $property_id = Yii::$app->request->post('property_id');

        //TODO: Check this proerty owned by this user
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->one();

            if ($property == NULL) {
                return array('status' => 2, 'message' => "Property (id) doesn't exists", 'data' => 0);
            }
        } else {
            return array('status' => 2, 'message' => "Property id cannot zero", 'data' => 0);
        }

        $property->have_weekday_hike = Yii::$app->request->post('have_weekday_hike');

        if ($property->save()) {
            return array('status' => 0, 'message' => "Property Weekday hike option updated successfully", 'data' => 0);
        } else {
            return array('status' => 1, 'message' => "Failed to update Weekday hike option", 'data' => 0);
        }
    }


    //////////////////////////////////Services &Amenities////////////////////////////////

    public function actionServiceamenities()
    {
        $property = $this->getProperty();

        //If basic details is not completely filled, show validation result
        if( !($property->country_id && $property->legal_status_id && $property->property_type_id)) {
            return $this->redirect(['property/validate', 'id' => $property->getPrimaryKey()]);
        }

        $swimming_pool = PropertySwimmingPool::find()
            ->where(['property_id' => $property->id])
            ->one();

        if ($swimming_pool == null) {
            $swimming_pool = new PropertySwimmingPool();
        }

        $type_id_list = array();
        foreach ($swimming_pool->propertySwimmingPoolTypeMaps as $type) {
            array_push($type_id_list, $type->pool_type_id);
        }

        $restaurant = PropertyRestaurant::find()
            ->where(['property_id' => $property->id])
            ->one();

        if ($restaurant == null) {
            $restaurant = new PropertyRestaurant();
        }

        $selected_food_options = array();
        foreach ($restaurant->propertyRestaurantFoodOptionMaps as $option) {
            array_push($selected_food_options, $option->food_option_id);
        }

        $selected_cuisine_options = array();
        foreach ($restaurant->propertyRestaurantCuisineOptionMaps as $option) {
            array_push($selected_cuisine_options, $option->cuisine_option_id);
        }

        $parking = PropertyParking::find()
            ->where(['property_id' => $property->id])
            ->one();

        if ($parking == null) {
            $parking = new PropertyParking();
        }

        $selected_parking_options = array();
        foreach ($parking->propertyParkingTypeMaps as $option) {
            array_push($selected_parking_options, $option->parking_type_id);
        }

        $restaurant_cuisine_options = PropertyRestaurantCuisineOption::find()->all();
        $restaurant_food_options = PropertyRestaurantFoodOption::find()->all();

        $pool_types = PropertySwimmingPoolType::find()->orderBy('id')->all();

        $parking_types = PropertyParkingType::find()->orderBy('id')->all();

        //$complimentary_amenities = PropertyComplimentaryAmenity::find()->where(['property_id' => $property_id])->all();

        $amenity_groups = AmenityGroup::find()->orderBy('id')->all();
        $property_amenity = new PropertyAmenity();
        $room_amenity = new RoomAmenity();
        $property_amenity_suboption = new PropertyAmenitySuboption();
        $room_amenity_suboption = new RoomAmenitySuboption();

        $rooms = Room::find()
            ->where(['property_id' => $property->id])
            ->all();

        $this->layout = 'tm_main';

        return $this->render('amenities', [
            'property' => $property, /*'complimentary_amenities' => $complimentary_amenities,*/
            'swimming_pool' => $swimming_pool,
            'pool_types' => $pool_types,
            'type_id_list' => $type_id_list,
            'restaurant_cuisine_options' => $restaurant_cuisine_options,
            'restaurant_food_options' => $restaurant_food_options,
            'restaurant' => $restaurant,
            'parking_types' => $parking_types,
            'selected_food_options' => $selected_food_options,
            'selected_cuisine_options' => $selected_cuisine_options,
            'selected_parking_options' => $selected_parking_options,
            'amenity_groups' => $amenity_groups,
            'rooms' => $rooms,
            'property_amenity' => $property_amenity,
            'room_amenity' => $room_amenity,
            'property_amenity_suboption' => $property_amenity_suboption,
            'room_amenity_suboption' => $room_amenity_suboption
        ]);
    }

    public function actionDeletenationality()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if (!isset($_REQUEST['group_id'])) {
            return array('status' => 2, 'message' => "Invalid input. Group id missing.", 'data' => 0);;
        }
        if (!isset($_REQUEST['property_id'])) {
            return array('status' => 2, 'message' => "Invalid input. Property missing.", 'data' => 0);;
        }

        $property_id = Yii::$app->request->post('property_id');
        $nationality_group_count = Yii::$app->request->post('nationality_group_count');

        $property = Property::find()->where(['id'=>$property_id])->one();

        $group_id = (int)Yii::$app->request->post('group_id');
        $transaction = Yii::$app->db->beginTransaction();
        try {
            $rows = TariffNationalityGroupName::deleteAll(['id' => $group_id]);
            RoomTariffDatewise::deleteAll(['nationality_id' => $group_id]);

            if ($nationality_group_count == 1 ){
                $property->room_tariff_same_for_all = 1;
                $property->save();
            }

            $transaction->commit();
            //TODO: Handling exception in page
        } catch (\Exception $e) {
            $transaction->rollBack();
            return array('status' => 2, 'message' => "error", 'data' => $e);
        } catch (\Throwable $e) {
            //TODO: Handling exception in page
            $transaction->rollBack();
//            throw $e;
            return array('status' => 2, 'message' => "error", 'data' => $e);

        }

        if ($rows > 0) {
            $tableData = $this->renderPartial('_nationality_based_tariff_table', ['property' => $property]);

            return array('status' => 0, 'message' => "Deleted natioanlity group", 'data' => $tableData);
        } else {
            return array('status' => 1, 'message' => "Delete natioanlity group failed", 'data' => 0);
        }
    }

    public function actionSavecomplimentaryaminities()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if (!isset($_REQUEST['property_id'])) {
            return array('status' => 2, 'message' => "Invalid input. Property missing.", 'data' => 0);;
        }

        $property_id = Yii::$app->request->post('property_id');


        //Check this proerty owned by this user
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->one();

            if ($property == NULL) {
                return array('status' => 2, 'message' => "Property (id) doesn't exists", 'data' => 0);
            }
        } else {
            return array('status' => 2, 'message' => "Property id cannot zero", 'data' => 0);
        }
        $transaction = Yii::$app->db->beginTransaction();
        try {
            $property->have_complimentary_services = Yii::$app->request->post('have_complimentary_services');
            $property->save();
            $complimentary_data = Yii::$app->request->post('complimentary_data');
            parse_str($complimentary_data, $compDataArray);
            PropertyComplimentaryAmenity::deleteAll(['property_id' => $property_id]);

            if (isset($compDataArray['complimentary_input'])) {
                $comp_count = count($compDataArray['complimentary_input']);
                for ($i = 0; $i < $comp_count; $i++) {
                    $complimentary = new PropertyComplimentaryAmenity();
                    $complimentary->property_id = $property_id;
                    $complimentary->name = $compDataArray['complimentary_input'][$i];
                    if ($complimentary->validate()) {
                        $complimentary->save();
                    }
                }
            }
            $transaction->commit();
            //TODO: Handling exception in page
        } catch (\Exception $e) {
            $transaction->rollBack();
            return array('status' => 2, 'message' => "error", 'data' => $e);
        } catch (\Throwable $e) {
            //TODO: Handling exception in page
            $transaction->rollBack();
//            throw $e;
            return array('status' => 2, 'message' => "error", 'data' => $e);

        }

        return array('status' => 0, 'message' => "Property Amenities updated successfully", 'data' => 0);
    }

    public function actionSaveswimmingpooldata()
    {

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $property_id = Yii::$app->request->post('property_id');
        //Check this proerty owned by this user
        if ($property_id != 0 && $property_id != NULL) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->one();

            if ($property == NULL) {
                return array('status' => 2, 'message' => "Property (id) doesn't exists", 'data' => 0);
            }
        } else {
            return array('status' => 2, 'message' => "Property id cannot zero", 'data' => 0);
        }
        $transaction = Yii::$app->db->beginTransaction();
        try {
            $property->have_swimming_pool = Yii::$app->request->post('have_swimming_pool');
            $property->save();

            $swimming_pool = PropertySwimmingPool::find()
                ->where(['property_id' => $property_id])
                ->one();
            if ($swimming_pool == NULL) {
                $swimming_pool = new PropertySwimmingPool();
                $swimming_pool->property_id = $property_id;
            }

            $swimming_pool->count = Yii::$app->request->post('pool_count');

            if ($swimming_pool->validate()) {
                $swimming_pool->save();
            }

            $pool_type = Yii::$app->request->post('pool_type');
            parse_str($pool_type, $poolDataArray);

            if (isset($poolDataArray['pool_type'])) {
                $pool_type_count = count($poolDataArray['pool_type']);
                for ($i = 0; $i < $pool_type_count; $i++) {
                    $pool_map = new PropertySwimmingPoolTypeMap();
                    $pool_map->pool_id = $swimming_pool->getPrimaryKey();
                    $pool_map->pool_type_id = $poolDataArray['pool_type'][$i];

                    if ($pool_map->validate()) {
                        $pool_map->save();
                    }
                }
            }
            $transaction->commit();
            //TODO: Handling exception in page
        } catch (\Exception $e) {
            $transaction->rollBack();
            return array('status' => 2, 'message' => "error", 'data' => $e);
        } catch (\Throwable $e) {
            //TODO: Handling exception in page
            $transaction->rollBack();
//            throw $e;
            return array('status' => 2, 'message' => "error", 'data' => $e);

        }


        return array('status' => 0, 'message' => "Property Swimming pool data updated successfully", 'data' => 0);
    }

    public function actionSaverestaurantdata()
    {

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $property_id = Yii::$app->request->post('property_id');
        //Check this proerty owned by this user
        if ($property_id != 0 && $property_id != NULL) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->one();

            if ($property == NULL) {
                return array('status' => 2, 'message' => "Property (id) doesn't exists", 'data' => 0);
            }
        } else {
            return array('status' => 2, 'message' => "Property id cannot zero", 'data' => 0);
        }
        $transaction = Yii::$app->db->beginTransaction();
        try {
            $property->have_restaurant = Yii::$app->request->post('have_restaurant');
            $property->save();

            $restaurant = PropertyRestaurant::find()
                ->where(['property_id' => $property_id])
                ->one();

            if ($restaurant == NULL) {
                $restaurant = new PropertyRestaurant();
                $restaurant->property_id = $property_id;
            }

            $restaurant->count = Yii::$app->request->post('restaurant_count');
            if ($restaurant->validate()) {
                $restaurant->save();
            }

            PropertyRestaurantFoodOptionMap::deleteAll(['restaurant_id' => $restaurant->getPrimaryKey()]);

            $food_option = Yii::$app->request->post('food_option');
            parse_str($food_option, $food_optionDataArray);
            if (isset($food_optionDataArray['food_option'])) {
                $food_option_count = count($food_optionDataArray['food_option']);
                for ($i = 0; $i < $food_option_count; $i++) {
                    $food_option_map = new PropertyRestaurantFoodOptionMap();
                    $food_option_map->restaurant_id = $restaurant->getPrimaryKey();
                    $food_option_map->food_option_id = $food_optionDataArray['food_option'][$i];

                    if ($food_option_map->validate()) {
                        $food_option_map->save();
                    }
                }
            }

            PropertyRestaurantCuisineOptionMap::deleteAll(['restaurant_id' => $restaurant->getPrimaryKey()]);
            $cuisine_option = Yii::$app->request->post('cuisine_option');
            parse_str($cuisine_option, $cuisine_optionDataArray);
            if (isset($cuisine_optionDataArray['cuisine_option'])) {
                $cuisine_option_count = count($cuisine_optionDataArray['cuisine_option']);

                for ($i = 0; $i < $cuisine_option_count; $i++) {
                    $cuisine_option_map = new PropertyRestaurantCuisineOptionMap();
                    $cuisine_option_map->restaurant_id = $restaurant->getPrimaryKey();
                    $cuisine_option_map->cuisine_option_id = $cuisine_optionDataArray['cuisine_option'][$i];

                    if ($cuisine_option_map->validate()) {
                        $cuisine_option_map->save();
                    }
                }
            }
            $transaction->commit();
            //TODO: Handling exception in page
        } catch (\Exception $e) {
            $transaction->rollBack();
            return array('status' => 2, 'message' => "error", 'data' => $e);
        } catch (\Throwable $e) {
            //TODO: Handling exception in page
            $transaction->rollBack();
//            throw $e;
            return array('status' => 2, 'message' => "error", 'data' => $e);

        }

        return array('status' => 0, 'message' => "Restaurant data saved successfully", 'data' => 0);
    }

    public function actionSaveparking()
    {

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $property_id = Yii::$app->request->post('property_id');
        //Check this proerty owned by this user
        if ($property_id != 0 && $property_id != NULL) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->one();

            if ($property == NULL) {
                return array('status' => 2, 'message' => "Property (id) doesn't exists", 'data' => 0);
            }
        } else {
            return array('status' => 2, 'message' => "Property id cannot zero", 'data' => 0);
        }
        $transaction = Yii::$app->db->beginTransaction();
        try {
            $property->have_parking = Yii::$app->request->post('have_parking');
            $property->save();

            $parking = PropertyParking::find()
                ->where(['property_id' => $property_id])
                ->one();

            if ($parking == NULL) {
                $parking = new PropertyParking();
                $parking->property_id = $property_id;
            }

            if ($parking->validate()) {
                $parking->save();
            }

            PropertyParkingTypeMap::deleteAll(['parking_id' => $parking->getPrimaryKey()]);

            $parking_type = Yii::$app->request->post('parking_type');
            parse_str($parking_type, $parkingDataArray);

            if (isset($parkingDataArray['parking_type'])) {
                $parking_count = count($parkingDataArray['parking_type']);

                for ($i = 0; $i < $parking_count; $i++) {
                    $parking_map = new PropertyParkingTypeMap();
                    $parking_map->parking_id = $parking->getPrimaryKey();
                    $parking_map->parking_type_id = $parkingDataArray['parking_type'][$i];

                    if ($parking_map->validate()) {
                        $parking_map->save();
                    }
                }
            }

            $transaction->commit();
            //TODO: Handling exception in page
        } catch (\Exception $e) {
            $transaction->rollBack();
            return array('status' => 2, 'message' => "error", 'data' => $e);
        } catch (\Throwable $e) {
            //TODO: Handling exception in page
            $transaction->rollBack();
//            throw $e;
            return array('status' => 2, 'message' => "error", 'data' => $e);

        }

        return array('status' => 0, 'message' => "Parking data updated successfully", 'data' => 0);
    }


    public function actionSavepropertyamenities()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $property_id = Yii::$app->request->post('property_id');

        //Check this proerty owned by this user
        if ($property_id != 0 && $property_id != NULL) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->one();

            if ($property == NULL) {
                return array('status' => 2, 'message' => "Property (id) doesn't exists", 'data' => 0);
            }
        } else {
            return array('status' => 2, 'message' => "Property id cannot zero", 'data' => 0);
        }

        $amenities = Yii::$app->request->post('amenities');
        $suboptions = Yii::$app->request->post('suboptions');

        $transaction = Yii::$app->db->beginTransaction();
        try {
            $amenities_count = count($amenities);
            PropertyAmenity::deleteAll(['property_id' => $property_id]);
            for ($i = 0; $i < $amenities_count; $i++) {
                $property_amenity = new PropertyAmenity();
                $property_amenity->property_id = $property_id;
                $property_amenity->amenity_id = $amenities[$i];
                $property_amenity->save();

                $sub_option_count = count($suboptions[$i]);
                for ($j = 0; $j < $sub_option_count; $j++) {
                    $options = $suboptions[$i];
                    $property_amenity_sub_option = new PropertyAmenitySuboption();
                    $property_amenity_sub_option->property_amenity_id = $property_amenity->getPrimaryKey();
                    $property_amenity_sub_option->sub_option_id = $options[$j];
                    if ($property_amenity_sub_option->validate()) {
                        $property_amenity_sub_option->save();
                    }
                }
            }
            $transaction->commit();
            //TODO: Handling exception in page
        } catch (\Exception $e) {
            $transaction->rollBack();
            return array('status' => 2, 'message' => "error", 'data' => $e);
        } catch (\Throwable $e) {
            //TODO: Handling exception in page
            $transaction->rollBack();
//            throw $e;
            return array('status' => 2, 'message' => "error", 'data' => $e);

        }

        return array('status' => 0, 'message' => "Property aminities updated successfully", 'data' => 0);

    }

    public function actionGetroomamenitiesform()
    {
        $room_id = Yii::$app->request->get('room_id');
        if ($room_id != 0 && $room_id != NULL) {
            $room = Room::find()
                ->where(['id' => $room_id])
                ->one();

            if ($room == NULL) {
                return array('status' => 2, 'message' => "Room (id) doesn't exists", 'data' => 0);
            }
        } else {
            return array('status' => 2, 'message' => "Room id cannot zero", 'data' => 0);
        }

        $amenity_groups = AmenityGroup::find()->orderBy('id')->all();
        $room_amenity = RoomAmenity::find()->where(['room_id' => $room_id])->all();

        $room_amenity_suboption = new RoomAmenitySuboption();
        return Yii::$app->controller->renderPartial('_room_amenity_form', ['room' => $room, 'room_amenity' => $room_amenity, 'amenity_groups' => $amenity_groups, 'room_amenity_suboption' => $room_amenity_suboption]);
    }

    public function actionSaveroomamenities()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        //return Json::encode($suboptions);
        $room_id = Yii::$app->request->post('room_id');
        //Check this proerty owned by this user
        if ($room_id != 0 && $room_id != NULL) {
            $room = Room::find()
                ->where(['id' => $room_id])
                ->one();

            if ($room == NULL) {
                return array('status' => 2, 'message' => "Room (id) doesn't exists", 'data' => 0);
            }
        } else {
            return array('status' => 2, 'message' => "Room id cannot zero", 'data' => 0);
        }

        $amenities = Yii::$app->request->post('amenities');
        $suboptions = Yii::$app->request->post('suboptions');

        $transaction = Yii::$app->db->beginTransaction();
        try {

            $amenities_count = count($amenities);
            RoomAmenity::deleteAll(['room_id' => $room_id]);
            for ($i = 0; $i < $amenities_count; $i++) {
                $room_amenity = new RoomAmenity();
                $room_amenity->room_id = $room_id;
                $room_amenity->amenity_id = $amenities[$i];
                $room_amenity->save();

                $sub_option_count = count($suboptions[$i]);
                for ($j = 0; $j < $sub_option_count; $j++) {
                    $options = $suboptions[$i];
                    $room_amenity_sub_option = new RoomAmenitySuboption();
                    $room_amenity_sub_option->room_amenity_id = $room_amenity->getPrimaryKey();
                    $room_amenity_sub_option->sub_option_id = $options[$j];
                    if ($room_amenity_sub_option->validate()) {
                        $room_amenity_sub_option->save();
                    }
                }
            }
            $transaction->commit();
            //TODO: Handling exception in page
        } catch (\Exception $e) {
            $transaction->rollBack();
            return array('status' => 2, 'message' => "error", 'data' => $e);
        } catch (\Throwable $e) {
            //TODO: Handling exception in page
            $transaction->rollBack();
//            throw $e;
            return array('status' => 2, 'message' => "error", 'data' => $e);

        }
        return array('status' => 0, 'message' => "Room aminities updated successfully", 'data' => 0);
    }


    public function actionPictures()
    {
        $this->layout = 'tm_main';
        $property = $this->getProperty();

        //If basic details is not completely filled, show validation result
        if( !($property->country_id && $property->legal_status_id && $property->property_type_id)) {
            return $this->redirect(['property/validate', 'id' => $property->getPrimaryKey()]);
        }

        $pictures = PropertyPictures::find()->where(['property_id' => $property->id])->all();

        $propertyRooms = Room::find()->where(['property_id' => $property->id])->all();
        return $this->render('pictures', ['property' => $property, 'pictures' => $pictures, 'propertyRooms' => $propertyRooms]);

    }

    // Property pictures

    public function actionUploadpreview()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $propertyID = Yii::$app->request->get('propertyID');
        $propertyPictures = PropertyPictures::find()->where(['property_id' => $propertyID])->all();
        $previewdata = array();

        foreach ($propertyPictures as $key => $propertyPicture) {
            $previewdata['initialPreview'][$key] = Url::to('@web/uploads/'.$propertyPicture->name, 'http');
            $previewdata['initialPreviewConfig'][$key]['caption'] = $propertyPicture->description;
            $previewdata['initialPreviewConfig'][$key]['downloadUrl'] = Url::to('@web/uploads/'.$propertyPicture->name, 'http');
            $previewdata['initialPreviewConfig'][$key]['description'] = $propertyPicture->description;
//            $previewdata['initialPreviewConfig'][$key]['url'] = 'http://localhost:8080/index.php?r=property/deletepicture';
            $previewdata['initialPreviewConfig'][$key]['url'] = Url::to('index.php?r=property/deletepicture', true);
            $previewdata['initialPreviewConfig'][$key]['key'] = $propertyPicture->id;
            $previewdata['caption'][$key]['{TAG_VALUE}'] = $propertyPicture->description;
            $previewdata['caption'][$key]['{TAG_CSS_NEW}'] = 'kv-hidden';
            $previewdata['caption'][$key]['{TAG_CSS_INIT}'] = '';
            $previewdata['caption'][$key]['{TAG_CSS_ID}'] = $propertyPicture->id;
            $previewdata['initialPreviewAsData'] = true;
        }

        return array('status' => 0, 'message' => "preview data !", 'data' => $previewdata);
    }

    public function actionUpdatecaption()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $PictureID = $_POST['pictureID'];
        $NewCaption = $_POST['caption'];
        $PropertyPicture = PropertyPictures::find()->where(['id' => $PictureID])->one();
        $PropertyPicture->description = $NewCaption;
        $PropertyPicture->save();
        return array('status' => 0, 'message' => "Caption Updated");
    }

    public function actionDeletepicture()
    {

        $PictureID = $_POST['key'];
        $PropertyPicture = PropertyPictures::find()->where(['id' => $PictureID])->one();
        $path = Yii::getAlias('@frontend') . '/web/uploads/' . $PropertyPicture->name;
        unlink($path);
        $PropertyPicture->delete();
        return true;
    }


    public function actionUploadpictures()
    {

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $preview = $config = $errors = array();


        $input = 'imageFiles'; // the input name for the fileinput plugin
        if (empty($_FILES[$input])) {
            return [];
        }
        $total = count($_FILES[$input]['name']); // multiple files


//        $path = '/uploads/'; // your upload path
        $path = Yii::getAlias('@frontend') . '/web/uploads/'; // your upload path
        $request = $_POST;
//        $fp = fopen('lidn.txt', 'w');
//        fwrite($fp,   $_POST['id']);
//        fclose($fp);

//        return $uploadDir;
        for ($i = 0; $i < $total; $i++) {

            $tmpFilePath = $_FILES[$input]['tmp_name'][$i]; // the temp file path
            $fileName = $_FILES[$input]['name'][$i]; // the file name
            $extention = pathinfo($fileName, PATHINFO_EXTENSION);
            $fileName = uniqid('', true) . '.' . $extention;

//                    $fp = fopen('lidn.txt', 'w');
//        fwrite($fp,   $extention);
//        fclose($fp);
            $fileSize = $_FILES[$input]['size'][$i]; // the file size

            //Make sure we have a file path
            if ($tmpFilePath != "") {
                //Setup our new file path
                $newFilePath = $path . $fileName;

                $newFileUrl = Url::to('@web/uploads/'.$fileName, 'http');
//                $newFileUrl = 'http://localhost:8080/uploads/' . $fileName;

                //Upload the file into the new path

                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                    $picture_object = new PropertyPictures();
                    $picture_object->property_id = $_POST['propertyID'];
                    $picture_object->name = $fileName;
                    $picture_object->description = $_POST[$i];
                    $picture_object->save();

                    $fileId = $fileName . $i; // some unique key to identify the file

                    $preview[] = $newFileUrl;

                    $config[] = [
                        'key' => $picture_object->id,
                        'caption' => $fileName,
                        'size' => $fileSize,
                        'downloadUrl' => $newFileUrl, // the url to download the file
//                        'url' => 'http://localhost:8080/index.php?r=property/deletepicture', // server api to delete the file based on key
                        'url' => Url::to('index.php?r=property/deletepicture', true) // server api to delete the file based on key
                    ];
                    $caption[] = ['{TAG_VALUE}' => $_POST[$i], '{TAG_CSS_NEW}' => 'kv-hidden', '{TAG_CSS_INIT}' => '', '{TAG_CSS_ID}' => $picture_object->id];

                } else {
                    $errors[] = $fileName;
                }

            } else {
                $errors[] = $fileName;
            }

        }
        $out = ['initialPreview' => $preview, 'initialPreviewConfig' => $config,

            'initialPreviewThumbTags' => $caption, 'initialPreviewAsData' => true];
//        return $out;
        if (!empty($errors)) {
            $img = count($errors) === 1 ? 'file "' . $error[0] . '" ' : 'files: "' . implode('", "', $errors) . '" ';
            $out['error'] = 'Oh snap! We could not upload the ' . $img . 'now. Please try again later.';
        }

        return $out;

    }


    //Room Images upload and preview

    public function actionRoomimagepreview()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $roomID = Yii::$app->request->get('roomID');
        $roomPictures = RoomPictures::find()->where(['room_id' => $roomID])->all();
        $previewdata = array();

        foreach ($roomPictures as $key => $roomPicture) {

            $previewdata['initialPreview'][$key] = Url::to('@web/uploads/'.$roomPicture->name, 'http');
            $previewdata['initialPreviewConfig'][$key]['caption'] = $roomPicture->description;
            $previewdata['initialPreviewConfig'][$key]['downloadUrl'] = Url::to('@web/uploads/'.$roomPicture->name, 'http');
            $previewdata['initialPreviewConfig'][$key]['description'] = $roomPicture->description;
//            $previewdata['initialPreviewConfig'][$key]['url'] = 'http://localhost:8080/index.php?r=property/deleteroompicture';
            $previewdata['initialPreviewConfig'][$key]['url'] = Url::to('index.php?r=property/deleteroompicture', true);
            $previewdata['initialPreviewConfig'][$key]['key'] = $roomPicture->id;
            $previewdata['caption'][$key]['{TAG_VALUE}'] = $roomPicture->description;
            $previewdata['caption'][$key]['{TAG_CSS_NEW}'] = 'kv-hidden';
            $previewdata['caption'][$key]['{TAG_CSS_INIT}'] = '';
            $previewdata['caption'][$key]['{TAG_CSS_ID}'] = $roomPicture->id;
            $previewdata['initialPreviewAsData'] = true;
        }

        return array('status' => 0, 'message' => "preview data !", 'data' => $previewdata);
    }

    public function actionDeleteroompicture()
    {
        $RoomPictureID = $_POST['key'];
        $RoomPicture = RoomPictures::find()->where(['id' => $RoomPictureID])->one();
        $path = Yii::getAlias('@frontend') . '/web/uploads/' . $RoomPicture->name;
        unlink($path);
        $RoomPicture->delete();
        return true;
    }

    public function actionUpdateroomcaption()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $PictureID = $_POST['pictureID'];
        $NewCaption = $_POST['caption'];
        $PropertyPicture = RoomPictures::find()->where(['id' => $PictureID])->one();
        $PropertyPicture->description = $NewCaption;
        $PropertyPicture->save();
        return array('status' => 0, 'message' => "Caption Updated");
    }

    public function actionUploadroompictures()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $preview = $config = $errors = array();


        $input = 'roomFiles'; // the input name for the fileinput plugin
        if (empty($_FILES[$input])) {
            return [];
        }
        $total = count($_FILES[$input]['name']); // multiple files


//        $path = '/uploads/'; // your upload path
        $path = Yii::getAlias('@frontend') . '/web/uploads/'; // your upload path
        $request = $_POST;

        for ($i = 0; $i < $total; $i++) {

            $tmpFilePath = $_FILES[$input]['tmp_name'][$i]; // the temp file path
            $fileName = $_FILES[$input]['name'][$i]; // the file name
            $fileSize = $_FILES[$input]['size'][$i]; // the file size
            $extention = pathinfo($fileName, PATHINFO_EXTENSION);
            $fileName = uniqid('', true) . '.' . $extention; // Changing file name for preventing duplicate entry

            //Make sure we have a file path
            if ($tmpFilePath != "") {
                //Setup our new file path
                $newFilePath = $path . $fileName;

                $newFileUrl = Url::to('@web/uploads/'.$fileName, 'http');
//                $newFileUrl = 'http://localhost:8080/uploads/' . $fileName;

                //Upload the file into the new path

                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                    $picture_object = new RoomPictures();
                    $picture_object->room_id = $_POST['roomID'];
                    $picture_object->name = $fileName;
                    $picture_object->description = $_POST[$i];
                    $picture_object->save();

                    $fileId = $fileName . $i; // some unique key to identify the file

                    $preview[] = $newFileUrl;

                    $config[] = [
                        'key' => $picture_object->id,
                        'caption' => $fileName,
                        'size' => $fileSize,
                        'downloadUrl' => $newFileUrl, // the url to download the file
//                        'url' => 'http://localhost:8080/index.php?r=property/deleteroompicture', // server api to delete the file based on key
                        'url' => Url::to('index.php?r=property/deleteroompicture', true), // server api to delete the file based on key
                    ];
                    $caption[] = ['{TAG_VALUE}' => $_POST[$i], '{TAG_CSS_NEW}' => 'kv-hidden', '{TAG_CSS_INIT}' => '', '{TAG_CSS_ID}' => $picture_object->id];

                } else {
                    $errors[] = $fileName;
                }

            } else {
                $errors[] = $fileName;
            }

        }
        $out = ['initialPreview' => $preview, 'initialPreviewConfig' => $config,

            'initialPreviewThumbTags' => $caption, 'initialPreviewAsData' => true];
//        return $out;
        if (!empty($errors)) {
            $img = count($errors) === 1 ? 'file "' . $error[0] . '" ' : 'files: "' . implode('", "', $errors) . '" ';
            $out['error'] = 'Oh snap! We could not upload the ' . $img . 'now. Please try again later.';
        }

        return $out;

    }


    //Room category
    public function actionCategories()
    {
        $this->layout = 'tm_main';
        $property = $this->getProperty();

        //If basic details is not completely filled, show validation result
        if( !($property->country_id && $property->legal_status_id && $property->property_type_id)) {
            return $this->redirect(['property/validate', 'id' => $property->getPrimaryKey()]);
        }

        $rooms = Room::find()->where(['property_id' => $property->id])->all();

        return $this->render('room_categories', ['rooms' => $rooms,'property' => $property,]);
    }

    public function actionCreatecategories()
    {
        $this->layout = 'tm_main';
        $property = $this->getProperty();

        $room_id = Yii::$app->request->get('room_id', 0);
        $room = Room::find()
            ->where(['id' => $room_id])
            ->andWhere(['property_id' => $property->id])
            ->one();

        if ($room == NULL) {
            $room = new Room();
        }

        $room_types = ArrayHelper::map(RoomType::find()->asArray()->all(), 'id', 'name');
        $room_view_type = ArrayHelper::map(PropertyRoomView::find()->asArray()->all(), 'id', 'name');
        $extra_bed_types = ArrayHelper::map(PropertyRoomExtraBedType::find()->asArray()->all(), 'id', 'name');
        $meal_plans = ArrayHelper::map(PropertyMealPlan::find()->asArray()->all(), 'id', 'name');

        return $this->render('room_categories_create', [
            'property' => $property,
            'room' => $room,
            'room_types' => $room_types,
            'room_view_type' => $room_view_type,
            'meal_plans' => $meal_plans,
            'extra_bed_types' => $extra_bed_types,
        ]);
//        return $this->render('room_categories_create',['property' => $property, 'room' => $room, 'room_types' => $room_types, 'room_view_type' => $room_view_type, 'meal_plans' => $meal_plans, 'rooms' => $rooms]);
    }

    public function actionSaveroomcategory()
    {
        $property_id = Yii::$app->request->post('property_id');
        $room_id = Yii::$app->request->post('room_id');
        $rooms = Yii::$app->request->post('Room');


        //TODO: Check this proerty owned by this user
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->one();

            if ($property == NULL) {
                return array('status' => 2, 'message' => "Property (id) doesn't exists", 'data' => 0);
            }
        } else {
            return array('status' => 2, 'message' => "Property id cannot zero", 'data' => 0);
        }

        $room = Room::find()
            ->where(['id' => $room_id])
            ->andWhere(['property_id' => $property_id])
            ->one();
        if ($room == NULL) {
            $room = new Room();
        }

        $room->name = $rooms['name'];
        $room->type_id = $rooms['type_id'];
        $room->view_id = $rooms['view_id'];
        $room->meal_plan_id = $rooms['meal_plan_id'];
        $room->count = $rooms['count'];
        $room->size = $rooms['size'];
        $room->child_policy_same_as_property = $rooms['child_policy_same_as_property'];
        $room->restricted_for_child = $rooms['restricted_for_child'];
        $room->restricted_for_child_below_age = $rooms['restricted_for_child_below_age'];
        $room->number_of_adults = $rooms['number_of_adults'];
        $room->number_of_kids_on_sharing = $rooms['number_of_kids_on_sharing'];
        $room->number_of_extra_beds = $rooms['number_of_extra_beds'];
        if (array_key_exists('extra_bed_type_id', $rooms)){
            $room->extra_bed_type_id = $rooms['extra_bed_type_id'];
        }

        $room->same_tariff_for_single_occupancy =  $rooms['same_tariff_for_single_occupancy'];
        $room->property_id = $property_id;
        if ($room->save(false)) {
            Yii::$app->session->setFlash('success', "Room category created successfully.");
            return $this->redirect(['property/categories', 'id' => $property->getPrimaryKey()]);
        }
    }

    public function actionAmenities()
    {
        $this->layout = 'tm_main';
        return $this->render('amenities');
    }
    public function actionMypropertylist()
    {
        $this->layout = 'tm_main';
        $roles = Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId());
        if (ArrayHelper::keyExists('HotelOwner', $roles, false)) {

            $properties = Property::find()->where(['owner_id' => Yii::$app->user->identity->getOWnerId()])->all();
        } else {
            $usr = Yii::$app->user->identity;
            $assigned_properties = $usr->getUserPropertyMaps()->select(['property_id'])->column();

            $properties = Property::find()
                ->where(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->andWhere(['in', 'id', $assigned_properties])
                ->all();
        }

        return $this->render('my_properties_list', ['properties' => $properties]);
    }


    public function actionCreateproperty()
    {
        $this->layout = 'tm_main';
        return $this->render('create_property', []);
    }
    public function actionSearchhotel()
    {
        $this->layout = 'tm_main';
        return $this->render('search_hotel', []);
    }

}
