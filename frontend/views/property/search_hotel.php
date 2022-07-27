<?php
$this->registerCssFile('/css/search/search.css');
$this->registerCssFile('/css/search.css');
frontend\assets\AppAsset::register($this);


?>

<style>
    .action-icons .icon-header { justify-content: space-between; }


    .dropbtn-search {


        border: #86cfda;
        cursor: pointer;
    }



    #myInputSearch {
        box-sizing: border-box;
        background-image: url(searchicon.png);
        background-position: 6px 12px;
        background-repeat: no-repeat;
        font-size: 16px;
        padding: 10px 7px 9px 7px;
        border: none;
        border-bottom: 1px solid #ddd;
        height: 34px;
        width: 226px;
    }

    #myInputSearch:focus {outline: 3px solid #ddd;}

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content-search {
        display: none;
        position: absolute;
        background-color: #f6f6f6;
        min-width: 230px;
        overflow: auto;
        border: 1px solid #ddd;
        z-index: 1;
    }

    .dropdown-content-search a {
        color: black;
        padding: 4px 10px;
        text-decoration: none;
        display: block;
        font-size: 13px;

    }

    .show {display: block;}
</style>
<div class="content">

    <div class="container-fluid" >
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


                         <div><a href="#">  <img class="margin-right-search-img image-width-height " src="images/filer-symbol-up-down.svg"> </a></div>
                        <div> <span> <img class="margin-right-search-img image-width-height" src="images/filter-icon.svg"> </span></div>
                        <div> <span> <img class="margin-right-search-img image-width-height" src="images/filter-search-icon.svg"> </span></div>
                        <div> <a href="#">  <img class="image-width-height-2 dropbtn-search"  onclick="myFunctionSearch()" src="images/map-icon.svg"> </a>

                            <div id="myDropdownResult" class="dropdown-content-search" style="height: fit-content;margin-left: -106px;margin-top: 6px;">
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


                <div >
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

</div>
<script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunctionSearch() {
        document.getElementById("myDropdownResult").classList.toggle("show");
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

        document.getElementById("myDropdownResult").classList.toggle("hide");
    }
</script>