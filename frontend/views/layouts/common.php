<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-wrap align-content-center  justify-content-center h-100" style="max-width: 100%; overflow-x: hidden; overflow-y: hidden; background-image: url(/images/tm_welcome.png); background-size: cover; background-position: center; background-repeat: no-repeat; margin: 0">
    <?php $this->beginBody() ?>
    <div class="col-12 col-md-8 col-lg-5 col-xl-4" style="width: 40%;">
        <?= $content ?>
    </div>


    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
