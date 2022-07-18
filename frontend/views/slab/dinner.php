<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;

frontend\assets\CommonAsset::register($this);
frontend\assets\DataTableAsset::register($this);
frontend\assets\DatePickerAsset::register($this);
$this->registerCssFile('/css/tariff-report/tariff-report.css');
$this->registerJsFile('/js/tariff/report.js');

use Carbon\Carbon;
//$this->title = 'Operators';
?>
<style>
    .btn-search-tariff {
        background-color: #586ADA; color: white;
    }
    .btn-print-tariff {
        background-color: #e40e6a; color: white;
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
        <button id="assign_slab" type="submit" class="btn btn-search-tariff">Search</button>

        <?php ActiveForm::end(); ?>


    </div>
</div>
<div class="card">
    <div class="col-12" style="padding-top: 10px;">
        <button id="print" onclick="Print(3);" class="btn btn-print-tariff  btn-sm float-right"><i class="fa fa-print"></i> Print</button>
    </div>
    <div class="card-body"  id="tariff_print">

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
