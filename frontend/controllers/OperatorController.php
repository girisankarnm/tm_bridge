<?php

namespace frontend\controllers;
use frontend\models\Country;
use frontend\models\Destination;
use frontend\models\Location;
use frontend\models\MasterEditRequest;
use frontend\models\operator\AddressLocation;
use frontend\models\operator\BasicDetails;
use frontend\models\operator\LegalDocsImages;
use frontend\models\operator\LegalTaxDocumentation;
use frontend\models\operator\Operator;
use frontend\models\operator\OperatorContacts;
use frontend\models\operator\OperatorImage;
use frontend\models\operator\TermsConditions;
use frontend\models\property\Property;
use frontend\models\property\PropertyLegalStatus;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

class OperatorController extends Controller{

    public function beforeAction($action) {

        if (Yii::$app->user->isGuest) {
            Yii::$app->user->loginRequired();
            return;
        }

        if (Yii::$app->user->identity->user_type != 2) {
            throw new ForbiddenHttpException();
        }
        return parent::beforeAction($action);
    }

    public function actionBasicdetails(){
        $this->layout = 'tm_main';

        $operator = NULL;
        $operator_contacts = NULL;
        $operator = Operator::find()
            ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
            ->one();

        $basic_details = new BasicDetails();
        $operator_image = new OperatorImage();

        if ($operator == NULL){
            //TODO: Show a message box on view that you don't have a profile yet, create one
            $operator = new Operator();
            $basic_details->id = 0;
            $operator_image->scenario = "create";
        }
        else {
            $operator_contacts = OperatorContacts::find()->where(['operator_id' =>$operator->id])->one();

            $basic_details->id = $operator->id;
            $basic_details->name = $operator->name;
            $basic_details->website = $operator->website;
            $basic_details->logo_image = $operator->logo_image;
            $basic_details->v_card_image_front = $operator->v_card_image_front;
            $basic_details->v_card_image_back = $operator->v_card_image_back;
            $operator_image->scenario = "update";
        }

        $show_terms_tab = true;
        if ($operator->terms_and_conditons == 1)
        {
            $show_terms_tab = false;
        }
//        return $this->asJson($show_terms_tab);
        return $this->render('basic_details',[
            'basic_details' => $basic_details,
            'operator_image' => $operator_image,
            'show_terms_tab' => $show_terms_tab,
            'operator' => $operator,
            'operator_contacts' => $operator_contacts
        ]);

    }

    public function actionSavebasicdetails(){
        $basic_details = new  BasicDetails();
        if ( !$basic_details->load(Yii::$app->request->post()))  {
            echo "Load failed";
        }
        $operator_image = new OperatorImage();
        $operator_image->logo_image = UploadedFile::getInstance($operator_image, 'logo_image');
        $operator_image->v_card_image_front = UploadedFile::getInstance($operator_image, 'v_card_image_front');
        $operator_image->v_card_image_back = UploadedFile::getInstance($operator_image, 'v_card_image_back');

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

//Logo Image
        if ($operator_image->logo_image != null) {
            $file_name =  uniqid('', true) . '.' . $operator_image->logo_image->extension;
            if ($operator_image->upload($operator_image->logo_image,$file_name)) {
                //TODO: Will we allow to proceed if image upload fails
                $operator->logo_image = $file_name;

            } else {
                echo "Image upload failed";
            }
        }
        else {
            if (empty($operator->logo_image)) {
                echo "Profile image (Mandatory) upload failed";
            }
        }

 // V-card image front
        if ($operator_image->v_card_image_front != null) {
            $file_name =  uniqid('', true) . '.' . $operator_image->v_card_image_front->extension;
            if ($operator_image->upload($operator_image->v_card_image_front,$file_name)) {
                //TODO: Will we allow to proceed if image upload fails
                $operator->v_card_image_front = $file_name;

            } else {
                echo "Image upload failed";
            }
        }
        else {
            if (empty($operator->v_card_image_front)) {
//                echo "Profile image (Mandatory) upload failed";
            }
        }

 //V-card image back
        if ($operator_image->v_card_image_back != null) {
            $file_name =  uniqid('', true) . '.' . $operator_image->v_card_image_back->extension;
            if ($operator_image->upload($operator_image->v_card_image_back,$file_name)) {
                //TODO: Will we allow to proceed if image upload fails
                $operator->v_card_image_back = $file_name;

            } else {
                echo "Image upload failed";
            }
        }
        else {
            if (empty($operator->v_card_image_back)) {
//                echo "Profile image (Mandatory) upload failed";
            }
        }


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

        $operator_contacts = OperatorContacts::find()->where(['operator_id' =>$operator->id])->one();

        $location = MasterEditRequest::find()->where(['name' => 'location'])->one();
        $destination = MasterEditRequest::find()->where(['name' => 'destination'])->one();
        $country = MasterEditRequest::find()->where(['name' => 'country'])->one();
        $pin_code = MasterEditRequest::find()->where(['name' => 'pin code'])->one();
        $locality = MasterEditRequest::find()->where(['name' => 'locality'])->one();

        $address_location = new AddressLocation();
        $address_location->id = $operator->id;
        $address_location->country_id = $operator->country_id;
        $address_location->location_id = $operator->location_id;
        $address_location->destination_id = $operator->destination_id;
        $address_location->address = $operator->address;
        $address_location->postal_code = $operator->postal_code;
        $address_location->locality = $operator->locality;

        $countries = ArrayHelper::map(Country::find()->asArray()->all(), 'id', 'name');
        $locations = ArrayHelper::map(Location::find()->where(['country_id' => $operator->country_id])->asArray()->all(), 'id', 'name');
        $destinations = ArrayHelper::map(Destination::find()->where(['location_id' => $operator->location_id])->asArray()->all(), 'id', 'name');

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
                'show_terms_tab' => $show_terms_tab,
                'location' => $location->id,
                'destination' => $destination->id,
                'country' => $country->id,
                'pin_code' => $pin_code->id,
                'operator' => $operator,
                'locality' => $locality->id,
                'operator_contacts' => $operator_contacts
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
        $operator_contacts = NULL;
        if ($operator_id != 0) {
            $operator = Operator::find()
                ->where(['id' => $operator_id])
                ->one();
        }

        if ($operator == NULL){
            throw new NotFoundHttpException();
        }

        $operator_contacts = OperatorContacts::find()->where(['operator_id' =>$operator->id])->one();

        $property_legal_status = MasterEditRequest::find()->where(['name' => 'legal status'])->one();
        $pan_number = MasterEditRequest::find()->where(['name' => 'pan number'])->one();
        $gst_number = MasterEditRequest::find()->where(['name' => 'gst number'])->one();
        $bank_name = MasterEditRequest::find()->where(['name' => 'bank name'])->one();
        $account_number = MasterEditRequest::find()->where(['name' => 'account number'])->one();
        $account_name = MasterEditRequest::find()->where(['name' => 'account name'])->one();
        $ifsc_code = MasterEditRequest::find()->where(['name' => 'ifsc code'])->one();

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
        $legal_tax_documentation->pan_image = $operator->pan_image;
        $legal_tax_documentation->gst_image = $operator->gst_image;
//        $legal_tax_documentation->cheque_image = $operator->cheque_image;

        $legal_status = ArrayHelper::map(PropertyLegalStatus::find()->asArray()->all(), 'id', 'name');
        $legal_docs_images = new LegalDocsImages();

        if($legal_tax_documentation->pan_image == NULL ||
        $legal_tax_documentation->gst_image == NULL ) {
            $legal_docs_images->scenario = "create";
        }

        $show_terms_tab = true;
        if ($operator->terms_and_conditons == 1)
        {
            $show_terms_tab = false;
        }

        return $this->render('legal_and_tax',[
            'legal_tax_documentation' => $legal_tax_documentation,
            'legal_status' => $legal_status, 'legal_docs_images' => $legal_docs_images,
            'show_terms_tab' => $show_terms_tab,
            'legal_status_id' => $property_legal_status->id,
            'pan_number' => $pan_number->id,
            'gst_number' => $gst_number->id,
            'bank_name' => $bank_name->id,
            'account_number' => $account_number->id,
            'account_name' => $account_name->id,
            'ifsc_code' => $ifsc_code->id,
            'operator' => $operator,
            'operator_contacts' => $operator_contacts,
        ]);
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

        $legal_doc_images = new LegalDocsImages();
        $legal_doc_images->pan_image = UploadedFile::getInstance($legal_doc_images, 'pan_image');
        $legal_doc_images->gst_image = UploadedFile::getInstance($legal_doc_images, 'gst_image');


        if ($legal_doc_images->pan_image != null) {
            $file_name =  uniqid('', true) . '.' . $legal_doc_images->pan_image->extension;
            if ($legal_doc_images->upload($legal_doc_images->pan_image,$file_name)) {
                //TODO: Will we allow to proceed if image upload fails
                $operator->pan_image = $file_name;

            } else {
//                echo "Image upload failed";
            }
        }
        else {
            if (empty($operator->pan_image)) {
//                echo "Profile image (Mandatory) upload failed";
            }
        }

        //GST
          if ($legal_doc_images->gst_image != null) {
            $file_name =  uniqid('', true) . '.' . $legal_doc_images->gst_image->extension;
            if ($legal_doc_images->upload($legal_doc_images->gst_image,$file_name)) {
                //TODO: Will we allow to proceed if image upload fails
                $operator->gst_image = $file_name;

            } else {
//                echo "Image upload failed";
            }
        }
        else {
            if (empty($operator->gst_image)) {
//                echo "Profile image (Mandatory) upload failed";
            }
        }



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
                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();
        }

        $contact = OperatorContacts::find()
            ->where(['operator_id' => $operator->id])
            ->one();

        if ($contact == NULL){
            $contact = new OperatorContacts();
            $contact->operator_id = $operator->id;
        }

        $contact_name = MasterEditRequest::find()->where(['name' => 'name1'])->one();
        $contact_phone = MasterEditRequest::find()->where(['name' => 'phone1'])->one();


        $show_terms_tab = 1;
        if ($operator->terms_and_conditons == 1)
        {
            $show_terms_tab = 0;
        }
        return $this->render('contact_details',[
            'contact' => $contact,
            'operator' => $operator,
            'show_terms_tab' => $show_terms_tab,
            'operator' => $operator,
            'name1' => $contact_name->id,
            'phone1' => $contact_phone->id,
        ]);
    }

    public function actionSavecontactdetails() {
        $operator_id = $_POST['OperatorContacts']['operator_id'];
        $operator = NULL;
        if ($operator_id != 0) {
            $operator = Operator::find()
                ->where(['id' => $operator_id])
                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
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

            if($contacts->validate()) {
                $contacts->save();
                $show_terms_tab =  Yii::$app->request->post('show_terms_tab');
                $redirect_url = 'operator/';
                $redirect_url .= ($show_terms_tab == 1) ? "termsandconditions" : "basicdetails";
                return $this->redirect([$redirect_url, 'id' => $operator_id]);
            }
            else {
                $show_terms_tab = 1;
                if ($operator->terms_and_conditons == 1)
                {
                    $show_terms_tab = 0;
                }
                return $this->render('contact_details',['contact' => $contacts, 'show_terms_tab' => $show_terms_tab]);
            }

//            if ($contacts->save(false)) {
//                Yii::$app->session->setFlash('success', "Operator documents updated successfully.");
//                return $this->redirect(['operator/termsandconditions', 'id' => $operator->getPrimaryKey()]);
//            }
//            else{
//                return $this->render('contact_details',['contact' => $contacts]);
//            }
        }
    }

    public function actionTermsandconditions(){
        $this->layout = 'tm_main';
        $operator_id = Yii::$app->request->get('id');
        //Check this proerty owned by this user
        $operator = NULL;
        $operator_contacts = NULL;
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

        $operator_contacts = OperatorContacts::find()->where(['operator_id' =>$operator->id])->one();


        $terms = new TermsConditions();
        $terms->id = $operator->id;
        $terms->terms_and_conditons = $operator->terms_and_conditons;

        return $this->render('terms_and_conditions',['terms' => $terms, 'operator' => $operator, 'operator_contacts' => $operator_contacts]);
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
