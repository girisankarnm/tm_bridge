<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->registerCssFile('/css/form.css');
$this->registerCssFile('/css/property/room_categories.css');
$this->registerJsFile('/js/operational_details/room_category.js');
//$this->registerJsFile('/js/property/room_categories/index.js');
?>
<h5 class="title"> <?= $property->name; ?> </h5>

<div class="tab-section room_categories_contr">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button onclick="location.href='<?= Url::toRoute(['property/rules','id' => $property->id]) ?>'" class="tablinks" id="pills-guest-tab" href="#pills-guest"> Rules & Policies </button>
        </li>
        <li class="nav-item" role="presentation">
            <button onclick="location.href='<?= Url::toRoute(['property/categories','id' => $property->id]) ?>'" class="selectedButton" id="pills-basic-tab" href="#pills-basic"> Room Category
            </button><hr class="new5" >
        </li>
        <li class="nav-item" role="presentation">
            <button onclick="location.href='<?= Url::toRoute(['property/serviceamenities','id' => $property->id]) ?>'" class="tablinks" id="pills-guest-tab" href="#pills-guest"> Service & Amenities </button>
        </li>
        <li class="nav-item" role="presentation">
            <button onclick="location.href='<?= Url::toRoute(['property/pictures','id' => $property->id]) ?>'" class="tablinks" id="pills-accommodation-tab" href="#pills-accommodation"> Upload Pictures
            </button>
        </li>
    </ul>

    <div class="tab-content room-categories-content" id="pills-tabContent">
        <div id="room_categories_div" class="tab-pane fade active show">
            <div class="category-item">
                <?php $form = ActiveForm::begin(['id' => 'room_categories_form','enableClientValidation' => true, 'method' => 'post','action' => ['property/saveroomcategory']]) ?>
                <input type="hidden" value="<?= $property->id ?>" name="property_id">
                <input type="hidden" value="<?= $room->id ?>" name="room_id">
                <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="heading">
                                Room Name<span style="color: red; font-size: 18px">*</span>
                            </h6>
                            <div class="form-group">
                                <div class="form-material">
                                    <?php echo $form->field($room,'name')->textInput(['class' => 'form-control', 'placeholder' =>'Enter Room Name'])->label(false) ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6 class="heading">
                                Room Type<span style="color: red; font-size: 18px">*</span>
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
                                        Room View<span style="color: red; font-size: 18px">*</span>
                                    </h6>
                                    <div class="form-group">
                                        <div class="form-material">
                                            <?php echo $form->field($room, 'view_id')->dropDownList($room_view_type, ['class' => 'form-control select2','prompt' => 'Room view'])->label(false); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="heading">
                                        Default Meal Plan<span style="color: red; font-size: 18px">*</span>
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
                                        Inventory  (Number of Room)<span style="color: red; font-size: 18px">*</span>
                                    </h6>
                                    <div class="form-group">
                                        <div class="form-material">
                                            <?php echo $form->field($room,'count')->textInput(['class' => 'form-control', 'placeholder' => 'Inventory'])->label(false) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="heading">
                                        Room Size (SQ FT)<span style="color: red; font-size: 18px">*</span>
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
                            <h6>Child Policy<span style="color: red; font-size: 18px">*</span></h6>

                            <div class="form-group">
                                <div class="d-flex form-material">
                                    <?php
                                    if(($room['child_policy_same_as_property'] == 1) || ($room['id'] == null)) {

                                        echo $form->field($room, 'child_policy_same_as_property')->checkbox(['id' => 'child-checkbox', 'checked' => 'checked', 'class' => 'custom-control-input room-category chckbox-class'])->label("Room’s child & infant policy same as under property's policies");

                                    } else {
                                        echo $form->field($room, 'child_policy_same_as_property')->checkbox(['id' => 'child-checkbox', 'class' => 'custom-control-input room-category chckbox-class'])->label("Room’s child & infant policy same as under property's policies");

                                    }?>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="d-flex form-material margin-top-6px">
                                    <?php
                                    if($room['restricted_for_child'] == 1) {
                                        echo $form->field($room, 'restricted_for_child')->checkbox(['id' => 'admission-checkbox', 'checked' => 'checked', 'class' => 'custom-control-input room-category margin-top-6px'])->label("Admission is restricted for guests under");
                                    } else {
                                        echo $form->field($room, 'restricted_for_child')->checkbox(['id' => 'admission-checkbox', 'class' => 'custom-control-input room-category margin-top-6px '])->label("Admission is restricted for guests under");
                                    }?>

                                    <?php echo $form->field($room,'restricted_for_child_below_age')->textInput(['placeholder' => 'years' ,'class' => "form-control input-sm mr-1 margin-width-cate"])->label(false) ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h6>Room Occupancy</h6>
                            <div class="row">
                                <div class="form-group">
                                    <div class="form-material" style="margin-left: 15px">
                                        <?= $form->field($room, 'same_tariff_for_single_occupancy')->checkbox(['id' => 'same-tariff-single-checkbox'])->label("Same tariff for single occupancy"); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-md-12">
                                    <div  style="display: inline">
                                        <div class="d-flex form-material" >
                                        <label class="Labelclass-category" style=" vertical-align: middle;">No. of Adults allowed (without extra bed / mattress)</label>

                                            <?php echo $form->field($room,'number_of_adults')->textInput(['class' => 'inputText-cate '])->label(false) ?>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row ">
                                <div class="col-md-12 ">
                                    <div  style="display: inline">
                                        <div class="d-flex form-material" >
                                            <label class="Labelclass-category" style="display: block">No. of Children allowed on bed sharing basis</label>

                                            <?php echo $form->field($room,'number_of_kids_on_sharing')->textInput(['class' => 'inputText-cate Text-category-margin-60'])->label(false) ?>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row ">
                                <div class="col-md-12 ">
                                    <div  style="display: inline">
                                        <div class="d-flex form-material" >
                                            <label class="Labelclass-category" style="display: block">No. of extra bed / mattress allowed in room</label>

                                            <?php echo $form->field($room,'number_of_extra_beds')->textInput(['class' => 'inputText-cate Text-category-margin-70'])->label(false) ?>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row ">
                                <div class="col-md-12 ">
                                    <div class="" style="display: inline">
                                        <div class="d-flex form-material" >
                                            <label class="Labelclass-category " style="display: block">Extra bed type</label>
<div class="margin-left-select">
                                            <?php
                                            if ($room->number_of_extra_beds != null) {
                                                echo $form->field($room, 'extra_bed_type_id')->dropDownList($extra_bed_types, ['class' => 'form-control select2', ])->label(false);

                                            } else {
                                                echo $form->field($room, 'extra_bed_type_id')->dropDownList($extra_bed_types, ['class' => 'form-control select2', 'disabled' => 'disabled'])->label(false);

                                            }
                                            ?>
</div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>

                    <div class="row align-items-center justify-content-start mt-3">
                        <button onclick="location.href='<?= Url::toRoute(['property/categories','id' => $property->id]) ?>'" class="btn btn-border mr-4" id="room_create_cancel" type="button"> Cancel </button>
                        <button id="room_create_save" type="submit" class="btn button-secondary"> Save </button>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
