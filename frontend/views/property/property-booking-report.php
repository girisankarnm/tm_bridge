<?php
frontend\assets\AppAsset::register($this);
$this->registerCssFile('/css/ppe/style.css');
$this->registerCssFile('/css/datepicker.css');
$this->registerCssFile('/css/users/user-styles.css');
$this->registerCssFile('/css/booking-request/booking-request.css');
$this->registerCssFile('/css/custom-style.css');
$this->registerCssFile('/css/datepicker/jquery-ui.css');
$this->registerCssFile('/css/messages/messages.css');
$this->registerCssFile('/css/data-table.css');
?>

<style>
/* The container */
.radio-container {
    display: block;
    position: relative;
    padding: 0 20px 0 30px;
    margin: 0;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    line-height: 20px;
}

/* Hide the browser's default radio button */
.radio-container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #eee;
    margin: 0;
}

/* On mouse-over, add a grey background color */
.radio-container:hover input~.checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.radio-container input:checked~.checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.radio-container input:checked~.checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.radio-container .checkmark:after {
    left: 8px;
    top: 4px;
    width: 6px;
    height: 10px;
    border: solid white;
    border-width: 0 2px 2px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.report-type-wrapper {
    display: flex;
    align-items: center;
    justify-content: flex-start;
}

.radio-btns-wrapper {
    display: flex;
    align-items: center;
    justify-content: flex-start;
}

.report-type-heading {
    padding: 0 15px 0 0;
    margin: 0;
    font-size: 13px;
    font-weight: 600;
    color: #333;
}

@media print {

    hr,
    #iconsTable,
    .content-contr .sidebar-contr,
    .search-report-area {
        display: none;
    }
}
</style>
<div class="wrapper">
    <div class="room-booking-header" style="-webkit-print-color-adjust: exact;">
        <div class="room-booking-header-left">
            <div class="heading border-none" style="font-size: 12px;">Property Booking Report</div>
        </div>
    </div>

    <div class="search-report-area">
        <div class="row">
            <div class="col-lg-3">
                <select name="" id="" class="form-control" style="width: 100%;">
                    <option value="">The Leaf (Munnar, Kerala, India)</option>
                    <option value="">The Leaf (Munnar, Kerala, India)</option>
                    <option value="">The Leaf (Munnar, Kerala, India)</option>
                </select>
            </div>
            <div class="col-lg-3">
                <input type="text" placeholder="Select Date Range"
                    style="border: 1px solid #aaa;border-radius: 3px;padding: 5px;background-color: transparent; width: 100%">
            </div>
            <div class="col-lg-4">
                <div class="report-type-wrapper">
                    <h5 class="report-type-heading">Report Type</h5>
                    <div class="radio-btns-wrapper">
                        <label class="radio-container">Summary
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-container">Detailed
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <button
                    style="background: #5968db;color: #fff;border: none;width: 100%;text-align: center;padding: 7px 10px;border-radius: 5px;">Search</button>
            </div>
        </div>
    </div>
    <hr>

    <div class="table-print-wrapper">
        <table cellpadding="0" cellspacing="0" style="width: 100%; border: none !important; margin: 0;
    box-shadow: none; background: none !important;">
            <tr style="background: none; padding:0;">
                <td>
                    <h5 style="font-size: 14px;text-align: center;font-weight: 600;line-height: 20px;margin: 0 0 5px;">
                        Summarized Booking Report for
                        Property: XXXXXXXX</h5>
                    <p
                        style="font-size: 10px !important; margin: 0;text-align: center;font-weight: 600;width: 100%;display: inline-block">
                        From DD | MM | YY To DD | MM | YY
                    </p>
                </td>
            </tr>
        </table>
        <table id="iconsTable" cellpadding="0" cellspacing="0" style="width: 100%; border: none !important; margin: 0 0 15px;
    box-shadow: none; background: none !important;">
            <tr style="background: none;">
                <td>
                    <div>
                        <button style="margin: 0 10px 0 0; border: none;background: none;"><img style="width: 24px;"
                                src="images/xlsx-icon.png" alt=""></button>
                        <button style="margin: 0 10px 0 0; border: none;background: none;"><img style="width: 24px;"
                                src="images/pdf-icon.png" alt=""></button>
                        <button style="margin: 0 0 0 0; border: none;background: none;"><img style="width: 24px;"
                                src="images/printer.png" alt=""></button>
                    </div>
                </td>
            </tr>
        </table>
        <table cellpadding="0" cellspacing="0" style="width: 100%; border: none !important; margin: 0 0 15px;
    box-shadow: none; background: none !important;">

            <tr style="background: none;">
                <td style="width: 100%; border: none; border-left: none; padding: 0px;">
                    <table cellpadding="0" cellspacing="0"
                        style="width: 100%; float: right; border: none !important; box-shadow: none;">
                        <thead>
                            <tr style="background: none;">
                                <th
                                    style="text-align: center; padding: 5px 15px !important; border: 1px solid #ABB0C1 !important; font-size: 11px !important; background: #E1E5FF; -webkit-print-color-adjust: exact; font-weight: 700;text-align:left;width: 250px;">
                                    Room Category</th>
                                <th
                                    style="text-align: center; padding: 5px 15px !important; border: 1px solid #ABB0C1; font-size: 11px !important; background: #E1E5FF; -webkit-print-color-adjust: exact; font-weight: 700;text-align:center;">
                                    Room</th>
                                <th
                                    style="text-align: center; padding: 5px 15px !important; border: 1px solid #ABB0C1; font-size: 11px !important; background: #E1E5FF; -webkit-print-color-adjust: exact; font-weight: 700;text-align:center;">
                                    EBA</th>
                                <th
                                    style="text-align: center; padding: 5px 15px !important; border: 1px solid #ABB0C1; font-size: 11px !important; background: #E1E5FF; -webkit-print-color-adjust: exact; font-weight: 700;text-align:center;">
                                    CWB</th>
                                <th
                                    style="text-align: center; padding: 5px 15px !important; border: 1px solid #ABB0C1; font-size: 11px !important; background: #E1E5FF; -webkit-print-color-adjust: exact; font-weight: 700;text-align:center;">
                                    CNB</th>
                                <th
                                    style="text-align: center; padding: 5px 15px !important; border: 1px solid #ABB0C1; font-size: 11px !important; background: #E1E5FF; -webkit-print-color-adjust: exact; font-weight: 700;text-align:center;">
                                    SGL</th>
                                <th
                                    style="text-align: center; padding: 5px 15px !important; border: 1px solid #ABB0C1; font-size: 11px !important; background: #E1E5FF; -webkit-print-color-adjust: exact; font-weight: 700;text-align:center;">
                                    Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td
                                    style="text-align: center; padding: 5px 15px !important; border: 1px solid #ABB0C1; font-size: 11px !important; background: rgb(225 229 255 / 35%); -webkit-print-color-adjust: exact; font-weight: 700;text-align:left;width: 250px;">
                                    Yellow Leaf</td>
                                <td
                                    style="white-space: nowrap; padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    12</td>
                                <td
                                    style="white-space: nowrap; padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    8</td>
                                <td
                                    style="white-space: nowrap; padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    8</td>
                                <td
                                    style="white-space: nowrap; padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    8</td>
                                <td
                                    style="white-space: nowrap; padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    8</td>
                                <td
                                    style="white-space: nowrap; padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    22,698.00</td>
                            </tr>
                            <tr>
                                <td
                                    style="text-align: center; padding: 5px 15px !important; border: 1px solid #ABB0C1; font-size: 11px !important; background: rgb(225 229 255 / 35%); -webkit-print-color-adjust: exact; font-weight: 700;text-align:left;width: 250px;">
                                    Green Leaf</td>
                                <td
                                    style="white-space: nowrap; padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    13</td>
                                <td
                                    style="white-space: nowrap; padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    8</td>
                                <td
                                    style="white-space: nowrap; padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    3</td>
                                <td
                                    style="white-space: nowrap; padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    2</td>
                                <td
                                    style="white-space: nowrap; padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    2</td>
                                <td
                                    style="white-space: nowrap; padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    22,698.00</td>
                            </tr>
                            <tr style="background: none !important;">
                                <td style="white-space: nowrap; padding: 6px 15px;color: #5968DB;">
                                    <strong>Total</strong>
                                </td>
                                <td
                                    style="background: none !important; white-space: nowrap; padding: 6px 15px;color: #1E2339; text-align: center; color:#5968DB;">
                                    <strong>25</strong>
                                </td>
                                <td
                                    style="background: none !important; white-space: nowrap; padding: 6px 15px;color: #1E2339; text-align: center; color:#5968DB;">
                                    <strong>16</strong>
                                </td>
                                <td
                                    style="background: none !important; white-space: nowrap; padding: 6px 15px;color: #1E2339; text-align: center; color:#5968DB;">
                                    <strong>11</strong>
                                </td>
                                <td
                                    style="background: none !important; white-space: nowrap; padding: 6px 15px;color: #1E2339; text-align: center; color:#5968DB;">
                                    <strong>10</strong>
                                </td>
                                <td
                                    style="background: none !important; white-space: nowrap; padding: 6px 15px;color: #1E2339; text-align: center; color:#5968DB;">
                                    <strong>10</strong>
                                </td>
                                <td
                                    style="background: none !important; white-space: nowrap; padding: 6px 15px;color: #1E2339; text-align: center; color:#5968DB;">
                                    <strong>45,396</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

<script>
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

function viewDetails(id) {
    $(`#matching-boxes-main-${id}`).slideToggle(500);
    $(`#view-details-btn-0${id}`).toggleClass(`view-details-on`);
}

// $(window).on('load', function() {
//     $('#BookingConfirmationModal').modal('show');
// });
$(document).ready(function() {
    $(".comment-btn").click(function() {
        $(".comment-box-main").slideToggle();
    });
    $(".activity-btn").click(function() {
        $(".show-activity-wrapper").slideToggle();
    });
    $(function() {
        // $("#datepicker").datepicker();
        $(".datepicker").datepicker();
    });

});
</script>