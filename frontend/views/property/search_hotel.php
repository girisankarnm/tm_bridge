<?php
$this->registerCssFile('/css/search/search.css');
$this->registerCssFile('/css/search.css');
frontend\assets\AppAsset::register($this);


?>

<style>
    .action-icons .icon-header { justify-content: space-between; }
</style>
<div class="content">

    <div class="container-fluid" >
        <div class="card-title">Search  result for Alappuzha beach</div>

        <div class="card search-top-card-list shadow-div card-overflow-hidden" >
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
                        <div> <span> <img class="margin-right-search-img" src="images/filer-symbol-up-down.svg"> </span></div>
                        <div> <span> <img class="margin-right-search-img" src="images/filter-icon.svg"> </span></div>
                        <div> <span> <img class="margin-right-search-img" src="images/filter-search-icon.svg"> </span></div>
                        <div> <span> <img src="images/map-icon.svg"> </span></div>





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

                          <span class="serach-hotelHeading" > <span class="cut-text" style="display: inline">Misty Rock Resort<span/> <img class="f-star" src="images/Star-1.svg" alt="Matrix">
                           <img class="f-star" style="padding-left: 2px"  src="images/Star-1.svg" alt="Matrix">
                           <img  class="f-star" style="padding-left: 2px" src="images/Star-1.svg" alt="Matrix">
                           </span>

                        </div>
                        <div> <small  class="smallFonts fontsize-location"><i  class="fa fa-map-marker locatiospace" aria-hidden="true"></i> Alappuzha ,Punnamada.kerala</small></div>
                    <div><img class="span-gap-image" src="images/smoke-icon.svg" alt="Matrix"> <img class="span-gap-image" src="images/animal-restrict.svg" alt="Matrix"></div>
                    </div>
                </div>


                <div >
                    <div id="column-listing-search" >
                        <div> <img class="img-property" src="images/bridge-icon.svg" alt="Matrix"></div>
                        <div><span class="badge badge-pill badge-secondary"> 4.1/5 (very good)</span>
                            <span class="smallFonts" style="font-size: 12px;">5879 Rating</span>
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
                            <span style="float: right;margin-left: 10px" class="badge badge-pill badge-secondary size-badge font-bw-mitga"><img class="img-property-search" src="images/note-search.svg"  alt="Matrix"> 4/10</span>
                           </div>
                        <div>
                            <span class="span-gap font-span font-bw-mitga-text " style=";margin-left: 10px">  <img class="img-property color-140F0F " src="images/baby-icon.svg" alt="Matrix">0-<span>9</span>YR </span>
                            <span class=" font-span font-bw-mitga-text">  <img class="img-property color-140F0F " src="images/adult-age-icon.svg" alt="Matrix"> <span>10</span>-<span>15</span> YR</span>
                            <span class="span-gap font-span font-bw-mitga-text">  <img class="img-property bed-icon-style "  src="images/bed-hotel.svg" alt="Matrix">DB: <span class="margin-right-icon-search">3|</span>EB: <span class="margin-right-icon-search">4|</span>SB: <span class="margin-right-icon-search">3</span> </span>


                             </div>
                        <div> <span class="line-through-text font-color-E40967 font-bw-mitga" style="font-size: 13px;margin-right: 5px;margin-left: 10px">₹ 10000 </span> <span class=" color-586ADA  font-bw-mitga"  style="font-size: 17px;margin-right: 5px;margin-left: 10px">₹ 9000</span></div>
                    </div>

                </div>
            </div>




        </div>
        <?php endforeach;  ?>


    </div>



<!--<script>-->
<!---->
<!--    function myFunctionBasic(id) {-->
<!--        document.getElementById("myDropdown-basic"+id).classList.toggle("show-content");-->
<!--    }-->
<!--    function myFunctionEdit(id) {-->
<!--        document.getElementById("myDropdownEdit"+id).classList.toggle("show-content");-->
<!--    }-->
<!---->
<!--    window.onclick = function(event) {-->
<!---->
<!--        if (!event.target.matches('.dropbtn-edit')) {-->
<!--            var dropdowns = document.getElementsByClassName("dropdown-content-edit");-->
<!--            var i;-->
<!--            for (i = 0; i < dropdowns.length; i++) {-->
<!--                var openDropdown = dropdowns[i];-->
<!--                if (openDropdown.classList.contains('show-content')) {-->
<!--                    openDropdown.classList.remove('show-content');-->
<!--                }-->
<!--            }-->
<!--        }-->
<!--        if (!event.target.matches('.dropbtn-basic')) {-->
<!--            var dropdownedit = document.getElementsByClassName("dropdown-content-basic-details");-->
<!--            var i;-->
<!--            for (i = 0; i < dropdownedit.length; i++) {-->
<!--                var openDropdownedit = dropdownedit[i];-->
<!--                if (openDropdownedit.classList.contains('show-content')) {-->
<!--                    openDropdownedit.classList.remove('show-content');-->
<!--                }-->
<!--            }-->
<!--        }-->
<!---->
<!--    }-->
<!---->
<!--</script>-->

</div>