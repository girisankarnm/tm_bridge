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
}