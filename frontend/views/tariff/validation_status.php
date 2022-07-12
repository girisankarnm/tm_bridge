<?php
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use Carbon\Carbon;
$this->registerCssFile('/css/full-page.css');
?>

<div class="content" >

    <div class="publishedBorder" style="height: fit-content"  >
        <div  style="width: 100%;height: 43%; margin: auto; padding-top: 16px;padding-bottom: 0px;padding-left: 28px; background-color: white ">
            <div>
                <img src="/images/logo.svg" class="logo-small" style="margin-left: 147px">
            </div>
            <div  style="margin-left: 150px; margin-bottom: 6px; font-size: 20px; font-weight: bold;font-size: 11px;">
                TourMatrix Publish Tariff
            </div>
            <div class="tariffBorderbox" style="line-height: 4px; height:80px;">
                <div id="mainHeding-location"style="height: 33px">
                    <div > <img style="width: 34px;height: 34px" src="images/building1.png" alt="Matrix"></div>
                    <div >
                        <div id="h-border-location"  >
                            <div  >
                          <span class="hotelHeading" ><?= $property->name ?> <img class="f-star" src="images/Star-1.svg" alt="Matrix">
                           <img class="f-star" style="padding-left: 2px"  src="images/Star-1.svg" alt="Matrix">
                           <img  class="f-star" style="padding-left: 2px" src="images/Star-1.svg" alt="Matrix">
                           </span>
                            </div>
                            <div style="display: inline">  <small  class="smallclass"> <img style="width: 14px;height: 14px" src="images/location-1.svg" alt="Matrix"> <?= $property->location->name?>, <?= $property->destination->name?>, <?= $property->country->name?></small>
                                </span></div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="publishmain" style=" margin-left: 20px;line-height: 23px" >
                <div class="margintopcls" >
                    <span class="dateform">From Date</span>
                    <!--                    <div style=" flex-wrap: wrap">-->
                    <div ><h6 class="motherdaterange-H6 h7class" >  <?= \Carbon\Carbon::parse($mother_range->from_date)->format('d M Y'); ?></h6></div>

                </div>
                <div style="margin-top: 4px"><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6>
                </div>
                <div class="margintopcls" >  <span class="dateform">To Date</span>
                    <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class" ><?= \Carbon\Carbon::parse($mother_range->to_date)->format('d M Y'); ?> </h6></div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-left: 47px;margin-top: 0px;" >
            <h6 class="motherdaterange-H6 h7class smallFonts" ><img s src="images/user-icon.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img>jhone</h6>
            <h6 class="motherdaterange-H6 h7class smallFonts" ><img s src="images/callender-icon.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img>15 feb 2022</h6>
            <img s src="images/ticksuccess.svg" style="color: #545b62;margin-right: 4px;margin-bottom: 7px" aria-hidden="true"></img>
            <span class="publishform">Not Published</span>
        </div>
        <div class="row" style="  margin-left: 3px;margin-top: 5px">
            <div id="maintick"  >
                <div class="margintopcls" style="background-color: #ffffff;text-align: left">
                    <i  class="fa fa-check-circle w3-large tickpublish item circleicon" aria-hidden="true"></i>
                </div>
                <div class="margintopcls" >
                    <span class="dateform">Tariff Validation</span>
                    <!--                    <div style=" flex-wrap: wrap">-->
                    <div ><h6 class="dateform" style="color: <?= ($errors == NULL) ? "#18a136" : "#ff0000" ?>;line-height: 13px;" > <?= ($errors == NULL) ? "Success" : "Failed" ?> </h6></div>


                </div>
            </div>
            <?php if($errors == NULL) { ?>
                <div class="row" style=" margin-bottom: 10px; margin-left: 3px;margin-top: 5px">
                    <p style="font-size: 11px;font-weight: 500"> Your Tariff for the period is successfully validated <br>
                    You shall review the <?= Html::a('tariff report', ['slab/tariff', 'id' => $property->id],  []) ?> before you publish the name</p>
                </div>
                <div class="row" style="  margin-left: 3px">
                    <div style="display: block;margin-right: 35px;">
                        <?php $form = ActiveForm::begin(['id' => 'tariff_published_'.$mother_range->id,'enableClientValidation' => true,'method' => 'post','action' => ['tariff/published']]) ?>
                        <?= $form->field($mother_range, 'id')->hiddenInput()->label(false); ?>
                        <button type="button" class="buttonSave savebuttonMother" style="color: black;background-color:#ffffff "> Cancel</button>
                        <button type="submit" class="buttonSave savebuttonMother" style="background-color: blue"> Confirm Publish</button>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            <?php }
            else
            {
                ?>


                <div class="row" style=" margin-bottom: 10px; margin-left: 18px;margin-top: 5px">
                    <p class="p-class-first-failed"> Tariff validation failed.</p> <p class="p-class-second-failed"> You may review and correct the tariff and try publish again</p>
                </div>
                <div class="row" style=" margin-bottom: 5px; margin-left: 18px;margin-top: 0px">
                    <ul class="margin-left-right-spacing-2">
                        <?php foreach ($errors as $error) { ?>

             <li class="small-text"><img src="images/circle-exclamation-mark.svg"  class="chckbox-class" ><?=$error?></li>
                        <?php }
                        ?>
                    </ul>
                </div>


                <div class="row" style="  margin-left: 23px;margin-bottom: 21px">
                    <div style="display: block;margin-right: 35px;margin-left: ">
                        <button class="buttonSave savebuttonMother" style="color: black;background-color:#ffffff "> Cancel</button>

                    </div>

                </div>



            <?php } ?>


        </div>
    </div>

</div>


