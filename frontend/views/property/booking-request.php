<?php
frontend\assets\AppAsset::register($this);
$this->registerCssFile('/css/ppe/style.css');
$this->registerCssFile('/css/datepicker.css');
$this->registerCssFile('/css/users/user-styles.css');
$this->registerCssFile('/css/custom-style.css');
$this->registerCssFile('/css/booking-request/booking-request.css');
?>
<div class="wrapper">
    <div class="room-booking-header">
        <div class="room-booking-header-left">
            <div class="heading">Book Rooms</div>
            <div class="date-area">
                <figure><img src="images/booking-request/calender-icon.svg" alt=""></figure>
                <article>August 2, 2022</article>
            </div>
            <div class="small-box status-date">
                <h3 class="booking-status">Status: Confirmed</h3>
                <p class="date">22 November 2022</p>
            </div>
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
                        <h4 class="with-stars">Kallada Tours and Travels
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
                        <h4>Misty Rock Resort</h4=>
                            <div class="resort-location">
                                <span class="location-icon"><img src="images/location-icon.png" alt=""></span>
                                <h5 class="location-name">Wayanad, Kerala, India</h5>
                            </div>
                            <div class="mobile-no">+91 123 456 7890</div>
                    </article>
                </div>
            </div>
        </div>
        <div class="hotels-client-table-wrapper">
            <div class="table-responsive">
                <table class="common-table hotels-client-table">
                    <thead>
                        <tr>
                            <th>Percentage</th>
                            <th>Amount</th>
                            <th>Cut Off</th>
                            <th style="width:20%;">Status</th>
                            <th class="action-column" style="width: 7%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>30%</td>
                            <td>25000</td>
                            <td>20 OCTOBER 2022</td>
                            <td>
                                <div class="status-text" style="color: #4B9600;">Paid</div>
                            </td>
                            <td rowspan="3">
                                <div class="action-edit-icon">
                                    <img src="images/booking-request/edit-icon.svg" alt="">
                                    <span>EDIT</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>30%</td>
                            <td>25000</td>
                            <td>20 OCTOBER 2022</td>
                            <td>
                                <div class="status-select-wrapper">
                                    <select name="" id="" class="status-select status-text status-paid">
                                        <option value="">Paid</option>
                                        <option value="">Pending</option>
                                        <option value="">Due</option>
                                        <option value="">Over Due</option>
                                        <option value="">Partially Paid</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>30%</td>
                            <td>25000</td>
                            <td>20 OCTOBER 2022</td>
                            <td>
                                <div class="status-select-wrapper">
                                    <select name="" id="" class="status-select status-text status-pending">
                                        <option value="">Pending</option>
                                        <option value="">Paid</option>
                                        <option value="">Due</option>
                                        <option value="">Over Due</option>
                                        <option value="">Partially Paid</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="bookin-lists-chat-wrapper">
            <div class="date-wise-booking">
                <div class="single-date-bookings">
                    <div class="date-area-btn">10 August 2022</div>
                    <div class="room-details-wrapper">
                        <div class="room-details-row">
                            <div class="room-details-left">
                                <div class="check-area">
                                    <label class="checkbox-container">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="room-name">Premium Valley View Room Pool </div>
                            </div>
                            <div class="room-details-right">
                                <div class="single-item">
                                    <button class="booking-status-btn room-avilable">
                                        <img src="images/booking-request/check-icon.svg" alt=""> Available
                                    </button>
                                </div>
                                <div class="single-item">
                                    <button class="room-no-btn">No. of Rooms: 10</button>
                                </div>
                                <div class="single-item">
                                    <div class="meals-icon-area">
                                        <div class="meals-icon"><img src="images/booking-request/meals-icon.svg" alt=""
                                                class="meals-icon-img">
                                        </div>AP
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="room-cat-rate">
                                        <div class="room-cat-area">SRR</div>
                                        <div class="room-rate">₹6,100</div>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="view-info-area">
                                        <button class="info-btn"><img src="images/booking-request/view-icon.svg"
                                                alt=""></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room-details-row">
                            <div class="room-details-left">
                                <div class="check-area">
                                    <label class="checkbox-container">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="room-name">Premium Valley View Room Pool </div>
                            </div>
                            <div class="room-details-right">
                                <div class="single-item">
                                    <button class="booking-status-btn room-avilable">
                                        <img src="images/booking-request/check-icon.svg" alt=""> Available
                                    </button>
                                </div>
                                <div class="single-item">
                                    <button class="room-no-btn">No. of Rooms: 10</button>
                                </div>
                                <div class="single-item">
                                    <div class="meals-icon-area">
                                        <div class="meals-icon">
                                            <span class="info-icon"><img src="images/booking-request/info-icon.svg"
                                                    alt=""></span>
                                            <img src="images/booking-request/meals-icon.svg" alt=""
                                                class="meals-icon-img">
                                        </div>AP
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="room-cat-rate">
                                        <div class="room-cat-area">SRR</div>
                                        <div class="room-rate">₹6,100</div>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="view-info-area">
                                        <button class="info-btn"><img src="images/booking-request/info-icon.svg"
                                                alt=""></button>
                                        <button class="info-btn"><img src="images/booking-request/view-icon.svg"
                                                alt=""></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-date-bookings">
                    <div class="date-area-btn">10 August 2022</div>
                    <div class="room-details-wrapper">
                        <div class="room-details-row">
                            <div class="room-details-left">
                                <div class="check-area">
                                    <label class="checkbox-container">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="room-name">Premium Valley View Room Pool </div>
                            </div>
                            <div class="room-details-right">
                                <div class="single-item">
                                    <button class="booking-status-btn room-not-avilable">
                                        <img src="images/booking-request/uncheck-icon.svg" alt=""> Not Available
                                    </button>
                                </div>
                                <div class="single-item">
                                    <button class="room-no-btn">No. of Rooms: 10</button>
                                </div>
                                <div class="single-item">
                                    <div class="meals-icon-area">
                                        <div class="meals-icon">
                                            <span class="info-icon"><img src="images/booking-request/info-icon.svg"
                                                    alt=""></span>
                                            <img src="images/booking-request/meals-icon.svg" alt=""
                                                class="meals-icon-img">
                                        </div>AP
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="room-cat-rate">
                                        <div class="room-cat-area">SRR</div>
                                        <div class="room-rate">₹6,100</div>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="view-info-area">
                                        <button class="info-btn"><img src="images/booking-request/view-icon.svg"
                                                alt=""></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room-details-row">
                            <div class="room-details-left">
                                <div class="check-area">
                                    <label class="checkbox-container">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="room-name">Premium Valley View Room Pool </div>
                            </div>
                            <div class="room-details-right">
                                <div class="single-item">
                                    <button class="booking-status-btn room-not-avilable">
                                        <img src="images/booking-request/uncheck-icon.svg" alt=""> Not Available
                                    </button>
                                </div>
                                <div class="single-item">
                                    <button class="room-no-btn">No. of Rooms: 10</button>
                                </div>
                                <div class="single-item">
                                    <div class="meals-icon-area">
                                        <div class="meals-icon">
                                            <img src="images/booking-request/meals-icon.svg" alt=""
                                                class="meals-icon-img">
                                        </div>AP
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="room-cat-rate">
                                        <div class="room-cat-area">SRR</div>
                                        <div class="room-rate">₹6,100</div>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="view-info-area">
                                        <button class="info-btn"><img src="images/booking-request/info-icon.svg"
                                                alt=""></button>
                                        <button class="info-btn"><img src="images/booking-request/view-icon.svg"
                                                alt=""></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="total-btns-wrapper">
                <button class="small-btn blue-btn">Available for all days</button>
                <div class="total-amount">
                    TOTAL <span>₹6,400</span>
                </div>
            </div>
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
                            <textarea name="" id="" cols="30" rows="10"
                                class="activity-chat">Lorren ippsum gravida sem?</textarea>
                        </div>
                    </div>
                    <div class="activity-chat-single">
                        <div class="activity-chat-user">
                            <div class="user-details">
                                <h5 class="user-details-name">Prakash</h5>
                                <h5 class="user-details-date">12-October 2022</h5>
                            </div>
                            <div class="user-img"><img src="images/booking-request/chat-user-thumb-02.png" alt=""></div>
                        </div>
                        <div class="activity-chat-area">
                            <textarea name="" id="" cols="30" rows="10" class="activity-chat">Lorren ippsum gravida sem?
Lorren ippsum gravida sem?</textarea>
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
                            <textarea name="" id="" cols="30" rows="10"
                                class="activity-chat">Lorren ippsum gravida sem?</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- BOF Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered medium-modal-wrapper" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-header-left">
                    <h3 class="popup-title">Room-wise Pax Allocation</h3>
                </div>
                <div class="modal-header-right">
                    <h4 class="day-header">Day 1 | Tuesday, 10 Aug 2022</h4>
                </div>
            </div>
            <div class="modal-body">
                <div class="pop-room-details-wrapper">
                    <div class="pop-room-content-header">
                        <div class="pop-room-content">
                            <figure><img src="images/user-icons/user-img.png" alt=""></figure>
                            <article>
                                <h4 class="room-name">Misty Rock Resort</h4>
                                <div class="resort-location">
                                    <span class="location-icon"><img src="images/location-icon.png" alt=""></span>
                                    <h5 class="location-name">Wayanad, Kerala, India</h5>
                                </div>
                            </article>
                        </div>
                        <div class="enquiry-pax">
                            <div class="enquiry-pax-header">Enquiry Pax</div>
                            <div class="enquiry-pax-contents-wrapper">
                                <div class="icons-group-wrapper">
                                    <div class="icon-content-single">
                                        <img src="images/user-icons/man-icon.svg" alt=""
                                            style="width: 10px; margin:0 5px 0 0;"> 7
                                    </div>
                                    <div class="icon-content-single">
                                        <img src="images/user-icons/women-icon.svg" alt=""
                                            style="width: 14px; margin:0 5px 0 0;">
                                        0
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room-body-wrapper">
                        <div class="table-responsive">
                            <table class="room-pax-table">
                                <thead>
                                    <tr>
                                        <th style="width:55%"></th>
                                        <th style="width:15%">
                                            <div class="man-icon">
                                                <img src="images/user-icons/man-icon.svg" alt="">
                                                <span class="man-top-icon"><img src="images/user-icons/check-icon.svg"
                                                        alt=""></span>
                                            </div>
                                        </th>
                                        <th style="width:15%">
                                            <div class="man-icon">
                                                <img src="images/user-icons/man-icon.svg" alt="">
                                                <span class="man-top-icon"><img src="images/user-icons/info-icon.svg"
                                                        alt=""></span>
                                            </div>
                                        </th>
                                        <th style="width:15%;">
                                            <div class="man-icon">
                                                <img src="images/user-icons/man-icon.svg" alt="">
                                                <span class="man-top-icon"><img src="images/user-icons/check-icon.svg"
                                                        alt=""></span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width:55%; text-align: left;">
                                            <div class="td-box">Pax Count as per property's Child & Infant Policy</div>
                                        </td>
                                        <td style="width:15%;">
                                            <div class="td-smal-input blank-heading">7</div>
                                        </td>
                                        <td style="width:15%;">
                                            <div class="td-smal-input blank-heading">0</div>
                                        </td>
                                        <td style="width:15%;">
                                            <div class="td-smal-input blank-heading">0</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="table-vertical-scroll">
                                <table class="room-pax-table">
                                    <tbody>
                                        <tr>
                                            <td style="text-align: left; width:55%;">
                                                <div class="td-box color-navy">Crown Luxury</div>
                                            </td>
                                            <td style="width:15.5%">
                                                <input class="td-smal-input" value="7">
                                            </td>
                                            <td style="width:15%">
                                                <input class="td-smal-input" value="0">
                                            </td>
                                            <td style="width:15%;">
                                                <input class="td-smal-input" value="0">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left; width:55%;">
                                                <div class="td-box color-navy">Crown Luxury</div>
                                            </td>
                                            <td style="width:15.5%">
                                                <input class="td-smal-input" value="7">
                                            </td>
                                            <td style="width:15%">
                                                <input class="td-smal-input" value="0">
                                            </td>
                                            <td style="width:15%;">
                                                <input class="td-smal-input" value="0">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left; width:55%;">
                                                <div class="td-box color-navy">Crown Luxury</div>
                                            </td>
                                            <td style="width:15.5%">
                                                <input class="td-smal-input" value="7">
                                            </td>
                                            <td style="width:15%">
                                                <input class="td-smal-input" value="0">
                                            </td>
                                            <td style="width:15%;">
                                                <input class="td-smal-input" value="0">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left; width:55%;">
                                                <div class="td-box color-navy">Crown Luxury</div>
                                            </td>
                                            <td style="width:15.5%">
                                                <input class="td-smal-input" value="7">
                                            </td>
                                            <td style="width:15%">
                                                <input class="td-smal-input" value="0">
                                            </td>
                                            <td style="width:15%;">
                                                <input class="td-smal-input" value="0">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <table class="room-pax-table">
                                <tbody>
                                    <tr>
                                        <td style="text-align: left;width:55%;">
                                            <div class="td-box">Allocated Pax</div>
                                        </td>
                                        <td style="width:15%;">
                                            <div class="td-smal-input blank-heading">7</div>
                                        </td>
                                        <td style="width:15%;">
                                            <div class="td-smal-input blank-heading">0</div>
                                        </td>
                                        <td style="width:15%;">
                                            <div class="td-smal-input blank-heading">0</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="popup-bottom">
                        <div class="two-btn-center">
                            <button class="btn grey-btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn red-btn">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EOF Edit Modal -->
<!-- BOF Roomin Plan Modal -->
<div class="modal fade" id="roomingPlanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered large-modal-wrapper" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-header-left">
                    <h3 class="popup-title">Manual Rooming Plan</h3>
                </div>
                <div class="modal-header-right">
                    <h4 class="day-header">Day 1 | Tuesday, 10 Aug 2022</h4>
                </div>
            </div>
            <div class="modal-body">
                <div class="rooming-plan-wrapper">
                    <div class="enquiry-box-wrapper">
                        <div class="enquiry-box-header">
                            <div class="enquiry-box-single">
                                <div class="enquiry-box-title">Enquiry No</div>
                                <div class="enquiry-box-value">101/2022</div>
                            </div>
                            <div class="enquiry-box-single">
                                <div class="enquiry-box-title">Guest Name</div>
                                <div class="enquiry-box-value">Lionel Andrés Messi</div>
                            </div>
                        </div>
                        <div class="hotel-room-wrapper">
                            <div class="hotel-details">
                                <div class="room-name">The Leaf Hotel & Resort</div>
                                <div class="resort-location">
                                    <span class="location-icon"><img src="images/location-icon.png" alt=""></span>
                                    <h5 class="location-name">Munnar (Locality) Kerala. India</h5>
                                </div>
                            </div>
                            <div class="room-details">
                                <div class="room-name">Crown Luxury</div>
                                <div class="room-facilities-wrapper">
                                    <div class="room-facilities-single">
                                        <div class="icons-group-wrapper">
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/bed-icon.svg" alt="" style="width: 25px">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pax-count-pax-wise-wrapper">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="header-area">
                                <div class="heading">Pax Count</div>
                                <div class="header-area-facilities">
                                    <div class="room-facilities-single">
                                        <div class="icons-group-wrapper">
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/man-icon.svg" alt=""
                                                    style="width: 10px; margin:0 5px 0 0;"> 7
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/women-icon.svg" alt=""
                                                    style="width: 14px; margin:0 5px 0 0;">
                                                0
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/child-icon.svg" alt=""
                                                    style="width: 14px; margin:0 5px 0 0;">
                                                0
                                            </div>
                                        </div>
                                        <div class="icons-group-wrapper colored-box">
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/meals-icon.svg" alt="" style="width: 23px">
                                                AP (Breakfast)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive common-table-area-wrapper">
                                <table class="common-table-area">
                                    <thead>
                                        <tr>
                                            <th>Rooms</th>
                                            <th>EBS</th>
                                            <th>CWB</th>
                                            <th>CNB</th>
                                            <th>SGL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" class="table-input" value="99"></td>
                                            <td><input type="text" class="table-input" value="99"></td>
                                            <td><input type="text" class="table-input" value="99"></td>
                                            <td><span class="table-input">99</span></td>
                                            <td><input type="text" class="table-input" value="99"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="info-area">
                                <div class="info-list">
                                    <h6><img src="images/user-icons/info-icon.svg" alt=""> Unallocated Pax:</h6>
                                    <div class="icons-group-wrapper"
                                        style="border: 1px solid #D2D2D2;margin:0 0 0 10px;">
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/man-icon.svg" alt=""
                                                style="width: 10px; margin:0 5px 0 0;"> 7
                                        </div>
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/women-icon.svg" alt=""
                                                style="width: 14px; margin:0 5px 0 0;">
                                            0
                                        </div>
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/child-icon.svg" alt=""
                                                style="width: 14px; margin:0 5px 0 0;">
                                            0
                                        </div>
                                    </div>
                                </div>
                                <div class="info-list">
                                    <h6><img src="images/user-icons/info-icon.svg" alt=""> Excess Bed Utilization: DB:22
                                        | EB:22 | SB:22</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="header-area">
                                <div class="heading">Pax-Wise Bed Utilization</div>
                            </div>
                            <div class="table-responsive common-table-area-wrapper">
                                <table class="common-table-area white-table no-border-table">
                                    <tbody>
                                        <tr>
                                            <td><img style="width: 11px; margin: 0;"
                                                    src="images/user-icons/man-icon.svg" alt=""></td>
                                            <td><input type="text" class="table-input" value="DB:99"></td>
                                            <td><input type="text" class="table-input" value="EB:99"></td>
                                            <td><input type="text" class="table-input table-input-disabled"
                                                    value="SGL:99"></td>
                                        </tr>
                                        <tr>
                                            <td><img style="width: 15px; margin: 0;"
                                                    src="images/user-icons/women-icon.svg" alt=""></td>
                                            <td><input type="text" class="table-input" value="DB:99"></td>
                                            <td><input type="text" class="table-input" value="EB:99"></td>
                                            <td><input type="text" class="table-input table-input-disabled"
                                                    value="SGL:99"></td>
                                        </tr>
                                        <tr>
                                            <td><img style="width: 15px; margin: 0;"
                                                    src="images/user-icons/child-icon.svg" alt=""></td>
                                            <td><input type="text" class="table-input" value="DB:99"></td>
                                            <td><input type="text" class="table-input" value="EB:99"></td>
                                            <td><input type="text" class="table-input table-input-disabled"
                                                    value="SGL:99"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="slab-rate-wrapper">
                        <div class="header-area">
                            <div class="heading">Tariff Basis: Slab Rate</div>
                        </div>
                        <div class="table-responsive common-table-area-wrapper">
                            <table class="common-table-area">
                                <thead>
                                    <tr>
                                        <th>Rooms</th>
                                        <th>FRA</th>
                                        <th>CWB</th>
                                        <th>CNB</th>
                                        <th>SGI</th>
                                        <th>FOC</th>
                                        <th>Dinner</th>
                                        <th>Day Tool</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="td-padding">1,24450</span></td>
                                        <td><span class="td-padding">2,2950</span></td>
                                        <td><span class="td-padding">0</span></td>
                                        <td><span class="td-padding">1,2700</span></td>
                                        <td><span class="td-padding">0</span></td>
                                        <td><span class="td-padding">0</span></td>
                                        <td><span class="td-padding">0</span></td>
                                        <td><span class="td-padding">35,000</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="popup-bottom">
                        <div class="two-btn-center">
                            <button class="btn grey-btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn red-btn">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EOF Roomin Plan Modal -->




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
//     $('#roomingPlanModal').modal('show');
// });
$(document).ready(function() {
    $(".comment-btn").click(function() {
        $(".comment-box-main").slideToggle();
    });
    $(".activity-btn").click(function() {
        $(".show-activity-wrapper").slideToggle();
    });
});
</script>