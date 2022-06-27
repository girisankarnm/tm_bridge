<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use Carbon\Carbon;
?>

<div class="$content">
        <div class="container-fluid" style="">
            <div class="card-title">
                Tariff Wizard
            </div>

            <div class="tariffBorder1" style="line-height: 0px; height:80px;">
                <div style="display: inline">
                    <img style="width: 34px;height: 34px" src="images/building1.png" alt="Matrix">
                    <span style="font-size: 20px;padding-top:  4px;color: black;font-weight: 700;inline-size: 1px">
                    <?= $property->name ?><i style="font-size: 13px;color: gold;padding-left: 4px" class="fa fa-star" aria-hidden="true"></i>
    <i style="font-size: 13px;color: gold;padding-left: 2px" class="fa fa-star" aria-hidden="true"></i>
    <i style="font-size: 13px;color: gold;padding-left: 2px" class="fa fa-star" aria-hidden="true"></i>
<br>
  <div style="display: inline">  <small  class="smallclass"><i style="font-size: 10px;color: red;top: 0px" class="fa fa-map-marker" aria-hidden="true"></i><?= $property->location->name?>, <?= $property->destination->name?>, <?= $property->country->name?></small>
</span></div>
            </div>
        </div>

        <div class="tariffBorder" style="margin-top: 20px;">
            <div >

                <div class="commonTitle" style="width: 50%;float: left">
                    Enter Meal Tariff</div>

                <div id="tariffAddmain" style="justify-content: right"  >
                    <div class="margintopcls" style="background-color: #ffffff;text-align: center">
                        <svg style="margin-left: 3px" width="37" height="36" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="21.5893" cy="21.0307" r="17.2748" transform="rotate(-172.902 21.5893 21.0307)" stroke="#009721" stroke-width="3"/>
                            <path d="M14.875 21.5339L19.6822 26.3413L30.3058 15.7178" stroke="#009721" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="margintopcls" >
                        <span class="dateform">From Date</span>
                        <!--                    <div style=" flex-wrap: wrap">-->
                        <div ><h6 class="motherdaterange-H6 h7class" ><?= Carbon::parse($date_range->from_date)->format('d M Y'); ?> </h6></div>

                    </div>
                    <div style="margin-top: 4px"><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6>
                    </div>
                    <div class="margintopcls" >  <span class="dateform">From Date</span>
                        <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class" ><?= Carbon::parse($date_range->to_date)->format('d M Y'); ?> </h6></div>
                    </div>



                </div>
            </div>
            <hr class="sidebar-divider">

            <?php $form = ActiveForm::begin(['id' => 'meal_rate','enableClientValidation' => true,'method' => 'post','action' => ['tariff/savemealrate', 'id'=> $date_range->property_id]]) ?>
            <?= $form->field($date_range, 'property_id')->hiddenInput()->label(false); ?>
            <?= $form->field($date_range, 'parent')->hiddenInput()->label(false); ?>
            <?= $form->field($date_range, 'id')->hiddenInput()->label(false); ?>
            <input type="hidden" name="tariff" value="<?= $tariff; ?>">

            <div class="row">
                <table id="meals"  class="table3mealsadd" >
                    <tr class="thtableguestcount"  >
                        <th class="Adults" >Meal Type</th>
                        <th  class="Adults">Rate Adult</th>
                        <th class="Adults">Rate Child</th>
                    </tr>
                    <tr>
                        <?php $meals_type = ($suppliment_meal) ? $suppliment_meal->getSupplimentMealSlabs()->where(['meal_type_id' => 1])->one() : NULL; ?>
                        <td style="font: bold;margin-top: 24px" class="class="Adults mealinputText">Break Fast</td>
                        <td class="Adults"> <input id="breakfast_rate_adult" name="breakfast_rate_adult" type="number" class="mealfonttext" value="<?= ($meals_type) ? $meals_type->rate_adult : "" ?>" > </td>
                        <td class="Adults"> <input id="breakfast_rate_child" name="breakfast_rate_child" type="number" class="mealfonttext" value="<?= ($meals_type) ? $meals_type->rate_child : "" ?>" > </td>
                    </tr>

                    <tr>
                        <?php $meals_type = ($suppliment_meal) ? $suppliment_meal->getSupplimentMealSlabs()->where(['meal_type_id' => 2])->one() : NULL; ?>
                        <td style="font: bold;margin-top: 24px" class="mealinputText Adults">Lunch</td>
                        <td class="Adults">  <input id="lunch_rate_adult" name="lunch_rate_adult" class="mealfonttext" value="<?= ($meals_type) ? $meals_type->rate_adult : ""?>"/></td>
                        <td class="Adults">  <input id="lunch_rate_child" name="lunch_rate_child" class="mealfonttext"  value="<?= ($meals_type) ? $meals_type->rate_child : "" ?>"/> </td>
                    </tr>
                    <tr>
                        <?php $meals_type = ($suppliment_meal) ? $suppliment_meal->getSupplimentMealSlabs()->where(['meal_type_id' => 3])->one() : NULL; ?>
                        <td style="font: bold;margin-top: 24px" >Dinner</td>
                        <td class="Adults">  <input id="dinner_rate_adult" name="dinner_rate_adult" class="mealfonttext" value="<?= ($meals_type) ? $meals_type->rate_adult : "" ?>"/></td>
                        <td class="Adults">  <input id="dinner_rate_child" name="dinner_rate_child" class="mealfonttext" value="<?= ($meals_type) ? $meals_type->rate_child : "" ?>"/></td>
                    </tr>
                </table>
            </div>
            <div class="row" style="margin-left: 4px;margin-bottom: 12px;">
                <div style="display: block;margin-right: 35px">
                    <BUTTON type="button" class="prevbutton" style="width: 80px;height: 30px" > Prev </BUTTON>
                    <BUTTON type="submit" class="buttonSave" style="width: 80px;height: 30px;background-color: #E40968" > Save </BUTTON>
                    <BUTTON type="button" class="buttonSave" style="width: 80px;height: 30px" > Next / </BUTTON>
                    <?= Html::a('Next', ['tariff/addhikedayrate', 'id'=> $property->id, 'mother_id' => $date_range->id],  ['class'=>'buttonSave savebuttonMother']) ?>                    
                </div>

            </div>
            <?php ActiveForm::end(); ?>

        </div>