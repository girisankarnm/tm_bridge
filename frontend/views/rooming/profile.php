<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
frontend\assets\CommonAsset::register($this);
frontend\assets\OwlCarouselAsset::register($this);
$this->registerCssFile('/css/profile.css');

?>

<div class="profile-contr">
    <div class="row profile-intro align-items-start">
        <div class="col-md-8 profile-info mb-4">
            <h3 class="title font-primary"> <strong> The Tranvancore Heritage Beach Ayurveda Resort & SPA </strong> </h3>
            <p class="mb-3"> Adimalathura, Near Kovalam,Chowara P.O, Thiruvananthapuram, Kerala,India. Pin 695501 </p>
            <h5 class="description mb-3"> Superior Room with Private Swimming Pool </h5>
            <div class="hotel-facilities">
                <p class="mb-0">
                    Floating Cottage |  Backwater View | 175 SQ FT  | 30 Rooms |  Meal Plan: AP (BF | Lunch | Dinner)
                </p>
            </div>
        </div>
        <div class="d-flex flex-wrap col-md-4 hotel-class mb-4">
            <div class="info-field d-inline mb-2 mr-2">
                <p class="text-white mb-0"> <strong> Business Hotel </strong> </p>
            </div>
            <div class="info-field d-inline mb-2 mr-2">
                <p class="text-white mb-0"> <strong> 3 Star </strong> </p>
            </div>
            <div class="info-field d-inline mb-4">
                <p class="text-white mb-0"> <strong> Check-in | Check-out: 2 PM | 11 AM </strong> </p>
            </div>
            <div class="hotel-pricing text-center">
                <h5 class="mb-0"> Price for 10 Day stay </h5>
                <h4 class="mb-0 text-dark">
                    <strong> ₹ 10,246/- </strong>
                </h4>
            </div>
        </div>
    </div>

    <div class="profile-media">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="room-tab" data-toggle="pill" href="#room" role="tab" aria-controls="room" aria-selected="true"> Room picture </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pictures-tab" data-toggle="pill" href="#pictures" role="tab" aria-controls="pictures" aria-selected="false">Profile</a>
            </li>
        </ul>

        <div class="tab-content mb-4" id="pills-tabContent">
            <div class="tab-pane fade show active" id="room" role="tabpanel" aria-labelledby="room-tab">
                <div class="row media-images">
                    <div class="col-md-8 main-media">
                        <div class="image mb-4">
                            <img src="<?= Yii::$app->request->baseUrl . 'images/hotel.jpg' ?>" alt="" class="img-fluid w-100">
                        </div>
                        <div class="row sub-images">
                            <div class="col-md-6 image mb-2">
                                <img src="<?= Yii::$app->request->baseUrl . 'images/hotel.jpg' ?>" alt="" class="img-fluid w-100">
                            </div>
                            <div class="col-md-6 image mb-2">
                                <img src="<?= Yii::$app->request->baseUrl . 'images/hotel.jpg' ?>" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="image mb-2">
                            <img src="<?= Yii::$app->request->baseUrl . 'images/hotel.jpg' ?>" alt="" class="img-fluid w-100">
                        </div>
                        <div class="image mb-4">
                            <img src="<?= Yii::$app->request->baseUrl . 'images/hotel.jpg' ?>" alt="" class="img-fluid w-100">
                        </div>
                        <div class="image image-overlay">
                            <a data-toggle="modal" data-target="#exampleModal" role="button">
                                <div class="overlay"></div>
                                <label class="text-white">
                                    <strong> 20 + photos </strong>
                                </label>
                                <img src="<?= Yii::$app->request->baseUrl . 'images/hotel.jpg' ?>" alt="" class="img-fluid w-100">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pictures" role="tabpanel" aria-labelledby="pictures-tab">...</div>
        </div>

        <div class="row hotel-details align-items-start">
            <div class="col-md-6 first-details">
                <?php foreach( range(1, 3) as $item) : ?>
                    <h5 class="title font-primary mb-2">
                        <strong> Complimentary Services </strong>
                    </h5>
                    <div class="detail mb-4">
                        <div class="item d-flex align-items-center">
                            <div class="tick-icon mr-2">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/tick.svg' ?>" alt="" class="img-fluid">
                            </div>
                            <p class="mb-0"> Complimentary airport pickup & drop. </p>
                        </div>

                        <div class="item d-flex align-items-center">
                            <div class="tick-icon mr-2">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/tick.svg' ?>" alt="" class="img-fluid">
                            </div>
                            <p class="mb-0"> Trekking with guide every morning. </p>
                        </div>

                        <div class="item d-flex align-items-center">
                            <div class="tick-icon mr-2">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/tick.svg' ?>" alt="" class="img-fluid">
                            </div>
                            <p class="mb-0"> Cultural show every evening.</p>
                        </div>

                        <div class="item d-flex align-items-center">
                            <div class="tick-icon mr-2">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/tick.svg' ?>" alt="" class="img-fluid">
                            </div>
                            <p class="mb-0"> Campfire on weekends. </p>
                        </div>

                        <div class="item d-flex align-items-center">
                            <div class="tick-icon mr-2">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/tick.svg' ?>" alt="" class="img-fluid">
                            </div>
                            <p class="mb-0"> 15 minutes complimentary massage. </p>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <div class="col-md-6 second-details">
                <h5 class="title font-primary mb-2">
                    <strong> Searched Amenities </strong>
                </h5>
                <div class="d-flex flex-wrap amenities align-items-center mb-4">
                    <div class="item d-inline mb-2 mr-2">
                        <p class="text-white mb-0"> <strong> Restaurant </strong> </p>
                    </div>
                    <div class="item d-inline mb-2 mr-2">
                        <p class="text-white mb-0"> <strong> Private Pool </strong> </p>
                    </div>
                    <div class="item d-inline mb-2 mr-2">
                        <p class="text-white mb-0"> <strong> Wifi </strong> </p>
                    </div>
                    <div class="item d-inline mb-2 mr-2">
                        <p class="text-white mb-0"> <strong> In-Room Dining  </strong> </p>
                    </div>
                    <div class="item d-inline mb-2 mr-2">
                        <p class="text-white mb-0"> <strong> Lift | Escalator </strong> </p>
                    </div>
                    <div class="item d-inline mb-2 mr-2">
                        <p class="text-white mb-0"> <strong> Business Center </strong> </p>
                    </div>
                </div>

                <div class="accordion amenities-accordion" id="amenities-accordion">
                    <div class="accordion-header" id="headingOne">
                        <a class="accordion-link" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="d-flex header-item justify-content-between align-items-center mb-2">
                                <h5 class="title mb-0"> View Room Amenities </h5>
                                <div class="arrow-icon">
                                    <img src="<?= Yii::$app->request->baseUrl . 'images/primary-arrow.svg' ?>" alt="" class="img-fluid">
                                </div>
                            </div>
                        </a>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#amenities-accordion">
                        <div class="d-flex flex-wrap amenities align-items-center mb-4">
                            <div class="item d-inline mb-2 mr-2">
                                <p class="text-white mb-0"> <strong> Restaurant </strong> </p>
                            </div>
                            <div class="item d-inline mb-2 mr-2">
                                <p class="text-white mb-0"> <strong> Private Pool </strong> </p>
                            </div>
                            <div class="item d-inline mb-2 mr-2">
                                <p class="text-white mb-0"> <strong> Wifi </strong> </p>
                            </div>
                            <div class="item d-inline mb-2 mr-2">
                                <p class="text-white mb-0"> <strong> In-Room Dining  </strong> </p>
                            </div>
                            <div class="item d-inline mb-2 mr-2">
                                <p class="text-white mb-0"> <strong> Lift | Escalator </strong> </p>
                            </div>
                            <div class="item d-inline mb-2 mr-2">
                                <p class="text-white mb-0"> <strong> Business Center </strong> </p>
                            </div>
                        </div>
                    </div>
                </div>

                <h5 class="title font-primary mb-2">
                    <strong> Property Highlights </strong>
                </h5>
                <div class="detail mb-4">
                    <div class="item d-flex align-items-center">
                        <div class="icon mr-2">
                                <img src="<?= Yii::$app->request->baseUrl . 'images/swimming.svg' ?>" alt="" class="img-fluid">
                        </div>
                        <p class="mb-0"> 3 Swimming Pool (Indoor | Outdoor | Rooftop) </p>
                    </div>

                    <div class="item d-flex align-items-center">
                        <div class="icon mr-2">
                                <img src="<?= Yii::$app->request->baseUrl . 'images/restaurant.svg' ?>" alt="" class="img-fluid">
                        </div>
                        <p class="mb-0"> 3 Restaurant </p>
                    </div>

                    <div class="item d-flex align-items-center">
                        <div class="icon mr-2">
                                <img src="<?= Yii::$app->request->baseUrl . 'images/car.svg' ?>" alt="" class="img-fluid">
                        </div>
                        <p class="mb-0"> Parking (Free | At a nearby location) </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade media-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="owl-carousel main-carousel owl-theme mb-4">
                    <div class="item">
                        <img src="<?= Yii::$app->request->baseUrl . 'images/hotel.jpg' ?>" alt="swimming.svg" class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="<?= Yii::$app->request->baseUrl . 'images/hotel.jpg' ?>" alt="swimming.svg" class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="<?= Yii::$app->request->baseUrl . 'images/hotel.jpg' ?>" alt="swimming.svg" class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="<?= Yii::$app->request->baseUrl . 'images/hotel.jpg' ?>" alt="swimming.svg" class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="<?= Yii::$app->request->baseUrl . 'images/hotel.jpg' ?>" alt="swimming.svg" class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="<?= Yii::$app->request->baseUrl . 'images/hotel.jpg' ?>" alt="swimming.svg" class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="<?= Yii::$app->request->baseUrl . 'images/hotel.jpg' ?>" alt="swimming.svg" class="img-fluid">
                    </div>
                </div>
                <div class="owl-carousel traverse-carousel owl-theme">
                    <?php foreach(range(1, 5) as $index => $item) : ?>
                        <div class="item" data-index="<?= $index ?>">
                            <img src="<?= Yii::$app->request->baseUrl . 'images/hotel.jpg' ?>" alt="swimming.svg" class="img-fluid">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>