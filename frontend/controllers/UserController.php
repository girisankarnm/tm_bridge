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
use frontend\models\user\VerifyEmailForm;
use frontend\models\user\ResendVerificationEmailForm;
use frontend\models\user\PasswordResetRequestForm;
use frontend\models\user\ResetPasswordForm;

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

    public function actionDone() {
        $user = Yii::$app->user->identity;
        $user->first_login = 0;
        $user->save(false);

        return $this->gotoHomePage();
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(['login']);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {    
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            //throw new BadRequestHttpException($e->getMessage());
            return $this->redirect(['onboarding/activation-failed']);
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->redirect(['onboarding/activation-success']);            
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->redirect(['onboarding/activation-failed']);
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        //$this->layout = 'message';
        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        $this->layout = 'message';
        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

}