<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use yii\base\InvalidArgumentException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use frontend\models\user\AddUserForm;
use frontend\models\user\LoginForm;
use frontend\models\user\SignupForm;
use frontend\models\user\VerifyEmailForm;
use frontend\models\user\ResendVerificationEmailForm;
use frontend\models\user\PasswordResetRequestForm;
use frontend\models\user\ResetPasswordForm;
use frontend\models\user\User;
use frontend\models\user\UserPropertyMap;
use frontend\models\property\Property;

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
            $this->layout = 'common';
//            return $this->render('signup',['register' => $model]);
            return $this->render('registration', ['register' => $model]);
        }
    }
    public function actionLogin()
    {
        $model = new LoginForm();
         if (!Yii::$app->user->isGuest) {
           return $this->gotoHomePage();
        }

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return 'success';
            return $this->gotoHomePage();
        }

        $model->password = '';
        $this->layout = 'common';
//        return $this->render('login',['model' => $model]);
        return $this->render('user-login',['model' => $model]);
    }


    public function actionList(){

        $this->layout = 'tm_main';
        $users = User::findUsers(Yii::$app->user->getId(), Yii::$app->user->identity->parent);
        return $this->render('list', ['users' => $users]);
    }

    public function actionAdd(){
        $this->layout = 'tm_main';

        $new_user = new AddUserForm();
        $new_user->user_id = 0;

        if ($new_user->load(Yii::$app->request->post()) ) {
            $new_user->user_type = Yii::$app->user->identity->user_type;
            $new_user->parent = Yii::$app->user->identity->getOWnerId();
            $new_user->user_id = $_POST['AddUserForm']['user_id'];
            if ( $new_user->validate() && $new_user->save() ) {
                Yii::$app->session->setFlash('success', 'User added and sent activation link by mail');

                if (Yii::$app->user->identity->user_type == 1) {
                    //Property assignment only for hotel
                    $assigned_properties = Yii::$app->request->post('assigned_properties');
                    $properties_count = count($assigned_properties);
                    UserPropertyMap::deleteAll(['user_id' => $new_user->getUserID()]);

                    for ($i = 0; $i < $properties_count; $i++ ) {
                        $user_map = new UserPropertyMap();
                        $user_map->user_id = $new_user->getUserID();
                        $user_map->property_id = $assigned_properties[$i];
                        $user_map->save();
                    }
                }

                return $this->redirect(['user/list']);
            }
        }


        $property = NULL;
        $assigned_roles = NULL;
        $assigned_properties = NULL;
        if(isset( $_GET['id']) ) {
            $user_id = Yii::$app->request->get('id');
            $user = User::find()
            ->where(['id' => $user_id])
            ->one();

            if ($user == NULL){
                throw new NotFoundHttpException();
            }

            $assigned_roles = ArrayHelper::getColumn(Yii::$app->authManager->getRolesByUser($user->id), 'name');
            $assigned_properties =  ArrayHelper::getColumn(UserPropertyMap::find()->where(['user_id' => $user->id])->asArray()->all(), 'property_id');

            $new_user->user_id = $user->id;
            $new_user->first_name = $user->first_name;
            $new_user->last_name  = $user->last_name;
            $new_user->phone  = $user->phone;
            $new_user->email  = $user->email;
            $new_user->user_type  = $user->user_type;
            $new_user->parent  = $user->parent;
            $new_user->user_role =  $assigned_roles;
            $new_user->password_change_on_login  = $user->password_change_on_login;
            $new_user->scenario = 'update';
        }

        $roles = Yii::$app->authManager->getRoles();
        $needle = "";
        if(Yii::$app->user->identity->user_type == 1) {
            $needle = "Operator";
        }
        else if(Yii::$app->user->identity->user_type == 2) {
            $needle = "Hotel";
        }

        foreach($roles as $key => $role){
            if (str_contains($role->name, $needle)) {
                unset($roles[$key]);
            }
        }

        $roles =  ArrayHelper::map($roles, 'name', 'description');

        //Assign property only in case of hotel
        $properties = NULL;
        if (Yii::$app->user->identity->user_type == 1) {
            $properties = Property::find()
                ->where(['owner_id' => Yii::$app->user->identity->getOWnerId()])
                ->all();

            $properties =  ArrayHelper::map($properties, 'id', 'name');
        }

        $new_user->user_type = Yii::$app->user->identity->user_type;
        return $this->render('add_user',['user' => $new_user, 'roles' => $roles, 'properties' => $properties, 'assigned_roles' => $assigned_roles, 'assigned_properties' => $assigned_properties]);
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
            $this->layout = 'common';
//            return $this->render('onboarding_hotel', ['user' => Yii::$app->user->identity]);
            return $this->render('onboarding_hotel_message', ['user' => Yii::$app->user->identity]);
        }
        else if (Yii::$app->user->identity->user_type == 2 )
        {
            $this->layout = 'common';
//            return $this->render('onboarding_operator', ['user' => Yii::$app->user->identity]);
            return $this->render('onboarding_operator_message', ['user' => Yii::$app->user->identity]);
        }
        else {
            throw new ForbiddenHttpException();
        }
    }

    public function actionRegistrationSuccess(){
        $this->layout = 'common';
//        return $this->render('registration_success', []);
        return $this->render('registration_success_message', []);
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
//    public function actionRequestPasswordReset()
    public function actionRequestpasswordreset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        $this->layout = 'common';
//        return $this->render('requestPasswordResetToken', [
//            'model' => $model,
//        ]);

        return $this->render('request-password-reset');
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

    public function actionManage(){
        $action =  $_POST["action_id"];

        $user = User::find()
        ->where(['id' => $_POST["user_id"]])
        ->andWhere(['parent' => Yii::$app->user->identity->getOWnerId()])
        ->one();

        if (!$user) {
            Yii::$app->session->setFlash('error', 'Unable to perform the operation. Contact support.');
            return $this->redirect(['user/list']);
        }

        switch($action) {
        case 1:            
            if ($user->toggleStatus()) {
                Yii::$app->session->setFlash('success', ($user->status == User::STATUS_ACTIVE) ? 'Enabled user '.$user->first_name : 'Disabled user '.$user->first_name);
            } else {
                Yii::$app->session->setFlash('error', 'Unable to perform the operation. Contact support.');
            }
            break;
        case 2:
            $model = new PasswordResetRequestForm();
            $model->email = $user->email;
            if (!$model->validate()) {                
                Yii::$app->session->setFlash('error', 'Unable to reset password. Contact support');
            }
            else if (!$model->sendEmail()) {
                Yii::$app->session->setFlash('error', 'Unable to reset password. Contact support');
            } else {
                Yii::$app->session->setFlash('success', 'Password change initiated. Ask user to check email for further instructions.');
            }

            break;
        case 3:
            if ($user->deleteMe()) {
                Yii::$app->session->setFlash('success', 'Deleted user '.$user->first_name);
            } else {
                Yii::$app->session->setFlash('error', 'Unable to delete the user. Contact support.');
            }
            break;        
        }

        return $this->redirect(['user/list']);
    }

    public function actionActivationSuccess(){
        
        $this->layout = 'common';
        return $this->render('activation_success', []);
    }

}
