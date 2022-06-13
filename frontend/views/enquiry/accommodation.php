<?php
?>

<link rel="stylesheet" type="text/css" href="/css/tour-min-1.css" />

<div class="$content">
	<div class="container-fluid" >
		<div class="card-title">
			Enquiry

		</div>

		<div class="tab">
			<a href="<?= \yii\helpers\Url::to(['/enquiry/basicdetails']) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Basic Details</button></a>
			<a href="<?= \yii\helpers\Url::to(['/enquiry/contact']) ?>">   <button id="contactBtn" class="tablinks" onclick="openCity(event, 'Paris')">Contact Details</button></a>
			<a href="<?= \yii\helpers\Url::to(['/enquiry/guestcount']) ?>"> <button class="tablinks" onclick="openCity(event, 'Tokyo')">Guest Count</button></a>
			<div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/enquiry/accommodation']) ?>">  <button class="selectedButton" onclick="openCity(event, 'London')" >Accommodation</button></a> <hr class="new5" >
			</div>
		</div>
		<hr class="sidebar-divider">

		<div class="row">
			<table id="customers" class="tableclass" style="width: 895px; border-spacing: 15px;">
				<tr class="thtable" style=" border: 0.5px solid #A32C4F; border-radius: 15px;font-size: 12px" >
					<th>Day</th>
					<th>Accommodation Staus</th>
					<th>Stay Destination</th>
					<th>Meal Plan</th>
					<th>Pax Count Plan</th>
				</tr>
				<tr>

					<td>  <input type="date" class="inputTextClass tableinput" style="width: 143px;color: #787486 !important;" ></td>
					<td>  <select class="inputTextClass tableinput" style="width: 150px;" >
							<option  value="">Required</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</td>
					<td>
						<select class="inputTextClass tableinput" style="width: 143px;color: #787486 !important;" >
							<option value="">choose</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</td>
					<td>
						<select class="inputTextClass tableinput"style="width: 143px;color: #787486 !important;" >
							<option value="">choose</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</td>
					<td>
						<select class="inputTextClass tableinput" style="width: 143px;color: #787486 !important;">
							<option value="">choose</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>

					</td>
				</tr>
				<tr>
					<td>  <input type="date" class="inputTextClass tableinput" style="width: 143px;color: #787486 !important;" ></td>
					<td>  <select class="inputTextClass tableinput" style="width: 150px" >
							<option value="">Required</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</td>
					<td>
						<select class="inputTextClass tableinput" style="width: 150px" >
							<option value="">choose</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</td>
					<td>
						<select class="inputTextClass tableinput" style="width: 150px" >
							<option value="">choose</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</td>
					<td>
						<select class="inputTextClass tableinput" style="width: 150px" >
							<option value="">choose</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>

					</td>
				</tr>
				<tr>
					<td>  <input type="date" class="inputTextClass tableinput" style="width: 143px;color: #787486 !important;" ></td>
					<td>  <select class="inputTextClass tableinput" style="width: 150px" >
							<option value="">Required</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</td>
					<td>
						<select class="inputTextClass tableinput" style="width: 150px" >
							<option value="">choose</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</td>
					<td>
						<select class="inputTextClass tableinput" style="width: 150px" >
							<option value="">choose</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</td>
					<td>
						<select class="inputTextClass tableinput" style="width: 150px" >
							<option value="">choose</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>

					</td>
				</tr>

			</table>
		</div>
		<div class="row" style="margin-left: 4px;margin-bottom: 12px;">
			<div style="display: block;margin-right: 35px">
				<BUTTON type="text"  class="buttonSave"> Save </BUTTON>
			</div>
		</div>
	</div>
</div>