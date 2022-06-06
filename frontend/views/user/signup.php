<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05-Nov-21
 * Time: 12:13 PM
 */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use borales\extensions\phoneInput\PhoneInput;
frontend\assets\CommonAsset::register($this);
?>
<style>
    .c_border{
        border: solid 5px hsl(31, 51%, 65%);
        border-radius: 6%;
    }
    .type {
        margin-top: -4px;
    }
    .type2 {
        margin-top: -2px;
    }
    .radio label.cutom-cotrol-label {
        margin-bottom: 0.5rem;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.2;
        color: inherit;
    }
    label:not(.form-check-label):not(.custom-file-label) {
        font-weight: 500;
    }
</style>
<script> 

$(document).ready(function () {    
    $('#signupform-user_type input').change(function () {
        // The one that fires the event is always the
        // checked one; you don't need to test for this
        //alert($(this).val());
        console.log($(this).val());
        $('#registration_form').show('slide');
    });
});

    function selectedUserType(userType) {
        console.log(userType.val)
        $('#registration_form').show('slide');
    }   

</script>
<div class="card col-12 mr-1 c_border" <!--style="background-color: hsl(61, 69%, 77%)-->">
    <div class="card-header p-0 text-center">
        <div class="login-logo">
            <a href="<?=Yii::$app->homeUrl?>"><img  src="<?= Yii::$app->request->baseUrl . 'images/tmprologo.jpg' ?>" alt="" width="200" height="100"></a>
        </div>
        <h5 class="text-secondary">Register</h5>
    </div>
    <div class="card-body mt-3">

        <?php $form = ActiveForm::begin(['method' => 'post','action' => ['user/signup']]) ?>
        <div class="row">
                <h6 class="text-secondary type2 ml-4 mr-2">I am a</h6>
                <?= $form->field($register, 'user_type')->inline()->radioList([1 => 'Hotelier', 2 => 'Tour Operator'],['class' => 'text-secondary type',])->label(false); ?>
            <br>
        </div>
        
        <div id="registration_form" style="display:<?= empty($register->user_type) ? "none" : "block" ?>">
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($register, 'first_name')->textInput(['class' => 'form-control form-control-sm','placeholder'=>'First Name'])->label(false)?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($register, 'last_name')->textInput(['class' => 'form-control form-control-sm','placeholder'=>'Last Name'])->label(false)?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?= $form->field($register, 'email')->textInput(['class' => 'form-control form-control-sm','placeholder'=>'Email','value'=>null])->label(false)?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <?php
                    echo $form->field($register, 'phone')->widget(PhoneInput::className(), [                   
                    'jsOptions' => [
                        'onlyCountries' => ['in'],                      
                    ],
                    'options'=> array('class'=>'form-control form-control-sm', 'placeholder' => '9123456780', 'maxlength' => '12'),
                ], )->label(false);?>                
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?= $form->field($register, 'password')->passwordInput(['class' => 'form-control form-control-sm','placeholder'=>'Password'])->label(false)?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?= $form->field($register, 'password_repeat')->passwordInput(['class' => 'form-control form-control-sm','placeholder'=>'Confirm Password'])->label(false)?>
                </div>
            </div>
            <div class="text-center">
                <?= Html::a('<button type="submit" class="btn btn-primary btn-sm mt-3">Register</button>')?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
    <!-- /.login-card-body -->
</div>