<?php

    /* @var $this yii\web\View */

    use yii\helpers\Html;
    frontend\assets\CommonAsset::register($this);
    frontend\assets\DatePickerAsset::register($this);
    $this->registerCssFile('/css/search2.css');
    $this->title = 'Search';
?>

<div class="search-contr">
    <div class="modal searchModal fade" id="auto-rooming-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="title"> Auto Rooming </h5>
                    <button type="button" class="close close-icon" data-dismiss="modal"
                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body auto-rooming">
                    <div class="rooming-details">
                        <div class="filter-accordion accordion accordion-manual" id="accordion-primary">
                            <div class="card mb-0">
                                    <div class="card-header pb-1" id="hotel-1">
                                        <div class="row rooming-header justify-content-md-between align-items-center">
                                            <div class="col-md-2 output-field">
                                                <!-- <p class="highlight"> Date </p> -->
                                                <p class="value"> 13 Jun 2022 </p>
                                            </div>

                                            <div class="row col-md-3 header-right justify-content-md-end align-items-center">
                                                <div class="col-md-8">
                                                    <p class="value mr-1">
                                                        <u class="font-primary"> ENQ Details </u>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="collapse show">
                                        <div class="row rooming-info justify-content-md-between align-items-start">
                                            <div class="col-md-4 pl-0">
                                                <div class="output-field mb-2">
                                                    <p class="font-primary"> ENQ Ref </p>
                                                    <p class="value"> Enquiry No + Guest name </p>
                                                </div>

                                                <div class="output-field mb-2">
                                                    <p class="font-primary"> Property </p>
                                                    <p class="value"> Selected property’s name </p>
                                                </div>

                                                <div class="output-field mb-2">
                                                    <p class="font-primary"> Room </p>
                                                    <p class="value"> Selected room category </p>
                                                </div>

                                                <div class="output-field mb-2">
                                                    <p class="font-primary"> Occupancy </p>
                                                    <p class="value"> SP: 2A | 2B | 2C | 2D </p>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="responsive">
                                                    <table class="table table-sm table-borderless table-md-responsive">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="output-field active">
                                                                        <p class="value"> Child policy </p>
                                                                    </div>
                                                                </td>
                                                                <td colspan="3">
                                                                    <div class="output-field">
                                                                        <p class="highlight"> N1 </p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="output-field active">
                                                                        <p class="value"> Guest count </p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="output-field active">
                                                                        <p class="value"> Adult </p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="output-field active">
                                                                        <p class="value"> Child </p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="output-field active">
                                                                        <p class="value"> Infant </p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="output-field">
                                                                        <p class="value"> In Enquiry </p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="output-field">
                                                                        <p class="highlight"> N2 </p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="output-field">
                                                                        <p class="highlight"> N2 </p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="output-field">
                                                                        <p class="value"> Per Hotel Policy </p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="output-field">
                                                                        <p class="highlight"> SP:1A </p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="output-field">
                                                                        <p class="highlight"> SP:1B </p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="output-field">
                                                                        <p class="highlight"> SP:1C </p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="rooming-table">
                                            <div class="responsive">
                                                <table class="table table-sm table-borderless table-md-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="output-field active">
                                                                    <p class="value"> Tariff </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field active">
                                                                    <p class="value"> Room </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field active">
                                                                    <p class="value"> EAB </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field active">
                                                                    <p class="value"> CWB </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field active">
                                                                    <p class="value"> CNB </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field active">
                                                                    <p class="value"> SGL </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field active">
                                                                    <p class="value"> SGL </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> N3 </p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> Slab Tariff </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> SP:4A </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> SP:4A </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> SP:4A </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> SP:4A </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> SP:4A </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field active">
                                                                    <p class="value"> SP:4A </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> N4 </p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> Slab Tariff </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> SP:4A </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> SP:4A </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> SP:4A </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> SP:4A </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> SP:4A </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex output-field align-items-center">
                                                                    <div class="view-icon mr-2">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/view.svg' ?>" alt="" class="img-fluid">
                                                                    </div>
                                                                    <p class="value"> SP:4A </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> LS Tariff </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> SP:SF </p>
                                                                </div>
                                                            </td>
                                                            <td colspan="4">
                                                                
                                                            </td>
                                                            <td>
                                                                <div class="d-flex output-field align-items-center">
                                                                    <div class="view-icon mr-2">
                                                                        <img src="<?= Yii::$app->request->baseUrl . 'images/view.svg' ?>" alt="" class="img-fluid">
                                                                    </div>
                                                                    <p class="value"> SP:4A </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="divider"></div>
                    <div class="rooming-details">
                        <div class="filter-accordion accordion">
                            <div class="card mb-0">
                                <a class="card-anchor">
                                    <div class="card-header mb-1 px-0" id="hotel-1">
                                        <div class="row rooming-header justify-content-md-between align-items-center">
                                            <div class="row col-md-6 align-items-center">
                                                <div class="col-md-6">
                                                    <div class="output-field">
                                                        <p class="highlight"> Date of stay </p>
                                                        <p class="value"> NS </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row col-md-5 header-right justify-content-md-between align-items-center">
                                                <div class="col-md-4">
                                                    <div class="output-field bg-dark">
                                                        <p class="text-white text-center mb-0"> OP Status </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="output-field">
                                                        <p class="highlight"> Same as in Manual PLan </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div id="secondary-one" class="collapse show" aria-labelledby="secondary-one" data-parent="#accordion-secondary">
                                    <h5 class="title ml-2"> Rooming Tariff </h5>
                                    <div class="row secondary-item justify-content-md-between align-items-start mb-4">
                                        <div class="col-md-8 rooming-table">
                                            <div class="responsive">
                                                <table class="table table-sm table-borderless table-md-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="output-field active">
                                                                    <p class="value"> Room </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field active">
                                                                    <p class="value"> EBA </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field active">
                                                                    <p class="value"> CWB </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field active">
                                                                    <p class="value"> CNB </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field active">
                                                                    <p class="value"> SGL </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field active">
                                                                    <p class="value"> FOC </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field active">
                                                                    <p class="value"> Total </p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> R 4 </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> R 5 </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> R 6 </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> R 7 </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> R 8 </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> R 9 </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> R 10 </p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> R 12 </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> R 13 </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> R 14 </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> R 15 </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> R 16 </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> R 17 </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="output-field">
                                                                    <p class="value"> R 18 </p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex output-field mb-2">
                                                <p class="value"> Pax - wise Bed Allocation </p>
                                            </div>
                                            <div class="row output-field m-0">
                                                <div class="col-4 border-right">
                                                    <p class="highlight mr-2"> R18 </p>
                                                    <p class="highlight mr-2"> R19 </p>
                                                    <p class="highlight mr-2"> R20 </p>
                                                </div>
                                                <div class="col-8 text-center">
                                                    <p class="highlight mr-2"> R18 </p>
                                                    <p class="highlight mr-2"> R19 </p>
                                                    <p class="highlight mr-2"> R20 </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="col-md-2 btn btn-lg btn-default mr-2" data-dismiss="modal"> Cancel </button>
                    <button type="button" id="cropImageBtn" class="col-md-2 btn btn-lg btn-save"> Submit </button>
                </div> -->
            </div>
        </div>
    </div>
</div>