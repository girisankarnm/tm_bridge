<?php
use yii\bootstrap4\ActiveForm;
$this->registerJsFile('/js/common.js');

?>
<div class="$content">
    <div class="container-fluid" style="background-color: white">
        <div class="card-title">
            <?= $basic_details->name; ?>
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px;">
            <div class="tab" style="display: flex;flex-direction: row;">
                <div style="display: inline">   <a  href="index.php?r=property%2Fbasicdetails&id=<?= $basic_details->id ?> <?= ($property_image->scenario == "create") ? 'onclick="return showAlert()"' : '' ?>">  <button class="selectedButton" >Basic Details</button></a> <hr class="new5" ></div>
                <?php if ($basic_details->id != 0 ) { ?>
                    <a href="index.php?r=property%2Faddressandlocation&id=<?= $basic_details->id; ?>" <?= ($property_image->scenario == "create") ? 'onclick="return showAlert()"' : '' ?>">   <button id="contactBtn" class="tablinks" >Address & Location</button></a>
                    <a href="index.php?r=property%2Flegaltax&id=<?= $basic_details->id; ?>" <?= ($property_image->scenario == "create") ? 'onclick="return showAlert()"' : '' ?>> <button class="tablinks" >Legal Tax</button></a>
                    <a href="index.php?r=property%2Fcontact&id=<?= $basic_details->id; ?>" <?= ($property_image->scenario == "create") ? 'onclick="return showAlert()"' : '' ?> ><button class="tablinks">Contact Details</button></a>
                    <?php if($show_terms_tab && $property->country_id && $property->legal_status_id) { ?>
                            <a href="index.php?r=property%2Ftermsandconditions&id=<?= $basic_details->id; ?>" <?= ($property_image->scenario == "create") ? 'onclick="return showAlert()"' : '' ?> ><button class="tablinks" >Terms & Conditions</button></a>
                    <?php } ?>
                <?php } ?>
            </div>

            <hr class="sidebar-divider">
            <?php $form = ActiveForm::begin(['id' => 'property_basic_details', 'enableClientValidation' => true,  'method' => 'post','action' => ['property/savepropertybasic']])?>
            <input type="hidden" value="<?= $basic_details->id ?>" name="property_id">

            <div class="row align-items-start">
                <div class="col-md-6 ">
                    <div class="form-group ">
                        <label class="Labelclass" style="display: block">Property Name<span style="color: red; font-size: 18px">*</span></label>
                        <?php echo $form->field($basic_details,'name')->textInput(['class' => 'inputLarge'])->label(false) ?>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="Labelclass" style="display: block">Property Type<span style="color: red; font-size: 18px">*</span></label>
                                <?php echo $form->field($basic_details, 'property_type_id')->dropDownList($property_types, ['class' => 'inputTextClass','style' => 'width: 200px','prompt' => 'Choose'])->label(false); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="Labelclass" style="display: block">Property Rating<span style="color: red; font-size: 18px">*</span></label>
                                <?php echo $form->field($basic_details, 'property_category_id')->dropDownList($property_categories, ['class' => 'inputTextClass','style' => 'width: 200px','prompt' => 'Choose'])->label(false); ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label class="Labelclass" style="display: block">Website</label>
                        <?php
                        if ($basic_details->website != null) {
                            echo $form->field($basic_details, 'website')->textInput(['class' => 'inputLarge'])->label(false);
                        } else {
                            echo $form->field($basic_details, 'website')->textInput(['class' => 'inputLarge', 'value' => 'https://'])->label(false);
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="Labelclass" style="display: block;" >Upload profile picture<span style="color: red; font-size: 18px">*</span></label>
                                <?php
                                if(!$basic_details->id) {
                                    echo "<div id='photoId' class='basic-details-image-border'><img id='imagePreview' src='images/property-picture.png' class='imagedisplay' ></div>";
                                } else {
                                    echo "<div id='photoId' class='basic-details-borderless-image'><img id='imagePreview' src='uploads/$basic_details->image' class='imagePreview'></div>";
                                }?>
                                <?= $form->field($property_image, 'proFile')->fileInput(['class' => 'btn btn-sm img uploadFile', 'accept' => "image/*", 'id'=>"uploadFile"])->label(false); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="Labelclass" style="display: block;" >Upload Logo<span style="color: red; font-size: 18px">*</span></label>
                                <?php
                                if(!$basic_details->id) {
                                    echo "<div id='logoId' class='basic-details-image-border'><img id='imagePreview-logo' src='images/property-logo.png' class='imagedisplay'></div>";
                                } else {
                                    echo "<div id='logoId' class='basic-details-borderless-image'><img id='imagePreview-logo' src='uploads/$basic_details->logo' class='imagePreviewLogo' ></div>";
                                }?>
                            <?= $form->field($property_image, 'logoFile')->fileInput(['class' => 'btn btn-sm img uploadFile', 'accept' => "image/*", 'id'=>"uploadFile-logo"])->label(false); ?>
                        </div>
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
    .basic-details-image-border {
        height: 200px;
        width:100%;
        border: 2px #808080 dashed;
        border-radius: 6px;
        position: relative
    }
    .basic-details-borderless-image {
        height: 200px;
        width:100%;
        /*border: 2px #808080 dashed;*/
        border-radius: 6px;
        position: relative
    }

    .imagePreview {
        max-width:100%;
        max-height:100%;
        width: 100%;
        /*height: auto;*/
        /*width: 200px;*/
        height: 100%;
        background-position: center center;
        background-size: cover;
        display: inline-block;
        /*border: 2px gray dashed;*/
    }
    .imagePreviewLogo {
        max-width:100%;
        max-height:100%;
        /*width: 240px;*/
        /*height: auto;*/
        width: 100%;
        height: 100%;
        background-position: center center;
        background-size: cover;
        display: inline-block;
    }

    .imagedisplay{
        width: 130px;
        height: 130px;
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
    $('#imagePreview').click(function(){

        $('#uploadFile').click();
    });
    $(function() {
        $("#uploadFile").on("change", function()
        {
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function(){ // set image data as background of div

                    $('#imagePreview').removeClass('default-preview');
                    document.getElementById("photoId").className = "basic-details-borderless-image";
                    document.getElementById("imagePreview").className = "imagePreview";

                    $("#imagePreview").attr("src", reader.result);
                }
            }
        });
    });



    $('#imagePreview-logo').click(function(){
        $('#uploadFile-logo').click();
    });
    $(function() {
        $("#uploadFile-logo").on("change", function()
        {
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function(){ // set image data as background of div
                    $('#imagePreview-logo').removeClass('default-preview');

                    document.getElementById("logoId").className = "basic-details-borderless-image";
                    document.getElementById("imagePreview-logo").className = "imagePreview";

                    $("#imagePreview-logo").attr("src", reader.result);
                }
            }
        });
    });

</script>
