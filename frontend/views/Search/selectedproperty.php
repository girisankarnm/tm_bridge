<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
frontend\assets\CommonAsset::register($this);
frontend\assets\DatePickerAsset::register($this);
$this->registerCssFile('/css/search4.css');
$this->title = '';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<div class="enquiry-contr">
    <div class="enquiry-detail text-right pb-2 mb-4">
        <a href="" class="link-highlight"> Enquiry Details </a>
    </div>
    <?php  foreach ($searchResult as $key => $destination) :?>
        <div class="accordion" id="main-accordion">
            <div class="enquiry-intro mb-4">
                <div class="row enquiry-info justify-content-between m-0">
                    <div class="d-flex align-items-center">
                        <h5 class="place font-weight-bold mr-4"> <?= $key ?> </h5>
                        <div class="d-flex">
                            <p class="mr-4"> Selected: <span> 5/10 </span> </p>
                            <a href="#" class="link link-highlight mr-md-4"> 3 Nights (Split) </a>
                        </div>
                    </div>

                    <div class="col-md-1 justify-content-end text-end align-items-end">
                        <button class="btn btn-block text-right" type="button" data-toggle="collapse" data-target="#mainCollapseOne" aria-expanded="true" aria-controls="mainCollapseOne">
                            <div class="accordion-caret">
                                <i class="fas fa-angle-up"></i>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div id="mainCollapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#main-accordion">
                <div class="accordion" id="accordionExample">
                    <?php foreach ($destination['property'] as $PropName => $prop) : ?>
                        <div class="enquiry-content mb-4">
                            <div class="row enquiry-hotel mb-2">
                                <div class="col-md-9 d-md-flex hotel-info align-items-start">
                                    <div class="name mr-4">
                                        <h4 class="title"> <?= $PropName ?> </h4>
                                        <p class="address"> Kozhikode, Kerala, India</p>
                                    </div>
                                    <div class="hotel-feature">
                                        <div class="d-flex align-items-center">
                                            <p class="mr-2"> <?= $prop['property_details']->propertyType->name ?> </p>
                                            <p class="mr-2"> <?= $prop['property_details']->propertyCategory->name ?> </p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <?php if(($prop['property_details']->smoking_policy_id) != 3):?>
                                                <div class="mr-3">
                                                    <i class="fas fa-smoking"></i>
                                                </div>
                                            <?php else: ?>
                                                <div class="mr-3">
                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/nosmoking.png' ?>" alt="smoking.png" class="img-fluid">
                                                </div>
                                            <?php endif ?>
                                            <?php if(($prop['property_details']->pets_policy_id) != 3):?>
                                                <div>
                                                    <i class="fas fa-dog"></i>
                                                </div>
                                            <?php else: ?>
                                                <div>
                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/nopets.png' ?>" alt="smoking.png" class="img-fluid">
                                                </div>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                    <div class="d-flex actions align-items-center">
                                        <div class="favorite-contr">
                                            <input type="checkbox" class="favorite" id="favorite-1<?= $prop['property_details']['id'] ?>"  <?php if ($prop['favourite'] == true) :?> Checked <?php endif ?>/>
                                            <label for="favorite-1<?= $prop['property_details']['id'] ?>">
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
                                    </div>
                                </div>
                                <div class="  col-md-3 d-flex action-icons align-items-center">
                                    <!--                                <div class="icon mr-3">-->
                                    <!--                                    <i class="far fa-comment-dots"></i>-->
                                    <!--                                </div>-->
                                    <!--                                <div class="icon mr-3">-->
                                    <!--                                    <i class="fas fa-search"></i>-->
                                    <!--                                </div>-->
                                    <!--                                <div class="icon mr-3">-->
                                    <!--                                    <i class="fas fa-tag"></i>-->
                                    <!--                                </div>-->
                                    <!--                                <div class="icon mr-3">-->
                                    <!--                                    <i class="fas fa-lock"></i>-->
                                    <!--                                </div>-->
                                    <!--                                <div class="icon mr-3">-->
                                    <!--                                    <i class="fas fa-lock-open"></i>-->
                                    <!--                                </div>-->
                                    <!--                                <div class="icon mr-3">-->
                                    <!--                                    <i class="far fa-calendar-alt"></i>-->
                                    <!--                                </div>-->
                                    <!--                                <div class="icon mr-3">-->
                                    <!--                                    <i class="far fa-times-circle"></i>-->
                                    <!--                                </div>-->
                                    <!--                                <div class="icon mr-3">-->
                                    <!--                                    <i class="fas fa-phone-volume"></i>-->
                                    <!--                                </div>-->

                                    <button class="btn btn-block text-right" type="button" data-toggle="collapse" data-target="#collapse<?= $prop['property_details']->id ?>" aria-expanded="<?= $prop['property_details']->id === 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?= $prop['property_details']->id ?>">
                                        <div class="icon accordion-caret mr-3">
                                            <i class="fas fa-angle-up"></i>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div id="collapse<?= $prop['property_details']->id ?>" class="<?= $prop['property_details']->id === 0 ? 'show' : ''; ?>collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="enquiry-output">
                                    <?php $i = 1 ?>
                                    <?php foreach ($prop['day'] as $day => $dayItems):?>
                                        <div class="enquiry-result mb-4">
                                            <div class="row schedule-info align-items-center">
                                                <div class="col-md-2">
                                                    <h6 class="title"> Day <?= $i .' |'?> <?=date('D', strtotime($day)) .' , '. date('d M Y', strtotime($day));  ?> </h6>
                                                </div>
                                            </div>
                                            <?php foreach ($dayItems['room_details'] as $rooms) : ?>
                                                <div class="row align-items-center">
                                                    <div class="col-md-2 mb-2">
                                                        <a href="" class="name mb-0 font-weight-bold text-underline">
                                                            <u> <?= $rooms['room']['name'] ?> </u>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 d-flex justify-content-md-center mb-2">
                                                        <div class="d-flex highlight-col  justify-content-md-center align-items-center">
                                                            <div class="child-icon mr-2 font-weight-bold">
                                                                Size
                                                            </div>
                                                            <p class="mr-2 mb-0"> <?= $rooms['room']['size'] ?> SQ FT </p>
                                                            <div class="child-icon mr-2">
                                                            </div>
                                                            <div class="child-icon mr-2 font-weight-bold">
                                                                Room Type
                                                            </div>
                                                            <p class="mr-2 mb-0"> <?= $rooms['room']->type->name ?> </p>
                                                            <div class="child-icon mr-2">
                                                            </div>
                                                            <div class="child-icon mr-2 font-weight-bold">
                                                                Room View
                                                            </div>
                                                            <p class="mr-2 mb-0"> <?= $rooms['room']->view->name ?> </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 d-flex  justify-content-md-between align-items-center mb-2">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <div class="is-warning mr-3">
                                                                <div class="meal-icon">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>" alt="" class="img-fluid">
                                                                </div>
                                                                <?php if ($rooms['rooming']['meal_plan_over_ride'] == true) :?>
                                                                <div class="warning-icon">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/warning.svg' ?>" alt="" class="img-fluid">
                                                                </div>
                                                                <?php endif; ?>
                                                            </div>
                                                            <p class="mb-0 mr-2"> <?= $rooms['rooming']['tariff_meal_plan'] ?> </p>
                                                        </div>

                                                        <p class="mb-0 mr-2 font-weight-bold"> <i class="fas fa-rupee-sign"></i> <?= $rooms['rooming']['lowest_rate'] ?> </p>

                                                        <div class="filter-input mb-2 mr-2">
                                                            <!--                                                        <select name="rooming" class="select2 browser-default" data-placeholder="Placeholder">-->
                                                            <!--                                                            <option value=""></option>-->
                                                            <!--                                                            <option value="manual-rooming"> Manual rooming </option>-->
                                                            <!--                                                            <option value="manual-rooming"> Manual rooming </option>-->
                                                            <!--                                                            <option value="manual-rooming"> Manual rooming </option>-->
                                                            <!--                                                        </select>-->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 d-flex action-row justify-content-md-end align-items-center mb-2">
                                                        <!--                                                    <div class="icon mr-4">-->
                                                        <!--                                                        <i class="far fa-eye"></i>-->
                                                        <!--                                                    </div>-->
                                                        <div class="icon delete-icon" onclick="DeleteSelected(<?= $rooms['rooming']['select_id'] ?>)">
                                                            <i class="far fa-trash-alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                        <?php $i++; endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
<script>
    function DeleteSelected(ID){
        var data = new FormData();
        data.append('id', ID);

        $.confirm({
            title: 'Delete!',
            content: 'Are you sure you want to delete this item?',
            type: 'red',
            typeAnimated: true,
            buttons: {
                confirm: function () {
                    $.ajax({
                        type: "post",
                        enctype: 'multipart/form-data',
                        url: "index.php?r=search/deleteselectedroom",
                        data: data,
                        processData: false,
                        contentType: false,
                        cache: false,
                        timeout: 800000,
                        success: function (response) {

                            if (response.status == 0) {

                                toastr.success(response.message);
                                location.reload();
                            }
                        },
                        error: function (e) {

                            console.log(e.responseText);
                            toastr.error("Server error: " + e.responseText);
                        }
                    });
                },
                cancel: function () {
                    $.alert('Canceled!');
                },
            }
        });
    }
</script>
