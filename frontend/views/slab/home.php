<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;

frontend\assets\CommonAsset::register($this);
frontend\assets\DataTableAsset::register($this);

use frontend\models\Country;
use frontend\models\Location;
use frontend\models\Destination;

$this->title = 'Operators';
?>
<script>
    $(document).ready(function() {
    $('#operators_list').DataTable();
} );

function onChangeProperty(property){        
        window.location.href = "/index.php?r=slab%2Fhome&id="+property.value;
}
</script>
<link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">

<div class="d_dark shadow p-2 ml-2">
<?php $form = ActiveForm::begin(['id' => 'assign_slab','enableClientValidation' => true,'method' => 'post','action' => ['slab/assign']]) ?>
    <div class="row">
        <div class="col-md-3 text-center mt-4">
            <label>Property</lable>
        </div>
        <div class="col-md-3 text-center mt-4">
            <?php echo $form->field($slab_assigned, 'property_id')->dropDownList($properties, ['class' => 'form-control form-control-sm h','prompt' => 'Choose', 'onchange' => 'onChangeProperty(this)'])->label(false); ?>
        </div>
        <div class="col-md-3 text-center mt-4" >
            <?php 
             $slabs = ['0' => 'Rack rate', '1' => 'Slab 1', '2' => 'Slab 2', '3' => 'Slab 3', '4' => 'Slab 4', '5' => 'Slab 5'];
            echo $form->field($slab_assigned, 'slab_number')->dropDownList($slabs, ['class' => 'form-control form-control-sm h','prompt' => 'Select slab'])->label(false); ?>
        </div>
        <div class="col-md-3 text-center mt-4"  >
            <button id="assign_slab" type="submit" class="buttonSaveAssign" >Assign</button>
        </div>



    </div>
    <table id="operators_list" class="table-slab-class " style="width:100%">
        <thead>
        <tr  class="thtablerow-slab " >
            <th class="table-width-head" >Select</th>
            <th class="table-width-head" >Name</th>
            <th class="table-width-head" >Country</th>
            <th class="table-width-head">Location</th>
            <th class="table-width-head">Destination</th>
            <th class="table-width-head">Address</th>

        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($operators as $operator) { 
            ?>
            <tr>
                <td><input type="checkbox" class="text-secondary type mt-2" name="operator[]" value="<?= $operator->id ?>" <?= ArrayHelper::isIn( $operator->id, $assigned_operators) ? "checked" : ""; ?>></td>
                <td><?= $operator->name; ?></td>
                <td><?= $operator->country->name; ?></td>
                <td><?= $operator->location->name; ?></td>
                <td><?= $operator->destination->name; ?></td>
                <td><?= $operator->address; ?></td>
            </tr>
        <?php         
        } ?>
        </tbody>
    </table>
    
<?php ActiveForm::end(); ?>
</div>