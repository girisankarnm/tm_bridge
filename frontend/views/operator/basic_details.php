<?php

use yii\bootstrap4\ActiveForm;
$this->registerJsFile('/js/common.js');


?>

<div class="$content">

    <div class="container-fluid">
        <div class="card-title">
            Operator Profile
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px;">
            <div class="tab" style="display: flex;flex-direction: row;">
                <div style="display: inline">   <a href="index.php?r=operator%2Fbasicdetails&id=<?= $basic_details->id ?>">  <button class="selectedButton" >Basic Details</button></a> <hr class="new5" ></div>
                <a href="index.php?r=operator%2Faddressandlocation&id=<?= $basic_details->id; ?>" <?= ($operator_image->scenario == "create") ? 'onclick="return showAlert()"' : '' ?>>   <button id="contactBtn" class="tablinks" >Address & Location</button></a>
                <a href="index.php?r=operator%2Flegaltax&id=<?= $basic_details->id; ?>" <?= ($operator_image->scenario == "create") ? 'onclick="return showAlert()"' : '' ?>"> <button class="tablinks" >Legal Tax</button></a>
                <a href="index.php?r=operator%2Fcontact&id=<?= $basic_details->id ?>" <?= ($operator_image->scenario == "create") ? 'onclick="return showAlert()"' : '' ?>"><button class="tablinks" >Contact Details</button></a>

                <?php if($show_terms_tab) { ?>
                    <a href="index.php?r=operator%2Ftermsandconditions&id=<?= $basic_details->id; ?>" <?= ($operator_image->scenario == "create") ? 'onclick="return showAlert()"' : '' ?>"><button class="tablinks" >Terms & Conditions</button></a>
                <?php } ?>
            </div>

            <hr class="sidebar-divider">
            <?php $form = ActiveForm::begin(['id' => 'operational_form','enableClientValidation' => true,'method' => 'post','action' => ['operator/savebasicdetails']]) ?>
            <?= $form->field($basic_details, 'id')->hiddenInput()->label(false); ?>
            <input type="hidden" value="<?= $basic_details->id ?>" name="operator_id">

            <div class="row align-items-start">
                <div class="col-md-6 ">
                    <div class="form-group ">
                        <label class="Labelclass">*Company</label>
                        <?php echo $form->field($basic_details,'name')->textInput(['class' => 'inputLarge'])->label(false) ?>
                    </div>
                    <div class="form-group ">
                        <label class="Labelclass">*Website</label>
                        <?php
                        if ($basic_details->website != null) {
                            echo $form->field($basic_details, 'website')->textInput(['class' => 'inputLarge'])->label(false);

                        } else {
                            echo $form->field($basic_details, 'website')->textInput(['class' => 'inputLarge', 'value' => 'http://'])->label(false);

                        }
                        ?>

                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="Labelclass" style="display: block;margin-top: 22px" >*Upload Vcard</label>
                            <?php
                            if(!$basic_details->v_card_image_front) {
                                echo "<img id='v-card-front' src='images/Company-visiting-card-front.png' class='v-card' style='height: 150px; width: 100%;  border: 2px #cacaca dashed; border-radius: 6px'>";
                            } else {
                                echo "<img id='v-card-front' src='uploads/$basic_details->v_card_image_front' class='v-card' style='height: 150px; width: 100%;  border: 2px #cacaca dashed; border-radius: 6px'>";
                            }?>

                            <?= $form->field($operator_image, 'v_card_image_front')->fileInput(['class' => 'btn btn-sm img uploadFile', 'accept' => "image/*", 'id'=>"operator-v-card-front"])->label(false); ?>

                        </div>
                        <div class="form-group col-md-6">
                            <label class="Labelclass" style="display: block;margin-top: 22px" ></label>
                            <?php
                            if(!$basic_details->v_card_image_front) {
                                echo "<img id='v-card-back' src='images/Company-visiting-card-back.png' class='v-card' style='height: 150px; width: 100%;  border: 2px #cacaca dashed; border-radius: 6px'>";
                            } else {
                                echo "<img id='v-card-back' src='uploads/$basic_details->v_card_image_back' class='v-card' style='height: 150px; width: 100%;  border: 2px #cacaca dashed; border-radius: 6px'>";
                            }?>

                            <!--                            <input id="operator-v-card-front" type="file" name="property_photo" class="img uploadFile" />-->
                            <?= $form->field($operator_image, 'v_card_image_back')->fileInput(['class' => 'btn btn-sm img uploadFile', 'accept' => "image/*", 'id'=>"operator-v-card-back"])->label(false); ?>

                        </div>
                    </div>


                </div>
                <div class="col-md-6 ">
                    <div class="form-group ">
                        <label class="Labelclass" style="display: block" >*Upload Logo</label>

                        <?php
                        if(!$basic_details->logo_image) {
                            echo "<img id='imagePreview-logo' src='images/Company-logo.png' class='imagePreview-logo' style='height: 220px; width: 100%;  border: 2px #cacaca dashed; border-radius: 6px'>";
                        } else {
                            echo "<img id='imagePreview-logo' src='uploads/$basic_details->logo_image' class='imagePreview-logo' style='height: 220px; width: 100%;  border: 2px #cacaca dashed; border-radius: 6px'>";
                        }?>

                        <?= $form->field($operator_image, 'logo_image')->fileInput(['class' => 'btn btn-sm img uploadFile ', 'accept' => "image/*", 'id'=>"operator-logo", ])->label(false); ?>


                    </div>
                </div>
            </div>
            <div style="display: block;margin-right: 35px; margin-left: 10px; margin-top: 20px">
                <BUTTON type="text" class="buttonSave" style="width: 85px; border-radius: 5px"> Save </BUTTON>
            </div>






            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
<style>
    .imagePreview-logo {
        max-width:100%;
        max-height:100%;
        width: 200px;
        height: auto;
        /*background-position: center center;*/
        /*background-size: cover;*/
        /*-webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);*/
        /*display: inline-block;*/
        /*background-image: url('http://via.placeholder.com/350x150');*/
        /*border: 2px gray dashed;*/
    }
    .v-card {
        max-width:100%;
        max-height:100%;
        width: 200px;
        height: 200px;
        /*background-position: center center;*/
        /*background-size: cover;*/
        /*-webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);*/
        /*display: inline-block;*/
        /*background-image: url('http://via.placeholder.com/350x150');*/
        /*border: 2px gray dashed;*/
    }

    .default-preview{
        border: 2px #808080 dashed;
    }

    .uploadFile{
        display: none
    }
</style>
<script>
    $('#imagePreview-logo').click(function(){

        $('#operator-logo').click();
    });
    $(function() {
        $("#operator-logo").on("change", function()
        {

            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function(){ // set image data as background of div

                    $('#imagePreview-logo').removeClass('default-preview');
                    $("#imagePreview-logo").attr("src", reader.result);

                }
            }
        });
    });


 $('#v-card-front').click(function(){

        $('#operator-v-card-front').click();
    });
    $(function() {
        $("#operator-v-card-front").on("change", function()
        {

            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function(){ // set image data as background of div

                    $('#v-card-front').removeClass('default-preview');
                    $("#v-card-front").attr("src", reader.result);

                }
            }
        });
    });


 $('#v-card-back').click(function(){

        $('#operator-v-card-back').click();
    });
    $(function() {
        $("#operator-v-card-back").on("change", function()
        {

            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function(){ // set image data as background of div

                    $('#v-card-back').removeClass('default-preview');
                    $("#v-card-back").attr("src", reader.result);

                }
            }
        });
    });


</script>

