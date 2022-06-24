<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
frontend\assets\CommonAsset::register($this);
frontend\assets\OwlCarouselAsset::register($this);
$this->registerCssFile('/css/profile.css');
$this->registerCssFile('/css/srr.css');

?>

<div class="srr-contr">
    <div class="row srr-top justify-content-between align-items-center">
        <div class="col-md-3 mb-2">
            <p class="text-black">
                <strong> SRR NO. </strong>
            </p>
            <p> SRRNO23344324 </p>
        </div>
        <div class="col-md-3 mb-2">
            <p class="text-black">
                <strong> Enq </strong>
            </p>
            <p> ENQNO23344324 </p>
        </div>
        <div class="col-md-2 mb-2">
            <div class="d-flex enq-details justify-content-center align-content-center">
                <div class="icon view-icon mr-2">
                    <img src="<?= Yii::$app->request->baseUrl . 'images/view.svg' ?>" alt="" class="img-fluid">
                </div>
                <p class="mb-0"> ENQ Details </p>
            </div>
        </div>
        <div class="d-flex col-md-4 justify-content-between align-content-center mb-2">
            <a href="#" class="info-field px-4 text-center text-white"> Recall </a>
            <a href="#" class="info-field px-4 text-center text-white"> Edit </a>
            <a href="#" class="info-field px-4 text-center text-white"> Save </a>
            <a href="#" class="info-field px-4 text-center text-white"> Submit </a>
        </div>
    </div>
    <div class="row property-selection justify-content-between align-content-center">
        <div class="col-md-8 mb-2">
            <h5>
                <strong> Select Property </strong>
            </h5>
            <h4 class="title font-primary">
                <strong> The Venetian Resort Las Vegas (The Venetian Las Vegas and The Palazzo) </strong>
            </h4>
            <p class="mb-0"> 3355 South Las Vegas Boulevard</p>
        </div>
        <div class="col-md-1 mb-2">
            <h5>
                <strong> Slab Total </strong>
            </h5>
            <h5>
                <strong> ₹ 10,246 </strong>
            </h5>
        </div>
        <div class="col-md-1 mb-2">
            <h5>
                <strong> Slab Total </strong>
            </h5>
            <h5>
                <strong> ₹ 10,246 </strong>
            </h5>
        </div>
        <div class="col-md-1 mb-2">
            <h5>
                <strong> Varience </strong>
            </h5>
            <h5>
                <strong> ₹ 10,246 </strong>
            </h5>
        </div>
    </div>

    <div id="message-accordion" class="message-accordion mb-2">
        <div class="" id="messageOne">
            <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <div class="d-flex accordion-top justify-content-between align-content-center background-primary">
                    <h5 class="title text-white mb-0"> Message </h5>
                    <div class="arrow-icon">
                        <img src="<?= Yii::$app->request->baseUrl . 'images/arrow-down.svg' ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </a>
        </div>

        <div id="collapseOne" class="accordion-content collapse show" aria-labelledby="messageOne" data-parent="#message-accordion">
            <div class="d-flex justify-content-between align-content-center">
                <div class="form-group mb-0 mr-2">
                    <input type="text" name="" id="" class="form-control mb-0">
                </div>
                <div class="submit-message align-self-center">
                    <button class="info-field text-white"> Send </button>
                </div>
            </div>
        </div>
    </div>

    <?php foreach( range(0, 1) as $item ) : ?>
    <div class="room-content mb-4">
        <h5 class="title font-primary mb-4">
            <strong> Standard room with private room </strong>
        </h5>

        <?php foreach( range(0, 1) as $item ) : ?>
            <div class="table-responsive">
                <table class="table room-table table-sm mb-1">
                    <tbody>
                        <tr>
                            <td class="background-secondary title" colspan="2">
                                Day 1 | Wed | 10 Aug 2022
                            </td>
                            <td class="background-secondary title" colspan="2">
                                Day 1 | Wed | 10 Aug 2022
                            </td>
                            <td class="background-secondary title" colspan="2">
                                Day 1 | Wed | 10 Aug 2022
                            </td>
                            <td class="background-secondary title" colspan="2">
                                Day 1 | Wed | 10 Aug 2022
                            </td>
                        </tr>
                        <tr>
                            <td class="background-primary value text-white">
                                Tariff Type
                            </td>
                            <td class="background-primary value text-white">
                                Room
                            </td>
                            <td class="background-primary value text-white">
                                XX  EBA
                            </td>
                            <td class="background-primary value text-white">
                                XX  CWA
                            </td>
                            <td class="background-primary value text-white">
                                XX CNB
                            </td>
                            <td class="background-primary value text-white">
                                XX  SGL
                            </td>
                            <td class="background-primary value text-white">
                                XX  Total
                            </td>
                            <td class="border-around primary">
                                <div class="d-flex justify-content-center align-items-center px-1">
                                    <div class="icon meal-icon mr-2">
                                        <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>" alt="" class="img-fluid">
                                    </div>
                                    <h6 class="title mb-0 mr-2"> Map </h6>
                                    <div class="icon warning-icon mr-2">
                                        <img src="<?= Yii::$app->request->baseUrl . 'images/warning.svg' ?>" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-around">
                                Slab Rate
                            </td>
                            <td class="border-around">
                                Per Room
                            </td>
                            <td class="border-around">
                                Per EBA
                            </td>
                            <td class="border-around">
                                Per CWA
                            </td>
                            <td class="border-around">
                                Per CNB
                            </td>
                            <td class="border-around">
                                Per Room
                            </td>
                            <td class="border-around">
                                Unit X Rate
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="border-around">
                                SRR Request
                            </td>
                            <td class="input-field">
                                <input type="text" name="" id="" class="form-control">
                            </td>
                            <td class="input-field">
                                <input type="text" name="" id="" class="form-control">
                            </td>
                            <td class="input-field">
                                <input type="text" name="" id="" class="form-control">
                            </td>
                            <td class="input-field">
                                <input type="text" name="" id="" class="form-control">
                            </td>
                            <td class="input-field">
                                <input type="text" name="" id="" class="form-control">
                            </td>
                            <td class="input-field">
                                <input type="text" name="" id="" class="form-control">
                            </td>
                            <td class="checkbox checkbox-primary checkbox-circle">
                                <input id="chkDefault" type="checkbox" />
                                <label for="chkDefault">
                                    Apply LS Rate
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-around">
                                Slab Rate
                            </td>
                            <td class="border-around">
                                Per Room
                            </td>
                            <td class="border-around">
                                Per EBA
                            </td>
                            <td class="border-around">
                                Per CWA
                            </td>
                            <td class="border-around">
                                Per CNB
                            </td>
                            <td class="border-around">
                                Per Room
                            </td>
                            <td class="border-around">
                                Unit X Rate
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
</div>