<?php

namespace frontend\controllers;
use frontend\models\Country;
use frontend\models\Destination;
use frontend\models\LegalDocsImages;
use frontend\models\Location;
use frontend\models\property\AddressLocation;
use frontend\models\property\LegalTaxDocumentation;
use frontend\models\property\PropertyLegalStatus;
use frontend\models\property\TermsConditions;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;

use frontend\models\property\BasicDetails;
use frontend\models\property\PropertyType;
use frontend\models\property\PropertyCategory;
use frontend\models\property\Property;
use frontend\models\property\PropertyImage;
use frontend\models\property\PropertyContacts;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

class PropertyController extends Controller{
    public function beforeAction($action) {
        $this->enableCsrfValidation = false;

        if (Yii::$app->user->isGuest) {
            Yii::$app->user->loginRequired();
            return;
        }

        if (Yii::$app->user->identity->user_type != 1){
            throw new ForbiddenHttpException();
        }

        return parent::beforeAction($action);
    }

    private function getProperty() {
        if(!isset( $_GET['id'])) {
            throw new NotFoundHttpException();
        }

        $property = NULL;
        $property_id = (int) Yii::$app->request->get('id');
        if ($property_id != 0) {
            $property =Property::find()
                ->where(['id' => $property_id])
                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();

            if ($property == NULL){
                throw new NotFoundHttpException();
            }
        }
        else {
            throw new NotFoundHttpException();
        }

        /*     $property = Property::find()
            ->where(['id' => $property_id])
            ->one(); */
        if ($property == NULL){
            throw new NotFoundHttpException();
        }

        return $property;
    }


     public function actionBasicdetails(){
         $this->layout = 'tm_main';
         $property = NULL;
         if(isset( $_GET['id']) ) {
             $property_id = Yii::$app->request->get('id');
             $property = Property::find()
                 ->where(['id' => $property_id])
                 ->andWhere(['owner_id' => Yii::$app->user->getId()])
                 ->one();

             if ($property == NULL){
                 throw new NotFoundHttpException();
             }
         }

         $basic_details = new BasicDetails();
         if ($property == NULL){
             $property = new Property();
             $basic_details->id = 0;
         }
         else {
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
             $property->terms_and_conditons3 == 1)
         {
             $show_terms_tab = false;
         }

         $property_types = ArrayHelper::map(PropertyType::find()->asArray()->all(), 'id', 'name');
         $property_categories = ArrayHelper::map(PropertyCategory::find()->asArray()->all(), 'id', 'name');
         $property_image = new PropertyImage();
         return $this->render('basic_details',['basic_details' => $basic_details, 'property_types' => $property_types, 'property_categories' => $property_categories,  'property_image' => $property_image, 'show_terms_tab' => $show_terms_tab ]);

     }

    public function actionSavepropertybasic() {
        $basic_details = new BasicDetails();
        if ( !$basic_details->load(Yii::$app->request->post()))  {
            echo "Load failed";
        }

        $property_image = new PropertyImage();
        $property_id = Yii::$app->request->post('property_id');

        //Check this prooerty owned by this user
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->one();

            if ($property == NULL){
                //Property (id) doesn't exists
                throw new NotFoundHttpException();
            }
        }
        else {
            $property = new Property();
        }

        $property->name = $basic_details->name;
        $property->property_type_id = $basic_details->property_type_id;
        $property->property_category_id = $basic_details->property_category_id;
        $property->website = $basic_details->website;
        $property->owner_id = Yii::$app->user->getId();
//        $property->owner_id =2;
        $property->image = 1;
        $property->logo = 2;

        if ($property->save(false)) {
            Yii::$app->session->setFlash('success', "Property created successfully.");
            return $this->redirect(['property/addressandlocation', 'id' => $property->getPrimaryKey()]);
        }
        else {
            Yii::$app->session->setFlash('error', "Property creation failed.");
            $property_types = ArrayHelper::map(PropertyType::find()->asArray()->all(), 'id', 'name');
            $property_categories = ArrayHelper::map(PropertyCategory::find()->asArray()->all(), 'id', 'name');
            return $this->render('basic_details',['basic_details' => $basic_details, 'property_types' => $property_types, 'property_categories' => $property_categories, 'property_image' => $property_image ]);
        }
    }

    public function actionAddressandlocation(){
        $this->layout = 'tm_main';
        $property_id = Yii::$app->request->get('id');
        $property = NULL;
        if ($property_id != 0) {
            $property =Property::find()
                ->where(['id' => $property_id])
                ->andWhere(['owner_id' => Yii::$app->user->getId()])
                ->one();
        }

        if ($property == NULL){
            //Property (id) doesn't exists
            return $this->render('__property_not_found',[]);
            //throw new NotFoundHttpException();
        }

        $address_location = new AddressLocation();
        $address_location->id = $property->id;
        $address_location->country_id = $property->country_id;
        $address_location->location_id = $property->location_id;
        $address_location->destination_id = $property->destination_id;
        $address_location->address = $property->address;
        $address_location->postal_code = $property->postal_code;
        $address_location->locality = $property->locality;

        $countries = ArrayHelper::map(Country::find()->asArray()->all(), 'id', 'name');
        $locations = ArrayHelper::map(Location::find()->where(['country_id' => 1])->asArray()->all(), 'id', 'name');
        $destinations = ArrayHelper::map(Destination::find()->asArray()->all(), 'id', 'name');

        $show_terms_tab = true;
        if ($property->terms_and_conditons1 == 1 &&
            $property->terms_and_conditons2 == 1 &&
            $property->terms_and_conditons3 == 1)
        {
            $show_terms_tab = false;
        }

        return $this->render('address_and_locations',[
                'address_location' => $address_location,
                'countries' => $countries,
                'locations' => $locations,
                'destinations' => $destinations,
                'show_terms_tab' => $show_terms_tab
            ]
        );
     }

    public function actionSavepropertyaddresslocation()
    {
        $address_location = new AddressLocation();
        if ( !$address_location->load(Yii::$app->request->post()))  {
            //TODO
            echo "Load failed";
        }

        $property_id =  $address_location->id;
        $property = NULL;
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
//                ->andWhere(['owner_id' => Yii::$app->user->getId()])
                ->one();
        }

        if ($property == NULL){
            //Property (id) doesn't exists
            throw new NotFoundHttpException();
        }

        if( !$address_location->validate() ) {
            $countries = ArrayHelper::map(Country::find()->asArray()->all(), 'id', 'name');
            $locations = ArrayHelper::map(Location::find()->where(['country_id' => 1])->asArray()->all(), 'id', 'name');
            $destinations = ArrayHelper::map(Destination::find()->asArray()->all(), 'id', 'name');

            return $this->render('address_location',[
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
        }
        else {
            Yii::$app->session->setFlash('error', "Address and location updation failed.");
            $countries = ArrayHelper::map(Country::find()->asArray()->all(), 'id', 'name');
            $locations = ArrayHelper::map(Location::find()->where(['country_id' => 1])->asArray()->all(), 'id', 'name');
            $destinations = ArrayHelper::map(Destination::find()->asArray()->all(), 'id', 'name');

            return $this->render('address_location',[
                    'address_location' => $address_location,
                    'countries' => $countries,
                    'locations' => $locations,
                    'destinations' => $destinations
                ]
            );
        }
    }

    public function actionLegaltax(){
        $this->layout = 'tm_main';
        $property_id = Yii::$app->request->get('id');
        //Check this prooerty owned by this user
        $property = NULL;
        if ($property_id != 0) {
            $property =Property::find()
                ->where(['id' => $property_id])
                ->andWhere(['owner_id' => Yii::$app->user->getId()])
                ->one();
        }

        if ($property == NULL){
            //Property (id) doesn't exists
            throw new NotFoundHttpException();
        }

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

        $show_terms_tab = true;
        if ($property->terms_and_conditons1 == 1 &&
            $property->terms_and_conditons2 == 1 &&
            $property->terms_and_conditons3 == 1)
        {
            $show_terms_tab = false;
        }

        return $this->render('legal_and_tax',['legal_tax_documentation' => $legal_tax_documentation, 'legal_status' => $legal_status, 'legal_docs_images' => $legal_docs_images, 'show_terms_tab' => $show_terms_tab]);
     }

    public function actionSavelegaltax(){
        $legal_tax_documentation = new LegalTaxDocumentation();
        $legal_tax_documentation->setAttributes($_POST['LegalTaxDocumentation'], false);
        if ( !$legal_tax_documentation->load(Yii::$app->request->post()))  {
            //TODO
            echo "Load failed";
        }

        $property_id =  $legal_tax_documentation->id;
        $property = NULL;
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
//                ->andWhere(['owner_id' => Yii::$app->user->getId()])
                ->one();
        }

        if ($property == NULL){
            //Property (id) doesn't exists
            throw new NotFoundHttpException();
        }

        //Validation success
        $property->legal_status_id = $legal_tax_documentation->legal_status_id;
        $property->pan_number = $legal_tax_documentation->pan_number;
        $property->business_licence_number = $legal_tax_documentation->business_licence_number;
        $property->gst_number = $legal_tax_documentation->gst_number;
        $property->bank_name = $legal_tax_documentation->bank_name;
        $property->bank_account_name = $legal_tax_documentation->bank_account_name;
        $property->bank_account_number = $legal_tax_documentation->bank_account_number;
        $property->ifsc_code = $legal_tax_documentation->ifsc_code;
        $property->pan_image = 1;
        $property->business_licence_image = 1;
        $property->gst_image = 1;
//        $property->swift_code = $legal_tax_documentation->swift_code;

        $legal_doc_images = new LegalDocsImages();

        if ($property->save(false)) {
            Yii::$app->session->setFlash('success', "Property documents updated successfully.");
            return $this->redirect(['property/contact', 'id' => $property->getPrimaryKey()]);
        }
        else {
            Yii::$app->session->setFlash('error', "Property documents updation failed.");
            $legal_status = ArrayHelper::map(PropertyLegalStatus::find()->asArray()->all(), 'id', 'name');
            $legal_docs_images = new LegalDocsImages();
            return $this->render('legal_and_tax',['legal_tax_documentation' => $legal_tax_documentation, 'legal_status' => $legal_status, 'legal_docs_images' => $legal_docs_images]);
        }
    }

    public function actionContact(){
        $this->layout = 'tm_main';
        $property_id = Yii::$app->request->get('id');
        $property = NULL;
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();
        }

        if ($property == NULL){
            //Property (id) doesn't exists
            throw new NotFoundHttpException();
        }

        $contact =PropertyContacts::find()
            ->where(['property_id' => $property_id])
            ->one();

        if ($contact == NULL){
            $contact = new PropertyContacts();
            $contact->property_id = $property_id;
        }

        $show_terms_tab = 1;
        if ($property->terms_and_conditons1 == 1 &&
            $property->terms_and_conditons2 == 1 &&
            $property->terms_and_conditons3 == 1)
        {
            $show_terms_tab = 0;
        }

        return $this->render('contact_details',['contact' => $contact, 'show_terms_tab' => $show_terms_tab]);
     }

    public function actionSavecontactdetails() {
        $property_id = $_POST['PropertyContacts']['property_id'];
        $property = NULL;
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();
        }

        if ($property == NULL){
            //Property (id) doesn't exists
            throw new NotFoundHttpException();
        }

        $contacts =PropertyContacts::find()
            ->where(['property_id' => $property_id])
            ->one();

        if ($contacts == NULL){
            $contacts = new PropertyContacts();
        }

        if (isset($_POST['PropertyContacts'])) {
            $contacts->sales_name =	$_POST['PropertyContacts']['sales_name'];
            $contacts->reservation_name	= $_POST['PropertyContacts']['reservation_name'];
            $contacts->front_office_name= $_POST['PropertyContacts']['front_office_name'];
            $contacts->accounts_office_name = $_POST['PropertyContacts']['accounts_office_name'];
            $contacts->sales_phone = $_POST['PropertyContacts']['sales_phone'];
            $contacts->reservation_phone = $_POST['PropertyContacts']['reservation_phone'];
            $contacts->front_office_phone =	$_POST['PropertyContacts']['front_office_phone'];
            $contacts->accounts_office_phone = $_POST['PropertyContacts']['accounts_office_phone'];
            $contacts->sales_email = $_POST['PropertyContacts']['sales_email'];
            $contacts->reservation_email = $_POST['PropertyContacts']['reservation_email'];
            $contacts->front_office_email = $_POST['PropertyContacts']['front_office_email'];
            $contacts->accounts_office_email= $_POST['PropertyContacts']['accounts_office_email'];
            $contacts->property_id = $property_id;

            if($contacts->validate()) {
                $contacts->save();
                $show_terms_tab =  Yii::$app->request->post('show_terms_tab');
//                $redirect_url = 'property/';
//                $redirect_url .= ($show_terms_tab == 1) ? "terms" : "home";
//                return $this->redirect([$redirect_url, 'id' => $property_id]);
                return $this->redirect(['property/termsandconditions', 'id' => $property->getPrimaryKey()]);

            }
            else {
                return $this->render('contact_details',['contact' => $contacts]);
            }
        }
    }

    public function actionSavecontactdetails1() {
        $property_id = $_POST['PropertyContacts']['property_id'];

        $property = NULL;
        if ($property_id != 0) {
            $property =Property::find()
                ->where(['id' => $property_id])
                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();
        }

        if ($property == NULL){
            //Property (id) doesn't exists
            throw new NotFoundHttpException();
        }

        $contacts =PropertyContacts::find()
            ->where(['property_id' => $property_id])
            ->one();

        if ($contacts == NULL){
            $contacts = new PropertyContacts();
        }

        if (isset($_POST['PropertyContacts'])) {
            $contacts->sales_name =	$_POST['PropertyContacts']['sales_name'];
            $contacts->reservation_name	= $_POST['PropertyContacts']['reservation_name'];
            $contacts->front_office_name= $_POST['PropertyContacts']['front_office_name'];
            $contacts->accounts_office_name = $_POST['PropertyContacts']['accounts_office_name'];
            $contacts->sales_phone = $_POST['PropertyContacts']['sales_phone'];
            $contacts->reservation_phone = $_POST['PropertyContacts']['reservation_phone'];
            $contacts->front_office_phone =	$_POST['PropertyContacts']['front_office_phone'];
            $contacts->accounts_office_phone = $_POST['PropertyContacts']['accounts_office_phone'];
            $contacts->sales_email = $_POST['PropertyContacts']['sales_email'];
            $contacts->reservation_email = $_POST['PropertyContacts']['reservation_email'];
            $contacts->front_office_email = $_POST['PropertyContacts']['front_office_email'];
            $contacts->accounts_office_email= $_POST['PropertyContacts']['accounts_office_email'];
            $contacts->property_id = $property_id;
        }

        if ($property->save(false)) {
            Yii::$app->session->setFlash('success', "Property documents updated successfully.");
            return $this->redirect(['property/termsandconditions', 'id' => $property->getPrimaryKey()]);
        }
        else{
            return $this->render('contact_details',['contact' => $contacts]);
        }
    }

    public function actionTermsandconditions(){
        $this->layout = 'tm_main';
        $property_id = Yii::$app->request->get('id');
        //Check this property owned by this user
        $property = NULL;
        if ($property_id != 0) {
            $property = Property::find()
                ->where(['id' => $property_id])
                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();
        }

        if ($property == NULL){
            //Property (id) doesn't exists
            throw new NotFoundHttpException();
        }


        if ($property->terms_and_conditons1 == 1 &&
            $property->terms_and_conditons2 == 1 &&
            $property->terms_and_conditons3 == 1)
        {
            throw new NotFoundHttpException();
        }

        $terms = new TermsConditions();
        $terms->id = $property->id;
        $terms->terms_and_conditons1 = $property->terms_and_conditons1;
        $terms->terms_and_conditons2 = $property->terms_and_conditons2;
        $terms->terms_and_conditons3 = $property->terms_and_conditons3;

        return $this->render('terms_and_conditions',['terms' => $terms]);
     }

    public function actionSaveterms()
    {
        $terms = new TermsConditions();
        if ( !$terms->load(Yii::$app->request->post()))  {
            //TODO
            echo "Load failed";
        }

        $property_id =  $terms->id;
        $property = NULL;
        if ($property_id != 0) {
            $property =Property::find()
                ->where(['id' => $property_id])
                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();
        }

        if ($property == NULL){
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
            return $this->redirect(['property/contact', 'id' => $property->getPrimaryKey()]);
        }
        else {
            Yii::$app->session->setFlash('error', "Terms and condition updation failed.");
            $terms = new TermsConditions();
            $terms->id = $property->id;
            $terms->terms_and_conditons1 = $property->terms_and_conditons1;
            $terms->terms_and_conditons2 = $property->terms_and_conditons2;
            $terms->terms_and_conditons3 = $property->terms_and_conditons3;

            return $this->render('terms_and_conditions',['terms' => $terms]);
        }
    }
}