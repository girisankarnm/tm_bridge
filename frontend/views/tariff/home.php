<?php
use yii\helpers\Html;
use yii\helpers\Url;
use Carbon\Carbon;
?>
<div class="$content">
    <div class="container-fluid" >

        <div class="card-title">
            Tariff
        </div>

        <div class="tariffBorder">

        <div class="tab" >
        <div style="display: inline">   
        <a href="<?= \yii\helpers\Url::to(['/tariff/home', 'id' =>  $property->id]) ?>">  <button class="selectedButtonmotherdaterange" onclick="openCity(event, 'London')" >Mother date range</button></a> <hr class="new6" ></div>
        <a href="<?= \yii\helpers\Url::to(['/tariff/room', 'id' =>  $property->id]) ?>">   <button id="contactBtn" class="tablinks2" onclick="openCity(event, 'Paris')">Room rate</button></a>
        <a href="<?= \yii\helpers\Url::to(['/tariff/meal', 'id' =>  $property->id]) ?>"> <button class="tablinks2" onclick="openCity(event, 'Tokyo')">Meal rate</button></a>
        <a href="<?= \yii\helpers\Url::to(['/tariff/hikeday', 'id' =>  $property->id]) ?>"><button class="tablinks2" onclick="openCity(event, 'Tokyo')">Hike day rate</button></a>
        <a href="<?= \yii\helpers\Url::to(['/tariff/mandatorydinner', 'id' =>  $property->id]) ?>"><button class="tablinks2" onclick="openCity(event, 'Tokyo')">Mandatory dinner</button></a>
    </div>
            <hr class="sidebar-divider hrdivider">

            <div class="tariffBorder3" style="display: block">
    <div class="daterangetitle">Mother date range defined for</div>
                <div style="display: inline">
                    <img style="width: 34px;height: 34px" src="images/building1.png" alt="Matrix">
                    <span style="font-size: 20px;padding-top:  4px;color: black;font-weight: 700;inline-size: 1px">
    <?= $property->name ?> <i style="font-size: 13px;color: gold;padding-left: 4px" class="fa fa-star" aria-hidden="true"></i>
    <i style="font-size: 13px;color: gold;padding-left: 2px" class="fa fa-star" aria-hidden="true"></i>
    <i style="font-size: 13px;color: gold;padding-left: 2px" class="fa fa-star" aria-hidden="true"></i>
    <BUTTON type="button" style="float: right" class="motherdateRangeButton"  data-toggle="modal" data-target="#logoutModal">  <i class="fa fa-plus-circle plusbuttonspace" aria-hidden="true"></i><?= Html::a('Add new mother date range', Url::toRoute(['/tariff/addmotherdate', 'id' => $property->id ])) ?>  </BUTTON>    
    <br>
     <div style="display: inline">  <small  class="smallclass"><i  class="fa fa-map-marker locatiospace" aria-hidden="true"></i><?= $property->location->name?>, <?= $property->destination->name?>, <?= $property->country->name?></small>
    </span>
    </div>
    
    </div>
    </div>
    <?php 
        $i = 1;
        foreach ($mother_ranges as $range) { 
    ?>

        <div class="card matherdaterangecard" >
            <div style="margin-bottom: 18px; background-color: ">
                <div class="flex-containerDate " style="padding-left: 12px;padding-top: 12px;padding-right: 12px;width: 270px;">
                    <div style="width: 50px;"><i  class="fa fa-check-circle w3-large tickiconmotherdaterange item" aria-hidden="true"></i></div>
                    <div style="width: 84px;"><h6 class="motherdaterange-H6 " style="padding-top: 7px;margin-right: 8px;width: ">From Date</h6></div>
                    <div style="width: 10px;"><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6></div>
                    <div style="width: 10px;"> </h6></div>
                    <div style="width: 80px;"><h6 class="motherdaterange-H6 h6class " > To Date </h6></div>
                    <div style="width: 10px"><h6 class="motherdaterange-H6 h7class" ></h6></div>
                    <div style="width: 50px" ></div>
                    <div style="width: 94px;"><h6 class="motherdaterange-H6 h7class" > <?= Carbon::parse($range->from_date)->format('d M Y'); ?> </h6></div>
                    <div style="width:10px;"></div>
                    <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class" > <?= Carbon::parse($range->to_date)->format('d M Y'); ?> </h6></div>
                </div>

                <div class="flex-containerDate " style="padding-left: 12px;padding-top: 12px;padding-right: 12px; margin-left: 28px;">
                    <div style="width: 18px"></div>
                    <div><h6  class="motherdaterange-H6" style="padding-top: 0px; font-size: 10px; line-height: 0;"><i class="fa fa-user" style="color: #545b62;margin-right: 4px" aria-hidden="true"></i>Arjun Raj  </h6></div>
                    <div style="width: 18px"></div>
                    <div><h6 class="motherdaterange-H6 h7class" > <i style="color: #545b62;margin-right: 4px" class="fa fa-calendar" aria-hidden="true"></i> december 25 2022 </h6></div>
                    <div style="width: 18px"></div>
                    <div><h6 class="motherdaterange-H6 h9class" ><i style="color: #545b62;margin-right: 4px"  class="fa fa-check-circle w3-large " aria-hidden="true"></i>Not Published  </h6></div>
                    <div style="margin-left: 45%">
                        <div style="margin-right: 10px;padding-bottom: 10px"> <BUTTON type="button" class="buttonSaveroomrate"  data-toggle="modal" data-target="#logoutModal"> Publish </BUTTON> <a href="<?= \yii\helpers\Url::to(['/tariff/addmotherdate', 'id' =>  $property->id, 'mother_id' => $range->id]) ?>">  <i  class="fas fa-edit editfa"></i>   </a>   <a href="#">  <i  class="fa fa-trash editfa" aria-hidden="true"></i>  </a></div>
                    </div>
                </div>
            </div>
        </div>

        <?php 
        $i++;
        } ?>
       
</div>
</div>
