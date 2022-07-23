<?php
use yii\bootstrap4\ActiveForm;
$this->registerCssFile('/css/full-page.css');
?>

<div style="display: flex; justify-content: center; margin-bottom: 20px; margin-top: 20px">
    <img src="/images/tm_bridge_logo.svg" class="logo-small">
</div>

<div class="card" style=" background-color: white; border-radius: 10px">
    <?php $form = ActiveForm::begin(['id' => 'operational_form','enableClientValidation' => true, 'method' => 'post','action' => ['clientrequestedoption/saveclientrequestedoption', 'option'=> $option]]) ?>
    <div class="" style="padding: 25px;">
        <?= $form->field($add, 'key')->hiddenInput()->label(false); ?>
        <div class="col-md-12" style="font-size: 16px; font-weight: bold; color: grey; margin-bottom: 20px; text-align: center">
           Request to add new property type
        </div>
        <div class="form-group text-center">
            <?php echo $form->field($add,'value')->textInput(['class' => 'login-input', 'placeholder'=>'Enter your option', 'autofocus' => true])->label(false) ?>
        </div>


        <div style="float: right; margin-bottom: 20px">
            <button id="save_suggestion" type="submit" class="login-button" style="font-weight: bold">Save</button>
            <button id="save_suggestion" type="button" onclick="window.close()" class="login-button" style="font-weight: bold">Close</button>
        </div>
        <div style="text-align: center;">
            <?php
            if ($message == 'success') {
                echo '<span style="color:#E67A21;text-align:center;">Request saved successfully</span>';
            }
            elseif ($message == 'failed'){
                echo '<span style="color:red;text-align:center;">Request not saved!</span>';
            }
            ?>
        </div>

    </div>
    <?php ActiveForm::end(); ?>
</div>





