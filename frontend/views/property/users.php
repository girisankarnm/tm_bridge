<?php
frontend\assets\AppAsset::register($this);
$this->registerCssFile('/css/ppe/style.css');
$this->registerCssFile('/css/datepicker.css');
$this->registerCssFile('/css/users/user-styles.css');
$this->registerCssFile('/css/custom-style.css');
?>
<div class="wrapper">
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
                                                <div class="star-wrapper">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                </div>
                                                <div class="block-ssr-booking-btns">
                                                    <button class="btn">Block</button>
                                                    <button class="btn active">SSR <br> <span
                                                            class="btn-status">Accepted</span></button>
                                                    <button class="btn">Booking</button>
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
                                    <button class="action-btn">Actions <img src="images/user-icons/actions-icon.svg"
                                            alt=""></button>
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
                                            <img src="images/user-icons/man-icon.svg" alt="" style="width: 14px"> 7
                                        </div>
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/women-icon.svg" alt="" style="width: 19px"> 0
                                        </div>
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/child-icon.svg" alt="" style="width: 20px"> 0
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
                                                <img src="images/user-icons/women-icon.svg" alt="" style="width: 19px">
                                                0
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/child-icon.svg" alt="" style="width: 20px">
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
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom">
                                                <select name="" id="">
                                                    <option value="">Auto Rooming</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="apply-button apply-hike-button">Apply Hike</button>
                                        <div class="view-delete-icons">
                                            <button class="view-btn"><img src="images/user-icons/view-btn-icon.svg"
                                                    alt=""></button>
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
                                                <img src="images/user-icons/man-icon.svg" alt="" style="width: 14px"> 2
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/women-icon.svg" alt="" style="width: 19px">
                                                0
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/child-icon.svg" alt="" style="width: 20px">
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
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom">
                                                <select name="" id="">
                                                    <option value="">Manual Rooming</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="apply-button apply-slash-button">Apply Slash</button>
                                        <div class="view-delete-icons">
                                            <button class="view-btn"><img src="images/user-icons/view-btn-icon.svg"
                                                    alt=""></button>
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
                                                <img src="images/user-icons/man-icon.svg" alt="" style="width: 14px"> 7
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/women-icon.svg" alt="" style="width: 19px">
                                                0
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/child-icon.svg" alt="" style="width: 20px">
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
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom">
                                                <select name="" id="">
                                                    <option value="">Auto Rooming</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="apply-button apply-hike-button">Apply Hike</button>
                                        <div class="view-delete-icons">
                                            <button class="view-btn"><img src="images/user-icons/view-btn-icon.svg"
                                                    alt=""></button>
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
                                                <img src="images/user-icons/man-icon.svg" alt="" style="width: 14px"> 2
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/women-icon.svg" alt="" style="width: 19px">
                                                0
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/child-icon.svg" alt="" style="width: 20px">
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
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom">
                                                <select name="" id="">
                                                    <option value="">Manual Rooming</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="apply-button apply-slash-button">Apply Slash</button>
                                        <div class="view-delete-icons">
                                            <button class="view-btn"><img src="images/user-icons/view-btn-icon.svg"
                                                    alt=""></button>
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
                                                <div class="star-wrapper">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                </div>
                                                <div class="block-ssr-booking-btns">
                                                    <button class="btn">Block</button>
                                                    <button class="btn active">SSR <br> <span
                                                            class="btn-status">Accepted</span></button>
                                                    <button class="btn">Booking</button>
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
                                    <button class="action-btn">Actions <img src="images/user-icons/actions-icon.svg"
                                            alt=""></button>
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
                                            <img src="images/user-icons/man-icon.svg" alt="" style="width: 14px"> 7
                                        </div>
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/women-icon.svg" alt="" style="width: 19px"> 0
                                        </div>
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/child-icon.svg" alt="" style="width: 20px"> 0
                                        </div>
                                    </div>
                                    <div class="edit-question-icon">
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
                                                <img src="images/user-icons/women-icon.svg" alt="" style="width: 19px">
                                                0
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/child-icon.svg" alt="" style="width: 20px">
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
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom">
                                                <select name="" id="">
                                                    <option value="">Auto Rooming</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="apply-button apply-hike-button">Apply Hike</button>
                                        <div class="view-delete-icons">
                                            <button class="view-btn"><img src="images/user-icons/view-btn-icon.svg"
                                                    alt=""></button>
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
                                                <img src="images/user-icons/man-icon.svg" alt="" style="width: 14px"> 2
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/women-icon.svg" alt="" style="width: 19px">
                                                0
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/child-icon.svg" alt="" style="width: 20px">
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
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom">
                                                <select name="" id="">
                                                    <option value="">Manual Rooming</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="apply-button apply-slash-button">Apply Slash</button>
                                        <div class="view-delete-icons">
                                            <button class="view-btn"><img src="images/user-icons/view-btn-icon.svg"
                                                    alt=""></button>
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
                                                <img src="images/user-icons/man-icon.svg" alt="" style="width: 14px"> 7
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/women-icon.svg" alt="" style="width: 19px">
                                                0
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/child-icon.svg" alt="" style="width: 20px">
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
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom">
                                                <select name="" id="">
                                                    <option value="">Auto Rooming</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="apply-button apply-hike-button">Apply Hike</button>
                                        <div class="view-delete-icons">
                                            <button class="view-btn"><img src="images/user-icons/view-btn-icon.svg"
                                                    alt=""></button>
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
                                                <img src="images/user-icons/man-icon.svg" alt="" style="width: 14px"> 2
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/women-icon.svg" alt="" style="width: 19px">
                                                0
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/child-icon.svg" alt="" style="width: 20px">
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
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom">
                                                <select name="" id="">
                                                    <option value="">Manual Rooming</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="apply-button apply-slash-button">Apply Slash</button>
                                        <div class="view-delete-icons">
                                            <button class="view-btn"><img src="images/user-icons/view-btn-icon.svg"
                                                    alt=""></button>
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
                                                <div class="star-wrapper">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                    <img src="images/search-popup/star-icon.svg" alt="">
                                                </div>
                                                <div class="block-ssr-booking-btns">
                                                    <button class="btn">Block</button>
                                                    <button class="btn active">SSR <br> <span
                                                            class="btn-status">Accepted</span></button>
                                                    <button class="btn">Booking</button>
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
                                    <button class="action-btn">Actions <img src="images/user-icons/actions-icon.svg"
                                            alt=""></button>
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
                                            <img src="images/user-icons/man-icon.svg" alt="" style="width: 14px"> 7
                                        </div>
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/women-icon.svg" alt="" style="width: 19px"> 0
                                        </div>
                                        <div class="icon-content-single">
                                            <img src="images/user-icons/child-icon.svg" alt="" style="width: 20px"> 0
                                        </div>
                                    </div>
                                    <div class="edit-question-icon">
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
                                                <img src="images/user-icons/women-icon.svg" alt="" style="width: 19px">
                                                0
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/child-icon.svg" alt="" style="width: 20px">
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
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom">
                                                <select name="" id="">
                                                    <option value="">Auto Rooming</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="apply-button apply-hike-button">Apply Hike</button>
                                        <div class="view-delete-icons">
                                            <button class="view-btn"><img src="images/user-icons/view-btn-icon.svg"
                                                    alt=""></button>
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
                                                <img src="images/user-icons/man-icon.svg" alt="" style="width: 14px"> 2
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/women-icon.svg" alt="" style="width: 19px">
                                                0
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/child-icon.svg" alt="" style="width: 20px">
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
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom">
                                                <select name="" id="">
                                                    <option value="">Manual Rooming</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="apply-button apply-slash-button">Apply Slash</button>
                                        <div class="view-delete-icons">
                                            <button class="view-btn"><img src="images/user-icons/view-btn-icon.svg"
                                                    alt=""></button>
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
                                                <img src="images/user-icons/man-icon.svg" alt="" style="width: 14px"> 7
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/women-icon.svg" alt="" style="width: 19px">
                                                0
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/child-icon.svg" alt="" style="width: 20px">
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
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom">
                                                <select name="" id="">
                                                    <option value="">Auto Rooming</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="apply-button apply-hike-button">Apply Hike</button>
                                        <div class="view-delete-icons">
                                            <button class="view-btn"><img src="images/user-icons/view-btn-icon.svg"
                                                    alt=""></button>
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
                                                <img src="images/user-icons/man-icon.svg" alt="" style="width: 14px"> 2
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/women-icon.svg" alt="" style="width: 19px">
                                                0
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/child-icon.svg" alt="" style="width: 20px">
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
                                        <div class="dropdown-wrapper">
                                            <div class="select-custom">
                                                <select name="" id="">
                                                    <option value="">Manual Rooming</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="apply-button apply-slash-button">Apply Slash</button>
                                        <div class="view-delete-icons">
                                            <button class="view-btn"><img src="images/user-icons/view-btn-icon.svg"
                                                    alt=""></button>
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
                                        <img src="images/user-icons/man-icon.svg" alt="" style="width: 14px"> 7
                                    </div>
                                    <div class="icon-content-single">
                                        <img src="images/user-icons/women-icon.svg" alt="" style="width: 19px">
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
                                        <th></th style="width:55%">
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
                                                <span class="man-top-icon"><img src="images/user-icons/check-icon.svg"
                                                        alt=""></span>
                                            </div>
                                        </th>
                                        <th style="width:15%">
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
                                        <td style="text-align: left;">
                                            <div class="td-box">Pax Count as per property's Child & Infant Policy</div>
                                        </td>
                                        <td>
                                            <div class="td-box">7</div>
                                        </td>
                                        <td>
                                            <div class="td-box">0</div>
                                        </td>
                                        <td>
                                            <div class="td-box">0</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;">
                                            <div class="td-box">Crown Luxury</div>
                                        </td>
                                        <td>
                                            <div class="td-box">7</div>
                                        </td>
                                        <td>
                                            <div class="td-box">0</div>
                                        </td>
                                        <td>
                                            <div class="td-box">0</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;">
                                            <div class="td-box">Allocated Pax</div>
                                        </td>
                                        <td>
                                            <div class="td-box">7</div>
                                        </td>
                                        <td>
                                            <div class="td-box">0</div>
                                        </td>
                                        <td>
                                            <div class="td-box">0</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="popup-bottom">
                        <div class="two-btn-center">
                            <button class="btn grey-btn">Cancel</button>
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
    <div class="modal-dialog modal-dialog-centered medium-modal-wrapper" role="document">
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
                                <div class="enquiry-box-value">Enquiry No</div>
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
                                                <img src="images/user-icons/child-icon.svg" alt="" style="width: 25px">
                                                1-9 YR
                                            </div>
                                            <div class="icon-content-single">
                                                <img src="images/user-icons/women-icon.svg" alt="" style="width: 25px">
                                                10-15 YR
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                        <img src="images/user-icons/man-icon.svg" alt="" style="width: 14px"> 7
                                    </div>
                                    <div class="icon-content-single">
                                        <img src="images/user-icons/women-icon.svg" alt="" style="width: 19px">
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
                                        <th></th style="width:55%">
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
                                                <span class="man-top-icon"><img src="images/user-icons/check-icon.svg"
                                                        alt=""></span>
                                            </div>
                                        </th>
                                        <th style="width:15%">
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
                                        <td style="text-align: left;">
                                            <div class="td-box">Pax Count as per property's Child & Infant Policy</div>
                                        </td>
                                        <td>
                                            <div class="td-box">7</div>
                                        </td>
                                        <td>
                                            <div class="td-box">0</div>
                                        </td>
                                        <td>
                                            <div class="td-box">0</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;">
                                            <div class="td-box">Crown Luxury</div>
                                        </td>
                                        <td>
                                            <div class="td-box">7</div>
                                        </td>
                                        <td>
                                            <div class="td-box">0</div>
                                        </td>
                                        <td>
                                            <div class="td-box">0</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;">
                                            <div class="td-box">Allocated Pax</div>
                                        </td>
                                        <td>
                                            <div class="td-box">7</div>
                                        </td>
                                        <td>
                                            <div class="td-box">0</div>
                                        </td>
                                        <td>
                                            <div class="td-box">0</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="popup-bottom">
                        <div class="two-btn-center">
                            <button class="btn grey-btn">Cancel</button>
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

$(window).on('load', function() {
    $('#roomingPlanModal').modal('show');
});
</script>