<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use Carbon\Carbon;
use yii\helpers\ArrayHelper;

use frontend\models\tariff\RoomTariffWeekdayhike;
use frontend\models\tariff\roomTariffWeekdayhikeDays;
?>

<div class="$content">
    <div class="container-fluid" style="">
        <div class="card-title">
            Tariff Room
        </div>

        <div class="tariffBorder1" style="line-height: 0px; height:80px;">
            <div style="display: inline">
                <img style="width: 34px;height: 34px" src="images/building1.png" alt="Matrix">
                <span style="font-size: 20px;padding-top:  4px;color: black;font-weight: 700;inline-size: 1px">
                <?= $property->name ?><i style="font-size: 13px;color: gold;padding-left: 4px" class="fa fa-star" aria-hidden="true"></i>
    <i style="font-size: 13px;color: gold;padding-left: 2px" class="fa fa-star" aria-hidden="true"></i>
    <i style="font-size: 13px;color: gold;padding-left: 2px" class="fa fa-star" aria-hidden="true"></i>
<br>
  <div style="display: inline">  <small  class="smallclass"><i style="font-size: 10px;color: red;top: 0px" class="fa fa-map-marker" aria-hidden="true"></i><?= $property->location->name?>, <?= $property->destination->name?>, <?= $property->country->name?></small>
</span></div>
        </div>
    </div>

    <div class="tariffBorder" style="margin-top: 20px;">


        <div style="margin-bottom: 30px; background-color: ">

            <div class="commonTitle" style="width: 50%;float: left">
                Enter week day hike</div>

            <div class="flex-container" >
                <div><i style="background-color: white;color: red;font-size: 28px;margin-right: 5px" class="fa fa-check-circle w3-large" aria-hidden="true"></i></div>
                <div style=" flex-direction: column-reverse;">
                    <div><h6 style="padding-top: 7px;margin-right: 8px">From Date</h6></div>
                    <div><h6 style="padding-top: 0px;margin-right: 8px;    font-size: 10px; line-height: 0;"><?= Carbon::parse($date_range->from_date)->format('d M Y'); ?></h6></div>

                    </div>
                <div style=" flex-direction: column-reverse;">
                    <div><h6 style="padding-top: 7px;margin-right: 8px"><hr class="new1"> </h6></div>

                </div>

                <div style=" flex-direction: column-reverse;">
                    <div><h6 style="padding-top: 7px;margin-right: 8px"> To Date </h6></div>
                    <div><h6 style="padding-top: 0px;margin-right: 8px;    font-size: 10px; line-height: 0;"> <?= Carbon::parse($date_range->to_date)->format('d M Y'); ?> </h6></div>

                </div>
            </div>
        </div>
        <hr class="sidebar-divider">

        <?php $form = ActiveForm::begin(['id' => 'meal_rate','enableClientValidation' => true,'method' => 'post','action' => ['tariff/savehikedayrate', 'id'=> $date_range->property_id]]) ?>
        <?= $form->field($date_range, 'property_id')->hiddenInput()->label(false); ?>
        <?= $form->field($date_range, 'parent')->hiddenInput()->label(false); ?>
        <?= $form->field($date_range, 'id')->hiddenInput()->label(false); ?>
        <input type="hidden" name="tariff" value="<?= $tariff; ?>">

        <?php 
            $i = 1;
            foreach ($rooms as $room) {

            $day_hike = RoomTariffWeekdayhike::find()
            ->where(['range_id' => $date_range->id])
            ->andWhere(['room_id' => $room->id])->one();

            $days = array();
            if($day_hike != NULL) {
                foreach ($day_hike->roomTariffWeekdayhikeDays as $tariff_days) {                
                    array_push($days, $tariff_days->day);
                }    
            }    
        ?>

    
    <input type="hidden" name="room[]" value="<?= $room->id?>" />

        <div class="tab-accordion" style="margin-bottom: 10px">
            <div class="tab-content">
                <div class="tab-pane fade active show">
                    <div class="accordion" id="accordionExample">
                        <div class="card" style="margin-left: 5px">

                                <h2 class="mb-0" style="background-color:#E8E9ED">
                                    <button class="btn btn-block text-left" type="button" onclick="functionchange(this);" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <strong> <?= $i ?>. <?= $room->name ?> - (Day based) </strong>
                                        <div class="float-right">
                                            <i class="fas fa-angle-down rotate-icon"></i>
                                        </div>
                                    </button>
                                </h2>

                                

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div style="display: inline;margin-top: 4px">
                                <input type="checkbox" name="room_checked[]" id="room_<?= $room->id?>" value="<?= $room->id?>" <?= ($day_hike != NULL) ? "checked" : "" ?> >
                                <label  style="margin: 8px" >Room have week day hike rate </label>
                            </div>
                                    <div class="row " style="margin-left: 15px" >
                                        <div style="display: inline;margin-top: 4px">
                                            <input id="sun_<?=$room->id?>" type="checkbox" style="margin-left: 4px" value="0" name="week_days_<?=$room->id?>[]" <?= ArrayHelper::isIn( 0 , $days) ? "checked" : "" ?>>
                                            <label  style="margin: 8px" >Sunday </label>
                                            <input id="mon_<?=$room->id?>" type="checkbox" value="0" name="week_days_<?=$room->id?>[]" <?= ArrayHelper::isIn( 1 , $days) ? "checked" : "" ?>>
                                            <label style="margin: 8px" >Monday </label>
                                            <input id="tue_<?=$room->id?>" type="checkbox" value="0" name="week_days_<?=$room->id?>[]" <?= ArrayHelper::isIn( 2 , $days) ? "checked" : "" ?>>
                                            <label style="margin: 8px"> Tuesday </label>
                                            <input id="wed_<?=$room->id?>" type="checkbox" value="0" name="week_days_<?=$room->id?>[]" <?= ArrayHelper::isIn( 3 , $days) ? "checked" : "" ?>>
                                            <label style="margin: 8px" >Wednesday </label>
                                            <input id="thu_<?=$room->id?>" type="checkbox" value="0" name="week_days_<?=$room->id?>[]" <?= ArrayHelper::isIn( 4 , $days) ? "checked" : "" ?>>
                                            <label style="margin: 8px" >Thursday </label>
                                            <input id="fri_<?=$room->id?>"  type="checkbox" value="0" name="week_days_<?=$room->id?>[]" <?= ArrayHelper::isIn( 5 , $days) ? "checked" : "" ?>>
                                            <label style="margin: 4px" >Friday </label>
                                            <input id="sat_<?=$room->id?>"  type="checkbox" value="0" name="week_days_<?=$room->id?>[]" <?= ArrayHelper::isIn( 6 , $days) ? "checked" : "" ?>>
                                            <label  style="margin: 4px" >Saturday </label>
                                        </div>

                                        <table id="customers" class="table2class" style="width: 655px;">

                                            <tr class="thtable" style=" border: 0.5px solid #A32C4F; border-radius: 12px;" >
                                                <th >Hike Amount Room</th>
                                                <th >Adult with Extra Bed</th>
                                                <th >Child With Extra Bed</th>
                                                <th >Child Sharing Bed</th>
                                                <th >Single Occupancy</th>
                                            </tr>
                                            <tr>                                                
                                                <td><input type="text" name="room_rate_<?=$room->id?>" id="weekday_room_rate" class="inputTextClass" style="width: 100px;height: 33px;margin-top: 24px;" value="<?= isset($day_hike->roomTariffSlabWeekdaywises[0]) ? $day_hike->roomTariffSlabWeekdaywises[0]->room_rate : "" ?>" /></td>
                                                <td><input type="text" name="adult_with_extra_bed_<?=$room->id?>" id="weekday_adult_with_extra_bed" style="width: 100px;height: 33px;margin-top: 24px;" class="inputTextClass" value="<?= isset($day_hike->roomTariffSlabWeekdaywises[0]) ? $day_hike->roomTariffSlabWeekdaywises[0]->adult_with_extra_bed : "" ?>"/></td>
                                                <td><input type="text" name="child_with_extra_bed_<?=$room->id?>" id="weekday_child_with_extra_bed" style="width: 100px;height: 33px;margin-top: 24px;" class="inputTextClass" value="<?= isset($day_hike->roomTariffSlabWeekdaywises[0]) ? $day_hike->roomTariffSlabWeekdaywises[0]->child_with_extra_bed : "" ?>"/></td>
                                                <td><input type="text" name="child_sharing_bed_<?=$room->id?>" id="weekday_child_sharing_bed" style="width: 100px;height: 33px;margin-top: 24px;" class="inputTextClass" value="<?= isset($day_hike->roomTariffSlabWeekdaywises[0]) ? $day_hike->roomTariffSlabWeekdaywises[0]->child_sharing_bed : "" ?>" /></td>                    
                                                <td><input type="text" name="single_occupancy_<?=$room->id?>" id="weekday_single_occupancy" style="width: 100px;height: 33px;margin-top: 24px;" class="inputTextClass" value="<?= isset($day_hike->roomTariffSlabWeekdaywises[0]) ? $day_hike->roomTariffSlabWeekdaywises[0]->single_occupancy : "" ?>" /></td> 
            
                                            </tr>                                            
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
                <BUTTON type="button" class="prevbutton" style="width: 80px;height: 30px" data-toggle="modal" data-target="#logoutModal"> Prev </BUTTON>
                <BUTTON type="submit" class="buttonSave" style="width: 80px;height: 30px" data-toggle="modal" data-target="#logoutModal"> Save </BUTTON>
            </div>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
</div>
