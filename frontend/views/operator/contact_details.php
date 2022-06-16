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
                <a href="index.php?r=operator%2Fbasicdetails&id=<?= $contact->operator_id ?>"> <button class="tablinks btnunder">Basic Details</button></a>
                <a href="index.php?r=operator%2Faddressandlocation&id=<?= $contact->operator_id; ?>"> <button class="tablinks btnunder">Address & Location</button></a>
                <a  href="index.php?r=operator%2Flegaltax&id=<?= $contact->operator_id; ?>"> <button class="tablinks btnunder">Legal Tax</button></a>
                <div style="display: inline">   <a href="index.php?r=operator%2Fcontact&id=<?= $contact->operator_id ?>">  <button class="selectedButton">Contact Details</button></a> <hr class="new5" ></div>
                <a href="index.php?r=operator%2Ftermsandconditions&id=<?= $contact->operator_id; ?>"> <button class="tablinks">Terms & Conditions</button></a>
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
                   <?= $form->field($contact,'name1')->textInput(['class' => 'inputTextClass'])->label(false) ?>
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
                </div>
                <div style="display: block">
                    <label class="Labelclass" style="display: block" >*Email</label>
                    <?= $form->field($contact,'email1')->textInput(['class' => 'inputTextClass'])->label(false) ?>
                </div>
            </div>
            <div class="contact-head" >
                <h6 style=" color: black; font-size: 12px; padding: 3px; margin-left: 10px">Contact 2</h6>
            </div>
            <div class="row" style="margin-left: 3px;margin-bottom: 15px">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Name</label>
                    <?= $form->field($contact,'name2')->textInput(['class' => 'inputTextClass'])->label(false) ?>
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
                </div>
                <div style="display: block">
                    <label class="Labelclass" style="display: block" >*Email</label>
                    <?= $form->field($contact,'email2')->textInput(['class' => 'inputTextClass'])->label(false) ?>
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









