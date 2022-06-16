
<?php
$i = 1;
if(count($range->roomTariffDatewises) > 0) { 
    //$rc = new RoomRateValidator($range);
    //$bValidated = $rc->validate(); ?>

<?php
    echo Yii::$app->controller->renderPartial('_date_range_block', [
        'range' => $range,
        'property' => $property
    ]);
    ?>
<?php }
else
{?>
Not defined room rate for mother date range

<?php   }     ?>