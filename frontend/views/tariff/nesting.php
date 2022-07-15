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
        startDate: '<?= Carbon::parse($date_range->from_date)->format('d M Y'); ?>',
        endDate: '<?= Carbon::parse($date_range->to_date)->format('d M Y'); ?>',
        autoclose: true,       
        }).on("changeDate", function (e) 
        {            
            var startdate = $("#daterange-from_date").val();
            $("#daterange-to_date").datepicker('setStartDate', startdate);
        }
        );

        $("#daterange-to_date").datepicker({
        format: "d MM yyyy",
        startDate: '<?= Carbon::parse($date_range->from_date)->format('d M Y'); ?>',
        endDate: '<?= Carbon::parse($date_range->to_date)->format('d M Y'); ?>',
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
            <div id="mainHeding-location"style="height: 43px">
                <div > <img style="width: 34px;height: 34px" src="images/building1.png" alt="Matrix"></div>
                <div >
                    <div id="h-border-location"  >
                        <div  >
                          <span class="hotelHeading" > <?= $property->name ?> <img class="f-star" src="images/Star-1.svg" alt="Matrix">
                           <img class="f-star" style="padding-left: 2px"  src="images/Star-1.svg" alt="Matrix">
                           <img  class="f-star" style="padding-left: 2px" src="images/Star-1.svg" alt="Matrix">
                           </span>
                        </div>
                        <div>   <small  class="smallFonts fontsize-location"><i  class="fa fa-map-marker locatiospace" aria-hidden="true"></i><?= $property->location->name?>, <?= $property->destination->name?>, <?= $property->country->name?></small>
                            </span></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <div class="row" >
        <div class="col-8" style="display: inline;margin-top: 12px;">
            <span class="commonTitleMother">Enter date range under <?= Carbon::parse($mother_range->from_date)->format('d M Y'); ?> - <?= Carbon::parse($mother_range->to_date)->format('d M Y'); ?></span>
        </div>
        <div class="col-4" style="float: right;margin-top: 12px;" > <span class="commonTitleMother2"> Already defined nested dates </span>  </div>        
    </div>
    
    <?php $form = ActiveForm::begin(['id' => 'form_nesting','enableClientValidation' => true,'method' => 'post','action' => ['tariff/savenesting']]) ?>
    <?= $form->field($date_range, 'property_id')->hiddenInput()->label(false); ?>
    <?= $form->field($date_range, 'parent')->hiddenInput()->label(false); ?>
    

    <input type="hidden" name="mother_range_id" value="<?= $mother_range->id; ?>">
      
      <input type="hidden" name="mother_range_from_date" value="<?= $mother_range->from_date; ?>">
      <input type="hidden" name="mother_range_to_date" value="<?= $mother_range->to_date; ?>">
      <input type="hidden" name="tariff" value="<?= $tariff; ?>">


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
                </div>
            </div>
        </div>

        <div class="col-4" >
            <div class="row" >
                <div class=" scroll-css">
                    <?php
                    $i = 1;
                    foreach ($defined_ranges as $range) { ?>
                        <div id="mainmotherdate" class="<?php if($i != 1):?>margin-top-100px <?php endif; ?>" >
                            <div  style="margin-top: 8px;;text-align: center">
                                <svg width="37" height="36" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="21.5893" cy="21.0307" r="17.2748" transform="rotate(-172.902 21.5893 21.0307)" stroke="#009721" stroke-width="3"/>
                                    <path d="M14.875 21.5339L19.6822 26.3413L30.3058 15.7178" stroke="#009721" stroke-width="3" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div style="margin-top: 8px; ">
                                <span class="dateform">From Date</span>
                                <!--                    <div style=" flex-wrap: wrap">-->
                                <div ><h6 class="motherdaterange-H6 h7class  smallFonts" > <?= Carbon::parse($range->from_date)->format('d M Y'); ?> </h6></div>
                                <!--                    </div>-->
                            </div>
                            <div style="margin-top: 4px"><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6>
                            </div>
                            <div style="margin-top: 8px;">  <span class="dateform">To Date</span>
                                <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class  smallFonts" ><?= Carbon::parse($range->to_date)->format('d M Y'); ?>   </h6></div>
                            </div>
                            <div><h6  class="motherdaterange-H6  smallFonts" style="padding-top: 0px; font-size: 10px; line-height: 0;"><img s src="images/user-icon.svg" style="color: #545b62;margin-left: 4px;margin-right: 1px" aria-hidden="true"></img> <?= Yii::$app->user->identity->first_name ?> <img s src="images/callender-icon.svg" style="color: #545b62;margin-left: 4px;margin-right: 1px" aria-hidden="true"></img> december 25 2022
                                    <img s src="images/ticksuccess.svg" style="color: #545b62;margin-left: 4px;margin-right: 1px" aria-hidden="true"></img>
                                    <span class="publishform"> active </span><span class="publishform">  </span> </h6>
                            </div>
                            <div>  <hr class="new2" > </div>
                        </div>
                        <?php
                        $i++;
                    } ?>

                </div>
            </div>

        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>