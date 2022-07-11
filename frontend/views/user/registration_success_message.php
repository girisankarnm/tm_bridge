<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
$this->registerCssFile('/css/full-page.css');


?>
<div class="content" style="height: 100%; background-image: url(/images/tm_welcome.png); background-size: cover; background-position: center; background-repeat: no-repeat; margin: 0">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-5 col-xl-4">
            <div class="card" style="margin:5% auto; background-color: white; border-radius: 20px">

<!--            <div class="card col-12 mr-1 c_border" >-->
                <div class="card-header p-0 text-center">
                    <div class="login-logo">
                        <a href="<?=Yii::$app->homeUrl?>"><img  src="<?= Yii::$app->request->baseUrl . 'images/tmprologo.jpg' ?>" alt="" width="200" height="100"></a>
                    </div>
                    <!--    <h5 class="text-secondary">Onboarding</h5>-->
                </div>
                <div class="card-body mt-3">

                    <?php $form = ActiveForm::begin(['id' => 'onboarding_form','enableClientValidation' => true,'method' => 'post','action' => ['onboarding/register']]) ?>
                    <div class="row">
                        <h6 class="text-secondary type2 ml-4 mr-2">    Your account has been created successfully. <br/>
                            An email has been sent to your mail account to confirm your account.
                            <br/>
                            Please check your mail email account, validate and start using TourMatrix
                        </h6>
                    </div>

                    <div class="text-center">
                        <?= Html::a('Login', ['user/login'], ['class'=>'btn btn-primary btn-sm mt-3']) ?>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>














