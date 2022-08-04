<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use Carbon\Carbon;
use yii\helpers\ArrayHelper;

use frontend\models\tariff\RoomTariffWeekdayhike;
use frontend\models\tariff\roomTariffWeekdayhikeDays;
?>

<script>
function room_check_clicked(checkbox){
    if( $(checkbox).is(':checked')) {        
        $("#slab_div_"+checkbox.id).show(300);
    }
    else {
        $("#slab_div_"+checkbox.id).hide(300);        
    }    
}

function validateHikeDay() {
    var bHikedayDataValidation = true;
    var errorMessage = "If you opt for weekday hike, select a day and define rate";

    $("input[name='room_checked[]']").each(function(){        
        if($(this).is(":checked")) { 
            bHikedayDataValidation = false;            
            var name = "input[name='week_days_" + this.id + "[]'";           
            $(name).each(function(){
                if($(this).is(":checked")) { 
                     //at least one weekday selected
                    //console.log("Enter data for day: " + this.id);
                    
                    if( $("#weekday_room_rate_" + this.id).val() > 0 || 
                    $("#weekday_adult_with_extra_bed_" + this.id).val() > 0 ||
                    $("#weekday_child_with_extra_bed_" + this.id).val() > 0 ||
                    $("#weekday_child_sharing_bed_" + this.id).val() > 0 ||
                    $("#weekday_single_occupancy_" + this.id).val() > 0 
                    ) {                        
                        bHikedayDataValidation = true;
                    }
                    else {
                        errorMessage = "Define week day hike amount";
                        return false;
                    }
                }
            });
        }
        if( !bHikedayDataValidation )   {
            return false;
        }
    });

    if( !bHikedayDataValidation )
    {
        alert(errorMessage);
    }

    return bHikedayDataValidation;
}

function saveWeekdayHike() {
    if(validateHikeDay()) {
        $("#weekday_hike").submit();  
    }    
}
</script>

<div class="content">
    <div class="container-fluid" style="">
        <div class="card-title">Tariff Wizard: Weekday hike </div>
    </div>
    <div class="tariffBorder" style="margin-top: 20px;">
        <div style="margin-bottom: 30px;  ">
            <div  id="location-date-border-card">
                <div id="mainHeding-location-header"style="height: 43px;">
                    <div > <img style="width: 34px;height: 34px" src="images/building1.png" alt="Matrix"></div>
                    <div >
                        <div id="h-border-location-header"  >
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
                <div id="tariffheaderDate" style="justify-content: right;width: 36%;"  >
                    <div class="margintopcls" style="background-color: #ffffff;text-align: center">
                        <svg style="margin-left: 3px" width="37" height="36" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="21.5893" cy="21.0307" r="17.2748" transform="rotate(-172.902 21.5893 21.0307)" stroke="#009721" stroke-width="3"/>
                            <path d="M14.875 21.5339L19.6822 26.3413L30.3058 15.7178" stroke="#009721" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="margintopcls" >
                        <span class="dateform">From Date</span>
                        <!--                    <div style=" flex-wrap: wrap">-->
                        <div ><h6 class="motherdaterange-H6 h7class" ><?= Carbon::parse($date_range->from_date)->format('d M Y'); ?> </h6></div>

                    </div>
                    <div><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6>
                    </div>
                    <div class="margintopcls" >  <span class="dateform">To Date</span>
                        <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class" ><?= Carbon::parse($date_range->to_date)->format('d M Y'); ?> </h6></div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="sidebar-divider">

        <?php $form = ActiveForm::begin(['id' => 'weekday_hike','enableClientValidation' => true,'method' => 'post','action' => ['tariff/savehikedayrate', 'id'=> $date_range->property_id]]) ?>
        <?= $form->field($date_range, 'property_id')->hiddenInput()->label(false); ?>
        <?= $form->field($date_range, 'parent')->hiddenInput()->label(false); ?>
        <?= $form->field($date_range, 'id')->hiddenInput()->label(false); ?>
        <input type="hidden" name="tariff" value="<?= $tariff; ?>">

        <?php
            $i = 1;
            foreach ($rooms as $room) {

            $day_hike = RoomTariffWeekdayhike::find()
            ->where(['date_range_id' => $date_range->id])
            ->andWhere(['room_id' => $room->id])->one();

            $days = array();
            if($day_hike != NULL) {
                foreach ($day_hike->roomTariffSlabWeekdayhikes as $tariff_days) {
                    array_push($days, $tariff_days->day);
                }
            }            
        ?>
    <input type="hidden" name="room[]" value="<?= $room->id?>" />
                <div class="tab-accordion tab-accordiondaterate" >
                    <div class="tab-content " >
                        <div class="tab-pane fade active show">
                            <div class="accordion" id="accordionExample<?= $i ?>" >
                                <div class="card border-zero" >
                                    <h2 class="mb-0   accordianbg" >
                                    <button class="btn btn-block text-left  accordianstyle accordion-toggle btn-white-letter" type="button" onclick="functionchange(this);" data-toggle="collapse" data-target="#collapseOne<?= $i ?>" aria-expanded="false" aria-controls="collapseOne<?= $i ?>">
                                        <strong> <?= $i ?>. <?= $room->name ?> - (Day based) </strong>
                                        <div class="float-right">
                                            <i class="fas fa-angle-down rotate-icon"></i>
                                        </div>
                                    </button>
                                </h2>

                            <div id="collapseOne<?= $i ?>" class="collapse <?php if ($i==1): ?> show <?php endif; ?>" aria-labelledby="headingOne" data-parent="#accordionExample<?= $i ?>">
                            <div style="display: inline;margin-top: 4px;margin-left: 19px">
                                <input type="checkbox" class="material-checkbox" name="room_checked[]" id="room_<?= $room->id?>" value="<?= $room->id?>" <?= ($day_hike != NULL) ? "checked" : "" ?> onclick="room_check_clicked(this);">
                                <label  style="margin: 8px" >Room have week day hike rate during this date range </label>
                            </div>
                                <div class="row" style="margin-left: 15px; display: <?= ($day_hike != NULL) ? "block" : "none" ?>" id="slab_div_room_<?= $room->id?>">
                                        <table id="tariff-week-day-hiketable" class="table-weekday-hike" >
                                            <tr  class="thtableguestcount">
                                                <th class="column-table"> Weekday</th>
                                                <th class="column-table"> Hike Amount Room</th>
                                                <th class="column-table"> Adult with Extra Bed</th>
                                                <th class="column-table"> Child With Extra Bed</th>
                                                <th class="column-table"> Child Sharing Bed</th>
                                                <th class="column-table"> Single Occupancy</th>
                                            </tr>
                                            <?php
                                            $week_day_index = 0;
                                            $week_days = [
                                                'Sunday',
                                                'Monday',
                                                'Tuesday',
                                                'Wednesday',
                                                'Thursday',
                                                'Friday',
                                                'Saturday'
                                            ];
                                            
                                            $j = 0;
                                            foreach ($week_days as $week_day) {
                                                $tariff_slab = NULL;
                                                if( ArrayHelper::isIn($week_day_index, $days) ) {
                                                    $tariff_slab = isset($day_hike->roomTariffSlabWeekdayhikes[$j]) ? $day_hike->roomTariffSlabWeekdayhikes[$j] : NULL;
                                                    $j++;
                                                }
                                            ?>
                                                <tr>
                                                    <td class="text-align-left"><input id ='<?= $week_days[$week_day_index]."_room_".$room->id?>' class="material-checkbox text-align-left" type="checkbox" value="<?= $week_day_index ?>" style="margin-left: 4px" name="week_days_room_<?=$room->id?>[]" <?= ArrayHelper::isIn( $week_day_index , $days) ? "checked" : "" ?>  onclick="week_day_click(this);">
                                                    <label  style ="margin: 8px" ><?= $week_days[$week_day_index] ?> </label></td>
                                                    <td class="column-table"><input type="text" name="room_rate_<?=$room->id?>[]" id="weekday_room_rate_<?= $week_days[$week_day_index] ?>_room_<?=$room->id?>" class="inputTextClass enquiryTable" style="width: 100px;height: 33px;margin-top: 24px;" value="<?= isset($tariff_slab) ? $tariff_slab->room_rate : 0 ?>" /></td>
                                                    <td class="column-table"><input type="text" name="adult_with_extra_bed_<?=$room->id?>[]" id="weekday_adult_with_extra_bed_<?= $week_days[$week_day_index] ?>_room_<?=$room->id?>" style="width: 100px;height: 33px;margin-top: 24px;" class="inputTextClass enquiryTable" value="<?= isset($tariff_slab) ? $tariff_slab->adult_with_extra_bed : 0 ?>"/></td>
                                                    <td class="column-table"><input type="text" name="child_with_extra_bed_<?=$room->id?>[]" id="weekday_child_with_extra_bed_<?= $week_days[$week_day_index] ?>_room_<?=$room->id?>" style="width: 100px;height: 33px;margin-top: 24px;" class="inputTextClass enquiryTable" value="<?= isset($tariff_slab) ? $tariff_slab->child_with_extra_bed : 0 ?>"/></td>
                                                    <td class="column-table"><input type="text" name="child_sharing_bed_<?=$room->id?>[]" id="weekday_child_sharing_bed_<?= $week_days[$week_day_index] ?>_room_<?=$room->id?>" style="width: 100px;height: 33px;margin-top: 24px;" class="inputTextClass enquiryTable" value="<?= isset($tariff_slab) ? $tariff_slab->child_sharing_bed : 0 ?>" /></td>
                                                    <td class="column-table"><input type="text" name="single_occupancy_<?=$room->id?>[]" id="weekday_single_occupancy_<?= $week_days[$week_day_index] ?>_room_<?=$room->id?>" style="width: 100px;height: 33px;margin-top: 24px;" class="inputTextClass enquiryTable" value="<?= isset($tariff_slab) ? $tariff_slab->single_occupancy : 0 ?>" /></td>
                                                </tr>
                                            <?php 
                                                $week_day_index++;
                                            } ?>

                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>       

        <?php
        $i++;
        } ?>
        <div class="row" style="margin-left: 4px;margin-bottom: 12px;">
            <div style="display: block;margin-right: 35px">
                <!-- <BUTTON type="button" class="prevbutton" style="width: 80px;height: 30px" data-toggle="modal" data-target="#logoutModal"> Prev </BUTTON> -->
                <?php if ($is_published != 1) { ?>
                    <button type="button" class="buttonSave save-border" style="width: 80px;height: 30px" id="save_weekday_hike" onclick="saveWeekdayHike(this);"> Save </button>
                <?php } ?>

                <?php if ($tariff != 0) { ?>
                    <?= Html::a('Skip', ['tariff/home', 'id'=> $property->id],  ['class'=>'buttonNextanchor2']) ?>
                <?php }
                    else 
                    {
                    ?>
                    <?php if($is_allow_skip == true) { ?>
                        <?= Html::a('Skip', ['tariff/addmandatorydinnner', 'id'=> $property->id, 'mother_id' => $date_range->id, 'tariff' => $tariff],  ['class'=>'buttonNextanchor2']) ?>
                    <?php } 
                    } ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
</div>
