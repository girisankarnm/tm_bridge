<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;
frontend\assets\CommonAsset::register($this);
frontend\assets\DatePickerAsset::register($this);
$this->registerCssFile('/css/search.css');
$this->registerJsFile('/js/search/index.js');
$this->registerJsFile('/js/search/search.js');
use yii\widgets\LinkPager;
$this->title = 'Search History';
?>

<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>


<div class="search-container">
    <div class="search-header mb-3">
        <h5 class="title">
            <a target="_blank" href="<?= Url::toRoute(['/enquiry/details', 'id' => $enquiry->id ]) ?>" class="text-link mb-2">
                <strong>  Enquiry Details </strong>
            </a> </h5>
        <div class="row search-header-filters justify-content-between align-items-center m-0">
            <div class="col-md-1 filter-main mb-2">
                <label for="enq"> ENQ </label>
                <p> <?= $enquiry->id ?> </p>
            </div>
            <input hidden type="text" name="enquiry_id" id="enquiry_id" class="form-control"
                   value="<?= $enquiry->id ?>">
            <div class="col-md-3 filter-main mb-2">
                <label for="name"> Guest Name </label>
                <!-- <input type="text" name="name" id="name" class="form-control"> -->
                <p><?= $enquiry->guest_name ?></p>
            </div>
            <div class="col-md-2 filter-main mb-2">
                <label for="checkIn"> Check-In </label>
                <!-- <input type="text" name="checkIn" id="checkIn" class="form-control datepicker" readOnly> -->
                <p> <?= date('d-M-Y', strtotime($enquiry->tour_start_date)) ?> </p>
            </div>
            <div class="col-md-2 filter-main mb-2">
                <label for="checkOut"> Check-Out </label>
                <!-- <input type="text" name="checkOut" id="checkOut" class="form-control datepicker" readOnly> -->
                <p> <?= date('d-M-Y', strtotime($enquiry->tour_start_date . ' + ' . $enquiry->tour_duration . 'days')) ?> </p>
            </div>
            <div class="col-md-3 filter-main mb-2">
                <label for="duration"> Stay Duration </label>
                <!-- <select name="duration" id="duration" class="select2 form-control browser-default">
                    <option value=""> 3 Nights (split stay) </option>
                </select> -->
                <p>  <?= $enquiry->tour_duration ?> Nights (split stay) </p>
            </div>
        </div>
    </div>

    <?php $form = ActiveForm::begin(['id' => 'enquiry_room_search', 'enableClientValidation' => true, 'method' => 'post', 'action' => ['search/create']]) ?>
    <input type="hidden" name="enquiryID" class="form-control" value="<?= $enquiry->id ?>">
    <div class="row search-content align-items-start">
        <div class="col-md-3 search-filter">
            <div class="filter-group">
                <div class="filter-input mb-2">
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

            <div class="filter-group">
                <button class="btn btn-filter text-white" type="submit"> Search </button>
            </div>
<div class="advanced-search" style="<?php if (!isset($_POST['destination'])) { ?> display: none <?php } ?>" >
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
                    <!-- <select name="Occupancy" id="Occupancy" class="select2 browser-default form-control" data-placeholder="Search Occupancy">
                        <option value=""></option>
                        <option value="calicut"> Calicut </option>
                    </select> -->
                    <input type="number" name="occupancy" id="occupancy" class="form-control" value="<?php if (isset($_POST['Occupancy'])) { ?> <?= $_POST['Occupancy'] ?> <?php } ?>">
                </div>
            </div>

            <div class="filter-group">
                <div class="filter-accordion accordion" id="accordionExample">

                        <div class="card">
                            <div class="card-header" id="heading-0">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-0" aria-expanded="true" aria-controls="collapse-0">
                                        Property Amenities
                                        <div class="float-right">
                                            <i class="fas fa-angle-down rotate-icon"></i>
                                        </div>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse-0" class="collapse " aria-labelledby="heading-0">
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
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input <?php if (isset($_POST['swimming_pool'])) { ?> checked <?php } ?> value="true" name="swimming_pool" id="swimming-pool" type="checkbox" class="custom-control-input"/>
                                        <label class="custom-control-label ml-1" for="swimming-pool"> Swimming pool </label>
                                    </div>

                                    <div class="custom-control custom-checkbox mb-2">
                                        <input <?php if (isset($_POST['restaurant'])) { ?> checked <?php } ?> value="true" name="restaurant" id="restaurant" type="checkbox" class="custom-control-input"/>
                                        <label class="custom-control-label ml-1" for="restaurant"> Restaurant </label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input <?php if (isset($_POST['parking'])) { ?> checked <?php } ?> value="true" name="parking" id="parking" type="checkbox" class="custom-control-input"/>
                                        <label class="custom-control-label ml-1" for="parking"> Parking </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="filter-group">
                <div class="filter-accordion accordion" id="accordionExample">

                        <div class="card">
                            <div class="card-header" id="heading-1">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        Room Amenities
                                        <div class="float-right">
                                            <i class="fas fa-angle-down rotate-icon"></i>
                                        </div>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse-1" class="collapse " aria-labelledby="heading-1">
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
</div>
        </div>
        <div class="col-md-9 search-main">
<!--            <h5 class="ml-1"> Property </h5>-->
            <div class="search-main-header mb-3">
                <div class="dropdown" onclick="$('#searchModal').modal('show');">
                    <a href="#" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="row search-periods dropdown-toggle align-items-center mb-2">
                            <div class="col-md-1 text-center">
                                <div class="calendar-icon">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/calendar.svg' ?>" alt="" class="img-fluid">
                                </div>
                            </div>

                            <div class="row col-md-10 align-items-center" id="selected-dates">

                                <?php foreach ($selectedEnqAccommodation as $selectedDate): ?>
                                    <div class="d-flex col-md-2 date-range justify-content-between text-center">
                                        <p>
                                            <strong> <?= date('d M Y', strtotime($selectedDate->day)) ?>  </strong>
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
                                <input value = "<?php if (isset($_POST['search_property']) && !empty($_POST['search_property'])) { ?><?= $_POST['search_property'] ?><?php } ?>" type="text" name="search_property" id="search_property" class="form-control" placeholder="Search property">
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
                                <img src="<?= Yii::$app->request->baseUrl . 'images/sort.svg' ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                        <input type="hidden" class="sort-value" name="sort_property">
                        <div class="dropdown-menu" aria-labelledby="sortMenuButton">
                            <a class="dropdown-item sort-dropdown-item" data-sort="F">Favourites</a>
                            <a class="dropdown-item sort-dropdown-item" data-sort="HP">Highest Price</a>
                            <a class="dropdown-item sort-dropdown-item" data-sort="LP">Lowest Price</a>
                            <a class="dropdown-item sort-dropdown-item" data-sort="HS">Highest Star</a>
                            <a class="dropdown-item sort-dropdown-item" data-sort="LS">Lowest Star</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row result-start justify-content-between align-items-center mb-2">
                <div class="col-md-4">
                    <h5 class="mb-1"> Results </h5>
                </div>
                <div class="d-flex col-md-3 justify-content-end align-items-center">
                    <h6><a target="_blank" href="<?= Url::toRoute(['/search/selectedproperty', 'enquiryID' => $enquiry->id,'destinationID' => $property_destinationID, ]) ?>" class="text-link mb-2">
                        <strong>  Selected Properties</strong>
                    </a></h6>
                    <div class="selected-count">
                        <h6> <?= $totalPropSelected ?>/10 </h6>
                    </div>
                </div>
            </div>
            <?php
            foreach ($searchResult as $properties) {
            ?>

            <div class="search-results mb-2">
                <div class="row result-header justify-content-between align-items-center m-0">
                    <div class="d-flex flex-col flex-md-row align-items-start">
                        <div class="result-name mr-4 mb-2">
                            <h5 class="name">
                                <strong>  <?= $properties['property']['name'] ?> </strong>
                            </h5>
                            <p class="address"> Kerala, India </p>
                        </div>
                        <div class="result-heading mb-2">
                            <div class="d-flex flex-md-row">
                                <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="Property type">
                                <p class="mr-2"><?= $properties['property']->propertyType->name ?> </p>
                                </div>
                                <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="Star rating as provided by the property.">

                                <p> <?= $properties['property']->propertyCategory->name ?> </p>
                                </div>
                            </div>
                            <div class="d-flex flex-md-row">
<!--                                <div class="mr-2"> <i class="fa-solid fa-smoking"></i> </div>-->
                                <div class="mr-2">
                                    <?php if(($properties['property']->smoking_policy_id) != 3):?>

                                    <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="<?= $properties['property']->smokingPolicy->name ?>">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/smoking.png' ?>" alt="smoking.png" class="img-fluid">
                                    </div>
                                    <?php else: ?>
                                    <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="<?= $properties['property']->smokingPolicy->name ?>">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/nosmoking.png' ?>" alt="smoking.png" class="img-fluid">
                                    </div>
                                    <?php endif ?>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="<?= $properties['property']->petsPolicy->name ?>">
                                    <?php if(($properties['property']->pets_policy_id) != 3):?>
                                        <img src="<?= Yii::$app->request->baseUrl . 'images/petsallowed.png' ?>" alt="smoking.png" class="img-fluid">
                                    <?php else: ?>
                                        <img src="<?= Yii::$app->request->baseUrl . 'images/nopets.png' ?>" alt="smoking.png" class="img-fluid">
                                    <?php endif ?>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="d-flex col-md-1 result-action justify-content-between align-items-center p-0">

                        <div class="favorite-icon">
                            <input data-property-id="<?= $properties['property']['id'] ?>" type="checkbox" class="btn-favorite favorite fav-check<?= $properties['property']['id'] ?>" id="favorite-2<?= $properties['property']['id'] ?>" <?php if ($properties['favourite'] == true) {?> Checked <?php } ?> />
                            <label for="favorite-2<?= $properties['property']['id'] ?>">
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
                <?php
                foreach ($properties['property_rooms'] as $rooms) {
                ?>
                <div class="result-content">
                    <div class="row content-heading justify-content-between align-items-center">
                        <div class="col-md-6 result-title">
                            <a target="_blank" href="<?= Url::toRoute(['/profile/propertyprofile', 'room_id' => $rooms['RoomDetails']['id'],'property_id' => $rooms['RoomDetails']['property']['id'], ]) ?>" class="title text-link">
                                <strong> <?= $rooms['RoomDetails']['name'] ?> </strong>
                            </a>
                        </div>

                        <div class="d-flex col-md-2 result-data">
                            <?php if ($rooms['selectionStatus'] === 0) {?>
                            <div class="custom-control custom-checkbox">
                                <input value="<?= $rooms['RoomDetails']['id'] ?>" id="selected-plan<?= $rooms['RoomDetails']['id'] ?>" type="checkbox" class="custom-control-input mr-1 room-check-box"/>
                                <label class="custom-control-label ml-1" for="selected-plan<?= $rooms['RoomDetails']['id'] ?>"> <?php echo count($rooms['EnquiryDates']) ?> Days Stay </label>
                            </div>
                            <?php }   if ($rooms['selectionStatus'] === 1) { ?>
                                <p class="mr-1" for="selected-plan2"> <?php echo count($rooms['EnquiryDates']) ?> Days Stay </p>
                                <div class="selection-progress" id="fully-checked<?= $rooms['RoomDetails']['id'] ?>">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/fully-check.png' ?>" alt="" class="img-fluid">
                                </div>
                            <?php } if ($rooms['selectionStatus'] === 2) {?>
                                <p class="mr-1" for="selected-plan2"> <?php echo count($rooms['EnquiryDates']) ?> Days Stay </p>
                                <div class="selection-progress">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/partially-checked.png' ?>" alt="" class="img-fluid">
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                    <div class="result-hotel">
                        <div class="filter-accordion accordion" id="accordion-hotel2">
                            <div class="card mb-0">
                                <a data-toggle="collapse" data-target="#hotelTwo<?= $rooms['RoomDetails']['id'] ?>" aria-expanded="true" aria-controls="hotelTwo" class="card-anchor">
                                    <div class="card-header" id="hotel-1">
                                        <div class="row hotel-info align-items-center">
                                            <div class="d-flex col-md-3 meal-info align-items-center mb-2" data-toggle="tooltip" data-placement="top" title="Room’s default meal plan. If meal specified in enquiry is less than default plan, Tour Matrix automatically overrides and applies the room’s default meal plan to enquiry. ">
                                                <div class="meal-icon">
                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>" alt="" class="img-fluid">
                                                </div>
                                                <p class="mb-0"> <?= $rooms['RoomDetails']['mealPlan']['name'] ?> </p>
                                            </div>

                                            <div class="d-flex col-md-3 person-info  align-items-center mb-2" data-toggle="tooltip" data-placement="top" title="Property’s Infant & Child age policy. Tour Matrix automatically reclassifies children in the enquiry as Child & Infant based on the property’s policy.">
                                                <div class="child-icon mr-1">
                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                </div>
                                                <p class="mb-0 mr-1"> <?= $rooms['RoomDetails']['property']['complimentary_from_age'] . '-' . $rooms['RoomDetails']['property']['complimentary_to_age'] ?> YR </p>
                                                <div class="adult-icon mr-1">
                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                </div>
                                                <p class="mb-0"> <?= $rooms['RoomDetails']['property']['child_rate_from_age'] . '-' . $rooms['RoomDetails']['property']['child_rate_to_age'] ?> YR </p>
                                            </div>

                                            <div class="d-flex col-md-3 bed-info align-items-center mb-2" data-toggle="tooltip" data-placement="top" title="7 Room’s maximum occupancy capacity. DB: Default beds in the room | EB: Extra beds allowed in room | SB: Children allowed on bed sharing basis.">
                                                <div class="bed-icon mr-1">
                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/bed.svg' ?>" alt="" class="img-fluid">
                                                </div>
                                                <p class="mb-0">  DB: <?= $rooms['RoomDetails']['number_of_adults'] ?> |
                                                    EB: <?= $rooms['RoomDetails']['number_of_extra_beds'] ?> |
                                                    SB:<?= $rooms['RoomDetails']['number_of_kids_on_sharing'] ?></p>
                                            </div>

                                            <div class="col-md-3 price-contr mb-mb-2">
                                                <div class="d-flex price justify-content-end align-items-center">
                                                    <div class="exact-price mr-1" data-toggle="tooltip" data-placement="top" title="Tariff based on room’s published Rack Rate for total stay duration.">
                                                        <p> ₹ <?= $rooms['total_rack_rate'] ?> </p>
                                                    </div>
                                                    <div class="offer-price mr-2" data-toggle="tooltip" data-placement="top" title="Tariff based on special rate for Tour Operators for total stay duration.">
                                                        <p> ₹ <?= $rooms['total_rate'] ?> </p>
                                                    </div>
                                                    <div class="accordion-caret">
                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/arrow-down.svg' ?>" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div id="hotelTwo<?= $rooms['RoomDetails']['id']?>" class="collapse" aria-labelledby="hotelTwo" data-parent="#accordion-hotel2">

                                    <?php foreach ($rooms['EnquiryDates'] as $key => $splitupAmount) { ?>
                                    <div class="check-active<?= $rooms['RoomDetails']['id']?><?=$key?> check-active-all<?= $rooms['RoomDetails']['id']?>  hotel-booking  mb-3 <?php if ($splitupAmount['selected'] === 0) { ?> active <?php } ?>">
                                        <div class="table-responsive mb-2">
                                            <table class="table table-sm table-borderless">
                                                <tbody>
                                                <tr>
                                                    <td colspan="2">
                                                        <p> Day <?= $key + 1 . ' |' ?> <?= date('D', strtotime($splitupAmount['date'])) . ' | ' . date('d-M-y', strtotime($splitupAmount['date'])); ?> </p>
                                                    </td>
                                                    <td colspan="3">
                                                        <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="Meal Plan, Pax Count (Adult & Child) as specified in enquiry.">
                                                            <p class="mr-1 mb-0"> In Enq: </p>
                                                            <div class="meal-icon mr-1">
                                                                <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>" alt="" class="img-fluid">
                                                            </div>

                                                            <p class="mr-1 mb-0"> <?= $splitupAmount['enquiry_meal_plan'] ?> </p>
                                                            <div class="adult-icon mr-1">
                                                                <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                            </div>

                                                            <p class="mr-1 mb-0"> <?= $splitupAmount['EnquiryAdultCount'] ?> </p>
                                                            <div class="adult-icon mr-1">
                                                                <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                            </div>
                                                            <p class="mr-1 mb-0"> <?= $splitupAmount['EnquiryChildCount'] ?> </p>
                                                        </div>
                                                    </td>
                                                    <td colspan="3">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <p class="mr-1 mb-0"> In Tariff: </p>
                                                            <div class="meal-icon mr-1" data-toggle="tooltip" data-placement="top" title="Meal plan on which the room’s tariff for the day is calculated.">
                                                                <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>" alt="" class="img-fluid">
                                                            </div>

                                                            <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="Meal plan in enquiry has been overridden by room’s default meal plan.">
                                                                <p class="mr-1 mb-0"> <?= $splitupAmount['tariff_meal_plan'] ?> </p>
                                                                <?php if ($splitupAmount['meal_plan_over_ride'] == true) {?>
                                                                    <div class="warning-icon mr-1">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/warning.svg' ?>"
                                                                             alt="" class="img-fluid">
                                                                    </div>
                                                                <?php } ?>
                                                                <div class="adult-icon mr-1">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                </div>
                                                            </div>

                                                            <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="Children in enquiry reclassified as Infant & Child based on the property’s policy.">
                                                                <p class="mr-1 mb-0"> <?= $splitupAmount['AdultCount'] ?> </p>
                                                                <div class="adult-icon mr-1">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                </div>
                                                                <p class="mr-1 mb-0"> <?= $splitupAmount['ChildCount'] ?> </p>
                                                                <div class="child-icon mr-1">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                                </div>
                                                                <p class="mr-1 mb-0"> <?= $splitupAmount['infantCount'] ?> </p>
                                                            </div>
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
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="active">
                                                        <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="Rooms required X Rate per room">
                                                            Rooms
                                                        </div>
                                                    </td>

                                                    <td class="active">
                                                        <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="Extra bed for adults X Rate per extra bed ">
                                                        EBA
                                                        </div>
                                                    </td>
                                                    <td class="active">
                                                        <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="Extra bed for adults X Rate per extra bed ">
                                                            CWB
                                                        </div>
                                                    </td>
                                                    <td class="active">
                                                        <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="Children on bed sharing basis X rate per child ">
                                                            CNB
                                                        </div>
                                                    </td>
                                                    <td class="active">
                                                        <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="Rooms on single occupancy X Rate per room ">
                                                            SGL
                                                        </div>
                                                    </td>
                                                    <td class="active">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <div class="child-icon mr-1">
                                                                <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                            </div>
                                                            <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="Infants on complimentary basis">
                                                                FOC
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="active">
                                                        <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="Cost of mandatory dinner for the day less discount if meal plan is on MAP | AP basis ">
                                                            Inclusion
                                                        </div>
                                                    </td>
                                                    <td class="active">
                                                        <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="Extra bed for adults X Rate per extra bed ">
                                                            Day Total
                                                        </div>
                                                    </td>
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
                                                    <td>
                                                    <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" data-html="true" title="Base rate: <?= $splitupAmount['room_mouse_over'] ?> <br> Day hike: <?= $splitupAmount['room_day_hike_mouse_over'] ?> <br> Add on Meal: <?= $splitupAmount['meal_plan_adult_mouse_over'] ?>">
                                                        <?= $splitupAmount['room'] ? $splitupAmount['room'] : 0 ?>
                                                        <input hidden id="room-value<?= $rooms['RoomDetails']['id']?><?= $splitupAmount['enquiryAccommodation_id'] ?>" value="<?= $splitupAmount['room'] ? $splitupAmount['room_value'] : 0 ?>">
                                                    </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" data-html="true" title="Base rate: <?= $splitupAmount['eba_mouse_over'] ?> <br> Day hike: <?= $splitupAmount['eba_day_hike_mouse_over'] ?> <br> Add on Meal: <?= $splitupAmount['meal_plan_adult_mouse_over'] ?>">
                                                            <?= $splitupAmount['EBA'] ? $splitupAmount['EBA'] : 0 ?>
                                                            <input hidden id="eba-value<?= $rooms['RoomDetails']['id']?><?= $splitupAmount['enquiryAccommodation_id'] ?>" value="<?= $splitupAmount['EBA'] ? $splitupAmount['EBA_value'] : 0 ?>">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" data-html="true" title="Base rate: <?= $splitupAmount['cwb_mouse_over'] ?> <br> Day hike: <?= $splitupAmount['cwb_day_hike_mouse_over'] ?> <br> Add on Meal: <?= $splitupAmount['meal_plan_child_mouse_over'] ?>">
                                                            <?= $splitupAmount['CWB'] ? $splitupAmount['CWB'] : 0 ?>
                                                            <input hidden id="cwb-value<?= $rooms['RoomDetails']['id']?><?= $splitupAmount['enquiryAccommodation_id'] ?>" value="<?= $splitupAmount['CWB'] ? $splitupAmount['CWB_value'] : 0 ?>">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" data-html="true" title="Base rate: <?= $splitupAmount['cnb_mouse_over'] ?> <br> Day hike: <?= $splitupAmount['cnb_day_hike_mouse_over'] ?> <br> Add on Meal: <?= $splitupAmount['meal_plan_child_mouse_over'] ?>">
                                                            <?= $splitupAmount['CNB'] ? $splitupAmount['CNB'] : 0 ?>
                                                            <input hidden id="cnb-value<?= $rooms['RoomDetails']['id']?><?= $splitupAmount['enquiryAccommodation_id'] ?>" value="<?= $splitupAmount['CNB'] ? $splitupAmount['CNB_value'] : 0 ?>">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" data-html="true" title="Base rate: <?= $splitupAmount['sgl_mouse_over'] ?> <br> Day hike: <?= $splitupAmount['sgl_day_hike_mouse_over'] ?> <br> Add on Meal: <?= $splitupAmount['meal_plan_adult_mouse_over'] ?>">
                                                            <?= $splitupAmount['SGL'] ? $splitupAmount['SGL'] : 0 ?>
                                                            <input hidden id="sgl-value<?= $rooms['RoomDetails']['id']?><?= $splitupAmount['enquiryAccommodation_id'] ?>" value="<?= $splitupAmount['SGL'] ? $splitupAmount['SGL_value'] : 0 ?>">
                                                        </div>
                                                    </td>
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

                                    <div class="d-flex hotel-charge justify-content-md-end align-items-center mt-2">
                                        <P class="title mr-2"> Grand Total </P>
                                        <p class="total-value"> ₹ <?= $rooms['total_rate'] ?> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row hotel-footer justify-content-between align-items-center m-0">

                        <div class="col-md-4 check-meal p-0 mb-2">
                            <div class="custom-control custom-checkbox">
                                <input checked disabled id="include-meal2" type="checkbox" class="custom-control-input"/>
                                <label class="custom-control-label ml-1" for="include-meal2">   <?php if ($properties['man_dinner'] == true){ ?>Include Mandatory Dinner & Tax  <?php } else {?> Tax Included <?php }?> </label>
                            </div>
                        </div>

                    </div>
                </div>

                    <?php
                }
                ?>
            </div>


                <?php
            }
            ?>
        <input hidden value="<?= $page ?>" id="page_no" name="page_no">
        <?php if ($TotalPages > 1) : ?>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item <?php if ($page == 1) :?>disabled <?php endif; ?> ">
                    <a onclick="pagination(<?= ($page - 1) ?>)" class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <?php  for ($i=1; $i<=$TotalPages; $i++) { ?>
                    <li class="page-item <?php if ($page == $i) :?>active <?php endif; ?>"><a onclick="pagination(<?= $i ?>)" class="page-link" href="#"><?= $i ?></a></li>
                <?php } ?>
                <li class="page-item <?php if ($page == $TotalPages) :?>disabled <?php endif; ?> ">
                    <a onclick="pagination(<?= ($page + 1) ?>)" class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
        <?php endif; ?>
        </div>
    </div>
    <div class="modal searchModal fade" id="searchModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content destination-days">
                <div class="modal-header">
                    <h6 class="title"> Select days on which property is required @ <span
                                id="destination-title"> <?= $property_destination_name ?> </span> </h6>
<!--                    <p> Destination1 : XXXX </p>-->
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
                </div>
                <div class="modal-footer">
                    <div class="d-flex destination-action justify-content-end align-items-center w-100">
<!--                        <button class="btn btn-cancel mr-2" data-dismiss="modal"> Cancel </button>-->
                        <button class="btn btn-apply btn-lg"> Apply and Submit </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>
<script>
    function pagination(pageNo){
        // alert(pageNo);
        $("#page_no").val(pageNo);
        $( "#enquiry_room_search" ).submit();
    }

</script>
