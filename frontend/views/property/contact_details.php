<?php

use yii\bootstrap4\ActiveForm;
use borales\extensions\phoneInput\PhoneInput;

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
                <div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/property/contact']) ?>">  <button class="selectedButton" onclick="openCity(event, 'London')" >Contact Details</button></a> <hr class="new5" >
                </div>
                <a href="<?= \yii\helpers\Url::to(['/property/termsandconditions']) ?>"> <button class="tablinks" onclick="openCity(event, 'Tokyo')">Terms & Conditions</button></a>
            </div>

            <hr class="sidebar-divider">
            <?php $form = ActiveForm::begin(['id' => 'contact_details','enableClientValidation' => true, 'method' => 'post','action' => ['property/savecontactdetails']]) ?>
            <?= $form->field($contact, 'id')->hiddenInput()->label(false); ?>
            <?= $form->field($contact, 'property_id')->hiddenInput()->label(false); ?>

            <div class="contact-head" >
                <h6 style=" color: black; font-size: 12px; padding: 3px; margin-left: 10px">Particulars Sales</h6>
            </div>
            <div class="row" style="margin-left: 3px;margin-bottom: 8px;">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Name</label>
                    <?= $form->field($contact,'sales_name')->textInput(['class' => 'inputTextClass'])->label(false) ?>
                </div>
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Phone</label>
                    <?php
                    echo $form->field($contact, 'sales_phone')->widget(PhoneInput::className(), [
                        'jsOptions' => [
                            'onlyCountries' => ['in'],
                        ],
                        'options'=> array('class'=>'inputTextClass', 'placeholder' => '9123456780', 'maxlength' => '12'),
                    ], )->label(false);?>

                </div>
                <div style="display: block">
                    <label class="Labelclass" style="display: block" >*Email</label>
                    <?= $form->field($contact,'sales_email')->textInput(['class' => 'inputTextClass'])->label(false) ?>

<!--                    <input type="email" class="inputTextClass" >-->
                </div>
            </div>
            <div class="contact-head" >
                <h6 style=" color: black; font-size: 12px; padding: 3px; margin-left: 10px">Reservation</h6>
            </div>
            <div class="row" style="margin-left: 3px;margin-bottom: 15px">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Name</label>
                    <?= $form->field($contact,'reservation_name')->textInput(['class' => 'inputTextClass'])->label(false) ?>

<!--                    <input type="text" class="inputTextClass" >-->
                </div>
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Phone</label>
                    <?php
                    echo $form->field($contact, 'reservation_phone')->widget(PhoneInput::className(), [
                        'jsOptions' => [
                            'onlyCountries' => ['in'],
                        ],
                        'options'=> array('class'=>'inputTextClass', 'placeholder' => '9123456780', 'maxlength' => '12'),
                    ], )->label(false);?>
<!--                    <input type="text" class="inputTextClass" >-->
                </div>
                <div style="display: block">
                    <label class="Labelclass" style="display: block" >*Email</label>
                    <?= $form->field($contact,'reservation_email')->textInput(['class' => 'inputTextClass'])->label(false) ?>

<!--                    <input type="email" class="inputTextClass" >-->
                </div>
            </div>
            <div class="contact-head" >
                <h6 style=" color: black; font-size: 12px; padding: 3px; margin-left: 10px">Front Office</h6>
            </div>
            <div class="row" style="margin-left: 3px;margin-bottom: 15px">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Name</label>
                    <?= $form->field($contact,'front_office_name')->textInput(['class' => 'inputTextClass'])->label(false) ?>

<!--                    <input type="text" class="inputTextClass" >-->
                </div>
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Phone</label>
                    <?php
                    echo $form->field($contact, 'front_office_phone')->widget(PhoneInput::className(), [
                        'jsOptions' => [
                            'onlyCountries' => ['in'],
                        ],
                        'options'=> array('class'=>'inputTextClass', 'placeholder' => '9123456780', 'maxlength' => '12'),
                    ], )->label(false);?>
<!--                    <input type="text" class="inputTextClass" >-->
                </div>
                <div style="display: block">
                    <label class="Labelclass" style="display: block" >*Email</label>
                    <?= $form->field($contact,'front_office_email')->textInput(['class' => 'inputTextClass'])->label(false) ?>

<!--                    <input type="email" class="inputTextClass" >-->
                </div>
            </div>
            <div class="contact-head" >
                <h6 style=" color: black; font-size: 12px; padding: 3px; margin-left: 10px">Accounts</h6>
            </div>
            <div class="row" style="margin-left: 3px;margin-bottom: 15px">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Name</label>
                    <?= $form->field($contact,'accounts_office_name')->textInput(['class' => 'inputTextClass'])->label(false) ?>

<!--                    <input type="text" class="inputTextClass" >-->
                </div>
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Phone</label>
                    <?php
                    echo $form->field($contact, 'accounts_office_phone')->widget(PhoneInput::className(), [
                        'jsOptions' => [
                            'onlyCountries' => ['in'],
                        ],
                        'options'=> array('class'=>'inputTextClass', 'placeholder' => '9123456780', 'maxlength' => '12'),
                    ], )->label(false);?>
<!--                    <input type="text" class="inputTextClass" >-->
                </div>
                <div style="display: block">
                    <label class="Labelclass" style="display: block" >*Email</label>
                    <?= $form->field($contact,'accounts_office_email')->textInput(['class' => 'inputTextClass'])->label(false) ?>

<!--                    <input type="email" class="inputTextClass" >-->
                </div>
            </div>
            <div class="row" style="margin-left: 3px;margin-bottom: 12px;">
                <div style="display: block;margin-right: 35px">
                    <BUTTON type="text" class="buttonSmall"> Save </BUTTON>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>

    </div>
</div>


<!-- End of Footer -->







