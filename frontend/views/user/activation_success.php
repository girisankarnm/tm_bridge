<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
$this->registerCssFile('/css/full-page.css');

?>

<div class="card" style=" background-color: white; border-radius: 20px">
    <?php $form = ActiveForm::begin(['id' => 'validate_form','enableClientValidation' => true,'method' => 'post','action' => ['onboarding/register']]) ?>
    <div class="" style="padding: 28px;">
        <div style="display: flex; justify-content: center; margin-bottom: 30px;">
            <img src="/images/tm_bridge_logo.svg" class="logo-small">
        </div>

        <div class="col-md-12" style="font-size: 14px; margin-bottom: 15px; text-align: center">
            Your account has been validated. <br>Login and start using TourMatrix BRIDGE
        </div>
        <div class="text-center" style="margin-bottom: 20px">
            <?= Html::a('Login', ['user/login'], ['class'=>'btn btn-primary btn-sm mt-3', 'style'=>'width: 100px; background-color:#831BEE; border: 0.5px solid #831BEE']) ?>
        </div>

    </div>
    <?php ActiveForm::end(); ?>
</div>












