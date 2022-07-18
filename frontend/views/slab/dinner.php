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
    table thead tr {
        color: #FFFFFF;
        background-color: var(--secondary-color);
        /*height: 45px;*/
        height: 31px;
    }
</style>

<script>
    $(document).ready(function() {
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
       window.location.href = "/index.php?r=slab/dinner&id="+property.value;
}
</script>

<div class="card">
    <div class="card-body">
        <?php $form = ActiveForm::begin(['id' => 'slab_meals','enableClientValidation' => true,'method' => 'post','action' => Url::to(['slab/dinner']).'&id='.$property_id]) ?>

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
            <th>Particulars</th>
            <th>Adult rate</th>
            <th>Child rate</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($dinner_tariff_array as $key => $slab) {
                if($slab == NULL ) continue;
                ?>
                <tr>
                <td><?= Carbon::parse($key)->format('d M Y')?> <br/> <?= Carbon::parse($key)->format('l') ?></td>
                <td><?= $slab->name ?></td>
                <td class="text-right"><?= number_format($slab->rate_adult) ?></td>
                <td class="text-right"><?= number_format($slab->rate_child) ?></td>
                </tr>
            <?php } ?>
        </tbody>
</table>

</div>
</div>
