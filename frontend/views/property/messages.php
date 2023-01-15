<?php
frontend\assets\AppAsset::register($this);
$this->registerCssFile('/css/ppe/style.css');
$this->registerCssFile('/css/datepicker.css');
$this->registerCssFile('/css/users/user-styles.css');
$this->registerCssFile('/css/booking-request/booking-request.css');
$this->registerCssFile('/css/custom-style.css');
$this->registerCssFile('/css/datepicker/jquery-ui.css');
$this->registerCssFile('/css/messages/messages.css');
?>
<div class="wrapper">
    <div class="room-booking-header">
        <div class="room-booking-header-left">
            <div class="heading border-none">Messages</div>
        </div>
        <div class="room-booking-header-right">
            <div class="message-tabs">
                <a href="#">Booking <span class="notify-msg">2</span></a>
                <a href="#">Block <span class="notify-msg">2</span></a>
                <a href="#">SRR <span class="notify-msg">2</span></a>
                <a href="#">Check Availabilty <span class="notify-msg">2</span></a>
                <a href="#" class="active">Message <span class="notify-msg">2</span></a>
            </div>
        </div>
    </div>
    <div class="messager-heading-wrapper">
        <div class="messager-heading-left">
            <div class="client-detail-swrapper">
                <figure>
                    <img src="images/booking-request/thumb-01.png" alt="">
                </figure>
                <article>
                    <h5 class="client-name">Kallada Tours and Travels</h5>
                    <p class="client-location">Kochi, Kerala</p>
                </article>
            </div>
        </div>
        <div class="messager-heading-right">
            <div class="filter-wrapper">
                <div class="filtered-list">
                    <div class="filtered-single">SRR <img src="images/messages/close-btn.png" alt=""></div>
                    <div class="filtered-single">Booking <img src="images/messages/close-btn.png" alt=""></div>
                </div>
                <!-- <div class="filter-select">
                    <select name="" id="">
                        <option value="">Filter</option>
                        <option value="">SRR</option>
                        <option value="">Filter</option>
                    </select>
                </div> -->
                <div class="dropdown filter-select-wrapper">
                    <button class="filter-dropdown-btn dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Filter</a>
                        <a class="dropdown-item" href="#">SRR</a>
                        <a class="dropdown-item" href="#">Filter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="chat-wrapper">
        <div class="chat-left">
            <div class="search-datepick-main">
                <div class="search-datepick">
                    <div class="search-wrapper">
                        <input type="text" placeholder="Show All" class="search-input">
                        <button class="search-btn"><img src="images/messages/search-icon.png" alt=""></button>
                    </div>
                    <div class="datepicker-btn">
                        <button class="calendar-icon"><img src="images/messages/calendar-icon.png" alt=""></button>
                    </div>
                </div>
                <div class="datepicker-main">
                    <div class="datepicker date input-group">
                        <input type="text" placeholder="Choose Date" class="form-control datepicker-input" id="fecha1">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-user-list-wrapper">
                <div class="chat-user-list-single active">
                    <div class="chat-user-details">
                        <figure>
                            <img src="images/messages/user-image-01.png" alt="">
                        </figure>
                        <article>
                            <div class="chat-name">Praveen</div>
                            <div class="chat-location">Kochi, Kerala</div>
                        </article>
                    </div>
                    <div class="enq-no-wrapper">
                        <div class="enq-no">Enq ID: 21122022</div>
                    </div>
                </div>
                <div class="chat-user-list-single">
                    <div class="chat-user-details">
                        <figure>
                            <img src="images/messages/user-image-02.png" alt="">
                        </figure>
                        <article>
                            <div class="chat-name">Prakash</div>
                            <div class="chat-location">Kottayam, Kerala</div>
                        </article>
                    </div>
                    <div class="enq-no-wrapper">
                        <div class="enq-no">Enq ID: 21122022</div>
                    </div>
                </div>
                <div class="chat-user-list-single">
                    <div class="chat-user-details">
                        <figure>
                            <img src="images/messages/user-image-01.png" alt="">
                        </figure>
                        <article>
                            <div class="chat-name">Praveen</div>
                            <div class="chat-location">Ernakulam, Kerala</div>
                        </article>
                    </div>
                    <div class="enq-no-wrapper">
                        <div class="enq-no">Enq ID: 21122022</div>
                    </div>
                </div>
                <div class="chat-user-list-single">
                    <div class="chat-user-details">
                        <figure>
                            <img src="images/messages/user-image-02.png" alt="">
                        </figure>
                        <article>
                            <div class="chat-name">Prakash</div>
                            <div class="chat-location">Thrissur, Kerala</div>
                        </article>
                    </div>
                    <div class="enq-no-wrapper">
                        <div class="enq-no">Enq ID: 21122022</div>
                    </div>
                </div>
                <div class="view-more-chat-list">
                    <button class="view-more-chat-btn">View More</button>
                </div>
            </div>
        </div>
        <div class="chat-right">
            <div class="chat-area-header">
                <div class="chat-user-list-single">
                    <div class="chat-user-details">
                        <figure>
                            <img src="images/messages/user-image-02.png" alt="">
                        </figure>
                        <article>
                            <div class="chat-name">Kallada Tours and Travels</div>
                            <div class="chat-location">Kochi, Kerala</div>
                        </article>
                    </div>
                    <div class="enq-no-wrapper">
                        <div class="enq-no">Enq ID: 21122022</div>
                    </div>
                </div>
            </div>
            <div class="chat-area-content">
                <div class="activity-chat-wrapper">
                    <div class="activity-chat-single">
                        <div class="activity-chat-user">
                            <div class="user-details">
                                <h5 class="user-details-name">Praveen</h5>
                                <h5 class="user-details-date">12-October 2022</h5>
                            </div>
                            <div class="user-img"><img src="images/booking-request/chat-user-thumb-01.png" alt=""></div>
                        </div>
                        <div class="activity-chat-area">
                            <div class="activity-chat">Lorren ippsum gravida sem?
                                <span class="chat-time">12.00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="activity-chat-single activity-chat-right">
                        <div class="activity-chat-user">
                            <div class="user-details">
                                <h5 class="user-details-name">Prakash</h5>
                                <h5 class="user-details-date">12-October 2022</h5>
                            </div>
                            <div class="user-img"><img src="images/booking-request/chat-user-thumb-02.png" alt=""></div>
                        </div>
                        <div class="activity-chat-area">
                            <div class="activity-chat">Lorren ippsum gravida sem?
                                <span class="chat-time">12.00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="activity-chat-single">
                        <div class="activity-chat-user">
                            <div class="user-details">
                                <h5 class="user-details-name">Praveen</h5>
                                <h5 class="user-details-date">12-October 2022</h5>
                            </div>
                            <div class="user-img"><img src="images/booking-request/chat-user-thumb-01.png" alt=""></div>
                        </div>
                        <div class="activity-chat-area">
                            <div class="activity-chat">Lorren ippsum gravida sem?
                                <span class="chat-time">12.00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="message-comment-box-main">
                        <div class="comment-box-wrapper">
                            <div class="chat-type-area-wrapper">
                                <textarea name="" id="" cols="30" rows="10"
                                    class="chat-type-area">Add comment</textarea>
                                <button class="blue-btn">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BOF Edit Modal -->
<div class="modal" id="RoomTariffBreakupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered medium-modal-wrapper" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-header-left">
                    <h3 class="popup-title">Room Tariff Breakup</h3>
                </div>
                <div class="modal-header-right">
                    <h4 class="day-header">Tuesday, 10 Aug 2022</h4>
                </div>
            </div>
            <div class="modal-body">
                <div class="pop-room-details-wrapper">
                    <div class="pop-room-content-header">
                        <div class="pop-room-content">
                            <figure><img src="images/user-icons/user-img.png" alt=""></figure>
                            <article>
                                <h4 class="room-name with-stars">Misty Rock Resort
                                    <div class="stars">
                                        <img src="images/booking-request/star.svg" alt="">
                                        <img src="images/booking-request/star.svg" alt="">
                                        <img src="images/booking-request/star.svg" alt="">
                                        <img src="images/booking-request/star.svg" alt="">
                                        <img src="images/booking-request/star.svg" alt="">
                                    </div>
                                </h4>
                                <div class="resort-location">
                                    <span class="location-icon"><img src="images/location-icon.png" alt=""></span>
                                    <h5 class="location-name">Munnar ( Locality) Kerala, India</h5>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="popup-tariff-room-details">
                        <div class="col-lg-12">
                            <div class="pop-table-heading"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="room-withaminities">
                                    <div class="room-facilities-wrapper">
                                        <div class="room-facilities-single">
                                            <div class="icons-group-wrapper">
                                                <div class="icon-content-single">
                                                    <img src="images/user-icons/bed-icon.svg" alt=""
                                                        style="width: 25px">
                                                    DB:2 |
                                                    EB:2 | SB:1
                                                </div>
                                            </div>
                                        </div>
                                        <div class="room-facilities-single">
                                            <div class="icons-group-wrapper">
                                                <div class="icon-content-single">
                                                    <img src="images/user-icons/child-icon.svg" alt=""
                                                        style="width: 14px; margin:0 5px 0 0;">
                                                    1-9 YR
                                                </div>
                                                <div class="icon-content-single">
                                                    <img src="images/user-icons/women-icon.svg" alt=""
                                                        style="width: 14px; margin:0 5px 0 0;">
                                                    10-15 YR
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="enq-table-wrapper">
                                        <table class="enq-table">
                                            <thead>
                                                <tr>
                                                    <th>Enq Pax</th>
                                                    <th>Enq Meal Plan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="icons-group-light-wrapper">
                                                            <div class="icon-content-single">
                                                                <img src="images/user-icons/child-icon.svg" alt=""
                                                                    style="width: 14px; margin:0 5px 0 0;">
                                                                10
                                                            </div>
                                                            <div class="icon-content-single">
                                                                <img src="images/user-icons/women-icon.svg" alt=""
                                                                    style="width: 14px; margin:0 5px 0 0;">
                                                                10
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="icons-group-light-wrapper">
                                                            <div class="icon-content-single">
                                                                <img src="images/booking-request/meals-icon.svg" alt=""
                                                                    style="width: 20px; margin:0 5px 0 0;">
                                                                CP (Breakfast)
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="enq-table-wrapper">
                                        <table class="enq-table">
                                            <thead>
                                                <tr>
                                                    <th>Tariff Basis Pax</th>
                                                    <th>Tariff Basis Meal Plan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="icons-group-light-wrapper">
                                                            <div class="icon-content-single">
                                                                <img src="images/user-icons/child-icon.svg" alt=""
                                                                    style="width: 14px; margin:0 5px 0 0;">
                                                                10
                                                            </div>
                                                            <div class="icon-content-single">
                                                                <img src="images/user-icons/women-icon.svg" alt=""
                                                                    style="width: 14px; margin:0 5px 0 0;">
                                                                10
                                                            </div>
                                                            <div class="icon-content-single">
                                                                <img src="images/user-icons/man-icon.svg" alt=""
                                                                    style="width: 9px; margin:0 5px 0 0;">
                                                                10
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="icons-group-light-wrapper">
                                                            <div class="icon-content-single">
                                                                <img src="images/booking-request/meals-icon.svg" alt=""
                                                                    style="width: 20px; margin:0 5px 0 0;">
                                                                MAP (Breakfast)
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="info-note-wrapper">
                                        <img src="images/booking-request/info-icon-red.svg" alt="">
                                        Excess Bed Utilization: DB:22 | EB:22 | SB:22
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="popup-room-rate-table-wrapper">
                                    <table class="popup-room-rate-table">
                                        <tr>
                                            <td class="head-td">Rooms</td>
                                            <td>10X 111111</td>
                                            <td>10X 111111</td>
                                        </tr>
                                        <tr>
                                            <td class="head-td">EBA</td>
                                            <td>10X 111111</td>
                                            <td>10X 111111</td>
                                        </tr>
                                        <tr>
                                            <td class="head-td">CWB</td>
                                            <td>10X 111111</td>
                                            <td>10X 111111</td>
                                        </tr>
                                        <tr>
                                            <td class="head-td">CNB</td>
                                            <td>10X 111111</td>
                                            <td>10X 111111</td>
                                        </tr>
                                        <tr>
                                            <td class="head-td">SGL</td>
                                            <td>10X 111111</td>
                                            <td>10X 111111</td>
                                        </tr>
                                        <tr>
                                            <td class="head-td">FOC</td>
                                            <td>5 Infants</td>
                                            <td>5 Infants</td>
                                        </tr>
                                        <tr>
                                            <td class="head-td">Inclusion</td>
                                            <td>10X 111111</td>
                                            <td>10X 111111</td>
                                        </tr>
                                        <tr class="total-row">
                                            <td colspan="2">TOTAL</td>
                                            <td>₹11111111</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EOF Edit Modal -->

<!-- BOF Edit Modal -->
<div class="modal" id="BookingConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered medium-modal-wrapper" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-header-left">
                    <h3 class="popup-title">Booking Confirmation</h3>
                </div>
                <div class="modal-header-right">
                    <!-- <h4 class="day-header">Tuesday, 10 Aug 2022</h4> -->
                </div>
            </div>
            <div class="modal-body">
                <div class="pop-room-details-wrapper">
                    <div class="payment-terms-wrapper">
                        <h3 class="payment-terms-heading">Select Payment Terms</h3>
                        <div class="payment-terms-radios">
                            <label class="radio-wrapper">One <span class="payment-block">₹ 10,000,00</span>
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-wrapper">Two <span class="payment-block">₹ 10,000,00</span>
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="installment-table-wrapper">
                        <div class="installment-table-header">
                            <div class="installment-table-header-left">
                                <h3 class="payment-terms-heading">Select Payment Terms</h3>
                            </div>
                            <div class="installment-table-header-right">
                                <div class="add-remove-btns-wrapper">
                                    <button class="add-remove-btns"><img src="images/booking-request/remove-btn.svg"
                                            alt=""></button>
                                    <button class="add-remove-btns"><img src="images/booking-request/add-btn.svg"
                                            alt=""></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popup-tariff-room-details">
                        <div class="popup-room-rate-table-wrapper">
                            <table class="popup-room-rate-table">
                                <tr>
                                    <td style="width:15%;" class="head-td">
                                        <input type="text" class="amount-input" placeholder="Enter %">
                                    </td>
                                    <td style="width:5%;" class="head-td">%</td>
                                    <td style="width:40%;">₹ 25,000</td>
                                    <td style="width:40%;">
                                        <img class="calendar-img" src="images/booking-request/calender-icon-blue.svg"
                                            alt="">
                                        <input type="text" class="datepicker" placeholder="20 October 2022">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:15%;" class="head-td">
                                        <input type="text" class="amount-input" placeholder="Enter %">
                                    </td>
                                    <td style="width:5%;" class="head-td">%</td>
                                    <td style="width:40%;">₹ 50,000</td>
                                    <td style="width:40%;">
                                        <img class="calendar-img" src="images/booking-request/calender-icon-blue.svg"
                                            alt="">
                                        <input type="text" class="datepicker" placeholder="20 October 2022">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:15%;" class="head-td">
                                        <input type="text" class="amount-input" value="00">
                                    </td>
                                    <td style="width:5%;" class="head-td">%</td>
                                    <td style="width:40%;">₹ 00</td>
                                    <td style="width:40%;">
                                        <img class="calendar-img" src="images/booking-request/calender-icon-blue.svg"
                                            alt="">
                                        <input type="text" class="datepicker" placeholder="20 October 2022">
                                    </td>
                                </tr>
                                <tr class="total-tr">
                                    <td style="width:15%;text-align: center;"><span class="total-value">80%</span></td>
                                    <td style="width:5%;">&nbsp;</td>
                                    <td colspan="2">₹ 75,000</td>
                                </tr>
                            </table>
                        </div>
                        <div class="center-btn-group">
                            <button class="btn grey-btn">Back</button>
                            <button class="btn primary-btn">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EOF Edit Modal -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

<!-- Datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
$(function() {
    $('.datepicker').datepicker({
        language: "es",
        autoclose: true,
        format: "dd/mm/yyyy"
    });
});

function moveToRight() {
    event.preventDefault();
    $('#scroll-table-1').animate({
        scrollLeft: "+=1000px"
    }, "slow");
}

function moveToLeft() {
    event.preventDefault();
    $('.scroll-table').animate({
        scrollLeft: "-=1000px"
    }, "slow");
}
</script>