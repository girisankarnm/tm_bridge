<?php

namespace frontend\controllers;
use frontend\models\Country;
use frontend\models\Destination;
use frontend\models\Location;
use frontend\models\operator\AddressLocation;
use frontend\models\operator\BasicDetails;
use frontend\models\operator\LegalDocsImages;
use frontend\models\operator\LegalTaxDocumentation;
use frontend\models\operator\Operator;
use frontend\models\operator\OperatorContacts;
use frontend\models\operator\OperatorImage;
use frontend\models\operator\TermsConditions;
use frontend\models\property\PropertyLegalStatus;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

class OperatorController extends Controller{

    public function actionBasicdetails(){
        $this->layout = 'tm_main';
        $operator = NULL;
//        $operator = Operator::find()
//            ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
//            ->one();



        $basic_details = new BasicDetails();
        $operator_image = new OperatorImage();
        if ($operator == null){
            $operator = new Operator();
            $basic_details->id = 0;
            $operator_image->scenario = "create";
        }
        else {
            $basic_details->id = $operator->id;
            $basic_details->name = $operator->name;
            $basic_details->website = $operator->website;
            $basic_details->logo_image = $operator->logo_image;
            $basic_details->v_card_image = $operator->v_card_image;
            $operator_image->scenario = "update";
        }

        $show_terms_tab = true;
        if ($operator->terms_and_conditons == 1)
        {
            $show_terms_tab = false;
        }

        return $this->render('basic_details',[
            'basic_details' => $basic_details,
            'operator_image' => $operator_image,
            'show_terms_tab' => $show_terms_tab
        ]);

//        return $this->render('basic_details');
    }

    public function actionSavebasicdetails(){
        $basic_details = new  BasicDetails();
        if ( !$basic_details->load(Yii::$app->request->post()))  {
            echo "Load failed";
        }
        $operator_image = new OperatorImage();
        $operator_image->logo_image = UploadedFile::getInstance($operator_image, 'logo_image');

        if( !$basic_details->validate() /*|| ($property_image->imageFile == null) */ ) {
            return $this->render('basic_details',['basic_details' => $basic_details, 'operator_image' => $operator_image ]);
        }
        $operator_id = Yii::$app->request->post('operator_id');
        if ($operator_id != 0) {
            $operator = Operator::find()
                ->where(['id' => $operator_id])
                ->one();
            if ($operator == NULL){
                throw new NotFoundHttpException();
            }
        }
        else {
            $operator = new Operator();
        }

        $operator->name = $basic_details->name;
        $operator->website = $basic_details->website;
        $operator->owner_id = Yii::$app->user->getId();
        $operator_image->logo_image = 1;
        $operator_image->v_card_image = 2;
        if ($operator->save(false)) {
            Yii::$app->session->setFlash('success', "Operator created successfully.");
            return $this->redirect(['operator/addressandlocation', 'id' => $operator->getPrimaryKey()]);
        }
        else {
            Yii::$app->session->setFlash('error', "Operator creation failed.");
            return $this->render('basic_details',['basic_details' => $basic_details, 'operator_image' => $operator_image ]);
        }
    }

    public function actionAddressandlocation(){
        $this->layout = 'tm_main';
        $operator_id = Yii::$app->request->get('id');
        $operator = NULL;
        if ($operator_id != 0) {
            $operator = Operator::find()
                ->where(['id' => $operator_id])
                ->one();
        }

        if ($operator == NULL){
            throw new NotFoundHttpException();
        }

        $address_location = new AddressLocation();
        $address_location->id = $operator->id;
        $address_location->country_id = $operator->country_id;
        $address_location->location_id = $operator->location_id;
        $address_location->destination_id = $operator->destination_id;
        $address_location->address = $operator->address;
        $address_location->postal_code = $operator->postal_code;
        $address_location->locality = $operator->locality;

        $countries = ArrayHelper::map(Country::find()->asArray()->all(), 'id', 'name');
        $locations = ArrayHelper::map(Location::find()->where(['country_id' => 1])->asArray()->all(), 'id', 'name');
        $destinations = ArrayHelper::map(Destination::find()->asArray()->all(), 'id', 'name');

        $show_terms_tab = true;
        if ($operator->terms_and_conditons == 1)
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

    public function actionSaveaddresslocation()
    {
        $address_location = new AddressLocation();
        if ( !$address_location->load(Yii::$app->request->post()))  {
            //TODO
            echo "Load failed";
        }

        $operator_id =  $address_location->id;
        $operator = NULL;
        if ($operator_id != 0) {
            $operator = Operator::find()
                ->where(['id' => $operator_id])
                ->one();
        }

        if ($operator == NULL){
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
        $operator->country_id = $address_location->country_id;
        $operator->location_id = $address_location->location_id;
        $operator->destination_id = $address_location->destination_id;
        $operator->address = $address_location->address;
        $operator->postal_code = $address_location->postal_code;
        $operator->locality = $address_location->locality;

        if ($operator->save(false)) {
            Yii::$app->session->setFlash('success', "Address and location updated successfully.");
            return $this->redirect(['operator/legaltax', 'id' => $operator->getPrimaryKey()]);
        }
        else {
            Yii::$app->session->setFlash('error', "Address and location updation failed.");
            $countries = ArrayHelper::map(Country::find()->asArray()->all(), 'id', 'name');
            $locations = ArrayHelper::map(Location::find()->where(['country_id' => 1])->asArray()->all(), 'id', 'name');
            $destinations = ArrayHelper::map(Destination::find()->asArray()->all(), 'id', 'name');

            return $this->render('address_and_location',[
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
        $operator_id = Yii::$app->request->get('id');
        $operator = NULL;
        if ($operator_id != 0) {
            $operator = Operator::find()
                ->where(['id' => $operator_id])
                ->one();
        }

        if ($operator == NULL){
            throw new NotFoundHttpException();
        }

        $legal_tax_documentation = new LegalTaxDocumentation();
        $legal_tax_documentation->id = $operator->id;
        $legal_tax_documentation->legal_status_id = $operator->legal_status_id;
        $legal_tax_documentation->pan_number = $operator->pan_number;
        $legal_tax_documentation->gst_number = $operator->gst_number;
        $legal_tax_documentation->bank_name = $operator->bank_name;
        $legal_tax_documentation->bank_account_name = $operator->bank_account_name;
        $legal_tax_documentation->bank_account_number = $operator->bank_account_number;
        $legal_tax_documentation->ifsc_code = $operator->ifsc_code;
        $legal_tax_documentation->swift_code = $operator->swift_code;
//        $legal_tax_documentation->pan_image = $operator->pan_image;
//        $legal_tax_documentation->gst_image = $operator->gst_image;
//        $legal_tax_documentation->cheque_image = $operator->cheque_image;

        $legal_status = ArrayHelper::map(PropertyLegalStatus::find()->asArray()->all(), 'id', 'name');
        $legal_docs_images = new LegalDocsImages();

        $show_terms_tab = true;
        if ($operator->terms_and_conditons == 1)
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

        $operator_id =  $legal_tax_documentation->id;
        $operator = NULL;
        if ($operator_id != 0) {
            $operator = Operator::find()
                ->where(['id' => $operator_id])
                ->one();
        }

        if ($operator == NULL){
            throw new NotFoundHttpException();
        }

        //Validation success
        $operator->legal_status_id = $legal_tax_documentation->legal_status_id;
        $operator->pan_number = $legal_tax_documentation->pan_number;
        $operator->gst_number = $legal_tax_documentation->gst_number;
        $operator->bank_name = $legal_tax_documentation->bank_name;
        $operator->bank_account_name = $legal_tax_documentation->bank_account_name;
        $operator->bank_account_number = $legal_tax_documentation->bank_account_number;
        $operator->ifsc_code = $legal_tax_documentation->ifsc_code;
//        $operator->swift_code = $legal_tax_documentation->swift_code;

        $legal_doc_images = new LegalDocsImages();

//        $legal_doc_images->pan_image = UploadedFile::getInstance($legal_doc_images, 'pan_image');
//        if (null != $legal_doc_images->pan_image  ) {
//            $file_name =  uniqid('', true) . '.' . $legal_doc_images->pan_image->extension;
//            if ($legal_doc_images->upload($legal_doc_images->pan_image, $file_name)) {
//                $operator->pan_image = $file_name;
//                $legal_doc_images->pan_image = null;
//            } else {
//                //File upload error
//                //TODO: Allow to proceed?
//                //return "pan_image err1";
//            }
//        }
//        else {
//            //File upload error, if there is no pan image already, shouldn't proceed
//            if (empty($operator->pan_image)) {
////                return "pan_image err2";
//            }
//        }
//
//        $legal_doc_images->gst_image = UploadedFile::getInstance($legal_doc_images, 'gst_image');
//        if (null != $legal_doc_images->gst_image  ) {
//            $file_name =  uniqid('', true) . '.' . $legal_doc_images->gst_image->extension;
//            if ($legal_doc_images->upload($legal_doc_images->gst_image, $file_name)) {
//                $legal_doc_images->gst_image = null;
//                $operator->gst_image = $file_name;
//            } else {
//                //File upload error
////                return "gst_image err1";
//            }
//        }
//        else {
//            if (empty($operator->gst_image)) {
////                return "gst_image err2";
//            }
//            //File upload error
//        }


        if ($operator->save(false)) {
            Yii::$app->session->setFlash('success', "Operator documents updated successfully.");
            return $this->redirect(['operator/contact', 'id' => $operator->getPrimaryKey()]);
        }
        else {
            Yii::$app->session->setFlash('error', "Operator documents updation failed.");
            $legal_status = ArrayHelper::map(PropertyLegalStatus::find()->asArray()->all(), 'id', 'name');
            $legal_docs_images = new LegalDocsImages();
            return $this->render('legal_and_tax',['legal_tax_documentation' => $legal_tax_documentation, 'legal_status' => $legal_status, 'legal_docs_images' => $legal_docs_images]);;
        }
    }

    public function actionContact(){
        $this->layout = 'tm_main';
        $operator_id = Yii::$app->request->get('id');
        $operator = NULL;
        if ($operator_id != 0) {
            $operator = Operator::find()
                ->where(['id' => $operator_id])
//                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();
        }


        $contact = OperatorContacts::find()
            ->where(['operator_id' => $operator->id])
            ->one();

        if ($contact == NULL){
            $contact = new OperatorContacts();
            $contact->operator_id = $operator->id;
        }

        $show_terms_tab = 1;
        if ($operator->terms_and_conditons == 1)
        {
            $show_terms_tab = 0;
        }

        return $this->render('contact_details',['contact' => $contact, 'show_terms_tab' => $show_terms_tab]);

    }

    public function actionSavecontactdetails() {
        $operator_id = $_POST['OperatorContacts']['operator_id'];
        $operator = NULL;
        if ($operator_id != 0) {
            $operator = Operator::find()
                ->where(['id' => $operator_id])
//                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();
        }

        if ($operator == NULL){
            //Property (id) doesn't exists
            throw new NotFoundHttpException();
        }

        $contacts = OperatorContacts::find()
            ->where(['operator_id' => $operator_id])
            ->one();

        if ($contacts == NULL){
            $contacts = new OperatorContacts();
        }

        if (isset($_POST['OperatorContacts'])) {
            $contacts->name1 =	$_POST['OperatorContacts']['name1'];
            $contacts->name2	= $_POST['OperatorContacts']['name2'];

            $contacts->phone1 = $_POST['OperatorContacts']['phone1'];
            $contacts->phone2 = $_POST['OperatorContacts']['phone2'];

            $contacts->email1 = $_POST['OperatorContacts']['email1'];
            $contacts->email2 = $_POST['OperatorContacts']['email2'];

            $contacts->operator_id = $operator_id;

//            if($contacts->validate()) {
//                $contacts->save();
//                $show_terms_tab =  Yii::$app->request->post('show_terms_tab');
//                $redirect_url = 'operator/';
//                $redirect_url .= ($show_terms_tab == 1) ? "terms" : "basicdetails";
//                return $this->redirect([$redirect_url, 'id' => $operator_id]);
//            }
//            else {
//                $show_terms_tab = 1;
//                if ($operator->terms_and_conditons == 1)
//                {
//                    $show_terms_tab = 0;
//                }
//                return $this->render('contact_details',['contact' => $contacts, 'show_terms_tab' => $show_terms_tab]);
//            }

            if ($contacts->save(false)) {
                Yii::$app->session->setFlash('success', "Operator documents updated successfully.");
                return $this->redirect(['operator/termsandconditions', 'id' => $operator->getPrimaryKey()]);
            }
            else{
                return $this->render('contact_details',['contact' => $contacts]);
            }
        }
    }

    public function actionTermsandconditions(){
        $this->layout = 'tm_main';
        $operator_id = Yii::$app->request->get('id');
        //Check this proerty owned by this user
        $operator = NULL;
        if ($operator_id != 0) {
            $operator = Operator::find()
                ->where(['id' => $operator_id])
                ->one();
        }

        if ($operator == NULL){
            //Property (id) doesn't exists
            throw new NotFoundHttpException();
        }


        if ($operator->terms_and_conditons == 1)
        {
            throw new NotFoundHttpException();
        }

        $terms = new TermsConditions();
        $terms->id = $operator->id;
        $terms->terms_and_conditons = $operator->terms_and_conditons;

        return $this->render('terms_and_conditions',['terms' => $terms]);
    }

    public function actionSaveterms()
    {
        $terms = new TermsConditions();
        if ( !$terms->load(Yii::$app->request->post()))  {
            //TODO
            echo "Load failed";
        }

        $operator_id =  $terms->id;
        $operator = NULL;
        if ($operator_id != 0) {
            $operator = Operator::find()
                ->where(['id' => $operator_id])
                ->one();
        }

        if ($operator == NULL){
            throw new NotFoundHttpException();
        }

        if ($terms->terms_and_conditons == 1)
        {
            $operator->terms_and_conditons = 1;
        }

        if ($operator->save(false)) {
            //Yii::$app->session->setFlash('success', "Operator documents updated successfully.");
            return $this->redirect(['operator/basicdetails', 'id' => $operator->getPrimaryKey()]);
        }
        else {
            Yii::$app->session->setFlash('error', "Terms and condition updation failed.");
            $terms = new TermsConditions();
            $terms->id = $operator->id;
            $terms->terms_and_conditons = $operator->terms_and_conditons;
            return $this->render('terms_conditions',['terms' => $terms]);
        }
    }
}