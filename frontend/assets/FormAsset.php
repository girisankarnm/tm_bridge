<?php
<<<<<<< HEAD
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
=======
>>>>>>> 06134d69d6ee066dbb1f2b7b27456df49032a345

namespace frontend\assets;

use yii\web\AssetBundle;

/**
<<<<<<< HEAD
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
=======
 * Main frontend application asset bundle.
>>>>>>> 06134d69d6ee066dbb1f2b7b27456df49032a345
 */
class FormAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
<<<<<<< HEAD
    public $css = [
//        'css/site.css',
//        'css/all.css',
//        'css/all.min.css',
//        'css/fonts.css',
        'css/tour-min-1.css',
//        'css/sb-admin-2.css',
//        'css/sb-admin-2.min.css',


    ];
    public $js = [
        'js/bootstrap.bundle.min.js',
        'js/jquery.min.js',
=======

    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];

    public $css = [
        'css/tour-min-1.css',

    ];
    public $js = [
>>>>>>> 06134d69d6ee066dbb1f2b7b27456df49032a345
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
<<<<<<< HEAD
//        'rmrevin\yii\fontawesome\AssetBundle',
=======
>>>>>>> 06134d69d6ee066dbb1f2b7b27456df49032a345
    ];
}
