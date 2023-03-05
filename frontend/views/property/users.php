<?php
frontend\assets\AppAsset::register($this);
$this->registerCssFile('/css/ppe/style.css');
$this->registerCssFile('/css/datepicker.css');
$this->registerCssFile('/css/users/user-styles.css');
$this->registerCssFile('/css/search-popup/layout.css');
$this->registerCssFile('/css/custom-style.css');
?>
<div class="wrapper">
    <div class="assign-bar-wrapper">
        <div class="assign-bar-contents">
            <div class="assign-bar-heading-area">
                <div class="assign-bar-heading">Assigned Property
                    <span class="add-btn"><img src="images/add-icon.png" alt=""></span>
                </div>
            </div>
            <div class="assign-props-area">
                <div class="assign-props-single">
                    <div class="assign-props-head">Guest Name</div>
                    <div class="assign-props-value">Jayesh Sathyamoorthy</div>
                </div>
                <div class="assign-props-single">
                    <div class="assign-props-head">Enq No</div>
                    <div class="assign-props-value">1232/2022</div>
                </div>
                <div class="assign-props-single">
                    <div class="assign-props-value">20 Nights, 5 Destinations</div>
                </div>
            </div>
        </div>
    </div>

    <div class="custom-accordion-wrapper">
        <div id="accordion" class="accordion">
            <div class="card mb-0">
                <div class="card-header collapsed  show" data-toggle="collapse" href="#collapseOne">
                    <div class="user-header-box">
                        <div class="user-header-box-left">
                            <h3 class="place-title">Munnar</h3>
                            <div class="room-stay-details">Selected: 1/10</div>
                            <div class="room-stay-details">Selected: 1/10</div>
                            <div class="calendar-icon">
                                <img src="images/user-icons/calender.svg" alt="">
                                <!-- <span class="calendar-noti">1</span> -->
                                <span class="calendar-status-icon"><img src="images/notify-icons/error-icon.svg"
                                        alt=""></span>
                            </div>
                        </div>
                        <div class="user-header-box-right">
                            <div class="up-arrow">
                                <img src="images/user-icons/up-arrow.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="collapseOne" class="card-body collapse  show" data-parent="#accordion">
                    <div class="room-single-content">
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
                                                <div class="hotel-rating-text-wrapper">
                                                    <span class="hotel-rating-text">Luxury</span>
                                                </div>
                                                <!-- <div class="star-wrapper">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                </div> -->
                                                <div class="block-ssr-booking-btns">
                                                    <div class="block-ssr-booking-btn">Block</div>
                                                    <div class="block-ssr-booking-btn active">SSR <br>
                                                        <span class="btn-status">Accepted</span>
                                                    </div>
                                                    <div class="block-ssr-booking-btn">Booking</div>
                                                </div>
                                            </div>
                                            <div class="resort-location">
                                                <span class="location-icon"><img src="images/location-icon.png"
                                                        alt=""></span>
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
                                                <div class="wishlist-man-icon">
                                                    <div class="wishlist-icon"><img
                                                            src="images/user-icons/wishlist-icon.svg" alt=""></div>
                                                    <div class="man-icon">
                                                        <img src="images/user-icons/man-icon.svg" alt="">
                                                        <span class="man-top-icon"><img
                                                                src="images/user-icons/info-icon.svg" alt=""></span>
                                                    </div>
                                                </div>
                                                <div class="phone-number-wrapper">
                                                    <div class="view-details">
                                                        <button class="view-details-btn view-details-on"
                                                            id="view-details-btn-01" onclick="viewDetails(1)">View
                                                            Details</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <div class="search-result-right">
                                <div class="actions-wrapper">
                                    <!-- <button class="action-btn">Actions <img src="images/user-icons/actions-icon.svg"
                                            alt=""></button> -->
                                    <span class="tooltip-link">
                                        <div class="dropdown show">
                                            <a class="action-btn dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Actions <img src="images/user-icons/actions-icon.svg" alt="">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Message</a>
                                                <a class="dropdown-item" href="#">Check availability</a>
                                                <a class="dropdown-item" href="#">SRR</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                                <a class="dropdown-item" href="#">Booking</a>
                                            </div>
                                        </div>
                                        <span class="hovercard hovercard-right">
                                            <div class="tooltiptext">
                                                <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                <p class="tooltip-para">Action disabled as child policies of rooms
                                                    mismatch.
                                                </p>
                                            </div>
                                        </span>
                                    </span>
                                </div>
                                <div class="total-amount-wrapper">
                                    <h3 class="total-amount">Total Amount: <span class="total-value">₹ 25,000,0</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="view-details-wrapper" id="matching-boxes-main-1" style="display:block;">
                            <div class="view-details-single">
                                <div class="day-area-wrapper">
                                    <div class="day-content">Day 1 | 10 Aug 2022</div>
                                    <div class="icons-group-wrapper red-bordered-box">
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/man-icon.svg" alt=""
                                                style="width: 10px; margin:0 5px 0 0;"> 7
                                        </div>
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/women-icon.svg" alt=""
                                                style="width: 14px; margin:0 5px 0 0;"> 0
                                        </div>
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/child-icon.svg" alt=""
                                                style="width: 14px; margin:0 5px 0 0;"> 0
                                        </div>
                                    </div>
                                    <div class="edit-question-icon" data-toggle="modal" data-target="#editModal">
                                        <img src="images/user-icons/edit-icon.svg" style="width:28px;" alt="">
                                    </div>
                                </div>
                                <div class="room-row-single">
                                    <div class="room-left">
                                        <div class="room-name">Crown Luxury</div>
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
                                    </div>
                                    <div class="room-center">
                                        <div class="meals-price-wrapper">
                                            <div class="meals-area">
                                                <figure>
                                                    <img src="images/search-popup/food-icon.svg" alt="">
                                                </figure>
                                                <article>APP</article>
                                            </div>
                                            <div class="cat-price-wrapper">
                                                <div class="cat-btn">SSR</div>
                                                <div class="cat-price">₹6,100</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-right">
                                        <button class="apply-button apply-hike-button">Apply Hike</button>
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom tooltip-link">
                                                <select name="" id="">
                                                    <option value="">Auto Rooming</option>
                                                </select>
                                                <span class="hovercard">
                                                    <div class="tooltiptext">
                                                        <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                        <p class="tooltip-para">Switch disabled as child policies of
                                                            rooms mismatch.</p>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="view-delete-icons">
                                            <button class="view-btn tooltip-link">
                                                <img src="images/user-icons/view-btn-icon.svg" alt="">
                                                <div class="hovercard hovercard-right">
                                                    <div class="tooltip-table-wrapper">
                                                        <table class="tooltip-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Room</th>
                                                                    <th>Child Policy</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Standard Room</td>
                                                                    <td>
                                                                        <div class="icons-group-wrapper"
                                                                            syle="min-width: initial;">
                                                                            <div class="icon-content-single">
                                                                                <img src="images/user-icons/man-icon.svg"
                                                                                    alt=""
                                                                                    style="width: 10px; margin:0 5px 0 0;">
                                                                                8
                                                                            </div>
                                                                            <div class="icon-content-single">
                                                                                <img src="images/user-icons/child-icon.svg"
                                                                                    alt=""
                                                                                    style="width: 14px; margin:0 5px 0 0;">
                                                                                3 - 4
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="delete-btn"><img src="images/user-icons/delete-icon.svg"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-row-single">
                                    <div class="room-left">
                                        <div class="room-name">Crown Deluxe</div>
                                        <div class="icons-group-wrapper">
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/man-icon.svg" alt=""
                                                    style="width: 10px; margin:0 5px 0 0;"> 2
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
                                    <div class="room-center">
                                        <div class="meals-price-wrapper">
                                            <div class="meals-area">
                                                <figure>
                                                    <img src="images/search-popup/food-icon.svg" alt="">
                                                    <span class="info-icon">
                                                        <img src="images/user-icons/info-icon.svg" alt="">
                                                    </span>
                                                </figure>
                                                <article>AP</article>
                                            </div>
                                            <div class="cat-price-wrapper">
                                                <div class="cat-btn">SSR</div>
                                                <div class="cat-price">₹6,400</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-right">
                                        <button class="apply-button apply-slash-button">Apply Slash</button>
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom tooltip-link">
                                                <select name="" id="">
                                                    <option value="">Manual Rooming</option>
                                                </select>
                                                <span class="hovercard">
                                                    <div class="tooltiptext">
                                                        <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                        <p class="tooltip-para">Switch disabled as child policies of
                                                            rooms mismatch.</p>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="view-delete-icons">
                                            <button class="view-btn" data-toggle="modal"
                                                data-target="#roomingPlanModal"><img
                                                    src="images/user-icons/view-btn-icon.svg" alt=""></button>
                                            <button class="delete-btn"><img src="images/user-icons/delete-icon.svg"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-details-single">
                                <div class="day-area-wrapper">
                                    <div class="day-content">Day 1 | 10 Aug 2022</div>
                                    <div class="icons-group-wrapper red-box tooltip-link">
                                        <div class="">
                                            <span>Child Policy Mismatch</span>
                                            <span class="hovercard">
                                                <div class="tooltiptext">
                                                    <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                    <p class="tooltip-para">Only rooms with similar child & infant
                                                        policy allowed</p>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="edit-question-icon">
                                        <div class="tooltip-wrapper">
                                            <div class="tooltip-link">
                                                <span><img src="images/user-icons/question-icon.svg" style="width:28px;"
                                                        alt=""></span>
                                                <span class="hovercard">
                                                    <div class="tooltiptext">
                                                        <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                        <p class="tooltip-para">Only rooms with similar child & infant
                                                            policy allowed</p>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- <img src="images/user-icons/question-icon.svg" style="width:28px;" alt=""> -->
                                    </div>
                                </div>
                                <div class="room-row-single">
                                    <div class="room-left">
                                        <div class="room-name">Crown Luxury</div>
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
                                    </div>
                                    <div class="room-center">
                                        <div class="meals-price-wrapper">
                                            <div class="meals-area">
                                                <figure>
                                                    <img src="images/search-popup/food-icon.svg" alt="">
                                                </figure>
                                                <article>AP</article>
                                            </div>
                                            <div class="cat-price-wrapper">
                                                <div class="cat-btn">SSR</div>
                                                <div class="cat-price">₹6,100</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-right">
                                        <button class="apply-button apply-hike-button">Apply Hike</button>
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom tooltip-link">
                                                <select name="" id="">
                                                    <option value="">Auto Rooming</option>
                                                </select>
                                                <span class="hovercard">
                                                    <div class="tooltiptext">
                                                        <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                        <p class="tooltip-para">Switch disabled as child policies of
                                                            rooms mismatch.</p>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="view-delete-icons">
                                            <button class="view-btn" data-toggle="modal"
                                                data-target="#roomingPlanModal"><img
                                                    src="images/user-icons/view-btn-icon.svg" alt=""></button>
                                            <button class="delete-btn"><img src="images/user-icons/delete-icon.svg"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-row-single">
                                    <div class="room-left">
                                        <div class="room-name">Crown Deluxe</div>
                                        <div class="icons-group-wrapper">
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/man-icon.svg" alt=""
                                                    style="width: 10px; margin:0 5px 0 0;"> 2
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
                                    <div class="room-center">
                                        <div class="meals-price-wrapper">
                                            <div class="meals-area">
                                                <figure>
                                                    <img src="images/search-popup/food-icon.svg" alt="">
                                                    <span class="info-icon">
                                                        <img src="images/user-icons/info-icon.svg" alt="">
                                                    </span>
                                                </figure>
                                                <article>AP</article>
                                            </div>
                                            <div class="cat-price-wrapper">
                                                <div class="cat-btn">SSR</div>
                                                <div class="cat-price">₹6,400</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-right">
                                        <button class="apply-button apply-slash-button">Apply Slash</button>
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom tooltip-link">
                                                <select name="" id="">
                                                    <option value="">Manual Rooming</option>
                                                </select>
                                                <span class="hovercard">
                                                    <div class="tooltiptext">
                                                        <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                        <p class="tooltip-para">Switch disabled as child policies of
                                                            rooms mismatch.</p>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="view-delete-icons">
                                            <button class="view-btn" data-toggle="modal"
                                                data-target="#roomingPlanModal"><img
                                                    src="images/user-icons/view-btn-icon.svg" alt=""></button>
                                            <button class="delete-btn"><img src="images/user-icons/delete-icon.svg"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room-single-content">
                        <div class="search-result-card">
                            <div class="search-result-left">
                                <div class="card-details">
                                    <div class="resort-details-area">
                                        <figure>
                                            <img src="images/search-popup/hotel-img.png" alt="">
                                        </figure>
                                        <article>
                                            <div class="card-heading-row">
                                                <h4 class="card-heading">Parakkat Nature Hotels & Resort</h4>
                                                <div class="hotel-rating-text-wrapper">
                                                    <span class="hotel-rating-text">Luxury</span>
                                                </div>
                                                <div class="block-ssr-booking-btns">
                                                    <div class="block-ssr-booking-btn">Block</div>
                                                    <div class="block-ssr-booking-btn active">SSR <br>
                                                        <span class="btn-status">Accepted</span>
                                                    </div>
                                                    <div class="block-ssr-booking-btn">Booking</div>
                                                </div>
                                            </div>
                                            <div class="resort-location">
                                                <span class="location-icon"><img src="images/location-icon.png"
                                                        alt=""></span>
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
                                                <div class="wishlist-man-icon">
                                                    <div class="wishlist-icon"><img
                                                            src="images/user-icons/wishlist-icon.svg" alt=""></div>
                                                    <div class="man-icon">
                                                        <img src="images/user-icons/man-icon.svg" alt="">
                                                        <span class="man-top-icon"><img
                                                                src="images/user-icons/check-icon.svg" alt=""></span>
                                                    </div>
                                                </div>
                                                <div class="phone-number-wrapper">
                                                    <div class="view-details">
                                                        <button class="view-details-btn" id="view-details-btn-02"
                                                            onclick="viewDetails(2)">View
                                                            Details</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <div class="search-result-right">

                                <div class="actions-wrapper">
                                    <!-- <button class="action-btn">Actions <img src="images/user-icons/actions-icon.svg"
                                            alt=""></button> -->
                                    <span class="tooltip-link">
                                        <div class="dropdown show">
                                            <a class="action-btn dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Actions <img src="images/user-icons/actions-icon.svg" alt="">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Message</a>
                                                <a class="dropdown-item" href="#">Check availability</a>
                                                <a class="dropdown-item" href="#">SRR</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                                <a class="dropdown-item" href="#">Booking</a>
                                            </div>
                                        </div>
                                        <span class="hovercard hovercard-right">
                                            <div class="tooltiptext">
                                                <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                <p class="tooltip-para">Action disabled as child policies of rooms
                                                    mismatch.
                                                </p>
                                            </div>
                                        </span>
                                    </span>
                                </div>
                                <div class="total-amount-wrapper">
                                    <h3 class="total-amount">Total Amount: <span class="total-value">₹ 25,000,0</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="view-details-wrapper" id="matching-boxes-main-2">
                            <div class="view-details-single">
                                <div class="day-area-wrapper">
                                    <div class="day-content">Day 1 | 10 Aug 2022</div>
                                    <div class="icons-group-wrapper red-bordered-box">
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/man-icon.svg" alt=""
                                                style="width: 10px; margin:0 5px 0 0;"> 7
                                        </div>
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/women-icon.svg" alt=""
                                                style="width: 14px; margin:0 5px 0 0;"> 0
                                        </div>
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/child-icon.svg" alt=""
                                                style="width: 14px; margin:0 5px 0 0;"> 0
                                        </div>
                                    </div>
                                    <div class="edit-question-icon" data-toggle="modal" data-target="#editModal">
                                        <img src="images/user-icons/edit-icon.svg" style="width:28px;" alt="">
                                    </div>
                                </div>
                                <div class="room-row-single">
                                    <div class="room-left">
                                        <div class="room-name">Crown Luxury</div>
                                        <div class="icons-group-wrapper">
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/man-icon.svg" alt="" style="width: 14px"> 7
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
                                    <div class="room-center">
                                        <div class="meals-price-wrapper">
                                            <div class="meals-area">
                                                <figure>
                                                    <img src="images/search-popup/food-icon.svg" alt="">
                                                </figure>
                                                <article>AP</article>
                                            </div>
                                            <div class="cat-price-wrapper">
                                                <div class="cat-btn">SSR</div>
                                                <div class="cat-price">₹6,100</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-right">
                                        <button class="apply-button apply-hike-button">Apply Hike</button>
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom tooltip-link">
                                                <select name="" id="">
                                                    <option value="">Auto Rooming</option>
                                                </select>
                                                <span class="hovercard">
                                                    <div class="tooltiptext">
                                                        <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                        <p class="tooltip-para">Switch disabled as child policies of
                                                            rooms mismatch.</p>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="view-delete-icons">
                                            <button class="view-btn" data-toggle="modal"
                                                data-target="#roomingPlanModal"><img
                                                    src="images/user-icons/view-btn-icon.svg" alt=""></button>
                                            <button class="delete-btn"><img src="images/user-icons/delete-icon.svg"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-row-single">
                                    <div class="room-left">
                                        <div class="room-name">Crown Deluxe</div>
                                        <div class="icons-group-wrapper">
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/man-icon.svg" alt=""
                                                    style="width: 10px; margin:0 5px 0 0;"> 2
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
                                    <div class="room-center">
                                        <div class="meals-price-wrapper">
                                            <div class="meals-area">
                                                <figure>
                                                    <img src="images/search-popup/food-icon.svg" alt="">
                                                    <span class="info-icon">
                                                        <img src="images/user-icons/info-icon.svg" alt="">
                                                    </span>
                                                </figure>
                                                <article>AP</article>
                                            </div>
                                            <div class="cat-price-wrapper">
                                                <div class="cat-btn">SSR</div>
                                                <div class="cat-price">₹6,400</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-right">
                                        <button class="apply-button apply-slash-button">Apply Slash</button>
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom tooltip-link">
                                                <select name="" id="">
                                                    <option value="">Manual Rooming</option>
                                                </select>
                                                <span class="hovercard">
                                                    <div class="tooltiptext">
                                                        <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                        <p class="tooltip-para">Switch disabled as child policies of
                                                            rooms mismatch.</p>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="view-delete-icons">
                                            <button class="view-btn" data-toggle="modal"
                                                data-target="#roomingPlanModal"><img
                                                    src="images/user-icons/view-btn-icon.svg" alt=""></button>
                                            <button class="delete-btn"><img src="images/user-icons/delete-icon.svg"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-details-single">
                                <div class="day-area-wrapper">
                                    <div class="day-content">Day 1 | 10 Aug 2022</div>
                                    <div class="icons-group-wrapper red-box">
                                        Child Policy Mismatch
                                    </div>
                                    <div class="edit-question-icon">
                                        <img src="images/user-icons/question-icon.svg" style="width:28px;" alt="">
                                    </div>
                                </div>
                                <div class="room-row-single">
                                    <div class="room-left">
                                        <div class="room-name">Crown Luxury</div>
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
                                    </div>
                                    <div class="room-center">
                                        <div class="meals-price-wrapper">
                                            <div class="meals-area">
                                                <figure>
                                                    <img src="images/search-popup/food-icon.svg" alt="">
                                                </figure>
                                                <article>AP</article>
                                            </div>
                                            <div class="cat-price-wrapper">
                                                <div class="cat-btn">SSR</div>
                                                <div class="cat-price">₹6,100</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-right">
                                        <button class="apply-button apply-hike-button">Apply Hike</button>
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom tooltip-link">
                                                <select name="" id="">
                                                    <option value="">Auto Rooming</option>
                                                </select>
                                                <span class="hovercard">
                                                    <div class="tooltiptext">
                                                        <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                        <p class="tooltip-para">Switch disabled as child policies of
                                                            rooms mismatch.</p>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="view-delete-icons">
                                            <button class="view-btn" data-toggle="modal"
                                                data-target="#roomingPlanModal"><img
                                                    src="images/user-icons/view-btn-icon.svg" alt=""></button>
                                            <button class="delete-btn"><img src="images/user-icons/delete-icon.svg"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-row-single">
                                    <div class="room-left">
                                        <div class="room-name">Crown Deluxe</div>
                                        <div class="icons-group-wrapper">
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/man-icon.svg" alt=""
                                                    style="width: 10px; margin:0 5px 0 0;"> 2
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
                                    <div class="room-center">
                                        <div class="meals-price-wrapper">
                                            <div class="meals-area">
                                                <figure>
                                                    <img src="images/search-popup/food-icon.svg" alt="">
                                                    <span class="info-icon">
                                                        <img src="images/user-icons/info-icon.svg" alt="">
                                                    </span>
                                                </figure>
                                                <article>AP</article>
                                            </div>
                                            <div class="cat-price-wrapper">
                                                <div class="cat-btn">SSR</div>
                                                <div class="cat-price">₹6,400</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-right">
                                        <button class="apply-button apply-slash-button">Apply Slash</button>
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom tooltip-link">
                                                <select name="" id="">
                                                    <option value="">Manual Rooming</option>
                                                </select>
                                                <span class="hovercard">
                                                    <div class="tooltiptext">
                                                        <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                        <p class="tooltip-para">Switch disabled as child policies of
                                                            rooms mismatch.</p>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="view-delete-icons">
                                            <button class="view-btn" data-toggle="modal"
                                                data-target="#roomingPlanModal"><img
                                                    src="images/user-icons/view-btn-icon.svg" alt=""></button>
                                            <button class="delete-btn"><img src="images/user-icons/delete-icon.svg"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    <div class="user-header-box">
                        <div class="user-header-box-left">
                            <h3 class="place-title">Munnar</h3>
                            <div class="room-stay-details">Selected: 1/10</div>
                            <div class="room-stay-details">Selected: 1/10</div>
                            <div class="calendar-icon">
                                <img src="images/user-icons/calender.svg" alt="">
                                <span class="calendar-noti">1</span>
                            </div>
                        </div>
                        <div class="user-header-box-right">
                            <div class="up-arrow">
                                <img src="images/user-icons/up-arrow.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">

                    <div class="room-single-content">
                        <div class="search-result-card">
                            <div class="search-result-left">
                                <div class="card-details">
                                    <div class="resort-details-area">
                                        <figure>
                                            <img src="images/search-popup/hotel-img.png" alt="">
                                        </figure>
                                        <article>
                                            <div class="card-heading-row">
                                                <h4 class="card-heading">Parakkat Nature Hotels & Resort</h4>
                                                <div class="hotel-rating-text-wrapper">
                                                    <span class="hotel-rating-text">Luxury</span>
                                                </div>
                                                <div class="block-ssr-booking-btns">
                                                    <div class="block-ssr-booking-btn">Block</div>
                                                    <div class="block-ssr-booking-btn active">SSR <br>
                                                        <span class="btn-status">Accepted</span>
                                                    </div>
                                                    <div class="block-ssr-booking-btn">Booking</div>
                                                </div>
                                            </div>
                                            <div class="resort-location">
                                                <span class="location-icon"><img src="images/location-icon.png"
                                                        alt=""></span>
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
                                                <div class="wishlist-man-icon">
                                                    <div class="wishlist-icon"><img
                                                            src="images/user-icons/wishlist-icon.svg" alt=""></div>
                                                    <div class="man-icon">
                                                        <img src="images/user-icons/man-icon.svg" alt="">
                                                        <span class="man-top-icon"><img
                                                                src="images/user-icons/check-icon.svg" alt=""></span>
                                                    </div>
                                                </div>
                                                <div class="phone-number-wrapper">
                                                    <div class="view-details">
                                                        <button class="view-details-btn" id="view-details-btn-02"
                                                            onclick="viewDetails(3)">View
                                                            Details</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <div class="search-result-right">
                                <div class="actions-wrapper">
                                    <span class="tooltip-link">
                                        <div class="dropdown show">
                                            <a class="action-btn dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Actions <img src="images/user-icons/actions-icon.svg" alt="">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Message</a>
                                                <a class="dropdown-item" href="#">Check availability</a>
                                                <a class="dropdown-item" href="#">SRR</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                                <a class="dropdown-item" href="#">Booking</a>
                                            </div>
                                        </div>
                                        <span class="hovercard hovercard-right">
                                            <div class="tooltiptext">
                                                <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                <p class="tooltip-para">Action disabled as child policies of rooms
                                                    mismatch.
                                                </p>
                                            </div>
                                        </span>
                                    </span>
                                </div>
                                <div class="total-amount-wrapper">
                                    <h3 class="total-amount">Total Amount: <span class="total-value">₹ 25,000,0</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="view-details-wrapper" id="matching-boxes-main-3">
                            <div class="view-details-single">
                                <div class="day-area-wrapper">
                                    <div class="day-content">Day 1 | 10 Aug 2022</div>
                                    <div class="icons-group-wrapper red-bordered-box">
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/man-icon.svg" alt=""
                                                style="width: 10px; margin:0 5px 0 0;"> 7
                                        </div>
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/women-icon.svg" alt=""
                                                style="width: 14px; margin:0 5px 0 0;"> 0
                                        </div>
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/child-icon.svg" alt=""
                                                style="width: 14px; margin:0 5px 0 0;"> 0
                                        </div>
                                    </div>
                                    <div class="edit-question-icon" data-toggle="modal" data-target="#editModal">
                                        <img src="images/user-icons/edit-icon.svg" style="width:28px;" alt="">
                                    </div>
                                </div>
                                <div class="room-row-single">
                                    <div class="room-left">
                                        <div class="room-name">Crown Luxury</div>
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
                                    </div>
                                    <div class="room-center">
                                        <div class="meals-price-wrapper">
                                            <div class="meals-area">
                                                <figure>
                                                    <img src="images/search-popup/food-icon.svg" alt="">
                                                </figure>
                                                <article>AP</article>
                                            </div>
                                            <div class="cat-price-wrapper">
                                                <div class="cat-btn">SSR</div>
                                                <div class="cat-price">₹6,100</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-right">
                                        <button class="apply-button apply-hike-button">Apply Hike</button>
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom tooltip-link">
                                                <select name="" id="">
                                                    <option value="">Auto Rooming</option>
                                                </select>
                                                <span class="hovercard">
                                                    <div class="tooltiptext">
                                                        <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                        <p class="tooltip-para">Switch disabled as child policies of
                                                            rooms mismatch.</p>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="view-delete-icons">
                                            <button class="view-btn" data-toggle="modal"
                                                data-target="#roomingPlanModal"><img
                                                    src="images/user-icons/view-btn-icon.svg" alt=""></button>
                                            <button class="delete-btn"><img src="images/user-icons/delete-icon.svg"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-row-single">
                                    <div class="room-left">
                                        <div class="room-name">Crown Deluxe</div>
                                        <div class="icons-group-wrapper">
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/man-icon.svg" alt=""
                                                    style="width: 10px; margin:0 5px 0 0;"> 2
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
                                    <div class="room-center">
                                        <div class="meals-price-wrapper">
                                            <div class="meals-area">
                                                <figure>
                                                    <img src="images/search-popup/food-icon.svg" alt="">
                                                    <span class="info-icon">
                                                        <img src="images/user-icons/info-icon.svg" alt="">
                                                    </span>
                                                </figure>
                                                <article>AP</article>
                                            </div>
                                            <div class="cat-price-wrapper">
                                                <div class="cat-btn">SSR</div>
                                                <div class="cat-price">₹6,400</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-right">
                                        <button class="apply-button apply-slash-button">Apply Slash</button>
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom tooltip-link">
                                                <select name="" id="">
                                                    <option value="">Manual Rooming</option>
                                                </select>
                                                <span class="hovercard">
                                                    <div class="tooltiptext">
                                                        <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                        <p class="tooltip-para">Switch disabled as child policies of
                                                            rooms mismatch.</p>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="view-delete-icons">
                                            <button class="view-btn" data-toggle="modal"
                                                data-target="#roomingPlanModal"><img
                                                    src="images/user-icons/view-btn-icon.svg" alt=""></button>
                                            <button class="delete-btn"><img src="images/user-icons/delete-icon.svg"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-details-single">
                                <div class="day-area-wrapper">
                                    <div class="day-content">Day 1 | 10 Aug 2022</div>
                                    <div class="icons-group-wrapper red-box">
                                        Child Policy Mismatch
                                    </div>
                                    <div class="edit-question-icon">
                                        <img src="images/user-icons/question-icon.svg" style="width:28px;" alt="">
                                    </div>
                                </div>
                                <div class="room-row-single">
                                    <div class="room-left">
                                        <div class="room-name">Crown Luxury</div>
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
                                    </div>
                                    <div class="room-center">
                                        <div class="meals-price-wrapper">
                                            <div class="meals-area">
                                                <figure>
                                                    <img src="images/search-popup/food-icon.svg" alt="">
                                                </figure>
                                                <article>AP</article>
                                            </div>
                                            <div class="cat-price-wrapper">
                                                <div class="cat-btn">SSR</div>
                                                <div class="cat-price">₹6,100</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-right">
                                        <button class="apply-button apply-hike-button">Apply Hike</button>
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom tooltip-link">
                                                <select name="" id="">
                                                    <option value="">Auto Rooming</option>
                                                </select>
                                                <span class="hovercard">
                                                    <div class="tooltiptext">
                                                        <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                        <p class="tooltip-para">Switch disabled as child policies of
                                                            rooms mismatch.</p>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="view-delete-icons">
                                            <button class="view-btn" data-toggle="modal"
                                                data-target="#roomingPlanModal"><img
                                                    src="images/user-icons/view-btn-icon.svg" alt=""></button>
                                            <button class="delete-btn"><img src="images/user-icons/delete-icon.svg"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-row-single">
                                    <div class="room-left">
                                        <div class="room-name">Crown Deluxe</div>
                                        <div class="icons-group-wrapper">
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/man-icon.svg" alt=""
                                                    style="width: 10px; margin:0 5px 0 0;"> 2
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
                                    <div class="room-center">
                                        <div class="meals-price-wrapper">
                                            <div class="meals-area">
                                                <figure>
                                                    <img src="images/search-popup/food-icon.svg" alt="">
                                                    <span class="info-icon">
                                                        <img src="images/user-icons/info-icon.svg" alt="">
                                                    </span>
                                                </figure>
                                                <article>AP</article>
                                            </div>
                                            <div class="cat-price-wrapper">
                                                <div class="cat-btn">SSR</div>
                                                <div class="cat-price">₹6,400</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-right">
                                        <button class="apply-button apply-slash-button">Apply Slash</button>
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom tooltip-link">
                                                <select name="" id="">
                                                    <option value="">Manual Rooming</option>
                                                </select>
                                                <span class="hovercard">
                                                    <div class="tooltiptext">
                                                        <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                        <p class="tooltip-para">Switch disabled as child policies of
                                                            rooms mismatch.</p>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="view-delete-icons">
                                            <button class="view-btn" data-toggle="modal"
                                                data-target="#roomingPlanModal"><img
                                                    src="images/user-icons/view-btn-icon.svg" alt=""></button>
                                            <button class="delete-btn"><img src="images/user-icons/delete-icon.svg"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room-single-content">
                        <div class="search-result-card">
                            <div class="search-result-left">
                                <div class="card-details">
                                    <div class="resort-details-area">
                                        <figure>
                                            <img src="images/search-popup/hotel-img.png" alt="">
                                        </figure>
                                        <article>
                                            <div class="card-heading-row">
                                                <h4 class="card-heading">Parakkat Nature Hotels & Resort</h4>
                                                <div class="hotel-rating-text-wrapper">
                                                    <span class="hotel-rating-text">Luxury</span>
                                                </div>
                                                <div class="block-ssr-booking-btns">
                                                    <div class="block-ssr-booking-btn">Block</div>
                                                    <div class="block-ssr-booking-btn active">SSR <br>
                                                        <span class="btn-status">Accepted</span>
                                                    </div>
                                                    <div class="block-ssr-booking-btn">Booking</div>
                                                </div>
                                            </div>
                                            <div class="resort-location">
                                                <span class="location-icon"><img src="images/location-icon.png"
                                                        alt=""></span>
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
                                                <div class="wishlist-man-icon">
                                                    <div class="wishlist-icon"><img
                                                            src="images/user-icons/wishlist-icon.svg" alt=""></div>
                                                    <div class="man-icon">
                                                        <img src="images/user-icons/man-icon.svg" alt="">
                                                        <span class="man-top-icon"><img
                                                                src="images/user-icons/check-icon.svg" alt=""></span>
                                                    </div>
                                                </div>
                                                <div class="phone-number-wrapper">
                                                    <div class="view-details">
                                                        <button class="view-details-btn" id="view-details-btn-02"
                                                            onclick="viewDetails(3)">View
                                                            Details</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <div class="search-result-right">
                                <div class="actions-wrapper">
                                    <span class="tooltip-link">
                                        <div class="dropdown show">
                                            <a class="action-btn dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Actions <img src="images/user-icons/actions-icon.svg" alt="">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Message</a>
                                                <a class="dropdown-item" href="#">Check availability</a>
                                                <a class="dropdown-item" href="#">SRR</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                                <a class="dropdown-item" href="#">Booking</a>
                                            </div>
                                        </div>
                                        <span class="hovercard hovercard-right">
                                            <div class="tooltiptext">
                                                <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                <p class="tooltip-para">Action disabled as child policies of rooms
                                                    mismatch.
                                                </p>
                                            </div>
                                        </span>
                                    </span>
                                </div>
                                <div class="total-amount-wrapper">
                                    <h3 class="total-amount">Total Amount: <span class="total-value">₹ 25,000,0</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="view-details-wrapper" id="matching-boxes-main-3">
                            <div class="view-details-single">
                                <div class="day-area-wrapper">
                                    <div class="day-content">Day 1 | 10 Aug 2022</div>
                                    <div class="icons-group-wrapper red-bordered-box">
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/man-icon.svg" alt=""
                                                style="width: 10px; margin:0 5px 0 0;"> 7
                                        </div>
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/women-icon.svg" alt=""
                                                style="width: 14px; margin:0 5px 0 0;"> 0
                                        </div>
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/child-icon.svg" alt=""
                                                style="width: 14px; margin:0 5px 0 0;"> 0
                                        </div>
                                    </div>
                                    <div class="edit-question-icon" data-toggle="modal" data-target="#editModal">
                                        <img src="images/user-icons/edit-icon.svg" style="width:28px;" alt="">
                                    </div>
                                </div>
                                <div class="room-row-single">
                                    <div class="room-left">
                                        <div class="room-name">Crown Luxury</div>
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
                                    </div>
                                    <div class="room-center">
                                        <div class="meals-price-wrapper">
                                            <div class="meals-area">
                                                <figure>
                                                    <img src="images/search-popup/food-icon.svg" alt="">
                                                </figure>
                                                <article>AP</article>
                                            </div>
                                            <div class="cat-price-wrapper">
                                                <div class="cat-btn">SSR</div>
                                                <div class="cat-price">₹6,100</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-right">
                                        <button class="apply-button apply-hike-button">Apply Hike</button>
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom tooltip-link">
                                                <select name="" id="">
                                                    <option value="">Auto Rooming</option>
                                                </select>
                                                <span class="hovercard">
                                                    <div class="tooltiptext">
                                                        <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                        <p class="tooltip-para">Switch disabled as child policies of
                                                            rooms mismatch.</p>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="view-delete-icons">
                                            <button class="view-btn" data-toggle="modal"
                                                data-target="#roomingPlanModal"><img
                                                    src="images/user-icons/view-btn-icon.svg" alt=""></button>
                                            <button class="delete-btn"><img src="images/user-icons/delete-icon.svg"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-row-single">
                                    <div class="room-left">
                                        <div class="room-name">Crown Deluxe</div>
                                        <div class="icons-group-wrapper">
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/man-icon.svg" alt=""
                                                    style="width: 10px; margin:0 5px 0 0;"> 2
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
                                    <div class="room-center">
                                        <div class="meals-price-wrapper">
                                            <div class="meals-area">
                                                <figure>
                                                    <img src="images/search-popup/food-icon.svg" alt="">
                                                    <span class="info-icon">
                                                        <img src="images/user-icons/info-icon.svg" alt="">
                                                    </span>
                                                </figure>
                                                <article>AP</article>
                                            </div>
                                            <div class="cat-price-wrapper">
                                                <div class="cat-btn">SSR</div>
                                                <div class="cat-price">₹6,400</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-right">
                                        <button class="apply-button apply-slash-button">Apply Slash</button>
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom tooltip-link">
                                                <select name="" id="">
                                                    <option value="">Manual Rooming</option>
                                                </select>
                                                <span class="hovercard">
                                                    <div class="tooltiptext">
                                                        <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                        <p class="tooltip-para">Switch disabled as child policies of
                                                            rooms mismatch.</p>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="view-delete-icons">
                                            <button class="view-btn" data-toggle="modal"
                                                data-target="#roomingPlanModal"><img
                                                    src="images/user-icons/view-btn-icon.svg" alt=""></button>
                                            <button class="delete-btn"><img src="images/user-icons/delete-icon.svg"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-details-single">
                                <div class="day-area-wrapper">
                                    <div class="day-content">Day 1 | 10 Aug 2022</div>
                                    <div class="icons-group-wrapper red-box">
                                        <div class="tooltip-wrapper">
                                            <div class="tooltip-link">
                                                <span>Child Policy Mismatch</span>
                                                <span class="hovercard">
                                                    <div class="tooltiptext">
                                                        <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                        <p class="tooltip-para">Crumb Collector is a
                                                            minimal and
                                                            easy to use
                                                            bookmark manager.</p>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="edit-question-icon">
                                        <img src="images/user-icons/question-icon.svg" style="width:28px;" alt="">
                                    </div>
                                </div>
                                <div class="room-row-single">
                                    <div class="room-left">
                                        <div class="room-name">Crown Luxury</div>
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
                                    </div>
                                    <div class="room-center">
                                        <div class="meals-price-wrapper">
                                            <div class="meals-area">
                                                <figure>
                                                    <img src="images/search-popup/food-icon.svg" alt="">
                                                </figure>
                                                <article>AP</article>
                                            </div>
                                            <div class="cat-price-wrapper">
                                                <div class="cat-btn">SSR</div>
                                                <div class="cat-price">₹6,100</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-right">
                                        <button class="apply-button apply-hike-button">Apply Hike</button>
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom tooltip-link">
                                                <select name="" id="">
                                                    <option value="">Auto Rooming</option>
                                                </select>
                                                <span class="hovercard">
                                                    <div class="tooltiptext">
                                                        <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                        <p class="tooltip-para">Switch disabled as child policies of
                                                            rooms mismatch.</p>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="view-delete-icons">
                                            <button class="view-btn" data-toggle="modal"
                                                data-target="#roomingPlanModal"><img
                                                    src="images/user-icons/view-btn-icon.svg" alt=""></button>
                                            <button class="delete-btn"><img src="images/user-icons/delete-icon.svg"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-row-single">
                                    <div class="room-left">
                                        <div class="room-name">Crown Deluxe</div>
                                        <div class="icons-group-wrapper">
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/man-icon.svg" alt=""
                                                    style="width: 10px; margin:0 5px 0 0;"> 2
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
                                    <div class="room-center">
                                        <div class="meals-price-wrapper">
                                            <div class="meals-area">
                                                <figure>
                                                    <img src="images/search-popup/food-icon.svg" alt="">
                                                    <span class="info-icon">
                                                        <img src="images/user-icons/info-icon.svg" alt="">
                                                    </span>
                                                </figure>
                                                <article>AP</article>
                                            </div>
                                            <div class="cat-price-wrapper">
                                                <div class="cat-btn">SSR</div>
                                                <div class="cat-price">₹6,400</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-right">
                                        <button class="apply-button apply-slash-button">Apply Slash</button>
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom tooltip-link">
                                                <select name="" id="">
                                                    <option value="">Manual Rooming</option>
                                                </select>
                                                <span class="hovercard">
                                                    <div class="tooltiptext">
                                                        <!-- <h4 class="tooltip-head">Heading</h4> -->
                                                        <p class="tooltip-para">Switch disabled as child policies of
                                                            rooms mismatch.</p>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="view-delete-icons">
                                            <button class="view-btn" data-toggle="modal"
                                                data-target="#roomingPlanModal"><img
                                                    src="images/user-icons/view-btn-icon.svg" alt=""></button>
                                            <button class="delete-btn"><img src="images/user-icons/delete-icon.svg"
                                                    alt=""></button>
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
<!-- BOF Table Modal -->
<div class="modal fade" id="tableModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
<!-- EOF Table Modal -->
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
<!-- BOF Assigned Property Status Modal -->
<div class="modal fade large-modal" id="AssignedPropertyStatusModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog search-popup-wrapper assigned-property-status-wrapper" role="document">
        <div class="modal-content">
            <div class="modal-header modal-header-with-table">
                <div class="assigned-property-status-wrapper">
                    <table class="enquiry-strip-table">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="enquiry-details-td">
                                        <div class="head">Enq No</div>
                                        <div class="value">1232/2022</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="enquiry-details-td">
                                        <div class="head">Guest Name</div>
                                        <div class="value">Jayesh Sathyamoorthy</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="enquiry-details-td">
                                        <div class="head">Arrival Date</div>
                                        <div class="value">13/02/2023</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="enquiry-details-td">
                                        <div class="head">Departure Date</div>
                                        <div class="value">18/02/2023</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="enquiry-details-td">
                                        <div class="head">Duration</div>
                                        <div class="value">6 Days</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="enquiry-details-td">
                                        <div class="head">No. of Destinations</div>
                                        <div class="value">5 Destinations</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="images/search-popup/close-btn.svg" alt="">
                </button>
            </div>
            <div class="modal-body">
                <div class="assigned-property-status-table-wrapper">
                    <table class="assigned-property-status-table">
                        <thead>
                            <tr>
                                <th>Munnar Property (5/10)</th>
                                <th>SRR</th>
                                <th>BLOCK</th>
                                <th>BKG</th>
                                <th>Mar 23</th>
                                <th>Mar 24</th>
                                <th>Mar 25</th>
                                <th>Mar 26</th>
                                <th>Mar 27</th>
                                <th>Mar 28</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Munnar Queen 3 Star</td>
                                <td>Pending</td>
                                <td>&nbsp;</td>
                                <td>Pending</td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                                <td><strong>NA</strong></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                            </tr>
                            <tr>
                                <td>Fog Resort 3 Star</td>
                                <td>&nbsp;</td>
                                <td>Confrmed</td>
                                <td>&nbsp;</td>
                                <td><img src="images/close.png" style="width: 10px" alt=""></td>
                                <td><img src="images/close.png" style="width: 10px" alt=""></td>
                                <td><strong>NA</strong></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                            </tr>
                            <tr>
                                <td>Elixir Hills & Resorts & Spa 3 Star</td>
                                <td>Confrmed</td>
                                <td>&nbsp;</td>
                                <td>Confrmed</td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                                <td><strong>NA</strong></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                            </tr>
                            <tr>
                                <td>The Rivulet 3 Star </td>
                                <td>&nbsp;</td>
                                <td>Rejected</td>
                                <td>&nbsp;</td>
                                <td><img src="images/close.png" style="width: 10px" alt=""></td>
                                <td><img src="images/close.png" style="width: 10px" alt=""></td>
                                <td><strong>NA</strong></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                            </tr>
                            <tr>
                                <td>Black Forest 3 Star</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                                <td><strong>NA</strong></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="assigned-property-status-table">
                        <thead>
                            <tr>
                                <th>Thekkady Property (3/10)</th>
                                <th>SRR</th>
                                <th>BLOCK</th>
                                <th>BKG</th>
                                <th>Mar 29</th>
                                <th>Mar 30</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Grand Thekkady 3 Star</td>
                                <td>Pending</td>
                                <td>&nbsp;</td>
                                <td>Pending</td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                            </tr>
                            <tr>
                                <td>Forest Canopy 3 Star </td>
                                <td>&nbsp;</td>
                                <td>Confrmed</td>
                                <td>&nbsp;</td>
                                <td><img src="images/close.png" style="width: 10px" alt=""></td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                            </tr>
                            <tr>
                                <td>Periyar Meadows 3 Star</td>
                                <td>Confrmed</td>
                                <td>&nbsp;</td>
                                <td>Confrmed</td>
                                <td><img src="images/check-success.png" style="width: 12px" alt=""></td>
                                <td><img src="images/close.png" style="width: 12px" alt=""></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BOF Assigned Property Status Modal -->




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

        if (tooltipSpace.top > tooltipBox.height && tooltipBox.left > 0 && tooltipRight < window
            .innerWidth) {
            tooltipContent.classList.add('top')
        } else if (tooltipSpace.bottom > tooltipBox.height && tooltipBox.left > 0 && tooltipRight <
            window
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

// $(window).on('load', function() {
//     $('#AssignedPropertyStatusModal').modal('show');
// });
</script>