<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
$this->registerCssFile('/css/property/room_categories.css');
$this->registerCssFile('/css/property/amenities.css');
$this->registerJsFile('/js/property/amenities/index.js');
?>

<h5 class="title"> Room Category </h5>

<div class="tab-section amenities_contr">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="btn nav-link" id="pills-basic-tab" href="#pills-basic"> Rules & Policies
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn nav-link" id="pills-contact-tab" href="#pills-contact"> Room Category </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn nav-link active text-white" id="pills-guest-tab" href="#pills-guest"> Service & Amenities </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn nav-link" id="pills-accommodation-tab" href="#pills-accommodation"> Property pictures
            </button>
        </li>
    </ul>

    <div class="tab-content amenities-contr" id="pills-tabContent">
        <div class="tab-pane fade active show">
            <div class="amenities-content">
                <div class="accordion" id="myAccordion">
                    <div class="accordion-item">
                        <button type="button" class="btn accordion-top text-left" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Complimentary
                        </button>
                        <div id="collapseOne" class="collapse show" data-parent="#myAccordion">
                            <div class="accordion-content">
                                <p> Complimentary services / products are those given by your property to guests free cost. It is a great way to attract guests and make them feel agt home !! you may enter up to 10 complimentary items offered by your  property. These will be displayed in your profile section and can be viewed by all guests. </p>

                                <p> Note : Complimentary pickup & drop is a searchable item and as such must be entered under Property Amenities section. </p>

                                <div class="form-group form-checkbox">
                                    <div class="form-material">
                                        <input type="checkbox" name="" id="cancellation-policy" class="form-input-checkbox">
                                        <label for="cancellation-policy">
                                            <strong> Cancellation Policy has Period Based Rates </strong>
                                        </label>
                                    </div>
                                </div>

                                <div class="complimentary-list">
                                    <div class="form-group">
                                        <div class="form-material">
                                            <input type="text" name="" id="" class="form-control" placeholder="Amenities">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex add-items add-complimentary add-button align-items-center mb-2" role="button">
                                    <div class="add-icon mr-1">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <p class="mb-0"> Add more </p>
                                </div>
                            </div>
                            <button class="btn btn-primary"> Save </button>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button type="button" class="btn accordion-top text-left collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2.  Property Amenities
                        </button>
                        <div id="collapseTwo" class="collapse" data-parent="#myAccordion">
                            <div class="accordion-content">
                                <p>
                                    <strong> Property Features </strong>
                                </p>

                                <div class="form-group form-checkbox">
                                    <div class="form-material">
                                        <input type="checkbox" name="" id="swimming-pool" class="form-input-checkbox">
                                        <label for="swimming-pool">
                                            <strong> Swimming Pool </strong>
                                        </label>
                                    </div>
                                </div>

                                <div class="swimming-details mb-4">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <p> Number of Pools </p>
                                        </div>

                                        <div class="col-10">
                                            <div class="form-group">
                                                <input type="text" name="" id="" class="form-control input-sm">
                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <p> Pool Type </p>
                                        </div>

                                        <div class="d-flex col-10 align-items-center">
                                            <div class="form-group form-checkbox mr-4">
                                                <div class="form-material">
                                                    <input type="checkbox" name="" id=indoor-type" class="form-input-checkbox">
                                                    <label for=indoor-type">
                                                        Indoor
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group form-checkbox mr-4">
                                                <div class="form-material">
                                                    <input type="checkbox" name="" id="OutDoor-type" class="form-input-checkbox">
                                                    <label for="OutDoor-type">
                                                        Out Door
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group form-checkbox mr-4">
                                                <div class="form-material">
                                                    <input type="checkbox" name="" id="roof-type" class="form-input-checkbox">
                                                    <label for="roof-type">
                                                        Roof Top
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group form-checkbox mr-4">
                                                <div class="form-material">
                                                    <input type="checkbox" name="" id="infinity-type" class="form-input-checkbox">
                                                    <label for="infinity-type">
                                                        Infinity
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary mb-4"> Save </button>

                                <div class="form-group form-checkbox">
                                    <div class="form-material">
                                        <input type="checkbox" name="" id=restaurant-type" class="form-input-checkbox">
                                        <label for=restaurant-type" class="mb-0">
                                            Restaurant
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group form-checkbox">
                                    <div class="form-material">
                                        <input type="checkbox" name="" id=parking-type" class="form-input-checkbox">
                                        <label for=parking-type" class="mb-0">
                                            Parking
                                        </label>
                                    </div>
                                </div>

                                <p>
                                    <strong> Accessibility </strong>
                                </p>

                                <div class="d-flex accessibility-contr align-items-center mb-2">
                                    <div class="form-group form-checkbox mr-2">
                                        <div class="form-material">
                                            <input type="checkbox" name="" id=wheelChair-type" class="form-input-checkbox">
                                            <label for=wheelChair-type" class="mb-0">
                                                Wheel Chair
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group form-checkbox">
                                        <div class="form-material">
                                            <select name="type" id="type" class="select2 w-75" data-placeholder="Type">
                                                <option value=""></option>
                                                <option value="type-1"> Type 1 </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex accessibility-contr align-items-center mb-2">
                                    <div class="form-group form-checkbox mr-2">
                                        <div class="form-material">
                                            <input type="checkbox" name="" id=differently-type" class="form-input-checkbox">
                                            <label for=differently-type" class="mb-0">
                                                Pathway for differently abled
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group form-checkbox">
                                        <div class="form-material">
                                            <select name="type" id="type1" class="select2 w-75" data-placeholder="Type">
                                                <option value=""></option>
                                                <option value="type-1"> Type 1 </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary mb-4"> Save </button>

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button type="button" class="btn accordion-top text-left collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3. Room Amenities
                        </button>
                        <div id="collapseThree" class="collapse" data-parent="#myAccordion">
                            <div class="accordion-content">
                                <div class="room-categories">
                                    <?php foreach(range(1, 2) as $index => $item) : ?>
                                        <div class="d-flex category-item <?= $index === 0 ? 'active' : false ?> justify-content-between align-items-start mb-4">
                                            <div class="d-flex align-items-start">
                                                <div class="categories-icon mr-2">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                                <div class="item">
                                                    <h6 class="categories-title"> Standard Room </h6>
                                                    <div class="d-flex item-content justify-content-between align-items-center">
                                                        <div class="d-flex features-list align-items-center">
                                                            <div class="action-icon mr-1">
                                                                <img src="<?= Yii::$app->request->baseUrl . 'images/peoples.svg' ?>" alt="" class="img-fluid">
                                                            </div>
                                                            <p class="value mb-0 mr-4"> Occupancy:  AD: <span> 2 </span>   EB: <span> 1 </span>   SB: <span> 1 </span> </p>
                                                            <p class="value mb-0 mr-4"> Meal: AP (B + L + D) </p>
                                                            <p class="value mb-0"> 10 Keys </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex status-list align-items-center align-self-end">
                                                <div class="edit-icon item mr-2">
                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/edit-icon.svg' ?>" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <p>
                                    <strong> Room Features </strong>
                                </p>

                                <div class="row align-items-center mb-4">
                                    <div class="col-2">
                                        <div class="form-group form-checkbox">
                                            <div class="form-material">
                                                <input type="checkbox" name="" id="air-condition" class="form-input-checkbox">
                                                <label for="air-condition" class="mb-0">
                                                    Air Condition
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <select name="" id="" class="select2" data-placeholder="Type 1">
                                            <option value=""></option>
                                            <option value="1"> Value 1 </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row align-items-center mb-4">
                                    <div class="col-2">
                                        <div class="form-group form-checkbox">
                                            <div class="form-material">
                                                <input type="checkbox" name="" id="water-heater" class="form-input-checkbox">
                                                <label for="water-heater" class="mb-0">
                                                    Water Heater
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <select name="" id="" class="select2" data-placeholder="Type 1">
                                            <option value=""></option>
                                            <option value="1"> Value 1 </option>
                                        </select>
                                    </div>
                                </div>

                                <p>
                                    <strong> Media & Tech </strong>
                                </p>

                                <div class="row align-items-center mb-4">
                                    <div class="col-2">
                                        <div class="form-group form-checkbox">
                                            <div class="form-material">
                                                <input type="checkbox" name="" id="internet" class="form-input-checkbox">
                                                <label for="internet" class="mb-0">
                                                    Internet
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <select name="" id="" class="select2" data-placeholder="Type 1">
                                            <option value=""></option>
                                            <option value="1"> Value 1 </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row align-items-center mb-4">
                                    <div class="col-2">
                                        <div class="form-group form-checkbox">
                                            <div class="form-material">
                                                <input type="checkbox" name="" id="Wifi" class="form-input-checkbox">
                                                <label for="Wifi" class="mb-0">
                                                    Wifi
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <select name="" id="" class="select2" data-placeholder="Type 1">
                                            <option value=""></option>
                                            <option value="1"> Value 1 </option>
                                        </select>
                                    </div>
                                </div>

                                <p>
                                    <strong> Media & Tech </strong>
                                </p>

                                <div class="row align-items-center mb-4">
                                    <div class="col-2">
                                        <div class="form-group form-checkbox">
                                            <div class="form-material">
                                                <input type="checkbox" name="" id="internet" class="form-input-checkbox">
                                                <label for="internet" class="mb-0">
                                                    Accessibility
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <select name="" id="" class="select2" data-placeholder="Type 1">
                                            <option value=""></option>
                                            <option value="1"> Value 1 </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row align-items-center mb-4">
                                    <div class="col-2">
                                        <div class="form-group form-checkbox">
                                            <div class="form-material">
                                                <input type="checkbox" name="" id="Wifi" class="form-input-checkbox">
                                                <label for="Wifi" class="mb-0">
                                                    Wifi
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <select name="" id="" class="select2" data-placeholder="Type 1">
                                            <option value=""></option>
                                            <option value="1"> Value 1 </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="d-flex accessibility-contr align-items-center mb-2">
                                    <div class="form-group form-checkbox mr-2">
                                        <div class="form-material">
                                            <input type="checkbox" name="" id=wheelChair-type-amenities" class="form-input-checkbox">
                                            <label for=wheelChair-type-amenities" class="mb-0">
                                                Wheel Chair
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group form-checkbox">
                                        <div class="form-material">
                                            <select name="type" id="type" class="select2 w-75" data-placeholder="Type">
                                                <option value=""></option>
                                                <option value="type-1"> Type 1 </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex accessibility-contr align-items-center mb-2">
                                    <div class="form-group form-checkbox mr-2">
                                        <div class="form-material">
                                            <input type="checkbox" name="" id=differently-type-amenities" class="form-input-checkbox">
                                            <label for=differently-type-amenities" class="mb-0">
                                                Pathway for differently abled
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group form-checkbox">
                                        <div class="form-material">
                                            <select name="type" id="type1" class="select2 w-75" data-placeholder="Type">
                                                <option value=""></option>
                                                <option value="type-1"> Type 1 </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary"> Save </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
