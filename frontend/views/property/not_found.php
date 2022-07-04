<?php
use yii\helpers\Html;
?>

<div class="d_dark shadow p-2 ml-2">   
    <div class="p-2">
        <h6 class="mt-2 "> Property not found </h6>
        <div class="row mt-1 ml-1 border border-2">            
            <div class="col-md-6">
                <p>
                    You don't have access to this property or property not found.<br/>
                    <?= Html::a('Go back', ['property/basicdetails',],  []) ?>
                </p>
            </div>
        </div>
    </div>
</div>