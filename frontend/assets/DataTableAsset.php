<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class DataTableAsset extends AssetBundle
{
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $basePath = '@webroot';
 
    public $css = [
       'https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css'
    ];
    public $js = [
        'https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js'
    ];
    public $depends = [
    ];
}
