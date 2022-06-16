<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use Carbon\Carbon;
?>
<div class="$content">
    <div class="container-fluid" style="">
        <div class="card-title">  Tariff Wizard </div>
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


        <div style="margin-bottom: 18px; background-color: ">

            <div class="commonTitle" style="width: 50%;float: left">
                Enter Room Tariff</div>
            <div class="flex-container" style="justify-content: right">
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
                    <div><h6 style="padding-top: 0px;margin-right: 8px;    font-size: 10px; line-height: 0;"><?= Carbon::parse($date_range->to_date)->format('d M Y'); ?> </h6></div>

                </div>
            </div>            
        </div>

        <hr class="sidebar-divider">        

        <div style="width: 100%;height:80px;display: block;margin-left: 5px">
            <div class="commonTitle" style="width: 500px"> <?= $room->name ?>  ( <?= ($room_off_set) ?> of <?= $room_count?> Rooms ) </div>
            <div style="width: 500px;margin-top: 23px;font-size: 12px;font: bold;color: black">
                <i style="background-color: white;margin-right: 2px" class="fa fa-user " aria-hidden="true"></i><i style="background-color: white;margin-right: 2px" class="fa fa-user" aria-hidden="true"></i><i style="background-color: white;margin-right: 2px" class="fa fa-user" aria-hidden="true"></i> Occupancy AD : 2  Eb : 1 Sb : 1 <span style="margin-right: 5px"> </span> <?= $room->mealPlan->name ?></div>
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
            $tariff = $defined_tariff_query->andWhere(['nationality_id' => 0])->one();
            echo Yii::$app->controller->renderPartial('_room_rate_nationality_block', [
                'nationality_id' => 0, 
                'nationality_name' => "General", 
                'tariff' => $tariff,
                'count' => $count
            ]);

            foreach ($nationalities as $nationality) {
                $count++;
                $defined_tariff_query = clone $defined_tariff;
                $tariff = $defined_tariff_query->andWhere(['nationality_id' => $nationality->id])->one();
                echo Yii::$app->controller->renderPartial('_room_rate_nationality_block', [
                    'nationality_id' => $nationality->id, 
                    'nationality_name' => $nationality->name, 
                    'tariff' => $tariff,
                    'count' => $count
                ]);
            } 
        ?>

        <div class="row roomButtonRow" >            <div >
            <BUTTON type="button" class="prevbutton" style="width: 80px;height: 30px" data-toggle="modal" data-target="#logoutModal"> Prev </BUTTON>
            <BUTTON type="submit" class="buttonSave" style="width: 80px;height: 30px;background-color: #E40968" data-toggle="modal" data-target="#logoutModal"> Save </BUTTON>
            <BUTTON type="button" class="buttonSave" style="width: 80px;height: 30px" data-toggle="modal" data-target="#logoutModal"> Next </BUTTON>
            <?= Html::a('Next', ['tariff/addroomrate', 'id'=> $property->id, 'room_id'=> $room->id, 'mother_id' => $date_range->id, 'room_off_set' => $room_off_set, 'tariff' => $tariff],  ['class'=>'buttonSave', 'style' => 'width: 80px;height: 30px']) ?>
        </div>
        <?php ActiveForm::end(); ?>
        </div>
        </div>

</div>
</div>