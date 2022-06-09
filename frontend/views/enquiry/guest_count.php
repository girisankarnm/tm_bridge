<?php
use yii\bootstrap4\ActiveForm;
$this->registerJsFile('/js/enquiry/create.js');
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
		<div id="guest_count_same" style="display: <?= $enquiry->guest_count_same_on_all_days == 1 ? "block;" : "none;"; ?>" >
			<div class="row">
				<table id="customers" class="table2class" style="width: 655px;;">
					<tr class="thtable" style=" border: 0.5px solid #A32C4F; border-radius: 12px;" >
						<th >Pax Count Plan</th>
						<th >Adults</th>
						<th >Children</th>
						<th >Toral Guest</th>
						<th style="width: 320px" >Child Age </th>
					</tr>
					<?php
						//if already added guest details
						$adult_value = "";
                        $children_value = "";
                        if( $enquiry->guest_count_same_on_all_days == 1 ) {
                            $adult_value = (isset($enquiry->enquiryGuestCounts[0])) ? $enquiry->enquiryGuestCounts[0]->adults : "";
                            $children_value = (isset($enquiry->enquiryGuestCounts[0])) ? $enquiry->enquiryGuestCounts[0]->children : "";
                        }
                        ?>
						<tr>
							<td>  Plan </td>
							<td>  <input type="number" class="inputTextClass" style="width: 100px;height: 33px;margin-top: 24px;" ></td>
							<td>  <input type="number" class="inputTextClass" style="width: 100px;height: 33px;margin-top: 24px;" ></td>
							<td>  <input name="total_guests[]" type="text" class="inputTextClass" style="width: 100px;height: 33px;margin-top: 24px;" ></td>
							<td> <input name="child_validation[]" type="text" class="inputTextClass" style="width: 100px;height: 33px;margin-top: 24px;" ></td>
						</tr>						
				</table>
			</div>
		</div>
		<!-- start guest_count_same  -->

		<!-- start guest_count_differnt  -->
		<div id="guest_count_differnt" style="display: <?= $enquiry->guest_count_same_on_all_days == 0 ? "block;" : "none;"; ?>">
			<div class="row">
				<table id="customers" class="table2class" style="width: 655px;;">
					<tr class="thtable" style=" border: 0.5px solid #A32C4F; border-radius: 12px;" >
						<th >Pax Count Plan</th>
						<th >Adults</th>
						<th >Children</th>
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
								<td > <span style="color: red;font-size: 12px;width: 100px;margin-top: 24px;height: 33px">! Age is validated</span></td>
							</tr>
						<?php	}
						}
						else
						{
						?>
						<tr>
							<td>  Plan 1</td>
							<td>  <input type="number" class="inputTextClass" style="width: 100px;height: 33px;margin-top: 24px;" ></td>
							<td>  <input type="number" class="inputTextClass" style="width: 100px;height: 33px;margin-top: 24px;" ></td>
							<td>  <input type="text" class="inputTextClass" style="width: 100px;height: 33px;margin-top: 24px;" ></td>
							<td > <span style="color: red;font-size: 12px;width: 100px;margin-top: 24px;height: 33px">! Age is validated</span></td>
						</tr>
						<tr >
							<td>  Plan 2</td>
							<td>  <input type="number" class="inputTextClass" style="width: 100px;height: 33px" ></td>
							<td>  <input type="number" class="inputTextClass" style="width: 100px;height: 33px" ></td>
							<td>  <input type="text" class="inputTextClass" style="width: 100px;height: 33px" ></td>
							<td style="width: 20px;"><span style="color: red;font-size: 12px;display: inline">! Age is validated</span></td>
						</tr>
					<?php
						}                    
					?>
					
					<tr > <td> <button class="btnAdd" style="border-radius: 50%;"><i  class="fa fa-plus" aria-hidden="true"></i></button><span style="padding-left: 3px">Add more </span></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>
		</div>
		<!-- end start guest_count_differnt  -->
		

		<div class="row" style="margin-left: 4px;margin-bottom: 12px;">
			<div style="display: block;margin-right: 35px">
				<BUTTON type="text" class="buttonSave"> Save </BUTTON>
			</div>
		</div>

		<?php ActiveForm::end(); ?>
	</div>
</div>