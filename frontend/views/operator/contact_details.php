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
                <a href="index.php?r=operator%2Fbasicdetails&id=<?= $contact->operator_id ?>"> <button class="tablinks btnunder">
                        <?php if($operator->name) { ?>
                            <i class="fas fa-check"></i>
                        <?php } else {?>
                            <i class="fas fa-times"></i>
                        <?php } ?>
                        Basic Details</button>
                </a>
                <a href="index.php?r=operator%2Faddressandlocation&id=<?= $contact->operator_id; ?>"> <button class="tablinks btnunder">
                        <?php if($operator->country_id) { ?>
                            <i class="fas fa-check"></i>
                        <?php } else {?>
                            <i class="fas fa-times"></i>
                        <?php } ?>
                        Address & Location</button>
                </a>
                <a  href="index.php?r=operator%2Flegaltax&id=<?= $contact->operator_id; ?>"> <button class="tablinks btnunder">
                        <?php if($operator->legal_status_id) { ?>
                            <i class="fas fa-check"></i>
                        <?php } else {?>
                            <i class="fas fa-times"></i>
                        <?php } ?>
                        Legal Tax</button>
                </a>
                <div style="display: inline">   <a href="index.php?r=operator%2Fcontact&id=<?= $contact->operator_id ?>">  <button class="selectedButton">Contact Details</button></a> <hr class="new5" ></div>
                <?php if($show_terms_tab) { ?>
                    <a href="index.php?r=operator%2Ftermsandconditions&id=<?= $contact->operator_id;?>"><button class="tablinks" >
                            <?php if($operator->terms_and_conditons) { ?>
                                <i class="fas fa-check"></i>
                            <?php } else {?>
                                <i class="fas fa-times"></i>
                            <?php } ?>
                            Terms & Conditions</button>
                    </a>
                <?php } ?>
            </div>
            <hr class="sidebar-divider">
            <?php $form = ActiveForm::begin(['id' => 'contact_details','enableClientValidation' => true, 'method' => 'post','action' => ['operator/savecontactdetails']]) ?>
            <?= $form->field($contact, 'id')->hiddenInput()->label(false); ?>
            <?= $form->field($contact, 'operator_id')->hiddenInput()->label(false); ?>
            <input type="hidden" name="show_terms_tab" value="<?= $show_terms_tab ?>">

            <div class="contact-head col-md-11">
                <h6 style=" color: black; font-size: 14px; padding: 3px; margin-left: 10px; font-weight: bold">Contact 1</h6>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block" >Name</label>
                   <?= $form->field($contact,'name1')->textInput(['class' => 'inputTextClass'])->label(false) ?>
                </div>
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block" >Phone</label>
                    <?php
                    echo $form->field($contact, 'phone1')->widget(PhoneInput::className(), [
                        'jsOptions' => [
                            'onlyCountries' => ['in'],
                        ],
                        'options'=> array('class'=>'inputTextClass', 'placeholder' => '9123456780', 'maxlength' => '12'),
                    ], )->label(false);?>
                </div>
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block" >Email</label>
                    <?= $form->field($contact,'email1')->textInput(['class' => 'inputTextClass'])->label(false) ?>
                </div>
            </div>
            <div class="contact-head col-md-11">
                <h6 style=" color: black; font-size: 14px; padding: 3px; margin-left: 10px; font-weight: bold">Contact 2</h6>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block" >Name</label>
                    <?= $form->field($contact,'name2')->textInput(['class' => 'inputTextClass'])->label(false) ?>
                </div>
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block" >Phone</label>
                    <?php
                    echo $form->field($contact, 'phone2')->widget(PhoneInput::className(), [
                        'jsOptions' => [
                            'onlyCountries' => ['in'],
                        ],
                        'options'=> array('class'=>'inputTextClass', 'placeholder' => '9123456780', 'maxlength' => '12'),
                    ], )->label(false);?>
                </div>
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block" >Email</label>
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









