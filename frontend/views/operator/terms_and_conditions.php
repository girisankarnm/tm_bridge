<?php

use yii\bootstrap4\ActiveForm;

?>
<div class="$content">
    <div class="container-fluid">
        <div class="card-title">
            <span style="font: bold">Operator Profile</span>
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px; height: 430px">
            <div class="tab">
                <a href="index.php?r=operator%2Fbasicdetails&id=<?= $terms->id ?>"> <button class="tablinks btnunder">
                        <?php if($operator->name) { ?>
                            <i class="fas fa-check"></i>
                        <?php } else {?>
                            <i class="fas fa-times"></i>
                        <?php } ?>
                        Basic Details</button>
                </a>
                <a href="index.php?r=operator%2Faddressandlocation&id=<?= $terms->id ?>"> <button class="tablinks btnunder">
                        <?php if($operator->country_id) { ?>
                            <i class="fas fa-check"></i>
                        <?php } else {?>
                            <i class="fas fa-times"></i>
                        <?php } ?>
                        Address & Location</button>
                </a>
                <a href="index.php?r=operator%2Flegaltax&id=<?= $terms->id ?>""> <button class="tablinks btnunder">
                    <?php if($operator->legal_status_id) { ?>
                        <i class="fas fa-check"></i>
                    <?php } else {?>
                        <i class="fas fa-times"></i>
                    <?php } ?>
                    Legal Tax</button>
                </a>
                <a  href="index.php?r=operator%2Fcontact&id=<?= $terms->id ?>"> <button class="tablinks btnunder">
                        <?php if($operator_contacts) { ?>
                            <i class="fas fa-check"></i>
                        <?php } else {?>
                            <i class="fas fa-times"></i>
                        <?php } ?>
                        Contact Details</button>
                </a>
                <div style="display: inline">   <a href="index.php?r=operator%2Ftermsandconditions&id=<?= $terms->id; ?>">  <button class="selectedButton" style="width: 150px">
                            <?php if($operator->terms_and_conditons) { ?>
                                <i class="fas fa-check"></i>
                            <?php } else {?>
                                <i class="fas fa-times"></i>
                            <?php } ?>
                            Terms & Conditions </button></a> <hr class="new5" style="width: 150px">
                </div>
            </div>
            <hr class="sidebar-divider">
            <?php $form = ActiveForm::begin(['id' => 'terms_form','enableClientValidation' => true, 'action' => ['operator/saveterms']]) ?>
            <?= $form->field($terms, 'id')->hiddenInput()->label(false); ?>

            <div class="row mt-1 ml-1 ">
                <div class="col-md-1">
                    <?php echo $form->field($terms,'terms_and_conditons')->checkbox(['class' => 'form-control form-control-sm'])->label(false) ?>
                </div>
                <div class="col-md-10">
                    <p>
                        I certify that I am engaged as Tour Operator.<br>
                        Note: T & C will be finalized later.
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









