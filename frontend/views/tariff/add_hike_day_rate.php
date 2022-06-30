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
    <div class="tariffBorder" style="margin-top: 20px;">
        <div style="margin-bottom: 30px; background-color: ">

            <div class="commonTitle" style="width: 50%;float: left">
                Enter week day hike1</div>

            <div id="tariffAddmain" style="justify-content: right"  >
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
                <div style="margin-top: 4px"><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6>
                </div>
                <div class="margintopcls" >  <span class="dateform">From Date</span>
                    <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class" ><?= Carbon::parse($date_range->to_date)->format('d M Y'); ?> </h6></div>
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
            ->where(['date_range_id' => $date_range->id])
            ->andWhere(['room_id' => $room->id])->one();

            $days = array();
            if($day_hike != NULL) {
                foreach ($day_hike->roomTariffWeekdayhikeDays as $tariff_days) {
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
                                    <button class="btn btn-block text-left" type="button" onclick="functionchange(this);" data-toggle="collapse" data-target="#collapseOne<?= $i ?>" aria-expanded="false" aria-controls="collapseOne<?= $i ?>">
                                        <strong> <?= $i ?>. <?= $room->name ?> - (Day based) </strong>
                                        <div class="float-right">
                                            <i class="fas fa-angle-down rotate-icon"></i>
                                        </div>
                                    </button>
                                </h2>

                            <div id="collapseOne<?= $i ?>" class="collapse <?php if ($i==1): ?> show <?php endif; ?> " aria-labelledby="headingOne" data-parent="#accordionExample<?= $i ?>">
                            <div style="display: inline;margin-top: 4px;margin-left: 19px">
                                <input type="checkbox" class="material-checkbox" name="room_checked[]" id="room_<?= $room->id?>" value="<?= $room->id?>" <?= ($day_hike != NULL) ? "checked" : "" ?> >
                                <label  style="margin: 8px" >Room have week day hike rate </label>
                            </div>
                                    <div class="row " style="margin-left: 15px" >
                                        <div style="display: inline;margin-top: 4px">
                                            <input id="sun_<?=$room->id?>" class="material-checkbox" type="checkbox" value="0" style="margin-left: 4px" name="week_days_<?=$room->id?>[]" <?= ArrayHelper::isIn( 0 , $days) ? "checked" : "" ?>>
                                            <label  style="margin: 8px" >Sunday </label>
                                            <input id="mon_<?=$room->id?>" class="material-checkbox" type="checkbox" value="1" name="week_days_<?=$room->id?>[]" <?= ArrayHelper::isIn( 1 , $days) ? "checked" : "" ?>>
                                            <label style="margin: 8px" >Monday </label>
                                            <input id="tue_<?=$room->id?>" class="material-checkbox" type="checkbox" value="2" name="week_days_<?=$room->id?>[]" <?= ArrayHelper::isIn( 2 , $days) ? "checked" : "" ?>>
                                            <label style="margin: 8px"> Tuesday </label>
                                            <input id="wed_<?=$room->id?>" class="material-checkbox" type="checkbox" value="3" name="week_days_<?=$room->id?>[]" <?= ArrayHelper::isIn( 3 , $days) ? "checked" : "" ?>>
                                            <label style="margin: 8px" >Wednesday </label>
                                            <input id="thu_<?=$room->id?>" class="material-checkbox" type="checkbox" value="4" name="week_days_<?=$room->id?>[]" <?= ArrayHelper::isIn( 4 , $days) ? "checked" : "" ?>>
                                            <label style="margin: 8px" >Thursday </label>
                                            <input id="fri_<?=$room->id?>" class="material-checkbox"  type="checkbox" value="5" name="week_days_<?=$room->id?>[]" <?= ArrayHelper::isIn( 5 , $days) ? "checked" : "" ?>>
                                            <label style="margin: 4px" >Friday </label>
                                            <input id="sat_<?=$room->id?>" class="material-checkbox"  type="checkbox" value="6" name="week_days_<?=$room->id?>[]" <?= ArrayHelper::isIn( 6 , $days) ? "checked" : "" ?>>
                                            <label  style="margin: 4px" >Saturday </label>
                                        </div>


                                                <table id="customers " class="table3enquiryclass" >
                                                    <tr  class="thtableguestcount " >
                                                <th >Hike Amount Room</th>
                                                <th >Adult with Extra Bed</th>
                                                <th >Child With Extra Bed</th>
                                                <th >Child Sharing Bed</th>
                                                <th >Single Occupancy</th>
                                            </tr>
                                            <tr>                                                
                                                <td><input type="text" name="room_rate_<?=$room->id?>" id="weekday_room_rate" class="inputTextClass enquiryTable" style="width: 100px;height: 33px;margin-top: 24px;" value="<?= isset($day_hike->roomTariffSlabWeekdayhikes[0]) ? $day_hike->roomTariffSlabWeekdayhikes[0]->room_rate : 0 ?>" /></td>
                                                <td><input type="text" name="adult_with_extra_bed_<?=$room->id?>" id="weekday_adult_with_extra_bed" style="width: 100px;height: 33px;margin-top: 24px;" class="inputTextClass enquiryTable" value="<?= isset($day_hike->roomTariffSlabWeekdayhikes[0]) ? $day_hike->roomTariffSlabWeekdayhikes[0]->adult_with_extra_bed : 0 ?>"/></td>
                                                <td><input type="text" name="child_with_extra_bed_<?=$room->id?>" id="weekday_child_with_extra_bed" style="width: 100px;height: 33px;margin-top: 24px;" class="inputTextClass enquiryTable" value="<?= isset($day_hike->roomTariffSlabWeekdayhikes[0]) ? $day_hike->roomTariffSlabWeekdayhikes[0]->child_with_extra_bed : 0 ?>"/></td>
                                                <td><input type="text" name="child_sharing_bed_<?=$room->id?>" id="weekday_child_sharing_bed" style="width: 100px;height: 33px;margin-top: 24px;" class="inputTextClass enquiryTable" value="<?= isset($day_hike->roomTariffSlabWeekdayhikes[0]) ? $day_hike->roomTariffSlabWeekdayhikes[0]->child_sharing_bed : 0 ?>" /></td>
                                                <td><input type="text" name="single_occupancy_<?=$room->id?>" id="weekday_single_occupancy" style="width: 100px;height: 33px;margin-top: 24px;" class="inputTextClass enquiryTable" value="<?= isset($day_hike->roomTariffSlabWeekdayhikes[0]) ? $day_hike->roomTariffSlabWeekdayhikes[0]->single_occupancy : 0 ?>" /></td>
            
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
                <?= Html::a('Next', ['tariff/addmandatorydinnner', 'id'=> $property->id, 'mother_id' => $date_range->id],  ['class'=>'buttonSave savebuttonMother']) ?>                    
            </div>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
</div>
