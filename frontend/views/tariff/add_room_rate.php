<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use Carbon\Carbon;

$this->registerJsFile('/js/tariff/tariff.js');

?>
<div class="$content">
    <div class="container-fluid" style="">
        <div class="card-title">  Tariff Wizard </div>
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


        <div style="margin-bottom: 18px; background-color: ">

            <div class="commonTitle" style="width: 50%;float: left">
                Enter Room Tariff</div>


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

        <div style="width: 100%;height:80px;display: block;margin-left: 5px">
            <div class="commonTitle" style="width: 500px"> <?= $room->name ?> <span class="commonTitlesmall-2"> ( <?= ($room_off_set) ?> of <?= $room_count?> Rooms ) </span></div>
            <div style="width: 500px;margin-top: 23px;font-size: 12px;font: bold;color: black">
                <img  src="images/User-2.svg" alt="Matrix" class="margin-right-icon"> <img  src="images/User-2.svg" alt="Matrix" class="margin-right-icon" > <img  src="images/User-2.svg" alt="Matrix" class="margin-right-icon"  >  <span style="margin-right: 5px;" class="commonTitlesmall"> Occupancy AD : 2  Eb : 1 Sb : 1 </span>  <img  src="images/meal-2.svg" alt="Matrix" class="margin-right-icon" style="margin-right: 5px"><span style="margin-right: 5px;" class="commonTitlesmall"> meal:</span> <span style="margin-right: 5px"  class="commonTitlesmall">  <?= $room->mealPlan->name ?> </span></div>
        </div>

        <?php $form = ActiveForm::begin(['id' => 'tariff_step3','enableClientValidation' => true,'method' => 'post','action' => ['tariff/saveroomrates']]); ?>
        <input type="hidden" name="room_id" value="<?= $room->id; ?>">
        <input type="hidden" name="date_range_id" value="<?= $date_range->id; ?>">
        <input type="hidden" name="property_id" value="<?= $property->id; ?>">
        <input type="hidden" name="room_off_set" value="<?= $room_off_set; ?>">
        <input type="hidden" name="tariff" value="<?= $tariff; ?>">

        <?php
            $count = 1;
            $defined_tariff_query = clone $defined_tariff;
            $room_tariff = $defined_tariff_query->andWhere(['nationality_id' => 0])->one();
            echo Yii::$app->controller->renderPartial('_room_rate_nationality_block', [
                'nationality_id' => 0, 
                'nationality_name' => "General", 
                'tariff' => $room_tariff,
                'count' => $count
            ]);

            foreach ($nationalities as $nationality) {
                $count++;
                $defined_tariff_query = clone $defined_tariff;
                $room_tariff = $defined_tariff_query->andWhere(['nationality_id' => $nationality->id])->one();
                echo Yii::$app->controller->renderPartial('_room_rate_nationality_block', [
                    'nationality_id' => $nationality->id, 
                    'nationality_name' => $nationality->name, 
                    'tariff' => $room_tariff,
                    'count' => $count
                ]);
            } 
        ?>

        <div class="row roomButtonRow"><div >
            <?php if ($tariff != 1) { ?>
            <BUTTON type="button" class="prevbutton" style="width: 80px;height: 30px"> Prev </BUTTON>
            <?php } ?>
            <BUTTON type="submit" class="buttonSave save-border"  > Save </BUTTON>
            
            <?= Html::a('Next', ['tariff/addroomrate', 'id'=> $property->id, 'room_id'=> $room->id, 'mother_id' => $date_range->id, 'room_off_set' => $room_off_set, 'tariff' => $tariff],  ['class'=>'buttonNextanchor2', 'style' => 'width: 80px;height: 30px']) ?>
            
        </div>
        <?php ActiveForm::end(); ?>
        </div>
        </div>

</div>
</div>