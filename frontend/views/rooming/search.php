<?php

    /* @var $this yii\web\View */

    use yii\helpers\Html;
    frontend\assets\CommonAsset::register($this);
    frontend\assets\DatePickerAsset::register($this);
    $this->registerCssFile('/css/search.css');
    $this->registerJsFile('/js/search/index.js');
    $this->title = 'Search History';
?>

<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

<div class="search-container">
    <div class="search-header mb-3">
        <a href="#" class="text-link mb-2">
            <strong>  Enquiry Details </strong>
        </a>
        <div class="row search-header-filters justify-content-between align-items-center m-0">
            <div class="col-md-1 filter-main mb-2">
                <label for="enq"> ENQ </label>
                <p> 1234 </p>
            </div>
            <div class="col-md-3 filter-main mb-2">
                <label for="name"> Guest Name </label>
                <!-- <input type="text" name="name" id="name" class="form-control"> -->
                <p>John Doe </p>
            </div>
            <div class="col-md-2 filter-main mb-2">
                <label for="checkIn"> Check-In </label>
                <!-- <input type="text" name="checkIn" id="checkIn" class="form-control datepicker" readOnly> -->
                <p> Wed, 2 Mar 2022 </p>
            </div>
            <div class="col-md-2 filter-main mb-2">
                <label for="checkOut"> Check-Out </label>
                <!-- <input type="text" name="checkOut" id="checkOut" class="form-control datepicker" readOnly> -->
                <p> Wed, 3 Mar 2022 </p>
            </div>
            <div class="col-md-3 filter-main mb-2">
                <label for="duration"> Stay Duration </label>
                <!-- <select name="duration" id="duration" class="select2 form-control browser-default">
                    <option value=""> 3 Nights (split stay) </option>
                </select> -->
                <p> 3 Nights (split stay) </p>
            </div>
        </div>
    </div>
    <div class="row search-content align-items-start">
        <div class="col-md-3 search-filter">
            <div class="filter-group">
                <div class="filter-input mb-2">
                    <select name="destination" id="destination" class="select2 browser-default form-control" data-placeholder="Search Destination">
                        <option value=""></option>
                        <option value="calicut"> Calicut </option>
                    </select>
                </div>
            </div>

            <div class="filter-group">
                <button class="btn btn-filter text-white" type="submit"> Search </button>
            </div>

            <div class="divider"></div>

            <div class="filter-group">
                <label for="property_type"> Property Type </label>
                <div class="filter-input">
                    <select name="property_type" id="property_type" class="select2 browser-default form-control" data-placeholder="Search Property Type">
                        <option value=""></option>
                        <option value="calicut"> Calicut </option>
                    </select>
                </div>
            </div>

            <div class="filter-group">
                <label for="property_rating"> Property Rating </label>
                <div class="filter-input">
                    <select name="property_rating" id="property_rating" class="select2 browser-default form-control" data-placeholder="Search Property Rating">
                        <option value=""></option>
                        <option value="calicut"> Calicut </option>
                    </select>
                </div>
            </div>

            <div class="filter-group">
                <label for="room_type"> Room Type </label>
                <div class="filter-input">
                    <select name="room_type" id="room_type" class="select2 browser-default form-control" data-placeholder="Search Room Type">
                        <option value=""></option>
                        <option value="calicut"> Calicut </option>
                    </select>
                </div>
            </div>

            <div class="filter-group">
                <label for="room_view"> Room View </label>
                <div class="filter-input">
                    <select name="room_view" id="room_view" class="select2 browser-default form-control" data-placeholder="Search Room View">
                        <option value=""></option>
                        <option value="calicut"> Calicut </option>
                    </select>
                </div>
            </div>

            <div class="filter-group">
                <label for="food_type"> Food Type </label>
                <div class="filter-input">
                    <select name="food_type" id="food_type" class="select2 browser-default form-control" data-placeholder="Search Food Type">
                        <option value=""></option>
                        <option value="calicut"> Calicut </option>
                    </select>
                </div>
            </div>

            <div class="filter-group">
                <label for="Occupancy"> Occupancy ( Adult/Room ) </label>
                <div class="filter-input">
                    <!-- <select name="Occupancy" id="Occupancy" class="select2 browser-default form-control" data-placeholder="Search Occupancy">
                        <option value=""></option>
                        <option value="calicut"> Calicut </option>
                    </select> -->
                    <input type="text" name="occupancy" id="occupancy" class="form-control">
                </div>
            </div>

            <div class="filter-group">
                <div class="filter-accordion accordion" id="accordionExample">
                    <?php foreach(range(0, 1) as $index => $item): ?>
                        <div class="card">
                            <div class="card-header" id="heading-<?= $index ?>">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-<?= $index ?>" aria-expanded="true" aria-controls="collapse-<?= $index ?>">
                                        Property Amenities
                                        <div class="float-right">
                                            <i class="fas fa-angle-down rotate-icon"></i>
                                        </div>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse-<?= $index ?>" class="collapse show" aria-labelledby="heading-<?= $index ?>">
                                <div class="card-body">
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input id="swimming-pool" type="checkbox" class="custom-control-input"/>
                                        <label class="custom-control-label ml-1" for="swimming-pool"> Swimming pool </label>
                                    </div>

                                    <div class="custom-control custom-checkbox mb-2">
                                        <input id="restaurant" type="checkbox" class="custom-control-input"/>
                                        <label class="custom-control-label ml-1" for="restaurant"> Restaurant </label>
                                    </div>

                                    <div class="custom-control custom-checkbox mb-2">
                                        <input id="bar" type="checkbox" class="custom-control-input"/>
                                        <label class="custom-control-label ml-1" for="bar"> Bar </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="col-md-9 search-main">
            <h5 class="ml-1"> Property </h5>
            <div class="search-main-header mb-3">
                <div class="dropdown" onclick="$('#searchModal').modal('show');">
                    <a href="#" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="row search-periods dropdown-toggle align-items-center mb-2">
                            <div class="col-md-1 text-center">
                                <div class="calendar-icon">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/calendar.svg' ?>" alt="" class="img-fluid">
                                </div>
                            </div>

                            <div class="row col-md-10 align-items-center">
                                <?php foreach(range(1, 10) as $index => $item): ?>
                                <div class="d-flex col-md-2 date-range justify-content-between text-center">
                                    <p>
                                    <strong> 11 Mar 2022 <?php echo ($index !== 9) ? ',' : false;  ?> </strong>
                                    </p>
                                </div>

                                <?php endforeach; ?>
                            </div>

                            <div class="col-md-1 text-right">
                                <div class="period-arrow">
                                    <!-- <img src="<?= Yii::$app->request->baseUrl . 'images/arrow-down.svg' ?>" alt="" class="img-fluid"> -->
                                    <i class="fas fa-pen"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="row justify-content-between align-items-center">
                    <div class="row col-md-8 align-items-center">
                        <div class="col-md-6 d-flex search-property justify-content-between align-items-center mr-md-3 mb-2">
                            <div class="form-input">
                                <input type="text" name="search_property" id="search_property" class="form-control" placeholder="Search property">
                            </div>
                            <div class="search-icon">
                                <button class="btn" type="submit">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/search.svg' ?>" alt="" class="img-fluid">
                                </button>
                            </div>
                        </div>
                        <!-- <div class="col-md-4 d-flex enquiry-details justify-content-between align-items-center mb-2">
                            <p>
                                <strong>  Enquiry Details </strong>
                            </p>
                            <div class="explore-more">
                                <img src="<?= Yii::$app->request->baseUrl . 'images/explore-more.svg' ?>" alt="" class="img-fluid">
                            </div>
                        </div> -->
                        <div class="col-md-4 d-flex justify-content-between align-items-center mb-2">
                            <a href="#" class="text-link">
                                <strong>  Enquiry Details </strong>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 sort-contr dropdown">
                            <div class="d-flex search-sort justify-content-md-end align-items-center dropdown-toggle" id="sortMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <p> Sort </p>
                                <div class="sort-icon">
                                    <i class="fas fa-filter"></i>
                                </div>
                            </div>
                            <div class="dropdown-menu" aria-labelledby="sortMenuButton">
                                <a class="dropdown-item mb-1" href="#">Action</a>
                                <a class="dropdown-item current mb-1" href="#">Another action</a>
                                <a class="dropdown-item mb-1" href="#">Something else here</a>
                            </div>
                    </div>
                </div>
            </div>

            <div class="row result-start justify-content-between align-items-center mb-2">
                <div class="col-md-4">
                    <h5 class="mb-1"> Results </h5>
                </div>
                <div class="d-flex col-md-3 justify-content-end align-items-center">
                    <h6> Selected </h6>
                    <div class="selected-count">
                        <h6> 2/10 </h6>
                    </div>
                </div>
            </div>

            <div class="search-results mb-2">
                <div class="row result-header justify-content-between align-items-center m-0">
                    <div class="d-flex flex-col flex-md-row align-items-start">
                        <div class="result-name mr-4 mb-2">
                            <h5 class="name">
                                <strong> Hotel Maldives Holiday Inn </strong>
                            </h5>
                            <p class="address"> Kerala, India </p>
                        </div>
                        <div class="result-heading mb-2">
                            <div class="d-flex flex-md-row">
                                <p class="mr-2"> Business Hotel </p>
                                <p> 3 Star </p>
                            </div>
                            <div class="d-flex flex-md-row">
                                <div class="mr-2"> <i class="fa-solid fa-smoking"></i> </div>
                                <div class="mr-2">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/smoking.png' ?>" alt="smoking.png" class="img-fluid">
                                </div>
                                <div>
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/smoking.png' ?>" alt="smoking.png" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-2 result-heading mb-2">
                            <p> 3 Star </p>
                        </div> -->
                    </div>
                    <div class="d-flex col-md-1 result-action justify-content-between align-items-center p-0">
                        <div class="favorite-icon">
                            <!-- <label for="favorite-checkbox" class="favorite toggle mb-0">
                                <input type="checkbox" id="favorite-checkbox" class="favorite-checkbox hide" name="is_fav"/>
                                <button type="submit" class="btn btn-none btn-favorite p-0">
                                    <div class="favorite-icon">
                                        <svg width="34" height="33" viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="34" height="33" fill="#EBEBEB"/>
                                        <rect width="1920" height="1876" transform="translate(-1768 -657)" fill="#F6F9F8"/>
                                        <rect x="-1040.5" y="-33.5" width="1153" height="690" rx="7.5" fill="white" stroke="#717171"/>
                                        <g clip-path="url(#clip0_0_1)">
                                        <mask id="path-2-inside-1_0_1" fill="white">
                                        <path d="M31.3028 3.9614C29.5427 1.99633 27.1277 0.914062 24.5021 0.914062C22.5395 0.914062 20.7421 1.5528 19.1598 2.81237C18.3613 3.44817 17.6379 4.22602 17 5.13392C16.3624 4.22629 15.6387 3.44817 14.84 2.81237C13.2579 1.5528 11.4605 0.914062 9.49791 0.914062C6.87227 0.914062 4.457 1.99633 2.69698 3.9614C0.957962 5.9035 0 8.55669 0 11.4326C0 14.3926 1.07158 17.1021 3.37219 19.9599C5.43027 22.5162 8.3882 25.1111 11.8136 28.116C12.9832 29.1422 14.309 30.3054 15.6856 31.5444C16.0493 31.8723 16.516 32.0528 17 32.0528C17.4838 32.0528 17.9507 31.8723 18.3139 31.5449C19.6905 30.3057 21.0171 29.1419 22.1872 28.1152C25.6121 25.1109 28.57 22.5162 30.6281 19.9596C32.9287 17.1021 34 14.3926 34 11.4323C34 8.55669 33.042 5.9035 31.3028 3.9614Z"/>
                                        </mask>
                                        <path d="M31.3028 3.9614C29.5427 1.99633 27.1277 0.914062 24.5021 0.914062C22.5395 0.914062 20.7421 1.5528 19.1598 2.81237C18.3613 3.44817 17.6379 4.22602 17 5.13392C16.3624 4.22629 15.6387 3.44817 14.84 2.81237C13.2579 1.5528 11.4605 0.914062 9.49791 0.914062C6.87227 0.914062 4.457 1.99633 2.69698 3.9614C0.957962 5.9035 0 8.55669 0 11.4326C0 14.3926 1.07158 17.1021 3.37219 19.9599C5.43027 22.5162 8.3882 25.1111 11.8136 28.116C12.9832 29.1422 14.309 30.3054 15.6856 31.5444C16.0493 31.8723 16.516 32.0528 17 32.0528C17.4838 32.0528 17.9507 31.8723 18.3139 31.5449C19.6905 30.3057 21.0171 29.1419 22.1872 28.1152C25.6121 25.1109 28.57 22.5162 30.6281 19.9596C32.9287 17.1021 34 14.3926 34 11.4323C34 8.55669 33.042 5.9035 31.3028 3.9614Z" stroke="55505C" stroke-width="4" mask="url(#path-2-inside-1_0_1)"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_0_1">
                                        <rect width="34" height="35" fill="white" transform="translate(0 -1)"/>
                                        </clipPath>
                                        </defs>
                                        </svg>
                                    </div>
                                </button>
                            </label> -->
                            <input type="checkbox" class="favorite" id="favorite-1" />
                            <label for="favorite-1">
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
                        <div class="refresh-icon">
                            <img src="<?= Yii::$app->request->baseUrl . 'images/refresh.svg' ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="divider"></div>

                <?php foreach(range(1, 3) as $index => $item): ?>
                    <div class="result-content active ">
                        <div class="row content-heading justify-content-between align-items-center">
                            <div class="col-md-6 result-title">
                                <a href="#" class="title text-link">
                                    <strong> Standard Room with Private pool </strong>
                                </a>
                            </div>
                            <div class="d-flex col-md-2 result-data">
                                <p class="mr-1" for="selected-plan2"> 10 Days Stay </p>
                                <!-- <div class="custom-control custom-checkbox">
                                    <input id="selected-plan2" type="checkbox" class="custom-control-input"/>
                                    <label class="custom-control-label ml-1" for="selected-plan2"> </label>
                                </div> -->
                                <div class="selection-progress">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/partially-checked.png' ?>" alt="" class="img-fluid">
                                    <!-- <img src="<?= Yii::$app->request->baseUrl . 'images/fully-checked.png' ?>" alt="" class="img-fluid"> -->
                                </div>
                            </div>
                        </div>
                        <div class="result-hotel">
                            <div class="filter-accordion accordion" id="accordion-hotel">
                                <div class="card mb-0">
                                    <a data-toggle="collapse" data-target="#hotelOne" aria-expanded="true" aria-controls="hotelOne" class="card-anchor">
                                        <div class="card-header" id="hotel-1">
                                            <div class="row hotel-info align-items-center">
                                                <div class="d-flex col-md-3 meal-info align-items-center">
                                                    <div class="meal-icon">
                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>" alt="" class="img-fluid">
                                                    </div>
                                                    <p class="mb-0"> EP (Room only) </p>
                                                </div>

                                                <div class="d-flex col-md-3 person-info  align-items-center">
                                                    <div class="child-icon mr-1">
                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                    </div>
                                                    <p class="mb-0 mr-1"> 0 - X YR </p>
                                                    <div class="adult-icon mr-1">
                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                    </div>
                                                    <p class="mb-0"> XX - XX YR </p>
                                                </div>

                                                <div class="d-flex col-md-3 bed-info align-items-center">
                                                    <div class="bed-icon mr-1">
                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/bed.svg' ?>" alt="" class="img-fluid">
                                                    </div>
                                                    <p class="mb-0"> DB: X | EB: X | SB:X</p>
                                                </div>

                                                <div class="d-flex col-md-4 price justify-content-end align-items-center">
                                                    <div class="exact-price mr-1">
                                                        <p class="mb-0"> ₹ 10,900 </p>
                                                    </div>
                                                    <div class="offer-price mr-2">
                                                        <p class="mb-0"> ₹ 10,246 </p>
                                                    </div>
                                                    <div class="accordion-caret">
                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/arrow-down.svg' ?>" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div id="hotelOne" class="collapse show" aria-labelledby="hotelOne" data-parent="#accordion-hotel">
                                        <div class="hotel-booking active mb-3">
                                            <div class="table-responsive mb-2">
                                                <table class="table table-sm table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="2">
                                                                <p> Day 1 | 10 Aug 2022 </p>
                                                            </td>
                                                            <td colspan="3">
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <p class="mr-1 mb-0"> In Enq: </p>
                                                                    <div class="meal-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>" alt="" class="img-fluid">
                                                                    </div>

                                                                    <p class="mr-1 mb-0"> Map </p>
                                                                    <div class="warning-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/warning.svg' ?>" alt="" class="img-fluid">
                                                                    </div>
                                                                    <div class="adult-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                    </div>

                                                                    <p class="mr-1 mb-0"> 99 </p>
                                                                    <div class="adult-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                    </div>
                                                                    <p class="mr-1 mb-0"> 50 </p>
                                                                </div>
                                                            </td>
                                                            <td colspan="3">
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <p class="mr-1 mb-0"> In Tariff: </p>
                                                                    <div class="meal-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>" alt="" class="img-fluid">
                                                                    </div>

                                                                    <p class="mr-1 mb-0"> Map </p>
                                                                    <div class="adult-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                    </div>

                                                                    <p class="mr-1 mb-0"> 99 </p>
                                                                    <div class="adult-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                    </div>

                                                                    <p class="mr-1 mb-0"> 50 </p>
                                                                    <div class="child-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                                    </div>
                                                                    <p class="mr-1 mb-0"> 50 </p>
                                                                </div>
                                                            </td>
                                                            <td class="table-action">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input id="hotel-result1" type="checkbox" class="custom-control-input"/>
                                                                    <label class="custom-control-label ml-1" for="hotel-result1"> </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Rooms </td>
                                                            <td class="active"> EBA </td>
                                                            <td> CWB </td>
                                                            <td class="active"> CNB </td>
                                                            <td> SGL </td>
                                                            <td>
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <div class="child-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                                    </div>
                                                                    FOC
                                                                </div>
                                                            </td>
                                                            <td> Dinner </td>
                                                            <td class="active"> Day Total </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="active"> 7 * 350000 </td>
                                                            <td class="active"> 7 * 350000 </td>
                                                            <td class="active"> 7 * 350000 </td>
                                                            <td class="active"> 7 * 350000 </td>
                                                            <td class="active"> 7 * 350000 </td>
                                                            <td class="active"> 7 * 350000 </td>
                                                            <td class="active"> 7 * 350000 </td>
                                                            <td class="active"> 7 * 350000 </td>
                                                            <td class="table-action">
                                                                <div class="warning-icon m-auto">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/warning.svg' ?>" alt="" class="img-fluid">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="hotel-booking">
                                            <div class="table-responsive mb-2">
                                                <table class="table table-sm table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="2">
                                                                <p> Day 1 | 10 Aug 2022 </p>
                                                            </td>
                                                            <td colspan="3">
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <p class="mr-1 mb-0"> In Enq: </p>
                                                                    <div class="meal-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>" alt="" class="img-fluid">
                                                                    </div>

                                                                    <p class="mr-1 mb-0"> Map </p>
                                                                    <div class="adult-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                    </div>

                                                                    <p class="mr-1 mb-0"> 99 </p>
                                                                    <div class="adult-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                    </div>
                                                                    <p class="mr-1 mb-0"> 50 </p>
                                                                </div>
                                                            </td>
                                                            <td colspan="3">
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <p class="mr-1 mb-0"> In Tariff: </p>
                                                                    <div class="meal-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>" alt="" class="img-fluid">
                                                                    </div>

                                                                    <p class="mr-1 mb-0"> Map </p>
                                                                    <div class="adult-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                    </div>

                                                                    <p class="mr-1 mb-0"> 99 </p>
                                                                    <div class="adult-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                    </div>

                                                                    <p class="mr-1 mb-0"> 50 </p>
                                                                    <div class="child-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                                    </div>
                                                                    <p class="mr-1 mb-0"> 50 </p>
                                                                </div>
                                                            </td>
                                                            <td class="table-action">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input id="hotel-result2" type="checkbox" class="custom-control-input"/>
                                                                    <label class="custom-control-label ml-1" for="hotel-result2"> </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Rooms </td>
                                                            <td> EBA </td>
                                                            <td> CWB </td>
                                                            <td> CNB </td>
                                                            <td> SGL </td>
                                                            <td>
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <div class="child-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                                    </div>
                                                                    FOC
                                                                </div>
                                                            </td>
                                                            <td> Dinner </td>
                                                            <td> Day Total </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="active"> 7 * 350000 </td>
                                                            <td class="active"> 7 * 350000 </td>
                                                            <td class="active"> 7 * 350000 </td>
                                                            <td class="active"> 7 * 350000 </td>
                                                            <td class="active"> 7 * 350000 </td>
                                                            <td class="active"> 7 * 350000 </td>
                                                            <td class="active"> 7 * 350000 </td>
                                                            <td class="active"> 7 * 350000 </td>
                                                            <td class="table-action">
                                                                <div class="warning-icon m-auto">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/warning.svg' ?>" alt="" class="img-fluid">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="d-flex hotel-charge justify-content-md-end align-items-center mt-2">
                                            <P class="title mr-2"> Grand Total </P>
                                            <p class="total-value"> 7 * 3500000 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row hotel-footer justify-content-between align-items-center m-0">
                            <div class="d-flex col-md-6 align-items-center mb-2">
                                <div class="bed-icon mr-1">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/bed.svg' ?>" alt="" class="img-fluid">
                                </div>
                                <p class="mb-0"> 99 Rooms | 99 EBA | 99 CWB | 99 CNB | 99 SGL </p>
                            </div>
                            <div class="col-md-4 check-meal p-0 mb-2">
                                <div class="custom-control custom-checkbox">
                                    <input id="include-meal1" type="checkbox" class="custom-control-input"/>
                                    <label class="custom-control-label ml-1" for="include-meal1"> Include Mandatory Dinner & Tax </label>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="search-results mb-2">
                <div class="row result-header justify-content-between align-items-center m-0">
                    <div class="row col-md-11 align-items-center">
                        <div class="col-md-5 result-name mb-2">
                            <h6> Hotel Maldives Holiday Inn </h6>
                            <p class="address"> Kerala, India </p>
                        </div>
                        <div class="col-md-3 d-flex flex-md-row result-heading mb-2" data-toggle="tooltip" data-html="true" data-placement="top" title="Base rate : 500 <br> Day hike : 300 <br> Add on meal : 500 ">
                            <p class="mr-2"> Business Hotel </p>
                            <p> 3 Star</p>
                        </div>
                        <!-- <div class="col-md-2 result-heading mb-2" data-toggle="tooltip" data-placement="top" title="Star rating as provided by the property.">
                            <p> 3 Star </p>
                        </div> -->
                    </div>
                    <div class="d-flex col-md-1 result-action justify-content-between align-items-center p-0">
                        <div class="favorite-icon">
                            <!-- <label for="favorite-checkbox" class="favorite toggle mb-0">
                                <input type="checkbox" id="favorite-checkbox" class="favorite-checkbox hide" name="is_fav" checked="checked"/>
                                <button type="submit" class="btn btn-none btn-favorite p-0">
                                    <div class="favorite-icon">
                                        <svg width="34" height="33" viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="34" height="33" fill="#EBEBEB"/>
                                        <rect width="1920" height="1876" transform="translate(-1768 -657)" fill="#F6F9F8"/>
                                        <rect x="-1040.5" y="-33.5" width="1153" height="690" rx="7.5" fill="white" stroke="#717171"/>
                                        <g clip-path="url(#clip0_0_1)">
                                        <mask id="path-2-inside-1_0_1" fill="white">
                                        <path d="M31.3028 3.9614C29.5427 1.99633 27.1277 0.914062 24.5021 0.914062C22.5395 0.914062 20.7421 1.5528 19.1598 2.81237C18.3613 3.44817 17.6379 4.22602 17 5.13392C16.3624 4.22629 15.6387 3.44817 14.84 2.81237C13.2579 1.5528 11.4605 0.914062 9.49791 0.914062C6.87227 0.914062 4.457 1.99633 2.69698 3.9614C0.957962 5.9035 0 8.55669 0 11.4326C0 14.3926 1.07158 17.1021 3.37219 19.9599C5.43027 22.5162 8.3882 25.1111 11.8136 28.116C12.9832 29.1422 14.309 30.3054 15.6856 31.5444C16.0493 31.8723 16.516 32.0528 17 32.0528C17.4838 32.0528 17.9507 31.8723 18.3139 31.5449C19.6905 30.3057 21.0171 29.1419 22.1872 28.1152C25.6121 25.1109 28.57 22.5162 30.6281 19.9596C32.9287 17.1021 34 14.3926 34 11.4323C34 8.55669 33.042 5.9035 31.3028 3.9614Z"/>
                                        </mask>
                                        <path d="M31.3028 3.9614C29.5427 1.99633 27.1277 0.914062 24.5021 0.914062C22.5395 0.914062 20.7421 1.5528 19.1598 2.81237C18.3613 3.44817 17.6379 4.22602 17 5.13392C16.3624 4.22629 15.6387 3.44817 14.84 2.81237C13.2579 1.5528 11.4605 0.914062 9.49791 0.914062C6.87227 0.914062 4.457 1.99633 2.69698 3.9614C0.957962 5.9035 0 8.55669 0 11.4326C0 14.3926 1.07158 17.1021 3.37219 19.9599C5.43027 22.5162 8.3882 25.1111 11.8136 28.116C12.9832 29.1422 14.309 30.3054 15.6856 31.5444C16.0493 31.8723 16.516 32.0528 17 32.0528C17.4838 32.0528 17.9507 31.8723 18.3139 31.5449C19.6905 30.3057 21.0171 29.1419 22.1872 28.1152C25.6121 25.1109 28.57 22.5162 30.6281 19.9596C32.9287 17.1021 34 14.3926 34 11.4323C34 8.55669 33.042 5.9035 31.3028 3.9614Z" stroke="55505C" stroke-width="4" mask="url(#path-2-inside-1_0_1)"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_0_1">
                                        <rect width="34" height="35" fill="white" transform="translate(0 -1)"/>
                                        </clipPath>
                                        </defs>
                                        </svg>
                                    </div>
                                </button>
                            </label> -->
                            <input type="checkbox" class="favorite" id="favorite-2" />
                            <label for="favorite-2">
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
                        <div class="refresh-icon">
                            <img src="<?= Yii::$app->request->baseUrl . 'images/refresh.svg' ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="divider"></div>

                <div class="result-content">
                    <div class="row content-heading justify-content-between align-items-center">
                        <div class="col-md-6 result-title">
                            <a href="#" class="title text-link">
                                <strong> Standard Room with Private pool </strong>
                            </a>
                        </div>
                        <div class="col-md-2 result-data">
                            <div class="custom-control custom-checkbox">
                                <input id="selected-plan" type="checkbox" class="custom-control-input mr-1"/>
                                <label class="custom-control-label ml-1" for="selected-plan"> 10 Days Stay </label>
                            </div>
                        </div>
                    </div>
                    <div class="result-hotel">
                        <div class="filter-accordion accordion" id="accordion-hotel2">
                            <div class="card mb-0">
                                <a data-toggle="collapse" data-target="#hotelTwo" aria-expanded="true" aria-controls="hotelTwo" class="card-anchor">
                                    <div class="card-header" id="hotel-1">
                                        <div class="row hotel-info align-items-center">
                                            <div class="d-flex col-md-2 meal-info align-items-center mb-2" data-toggle="tooltip" data-placement="top" title="Room’s default meal plan. If meal specified in enquiry is less than default plan, Tour Matrix automatically overrides and applies the room’s default meal plan to enquiry. ">
                                                <div class="meal-icon">
                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>" alt="" class="img-fluid">
                                                </div>
                                                <p class="mb-0"> EP (Room only) </p>
                                            </div>

                                            <div class="d-flex col-md-3 person-info  align-items-center mb-2" data-toggle="tooltip" data-placement="top" title="Property’s Infant & Child age policy. Tour Matrix automatically reclassifies children in the enquiry as Child & Infant based on the property’s policy.">
                                                <div class="child-icon mr-1">
                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                </div>
                                                <p class="mb-0 mr-1"> 0 - X YR </p>
                                                <div class="adult-icon mr-1">
                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                </div>
                                                <p class="mb-0"> XX - XX YR </p>
                                            </div>

                                            <div class="d-flex col-md-3 bed-info align-items-center mb-2" data-toggle="tooltip" data-placement="top" title="7 Room’s maximum occupancy capacity. DB: Default beds in the room | EB: Extra beds allowed in room | SB: Children allowed on bed sharing basis.">
                                                <div class="bed-icon mr-1">
                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/bed.svg' ?>" alt="" class="img-fluid">
                                                </div>
                                                <p class="mb-0"> DB: X | EB: X | SB:X</p>
                                            </div>

                                            <div class="col-md-4 price-contr mb-mb-2">
                                                <div class="d-flex price justify-content-end align-items-center">
                                                    <div class="exact-price mr-1" data-toggle="tooltip" data-placement="top" title="Tariff based on room’s published Rack Rate for total stay duration.">
                                                        <p> ₹ 10,900 </p>
                                                    </div>
                                                    <div class="offer-price mr-2" data-toggle="tooltip" data-placement="top" title="Meal Plan, Pax Count (Adult & Child) as specified in enquiry.">
                                                        <p> ₹ 10,246 </p>
                                                    </div>
                                                    <div class="accordion-caret">
                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/arrow-down.svg' ?>" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div id="hotelTwo" class="collapse show" aria-labelledby="hotelTwo" data-parent="#accordion-hotel2">
                                    <div class="hotel-booking active mb-3">
                                        <div class="table-responsive mb-2">
                                            <table class="table table-sm table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="2">
                                                            <p> Day 1 | 10 Aug 2022 </p>
                                                        </td>
                                                        <td colspan="3">
                                                            <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="Meal Plan, Pax Count (Adult & Child) as specified in enquiry.">
                                                                <p class="mr-1 mb-0"> In Enq: </p>
                                                                <div class="meal-icon mr-1">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>" alt="" class="img-fluid">
                                                                </div>

                                                                <p class="mr-1 mb-0"> Map </p>
                                                                <div class="warning-icon mr-1">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/warning.svg' ?>" alt="" class="img-fluid">
                                                                </div>
                                                                <div class="adult-icon mr-1">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                </div>

                                                                <p class="mr-1 mb-0"> 99 </p>
                                                                <div class="adult-icon mr-1">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                </div>
                                                                <p class="mr-1 mb-0"> 50 </p>
                                                            </div>
                                                        </td>
                                                        <td colspan="3">
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <p class="mr-1 mb-0"> In Tariff: </p>
                                                                <div class="meal-icon mr-1" data-toggle="tooltip" data-placement="top" title="Meal plan on which the room’s tariff for the day is calculated.">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>" alt="" class="img-fluid">
                                                                </div>

                                                                <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="Meal plan in enquiry has been overridden by room’s default meal plan.">
                                                                    <p class="mr-1 mb-0"> Map </p>
                                                                    <div class="adult-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                    </div>
                                                                </div>

                                                                <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="Children in enquiry reclassified as Infant & Child based on the property’s policy.">
                                                                    <p class="mr-1 mb-0"> 99 </p>
                                                                    <div class="adult-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                    </div>
                                                                    <p class="mr-1 mb-0"> 50 </p>
                                                                    <div class="child-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                                    </div>
                                                                    <p class="mr-1 mb-0"> 50 </p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="table-action">
                                                            <div class="custom-control custom-checkbox">
                                                                <input id="hotel-result3" type="checkbox" class="custom-control-input"/>
                                                                <label class="custom-control-label ml-1" for="hotel-result3"> </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> Rooms </td>
                                                        <td> EBA </td>
                                                        <td> CWB </td>
                                                        <td> CNB </td>
                                                        <td> SGL </td>
                                                        <td>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <div class="child-icon mr-1">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                                </div>
                                                                FOC
                                                            </div>
                                                        </td>
                                                        <td> Dinner </td>
                                                        <td> Day Total </td>
                                                    </tr>
                                                    <tr>
                                                        <td> 7 * 350000 </td>
                                                        <td> 7 * 350000 </td>
                                                        <td> 7 * 350000 </td>
                                                        <td> 7 * 350000 </td>
                                                        <td> 7 * 350000 </td>
                                                        <td> 7 * 350000 </td>
                                                        <td> 7 * 350000 </td>
                                                        <td> 7 * 350000 </td>
                                                        <td class="table-action">
                                                            <div class="warning-icon m-auto">
                                                                <img src="<?= Yii::$app->request->baseUrl . 'images/warning.svg' ?>" alt="" class="img-fluid">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="hotel-booking">
                                        <div class="table-responsive mb-2">
                                            <table class="table table-sm table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="2">
                                                            <p> Day 1 | 10 Aug 2022 </p>
                                                        </td>
                                                        <td colspan="3">
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <p class="mr-1 mb-0"> In Enq: </p>
                                                                <div class="meal-icon mr-1">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>" alt="" class="img-fluid">
                                                                </div>

                                                                <p class="mr-1 mb-0"> Map </p>
                                                                <div class="adult-icon mr-1">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                </div>

                                                                <p class="mr-1 mb-0"> 99 </p>
                                                                <div class="adult-icon mr-1">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                </div>
                                                                <p class="mr-1 mb-0"> 50 </p>
                                                            </div>
                                                        </td>
                                                        <td colspan="3">
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <p class="mr-1 mb-0"> In Tariff: </p>
                                                                <div class="meal-icon mr-1">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>" alt="" class="img-fluid">
                                                                </div>

                                                                <p class="mr-1 mb-0"> Map </p>
                                                                <div class="adult-icon mr-1">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                </div>

                                                                <p class="mr-1 mb-0"> 99 </p>
                                                                <div class="adult-icon mr-1">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                </div>

                                                                <p class="mr-1 mb-0"> 50 </p>
                                                                <div class="child-icon mr-1">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                                </div>
                                                                <p class="mr-1 mb-0"> 50 </p>
                                                            </div>
                                                        </td>
                                                        <td class="table-action">
                                                            <div class="custom-control custom-checkbox">
                                                                <input id="hotel-result4" type="checkbox" class="custom-control-input"/>
                                                                <label class="custom-control-label ml-1" for="hotel-result4"> </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> Rooms </td>
                                                        <td> EBA </td>
                                                        <td> CWB </td>
                                                        <td> CNB </td>
                                                        <td> SGL </td>
                                                        <td>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <div class="child-icon mr-1">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                                </div>
                                                                FOC
                                                            </div>
                                                        </td>
                                                        <td> Dinner </td>
                                                        <td> Day Total </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="active"> 7 * 350000 </td>
                                                        <td class="active"> 7 * 350000 </td>
                                                        <td class="active"> 7 * 350000 </td>
                                                        <td class="active"> 7 * 350000 </td>
                                                        <td class="active"> 7 * 350000 </td>
                                                        <td class="active"> 7 * 350000 </td>
                                                        <td class="active"> 7 * 350000 </td>
                                                        <td class="active"> 7 * 350000 </td>
                                                        <td class="table-action">
                                                            <div class="warning-icon m-auto">
                                                                <img src="<?= Yii::$app->request->baseUrl . 'images/warning.svg' ?>" alt="" class="img-fluid">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row hotel-footer justify-content-between align-items-center m-0">
                        <div class="d-flex col-md-6 align-items-center mb-2">
                            <div class="bed-icon mr-1">
                                <img src="<?= Yii::$app->request->baseUrl . 'images/bed.svg' ?>" alt="" class="img-fluid">
                            </div>
                            <p class="mb-0"> 99 Rooms | 99 EBA | 99 CWB | 99 CNB | 99 SGL </p>
                        </div>
                        <div class="col-md-4 check-meal p-0 mb-2">
                            <div class="custom-control custom-checkbox">
                                <input id="include-meal2" type="checkbox" class="custom-control-input"/>
                                <label class="custom-control-label ml-1" for="include-meal2"> Include Mandatory Dinner & Tax </label>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>

<div class="modal searchModal fade" id="searchModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content destination-days">
            <div class="modal-header">
                <h6 class="title"> Select days on which property is required @ destination </h6>
                <p> Destination1 : XXXX </p>
            </div>
            <div class="modal-body">
                <div class="table-responsive destination-table mb-4">
                    <table class="table table-sm table-bordered">
                        <thead class="text-left">
                            <tr>
                                <th width="100px">
                                    <strong> Day </strong>
                                </th>
                                <th width="300px">
                                    <strong> Date </strong>
                                </th>
                                <th width="300px">
                                    <strong> Status </strong>
                                </th>
                                <th width="100px">
                                    <strong> Select </strong>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-left">
                            <tr>
                                <td> 1 </td>
                                <td> DD MMM | YY - WK Day </td>
                                <td> Required | Not Required </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input id="destination-1" type="checkbox" class="custom-control-input"/>
                                        <label class="custom-control-label ml-1" for="destination-1"> </label>
                                    </div>
                                </td>
                            </tr>
                            <tr class="invalid">
                                <td> 2 </td>
                                <td> DD MMM | YY - WK Day </td>
                                <td> Not Required </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td> 3 </td>
                                <td> DD MMM | YY - WK Day </td>
                                <td> Required | Not Required </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input id="destination-3" type="checkbox" class="custom-control-input"/>
                                        <label class="custom-control-label ml-1" for="destination-3"> </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 4 </td>
                                <td> DD MMM | YY - WK Day </td>
                                <td> Required | Not Required </td>
                                <td>
                                <div class="custom-control custom-checkbox">
                                    <input id="destination-4" type="checkbox" class="custom-control-input"/>
                                    <label class="custom-control-label ml-1" for="destination-4"> </label>
                                </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex destination-action justify-content-end align-items-center w-100">
                    <button class="btn btn-cancel mr-2" data-dismiss="modal"> Cancel </button>
                    <button class="btn btn-apply btn-lg"> Apply </button>
                </div>
            </div>
        </div>
    </div>
</div>