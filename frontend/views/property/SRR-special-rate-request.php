<?php
frontend\assets\AppAsset::register($this);
$this->registerCssFile('/css/ppe/style.css');
$this->registerCssFile('/css/datepicker.css');
$this->registerCssFile('/css/users/user-styles.css');
$this->registerCssFile('/css/booking-request/booking-request.css');
$this->registerCssFile('/css/custom-style.css');
$this->registerCssFile('/css/datepicker/jquery-ui.css');
$this->registerCssFile('/css/ssr-special-rate/ssr-special-rate.css');
?>
<div class="wrapper">
    <div class="room-booking-header history-chat-header">
        <div class="room-booking-header-left">
            <div class="heading border-none">SRR ( Special Rate Rooms )</div>
        </div>
        <div class="room-booking-header-right">
            <div class="small-box">
                <div class="number-text">Ref No: AB67788-352-11A</div>
            </div>
            <div class="small-box">
                <div class="number-text">Enq No: AB67788-352-11A</div>
            </div>
        </div>
    </div>
    <div class="hotels-client-table-wrapper">
        <div class="hotels-client-wrapper">
            <div class="hotels-client-single">
                <div class="resort-details-area">
                    <figure><img src="images/booking-request/thumb-01.png" alt=""></figure>
                    <article>
                        <div class="card-heading-row">
                            <h4 class="card-heading">Kallada Tours and Travels</h4>
                            <div class="hotel-rating-text-wrapper">
                                <span class="hotel-rating-text">Luxury</span>
                            </div>
                        </div>
                        <div class="resort-location">
                            <span class="location-icon"><img src="images/location-icon.png" alt=""></span>
                            <h5 class="location-name">Ernakulam, Kerala, India</h5>
                        </div>
                        <div class="mobile-no">+91 123 456 7890</div>
                    </article>
                </div>
            </div>
            <div class="hotels-client-single">
                <div class="resort-details-area">
                    <figure><img src="images/booking-request/thumb-02.png" alt=""></figure>
                    <article>
                        <div class="card-heading-row">
                            <h4 class="card-heading">Kallada Tours and Travels</h4>
                        </div>
                        <div class="resort-location">
                            <span class="location-icon"><img src="images/location-icon.png" alt=""></span>
                            <h5 class="location-name">Wayanad, Kerala, India</h5>
                        </div>
                        <div class="mobile-no">+91 123 456 7890</div>
                    </article>
                </div>
            </div>
        </div>
        <div class="contets-area-wrapper">
            <div class="room-rates-area-wrapper">
                <div class="contets-area-header">
                    <div class="left">
                        <h5 class="contets-area-heading">Standard room with private room</h5>
                        <div class="meals-area ml-2">
                            <figure>
                                <img src="images/search-popup/food-icon.svg" alt="">
                                <span class="info-icon">
                                    <img src="images/user-icons/info-icon.svg" alt="">
                                </span>
                            </figure>
                            <article>MAP</article>
                        </div>
                    </div>
                    <div class="right">
                        <div class="apply-rate">
                            <label class="check-container">Apply LS Rate
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="common-table hotels-client-table">
                        <thead>
                            <tr>
                                <th style="width: 15%">Tariff type</th>
                                <th>Room</th>
                                <th>2 x EBA</th>
                                <th>3 X XBA</th>
                                <th>3 X CWA</th>
                                <th>2 X CNB</th>
                                <th>2 X SGL</th>
                                <th
                                    style="width:9%; text-align: center; background: #FFBEB7; border-bottom: 1px solid #ABB0C1;">
                                    Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="head-td">Slab Rate</td>
                                <td>2000</td>
                                <td>4000</td>
                                <td>6000</td>
                                <td>6000</td>
                                <td>4000</td>
                                <td>4000</td>
                                <th
                                    style="width:8%; text-align: center; background: #FFBEB7; border-bottom: 1px solid #ABB0C1;">
                                    26000</td>
                            </tr>
                            <tr>
                                <td class="head-td">SRR Request</td>
                                <td>
                                    <input class="td-input" placeholder="Enter Amount">
                                </td>
                                <td>
                                    <input class="td-input" placeholder="Enter Amount">
                                </td>
                                <td>
                                    <input class="td-input" placeholder="Enter Amount">
                                </td>
                                <td>
                                    <input class="td-input" placeholder="Enter Amount">
                                </td>
                                <td>
                                    <input class="td-input" placeholder="Enter Amount">
                                </td>
                                <td>
                                    <input class="td-input" placeholder="Enter Amount">
                                </td>
                                <th style="background: #FFBEB7; text-align: center; border-bottom: 1px solid #ABB0C1;">
                                    6000
                                    </td>
                            </tr>
                            <tr>
                                <td class="head-td">Varience</td>
                                <td>1000</td>
                                <td>1000</td>
                                <td>1000</td>
                                <td>1000</td>
                                <td>1000</td>
                                <td>1000</td>
                                <th style="text-align: center;">6000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="dates-selected-wrapper">
                    <div class="selected-date-single">
                        <div class="date-name">WEDNESDAY</div>
                        <div class="date-number">30</div>
                        <div class="month-year">OCT 2022</div>
                    </div>
                    <div class="selected-date-single">
                        <div class="date-name">MONDAY</div>
                        <div class="date-number">02</div>
                        <div class="month-year">NOV 2022</div>
                    </div>
                    <div class="selected-date-single">
                        <div class="date-name">THURSDAY</div>
                        <div class="date-number">05</div>
                        <div class="month-year">NOV 2022</div>
                    </div>
                    <div class="selected-date-single">
                        <div class="date-name">FRIDAY</div>
                        <div class="date-number">06</div>
                        <div class="month-year">NOV 2022</div>
                    </div>
                </div>
            </div>
            <div class="room-rates-area-wrapper">
                <div class="contets-area-header">
                    <div class="left">
                        <h5 class="contets-area-heading">Premium room with private room</h5>
                        <div class="meals-area ml-2">
                            <figure>
                                <img src="images/search-popup/food-icon.svg" alt="">
                                <span class="info-icon">
                                    <img src="images/user-icons/info-icon.svg" alt="">
                                </span>
                            </figure>
                            <article>MAP</article>
                        </div>
                    </div>
                    <div class="right">
                        <div class="apply-rate">
                            <label class="check-container">Apply LS Rate
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="common-table hotels-client-table">
                        <thead>
                            <tr>
                                <th style="width: 15%">Tariff type</th>
                                <th>Room</th>
                                <th>2 x EBA</th>
                                <th>3 X XBA</th>
                                <th>3 X CWA</th>
                                <th>2 X CNB</th>
                                <th>2 X SGL</th>
                                <th
                                    style="width:9%; text-align: center; background: #FFBEB7; border-bottom: 1px solid #ABB0C1;">
                                    Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="head-td">Slab Rate</td>
                                <td>2000</td>
                                <td>4000</td>
                                <td>6000</td>
                                <td>6000</td>
                                <td>4000</td>
                                <td>4000</td>
                                <th
                                    style="width:8%; text-align: center; background: #FFBEB7; border-bottom: 1px solid #ABB0C1;">
                                    26000</td>
                            </tr>
                            <tr>
                                <td class="head-td">SRR Request</td>
                                <td>
                                    <input class="td-input" placeholder="Enter Amount">
                                </td>
                                <td>
                                    <input class="td-input" placeholder="Enter Amount">
                                </td>
                                <td>
                                    <input class="td-input" placeholder="Enter Amount">
                                </td>
                                <td>
                                    <input class="td-input" placeholder="Enter Amount">
                                </td>
                                <td>
                                    <input class="td-input" placeholder="Enter Amount">
                                </td>
                                <td>
                                    <input class="td-input" placeholder="Enter Amount">
                                </td>
                                <th style="background: #FFBEB7; text-align: center; border-bottom: 1px solid #ABB0C1;">
                                    6000
                                    </td>
                            </tr>
                            <tr>
                                <td class="head-td">Varience</td>
                                <td>1000</td>
                                <td>1000</td>
                                <td>1000</td>
                                <td>1000</td>
                                <td>1000</td>
                                <td>1000</td>
                                <th style="text-align: center;">6000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="dates-selected-wrapper border-none">
                    <div class="selected-date-single">
                        <div class="date-name">WEDNESDAY</div>
                        <div class="date-number">30</div>
                        <div class="month-year">OCT 2022</div>
                    </div>
                    <div class="selected-date-single">
                        <div class="date-name">MONDAY</div>
                        <div class="date-number">02</div>
                        <div class="month-year">NOV 2022</div>
                    </div>
                    <div class="selected-date-single">
                        <div class="date-name">THURSDAY</div>
                        <div class="date-number">05</div>
                        <div class="month-year">NOV 2022</div>
                    </div>
                    <div class="selected-date-single">
                        <div class="date-name">FRIDAY</div>
                        <div class="date-number">06</div>
                        <div class="month-year">NOV 2022</div>
                    </div>
                </div>
            </div>
            <div class="total-card-wrapper">
                <div class="total-card-single">
                    <div class="total-title">SLAB TOTAL</div>
                    <div class="total-value">₹6,400</div>
                </div>
                <div class="total-card-single">
                    <div class="total-title">SRR TOTAL</div>
                    <div class="total-value">₹6,400</div>
                </div>
                <div class="total-card-single">
                    <div class="total-title">VARIANCE</div>
                    <div class="total-value">₹6,400</div>
                </div>
            </div>
        </div>
        <div class="bookin-lists-chat-wrapper">
            <div class="booking-lists-wrapper">
                <div class="booking-lists-btns">
                    <div class="booking-lists-btns-left">
                        <button class="medium-btn comment-btn"><img src="images/booking-request/comment-icon.svg"
                                alt=""> Write
                            comments</button>
                        <button class="medium-btn activity-btn"><img src="images/booking-request/activity-icon.svg"
                                alt=""> Show
                            Activity</button>
                    </div>
                    <div class="booking-lists-btns-right">
                        <button class="btn grey-btn">Back</button>
                        <button class="btn primary-btn">Submit</button>
                    </div>
                </div>
            </div>
            <div class="comment-box-main">
                <div class="comment-box-wrapper">
                    <div class="chat-img"><img src="images/booking-request/chat-user-img.svg" alt=""></div>
                    <div class="chat-type-area-wrapper">
                        <textarea name="" id="" cols="30" rows="10" class="chat-type-area">Add comment</textarea>
                        <button class="blue-btn">Send</button>
                    </div>
                </div>
            </div>
            <div class="show-activity-wrapper">
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
                                <div class="chat-history-btn-wrapper">
                                    <div class="dropdown">
                                        <button class="chat-history-btn dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <img src="images/chat-history.png" alt="">
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Chat History</a>
                                        </div>
                                    </div>
                                </div>
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
                                <div class="chat-history-btn-wrapper">
                                    <div class="dropdown">
                                        <button class="chat-history-btn dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <img src="images/chat-history.png" alt="">
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Chat History</a>
                                        </div>
                                    </div>
                                </div>
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
                                <div class="chat-history-btn-wrapper">
                                    <div class="dropdown">
                                        <button class="chat-history-btn dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <img src="images/chat-history.png" alt="">
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Chat History</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="show-more-btn-wrapper">
                    <button class="btn show-more-btn">View More</button>
                </div> -->
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