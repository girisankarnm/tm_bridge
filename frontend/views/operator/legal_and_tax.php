<?php

use yii\bootstrap4\ActiveForm;

?>

<div class="$content">
    <div class="container-fluid" >
        <div class="card-title">
            Operator Profile
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px;">
            <div class="tab" style="display: flex;flex-direction: row;">
                <a href="<?= \yii\helpers\Url::to(['/operator/basicdetails']) ?>"> <button class="tablinks" onclick="openCity(event, 'Tokyo')">Basic Details</button></a>

                <a href="<?= \yii\helpers\Url::to(['/operator/addressandlocation']) ?>">   <button id="contactBtn" class="tablinks" onclick="openCity(event, 'Paris')">Address & Location</button></a>
                <div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/operator/legaltax']) ?>">  <button class="selectedButton" onclick="openCity(event, 'London')" >Legal & Tax</button></a> <hr class="new5" >
                </div>
                <a href="<?= \yii\helpers\Url::to(['/operator/contact']) ?>"><button class="tablinks" onclick="openCity(event, 'Tokyo')">Contact Details</button></a>
                <a href="<?= \yii\helpers\Url::to(['/operator/termsandconditions']) ?>"><button class="tablinks" onclick="openCity(event, 'Tokyo')">Terms & Conditions</button></a>
            </div>
            <hr class="sidebar-divider">
            <?php $form = ActiveForm::begin(['id' => 'address_location1','enableClientValidation' => true, 'method' => 'post','action' => ['operator/savelegaltax']]) ?>
            <?= $form->field($legal_tax_documentation, 'id')->hiddenInput()->label(false); ?>

            <div class="row" style="margin-left: 3px;margin-bottom: 8px;">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Legal Status</label>
                    <?php echo $form->field($legal_tax_documentation, 'legal_status_id')->dropDownList($legal_status,['class' => 'inputLarge', 'prompt' => 'Choose'])->label(false) ?>

<!--                    <select class="inputLarge">-->
<!--                        <option value="">Choose</option>-->
<!--                        <option value="">1</option>-->
<!--                        <option value="">2</option>-->
<!--                        <option value="">3</option>-->
<!--                    </select>-->
                </div>
            </div>

            <div class="row" style="margin-left: 3px;margin-bottom: 15px">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Pan Number</label>
                    <?php echo $form->field($legal_tax_documentation,'pan_number')->textInput(['class' => 'inputMedium'])->label(false) ?>

<!--                    <input type="text" class="inputMedium" >-->
                </div>
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" ></label>
                    <button class="inputTextClass" style="display:block;width:110px;" onclick="document.getElementById('getFile').click()"><i class="fa fa-upload"></i> <b>Upload File</b></button>
                    <input type='file' id="getFile" style="display:none">
                </div>

            </div>
            <div class="row" style="margin-left: 3px;margin-bottom: 15px">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*GST Number</label>
                    <?php echo $form->field($legal_tax_documentation,'gst_number')->textInput(['class' => 'inputMedium'])->label(false) ?>

<!--                    <input type="text" class="inputMedium" >-->
                </div>
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" ></label>
                    <button class="inputTextClass" style="display:block;width:110px;" onclick="document.getElementById('getFile').click()"><i class="fa fa-upload"></i> <b>Upload File</b></button>
                    <input type='file' id="getFile" style="display:none">
                </div>

            </div>
            <div class="row" style="margin-left: 3px;margin-bottom: 15px">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Bank Name</label>
                    <?php echo $form->field($legal_tax_documentation,'bank_name')->textInput(['class' => 'inputLarge'])->label(false) ?>

<!--                    <input type="text" class="inputLarge" >-->
                </div>
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Account Name</label>
                    <?php echo $form->field($legal_tax_documentation,'bank_account_name')->textInput(['class' => 'inputLarge'])->label(false) ?>

<!--                    <input type="text" class="inputLarge" >-->
                </div>

            </div>
            <div class="row" style="margin-left: 3px;margin-bottom: 15px">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Account Number</label>
                    <?php echo $form->field($legal_tax_documentation,'bank_account_number')->textInput(['class' => 'inputLarge'])->label(false) ?>

<!--                    <input type="text" class="inputLarge" >-->
                </div>
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*IFSC Code</label>
                    <?php echo $form->field($legal_tax_documentation,'ifsc_code')->textInput(['class' => 'inputLarge'])->label(false) ?>

<!--                    <input type="text" class="inputLarge" >-->
                </div>

            </div>
            <div style="display: block;margin-right: 35px; margin-left: 10px">
                <BUTTON type="text" class="buttonSave" style="width: 85px; border-radius: 5px"> Save </BUTTON>
            </div>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>


