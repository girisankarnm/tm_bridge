<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use frontend\models\property\PropertyAmenity;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use frontend\models\property\RoomAmenitySuboption;
use frontend\models\property\RoomAmenity;
$this->registerCssFile('/css/property/room_categories.css');
$this->registerCssFile('/css/property/amenities.css');
$this->registerJsFile('/js/property/amenities/index.js');
$this->registerJsFile('/js/property/amenities/services_amenities.js');
?>


<h5 class="title"> Room Category </h5>

<div class="tab-section amenities_contr">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button onclick="location.href='<?= Url::toRoute(['property/rules','id' => $property->id]) ?>'" class="tablinks" id="pills-basic-tab" href="#pills-basic"> Rules & Policies
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button onclick="location.href='<?= Url::toRoute(['property/categories','id' => $property->id]) ?>'" class="tablinks" id="pills-contact-tab" href="#pills-contact"> Room Category </button>
        </li>
        <li class="nav-item" role="presentation">
            <button onclick="location.href='<?= Url::toRoute(['property/serviceamenities','id' => $property->id]) ?>'" class="selectedButton" id="pills-guest-tab" href="#pills-guest"> Service & Amenities </button>
            <hr class="new5" >
        </li>
        <li class="nav-item" role="presentation">
            <button onclick="location.href='<?= Url::toRoute(['property/pictures','id' => $property->id]) ?>'" class="tablinks" id="pills-accommodation-tab" href="#pills-accommodation"> Property pictures
            </button>
        </li>
    </ul>

    <div class="tab-content amenities-contr" id="pills-tabContent">
        <div class="tab-pane fade active show">
            <div class="amenities-content">
                <input type="hidden" id="property_id" name="property_id" value=<?= $property->id ?>>
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
                                        <input type="checkbox" name="" id="complimentary_service" class="form-input-checkbox" <?= $property->have_complimentary_services == 1 ? "checked" : ""; ?>>
                                        <label for="complimentary_service">
                                            <strong> Cancellation Policy has Period Based Rates </strong>
                                        </label>
                                    </div>
                                </div>

                                <div id="complimentary_list" style="display: <?= $property->have_complimentary_services == 1 ? "block;" : "none;"; ?>">
                                <div class="complimentary-list" id="complimentary_data">

                                    <?php if ( count($property->propertyComplimentaryAmenities) > 0 ) { ?>
                                        <?php $i = 0; ?>
                                    <?php foreach ($property->propertyComplimentaryAmenities as $amenity) {?>

                                            <div class="d-flex form-group complimentary-item align-items-center">
                                                <div class="form-material w-100 mr-2">
                                                    <input value="<?= $amenity->name?>" type="text" name="complimentary_input[]" id="" class="form-control w-100" placeholder="Amenities">
                                                </div>
                                                <?php if ($i > 0) : ?>
                                                <div class="d-flex remove-complimentary align-self-start" role="button">
                                                    <div class="delete-icon my-1">
                                                        <img  src="<?= Yii::$app->request->baseUrl . 'images/minus.svg' ?>" alt="" class="img-fluid">

                                                    </div>
                                                </div>
                                              <?php endif; ?>
                                            </div>

                                    <?php $i++; } ?>
                                    <?php } else { ?>

                                    <div class="form-group">
                                        <div class="form-material">
                                            <input type="text" name="complimentary_input[]" id="" class="form-control" placeholder="Amenities">
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>

                                <div class="d-flex add-items add-complimentary add-button align-items-center mb-2" role="button">
                                    <div class="add-icon mr-1">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <p class="mb-0"> Add more </p>
                                </div>
                                </div>
                            </div>
                            <button id="save_complimentary" class="btn btn-primary"> Save </button>
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
                                        <input <?= $property->have_swimming_pool == 1 ? "checked" : ""; ?> type="checkbox" name="" id="swimming_pool" class="form-input-checkbox">
                                        <label for="swimming_pool">
                                            <strong> Swimming Pool </strong>
                                        </label>
                                    </div>
                                </div>
                                <div id="sm_div" class="mb-4" style="display: <?= $property->have_swimming_pool == 1 ? "block;" : "none;"; ?>">

                                <div class="swimming-details mb-4">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <p> Number of Pools </p>
                                        </div>

                                        <div class="col-10">
                                            <div class="form-group">
                                                <input value="<?= $swimming_pool->count ?>" type="text" name="PropertySwimmingPool[count]" id="propertyswimmingpool-count" class="form-control input-sm">
                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <p> Pool Type </p>
                                        </div>

                                        <div class="d-flex col-10 align-items-center">

                                        <?php foreach ($pool_types as $pool_type):?>

                                            <div class="form-group form-checkbox mr-4">
                                                <div class="form-material">
                                                    <input type="checkbox" name="pool_type[]" id="<?php echo $pool_type->id ?>" class="form-input-checkbox" value="<?php echo $pool_type->id ?>" name="pool_type[]" <?php echo in_array($pool_type->id, $type_id_list) ? "checked" : ""   ?>>
                                                    <label for="<?php echo $pool_type->id ?>">
                                                        <?php echo $pool_type->name; ?>
                                                    </label>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>

                                        </div>
                                    </div>
                                </div>
                                </div>

                                <button class="btn btn-primary mb-4" id="save_swimming_pool"> Save </button>

                                <div class="form-group form-checkbox">
                                    <div class="form-material">
                                        <input <?= $property->have_restaurant == 1 ? "checked" : ""; ?> type="checkbox" name="" id="restaurant" class="form-input-checkbox">
                                        <label for="restaurant">
                                            <strong> Swimming Pool </strong>
                                        </label>
                                    </div>
                                </div>
                                <div id="rs_div" class="mb-4" style="display: <?= $property->have_restaurant == 1 ? "block;" : "none;"; ?>">

                                <div class="swimming-details mb-4">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <p> Number of Restaurants </p>
                                        </div>

                                        <div class="col-10">
                                            <div class="form-group">
                                                <input value="<?= $restaurant->count ?>" type="text" name="PropertyRestaurant[count]" id="propertyrestaurant-count" class="form-control input-sm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <p> Food Options </p>
                                        </div>

                                        <div class="col-5">
                                            <div class="form-group">
                                                <select multiple id="food_options" name="food_option[]"  class="select2 w-75" data-placeholder="Type">
                                                    <?php foreach ($restaurant_food_options as $food):?>
                                                        <option value="<?php echo $food->id ?>" <?php echo in_array($food->id, $selected_food_options) ? "selected='selected'" : ""   ?>><?php echo $food->name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <p> Cuisine Options </p>
                                        </div>

                                        <div class="col-5">
                                            <div class="form-group">
                                                <select id="cuisine_options" name="cuisine_option[]" multiple  class="select2 w-75" data-placeholder="Type">
                                                    <?php foreach ($restaurant_cuisine_options as $cuisine):?>
                                                        <option value="<?php echo $cuisine->id ?>" <?php echo in_array($cuisine->id, $selected_cuisine_options) ? "selected='selected'" : ""   ?>><?php echo $cuisine->name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <button id="save_restaurant" class="btn btn-primary mb-4"> Save </button>

                                <div class="form-group form-checkbox">
                                    <div class="form-material">
                                        <input <?= $property->have_parking == 1 ? "checked" : ""; ?> type="checkbox" name="" id="parking" class="form-input-checkbox">
                                        <label for="parking">
                                            <strong> Parking </strong>
                                        </label>
                                    </div>
                                </div>
                                <div id="pk_div" class="mb-4" style="display: <?= $property->have_parking == 1 ? "block;" : "none;"; ?>">
                                    <div class="swimming-details mb-4">
                                        <div class="row align-items-center">
                                            <div class="col-2">
                                                <p> Type of Parking </p>
                                            </div>
                                            <div class="d-flex col-10 align-items-center">

                                                <?php foreach ($parking_types as $parking_type):?>

                                                    <div class="form-group form-checkbox mr-4">
                                                        <div class="form-material">
                                                            <input type="checkbox" name="parking_type[]" id="checkbox-<?php echo $parking_type->id ?>" class="form-input-checkbox" value="<?php echo $parking_type->id ?>" name="parking_type[]" <?php echo in_array($parking_type->id, $selected_parking_options) ? "checked" : ""   ?>>
                                                            <label for="checkbox-<?php echo $parking_type->id ?>">
                                                                <?php echo $parking_type->name; ?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button id="save_parking" class="btn btn-primary mb-4"> Save </button>

                                <div id="edit_r_amenity" class="mb-4 swimming-details">
                                    <?php foreach ($amenity_groups as $amenity_group):
                                        $printed = false;
                                        foreach ($amenity_group->amenities as $amenity){
                                            if ($amenity->display_level_id == 2) continue;
                                            if(!$printed) {
                                                echo '<p> <strong> ' . $amenity_group->name . ' </strong> </p>';
                                                $printed = true;
                                            }
                                            $selected = PropertyAmenity::find()
                                                ->where(['amenity_id' => $amenity->id])
                                                ->andWhere(['property_id' => $property->id])
                                                ->one();
                                            ?>
                                            <div class="row align-items-center mb-2">
                                                <?php //if( 2 == $amenity->display_level_id){ ?>
                                                <div class="col-md-3 custom-control custom-checkbox mb-2">
                                                    <input id="amenity-<?php echo $amenity->id; ?>" name="property_amenity_name[]" type="checkbox" class="custom-control-input" value="<?php echo $amenity->id; ?>" <?= ($selected == NULL) ? "" : "checked"  ?>/>
                                                    <label class="custom-control-label" for="amenity-<?php echo $amenity->id; ?>"> <?php echo $amenity->name ?> </label>
                                                </div>
                                                <?php
                                                unset($amenity_sub_list);
                                                $amenity_list = $amenity->amenitySubOptions;
                                                $amenity_sub_list = ArrayHelper::map($amenity_list, 'id', 'name');;

                                                $values = array();
                                                if($selected != NULL){
                                                    foreach ($selected->propertyAmenitySuboptions as $sub_option){
                                                        array_push($values, $sub_option->sub_option_id);
                                                    }
                                                }

                                                if(!empty($amenity_sub_list)) {
                                                    ?>
                                                    <div class="col-md-5">

                                                        <?php
                                                        $form = ActiveForm::begin();

                                                        echo $form->field($property_amenity_suboption, 'sub_option_id')->dropDownList($amenity_sub_list, ['id' => 'sub_option_'.$amenity->id, 'class' => "select2 browser-default form-control property_sub_option w-75", 'name' => 'property_sub_option[]', 'multiple'=> 'multiple', 'value' => $values])->label(false);

                                                        ActiveForm::end();
                                                        ?>

<!--                                                        <select multiple  class="select2 w-75  browser-default form-control property_sub_option" data-placeholder="Type">-->
<!--                                                            <option value=""></option>-->
<!--                                                            <option value="type-1"> Type 1 </option>-->
<!--                                                        </select>-->
                                                    </div>
                                                    <?php
                                                }
                                                // } ?>
                                            </div>
                                        <?php } ?>
                                    <?php endforeach; ?>
                                </div>

<!--                                <p>-->
<!--                                    <strong> Accessibility </strong>-->
<!--                                </p>-->
<!---->
<!--                                <div class="d-flex accessibility-contr align-items-center mb-2">-->
<!--                                    <div class="form-group form-checkbox mr-2">-->
<!--                                        <div class="form-material">-->
<!--                                            <input type="checkbox" name="" id=wheelChair-type" class="form-input-checkbox">-->
<!--                                            <label for=wheelChair-type" class="mb-0">-->
<!--                                                Wheel Chair-->
<!--                                            </label>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group form-checkbox">-->
<!--                                        <div class="form-material">-->
<!--                                            <select  class="select2 w-75" data-placeholder="Type">-->
<!--                                                <option value=""></option>-->
<!--                                                <option value="type-1"> Type 1 </option>-->
<!--                                            </select>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="d-flex accessibility-contr align-items-center mb-2">-->
<!--                                    <div class="form-group form-checkbox mr-2">-->
<!--                                        <div class="form-material">-->
<!--                                            <input type="checkbox" name="" id=differently-type" class="form-input-checkbox">-->
<!--                                            <label for=differently-type" class="mb-0">-->
<!--                                                Pathway for differently abled-->
<!--                                            </label>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group form-checkbox">-->
<!--                                        <div class="form-material">-->
<!--                                            <select  class="select2 w-75" data-placeholder="Type">-->
<!--                                                <option value=""></option>-->
<!--                                                <option value="type-1"> Type 1 </option>-->
<!--                                            </select>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->

                                <button id="save_property_amenity" class="btn btn-primary mb-4"> Save </button>

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
                                <div class="room-categories" id="room-categories">

                                    <?php foreach ($rooms as $index => $room) : ?>
                                        <div id="room-<?= $room->id ?>" class="d-flex category-item  justify-content-between align-items-start mb-4">
                                            <div class="d-flex align-items-start">
                                                <div class="categories-icon mr-2">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                                <div class="item">
                                                    <h6 class="categories-title"> <?= $room->name ?> </h6>
                                                    <div class="d-flex item-content justify-content-between align-items-center">
                                                        <div class="d-flex features-list align-items-center">
                                                            <div class="action-icon mr-1">
                                                                <img src="<?= Yii::$app->request->baseUrl . 'images/peoples.svg' ?>" alt="" class="img-fluid">
                                                            </div>
                                                            <p class="value mb-0 mr-4"> Occupancy:  DB: <span> <?=$room->number_of_adults ?> </span>   EB: <span> <?=$room->number_of_extra_beds ?> </span>   SB: <span> <?=$room->number_of_kids_on_sharing ?> </span> </p>
                                                            <p class="value mb-0 mr-4"> <?= $room->mealPlan->name ?> </p>
                                                            <p class="value mb-0"> <?= $room->count ?> Keys </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex status-list align-items-center align-self-end">
                                                <div class="edit-icon item mr-2" onclick="getRoomAmenitiesForm(<?= $room->id ?>)">
                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/edit-icon.svg' ?>" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <div id="room_amenity_form" class="mb-2" style="display: none" >

                                    <!-- Room Amenity Form Prints Here -->
                               </div>

<!--                                <p>-->
<!--                                    <strong> Room Features </strong>-->
<!--                                </p>-->
<!---->
<!--                                <div class="row align-items-center mb-4">-->
<!--                                    <div class="col-2">-->
<!--                                        <div class="form-group form-checkbox">-->
<!--                                            <div class="form-material">-->
<!--                                                <input type="checkbox" name="" id="air-condition" class="form-input-checkbox">-->
<!--                                                <label for="air-condition" class="mb-0">-->
<!--                                                    Air Condition-->
<!--                                                </label>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-6">-->
<!--                                        <select name="" id="" class="select2" data-placeholder="Type 1">-->
<!--                                            <option value=""></option>-->
<!--                                            <option value="1"> Value 1 </option>-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="row align-items-center mb-4">-->
<!--                                    <div class="col-2">-->
<!--                                        <div class="form-group form-checkbox">-->
<!--                                            <div class="form-material">-->
<!--                                                <input type="checkbox" name="" id="water-heater" class="form-input-checkbox">-->
<!--                                                <label for="water-heater" class="mb-0">-->
<!--                                                    Water Heater-->
<!--                                                </label>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-6">-->
<!--                                        <select name="" id="" class="select2" data-placeholder="Type 1">-->
<!--                                            <option value=""></option>-->
<!--                                            <option value="1"> Value 1 </option>-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <p>-->
<!--                                    <strong> Media & Tech </strong>-->
<!--                                </p>-->
<!---->
<!--                                <div class="row align-items-center mb-4">-->
<!--                                    <div class="col-2">-->
<!--                                        <div class="form-group form-checkbox">-->
<!--                                            <div class="form-material">-->
<!--                                                <input type="checkbox" name="" id="internet" class="form-input-checkbox">-->
<!--                                                <label for="internet" class="mb-0">-->
<!--                                                    Internet-->
<!--                                                </label>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-6">-->
<!--                                        <select name="" id="" class="select2" data-placeholder="Type 1">-->
<!--                                            <option value=""></option>-->
<!--                                            <option value="1"> Value 1 </option>-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="row align-items-center mb-4">-->
<!--                                    <div class="col-2">-->
<!--                                        <div class="form-group form-checkbox">-->
<!--                                            <div class="form-material">-->
<!--                                                <input type="checkbox" name="" id="Wifi" class="form-input-checkbox">-->
<!--                                                <label for="Wifi" class="mb-0">-->
<!--                                                    Wifi-->
<!--                                                </label>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-6">-->
<!--                                        <select name="" id="" class="select2" data-placeholder="Type 1">-->
<!--                                            <option value=""></option>-->
<!--                                            <option value="1"> Value 1 </option>-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <p>-->
<!--                                    <strong> Media & Tech </strong>-->
<!--                                </p>-->
<!---->
<!--                                <div class="row align-items-center mb-4">-->
<!--                                    <div class="col-2">-->
<!--                                        <div class="form-group form-checkbox">-->
<!--                                            <div class="form-material">-->
<!--                                                <input type="checkbox" name="" id="internet" class="form-input-checkbox">-->
<!--                                                <label for="internet" class="mb-0">-->
<!--                                                    Accessibility-->
<!--                                                </label>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-6">-->
<!--                                        <select name="" id="" class="select2" data-placeholder="Type 1">-->
<!--                                            <option value=""></option>-->
<!--                                            <option value="1"> Value 1 </option>-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="row align-items-center mb-4">-->
<!--                                    <div class="col-2">-->
<!--                                        <div class="form-group form-checkbox">-->
<!--                                            <div class="form-material">-->
<!--                                                <input type="checkbox" name="" id="Wifi" class="form-input-checkbox">-->
<!--                                                <label for="Wifi" class="mb-0">-->
<!--                                                    Wifi-->
<!--                                                </label>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-6">-->
<!--                                        <select name="" id="" class="select2" data-placeholder="Type 1">-->
<!--                                            <option value=""></option>-->
<!--                                            <option value="1"> Value 1 </option>-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="d-flex accessibility-contr align-items-center mb-2">-->
<!--                                    <div class="form-group form-checkbox mr-2">-->
<!--                                        <div class="form-material">-->
<!--                                            <input type="checkbox" name="" id=wheelChair-type-amenities" class="form-input-checkbox">-->
<!--                                            <label for=wheelChair-type-amenities" class="mb-0">-->
<!--                                                Wheel Chair-->
<!--                                            </label>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group form-checkbox">-->
<!--                                        <div class="form-material">-->
<!--                                            <select name="type" id="type" class="select2 w-75" data-placeholder="Type">-->
<!--                                                <option value=""></option>-->
<!--                                                <option value="type-1"> Type 1 </option>-->
<!--                                            </select>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="d-flex accessibility-contr align-items-center mb-2">-->
<!--                                    <div class="form-group form-checkbox mr-2">-->
<!--                                        <div class="form-material">-->
<!--                                            <input type="checkbox" name="" id=differently-type-amenities" class="form-input-checkbox">-->
<!--                                            <label for=differently-type-amenities" class="mb-0">-->
<!--                                                Pathway for differently abled-->
<!--                                            </label>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group form-checkbox">-->
<!--                                        <div class="form-material">-->
<!--                                            <select name="type" id="type1" class="select2 w-75" data-placeholder="Type">-->
<!--                                                <option value=""></option>-->
<!--                                                <option value="type-1"> Type 1 </option>-->
<!--                                            </select>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
