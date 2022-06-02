<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;

class EnquiryController extends Controller{

    public function actionBasicdetails(){
        $this->layout = 'tm_main';
        return $this->render('basic_details', []);
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