<?php
use yii\bootstrap4\ActiveForm;
$this->registerCssFile('/css/full-page.css');
?>

<!--<div class="content" style=" height: 100%; background-image: url(/images/Login.png); background-repeat: no-repeat; background-size: 100% 100%; align-content: center">-->
<!--<div class="content" style="height: 100%; background-image: url(/images/tm_welcome.png); background-size: cover; background-position: center; background-repeat: no-repeat; margin: 0">-->
<div class="content">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-5 col-xl-4">
            <div class="card" style="margin:5% auto; background-color: white; border-radius: 20px">
                <?php $form = ActiveForm::begin(['id' => 'login-form', 'class' => 'form-class']); ?>
                <div class="" style="padding: 28px;">
                    <div style="display: flex; justify-content: center">
                        <img src="/images/tm_bridge_logo.svg" class="logo-small">
                    </div>
                    <div  style="display: flex; justify-content: center; margin-bottom: 15px; font-size: 22px; font-weight: bold">
                        Sign in
                    </div>
                    <div class="col-md-12" style="font-size: 13px; margin-bottom: 15px; text-align: center">
                        Welcome to Tour Matrix Bridge, please put your login credentials below to start using the app
                    </div>
                    <div class="form-group row no-margin" >
                        <div class="col-md-3">
                            <label for="your-input" class="Inline-label">Email</label>
                        </div>
                        <div class="col-md-9">
                            <?= $form->field($model, 'email')->textInput(['class' => 'login-input','autofocus' => true,'placeholder'=>'Email','value'=>null])->label(false)?>
                        </div>
                    </div>

                    <div class="form-group row no-margin">
                        <div class="col-md-3">
                            <label for="your-input" class="Inline-label">Password</label>
                        </div>
                        <div class="col-md-9">
                            <?= $form->field($model, 'password')->passwordInput(['class' => 'login-input','placeholder'=>'Password'])->label(false)?>
                        </div>
                    </div>

                    <a href="index.php?r=user%2Frequestpasswordreset" style="float: right; text-decoration: none; color: #831BEE; font-size: 12px; font-weight: bold">Forgot password?</a>
                    <hr class="sidebar-divider" style="margin-top: 30px">
                    <div style="display: flex; flex-direction: row; justify-content: space-between; margin-top: 10px; margin-left: 6px; line-height: 25px">
                        <div style="display: flex; flex-direction: column">
                            <div style="height: 25px;">
                                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                            </div>
                            <div style=" font-size: 13px">Dont have an account?  <a href="index.php?r=user%2Fsignup" style="text-decoration: none; color: #E40967; font-weight: bold">Register</a>
                            </div>
                        </div>
                        <div>
                            <BUTTON type="submit" class="login-button" > Sign in </BUTTON>
                        </div>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>


