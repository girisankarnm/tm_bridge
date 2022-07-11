<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
$this->registerCssFile('/css/full-page.css');

?>
<div class="content">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-5 col-xl-4">
            <div class="card" style="margin:5% auto; background-color: white; border-radius: 20px">

<!--                <div class="card col-12 mr-1 c_border" >-->
                <div class="card-header p-0 text-center">
<!--                     TODO : Set card header background as white-->
                    <div class="login-logo">
                        <a href="<?=Yii::$app->homeUrl?>"><img  src="<?= Yii::$app->request->baseUrl . '/images/tm_bridge_logo.svg' ?>" alt="" width="200" height="100"></a>
                    </div>
                </div>
                <div class="card-body mt-3">

                    <?php $form = ActiveForm::begin(['id' => 'onboarding_form','enableClientValidation' => true,'method' => 'post','action' => ['user/done']]) ?>
                    <div class="row">
                        <h6 class="text-secondary type2 ml-4 mr-2">
                            Welcome back, <?= $user->first_name ?> <br/>
                            You are just a couple of steps away from completing your property’s registration. <br/>
                            To validate your property’s credentials, we need you to provide us with some basic information.

                            These are one-time setup entries and normally would never be asked again. Though rectification of typo error is available, the process may take time.  Hence, we recommend you to enter data carefully without rushing through the process.
                            Before starting, keep soft copies of the following documents handy for upload: <br/>
                            Pan Card (Property’s Pan card | Owner’s Pan card in case of proprietorship)  <br/>
                            GST Certificate (Required only if property is registered under GST)<br/>
                            Business License (Document evidencing approval from competent authority to engage in accommodation business) <br/>
                            Your bank details: Bank name | Account number | Account Name | IFSC Code / Swift Code Option<br/>
                        </h6>
                    </div>
                    <div class="text-center">
                        <button id="assign_slab" type="submit" class="btn btn-primary btn-sm mt-3">Done!</button>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>

            </div>
        </div>
    </div>
</div>










