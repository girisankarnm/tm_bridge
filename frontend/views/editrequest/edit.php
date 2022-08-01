<?php
use yii\bootstrap4\ActiveForm;
$this->registerCssFile('/css/full-page.css');
?>

<div style="display: flex; justify-content: center; margin-bottom: 20px; margin-top: 20px">
    <img src="/images/tm_bridge_logo.svg" class="logo-small">
</div>

<div class="card" style=" background-color: white; border-radius: 10px">
    <?php $form = ActiveForm::begin(['id' => 'operational_form','enableClientValidation' => true, 'method' => 'post', 'action' => ['editrequest/saverequest', 'option' => $option, 'property_id' => $property->id]]) ?>
    <div class="" style="padding-left: 25px; padding-right: 25px">
        <?= $form->field($add, 'key')->hiddenInput()->label(false); ?>
        <div class="col-md-12" style="font-size: 16px; font-weight: bold; color: grey; margin-bottom: 10px; text-align: center">
            Request to edit <?php echo $option?>
        </div>

        <div class="row" style="margin-bottom: 10px">
            <div class="col" style="text-align: left"><?php echo $property->name?></div>
            <div class="col" style="text-align: right"><?php echo date('Y-M-d')?></div>
        </div>
        <?php if ($status == 0){?>
        <div class="form-group">
            <label style="display: block; font-size: 16px; font-weight: bold; color: grey;">Edit | Replace by</label>
            <?php echo $form->field($add,'value')->textInput(['class' => 'login-input', 'placeholder'=>'Enter name', 'autofocus' => true])->label(false) ?>
        </div>
        <div class="form-group">
            <label style="display: block; font-size: 16px; font-weight: bold; color: grey;">Description</label>
            <?php echo $form->field($add,'description')->textarea(['rows' => '2', 'class' =>'inputTextArea-large','placeholder' => 'Please enter the reason why edit is required'])->label(false) ?>
        </div>
        <?php }?>

            <?php if ($status == 1){?>
                <div style="text-align: center; margin-top: 60px; margin-bottom: 60px">
                    <?php echo '<span style="color:#E67A21;text-align:center;"><h6>Request saved successfully. Our team will process your request and get back</h6></span>' ?>
                </div>
            <?php }?>
            <?php if ($status == 2){?>
                <div style="text-align: center; margin-top: 60px; margin-bottom: 60px">
                <?php echo '<span style="color:red;text-align:center;">Request not saved!</span>'?>
        </div>
            <?php }?>

        <div style="float: right; margin-bottom: 20px">
            <?php if ($status != 1 && $status != 2){?>
                <button id="save_suggestion" type="submit" class="login-button" style="font-weight: bold">Submit</button>
            <?php }?>
            <button id="save_suggestion" type="button" onclick="window.close()" class="login-button" style="font-weight: bold">Close</button>
        </div>
<!--        <div style="text-align: center;">-->
<!--            --><?php
//            if ($message == 'success') {
//                echo '<span style="color:#E67A21;text-align:center;">Request saved successfully</span>';
//            }
//            elseif ($message == 'failed'){
//                echo '<span style="color:red;text-align:center;">Request not saved!</span>';
//            }
//            ?>
<!--        </div>-->

    </div>
    <?php ActiveForm::end(); ?>
</div>





