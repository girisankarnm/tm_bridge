<?php
use yii\bootstrap4\ActiveForm;
$this->registerJsFile('/js/enquiry/accomodation.js');
?>

<link rel="stylesheet" type="text/css" href="/css/tour-min-1.css" />
<!-- load the third party plugin assets (jquery-confirm) -->
<link href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" rel="stylesheet" type="text/css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<style>
    .form-group {
        margin-bottom: 0.02rem;
    }
</style>
<div class="$content">
    <div class="container-fluid" >
        <div class="card-title">
            Enquiry
        </div>
        <div class="tariffBorder" style="margin-top: 20px;">
        <div class="tab">
            <a href="<?= \yii\helpers\Url::to(['/enquiry/basicdetails', 'id' => $enquiry->id]) ?>"> <button class="tablinks btnunder"  >Basic Details</button></a>
            <a href="<?= \yii\helpers\Url::to(['/enquiry/contactdetails', 'id' => $enquiry->id]) ?>">   <button id="contactBtn" class="tablinks" >Contact Details</button></a>
            <a href="<?= \yii\helpers\Url::to(['/enquiry/guestcount', 'id' => $enquiry->id]) ?>"> <button class="tablinks">Guest Count</button></a>
            <div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/enquiry/accommodation', 'id' => $enquiry->id]) ?>">  <button class="selectedButton"  >Accommodation</button></a> <hr class="new5" >
            </div>
        </div>
        <hr class="sidebar-divider">
        <?php $form = ActiveForm::begin(['id' => 'form_enquiry_accomodation','enableClientValidation' => false, 'method' => 'post','action' => ['enquiry/saveaccommodation']]) ?>
        <input type="hidden" id="enquiry_id" name="enquiry_id" value=<?php echo  $enquiry->id; ?> >
        <div class="row">
            <table id="guest_count_same_table " class="table3accomadatonclass" >
                <tr  class="thtableaccomadation" >
                    <th>Day</th>
                    <th>Staus</th>
                    <th>Stay Destination</th>
                    <th>Meal Plan</th>
                    <th>Pax Count Plan</th>
                </tr>

                <?php
                if( isset($enquiry->enquiryAccommodations) && count($enquiry->enquiryAccommodations) > 0 ) {
                    $accomodation_status = ['1' => 'Required', '0' => 'Not Required'];
                    $i = 0;
                    foreach ($enquiry->enquiryAccommodations as $accomodation){
                        ?>
                        <tr class="">
                            <td class="Adults">
                                <div class="form-group margin-bottom-2px-acco">
                                <input hidden type="text" name="day[]"  value="<?php echo date('d-M-Y', strtotime($accomodation->day)); ?>" class="inputTextClassaccomadation accommodation-input acco-margintop daytextindent" readonly />
                                    <span style="color: #323131;font-weight: bold;"><?php echo date('d-M-Y', strtotime($accomodation->day)); ?></span>
                                </div>
                            </td>
                            <td class="Adults">
                                <?php echo $form->field($accomodation,'status')->dropDownList($accomodation_status,['row_id' => $i, 'name' => 'accommodation_status[]','class' => 'inputTextClassaccomadation accommodation-input acco-margintop' ])->label(false) ?>
                            </td >
                            <td class="Adults"  >
                                <?php echo $form->field($accomodation,'destination_id')->dropDownList($destinations,['id' => 'destination_'.$i , 'name' => 'destination_id[]','class' => 'inputTextClassaccomadation accommodation-input acco-margintop destination_select2' ])->label(false) ?>
                            </td>
                            <td class="Adults">
                                <?php echo $form->field($accomodation,'meal_plan_id')->dropDownList($meal_plans,['id' => 'meal_plan_'.$i, 'name' => 'meal_plan_id[]','class' => 'inputTextClassaccomadation accommodation-input acco-margintop'])->label(false) ?>
                            </td>
                            <td  class="Adults">
                                <?php if ($enquiry->guest_count_same_on_all_days == 1){
                                    $model->guest_count_plan_id = 1;
                                    echo $form->field($accomodation,'guest_count_plan_id')->dropDownList($pax_count_plans,['id' => 'plan_'.$i, 'name' => 'guest_count_plan_id[]','class' => 'inputTextClassaccomadation accommodation-input acco-margintop', 'readonly' => 'readonly'])->label(false);
                                }
                                else
                                    echo $form->field($accomodation,'guest_count_plan_id')->dropDownList($pax_count_plans,['id' => 'plan_'.$i, 'name' => 'guest_count_plan_id[]','class' => 'inputTextClassaccomadation accommodation-input acco-margintop' ])->label(false);
                                ?>
                            </td>
                        </tr>

                        <?php
                        $i++;
                    }
                }
                else
                {
                    for ($i = 0; $i <= $enquiry->tour_duration; $i++){ ?>
                        <tr>
                            <td class="Adults">
                                <div class="form-group margin-bottom-2px-acco field-destination_0 required">
                                <input type="text"  name="day[]"  value="<?php echo date('d-M-Y', strtotime($enquiry->tour_start_date. ' + ' .$i. 'days')); ?>" class="inputTextClassaccomadation acco-margintop daytextindent" readonly />
                                </div>
                            </td>
                            <td class="Adults">
                                <div class="form-group margin-bottom-2px-acco field-destination_0 required">
                                <select  style="margin-top: 18px"  row_id="<?= $i?>" class="inputTextClassaccomadation tableinput acco-margintop" name="accommodation_status[]">
                                    <option value="1">Required</option>
                                    <option value="0">Not Required</option>
                                </select>
                                </div>
                            </td>
                            <td  class="Adults" >
                                <?php echo $form->field($model,'destination_id')->dropDownList($destinations,['id' => 'destination_'.$i , 'name' => 'destination_id[]','class' => 'inputTextClassaccomadation tableinput acco-margintop destination_select2' ])->label(false) ?>
                            </td  >
                            <td  class="Adults">
                                <?php echo $form->field($model,'meal_plan_id')->dropDownList($meal_plans,['id' => 'meal_plan_'.$i, 'name' => 'meal_plan_id[]','class' => 'inputTextClassaccomadation tableinput acco-margintop'])->label(false) ?>
                            </td>
                            <td  class="Adults">
                                <?php if ($enquiry->guest_count_same_on_all_days == 1){
                                    $model->guest_count_plan_id = 1;
                                    echo $form->field($model,'guest_count_plan_id')->dropDownList($pax_count_plans,['id' => 'plan_'.$i, 'name' => 'guest_count_plan_id[]','class' => 'inputTextClassaccomadation tableinput acco-margintop', 'readonly' => 'true'])->label(false);
                                }
                                else
                                    echo $form->field($model,'guest_count_plan_id')->dropDownList($pax_count_plans,['id' => 'plan_'.$i, 'name' => 'guest_count_plan_id[]','class' => 'inputTextClassaccomadation tableinput acco-margintop' ])->label(false);
                                ?>
                            </td>
                        </tr>
                    <?php }
                }
                ?>

            </table>
        </div>

        <div class="row" style="margin-left: 4px;margin-bottom: 12px;">
            <div style="display: block;margin-right: 35px">
                <button type="button" class="buttonSaveaccomadation" id="save_accommodation"> Save </button>
            </div>
        </div>
        </div>
<!--        <div class="row">-->
<!--            <div id="main_Accomadation" style="margin-left: 24px">-->
<!--                <div style="background-color: #d39e00;height: 40px;" ></div>-->
<!--                <div style="background-color: #005cbf;height: 40px;" ></div>-->
<!--                <div style="background-color: #8fd19e;height: 40px;" ></div>-->
<!--                <div style="background-color: #6f42c1;height: 40px;" ></div>-->
<!--                <div style="background-color: #669900;height: 40px;" ></div>-->
<!--                <div style="background-color: #d39e00;height: 60px;" ></div>-->
<!--                <div style="background-color: #005cbf;height: 60px;" ></div>-->
<!--                <div style="background-color: #8fd19e;height: 60px;" ></div>-->
<!--                <div style="background-color: #0b2e13;height: 60px;" ></div>-->
<!--                <div style="background-color: #669900;height: 60px;" ></div>-->
<!--                <div  style="background-color: #1c7430;height: 60px;" ></div>-->
<!--            <div style="background-color: #d39e00;height: 60px;" ></div>-->
<!--            <div style="background-color: #ffffff;height: 60px;" ></div>-->
<!--            <div style="background-color: #a71d2a;height: 60px;" ></div>-->
<!--            <div style="background-color: #8fd19e;height: 60px;" ></div>-->
<!---->
<!---->
<!--            </div>-->
<!---->
<!--        </div>-->
        <?php ActiveForm::end(); ?>
    </div>
</div>
