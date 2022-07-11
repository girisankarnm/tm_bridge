
<?php

$this->registerCssFile('/css/full-page.css');

?>

<div class="content" >

    <div class="publishedBorder" style="height: fit-content"  >
        <div  style="width: 100%;height: 43%; margin: auto; padding-top: 16px;padding-bottom: 10px;padding-left: 28px; background-color: white ">

            <div class="tariffBorderbox" style="line-height: 4px; height:80px;">
                <div id="mainHeding-location"style="height: 33px">
                    <div > <img style="width: 34px;height: 34px" src="images/building1.png" alt="Matrix"></div>
                    <div >
                        <div id="h-border-location"  >
                            <div  >
                          <span class="hotelHeading" >  Misty Rock Resort <img class="f-star" src="images/Star-1.svg" alt="Matrix">
                           <img class="f-star" style="padding-left: 2px"  src="images/Star-1.svg" alt="Matrix">
                           <img  class="f-star" style="padding-left: 2px" src="images/Star-1.svg" alt="Matrix">
                           </span>
                            </div>
                            <div style="display: inline">  <small  class="smallclass"> <img style="width: 14px;height: 14px" src="images/location-1.svg" alt="Matrix"> wyanad,kerala,india</small>
                                </span></div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="publishmain" style=" margin-left: 20px;line-height: 23px" >
                <div class="margintopcls" >
                    <span class="dateform">From Date</span>
                    <!--                    <div style=" flex-wrap: wrap">-->
                    <div ><h6 class="motherdaterange-H6 h7class" > 22-05-2022</h6></div>

                </div>
                <div style="margin-top: 4px"><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6>
                </div>
                <div class="margintopcls" >  <span class="dateform">To Date</span>
                    <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class" >24-05-2022 </h6></div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-left: 47px;margin-top: 0px;" >
            <h6 class="motherdaterange-H6 h7class smallFonts" ><img s src="images/user-icon.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img>jhone</h6>

        </div>
        <div class="row" style="margin-left: 47px;">
            <h6 class="motherdaterange-H6 h7class smallFonts" ><img s src="images/callender-icon.svg" style="color: #545b62;margin-right: 4px" aria-hidden="true"></img>15 feb 2022</h6>

        </div>
        <div class="row" style="margin-left: 47px;">
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
                    <span class="dateform">Published</span>
                    <!--                    <div style=" flex-wrap: wrap">-->
                    <div ><h6 class="dateform" style="color: #18a136;;line-height: 13px;" >Success </h6></div>


                </div>
            </div>
            <div class="row" style=" margin-bottom: 10px; margin-left: 3px;margin-top: 5px">
                <p class="p-class-first">Tariff Published. Mother range id: <?= $mother_range->id; ?> </p>
            </div>
            <div class="row" style="  margin-left: 23px;margin-bottom: 21px">
                <div style="display: block;margin-right: 35px;margin-left: ">
                    <button class="buttonSave savebuttonMother" style="color: black;background-color:#ffffff "> Cancel</button>
                    <button class="buttonSave savebuttonMother" style="background-color: blue"> Confirm Publish</button>
                </div>


                <!--                <hr class="sidebar-divider" style="margin-top: 20px">-->

            </div>
        </div>
    </div>

</div>


