<?php
//$this->registerCssFile('/css/search/search.css');
$this->registerCssFile('/css/search.css');
$this->registerCssFile('/css/search/search-style.css');
$this->registerCssFile('/css/search-popup/layout.css');
frontend\assets\AppAsset::register($this);


?>
<style>


</style>

<div class="content">

    <div class="container-fluid">


        <!--loader div start -->
        <div>
            <div class="timeline-item card  search-card-list shadow-div">
                <div class="animated-background facebook">
                    <div class="background-masker header-top "></div>
                    <div class="background-masker header-left"></div>
                    <div class="background-masker header-right"></div>
                    <div class="background-masker header-bottom"></div>
                    <div class="background-masker subheader-left"></div>
                    <div class="background-masker subheader-right"></div>
                    <div class="background-masker subheader-bottom"></div>
                    <div class="background-masker content-top"></div>
                    <div class="background-masker content-first-end"></div>
                    <div class="background-masker content-second-line"></div>
                    <div class="background-masker content-second-end"></div>
                    <div class="background-masker content-third-line"></div>
                    <div class="background-masker content-third-end "></div>
                </div>
            </div>
            <div class="timeline-item card  search-card-list shadow-div">
                <div class="animated-background facebook">
                    <div class="background-masker header-top "></div>
                    <div class="background-masker header-left"></div>
                    <div class="background-masker header-right"></div>
                    <div class="background-masker header-bottom"></div>
                    <div class="background-masker subheader-left"></div>
                    <div class="background-masker subheader-right"></div>
                    <div class="background-masker subheader-bottom"></div>
                    <div class="background-masker content-top"></div>
                    <div class="background-masker content-first-end"></div>
                    <div class="background-masker content-second-line"></div>
                    <div class="background-masker content-second-end"></div>
                    <div class="background-masker content-third-line"></div>
                    <div class="background-masker content-third-end "></div>
                </div>
            </div>
            <div class="timeline-item card  search-card-list shadow-div">
                <div class="animated-background facebook">
                    <div class="background-masker header-top "></div>
                    <div class="background-masker header-left"></div>
                    <div class="background-masker header-right"></div>
                    <div class="background-masker header-bottom"></div>
                    <div class="background-masker subheader-left"></div>
                    <div class="background-masker subheader-right"></div>
                    <div class="background-masker subheader-bottom"></div>
                    <div class="background-masker content-top"></div>
                    <div class="background-masker content-first-end"></div>
                    <div class="background-masker content-second-line"></div>
                    <div class="background-masker content-second-end"></div>
                    <div class="background-masker content-third-line"></div>
                    <div class="background-masker content-third-end "></div>
                </div>
            </div>

        </div>
        <!--loader div end -->
        <div>

            <div class="card search-top-card-list shadow-div ">
                <div id="flex-icons">
                    <div>
                        <div class="card search-top-card-label Enquiry-style-search "> <a href="#"
                                class="search-anchor  Enquiry-style-search "><label class="font-bw-mitga"> Enquiry
                                    no:</label> #9999/22 </a> </div>
                    </div>

                    <div>
                        <div class="card search-top-card-label  guest-style-search "> <a href="#"
                                class="search-anchor guest-style-search"><label class="font-bw-mitga">Name:</label>
                                Swaroop swaminathan</a> </div>

                    </div>
                    <div>
                        <div class="card search-top-card-label  check-date-style-search "> <a href="#"
                                class="search-anchor check-date-style-search"><span><label class="font-bw-mitga"> Check
                                        in: </label> 15-Aug-2022 </span><span><label class="font-bw-mitga">Check out:
                                    </label> 19-Aug-2022 </span></a> </div>
                    </div>

                    <div>
                        <div class="card search-top-card-label stay-search"> <a href="#"
                                class="search-anchor stay-duration_width"><span><label class="font-bw-mitga">Stay
                                        Duration:</label> 10 nights (split stay) </span></a> </div>
                    </div>
                    <div>
                        <div id="flex-row-search" style="width: 140px;">
                            <div>

                                <a href="#">
                                    <img class="margin-right-search-img image-width-height "
                                        onclick="FunctionFilterView()" src="images/filer-symbol-up-down.svg"> </a>

                                <div id="myDropdown-view" class="dropdown-filer-view drop-window">
                                    <a href="" class="drop-filer"> <img src="images/low-up-filter.svg"
                                            style="margin-right: 2px;color: grey"> <span> Low to High</span></a>
                                    <a href="" class="drop-filer"> <img src="images/up-low-filter.svg"
                                            style="margin-right: 2px;"> <span> High to Low</span></a>
                                    <a href="" class="drop-filer"> <img src="images/rated-star.svg"
                                            style="margin-right: 2px;"> <span> Most Rated </span></a>
                                    <a href="" class="drop-filer"> <img src="images/fav-filter.svg"
                                            style="margin-right: 2px;"> <span> Favourites </span></a>
                                </div>



                            </div>
                            <div> <span> <img class="margin-right-search-img image-width-height" onclick="openNav()"
                                        src="images/filter-icon.svg"> </span></div>
                            <div> <span class="hover-icon"> <img
                                        class="margin-right-search-img image-width-height dropbtn-search "
                                        src="images/filter-search-icon.svg"> </span>
                            </div>
                            <div> <a href="#"> <img class="image-width-height-2 dropbtn-search"
                                        onclick="myFunctionSearch()" src="images/map-icon.svg"> </a>
                                <div id="myDropdownResult" class="dropdown-content-search  font-bw-mitga  "
                                    style="height: fit-content;margin-left: -110px;margin-top: 6px;display: none">
                                    <div class="search-title">Select Any City </div>




                                    <input class="locationInput-Search" type="text" id="myInputSearch"
                                        placeholder="Search.." onkeyup="filterFunction()">


                                    <a href="#about" class="drop-list">Alappuzha</a>
                                    <a href="#base" class="drop-list">Cherthala</a>
                                    <a href="#blog" class="drop-list">Kumarakam</a>
                                    <a href="#contact" class="drop-list">Aroor</a>
                                    <a href="#custom" class="drop-list">Arthunkal</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: flex; ">
                <div class="card-title font-size-13px font-bw-mitga" style="margin-left: 6px;">Search result for
                    Alappuzha beach</div>
                <div class="card-title-right font-size-13px font-bw-mitga" style="float: right"><span
                        style="font-size: 11px"
                        class="badge badge-pill badge-secondary size-badge font-bw-mitga-text"><img
                            class="img-property-search" src="images/note-search.svg" alt="Matrix"> 4/10</span></div>
            </div>
            <?php foreach(range(0, 5) as $index => $item): ?>
            <div class="card search-card-list shadow-div card-overflow-hidden" data-toggle="modal"
                data-target="#searchPopupModal">
                <div id="mainHeding-search-hotel">
                    <div> <img class="image-search-property img-property" src="images/chess-board.jpg" alt="Matrix">
                    </div>
                    <div>
                        <div id="mainHeding-search-hotel-list">
                            <div>
                                <span class="serach-hotelHeading"> <span class="cut-text" style="display: inline">Misty
                                        Rock Resort<span />
                                        <?php if($index==2)
                                { ?>
                                        <span class="badge badge-pill badge-css font-bw-mitga-low-weight"
                                            style="margin-left: 6px"> Luxury </span>
                                        <?php   } else
                                {?>
                                        <img class="f-star" src="images/Star-1.svg" alt="Matrix">
                                        <img class="f-star" style="padding-left: 2px" src="images/Star-1.svg"
                                            alt="Matrix">
                                        <img class="f-star" style="padding-left: 2px" src="images/Star-1.svg"
                                            alt="Matrix">
                                    </span>
                                    <?php  } ?>
                            </div>
                            <div> <small class="smallFonts fontsize-location"><i class="fa fa-map-marker locatiospace"
                                        aria-hidden="true"></i> Alappuzha ,Punnamada.kerala</small></div>
                            <div><img class="span-gap-image" src="images/smoke-icon.svg" alt="Matrix"> <img
                                    class="span-gap-image" src="images/animal-restrict.svg" alt="Matrix"></div>
                        </div>
                    </div>
                    <div>
                        <div id="column-listing-search">
                            <div> <img class="img-property" src="images/bridge-icon.svg" alt="Matrix"></div>
                            <div><span class="badge badge-pill badge-secondary font-bw-mitga-low-weight"> 4.1/5 (very
                                    good)</span>
                                <span class="smallFonts font-bw-mitga-low-weight" style="font-size: 12px;">5879
                                    Rating</span>
                            </div>
                            <div>
                                <div class="favorite-icon">
                                    <input type="checkbox" class="favorite" id="favorite-<?= $index ?>" />
                                    <label for="favorite-<?= $index ?>">
                                        <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">
                                            <g id="Group" fill="none" fill-rule="evenodd"
                                                transform="translate(467 392)">
                                                <path
                                                    d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                                                    id="heart" fill="#AAB8C2" />
                                                <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5"
                                                    r="1.5" />

                                                <g id="grp7" opacity="0" transform="translate(7 6)">
                                                    <circle id="oval1" fill="#9CD8C3" cx="2" cy="6" r="2" />
                                                    <circle id="oval2" fill="#8CE8C3" cx="5" cy="2" r="2" />
                                                </g>

                                                <g id="grp6" opacity="0" transform="translate(0 28)">
                                                    <circle id="oval1" fill="#CC8EF5" cx="2" cy="7" r="2" />
                                                    <circle id="oval2" fill="#91D2FA" cx="3" cy="2" r="2" />
                                                </g>

                                                <g id="grp3" opacity="0" transform="translate(52 28)">
                                                    <circle id="oval2" fill="#9CD8C3" cx="2" cy="7" r="2" />
                                                    <circle id="oval1" fill="#8CE8C3" cx="4" cy="2" r="2" />
                                                </g>

                                                <g id="grp2" opacity="0" transform="translate(44 6)">
                                                    <circle id="oval2" fill="#CC8EF5" cx="5" cy="6" r="2" />
                                                    <circle id="oval1" fill="#CC8EF5" cx="2" cy="2" r="2" />
                                                </g>

                                                <g id="grp5" opacity="0" transform="translate(14 50)">
                                                    <circle id="oval1" fill="#91D2FA" cx="6" cy="5" r="2" />
                                                    <circle id="oval2" fill="#91D2FA" cx="2" cy="2" r="2" />
                                                </g>

                                                <g id="grp4" opacity="0" transform="translate(35 50)">
                                                    <circle id="oval1" fill="#F48EA7" cx="6" cy="5" r="2" />
                                                    <circle id="oval2" fill="#F48EA7" cx="2" cy="2" r="2" />
                                                </g>

                                                <g id="grp1" opacity="0" transform="translate(24)">
                                                    <circle id="oval1" fill="#9FC7FA" cx="2.5" cy="3" r="2" />
                                                    <circle id="oval2" fill="#9FC7FA" cx="7.5" cy="2" r="2" />
                                                </g>
                                            </g>
                                        </svg>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div id="column-4th-colomn-search">
                            <div> <span class="font-bw-mitga"
                                    style="font: bold;font-size: 13px;float: left;margin-left: 10px; color: #292931 ">
                                    Standard Double Room </span>
                            </div>
                            <div>
                                <span class="span-gap font-span font-bw-mitga-text " style=";margin-left: 10px"> <img
                                        class="img-property color-140F0F " src="images/baby-icon.svg"
                                        alt="Matrix">0-<span>9</span>YR </span>
                                <span class=" font-span font-bw-mitga-text"> <img class="img-property color-140F0F "
                                        src="images/adult-age-icon.svg" alt="Matrix"> <span>10</span>-<span>15</span>
                                    YR</span>
                                <span class="span-gap font-span font-bw-mitga-text"> <img
                                        class="img-property bed-icon-style " src="images/bed-hotel.svg" alt="Matrix">DB:
                                    <span class="margin-right-icon-search">3|</span>EB: <span
                                        class="margin-right-icon-search">4|</span>SB: <span
                                        class="margin-right-icon-search">3</span> </span>
                            </div>
                            <div> <span class="line-through-text font-color-E40967 font-bw-mitga"
                                    style="font-size: 13px;margin-left: 10px">₹ 10,990 </span> <span
                                    class=" color-586ADA  font-bw-mitga" style="font-size: 17px;margin-left: 6px">₹
                                    9000</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;  ?>
        </div>
        <div id="filterdiv" class="main-filter-overlay">
            <div id="Divf2" class="card overlay overlay2 scroll-search-filer "
                style="width: fit-content;height:fit-content;margin-top: 6px;box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.25);">
                <div style="height: 26px">
                    <img id="x" onclick="closeNav()" src="images/close-search-filter-icon.svg"
                        style="width: 16px;height: 13px;">
                </div>
                <div class="tab-accordion" style="margin-bottom: 10px">
                    <div class="tab-content">
                        <div class="tab-pane fade active show">
                            <div class="accordion" id="accordionExample">
                                <div class="card" style="margin-right: 25px;margin-left: 17px">
                                    <h2 class="mb-0" style="background-color:#fff;box-shadow: 0 0 0 0 #FFFFFF">
                                        <button class="btn btn-block text-left" type="button"
                                            onclick="functionchange(this);" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"
                                            style="color: #586ADA;">
                                            <strong> Destination Dates for Alapuzha </strong>
                                            <div class="float-right">
                                                <i class="fas fa-angle-down rotate-icon"></i>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="row">
                                            <div class="row "
                                                style="margin-left: 15px;margin-top: 15px;padding: 6px; display: flex;width: 870px;">
                                                <div>
                                                    <input type="checkbox" id="date1"
                                                        class="vertical-align-middle margin-left-check-box"
                                                        checked="checked">
                                                    <label style="margin: 8px" for="date1" class="pointerclass">15 Jul |
                                                        22 Friday </label>
                                                </div>
                                                <div>
                                                    <input class="vertical-align-middle margin-left-check-box "
                                                        type="checkbox" checked="checked">
                                                    <label style="margin: 8px">15 Jul | 22 Friday </label>
                                                </div>
                                                <div>
                                                    <input class="vertical-align-middle margin-left-check-box"
                                                        type="checkbox" checked="checked">
                                                    <label style="margin: 8px"> 15 Jul | 22 Friday </label>
                                                </div>
                                                <div>
                                                    <input class="vertical-align-middle margin-left-check-box"
                                                        type="checkbox" checked="checked">
                                                    <label style="margin: 8px">15 Jul 22 Friday </label>
                                                </div>
                                                <div>
                                                    <input type="checkbox"
                                                        class="vertical-align-middle margin-left-check-box"
                                                        checked="checked">
                                                    <label style="margin: 8px">15 Jul | 22 Friday </label>
                                                </div>
                                                <div>
                                                    <input class="vertical-align-middle margin-left-check-box"
                                                        type="checkbox" checked="checked">
                                                    <label style="margin: 8px">15 Jul | 22 Friday </label>
                                                </div>
                                                <div>
                                                    <input class="vertical-align-middle margin-left-check-box"
                                                        type="checkbox" checked="checked">
                                                    <label style="margin: 8px"> 15 Jul | 22 Friday </label>
                                                </div>
                                                <div>
                                                    <input class="vertical-align-middle margin-left-check-box"
                                                        type="checkbox" checked="checked">
                                                    <label style="margin: 8px">15 Jul 22 Friday </label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card  filter-card-list-slect">
                    <div class="row">
                        <div class="col-4">
                            <div style="display: block">
                                <!--                         <div class="form-group ">-->
                                <div> <label class="Labelclass-filter">Property Type</div>
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
                                <div> <label class="Labelclass-filter">Room View</div>
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
                                <div> <label class="Labelclass-filter">Food Type</div>
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
                                <div> <label class="Labelclass-filter">Property Rating</div>
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
                                <div> <label class="Labelclass-filter">Room Type</div>
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
                                <div> <label class="Labelclass-filter">Occupancy</div>
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
                    <div class="row">

                        <div class="row " style="margin-left: 15px; display: flex;width: 870px;">
                            <div>
                                <input type="checkbox" id="garden_id"
                                    class="vertical-align-middle margin-left-check-box" checked="checked">
                                <label class="pointerclass" style="margin: 8px" for="garden_id">Garden </label>
                            </div>
                            <div>
                                <input class="vertical-align-middle margin-left-check-box" type="checkbox"
                                    checked="checked">
                                <label style="margin: 8px"> Lawn </label>
                            </div>
                            <div>
                                <input class="vertical-align-middle margin-left-check-box" type="checkbox"
                                    checked="checked">
                                <label style="margin: 8px"> Wheel chair </label>
                            </div>
                            <div>
                                <input class="vertical-align-middle margin-left-check-box" type="checkbox"
                                    checked="checked">
                                <label style="margin: 8px">Lawn</label>
                            </div>
                            <div>
                                <input class="vertical-align-middle margin-left-check-box" type="checkbox"
                                    checked="checked">
                                <label style="margin: 8px">Pathway for differently abled</label>
                            </div>
                            <div>
                                <input class="vertical-align-middle margin-left-check-box" type="checkbox"
                                    checked="checked">
                                <label style="margin: 8px">Swimming Pool</label>
                            </div>
                            <div>
                                <input class="vertical-align-middle margin-left-check-box" type="checkbox"
                                    checked="checked">
                                <label style="margin: 8px">Restaurant</label>
                            </div>
                            <div>
                                <input class="vertical-align-middle margin-left-check-box" type="checkbox"
                                    checked="checked">
                                <label style="margin: 8px">Parking</label>
                            </div>
                            <div>
                                <input class="vertical-align-middle margin-left-check-box" type="checkbox"
                                    checked="checked">
                                <label style="margin: 8px">Parking</label>
                            </div>


                        </div>

                    </div>
                </div>
                <div class="card  filter-card-list">
                    <div class="title-search-property">
                        Room Amenities
                    </div>
                    <div class="row">

                        <div class="row " style="margin-left: 15px; display: flex;width: 870px;">

                            <div>
                                <input type="checkbox" class="vertical-align-middle margin-left-check-box"
                                    checked="checked">
                                <label class="pointerclass" style="margin: 8px" for="garden_id">Garden </label>
                            </div>
                            <div>
                                <input class="vertical-align-middle margin-left-check-box" type="checkbox"
                                    checked="checked " style="margin-left: 15px">
                                <label style="margin: 8px"> Lawn </label>
                            </div>
                            <div>
                                <input class="vertical-align-middle margin-left-check-box" type="checkbox"
                                    checked="checked">
                                <label style="margin: 8px"> Wheel chair </label>
                            </div>
                            <div>
                                <input class="vertical-align-middle margin-left-check-box" type="checkbox"
                                    checked="checked">
                                <label style="margin: 8px">Lawn</label>
                            </div>
                            <div>
                                <input class="vertical-align-middle margin-left-check-box" type="checkbox"
                                    checked="checked">
                                <label style="margin: 8px">Pathway for differently abled</label>
                            </div>
                            <div>
                                <input class="vertical-align-middle margin-left-check-box" type="checkbox"
                                    checked="checked">
                                <label style="margin: 8px">Swimming Pool</label>
                            </div>
                            <div>
                                <input class="vertical-align-middle margin-left-check-box" type="checkbox"
                                    checked="checked">
                                <label style="margin: 8px">Restaurant</label>
                            </div>
                            <div>
                                <input class="vertical-align-middle margin-left-check-box" type="checkbox"
                                    checked="checked">
                                <label style="margin: 8px">Parking</label>
                            </div>
                            <div>
                                <input class="vertical-align-middle margin-left-check-box" type="checkbox"
                                    checked="checked">
                                <label style="margin: 8px">Parking</label>
                            </div>


                        </div>

                    </div>
                </div>
                <div class="row" style="margin-left: 27px;margin-bottom: 12px;vertical-align: center">
                    <div style="display: block;margin-right: 35px">
                        <BUTTON type="text" class="buttonSaveFilter"> Apply </BUTTON>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1 </a></li>
            <li class="page-item "><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>

</div>
<div class="modal fade" id="searchPopupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog search-popup-wrapper" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="images/search-popup/close-btn.svg" alt="">
                </button>
            </div>
            <div class="modal-body">
                <div class="search-result-card">
                    <div class="search-result-left">
                        <div class="card-details">
                            <div class="resort-details-area">
                                <figure>
                                    <img src="images/search-popup/hotel-img.png" alt="">
                                </figure>
                                <article>
                                    <div class="card-heading-row">
                                        <h4 class="card-heading">Misty Rock Resort</h4>
                                        <!-- <div class="star-wrapper">
                                            <img src="images/search-popup/star-icon.svg" alt="">
                                            <img src="images/search-popup/star-icon.svg" alt="">
                                            <img src="images/search-popup/star-icon.svg" alt="">
                                            <img src="images/search-popup/star-icon.svg" alt="">
                                            <img src="images/search-popup/star-icon.svg" alt="">
                                        </div> -->
                                        <span class="room-rating">Luxury</span>
                                    </div>
                                    <div class="resort-location">
                                        <span class="location-icon"><img src="images/location-icon.png" alt=""></span>
                                        <h5 class="location-name">Wayanad, Kerala, India</h5>
                                    </div>
                                    <div class="building-details">
                                        <div class="resort-icons">
                                            <img src="images/resort-icons/no-smoking-icon.svg" alt="">
                                            <img src="images/resort-icons/no-pets.svg" alt="">
                                        </div>
                                        <div class="building-type-wrapper">
                                            <span class="building-type">APARTMENT</span>
                                        </div>
                                        <div class="phone-number-wrapper">
                                            <span class="phone-number-icon"><img src="images/call-icon.svg"
                                                    alt=""></span>
                                            <span class="phone-number">+91 123 456 7890 </span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="search-result-right">
                        <div class="enquiry-box-wrapper">
                            <div class="enquiry-number">
                                <h6>Enq No:</h6>
                                <h3>2222/22</h3>
                            </div>
                            <div class="enquiry-details">
                                <div class="enquiry-row">
                                    <span class="enquiry-img"><img src="images/search-popup/user-icon.svg"
                                            alt=""></span>
                                    <span class="enquiry-content">Swaroop Swaminathan</span>
                                </div>
                                <div class="enquiry-row">
                                    <span class="enquiry-img"><img src="images/search-popup/call-icon.svg"
                                            alt=""></span>
                                    <span class="enquiry-content">+91 7012761238, +91 8012821458</span>
                                </div>
                                <div class="enquiry-row">
                                    <span class="enquiry-img"><img src="images/search-popup/mail-icon.svg"
                                            alt=""></span>
                                    <span class="enquiry-content"><a
                                            href="mailto:swaroop123@yahoo.in">swaroop123@yahoo.in</a></span>
                                </div>
                            </div>
                            <div class="enquiry-chat-icon">
                                <img src="images/search-popup/chat-icon.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="matching-rooms-wrapper">
                    <div class="matching-rooms-head">3 Matching Rooms Found</div>

                    <div class="matching-rooms-container">
                        <div class="matching-rooms-box-wrapper">
                            <div class="matching-rooms-box-single">
                                <div class="room-content">
                                    <div class="resort-details-area">
                                        <figure>
                                            <img class="hotel-icon-img" src="images/search-popup/hotel-img1.png" alt="">
                                        </figure>
                                        <article>
                                            <div class="card-heading-row">
                                                <div class="room-head-info">
                                                    <div class="room-head-area">
                                                        <h4 class="card-heading">Standard Rooms with Pool</h4>
                                                        <h4 class="room-size-heading">2500 SQ FT</h4>
                                                    </div>
                                                    <div class="door-info">
                                                        <img src="images/search-popup/door-icon.svg" alt="">
                                                        3/10
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="room-cat-view-details">
                                                <div class="room-cat">
                                                    <img src="images/search-popup/food-icon.svg" alt="">
                                                    <span class="room-cat-text">EP (Room Only)</span>
                                                </div>
                                                <div class="view-details">
                                                    <button class="view-details-btn" id="view-details-btn-01"
                                                        onClick="viewDetails(1)">View
                                                        Details</button>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="room-policy-occupancy-wrapper">
                                    <div class="room-policy-occupancy-single">
                                        <div class="room-policy-occupancy-heading">Room's Child Policy</div>
                                        <div class="room-policy-occupancy-content">
                                            <div class="room-policy-occupancy-content-single">
                                                <img src="images/search-popup/child-icon.svg" style="width:18px"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
                                                    class="room-policy-occupancy-icon" alt="">
                                                <span class="policy-text">0-7 YR</span>
                                            </div>
                                            <div class="room-policy-occupancy-content-single">
                                                <img src="images/search-popup/child-icon-1.svg" style="width:18px"
                                                    class="room-policy-occupancy-icon" alt="">
                                                <!-- <div class="tooltip-main">
                                                    <span class="tooltip-button" aria-expanded="false">8-15 YR</span>
                                                    <div class="tooltip-content tooltip-bottom" role="tooltip"
                                                        tabindex="0">
                                                        <h2 class="tooltip-heading">Tooltip html item</h2>
                                                        <p class="tooltip-para">Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit. Cras
                                                            convallis sodales erat vel accumsan.</p>
                                                    </div>
                                                </div> -->
                                                <div class="tooltip-wrapper">
                                                    <div class="recent-link">
                                                        <a href="javascript:void(0);" class="policy-text">8-15 YR</a>
                                                        <span class="hovercard">
                                                            <div class="tooltiptext">
                                                                <h4 class="tooltip-head">Heading</h4>
                                                                <p class="tooltip-para">Crumb Collector is a minimal and
                                                                    easy to use
                                                                    bookmark manager.</p>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-policy-occupancy-single">
                                        <div class="room-policy-occupancy-heading">Default Occupancy</div>
                                        <div class="room-policy-occupancy-content">
                                            <div class="room-policy-occupancy-content-single">
                                                <img src="images/search-popup/bed-icon.svg" style="width:28px"
                                                    class="room-policy-occupancy-icon" alt="">
                                                <span>DB: XI EB: XI SB: X</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="days-price-details">
                                    <div class="stay-days-wrapper">
                                        <label class="checkbox-container">10 Days Stay
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="room-price-wrapper">
                                        <div class="old-price">₹ 10'246</div>
                                        <div class="current-price">₹ 10'246</div>
                                    </div>
                                    <div class="tax-details">Include Mandatory Dinner & Tax</div>
                                </div>
                            </div>
                            <div class="matching-boxes-main" id="matching-boxes-main-1">
                                <div class="matching-each-room-wrapper">
                                    <div class="room-single-content-area">
                                        <div class="room-single-header day-block">Day 1 | 10 Aug 2022</div>
                                        <div class="room-single-content-wrapper">
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">Rooms</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">EBA</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-single-content-area">
                                        <div class="room-single-header">
                                            <div class="icon-text-area">
                                                In Enq:
                                                <div class="icon-with-notification"><img
                                                        src="images/search-popup/food-icon.svg" alt=""><span
                                                        class="icon-notofi">!</span></div>
                                                AP (B + L + D)
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 17px;"
                                                        src="images/search-popup/child-icon-1.svg" alt=""></div>
                                                99
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 11px;"
                                                        src="images/search-popup/adult-icon.svg" alt=""></div>
                                                50
                                            </div>
                                        </div>
                                        <div class="room-single-content-wrapper">
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">CBW</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">CNB</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">SGL</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-single-content-area">
                                        <div class="room-single-header">
                                            <div class="icon-text-area">
                                                In Enq:
                                                <div class="icon-with-notification"><img
                                                        src="images/search-popup/food-icon.svg" alt=""><span
                                                        class="icon-notofi">!</span></div>
                                                AP (B + L + D)
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 17px;"
                                                        src="images/search-popup/child-icon-1.svg" alt=""></div>
                                                99
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 11px;"
                                                        src="images/search-popup/adult-icon.svg" alt=""></div>
                                                50
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 17px;"
                                                        src="images/search-popup/child-icon.svg" alt=""></div>
                                                50
                                            </div>
                                        </div>
                                        <div class="room-single-content-wrapper">
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">FOC</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">Dinner</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">Day Total</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-info-wrapper">
                                        <div class="checkbox-wrapper">
                                            <label class="checkbox-container">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="info-icon-main">
                                            <div class="info-icon">!</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="matching-each-room-wrapper active">
                                    <div class="room-single-content-area">
                                        <div class="room-single-header day-block">Day 1 | 10 Aug 2022</div>
                                        <div class="room-single-content-wrapper">
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">Rooms</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">EBA</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-single-content-area">
                                        <div class="room-single-header">
                                            <div class="icon-text-area">
                                                In Enq:
                                                <div class="icon-with-notification"><img
                                                        src="images/search-popup/food-icon.svg" alt=""><span
                                                        class="icon-notofi">!</span></div>
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 17px;"
                                                        src="images/search-popup/child-icon-1.svg" alt=""></div>
                                                99
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 11px;"
                                                        src="images/search-popup/adult-icon.svg" alt=""></div>
                                                50
                                            </div>
                                        </div>
                                        <div class="room-single-content-wrapper">
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">CBW</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">CNB</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">SGL</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-single-content-area">
                                        <div class="room-single-header">
                                            <div class="icon-text-area">
                                                In Enq:
                                                <div class="icon-with-notification"><img
                                                        src="images/search-popup/food-icon.svg" alt=""><span
                                                        class="icon-notofi">!</span></div>
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 17px;"
                                                        src="images/search-popup/child-icon-1.svg" alt=""></div>
                                                99
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 11px;"
                                                        src="images/search-popup/adult-icon.svg" alt=""></div>
                                                50
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 17px;"
                                                        src="images/search-popup/child-icon.svg" alt=""></div>
                                                50
                                            </div>
                                        </div>
                                        <div class="room-single-content-wrapper">
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">FOC</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">Dinner</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">Day Total</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-info-wrapper">
                                        <div class="checkbox-wrapper">
                                            <label class="checkbox-container">
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="info-icon-main">
                                            <div class="info-icon">!</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="matching-rooms-box-wrapper">
                            <div class="matching-rooms-box-single">
                                <div class="room-content">
                                    <div class="resort-details-area">
                                        <figure>
                                            <img class="hotel-icon-img" src="images/search-popup/hotel-img1.png" alt="">
                                        </figure>
                                        <article>
                                            <div class="card-heading-row">
                                                <div class="room-head-info">
                                                    <div class="room-head-area">
                                                        <h4 class="card-heading">Standard Rooms with Pool</h4>
                                                        <h4 class="room-size-heading">2500 SQ FT</h4>
                                                    </div>
                                                    <div class="door-info">
                                                        <img src="images/search-popup/door-icon.svg" alt="">
                                                        3/10
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="room-cat-view-details">
                                                <div class="room-cat">
                                                    <img src="images/search-popup/food-icon.svg" alt="">
                                                    <span class="room-cat-text">EP (Room Only)</span>
                                                </div>
                                                <div class="view-details">
                                                    <button class="view-details-btn" id="view-details-btn-02"
                                                        onClick="viewDetails(2)">View
                                                        Details</button>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="room-policy-occupancy-wrapper">
                                    <div class="room-policy-occupancy-single">
                                        <div class="room-policy-occupancy-heading">Room's Child Policy</div>
                                        <div class="room-policy-occupancy-content">
                                            <div class="room-policy-occupancy-content-single">
                                                <img src="images/search-popup/child-icon.svg" style="width:18px"
                                                    class="room-policy-occupancy-icon" alt="">
                                                <span>0-7 YR</span>
                                            </div>
                                            <div class="room-policy-occupancy-content-single">
                                                <img src="images/search-popup/child-icon-1.svg" style="width:17px"
                                                    class="room-policy-occupancy-icon" alt="">
                                                <!-- <span>8-15 YR</span> -->
                                                <div class="tooltip-wrapper">
                                                    <div class="recent-link">
                                                        <a href="javascript:void(0);" class="policy-text">8-15 YR</a>
                                                        <span class="hovercard">
                                                            <div class="tooltiptext">
                                                                <h4 class="tooltip-head">Heading</h4>
                                                                <p class="tooltip-para">Crumb Collector is a minimal and
                                                                    easy to use
                                                                    bookmark manager.</p>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-policy-occupancy-single">
                                        <div class="room-policy-occupancy-heading">Default Occupancy</div>
                                        <div class="room-policy-occupancy-content">
                                            <div class="room-policy-occupancy-content-single">
                                                <img src="images/search-popup/bed-icon.svg" style="width:28px"
                                                    class="room-policy-occupancy-icon" alt="">
                                                <span>DB: XI EB: XI SB: X</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="days-price-details">
                                    <div class="stay-days-wrapper">
                                        <label class="checkbox-container">10 Days Stay
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="room-price-wrapper">
                                        <div class="old-price">₹ 10'246</div>
                                        <div class="current-price">₹ 10'246</div>
                                    </div>
                                    <div class="tax-details">Include Mandatory Dinner & Tax</div>
                                </div>
                            </div>
                            <div class="matching-boxes-main" id="matching-boxes-main-2">
                                <div class="matching-each-room-wrapper">
                                    <div class="room-single-content-area">
                                        <div class="room-single-header day-block">Day 1 | 10 Aug 2022</div>
                                        <div class="room-single-content-wrapper">
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">Rooms</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">EBA</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-single-content-area">
                                        <div class="room-single-header">
                                            <div class="icon-text-area">
                                                In Enq:
                                                <div class="icon-with-notification"><img
                                                        src="images/search-popup/food-icon.svg" alt=""><span
                                                        class="icon-notofi">!</span></div>
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 17px;"
                                                        src="images/search-popup/child-icon-1.svg" alt=""></div>
                                                99
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 11px;"
                                                        src="images/search-popup/adult-icon.svg" alt=""></div>
                                                50
                                            </div>
                                        </div>
                                        <div class="room-single-content-wrapper">
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">CBW</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">CNB</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">SGL</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-single-content-area">
                                        <div class="room-single-header">
                                            <div class="icon-text-area">
                                                In Enq:
                                                <div class="icon-with-notification"><img
                                                        src="images/search-popup/food-icon.svg" alt=""><span
                                                        class="icon-notofi">!</span></div>
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 17px;"
                                                        src="images/search-popup/child-icon-1.svg" alt=""></div>
                                                99
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 11px;"
                                                        src="images/search-popup/adult-icon.svg" alt=""></div>
                                                50
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 17px;"
                                                        src="images/search-popup/child-icon.svg" alt=""></div>
                                                50
                                            </div>
                                        </div>
                                        <div class="room-single-content-wrapper">
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">FOC</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">Dinner</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">Day Total</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-info-wrapper">
                                        <div class="checkbox-wrapper">
                                            <label class="checkbox-container">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="info-icon-main">
                                            <div class="info-icon">!</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="matching-each-room-wrapper active">
                                    <div class="room-single-content-area">
                                        <div class="room-single-header day-block">Day 1 | 10 Aug 2022</div>
                                        <div class="room-single-content-wrapper">
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">Rooms</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">EBA</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-single-content-area">
                                        <div class="room-single-header">
                                            <div class="icon-text-area">
                                                In Enq:
                                                <div class="icon-with-notification"><img
                                                        src="images/search-popup/food-icon.svg" alt=""><span
                                                        class="icon-notofi">!</span></div>
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 17px;"
                                                        src="images/search-popup/child-icon-1.svg" alt=""></div>
                                                99
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 11px;"
                                                        src="images/search-popup/adult-icon.svg" alt=""></div>
                                                50
                                            </div>
                                        </div>
                                        <div class="room-single-content-wrapper">
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">CBW</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">CNB</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">SGL</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-single-content-area">
                                        <div class="room-single-header">
                                            <div class="icon-text-area">
                                                In Enq:
                                                <div class="icon-with-notification"><img
                                                        src="images/search-popup/food-icon.svg" alt=""><span
                                                        class="icon-notofi">!</span></div>
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 17px;"
                                                        src="images/search-popup/child-icon-1.svg" alt=""></div>
                                                99
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 11px;"
                                                        src="images/search-popup/adult-icon.svg" alt=""></div>
                                                50
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 17px;"
                                                        src="images/search-popup/child-icon.svg" alt=""></div>
                                                50
                                            </div>
                                        </div>
                                        <div class="room-single-content-wrapper">
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">FOC</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">Dinner</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">Day Total</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-info-wrapper">
                                        <div class="checkbox-wrapper">
                                            <label class="checkbox-container">
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="info-icon-main">
                                            <div class="info-icon">!</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="matching-rooms-box-wrapper">
                            <div class="matching-rooms-box-single">
                                <div class="room-content">
                                    <div class="resort-details-area">
                                        <figure>
                                            <img class="hotel-icon-img" src="images/search-popup/hotel-img1.png" alt="">
                                        </figure>
                                        <article>
                                            <div class="card-heading-row">
                                                <div class="room-head-info">
                                                    <div class="room-head-area">
                                                        <h4 class="card-heading">Luxury Suit</h4>
                                                        <h4 class="room-size-heading">2500 SQ FT</h4>
                                                    </div>
                                                    <div class="door-info">
                                                        <img src="images/search-popup/door-icon.svg" alt="">
                                                        3/10
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="room-cat-view-details">
                                                <div class="room-cat">
                                                    <img src="images/search-popup/food-icon.svg" alt="">
                                                    <span class="room-cat-text">EP (Room Only)</span>
                                                </div>
                                                <div class="view-details">
                                                    <button class="view-details-btn" id="view-details-btn-03"
                                                        onClick="viewDetails(3)">View
                                                        Details</button>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="room-policy-occupancy-wrapper">
                                    <div class="room-policy-occupancy-single">
                                        <div class="room-policy-occupancy-heading">Room's Child Policy</div>
                                        <div class="room-policy-occupancy-content">
                                            <div class="room-policy-occupancy-content-single">
                                                <img src="images/search-popup/child-icon.svg" style="width:18px"
                                                    class="room-policy-occupancy-icon" alt="">
                                                <span>0-7 YR</span>
                                            </div>
                                            <div class="room-policy-occupancy-content-single">
                                                <img src="images/search-popup/child-icon-1.svg" style="width:18px"
                                                    class="room-policy-occupancy-icon" alt="">
                                                <div class="tooltip-wrapper">
                                                    <div class="recent-link">
                                                        <a href="javascript:void(0);" class="policy-text">8-15 YR</a>
                                                        <span class="hovercard">
                                                            <div class="tooltiptext">
                                                                <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                                <p class="tooltip-para">Crumb Collector is a minimal and
                                                                    easy to use
                                                                    bookmark manager.</p>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-policy-occupancy-single">
                                        <div class="room-policy-occupancy-heading">Default Occupancy</div>
                                        <div class="room-policy-occupancy-content">
                                            <div class="room-policy-occupancy-content-single">
                                                <img src="images/search-popup/bed-icon.svg" style="width:28px"
                                                    class="room-policy-occupancy-icon" alt="">
                                                <!-- <span>DB: XI EB: XI SB: X</span> -->
                                                <div class="tooltip-main">
                                                    <span class="tooltip-button" aria-expanded="false">8-15 YR</span>
                                                    <div class="tooltip-content top tooltip-top" role="tooltip"
                                                        tabindex="0">
                                                        <h2 class="tooltip-heading">Tooltip html item</h2>
                                                        <p class="tooltip-para">Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit. Cras
                                                            convallis sodales erat vel accumsan.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="days-price-details">
                                    <div class="stay-days-wrapper">
                                        <label class="checkbox-container">10 Days Stay
                                            <input type="checkbox" onclick="Toaster()">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="room-price-wrapper">
                                        <div class="old-price">₹ 10'246</div>
                                        <div class="current-price">₹ 10'246</div>
                                    </div>
                                    <div class="tax-details">Include Mandatory Dinner & Tax</div>
                                </div>
                            </div>
                            <div class="matching-boxes-main" id="matching-boxes-main-3">
                                <div class="matching-each-room-wrapper">
                                    <div class="room-single-content-area">
                                        <div class="room-single-header day-block">Day 1 | 10 Aug 2022</div>
                                        <div class="room-single-content-wrapper">
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">Rooms</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">EBA</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-single-content-area">
                                        <div class="room-single-header">
                                            <div class="icon-text-area">
                                                In Enq:
                                                <div class="icon-with-notification"><img
                                                        src="images/search-popup/food-icon.svg" alt=""><span
                                                        class="icon-notofi">!</span></div>
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 17px;"
                                                        src="images/search-popup/child-icon-1.svg" alt=""></div>
                                                99
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 11px;"
                                                        src="images/search-popup/adult-icon.svg" alt=""></div>
                                                50
                                            </div>
                                        </div>
                                        <div class="room-single-content-wrapper">
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">CBW</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">CNB</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">SGL</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-single-content-area">
                                        <div class="room-single-header">
                                            <div class="icon-text-area">
                                                In Enq:
                                                <div class="icon-with-notification"><img
                                                        src="images/search-popup/food-icon.svg" alt=""><span
                                                        class="icon-notofi">!</span></div>
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 17px;"
                                                        src="images/search-popup/child-icon-1.svg" alt=""></div>
                                                99
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 11px;"
                                                        src="images/search-popup/adult-icon.svg" alt=""></div>
                                                50
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 17px;"
                                                        src="images/search-popup/child-icon.svg" alt=""></div>
                                                50
                                            </div>
                                        </div>
                                        <div class="room-single-content-wrapper">
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">FOC</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">Dinner</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">Day Total</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-info-wrapper">
                                        <div class="checkbox-wrapper">
                                            <label class="checkbox-container">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="info-icon-main">
                                            <div class="info-icon">!</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="matching-each-room-wrapper active">
                                    <div class="room-single-content-area">
                                        <div class="room-single-header day-block">Day 1 | 10 Aug 2022</div>
                                        <div class="room-single-content-wrapper">
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">Rooms</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">EBA</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-single-content-area">
                                        <div class="room-single-header">
                                            <div class="icon-text-area">
                                                In Enq:
                                                <div class="icon-with-notification"><img
                                                        src="images/search-popup/food-icon.svg" alt=""><span
                                                        class="icon-notofi">!</span></div>
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 17px;"
                                                        src="images/search-popup/child-icon-1.svg" alt=""></div>
                                                99
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 11px;"
                                                        src="images/search-popup/adult-icon.svg" alt=""></div>
                                                50
                                            </div>
                                        </div>
                                        <div class="room-single-content-wrapper">
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">CBW</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">CNB</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">SGL</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-single-content-area">
                                        <div class="room-single-header">
                                            <div class="icon-text-area">
                                                In Enq:
                                                <div class="icon-with-notification"><img
                                                        src="images/search-popup/food-icon.svg" alt=""><span
                                                        class="icon-notofi">!</span></div>
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 17px;"
                                                        src="images/search-popup/child-icon-1.svg" alt=""></div>
                                                99
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 11px;"
                                                        src="images/search-popup/adult-icon.svg" alt=""></div>
                                                50
                                            </div>
                                            <div class="icon-text-area">
                                                <div class="icon-with-notification"><img style="width: 17px;"
                                                        src="images/search-popup/child-icon.svg" alt=""></div>
                                                50
                                            </div>
                                        </div>
                                        <div class="room-single-content-wrapper">
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">FOC</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">Dinner</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                            <div class="room-single-content">
                                                <div class="room-single-content-heading">Day Total</div>
                                                <div class="room-single-content-value">7'350000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-info-wrapper">
                                        <div class="checkbox-wrapper">
                                            <label class="checkbox-container">
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="info-icon-main">
                                            <div class="info-icon">!</div>
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
</div>
<!-- Flexbox container for aligning the toasts -->
<script>
$(window).on('load', function() {
    $('#searchPopupModal').modal('show');
});
/* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
function myFunctionSearch() {
    if (document.getElementById('myDropdownResult').style.display == 'none') {
        document.getElementById('myDropdownResult').style.display = 'block';
    } else {
        document.getElementById('myDropdownResult').style.display = 'none';
    }

}

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInputSearch");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdownResult");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}

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
    $("#Divf2").slideDown(100);

    // $("#Divf2").show('fadeOut');
}

function closeNav() {
    // document.getElementById("Divf2").style.height = "0%";
    // document.getElementById("filterdiv").style.height = "0%";
    // $("#Divf2").removeClass("overlay2");
    $("#filterdiv").hide();
    $("#Divf2").hide('slide');
}

function FunctionFilterView() {
    document.getElementById("myDropdown-view").classList.toggle("show-content");
}


function viewDetails(id) {
    $(`#matching-boxes-main-${id}`).slideToggle(500);
    $(`#view-details-btn-0${id}`).toggleClass(`view-details-on`);
}

function Toaster() {
    toastr.success("Hellow");
}
// $(function() {
//     $('[data-toggle="tooltip"]').tooltip()
// })

// const tooltips = document.querySelectorAll('.tooltip');

// Array.prototype.forEach.call(tooltips, function(el, i) {
//     let tooltipButton = el.querySelector('.tooltip-button'),
//         tooltipContent = el.querySelector('.tooltip-content'),
//         /* Search for last focussable element inside tooltip (so that we can remove the tooltip after next tab) */
//         tooltipContentItemsFocusable = tooltipContent.querySelectorAll(
//             'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'),
//         tooltipContentItems = tooltipContentItemsFocusable[tooltipContentItemsFocusable.length - 1];

//     /* set the tooltip position based on a top tooltip on screen */
//     function setTooltipPosition() {
//         /* if any positioning classes present -> remove them */
//         positionClasses = ['top', 'right', 'bottom', 'left'];
//         positionClasses.forEach(function(item) {
//             tooltipContent.classList.remove(item);
//         });


//         /* Calculate tooltip space */

//         const tooltipSpace = tooltipButton.getBoundingClientRect();
//         const tooltipBox = tooltipContent.getBoundingClientRect();
//         const tooltipRight = tooltipBox.right + tooltipBox.width;

//         if (tooltipSpace.top > tooltipBox.height && tooltipBox.left > 0 && tooltipRight < window.innerWidth) {
//             tooltipContent.classList.add('top')
//         } else if (tooltipSpace.bottom > tooltipBox.height && tooltipBox.left > 0 && tooltipRight < window
//             .innerWidth) {
//             tooltipContent.classList.add('bottom')
//         } else {
//             if (tooltipBox.left > 0 && tooltipRight > window.innerWidth) {
//                 tooltipContent.classList.add('left')
//             } else if (tooltipBox.left < 0 && tooltipRight < window.innerWidth) {
//                 tooltipContent.classList.add('right')
//             } else {
//                 tooltipContent.classList.add('bottom')
//             }
//         }
//     }

//     setTooltipPosition();
//     /* retrigger position on resize  */
//     window.addEventListener("resize", () => {
//         setTooltipPosition();
//     });

//     let mouseOverTooltip = false,
//         mouseOverTooltipButton = false,
//         focusOnTooltip = false;
//     tooltipButton.addEventListener('click', function(element) {
//         clicktooltipContent()
//     });
//     tooltipButton.addEventListener('mouseover', function(element) {
//         mouseOverTooltipButton = true;
//         showtooltipContent()
//     });
//     tooltipButton.addEventListener('mouseout', function(element) {
//         mouseOverTooltipButton = false;
//         /* Set small timeout for removing the tooltip to make user able to interract  */
//         setTimeout(function() {
//             if (!mouseOverTooltip) {
//                 hidetooltipContent()
//             }
//         }, 200);
//     });
//     tooltipButton.addEventListener('focus', function(element) {
//         showtooltipContent()
//     });
//     tooltipButton.addEventListener('blur', function(element) {
//         /* Set small timeout for removing the tooltip to make user able to interract  */
//         setTimeout(function() {
//             if (!focusOnTooltip) {
//                 hidetooltipContent()
//             }
//         }, 200);
//     });

//     /* escape key closes tooltip  */
//     tooltipButton.addEventListener('keyup', function(element) {
//         if (event.keyCode == 27) {
//             hidetooltipContent();
//         };
//     });
//     tooltipContent.addEventListener('keyup', function(element) {
//         if (event.keyCode == 27) {
//             hidetooltipContent();
//         };
//     });


//     /* default mouse enters and leave  */
//     tooltipContent.addEventListener('mouseenter', function(element) {
//         mouseOverTooltip = true;
//     });
//     tooltipContent.addEventListener('mouseleave', function(element) {
//         mouseOverTooltip = false;
//         /* Set small timeout for removing the tooltip to make user able to interract  */
//         setTimeout(function() {
//             if (!mouseOverTooltipButton) {
//                 hidetooltipContent()
//             }
//         }, 200);

//     });
//     tooltipContent.addEventListener('focus', function(element) {
//         focusOnTooltip = true;
//         showtooltipContent()
//     });
//     if (tooltipContentItemsFocusable.length > 0) {
//         tooltipContentItems.addEventListener('focus', function(element) {
//             focusOnTooltip = true;
//             showtooltipContent()
//         });
//         tooltipContentItems.addEventListener('blur', function(element) {
//             focusOnTooltip = false;
//             hidetooltipContent()
//         });
//     } else {
//         tooltipContent.addEventListener('blur', function(element) {
//             focusOnTooltip = false;
//             hidetooltipContent()
//         });
//     }


//     /* Functions for showing and hiding tooltip, add aria-expanded on button, not mandatory, but gives people with voice over an indicator something happened */
//     function clicktooltipContent() {
//         if (tooltipButton.getAttribute('aria-expanded') == 'true') {
//             tooltipContent.classList.remove('active');
//             tooltipButton.setAttribute('aria-expanded', 'false');
//         } else {
//             tooltipContent.classList.add('active');
//             tooltipButton.setAttribute('aria-expanded', 'true');
//         };
//     }

//     function showtooltipContent() {
//         tooltipContent.classList.add('active');
//         tooltipButton.setAttribute('aria-expanded', 'true');
//     }

//     function hidetooltipContent() {
//         tooltipContent.classList.remove('active');
//         tooltipButton.setAttribute('aria-expanded', 'false');
//     }
// });

// BOF Tooltip JS
const tooltips = document.querySelectorAll('.tooltip-main');

Array.prototype.forEach.call(tooltips, function(el, i) {
    let tooltipButton = el.querySelector('.tooltip-button'),
        tooltipContent = el.querySelector('.tooltip-content'),
        /* Search for last focussable element inside tooltip (so that we can remove the tooltip after next tab) */
        tooltipContentItemsFocusable = tooltipContent.querySelectorAll(
            'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'),
        tooltipContentItems = tooltipContentItemsFocusable[tooltipContentItemsFocusable.length - 1];

    /* set the tooltip position based on a top tooltip on screen */
    function setTooltipPosition() {
        /* if any positioning classes present -> remove them */
        positionClasses = ['top', 'right', 'bottom', 'left'];
        positionClasses.forEach(function(item) {
            tooltipContent.classList.remove(item);
        });


        /* Calculate tooltip space */

        const tooltipSpace = tooltipButton.getBoundingClientRect();
        const tooltipBox = tooltipContent.getBoundingClientRect();
        const tooltipRight = tooltipBox.right + tooltipBox.width;

        if (tooltipSpace.top > tooltipBox.height && tooltipBox.left > 0 && tooltipRight < window.innerWidth) {
            tooltipContent.classList.add('top')
        } else if (tooltipSpace.bottom > tooltipBox.height && tooltipBox.left > 0 && tooltipRight < window
            .innerWidth) {
            tooltipContent.classList.add('bottom')
        } else {
            if (tooltipBox.left > 0 && tooltipRight > window.innerWidth) {
                tooltipContent.classList.add('left')
            } else if (tooltipBox.left < 0 && tooltipRight < window.innerWidth) {
                tooltipContent.classList.add('right')
            } else {
                tooltipContent.classList.add('bottom')
            }
        }
    }

    setTooltipPosition();
    /* retrigger position on resize  */
    window.addEventListener("resize", () => {
        setTooltipPosition();
    });

    let mouseOverTooltip = false,
        mouseOverTooltipButton = false,
        focusOnTooltip = false;
    tooltipButton.addEventListener('click', function(element) {
        clicktooltipContent()
    });
    tooltipButton.addEventListener('mouseover', function(element) {
        mouseOverTooltipButton = true;
        showtooltipContent()
    });
    tooltipButton.addEventListener('mouseout', function(element) {
        mouseOverTooltipButton = false;
        /* Set small timeout for removing the tooltip to make user able to interract  */
        setTimeout(function() {
            if (!mouseOverTooltip) {
                hidetooltipContent()
            }
        }, 200);
    });
    tooltipButton.addEventListener('focus', function(element) {
        showtooltipContent()
    });
    tooltipButton.addEventListener('blur', function(element) {
        /* Set small timeout for removing the tooltip to make user able to interract  */
        setTimeout(function() {
            if (!focusOnTooltip) {
                hidetooltipContent()
            }
        }, 200);
    });

    /* escape key closes tooltip  */
    tooltipButton.addEventListener('keyup', function(element) {
        if (event.keyCode == 27) {
            hidetooltipContent();
        };
    });
    tooltipContent.addEventListener('keyup', function(element) {
        if (event.keyCode == 27) {
            hidetooltipContent();
        };
    });


    /* default mouse enters and leave  */
    tooltipContent.addEventListener('mouseenter', function(element) {
        mouseOverTooltip = true;
    });
    tooltipContent.addEventListener('mouseleave', function(element) {
        mouseOverTooltip = false;
        /* Set small timeout for removing the tooltip to make user able to interract  */
        setTimeout(function() {
            if (!mouseOverTooltipButton) {
                hidetooltipContent()
            }
        }, 200);

    });
    tooltipContent.addEventListener('focus', function(element) {
        focusOnTooltip = true;
        showtooltipContent()
    });
    if (tooltipContentItemsFocusable.length > 0) {
        tooltipContentItems.addEventListener('focus', function(element) {
            focusOnTooltip = true;
            showtooltipContent()
        });
        tooltipContentItems.addEventListener('blur', function(element) {
            focusOnTooltip = false;
            hidetooltipContent()
        });
    } else {
        tooltipContent.addEventListener('blur', function(element) {
            focusOnTooltip = false;
            hidetooltipContent()
        });
    }


    /* Functions for showing and hiding tooltip, add aria-expanded on button, not mandatory, but gives people with voice over an indicator something happened */
    function clicktooltipContent() {
        if (tooltipButton.getAttribute('aria-expanded') == 'true') {
            tooltipContent.classList.remove('active');
            tooltipButton.setAttribute('aria-expanded', 'false');
        } else {
            tooltipContent.classList.add('active');
            tooltipButton.setAttribute('aria-expanded', 'true');
        };
    }

    function showtooltipContent() {
        tooltipContent.classList.add('active');
        tooltipButton.setAttribute('aria-expanded', 'true');
    }

    function hidetooltipContent() {
        tooltipContent.classList.remove('active');
        tooltipButton.setAttribute('aria-expanded', 'false');
    }
});
// EOF Tooltip JS
</script>