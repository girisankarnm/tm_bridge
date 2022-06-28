<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ToastrAsset extends AssetBundle
{
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $basePath = '@webroot';
 
    public $css = [
       'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css'
    ];
    public $js = [
        'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'
    ];
    public $depends = [
    ];
}
