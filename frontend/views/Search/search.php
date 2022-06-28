<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

frontend\assets\CommonAsset::register($this);
frontend\assets\DatePickerAsset::register($this);
$this->registerCssFile('/css/search.css');
$this->registerJsFile('/js/search/index.js');
$this->registerJsFile('/js/search/search.js');
$this->title = 'Search History';
?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

<div class="search-container">
    <div class="search-header mb-3">
        <h5 class="title"> Search History </h5>
        <div class="row search-header-filters justify-content-between align-items-center m-0">
            <div class="col-md-1 filter-main mb-2">
                <label for="enq"> ENQ </label>
                <input type="text" name="enq" id="enq" class="form-control" value="<?= $enquiry->id ?>">
            </div>
            <input hidden type="text" name="enquiry_id" id="enquiry_id" class="form-control"
                   value="<?= $enquiry->id ?>">
            <div class="col-md-3 filter-main mb-2">
                <label for="name"> Guest Name </label>
                <input type="text" name="name" id="name" class="form-control" value="<?= $enquiry->guest_name ?>">
            </div>
            <div class="col-md-2 filter-main mb-2">
                <label for="checkIn"> Check-In </label>
                <input type="text" name="checkIn" id="checkIn" class="form-control datepicker" readOnly
                       value="<?= date('d-M-Y', strtotime($enquiry->tour_start_date)) ?>">
            </div>
            <div class="col-md-2 filter-main mb-2">
                <label for="checkOut"> Check-Out </label>
                <input type="text" name="checkOut" id="checkOut" class="form-control datepicker" readOnly
                       value="<?= date('d-M-Y', strtotime($enquiry->tour_start_date . ' + ' . $enquiry->tour_duration . 'days')) ?>">
            </div>
            <div class="col-md-3 filter-main mb-2">
                <label for="duration"> Stay Duration </label>
                <select name="duration" id="duration" class="select2 form-control browser-default">
                    <option value=""> <?= $enquiry->tour_duration ?> Nights (split stay)</option>
                </select>
            </div>
        </div>
    </div>
    <input type="hidden" value="<?= $resultType ?>" id="result-type">
    <?php $form = ActiveForm::begin(['id' => 'enquiry_room_search', 'enableClientValidation' => true, 'method' => 'post', 'action' => ['search/create']]) ?>
    <div class="row search-content align-items-start">
        <div class="col-md-3 search-filter">

            <input type="hidden" name="enquiryID" class="form-control" value="<?= $enquiry->id ?>">

            <div class="filter-group">
                <div class="filter-input">
                    <select name="destination" id="destination" class="select2 browser-default form-control"
                            data-placeholder="Search Destination">
                        <option value=""></option>
                        <?php foreach ($EnquiryDestinations as $EnquiryDestination) { ?>
                            <option <?php if (isset($_POST['destination']) && $_POST['destination'] == $EnquiryDestination['id']) { ?> selected <?php } ?>
                                    value="<?= $EnquiryDestination['id'] ?>"> <?= $EnquiryDestination['name'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="divider"></div>

            <div class="filter-group">
                <label for="property_type"> Property Type </label>
                <div class="filter-input">
                    <select name="property_type" id="property_type" class="select2 browser-default form-control"
                            data-placeholder="Search Property Type">
                        <option value=""></option>
                        <?php foreach ($propertyTypes as $propertyType) { ?>
                            <option <?php if (isset($_POST['property_type']) && $_POST['property_type'] == $propertyType['id']) { ?> selected <?php } ?>
                                    value="<?= $propertyType['id'] ?>"> <?= $propertyType['name'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="filter-group">
                <label for="property_rating"> Property Rating </label>
                <div class="filter-input">
                    <select name="property_rating" id="property_rating" class="select2 browser-default form-control"
                            data-placeholder="Search Property Rating">
                        <option value=""></option>
                        <?php foreach ($propertyRatings as $propertyRating) { ?>
                            <option <?php if (isset($_POST['property_rating']) && $_POST['property_rating'] == $propertyRating['id']) { ?> selected <?php } ?>
                                    value="<?= $propertyRating['id'] ?>"> <?= $propertyRating['name'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="filter-group">
                <label for="room_type"> Room Type </label>
                <div class="filter-input">
                    <select name="room_type" id="room_type" class="select2 browser-default form-control"
                            data-placeholder="Search Room Type">
                        <option value=""></option>
                        <?php foreach ($roomTypes as $roomType) { ?>
                            <option <?php if (isset($_POST['room_type']) && $_POST['room_type'] == $roomType['id']) { ?> selected <?php } ?>
                                    value="<?= $roomType['id'] ?>"> <?= $roomType['name'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="filter-group">
                <label for="room_view"> Room View </label>
                <div class="filter-input">
                    <select name="room_view" id="room_view" class="select2 browser-default form-control"
                            data-placeholder="Search Room View">
                        <option value=""></option>
                        <?php foreach ($roomViews as $roomView) { ?>
                            <option <?php if (isset($_POST['room_view']) && $_POST['room_view'] == $roomView['id']) { ?> selected <?php } ?>
                                    value="<?= $roomView['id'] ?>"> <?= $roomView['name'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="filter-group">
                <label for="food_type"> Food Type </label>
                <div class="filter-input">
                    <select name="food_type" id="food_type" class="select2 browser-default form-control"
                            data-placeholder="Search Food Type">
                        <option value=""></option>
                        <?php foreach ($foodTypes as $foodType) { ?>
                            <option <?php if (isset($_POST['food_type']) && $_POST['food_type'] == $foodType['id']) { ?> selected <?php } ?>
                                    value="<?= $foodType['id'] ?>"> <?= $foodType['name'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="filter-group">
                <label for="Occupancy"> Occupancy ( Adult/Room ) </label>
                <div class="filter-input">
                    <select name="Occupancy" id="Occupancy" class="select2 browser-default form-control"
                            data-placeholder="Search Occupancy">
                        <option value=""></option>
                        <?php foreach ($propertyAmenities as $propertyAmenitiy) { ?>
                            <option <?php if (isset($_POST['Occupancy']) && $_POST['Occupancy'] == $propertyAmenitiy['id']) { ?> selected <?php } ?>
                                    value="<?= $propertyAmenitiy['id'] ?>"> <?= $propertyAmenitiy['name'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="filter-group">
                <div class="filter-accordion accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Property Amenities
                                    <div class="float-right">
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                    </div>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <?php foreach ($propertyAmenities as $propertyAmenitiy) { ?>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input <?php if (isset($_POST['property_amenity']) && in_array($propertyAmenitiy['id'], $_POST['property_amenity'])) { ?> checked <?php } ?>
                                                id="<?= $propertyAmenitiy['name'] ?>" name="property_amenity[]"
                                                type="checkbox" class="custom-control-input"
                                                value="<?= $propertyAmenitiy['id'] ?>"/>
                                        <label class="custom-control-label ml-1"
                                               for="<?= $propertyAmenitiy['name'] ?>">  <?= $propertyAmenitiy['name'] ?> </label>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="filter-group">
                <div class="filter-accordion accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Room Amenities
                                    <div class="float-right">
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                    </div>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <?php foreach ($roomAmenities as $roomAmenity) { ?>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input <?php if (isset($_POST['room_amenity']) && in_array($roomAmenity['id'], $_POST['room_amenity'])) { ?> checked <?php } ?>
                                                id="<?= $roomAmenity['name'] ?>" name="room_amenity[]" type="checkbox"
                                                class="custom-control-input" value="<?= $roomAmenity['id'] ?>"/>
                                        <label class="custom-control-label ml-1"
                                               for="<?= $roomAmenity['name'] ?>">  <?= $roomAmenity['name'] ?> </label>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="divider"></div>
            <button type="submit" class="btn btn-outline-warning btn-lg text-center"> Search</button>

        </div>


        <div class="col-md-9 search-main">
            <h5 class="ml-1"> Property </h5>
            <div class="search-main-header mb-3">
                <div class="dropdown">
                    <a href="#" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <div class="row search-periods dropdown-toggle align-items-center mb-2">
                            <div class="col-md-1 text-center">
                                <div class="calendar-icon">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/calendar.svg' ?>" alt=""
                                         class="img-fluid">
                                </div>
                            </div>
                            <div class="row col-md-12" id="selected-dates">
                                <?php foreach ($selectedEnqAccommodation as $selectedDate) { ?>
                                    <div class="d-flex col-md-3 date-range has-divider justify-content-between text-center">
                                        <p>
                                            <strong><?= date('d M Y', strtotime($selectedDate->day)) ?> </strong>
                                        </p>
                                    </div>
                                <?php } ?>
                                <!--                            <div class="d-flex col-md-3 date-range has-divider justify-content-between text-center">-->
                                <!--                                <p>-->
                                <!--                                    <strong> 10 Mar - 11 Mar 2022 </strong>-->
                                <!--                                </p>-->
                                <!--                            </div>-->
                                <!---->
                                <!--                            <div class="d-flex col-md-3 date-range justify-content-between text-center">-->
                                <!--                                <p>-->
                                <!--                                    <strong> 10 Mar - 11 Mar 2022 </strong>-->
                                <!--                                </p>-->
                                <!--                            </div>-->

                                <div class="col-md-2 text-right">
                                    <div class="period-arrow">
                                        <img src="<?= Yii::$app->request->baseUrl . 'images/arrow-down.svg' ?>" alt=""
                                             class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu  destination-days " aria-labelledby="dropdownMenuButton">
                        <h6 class="title"> Select days on which property is required @ <span
                                    id="destination-title"></span></h6>
                        <p> Destination1 : XXXX </p>
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
                                <tbody class="text-left" id="destination-dates">
                                <?php foreach ($DestinationAccommodation as $key => $EnqAccommodation) { ?>
                                        <?php if ($EnqAccommodation->status === 1) {?>
                                    <tr>
                                        <td> <?= $key + 1 ?> </td>
                                        <td> <?= date('d M | y - l', strtotime($EnqAccommodation->day)) ?> </td>
                                        <td> Required</td>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input <?php if (isset($_POST['accommodation_id']) && in_array($EnqAccommodation['id'], $_POST['accommodation_id'])) { ?> checked <?php } ?>
                                                        value="<?= $EnqAccommodation['id'] ?>"
                                                        name="accommodation_id[]" id="destination-<?= $key ?>"
                                                        type="checkbox" class="custom-control-input accommodation_id"/>
                                                <label class="custom-control-label ml-1"
                                                       for="destination-<?= $key ?>"> </label>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } else {?>
                                        <tr class="invalid">
                                            <td> <?= $key + 1 ?> </td>
                                            <td> <?= date('d M | y - l', strtotime($EnqAccommodation->day)) ?> </td>
                                            <td> Not Required </td>
                                            <td> </td>
                                        </tr>
                                            <?php } ?>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex destination-action justify-content-end align-items-center w-100">
                            <a href="" class="btn btn-cancel mr-2"> Cancel </a>
                            <button class="btn btn-apply btn-lg"> Apply</button>
                        </div>

                    </div>
                </div>
                <div class="row justify-content-between align-items-center">
                    <div class="row col-md-8 align-items-center">
                        <div class="col-md-6 d-flex search-property justify-content-between align-items-center mr-md-3 mb-2">
                            <div class="form-input">
                                <input type="text" name="search_property" id="search_property" class="form-control"
                                       placeholder="Search property">
                            </div>
                            <div class="search-icon">
                                <button class="btn" type="submit">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/search.svg' ?>" alt=""
                                         class="img-fluid">
                                </button>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex enquiry-details justify-content-between align-items-center mb-2">
                            <p>
                                <strong> Enquiry Details </strong>
                            </p>
                            <div class="explore-more">
                                <img src="<?= Yii::$app->request->baseUrl . 'images/explore-more.svg' ?>" alt=""
                                     class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex col-md-2 search-sort align-items-center">
                        <p> Sort </p>
                        <div class="sort-icon">
                            <img src="<?= Yii::$app->request->baseUrl . 'images/sort.svg' ?>" alt="" class="img-fluid">
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
                        <h6><?= $totalPropSelected ?>/10 </h6>
                    </div>
                </div>
            </div>

            <?php
            foreach ($searchResult as $properties) {
                ?>
                <div class="search-results mb-2">
                    <div class="row result-header justify-content-between align-items-center m-0">
                        <div class="row col-md-11 align-items-center">
                            <div class="col-md-5 result-heading mb-2">
                                <h6> <?= $properties['property']['name'] ?>  </h6>
                            </div>
                            <div class="col-md-3 result-heading mb-2" title="Property Type">
                                <p> <?= $properties['property']->propertyType->name ?> </p>
                            </div>
                            <div class="col-md-2 result-heading mb-2" title="Star rating as provided by the property">
                                <p> <?= $properties['property']->propertyCategory->name ?> </p>
                            </div>
                        </div>
                        <div class="d-flex col-md-1 result-action justify-content-between align-items-center p-0">

                            <div class="favorite-icon">
                                <label for="favorite-checkbox" class="favorite toggle mb-0">
                                    <input type="checkbox" id="favorite-checkbox" class="favorite-checkbox hide fav-check<?= $properties['property']['id'] ?>"
                                           name="is_fav"  <?php if ($properties['favourite'] == true) {?> Checked <?php } ?>/>
                                    <button type="button" class="btn btn-none btn-favorite p-0" value="0" data-property-id="<?= $properties['property']['id'] ?>">
                                        <div class="favorite-icon">
                                            <svg width="34" height="33" viewBox="0 0 34 33" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect width="34" height="33" fill="#EBEBEB"/>
                                                <rect width="1920" height="1876" transform="translate(-1768 -657)"
                                                      fill="#F6F9F8"/>
                                                <rect x="-1040.5" y="-33.5" width="1153" height="690" rx="7.5"
                                                      fill="white" stroke="#717171"/>
                                                <g clip-path="url(#clip0_0_1)">
                                                    <mask id="path-2-inside-1_0_1" fill="white">
                                                        <path d="M31.3028 3.9614C29.5427 1.99633 27.1277 0.914062 24.5021 0.914062C22.5395 0.914062 20.7421 1.5528 19.1598 2.81237C18.3613 3.44817 17.6379 4.22602 17 5.13392C16.3624 4.22629 15.6387 3.44817 14.84 2.81237C13.2579 1.5528 11.4605 0.914062 9.49791 0.914062C6.87227 0.914062 4.457 1.99633 2.69698 3.9614C0.957962 5.9035 0 8.55669 0 11.4326C0 14.3926 1.07158 17.1021 3.37219 19.9599C5.43027 22.5162 8.3882 25.1111 11.8136 28.116C12.9832 29.1422 14.309 30.3054 15.6856 31.5444C16.0493 31.8723 16.516 32.0528 17 32.0528C17.4838 32.0528 17.9507 31.8723 18.3139 31.5449C19.6905 30.3057 21.0171 29.1419 22.1872 28.1152C25.6121 25.1109 28.57 22.5162 30.6281 19.9596C32.9287 17.1021 34 14.3926 34 11.4323C34 8.55669 33.042 5.9035 31.3028 3.9614Z"/>
                                                    </mask>
                                                    <path d="M31.3028 3.9614C29.5427 1.99633 27.1277 0.914062 24.5021 0.914062C22.5395 0.914062 20.7421 1.5528 19.1598 2.81237C18.3613 3.44817 17.6379 4.22602 17 5.13392C16.3624 4.22629 15.6387 3.44817 14.84 2.81237C13.2579 1.5528 11.4605 0.914062 9.49791 0.914062C6.87227 0.914062 4.457 1.99633 2.69698 3.9614C0.957962 5.9035 0 8.55669 0 11.4326C0 14.3926 1.07158 17.1021 3.37219 19.9599C5.43027 22.5162 8.3882 25.1111 11.8136 28.116C12.9832 29.1422 14.309 30.3054 15.6856 31.5444C16.0493 31.8723 16.516 32.0528 17 32.0528C17.4838 32.0528 17.9507 31.8723 18.3139 31.5449C19.6905 30.3057 21.0171 29.1419 22.1872 28.1152C25.6121 25.1109 28.57 22.5162 30.6281 19.9596C32.9287 17.1021 34 14.3926 34 11.4323C34 8.55669 33.042 5.9035 31.3028 3.9614Z"
                                                          stroke="55505C" stroke-width="4"
                                                          mask="url(#path-2-inside-1_0_1)"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_0_1">
                                                        <rect width="34" height="35" fill="white"
                                                              transform="translate(0 -1)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </button>
                                </label>
                            </div>
                            <div class="refresh-icon">
                                <img src="<?= Yii::$app->request->baseUrl . 'images/refresh.svg' ?>" alt=""
                                     class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <?php
                    foreach ($properties['property_rooms'] as $rooms) {
                        ?>
                        <div class="result-content">
                            <div class="row content-heading justify-content-between align-items-center">
                                <div class="col-md-6 result-title">
                                    <h6 class="title">
                                        <strong> <?= $rooms['RoomDetails']['name'] ?>  </strong>
                                    </h6>
                                </div>
                                <?php if ($rooms['selectionStatus'] === 0) {?>
                                    <div class="col-md-2 result-data">
                                        <div class="custom-control custom-checkbox">
                                            <input value="<?= $rooms['RoomDetails']['id'] ?>" id="selected-plan<?= $rooms['RoomDetails']['id'] ?>" type="checkbox" class="custom-control-input room-check-box"/>
                                            <label class="custom-control-label ml-1" for="selected-plan<?= $rooms['RoomDetails']['id'] ?>"> <?php echo count($rooms['EnquiryDates']) ?> Days Stay </label>
                                        </div>
                                    </div>
                                <?php }   if ($rooms['selectionStatus'] === 1) { ?>
                                    <span>&#9989;</span>
                                <?php } if ($rooms['selectionStatus'] === 2) {?>
                                    <span>&#10060;</span>
                                <?php } ?>
                            </div>
                            <div class="result-hotel">
                                <div class="filter-accordion accordion" id="accordion-hotel">
                                    <div class="card mb-0">
                                        <a data-toggle="collapse" data-target="#hotelOne<?= $rooms['RoomDetails']['id'] ?>" aria-expanded="true"
                                           aria-controls="hotelOne" class="card-anchor">
                                            <div class="card-header" id="hotel-1">
                                                <div class="row hotel-info align-items-center">
                                                    <div class="d-flex col-md-3 meal-info align-items-center" data-toggle="tooltip" data-placement="top" title="Room’s default meal plan">
                                                        <div class="meal-icon">
                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>"
                                                                 alt="" class="img-fluid">
                                                        </div>
                                                        <p class="mb-0"> <?= $rooms['RoomDetails']['mealPlan']['name'] ?> </p>
                                                    </div>

                                                    <div class="d-flex col-md-3 person-info  align-items-center" title="Property’s Infant & Child age policy. Tour Matrix automatically reclassifies children in the
enquiry as Child & Infant based on the property’s policy. ">
                                                        <div class="child-icon mr-1">
                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>"
                                                                 alt="" class="img-fluid">
                                                        </div>
                                                        <p class="mb-0 mr-1"> <?= $rooms['RoomDetails']['property']['complimentary_from_age'] . '-' . $rooms['RoomDetails']['property']['complimentary_to_age'] ?>
                                                            YR </p>
                                                        <div class="adult-icon mr-1">
                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>"
                                                                 alt="" class="img-fluid">
                                                        </div>
                                                        <p class="mb-0"> <?= $rooms['RoomDetails']['property']['child_rate_from_age'] . '-' . $rooms['RoomDetails']['property']['child_rate_to_age'] ?>
                                                            YR </p>
                                                    </div>

                                                    <div class="d-flex col-md-3 bed-info align-items-center">
                                                        <div class="bed-icon mr-1">
                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/bed.svg' ?>"
                                                                 alt="" class="img-fluid">
                                                        </div>
                                                        <p class="mb-0">
                                                            DB: <?= $rooms['RoomDetails']['number_of_adults'] ?> |
                                                            EB: <?= $rooms['RoomDetails']['number_of_extra_beds'] ?> |
                                                            SB:<?= $rooms['RoomDetails']['number_of_kids_on_sharing'] ?></p>
                                                    </div>

                                                    <div class="d-flex col-md-3 price justify-content-end align-items-center">
                                                        <div class="exact-price mr-1">
                                                            <p> ₹ <?= $rooms['total_rack_rate'] ?> </p>
                                                        </div>
                                                        <div class="offer-price mr-2">
                                                            <p> ₹ <?= $rooms['total_rate'] ?> </p>
                                                        </div>
                                                        <div class="accordion-caret">
                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/arrow-down.svg' ?>"
                                                                 alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div id="hotelOne<?= $rooms['RoomDetails']['id']?>" class="collapse " aria-labelledby="hotelOne"
                                             data-parent="#accordion-hotel">

                                            <?php foreach ($rooms['EnquiryDates'] as $key => $splitupAmount) { ?>
                                                <div class="check-active<?= $rooms['RoomDetails']['id']?><?=$key?> check-active-all<?= $rooms['RoomDetails']['id']?>  hotel-booking  mb-3 <?php if ($splitupAmount['selected'] === 0) { ?> active <?php } ?>">
                                                    <div class="table-responsive mb-2">
                                                        <table class="table table-sm table-borderless">
                                                            <tbody>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <!--                                                            <p> Day 1 | 10 Aug 2022 </p>-->
                                                                    <p>
                                                                        Day <?= $key + 1 . ' |' ?> <?= date('D', strtotime($splitupAmount['date'])) . ' | ' . date('d-M-y', strtotime($splitupAmount['date'])); ?> </p>
                                                                </td>
                                                                <td colspan="3">
                                                                    <div class="d-flex justify-content-center align-items-center">
                                                                        <p class="mr-1 mb-0"> In Enq: </p>
                                                                        <div class="meal-icon mr-1">
                                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>"
                                                                                 alt="" class="img-fluid">
                                                                        </div>

                                                                        <p class="mr-1 mb-0"> <?= $splitupAmount['enquiry_meal_plan'] ?> </p>
                                                                        <div class="adult-icon mr-1">
                                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>"
                                                                                 alt="" class="img-fluid">
                                                                        </div>

                                                                        <p class="mr-1 mb-0"> <?= $splitupAmount['EnquiryAdultCount'] ?> </p>
                                                                        <div class="adult-icon mr-1">
                                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>"
                                                                                 alt="" class="img-fluid">
                                                                        </div>
                                                                        <p class="mr-1 mb-0"> <?= $splitupAmount['EnquiryChildCount'] ?> </p>
                                                                    </div>
                                                                </td>
                                                                <td colspan="3">
                                                                    <div class="d-flex justify-content-center align-items-center">
                                                                        <p class="mr-1 mb-0"> In Tariff: </p>
                                                                        <div class="meal-icon mr-1">
                                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>"
                                                                                 alt="" class="img-fluid">
                                                                        </div>

                                                                        <p class="mr-1 mb-0"> <?= $splitupAmount['tariff_meal_plan'] ?> </p>
                                                                        <?php if ($splitupAmount['meal_plan_over_ride'] == true) {?>
                                                                        <div class="warning-icon mr-1">
                                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/warning.svg' ?>"
                                                                                 alt="" class="img-fluid">
                                                                        </div>
                                                                        <?php } ?>
                                                                        <div class="adult-icon mr-1">
                                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>"
                                                                                 alt="" class="img-fluid">
                                                                        </div>

                                                                        <p class="mr-1 mb-0"> <?= $splitupAmount['AdultCount'] ?> </p>
                                                                        <div class="adult-icon mr-1">
                                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>"
                                                                                 alt="" class="img-fluid">
                                                                        </div>

                                                                        <p class="mr-1 mb-0"> <?= $splitupAmount['ChildCount'] ?> </p>
                                                                        <div class="child-icon mr-1">
                                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>"
                                                                                 alt="" class="img-fluid">
                                                                        </div>
                                                                        <p class="mr-1 mb-0"> <?= $splitupAmount['infantCount'] ?> </p>
                                                                    </div>
                                                                </td>

                                                                <td class="table-action">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input id="hotel-result<?= $rooms['RoomDetails']['id'] ?><?= $splitupAmount['enquiryAccommodation_id'] ?>"
                                                                               type="checkbox" <?php if ($splitupAmount['selected'] === 0) { ?> checked <?php } ?>
                                                                               class="custom-control-input room-checkbox plan-<?= $rooms['RoomDetails']['id'] ?>" data-key="<?=$key?>" data-room-id="<?= $rooms['RoomDetails']['id'] ?>" data-accomodation-id="<?= $splitupAmount['enquiryAccommodation_id'] ?>"/>
                                                                        <label class="custom-control-label ml-1"
                                                                               for="hotel-result<?= $rooms['RoomDetails']['id'] ?><?= $splitupAmount['enquiryAccommodation_id'] ?>"> </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Rooms</td>
                                                                <td> EBA</td>
                                                                <td> CWB</td>
                                                                <td> CNB</td>
                                                                <td> SGL</td>
                                                                <td>
                                                                    <div class="d-flex justify-content-center align-items-center">
                                                                        <div class="child-icon mr-1">
                                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>"
                                                                                 alt="" class="img-fluid">
                                                                        </div>
                                                                        FOC
                                                                    </div>
                                                                </td>
                                                                <td> Dinner</td>
                                                                <td> Day Total</td>
                                                            </tr>
                                                            <tr>
                                                                <input hidden
                                                                       name="infant_Count<?= $splitupAmount['enquiryAccommodation_id'] ?>"
                                                                       id="infant_count<?= $splitupAmount['enquiryAccommodation_id'] ?>"
                                                                       value="<?php echo $splitupAmount['infantCount'] ?>">
                                                                <input hidden
                                                                       name="child_Count<?= $splitupAmount['enquiryAccommodation_id'] ?>"
                                                                       id="child_count<?= $splitupAmount['enquiryAccommodation_id'] ?>"
                                                                       value="<?php echo $splitupAmount['ChildCount'] ?>">

                                                                <input hidden
                                                                       name="adult_Count<?= $splitupAmount['enquiryAccommodation_id'] ?>"
                                                                       id="adult_count<?= $splitupAmount['enquiryAccommodation_id'] ?>"
                                                                       value="<?php echo $splitupAmount['AdultCount'] ?>">
                                                                <input hidden
                                                                       name="slab_id<?= $splitupAmount['enquiryAccommodation_id'] ?>"
                                                                       id="slab_id<?= $splitupAmount['enquiryAccommodation_id'] ?>"
                                                                       value="<?php echo $splitupAmount['slab_id'] ?>">

                                                                <td <a title="Base rate: <?= $splitupAmount['room_mouse_over'] ?> &#013;Day hike: <?= $splitupAmount['day_hike_mouse_over'] ?>&#013;Add on Meal: <?= $splitupAmount['meal_plan_adult_mouse_over'] ?>"><?= $splitupAmount['room'] ? $splitupAmount['room'] : 0 ?></a>   </td>
                                                                <td> <?= $splitupAmount['EBA'] ? $splitupAmount['EBA'] : 0 ?> </td>
                                                                <td> <?= $splitupAmount['CWB'] ? $splitupAmount['CWB'] : 0 ?> </td>
                                                                <td> <?= $splitupAmount['CNB'] ? $splitupAmount['CNB'] : 0 ?> </td>
                                                                <td> <?= $splitupAmount['SGL'] ? $splitupAmount['SGL'] : 0 ?> </td>
                                                                <td> <?= $splitupAmount['FOC'] ? $splitupAmount['FOC'] : 0 ?> </td>
                                                                <td> <?= $splitupAmount['mandatory_dinner'] ? $splitupAmount['mandatory_dinner'] : 0 ?> </td>
                                                                <td>
                                                                    ₹ <?= $splitupAmount['Total'] ? $splitupAmount['Total'] : 0 ?> </td>
                                                                <td class="table-action">
                                                                    <?php if (($splitupAmount['room'] ? substr($splitupAmount['room'], 0, strpos($splitupAmount['room'], "X")) : 0) > $rooms['RoomDetails']['count']) { ?>
                                                                    <div class="warning-icon m-auto">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/warning.svg' ?>"
                                                                             alt="" class="img-fluid">
                                                                    </div>
                                                                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row hotel-footer justify-content-between align-items-center m-0">
                                <div class="d-flex col-md-6 align-items-center mb-2">
                                    <div class="bed-icon mr-1">
                                        <img src="<?= Yii::$app->request->baseUrl . 'images/bed.svg' ?>" alt=""
                                             class="img-fluid">
                                    </div>
                                    <p class="mb-0"> 99 Rooms | 99 EBA | 99 CWB | 99 CNB | 99 SGL </p>
                                </div>
                                <?php if ($properties['man_dinner'] == true){ ?>
                                <div class="col-md-4 check-meal p-0 mb-2">
                                    <div class="custom-control custom-checkbox">
                                        <input checked id="include-meal1" type="checkbox" class="custom-control-input"/>
                                        <label class="custom-control-label ml-1" for="include-meal1"> Include Mandatory
                                            Dinner & Tax </label>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <?php
            }
            ?>

        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>



