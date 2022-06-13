<?php

use yii\bootstrap4\ActiveForm;

?>
<div class="$content">
    <div class="container-fluid">
        <div class="card-title">
            <span style="font: bold">Operator Profile</span>
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px; height: 430px">
            <div class="tab">
                <a href="<?= \yii\helpers\Url::to(['/operator/basicdetails']) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Basic Details</button></a>
                <div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/operator/addressandlocation']) ?>">  <button class="selectedButton" onclick="openCity(event, 'London')" >Address & Location</button></a> <hr class="new5" >
                </div>
                <a href="<?= \yii\helpers\Url::to(['/operator/legaltax']) ?>"> <button class="tablinks" onclick="openCity(event, 'Tokyo')">Legal Tax</button></a>
                <a href="<?= \yii\helpers\Url::to(['/operator/contact']) ?>"><button class="tablinks" onclick="openCity(event, 'Tokyo')">Contact Details</button></a>
                <a href="<?= \yii\helpers\Url::to(['/operator/termsandconditions']) ?>"><button class="tablinks" onclick="openCity(event, 'Tokyo')">Terms & Conditions</button></a>
            </div>
            <hr class="sidebar-divider">
            <?php $form = ActiveForm::begin(['id' => 'address_location','enableClientValidation' => true, 'method' => 'post','action' => ['operator/saveaddresslocation']]) ?>
            <?= $form->field($address_location, 'id')->hiddenInput()->label(false); ?>

            <div class="row" style="margin-left: 3px;margin-bottom: 8px;">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Country</label>
                    <?php echo $form->field($address_location,'country_id')->dropDownList($countries,['class' => 'inputTextClass', 'prompt' => 'Choose'])->label(false) ?>

<!--                    <select class="inputTextClass">-->
<!--                        <option value="">Choose</option>-->
<!--                        <option value="">India</option>-->
<!--                        <option value="">America</option>-->
<!--                        <option value="">China</option>-->
<!--                    </select>-->
                </div>
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Location</label>
                    <?php echo $form->field($address_location,'location_id')->dropDownList($locations,['class' => 'inputTextClass', 'prompt' => 'Choose'])->label(false) ?>

<!--                    <select class="inputTextClass">-->
<!--                        <option value="">Choose</option>-->
<!--                        <option value="">Delhi</option>-->
<!--                        <option value="">Mumbai</option>-->
<!--                        <option value="">Kerala</option>-->
<!--                    </select>-->
                </div>
                <div style="display: block">
                    <label class="Labelclass" style="display: block" >*Destination</label>
                    <?php echo $form->field($address_location,'destination_id')->dropDownList($destinations,['class' => 'inputTextClass', 'prompt' => 'Choose'])->label(false) ?>

<!--                    <select class="inputTextClass">-->
<!--                        <option value="">Choose</option>-->
<!--                        <option value="">Alappuzha</option>-->
<!--                        <option value="">Idukki</option>-->
<!--                        <option value="">Vagamon</option>-->
<!--                    </select>-->
                </div>
            </div>

            <div class="row" style="margin-left: 3px;margin-bottom: 15px">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Address</label>
                    <?php echo $form->field($address_location,'address')->textInput(['class' => 'inputTextClass', 'placeholder'=>'Please enter official address of the business'])->label(false) ?>

<!--                    <input type="text" class="inputTextClass" >-->
                </div>
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block" >*Zip Code</label>
                    <?php echo $form->field($address_location,'postal_code')->textInput(['class' => 'inputTextClass'])->label(false) ?>

<!--                    <input type="text" class="inputTextClass" >-->
                </div>
                <div style="display: block">
                    <label class="Labelclass" style="display: block" >*Locality</label>
                    <?php echo $form->field($address_location,'locality')->textInput(['class' => 'inputTextClass', 'placeholder'=>'Enter locality where the business is situated'])->label(false) ?>

<!--                    <input type="text" class="inputTextClass" >-->
                </div>
            </div>
            <div style="display: block;margin-right: 35px; margin-left: 10px; margin-top: 20px">
                <BUTTON type="text" class="buttonSave" style="width: 85px; border-radius: 5px"> Save </BUTTON>
            </div>
            <?php ActiveForm::end(); ?>
        </div>

    </div>
</div>


<!-- End of Footer -->







