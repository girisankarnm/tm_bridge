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
//    }


    public function actionIndex()
    {
        $this->layout = 'main-search';
        return $this->render('index', []);
    }
    public function actionSearchhotel()
    {
        $this->layout = 'main-search';
        return $this->render('search_hotel', []);
    }


}
