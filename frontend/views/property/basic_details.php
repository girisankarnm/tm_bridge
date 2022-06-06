
<div class="$content">
    <div class="container-fluid" style="background-color: white">
        <div class="card-title">
            Property
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px;">
            <div class="tab" style="display: flex;flex-direction: row;">
                <div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/property/basicdetails']) ?>">  <button class="selectedButton" onclick="openCity(event, 'London')" >Basic Details</button></a> <hr class="new5" >
                </div>
                <a href="<?= \yii\helpers\Url::to(['/property/addressandlocation']) ?>">   <button id="contactBtn" class="tablinks" onclick="openCity(event, 'Paris')">Address & Location</button></a>
                <a href="<?= \yii\helpers\Url::to(['/property/legaltax']) ?>"> <button class="tablinks" onclick="openCity(event, 'Tokyo')">Legal Tax</button></a>
                <a href="<?= \yii\helpers\Url::to(['/property/contact']) ?>"><button class="tablinks" onclick="openCity(event, 'Tokyo')">Contact Details</button></a>
                <a href="<?= \yii\helpers\Url::to(['/property/termsandconditions']) ?>"><button class="tablinks" onclick="openCity(event, 'Tokyo')">Terms & Conditions</button></a>
            </div>

            <hr class="sidebar-divider">

            <div class="row" style="display: flex; flex-direction: row;">
                <div style="width: 50%; padding-left: 10px; padding-right: 10px">
                    <div class="row" style="margin-left: 3px;margin-bottom: 8px;">
                        <div style="display: block;margin-right: 35px">
                            <label class="Labelclass" style="display: block;margin-top: 22px" >*Property Name</label>
                            <input type="text" class="inputLarge" placeholder="Property Name" >
                        </div>
                    </div>
                    <div class="row" style="margin-left: 3px;margin-bottom: 8px;">
                        <div style="display: block;margin-right: 35px">
                            <label class="Labelclass" style="display: block;margin-top: 20px" >*Property Type</label>
                            <select class="inputTextClass" style="width: 205px">
                                <option value="">Choose</option>
                                <option value="">Delhi</option>
                                <option value="">Mumbai</option>
                                <option value="">Kerala</option>
                            </select>
                        </div>
                        <div style="display: block;margin-right: 35px">
                            <label class="Labelclass" style="display: block;margin-top: 20px" >*Property Rating</label>
                            <select class="inputTextClass" style="width: 205px">
                                <option value="">Choose</option>
                                <option value="">Alappuzha</option>
                                <option value="">Idukki</option>
                                <option value="">Vagamon</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 3px;margin-bottom: 8px;">
                        <div style="display: block;margin-right: 35px">
                            <label class="Labelclass" style="display: block;margin-top: 22px" >*Property Name</label>
                            <input type="text" class="inputLarge" placeholder="Property Name" >
                        </div>
                    </div>
                    <div style="display: block;margin-right: 35px; margin-left: 10px; margin-top: 20px">
                        <BUTTON type="text" class="buttonSave" style="width: 85px; border-radius: 5px"> Save </BUTTON>
                    </div>
                </div>
                <div style="width: 50%; padding-right: 10px; padding-left: 10px">
                    <div style="display: inline-block; margin-right: 10px">
                        <label class="Labelclass" style="display: block;margin-top: 22px" >*Property Photo</label>
                        <div class="Neon Neon-theme-dragdropbox" style="display: inline-block">
                            <input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; " name="files[]" id="filer_input2" multiple="multiple" type="file">
                            <div class="Neon-input-dragDrop-property-photo" >
                                <div class="Neon-input-inner">
                                    <div class="Neon-input-icon" style="font-size: 100px">
                                        <i class="fa fa-file-image"></i>
                                    </div>
                                    <div class="Neon-input-text"><h3>Company visiting card front</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display: inline-block">
                        <label class="Labelclass" style="display: block;margin-top: 22px" >*Property Logo</label>
                        <div class="Neon Neon-theme-dragdropbox" style="display: inline-block">
                            <input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; " name="files[]" id="filer_input2" multiple="multiple" type="file">
                            <div class="Neon-input-dragDrop-property-logo" >
                                <div class="Neon-input-inner">
                                    <div class="Neon-input-icon" style="font-size: 100px">
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


