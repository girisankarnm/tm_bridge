<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;

frontend\assets\CommonAsset::register($this);

$this->title = 'Rooming Validation';
$this->params['breadcrumbs'][] = $this->title;
?>
<script>
function check(option) {
  console.log(option);
  if(option == "auto") {
    $("#room_numbers").hide("slow");
  } else {
    $("#room_numbers").show("slow");
  }
}
</script>

<?php $form = ActiveForm::begin(['id' => 'validate','action' => ['rooming/verify'], 'enableClientValidation' => false, 'options' => ['enctype'=>'multipart/form-data']]) ?>
    
<div style="border-style: ridge ; width: 50%;top: 50%;left: 50%;">
    <p>Select rooming plan</p>
    <input type="radio" id="manual" name="rooming" value="manual" onclick="check(this.value)" checked>
    <label for="css">Manual Rooming</label>
    <input type="radio" id="auto" name="rooming" value="auto" onclick="check(this.value)">
    <label for="html">Auto Rooming</label> &nbsp;&nbsp;&nbsp;    
    </div>
    <hr>
    </br>
<div style="border: 5px outset red;  background-color: lightblue;  text-align: center;">ENQUIRY DATA </div>
    <hr>
    <div>
        <table id="guest_count_table" class="table-sm">
        <thead class="text-center">
        <th>Adults count</th>
        <th>Child count</th>
        <th>Infants count</th>
        </thead>
        <tr class="text-center">
            <td><input id="enquiry_adults" name="enquiry_adults" ></td>
            <td><input id="enquiry_child" name="enquiry_child" ></td>
            <td><input id="enquiry_infant" name="enquiry_infant" ></td>            
        </tr>
        </table>
    </div>

    <div id="room_numbers">        
        <table id="bed_table" class="table-sm">
        <thead class="text-center">
        <th>No of rooms</th>
        <th>EBA</th>
        <th>CWB</th>
        <th>CNB</th>
        <th>Single Occupancy</th>    
        </thead>
        <tr class="text-center">
            <td><input id="enquiry_no_rooms" name="enquiry_no_rooms" ></td>
            <td><input id="enquiry_eba" name="enquiry_eba" ></td>
            <td><input id="enquiry_cwb" name="enquiry_cwb" ></td>
            <td><input id="enquiry_cnb" name="enquiry_cnb" ></td>
            <td><input id="enquiry_single" name="enquiry_single" ></td>        
        </tr>
        </table>
    </div>
    
    <hr>
    <div style="border: 5px outset red;  background-color: lightblue;  text-align: center;"> DATABASE DATA    </div>
    <div>        
        <table id="tariff_table" class="table-sm">
        <thead class="text-center">
        <th>Room slab rate</th>
        <th>EBA slab Rate</th>
        <th>CWB slab Rate</th>
        <th>CNB slab Rate</th>
        <th>Single Occupancy slab Rate</th>    
        </thead>
        <tr class="text-center">
            <td><input id="room_rate" name="room_rate" ></td>
            <td><input id="eba_rate" name="eba_rate" ></td>
            <td><input id="cwb_rate" name="cwb_rate" ></td>
            <td><input id="cnb_rate" name="cnb_rate" ></td>
            <td><input id="single_rate" name="single_rate" ></td>        
        </tr>
        </table>
    </div>


    <div>
        <table id="occupancy_table" class="table-sm">
        <thead class="text-center">
        <th>Adults capacity</th>
        <th>Sharing bed capacity</th>
        <th>Extra Bed capacity</th>        
        </thead>
        <tr class="text-center">
            <td><input id="room_adults" name="room_adults" ></td>
            <td><input id="room_child_sharing" name="room_child_sharing" ></td>
            <td><input id="room_extra_beds" name="room_extra_beds" ></td>            
        </tr>
        </table>
    </div>
    
    
<button type="submit" class="btn btn-xs btn-primary" id="verify_room">Submit</button>
<?php ActiveForm::end(); ?>
