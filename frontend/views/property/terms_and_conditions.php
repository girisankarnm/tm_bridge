<?php

use yii\bootstrap4\ActiveForm;

?>
<div class="$content">
    <div class="container-fluid">
        <div class="card-title">
            <span style="font: bold">Property</span>
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px;">
            <div class="tab">
                <a href="<?= \yii\helpers\Url::to(['/property/basicdetails']) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Basic Details</button></a>
                <a href="<?= \yii\helpers\Url::to(['/property/addressandlocation']) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Address & Location</button></a>
                <a href="<?= \yii\helpers\Url::to(['/property/legaltax']) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Legal Tax</button></a>
                <a href="<?= \yii\helpers\Url::to(['/property/contact']) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Contact Details</button></a>
                <div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/property/termsandconditions']) ?>">  <button class="selectedButton" onclick="openCity(event, 'London')" >Terms & Conditions </button></a> <hr class="new5" >
                </div>
            </div>
            <hr class="sidebar-divider">
            <?php $form = ActiveForm::begin(['id' => 'terms_form','enableClientValidation' => true, 'action' => ['property/saveterms']]) ?>
            <?= $form->field($terms, 'id')->hiddenInput()->label(false); ?>

            <div class="row mt-1 ml-1 ">
                <div class="col-md-1">

                    <?php echo $form->field($terms,'terms_and_conditons1')->checkbox(['class' => 'form-control form-control-sm'])->label(false) ?>
                </div>
                <div class="col-md-10">
                    <p>
                        I certify that this is a legitimate accommodation business with all necessary licenses
                        and permits, which can be shown upon first request. Itinges Technologies reserves
                        the right to verify and investigate any details provided in this registration.
                    </p>
                </div>
            </div>
            <div class="row ml-1 ">
                <div class="col-md-1">
                    <?php echo $form->field($terms,'terms_and_conditons2')->checkbox(['class' => 'form-control form-control-sm'])->label(false) ?>
                </div>
                <div class="col-md-10">
                    <p>
                        I certify that this is a legitimate accommodation business with all necessary licenses
                        and permits, which can be shown upon first request. Itinges Technologies reserves
                        the right to verify and investigate any details provided in this registration.
                    </p>
                </div>
            </div>
            <div class="row ml-1 ">
                <div class="col-md-1">
                    <?php echo $form->field($terms,'terms_and_conditons3')->checkbox(['class' => 'form-control form-control-sm'])->label(false) ?>
                </div>
                <div class="col-md-10">
                    <p>
                        I certify that this is a legitimate accommodation business with all necessary licenses
                        and permits, which can be shown upon first request. Itinges Technologies reserves
                        the right to verify and investigate any details provided in this registration.
                    </p>
                </div>
            </div>

            <label class="container-terms-conditions" style="margin-top: 30px">
                <input type="checkbox" checked="checked;" >
                <span class="checkmark"></span>I certify that this is a legitimate accommodation business with all necessary
                licenses and permits, which can be shown upon first request.<br>Itings technologies reserves the right to verify
                and investigate any details provided in this registration.
            </label>

            <label class="container-terms-conditions">
                <input type="checkbox" checked="checked;" >
                <span class="checkmark"></span>I certify that this is a legitimate accommodation business with all necessary
                licenses and permits, which can be shown upon first request.<br>Itings technologies reserves the right to verify
                and investigate any details provided in this registration.
            </label>

            <label class="container-terms-conditions">
                <input type="checkbox" checked="checked;" >
                <span class="checkmark"></span>I certify that this is a legitimate accommodation business with all necessary
                licenses and permits, which can be shown upon first request.<br>Itings technologies reserves the right to verify
                and investigate any details provided in this registration.
            </label>

            <label class="container-terms-conditions">
                <input type="checkbox" checked="checked;" >
                <span class="checkmark"></span>I certify that this is a legitimate accommodation business with all necessary
                licenses and permits, which can be shown upon first request.<br>Itings technologies reserves the right to verify
                and investigate any details provided in this registration.
            </label>

            <label class="container-terms-conditions">
                <input type="checkbox" checked="checked;" >
                <span class="checkmark"></span>I certify that this is a legitimate accommodation business with all necessary
                licenses and permits, which can be shown upon first request.<br>Itings technologies reserves the right to verify
                and investigate any details provided in this registration.
            </label>

            <div class="row" style="margin-left: 3px;margin-bottom: 12px;">
                <div style="display: block;margin-right: 35px">
                    <BUTTON type="text" class="buttonSmall"> Save </BUTTON>
                </div>

            </div>
            <?php ActiveForm::end(); ?>
        </div>

    </div>
</div>









