
<?php
$i = 1;
if(count($range->roomTariffDatewises) > 0) { 
?>

<?php
    echo Yii::$app->controller->renderPartial('_date_range_block', [
        'range' => $range,
        'property' => $property,        
    ]);
    ?>
<?php }
else
{
    echo Yii::$app->controller->renderPartial('_date_range_block', [
        'range' => $range,
        'property' => $property,        
    ]);
}
?>