<?php
use yii\bootstrap4\ActiveForm;

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

<div class="card" style="background-color: white; border-radius: 20px">
<!--<div class="card col-12 mr-1 c_border">-->
    <div class="card-header p-0 text-center">
    <div class="login-logo">
        <a href="<?=Yii::$app->homeUrl?>"><img  src="<?= Yii::$app->request->baseUrl . '/images/tm_bridge_logo.svg' ?>" alt="" width="200" height="100"></a>
    </div>
    <h5 class="text-secondary">Resend activation link?</h5>
</div>
    <div class="card-body mt-3">

    <?php $form = ActiveForm::begin(['id' => 'resend-verification-email-form']); ?>
    <div class="row">
        <h6 class="text-secondary type2 ml-4 mr-2">Your account validation failed. Would you like to receive activation link again?<br>
            <center>Please fill out your email. </center></h6>
    </div>

    <div class="form-group text-center">
        <?= $form->field($model, 'email')->textInput(['autofocus' => true])->label(false) ?>
    </div>

    <div class="form-group text-center">
        <?= \yii\bootstrap4\Html::submitButton('Resend activation link', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
</div>
</div>





