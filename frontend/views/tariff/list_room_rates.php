<?php
use Carbon\Carbon;
?>

<div class="content">
    <div class="container-fluid" >
        <div class="card-title">Tariff</div>
        <div class="tariffBorder">
            <div class="tab" >
                 <a href="<?= \yii\helpers\Url::to(['/tariff/home','id' =>  $property->id]) ?>">  <button class="tablinks2 matherdaterangetab" onclick="openCity(event, 'London')" >Mother date range</button></a>
                <div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/tariff/room', 'id' =>  $property->id]) ?>">  <button id="contactBtn" class="selectedButtonmotherdaterange" onclick="openCity(event, 'Paris')">Room rate</button></a> <hr class="new6" > 
            </div>
                <a href="<?= \yii\helpers\Url::to(['/tariff/meal', 'id' =>  $property->id]) ?>"> <button class="tablinks2" onclick="openCity(event, 'Tokyo')">Meal rate</button></a>
                <a href="<?= \yii\helpers\Url::to(['/tariff/hikeday', 'id' =>  $property->id]) ?>"><button class="tablinks2" onclick="openCity(event, 'Tokyo')">Hike day rate</button></a>
                <a href+="<?= \yii\helpers\Url::to(['/tariff/mandatorydinner', 'id' =>  $property->id]) ?>"><button class="tablinks2" onclick="openCity(event, 'Tokyo')">Mandatory dinner</button></a>
            </div>
            <hr class="sidebar-divider hrdivider">

            <div class="tariffBorder3" style="display: block">
                <div class="daterangetitle"> Room rates defined for Mother date ranges </div>
                <div id="mainHeding-location"style="height: 43px">
                    <div > <img style="width: 34px;height: 34px" src="images/building1.png" alt="Matrix"></div>
                    <div >
                        <div id="h-location"  >
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


    <?php 
    $i = 1;
    foreach ($mother_ranges as $range) {
    ?>
        <div class="tab-accordion tab-accordiondaterate" >
            <div class="tab-content " >
                <div class="tab-pane fade active show">
                    <div class="accordion" id="accordionExample<?= $i ?>" >
                        <div class="card border-zero" >
                            <h2 class="mb-0  <?php if($i == 1):?> accordian-open-bg <?php  else: ?> accordianbg  <?php endif; ?>">
                                <button class="btn btn-block text-left  accordianstyle accordion-toggle" type="button" onclick="functionchange(this);" data-toggle="collapse" data-target="#collapseOne<?= $i ?>" aria-expanded="false" aria-controls="collapseOne<?= $i ?>">
                                    <strong class="accordianText"> <?= Carbon::parse($range->from_date)->format('d M Y');  ?> <span> -</span> <?= Carbon::parse($range->to_date)->format('d M Y'); ?>  </strong>   <strong  class="accordianText" style="color: #ffffff;text-align: center;margin-left: 25%;position: static"> Published </strong>
                                    <div class="float-right">
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                    </div>
                                </button>
                            </h2>
                            <?php
                                echo Yii::$app->controller->renderPartial('_room_rates_datewise', [
                                    'range' => $range, 
                                    'property' => $property,
                                    'current_loop' => $i,
                                ]);                    
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php 
    $i++;
    } ?>
   </div>
</div>
</div>