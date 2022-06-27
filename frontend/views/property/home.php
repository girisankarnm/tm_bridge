<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
$this->title = 'My Properties';
rmrevin\yii\fontawesome\AssetBundle::register($this);
frontend\assets\CommonAsset::register($this);

?>
<style>
    #properties th,#properties td {
        border: 1px solid #9cacad;
    }
    #properties {
        color: #636363;
        /*background: #2a3f54;*/
        font-family: "Helvetica Neue",Roboto,Arial,"Droid Sans",sans-serif;
        font-size: 13px;
        height: 0%;
    }
    a:hover {
        background-color: #1dd5ff;
    }
    i:hover {
        background-color: #1dd5ff;
    }
</style>
<script>
    $(function () {
        $('.t').tooltip()
    });
</script>
<div class="row">
    <div class="col-md-12">
        <?= Html::a('<button id="tariff_add_row" type="submit" class="btn btn-sm btn-save  float-right">Add New Property</button>', ['/property/create']) ?>
<!--        <button id="tariff_add_row" type="submit" class="btn btn-primary btn-sm  float-right">Add New Property</button>-->
    </div>
</div><br>
<table id="properties" class="table table-md responsive">
    <thead>
    <th>Photo</th>
    <th>Name</th>
    <th>Quick Report</th>
    <th>Actions</th>
    </thead>

    <?php  
    
    foreach ($properties as $property) { ?>
    <tr>
        <td width="100px" valign="top" class="px-1"><img src="uploads/<?php echo $property->image ?>" width="100"></td>
        <td><?php echo $property->name ?> </td>
        <td class="text-center">
            <a href="#" class="btn btn-sm t" title="Total Units"><i class="fa fa-file text-secondary"></i><br>Enquiry</a>
            <a href="#" class="btn btn-sm t" title="Total Units"><i class="fa fa-book text-secondary"></i><br>Booking</a>
            <a href="#" class="btn btn-sm t" title="Total Units"><i class="fa fa-file text-secondary"></i><br>Enquiry</a>
            <a href="#" class="btn btn-sm t" title="Total Units"><i class="fa fa-book text-secondary"></i><br>Booking</a>
            <a href="#" class="btn btn-sm t" title="Total Units"><i class="fa fa-file text-secondary"></i><br>Enquiry</a>
            <a href="#" class="btn btn-sm t" title="Total Units"><i class="fa fa-book text-secondary"></i><br>Booking</a>
        </td>
        <td>
       <?= Html::a('<i class="fa fa-tasks text-success p-1 t" title="Assign Slab"></i>', ['/slab/home','id'=> $property->id ]) ?>            
       <?= Html::a('<i class="fa fa-edit text-success p-1 t" title="Edit Basic Details"></i>', Url::toRoute(['/property/create', 'id' => $property->id ])) ?>
       <?php //Html::a('<i class="fa fa-money text-info p-1 t" title="Edit Tariff"></i>', ['/property/rates','id'=> $property->id ]) ?>
       <?= Html::a('<i class="fa fa-building text-warning p-1 t" title="Edit Operational Details"></i>', ['/property/rulespolicies','id'=> $property->id]) ?>
     <i class="fa fa-trash text-danger p-1 t" title="Delete Property">
        </td>
    </tr>

    <?php } ?>
</table>