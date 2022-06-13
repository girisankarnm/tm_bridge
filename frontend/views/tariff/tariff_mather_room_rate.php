<div class="$content">


    <div class="container-fluid" >

        <div class="card-title">
            Tariff
        </div>

        <div class="tariffBorder">

            <div class="tab" >
                 <a href="<?= \yii\helpers\Url::to(['/tariff/tariffmotherdaterange']) ?>">  <button class="tablinks2 matherdaterangetab" onclick="openCity(event, 'London')" >Mother date range</button></a>

                <div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/tariff/tariffmotherroomrate']) ?>">  <button id="contactBtn" class="selectedButtonmotherdaterange" onclick="openCity(event, 'Paris')">Room rate</button></a> <hr class="new6" >
                </div>
                <a href="<?= \yii\helpers\Url::to(['/tariff/tariffmothermealrate']) ?>"> <button class="tablinks2" onclick="openCity(event, 'Tokyo')">Meal rate</button></a>
                <a href="<?= \yii\helpers\Url::to(['/tariff/tariffmotherhikedayrate']) ?>"><button class="tablinks2" onclick="openCity(event, 'Tokyo')">Hike day rate</button></a>
                <a href="<?= \yii\helpers\Url::to(['/tariff/tariffmothermandatorydinner']) ?>"><button class="tablinks2" onclick="openCity(event, 'Tokyo')">Mandatory dinner</button></a>
            </div>
            <hr class="sidebar-divider hrdivider">

            <div class="tariffBorder3" style="display: block">
                <div class="daterangetitle">
                    Mother room rate defined for

                </div>
                <div style="display: inline">
                    <img style="width: 34px;height: 34px" src="images/building1.png" alt="Matrix">
                    <span style="font-size: 20px;padding-top:  4px;color: black;font-weight: 700;inline-size: 1px">
    Misty Rock Resort<i style="font-size: 13px;color: gold;padding-left: 4px" class="fa fa-star" aria-hidden="true"></i>
    <i style="font-size: 13px;color: gold;padding-left: 2px" class="fa fa-star" aria-hidden="true"></i>
    <i style="font-size: 13px;color: gold;padding-left: 2px" class="fa fa-star" aria-hidden="true"></i>
    <br>
     <div style="display: inline">  <small  class="smallclass"><i  class="fa fa-map-marker locatiospace" aria-hidden="true"></i>wyanad,kerala,india</small>
    </span></div>
                <!--                <div style="float:right"> <BUTTON type="button" class="motherdateRangeButton"  data-toggle="modal" data-target="#logoutModal">  <i class="fa fa-plus-circle plusbuttonspace" aria-hidden="true"></i>Add new mother date range </BUTTON></div>-->
            </div>


        </div>

        <div class="tab-accordion tab-accordiondaterate  tab-accordionTop" >
            <div class="tab-content " >
                <div class="tab-pane fade active show">
                    <div class="accordion" id="accordionExample1" >
                        <div class="card" style="margin-left: 16px">

                            <h2 class="mb-0   accordianbg" >
                                <button class="btn btn-block text-left  accordianstyle accordion-toggle" type="button" onclick="functionchange(this);" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <strong class="accordianText"> 11 jan 2022 <span> -</span> 31 dec 2022 </strong>   <strong  class="accordianText" style="color: #ffffff;text-align: center;margin-left: 25%;position: static"> Published </strong>
                                    <div class="float-right">
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                    </div>
                                </button>
                            </h2>


                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample1">

                                <div class="card matherdaterangecard" >
                                    <div style="margin-bottom: 18px; background-color: ">

                                        <div class="flex-containerDate " style="padding-left: 12px;padding-top: 12px;padding-right: 12px;width: 270px;">
                                            <div style="width: 50px;"><i  class="fa fa-check-circle w3-large tickiconmotherdaterange item" aria-hidden="true"></i></div>
                                                <div style="width: 84px;"><h6 class="motherdaterange-H6 " style="padding-top: 7px;margin-right: 8px;width: ">From Date</h6></div>
                                            <div style=" width: 10px;"><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6></div>
                                            <div style=" width: 10px;"> </h6></div>
                                            <div style="width: 80px;"><h6 class="motherdaterange-H6 h6class " > To Date </h6></div>
                                            <div style="width: 10px"><h6 class="motherdaterange-H6 h7class" ></h6></div>
                                            <div style="width: 50px" ></div>
                                            <div style="width: 94px;"><h6 class="motherdaterange-H6 h7class" > september 25 2022 </h6></div>
                                            <div style="width:10px;"></div>
                                            <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class" > september 25 2022 </h6></div>




                                        </div>

                                        <div class="flex-containerDate " style="padding-left: 12px;padding-top: 12px;padding-right: 12px; margin-left: 28px;">
                                            <div style="width: 18px"></div>
                                            <div><h6  class="motherdaterange-H6" style="padding-top: 0px; font-size: 10px; line-height: 0;"><i class="fa fa-user" style="color: #545b62;margin-right: 4px" aria-hidden="true"></i>Arjun Raj  </h6></div>
                                            <div style="width: 18px"></div>
                                            <div><h6 class="motherdaterange-H6 h7class" > <i style="color: #545b62;margin-right: 4px" class="fa fa-calendar" aria-hidden="true"></i> december 25 2022 </h6></div>
                                            <div style="width: 18px"></div>
                                            <div><h6 class="motherdaterange-H6 h9class" ><i style="color: #545b62;margin-right: 4px"  class="fa fa-check-circle w3-large " aria-hidden="true"></i>Not Published  </h6></div>
                                            <div style="margin-left: 45%">

                                                <div style="margin-right: 10px;padding-bottom: 10px"> <a href="#"> <i  class="fas fa-edit editfa"></i> </a>  <a href="#"> <i  class="fa fa-trash editfa" aria-hidden="true"></i></a> <BUTTON type="button" class="buttonSaveroomrate"  data-toggle="modal" data-target="#logoutModal"> Nesting </BUTTON></div>


                                            </div>


                                        </div>







<!--                                            <div style=" flex-direction: column-reverse;">-->
<!--                                                <div><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6></div>-->
<!---->
<!--                                            </div>-->

<!--                                            <div style=" flex-direction: column-reverse;">-->
<!--                                                <div><h6 class="motherdaterange-H6 h6class" > To Date </h6></div>-->

<!---->
<!--                                            </div>-->







<!--                                        <div style="display: inline">-->
<!--                                            <div style="float: left;padding-left: 89px;padding-bottom: 10px;display: inline" >-->
<!--                                            </div>-->
<!---->
<!--                                            <div style="float: right;margin-right: 10px;padding-bottom: 10px"> <BUTTON type="button" class="buttonSave" style="width: 80px;height: 30px; margin-top: 2px;" data-toggle="modal" data-target="#logoutModal"> Next </BUTTON> <i style="margin-right: 8px;color: blue" class="fas fa-edit"></i>  <i style="color: #E40967; margin-right: 34px " class="fa fa-trash" aria-hidden="true"></i></div>-->
<!---->
<!--                                        </div>-->





                                    </div>


                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-accordion tab-accordiondaterate "  >
            <div class="tab-content">
                <div class="tab-pane fade active show">
                    <div class="accordion" id="accordionExample2">
                        <div class="card" style="margin-left: 16px">

                            <h2 class="mb-0 accordianbg " >
                                <button class="btn btn-block text-left accordianstyle  accordion-toggle" type="button" onclick="functionchange(this);" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
                                    <strong class="accordianText"> 11 jan 2022 <span> -</span> 31 dec 2022 </strong>   <strong  class="accordianText" style="color: #ffffff;text-align: center;margin-left: 25%"> Published </strong>
                                    <div class="float-right">
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                    </div>
                                </button>
                            </h2>


                            <div id="collapsetwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample2">

                                <div class="card matherdaterangecard" >
                                    <div style="margin-bottom: 18px; background-color: ">

                                        <div class="flex-containerDate " style="padding-left: 12px;padding-top: 12px;padding-right: 12px;width: 270px;">
                                            <div style="width: 50px;"><i  class="fa fa-check-circle w3-large tickiconmotherdaterange item" aria-hidden="true"></i></div>
                                            <div style="width: 84px;"><h6 class="motherdaterange-H6 " style="padding-top: 7px;margin-right: 8px;width: ">From Date</h6></div>
                                            <div style=" width: 10px;"><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6></div>
                                            <div style=" width: 10px;"> </h6></div>
                                            <div style="width: 80px;"><h6 class="motherdaterange-H6 h6class " > To Date </h6></div>
                                            <div style="width: 10px"><h6 class="motherdaterange-H6 h7class" ></h6></div>
                                            <div style="width: 50px" ></div>
                                            <div style="width: 94px;"><h6 class="motherdaterange-H6 h7class" > september 25 2022 </h6></div>
                                            <div style="width:10px;"></div>
                                            <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class" > september 25 2022 </h6></div>




                                        </div>

                                        <div class="flex-containerDate " style="padding-left: 12px;padding-top: 12px;padding-right: 12px; margin-left: 28px;">
                                            <div style="width: 18px"></div>
                                            <div><h6  class="motherdaterange-H6" style="padding-top: 0px; font-size: 10px; line-height: 0;"><i class="fa fa-user" style="color: #545b62;margin-right: 4px" aria-hidden="true"></i>Arjun Raj  </h6></div>
                                            <div style="width: 18px"></div>
                                            <div><h6 class="motherdaterange-H6 h7class" > <i style="color: #545b62;margin-right: 4px" class="fa fa-calendar" aria-hidden="true"></i> december 25 2022 </h6></div>
                                            <div style="width: 18px"></div>
                                            <div><h6 class="motherdaterange-H6 h9class" ><i style="color: #545b62;margin-right: 4px"  class="fa fa-check-circle w3-large " aria-hidden="true"></i>Not Published  </h6></div>
                                            <div style="margin-left: 45%">

                                                <div style="margin-right: 10px;padding-bottom: 10px">  <i  class="fas fa-edit editfa"></i>  <i  class="fa fa-trash editfa" aria-hidden="true"></i> <BUTTON type="button" class="buttonSaveroomrate"  data-toggle="modal" data-target="#logoutModal"> Nesting </BUTTON></div>


                                            </div>


                                        </div>







                                        <!--                                            <div style=" flex-direction: column-reverse;">-->
                                        <!--                                                <div><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6></div>-->
                                        <!---->
                                        <!--                                            </div>-->

                                        <!--                                            <div style=" flex-direction: column-reverse;">-->
                                        <!--                                                <div><h6 class="motherdaterange-H6 h6class" > To Date </h6></div>-->

                                        <!---->
                                        <!--                                            </div>-->







                                        <!--                                        <div style="display: inline">-->
                                        <!--                                            <div style="float: left;padding-left: 89px;padding-bottom: 10px;display: inline" >-->
                                        <!--                                            </div>-->
                                        <!---->
                                        <!--                                            <div style="float: right;margin-right: 10px;padding-bottom: 10px"> <BUTTON type="button" class="buttonSave" style="width: 80px;height: 30px; margin-top: 2px;" data-toggle="modal" data-target="#logoutModal"> Next </BUTTON> <i style="margin-right: 8px;color: blue" class="fas fa-edit"></i>  <i style="color: #E40967; margin-right: 34px " class="fa fa-trash" aria-hidden="true"></i></div>-->
                                        <!---->
                                        <!--                                        </div>-->





                                    </div>


                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-accordion tab-accordiondaterate "  >
            <div class="tab-content">
                <div class="tab-pane fade active show">
                    <div class="accordion" id="accordionExample3">
                        <div class="card" style="margin-left: 16px">

                            <h2 class="mb-0 accordianbg " >
                                <button class="btn btn-block text-left accordianstyle  accordion-toggle" type="button" onclick="functionchange(this);" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                                    <strong class="accordianText"> 11 jan 2022 <span> -</span> 31 dec 2022 </strong>   <strong  class="accordianText" style="color: #ffffff;text-align: center;margin-left: 25%"> Published </strong>
                                    <div class="float-right">
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                    </div>
                                </button>
                            </h2>


                            <div id="collapsethree" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample3">

                                <div class="card matherdaterangecard" >
                                    <div style="margin-bottom: 18px; background-color: ">

                                        <div class="flex-containerDate " style="padding-left: 12px;padding-top: 12px;padding-right: 12px;width: 270px;">
                                            <div style="width: 50px;"><i  class="fa fa-check-circle w3-large tickiconmotherdaterange item" aria-hidden="true"></i></div>
                                            <div style="width: 84px;"><h6 class="motherdaterange-H6 " style="padding-top: 7px;margin-right: 8px;width: ">From Date</h6></div>
                                            <div style=" width: 10px;"><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6></div>
                                            <div style=" width: 10px;"> </h6></div>
                                            <div style="width: 80px;"><h6 class="motherdaterange-H6 h6class " > To Date </h6></div>
                                            <div style="width: 10px"><h6 class="motherdaterange-H6 h7class" ></h6></div>
                                            <div style="width: 50px" ></div>
                                            <div style="width: 94px;"><h6 class="motherdaterange-H6 h7class" > september 25 2022 </h6></div>
                                            <div style="width:10px;"></div>
                                            <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class" > september 25 2022 </h6></div>




                                        </div>

                                        <div class="flex-containerDate " style="padding-left: 12px;padding-top: 12px;padding-right: 12px; margin-left: 28px;">
                                            <div style="width: 18px"></div>
                                            <div><h6  class="motherdaterange-H6" style="padding-top: 0px; font-size: 10px; line-height: 0;"><i class="fa fa-user" style="color: #545b62;margin-right: 4px" aria-hidden="true"></i>Arjun Raj  </h6></div>
                                            <div style="width: 18px"></div>
                                            <div><h6 class="motherdaterange-H6 h7class" > <i style="color: #545b62;margin-right: 4px" class="fa fa-calendar" aria-hidden="true"></i> december 25 2022 </h6></div>
                                            <div style="width: 18px"></div>
                                            <div><h6 class="motherdaterange-H6 h9class" ><i style="color: #545b62;margin-right: 4px"  class="fa fa-check-circle w3-large " aria-hidden="true"></i>Not Published  </h6></div>
                                            <div style="margin-left: 45%">

                                                <div style="margin-right: 10px;padding-bottom: 10px">  <i  class="fas fa-edit editfa"></i>  <i  class="fa fa-trash editfa" aria-hidden="true"></i> <BUTTON type="button" class="buttonSaveroomrate"  data-toggle="modal" data-target="#logoutModal"> Nesting </BUTTON></div>


                                            </div>


                                        </div>







                                        <!--                                            <div style=" flex-direction: column-reverse;">-->
                                        <!--                                                <div><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6></div>-->
                                        <!---->
                                        <!--                                            </div>-->

                                        <!--                                            <div style=" flex-direction: column-reverse;">-->
                                        <!--                                                <div><h6 class="motherdaterange-H6 h6class" > To Date </h6></div>-->

                                        <!---->
                                        <!--                                            </div>-->







                                        <!--                                        <div style="display: inline">-->
                                        <!--                                            <div style="float: left;padding-left: 89px;padding-bottom: 10px;display: inline" >-->
                                        <!--                                            </div>-->
                                        <!---->
                                        <!--                                            <div style="float: right;margin-right: 10px;padding-bottom: 10px"> <BUTTON type="button" class="buttonSave" style="width: 80px;height: 30px; margin-top: 2px;" data-toggle="modal" data-target="#logoutModal"> Next </BUTTON> <i style="margin-right: 8px;color: blue" class="fas fa-edit"></i>  <i style="color: #E40967; margin-right: 34px " class="fa fa-trash" aria-hidden="true"></i></div>-->
                                        <!---->
                                        <!--                                        </div>-->





                                    </div>


                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>







    </div>



</div>









