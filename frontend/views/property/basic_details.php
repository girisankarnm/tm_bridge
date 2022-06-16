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

            <input type="hidden" value="<?= $basic_details->id ?>" name="property_id">
            <div class="row" style="display: flex; flex-direction: row;">
                <div class="col-lg-6">
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
                <div class="col-lg-6 row">

                    <div class="col-lg-6" style="padding-right: 20px
">
                        <label class="Labelclass" style="display: block;" >*Property Photo</label>

                        <img id="imagePreview" src="uploads/<?php echo $basic_details->image; ?>" class="imagePreview <?php if(!$basic_details->id): ?> default-preview <?php endif; ?> " />
                        <?= $form->field($property_image, 'proFile')->fileInput(['class' => 'btn btn-sm img uploadFile', 'accept' => "image/*", 'id'=>"uploadFile"])->label(false); ?>

<!--                        <input id="uploadFile" type="file" name="property_photo" class="img uploadFile" />-->
                    </div>
                    <div class="col-lg-6" >
                        <label class="Labelclass" style="display: block;" >*Property Logo</label>

                        <img id="imagePreview-logo" src="uploads/<?php echo $basic_details->logo; ?>" class="imagePreviewLogo <?php if(!$basic_details->id): ?> default-preview <?php endif; ?>"  />

<!--                        <input id="uploadFile-logo" type="file" name="property_logo" class="img uploadFile" />-->
                        <?= $form->field($property_image, 'logoFile')->fileInput(['class' => 'btn btn-sm img uploadFile', 'accept' => "image/*", 'id'=>"uploadFile-logo"])->label(false); ?>

                    </div>




                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<style>
    .imagePreview {
        width: 200px;
        height: 200px;
        background-position: center center;
        background-size: cover;
        /*-webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);*/
        display: inline-block;
        background-image: url('http://via.placeholder.com/350x150');
        /*border: 2px gray dashed;*/
    }
    .imagePreviewLogo {
        width: 240px;
        height: 200px;
        background-position: center center;
        background-size: cover;
        /*-webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);*/
        display: inline-block;
        background-image: url('http://via.placeholder.com/350x150');
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
                    $("#imagePreview").css("background-image", "url("+this.result+")");
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
                    $("#imagePreview-logo").css("background-image", "url("+this.result+")");
                }
            }
        });
    });

</script>
