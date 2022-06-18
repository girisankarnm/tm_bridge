<?php

    /* @var $this yii\web\View */

    use yii\helpers\Html;
    frontend\assets\CommonAsset::register($this);
    frontend\assets\DatePickerAsset::register($this);
    $this->registerCssFile('/css/search4.css');
    $this->title = '';
?>

<div class="enquiry-contr">
    <div class="enquiry-detail text-right pb-2 mb-4">
        <a href="" class="link-highlight"> Enquiry Details </a>
    </div>
    <div class="accordion" id="main-accordion">
        <div class="enquiry-intro mb-4">
            <div class="row enquiry-info justify-content-between m-0">
                <div class="d-flex align-items-center">
                    <h5 class="place font-weight-bold mr-4"> Netherland </h5>
                    <div class="d-flex">
                        <p class="mr-4"> Selected: <span> 5/10 </span> </p>
                        <a href="#" class="link link-highlight mr-md-4"> 3 Nights (Split) </a>
                        <div class="action-icon is-warning">
                            <div class="calendar-icon">
                                <i class="far fa-calendar-alt"></i>
                            </div>
                            <div class="warning-icon mr-1">
                                <img src="<?= Yii::$app->request->baseUrl . 'images/warning.svg' ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-1 text-right">
                    <button class="btn btn-caret p-0" type="button" data-toggle="collapse" data-target="#mainCollapseOne" aria-expanded="true" aria-controls="mainCollapseOne">
                        <div class="accordion-caret">
                            <i class="fas fa-angle-up"></i>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <div id="mainCollapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#main-accordion">
            <div class="accordion" id="accordionExample">
                <?php foreach(range(1, 3) as $index => $item) : ?>
                    <div class="enquiry-content mb-4">
                        <div class="row enquiry-hotel mb-2">
                            <div class="col-md-9 d-md-flex hotel-info align-items-start">
                                <div class="name mr-4">
                                    <h4 class="title">
                                        The Leaf Hotel & Resort
                                    </h4>
                                    <p class="address"> Kozhikode, Kerala, India</p>
                                </div>
                                <div class="hotel-feature">
                                    <div class="d-flex align-items-center">
                                        <p class="mr-2"> Business Hotel</p>
                                        <p class="mr-2"> 3 Star </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="mr-3">
                                            <i class="fas fa-smoking"></i>
                                        </div>
                                        <div>
                                            <i class="fas fa-dog"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex actions align-items-center">
                                    <div class="favorite-contr">
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
                                    <div class="is-warning mr-4">
                                        <div class="adult-icon">
                                            <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="warning-icon">
                                            <img src="<?= Yii::$app->request->baseUrl . 'images/warning.svg' ?>" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="d-md-flex rate-info align-items-center">
                                        <a href="" class="btn btn-rate text-white mr-2"> Special rate </a>
                                        <a href="" class="btn btn-special mr-2"> Edit confirmed </a>
                                        <p class="price mb-0"> 100.00 </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex action-icons justify-content-end align-items-center">
                                <div class="icon mr-3">
                                    <i class="far fa-comment-dots"></i>
                                </div>
                                <div class="icon mr-3">
                                    <i class="fas fa-search"></i>
                                </div>
                                <div class="icon mr-3">
                                    <i class="fas fa-tag"></i>
                                </div>
                                <div class="icon mr-3">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div class="icon mr-3">
                                    <i class="fas fa-lock-open"></i>
                                </div>
                                <div class="icon mr-3">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="icon mr-3">
                                    <i class="far fa-times-circle"></i>
                                </div>
                                <div class="icon mr-3">
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                                <button class="btn p-0" type="button" data-toggle="collapse" data-target="#collapse<?= $index ?>" aria-expanded="<?= $index === 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?= $index ?>">
                                    <div class="icon accordion-caret mr-3">
                                        <i class="fas fa-angle-up"></i>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div id="collapse<?= $index ?>" class="<?= $index === 0 ? 'show' : ''; ?>collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="enquiry-output">
                                <?php foreach(range(0, 3) as $index => $item) : ?>
                                    <div class="enquiry-result mb-4">
                                        <div class="row schedule-info align-items-center">
                                            <div class="col-md-2">
                                                <h6 class="title"> Day 1 | Wed, 10 Aug 22 </h6>
                                            </div>
                                            <div class="d-flex col-md-4 justify-content-md-center schedule-wrapper align-items-center">
                                                <div class="d-flex schedule-highlight green-border justify-content-md-center align-items-center">
                                                    <div class="adult-icon mr-2">
                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                    </div>
                                                    <p class="mr-2 mb-0"> 99 </p>

                                                    <div class="adult-icon mr-2">
                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                    </div>
                                                    <p class="mr-2 mb-0"> 50 </p>

                                                    <div class="child-icon mr-2">
                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                    </div>
                                                    <p class="mr-2 mb-0"> 50 </p>
                                                </div>

                                                <div class="edit-icon absolute" data-toggle="modal" data-target="#editPolicy" role="button">
                                                    <i class="far fa-edit"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-flex schedule-action justify-content-end align-items-center">
                                                <div class="is-warning mr-4">
                                                    <div class="adult-icon">
                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="warning-icon">
                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/warning.svg' ?>" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="cancel-icon mr-4">
                                                    <i class="far fa-times-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <?php foreach (range(0, 2) as $key => $value) : ?>
                                            <div class="row align-items-center">
                                                <div class="col-md-2 mb-2">
                                                    <a href="" class="name mb-0 font-weight-bold text-underline">
                                                        <u> Green leaf </u>
                                                    </a>
                                                </div>
                                                <div class="col-md-4 d-flex justify-content-md-center mb-2">
                                                    <div class="d-flex highlight-col red-border justify-content-md-center align-items-center">
                                                        <div class="adult-icon mr-2">
                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                        </div>
                                                        <p class="mr-2 mb-0"> 99 </p>

                                                        <div class="adult-icon mr-2">
                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                        </div>
                                                        <p class="mr-2 mb-0"> 50 </p>

                                                        <div class="child-icon mr-2">
                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                        </div>
                                                        <p class="mr-2 mb-0"> 50 </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 d-flex  justify-content-md-between align-items-center mb-2">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <div class="is-warning mr-3">
                                                            <div class="meal-icon">
                                                                <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>" alt="" class="img-fluid">
                                                            </div>
                                                            <div class="warning-icon">
                                                                <img src="<?= Yii::$app->request->baseUrl . 'images/warning.svg' ?>" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 mr-2"> Map </p>
                                                    </div>

                                                    <p class="mb-0 mr-2 font-weight-bold"> <i class="fas fa-rupee-sign"></i> 200.00 </p>

                                                    <div class="filter-input mb-2 mr-2">
                                                        <select name="rooming" class="select2 rooming-type browser-default" data-placeholder="Placeholder">
                                                            <option value=""></option>
                                                            <option value="manual-rooming"> Manual rooming </option>
                                                            <option value="auto-rooming"> Auto rooming </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 d-flex action-row justify-content-md-end align-items-center mb-2">
                                                    <div class="icon mr-4">
                                                        <i class="far fa-eye"></i>
                                                    </div>
                                                    <div class="icon delete-icon">
                                                        <i class="far fa-trash-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


<div class="modal searchModalPolicy fade" id="editPolicy" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content destination-days">
            <div class="modal-header justify-content-center">
                <h4 class="title text-black"> Room-wise Pax Allocation </h4>
            </div>
            <div class="modal-body">
                <div class="hotel-intro mb-4">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h5 class="title text-main font-weight-bold"> The Leaf Hotel & Resort </h5>
                        </div>
                        <div class="col-md-4 hotel-policy justify-content-end">
                            <p class="text-center"> Child & Infant Policy </p>
                            <div class="d-flex hotel-age justify-content-center align-items-center">
                                <div class="child-icon mr-2">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                </div>
                                <p class="mr-2 mb-0"> 0 - X YR </p>

                                <div class="adult-icon mr-2">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                </div>
                                <p class="mr-2 mb-0"> XX - XX YR </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hotel-day mb-sm-4 mb-md-6">
                    <div class="row hotel-pax justify-md-content-between align-items-center">
                        <div class="col-md-4">
                            <p class="title">
                                Day 1 | Wed, 10 Aug 22
                            </p>
                        </div>
                        <div class="row col-md-8 enquiry-pax justify-content-end align-items-center">
                            <p class="mr-4 mb-0"> Enquiry Pax </p>
                            <div class="adult-icon mr-2">
                                <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                            </div>
                            <p class="mr-4 mb-0"> XXX </p>

                            <div class="adult-icon mr-2">
                                <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                            </div>
                            <p class="mr-2 mb-0"> XXX </p>
                        </div>
                    </div>
                    <div class="d-md-flex hotel-pax-age justify-content-between align-items-center">
                        <p class="mr-2 mb-0"> Children age breakup </p>
                        <p class="mr-2 mb-0"> 2 YR:XX | 5 YR:XX | 7 YR:XX | 9 YR:XX | 10 YR:XX | 12 YR:XX </p>
                    </div>
                </div>

                <div class="policy-content">
                    <div class="row align-items-center m-0 mb-2">
                        <div class="col-md-8">
                        </div>
                        <div class="row col-md-4 policy-data justify-content-between align-items-center">
                            <div class="col-md-4 text-center adult-icon">
                                <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-4 text-center adult-icon">
                                <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-4 text-center child-icon">
                                <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center m-0 mb-2">
                        <div class="col-md-8 border readable">
                            <p class="mb-0">
                                Pax Count as per property's Child & Infant Policy
                            </p>
                        </div>
                        <div class="row col-md-4 policy-data justify-content-between align-items-center">
                            <div class="col-md-4 text-center">
                                <p class="border readable form-control text-center mr-4">
                                    99
                                </p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p class="border readable form-control text-center mr-4">
                                    99
                                </p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p class="border readable form-control text-center mr-4">
                                    99
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php foreach(range(1, 3) as $item) : ?>
                        <div class="row align-items-center m-0 mb-2">
                            <div class="col-md-8 border readable">
                                <p class="mb-0">
                                    Pax Count as per property's Child & Infant Policy
                                </p>
                            </div>
                            <div class="row col-md-4 policy-data justify-content-between align-items-center">
                                <div class="col-md-4 text-center">
                                    <input type="text" name="" id="" value="99" class="form-control border border-success text-center mr-2">
                                </div>
                                <div class="col-md-4 text-center">
                                    <input type="text" name="" id="" value="99" class="form-control border border-danger text-center mr-2">
                                </div>
                                <div class="col-md-4 text-center">
                                    <input type="text" name="" id="" value="99" class="form-control border border-success text-center mr-2">
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="row align-items-center m-0 mb-2">
                        <div class="col-md-8 border readable">
                            <p class="mb-0">
                                Allocated pax
                            </p>
                        </div>
                        <div class="row col-md-4 policy-data justify-content-between align-items-center">
                            <div class="col-md-4 text-center">
                                <p class="border readable form-control text-center mr-4">
                                    99
                                </p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p class="border readable form-control text-center mr-4">
                                    99
                                </p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p class="border readable form-control text-center mr-4">
                                    99
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center m-0 mb-2">
                        <div class="col-md-8"></div>
                        <div class="row col-md-4 policy-data justify-content-between align-items-center">
                            <div class="col-md-4 text-center">
                                <p class="border readable form-control text-center mr-4">
                                    <i class="far fa-check-circle text-success"></i>
                                </p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p class="border readable form-control text-center mr-4">
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                </p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p class="border readable form-control text-center mr-4">
                                    <i class="far fa-check-circle text-success"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex destination-action justify-content-end align-items-center w-100">
                    <button class="btn btn-lg btn-light mr-2" data-dismiss="modal"> Cancel </button>
                    <button class="btn btn-lg btn-primary text-white btn-lg"> Apply </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include_once('search2.php');
    include_once('search3.php');
?>