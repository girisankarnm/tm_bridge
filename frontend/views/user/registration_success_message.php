<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
$this->registerCssFile('/css/full-page.css');


?>


<div class="card" style=" background-color: white; border-radius: 20px">
    <?php $form = ActiveForm::begin(['id' => 'onboarding_form','enableClientValidation' => true,'method' => 'post','action' => ['onboarding/register']]) ?>
    <div class="" style="padding: 28px;">
        <div style="display: flex; justify-content: center; margin-bottom: 30px;">
            <img src="/images/tm_bridge_logo.svg" class="logo-small">
        </div>

        <div class="col-md-12" style="font-size: 16px; color: red; font-weight: bold; margin-bottom: 20px; text-align: center">
            Congratulations!
        </div>

        <div class="col-md-12" style="font-size: 14px; margin-bottom: 15px; text-align: center">
            Your account has been successfully created. <br/>
            To login, please click on the link sent to your mail.
        </div>       

    </div>
    <?php ActiveForm::end(); ?>
</div>














