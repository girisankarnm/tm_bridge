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
    /* $('#tariff_list').DataTable(
        {
            "searching": false,
            "paging": false,
        }
    ); */
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
       window.location.href = "/index.php?r=slab%2Ftariff&id="+property.value;
}
</script>

<div class="d_dark shadow p-2 ml-2">
<?php $form = ActiveForm::begin(['id' => 'slab_tariff','enableClientValidation' => true,'method' => 'post','action' => Url::to(['slab/tariff']).'&id='.$property_id]) ?>
    <div class="row">
        <div class="col-md-3 text-center mt-4">
            <label>Property</lable>
        </div>
        <div class="col-md-3 text-center mt-4">
            <?= Html::dropDownList('property_id', $property_id, $properties_list, ['onchange' => 'onChangeProperty(this)']) ?>
        </div>
        <div class="col-md-3 text-center mt-4">
            <label>Room Category</lable>
        </div>
        <div class="col-md-3 text-center mt-4">
            <?= Html::dropDownList('room_category_id', $room_selected, $room_category_list) ?>            
        </div>
        <div class="col-md-3 text-center mt-4">
            <label>Month & Year</lable>
        </div>
        <div class="col-md-3 text-center mt-4">
            <input type="text" name="daterange" value="<?= $date ?>" />            
        </div>
        <div class="col-md-3 text-center mt-4">
            <label>Nationality</lable>
        </div>
        <div class="col-md-3 text-center mt-4">
            <?= Html::dropDownList('nationality_id', $nationality_selected, $nationality_list, ['onchange' => '' , 'prompt'=>'NA']) ?>
        </div>
        <div class="col-md-3 text-center mt-4">
            <button id="assign_slab" type="submit" class="btn btn-sm btn-save">Show</button>
        </div>
    </div>
    

    <table class="tariff_table" id="tariff_list">
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
                        $rows_pan = count($slabs);
                        $print_once = true; ?>
                        <td rowspan="<?= ($rows_pan + 1) ?>"> <?= Carbon::parse($key)->format('d M Y')?> <br/> <?= Carbon::parse($key)->format('l') ?> </td>
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
    
<?php ActiveForm::end(); ?>
</div>