<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;

frontend\assets\CommonAsset::register($this);
frontend\assets\DataTableAsset::register($this);
frontend\assets\DatePickerAsset::register($this);

use Carbon\Carbon;
$this->title = 'Operators';
?>

<style>
  .tariff_table { border-collapse: collapse; margin: auto;
      width: 100% !important; }
  .tariff_table th, .tariff_table td { padding: 5px; border: solid 1px #777; }
  .tariff_table th { background-color: #586ADA; }
  table thead tr th:first-child {
      border-top-left-radius: 0px;
      border-bottom-left-radius: 0px;
  }

  table thead tr th:last-child {
      border-top-right-radius: 0px;
      border-bottom-right-radius: 0px;
  }
</style>

<script>
    $(document).ready(function() {
        $('input[name="daterange"]').datepicker({
            opens: 'left',
            format: "d MM yyyy",
            autoclose: true,
        }, function(start, end, label) {
    });

    $('input[name="daterange"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('d MM yyyy'));
    });

    $('input[name="daterange"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });
} );

function onChangeProperty(property){
       window.location.href = "/index.php?r=slab/meals&id="+property.value;
}
</script>

<div class="card">
    <div class="card-body">
        <?php $form = ActiveForm::begin(['id' => 'slab_meals','enableClientValidation' => true,'method' => 'post','action' => Url::to(['slab/meals']).'&id='.$property_id]) ?>


        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputCity">Property</label>
                <?= Html::dropDownList('property_id', $property_id, $properties_list, ['onchange' => 'onChangeProperty(this)','class'=>'form-control']) ?>
            </div>
            <div class="form-group col-md-3">
                <label for="inputZip">Month & Year</label>
                <input type="text" class="form-control" name="daterange" value="<?= $date ?>" />

            </div>
        </div>
        <button id="assign_slab" type="submit" class="btn btn-primary">Search</button>

        <?php ActiveForm::end(); ?>


    </div>
</div>


    <div class="card">
        <div class="card-body">

  <table class="tariff_table" id="tariff_list">
    <thead>
        <tr>
            <th>Date</th>
            <th>BF Adult</th>
            <th>BF Child</th>
            <th>Lunch Adult</th>
            <th>Lunch Child</th>
            <th>Dinner Adult</th>
            <th>Dinner Child</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($meals_tariff_array as $key => $slabs) { ?>
                <?php
                $bf_adult = 0;
                $bf_child = 0;
                $lunch_adult = 0;
                $lunch_child = 0;
                $dinner_adult = 0;
                $dinner_child = 0;
                if ($slabs == NULL ) continue;
                foreach ($slabs as $slab) {
                    if ($slab->meal_type_id == 1 ) {
                        $bf_adult = $slab->rate_adult;
                        $bf_child = $slab->rate_child;
                    } else if ($slab->meal_type_id == 2 ) {
                        $lunch_adult = $slab->rate_adult;
                        $lunch_child = $slab->rate_child;
                    } else if ($slab->meal_type_id == 3 ) {
                        $dinner_adult = $slab->rate_adult;
                        $dinner_child = $slab->rate_child;
                    }
                }
                ?>
                <tr>
                <td><?= Carbon::parse($key)->format('d M Y')?> <br/> <?= Carbon::parse($key)->format('l') ?></td>
                <td><?= $bf_adult ?></td>
                <td><?= $bf_child ?></td>
                <td><?= $lunch_adult ?></td>
                <td><?= $lunch_child ?></td>
                <td><?= $dinner_adult ?> </td>
                <td><?= $dinner_child ?> </td>
                </tr>
            <?php } ?>
        </tbody>
</table>

  </div>
  </div>
