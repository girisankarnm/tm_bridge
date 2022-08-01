<?php
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use Carbon\Carbon;
?>
<div class="content">
    <div class="container-fluid" >
        <div class="tariffBorder-place" style="line-height: 0px; height:80px;">
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
        <div class="tariffBorder">
            <div class="tab" >
                <div style="display: inline">
                <a href="<?= \yii\helpers\Url::to(['/tariff/home', 'id' =>  $property->id]) ?>">  <button class="selectedButtonmotherdaterange"  >Mother date range</button></a> <hr class="new6" ></div>
                <a href="<?= \yii\helpers\Url::to(['/tariff/room', 'id' =>  $property->id]) ?>">   <button id="contactBtn" class="tablinks2"  >Room rate</button></a>
                <a href="<?= \yii\helpers\Url::to(['/tariff/meal', 'id' =>  $property->id]) ?>"> <button class="tablinks2"  >Meal rate</button></a>
                <a href="<?= \yii\helpers\Url::to(['/tariff/hikeday', 'id' =>  $property->id]) ?>"><button class="tablinks2"  >Hike day rate</button></a>
                <a href="<?= \yii\helpers\Url::to(['/tariff/mandatorydinner', 'id' =>  $property->id]) ?>"><button class="tablinks2"  >Mandatory dinner</button></a>
            </div>
            <hr class="sidebar-divider hrdivider">
            <div class="tariffBorder3" style="display: block">
                <div style="">

                    <?= Html::a('<i class="fa fa-plus-circle plusbuttonspace material-icons " aria-hidden="true" ></i> Mother date range', ['/tariff/addmotherdate', 'id' => $property->id  ],['class' => ' button-Add-mother-date ']) ?>

                    <!--                          <BUTTON type="button" style="float: right" class="motherdateAddButton fontsize-button"  >  <i class="fa fa-plus-circle plusbuttonspace material-icons " aria-hidden="true"></i>  </BUTTON>-->
                </div>


                <?php
                if (count($mother_ranges) > 0 ) {
                    $i = 1;
                    foreach ($mother_ranges as $range) {
                        ?>

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
                                    <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class  smallFonts" > <?= Carbon::parse($range->to_date)->format('d M Y'); ?> </h6></div>
                                </div>
                            </div>
                            <div id="main-link" >
                                <div>
                                    <div id="main-link-div-1"  >
                                        <div></div>
                                        <div ><h6  class="motherdaterange-H6  smallFonts" style="padding-top: 0px; font-size: 10px; line-height: 0;"><img s src="images/user-icon.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img><?= Yii::$app->user->identity->first_name ?></h6></div>
                                        <div ><h6 class="motherdaterange-H6 h7class  smallFonts" ><img s src="images/callender-icon.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img> december 25 2022 </h6></div>
                                        <div ><h6 class="motherdaterange-H6 h7class" ><img s src="images/ticksuccess.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img>
                                                <span class="publishform"> <?= ($range->status == 1) ? "Published" : "Not Published" ?></span> </h6></div>
                                    </div>
                                </div>
                                <div >
                                    <?php $form = ActiveForm::begin(['id' => 'tariff_publish_'.$range->id,'enableClientValidation' => true,'method' => 'post','action' => ['tariff/publish', 'id' => $range->id]]) ?>
                                    <?= $form->field($range, 'id')->hiddenInput()->label(false); ?>
                                    <div style="margin-right: 10px;padding-bottom: 10px">
                                    <?php if($range->status != 1) { ?>
                                        <button type="submit" class="buttonSaveroomrate"  data-toggle="modal" data-target="#logoutModal"> Publish </button>
                                        <a href="<?= \yii\helpers\Url::to(['/tariff/addmotherdate', 'id' =>  $property->id, 'mother_id' => $range->id]) ?>">
                                        <img s src="images/edit-1-icon.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img></a>
                                        <a href="#"> <img s src="images/delete-1-icon.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img></a>
                                    <?php } else {
                                    ?>
                                        <a href="<?= \yii\helpers\Url::to(['/tariff/addmotherdate', 'id' =>  $property->id, 'mother_id' => $range->id]) ?>">
                                        <img s src="images/eye-view-icon.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img></a>
                                    <?php } ?>
                                        
                                    </div>
                                    <?php ActiveForm::end(); ?>
                                </div>


                            </div>


                        </div>                   

                        <?php
                        $i++;
                    } 
                } else {
                ?>

            <!-- TODO: Adarsh Style this -->
            <div class="validationBorder-error" style="margin-top: 50px;">
                <div class="flex-row" style="margin-top: 25px;">
                    <div class="card-title-middle">
                        No mother date ranges defined. <br/> Add mother date range to proceed.
                    </div>
                </div>
            </div>
            <?php } ?>

            </div>
            </div>
        </div>
