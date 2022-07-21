<?php
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use frontend\models\property\RoomAmenitySuboption;
use frontend\models\property\RoomAmenity;
$this->registerCssFile('/css/property/room_categories.css');
$this->registerCssFile('/css/property/amenities.css');
?>
<div class="room-categories" >
    <div  class="active d-flex category-item justify-content-between align-items-start mb-4" >
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

<!--        <div class="d-flex status-list align-items-center align-self-end">-->
            <div class="edit-icon item mr-2" style="width: 100px;z-index: 1" onclick="RemoveRoomAmenitiesForm(<?= $room->id ?>)">
                <img src="<?= Yii::$app->request->baseUrl . 'images/Flat_cross_icon.png' ?>" alt="" id="content-close" class="img-fluid image-close-pos" style="height: 20px">
            </div>
<!--        </div>-->


    </div>

</div>
<div  class="mb-4 swimming-details">
    <?php $form = ActiveForm::begin(['id' => 'room_amenities','enableClientValidation' => false]) ?>
    <input type="hidden" id="room_id" name="room_id" value="<?= $room->id ?>">
    <?php foreach ($amenity_groups as $amenity_group):
        $printed = false;
        foreach ($amenity_group->amenities as $amenity) {
            if ($amenity->display_level_id == 1) continue;
            if(!$printed) {
                echo '<p> <strong> ' . $amenity_group->name . ' </strong> </p>';
                $printed = true;
            }
            $selected = RoomAmenity::find()
                ->where(['amenity_id' => $amenity->id])
                ->andWhere(['room_id' => $room->id])
                ->one();
            ?>
            <?php
            echo '<div class="row align-items-center">';
            ?>
            <div class="col-md-3 custom-control custom-checkbox mb-2">
                <input id="amenity-room-<?php echo $amenity->id; ?>" name="room_amenity_name[]" type="checkbox" class="custom-control-input" value="<?php echo $amenity->id; ?>" <?= ($selected == NULL) ? "" : "checked"  ?>/>
                <label class="custom-control-label" for="amenity-room-<?php echo $amenity->id; ?>"> <?php echo $amenity->name ?> </label>
            </div>
            <?php
            unset($amenity_sub_list);
            $amenity_list = $amenity->amenitySubOptions;
            $amenity_sub_list = ArrayHelper::map($amenity_list, 'id', 'name');

            $values = array();
            if($selected != NULL){
                foreach ($selected->roomAmenitySuboptions as $sub_option){
                    array_push($values, $sub_option->sub_option_id);
                }
            }

            if(!empty($amenity_sub_list)) {
                ?>
                <div class="col-md-4">
                    <?php
                    echo $form->field($room_amenity_suboption, 'sub_option_id')->dropDownList($amenity_sub_list, ['id' => 'room_sub_option_'.$amenity->id, 'class' => "select2 browser-default  room_sub_option", 'multiple'=> 'multiple', 'name' => 'room_sub_option[]', 'value' => $values])->label(false);
                    ?>
                </div>
                <?php
            }
            echo '</div>';
        }
        ?>
    <?php endforeach; ?>
    <?php ActiveForm::end(); ?>
</div>
</div>
<button id="save_room_amenity" class="buttonSave mb-4" style="width: 85px; border-radius: 5px"> Save </button>
