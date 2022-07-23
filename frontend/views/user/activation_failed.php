<?php
use yii\bootstrap4\ActiveForm;
$this->registerCssFile('/css/full-page.css');
?>

<?php if (Yii::$app->session->hasFlash('resent_activation_success')): ?>
    <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <?php echo Yii::$app->session->getFlash('resent_activation_success') ?>
    </div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('resent_activation_failed')): ?>
    <div class="alert alert-danger alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <?php echo Yii::$app->session->getFlash('resent_activation_failed') ?>
    </div>
<?php endif; ?>



<div class="card" style=" background-color: white; border-radius: 20px">
    <?php $form = ActiveForm::begin(['id' => 'resend-verification-email-form']); ?>
    <div class="" style="padding: 28px;">
        <div style="display: flex; justify-content: center; margin-bottom: 30px;">
            <img src="/images/tm_bridge_logo.svg" class="logo-small">
        </div>

        <div class="col-md-12" style="font-size: 14px; margin-bottom: 20px; text-align: center">
            Your account validation failed. Would you like to receive activation link again?
            Please fill out your email.
        </div>
        <div class="form-group text-center" style="margin-right: 30px; margin-left: 30px">
            <?= $form->field($model, 'email')->textInput(['class' => 'login-input', 'placeholder'=>'Email', 'autofocus' => true])->label(false) ?>
        </div>

        <div class="text-center" style="margin-bottom: 20px">
            <?= \yii\bootstrap4\Html::submitButton('Resend activation link', ['class' => 'login-button', 'style'=>'width: 150px']) ?>
        </div>

    </div>
    <?php ActiveForm::end(); ?>
</div>





