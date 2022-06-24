<?php

    /* @var $this yii\web\View */

    use yii\helpers\Html;
    frontend\assets\CommonAsset::register($this);
    $this->registerCssFile('/css/search5.css');
    $this->title = '';
?>

<div class="search-contr">
    <div class="modal searchModal fade" id="searchModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header align-items-center p-1">
                    <h5 class="title"> Manual Rooming Plan</h5>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-filter text-white btn-lg mr-2"> Submit </button>
                        <button type="button" class="close close-icon" data-dismiss="modal"
                        aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body px-0">
                    <div class="rooming-details mb-4">
                        <div class="filter-accordion accordion accordion-primary" id="accordion-primary">
                                <div class="card mb-0">
                                    <div class="card-anchor">
                                        <div class="card-header mb-1" id="hotel-1">
                                            <div class="row rooming-header justify-content-md-between align-items-center">
                                                <div class="col-md-4 output-field">
                                                    <p class="value"> Enquiry No | Guest Name </p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="value mr-1" role="button">
                                                        <u class="font-primary"> Day 1 | Wed, 10 Aug 22 </u>
                                                    </p>
                                                </div>
                                                <div class="d-flex col-md-3 justify-content-center output-field">
                                                    <div class="meal-icon">
                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>" alt="" class="img-fluid">
                                                    </div>
                                                    <p> AP (Breakfast) </p>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="accordion-caret text-center" data-toggle="collapse" data-target="#primary-one" aria-expanded="true" aria-controls="primary-one" role="button">
                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/arrow-down.svg' ?>" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="primary-one" class="collapse show" aria-labelledby="primary-one" data-parent="#accordion-primary">                                       
                                            <div class="guest-info px-3">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="d-flex background-secondary p-2 mr-2">
                                                        <h5 class="title font-primary mr-2"> The Leaf Hotel & Resort</h5>
                                                        <p class="mb-0"> Business Hotel 3 Star </p>
                                                    </div>
                                                    <div class="output-field">
                                                        <p class="mb-0"> Munnar (Locality) | Kerala | India </p>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between align-items-center mb-2">
                                                    <div class="col-md-2">
                                                        <p class="mb-0"> Crown Luxury </p>
                                                    </div>
                                                    <div class="d-flex col-md-3 justify-content-center align-items-center output-field">
                                                        <div class="bed-icon mr-2">
                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/bed.svg' ?>" alt="" class="img-fluid">
                                                        </div>
                                                        <p class="mb-0"> DB:2 | EB:2 | SB:1 </p>
                                                    </div>
                                                    <div class="d-flex col-md-3 justify-content-center align-items-center output-field">
                                                        <div class="child-icon mr-2">
                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                        </div>
                                                        <p class="mb-0 mr-2"> 1 - 9 YR </p>

                                                        <div class="adult-icon mr-2">
                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                        </div>
                                                        <p class="mb-0 mr-2"> 10 - 15 YR </p>
                                                    </div>
                                                    <div class="d-flex col-md-3 justify-content-center output-field">
                                                        <div class="meal-icon">
                                                            <img src="<?= Yii::$app->request->baseUrl . 'images/meal.svg' ?>" alt="" class="img-fluid">
                                                        </div>
                                                        <p> AP (Breakfast) </p>
                                                    </div>
                                                </div>
                                                <div class="guest-details">
                                                    <div class="row guest-content align-items-start">
                                                        <div class="col-md-8">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <p class="mb-0 mr-2">
                                                                    <strong> Pax count </strong>
                                                                </p>
                                                                <div class="d-flex justify-content-center align-items-center output-field">
                                                                    <div class="child-icon mr-2">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                                    </div>
                                                                    <p class="mb-0 mr-2"> 1 - 9 YR </p>

                                                                    <div class="adult-icon mr-2">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                    </div>
                                                                    <p class="mb-0 mr-2"> 10 - 15 YR </p>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="row tariff-info align-items-center mb-2">
                                                                <div class="col-md-2 output-field active text-center mr-2">
                                                                    <p class="value"> Rooms </p>
                                                                </div>
                                                                <div class="col-md-2 output-field active text-center mr-2">
                                                                    <p class="value"> EBS </p>
                                                                </div>
                                                                <div class="col-md-2 output-field active text-center mr-2">
                                                                    <p class="value"> CWB </p>
                                                                </div>
                                                                <div class="col-md-2 output-field active text-center mr-2">
                                                                    <p class="value"> CNB </p>
                                                                </div>
                                                                <div class="col-md-2 output-field active text-center mr-2">
                                                                    <p class="value"> SGL </p>
                                                                </div>
                                                            </div>

                                                            <div class="row tariff-info align-items-center mb-4">
                                                                <div class="col-md-2 output-field text-center mr-2">
                                                                    <input type="text" name="" value="99" id="" class="unit-value form-control h-auto border-0 p-0 m-0">
                                                                </div>
                                                                <div class="col-md-2 output-field text-center mr-2">
                                                                    <input type="text" name="" value="99" id="" class="unit-value form-control h-auto border-0 p-0 m-0">
                                                                </div>
                                                                <div class="col-md-2 output-field text-center mr-2">
                                                                    <input type="text" name="" value="99" id="" class="unit-value form-control h-auto border-0 p-0 m-0">
                                                                </div>
                                                                <div class="col-md-2 output-field text-center mr-2">
                                                                    <input type="text" name="" value="99" id="" class="unit-value form-control h-auto border-0 p-0 m-0">
                                                                </div>
                                                                <div class="col-md-2 output-field text-center mr-2">
                                                                    <input type="text" name="" value="99" id="" class="unit-value form-control h-auto border-0 p-0 m-0">
                                                                </div>
                                                            </div>

                                                            <div class="d-flex justify-content-start pax-count align-items-center mb-2">
                                                                <div class="warning-icon mr-2">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/warning.svg' ?>" alt="" class="img-fluid">
                                                                </div>
                                                                <p class="mb-0 mr-2">
                                                                    Unallocated Pax: 
                                                                </p>
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <div class="child-icon mr-2">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                                    </div>
                                                                    <p class="mb-0 mr-2"> 1 - 9 YR </p>
                                                                    <div class="adult-icon mr-2">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                    </div>
                                                                    <p class="mb-0 mr-2"> 10 - 15 YR </p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-start pax-count align-items-center mb-2">
                                                            
                                                                <div class="warning-icon mr-2">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/warning.svg' ?>" alt="" class="img-fluid">
                                                                </div>
                                                                <p class="mb-0 mr-2">
                                                                    Excess Bed Utilization: DB:22 | EB:22 | SB:22
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p class="mb-4 text-center">
                                                                <strong> Pax-Wise Bed Utilization </strong>
                                                            </p>

                                                            <div class="d-flex justify-content-center align-items-center mb-1">
                                                                <div class="adult-icon mr-2">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                </div>
                                                                <div class="output-field mr-2">
                                                                    <p class="mb-0"> DB:99 </p>
                                                                </div>
                                                                <div class="output-field mr-2">
                                                                    <p class="mb-0"> EB:99 </p>
                                                                </div>
                                                                <div class="output-field mr-2">
                                                                    <p class="mb-0"> SGL:99 </p>
                                                                </div>
                                                            </div>

                                                            <div class="d-flex justify-content-center align-items-center mb-1">
                                                                <div class="adult-icon mr-2">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/adult.svg' ?>" alt="" class="img-fluid">
                                                                </div>
                                                                <div class="output-field mr-2">
                                                                    <p class="mb-0"> DB:99 </p>
                                                                </div>
                                                                <div class="output-field mr-2">
                                                                    <p class="mb-0"> EB:99 </p>
                                                                </div>
                                                                <div class="output-field mr-2">
                                                                    <p class="mb-0"> SGL:99 </p>
                                                                </div>
                                                            </div>

                                                            <div class="d-flex justify-content-center align-items-center mb-1">
                                                                <div class="child-icon mr-2">
                                                                    <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                                </div>
                                                                <div class="output-field mr-2">
                                                                    <p class="mb-0"> DB:99 </p>
                                                                </div>
                                                                <div class="output-field mr-2">
                                                                    <p class="mb-0"> EB:99 </p>
                                                                </div>
                                                                <div class="output-field mr-2">
                                                                    <p class="mb-0"> SGL:99 </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 p-0">
                                                            <P class="m-2">
                                                                <strong> Tariff Basis: Slab Rate </strong>
                                                            </P>

                                                            <table class="table table-sm tariff-table mb-2">
                                                                <tr>
                                                                    <td class="output-field active text-center" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                        <p class="value"> Rooms </p>
                                                                    </td>
                                                                    <td class="output-field active text-center" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                        <p class="value"> EBA </p>
                                                                    </td>
                                                                    <td class="output-field active text-center" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                        <p class="value"> CWB </p>
                                                                    </td>
                                                                    <td class="output-field active text-center" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                        <p class="value"> CNB </p>
                                                                    </td>
                                                                    <td class="output-field active text-center" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                        <p class="value"> SGL </p>
                                                                    </td>
                                                                    <td class="output-field active text-center" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                        <div class="d-flex justify-content-center align-items-center">
                                                                            <div class="child-icon mr-2">
                                                                                <img src="<?= Yii::$app->request->baseUrl . 'images/child.svg' ?>" alt="" class="img-fluid">
                                                                            </div>
                                                                            <p class="value"> FOC </p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="output-field active text-center" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                        <p class="value"> Dinner </p>
                                                                    </td>
                                                                    <td class="output-field active text-center" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                        <p class="value"> Day Total </p>
                                                                    </td>
                                                                </tr>
                                                                <tr class="tariff-info">
                                                                    <td class="output-field text-center" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                        <p class="value"> 1 * 24450 </p>
                                                                    </td>
                                                                    <td class="output-field text-center" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                        <p class="value"> 2 * 2950 </p>
                                                                    </td>
                                                                    <td class="output-field text-center" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                        <p class="value"> 0 </p>
                                                                    </td>
                                                                    <td class="output-field text-center" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                        <p class="value"> 1 * 2700 </p>
                                                                    </td>
                                                                    <td class="output-field">
                                                                        <p class="value"> 0 </p>
                                                                    </td>
                                                                    <td class="output-field text-center" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                        <p class="value"> 0 </p>
                                                                    </td>
                                                                    <td class="output-field text-center" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                        <p class="value"> 0 </p>
                                                                    </td>
                                                                    <td class="output-field text-center" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                        <p class="value"> 35,000/- </p>
                                                                    </td>
                                                                </tr>
                                                            </table>

                                                        </div>
                                                    </div>
                                                    .
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="col-md-2 btn btn-lg btn-default mr-2"> Edit </button>
                    <button type="button" class="col-md-2 btn btn-lg btn-default mr-2" data-dismiss="modal"> Cancel </button>
                    <button type="button" id="cropImageBtn" class="col-md-2 btn btn-lg btn-save"> Submit </button>
                </div>
            </div>
        </div>
    </div>
</div>