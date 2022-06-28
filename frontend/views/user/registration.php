<?php

use borales\extensions\phoneInput\PhoneInput;
use yii\bootstrap4\ActiveForm;
$this->registerCssFile('/css/full-page.css');

?>
<script>
    $(document).ready(function () {
        $('#signupform-user_type input').change(function () {
            console.log($(this).val());
            $('#registration_form').show('slide');
            // $('#save_data').style.display('none');
            document.getElementById('save_data').style.display="block";
        });
    });
    function selectedUserType(userType) {
        console.log(userType.val)
        $('#registration_form').show('slide');
    }
</script>

<!--<div class="content" style="background-image: url(/images/Login.png); background-size: cover; background-position: center; height: 100%">-->
<!--    <div style="width:32%; margin: auto; background-color: lightpink; border-radius: 15px">-->
<div class="content" style="height: 100%; background-image: url(/images/Login.png); background-size: cover; background-position: center; background-repeat: no-repeat; margin: 0">
    <div class="card" style="width:32%; margin:5% auto; background-color: white; border-radius: 20px">
        <?php $form = ActiveForm::begin(['method' => 'post','action' => ['user/signup']]) ?>
<!--               <div class="" style="width: 100%;height: 100%; margin: auto; padding: 28px; background-color: white ">-->
               <div class="" style="width: 100%;height: 100%; margin: auto; padding: 28px; ">
                <div style="display: flex; justify-content: center">
                    <img src="/images/logo.svg" class="logo-small">
                </div>
                <div  style="display: flex; justify-content: center; margin-bottom: 10px; font-size: 24px; font-weight: bold">
                    Create account
                </div>
                <div style="margin-bottom: 20px; margin-left: 6px">
                    <span style="font-size: 15px">
                       Get access to exclusive features by creating an account
                    </span>
                </div>

                <div style="margin-bottom: 10px; margin-left: 6px">
                    <div>I am a</div>
                    <div>
                        <?= $form->field($register, 'user_type')->inline()->radioList([1 => 'Hotelier', 2 => 'Tour Operator'],['class' => 'text-secondary type',])->label(false); ?>
                    </div>
                </div>
<!--                   new div-->
                <div id="registration_form" style="display:<?= empty($register->user_type) ? "none" : "block" ?>">

                <div class="row" style=" margin-left: 6px;">
                    <label for="your-input" class="Inline-label">First Name</label>
                    <?= $form->field($register, 'first_name')->textInput(['class' => 'login-input','placeholder'=>'First Name'])->label(false)?>
                </div>

                <div class="row" style="margin-left: 6px">
                    <label for="your-input" class="Inline-label">Last Name</label>
                    <?= $form->field($register, 'last_name')->textInput(['class' => 'login-input','placeholder'=>'Last Name'])->label(false)?>
                </div>

                <div class="row" style=" margin-left: 6px">
                    <label for="your-input" class="Inline-label">Email</label>
                    <?= $form->field($register, 'email')->textInput(['class' => 'login-input','placeholder'=>'Email','value'=>null])->label(false)?>
                </div>

                <div class="row" style="margin-left: 6px">
                    <label for="your-input" class="Inline-label">Phone</label>
                    <?php
                    echo $form->field($register, 'phone')->widget(PhoneInput::className(), [
                        'jsOptions' => [
                            'onlyCountries' => ['in'],
                        ],
                        'options'=> array('class'=>'login-input', 'placeholder' => '9123456780', 'maxlength' => '12'),
                    ], )->label(false);?>
                </div>

                <div class="row" style="margin-left: 6px">
                    <label for="your-input"  class="Inline-label">Password</label>
                    <?= $form->field($register, 'password')->passwordInput(['class' => 'login-input','placeholder'=>'Password'])->label(false)?>
                </div>

                <div class="row" style=" margin-bottom: 10px; margin-left: 6px">
                    <label for="your-input"  class="Inline-label">Confirm Password</label>
                    <?= $form->field($register, 'password_repeat')->passwordInput(['class' => 'login-input','placeholder'=>'Confirm Password'])->label(false)?>
                </div>

                <hr class="sidebar-divider" style="margin-top: 20px">

                </div>


                <div style="display: flex; flex-direction: row; justify-content: space-between; margin-top: 10px; margin-left: 6px">
                        <div style="font-size: 13px; margin-top: 17px">
                            Already have an account? <a href="index.php?r=user%2Flogin" style="text-decoration: none; color: #E40967; font-weight: bold">sign in</a>
                        </div>
                    <div id="save_data" style="display: none">
                        <BUTTON type="text" class="login-button" > Register </BUTTON>
                    </div>
                </div>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>


