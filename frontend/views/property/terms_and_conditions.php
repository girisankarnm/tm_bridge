<?php

use yii\bootstrap4\ActiveForm;

?>
<div class="$content">
    <div class="container-fluid">
        <div class="card-title">
            <span style="font: bold">Property</span>
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px;">
            <div class="tab">
                <a  href="index.php?r=property%2Fbasicdetails&id=<?= $terms->id ?>"> <button class="tablinks btnunder" >
                        <?php if($property->name) { ?>
                            <i class="fas fa-check"></i>
                        <?php } else {?>
                            <i class="fas fa-times"></i>
                        <?php } ?>
                        Basic Details</button>
                </a>
                <a href="index.php?r=property%2Faddressandlocation&id=<?= $terms->id ?>"> <button class="tablinks btnunder">
                        <?php if($property->country_id) { ?>
                            <i class="fas fa-check"></i>
                        <?php } else {?>
                            <i class="fas fa-times"></i>
                        <?php } ?>
                        Address & Location</button>
                </a>
                <a href="index.php?r=property%2Flegaltax&id=<?= $terms->id ?>"> <button class="tablinks btnunder">
                        <?php if($property->legal_status_id) { ?>
                            <i class="fas fa-check"></i>
                        <?php } else {?>
                            <i class="fas fa-times"></i>
                        <?php } ?>
                        Legal Tax</button>
                </a>
                <a  href="index.php?r=property%2Fcontact&id=<?= $terms->id; ?>"> <button class="tablinks btnunder">Contact Details</button></a>
                <div style="display: inline">   <a href="index.php?r=property%2Ftermsandconditions&id=<?= $terms->id; ?>">  <button class="selectedButton" style="width: 150px">
                            <?php if($property->terms_and_conditons1) { ?>
                                <i class="fas fa-check"></i>
                            <?php } else {?>
                                <i class="fas fa-times"></i>
                            <?php } ?>
                            Terms & Conditions </button></a> <hr class="new5" style="width: 150px">
                </div>
            </div>
            <hr class="sidebar-divider">
            <?php $form = ActiveForm::begin(['id' => 'terms_form','enableClientValidation' => true, 'action' => ['property/saveterms']]) ?>
            <?= $form->field($terms, 'id')->hiddenInput()->label(false); ?>

            <div class="row mt-1 ml-1 ">
                <div class="col-md-1">

                    <?php echo $form->field($terms,'terms_and_conditons1')->checkbox(['class' => 'form-control form-control-sm', 'required' =>true])->label(false) ?>
                </div>
                <div class="col-md-10">
                    <p>
                        I certify that this is a legitimate accommodation business with all necessary licenses
                        and permits, which can be shown upon first request. Itinges Technologies reserves
                        the right to verify and investigate any details provided in this registration.
                    </p>
                </div>
            </div>
            <div class="row ml-1 ">
                <div class="col-md-1">
                    <?php echo $form->field($terms,'terms_and_conditons2')->checkbox(['class' => 'form-control form-control-sm', 'required' =>true])->label(false) ?>
                </div>
                <div class="col-md-10">
                    <p>
                        I have read, accepted and agreed to the General Delivery terms and Privacy statement.
                    </p>
                </div>
            </div>
            <div class="row ml-1 ">
                <div class="col-md-1">
                    <?php echo $form->field($terms,'terms_and_conditons3')->checkbox(['class' => 'form-control form-control-sm', 'required' =>true])->label(false) ?>
                </div>
                <div class="col-md-10">
                    <p>
                        I understand that Itinges Technologies enables accommodations and tour operators to communicate through
                        Tour Matrix Pro and processes and processes communications in accordance with Itinges privacy statements
                        and General Delivery Terms. Itinges Technologies does not undertake any responsibility of financial
                        transaction between the property and & Tour Operators.
                    </p>
                </div>
            </div>



            <div class="row" style="margin-left: 3px;margin-bottom: 12px;">
                <div style="display: block;margin-right: 35px">
                    <BUTTON type="text" class="buttonSmall"> Save </BUTTON>
                </div>

            </div>
            <?php ActiveForm::end(); ?>
        </div>

    </div>
</div>









