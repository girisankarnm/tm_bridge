<?php
use yii\bootstrap4\ActiveForm;
?>
<div class="$content">
    <div class="container-fluid" style="background-color: white">
        <div class="card-title">
            Property
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px;">
            <div class="tab" style="display: flex;flex-direction: row;">
                <div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/property/basicdetails']) ?>">  <button class="selectedButton" onclick="openCity(event, 'London')" >Basic Details</button></a> <hr class="new5" >
                </div>
                <a href="<?= \yii\helpers\Url::to(['/property/addressandlocation']) ?>">   <button id="contactBtn" class="tablinks" onclick="openCity(event, 'Paris')">Address & Location</button></a>
                <a href="<?= \yii\helpers\Url::to(['/property/legaltax']) ?>"> <button class="tablinks" onclick="openCity(event, 'Tokyo')">Legal Tax</button></a>
                <a href="<?= \yii\helpers\Url::to(['/property/contact']) ?>"><button class="tablinks" onclick="openCity(event, 'Tokyo')">Contact Details</button></a>
                <a href="<?= \yii\helpers\Url::to(['/property/termsandconditions']) ?>"><button class="tablinks" onclick="openCity(event, 'Tokyo')">Terms & Conditions</button></a>
            </div>

            <hr class="sidebar-divider">
            <?php $form = ActiveForm::begin(['id' => 'property_basic_details', 'enableClientValidation' => true,  'method' => 'post','action' => ['property/savepropertybasic']])?>

            <div class="row" style="display: flex; flex-direction: row;">
                <div style="width: 50%; padding-left: 10px; padding-right: 10px">
                    <div class="row" style="margin-left: 3px;margin-bottom: 8px;">
                        <div style="display: block;margin-right: 35px">
                            <label class="Labelclass" style="display: block">*Property Name</label>
                            <?php echo $form->field($basic_details,'name')->textInput(['class' => 'inputLarge'])->label(false) ?>


<!--                            <label class="Labelclass" style="display: block;margin-top: 22px" >*Property Name</label>-->
<!--                            <input type="text" class="inputLarge" placeholder="Property Name" >-->
                        </div>
                    </div>
                    <div class="row" style="margin-left: 3px;margin-bottom: 8px;">
                        <div style="display: block;margin-right: 35px">
                            <label class="Labelclass" style="display: block">*Property Type</label>
                            <?php echo $form->field($basic_details, 'property_type_id')->dropDownList($property_types, ['class' => 'inputTextClass','style' => 'width: 200px','prompt' => 'Choose'])->label(false); ?>
<!--                            <select class="inputTextClass" style="width: 205px">-->
<!--                                <option value="">Choose</option>-->
<!--                                <option value="">Delhi</option>-->
<!--                                <option value="">Mumbai</option>-->
<!--                                <option value="">Kerala</option>-->
<!--                            </select>-->
                        </div>
                        <div style="display: block;margin-right: 35px">
                            <label class="Labelclass" style="display: block">*Property Rating</label>
                            <?php echo $form->field($basic_details, 'property_category_id')->dropDownList($property_categories, ['class' => 'inputTextClass','style' => 'width: 200px','prompt' => 'Choose'])->label(false); ?>

<!--                            <select class="inputTextClass" style="width: 205px">-->
<!--                                <option value="">Choose</option>-->
<!--                                <option value="">Alappuzha</option>-->
<!--                                <option value="">Idukki</option>-->
<!--                                <option value="">Vagamon</option>-->
<!--                            </select>-->
                        </div>
                    </div>
                    <div class="row" style="margin-left: 3px;margin-bottom: 8px;">
                        <div style="display: block;margin-right: 35px">
                            <label class="Labelclass" style="display: block">*Website</label>
                            <?php echo $form->field($basic_details,'website')->textInput(['class' => 'inputLarge'])->label(false) ?>

<!--                            <input type="text" class="inputLarge" placeholder="Property Name" >-->
                        </div>
                    </div>
                    <div style="display: block;margin-right: 35px; margin-left: 10px">
                        <BUTTON type="text" class="buttonSave" style="width: 85px; border-radius: 5px"> Save </BUTTON>
                    </div>
                </div>
                <div style="width: 50%; padding-right: 10px; padding-left: 10px">
                    <div style="display: inline-block; margin-right: 10px">
                        <label class="Labelclass" style="display: block" >*Property Photo</label>
                        <?= $form->field($property_image, 'proFile')->fileInput(['class' => 'btn btn-sm', 'accept' => "image/*", 'onchange'=>'showImage(this);'])->label(false); ?>
                        <img id="image" src="uploads/<?php echo $basic_details->image; ?>" alt="" />
                        <input type="hidden" id="profile_image_there" value="<?= empty($basic_details->image) ? 0 : 1  ?>">



<!--                        <div class="Neon Neon-theme-dragdropbox" style="display: inline-block">-->
<!--                            <input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; " name="files[]" id="filer_input2" multiple="multiple" type="file">-->
<!--                            <div class="Neon-input-dragDrop-property-photo" >-->
<!--                                <div class="Neon-input-inner">-->
<!--                                    <div class="Neon-input-icon" style="font-size: 100px">-->
<!--                                        <i class="fa fa-file-image"></i>-->
<!--                                    </div>-->
<!--                                    <div class="Neon-input-text"><h3>Company visiting card front</h3>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                    <div style="display: inline-block">
                        <label class="Labelclass" style="display: block" >*Property Logo</label>
                        <?= $form->field($property_image, 'logoFile')->fileInput(['class' => 'btn btn-sm', 'accept' => "image/*", 'onchange'=>'showImage(this);'])->label(false); ?>
                        <img id="image" src="uploads/<?php echo $basic_details->image; ?>" alt="" />
                        <input type="hidden" id="profile_image_there" value="<?= empty($basic_details->image) ? 0 : 1  ?>">



<!--                        <div class="Neon Neon-theme-dragdropbox" style="display: inline-block">-->
<!--                            <input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; " name="files[]" id="filer_input2" multiple="multiple" type="file">-->
<!--                            <div class="Neon-input-dragDrop-property-logo" >-->
<!--                                <div class="Neon-input-inner">-->
<!--                                    <div class="Neon-input-icon" style="font-size: 100px">-->
<!--                                        <i class="fa fa-file-image"></i>-->
<!--                                    </div>-->
<!--                                    <div class="Neon-input-text"><h3>Company visiting card back</h3>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>


