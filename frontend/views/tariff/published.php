<div>
Tariff Published. Mother range id: <?= $mother_range->id; ?>
</div>

<?php

$this->registerCssFile('/css/full-page.css');

?>

<div class="content" >

    <div class="publishedBorder" >
        <!--        <div class="" style="width: 100%;height: 100%; margin: auto; padding-top: 16px;padding-bottom: 10px;padding-left: 28px; background-color: white ">-->

        <div style="margin-left: 6px; margin-bottom: 10px; font-size: 24px; font-weight: bold">
            TourMatrix Publish Tariff
        </div>
        <div  style="line-height: 0px; height:80px;">
            <div style="display: inline">
                <img style="width: 34px;height: 34px" src="images/building1s.png" alt="Matrix">
                <span style="font-size: 20px;padding-top:  4px;color: black;font-weight: 700;inline-size: 1px">
                 Misty Rock Resort<i style="font-size: 13px;color: gold;padding-left: 4px" class="fa fa-star" aria-hidden="true"></i>
                                         <i style="font-size: 13px;color: gold;padding-left: 2px" class="fa fa-star" aria-hidden="true"></i>
                                          <i style="font-size: 13px;color: gold;padding-left: 2px" class="fa fa-star" aria-hidden="true"></i>
                                                <br>
                                     <div style="display: inline">  <small  class="smallclass"><i style="font-size: 10px;color: red;top: 0px;margin-right: 2px" class="fa fa-map-marker" aria-hidden="true"></i>wyanad,kerala,india</small>
</span></div>
        </div>
        <div id="main-link" >
            <div>
                <div id="main-link-div-1"  >
                    <div></div>
                    <div ><h6  class="motherdaterange-H6  smallFonts" style="padding-top: 0px; font-size: 10px; line-height: 0;"><img s src="images/user-icon.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img><?= Yii::$app->user->identity->first_name ?></h6></div>
                    <div ><h6 class="motherdaterange-H6 h7class  smallFonts" ><img s src="images/callender-icon.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img> december 25 2022 </h6></div>
                    <div ><h6 class="motherdaterange-H6 h7class" >                 <img s src="images/ticksuccess.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img>
                            <span class="publishform"> <?= (1 == 1) ? "Published" : "Not Published" ?></span> </h6></div>

                </div>
            </div>
            <div >
                <?php $form = ActiveForm::begin(['id' => 'tariff_publish_'.$range->id,'enableClientValidation' => true,'method' => 'post','action' => ['tariff/publish', 'id' => $range->id]]) ?>
                <div style="margin-right: 10px;padding-bottom: 10px">
                    <?php if($range->status != 1) { ?>
                        <?= $form->field($range, 'id')->hiddenInput()->label(false); ?>
                        <button type="submit" class="buttonSaveroomrate"  data-toggle="modal" data-target="#logoutModal"> Publish </button>
                    <?php } ?>
                    <a href="<?= \yii\helpers\Url::to(['/tariff/addmotherdate', 'id' =>  $property->id, 'mother_id' => $range->id]) ?>">
                        <img s src="images/edit-1-icon.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img></a>
                    <a href="#"> <img s src="images/delete-1-icon.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img></a>
                </div>
                <?php ActiveForm::end(); ?>
            </div>


        </div>
    </div>







    <div class="row" style="margin-left: 3px;margin-top: 20px">
        <h6 class="motherdaterange-H6 h7class" ><i class="fa fa-user" style="color: #545b62;margin-right: 4px" aria-hidden="true"></i>jhone</h6>

    </div>
    <div class="row" style="margin-left: 3px;">
        <h6 class="motherdaterange-H6 h7class" ><i class="fa fa-calendar" style="color: #545b62;margin-right: 4px" aria-hidden="true"></i>!5 feb 2022</h6>

    </div>
    <div class="row" style="margin-left: 1px;">
        <h6 class="motherdaterange-H6 h7class" >

            <svg style="margin-right: 4px;" width="17" height="14" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="21.5893" cy="21.0307" r="17.2748" transform="rotate(-172.902 21.5893 21.0307)" stroke="#009721" stroke-width="3"/>
                <path d="M14.875 21.5339L19.6822 26.3413L30.3058 15.7178" stroke=   "#009721" stroke-width="3" stroke-linecap="round"/>
            </svg><span class="publishform">Not Published</span>
        </h6>
    </div>

    <div class="row" style="  margin-left: 3px;margin-top: 5px">
        <div id="maintick"  >
            <div class="margintopcls" style="background-color: #ffffff;text-align: center">
                <i  class="fa fa-check-circle w3-large tickpublish item circleicon" aria-hidden="true"></i>
            </div>
            <div class="margintopcls" >
                <span class="dateform">Tariff Validation</span>
                <!--                    <div style=" flex-wrap: wrap">-->
                <div ><h6 class="dateform" style="color: red;line-height: 13px;" >Success </h6></div>


            </div>

        </div>

    </div>

    <div class="row" style=" margin-bottom: 10px; margin-left: 3px;margin-top: 5px">
        <p style="font-size: 13px;font-weight: 500"> Your Tariff for the period is success fully validated <br>You shall review the tariff (<a href="#"> url to tariff report </a>) before you publish the name</p>
    </div>
    <div class="row" style="  margin-left: 3px">

        <!--                <label class="labeldateclass" style="display: block;margin-top: 20px" >*From Date</label>-->
        <!--                <button  class="inputDate">  </button>-->
        <!---->
        <!---->
        <!--                <label class="labeldateclass" style="display: block;margin-top: 20px" >*To Date</label>-->
        <!--                <button class="buttonSave savebuttonMother"> Save</button>-->

        <div style="display: block;margin-right: 35px;">
            <button class="buttonSave savebuttonMother" style="color: black;background-color:#ffffff "> Cancel</button>
            <button class="buttonSave savebuttonMother" style="background-color: blue"> Confirm P  ublish</button>
        </div>

    </div>



</div>

<!--                <hr class="sidebar-divider" style="margin-top: 20px">-->

</div>


</div>

</div>


