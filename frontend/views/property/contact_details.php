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
                <a  href="index.php?r=property%2Fbasicdetails&id=<?= $contact->property_id ?>"> <button class="tablinks btnunder">Basic Details</button></a>
                <a href="index.php?r=property%2Faddressandlocation&id=<?= $contact->property_id; ?>"> <button class="tablinks btnunder">Address & Location</button></a>
                <a href="index.php?r=property%2Flegaltax&id=<?= $contact->property_id ?>"> <button class="tablinks btnunder">Legal Tax</button></a>
                <div style="display: inline">   <a href="index.php?r=property%2Fcontact&id=<?= $contact->property_id; ?>">  <button class="selectedButton">Contact Details</button></a> <hr class="new5" >
                </div>

                <?php if($show_terms_tab) { ?>
                    <a  href="index.php?r=property%2Ftermsandconditions&id=<?= $contact->property_id ?>"> <button class="tablinks">Terms & Conditions</button></a>
                <?php } ?>

            </div>

            <hr class="sidebar-divider">
            <?php $form = ActiveForm::begin(['id' => 'contact_details','enableClientValidation' => true, 'method' => 'post','action' => ['property/savecontactdetails']]) ?>
            <?= $form->field($contact, 'id')->hiddenInput()->label(false); ?>
            <?= $form->field($contact, 'property_id')->hiddenInput()->label(false); ?>
            <input type="hidden" name="show_terms_tab" value="<?= $show_terms_tab ?>">

            <div class="contact-head col-md-11" >
                <h6 style=" color: black; font-size: 14px; padding: 3px; margin-left: 10px; font-weight: bold">Sales</h6>
            </div>

            <div class="row">
                <div class="form-group margin-contacts col-md-4">
                    <label class="Labelclass" style="display: block" >Name</label>
                    <?= $form->field($contact,'sales_name')->textInput(['class' => 'inputTextClass'])->label(false) ?>
                </div>
                <div class="form-group margin-contacts col-md-4">
                    <label class="Labelclass" style="display: block" >Phone</label>
                    <?php
                    echo $form->field($contact, 'sales_phone')->widget(PhoneInput::className(), [
                        'jsOptions' => [
                            'onlyCountries' => ['in'],
                        ],
                        'options'=> array('class'=>'inputTextClass', 'placeholder' => '9123456780', 'maxlength' => '12'),
                    ], )->label(false);?>

                </div>
                <div class="form-group margin-contacts col-md-4">
                    <label class="Labelclass" style="display: block" >Email</label>
                    <?= $form->field($contact,'sales_email')->textInput(['class' => 'inputTextClass'])->label(false) ?>
                </div>
            </div>
            <div class="contact-head col-md-11" >
                <h6 style=" color: black; font-size: 14px; padding: 3px; margin-left: 10px; font-weight: bold">Reservation</h6>
            </div>
            <div class="row">
                <div class="form-group margin-contacts col-md-4">
                    <label class="Labelclass" style="display: block" >Name</label>
                    <?= $form->field($contact,'reservation_name')->textInput(['class' => 'inputTextClass'])->label(false) ?>
                </div>
                <div class="form-group margin-contacts col-md-4">
                    <label class="Labelclass" style="display: block" >Phone</label>
                    <?php
                    echo $form->field($contact, 'reservation_phone')->widget(PhoneInput::className(), [
                        'jsOptions' => [
                            'onlyCountries' => ['in'],
                        ],
                        'options'=> array('class'=>'inputTextClass', 'placeholder' => '9123456780', 'maxlength' => '12'),
                    ], )->label(false);?>
                </div>
                <div class="form-group margin-contacts col-md-4">
                    <label class="Labelclass" style="display: block" >Email</label>
                    <?= $form->field($contact,'reservation_email')->textInput(['class' => 'inputTextClass'])->label(false) ?>
                </div>
            </div>
            <div class="contact-head col-md-11" >
                <h6 style=" color: black; font-size: 14px; padding: 3px; margin-left: 10px; font-weight: bold">Front Office</h6>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block" >Name</label>
                    <?= $form->field($contact,'front_office_name')->textInput(['class' => 'inputTextClass'])->label(false) ?>
                </div>
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block" >Phone</label>
                    <?php
                    echo $form->field($contact, 'front_office_phone')->widget(PhoneInput::className(), [
                        'jsOptions' => [
                            'onlyCountries' => ['in'],
                        ],
                        'options'=> array('class'=>'inputTextClass', 'placeholder' => '9123456780', 'maxlength' => '12'),
                    ], )->label(false);?>
                </div>
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block" >Email</label>
                    <?= $form->field($contact,'front_office_email')->textInput(['class' => 'inputTextClass'])->label(false) ?>
                </div>
            </div>
            <div class="contact-head col-md-11" >
                <h6 style=" color: black; font-size: 14px; padding: 3px; margin-left: 10px; font-weight: bold">Accounts</h6>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block" >Name</label>
                    <?= $form->field($contact,'accounts_office_name')->textInput(['class' => 'inputTextClass'])->label(false) ?>
                </div>
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block" >Phone</label>
                    <?php
                    echo $form->field($contact, 'accounts_office_phone')->widget(PhoneInput::className(), [
                        'jsOptions' => [
                            'onlyCountries' => ['in'],
                        ],
                        'options'=> array('class'=>'inputTextClass', 'placeholder' => '9123456780', 'maxlength' => '12'),
                    ], )->label(false);?>
                </div>
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block" >Email</label>
                    <?= $form->field($contact,'accounts_office_email')->textInput(['class' => 'inputTextClass'])->label(false) ?>
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







