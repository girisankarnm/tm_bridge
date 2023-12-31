<?php

use borales\extensions\phoneInput\PhoneInput;
use yii\bootstrap4\ActiveForm;
$this->registerCssFile('/css/full-page.css');

?>
<div class="card" style="background-color: white; border-radius: 20px">
    <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
        <div class="" style="padding: 28px;">
            <div style="display: flex; justify-content: center">
                <img src="/images/tm_bridge_logo.svg" class="logo-small">
            </div>
            <div  style="display: flex; justify-content: center; margin-bottom: 15px; font-size: 22px; font-weight: bold">
                Password recovery
            </div>
            <div class="col-md-12" style="font-size: 13px; margin-bottom: 20px; text-align: center">
                Please fill in the email you've used to create account and we'll send you a rest link
            </div>
            <div class="form-group row" >
                <div class="col-md-3">
                    <label for="your-input" class="Inline-label">Email</label>
                </div>
                <div class="col-md-9">
                    <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'class' =>'login-input'])->label(false) ?>
                </div>
            </div>
            <hr class="sidebar-divider" style="margin-top: 30px">
            <div style="display: flex; flex-direction: row; justify-content: space-between; margin-top: 10px; margin-left: 6px">
                <a href="index.php?r=user%2Flogin" style="text-decoration: none; color: #E40967; font-weight: bold">Back to Sign in</a>
                <div>
                    <BUTTON type="submit" class="login-button-large" > Reset my password </BUTTON>
                </div>
            </div>

        </div>
    <?php ActiveForm::end(); ?>
</div>



