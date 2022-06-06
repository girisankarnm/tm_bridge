<div class="$content">
    <div class="container-fluid">
        <div class="card-title">
            <span style="font: bold">Operator Profile</span>
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px; height: 430px">
            <div class="tab">
                <a href="<?= \yii\helpers\Url::to(['/operator/basicdetails']) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Basic Details</button></a>
                <a href="<?= \yii\helpers\Url::to(['/operator/addressandlocation']) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Address & Location</button></a>
                <a href="<?= \yii\helpers\Url::to(['/operator/legaltax']) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Legal Tax</button></a>
                <a href="<?= \yii\helpers\Url::to(['/operator/contact']) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Contact Details</button></a>
                <div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/operator/termsandconditions']) ?>">  <button class="selectedButton" onclick="openCity(event, 'London')" >Terms & Conditions </button></a> <hr class="new5" >
                </div>
            </div>
            <hr class="sidebar-divider">

            <label class="container-terms-conditions" style="margin-top: 30px">
                <input type="checkbox" checked="checked;" >
                <span class="checkmark"></span>I certify that I am engaged as Tour Operator.<br>Note: T & C will be finalized later
            </label>
            <div class="row" style="margin-left: 3px;margin-bottom: 12px;">
                <div style="display: block;margin-right: 35px">
                    <BUTTON type="text" class="buttonSmall"> Save </BUTTON>
                </div>
            </div>
        </div>
    </div>
</div>









