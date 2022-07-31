<?php
use yii\bootstrap4\ActiveForm;
$this->registerJsFile('/js/common.js');
$this->registerJsFile('/js/client_requested_option/add_option.js');

?>
<script>
function showAlert(){        
        toastr.error("Save basic details to proceed!");
        return false;
}

function showTermsAlert(){        
    toastr.error("Complete all other forms to proceed!");
    return false;
}


</script>
<div class="content">
    <div class="container-fluid" style="background-color: white">
        <div class="card-title">
            <?= $basic_details->name == NULL ? "Basic details" : $basic_details->name; ?>
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px;">
            <div class="tab" style="display: flex;flex-direction: row;">
                <div style="display: inline">   
                <a  href="index.php?r=property%2Fbasicdetails&id=<?= $basic_details->id ?>" <?= ($property_image->scenario == "create") ? 'onclick="return showAlert()"' : '' ?>">  <button class="selectedButton" >
                        <?php if($property->name) { ?>
                            <i class="fas fa-check"></i>
                        <?php } else {?>
                            <i class="fas fa-times"></i>
                        <?php } ?>
                        Basic Details</button></a> <hr class="new5" >
                </div>
                <?php // if ($basic_details->id != 0 ) { ?>
                    <a href="index.php?r=property%2Faddressandlocation&id=<?= $basic_details->id; ?>" <?= ($property_image->scenario == "create") ? 'onclick="return showAlert()"' : '' ?>">   <button id="contactBtn" class="tablinks" >
                    <?php if($property->country_id) { ?>
                        <i class="fas fa-check"></i>
                    <?php } else {?>
                        <i class="fas fa-times"></i>
                    <?php } ?>
                    Address & Location</button></a>
                    <a href="index.php?r=property%2Flegaltax&id=<?= $basic_details->id; ?>" <?= ($property_image->scenario == "create") ? 'onclick="return showAlert()"' : '' ?>> <button class="tablinks" >
                            <?php if($property->legal_status_id) { ?>
                                <i class="fas fa-check"></i>
                            <?php } else {?>
                                <i class="fas fa-times"></i>
                            <?php } ?>
                            Legal Tax</button>
                    </a>
                    <a href="index.php?r=property%2Fcontact&id=<?= $basic_details->id; ?>" <?= ($property_image->scenario == "create") ? 'onclick="return showAlert()"' : '' ?> ><button class="tablinks">
                            <?php if($property_contacts) { ?>
                                <i class="fas fa-check"></i>
                            <?php } else {?>
                                <i class="fas fa-times"></i>
                            <?php } ?>
                            Contact Details</button>
                    </a>
                    <?php if($show_terms_tab ) { ?>
                            <a href="index.php?r=property%2Ftermsandconditions&id=<?= $basic_details->id; ?>" <?= ( ($property->country_id && $property->legal_status_id && $property_contacts) != 1 ) ? 'onclick="return showTermsAlert()"' : '' ?> ><button class="tablinks" >
                                    <?php if($property->terms_and_conditons1) { ?>
                                        <i class="fas fa-check"></i>
                                    <?php } else {?>
                                        <i class="fas fa-times"></i>
                                    <?php } ?>
                                    Terms & Conditions</button>
                            </a>
                    <?php } ?>
                <?php // } ?>
            </div>

            <hr class="sidebar-divider">
            <?php $form = ActiveForm::begin(['id' => 'property_basic_details', 'enableClientValidation' => true,  'method' => 'post','action' => ['property/savepropertybasic']])?>
            <input type="hidden" value="<?= $basic_details->id ?>" name="property_id">

            <div class="row align-items-start">
                <div class="col-md-6 ">
                    <div class="form-group ">
                        <label class="Labelclass" style="display: block; width: 440px">Property Name<span style="color: red; font-size: 18px">*</span>
                            <?php if($basic_details->id != 0 ) { ?>
                            <a onclick="edit_request('<?php echo $property_name->id;?>', '<?php echo $basic_details->id;?>')" href="#" data-toggle="tooltip" title="Add property type" style="float: right"><img class="margin-left-right-spacing dropbtn-edit action-icon t" src="images/edit-details.svg" style="width: 15px" data-toggle="tooltip" title="" data-original-title="Edit"></a>
                            <?php } ?>
                        </label>
                        <?php echo $form->field($basic_details,'name')->textInput(['class' => 'inputLarge', 'placeholder' => 'Registered name of property' ])->label(false) ?>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="Labelclass" style="display: block; width: 200px">Property Type<span style="color: red; font-size: 18px">*</span>
                                    <?php if($basic_details->id != 0 ) { ?>
                                        <a onclick="edit_request('<?php echo $type;?>', '<?php echo $basic_details->id;?>')" href="#" data-toggle="tooltip" title="Add property type" style="float: right"><img class="margin-left-right-spacing dropbtn-edit action-icon t" src="images/edit-details.svg" style="width: 15px" data-toggle="tooltip" title="" data-original-title="Edit"></a>
                                    <?php } else { ?>
                                    <a onclick="add_option('<?php echo $type;?>')" href="#" data-toggle="tooltip" title="Add property type" style="float: right"><i class="fa fa-plus text-primary "></i></a>
                                    <?php } ?>
                                </label>
                                <?php echo $form->field($basic_details, 'property_type_id')->dropDownList($property_types, ['class' => 'inputTextClass','style' => 'width: 200px','prompt' => 'Choose'])->label(false); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="Labelclass" style="display: block; width: 200px">Property Rating<span style="color: red; font-size: 18px">*</span>
                                    <?php if($basic_details->id != 0 ) { ?>
                                        <a onclick="edit_request('<?php echo $rating;?>', '<?php echo $basic_details->id;?>')" href="#" data-toggle="tooltip" title="Add property type" style="float: right"><img class="margin-left-right-spacing dropbtn-edit action-icon t" src="images/edit-details.svg" style="width: 15px" data-toggle="tooltip" title="" data-original-title="Edit"></a>
                                    <?php } else { ?>
                                    <a onclick="add_option('<?php echo $rating;?>')" href="#" data-toggle="tooltip" title="Add property rating" style="float: right"><i class="fa fa-plus text-primary "></i></a>
                                    <?php } ?>
                                </label>
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
