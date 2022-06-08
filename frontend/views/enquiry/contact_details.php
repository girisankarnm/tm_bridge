<?php
use yii\bootstrap4\ActiveForm;
use borales\extensions\phoneInput\PhoneInput;
?>

<link rel="stylesheet" type="text/css" href="/css/tour-min-1.css" />


<!-- Begin Page Content -->
<div class="content">
    <div class="container-fluid" style="background-color: #f3f3f3">
        <div class="card-title">
            <span style="font: bold">Enquiry</span>
        </div>

        <div class="tab">
            <a href="<?= \yii\helpers\Url::to(['/enquiry/basicdetails', 'id' => $enquiry->id]) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Basic Details</button></a>
            <div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/enquiry/contactdetails']) ?>">  <button class="selectedButton" onclick="openCity(event, 'London')" >Contact Details</button></a> <hr class="new5" >
            </div>
            <a href="<?= \yii\helpers\Url::to(['/enquiry/guestcount', 'id' => $enquiry->id]) ?>"> <button class="tablinks" onclick="openCity(event, 'Tokyo')">Guest Count</button></a>
            <a href="<?= \yii\helpers\Url::to(['/enquiry/accommodation', 'id' => $enquiry->id]) ?>"><button class="tablinks" onclick="openCity(event, 'Tokyo')">Accommodation</button></a>
        </div>
        <hr class="sidebar-divider">

        <?php $form = ActiveForm::begin(['id' => 'contact_details','enableClientValidation' => true, 'method' => 'post','action' => ['enquiry/savecontactdetails']]) ?>
        <input type="hidden" id="enquiry_id" name="enquiry_id" value=<?php echo  $enquiry->id; ?> ?>
        <div class="row" style="margin-left: 3px;margin-bottom: 8px;">
            <div style="display: block;margin-right: 35px">
                <label class="Labelclass" style="display: block;margin-top: 20px" >*Email 1</label>
                <?php echo $form->field($enquiry, 'email1')->textInput(['class' => 'inputTextClass'])->label(false); ?>
            </div>
            <div style="display: block">
                <label class="Labelclass" style="display: block;margin-top: 20px" >*Email 2</label>                
                <?php echo $form->field($enquiry, 'email2')->textInput(['class' => 'inputTextClass'])->label(false); ?>
            </div>
        </div>

        <div class="row" style="margin-left: 3px;margin-bottom: 15px">
            <div style="display: block;margin-right: 35px">
                <label class="Labelclass" style="display: block;margin-top: 20px" >*Contact Number 1</label>                
                <?php
                    echo $form->field($enquiry, 'contact1')->widget(PhoneInput::className(), [                   
                    'jsOptions' => [
                        'onlyCountries' => ['in'],                      
                    ],
                    'options'=> array('class'=>'inputTextClass', 'placeholder' => '9123456780', 'maxlength' => '12'),
                ], )->label(false);?> 
            </div>
            <div style="display: block">
                <label class="Labelclass" style="display: block;margin-top: 20px" >*Contact Number 2</label>
                <?php
                    echo $form->field($enquiry, 'contact2')->widget(PhoneInput::className(), [                   
                    'jsOptions' => [
                        'onlyCountries' => ['in'],                      
                    ],
                    'options'=> array('class'=>'inputTextClass', 'placeholder' => '9123456780', 'maxlength' => '12'),
                ], )->label(false);?>
            </div>
        </div>
        <div class="row" style="margin-left: 3px;margin-bottom: 12px;">
            <div style="display: block;margin-right: 35px">
                <BUTTON type="text" class="buttonSave"> Save </BUTTON>
            </div>
        </div>
        <!-- /.container-fluid -->
        <?php ActiveForm::end(); ?>
    </div>
</div>