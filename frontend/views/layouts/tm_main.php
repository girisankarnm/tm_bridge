<?php

/** @var \yii\web\View $this */
/** @var string $content */

use frontend\assets\FormAsset;
//AppAsset::register($this);
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/tm_bridge.css">
    
    <!-- PLEASE FOLLOW CODING STANDARDS https://docs.ckan.org/en/2.9/contributing/html.html -->
</head>

<body>
    <?php $this->beginBody() ?>
    <div class="main-contr">
        <!-- Navigation Menu -->
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/images/logo.svg" alt="" class="img-fluid" alt="logo.svg">
                </a>
                <div class="btn-hamburger">
                    <img src="/images/hamburger.svg" alt="hamburger.svg">
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0 align-items-center">

                        <!-- Notifications Dropdown Menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link notification-link" data-toggle="dropdown" href="#">
                                <div class="notification-cite">
                                    <img src="images/bell-icon.svg" alt="bell-icon.svg">
                                    <span class="badge badge-warning navbar-badge"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right border-0">
                                <span class="dropdown-header">Notifications</span>
                            </div>
                        </li>
                
                        <!-- Messages Dropdown Menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link message-link" data-toggle="dropdown" href="#">
                            <div class="message-cite">
                                <img src="/images/chat-icon.svg" alt="chat-icon.svg">
                                <span class="badge badge-danger navbar-badge"></span>
                            </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right border-0">
                                <span class="dropdown-header"> Messages </span>
                            </div>
                        </li>
                
                        <!-- Account Dropdown Menu -->
                        <li class="nav-item profile-dropdown dropdown">
                            <a class="nav-link profile-link" data-toggle="dropdown" href="#">
                                <div class="d-flex profile-nav align-items-center">
                                    <div class="profile-cite">
                                        <img src="/images/user.png" alt="User Avatar" class="img-circle">
                                    </div>
                                    <div class="profile-content">
                                        <div class="d-flex align-items-center">
                                            <h6 class="name"> John Doe </h6>
                                            <div class="dropdown-collapse">
                                                <i class="fas fa-angle-down"></i>
                                            </div>
                                            <div class="dropdown-collapsed">
                                                <i class="fas fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <p class="designation"> Admin </p>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-2 border-0">
                                <a class="nav-link" href="#">
                                    <small> Logout </small>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row content-contr">
            <!-- Sidebar Menu -->
            <div class="col-2 sidebar-contr">
                <a class="sidebar-item" href="#">
                    <img src="/images/properties.svg" alt="properties.svg">
                    <p class="mb-0"> Properties </p>
                </a>

                <a class="sidebar-item active" href="#">
                    <img src="/images/user.svg" alt="user.svg">
                    <p class="mb-0"> Users </p>
                </a>

                <a class="sidebar-item" href="#">
                    <img src="/images/properties.svg" alt="properties.svg">
                    <p class="mb-0"> Properties </p>
                </a>

                <a class="sidebar-item" href="#">
                    <img src="/images/properties.svg" alt="properties.svg">
                    <p class="mb-0"> Properties </p>
                </a>
            </div>
            <div class="col-10 data-content">
                <?= $content ?>
            </div>
        </div>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>