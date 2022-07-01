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
            <div id="mainHeding-location"style="height: 43px">
                    <div > <img style="width: 34px;height: 34px" src="images/building1.png" alt="Matrix"></div>
                    <div >
                        <div id="h-border-location"  >
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
        </div>
    </div>

    <div class="tariffBorder" style="margin-top: 20px;">
        <div style="margin-bottom: 30px; background-color: ">

            <div class="commonTitle" style="width: 50%;float: left;    margin-left: 20px;">
                Enter Mandatory Dinner</div>

            <div id="tariffAddmain" style="justify-content: right"  >
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
                <div style="margin-top: 4px"><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6>
                </div>
                <div class="margintopcls" >  <span class="dateform">From Date</span>
                    <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class" ><?= Carbon::parse($date_range->to_date)->format('d M Y'); ?> </h6></div>
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
            <table id="dinner_table" class="table3enquiryclass" >
                <tr  class="thtableguestcount " >
                    <th class="Adults" >Date</th>
                    <th class="Adults">Inclusion Name</th>
                    <th  class="Adults">Adult Rate</th>
                    <th  class="Adults">Child Rate</th>
                    <th class="Adults"></th>
                </tr>
                <?php
                $i = 0;
        if( count($dinners) > 0 ) {            
        foreach ($dinners as $dinner)        
        { ?>
            <tr>
                <td class="Adults"><input type="text" class="inputTextClass" name="dinner_daterange[]" value = "<?= Carbon::parse($dinner->date)->format('d M Y'); ?>" style="width: 100px;height: 33px;margin-top: 24px;"/></td>
                <td class="Adults"><input type="text" class="inputTextClass" name="event_name[]" value = "<?= $dinner->name ?>" style="width: 100px;height: 33px;margin-top: 24px;" >  </td>
                <td class="Adults"><input type="number" class="inputTextClass" name="adult_rate[]" value = "<?= $dinner->rate_adult ?>" style="width: 100px;height: 33px;margin-top: 24px;"></td>
                <td class="Adults"><input type="number" class="inputTextClass" name="child_rate[]" value = "<?= $dinner->rate_child ?>" style="width: 100px;height: 33px;margin-top: 24px;"></td>
                <td class="Adults1"> 
                    <?php if($i != 0) { ?>
                        <i name="compulsory_rem" class="fa fa-minus fa-lg text-danger mt-2 ml-4" onclick="removeRow(this)"></i>
                    <?php } ?>                
                </td>
            </tr>
            <?php 
            $i++;
            } 
        } else
        {
        ?>
            <tr>
                <td class="Adults"><input type="text" class="inputTextClass" name="dinner_daterange[]" style="width: 100px;height: 33px;margin-top: 24px;"/></td>
                <td class="Adults"><input type="text" class="inputTextClass" name="event_name[]" style="width: 100px;height: 33px;margin-top: 24px;"></td>
                <td class="Adults"><input type="number" class="inputTextClass" name="adult_rate[]" style="width: 100px;height: 33px;margin-top: 24px;"></td>
                <td class="Adults"><input type="number" class="inputTextClass" name="child_rate[]" style="width: 100px;height: 33px;margin-top: 24px;"></td>
                <td class="Adults1"></td>
            </tr>
        <?php } ?>
        </table>
        <button type="button" class="btnAdd" style="border-radius: 50%;" onclick="addRow();  return true;"><i  class="fa fa-plus" aria-hidden="true"></i></button><span style="padding-left: 3px">Add more </span>
        </div>

        <div class="row" style="margin-left: 4px;margin-bottom: 12px;">
            <div style="display: block;margin-right: 35px;margin-left: 16px;">
                <BUTTON type="button" class="prevbutton" style="width: 80px;height: 30px" data-toggle="modal" data-target="#logoutModal"> Prev </BUTTON>
                <BUTTON type="submit" class="buttonSave save-border" style="width: 80px;height: 30px" data-toggle="modal" data-target="#logoutModal"> Save </BUTTON>
            </div>

        </div>
        <?php ActiveForm::end(); ?>
    </div>

</div>
</div>