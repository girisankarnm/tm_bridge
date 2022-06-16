<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
frontend\assets\CommonAsset::register($this);
frontend\assets\DatePickerAsset::register($this);
use Carbon\Carbon;
?>
<style>
    .datepicker {
    border-radius: 0;
    padding: 0;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 10px;
}
</style>
<script>
    $(document).ready(function() { 
        
        var startDay = new Date();
        startDay.setDate(startDay.getDate() + 1 );

        var endDay = new Date();
        endDay.setDate(endDay.getDate() + 450);

        $("#daterange-from_date").datepicker({
        format: "d MM yyyy",        
        startDate: startDay,
        autoclose: true,       
        }).on("changeDate", function (e) 
        {            
            var startdate = $("#daterange-from_date").val();
            $("#daterange-to_date").datepicker('setStartDate', startdate);
        }
        );

        $("#daterange-to_date").datepicker({
        format: "d MM yyyy",
        endDate: endDay,
        autoclose: true,
        }).on("changeDate", function (e) 
        {            
            //TODO: validations
        }
        );

        //$('#daterange-from_date').datepicker('setDate', startDay);
        //startDay.setDate(startDay.getDate() + 5 );
        //$('#daterange-to_date').datepicker('setDate', startDay);

    });
</script>

<div class="$content">
    <div class="container-fluid" style="">
        <div class="card-title">
            Tariff Wizard
        </div>

        <div class="tariffBorder1" style="line-height: 0px; height:80px;">
            <div style="display: inline">
                <img style="width: 34px;height: 34px" src="images/building1.png" alt="Matrix">
                <span style="font-size: 20px;padding-top:  4px;color: black;font-weight: 700;inline-size: 1px">
                <?= $property->name ?>  <i style="font-size: 13px;color: gold;padding-left: 4px" class="fa fa-star" aria-hidden="true"></i>
    <i style="font-size: 13px;color: gold;padding-left: 2px" class="fa fa-star" aria-hidden="true"></i>
    <i style="font-size: 13px;color: gold;padding-left: 2px" class="fa fa-star" aria-hidden="true"></i>
<br>
  <div style="display: inline">  <small  class="smallclass"><i style="font-size: 10px;color: red;top: 0px" class="fa fa-map-marker" aria-hidden="true"></i><?= $property->location->name?>, <?= $property->destination->name?>, <?= $property->country->name?></small>
</span></div>
        </div>
    </div>
    
    <div class="row" >
        <div class="col-8" style="display: inline;margin-top: 12px;">
            <span class="commonTitleMother">Enter Mother Date Range</span>
        </div>
        <div class="col-4" style="float: right;margin-top: 12px;" > <span class="commonTitleMother2"> Added Mother Dates </span>  </div>        
    </div>
    
    <?php $form = ActiveForm::begin(['id' => 'tariff_step1','enableClientValidation' => true,'method' => 'post','action' => ['tariff/addmotherdate', 'id'=> $date_range->property_id]]) ?>
    <?= $form->field($date_range, 'property_id')->hiddenInput()->label(false); ?>
    <?= $form->field($date_range, 'parent')->hiddenInput()->label(false); ?>
    <?= $form->field($date_range, 'id')->hiddenInput()->label(false); ?>

    <div class="row">        
        <div class="col-8" style="height: 300px">
            <hr  class="hrMother">
            <div class="row" style="margin-left: 3px;margin-bottom: 8px;">
                <div style="display: block;margin-right: 35px">
                    <label class="labeldateclass" style="display: block;margin-top: 20px" >*From Date</label>                    
                    <?= $form->field($date_range, 'from_date')->textInput(['class' => 'inputDate'])->label(false); ?>
                </div>
                <div style="display: block">
                    <label class="labeldateclass" style="display: block;margin-top: 20px" >*To Date</label>                    
                    <?= $form->field($date_range, 'to_date')->textInput(['class' => 'inputDate'])->label(false); ?>
                </div>
            </div>
            <div class="row" style="margin-left: 4px;margin-bottom: 12px;margin-left: 28px">
                <div style="display: block;margin-right: 35px;">
                    <?= \yii\bootstrap4\Html::submitButton('Save & Proceed', ['class' => 'buttonSave savebuttonMother']); ?>
                    <?= Html::a('Next', ['tariff/step3', 'id'=> $property->id, 'mother_id' => $date_range->id],  ['class'=>'buttonSave savebuttonMother']) ?>                    
                </div>
            </div>
        </div>

        <div class="col-4" >
            <div class="row" style="height: 350px;  overflow-y: scroll;scrollbar-width: 20px;">
                <?php 
                $i = 1;
                foreach ($mother_ranges as $range) { ?>
                <div class="flex-container flex-container2" style="justify-content: right">
                    <div><i style="background-color: white;color: red;font-size: 28px;margin-right: 5px" class="fa fa-check-circle w3-large" aria-hidden="true"></i></div>
                    <div style=" flex-direction: column-reverse;">
                        <div><h6 style="padding-top: 7px;margin-right: 8px">From Date</h6></div>
                        <div><h6 style="padding-top: 0px;margin-right: 8px;    font-size: 10px; line-height: 0;"><?= Carbon::parse($range->from_date)->format('d M Y');  ?>   </h6></div>

                    </div>
                    <div style=" flex-direction: column-reverse;">
                        <div><h6 style="padding-top: 7px;margin-right: 8px"><hr class="new1"> </h6></div>

                    </div>

                    <div style=" flex-direction: column-reverse;">
                        <div><h6 style="padding-top: 7px;margin-right: 8px"> To Date </h6></div>
                        <div><h6 style="padding-top: 0px;margin-right: 8px;    font-size: 10px; line-height: 0;"> <?= Carbon::parse($range->to_date)->format('d M Y'); ?> </h6></div>
                    </div>
                </div>
                <hr class="new2" >
                <?php } ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>