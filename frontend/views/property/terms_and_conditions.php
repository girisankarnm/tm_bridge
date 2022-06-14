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
                <a  href="index.php?r=property%2Fbasicdetails&id=<?= $terms->id ?>"> <button class="tablinks btnunder" >Basic Details</button></a>
                <a href="index.php?r=property%2Faddressandlocation&id=<?= $terms->id ?>"> <button class="tablinks btnunder">Address & Location</button></a>
                <a href="index.php?r=property%2Flegaltax&id=<?= $terms->id ?>"> <button class="tablinks btnunder">Legal Tax</button></a>
                <a  href="index.php?r=property%2Fcontact&id=<?= $terms->id; ?>"> <button class="tablinks btnunder">Contact Details</button></a>


                <div style="display: inline">   <a href="index.php?r=property%2Ftermsandconditions&id=<?= $terms->id; ?>">  <button class="selectedButton" >Terms & Conditions </button></a> <hr class="new5" >
                </div>
            </div>
            <hr class="sidebar-divider">
            <?php $form = ActiveForm::begin(['id' => 'terms_form','enableClientValidation' => true, 'action' => ['property/saveterms']]) ?>
            <?= $form->field($terms, 'id')->hiddenInput()->label(false); ?>

            <div class="row mt-1 ml-1 ">
                <div class="col-md-1">

                    <?php echo $form->field($terms,'terms_and_conditons1')->checkbox(['class' => 'form-control form-control-sm'])->label(false) ?>
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
                    <?php echo $form->field($terms,'terms_and_conditons2')->checkbox(['class' => 'form-control form-control-sm'])->label(false) ?>
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
                    <?php echo $form->field($terms,'terms_and_conditons3')->checkbox(['class' => 'form-control form-control-sm'])->label(false) ?>
                </div>
                <div class="col-md-10">
                    <p>
                        I certify that this is a legitimate accommodation business with all necessary licenses
                        and permits, which can be shown upon first request. Itinges Technologies reserves
                        the right to verify and investigate any details provided in this registration.
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









