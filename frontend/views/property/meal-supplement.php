<?php
frontend\assets\AppAsset::register($this);
$this->registerCssFile('/css/ppe/style.css');
$this->registerCssFile('/css/datepicker.css');
$this->registerCssFile('/css/ppt/ppt-styles.css');
?>
<div class="wrapper">
    <div class="page-heading-wrapper">
        <div class="page-heading">Post Publish Edit (PPT)</div>
    </div>
    <div class="resort-header-wrapper">
        <div class="resort-details-area">
            <figure>
                <img src="images/resort-logo.png" alt="">
            </figure>
            <article>
                <h4>Misty Rock Resort</h4>
                <div class="resort-location">
                    <span class="location-icon"><img src="images/location-icon.png" alt=""></span>
                    <h5 class="location-name">Wayanad, Kerala, India</h5>
                </div>
                <div class="resort-icons">
                    <img src="images/resort-icons/resort-icons-01.png" alt="">
                    <img src="images/resort-icons/resort-icons-02.png" alt="">
                </div>
            </article>
        </div>
        <div class="resort-peroid-area">
            <div class="resort-peroid">
                <div class="datepicker-wrapper">
                    <label>From</label>
                    <div class="datepicker-input-wrapper">
                        <img src="images/resort-icons/calender-icon.png" alt="">
                        <input type="text" class="datepicker-input month-picker" value="July-2022">
                    </div>
                </div>
                <div class="datepicker-wrapper">
                    <label>To</label>
                    <div class="datepicker-input-wrapper">
                        <img src="images/resort-icons/calender-icon.png" alt="">
                        <input type="text" class="datepicker-input month-picker" value="July-2022">
                    </div>
                </div>
                <!-- <button class="btn">Set Period</button> -->
            </div>
        </div>
    </div>
    <div class="booking-table-wrapper">
        <div class="main-bns-wrapper">
            <button class="btn bordered-btn large-btn">Room Rate</button>
            <button class="btn bordered-btn large-btn">Weekday Hikes</button>
            <button class="btn bordered-btn large-btn active">Meal Supplement</button>
        </div>
        <div class="single-room-details-wrapper room-details-block-wrapper">
            <div class="resort-header-wrapper bottom-radius-none hotel-rates-wrapper">
                <div class="resort-details-area">
                    <div class="room-rate-heading">Superior Room - River View <div class="meal-area"><img
                                src="images/search-popup/food-icon.svg" alt=""> EP (Room Only)</div>
                    </div>
                </div>
                <!-- <div class="resort-peroid-area">
                    <div class="next-prev-arrrows">
                        <div class="next-prev-btns" onclick="moveToLeft()">
                            <img src="images/ppt/right-arrow.svg" alt="">
                        </div>
                        <div class="next-prev-btns" onclick="moveToRight()">
                            <img src="images/ppt/left-arrow.svg" alt="">
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="date-table-wrapper">
                <div class="room-table-wrapper">
                    <table id="" class="ppt-header-table">
                        <tr class="first-row">
                            <td style="height: 92px;">
                                <div class="rooms-td-head">Date Range</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="rooms-date-content">
                                    <span class="content-left">1 Sep 22 To 31 Dec 22</span>
                                    <span class="edit-icon"><img src="images/ppt/edit-icon.svg" alt=""></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="rooms-date-content">
                                    <span class="content-left">15 Sep 22 To 25 Sep 22</span>
                                    <span class="edit-icon"><img src="images/ppt/edit-icon.svg" alt=""></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="rooms-date-content">
                                    <span class="content-left">15 Sep 22 To 25 Sep 22</span>
                                    <span class="edit-icon"><img src="images/ppt/edit-icon.svg" alt=""></span>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="table-responsive scroll-table p-0">
                        <table class="ppt-content-main-table" style="width: 100%;">
                            <tr>
                                <td>
                                    <table class="ppt-content-table" style="background: #FCE4D8 !important;">
                                        <tbody>
                                            <tr class="first-row">
                                                <td colspan="5" class="rooms-td-head">Room (Rack 25000)</td>
                                            </tr>
                                            <tr>
                                                <td><span class="rooms-td-subhead">Slab 1</span></td>
                                                <td><span class="rooms-td-subhead">Slab 2</span></td>
                                                <td><span class="rooms-td-subhead">Slab 3</span></td>
                                                <td><span class="rooms-td-subhead">Slab 4</span></td>
                                                <td><span class="rooms-td-subhead">Slab 5</span></td>
                                            </tr>
                                            <tr>
                                                <td>150000</td>
                                                <td>150000</td>
                                                <td>150000</td>
                                                <td>150000</td>
                                                <td>150000</td>
                                            </tr>
                                            <tr>
                                                <td>150000</td>
                                                <td>150000</td>
                                                <td>150000</td>
                                                <td>150000</td>
                                                <td>150000</td>
                                            </tr>
                                            <tr>
                                                <td>150000</td>
                                                <td>150000</td>
                                                <td>150000</td>
                                                <td>150000</td>
                                                <td>150000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="ppt-content-table" style="background: #C5E0B7 !important;">
                                        <tbody>
                                            <tr class="first-row">
                                                <td colspan="5" class="rooms-td-head">EBA (Rack 25000)</td>
                                            </tr>
                                            <tr>
                                                <td><span class="rooms-td-subhead">Slab 1</span></td>
                                                <td><span class="rooms-td-subhead">Slab 2</span></td>
                                                <td><span class="rooms-td-subhead">Slab 3</span></td>
                                                <td><span class="rooms-td-subhead">Slab 4</span></td>
                                                <td><span class="rooms-td-subhead">Slab 5</span></td>
                                            </tr>
                                            <tr>
                                                <td>150000</td>
                                                <td>150000</td>
                                                <td>150000</td>
                                                <td>150000</td>
                                                <td>150000</td>
                                            </tr>
                                            <tr>
                                                <td>150000</td>
                                                <td>150000</td>
                                                <td>150000</td>
                                                <td>150000</td>
                                                <td>150000</td>
                                            </tr>
                                            <tr>
                                                <td>150000</td>
                                                <td>150000</td>
                                                <td>150000</td>
                                                <td>150000</td>
                                                <td>150000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="two-side-btns-wrapper">
            <div class="two-side-btns-left">
                <button class="btn">Cancel</button>
            </div>
            <div class="two-side-btns-right">
                <button class="btn">Back</button>
                <button class="btn red-btn">Confirm</button>
            </div>
        </div>
    </div>
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

<script>
// $(window).scroll(function() {
//     console.log($(this).scrollTop())
//     if ($(this).scrollTop() > 50) {
//         $('.fix-this-div').addClass('newClass');
//     } else {
//         $('.fix-this-div').removeClass('newClass');
//     }
// });
// window.addEventListener("scroll", function() {
//     console.log(123)
// }, false);
window.addEventListener('scroll', function() {
    console.log('Scroll event');
});

const divs = document.querySelectorAll('.scroll-table');
divs.forEach(div => div.addEventListener('scroll', e => {
    divs.forEach(d => {
        // d.scrollTop = div.scrollTop;
        d.scrollLeft = div.scrollLeft;
        d.scrollRight = div.scrollRight;
    });
}));


// function moveToLeft() {
//     divs.forEach(element => {
//         element.scrolRight -= (element.offsetWidth);
//     });
// }

// function moveToRight() {
//     divs.forEach(element => {
//         element.scrollLeft += (element.offsetWidth);
//     });
// }

function moveToRight() {
    event.preventDefault();
    $('.scroll-table').animate({
        scrollLeft: "+=300px"
    }, "slow");
}

function moveToLeft() {
    event.preventDefault();
    $('.scroll-table').animate({
        scrollLeft: "-=300px"
    }, "slow");
}
// $(document).ready(function() {
//     $(".bulk-edit-btn").click(function() {
//         $(".right-side-popup-wrapper").toggleClass("bulk-edit-on");
//     });
// });
var flag = 0;

function bulkEdit() {
    $('.right-side-popup-wrapper').addClass("bulk-edit-on");
    // $('.datepicker').addClass("datepicker-on");
    flag = 0;
    $('.date').datepicker('show')
}

function popClose() {
    $('.right-side-popup-wrapper').removeClass("bulk-edit-on");
    // $('.datepicker').removeClass("datepicker-on");
    flag = 1;
    $('.date').datepicker('hide')
}
// $('.month-picker').datepicker({
//     multidate: false,
//     format: "MM-yyyy",
//     viewMode: "months",
//     minViewMode: "months"
// });
$('.date').datepicker({
    multidate: true,
    format: 'dd-mm-yyyy'
});
// $('.date').datepicker('show')
$('.date').datepicker()
    .on('hide', function(e) {
        if (flag === 0) {
            $('.date').datepicker('show')
        }
    });
$(function() {
    $(".month-picker").datepicker({
        multidate: false,
        format: "MM-yyyy",
        viewMode: "months",
        minViewMode: "months",
    }).datepicker('update', new Date());
});
</script>

<style>
/* .datepicker {
    display: none !important;
} */

.datepicker-on {
    /* display: block !important; */
    width: 305px;
    height: 280px;
    box-shadow: none !important;
    padding: 0;
    margin: -40px 0 0;
    box-shadow: none !important;
}

.datepicker-days {
    border: 1px solid #586ADA !important;
    border-radius: 0px;
}

.datepicker table.table-condensed {
    margin: 0;
    width: 100%;
    border: none !important;
}

.datepicker .prev,
.datepicker .next {
    border-radius: 0;
    background: #fff !important;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    margin: 0;
}

table thead tr {
    background: none
}

.datepicker-days table thead,
.datepicker-days table tbody,
.datepicker-days table tfoot {
    padding: 10px;
    display: table-row-group;
}

.datepicker-days table thead tr:nth-child(2n + 0) td,
.datepicker-days table thead tr:nth-child(2n + 0) th,
.datepicker .datepicker-switch {
    border-radius: 0;
    background: #fff !important;
}

table thead {
    background-color: #fff;
}

.table-condensed>thead>tr>th {
    text-align: center;
}

/* .datepicker table tr td {
    padding: 12px 0;
    min-width: 45px;
    min-height: 45px;
} */

.datepicker table tr td:hover,
.datepicker table tr td.active,
.daterangepicker td.active,
.daterangepicker td.active:hover {
    background: #EFEDFF !important;
    color: #5968DB !important;
}

.datepicker.dropdown-menu {
    width: 100%;
    max-width: 309px;
}

.datepicker-dropdown.datepicker-orient-top:before {
    top: -15px;
}


.datepicker-dropdown.datepicker-orient-top:before {
    border: none;
}

.multiple-date-calendar-wrapper input.form-control.date {
    height: 0;
    border: none;
    padding: 0;
    margin: 0;
}

.datepicker.dropdown-menu {
    border: none !important;
    box-shadow: none !important;
}
</style>