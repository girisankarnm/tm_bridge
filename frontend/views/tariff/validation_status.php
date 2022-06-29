<?php
use Carbon\Carbon;
$this->registerCssFile('/css/full-page.css');
?>

<div class="content" >

    <div class="publishedBorder" >
            <div class="" style="width: 100%;height: 100%; margin: auto; padding-top: 16px;padding-bottom: 10px;padding-left: 28px; background-color: white ">
                <div>
                    <img src="/images/logo.svg" class="logo-small">
                </div>
                <div  style="margin-left: 6px; margin-bottom: 10px; font-size: 20px; font-weight: bold">
                  TourMatrix Publish Tariff
                </div>
                <div  style="line-height: 0px; height:80px;">
                    <div style="display: inline">
                        <img style="width: 34px;height: 34px" src="images/building-2.svg" alt="Matrix">
                        <span style="font-size: 20px;padding-top:  4px;color: black;font-weight: 700;inline-size: 1px">
                 Misty Rock Resort<i style="font-size: 13px;color: gold;padding-left: 4px" class="fa fa-star" aria-hidden="true"></i>
                                         <i style="font-size: 13px;color: gold;padding-left: 2px" class="fa fa-star" aria-hidden="true"></i>
                                          <i style="font-size: 13px;color: gold;padding-left: 2px" class="fa fa-star" aria-hidden="true"></i>
                                                <br>
                                     <div style="display: inline">  <small  class="smallclass"> <img style="width: 14px;height: 14px" src="images/location-1.svg" alt="Matrix"> wyanad,kerala,india</small>
</span></div>
                    </div>
                <div id="publishmain" style="margin-left: 4px;line-height: 27px" >
                    <div class="margintopcls" >
                        <span class="dateform">From Date</span>
                        <!--                    <div style=" flex-wrap: wrap">-->
                        <div ><h6 class="motherdaterange-H6 h7class" >  <?= Carbon::parse($mother_range->from_date)->format('d M Y'); ?></h6></div>

                    </div>
                    <div style="margin-top: 4px"><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6>
                    </div>
                    <div class="margintopcls" >  <span class="dateform">To Date</span>
                        <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class" ><?= Carbon::parse($mother_range->from_date)->format('d M Y'); ?> </h6></div>
                    </div>
                </div>
                </div>

                <div class="row" style="margin-left: 3px;margin-top: 20px">
                    <h6 class="motherdaterange-H6 h7class smallFonts" ><img s src="images/user-icon.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img>jhone</h6>

                </div>
        <div class="row" style="margin-left: 3px;">
            <h6 class="motherdaterange-H6 h7class smallFonts" ><img s src="images/callender-icon.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img>15 feb 2022</h6>

        </div>
         <div class="row" style="margin-left: 1px;">
             <h6 class="motherdaterange-H6 h7class" >
                 <img s src="images/ticksuccess.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img>
                <span class="publishform">Not Published</span>
             </h6>
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

    </div>

        <?php if($errors == NULL) { ?> 
        <div class="row" style=" margin-bottom: 10px; margin-left: 3px;margin-top: 5px">
            <p style="font-size: 11px;font-weight: 500"> Your Tariff for the period is successfully validated <br>You shall review the tariff (<a href="#"  ><span style="color: #E40968"> url to tariff report </a>) before you publish the name</p>
        </div>
        <div class="row" style="  margin-left: 3px">
            <div style="display: block;margin-right: 35px;">
                <button class="buttonSave savebuttonMother" style="color: black;background-color:#ffffff "> Cancel</button>
                <button class="buttonSave savebuttonMother" style="background-color: blue"> Confirm Publish</button>
            </div>
        </div>
        <?php } 
        else
        {
            ?>
        <div class="row" style=" margin-bottom: 10px; margin-left: 3px;margin-top: 5px">
            <p style="font-size: 11px;font-weight: 500"> Tariff validation failed. <br> You may review and correct the tariff and try publish again <br>
            <?php
            foreach ($errors as $error) {
                echo $error.'<br/>';
            }
            ?> 
            </p>
        </div>
        <div class="row" style="  margin-left: 3px">
            <div style="display: block;margin-right: 35px;">
                <button class="buttonSave savebuttonMother" style="color: black;background-color:#ffffff "> Cancel</button>                
            </div>
        </div>
        <?php } ?>

    </div>
</div>
</div>
</div>


