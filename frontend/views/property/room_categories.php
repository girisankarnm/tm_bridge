<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->registerCssFile('/css/property/room_categories.css');
$this->registerJsFile('/js/property/room_categories/index.js');
?>

<h5 class="title"> Room Category </h5>

<div class="tab-section room_categories_contr">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button onclick="location.href='<?= Url::toRoute(['property/rules','id' => $property->id]) ?>'" class="tablinks" id="pills-accommodation-tab" href="#pills-accommodation">  Rules & Policies</button>
        </li>
        <li class="nav-item" role="presentation">
            <button onclick="location.href='<?= Url::toRoute(['property/categories','id' => $property->id]) ?>'" class="selectedButton" id="pills-basic-tab" href="#pills-basic">Room Category
            </button><hr class="new5" >
        </li>
        <li class="nav-item" role="presentation">
            <button onclick="location.href='<?= Url::toRoute(['property/serviceamenities','id' => $property->id]) ?>'" class="tablinks" id="pills-guest-tab" href="#pills-guest"> Service & Amenities </button>
        </li>
        <li class="nav-item" role="presentation">
            <button onclick="location.href='<?= Url::toRoute(['property/pictures','id' => $property->id]) ?>'" class="tablinks" id="pills-accommodation-tab" href="#pills-accommodation"> Property pictures</button>
        </li>
    </ul>

    <div class="tab-content room-categories-content" id="pills-tabContent">
        <div id="room_categories_div" class="tab-pane fade active show">
            <div class="room-categories">
                <div class="d-flex justify-content-end align-items-center">
                    <a href="index.php?r=property/createcategories&id=<?= $property->id; ?>" class="btn button-primary text-white text-right"> <img src="<?= Yii::$app->request->baseUrl . 'images/primary-plus.svg' ?>" alt="" srcset="">  Add Room </a>

                </div>
                <?php if ($rooms == null) { ?>
                    <div style="text-align: center; border: 1px solid black; padding: 10px; color: #586ADA">You don't defined room categories yet.</div>
                <?php } ?>
                <?php foreach ($rooms as $room) { ?>
                    <div class="d-flex category-item justify-content-between align-items-start mb-4">
                        <div class="d-flex align-items-start">
                            <div class="categories-icon mr-2">
                                <img src="<?= Yii::$app->request->baseUrl . 'images/categories-success.svg' ?>" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <h6 class="categories-title"> <?= $room->name ?> </h6>
                                <div class="d-flex item-content justify-content-between align-items-center">
                                    <div class="d-flex features-list align-items-center">
                                        <div class="action-icon mr-1">
                                            <img src="<?= Yii::$app->request->baseUrl . 'images/peoples.svg' ?>" alt="" class="img-fluid">
                                        </div>
                                        <p class="value mb-0 mr-4"> Occupancy:  AD: <span> <?=$room->number_of_adults ?> </span>   EB: <span> <?=$room->number_of_extra_beds ?> </span>   SB: <span> <?=$room->number_of_kids_on_sharing ?> </span> </p>
                                        <p class="value mb-0 mr-4"> Meal:
                                            <?php if (isset($room->mealPlan)){ echo $room->mealPlan->name;} else echo 'No meal plan';?>
                                        <p class="value mb-0"> <?= $room->count ?> Keys </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex status-list align-items-center align-self-end">
                            <div class="status-icon mr-1">
                                <img src="<?= Yii::$app->request->baseUrl . 'images/tick-mark.svg' ?>" alt="" class="img-fluid">
                            </div>
                            <p class="mb-0 mr-2"> Active </p>
                            <div class="edit-icon item mr-2" style="margin-bottom: 10px">
                                <a href="<?= \yii\helpers\Url::to(['/property/createcategories', 'id' =>  $property->id, 'room_id' => $room->id]) ?>"> <img src="images/edit-icon.svg" style="height:25px; color: #545b62;margin-right: 4px" aria-hidden="true"></img>   </a>
                            </div>
                            <div class="edit-icon item mr-2" style="margin-bottom: 10px">
                                <a href="<?= \yii\helpers\Url::to(['/property/createcategories', 'id' =>  $property->id, 'room_id' => $room->id]) ?>"> <img src="images/delete-1-icon.svg" style="height:25px; color: #545b62;margin-right: 4px" aria-hidden="true"></img>   </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
