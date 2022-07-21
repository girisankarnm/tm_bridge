<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
$this->registerCssFile('/css/full-page.css');

?>


<div class="card" style=" background-color: white; border-radius: 20px">
    <?php $form = ActiveForm::begin(['id' => 'onboarding_form','enableClientValidation' => true,'method' => 'post','action' => ['user/done']]) ?>
    <div class="" style="padding: 28px;">
        <div style="display: flex; justify-content: center; margin-bottom: 30px;">
            <img src="/images/tm_bridge_logo.svg" class="logo-small">
        </div>

        <div class="col-md-12" style="font-size: 14px; margin-bottom: 15px;">
            Welcome back, <?= $user->first_name ?> <br/>
            You are just a couple of steps away from completing your property’s registration. <br/>
            To validate your property’s credentials, we need you to provide us with some basic information.

            These are one-time setup entries and normally would never be asked again. Though rectification of typo error is available, the process may take time.  Hence, we recommend you to enter data carefully without rushing through the process.
            Before starting, keep soft copies of the following documents handy for upload: <br/>
            Pan Card (Property’s Pan card | Owner’s Pan card in case of proprietorship)  <br/>
            GST Certificate (Required only if property is registered under GST)<br/>
            Business License (Document evidencing approval from competent authority to engage in accommodation business) <br/>
            Your bank details: Bank name | Account number | Account Name | IFSC Code / Swift Code Option<br/>
        </div>

        <div class="text-center">
            <button id="assign_slab" type="submit" class="btn btn-primary btn-sm mt-3" style="width: 100px; background-color:#831BEE; border: 0.5px solid #831BEE">Done!</button>
        </div>

    </div>
    <?php ActiveForm::end(); ?>
</div>











