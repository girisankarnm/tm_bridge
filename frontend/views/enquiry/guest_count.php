<?php
?>

<link rel="stylesheet" type="text/css" href="/css/tour-min-1.css" />

<div class="content">
	<div class="container-fluid" style="background-color: #f3f3f3">
		<div class="card-title">
			Enquiry
		</div>

		<div class="tab">
			<a href="<?= \yii\helpers\Url::to(['/enquiry/basicdetails']) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Basic Details</button></a>
			<a href="<?= \yii\helpers\Url::to(['/enquiry/contact']) ?>">   <button id="contactBtn" class="tablinks" onclick="openCity(event, 'Paris')">Contact Details</button></a>
			<div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/enquiry/guestcount']) ?>">  <button class="selectedButton" onclick="openCity(event, 'London')" >Guest Count</button></a> <hr class="new5" >
			</div>
			<a href="<?= \yii\helpers\Url::to(['/enquiry/accommodation']) ?>"><button class="tablinks" onclick="openCity(event, 'Tokyo')">Accommodation</button></a>
		</div>
		<hr class="sidebar-divider">
		<div style="display: inline">
			<input class="radiobtn"  type="radio" name="optradio"> <span class="radiolabel">Same guest count on all days</span>
			<input class="radiobtn" "  type="radio" name="optradio"><span class="radiolabel"> Different Guest Count Combination</span>
		</div>

		<div class="row">
			<table id="customers" class="table2class" style="width: 655px;;">
				<tr class="thtable" style=" border: 0.5px solid #A32C4F; border-radius: 12px;" >
					<th >Pax Count Plan</th>
					<th >Adults</th>
					<th >Children</th>
					<th >Toral Guest</th>
					<th style="width: 320px" >Child Age </th>
				</tr>
				<tr>
					<td>  <input type="text" class="inputTextClass" style="width: 100px;height: 33px;margin-top: 24px;" ></td>
					<td>  <input type="number" class="inputTextClass" style="width: 100px;height: 33px;margin-top: 24px;" ></td>
					<td>  <input type="number" class="inputTextClass" style="width: 100px;height: 33px;margin-top: 24px;" ></td>
					<td>  <input type="text" class="inputTextClass" style="width: 100px;height: 33px;margin-top: 24px;" ></td>
					<td > <span style="color: red;font-size: 12px;width: 100px;margin-top: 24px;height: 33px">! Age is validated</span></td>
				</tr>
				<tr >
					<td>  <input type="text" class="inputTextClass" style="width: 100px;height: 33px" ></td>
					<td>  <input type="number" class="inputTextClass" style="width: 100px;height: 33px" ></td>
					<td>  <input type="number" class="inputTextClass" style="width: 100px;height: 33px" ></td>
					<td>  <input type="text" class="inputTextClass" style="width: 100px;height: 33px" ></td>
					<td style="width: 20px;"><span style="color: red;font-size: 12px;display: inline">! Age is validated</span></td>
				</tr>
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
				<BUTTON type="text" class="buttonSave"> Save </BUTTON>
			</div>
		</div>

	</div>
</div>