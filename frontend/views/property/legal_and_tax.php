<?php

use yii\bootstrap4\ActiveForm;

?>

<div class="$content">
    <div class="container-fluid" >
        <div class="card-title">
            Property
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px;">
            <div class="tab" style="display: flex;flex-direction: row;">
                <a href="index.php?r=property%2Fbasicdetails&id=<?= $legal_tax_documentation->id ?>"> <button class="tablinks" >Basic Details</button></a>
                <a href="index.php?r=property%2Faddressandlocation&id=<?= $legal_tax_documentation->id ?>">   <button id="contactBtn" class="tablinks" >Address & Location</button></a>
                <div style="display: inline">   <a href="index.php?r=property%2Flegaltax&id=<?= $legal_tax_documentation->id ?>">  <button class="selectedButton">Legal & Tax</button></a> <hr class="new5" ></div>
                <a href="index.php?r=property%2Fcontact&id=<?= $legal_tax_documentation->id; ?>"><button class="tablinks" >Contact Details</button></a>
                <?php if($show_terms_tab) { ?>
                        <a href="index.php?r=property%2Ftermsandconditions&id=<?= $legal_tax_documentation->id ?>"><button class="tablinks" >Terms & Conditions</button></a>
                <?php } ?>

            </div>
            <hr class="sidebar-divider">
            <?php $form = ActiveForm::begin(['id' => 'address_location','enableClientValidation' => true, 'method' => 'post','action' => ['property/savelegaltax']]) ?>
            <?= $form->field($legal_tax_documentation, 'id')->hiddenInput()->label(false); ?>

            <div class="row align-items-start">
                <div class="col-md-6 ">
                    <div class="form-group ">
                        <label class="Labelclass">*Legal Status</label>
                        <?php echo $form->field($legal_tax_documentation, 'legal_status_id')->dropDownList($legal_status,['class' => 'inputLarge', 'prompt' => 'Choose'])->label(false) ?>
                    </div>
                    <div class="form-group">
                                <label class="Labelclass">*Pan Number</label>
                                <?php echo $form->field($legal_tax_documentation,'pan_number')->textInput(['class' => 'inputLarge'])->label(false) ?>
                    </div>
                    <div class="form-group">
                        <label class="Labelclass" style="display: block" >*Business License Number</label>
                        <?php echo $form->field($legal_tax_documentation,'business_licence_number')->textInput(['class' => 'inputLarge'])->label(false) ?>
                    </div>
                    <div class="form-group">
                        <label class="Labelclass">*GST Number</label>
                        <?php echo $form->field($legal_tax_documentation,'gst_number')->textInput(['class' => 'inputLarge'])->label(false) ?>
                    </div>

                </div>
                <div class="col-md-6 ">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="Labelclass">*Pancard</label>
                            <?php
                            if(!$legal_tax_documentation->pan_image) {
                                echo "<img id='panImage' src='images/pan.png' class='imagePreview' style='height: 120px; width: 100%;  border: 2px #808080 dashed; border-radius: 6px'>";
                            } else {
                                echo "<img id='panImage' src='uploads/$legal_tax_documentation->pan_image' class='imagePreview' style='height: 120px; width: 100%;  border: 2px #808080 dashed; border-radius: 6px'>";
                            }?>
                            <?= $form->field($legal_docs_images, 'pan_image')->fileInput(['class' => 'btn btn-sm img uploadFile', 'accept' => "image/*", 'id'=>"uploadPan"])->label(false); ?>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label class="Labelclass">*License</label>

                            <?php
                            if(!$legal_tax_documentation->business_licence_image) {
                                echo "<img id='licenseImage' src='images/license.png' class='imagePreview' style='height: 120px; width: 100%;  border: 2px #808080 dashed; border-radius: 6px'>";
                            } else {
                                echo "<img id='licenseImage' src='uploads/$legal_tax_documentation->business_licence_image' class='imagePreview' style='height: 120px; width: 100%;  border: 2px #808080 dashed; border-radius: 6px'>";
                            }?>

                            <?= $form->field($legal_docs_images, 'business_licence_image')->fileInput(['class' => 'btn btn-sm img uploadFile', 'accept' => "image/*", 'id'=>"uploadLicense"])->label(false); ?>
                        </div>
                    </div>
                        <div class="form-group col-md-6">
                            <label class="Labelclass">*GST</label>

                            <?php
                            if(!$legal_tax_documentation->gst_image) {
                                echo "<img id='gstImage' src='images/GST.png' class='gst_image' style='height: 120px; width:100%;  border: 2px #808080 dashed; border-radius: 6px'>";
                            } else {
                                echo "<img id='gstImage' src='uploads/$legal_tax_documentation->gst_image' class='gst_image' style='height: 120px; width:100%;  border: 2px #808080 dashed; border-radius: 6px'>";
                            }?>

                            <?= $form->field($legal_docs_images, 'gst_image')->fileInput(['class' => 'btn btn-sm img uploadFile', 'accept' => "image/*", 'id'=>"uploadGst"])->label(false); ?>
                        </div>
                </div>
            </div>
            <div class="row align-items-start">

                <div class="col-md-6 ">
                    <div class="form-group ">
                        <label class="Labelclass" style="display: block" >*Bank Name</label>
                        <?php echo $form->field($legal_tax_documentation,'bank_name')->textInput(['class' => 'inputLarge'])->label(false) ?>
                    </div>
                    <div class="form-group ">
                        <label class="Labelclass" style="display: block" >*Account Number</label>
                        <?php echo $form->field($legal_tax_documentation,'bank_account_number')->textInput(['class' => 'inputLarge'])->label(false) ?>
                        </div>
                </div>


                <div class="col-md-6 ">
                    <div class="form-group ">
                        <label class="Labelclass" style="display: block" >*Account Name</label>
                        <?php echo $form->field($legal_tax_documentation,'bank_account_name')->textInput(['class' => 'inputLarge'])->label(false) ?>

                    </div>
                    <div class="form-group ">
                        <label class="Labelclass" style="display: block" >*IFSC Code</label>
                        <?php echo $form->field($legal_tax_documentation,'ifsc_code')->textInput(['class' => 'inputLarge'])->label(false) ?>
                    </div>
                </div>

            </div>
            <div style="display: block;margin-right: 35px; margin-left: 10px">
                <BUTTON type="text" class="buttonSave" style="width: 85px; border-radius: 5px"> Save </BUTTON>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

<style>
    .imagePreview {
        max-width:100%;
        max-height:100%;
        width: 200px;
        height: auto;
        /*width: 200px;*/
        /*height: 200px;*/
        background-position: center center;
        background-size: cover;
        /*-webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);*/
        display: inline-block;
        /*background-image: url('http://via.placeholder.com/350x150');*/
        /*border: 2px gray dashed;*/
    }
    .imagePreviewLogo {
        max-width:100%;
        max-height:100%;
        width: 240px;
        height: auto;
        /*width: 240px;*/
        /*height: 200px;*/
        background-position: center center;
        background-size: cover;
        /*-webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);*/
        display: inline-block;
        /*background-image: url('http://via.placeholder.com/350x150');*/
    }
    .default-preview{
        border: 2px gray dashed;
    }

    .uploadFile{
        display: none
    }
</style>

<script>
    $('#panImage').click(function(){

        $('#uploadPan').click();
    });
    $(function() {
        $("#uploadPan").on("change", function()
        {

            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function(){ // set image data as background of div

                    $('#panImage').removeClass('default-preview');
                    $("#panImage").attr("src", reader.result);
                    // $("#imagePreview").css("background-image", "url("+this.result+")");
                }
            }
        });
    });



    $('#licenseImage').click(function(){

        $('#uploadLicense').click();
    });
    $(function() {
        $("#uploadLicense").on("change", function()
        {

            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function(){ // set image data as background of div
                    $('#licenseImage').removeClass('default-preview');
                    // $("#imagePreview-logo").css("background-image", "url("+this.result+")");
                    $("#licenseImage").attr("src", reader.result);
                }
            }
        });
    });


    $('#gstImage').click(function(){

        $('#uploadGst').click();
    });
    $(function() {
        $("#uploadGst").on("change", function()
        {

            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function(){ // set image data as background of div

                    $('#gstImage').removeClass('default-preview');
                    $("#gstImage").attr("src", reader.result);
                    // $("#imagePreview").css("background-image", "url("+this.result+")");
                }
            }
        });
    });


</script>



