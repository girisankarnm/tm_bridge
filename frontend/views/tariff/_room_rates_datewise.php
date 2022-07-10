<?php 
use Carbon\Carbon;
use frontend\models\tariff\TariffDateRange;
?>

<?php
    $is_published = $range->status;
    echo Yii::$app->controller->renderPartial('_date_range_block', [
        'range' => $range,
        'property' => $property,
        'tariff' => 1,
        'current_loop' => $current_loop,
        'is_published' => $is_published
    ]);
    

    if($range->getNestingCount() > 0 ) {
        $child_ranges = TariffDateRange::find()
        ->orderBy(['from_date' => SORT_DESC])
        ->where(['property_id' => $property->id])
        ->andWhere(['parent' => $range->id])
        ->andWhere(['tariff_type' => 1])
        ->all();

        foreach ($child_ranges as $child_range) {
            echo Yii::$app->controller->renderPartial('_date_range_block', [
                'range' => $child_range,
                'property' => $property,
                'tariff' => 1,
                'current_loop' => $current_loop,
                'is_published' => $is_published
            ]);        
        }
    }

?>