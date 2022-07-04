<?php
use Carbon\Carbon;
use frontend\models\tariff\RoomRateValidator;
?>
<?php    
    $bValidated = true;
    $rc = new RoomRateValidator($range);
    switch ($tariff) {
        case 0:
            $bValidated = $rc->validateRoomTariff();
        break;

        case 1:
            $bValidated = $rc->validateRoomTariff();
            $edit_url = '/tariff/addroomrate';
        break;

        case 2:
            $bValidated = $rc->validateMealTariff();
            $edit_url = '/tariff/addmealrate';
        break;

        case 3:
            $bValidated = $rc->validateWeekdayHike();
            $edit_url = '/tariff/addhikedayrate';
        break;

        case 4:
            $bValidated = $rc->validateMandatoryDinner();
            $edit_url = '/tariff/addmandatorydinnner';
        break;
    }
?>
<div id="collapseOne" class="collapse  <?php if($current_loop == 1):?> show <?php endif; ?>" aria-labelledby="headingOne" data-parent="#accordionExample1">

    <div class="card matherdaterangecard" >
        <div id="main"  >
            <div  style="margin-top: 8px;background-color: #ffffff;text-align: center">
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
        </div>
        <div style="display: flex">
            <div id="main2"  >
                <div></div>
                <div ><h6  class="motherdaterange-H6  smallFonts" style="padding-top: 0px; font-size: 10px; line-height: 0;"><img s src="images/user-icon.svg" style="color: #545b62;margin-right: 0px" aria-hidden="true"></img> <?= Yii::$app->user->identity->first_name ?> </h6></div>
                <div ><h6 class="motherdaterange-H6 h7class  smallFonts" ><img s src="images/callender-icon.svg" style="color: #545b62;margin-right: 0px" aria-hidden="true"></img> december 25 2022 </h6></div>
                <div ><h6 class="motherdaterange-H6 h7class" >                  <img s src="images/ticksuccess.svg" style="color: #545b62;margin-right: 0px" aria-hidden="true"></img>
                        <span class="publishform"> Not published  </span><span class="publishform">Tariff validation: <?= (!$bValidated) ? "Failed - ".implode(",", $rc->getLastErrorMessages()) : "Success" ?>   </span> </h6></div>
            </div>
            <div id="b" style=" display: flex">
                <div style="margin-right: 10px;padding-bottom: 10px"><a href="<?= \yii\helpers\Url::to([ $edit_url, 'id' =>  $property->id, 'mother_id' => $range->id, 'tariff' => $tariff]) ?>"> <img s src="images/edit-1-icon.svg" style="color: #545b62;margin-right: 0px" aria-hidden="true"></img>   </a>   <a href="#"> <img s src="images/delete-1-icon.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img>   </a>
                     <a href="<?= \yii\helpers\Url::to(['/tariff/nesting', 'id' =>  $property->id, 'mother_range_id' => $range->id, 'tariff' => $tariff]) ?>"> <BUTTON type="button" class="buttonSaveroomrate" > Nesting </BUTTON> </a> </div>
            </div>


        </div>
    </div>


</div>