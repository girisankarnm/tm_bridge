<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
frontend\assets\CommonAsset::register($this);
use borales\extensions\phoneInput\PhoneInput;
?>
<script>
    $(document).ready(function () {        
    $('#assigned_properties').select2({
    placeholder: "Select properties",
});
});


</script>
    <?php $form = ActiveForm::begin(['method' => 'post'] ) ?>
    <?= $form->field($user, 'user_id')->hiddenInput()->label(false); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($user, 'first_name')->textInput(['class' => 'form-control form-control-sm'])->label('First Name')?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($user, 'last_name')->textInput(['class' => 'form-control form-control-sm'])->label('Last Name')?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($user, 'email')->textInput(['class' => 'form-control form-control-sm','value'=>null])->label('Email')?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        Mobile
        <?php
            echo $form->field($user, 'phone')->widget(PhoneInput::className(), [                   
            'jsOptions' => [
                'onlyCountries' => ['in'],                      
            ],
            'options'=> array('class'=>'form-control form-control-sm', 'placeholder' => '9123456780', 'maxlength' => '12'),
        ], )->label(false);?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <?php echo $form->field($user,'user_role')->dropDownList($roles, ['class' => 'form-control form-control-sm shadow', 'prompt' => 'Choose'])->label('Role') ?>
        </div>
    </div>

    <?php if ($user-> user_type == 1) {
        ?>
        <div class="row">
            <div class="col-md-6">
            Assign property
            <?= Html::dropDownList('assigned_properties', $assigned_properties, $properties,  [
            'multiple'=>'multiple',
            'id' => 'assigned_properties',
            'class' => 'form-control form-control-sm shadow'
            ])
            ?>
            </div>
        </div>
    <?php } ?>
    
    <div class="text-center">
        <?= Html::a('<button type="submit" class="btn btn-sm btn-save">Add user</button>')?>
    </div>
    <!--        < ?= Html::hiddenInput('value',1)?>-->
<?php ActiveForm::end(); ?>


