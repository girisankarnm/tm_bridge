<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\helpers\ArrayHelper;

use frontend\models\enquiry\BasicDetails;
use frontend\models\Country;

class EnquiryController extends Controller{

    public function actionBasicdetails(){
        $basic_details = new BasicDetails();
        $this->layout = 'tm_main';
        $countries = ArrayHelper::map(Country::find()->asArray()->all(), 'id', 'nationality');
        //$nationality = ArrayHelper::map(TariffNationalityGroupName::find()->asArray()->all(), 'id', 'name');

        return $this->render('basic_details', [
            'basic_details' => $basic_details,
            'countries' => $countries
        ]);
    }
    public function actionContact(){
        $this->layout = 'tm_main';
        return $this->render('contact_details', []);
    }
    public function actionGuestcount(){
        $this->layout = 'tm_main';
        return $this->render('guest_count', []);
    }
    public function actionAccommodation(){
        $this->layout = 'tm_main';
        return $this->render('accommodation', []);
    }
}