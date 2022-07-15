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
                <a href="index.php?r=operator%2Fbasicdetails&id=<?= $legal_tax_documentation->id ?>"> <button class="tablinks">Basic Details</button></a>
                <a href="index.php?r=operator%2Faddressandlocation&id=<?= $legal_tax_documentation->id ?>">   <button id="contactBtn" class="tablinks" >Address & Location</button></a>
                <div style="display: inline">   <a href="index.php?r=operator%2Flegaltax&id=<?= $legal_tax_documentation->id ?>">  <button class="selectedButton" >Legal & Tax</button></a> <hr class="new5" ></div>
                <a  href="index.php?r=operator%2Fcontact&id=<?= $legal_tax_documentation->id ?>"><button class="tablinks">Contact Details</button></a>
                <?php if($show_terms_tab) { ?>
                    <a href="index.php?r=operator%2Ftermsandconditions&id=<?= $legal_tax_documentation->id ?>"><button class="tablinks">Terms & Conditions</button></a>
                <?php } ?>
            </div>
            <hr class="sidebar-divider">
            <?php $form = ActiveForm::begin(['id' => 'address_location1','enableClientValidation' => true, 'method' => 'post','action' => ['operator/savelegaltax']]) ?>
            <?= $form->field($legal_tax_documentation, 'id')->hiddenInput()->label(false); ?>


            <div class="row align-items-start">
                <div class="col-md-6 ">
                    <div class="form-group ">
                        <label for="inputEmail4" class="Labelclass">*Legal Status</label>
                        <?php echo $form->field($legal_tax_documentation, 'legal_status_id')->dropDownList($legal_status,['class' => 'inputLarge', 'prompt' => 'Choose'])->label(false) ?>
                    </div>
                            <div class="form-group">
                                <label class="Labelclass">*Pan Number</label>
                                <?php echo $form->field($legal_tax_documentation,'pan_number')->textInput(['class' => 'inputLarge'])->label(false) ?>
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
                                echo "<div id='operatorPanId' class='image-border'><img id='operatorPanImage' src='images/pan.png' class='imagedisplay' ></div>";
                            } else {
                                echo "<div id='operatorPanId' class='borderless-image'><img id='operatorPanImage' src='uploads/$legal_tax_documentation->pan_image' class='imagePreview' ></div>";
                            }?>

                            <?= $form->field($legal_docs_images, 'pan_image')->fileInput(['class' => 'btn btn-sm img uploadFile', 'accept' => "image/*", 'id'=>"uploadPanImage"])->label(false); ?>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="inputEmail4" class="Labelclass">*GST</label>
                            <?php
                            if(!$legal_tax_documentation->gst_image) {
                                echo "<div id='operatorGstId' class='image-border'><img id='operatorGstImage' src='images/GST.png' class='imagedisplay'></div>";
                            } else {
                                echo "<div id='operatorGstId' class='borderless-image'><img id='operatorGstImage' src='uploads/$legal_tax_documentation->gst_image' class='imagePreview'></div>";
                            }?>


                            <?= $form->field($legal_docs_images, 'gst_image')->fileInput(['class' => 'btn btn-sm img uploadFile', 'accept' => "image/*", 'id'=>"uploadGstImage"])->label(false); ?>
                        </div>
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
    .uploadFile{
        display: none;
    }
</style>

<style>
    .image-border {
        height: 120px;
        width: 100%;
        border: 2px #808080 dashed;
        border-radius: 6px;
        position: relative
    }
    .borderless-image {
        height: 120px;
        width: 100%;
        /*border: 2px #808080 dashed;*/
        border-radius: 6px;
        position: relative
    }

    .imagePreview {
        max-width:100%;
        max-height:100%;
        /*width: 200px;*/
        /*height: auto;*/
        width: 100%;
        height: 100%;
        background-position: center center;
        background-size: cover;
        /*-webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);*/
        display: inline-block;
        /*background-image: url('http://via.placeholder.com/350x150');*/
        /*border: 2px gray dashed;*/
    }


    .imagedisplay{
        width: 80px;
        height: 80px;
        /*margin: 0;*/
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    .default-preview{
        border: 2px gray dashed;
    }

    .uploadFile{
        display: none
    }
</style>

<script>
    $('#operatorPanImage').click(function(){

        $('#uploadPanImage').click();
    });
    $(function() {
        $("#uploadPanImage").on("change", function()
        {

            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function(){ // set image data as background of div

                    // $('#operatorPanImage').removeClass('default-preview');
                    document.getElementById("operatorPanId").className = "borderless-image";
                    document.getElementById("operatorPanImage").className = "imagePreview";
                    $("#operatorPanImage").attr("src", reader.result);
                    // $("#imagePreview").css("background-image", "url("+this.result+")");
                }
            }
        });
    });



    $('#operatorGstImage').click(function(){

        $('#uploadGstImage').click();
    });
    $(function() {
        $("#uploadGstImage").on("change", function()
        {

            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function(){ // set image data as background of div
                    // $('#operatorGstImage').removeClass('default-preview');
                    document.getElementById("operatorGstId").className = "borderless-image";
                    document.getElementById("operatorGstImage").className = "imagePreview";
                    // $("#imagePreview-logo").css("background-image", "url("+this.result+")");
                    $("#operatorGstImage").attr("src", reader.result);
                }
            }
        });
    });


</script>