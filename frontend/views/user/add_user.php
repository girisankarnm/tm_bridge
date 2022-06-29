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
<div class="$content">
    <div class="container-fluid" style="background-color: white">
        <div class="card-title">
            Add New User
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px;">

            <?php $form = ActiveForm::begin(['method' => 'post'] ) ?>
            <?= $form->field($user, 'user_id')->hiddenInput()->label(false); ?>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group ">
                        <label class="Labelclass" style="display: block">First Name</label>
                        <?= $form->field($user, 'first_name')->textInput(['class' => 'inputLarge'])->label(false)?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group ">
                        <label class="Labelclass" style="display: block">Last Name</label>
                        <?= $form->field($user, 'last_name')->textInput(['class' => 'inputLarge'])->label(false)?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group ">
                        <label class="Labelclass" style="display: block">Email</label>
                        <?= $form->field($user, 'email')->textInput(['class' => 'inputLarge','value'=>null])->label(false)?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group ">
                        <label class="Labelclass" style="display: block">Mobile</label>
                        <?php
                    echo $form->field($user, 'phone')->widget(PhoneInput::className(), [
                        'jsOptions' => [
                            'onlyCountries' => ['in'],
                        ],
                        'options'=> array('class'=>'inputTextClass', 'placeholder' => '9123456780', 'maxlength' => '12'),
                    ], )->label(false);?>
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group ">
                        <label class="Labelclass" style="display: block">Role</label>
                        <?php echo $form->field($user,'user_role')->dropDownList($roles, ['class' => 'inputLarge', 'prompt' => 'Choose'])->label(false) ?>
                    </div>
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
        </div>
    </div>
</div>







