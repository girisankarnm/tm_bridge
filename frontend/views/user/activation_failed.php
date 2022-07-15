<?php
use yii\bootstrap4\ActiveForm;

?>

<div class="card col-12 mr-1 c_border" <!--style="background-color: hsl(61, 69%, 77%)-->">
<div class="card-header p-0 text-center">
    <div class="login-logo">
        <a href="<?=Yii::$app->homeUrl?>"><img  src="<?= Yii::$app->request->baseUrl . 'images/tmprologo.jpg' ?>" alt="" width="200" height="100"></a>
    </div>
    <h5 class="text-secondary">Resend activation link?</h5>
</div>
<div class="card-body mt-3">

    <?php $form = ActiveForm::begin(['id' => 'resend-verification-email-form']); ?>
    <div class="row">
        <h6 class="text-secondary type2 ml-4 mr-2">Your account validation failed. Would you like to receive activation link again?<br>
            <center>Please fill out your email. </center></h6>
    </div>

    <?= $form->field($model, 'email')->textInput(['autofocus' => true])->label(false) ?>

    <div class="form-group text-center">
        <?= \yii\bootstrap4\Html::submitButton('Resend activation link', ['class' => 'btn btn-primary']) ?>
    </div>

</div>
<?php ActiveForm::end(); ?>





