<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use Carbon\Carbon;

use frontend\models\enquiry\BasicDetails;
use frontend\models\enquiry\Enquiry;
use frontend\models\enquiry\EnquiryAccommodation;
use frontend\models\enquiry\EnquiryGuestCount;
use frontend\models\Country;
use frontend\models\Destination;
use frontend\models\property\PropertyMealPlan;

class EnquiryController extends Controller{
    
    public function beforeAction($action) {
        //$this->enableCsrfValidation = false;
        if (Yii::$app->user->isGuest) {
            Yii::$app->user->loginRequired();
            return;
        }
        
        if (Yii::$app->user->identity->user_type != 1){
            throw new ForbiddenHttpException();
        } 

        return parent::beforeAction($action);
    }

    public function actionBasicdetails(){
        $enquiry_id = Yii::$app->request->get('id');

        $enquiry = Enquiry::find()
            ->where(['id' => $enquiry_id])
            ->one();

        $basic_details = new BasicDetails();
        $tour_end_date = "";
        if ($enquiry == null){
            $enquiry = new Enquiry();
            $basic_details->id = 0;
        }
        else {
            $basic_details->id = $enquiry->id;
            $basic_details->guest_name = $enquiry->guest_name;
            $basic_details->nationality_id = $enquiry->nationality_id;
            $start_date = Carbon::createFromFormat('Y-m-d', $enquiry->tour_start_date);
            $basic_details->tour_start_date = Carbon::parse($start_date)->format('d M Y');
            $basic_details->tour_duration = $enquiry->tour_duration;
            $tour_end_date = $start_date->addDays($enquiry->tour_duration)->format('d M Y');
        }
        
        $countries = ArrayHelper::map(Country::find()->asArray()->all(), 'id', 'nationality');
        $this->layout = 'tm_main';
        return $this->render('basic_details',[
            'basic_details' => $basic_details,
            'countries' => $countries,
            'tour_end_date' => $tour_end_date
        ]);
    }

    public function actionSavebasicdetails(){        
        $basic_details = new  BasicDetails();
        if ( !$basic_details->load(Yii::$app->request->post()))  {
            echo "Load failed";
        }

        if( !$basic_details->validate() ) {
            var_dump($basic_details->errors);
            exit;
            $this->layout = 'tm_main';
            $countries = ArrayHelper::map(Country::find()->asArray()->all(), 'id', 'nationality');
            return $this->render('basic_details',[
                'basic_details' => $basic_details,
                'countries' => $countries,                
            ]);
        }

        $enquiry_id = Yii::$app->request->post('enquiry_id');
        if ($enquiry_id != 0) {
            $enquiry = Enquiry::find()
                ->where(['id' => $enquiry_id])
                ->one();
            if ($enquiry == NULL){
                throw new NotFoundHttpException();
            }
        }
        else {
            $enquiry = new Enquiry();
        }

        $enquiry->guest_name = $basic_details->guest_name;
        $enquiry->nationality_id = $basic_details->nationality_id;
        //$start_date = \DateTime::createFromFormat('d/m/Y', $basic_details->tour_start_date);
        //$enquiry->tour_start_date = $start_date->format('Y-m-d');
        $enquiry->tour_start_date = Carbon::createFromFormat('d M Y', $basic_details->tour_start_date)->toDateString();
        $enquiry->tour_duration = $basic_details->tour_duration;
        $enquiry->owner_id = Yii::$app->user->identity->getOWnerId();

        if ($enquiry->save(false)) {
            Yii::$app->session->setFlash('success', "Enquiry created successfully.");
            return $this->redirect(['enquiry/contactdetails',  'id' => $enquiry->getPrimaryKey()]);
        }
        else {
            Yii::$app->session->setFlash('error', "Enquiry creation failed.");            
            $this->layout = 'tm_main';
            $countries = ArrayHelper::map(Country::find()->asArray()->all(), 'id', 'nationality');
            return $this->render('basic_details',[
                'basic_details' => $basic_details,
                'countries' => $countries,
                'tour_end_date' => $tour_end_date
            ]);
        }
    }
    public function actionContactdetails(){
        $enquiry_id = (int) Yii::$app->request->get('id');
        $enquiry = NULL;
        if ($enquiry_id != 0) {
            $enquiry = Enquiry::find()
                ->where(['id' => $enquiry_id])
                ->one();
        }

        if ($enquiry == NULL){
            throw new NotFoundHttpException();
        }

        $this->layout = 'tm_main';
        return $this->render('contact_details', ['enquiry' => $enquiry]);
    }
    
    
    public function actionSavecontactdetails(){
        $enquiry_id = Yii::$app->request->post('enquiry_id');
        if ($enquiry_id != 0) {
            $enquiry = Enquiry::find()
                ->where(['id' => $enquiry_id])
                ->one();
        }

        if ($enquiry == NULL){
            throw new NotFoundHttpException("Enquiry not found");
        }

        if ($enquiry->load(Yii::$app->request->post())) {
            $enquiry->save();
            return $this->redirect(['enquiry/guestcount',  'id' => $enquiry->getPrimaryKey() ]);
        }
    }

    public function actionGuestcount(){
        $enquiry_id = (int) Yii::$app->request->get('id');
        $enquiry = NULL;
        if ($enquiry_id != 0) {
            $enquiry = Enquiry::find()
                ->where(['id' => $enquiry_id])
                ->one();
        }

        if ($enquiry == NULL){
            throw new NotFoundHttpException();
        }

        $plan_age_breakup = array();
        if (isset($enquiry->enquiryGuestCounts)) {
            foreach ($enquiry->enquiryGuestCounts as $guest_count) {
                $age_breakup = array();
                foreach ($guest_count->enquiryGuestCountChildAges as $child_age) {
                    $age_breakup[$child_age->age] = $child_age->count;
                }
                $plan_age_breakup[$guest_count->plan] = $age_breakup;
            }
        }

        //var_dump($plan_age_breakup);
        $age_breakup  = Json::encode($plan_age_breakup, true);        

        $this->layout = 'tm_main';
        return $this->render('guest_count', [
            'enquiry' => $enquiry,  
            'age_breakup' => $age_breakup
        ]);
    }

    public function actionSaveguestcount(){
        var_dump($_POST);
    }
    

    public function actionAccommodation(){
        $enquiry_id = (int) Yii::$app->request->get('id');
        $enquiry = NULL;
        if ($enquiry_id != 0) {
            $enquiry = Enquiry::find()
                ->where(['id' => $enquiry_id])
                ->one();
        }

        if ($enquiry == NULL){
            throw new NotFoundHttpException();
        }

        $accommodation = new EnquiryAccommodation();
        $destinations = ArrayHelper::map(Destination::find()->asArray()->all(), 'id', 'name');
        $meal_plans = ArrayHelper::map(PropertyMealPlan::find()->all(), 'id', 'name');
        $pax_count_plans = ArrayHelper::map(EnquiryGuestCount::find()->where(['enquiry_id' => $enquiry_id])->all(), 'id', function($model) 
        {
            return 'Plan: '.$model['plan'].'- Adults:'.$model['adults'].'|Children:'.$model['children'];
        });

        $this->layout = 'tm_main';
        return $this->render('accommodation', [
            'enquiry' => $enquiry,
            'destinations' => $destinations,
            'meal_plans' => $meal_plans,
            'pax_count_plans' => $pax_count_plans,
            'model' => $accommodation
        ]);        
    }
}