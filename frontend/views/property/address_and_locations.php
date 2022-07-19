<?php

use yii\bootstrap4\ActiveForm;

?>
<div class="$content">
    <div class="container-fluid">
        <div class="card-title">
            <span style="font: bold">Property</span>
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px; height: 450px">

            <div class="tab">
                <a href="index.php?r=property%2Fbasicdetails&id=<?= $address_location->id ?>"> <button class="tablinks btnunder" >Basic Details</button></a>
                <div style="display: inline">   <a href="index.php?r=property%2Faddressandlocation&id=<?= $address_location->id ?>">  <button class="selectedButton">Address & Location</button></a> <hr class="new5" ></div>
                <a href="index.php?r=property%2Flegaltax&id=<?= $address_location->id ?>"> <button class="tablinks">Legal Tax</button></a>
                <a href="index.php?r=property%2Fcontact&id=<?= $address_location->id; ?>"><button class="tablinks">Contact Details</button></a>
                <?php if($show_terms_tab && $property->country_id && $property->legal_status_id) { ?>
                        <a href="index.php?r=property%2Ftermsandconditions&id=<?= $address_location->id ?>"><button class="tablinks" >Terms & Conditions</button></a>
                <?php } ?>

            </div>
            <hr class="sidebar-divider">
            <?php $form = ActiveForm::begin(['id' => 'address_location','enableClientValidation' => true, 'method' => 'post','action' => ['property/savepropertyaddresslocation']]) ?>
            <?= $form->field($address_location, 'id')->hiddenInput()->label(false); ?>

            <div class="row">
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block" >Country<span style="color: red; font-size: 18px">*</span></label>
                    <?php echo $form->field($address_location,'country_id')->dropDownList($countries,['class' => 'inputTextClass', 'prompt' => 'Choose'])->label(false) ?>
                </div>
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block" >Location<span style="color: red; font-size: 18px">*</span></label>
                    <?php echo $form->field($address_location,'location_id')->dropDownList($locations,['class' => 'inputTextClass', 'prompt' => 'Choose'])->label(false) ?>
                </div>
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block" >Destination<span style="color: red; font-size: 18px">*</span></label>
                    <?php echo $form->field($address_location,'destination_id')->dropDownList($destinations,['class' => 'inputTextClass', 'prompt' => 'Choose'])->label(false) ?>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block" >Address<span style="color: red; font-size: 18px">*</span></label>
                    <?php echo $form->field($address_location,'address')->textarea(['rows' => '5', 'class' =>'inputTextArea','placeholder' => 'Enter official address'])->label(false) ?>
                </div>
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block" >Pin Code<span style="color: red; font-size: 18px">*</span></label>
                    <?php echo $form->field($address_location,'postal_code')->textInput(['class' => 'inputTextClass', ])->label(false) ?>
                </div>
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block" >Locality<span style="color: red; font-size: 18px">*</span></label>
                    <?php echo $form->field($address_location,'locality')->textInput(['class' => 'inputTextClass', 'placeholder' => 'Locality of the business'])->label(false) ?>
                </div>
            </div>

            <div style="display: block;margin-right: 35px; margin-left: 10px; margin-top: 20px">
                <BUTTON type="text" class="buttonSave" style="width: 85px; border-radius: 5px"> Save </BUTTON>
            </div>
            <?php ActiveForm::end(); ?>
        </div>

    </div>
</div>









