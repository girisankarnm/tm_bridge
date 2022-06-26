<?php
use Carbon\Carbon;
use frontend\models\tariff\TariffDateRange;
?>

<div class="$content">
    <div class="container-fluid" >
        <div class="card-title">Tariff</div>
        <div class="tariffBorder">
            <div class="tab" >
                 <a href="<?= \yii\helpers\Url::to(['/tariff/home','id' =>  $property->id]) ?>">  <button class="tablinks2 matherdaterangetab" onclick="openCity(event, 'London')" >Mother date range</button></a>
                <div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/tariff/room', 'id' =>  $property->id]) ?>">  <button id="contactBtn" class="selectedButtonmotherdaterange" onclick="openCity(event, 'Paris')">Room rate</button></a> <hr class="new6" > 
            </div>
                <a href="<?= \yii\helpers\Url::to(['/tariff/meal', 'id' =>  $property->id]) ?>"> <button class="tablinks2" onclick="openCity(event, 'Tokyo')">Meal rate</button></a>
                <a href="<?= \yii\helpers\Url::to(['/tariff/hikeday', 'id' =>  $property->id]) ?>"><button class="tablinks2" onclick="openCity(event, 'Tokyo')">Hike day rate</button></a>
                <a href="<?= \yii\helpers\Url::to(['/tariff/mandatorydinner', 'id' =>  $property->id]) ?>"><button class="tablinks2" onclick="openCity(event, 'Tokyo')">Mandatory dinner</button></a>
            </div>
            <hr class="sidebar-divider hrdivider">

            <div class="tariffBorder3" style="display: block">
                <div class="daterangetitle">Mandatory dinner rates defined for Mother date ranges </div>
                <div style="display: inline">
                    <img style="width: 34px;height: 34px" src="images/building1.png" alt="Matrix">
                    <span style="font-size: 20px;padding-top:  4px;color: black;font-weight: 700;inline-size: 1px">
                    <?= $property->name ?><i style="font-size: 13px;color: gold;padding-left: 4px" class="fa fa-star" aria-hidden="true"></i>
            <i style="font-size: 13px;color: gold;padding-left: 2px" class="fa fa-star" aria-hidden="true"></i>
            <i style="font-size: 13px;color: gold;padding-left: 2px" class="fa fa-star" aria-hidden="true"></i>
            <br>
            <div style="display: inline">  <small  class="smallclass"><i  class="fa fa-map-marker locatiospace" aria-hidden="true"></i><?= $property->location->name?>, <?= $property->destination->name?>, <?= $property->country->name?></small></span></div>
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
                            <h2 class="mb-0   accordianbg" >
                                <button class="btn btn-block text-left  accordianstyle accordion-toggle" type="button" onclick="functionchange(this);" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <strong class="accordianText"> <?= Carbon::parse($range->from_date)->format('d M Y');  ?> <span> -</span> <?= Carbon::parse($range->to_date)->format('d M Y'); ?>  </strong>   <strong  class="accordianText" style="color: #ffffff;text-align: center;margin-left: 25%;position: static"> Published </strong>
                                    <div class="float-right">
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                    </div>
                                </button>
                            </h2>
                            <?php
                                echo Yii::$app->controller->renderPartial('_date_range_block', [
                                    'range' => $range, 
                                    'property' => $property,
                                    'tariff' => 4
                                ]);
                                
                                if($range->getNestingCount() > 0 ) {
                                    $child_ranges = TariffDateRange::find()
                                    ->orderBy(['from_date' => SORT_DESC])
                                    ->where(['property_id' => $property->id])
                                    ->andWhere(['parent' => $range->id])
                                    ->andWhere(['tariff_type' => 4])
                                    ->all();
                                
                                    foreach ($child_ranges as $child_range) {
                                        echo Yii::$app->controller->renderPartial('_date_range_block', [
                                            'range' => $child_range,
                                            'property' => $property,
                                            'tariff' => 4
                                        ]);        
                                    }
                                }
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