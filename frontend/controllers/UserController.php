<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use yii\base\InvalidArgumentException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use frontend\models\user\LoginForm;
use frontend\models\user\SignupForm;

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

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');            
            return $this->redirect(['user/registration-success']);
        }
        else {
            //$this->layout = 'auth';            
            return $this->render('signup',['register' => $model]);
        }
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

    private function gotoHomePage(){
        if (Yii::$app->user->identity->first_login)
        {
            return $this->redirect(['user/onboarding']);
        }      
        
        if (Yii::$app->user->identity->user_type == 1 )
        {
            return $this->redirect(['property/home',]);            
        } 
        else if (Yii::$app->user->identity->user_type == 2 ) 
        {
            return $this->redirect(['enquiry/home',]);
        } 
        else {
            throw new ForbiddenHttpException();
        }
    }

    public function actionOnboarding()
    {  
        if (!Yii::$app->user->identity->first_login)
        {
            return $this->gotoHomePage();
        }
        
        if (Yii::$app->user->identity->user_type == 1)
        {
            //$this->layout = 'message';
            return $this->render('onboarding_hotel', ['user' => Yii::$app->user->identity]);
        }
        else if (Yii::$app->user->identity->user_type == 2 ) 
        {
            //$this->layout = 'message';
            return $this->render('onboarding_operator', ['user' => Yii::$app->user->identity]);
        } 
        else {
            throw new ForbiddenHttpException();
        }         
    }

    public function actionRegistrationSuccess(){
        //$this->layout = 'message';
        return $this->render('registration_success', []);
    }

}