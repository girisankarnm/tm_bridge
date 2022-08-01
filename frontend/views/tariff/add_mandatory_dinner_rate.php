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
function mandatory_dinner(checkbox){
if( $(checkbox).is(':checked')) {
    $("#mandatory_dinner").show(300);
    attachDatePicker();
}
else {
    $("#mandatory_dinner").hide(300);        
}    
}
$(document).ready(function() {
    if($("#have_mandatory_dinner").is(':checked')) {
        attachDatePicker();
    }
});

function addRow(){
    var rowCount = document.getElementById('dinner_table').rows.length;
   /* if ( rowCount > MAXIMUM_SLAB ) {        
       return;
   }
 */
   var row_html = '<tr>' + 
   '<td class="Adults">' +
   '<input type="text" class="inputDate-tariff add-mandatory-dinner-input" name="dinner_daterange[]" />' +
   '</td>' + 
   '<td class="Adults">' +
   '<input type="text" class="inputDate-tariff add-mandatory-dinner-input" name="event_name[]" >' +
   '</td>' +
   '<td class="Adults">' +
   '<input type="number" class="inputDate-tariff add-mandatory-dinner-input" name="adult_rate[]">' +
   '</td>' + 
   '<td class="Adults">' +
   '<input type="number" class="inputDate-tariff add-mandatory-dinner-input" name="child_rate[]">' +
   '</td>' + 
   '<td class="action-td">' +
   '<button id="remvr" onclick="removeRow(this)" class="remove-padding-top" style="border-radius: 50%;border: 0px;background-color: #f9f9f9"><img src="images/minus.svg"  ></button>' +
   '</td> ' + 
   '</tr>';
   
   $("#dinner_table").append(row_html);
   attachDatePicker();
// <button id="remvr" onclick="removeRow(this)" style="border-radius: 50%;border: 0px;background-color: #f9f9f9"><img src="images/minus.svg"  ></button>

}

function removeRow(row) {    
    var i = row.parentNode.parentNode.rowIndex;
    document.getElementById('dinner_table').deleteRow(i);
}

function attachDatePicker() {
    //var startdate = $("#daterange-from_date").val();
    //$("#daterange-to_date").datepicker('setStartDate', startdate);

    $('input[name="dinner_daterange[]"]').datepicker({
        format: "d MM yyyy",        
        startDate: '<?= Carbon::parse($date_range->from_date)->format('d M Y'); ?>',
        endDate: '<?= Carbon::parse($date_range->to_date)->format('d M Y'); ?>',
        autoclose: true,       
        }).on("changeDate", function (e) 
        {            
            //var startdate = $("#daterange-from_date").val();
            //$("#daterange-to_date").datepicker('setStartDate', startdate);
        }
        );
}
</script>

<div class="content">
    <div class="container-fluid" style="">
        <div class="card-title">Tariff Wizard: Mandatory dinner </div>
    </div>
    <div class="tariffBorder" style="margin-top: 20px;">
        <div style="margin-bottom: 30px;  ">

                <div  id="location-date-border-card">
                    <div id="mainHeding-location-header"style="height: 43px;">
                        <div > <img style="width: 34px;height: 34px" src="images/building1.png" alt="Matrix"></div>
                        <div >
                            <div id="h-border-location-header"  >
                                <div  >
                          <span class="hotelHeading" > <?= $property->name ?> <img class="f-star" src="images/Star-1.svg" alt="Matrix">
                           <img class="f-star" style="padding-left: 2px"  src="images/Star-1.svg" alt="Matrix">
                           <img  class="f-star" style="padding-left: 2px" src="images/Star-1.svg" alt="Matrix">
                           </span>
                                </div>
                                <div>   <small  class="smallFonts fontsize-location"><i  class="fa fa-map-marker locatiospace" aria-hidden="true"></i><?= $property->location->name?>, <?= $property->destination->name?>, <?= $property->country->name?></small>
                                    </span></div>
                            </div>
                        </div>
                    </div>
                    <div id="tariffheaderDate" style="justify-content: right;width: 36%;"  >
                        <div class="margintopcls" style="background-color: #ffffff;text-align: center">
                            <svg style="margin-left: 3px" width="37" height="36" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="21.5893" cy="21.0307" r="17.2748" transform="rotate(-172.902 21.5893 21.0307)" stroke="#009721" stroke-width="3"/>
                                <path d="M14.875 21.5339L19.6822 26.3413L30.3058 15.7178" stroke="#009721" stroke-width="3" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="margintopcls" >
                            <span class="dateform">From Date</span>
                            <!--                    <div style=" flex-wrap: wrap">-->
                            <div ><h6 class="motherdaterange-H6 h7class" ><?= Carbon::parse($date_range->from_date)->format('d M Y'); ?> </h6></div>

                        </div>
                        <div><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6>
                        </div>
                        <div class="margintopcls" >  <span class="dateform">To Date</span>
                            <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class" ><?= Carbon::parse($date_range->to_date)->format('d M Y'); ?> </h6></div>
                        </div>
                    </div>
                </div>
        </div>
        <hr class="sidebar-divider">
        <?php $form = ActiveForm::begin(['id' => 'meal_rate','enableClientValidation' => true,'method' => 'post','action' => ['tariff/addmandatorydinnner', 'id'=> $date_range->property_id, 'mother_id' => $date_range->id]]) ?>
    <?= $form->field($date_range, 'property_id')->hiddenInput()->label(false); ?>
    <?= $form->field($date_range, 'parent')->hiddenInput()->label(false); ?>
    <?= $form->field($date_range, 'id')->hiddenInput()->label(false); ?>
    <input type="hidden" name="tariff" value="<?= $tariff; ?>">
    <div style="display: inline;margin-top: 4px;margin-left: 19px">
        <input type="checkbox" value = "1" class="material-checkbox" id="have_mandatory_dinner" name="have_mandatory_dinner" <?= (count($dinners) > 0) ? "checked" : "" ?> onclick="mandatory_dinner(this);">
        <label style="margin: -3px">We have mandatory dinner during this date range</label>
    </div>
        <div class="row" id="mandatory_dinner" style= "display: <?= count($dinners) > 0 ? "block" : "none" ?>" >            
            <table id="dinner_table" class="table-mandatory-add" >
                <tr  class="thtableguestcount " >
                    <th class="Adults" >Date</th>
                    <th class="Adults">Inclusion Name</th>
                    <th  class="Adults">Adult Rate</th>
                    <th  class="Adults">Child Rate</th>
                    <th class="action-td"></th>
                </tr>
                <?php
                $i = 0;
        if( count($dinners) > 0 ) 
        {            
            foreach ($dinners as $dinner)        
            { ?>
                <tr>
                    <td class="Adults"><input type="text" class="inputDate-tariff add-mandatory-dinner-input"  name="dinner_daterange[]" value = "<?= Carbon::parse($dinner->date)->format('d M Y'); ?>" required /></td>
                    <td class="Adults"><input type="text" class="inputDate-tariff add-mandatory-dinner-input" name="event_name[]" value = "<?= $dinner->name ?>" required >  </td>
                    <td class="Adults"><input type="number" class="inputDate-tariff add-mandatory-dinner-input" name="adult_rate[]" value = "<?= $dinner->rate_adult ?>" required ></td>
                    <td class="Adults"><input type="number" class="inputDate-tariff add-mandatory-dinner-input" name="child_rate[]" value = "<?= $dinner->rate_child ?>" required ></td>
                    <td class="action-td">
                        <?php if($i != 0) { ?>
                            <i name="compulsory_rem" class="fa fa-minus fa-lg text-danger mt-2 ml-4" onclick="removeRow(this)"></i>
                        <?php } ?>                
                    </td>
                </tr>
                
                <?php 
                $i++;
            } ?>
            <tfoot >
                <tr style="height: 15px">
                </tr>
                <tr style="background-color: #ffffff">
                    <td class="addmoreguestcount">
                    <button class="btnAdd" type="button" style="border-radius: 50%; margin-left: 0px;margin-bottom: 15px;height: 23px;width: 23px;" id="add_new_plan_row" onclick="addRow();return true;"><i  class="fa fa-plus" aria-hidden="true"></i></button>
                    <span style="padding-left: 3px">Add more </span>
                </tr>
            </tfoot>
        <?php
        } 
        else
        {
        ?>
            <tr>
                <td class="Adults"><input type="text" class="inputDate-tariff add-mandatory-dinner-input" name="dinner_daterange[]" required /></td>
                <td class="Adults"><input type="text" class="inputDate-tariff add-mandatory-dinner-input" name="event_name[]" required></td>
                <td class="Adults"><input type="number" class="inputDate-tariff add-mandatory-dinner-input" name="adult_rate[]" required ></td>
                <td class="Adults"><input type="number" class="inputDate-tariff add-mandatory-dinner-input" name="child_rate[]" required></td>
                <td class="Adults1"></td>
            </tr>
            <tfoot >
            <tr style="height: 15px">

            </tr>
            <tr style="background-color: #ffffff">
                <td class="addmoreguestcount">
                <button class="btnAdd" type="button" style="border-radius: 50%; margin-left: 0px;margin-bottom: 15px;height: 23px;width: 23px;" id="add_new_plan_row" onclick="addRow();  return true;"><i  style=" padding-top: 4px; margin-bottom: 2px;"  class="fa fa-plus" aria-hidden="true"></i></button>
                <span style="padding-left: 3px">Add more </span></td>
            </tr>
            </tfoot>
        <?php } ?>
        </table>
        </div>

        <div class="row" style="margin-left: 4px;margin-bottom: 12px;">
            <div style="display: block;margin-right: 35px;margin-left: 16px;">                
                <?php if ($is_published != 1) { ?>
                    <BUTTON type="submit" class="buttonSave save-border" style="width: 80px;height: 30px" data-toggle="modal" data-target="#logoutModal"> Save </BUTTON>
                <?php } ?>
                
                <?php if($is_allow_skip == true) { ?>
                    <?= Html::a('Skip', ['tariff/home', 'id'=> $property->id],  ['class'=>'buttonNextanchor2']) ?>
                <?php } ?>
            </div>

        </div>
        <?php ActiveForm::end(); ?>
    </div>

</div>
</div>