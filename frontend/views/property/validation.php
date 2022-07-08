<?php
use yii\helpers\Html;
?>

<div class="d_dark shadow p-2 ml-2">   
    <div class="p-2">
        <h6 class="mt-2"> Property Validation Result - <?= $property->name ?> </h6>        
        <h6 class="mt-2"> Complete property profile to continue further </h6> 
        <?php
            echo Yii::$app->controller->renderPartial('_validation_result_block', ['result' => $basic_details, 'name' => 'Basic details']);
        ?>

        <?php
            echo Yii::$app->controller->renderPartial('_validation_result_block', [ 'result' => $address_location,  'name' => 'Address and location']);
        ?>

        <?php
            echo Yii::$app->controller->renderPartial('_validation_result_block', ['result' => $legal_tax_documentation,  'name' => 'Legal and Tax data']);
        ?>

        <?php
            echo Yii::$app->controller->renderPartial('_validation_result_terms', ['result' => $terms,  'name' => 'Terms and Conditions']);
        ?>

    </div>
</div>