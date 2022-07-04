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
  .tariff_table { border-collapse: collapse; }
  .tariff_table th, .tariff_table td { padding: 5px; border: solid 1px #777; }
  .tariff_table th { background-color: lightblue; }
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
       window.location.href = "/index.php?r=slab/dinner&id="+property.value;
}
</script>

<div class="d_dark shadow p-2 ml-2">
<?php $form = ActiveForm::begin(['id' => 'slab_meals','enableClientValidation' => true,'method' => 'post','action' => Url::to(['slab/dinner']).'&id='.$property_id]) ?>
    <div class="row">
        <div class="col-md-3 text-center mt-4">
            <label>Property</lable>
        </div>
        <div class="col-md-3 text-center mt-4">
            <?= Html::dropDownList('property_id', $property_id, $properties_list, ['onchange' => 'onChangeProperty(this)']) ?>
        </div>
        
        <div class="col-md-3 text-center mt-4">
            <label>Month & Year</lable>
        </div>
        <div class="col-md-3 text-center mt-4">
            <input type="text" name="daterange" value="<?= $date ?>" />            
        </div>
        
        <div class="col-md-3 text-center mt-4">
            <button id="assign_slab" type="submit" class="btn btn-sm btn-save">Show</button>
        </div>
    </div>    
<?php ActiveForm::end(); ?>

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
                <td><?= $slab->rate_adult ?></td>
                <td><?= $slab->rate_child ?></td>                
                </tr>
            <?php } ?>
        </tbody>
</table>

</div>