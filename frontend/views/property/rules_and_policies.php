<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;
$this->registerCssFile('/css/form.css');
$this->registerCssFile('/css/property/rules_and_policies.css');
$this->registerJsFile('/js/property/rules_and_policies/index.js');
$this->registerJsFile('/js/property/rules_policies.js');

$time_slot= array();
if ( empty( $format ) ) {
    $format = 'H:i';
}

$lower = 0; $upper = 86400; $step = 3600; $format = '';
$i = 0;
foreach ( range( $lower, $upper, $step ) as $increment ) {
    $increment = gmdate( 'H:i', $increment );
    $time_slot[$i] = $increment;
    $i++;
}
?>
<style>
    table thead tr {
        color: #FFFFFF;
        background-color: var(--secondary-color);
        /*height: 45px;*/
        height: 31px;
    }
    /*.custom-control-label*/
    /*{*/
    /*    margin-left: 21px;*/
    /*    margin-top: 12px;*/

    /*}*/
</style>
<!-- load the third party plugin assets (jquery-confirm) -->
<link href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" rel="stylesheet" type="text/css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<h5 class="title"> <?= $property->name; ?> </h5>

<div class="tab-section rules_and_policies_contr">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button onclick="location.href='<?= Url::toRoute(['property/rules','id' => $property->id]) ?>'" class="selectedButton" id="pills-basic-tab" href="#pills-basic">
            <i class="fas fa-times"></i> Rules & Policies
            </button><hr class="new5" >
        </li>
        <li class="nav-item" role="presentation">
            <button onclick="location.href='<?= Url::toRoute(['property/categories','id' => $property->id]) ?>'" class="tablinks" id="pills-contact-tab" href="#pills-contact"> <i class="fas fa-check"></i> Room Category </button>
        </li>
        <li class="nav-item" role="presentation">
            <button onclick="location.href='<?= Url::toRoute(['property/serviceamenities','id' => $property->id]) ?>'" class="tablinks" id="pills-guest-tab" href="#pills-guest"> <i class="fas fa-times"></i> Service & Amenities </button>
        </li>
        <li class="nav-item" role="presentation">
            <button onclick="location.href='<?= Url::toRoute(['property/pictures','id' => $property->id]) ?>'" class="tablinks" id="pills-accommodation-tab" href="#pills-accommodation"> Property pictures
            </button>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
        <?php $form = ActiveForm::begin(['id' => 'operational_form','enableClientValidation' => false]) ?>


        <div id="rules_policies_div" class="tab-pane fade active show">
            <div class="accordion" id="myAccordion">
                <div class="accordion-item">
                    <button type="button" class="btn accordion-top text-left" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        1. Check In | Check Out
                    </button>
                    <div id="collapseOne" class="collapse show" data-parent="#myAccordion">
                        <div class="accordion-content form-checkin-out-content">
                            <input type="hidden" value="<?= $property->id ?>" name="property_id" id="property_id">
                            <div class="d-flex form-group align-items-center">
                                <div class="checkmark">
                                    <?= $form->field($property, 'twenty_four_hours_check_in')->inline()->radioList([1 => '24 hour check out', 2 => 'Check in / check out as follows'],['class' => 'checkmark','style' => 'margin-left: -0.7rem;'])->label(false); ?>
                                </div>
                            </div>
                            <div class="d-flex form-group align-items-center">
                                <div class="d-flex form-material form-checkin align-items-center mr-4">
                                    <?php echo $form->field($property, 'check_in_time')->dropDownList($time_slot, ['class' => 'time_c padding-time','prompt' => 'Check in', ($property->twenty_four_hours_check_in == 2 ) ? '' : 'disabled' => 'disabled' ])->label(false); ?>
                                </div>
                                <div class="d-flex form-material form-checkin align-items-center margin-left-check">
                                    <?php echo $form->field($property, 'check_out_time')->dropDownList($time_slot, ['class' => 'time_c padding-time','prompt' => 'Check out', ($property->twenty_four_hours_check_in == 2 ) ? '' : 'disabled' => 'disabled'])->label(false); ?>
                                </div>
                            </div>
                        </div>
                        <button class="buttonSave" id="save_checkin_checkout" type="submit" style="width: 85px; border-radius: 5px"> Save </button>
                    </div>
                </div>

                <div class="accordion-item">
                    <button type="button" class="btn accordion-top text-left collapsed" type="button"
                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                        2. Smoking Policy
                    </button>
                    <div id="collapseTwo" class="collapse" data-parent="#myAccordion">
                        <div class="accordion-content">

                            <div class="form-select select2-60">
                                <?php echo $form->field($property, 'smoking_policy_id')->dropDownList($smoking_policy, ['class' => 'select2','prompt' => 'Choose...'])->label(false); ?>
                            </div>
                        </div>
                        <button class="buttonSave" style="width: 85px; border-radius: 5px" id="save_smoking_policy"> Save </button>
                    </div>
                </div>

                <div class="accordion-item">
                    <button type="button" class="btn accordion-top text-left collapsed" type="button"
                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                        3. Pets Policy
                    </button>
                    <div id="collapseThree" class="collapse" data-parent="#myAccordion">
                        <div class="accordion-content">

                            <div class="form-select select2-60">
                                <?php echo $form->field($property, 'pets_policy_id')->dropDownList($pets_policy, ['class' => 'select2','prompt' => 'Choose...'])->label(false); ?>
                            </div>
                        </div>
                        <button class="buttonSave" style="width: 85px; border-radius: 5px" id="save_pets_policy"> Save </button>
                    </div>
                </div>

                <div class="accordion-item">
                    <button type="button" class="btn accordion-top text-left collapsed" type="button"
                            data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                            aria-controls="collapseFour">
                        4. Cancellation Policy
                    </button>
                    <div id="collapseFour" class="collapse" data-parent="#myAccordion">
                        <div class="accordion-content">
                            <div class="tab-contr">
                                <ul class="nav nav-pills" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="periodCancellation-tab" data-toggle="tab"
                                           href="#periodCancellation" role="tab" aria-controls="periodCancellation"
                                           aria-selected="true"> Period Cancellation Policy </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="adminCancellation-tab" data-toggle="tab"
                                           href="#adminCancellation" role="tab" aria-controls="adminCancellation"
                                           aria-selected="false"> Admin Charges for Cancellation </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="periodCancellation" role="tabpanel"
                                         aria-labelledby="periodCancellation-tab">
                                        <div class="form-group form-checkbox">
                                            <div class="form-material">
                                                <input <?= ($property->cancellation_has_period_charge == 1) ? "checked" : "" ?> type="checkbox" name="" id="property-cancellation_has_period_charge"
                                                       class="form-input-checkbox vertical-align-middle">
                                                <label for="cancellation-policy ">
                                                    <strong> Cancellation policy has period based rates </strong>
                                                </label>
                                            </div>
                                        </div>

                                        <div id="pb_div" style = "display: <?= ($property->cancellation_has_period_charge == 1) ? "block" : "none" ?> ">
                                            <div class="row checked-cancellation-policy align-items-center mb-2">

                                                <div class="col-2 fit-width-112px">
                                                    <div class="form-group">
                                                        <input readonly value="100" type="text"  id="" class="form-control input-sh">
                                                    </div>
                                                </div>
                                                <div class="col-4 fit-width-215px">
                                                    <p> % refund if cancelled on or before </p>
                                                </div>
                                                <div class="col-2 fit-width-70px">
                                                    <div class="form-group">
                                                        <input value="<?= $property->cancellation_full_refund_days?>" type="text" name="cancellation_full_refund_days" id="property-cancellation_full_refund_days" class="form-control input-sm">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <p> days of arrival date </p>
                                                </div>
                                            </div>

                                            <div class="row checked-cancellation-policy align-items-center mb-2">
                                                <div class="col-2 fit-width-112px">
                                                    <div class="form-group">
                                                        <input readonly value="0" type="text"  id="" class="form-control input-sh">
                                                    </div>
                                                </div>
                                                <div class="col-4 fit-width-215px">
                                                    <p> % refund if cancelled on or later than </p>
                                                </div>
                                                <div class="col-2 fit-width-70px">
                                                    <div class="form-group">
                                                        <input value="<?= $property->cancellation_no_refund_days?>" type="text" name="cancellation_no_refund_days" id="property-cancellation_no_refund_days" class="form-control input-sm">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <p> days of arrival date </p>
                                                </div>
                                            </div>
                                            <div id="period_data">
                                            <div class="cancellation-detail">
                                                <?php
                                                if (count($property->cancellationRefundPeriods) > 0) {
                                                    $i = 0;
                                                foreach ($property->cancellationRefundPeriods as $cancellation_rate) {
                                                ?>
                                                    <div class="row cancellation-detail-item align-items-center mb-2">
                                                        <div class="col-2 fit-width-112px">
                                                            <div class="form-group">
                                                                <input value="<?=$cancellation_rate->percentage ?>" type="text" name="percentage[]" id="" class="form-control input-sh">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 fit-width-215px">
                                                            <p> % of package amount if cancelled </p>
                                                        </div>
                                                        <div class="d-flex col-2 fit-width-105px align-items-center pr-0">
                                                            <div class="form-group mr-3">
                                                                <input  value="<?=$cancellation_rate->from_date ?>"type="text" name="from_days[]" id="" readonly="readonly" class="form-control input-sh">
                                                            </div>
                                                            <p> to </p>
                                                        </div>
                                                        <div class="col-2 fit-width-70px">
                                                            <div class="form-group">
                                                                <input value="<?=$cancellation_rate->to_date ?>" type="text" name="to_days[]" id="" class="form-control input-sh">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <p> days before arrival date </p>
                                                        </div>
                                                        <?php if ($i > 0) : ?>
                                                        <div class="col-1 remove-cancellation-detail align-self-start">
                                                            <div class="delete-icon my-1">
                                                                <i class="far fa-trash-alt"></i>
                                                            </div>
                                                        </div>
                                                      <?php endif; ?>
                                                    </div>

                                                <?php  $i++; }
                                                }
                                                else
                                                {
                                                ?>
                                                <div class="row align-items-center mb-2">
                                                    <div class="col-2 fit-width-112px">
                                                        <div class="form-group">
                                                            <input type="text" name="percentage[]" id="" class="form-control input-sh">
                                                        </div>
                                                    </div>
                                                    <div class="col-4 fit-width-215px">
                                                        <p>% of package amount if cancelled </p>
                                                    </div>
                                                    <div class="d-flex col-2 fit-width-105px align-items-center pr-0">
                                                        <div class="form-group mr-3">
                                                            <input type="text" name="from_days[]" id="" readonly="readonly" class="form-control input-sh">
                                                        </div>
                                                        <p> To </p>
                                                    </div>
                                                    <div class="col-2 fit-width-70px">
                                                        <div class="form-group">
                                                            <input type="text" name="to_days[]" id="" class="form-control input-sh">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <p> days before arrival date </p>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="d-flex add-items add-cancellation-detail align-items-center mb-2">
                                                <div class="add-icon mr-1">
                                                    <i class="fas fa-plus"></i>
                                                </div>
                                                <p class="mb-0"> Add more </p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="adminCancellation" role="tabpanel"
                                         aria-labelledby="adminCancellation-tab">
                                        <div class="form-group form-checkbox mb-4">
                                            <div class="form-material">
                                                <input  <?= ($property->cancellation_has_admin_charge == 1) ? "checked" : "" ?> type="checkbox" name="" id="property-cancellation_has_admin_charge"
                                                       class="form-input-checkbox vertical-align-middle">
                                                <label for="admin-rates" class="mb-0">
                                                    <strong> Cancellation Policy has Admin Rates </strong>
                                                </label>
                                            </div>
                                        </div>

                                        <div id="ac_div" style = "display: <?= ($property->cancellation_has_admin_charge == 1) ? "block" : "none" ?> ">
                                        <div class="d-flex form-group align-items-center">
                                            <div class="form-material form-checkout mr-4">
                                                <input <?= ($property->admin_cancellation_type == 1) ? "checked" : "" ?> type="radio" name="Property[admin_cancellation_type]"
                                                       value="1" id="form-lump-sum"
                                                       class="form-radio vertical-align-middle">
                                                <label for="form-lump-sum"> Lump Sum Charges per Cancellation </label>
                                            </div>
                                            <div class="form-material form-checkout mr-4">
                                                <input <?= ($property->admin_cancellation_type == 2) ? "checked" : "" ?> type="radio" name="Property[admin_cancellation_type]"
                                                       value="2" id="form-package-amount"
                                                       class="form-radio vertical-align-middle">
                                                <label for="form-package-amount"> 0 % Package Amount </label>
                                            </div>
                                            <div class="form-material form-checkout">
                                                <input <?= ($property->admin_cancellation_type == 3) ? "checked" : "" ?> type="radio" name="Property[admin_cancellation_type]"
                                                       value="3" id="form-per-basis" class="form-radio vertical-align-middle">
                                                <label for="form-per-basis"> Per Basis </label>
                                            </div>
                                        </div>

                                        <div class="row admin-charges-item lum_sum_amt align-items-center mb-2"
                                            style="">
                                            <div class="col-4 mr-2"  >
                                                <label for="form-per-basis"> Lum Sum Amount </label>
                                                <input value="<?= $property->cancellation_lumsum_amount?>" type="text" name="cancellation_lumsum_amount" id="property-cancellation_lumsum_amount" class="form-control input-sh input-text-width-100px">
                                            </div>
                                        </div>

                                        <div class="row admin-charges-item package-amt align-items-center mb-2"
                                             style="display: <?= ($property->admin_cancellation_type == 2) ? "block" : "none" ?>;">
                                            <div class="col-2 mr-2">
                                                <p> Percentage Rate </p>
                                            </div>
                                            <div class="col-3 form-group">
                                                <input value="<?= $property->cancellation_percentage_rate?>" type="text" name="cancellation_percentage_rate" id="property-cancellation_percentage_rate" class="form-control input-sh">
                                            </div>
                                        </div>

                                        <div class="row admin-charges-item kids-amt align-items-center mb-2"
                                             style="display: <?= ($property->admin_cancellation_type == 3) ? "block" : "none" ?>;">
                                            <div class="col-2 mr-2">
                                                <p> Adult Amount </p>
                                            </div>
                                            <div class="col-3 form-group">
                                                <input value="<?= $property->cancellation_per_adult_amount?>" type="text" name="cancellation_per_adult_amount" id="property-cancellation_per_adult_amount" class="form-control input-sh">
                                            </div>
                                        </div>

                                        <div class="row admin-charges-item kids-amt align-items-center mb-2"
                                             style="display: <?= ($property->admin_cancellation_type == 3) ? "block" : "none" ?>;">
                                            <div class="col-2 mr-2">
                                                <p> Kids Amount </p>
                                            </div>
                                            <div class="col-3 form-group">
                                                <input value="<?= $property->cancellation_per_kids_amount?>" type="text" name="cancellation_per_kids_amount" id="property-cancellation_per_kids_amount" class="form-control input-sh">
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button id="save_cancellation_policy" class="buttonSave" style="width: 85px; border-radius: 5px"> Save </button>
                    </div>
                </div>

                <div class="accordion-item">
                    <button type="button" class="btn accordion-top text-left collapsed" type="button"
                            data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                            aria-controls="collapseFive">
                        5. Child & Infant Policy
                    </button>
                    <div id="collapseFive" class="collapse" data-parent="#myAccordion">
                        <div class="accordion-content">
                            <div class="form-group form-checkbox mb-2">
                                <div class="form-material" >


                                                                        <input <?php if($property['allow_child_of_all_ages'] == 1): ?> checked <?php endif ?>  type="checkbox" name="" id="property-allow_child_of_all_ages"  class="form-input-checkbox child-checkbox vertical-align-middle">

                                                                        <label for="property-allow_child_of_all_ages" class="mb-0 v">
                                                                            Our property welcomes child of all age if accompanied by adults
                                                                        </label>
                                </div>
                            </div>

                            <div class="d-flex form-group form-checkbox align-items-center mb-4">
                                <div class="form-material mr-2">

                                                                        <input <?php if($property['restricted_for_child'] == 1): ?> checked <?php endif ?> type="checkbox" name="child_age" id="property-restricted_for_child" class="form-input-checkbox child-checkbox">
                                                                        <label for="property-restricted_for_child" class="mb-0">
                                                                            Admission in our property is 'Restricted' for child below
                                                                        </label>
                                </div>
                                <div class="form-input mr-2"><?= $form->field($property, 'restricted_for_child_below_age')->textInput(['type' => 'text','class' => 'form-control input-sm'])->label(false) ?>

                                </div>
                                <p> Years </p>
                            </div>
                            <div class="child-policy-table table-responsive">
                                <table class="display table-sm">
                                    <thead class="child-policy-property-table">
                                    <tr>
                                        <th width="60%"> Tariff Category </th>
                                        <th width="20%"> From </th>
                                        <th width="5px" class="text-center"> </th>
                                        <th width="20%"> To </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <div class="form-material mr-2 v">
                                                    <?= $form->field($property, 'allow_complimentary' )->checkbox()->label("Complimentary For guests aged between"); ?>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group mr-2">
                                                <?= $form->field($property, 'complimentary_from_age')->textInput(['type' => 'number', 'readonly' => 'readonly', 'class' => 'form-control input-md','placeholder' => ''])->label(false) ?>
                                            </div>
                                        </td>
                                        <td> - </td>
                                        <td>
                                            <div class="form-group mr-2">
                                                <?= $form->field($property, 'complimentary_to_age')->textInput(['type' => 'number','class' => 'form-control input-md','placeholder' => ''])->label(false) ?>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <div class="form-material mr-2">
                                                    <?= $form->field($property, 'allow_child_rate')->checkbox()->label("Child Rate applied for guests between"); ?>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group mr-2">
                                                <?= $form->field($property, 'child_rate_from_age')->textInput(['type' => 'number',  'readonly' => 'readonly','class' => 'form-control input-md','placeholder' => ''])->label(false) ?>
                                            </div>
                                        </td>
                                        <td> - </td>
                                        <td>
                                            <div class="form-group mr-2">
                                                <?= $form->field($property, 'child_rate_to_age')->textInput(['type' => 'number','class' => 'form-control input-md','placeholder' => ''])->label(false) ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <div class="form-material mr-2">
                                                    <?= $form->field($property, 'allow_adult_rate')->checkbox()->label("Adult Rate  applied  for guests over"); ?>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group mr-2">
                                                <?= $form->field($property, 'adult_rate_age')->textInput(['type' => 'number', 'readonly' => 'readonly', 'class' => 'form-control input-md','placeholder' => ''])->label(false) ?>

                                            </div>
                                        </td>
                                        <td> </td>
                                        <td>
                                            <div class="form-group mr-2">
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <button class="buttonSave" style="width: 85px; border-radius: 5px" id="save_child_policy"> Save </button>
                    </div>
                </div>

                <div class="accordion-item">
                    <button type="button" class="btn accordion-top text-left collapsed" type="button"
                            data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                            aria-controls="collapseSix">
                        6. Nationality Based Tariff
                    </button>
                    <div id="collapseSix" class="collapse" data-parent="#myAccordion">
                        <div class="accordion-content">
                            <div class="d-flex form-group align-items-center">
                                <div class="form-material form-checkout mr-4">
                                    <?= $form->field($property, 'room_tariff_same_for_all')->inline()->radioList([1 => 'Room tariff is same for all guests', 0 => 'Room tariff depends on guest’s nationality'],['class' => 'form-radio'])->label(false); ?>
                                </div>
                            </div>
                            <div class="room-tariff-table table-responsive" id="nationality_div" <?php if ($property['room_tariff_same_for_all'] == 1): ?> style="display:none" <?php endif ; ?>>
                                <table class="display table-sm" id="nationalityTable">
                                    <thead class="nationalityTable-th-class" >
                                    <tr>
                                        <th width="20%"> Group Name </th>
                                        <th width="60%"> Countries </th>
                                        <th width="20%"> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    echo Yii::$app->controller->renderPartial('_nationality_based_tariff_table', ['property' => $property]);
                                     ?>
                                    </tbody>
                                </table>

                                    <button type="button" class="btn button-primary text-white btn-nationality button-color " data-toggle="modal" id="define_nationality" data-target="#nationalityModal"> Define Nationality
                            </div>
                        </div>
                        <button class="buttonSave" style="width: 85px; border-radius: 5px" id="save_tariff_option"> Save </button>
                    </div>
                </div>

                <!-- <div class="accordion-item">
                    <button type="button" class="btn accordion-top text-left collapsed" type="button"
                            data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false"
                            aria-controls="collapseSeven">
                        7. Mandatory Dinner Policy
                    </button>
                    <div id="collapseSeven" class="collapse" data-parent="#myAccordion">
                        <div class="accordion-content">
                            <div class="form-group form-checkbox mb-2">
                                <div class="form-material">
                                    <?php // echo $form->field($property, 'provide_compulsory_inclusions')->checkbox()->label("We provide mandatory dinner"); ?>
                                </div>
                            </div>
                        </div>
                        <button class="buttonSave" style="width: 85px; border-radius: 5px" id="save_mandatory_dinner_option"> Save </button>
                    </div>
                </div>

                <div class="accordion-item">
                    <button type="button" class="btn accordion-top text-left collapsed" type="button"
                            data-toggle="collapse" data-target="#collapseEight" aria-expanded="false"
                            aria-controls="collapseEight">
                        8. Weekday Hike Policy
                    </button>
                    <div id="collapseEight" class="collapse" data-parent="#myAccordion">
                        <div class="accordion-content">
                            <div class="form-group form-checkbox mb-2">
                                <div class="form-material">
                                    <?php //echo $form->field($property, 'have_weekday_hike')->checkbox()->label("We have week day hiked tariff"); ?>
                                </div>
                            </div>
                        </div>
                        <button class="buttonSave" style="width: 85px; border-radius: 5px" id="save_weekday_hike_option"> Save </button>
                    </div>
                    </dpv>
                </div> -->

            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>


    <!-- Modal -->
    <!--<div class="modal fade" id="nationalityModal" tabindex="-1" aria-labelledby="nationalityModalLabel" aria-hidden="true">-->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="nationalityModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="nationalityModalLabel"> Select Nationality </h5>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group">
                            <div class="form-material">
                                <label for="group-name">
                                    <strong> Group name </strong>
                                </label>
                                <input type="text" name="" id="group_name" class="form-control " placeholder="Enter group name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <label for="group-name">
                                    <strong> Select State </strong>
                                </label>

                                <div class="form-select">
                                    <select class="select2" multiple="multiple" data-placeholder="Select a State" id="nationality">
                                    </select>
                                </div>

                        </div>
                        <input type="hidden" id="group_id" name="group_id" value="0">
                        <div class="d-flex align-items-center mb-2">
                            <button type="button" class="btn btn-border mr-2 button-color button-color-text" onclick="dismissNationaliyModal()">Close</button>
                            <button type="button" class="btn button-secondary" onclick="saveNationality()">Save Nationality</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
