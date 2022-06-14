<?php
use yii\bootstrap4\ActiveForm;
$this->registerJsFile('/js/enquiry/accomodation.js');
?>

<link rel="stylesheet" type="text/css" href="/css/tour-min-1.css" />

<div class="$content">
	<div class="container-fluid" >
		<div class="card-title">
			Enquiry
		</div>

		<div class="tab">
			<a href="<?= \yii\helpers\Url::to(['/enquiry/basicdetails', 'id' => $enquiry->id]) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Basic Details</button></a>
			<a href="<?= \yii\helpers\Url::to(['/enquiry/contactdetails', 'id' => $enquiry->id]) ?>">   <button id="contactBtn" class="tablinks" onclick="openCity(event, 'Paris')">Contact Details</button></a>
			<a href="<?= \yii\helpers\Url::to(['/enquiry/guestcount', 'id' => $enquiry->id]) ?>"> <button class="tablinks" onclick="openCity(event, 'Tokyo')">Guest Count</button></a>
			<div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/enquiry/accommodation', 'id' => $enquiry->id]) ?>">  <button class="selectedButton" onclick="openCity(event, 'London')" >Accommodation</button></a> <hr class="new5" >
			</div>
		</div>
		<hr class="sidebar-divider">
		<?php $form = ActiveForm::begin(['id' => 'form_enquiry_accomodation','enableClientValidation' => false, 'method' => 'post','action' => ['enquiry/saveaccommodation']]) ?>
		<input type="hidden" id="enquiry_id" name="enquiry_id" value=<?php echo  $enquiry->id; ?> ?>
		<div class="row">
			<table id="customers" class="tableclass" style="width: 895px; border-spacing: 15px;">
				<tr class="thtable" style=" border: 0.5px solid #A32C4F; border-radius: 15px;font-size: 12px" >
					<th>Day</th>
					<th>Accommodation Staus</th>
					<th>Stay Destination</th>
					<th>Meal Plan</th>
					<th>Pax Count Plan</th>
				</tr>

				<?php 				
				if( isset($enquiry->enquiryAccommodations) && count($enquiry->enquiryAccommodations) > 0 ) {						
					$accomodation_status = ['1' => 'Required', '0' => 'Not Required'];
					foreach ($enquiry->enquiryAccommodations as $accomodation){
						$i = 0;						
				?>
					<tr>
						<td>
							<input type="text" name="day[]"  value="<?php echo date('Y-m-d', strtotime($accomodation->day)); ?>" class="inputTextClass tableinput" readonly />						
						</td>
						<td>
							<?php echo $form->field($accomodation,'status')->dropDownList($accomodation_status,['row_id' => $i, 'name' => 'accommodation_status[]','class' => 'inputTextClass tableinput' ])->label(false) ?>
						</td>
						<td>
							<?php echo $form->field($accomodation,'destination_id')->dropDownList($destinations,['id' => 'destination_'.$i , 'name' => 'destination_id[]','class' => 'inputTextClass tableinput' ])->label(false) ?>
						</td>
						<td>
							<?php echo $form->field($accomodation,'meal_plan_id')->dropDownList($meal_plans,['id' => 'meal_plan_'.$i, 'name' => 'meal_plan_id[]','class' => 'inputTextClass tableinput'])->label(false) ?>
						</td>
						<td>
							<?php if ($enquiry->guest_count_same_on_all_days == 1){
								$model->guest_count_plan_id = 1;
								echo $form->field($accomodation,'guest_count_plan_id')->dropDownList($pax_count_plans,['id' => 'plan_'.$i, 'name' => 'guest_count_plan_id[]','class' => 'inputTextClass tableinput', 'readonly' => 'readonly'])->label(false);
							}
							else
								echo $form->field($accomodation,'guest_count_plan_id')->dropDownList($pax_count_plans,['id' => 'plan_'.$i, 'name' => 'guest_count_plan_id[]','class' => 'inputTextClass tableinput' ])->label(false);
							?>
						</td>
					</tr>

				<?php
					$i++; 
					}
				}
				else
				{
					for ($i = 0; $i <= $enquiry->tour_duration; $i++){ ?>				
						<tr>
							<td>
								<input type="text" name="day[]"  value="<?php echo date('Y-m-d', strtotime($enquiry->tour_start_date. ' + ' .$i. 'days')); ?>" class="inputTextClass tableinput" readonly />						
							</td>
							<td>
								<select row_id="<?= $i?>" class="inputTextClass tableinput" style="width: 150px;" name="accommodation_status[]">
								<option value="1">Required</option>
								<option value="0">Not Required</option>
								</select>
							</td>
							<td>
								<?php echo $form->field($model,'destination_id')->dropDownList($destinations,['id' => 'destination_'.$i , 'name' => 'destination_id[]','class' => 'inputTextClass tableinput' ])->label(false) ?>						
							</td>
							<td>
								<?php echo $form->field($model,'meal_plan_id')->dropDownList($meal_plans,['id' => 'meal_plan_'.$i, 'name' => 'meal_plan_id[]','class' => 'inputTextClass tableinput'])->label(false) ?>
							</td>
							<td>
								<?php if ($enquiry->guest_count_same_on_all_days == 1){
									$model->guest_count_plan_id = 1;
									echo $form->field($model,'guest_count_plan_id')->dropDownList($pax_count_plans,['id' => 'plan_'.$i, 'name' => 'guest_count_plan_id[]','class' => 'inputTextClass tableinput', 'readonly' => 'true'])->label(false);
								}
								else
									echo $form->field($model,'guest_count_plan_id')->dropDownList($pax_count_plans,['id' => 'plan_'.$i, 'name' => 'guest_count_plan_id[]','class' => 'inputTextClass tableinput' ])->label(false);
								?>
							</td>
						</tr>
					<?php } 
				}
				?>

			</table>
		</div>

		<div class="row" style="margin-left: 4px;margin-bottom: 12px;">
			<div style="display: block;margin-right: 35px">
				<button type="button" class="buttonSave" id="save_accommodation"> Save </button>
			</div>
		</div>
		<?php ActiveForm::end(); ?>
	</div>
</div>