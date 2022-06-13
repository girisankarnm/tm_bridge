<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card col-12 mr-1 c_border" <!--style="background-color: hsl(61, 69%, 77%)-->">
<div class="card-header p-0 text-center">
    <div class="login-logo">
        <a href="<?=Yii::$app->homeUrl?>"><img  src="<?= Yii::$app->request->baseUrl . 'images/tmprologo.jpg' ?>" alt="" width="200" height="100"></a>
    </div>
    <h5 class="text-secondary">Reset password</h5>
</div>
<div class="card-body mt-3">

    <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>
    <div class="row">
        <h6 class="text-secondary type2 ml-4 mr-2">Please insert your new password:</h6>
    </div>

    <?= $form->field($model, 'password')->passwordInput(['autofocus' => true])->label(false) ?>

    <div class="form-group text-center">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<?php ActiveForm::end(); ?>








