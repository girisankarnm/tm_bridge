<?php
use yii\bootstrap4\ActiveForm;
frontend\assets\CommonAsset::register($this);
$this->registerJsFile('/js/enquiry/guest_count.js');
?>

<link rel="stylesheet" type="text/css" href="/css/tour-min-1.css" />

<div class="content">
	<div class="container-fluid" style="background-color: #f3f3f3">
		<div class="card-title">
			Enquiry
		</div>
		<div class="tab">
			<a href="<?= \yii\helpers\Url::to(['/enquiry/basicdetails', 'id' => $enquiry->id]) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Basic Details</button></a>
			<a href="<?= \yii\helpers\Url::to(['/enquiry/contactdetails', 'id' => $enquiry->id]) ?>">   <button id="contactBtn" class="tablinks" onclick="openCity(event, 'Paris')">Contact Details</button></a>
			<div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/enquiry/guestcount']) ?>">  <button class="selectedButton" onclick="openCity(event, 'London')" >Guest Count</button></a> <hr class="new5" >
			</div>
			<a href="<?= \yii\helpers\Url::to(['/enquiry/accommodation', 'id' => $enquiry->id]) ?>"><button class="tablinks" onclick="openCity(event, 'Tokyo')">Accommodation</button></a>
		</div>
		<hr class="sidebar-divider">
		<?php $form = ActiveForm::begin(['id' => 'operational_form','enableClientValidation' => true, 'method' => 'post','action' => ['enquiry/saveguestcount']]) ?>
		<div style="display: inline">
			<?= $form->field($enquiry, 'guest_count_same_on_all_days')->inline()->radioList([1 => 'Same guest count on all days', 0 => 'Different guest count combination'],['class' => 'radiobtn'])->label(false); ?>			
		</div>
		<input type="hidden" id="enquiry_id" name="enquiry_id" value=<?php echo  $enquiry->id; ?> ?>
		<input type="hidden" id="guest_count_data" name="guest_count_data" value="" >
    	<input type="hidden" id="child_breakup" name="child_breakup" value="" >
    	<input type="hidden" id="child_age_breakup" name="child_age_breakup" value='<?= $age_breakup ?>' >

		<!-- start guest_count_same  -->
		<?php
            $i = 1;
        ?>
		<div id="guest_count_same" style="display: <?= $enquiry->guest_count_same_on_all_days == 1 ? "block;" : "none;"; ?>" >
			<div class="row">
				<table id="guest_count_same_table" class="table2class" style="width: 655px;;">
					<tr class="thtable" style=" border: 0.5px solid #A32C4F; border-radius: 12px;" >
						<th>Pax Count Plan</th>
						<th>Adults</th>
						<th>Children</th>
						<th></th>
						<th>Toral Guest</th>
						<th style="width: 320px" >Child Age </th>
					</tr>
					<?php
						//if already added guest details
						$adult_value = 0;
                        $children_value = 0;
                        if( $enquiry->guest_count_same_on_all_days == 1 ) {							
                            $adult_value = (isset($enquiry->enquiryGuestCounts[0])) ? $enquiry->enquiryGuestCounts[0]->adults : 0;
                            $children_value = (isset($enquiry->enquiryGuestCounts[0])) ? $enquiry->enquiryGuestCounts[0]->children : 0;														
                        }
                        ?>
						<tr>
							<td> Plan </td>
							<td>
								<input type="hidden" id="plan_uid" name="plan_uid[]" value="0" >   
								<input name="adults[]" id="adults_0" type="number" class="inputTextClass" style="width: 100px;height: 33px;margin-top: 24px;" value = "<?= $adult_value; ?>" >
							</td>
							<td>  <input name="children[]" id="children_0" type="number" class="inputTextClass" style="width: 100px;height: 33px;margin-top: 24px;" value = "<?= $children_value; ?>" ></td>
							<td>
								<button type="button" class="btn btn-sm btn-outline-primary child-breakup1" onclick="showChildBreakupModal(this)" data-toggle="modal" unique_plan_id="0">
                                <i class="fa fa-plus"></i></button>
							</td>
							<td> 								
								<span id="total_guests_0" style="color: red;font-size: 12px;display: inline" id="span_child_validation_0"><?= $adult_value + $children_value ?> </span>
							</td>
							<td> 
								<span id="span_child_validation_0" style="color: red;font-size: 12px;display: inline">NA</span>
							</td>
						</tr>						
				</table>
			</div>
		</div>
		<!-- end guest_count_same  -->

		<!-- start guest_count_differnt  -->
		<div id="guest_count_differnt" style="display: <?= $enquiry->guest_count_same_on_all_days == 0 ? "block;" : "none;"; ?>">
			<div class="row">
				<table id="guest_count_differnt_table" class="table2class" style="width: 655px;;">
					<tr class="thtable" style=" border: 0.5px solid #A32C4F; border-radius: 12px;" >
						<th >Pax Count Plan</th>
						<th >Adults</th>
						<th >Children</th>
						<th ></th>
						<th >Toral Guest</th>
						<th style="width: 320px" >Child Age </th>
					</tr>

					<?php
						//if already added guest details
                        if (isset($enquiry->enquiryGuestCounts) && count($enquiry->enquiryGuestCounts) > 0) {
                            foreach ($enquiry->enquiryGuestCounts as $guest_count) { ?>
							<tr>
								<td>  Plan <?= $i ?></td>
								<td>  <input type="number" class="inputTextClass" style="width: 100px;height: 33px;margin-top: 24px;" ></td>
								<td>  <input type="number" class="inputTextClass" style="width: 100px;height: 33px;margin-top: 24px;" ></td>
								<td>  <input type="text" class="inputTextClass" style="width: 100px;height: 33px;margin-top: 24px;" ></td>
								<td >
									
									 <span style="color: red;font-size: 12px;width: 100px;margin-top: 24px;height: 33px">! Age is validated</span></td>
							</tr>
						<?php	
							$i++;
						}
						}
						else
						{
							$i = 3; //use for unique plan id
						?>
						<tr>
							<td>  Plan 1</td>
							<td> 
								<input type="hidden" id="plan_uid" name="plan_uid[]" value="1" >
								<input name="adults[]" id="adults_1" type="number" class="inputTextClass" style="width: 100px;height: 33px;margin-top: 24px;" >
							</td>							
							<td>  <input name="children[]" id="children_1" type="text" class="inputTextClass" style="width: 100px;height: 33px;margin-top: 24px;" ></td>
							<td> 
								<button type="button" class="btn btn-sm btn-outline-primary child-breakup1" onclick="showChildBreakupModal(this)" data-toggle="modal" unique_plan_id="1">
                                <i class="fa fa-plus"></i></button>
							</td>
							<td>  
								<span id="total_guests_1" style="color: red;font-size: 12px;display: inline" id="span_child_validation_0"> NA </span>
							</td>
							<td > 
								<span id="span_child_validation_1" style="color: red;font-size: 12px;display: inline">NA</span>
							</td>
						</tr>
						<tr >
							<td>  Plan 2</td>
							<td>
								<input type="hidden" id="plan_uid" name="plan_uid[]" value="2" >  
								<input name="adults[]" id="adults_2" type="number" class="inputTextClass" style="width: 100px;height: 33px" >
							</td>
							<td>  
								<input name="children[]" id="children_2" type="number" class="inputTextClass" style="width: 100px;height: 33px" ></td>
							<td> 
								<button type="button" class="btn btn-sm btn-outline-primary child-breakup1" onclick="showChildBreakupModal(this)" data-toggle="modal" unique_plan_id="2">
                                <i class="fa fa-plus"></i></button>
							</td>
							<td>  
								<span id="total_guests_2" style="color: red;font-size: 12px;display: inline"> NA </span>
							</td>
							<td > 
								<span id="span_child_validation_2" style="color: red;font-size: 12px;display: inline">NA</span>
							</td>
						</tr>
					<?php
						}                    
					?>					
				</table>
				<div>
				<button class="btnAdd" style="border-radius: 50%;" id="add_new_plan_row"><i  class="fa fa-plus" aria-hidden="true"></i></button>
							<span style="padding-left: 3px">Add more </span>
				</div>
			</div>
		</div>
		<!-- end start guest_count_differnt  -->
		
		<input type="hidden" id="current_unique_plan_id" name="current_unique_plan_id" value="<?= $i; ?>" ?>
		<div class="row" style="margin-left: 4px;margin-bottom: 12px;">
			<div style="display: block;margin-right: 35px">
				<BUTTON type="text" class="buttonSave"> Save </BUTTON>
			</div>
		</div>

		<?php ActiveForm::end(); ?>
	</div>
</div>

<div class="modal fade" id="childBreakupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="childBreakupModalLabel">Enter age and count</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<input type="hidden" id="plan_id" name="planID" value="0">
				<table id="age_breakup_table" class="table-sm">
					<thead class="text-center">
					<th>Age (Years)</th>
					<th>Count</th>
					<th></th>
					</thead>
					<tbody>					
					</tbody>
				</table>
				<div><button type="button" id="add_age_count_row" class="btn btn-sm bg-success" style="border-radius: 50%">
						<i class="fa fa-plus"></i></button></div>
			</div>
			<div class="modal-footer">
				<button type="button" id="close_child_breakup"  class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" id="apply_child_breakup" class="btn btn-primary">Apply</button>
			</div>
		</div>
	</div>
</div>