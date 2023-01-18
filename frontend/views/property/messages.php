<?php
frontend\assets\AppAsset::register($this);
$this->registerCssFile('/css/ppe/style.css');
$this->registerCssFile('/css/datepicker.css');
$this->registerCssFile('/css/users/user-styles.css');
$this->registerCssFile('/css/booking-request/booking-request.css');
$this->registerCssFile('/css/custom-style.css');
// $this->registerCssFile('/css/datepicker/jquery-ui.css');
$this->registerCssFile('/css/messages/messages.css');
?>
<style>
/* From here you can start to copy */
.calendar {
    padding: 0px;
    border-radius: 0;
    font-size: 18px;
    border: none;
    box-shadow: none;
    width: 30px;
    padding: 0 !important;
}

.ui-datepicker {
    background: #ffffff;
    border-radius: 15px;
    width: 270px;
    z-index: 11 !important;
}

.ui-datepicker-header {
    height: 40px;
    line-height: 45px;
    color: #ffffff;
    background: #31639c;
    margin-bottom: 0px;
}

.ui-datepicker-prev,
.ui-datepicker-next {
    width: 20px;
    height: 20px;
    text-indent: 9999px;
    border-radius: 100%;
    cursor: pointer;
    overflow: hidden;
    margin-top: 12px;
}

.ui-datepicker-prev {
    float: left;
    margin-left: 12px;
}

.ui-datepicker-prev:after {
    transform: rotate(45deg);
    margin: -43px 0px 0px 8px;
}

.ui-datepicker-next {
    float: right;
    margin-right: 12px;
}

.ui-datepicker-next:after {
    transform: rotate(-135deg);
    margin: -43px 0px 0px 6px;
}

.ui-datepicker-prev:after,
.ui-datepicker-next:after {
    content: '';
    position: absolute;
    display: block;
    width: 8px;
    height: 8px;
    border-left: 2px solid #f7f7f7;
    border-bottom: 2px solid #f7f7f7;
}

.ui-datepicker-prev:hover,
.ui-datepicker-next:hover,
.ui-datepicker-prev:hover:after,
.ui-datepicker-next:hover:after {
    border-color: #fff;
}

.ui-datepicker-title {
    text-align: center;
    font-size: 25px;
    line-height: 28px;
}

.ui-datepicker-calendar {
    width: 100%;
    max-width: 270px;
    text-align: center;
    box-shadow: none;
}

.ui-datepicker-calendar thead tr th span {
    display: block;
    width: 40px;
    color: #31639c;
    margin-bottom: 5px;
    font-size: 18px;
}

.ui-state-default {
    display: block;
    text-decoration: none;
    color: #333333;
    line-height: 40px;
    font-size: 16px;
}

.ui-state-default:hover {
    color: #ffffff !important;
    background: #31639c;
    border-radius: 50px;
    transition: all 0.25s cubic-bezier(0.7, -0.12, 0.2, 1.12);
}

.ui-state-highlight {
    color: #ffffff !important;
    background-color: #31639c;
    border-radius: 50px;
}

.ui-state-active {
    color: #ffffff !important;
    background-color: #31639c;
    border-radius: 50px;
}

.ui-datepicker-unselectable .ui-state-default {
    color: #eee;
    border: 2px solid transparent;
}

.ui-datepicker-calendar thead tr th span {
    color: #fff;
}

.icon {
    margin-left: -30px;
    margin-top: -26px;
    position: relative;
    color: #31639c;
    font-size: 20px;
}

.ui-datepicker .ui-datepicker-title span {
    font-size: 12px;
}

.ui-datepicker-calendar thead tr th span,
.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default {
    font-size: 10px;
    width: 20px;
    margin: 0;
    height: 20px;
    line-height: 20px;
}

.ui-datepicker th,
.ui-datepicker td {
    padding: 5px !important;
}
</style>
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
                <figure style="background-image: url(images/booking-request/thumb-01.png);">
                    <!-- <img src="images/booking-request/thumb-01.png" alt=""> -->
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
                        <!-- <button class="calendar-icon"><img src="images/messages/calendar-icon.png" alt=""></button> -->
                        <input type="text" id="datepicker" class="calendar">
                    </div>
                </div>
                <div class="datepicker-main">
                    <div class="datepicker-result-area">
                        <span class="datepicker-result">Arrival Date 02 Jan 2022 to 22 Jam 2022</span>
                    </div>
                </div>
            </div>
            <div class="chat-user-list-wrapper">
                <div class="chat-user-list-single active">
                    <div class="chat-user-details">
                        <figure style="background-image: url(images/messages/user-image-01.png);">
                            <!-- <img src="images/messages/user-image-01.png" alt=""> -->
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
                        <figure style="background-image: url(images/messages/user-image-02.png);">
                            <!-- <img src="images/messages/user-image-02.png" alt=""> -->
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
                        <figure style="background-image: url(images/messages/user-image-01.png);">
                            <!-- <img src="images/messages/user-image-01.png" alt=""> -->
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
                        <figure style="background-image: url(images/messages/user-image-02.png);">
                            <!-- <img src="images/messages/user-image-02.png" alt=""> -->
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
            <!-- BOF CHat Landing Page Image HTML -->
            <div class="chat-default-screen">
                <article>
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h3>
                </article>
                <figure>
                    <img src="images/messages/chat-default-img.png" alt="">
                </figure>
            </div>
            <!-- EOF CHat Landing Page Image HTML -->
            <div class="chat-area-header">
                <div class="chat-user-list-single">
                    <div class="chat-user-details">
                        <figure style="background-image: url(images/messages/user-image-02.png);">
                            <!-- <img src="images/messages/user-image-02.png" alt=""> -->
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
                </div>
                <div class="message-comment-box-main">
                    <div class="comment-box-wrapper">
                        <div class="chat-type-area-wrapper">
                            <textarea name="" id="" cols="30" rows="10" class="chat-type-area">Add comment</textarea>
                            <button class="blue-btn">Send</button>
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
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
<script>
jQuery(document).ready(function() {
    jQuery('#datepicker').datepicker({
        format: 'dd-mm-yyyy',
        startDate: '+1d'
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