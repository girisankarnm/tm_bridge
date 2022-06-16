<?php
use yii\bootstrap4\ActiveForm;
$this->registerCssFile('/css/full-page.css');
?>

<div class="content" style=" height: 100%; background-image: url(/images/background1.jpg); background-repeat: no-repeat; background-size: 100% 100%; align-content: center">
    <div style="width:32%; margin:5% auto">
        <?php $form = ActiveForm::begin(['id' => 'login-form', 'class' => 'form-class']); ?>
        <div class="" style="width: 100%;height: 100%; margin: auto; padding: 28px; background-color: white ">
            <div>
                <img src="/images/logo.svg" class="logo-small">
            </div>
            <div  style="margin-left: 6px; margin-bottom: 20px; font-size: 24px; font-weight: bold">
                Log in
            </div>
            <div style="margin-bottom: 20px; margin-left: 6px; line-height: 10px">
                    <span style="font-size: 11px">
                        Welcome to Tour Matrix Bridge, please put your login credentials below to start using the app
                    </span>
            </div>
            <div class="row" style="margin-left: 6px">
                <label for="your-input" class="Inline-label">Email</label>

                <?= $form->field($model, 'email')->textInput(['class' => 'login-input','autofocus' => true,'placeholder'=>'Email','value'=>null])->label(false)?>

            </div>

            <div class="row" style=" margin-bottom: 10px; margin-left: 6px">
                <label for="your-input"  class="Inline-label">Password</label>
                <?= $form->field($model, 'password')->passwordInput(['class' => 'login-input','placeholder'=>'Password'])->label(false)?>
            </div>
            <a href="#" style="float: right; text-decoration: none; color: #831BEE; font-size: 12px; font-weight: bold">Forgot password?</a>
            <hr class="sidebar-divider" style="margin-top: 40px">
            <div style="display: flex; flex-direction: row; justify-content: space-between; margin-top: 10px; margin-bottom: 10px; margin-left: 6px; line-height: 25px">
                <div style="display: flex; flex-direction: column">
                    <div style="height: 25px;">
                        <?= $form->field($model, 'rememberMe')->checkbox() ?>
                    </div>
                    <div style=" font-size: 13px">Dont have an account?  <a href="index.php?r=user%2Fsignup" style="text-decoration: none; color: #E40967; font-weight: bold">Register</a>
                    </div>
                </div>
                <div>
                    <BUTTON type="submit" class="login-button" > Login </BUTTON>
                </div>
            </div>

        </div>
        <?php ActiveForm::end(); ?>




<!--    <div class="container-fluid" style="background-color: lightblue; height: 100%">-->
<!--        <div class="row" style="background-image: url(/images/background1.jpg); background-repeat: no-repeat; background-size: 100% 100%;">-->

<!--        </div>-->
    </div>
</div>


