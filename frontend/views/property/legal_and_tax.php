<?php
use yii\bootstrap4\ActiveForm;
$this->registerJsFile('/js/client_requested_option/add_option.js');

?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#save_legal1').bind("click",function()
        {
            if($('#legaltaxdocumentation-gst_number').val().trim().length != 0 && $('#gst_image_is_there').val() != 1 ) {
                var imgVal = $('#uploadGst').val();
                if(imgVal == '')
                {
                    var field = $('#uploadGst');
                    let immediateSibling = field.next();
                    if (immediateSibling.hasClass('invalid-feedback')) {
                        immediateSibling.text("GST Image is required");
                        immediateSibling.show();
                    }

                    return false;
                }
            }

            return true;
        });
    });

    function showTermsAlert(){
        toastr.error("Complete all other forms to proceed!");
        return false;
    }
</script>

<div class="content">
    <div class="container-fluid" >
        <div class="card-title">
            <?= $property->name; ?>
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px;">
            <div class="tab" style="display: flex;flex-direction: row;">
                <a href="index.php?r=property%2Fbasicdetails&id=<?= $legal_tax_documentation->id ?>"> <button class="tablinks" >
                        <?php if($property->name) { ?>
                            <i class="fas fa-check"></i>
                        <?php } else {?>
                            <i class="fas fa-times"></i>
                        <?php } ?>
                        Basic Details</button>
                </a>
                <a href="index.php?r=property%2Faddressandlocation&id=<?= $legal_tax_documentation->id ?>">   <button id="contactBtn" class="tablinks" >
                        <?php if($property->country_id) { ?>
                            <i class="fas fa-check"></i>
                        <?php } else {?>
                            <i class="fas fa-times"></i>
                        <?php } ?>
                        Address & Location</button>
                </a>
                <div style="display: inline">   <a href="index.php?r=property%2Flegaltax&id=<?= $legal_tax_documentation->id ?>">  <button class="selectedButton">
                            <?php if($property->legal_status_id) { ?>
                                <i class="fas fa-check"></i>
                            <?php } else {?>
                                <i class="fas fa-times"></i>
                            <?php } ?>
                            Legal & Tax</button></a> <hr class="new5" >
                </div>
                <a href="index.php?r=property%2Fcontact&id=<?= $legal_tax_documentation->id; ?>"><button class="tablinks" >
                        <?php if($property_contacts) { ?>
                            <i class="fas fa-check"></i>
                        <?php } else {?>
                            <i class="fas fa-times"></i>
                        <?php } ?>
                        Contact Details</button>
                </a>
                <?php if($show_terms_tab) { ?>
                    <a href="index.php?r=property%2Ftermsandconditions&id=<?= $legal_tax_documentation->id ?>" <?= ( ($property->country_id && $property->legal_status_id && $property_contacts) != 1 ) ? 'onclick="return showTermsAlert()"' : '' ?> ><button class="tablinks" >
                            <?php if($property->terms_and_conditons1) { ?>
                                <i class="fas fa-check"></i>
                            <?php } else {?>
                                <i class="fas fa-times"></i>
                            <?php } ?>
                            Terms & Conditions</button>
                    </a>
                <?php } ?>

            </div>
            <hr class="sidebar-divider">
            <?php $form = ActiveForm::begin(['id' => 'address_location','enableClientValidation' => true, 'method' => 'post','action' => ['property/savelegaltax']]) ?>
            <?= $form->field($legal_tax_documentation, 'id')->hiddenInput()->label(false); ?>
            <input type="hidden" id="gst_image_is_there" name="gst_image_is_there" value="<?=  $gst_image_is_there; ?>" >

            <div class="row align-items-start">
                <div class="col-md-6 ">
                    <div class="form-group ">
                        <label class="Labelclass" style="width: 444px">Legal Status<span style="color: red; font-size: 18px">*</span>
                            <?php if($legal_tax_documentation->legal_status_id) { ?>
                                <a onclick="edit_request('<?php echo $legal_status_id;?>', '<?php echo $legal_tax_documentation->id;?>')" href="#" data-toggle="tooltip" title="Add property type" style="float: right"><img class="margin-left-right-spacing dropbtn-edit action-icon t" src="images/edit-details.svg" style="width: 15px" data-toggle="tooltip" title="" data-original-title="Edit"></a>
                            <?php } else { ?>
                                <a onclick="add_option('<?php echo $legal_status_id;?>')" href="#" data-toggle="tooltip" title="Add legal status" style="float: right"><i class="fa fa-plus text-primary "></i></a>
                            <?php } ?>
                        </label>
                        <?php echo $form->field($legal_tax_documentation, 'legal_status_id')->dropDownList($legal_status,['class' => 'inputLarge', 'prompt' => 'Choose'])->label(false) ?>
                    </div>
                    <div class="form-group">
                        <label class="Labelclass" style="width: 444px">Pan Number<span style="color: red; font-size: 18px">*</span>
                            <?php if($legal_tax_documentation->pan_number) { ?>
                                <a onclick="edit_request('<?php echo $pan_number;?>', '<?php echo $legal_tax_documentation->id;?>')" href="#" data-toggle="tooltip" title="Add property type" style="float: right"><img class="margin-left-right-spacing dropbtn-edit action-icon t" src="images/edit-details.svg" style="width: 15px" data-toggle="tooltip" title="" data-original-title="Edit"></a>
                            <?php } ?>
                        </label>
                        <?php echo $form->field($legal_tax_documentation,'pan_number')->textInput(['class' => 'inputLarge', 'placeholder' => 'For proprietorship, enter owner’s PAN'])->label(false) ?>
                    </div>
                    <div class="form-group">
                        <label class="Labelclass" style="display: block; width: 444px" >Business License Number<span style="color: red; font-size: 18px">*</span>
                            <?php if($legal_tax_documentation->business_licence_number) { ?>
                                <a onclick="edit_request('<?php echo $business_license_number;?>', '<?php echo $legal_tax_documentation->id;?>')" href="#" data-toggle="tooltip" title="Add property type" style="float: right"><img class="margin-left-right-spacing dropbtn-edit action-icon t" src="images/edit-details.svg" style="width: 15px" data-toggle="tooltip" title="" data-original-title="Edit"></a>
                            <?php } ?>
                        </label>
                        <?php echo $form->field($legal_tax_documentation,'business_licence_number')->textInput(['class' => 'inputLarge'])->label(false) ?>
                    </div>
                    <div class="form-group">
                        <label class="Labelclass">GST Number</label>
                        <?php echo $form->field($legal_tax_documentation,'gst_number')->textInput(['class' => 'inputLarge'])->label(false) ?>
                    </div>

                </div>
                <div class="col-md-6 ">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="Labelclass">Upload Pan Card<span style="color: red; font-size: 18px">*</span></label>
                            <?php
                            if(!$legal_tax_documentation->pan_image) {
                                echo "<div id='panId' class='image-border'><img id='panImage' src='images/pan.png' class='imagedisplay'></div>";
                            } else {
                                echo "<div id='panId' class='borderless-image'><img id='panImage' src='uploads/$legal_tax_documentation->pan_image' class='imagePreview'></div>";
                            }?>
                            <?= $form->field($legal_docs_images, 'pan_image')->fileInput(['class' => 'btn btn-sm img uploadFile', 'accept' => "image/*", 'id'=>"uploadPan"])->label(false); ?>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label class="Labelclass">Upload Business License<span style="color: red; font-size: 18px">*</span></label>
                            <?php
                            if(!$legal_tax_documentation->business_licence_image) {
                                echo "<div id='licenseId' class='image-border'><img id='licenseImage' src='images/license.png' class='imagedisplay'></div>";
                            } else {
                                echo "<div id='licenseId' class='borderless-image'><img id='licenseImage' src='uploads/$legal_tax_documentation->business_licence_image' class='imagePreview'></div>";
                            }?>

                            <?= $form->field($legal_docs_images, 'business_licence_image')->fileInput(['class' => 'btn btn-sm img uploadFile', 'accept' => "image/*", 'id'=>"uploadLicense"])->label(false); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="Labelclass">Upload GST Certificate</label>
                            <?php
                            if(!$legal_tax_documentation->gst_image) {
                                echo "<div id='gstId' class='image-border'><img id='gstImage' src='images/GST.png' class='imagedisplay'></div>";
                            } else {
                                echo "<div id='gstId' class='borderless-image'><img id='gstImage' src='uploads/$legal_tax_documentation->gst_image' class='imagePreview'></div>";
                            }?>

                            <?= $form->field($property_gst, 'gst_image')->fileInput(['class' => 'btn btn-sm img uploadFile', 'accept' => "image/*", 'id'=>"uploadGst"])->label(false); ?>
                        </div>

                    </div>

                </div>
            </div>
            <div class="row align-items-start">

                <div class="col-md-6 ">
                    <div class="form-group ">
                        <label class="Labelclass" style="display: block; width: 444px" >Bank Name<span style="color: red; font-size: 18px">*</span>
                            <?php if($legal_tax_documentation->bank_name) { ?>
                                <a onclick="edit_request('<?php echo $bank_name;?>', '<?php echo $legal_tax_documentation->id;?>')" href="#" data-toggle="tooltip" title="Add property type" style="float: right"><img class="margin-left-right-spacing dropbtn-edit action-icon t" src="images/edit-details.svg" style="width: 15px" data-toggle="tooltip" title="" data-original-title="Edit"></a>
                            <?php } ?>
                        </label>
                        <?php echo $form->field($legal_tax_documentation,'bank_name')->textInput(['class' => 'inputLarge'])->label(false) ?>
                    </div>
                    <div class="form-group ">
                        <label class="Labelclass" style="display: block; width: 444px" >Account Number<span style="color: red; font-size: 18px">*</span>
                            <?php if($legal_tax_documentation->bank_account_number) { ?>
                                <a onclick="edit_request('<?php echo $account_number;?>', '<?php echo $legal_tax_documentation->id;?>')" href="#" data-toggle="tooltip" title="Add property type" style="float: right"><img class="margin-left-right-spacing dropbtn-edit action-icon t" src="images/edit-details.svg" style="width: 15px" data-toggle="tooltip" title="" data-original-title="Edit"></a>
                            <?php } ?>
                        </label>
                        <?php echo $form->field($legal_tax_documentation,'bank_account_number')->textInput(['class' => 'inputLarge'])->label(false) ?>
                    </div>
                </div>


                <div class="col-md-6 ">
                    <div class="form-group ">
                        <label class="Labelclass" style="display: block; width: 444px" >Account Name<span style="color: red; font-size: 18px">*</span>
                            <?php if($legal_tax_documentation->bank_account_name) { ?>
                                <a onclick="edit_request('<?php echo $account_name;?>', '<?php echo $legal_tax_documentation->id;?>')" href="#" data-toggle="tooltip" title="Add property type" style="float: right"><img class="margin-left-right-spacing dropbtn-edit action-icon t" src="images/edit-details.svg" style="width: 15px" data-toggle="tooltip" title="" data-original-title="Edit"></a>
                            <?php } ?>
                        </label>
                        <?php echo $form->field($legal_tax_documentation,'bank_account_name')->textInput(['class' => 'inputLarge'])->label(false) ?>

                    </div>
                    <div class="form-group ">
                        <label class="Labelclass" style="display: block; width: 444px" >IFSC Code<span style="color: red; font-size: 18px">*</span>
                            <?php if($legal_tax_documentation->ifsc_code) { ?>
                                <a onclick="edit_request('<?php echo $ifsc_code;?>', '<?php echo $legal_tax_documentation->id;?>')" href="#" data-toggle="tooltip" title="Add property type" style="float: right"><img class="margin-left-right-spacing dropbtn-edit action-icon t" src="images/edit-details.svg" style="width: 15px" data-toggle="tooltip" title="" data-original-title="Edit"></a>
                            <?php } ?>
                        </label>
                        <?php echo $form->field($legal_tax_documentation,'ifsc_code')->textInput(['class' => 'inputLarge'])->label(false) ?>
                    </div>
                </div>

            </div>
            <div style="display: block;margin-right: 35px; margin-left: 10px">
                <BUTTON type="submit" class="buttonSave" style="width: 85px; border-radius: 5px" id="save_legal"> Save </BUTTON>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

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

                    $("#panImage").attr("src", reader.result);
                    document.getElementById("panId").className = "borderless-image";
                    document.getElementById("panImage").className = "imagePreview";
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
                    document.getElementById("licenseId").className = "borderless-image";
                    document.getElementById("licenseImage").className = "imagePreview";
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

                    document.getElementById("gstId").className = "borderless-image";
                    document.getElementById("gstImage").className = "imagePreview";
                    $("#gstImage").attr("src", reader.result);
                }
            }
        });
    });


</script>



