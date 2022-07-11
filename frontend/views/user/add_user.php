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
<style>
    .invalid-feedback{
        display: block;
    }
</style>
<div class="$content">
    <div class="container-fluid" style="background-color: white">
        <div class="card-title">
            <?php if ($user->user_id) :?>
            Edit User
            <?php else : ?>
            Add New User
            <?php endif ; ?>
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px;">

            <?php $form = ActiveForm::begin(['method' => 'post'] ) ?>
            <?= $form->field($user, 'user_id')->hiddenInput()->label(false); ?>


            <div class="form-row">
                <div class="form-group col-md-5">
                    <label class="Labelclass" style="display: block">First Name</label>
                    <?= $form->field($user, 'first_name')->textInput(['class' => 'inputLarge form-control','placeholder' => 'First Name'])->label(false)?>
                </div>

                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block">Last Name</label>
                    <?= $form->field($user, 'last_name')->textInput(['class' => 'inputLarge form-control','placeholder' => 'Last Name'])->label(false)?>
                </div>
                <div class="form-group col-md-3">
                    <label class="Labelclass" style="display: block">Mobile</label>
                    <?php
                    echo $form->field($user, 'phone')->widget(PhoneInput::className(), [
                        'jsOptions' => [
                            'onlyCountries' => ['in'],
                        ],
                        'options'=> array('class'=>'inputTextClass ', 'placeholder' => 'Mobile Number', 'maxlength' => '12'),
                    ] )->label(false);?>
                   </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block">Email</label>
                    <?= $form->field($user, 'email')->textInput(['class' => 'inputLarge form-control','placeholder' => 'Email','value'=>null])->label(false)?>
                </div>

                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block">Role</label>
                    <?php echo $form->field($user,'user_role')->dropDownList($roles, ['class' => 'inputLarge form-control', 'prompt' => 'Choose'])->label(false) ?>
                </div>
                <?php if ($user-> user_type == 1) {
                ?>
                <div class="form-group col-md-4">
                    <label class="Labelclass" style="display: block">Assign property</label>
                    <?= Html::dropDownList('assigned_properties', $assigned_properties, $properties,  [
                        'multiple'=>'multiple',
                        'id' => 'assigned_properties',
                        'class' => 'inputLarge form-control'
//                            'class' => 'select2 '
                    ])
                    ?>                </div>
                <?php } ?>
            </div>
            <button type="submit" class="btn btn-primary btn-save">Save</button>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>







