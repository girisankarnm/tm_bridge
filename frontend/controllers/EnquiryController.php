<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\helpers\ArrayHelper;
use yii\base\Exception;
use yii\web\NotFoundHttpException;
use yii\web\ForbiddenHttpException;
use yii\helpers\Json;
use Carbon\Carbon;

use frontend\models\enquiry\BasicDetails;
use frontend\models\enquiry\Enquiry;
use frontend\models\enquiry\EnquiryAccommodation;
use frontend\models\enquiry\EnquiryGuestCount;
use frontend\models\enquiry\EnquiryGuestCountChildAge;
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

    private function getEnquiry() {
        if(!isset( $_GET['id'])) {
            throw new NotFoundHttpException();
        }

        $enquiry_id = (int) Yii::$app->request->get('id');
        $enquiry = NULL;
        if ($enquiry_id != 0) {
            $enquiry = Enquiry::find()
                ->where(['id' => $enquiry_id])
                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();
        }

        if ($enquiry == NULL){
            throw new NotFoundHttpException("Enquiry not found.");
        }

        return $enquiry;
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
        if ( $basic_details->load(Yii::$app->request->post()))  {
            
            if( $basic_details->validate() ) {            
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
            }                       
        }

        //TODO: Manage flash message in view
        Yii::$app->session->setFlash('error', "Enquiry creation failed.");            
        $this->layout = 'tm_main';
        $countries = ArrayHelper::map(Country::find()->asArray()->all(), 'id', 'nationality');
        return $this->render('basic_details',[
            'basic_details' => $basic_details,
            'countries' => $countries,
            'tour_end_date' => $tour_end_date
        ]);
        
    }
    public function actionContactdetails(){
        $enquiry = $this->getEnquiry();        

        $this->layout = 'tm_main';
        return $this->render('contact_details', ['enquiry' => $enquiry]);
    }
    
    
    public function actionSavecontactdetails(){
        $enquiry_id = Yii::$app->request->post('enquiry_id');
        if ($enquiry_id != 0) {
            $enquiry = Enquiry::find()
                ->where(['id' => $enquiry_id])
                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();
        }

        if ($enquiry == NULL){
            throw new NotFoundHttpException("Enquiry not found.");
        }

        if ($enquiry->load(Yii::$app->request->post())) {
            $enquiry->save();
            return $this->redirect(['enquiry/guestcount',  'id' => $enquiry->getPrimaryKey() ]);
        }
    }

    public function actionGuestcount(){
        $enquiry = $this->getEnquiry(); 

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

        //var_dump($_POST);
        //TODO: Check this proerty owned by this user
        $enquiry_id = Yii::$app->request->post('enquiry_id');
        $enquiry = NULL;
        if ($enquiry_id != 0) {
            $enquiry = Enquiry::find()
                ->where(['id' => $enquiry_id])
                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();
        }

        if ($enquiry == NULL){
            throw new NotFoundHttpException("Enquiry not found.");
        }

        //TODO: Add transaction & rollback

        $guest_count_data = Yii::$app->request->post('guest_count_data');
        $child_breakup_data = Yii::$app->request->post('child_breakup');
        $childBreakupArray = Json::decode($child_breakup_data, true);
        parse_str($guest_count_data, $guestCountDataArray);

        //var_dump($guestCountDataArray);
        //exit;

        $initial_plan_id = 1;
        if($enquiry->guest_count_same_on_all_days == 1) {
            $initial_plan_id = 0;
        }

        $transaction = Yii::$app->db->beginTransaction();

        try {            
            $enquiry->guest_count_same_on_all_days = isset($_POST["Enquiry"]["guest_count_same_on_all_days"]) ? $_POST["Enquiry"]["guest_count_same_on_all_days"] : 1;
            if(!$enquiry->save() ) {
                throw new Exception("Unable to save Enquiry details");
            }
            
            EnquiryGuestCount::deleteAll(['enquiry_id' => $enquiry_id]);

            if (isset($guestCountDataArray['adults'])) {
                $plan_count = count($guestCountDataArray['adults']);
                $plan_increment = 1;
                if($enquiry->guest_count_same_on_all_days == 1) {
                    //consider only one plan
                    $plan_count = 1;
                    $plan_increment = 0;
                }
                for ($i = 0; $i < $plan_count; $i++ ) {
                    $guest_count  = new EnquiryGuestCount();
                    $guest_count->plan = $i + $plan_increment;
                    $guest_count->adults = $guestCountDataArray['adults'][$i];
                    $guest_count->children = $guestCountDataArray['children'][$i];
                    $guest_count->enquiry_id = $enquiry_id;
                    if(!$guest_count->save()) {
                        throw new Exception("Unable to save Guest count");
                    }
                    
                    $child_break_up_array = $childBreakupArray[$guestCountDataArray['plan_uid'][$i]];
                    foreach ($child_break_up_array as $key => $value) {                
                        $enquiry_guest_count_child_age = new EnquiryGuestCountChildAge();
                        $enquiry_guest_count_child_age->age = $key;
                        $enquiry_guest_count_child_age->count = $value;
                        $enquiry_guest_count_child_age->plan_id = $guest_count->getPrimaryKey();
                        if(!$enquiry_guest_count_child_age->save()) {
                            throw new Exception("Unable to save child age break up");
                        }
                    }
                }
            }
            $transaction->commit();
            //TODO: Handling exception in page
        } catch (\Exception $e) {
            $transaction->rollBack();
            echo $e->getMessage();            
            throw $e;
        } catch (\Throwable $e) {
            //TODO: Handling exception in page
            $transaction->rollBack();
            echo $e->getMessage();
            throw $e;
        }

        return $this->redirect(['enquiry/accommodation',  'id' => $enquiry->getPrimaryKey()]);
    }
    
    public function actionAccommodation(){
        $enquiry = $this->getEnquiry(); 

        $accommodation = new EnquiryAccommodation();
        $destinations = ArrayHelper::map(Destination::find()->asArray()->all(), 'id', 'name');
        $meal_plans = ArrayHelper::map(PropertyMealPlan::find()->all(), 'id', 'name');
        $pax_count_plans = ArrayHelper::map(EnquiryGuestCount::find()->where(['enquiry_id' => $enquiry->id])->all(), 'id', function($model) 
        {
            return 'Plan: '.($model['plan'] + 1).' [Adults:'.$model['adults'].' | Children:'.$model['children'].']';
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

    public function actionSaveaccommodation(){       
        
        $enquiry_id = Yii::$app->request->post('enquiry_id');
        if ($enquiry_id != 0) {
            $enquiry = Enquiry::find()
                ->where(['id' => $enquiry_id])
                ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->one();
        }

        if ($enquiry == NULL){
            throw new NotFoundHttpException("Enquiry not found.");
        }

        $transaction = Yii::$app->db->beginTransaction();
        try
        {
            EnquiryAccommodation::deleteAll(['enquiry_id' => $enquiry_id]);
            if (isset($_POST["day"])) {
                $plan_count = count($_POST["day"]);
                for ($i = 0; $i < $plan_count; $i++ ) {                
                    $accommodation = new EnquiryAccommodation();
                    $accommodation->day =  $_POST["day"][$i];
                    $accommodation->status = $_POST["accommodation_status"][$i];
                    $accommodation->destination_id = ($accommodation->status == 1 ) ? $_POST["destination_id"][$i] : 0;
                    $accommodation->meal_plan_id = ($accommodation->status == 1 ) ? $_POST["meal_plan_id"][$i] : 0;
                    $accommodation->guest_count_plan_id = ($accommodation->status == 1) ? $_POST["guest_count_plan_id"][$i] : 0;
                    $accommodation->enquiry_id = $enquiry_id;
                    $accommodation->save();
                }
            }

            $transaction->commit();
            //TODO: Handling exception in page
        } catch (\Exception $e) {
            $transaction->rollBack();            
            throw $e;
        } catch (\Throwable $e) {
            //TODO: Handling exception in page
            $transaction->rollBack();            
            throw $e;
        }

        return $this->redirect(['enquiry/home',]);
    }
}