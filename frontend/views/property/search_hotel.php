<?php
$this->registerCssFile('/css/search/search.css');
$this->registerCssFile('/css/search.css');
$this->registerCssFile('/css/search/search-style.css');
frontend\assets\AppAsset::register($this);


?>

<div class="content">

    <div class="container-fluid" >
        <div >
        <div class="card-title">Search  result for Alappuzha beach</div>
        <div class="card search-top-card-list shadow-div " >
            <div id="flex-icons">
                <div>
                    <div class="card search-top-card-label "  style="width: 140px;"> <a href="#" class="search-anchor">Enquiry no: #9999/22</a> </div>

                </div>

                <div>
                    <div class="card search-top-card-label "   style="width: 240px;" > <a href="#" class="search-anchor">Guest name: Swaroop swaminathan</a> </div>

                </div>
                <div>
                    <div class="card search-top-card-label "  style="width: 286px;" > <a href="#" class="search-anchor"><span>Check in: 15-jul-2022 </span><span>Check out: 19-jul-2022 </span></a> </div>
                </div>

                <div>
                    <div class="card search-top-card-label"  style="width: 220px;" > <a href="#" class="search-anchor"><span>Stay Duration: 10 nights </span></a> </div>
                </div>
                <div>
                    <div id="flex-row-search"  style="width: 140px;">
                         <div><a href="#">  <img class="margin-right-search-img image-width-height "  onclick="openNav()" src="images/filer-symbol-up-down.svg"> </a></div>
                        <div> <span> <img class="margin-right-search-img image-width-height" src="images/filter-icon.svg"> </span></div>
                        <div> <span> <img class="margin-right-search-img image-width-height" src="images/filter-search-icon.svg"> </span></div>
                        <div> <a href="#">  <img class="image-width-height-2 dropbtn-search"  onclick="myFunctionSearch()" src="images/map-icon.svg"> </a>

                            <div id="myDropdownResult" class="dropdown-content-search " style="height: fit-content;margin-left: -106px;margin-top: 6px;display: none">
                                <select class="inputSelectClass" >
                                    <option>Cities in Alappuzha</option>
                                </select>
                                <input type="text" placeholder="Search.." id="myInputSearch" onkeyup="filterFunction()">
                                <a href="#about">Alappuzha</a>
                                <a href="#base">Cherthala</a>
                                <a href="#blog">Kumarakam</a>
                                <a href="#contact">Aroor</a>
                                <a href="#custom">Arthunkal</a>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
    </div>

        <?php foreach(range(0, 5) as $index => $item): ?>
        <div class="card search-card-list shadow-div card-overflow-hidden" >
            <div id="mainHeding-search-hotel" >
                <div > <img class="image-search-property img-property" src="images/chess-board.jpg" alt="Matrix"></div>
                <div   >
                    <div id="mainHeding-search-hotel-list">
                        <div>
                        <span class="serach-hotelHeading" > <span class="cut-text" style="display: inline">Misty Rock Resort<span/>
                            <?php if($index==2)
                                { ?>
                                    <span class="badge badge-pill badge-css font-bw-mitga-low-weight" style="margin-left: 6px"> Luxury </span>
                            <?php   } else
                                {?>
                               <img class="f-star" src="images/Star-1.svg" alt="Matrix">
                             <img class="f-star" style="padding-left: 2px"  src="images/Star-1.svg" alt="Matrix">
                             <img  class="f-star" style="padding-left: 2px" src="images/Star-1.svg" alt="Matrix">
                           </span>
                            <?php  } ?>
                        </div>
                        <div> <small  class="smallFonts fontsize-location"><i  class="fa fa-map-marker locatiospace" aria-hidden="true"></i> Alappuzha ,Punnamada.kerala</small></div>
                    <div><img class="span-gap-image" src="images/smoke-icon.svg" alt="Matrix"> <img class="span-gap-image" src="images/animal-restrict.svg" alt="Matrix"></div>
                    </div>
                </div>
         <div>
                    <div id="column-listing-search" >
                        <div> <img class="img-property" src="images/bridge-icon.svg" alt="Matrix"></div>
                        <div><span class="badge badge-pill badge-secondary font-bw-mitga-low-weight"> 4.1/5 (very good)</span>
                            <span class="smallFonts font-bw-mitga-low-weight" style="font-size: 12px;">5879 Rating</span>
                               </div>
                        <div>
                            <div class="favorite-icon">
                                <input type="checkbox" class="favorite" id="favorite-<?= $index ?>" />
                                <label for="favorite-<?= $index ?>">
                                    <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">
                                        <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                                            <path d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z" id="heart" fill="#AAB8C2"/>
                                            <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5"/>

                                            <g id="grp7" opacity="0" transform="translate(7 6)">
                                                <circle id="oval1" fill="#9CD8C3" cx="2" cy="6" r="2"/>
                                                <circle id="oval2" fill="#8CE8C3" cx="5" cy="2" r="2"/>
                                            </g>

                                            <g id="grp6" opacity="0" transform="translate(0 28)">
                                                <circle id="oval1" fill="#CC8EF5" cx="2" cy="7" r="2"/>
                                                <circle id="oval2" fill="#91D2FA" cx="3" cy="2" r="2"/>
                                            </g>

                                            <g id="grp3" opacity="0" transform="translate(52 28)">
                                                <circle id="oval2" fill="#9CD8C3" cx="2" cy="7" r="2"/>
                                                <circle id="oval1" fill="#8CE8C3" cx="4" cy="2" r="2"/>
                                            </g>

                                            <g id="grp2" opacity="0" transform="translate(44 6)">
                                                <circle id="oval2" fill="#CC8EF5" cx="5" cy="6" r="2"/>
                                                <circle id="oval1" fill="#CC8EF5" cx="2" cy="2" r="2"/>
                                            </g>

                                            <g id="grp5" opacity="0" transform="translate(14 50)">
                                                <circle id="oval1" fill="#91D2FA" cx="6" cy="5" r="2"/>
                                                <circle id="oval2" fill="#91D2FA" cx="2" cy="2" r="2"/>
                                            </g>

                                            <g id="grp4" opacity="0" transform="translate(35 50)">
                                                <circle id="oval1" fill="#F48EA7" cx="6" cy="5" r="2"/>
                                                <circle id="oval2" fill="#F48EA7" cx="2" cy="2" r="2"/>
                                            </g>

                                            <g id="grp1" opacity="0" transform="translate(24)">
                                                <circle id="oval1" fill="#9FC7FA" cx="2.5" cy="3" r="2"/>
                                                <circle id="oval2" fill="#9FC7FA" cx="7.5" cy="2" r="2"/>
                                            </g>
                                        </g>
                                    </svg>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div id="column-4th-colomn-search" >
                        <div>  <span class="font-bw-mitga" style="font: bold;font-size: 13px;float: left;margin-left: 10px; color: #292931 "> Standard Double Room </span>
                            <span style="float: right;margin-left: 10px;font-size: 11px" class="badge badge-pill badge-secondary size-badge font-bw-mitga-text"><img class="img-property-search" src="images/note-search.svg"  alt="Matrix"> 4/10</span>
                           </div>
                        <div>
                            <span class="span-gap font-span font-bw-mitga-text " style=";margin-left: 10px">  <img class="img-property color-140F0F " src="images/baby-icon.svg" alt="Matrix">0-<span>9</span>YR </span>
                            <span class=" font-span font-bw-mitga-text">  <img class="img-property color-140F0F " src="images/adult-age-icon.svg" alt="Matrix"> <span>10</span>-<span>15</span> YR</span>
                            <span class="span-gap font-span font-bw-mitga-text">  <img class="img-property bed-icon-style "  src="images/bed-hotel.svg" alt="Matrix">DB: <span class="margin-right-icon-search">3|</span>EB: <span class="margin-right-icon-search">4|</span>SB: <span class="margin-right-icon-search">3</span> </span>
                             </div>
                        <div> <span class="line-through-text font-color-E40967 font-bw-mitga" style="font-size: 13px;margin-left: 10px">₹ 10,990 </span> <span class=" color-586ADA  font-bw-mitga"  style="font-size: 17px;margin-left: 6px">₹ 9000</span></div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;  ?>
        </div>
<div id="filterdiv" class="main-filter-overlay">
        <div id="Divf2" class="card overlay overlay2 scroll-search-filer " style="width: fit-content;height:fit-content;margin-top: 6px;box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.25);">
            <div  style="height: 26px">
                <img id="x" onclick="closeNav()" src="images/close-search-filter-icon.svg" style="width: 16px;height: 13px;" >
            </div>
            <div class="tab-accordion" style="margin-bottom: 10px">
                <div class="tab-content">
                    <div class="tab-pane fade active show">
                        <div class="accordion" id="accordionExample">
                            <div class="card" style="margin-right: 25px;margin-left: 17px">
                                <h2 class="mb-0" style="background-color:#fff;box-shadow: 0 0 0 0 #FFFFFF">
                                    <button class="btn btn-block text-left" type="button" onclick="functionchange(this);" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="color: #586ADA;">
                                        <strong>   Destination Dates for Alapuzha </strong>
                                        <div class="float-right">
                                            <i class="fas fa-angle-down rotate-icon"></i>
                                        </div>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="row" >
                                        <div class="row " style="margin-left: 15px;margin-top: 15px;padding: 6px; display: flex;width: 870px;" >
                                            <div>
                                                <input type="checkbox" id="date1" class="vertical-align-middle margin-left-check-box" checked="checked"  >
                                                <label  style="margin: 8px" for="date1" class="pointerclass">15 Jul | 22 Friday </label>
                                            </div>
                                            <div>
                                                <input  class="vertical-align-middle margin-left-check-box " type="checkbox" checked="checked"  >
                                                <label style="margin: 8px" >15 Jul | 22 Friday </label>
                                            </div>
                                            <div>
                                                <input class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked"  >
                                                <label style="margin: 8px"> 15 Jul | 22 Friday </label>
                                            </div>
                                            <div>
                                                <input class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked"  >
                                                <label style="margin: 8px">15 Jul   22 Friday </label>
                                            </div>
                                            <div>
                                                <input type="checkbox" class="vertical-align-middle margin-left-check-box" checked="checked"  >
                                                <label  style="margin: 8px" >15 Jul | 22 Friday </label>
                                            </div>
                                            <div>
                                                <input  class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked"  >
                                                <label style="margin: 8px" >15 Jul | 22 Friday </label>
                                            </div>
                                            <div>
                                                <input class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked"  >
                                                <label style="margin: 8px"> 15 Jul | 22 Friday </label>
                                            </div>
                                            <div>
                                                <input class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked"  >
                                                <label style="margin: 8px">15 Jul   22 Friday </label>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--            <div class="card  filter-card-list">-->
<!--                <div class="title-search-property">-->
<!--                    Destination Dates for Alapuzha-->
<!--                </div>-->
<!--                <div class="row" >-->
<!---->
<!--                    <div class="row " style="margin-left: 15px; display: flex;width: 870px;" >-->
<!---->
<!--                        <div>-->
<!--                            <input type="checkbox" class="vertical-align-middle" checked="checked" style="margin-left: 15px" >-->
<!--                            <label  style="margin: 8px" >15 Jul | 22 Friday </label>-->
<!--                        </div>-->
<!--                            <div>-->
<!--                            <input  class="vertical-align-middle" type="checkbox" checked="checked" >-->
<!--                            <label style="margin: 8px" >15 Jul | 22 Friday </label>-->
<!--                            </div>-->
<!--                            <div>-->
<!--                            <input class="vertical-align-middle" type="checkbox" checked="checked" >-->
<!--                            <label style="margin: 8px"> 15 Jul | 22 Friday </label>-->
<!--                            </div>-->
<!--                            <div>-->
<!--                            <input class="vertical-align-middle" type="checkbox" checked="checked" >-->
<!--                            <label style="margin: 8px">15 Jul   22 Friday </label>-->
<!--                            </div>-->
<!--                            <div>-->
<!--                            <input type="checkbox" class="vertical-align-middle" checked="checked" style="margin-left: 15px" >-->
<!--                            <label  style="margin: 8px" >15 Jul | 22 Friday </label>-->
<!--                            </div>-->
<!--                            <div>-->
<!--                            <input  class="vertical-align-middle" type="checkbox" checked="checked" >-->
<!--                            <label style="margin: 8px" >15 Jul | 22 Friday </label>-->
<!--                            </div>-->
<!--                            <div>-->
<!--                            <input class="vertical-align-middle" type="checkbox" checked="checked" style="margin-left: 14px;" >-->
<!--                            <label style="margin: 8px"> 15 Jul | 22 Friday </label>-->
<!--                            </div>-->
<!--                            <div>-->
<!--                            <input class="vertical-align-middle" type="checkbox" checked="checked" >-->
<!--                            <label style="margin: 8px">15 Jul   22 Friday </label>-->
<!--                            </div>-->
<!---->
<!---->
<!---->
<!---->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
            <div class="card  filter-card-list-slect" >
                <div class="row">
                    <div class="col-4">
                        <div style="display: block">
                            <!--                         <div class="form-group ">-->
                            <div> <label class="Labelclass-filter" >Property Type</div>
                            <div><select class="inputSelect-filter" name="input1">
                              <option>PropertyAbc</option>
                              <option>PropertyFGH</option>
                              <option>PropertyJPK</option>

                                </select> </div>
                        </div>

                    </div>
                    <div class="col-4">
                        <div style="display: block">
                            <!--                         <div class="form-group ">-->
                            <div> <label class="Labelclass-filter" >Room View</div>
                            <div><select class="inputSelect-filter" name="input1">

                                    <option>RoomAbc</option>
                                    <option>RoomFGH</option>
                                    <option>RoomJPK</option>
                                </select> </div>
                        </div>

                    </div>
                    <div class="col-4">
                        <div style="display: block">
                            <!--                         <div class="form-group ">-->
                            <div> <label class="Labelclass-filter" >Food Type</div>
                            <div><select class="inputSelect-filter" name="input1">
                                    <option>Vegetable</option>
                                    <option>NonVeg</option>
                                    <option>Beverage</option>
                                </select> </div>
                        </div>

                    </div>
                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col-4">
                        <div style="display: block">
                            <!--                         <div class="form-group ">-->
                            <div> <label class="Labelclass-filter" >Property Rating</div>
                            <div><select class="inputSelect-filter" name="input1">
                                    <option>4.5</option>
                                    <option>6.7</option>
                                    <option>average</option>
                                </select> </div>
                        </div>

                    </div>
                    <div class="col-4">
                        <div style="display: block">
                            <!--                         <div class="form-group ">-->
                            <div> <label class="Labelclass-filter" >Room Type</div>
                            <div><select class="inputSelect-filter" name="input1">
                                    <option>luxury</option>
                                    <option>Premium</option>
                                    <option>Normal</option>
                                </select> </div>
                        </div>

                    </div>
                    <div class="col-4">
                        <div style="display: block">
                            <!--                         <div class="form-group ">-->
                            <div> <label class="Labelclass-filter" >Occupancy</div>
                            <div><select class="inputSelect-filter" name="input1">
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select> </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card  filter-card-list">
                <div class="title-search-property">
                    Property Amenities
                </div>
                <div class="row" >

                    <div class="row " style="margin-left: 15px; display: flex;width: 870px;" >
                        <div>
                            <input type="checkbox" id="garden_id" class="vertical-align-middle margin-left-check-box" checked="checked"  >
                            <label  class="pointerclass"   style="margin: 8px" for="garden_id" >Garden </label>
                        </div>
                        <div>
                            <input  class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked" >
                            <label style="margin: 8px" > Lawn </label>
                        </div>
                        <div>
                            <input class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked" >
                            <label style="margin: 8px"> Wheel chair </label>
                        </div>
                        <div>
                            <input class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked" >
                            <label style="margin: 8px">Lawn</label>
                        </div>
                        <div>
                            <input class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked" >
                            <label style="margin: 8px">Pathway for differently abled</label>
                        </div>
                        <div>
                            <input class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked" >
                            <label style="margin: 8px">Swimming Pool</label>
                        </div>
                        <div>
                            <input class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked" >
                            <label style="margin: 8px">Restaurant</label>
                        </div>
                        <div>
                            <input class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked"  >
                            <label style="margin: 8px">Parking</label>
                        </div>
                        <div>
                            <input class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked"  >
                            <label style="margin: 8px">Parking</label>
                        </div>


                    </div>

                </div>
            </div>
            <div class="card  filter-card-list">
                <div class="title-search-property">
                    Room Amenities
                </div>
                <div class="row" >

                    <div class="row " style="margin-left: 15px; display: flex;width: 870px;" >

                        <div>
                            <input type="checkbox" class="vertical-align-middle margin-left-check-box" checked="checked"  >
                            <label class="pointerclass"   style="margin: 8px" for="garden_id" >Garden </label>
                        </div>
                        <div>
                            <input  class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked " style="margin-left: 15px" >
                            <label style="margin: 8px" > Lawn </label>
                        </div>
                        <div>
                            <input class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked"  >
                            <label style="margin: 8px"> Wheel chair </label>
                        </div>
                        <div>
                            <input class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked"  >
                            <label style="margin: 8px">Lawn</label>
                        </div>
                        <div>
                            <input class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked" >
                            <label style="margin: 8px">Pathway for differently abled</label>
                        </div>
                        <div>
                            <input class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked"  >
                            <label style="margin: 8px">Swimming Pool</label>
                        </div>
                        <div>
                            <input class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked" >
                            <label style="margin: 8px">Restaurant</label>
                    </div>
                         <div>
                            <input class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked"  >
                            <label style="margin: 8px">Parking</label>
                              </div>
                         <div>
                            <input class="vertical-align-middle margin-left-check-box" type="checkbox" checked="checked"  >
                            <label style="margin: 8px">Parking</label>
                              </div>


                    </div>

                </div>
            </div>
            <div class="row" style="margin-left: 27px;margin-bottom: 12px;vertical-align: center">
                <div style="display: block;margin-right: 35px">
                    <BUTTON type="text" class="buttonSaveFilter" > Apply </BUTTON>
                </div>
            </div>
        </div>
        </div>

    </div>

</div>
<script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunctionSearch() {
        if (document.getElementById('myDropdownResult').style.display == 'none') {
            document.getElementById('myDropdownResult').style.display = 'block';
        }
        else
        {
            document.getElementById('myDropdownResult').style.display = 'none';
        }

    }

    // function filterFunction() {
    //     var input, filter, ul, li, a, i;
    //     input = document.getElementById("myInputSearch");
    //     filter = input.value.toUpperCase();
    //     div = document.getElementById("myDropdownResult");
    //     a = div.getElementsByTagName("a");
    //     for (i = 0; i < a.length; i++) {
    //         txtValue = a[i].textContent || a[i].innerText;
    //         if (txtValue.toUpperCase().indexOf(filter) > -1) {
    //             a[i].style.display = "";
    //         } else {
    //             a[i].style.display = "none";
    //         }
    //     }
    // }

    window.onclick = function(event) {

        //   var style =  $('#myDropdownResult');
        //     if (style.css("display") == "block") {
        //     // document.getElementById('myDropdownResult').style.display = 'none';
        // }



    }
//     function myFunctionFilter(){
//
//         if (document.getElementById('Div1')) {
//
//             if (document.getElementById('Div1').style.display == 'none') {
//                 alert("yes man")
//                 $( "Div2" ).addClass( "overlay" );
//                 document.getElementById('Div2').style.display = 'none';
//                 // document.getElementById('Div2').addClass( "overlay" );
//                 document.getElementById('Div1').style.display = 'block';
//             }
//             else {
//                 $( "Div2" ).addClass( "overlay" );
// alert("no man")
//
//                 document.getElementById('Div1').style.display = 'none';
//                 document.getElementById('Div2').style.display = 'block';
//             }
//         }
//         else{
//             alert("adada");
//         }
//     }

    function openNav() {
        // document.getElementById("Divf2").style.height = "100%";
        // document.getElementById("filterdiv").style.height = "100%";
        // $("#Divf2").addClass("overlay2");
        $("#filterdiv").show();
        $("#Divf2").slideDown( 100 );

        // $("#Divf2").show('fadeOut');
    }

    function closeNav() {
        // document.getElementById("Divf2").style.height = "0%";
        // document.getElementById("filterdiv").style.height = "0%";
        // $("#Divf2").removeClass("overlay2");
        $("#filterdiv").hide();
        $("#Divf2").hide('slide');
    }
</script>