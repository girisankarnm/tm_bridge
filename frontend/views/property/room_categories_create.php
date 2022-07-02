<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
$this->registerCssFile('/css/property/room_categories.css');
$this->registerJsFile('/js/operational_details/room_category.js');
//$this->registerJsFile('/js/property/room_categories/index.js');
?>

<h5 class="title"> Room Category </h5>

<div class="tab-section room_categories_contr">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="btn nav-link" id="pills-basic-tab" href="#pills-basic"> Rules & Policies
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn nav-link active text-white" id="pills-contact-tab" href="#pills-contact"> Room Category </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn nav-link" id="pills-guest-tab" href="#pills-guest"> Service & Amenities </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn nav-link" id="pills-accommodation-tab" href="#pills-accommodation"> Property pictures
            </button>
        </li>
    </ul>

    <div class="tab-content room-categories-content" id="pills-tabContent">
        <div id="room_categories_div" class="tab-pane fade active show">
            <div class="category-item">
                <?php $form = ActiveForm::begin(['id' => 'room_categories_form','enableClientValidation' => true, 'method' => 'post','action' => ['property/saveroomcategory']]) ?>
                <input type="hidden" value="<?= $property->id ?>" name="property_id">
                <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="heading">
                                Room Name
                            </h6>
                            <div class="form-group">
                                <div class="form-material">
                                    <?php echo $form->field($room,'name')->textInput(['class' => 'form-control', 'placeholder' =>'Enter Room Name'])->label(false) ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6 class="heading">
                                Room Type
                            </h6>
                            <div class="form-group">
                                <div class="form-material">
                                    <?php echo $form->field($room, 'type_id')->dropDownList($room_types, ['class' => 'form-control select2','prompt' => 'Room type'])->label(false); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 pr-0">
                                    <h6 class="heading">
                                        Room View
                                    </h6>
                                    <div class="form-group">
                                        <div class="form-material">
                                            <?php echo $form->field($room, 'view_id')->dropDownList($room_view_type, ['class' => 'form-control select2','prompt' => 'Room view'])->label(false); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="heading">
                                        Default Meal Plan
                                    </h6>
                                    <div class="form-group">
                                        <div class="form-material">
                                            <?php echo $form->field($room, 'meal_plan_id')->dropDownList($meal_plans, ['class' => 'form-control select2','prompt' => 'Meal plans'])->label(false); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 pr-0">
                                    <h6 class="heading">
                                        Inventory  (Number of Room)
                                    </h6>
                                    <div class="form-group">
                                        <div class="form-material">
                                            <?php echo $form->field($room,'count')->textInput(['class' => 'form-control', 'placeholder' => 'Inventory'])->label(false) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="heading">
                                        Room Size (SQ FT)
                                    </h6>
                                    <div class="form-group">
                                        <div class="form-material">
                                            <?php echo $form->field($room,'size')->textInput(['class' => 'form-control', 'placeholder' => 'Size'])->label(false) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start mt-2">
                        <div class="col-md-6">
                            <h6>Child Policy</h6>

                            <div class="form-group">
                                <div class="d-flex form-material">
                                    <?= $form->field($room, 'child_policy_same_as_property')->checkbox(['id' => 'child-checkbox'])->label("Room’s child & infant policy is same as set under property rules & policies"); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="d-flex form-material">
                                    <?= $form->field($room, 'restricted_for_child')->checkbox(['id' => 'admission-checkbox'])->label("Admission to this room category is restricted for guests under"); ?>
                                    <?php echo $form->field($room,'restricted_for_child_below_age')->textInput(['placeholder' => 'years' ,'class' => "form-control input-sm mr-1"])->label(false) ?>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h6>Room Occupancy</h6>
                            <div class="row">
                                <div class="form-group">
                                    <div class="form-material" style="margin-left: 15px">
                                        <input type="checkbox" name="" id="adults-checkbox" class="form-input-checkbox mr-1">
                                        <label for="adults-checkbox" class="mb-0"> Same tariff for single occupancy </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mt-1">
                                <div class="col-md-10 input-field">
                                    <p class="mb-0">No. of Adults allowed (without extra bed / mattress)</p>
                                </div>
                                <div class="col-md-2 input-field">
                                    <div class="form-group">
                                        <div class="form-material">
                                            <?php echo $form->field($room,'number_of_adults')->textInput(['class' => 'form-control  input-sm mr-1'])->label(false) ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mt-1">
                                <div class="col-md-10 input-field">
                                    <p class="mb-0">No. of Children allowed on bed sharing basis</p>
                                </div>
                                <div class="col-md-2 input-field">
                                    <div class="form-group">
                                        <div class="form-material">
                                            <?php echo $form->field($room,'number_of_kids_on_sharing')->textInput(['class' => 'form-control input-sm mr-1'])->label(false) ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mt-1">
                                <div class="col-md-10 input-field">
                                    <p class="mb-0">No. of extra bed / mattress allowed in room</p>
                                </div>
                                <div class="col-md-2 input-field">
                                    <div class="form-group">
                                        <div class="form-material">
                                            <?php echo $form->field($room,'number_of_extra_beds')->textInput(['class' => 'form-control input-sm mr-1'])->label(false) ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mt-1">
                                <div class="col-md-4 input-field"><p class="mb-0">Extra bed type</p></div>
                                <div class="col-md-8 input-field">
                                    <div class="form-group">
                                        <div class="form-material">
                                            <?php echo $form->field($room, 'extra_bed_type_id')->dropDownList($extra_bed_types, ['class' => 'form-control select2','prompt' => 'Bed type', 'disabled' => 'disabled'])->label(false); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center justify-content-start mt-3">
                        <button  id="room_create_cancel" type="button" class="btn btn-border mr-4"> Cancel </button>
                        <button id="room_create_save" type="submit" class="btn button-secondary"> Save </button>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
