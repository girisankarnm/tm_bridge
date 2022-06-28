<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
$this->title = 'My Enquiries';
rmrevin\yii\fontawesome\AssetBundle::register($this);
frontend\assets\CommonAsset::register($this);

?>
<style>
    #enquiries th,#properties td {
        border: 1px solid #9cacad;
    }
    #enquiries {
        color: #636363;
        /*background: #2a3f54;*/
        font-family: "Helvetica Neue",Roboto,Arial,"Droid Sans",sans-serif;
        font-size: 13px;
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
        <?= Html::a('<button id="tariff_add_row" type="submit" class="btn btn-sm btn-save  float-right">Add New Enquiry</button>', ['/enquiry/basicdetails']) ?>
<!--        <button id="tariff_add_row" type="submit" class="btn btn-primary btn-sm  float-right">Add New Property</button>-->
    </div>
</div><br>
<table id="enquiries" class="table table-md responsive">
    <thead>
    
    <th>Name</th>
    <th>Quick Report</th>
    <th>Actions</th>
    </thead>

    <?php  foreach ($enquiries as $enquiry) { ?>
    <tr>        
        <td><?php echo $enquiry->guest_name ?> </td>
        <td class="text-center">
            <a href="#" class="btn btn-sm t" title="Total Units"><i class="fa fa-file text-secondary"></i><br>Enquiry</a>
            <a href="#" class="btn btn-sm t" title="Total Units"><i class="fa fa-book text-secondary"></i><br>Booking</a>
            <a href="#" class="btn btn-sm t" title="Total Units"><i class="fa fa-file text-secondary"></i><br>Enquiry</a>
            <a href="#" class="btn btn-sm t" title="Total Units"><i class="fa fa-book text-secondary"></i><br>Booking</a>
            <a href="#" class="btn btn-sm t" title="Total Units"><i class="fa fa-file text-secondary"></i><br>Enquiry</a>
            <a href="#" class="btn btn-sm t" title="Total Units"><i class="fa fa-book text-secondary"></i><br>Booking</a>
        </td>
        <td>            
            <?= Html::a('<i class="fa fa-search text-success p-1 t" title="Search"></i>', Url::toRoute(['/search/create', 'enquiryID' => $enquiry->id ])) ?>
<!--            <i class="fa fa-edit text-secondary p-1 t" title="Edit Property"></i>-->
            <?= Html::a('<i class="fa fa-edit text-success p-1 t" title="Edit Basic Details"></i>', Url::toRoute(['/enquiry/basicdetails', 'id' => $enquiry->id ])) ?>
<!--            <i id="myButton" class="fa fa-plus text-success p-1 t" title="Add Property"></i>-->
<!--            <i class="fa fa-money text-info p-1 t" title="Tariff"></i>-->
            <?= Html::a('<i class="fa fa-money text-info p-1 t" title="Edit Tariff"></i>', ['/property/rates','id'=> $enquiry->id ]) ?>
            <?= Html::a('<i class="fa fa-building text-warning p-1 t" title="Edit Operational Details"></i>', ['/property/rulespolicies','id'=> $enquiry->id]) ?>
<!--            <i class="fa fa-building text-warning p-1 t" title="Operations"></i>-->
            <i class="fa fa-trash text-danger p-1 t" title="Delete Property">
        </td>
    </tr>

    <?php } ?>
</table>