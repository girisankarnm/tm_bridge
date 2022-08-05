<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;

?>
<div class="card col-12 mr-1 c_border" <!--style="background-color: hsl(61, 69%, 77%)-->">
<div class="card-header p-0 text-center">
    <div class="login-logo">
        <a href="<?=Yii::$app->homeUrl?>"><img  src="<?= Yii::$app->request->baseUrl . 'images/tmprologo.jpg' ?>" alt="" width="200" height="100"></a>
    </div>
    <!--    <h5 class="text-secondary">Onboarding</h5>-->
</div>
<div class="card-body mt-3">

    <?php $form = ActiveForm::begin(['id' => 'onboarding_form','enableClientValidation' => true,'method' => 'post','action' => ['onboarding/register']]) ?>
    <div class="row">
        <h6 class="text-secondary type2 ml-4 mr-2"> Congratulations! <br/> Your account has been successfully created. <br/>
            To login, please click on the link sent to your mail.
            <br/>            
        </h6>
    </div>    
</div>
<?php ActiveForm::end(); ?>








