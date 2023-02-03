<?php

namespace frontend\controllers;

use yii\web\Controller;


class PropertyController extends Controller
{
//    public function beforeAction($action)
//    {
//        $this->enableCsrfValidation = false;
//
//        if (Yii::$app->user->isGuest) {
//            Yii::$app->user->loginRequired();
//            return;
//        }
//
//        if (Yii::$app->user->identity->user_type != 1) {
//            throw new ForbiddenHttpException();
//        }
//
//        return parent::beforeAction($action);
//    }s


    public function actionIndex()
    {
        $this->layout = 'tm_main';
        return $this->render('index', []);
    }
    public function actionSearchhotel()
    {
        $this->layout = 'tm_main';
        return $this->render('search_hotel', []);
    }
     public function actionPpe()
    {
        $this->layout = 'tm_main';
        return $this->render('index2', []);
    }
     public function actionPpe1()
    {
        $this->layout = 'tm_main';
        return $this->render('room-rate', []);
    }
     public function actionPpe2()
    {
        $this->layout = 'tm_main';
        return $this->render('weekday-hikes', []);
    }
     public function actionPpe3()
    {
        $this->layout = 'tm_main';
        return $this->render('meal-supplement', []);
    }
     public function actionPpe4()
    {
        $this->layout = 'tm_main';
        return $this->render('users', []);
    }
     public function actionPpe5()
    {
        $this->layout = 'tm_main';
        return $this->render('booking-request', []);
    }
     public function actionPpe6()
    {
        $this->layout = 'tm_main';
        return $this->render('SRR-special-rate-request', []);
    }
     public function actionPpe7()
    {
        $this->layout = 'tm_main';
        return $this->render('SRR-apply-LS-rate', []);
    }
     public function actionPpe8()
    {
        $this->layout = 'tm_main';
        return $this->render('booking-cancellation', []);
    }
     public function actionPpe9()
    {
        $this->layout = 'tm_main';
        return $this->render('voucher', []);
    }
    public function actionPpe10()
    {
        $this->layout = 'tm_main';
        return $this->render('messages', []);
    }
    public function actionPpe11()
    {
        $this->layout = 'tm_main';
        return $this->render('communication-screen', []);
    }
    public function actionPpe12()
    {
        $this->layout = 'tm_main';
        return $this->render('datatable', []);
    }
    public function actionData()
    {

        $data = [
            "data" => [
                [
                    "id" => "1",
                    "name" => "Tiger Nixon",
                    "enq_no" => "01/2022",
                    "ref_no" => "1232326565",
                    "bkg_date" => "25 Oct 2023",
                    "operator" => "Kallada Tours",
                    "status" => "Confirmed"
                ],
                [
                    "id" => "2",
                    "name" => "Wayne Parnel",
                    "enq_no" => "02/2022",
                    "ref_no" => "1232326565",
                    "bkg_date" => "25 Oct 2023",
                    "operator" => "Kallada Tours and",
                    "status" => "Pending"
                ],
                [
                    "id" => "3",
                    "name" => "Mason Mount",
                    "enq_no" => "01/2023",
                    "ref_no" => "1232326565",
                    "bkg_date" => "25 Oct 2023",
                    "operator" => "Kallada Tours",
                    "status" => "Confirmed"
                ],
            ]
        ];

        return $this->asJson($data);

    }    
    public function actionPpe13()
    {
        $this->layout = 'tm_main';
        return $this->render('property-booking-report', []);
    }
    public function actionPpe14()
    {
        $this->layout = 'tm_main';
        return $this->render('booking-status-report', []);
    }
}