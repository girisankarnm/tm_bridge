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
                <div style="display: inline">   <a  href="index.php?r=property%2Fbasicdetails&id=<?= $basic_details->id ?> <?= ($property_image->scenario == "create") ? 'onclick="return showAlert()"' : '' ?>">  <button class="selectedButton" >Basic Details</button></a> <hr class="new5" ></div>
                <a href="index.php?r=property%2Faddressandlocation&id=<?= $basic_details->id; ?>" <?= ($property_image->scenario == "create") ? 'onclick="return showAlert()"' : '' ?>">   <button id="contactBtn" class="tablinks" >Address & Location</button></a>
                <a href="index.php?r=property%2Flegaltax&id=<?= $basic_details->id; ?>" <?= ($property_image->scenario == "create") ? 'onclick="return showAlert()"' : '' ?>> <button class="tablinks" >Legal Tax</button></a>
                <a href="index.php?r=property%2Fcontact&id=<?= $basic_details->id; ?>" <?= ($property_image->scenario == "create") ? 'onclick="return showAlert()"' : '' ?> ><button class="tablinks">Contact Details</button></a>
                <?php if($show_terms_tab ) { ?>
                        <a href="index.php?r=property%2Ftermsandconditions&id=<?= $basic_details->id; ?>" <?= ($property_image->scenario == "create") ? 'onclick="return showAlert()"' : '' ?> ><button class="tablinks" >Terms & Conditions</button></a>
                <?php } ?>
            </div>

            <hr class="sidebar-divider">
            <?php $form = ActiveForm::begin(['id' => 'property_basic_details', 'enableClientValidation' => true,  'method' => 'post','action' => ['property/savepropertybasic']])?>

            <div class="row" style="display: flex; flex-direction: row;">
                <div style="width: 50%; padding-left: 10px; padding-right: 10px">
                    <div class="row" style="margin-left: 3px;margin-bottom: 8px;">
                        <div style="display: block;margin-right: 35px">
                            <label class="Labelclass" style="display: block">*Property Name</label>
                            <?php echo $form->field($basic_details,'name')->textInput(['class' => 'inputLarge'])->label(false) ?>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 3px;margin-bottom: 8px;">
                        <div style="display: block;margin-right: 35px">
                            <label class="Labelclass" style="display: block">*Property Type</label>
                            <?php echo $form->field($basic_details, 'property_type_id')->dropDownList($property_types, ['class' => 'inputTextClass','style' => 'width: 200px','prompt' => 'Choose'])->label(false); ?>
                        </div>
                        <div style="display: block;margin-right: 35px">
                            <label class="Labelclass" style="display: block">*Property Rating</label>
                            <?php echo $form->field($basic_details, 'property_category_id')->dropDownList($property_categories, ['class' => 'inputTextClass','style' => 'width: 200px','prompt' => 'Choose'])->label(false); ?>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 3px;margin-bottom: 8px;">
                        <div style="display: block;margin-right: 35px">
                            <label class="Labelclass" style="display: block">*Website</label>
                            <?php echo $form->field($basic_details,'website')->textInput(['class' => 'inputLarge'])->label(false) ?>
                        </div>
                    </div>
                    <div style="display: block;margin-right: 35px; margin-left: 10px">
                        <BUTTON type="text" class="buttonSave" style="width: 85px; border-radius: 5px"> Save </BUTTON>
                    </div>
                </div>
                <div style="width: 50%; padding-right: 10px; padding-left: 10px; display: block">

                    <div style="display: inline-block; margin-right: 15px">
                        <label class="Labelclass" style="display: block;" >*Property Photo</label>
                        <div class="Neon Neon-theme-dragdropbox" style="display: inline-block">
                            <input style="z-index: 999; opacity: 0; width: 240px; height: 200px; position: absolute; " name="files[]" id="filer_input2" multiple="multiple" type="file">
                            <div class="Neon-input-dragDrop-property-photo" >
                                <div class="Neon-input-inner">
                                    <div class="Neon-input-icon" style="font-size: 100px;  margin-bottom: -15px">
                                        <i class="fa fa-file-image"></i>
                                    </div>
                                    <div class="Neon-input-text"><h3>Property picture</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div style="display: inline-block;">
                        <label class="Labelclass" style="display: block;" >*Property Logo</label>

                        <div class="Neon Neon-theme-dragdropbox" style="display: inline-block">
                            <input style="z-index: 999; opacity: 0; width: 200px; height: 200px; position: absolute; " name="files[]" id="filer_input2" multiple="multiple" type="file">
                            <div class="Neon-input-dragDrop-property-logo" >
                                <div class="Neon-input-inner">
                                    <div class="Neon-input-icon" style="font-size: 100px; margin-bottom: -15px">
                                        <i class="fa fa-file-image"></i>
                                    </div>
                                    <div class="Neon-input-text"><h3>Property Logo</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>




                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>


