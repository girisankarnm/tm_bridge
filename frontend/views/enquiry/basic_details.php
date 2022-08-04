<?php
use yii\bootstrap4\ActiveForm;
//frontend\assets\CommonAsset::register($this);
frontend\assets\DatePickerAsset::register($this);
$this->registerJsFile('/js/enquiry/basic_details.js');
?>
<script>
    $(document).ready(function() { 
        
        var startDay = new Date();
        startDay.setDate(startDay.getDate() + 1 );

        var endDay = new Date();
        endDay.setDate(endDay.getDate() + 450);

        $("#basicdetails-tour_start_date").datepicker({
        format: "d MM yyyy",        
        startDate: startDay,
        autoclose: true,       
        }).on("changeDate", function (e) 
        { }
        );
    });
</script>

<link rel="stylesheet" type="text/css" href="/css/tour-min-1.css" />
<div class="content">
    <!-- Begin Page Content -->
    <div class="container-fluid" >
        <div class="card-title">
            Enquiry
        </div>
        <div class="tariffBorder" style="margin-top: 20px;">
        <div class="tab" style="display: flex;flex-direction: row;">
            <div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/enquiry/basicdetails', 'id' => $basic_details->id]) ?>">  <button class="selectedButton" >Basic Details</button></a> <hr class="new5" >
            </div>
            <a href="<?= \yii\helpers\Url::to(['/enquiry/contactdetails', 'id' => $basic_details->id]) ?>">   <button id="contactBtn" class="tablinks" >Contact Details</button></a>
            <a href="<?= \yii\helpers\Url::to(['/enquiry/guestcount', 'id' => $basic_details->id]) ?>"> <button class="tablinks">Guest Count</button></a>
            <a href="<?= \yii\helpers\Url::to(['/enquiry/accommodation', 'id' => $basic_details->id]) ?>"><button class="tablinks" >Accommodation</button></a>
        </div>
        <hr class="sidebar-divider">
        <?php $form = ActiveForm::begin(['id' => 'enquiry_basic_details','enableClientValidation' => true, 'method' => 'post','action' => ['enquiry/savebasicdetails']]) ?>
        <?= $form->field($basic_details, 'id')->hiddenInput()->label(false); ?>
        <input type="hidden" value="<?= $basic_details->id ?>" name="enquiry_id">
        
        <div class="row" style="margin-left: 3px;margin-bottom: 8px;">
            <div style="display: block;margin-right: 35px">
                <label class="Labelclass" style="display: block;margin-top: 22px" >Guest Name<span style="color: red; font-size: 18px">*</span></label>
                <?php echo $form->field($basic_details, 'guest_name')->textInput(['class' => 'inputTextClass' , 'placeholder' =>"Guest Name"])->label(false); ?>
            </div>
            <div style="display: block">
                <label class="Labelclass" style="display: block;margin-top: 20px" >Nationality<span style="color: red; font-size: 18px">*</span></label>
                <?php echo $form->field($basic_details, 'nationality_id')->dropDownList($countries,['class' => 'inputTextClass', 'prompt' => 'Choose'])->label(false
                ) ?>
            </div>
        </div>

        <div class="row" style="margin-left: 3px;margin-bottom: 12px;">
            <div style="display: block;margin-right: 35px">
                <label class="Labelclass" style="display: block;margin-top: 20px" >Start Date<span style="color: red; font-size: 18px">*</span></label>
                <?php echo $form->field($basic_details, 'tour_start_date')->textInput(['class' => 'inputTextClass'])->label(false); ?><br>
            </div>
            <div style="display: block;margin-right: 20px;" >
                <label class="Labelclass" style="display: block;margin-top: 20px" >Tour Duration<span style="color: red; font-size: 18px">*</span></label>
                
                <?php echo $form->field($basic_details, 'tour_duration')->textInput(['class' => 'inputTextClass'])->label(false); ?>

            </div>
            <div style="display: block">
                <label class="Labelclass" style="display: block;margin-top: 20px" >*End Date</label>
                <input type="text" id="tour_end_date" name="tour_end_date" class="inputTextClass"  readonly="true" value="<?= $tour_end_date ?>">
            </div>
        </div>

        <div class="row" style="margin-left: 3px;margin-bottom: 12px;">
            <div style="display: block;margin-right: 35px">
                <BUTTON type="text" class="buttonSave" > Save </BUTTON>
            </div>
        </div>
        <!-- /.container-fluid -->
        </div>
        <?php ActiveForm::end(); ?>

    </div>
</div>


