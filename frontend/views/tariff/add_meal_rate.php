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
            <div style="margin-bottom: 30px; background-color: ">

                <div class="commonTitle" style="width: 50%;float: left">
                    Enter Meal Tariff</div>

                <div class="flex-container" style="justify-content: right">
                    <div><i style="background-color: white;color: red;font-size: 28px;margin-right: 5px" class="fa fa-check-circle w3-large" aria-hidden="true"></i></div>
                    <div style=" flex-direction: column-reverse;">
                        <div><h6 style="padding-top: 7px;margin-right: 8px">From Date</h6></div>
                        <div><h6 style="padding-top: 0px;margin-right: 8px;    font-size: 10px; line-height: 0;"> <?= Carbon::parse($date_range->from_date)->format('d M Y'); ?>  </h6></div>

                    </div>
                    <div style=" flex-direction: column-reverse;">
                        <div><h6 style="padding-top: 7px;margin-right: 8px"><hr class="new1"> </h6></div>

                    </div>

                    <div style=" flex-direction: column-reverse;">
                        <div><h6 style="padding-top: 7px;margin-right: 8px"> To Date </h6></div>
                        <div><h6 style="padding-top: 0px;margin-right: 8px;    font-size: 10px;line-height: 0;"> <?= Carbon::parse($date_range->to_date)->format('d M Y'); ?> </h6></div>

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
                <table id="meals"  class="tablemealclass" >
                    <tr class="" style=" " >
                        <th >Meal Type</th>
                        <th >Rate Adult</th>
                        <th >Rate Child</th>
                    </tr>
                    <tr>
                        <?php $meals_type = ($suppliment_meal) ? $suppliment_meal->getSupplimentMealSlabs()->where(['meal_type_id' => 1])->one() : NULL; ?>
                        <td style="font: bold;margin-top: 24px" class="mealinputText">Break Fast</td>
                        <td> <input id="breakfast_rate_adult" name="breakfast_rate_adult" type="number" class="mealfonttext" value="<?= ($meals_type) ? $meals_type->rate_adult : "" ?>" > </td>
                        <td> <input id="breakfast_rate_child" name="breakfast_rate_child" type="number" class="mealfonttext" value="<?= ($meals_type) ? $meals_type->rate_child : "" ?>" > </td>                        
                    </tr>

                    <tr>
                        <?php $meals_type = ($suppliment_meal) ? $suppliment_meal->getSupplimentMealSlabs()->where(['meal_type_id' => 2])->one() : NULL; ?>
                        <td style="font: bold;margin-top: 24px" class="mealinputText">Lunch</td>
                        <td>  <input id="lunch_rate_adult" name="lunch_rate_adult" class="mealfonttext" value="<?= ($meals_type) ? $meals_type->rate_adult : ""?>"/></td>
                        <td>  <input id="lunch_rate_child" name="lunch_rate_child" class="mealfonttext"  value="<?= ($meals_type) ? $meals_type->rate_child : "" ?>"/> </td>
                    </tr>
                    <tr>
                        <?php $meals_type = ($suppliment_meal) ? $suppliment_meal->getSupplimentMealSlabs()->where(['meal_type_id' => 3])->one() : NULL; ?>
                        <td style="font: bold;margin-top: 24px" class="mealinputText">Dinner</td>
                        <td> <input id="dinner_rate_adult" name="dinner_rate_adult" class="mealfonttext" value="<?= ($meals_type) ? $meals_type->rate_adult : "" ?>"/></td>
                        <td> <input id="dinner_rate_child" name="dinner_rate_child" class="mealfonttext" value="<?= ($meals_type) ? $meals_type->rate_child : "" ?>"/></td>
                    </tr>
                </table>
            </div>
            <div class="row" style="margin-left: 4px;margin-bottom: 12px;">
                <div style="display: block;margin-right: 35px">
                    <BUTTON type="button" class="prevbutton" style="width: 80px;height: 30px" data-toggle="modal" data-target="#logoutModal"> Prev </BUTTON>
                    <BUTTON type="submit" class="buttonSave" style="width: 80px;height: 30px;background-color: #E40968" data-toggle="modal" data-target="#logoutModal"> Save </BUTTON>
                    <BUTTON type="button" class="buttonSave" style="width: 80px;height: 30px" data-toggle="modal" data-target="#logoutModal"> Next </BUTTON>
                </div>

            </div>
            <?php ActiveForm::end(); ?>

        </div>