<?php

namespace frontend\models\user;

use Yii;
use yii\base\Model;
use frontend\models\User;

class AddUserForm extends Model{
    public $user_id;
    public $first_name;
    public $last_name;
    public $phone;
    public $email;
    public $password;
    public $user_type;
    public $parent;
    public $user_role;
    public $password_change_on_login;

    public function rules()
    {
        return [
            [['first_name','last_name'], 'trim'],
            [['first_name','last_name','phone','user_role', 'user_type'], 'required'],
            [['first_name','last_name'], 'string', 'min' => 1, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\frontend\models\User', 'message' => 'This email address has already been taken.'],

            ['phone', 'trim'],
            ['phone', 'required'],
            ['phone', 'string', 'max' => 255],
            ['phone', 'unique', 'targetClass' => '\frontend\models\User', 'message' => 'This phone has already been taken.'],            
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function save()
    {          
        $bAddNewUser = true;
        $user = NULL;
        if($this->user_id != 0) {
            $user = \frontend\models\user\User::find()->where(['id' => $this->user_id])->one();
        }

        if($user == NULL) {
            $user = new \frontend\models\user\User();
        } 
        else {
            $bAddNewUser = false;
        }

        //Generate a random password
        $this->password = random_int(11111, 99999);
        
        $user->username = $this->email;
        $user->first_name = $this->first_name;
        $user->last_name = $this->last_name;
        $user->phone = $this->phone;
        $user->email = $this->email;
        $user->user_type = $this->user_type;        
        $user->status = \frontend\models\user\User::STATUS_INACTIVE;
        $user->password_change_on_login = 1;
        $user->parent = $this->parent;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();

        if (!$user->validate()) {            
            return false;
        }

        if($bAddNewUser) {
            if (!$user->save(false) ) {           
                return false;
            }
        } else {
            if (!$user->update(false) ) {           
                return false;
            }            
        }        

        $this->user_id = $user->getPrimaryKey();
        //Assign role to user
        $auth = \Yii::$app->authManager;
        $auth->revokeAll($user->getId());
        $userRole = $auth->getRole($this->user_role);
        $auth->assign($userRole, $user->getId());
        
        //send mail if adding new user. Do not send mail for edit user        
        return ($bAddNewUser) ? $this->sendEmail($user, $this->password) : true;
    }

    public function getUserID(){
        return $this->user_id;
    }
    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user , $password)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerifyAdd-html', 'text' => 'emailVerify-text'],
                ['user' => $user, 'password' => $password]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }

}