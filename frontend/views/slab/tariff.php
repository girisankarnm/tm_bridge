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
  .tariff_table { border-collapse: collapse;  margin: auto;
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

   table thead tr {
       color: #FFFFFF;
       background-color: var(--secondary-color);
       /*height: 45px;*/
       height: 31px;
   }


</style>

<script>

    $(document).ready(function() {
    /* $('#tariff_list').DataTable(
        {
            "searching": false,
            "paging": false,
        }
    ); */
    $('input[name="daterange"]').datepicker({
        opens: 'left',
        format: "M yyyy",
        startView: "year",
        minViewMode: "months",
        autoclose: true,

    }, function(start, end, label) {
    });

} );

function onChangeProperty(property){
       window.location.href = "/index.php?r=slab%2Ftariff&id="+property.value;
}
</script>


<div class="card">
    <div class="card-body">
        <?php $form = ActiveForm::begin(['id' => 'slab_tariff','enableClientValidation' => true,'method' => 'post','action' => Url::to(['slab/tariff']).'&id='.$property_id]) ?>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputCity">Property</label>
                    <?= Html::dropDownList('property_id', $property_id, $properties_list, ['onchange' => 'onChangeProperty(this)','class'=>'form-control']) ?>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputState">Room Category</label>
                    <?= Html::dropDownList('room_category_id', $room_selected, $room_category_list,['class'=>'form-control']) ?>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputZip">Month & Year</label>
                    <input type="text" class="form-control" name="daterange" value="<?= $date ?>" />

                </div>
                <div class="form-group col-md-3">
                    <label for="inputZip">Nationality</label>
                    <?= Html::dropDownList('nationality_id', $nationality_selected, $nationality_list, ['onchange' => '' , 'prompt'=>'NA','class'=>'form-control']) ?>
                </div>
            </div>
            <button id="assign_slab" type="submit" class="btn btn-primary float-lg-right">Search</button>

        <?php ActiveForm::end(); ?>


    </div>
</div>
     <div class="card">
    <div class="card-body">

        <table class="tariff_table justify-content-center" id="tariff_list">
            <thead>
            <tr>
                <th>Date</th>
                <th>Slab</th>
                <th>Room Rate</th>
                <th>Extra bed</th>
                <th>Child with bed</th>
                <th>Child sharing bed</th>
                <th>Single occupancy</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($room_date_tariff_array as $key => $slabs) {
            if ($slabs == NULL ) { ?>
                <tr><td><?= Carbon::parse($key)->format('d M Y')?> <br/> <?= Carbon::parse($key)->format('l') ?></td><td colspan="6">Rates not available </td> </tr>
                <?php continue;
            }
            ?>
            <?php $print_once = false; ?>
            <?php foreach ($slabs as $slab) { ?>
                <tr>
                    <?php if (!$print_once) {
                        $dayHike = 0 ;
                        if ($room_dayhike_tariff_array[$key] != NULL) {
                            $dayHike = 1 ;
                        }
                        $rows_pan = count($slabs) +$dayHike ;
                        $print_once = true; ?>
                        <td rowspan="<?= ($rows_pan ) ?>"> <?= Carbon::parse($key)->format('d M Y')?> <br/> <?= Carbon::parse($key)->format('l') ?> </td>
                    <?php } ?>
                    <?php
                    $slab_number = "";
                    if($slab->number == 0) {
                        $slab_number = "Rack rate";
                    }
                    else if ($slab->number == 1) {
                        $slab_number = "Slab ".$slab->number."(Default)";
                    }
                    else {
                        $slab_number = "Slab ".$slab->number;
                    }
                    ?>
                    <td><?= $slab_number ?></td>
                    <td><?= $slab->room_rate ?></td>
                    <td><?= $slab->adult_with_extra_bed ?></td>
                    <td><?= $slab->child_with_extra_bed ?></td>
                    <td><?= $slab->child_sharing_bed ?></td>
                    <td><?= $slab->single_occupancy ?> </td>
                </tr>
            <?php } ?>
            <?php
            if ($room_dayhike_tariff_array[$key] != NULL) {
                $dayhike_slab = $room_dayhike_tariff_array[$key];
            } else {
                continue;
            }
            ?>
            <tr>
                <td>Weekday hike</td>
                <td><?= $dayhike_slab->room_rate ?></td>
                <td><?= $dayhike_slab->adult_with_extra_bed ?></td>
                <td><?= $dayhike_slab->child_with_extra_bed ?></td>
                <td><?= $dayhike_slab->child_sharing_bed ?></td>
                <td><?= $dayhike_slab->single_occupancy ?> </td>
            <tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </div>

