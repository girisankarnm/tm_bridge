<div class="$content">
    <div class="container-fluid">
        <div class="card-title">
            <span style="font: bold">Operator Profile</span>
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px; height: 430px">
            <div class="tab">
                <a href="<?= \yii\helpers\Url::to(['/operator/basicdetails']) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Basic Details</button></a>
                <div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/operator/addressandlocation']) ?>">  <button class="selectedButton" onclick="openCity(event, 'London')" >Address & Location</button></a> <hr class="new5" >
                </div>
                <a href="<?= \yii\helpers\Url::to(['/operator/legaltax']) ?>"> <button class="tablinks" onclick="openCity(event, 'Tokyo')">Legal Tax</button></a>
                <a href="<?= \yii\helpers\Url::to(['/operator/contact']) ?>"><button class="tablinks" onclick="openCity(event, 'Tokyo')">Contact Details</button></a>
                <a href="<?= \yii\helpers\Url::to(['/operator/termsandconditions']) ?>"><button class="tablinks" onclick="openCity(event, 'Tokyo')">Terms & Conditions</button></a>
            </div>
            <hr class="sidebar-divider">
            <div class="row" style="margin-left: 3px;margin-bottom: 8px;">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block;margin-top: 20px" >*Country</label>
                    <select class="inputTextClass">
                        <option value="">Choose</option>
                        <option value="">India</option>
                        <option value="">America</option>
                        <option value="">China</option>
                    </select>
                </div>
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block;margin-top: 20px" >*Location</label>
                    <select class="inputTextClass">
                        <option value="">Choose</option>
                        <option value="">Delhi</option>
                        <option value="">Mumbai</option>
                        <option value="">Kerala</option>
                    </select>
                </div>
                <div style="display: block">
                    <label class="Labelclass" style="display: block;margin-top: 20px" >*Destination</label>
                    <select class="inputTextClass">
                        <option value="">Choose</option>
                        <option value="">Alappuzha</option>
                        <option value="">Idukki</option>
                        <option value="">Vagamon</option>
                    </select>
                </div>
            </div>

            <div class="row" style="margin-left: 3px;margin-bottom: 15px">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block;margin-top: 20px" >*Address</label>
                    <input type="text" class="inputTextClass" >
                </div>
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block;margin-top: 20px" >*Zip Code</label>
                    <input type="text" class="inputTextClass" >
                </div>
                <div style="display: block">
                    <label class="Labelclass" style="display: block;margin-top: 20px" >*Locality</label>
                    <input type="text" class="inputTextClass" >
                </div>
            </div>
            <div style="display: block;margin-right: 35px; margin-left: 10px; margin-top: 20px">
                <BUTTON type="text" class="buttonSave" style="width: 85px; border-radius: 5px"> Save </BUTTON>
            </div>
        </div>

    </div>
</div>


<!-- End of Footer -->







