<?php

namespace frontend\controllers;
class EnquiryController extends Controller{

    public function actionBasicdetails(){
        return $this->render('basic_details', []);
    }
    public function actionContactdetails(){
        return $this->render('contact_details', []);
    }
    public function actionGuestcount(){
        return $this->render('guest_count', []);
    }
    public function actionAccommodation(){
        return $this->render('accommodation', []);
    }
}