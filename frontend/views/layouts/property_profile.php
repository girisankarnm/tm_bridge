<?php

/** @var \yii\web\View $this */
/** @var string $content */

use frontend\assets\AppAsset;
use frontend\assets\FormAsset;
AppAsset::register($this);
FormAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="title" content="">
    <meta name="description" content="">
    <meta name="author" content="Jinsan T J">
    <meta name="robots" content="noindex, nofollow">

    <meta name="google" content="notranslate" />

    <!-- Open Graph Meta -->
    <meta property="og:title" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <!-- Icons -->
    <link rel="shortcut icon" href="">
    <link rel="icon" sizes="192x192" type="image/png" href="">
    <link rel="apple-touch-icon" sizes="180x180" href="">

    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title> Tour matrix </title>

    <?php $this->head() ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/tm_bridge.css">
    <link rel="stylesheet" href="/css/layout.css">
    <!--    <link rel="stylesheet" href="/css/form.css">-->
    <link rel="stylesheet" href="/css/buttons.css">
    <link rel="stylesheet" href="/css/table-css.css">

    <!-- PLEASE FOLLOW CODING STANDARDS https://docs.ckan.org/en/2.9/contributing/html.html -->
</head>

<body>
    <?php $this->beginBody() ?>
    <div class="main-contr">
        <div class=" content-contr">
            <!-- Sidebar Menu -->
            <div class="data-content">
                <?= $content ?>
            </div>
        </div>
    </div>

    <?php $this->endBody() ?>

    <!-- Vendor JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
        integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom JS -->

    <script>
    $(document).ready(function() {
        $(".alertMessage").delay(3000).slideUp(300);
    });

    $('.btn-hamburger').on('click', function() {
        $('.sidebar-contr').width() < 1 ? $('.sidebar-contr').css({
            'width': '260px'
        }) : $('.sidebar-contr').css({
            'width': '0'
        });
    });
    $('.select2').select2({
        minimumResultsForSearch: -1,
        dropdownAutoWidth: true,
    });

    function disableSiteOnSmallerScreen() {
        window.innerWidth < 992 ? $('.main-contr').hide() : $('.main-contr').show();
    }

    $(window).resize(() => disableSiteOnSmallerScreen());

    $('.sub-menu ul').hide();
    $(".sub-menu a").click(function() {
        $(this).toggleClass("active");
        $(this).parent(".sub-menu").children("ul").slideToggle("100");
        $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
    });
    </script>

    <style>
    </style>

</body>

</html>
<?php $this->endPage() ?>