<?php

use borales\extensions\phoneInput\PhoneInput;
use yii\bootstrap4\ActiveForm;
$this->registerCssFile('/css/full-page.css');
$this->registerCssFile('/css/fonts/fonts.css');

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
<style>
    .invalid-feedback {
        display: block;
    }
</style>

<div class="card" style="background-color: white; border-radius: 20px">
                <?php $form = ActiveForm::begin(['method' => 'post','action' => ['user/signup']]) ?>
                <div class="" style="width: 100%;height: 100%; margin: auto; padding: 28px; ">
                    <div style="display: flex; justify-content: center; margin-bottom: 10px">
                        <img src="/images/tm_bridge_logo.svg" class="logo-small">
                    </div>


                    <div style=" margin-left: 6px; display: flex; flex-direction: row; justify-content: center">
                        <div style="margin-right: 10px">
                            I am a
                        </div>
                        <div>
                            <?= $form->field($register, 'user_type')->inline()->radioList([1 => 'Hotelier', 2 => 'Operator'],['class' => 'text-secondary type',])->label(false); ?>
                        </div>
                    </div>
                    <div id="registration_form" style="display:<?= empty($register->user_type) ? "none" : "block" ?>">
                        <div class="form-group row no-margin" >
                            <div class="col-md-4">
                                <label for="your-input" class="Inline-label">First Name</label>
                            </div>
                            <div class="col-md-8">
                                <?= $form->field($register, 'first_name')->textInput(['class' => 'login-input','placeholder'=>'First Name'])->label(false)?>
                            </div>
                        </div>

                        <div class="form-group row no-margin" >
                            <div class="col-md-4">
                                <label for="your-input" class="Inline-label">Last Name</label>
                            </div>
                            <div class="col-md-8">
                                <?= $form->field($register, 'last_name')->textInput(['class' => 'login-input','placeholder'=>'Last Name'])->label(false)?>
                            </div>
                        </div>

                        <div class="form-group row no-margin" >
                            <div class="col-md-4">
                                <label for="your-input" class="Inline-label">Email</label>
                            </div>
                            <div class="col-md-8">
                                <?= $form->field($register, 'email')->textInput(['class' => 'login-input','placeholder'=>'Email','value'=>null])->label(false)?>
                            </div>
                        </div>

                        <div class="form-group row no-margin" >
                            <div class="col-md-4">
                                <label for="your-input" class="Inline-label">Phone</label>
                            </div>
                            <div class="col-md-8">
                                <?php
                                echo $form->field($register, 'phone')->widget(PhoneInput::className(), [
                                    'jsOptions' => [
                                        'onlyCountries' => ['in'],
                                    ],
                                    'options'=> array('class'=>'phone-input', 'placeholder' => 'Phone', 'maxlength' => '12'),
                                ], )->label(false);?>
                            </div>
                        </div>

                        <div class="form-group row no-margin" >
                            <div class="col-md-4">
                                <label for="your-input"  class="Inline-label">Password</label>
                            </div>
                            <div class="col-md-8">
                                <?= $form->field($register, 'password')->passwordInput(['class' => 'login-input','placeholder'=>'Password'])->label(false)?>
                            </div>
                        </div>

                        <div class="form-group row no-margin" >
                            <div class="col-md-4">
                                <label for="your-input"  class="Inline-label">Confirm Password</label>
                            </div>
                            <div class="col-md-8">
                                <?= $form->field($register, 'password_repeat')->passwordInput(['class' => 'login-input','placeholder'=>'Confirm Password'])->label(false)?>
                            </div>
                        </div>
                    </div>
                    <div style="display: flex; flex-direction: row; justify-content: space-between; margin-left: 6px">
                        <div style="font-size: 13px; ">
                            Already have an account? <a href="index.php?r=user%2Flogin" style="text-decoration: none; color: #E40967; font-weight: bold">Sign in</a>
                        </div>
                        <div id="save_data" style="display:<?= empty($register->user_type) ? "none" : "block" ?>">
                            <BUTTON type="text" class="login-button" style="margin-top:0"> Register </BUTTON>
                        </div>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>


