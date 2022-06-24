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

                    <?= Html::a('Next', ['tariff/step3', 'id'=> $property->id, 'mother_id' => $date_range->id],  ['class'=>'buttonSave savebuttonMother nextbtn']); ?>
                </div>
            </div>
        </div>

        <div class="col-4 motherdateScroll"  >
            <div class="row" style="height: 180px; ">
                <?php 
                $i = 1;
                foreach ($mother_ranges as $range) { ?>

                <div class="row margin30">
                    <div id="main"  >
                        <div class="margintopcls" style="background-color: #ffffff;text-align: center">
                            <svg style="margin-left: 3px" width="37" height="36" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="21.5893" cy="21.0307" r="17.2748" transform="rotate(-172.902 21.5893 21.0307)" stroke="#009721" stroke-width="3"/>
                                <path d="M14.875 21.5339L19.6822 26.3413L30.3058 15.7178" stroke="#009721" stroke-width="3" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="margintopcls" >
                            <span class="dateform">From Date</span>
                            <!--                    <div style=" flex-wrap: wrap">-->
                            <div ><h6 class="motherdaterange-H6 h7class" > <?= Carbon::parse($range->from_date)->format('d M Y'); ?> </h6></div>
                            <div> </div>
                            <div style=""><h6 class="motherdaterange-H6 h7class" >22/05/2022 </h6></div>
                        </div>
                        <div style="margin-top: 4px"><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6>
                        </div>
                        <div class="margintopcls" >  <span class="dateform">From Date</span>
                            <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class" > <?= Carbon::parse($range->to_date)->format('d M Y'); ?> </h6></div>
                            <div style="width: 150px"><h6 class="motherdaterange-H6 h7class" ><img s src="images/user-icon.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img>jhone

                                    <svg style="margin-right: 4px;" width="12" height="8" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="21.5893" cy="21.0307" r="17.2748" transform="rotate(-172.902 21.5893 21.0307)" stroke="#009721" stroke-width="3"/>
                                        <path d="M14.875 21.5339L19.6822 26.3413L30.3058 15.7178" stroke="#009721" stroke-width="3" stroke-linecap="round"/>
                                    </svg><span style="color: red">active</span>
                                </h6>
                            </div>
                        </div>

                        <div style="flex-basis: 100%"> <hr class="new2" ></div>


                    </div>
                </div>

                <div class="row margin30">
                    <div id="main"  >
                        <div class="margintopcls" style="background-color: #ffffff;text-align: center">
                            <svg style="margin-left: 3px" width="37" height="36" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="21.5893" cy="21.0307" r="17.2748" transform="rotate(-172.902 21.5893 21.0307)" stroke="#009721" stroke-width="3"/>
                                <path d="M14.875 21.5339L19.6822 26.3413L30.3058 15.7178" stroke="#009721" stroke-width="3" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="margintopcls" >
                            <span class="dateform">From Date</span>
                            <!--                    <div style=" flex-wrap: wrap">-->
                            <div ><h6 class="motherdaterange-H6 h7class" > <?= Carbon::parse($range->from_date)->format('d M Y'); ?> </h6></div>
                            <div> </div>
                            <div style=""><h6 class="motherdaterange-H6 h7class" >22/05/2022 </h6></div>
                        </div>
                        <div style="margin-top: 4px"><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6>
                        </div>
                        <div class="margintopcls" >  <span class="dateform">From Date</span>
                            <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class" > <?= Carbon::parse($range->to_date)->format('d M Y'); ?> </h6></div>
                            <div style="width: 150px"><h6 class="motherdaterange-H6 h7class" ><i class="fa fa-user" style="color: #545b62;margin-right: 4px" aria-hidden="true"></i>jhone

                                    <svg style="margin-right: 4px;" width="12" height="8" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="21.5893" cy="21.0307" r="17.2748" transform="rotate(-172.902 21.5893 21.0307)" stroke="#009721" stroke-width="3"/>
                                        <path d="M14.875 21.5339L19.6822 26.3413L30.3058 15.7178" stroke="#009721" stroke-width="3" stroke-linecap="round"/>
                                    </svg><span style="color: red">active</span>
                                </h6>
                            </div>
                        </div>

                        <div style="flex-basis: 100%"> <hr class="new2" ></div>


                    </div>
                </div>

                <div class="row margin30">
                    <div id="main"  >
                        <div class="margintopcls" style="background-color: #ffffff;text-align: center">
                            <svg style="margin-left: 3px" width="37" height="36" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="21.5893" cy="21.0307" r="17.2748" transform="rotate(-172.902 21.5893 21.0307)" stroke="#009721" stroke-width="3"/>
                                <path d="M14.875 21.5339L19.6822 26.3413L30.3058 15.7178" stroke="#009721" stroke-width="3" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="margintopcls" >
                            <span class="dateform">From Date</span>
                            <!--                    <div style=" flex-wrap: wrap">-->
                            <div ><h6 class="motherdaterange-H6 h7class" > <?= Carbon::parse($range->from_date)->format('d M Y'); ?> </h6></div>
                            <div> </div>
                            <div style=""><h6 class="motherdaterange-H6 h7class" >22/05/2022 </h6></div>
                        </div>
                        <div style="margin-top: 4px"><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6>
                        </div>
                        <div class="margintopcls" >  <span class="dateform">From Date</span>
                            <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class" > <?= Carbon::parse($range->to_date)->format('d M Y'); ?> </h6></div>
                            <div style="width: 150px"><h6 class="motherdaterange-H6 h7class" ><i class="fa fa-user" style="color: #545b62;margin-right: 4px" aria-hidden="true"></i>jhone

                                    <svg style="margin-right: 4px;" width="12" height="8" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="21.5893" cy="21.0307" r="17.2748" transform="rotate(-172.902 21.5893 21.0307)" stroke="#009721" stroke-width="3"/>
                                        <path d="M14.875 21.5339L19.6822 26.3413L30.3058 15.7178" stroke="#009721" stroke-width="3" stroke-linecap="round"/>
                                    </svg><span style="color: red">active</span>
                                </h6>
                            </div>
                        </div>

                        <div style="flex-basis: 100%"> <hr class="new2" ></div>


                    </div>
                </div>

                <div class="row margin30">
                    <div id="main"  >
                        <div class="margintopcls" style="background-color: #ffffff;text-align: center">
                            <svg style="margin-left: 3px" width="37" height="36" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="21.5893" cy="21.0307" r="17.2748" transform="rotate(-172.902 21.5893 21.0307)" stroke="#009721" stroke-width="3"/>
                                <path d="M14.875 21.5339L19.6822 26.3413L30.3058 15.7178" stroke="#009721" stroke-width="3" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="margintopcls" >
                            <span class="dateform">From Date</span>
                            <!--                    <div style=" flex-wrap: wrap">-->
                            <div ><h6 class="motherdaterange-H6 h7class" > <?= Carbon::parse($range->from_date)->format('d M Y'); ?> </h6></div>
                            <div> </div>
                            <div style=""><h6 class="motherdaterange-H6 h7class" >22/05/2022 </h6></div>
                        </div>
                        <div style="margin-top: 4px"><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6>
                        </div>
                        <div class="margintopcls" >  <span class="dateform">From Date</span>
                            <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class" > <?= Carbon::parse($range->to_date)->format('d M Y'); ?> </h6></div>
                            <div style="width: 150px"><h6 class="motherdaterange-H6 h7class" ><i class="fa fa-user" style="color: #545b62;margin-right: 4px" aria-hidden="true"></i>jhone

                                    <svg style="margin-right: 4px;" width="12" height="8" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="21.5893" cy="21.0307" r="17.2748" transform="rotate(-172.902 21.5893 21.0307)" stroke="#009721" stroke-width="3"/>
                                        <path d="M14.875 21.5339L19.6822 26.3413L30.3058 15.7178" stroke="#009721" stroke-width="3" stroke-linecap="round"/>
                                    </svg><span style="color: red">active</span>
                                </h6>
                            </div>
                        </div>

                        <div style="flex-basis: 100%"> <hr class="new2" ></div>


                    </div>
                </div>

                <div class="row margin30">
                    <div id="main"  >
                        <div class="margintopcls" style="background-color: #ffffff;text-align: center">
                            <svg style="margin-left: 3px" width="37" height="36" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="21.5893" cy="21.0307" r="17.2748" transform="rotate(-172.902 21.5893 21.0307)" stroke="#009721" stroke-width="3"/>
                                <path d="M14.875 21.5339L19.6822 26.3413L30.3058 15.7178" stroke="#009721" stroke-width="3" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="margintopcls" >
                            <span class="dateform">From Date</span>
                            <!--                    <div style=" flex-wrap: wrap">-->
                            <div ><h6 class="motherdaterange-H6 h7class" > <?= Carbon::parse($range->from_date)->format('d M Y'); ?> </h6></div>
                            <div> </div>
                            <div style=""><h6 class="motherdaterange-H6 h7class" >22/05/2022 </h6></div>
                        </div>
                        <div style="margin-top: 4px"><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6>
                        </div>
                        <div class="margintopcls" >  <span class="dateform">From Date</span>
                            <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class" > <?= Carbon::parse($range->to_date)->format('d M Y'); ?> </h6></div>
                            <div style="width: 150px"><h6 class="motherdaterange-H6 h7class" ><i class="fa fa-user" style="color: #545b62;margin-right: 4px" aria-hidden="true"></i>jhone

                                    <svg style="margin-right: 4px;" width="12" height="8" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="21.5893" cy="21.0307" r="17.2748" transform="rotate(-172.902 21.5893 21.0307)" stroke="#009721" stroke-width="3"/>
                                        <path d="M14.875 21.5339L19.6822 26.3413L30.3058 15.7178" stroke="#009721" stroke-width="3" stroke-linecap="round"/>
                                    </svg><span style="color: red">active</span>
                                </h6>
                            </div>
                        </div>

                        <div style="flex-basis: 100%"> <hr class="new2" ></div>


                    </div>
                </div>



                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>