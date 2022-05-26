<?php

use frontend\assets\CommonAsset;
use frontend\assets\DateRangePickerAsset;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
frontend\assets\CommonAsset::register($this);
frontend\assets\DateRangePickerAsset::register($this);

$this->registerJsFile('/js/enquiry/index.js');
?>

<div class="content">
    <div class="tab-accordion">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link text-white" href="index.php?r=enquiry%2Fbasicdetails&id=<?= $enquiry->id ?>">Basic Details</a>
            </li>
            <li class="nav-item active" role="presentation">
                <a id="defaultOpen" class="nav-link active"> Contact Details </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-white" href="index.php?r=enquiry%2Fguestcount&id=<?= $enquiry->id ?>">Guest Count</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-white" href="index.php?r=enquiry%2Faccommodation&id=<?= $enquiry->id ?>">Accommodation</a>
            </li>
        </ul>
    </div>
</div>

<div class="tab-content">
    <?php $form = ActiveForm::begin(['id' => 'operational_form','enableClientValidation' => true, 'method' => 'post','action' => ['enquiry/savecontactdetails']]) ?>
    <input type="hidden" id="enquiry_id" name="enquiry_id" value=<?php echo  $enquiry->id; ?> ?>

    <div class="tab-pane fade active show">
        <div class="col-md-6">
            <?php echo $form->field($enquiry, 'email1')->textInput(['class' => 'form-control form-control-sm shadow']) ?>
            <?php echo $form->field($enquiry, 'email2')->textInput(['class' => 'form-control form-control-sm shadow']) ?>
            <?php echo $form->field($enquiry, 'contact1')->textInput(['class' => 'form-control form-control-sm shadow']) ?>
            <?php echo $form->field($enquiry, 'contact2')->textInput(['class' => 'form-control form-control-sm shadow']) ?>            
            <button type="submit" id="save_enquiry_contact_details1" style="float: right; ">Save</button>
        </div>

    </div>
    <?php ActiveForm::end(); ?>
</div>