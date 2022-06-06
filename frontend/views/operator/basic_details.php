
<div class="$content">

    <div class="container-fluid">
        <div class="card-title">
            Operator Profile
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px;">
            <div class="tab" style="display: flex;flex-direction: row;">
                <div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/operator/basicdetails']) ?>">  <button class="selectedButton" onclick="openCity(event, 'London')" >Basic Details</button></a> <hr class="new5" >
                </div>
                <a href="<?= \yii\helpers\Url::to(['/operator/addressandlocation']) ?>">   <button id="contactBtn" class="tablinks" onclick="openCity(event, 'Paris')">Address & Location</button></a>
                <a href="<?= \yii\helpers\Url::to(['/operator/legaltax']) ?>"> <button class="tablinks" onclick="openCity(event, 'Tokyo')">Legal Tax</button></a>
                <a href="<?= \yii\helpers\Url::to(['/operator/contact']) ?>"><button class="tablinks" onclick="openCity(event, 'Tokyo')">Contact Details</button></a>
                <a href="<?= \yii\helpers\Url::to(['/operator/termsandconditions']) ?>"><button class="tablinks" onclick="openCity(event, 'Tokyo')">Terms & Conditions</button></a>
            </div>

            <hr class="sidebar-divider">

            <div class="row" style="display: flex; flex-direction: row;">
                <div style="width: 50%">
                    <div style="display: block; margin-right: 35px; margin-left: 10px">
                        <label class="Labelclass" style="display: block;margin-top: 22px" >*Company</label>
                        <input type="text" class="inputLarge" placeholder="Company" >
                    </div>
                    <div style="display: block; margin-right: 35px; margin-left: 10px">
                        <label class="Labelclass" style="display: block;margin-top: 20px" >*Websit</label>
                        <input type="text" class="inputLarge" placeholder="Website" >
                    </div>
                    <div style="display: block;margin-right: 35px; margin-left: 10px; margin-top: 20px">
                        <BUTTON type="text" class="buttonSave" style="width: 85px; border-radius: 5px"> Save </BUTTON>
                    </div>
                </div>
                <div style="width: 50%">
                    <div style="display: block; margin-right: 35px; margin-left: 10px;">
                        <label class="Labelclass" style="display: block;margin-top: 22px" >*Upload Logo</label>
                        <div class="Neon Neon-theme-dragdropbox">
                            <input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; " name="files[]" id="filer_input2" multiple="multiple" type="file">
                            <div class="Neon-input-dragDrop">
                                <div class="Neon-input-inner">
                                    <div class="Neon-input-icon">
                                        <i class="fa fa-file-image"></i>
                                    </div>
                                    <div class="Neon-input-text"><h3>Company Logo</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display: block; margin-right: 35px; margin-left: 10px">
                        <label class="Labelclass" style="display: block;margin-top: 22px" >*Upload Vcard</label>

                        <div class="Neon Neon-theme-dragdropbox" style="display: inline-block">
                            <input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; " name="files[]" id="filer_input2" multiple="multiple" type="file">
                            <div class="Neon-input-dragDrop-small" >
                                <div class="Neon-input-inner">
                                    <div class="Neon-input-icon" style="font-size: 50px">
                                        <i class="fa fa-file-image"></i>
                                    </div>
                                    <div class="Neon-input-text"><h3>Company visiting card front</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Neon Neon-theme-dragdropbox" style="display: inline-block">
                            <input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; " name="files[]" id="filer_input2" multiple="multiple" type="file">
                            <div class="Neon-input-dragDrop-small" >
                                <div class="Neon-input-inner">
                                    <div class="Neon-input-icon" style="font-size: 50px">
                                        <i class="fa fa-file-image"></i>
                                    </div>
                                    <div class="Neon-input-text"><h3>Company visiting card back</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


