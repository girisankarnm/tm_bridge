
<div class="$content">
    <div class="container-fluid" >
        <div class="card-title">
            Property
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px;">
            <div class="tab" style="display: flex;flex-direction: row;">
                <a href="<?= \yii\helpers\Url::to(['/property/basicdetails']) ?>"> <button class="tablinks" onclick="openCity(event, 'Tokyo')">Basic Details</button></a>

                <a href="<?= \yii\helpers\Url::to(['/property/addressandlocation']) ?>">   <button id="contactBtn" class="tablinks" onclick="openCity(event, 'Paris')">Address & Location</button></a>
                <div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/property/legaltax']) ?>">  <button class="selectedButton" onclick="openCity(event, 'London')" >Legal & Tax</button></a> <hr class="new5" >
                </div>
                <a href="<?= \yii\helpers\Url::to(['/property/contact']) ?>"><button class="tablinks" onclick="openCity(event, 'Tokyo')">Contact Details</button></a>
                <a href="<?= \yii\helpers\Url::to(['/property/termsandconditions']) ?>"><button class="tablinks" onclick="openCity(event, 'Tokyo')">Terms & Conditions</button></a>
            </div>
            <hr class="sidebar-divider">
            <div class="row" style="margin-left: 3px;margin-bottom: 8px;">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block;margin-top: 20px" >*Legal Status</label>
                    <select class="inputLarge">
                        <option value="">choose</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>
            </div>
            <div class="row" style="margin-left: 3px;margin-bottom: 15px">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block;margin-top: 20px" >*Pan Number</label>
                    <input type="text" class="inputMedium" >
                </div>
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block;margin-top: 20px" ></label>
                    <button class="inputTextClass" style="display:block;width:110px;" onclick="document.getElementById('getFile').click()"><i class="fa fa-upload"></i> <b>Upload File</b></button>
                    <input type='file' id="getFile" style="display:none">
                </div>
            </div>
            <div class="row" style="margin-left: 3px;margin-bottom: 15px">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block;margin-top: 20px" >*Business License Number</label>
                    <input type="text" class="inputMedium" >
                </div>
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block;margin-top: 20px" ></label>
                    <button class="inputTextClass" style="display:block;width:110px;" onclick="document.getElementById('getFile').click()"><i class="fa fa-upload"></i> <b>Upload File</b></button>
                    <input type='file' id="getFile" style="display:none">
                </div>
            </div>
            <div class="row" style="margin-left: 3px;margin-bottom: 15px">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block;margin-top: 20px" >*GST Number</label>
                    <input type="text" class="inputMedium" >
                </div>
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block;margin-top: 20px" ></label>
                    <button class="inputTextClass" style="display:block;width:110px;" onclick="document.getElementById('getFile').click()"><i class="fa fa-upload"></i> <b>Upload File</b></button>
                    <input type='file' id="getFile" style="display:none">
                </div>
            </div>
            <div class="row" style="margin-left: 3px;margin-bottom: 15px">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block;margin-top: 20px" >*Bank Name</label>
                    <input type="text" class="inputLarge" >
                </div>
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block;margin-top: 20px" >*Account Name</label>
                    <input type="text" class="inputLarge" >
                </div>
            </div>
            <div class="row" style="margin-left: 3px;margin-bottom: 15px">
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block;margin-top: 20px" >*Account Number</label>
                    <input type="text" class="inputLarge" >
                </div>
                <div style="display: block;margin-right: 35px">
                    <label class="Labelclass" style="display: block;margin-top: 20px" >*IFSC Code</label>
                    <input type="text" class="inputLarge" >
                </div>
            </div>
            <div style="display: block;margin-right: 35px; margin-left: 10px; margin-top: 20px">
                <BUTTON type="text" class="buttonSave" style="width: 85px; border-radius: 5px"> Save </BUTTON>
            </div>
        </div>
    </div>
</div>


