<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use yii\base\InvalidArgumentException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use frontend\models\user\LoginForm;

class UserController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        //TODO : Set user home page
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'register', 'add'],
                'rules' => [
                    [
                        'actions' => ['register', 'login'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout', 'add'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get'],
                ],
            ],
        ];
    }

    public function actionLogin()
    {
        $model = new LoginForm();
         if (!Yii::$app->user->isGuest) {
           return $this->gotoHomePage();
        }

        if ($model->load(Yii::$app->request->post()) && $model->login()) {            
            return $this->gotoHomePage();            
        }
        
        $model->password = '';
        //$this->layout = 'auth';
        return $this->render('login',['model' => $model]);
    }
}