<?php
use yii\bootstrap4\ActiveForm;

?>

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
        <input type="email">
    </div>

    <div class="form-group text-center">
        <?= \yii\bootstrap4\Html::submitButton('Resend activation link', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
</div>
</div>





