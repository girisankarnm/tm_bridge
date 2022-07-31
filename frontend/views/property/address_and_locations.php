<?php
use yii\bootstrap4\ActiveForm;
$this->registerJsFile('/js/property/address_and_locations/index.js');
$this->registerJsFile('/js/client_requested_option/add_option.js');
?>
<script>
function showAlert(){
        toastr.error("Complete all other forms to proceed");
        return false;
    }

</script>

<div class="content">
    <div class="container-fluid">
        <div class="card-title">
            <span style="font: bold"><?= $property->name; ?></span>
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 20px;">

            <div class="tab">
                <a href="index.php?r=property%2Fbasicdetails&id=<?= $address_location->id ?>"> <button class="tablinks btnunder" >
                        <?php if($property->name) { ?>
                            <i class="fas fa-check"></i>
                        <?php } else {?>
                            <i class="fas fa-times"></i>
                        <?php } ?>
                        Basic Details</button>
                </a>
                <div style="display: inline">   <a href="index.php?r=property%2Faddressandlocation&id=<?= $address_location->id ?>">  <button class="selectedButton" style="width: 150px">
                            <?php if($property->country_id) { ?>
                                <i class="fas fa-check"></i>
                            <?php } else {?>
                                <i class="fas fa-times"></i>
                            <?php } ?>
                            Address & Location</button></a> <hr class="new5" style="width: 150px">
                </div>
                <a href="index.php?r=property%2Flegaltax&id=<?= $address_location->id ?>"> <button class="tablinks">
                        <?php if($property->legal_status_id) { ?>
                            <i class="fas fa-check"></i>
                        <?php } else {?>
                            <i class="fas fa-times"></i>
                        <?php } ?>
                        Legal Tax</button>
                </a>
                <a href="index.php?r=property%2Fcontact&id=<?= $address_location->id; ?>"><button class="tablinks">
                        <?php if($property_contacts) { ?>
                            <i class="fas fa-check"></i>
                        <?php } else {?>
                            <i class="fas fa-times"></i>
                        <?php } ?>
                        Contact Details</button>
                </a>
                <?php if($show_terms_tab) { ?>
                        <a href="index.php?r=property%2Ftermsandconditions&id=<?= $address_location->id ?>" <?= ( ($property->country_id && $property->legal_status_id && $property_contacts) != 1 ) ? 'onclick="return showAlert()"' : '' ?> ><button class="tablinks" >
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
            <?php $form = ActiveForm::begin(['id' => 'address_location','enableClientValidation' => true, 'method' => 'post','action' => ['property/savepropertyaddresslocation']]) ?>
            <?= $form->field($address_location, 'id')->hiddenInput()->label(false); ?>

            <div class="row">
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block; width: 220px" >Country<span style="color: red; font-size: 18px">*</span></label>
                    <?php echo $form->field($address_location,'country_id')->dropDownList($countries,['class' => 'inputTextClass address_select2 country_id', 'prompt' => 'Select Country'])->label(false) ?>

                </div>
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block; width: 220px" >Location<span style="color: red; font-size: 18px">*</span>
                        <?php if($address_location->location_id ) { ?>
                            <a onclick="edit_request('<?php echo $location;?>', '<?php echo $address_location->id;?>')" href="#" data-toggle="tooltip" title="Add property type" style="float: right"><img class="margin-left-right-spacing dropbtn-edit action-icon t" src="images/edit-details.svg" style="width: 15px" data-toggle="tooltip" title="" data-original-title="Edit"></a>
                        <?php } else { ?>
                        <a onclick="add_option('<?php echo $location;?>')" href="#" data-toggle="tooltip" title="Add location" style="float: right"><i class="fa fa-plus text-primary "></i></a>
                        <?php } ?>
                    </label>
                    <?php echo $form->field($address_location,'location_id')->dropDownList($locations,['class' => 'inputTextClass address_select2 location_id', 'prompt' => 'Select Location'])->label(false) ?>
                </div>
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block; width: 220px" >Destination<span style="color: red; font-size: 18px">*</span>
                        <?php if($address_location->destination_id ) { ?>
                            <a onclick="edit_request('<?php echo $destination;?>', '<?php echo $address_location->id;?>')" href="#" data-toggle="tooltip" title="Add property type" style="float: right"><img class="margin-left-right-spacing dropbtn-edit action-icon t" src="images/edit-details.svg" style="width: 15px" data-toggle="tooltip" title="" data-original-title="Edit"></a>
                        <?php } else { ?>
                        <a onclick="add_option('<?php echo $destination;?>')" href="#" data-toggle="tooltip" title="Add destination" style="float: right"><i class="fa fa-plus text-primary "></i></a>
                        <?php } ?>
                    </label>
                    <?php echo $form->field($address_location,'destination_id')->dropDownList($destinations,['class' => 'inputTextClass address_select2 destination_id', 'prompt' => 'Select Destination'])->label(false) ?>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block" >Address<span style="color: red; font-size: 18px">*</span></label>
                    <?php echo $form->field($address_location,'address')->textarea(['rows' => '5', 'class' =>'inputTextArea','placeholder' => 'Enter official address'])->label(false) ?>
                </div>
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block; width: 220px" >Pin Code<span style="color: red; font-size: 18px">*</span></label>
                    <?php echo $form->field($address_location,'postal_code')->textInput(['class' => 'inputTextClass', ])->label(false) ?>
                </div>
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block; width: 220px" >Locality<span style="color: red; font-size: 18px">*</span>
                        <?php if($address_location->locality) { ?>
                            <a onclick="edit_request('<?php echo $locality;?>', '<?php echo $address_location->id;?>')" href="#" data-toggle="tooltip" title="Add property type" style="float: right"><img class="margin-left-right-spacing dropbtn-edit action-icon t" src="images/edit-details.svg" style="width: 15px" data-toggle="tooltip" title="" data-original-title="Edit"></a>
                        <?php } ?>
                    </label>
                    <?php echo $form->field($address_location,'locality')->textInput(['class' => 'inputTextClass', 'placeholder' => 'Locality of the business'])->label(false) ?>
                </div>
            </div>

            <div style="display: block;margin-right: 35px; margin-left: 10px; margin-top: 20px">
                <BUTTON type="text" class="buttonSave" style="width: 85px; border-radius: 5px"> Save </BUTTON>
            </div>
            <?php ActiveForm::end(); ?>
        </div>

    </div>
</div>









