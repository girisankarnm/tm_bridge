<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;

class PropertyController extends Controller{

     public function actionBasicdetails(){
         $this->layout = 'tm_main';
         return $this->render('basic_details');
     }
    public function actionAddressandlocation(){
        $this->layout = 'tm_main';
        return $this->render('address_and_locations');
    }
    public function actionLegaltax(){
        $this->layout = 'tm_main';
        return $this->render('legal_and_tax');
    }
    public function actionContact(){
        $this->layout = 'tm_main';
        return $this->render('contact_details');
    }
    public function actionTermsandconditions(){
        $this->layout = 'tm_main';
        return $this->render('terms_and_conditions');
    }
}