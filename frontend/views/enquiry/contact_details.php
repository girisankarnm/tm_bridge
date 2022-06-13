<?php
?>
<?php
?>

<link rel="stylesheet" type="text/css" href="/css/tour-min-1.css" />


<!-- Begin Page Content -->
<div class="content">
    <div class="container-fluid" >
        <div class="card-title">
            <span style="font: bold">Enquiry</span>
        </div>

        <div class="tab">
            <a href="<?= \yii\helpers\Url::to(['/enquiry/basicdetails']) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Basic Details</button></a>
            <div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/enquiry/contact']) ?>">  <button class="selectedButton" onclick="openCity(event, 'London')" >Contact Details</button></a> <hr class="new5" >
            </div>
            <a href="<?= \yii\helpers\Url::to(['/enquiry/guestcount']) ?>"> <button class="tablinks" onclick="openCity(event, 'Tokyo')">Guest Count</button></a>
            <a href="<?= \yii\helpers\Url::to(['/enquiry/accommodation']) ?>"><button class="tablinks" onclick="openCity(event, 'Tokyo')">Accommodation</button></a>
        </div>
        <hr class="sidebar-divider">
        <div class="row" style="margin-left: 3px;margin-bottom: 8px;">
            <div style="display: block;margin-right: 35px">
                <label class="Labelclass" style="display: block;margin-top: 20px" >*Email 1</label>
                <input type="text" class="inputTextClass" >
            </div>
            <div style="display: block">
                <label class="Labelclass" style="display: block;margin-top: 20px" >*Email 2</label>
                <input type="text" class="inputTextClass" >

            </div>


        </div>

        <div class="row" style="margin-left: 3px;margin-bottom: 15px">
            <div style="display: block;margin-right: 35px">
                <label class="Labelclass" style="display: block;margin-top: 20px" >*Contact Number 1</label>
                <input type="text" class="inputTextClass" >
            </div>
            <div style="display: block">
                <label class="Labelclass" style="display: block;margin-top: 20px" >*Contact Number 2</label>
                <input type="text" class="inputTextClass" >

            </div>


        </div>
        <div class="row" style="margin-left: 3px;margin-bottom: 12px;">
            <div style="display: block;margin-right: 35px">
                <BUTTON type="text" class="buttonSave"> Save </BUTTON>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
</div>