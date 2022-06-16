<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
frontend\assets\CommonAsset::register($this);
frontend\assets\DatePickerAsset::register($this);
use Carbon\Carbon;
?>
<script>
$(document).ready(function() {
    attachDatePicker();
});

function addRow(){
    var rowCount = document.getElementById('dinner_table').rows.length;
   /* if ( rowCount > MAXIMUM_SLAB ) {        
       return;
   }
 */
   var row_html = '<tr>' + 
   '<td>' + 
   '<input type="text" class="form-control form-control-sm" name="dinner_daterange[]" />' + 
   '</td>' + 
   '<td>' + 
   '<input type="text" class="form-control form-control-sm" name="event_name[]" >' +
   '</td>' +
   '<td>' + 
   '<input type="number" class="form-control form-control-sm" name="adult_rate[]">' + 
   '</td>' + 
   '<td>' + 
   '<input type="number" class="form-control form-control-sm" name="child_rate[]">' + 
   '</td>' + 
   '<td>' +
   '<i name="compulsory_rem" class="fa fa-minus fa-lg text-danger mt-2 ml-4" onclick="removeRow(this)"></i>' + 
   '</td> ' + 
   '</tr>';
   
   $("#dinner_table").append(row_html);
   attachDatePicker();
}

function removeRow(row) {    
    var i = row.parentNode.parentNode.rowIndex;
    document.getElementById('dinner_table').deleteRow(i);
}

function attachDatePicker() {
    $('input[name="dinner_daterange[]"]').datepicker({
        format: "d MM yyyy",        
        //startDate: startDay,
        autoclose: true,       
        }).on("changeDate", function (e) 
        {            
            //var startdate = $("#daterange-from_date").val();
            //$("#daterange-to_date").datepicker('setStartDate', startdate);
        }
        );
}
</script>

<div class="$content">
    <div class="container-fluid" style="">
        <div class="card-title">
            Tariff Wizard
        </div>

        <div class="tariffBorder1" style="line-height: 0px; height:80px;">
            <div style="display: inline">
                <img style="width: 34px;height: 34px" src="images/building1.png" alt="Matrix">
                <span style="font-size: 20px;padding-top:  4px;color: black;font-weight: 700;inline-size: 1px">
                <?= $property->name ?><i style="font-size: 13px;color: gold;padding-left: 4px" class="fa fa-star" aria-hidden="true"></i>
    <i style="font-size: 13px;color: gold;padding-left: 2px" class="fa fa-star" aria-hidden="true"></i>
    <i style="font-size: 13px;color: gold;padding-left: 2px" class="fa fa-star" aria-hidden="true"></i>
<br>
  <div style="display: inline">  <small  class="smallclass"><i style="font-size: 10px;color: red;top: 0px" class="fa fa-map-marker" aria-hidden="true"></i><?= $property->location->name?>, <?= $property->destination->name?>, <?= $property->country->name?></small>
</span></div>
        </div>
    </div>

    <div class="tariffBorder" style="margin-top: 20px;">
        <div style="margin-bottom: 30px; background-color: ">

            <div class="commonTitle" style="width: 50%;float: left">
                Enter Mandatory Dinner</div>

            <div class="flex-container" style="justify-content: right">
                <div><i style="background-color: white;color: red;font-size: 28px;margin-right: 5px" class="fa fa-check-circle w3-large" aria-hidden="true"></i></div>
                <div style=" flex-direction: column-reverse;">
                    <div><h6 style="padding-top: 7px;margin-right: 8px">From Date</h6></div>
                    <div><h6 style="padding-top: 0px;margin-right: 8px;    font-size: 10px; line-height: 0;"><?= Carbon::parse($date_range->from_date)->format('d M Y'); ?> </h6></div>

                </div>
                <div style=" flex-direction: column-reverse;">
                    <div><h6 style="padding-top: 7px;margin-right: 8px"><hr class="new1"> </h6></div>
                </div>

                <div style=" flex-direction: column-reverse;">
                    <div><h6 style="padding-top: 7px;margin-right: 8px"> To Date </h6></div>
                    <div><h6 style="padding-top: 0px;margin-right: 8px;    font-size: 10px; line-height: 0;"> <?= Carbon::parse($date_range->to_date)->format('d M Y'); ?> </h6></div>
                </div>
            </div>
        </div>
        <hr class="sidebar-divider">
        <?php $form = ActiveForm::begin(['id' => 'meal_rate','enableClientValidation' => true,'method' => 'post','action' => ['tariff/addmandatorydinnner', 'id'=> $date_range->property_id, 'mother_id' => $date_range->id]]) ?>
    <?= $form->field($date_range, 'property_id')->hiddenInput()->label(false); ?>
    <?= $form->field($date_range, 'parent')->hiddenInput()->label(false); ?>
    <?= $form->field($date_range, 'id')->hiddenInput()->label(false); ?>
    <input type="hidden" name="tariff" value="<?= $tariff; ?>">

        <div class="row">
            <table id="customers" class="table2class" style="width: 655px;">
                <tr class="thtable" style=" border: 0.5px solid #A32C4F; border-radius: 12px;" >
                    <th >Date</th>
                    <th >Inclusion Name</th>
                    <th >Adult Rate</th>
                    <th >Child Rate</th>
                </tr>                
                <?php
        if( count($dinners) > 0 ) {
        foreach ($dinners as $dinner)        
        { ?>
            <tr>
            <td><input type="text" class="inputTextClass" name="dinner_daterange[]" value = "<?= Carbon::parse($dinner->date)->format('d M Y'); ?>" style="width: 100px;height: 33px;margin-top: 24px;"/></td>
            <td><input type="text" class="inputTextClass" name="event_name[]" value = "<?= $dinner->name ?>" style="width: 100px;height: 33px;margin-top: 24px;" >  </td>
            <td><input type="number" class="inputTextClass" name="adult_rate[]" value = "<?= $dinner->rate_adult ?>" style="width: 100px;height: 33px;margin-top: 24px;"></td>
            <td><input type="number" class="inputTextClass" name="child_rate[]" value = "<?= $dinner->rate_child ?>" style="width: 100px;height: 33px;margin-top: 24px;"></td> 
            <td><i name="compulsory_rem" class="fa fa-minus fa-lg text-danger mt-2 ml-4" onclick="removeRow(this)"></i></td>
            </tr>
            <?php } 
        } else
        {
        ?> 
        <tr>
        <td><input type="text" class="inputTextClass" name="dinner_daterange[]" style="width: 100px;height: 33px;margin-top: 24px;"/></td>
        <td><input type="text" class="inputTextClass" name="event_name[]" style="width: 100px;height: 33px;margin-top: 24px;"></td>
        <td><input type="number" class="inputTextClass" name="adult_rate[]" style="width: 100px;height: 33px;margin-top: 24px;"></td>
        <td><input type="number" class="inputTextClass" name="child_rate[]" style="width: 100px;height: 33px;margin-top: 24px;"></td>
        <td><i name="compulsory_rem" class="fa fa-minus fa-lg text-danger mt-2 ml-4" onclick="removeRow(this)"></i></td>
        </tr>
        <?php } ?>
                
        <tr > <td> <button class="btnAdd" style="border-radius: 50%;"><i  class="fa fa-plus" aria-hidden="true"></i></button><span style="padding-left: 3px">Add more </span></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </table>
        </div>

        <div class="row" style="margin-left: 4px;margin-bottom: 12px;">
            <div style="display: block;margin-right: 35px">
                <BUTTON type="button" class="prevbutton" style="width: 80px;height: 30px" data-toggle="modal" data-target="#logoutModal"> Prev </BUTTON>
                <BUTTON type="submit" class="buttonSave" style="width: 80px;height: 30px" data-toggle="modal" data-target="#logoutModal"> Save </BUTTON>
            </div>

        </div>
        <?php ActiveForm::end(); ?>
    </div>

</div>
</div>