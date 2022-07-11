<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
$this->title = 'My Enquiries';
rmrevin\yii\fontawesome\AssetBundle::register($this);
frontend\assets\CommonAsset::register($this);
frontend\assets\DataTableAsset::register($this);

?>

<script>
    $(function () {
        $('.t').tooltip()
    });
    $(document).ready(function() {
        $('#enquiries').DataTable();
    } );
</script>
<!--<link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">-->
<div class="row">
    <div class="col-md-12">
        <div class="col-md-3 text-center mt-4 float-right" >
            <button style="width: 100px;" onclick="location.href='<?= Url::toRoute(['/enquiry/basicdetails']) ?>'" id="add-enquiry" type="submit" class="buttonSaveAssign" >Add Enquiry</button>
        </div>
    </div>
</div><br>
<table id="enquiries" class="table-slab-class">
    <thead>
    <tr  class="thtablerow-slab " >
    <th>Name</th>
    <th>Nationality</th>
    <th>Phone</th>
    <th>Quick Report</th>
    <th>Actions</th>
    </tr>
    </thead>

    <?php  foreach ($enquiries as $enquiry) { ?>
    <tr>
        <td><?php echo $enquiry->guest_name ?>  </td>
        <td><?= $enquiry->nationality['nationality'] ?></td>
        <td><?= $enquiry->contact1 ?></td>
        <td class="text-left">
            <a href="#" class="btn btn-sm t" title="Total Units"><i class="fa fa-book text-secondary"></i><br>Booking</a>
            <a href="#" class="btn btn-sm t" title="Total Units"><i class="fa fa-book text-secondary"></i><br>Blocking</a>
            <a href="#" class="btn btn-sm t" title="Total Units"><i class="fa fa-book text-secondary"></i><br>SRR</a>
        </td>
        <td>
            <?= Html::a('<img style="height: 24px; width: 24px" class="margin-left-right-spacing "  src="images/testIcons/icons8-search.svg">', Url::toRoute(['/search/create', 'enquiryID' => $enquiry->id ]),["title"=>"Search Rooms",'class'=>'t']) ?>
<!--            <i class="fa fa-edit text-secondary p-1 t" title="Edit Property"></i>-->
            <?= Html::a('<img class="margin-left-right-spacing "  src="images/basic-details.svg">', Url::toRoute(['/enquiry/basicdetails', 'id' => $enquiry->id ]),["title"=>"Edit Basic Details",'class'=>'t']) ?>
<!--            <i id="myButton" class="fa fa-plus text-success p-1 t" title="Add Property"></i>-->
<!--            <i class="fa fa-money text-info p-1 t" title="Tariff"></i>-->
        </td>
    </tr>

    <?php } ?>
</table>
