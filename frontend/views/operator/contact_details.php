<?php

use borales\extensions\phoneInput\PhoneInput;
use yii\bootstrap4\ActiveForm;

?>

<div class="$content">
    <div class="container-fluid">
        <div class="card-title">
            <span style="font: bold">Operator Profile</span>
        </div>

        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px;">
            <div class="tab">
                <a href="<?= \yii\helpers\Url::to(['/operator/basicdetails']) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Basic Details</button></a>
                <a href="<?= \yii\helpers\Url::to(['/operator/addressandlocation']) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Address & Location</button></a>
                <a href="<?= \yii\helpers\Url::to(['/operator/legaltax']) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Legal Tax</button></a>
                <div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/operator/contact']) ?>">  <button class="selectedButton" onclick="openCity(event, 'London')" >Contact Details</button></a> <hr class="new5" >
                </div>
                <a href="<?= \yii\helpers\Url::to(['/operator/termsandconditions']) ?>"> <button class="tablinks" onclick="openCity(event, 'Tokyo')">Terms & Conditions</button></a>
            </div>
            <hr class="sidebar-divider">
            <?php $form = ActiveForm::begin(['id' => 'contact_details','enableClientValidation' => true, 'method' => 'post','action' => ['operator/savecontactdetails']]) ?>
            <?= $form->field($contact, 'id')->hiddenInput()->label(false); ?>
            <?= $form->field($contact, 'operator_id')->hiddenInput()->label(false); ?>

            <div class="contact-head" >
                <h6 style=" color: black; font-size: 12px; padding: 3px; margin-left: 10px">Contact 1</h6>
            </div>
            <div class="row" style="margin-left: 3px;margin-bottom: 8px;">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Name</label>
                    <td><?= $form->field($contact,'name1')->textInput(['class' => 'inputTextClass'])->label(false) ?></td>

<!--                    <input type="text" class="inputTextClass" >-->
                </div>
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Phone</label>
                    <?php
                    echo $form->field($contact, 'phone1')->widget(PhoneInput::className(), [
                        'jsOptions' => [
                            'onlyCountries' => ['in'],
                        ],
                        'options'=> array('class'=>'inputTextClass', 'placeholder' => '9123456780', 'maxlength' => '12'),
                    ], )->label(false);?>

<!--                    <input type="text" class="inputTextClass" >-->
                </div>
                <div style="display: block">
                    <label class="Labelclass" style="display: block" >*Email</label>
                    <td><?= $form->field($contact,'email1')->textInput(['class' => 'inputTextClass'])->label(false) ?></td>

<!--                    <input type="email" class="inputTextClass" >-->
                </div>
            </div>
            <div class="contact-head" >
                <h6 style=" color: black; font-size: 12px; padding: 3px; margin-left: 10px">Contact 2</h6>
            </div>
            <div class="row" style="margin-left: 3px;margin-bottom: 15px">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Name</label>
                    <td><?= $form->field($contact,'name2')->textInput(['class' => 'inputTextClass'])->label(false) ?> </td>

<!--                    <input type="text" class="inputTextClass" >-->
                </div>
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Phone</label>
                    <?php
                    echo $form->field($contact, 'phone2')->widget(PhoneInput::className(), [
                        'jsOptions' => [
                            'onlyCountries' => ['in'],
                        ],
                        'options'=> array('class'=>'inputTextClass', 'placeholder' => '9123456780', 'maxlength' => '12'),
                    ], )->label(false);?>
<!--                    <input type="text" class="inputTextClass" >-->
                </div>
                <div style="display: block">
                    <label class="Labelclass" style="display: block" >*Email</label>
                    <?= $form->field($contact,'email2')->textInput(['class' => 'inputTextClass'])->label(false) ?>

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









