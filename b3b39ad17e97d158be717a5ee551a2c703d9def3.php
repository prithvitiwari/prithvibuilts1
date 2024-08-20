<html lang="en" dir="ltr" style="--primary01:rgba(108, 95, 252, 0.1); --primary02:rgba(108, 95, 252, 0.2); --primary03:rgba(108, 95, 252, 0.3); --primary06:rgba(108, 95, 252, 0.6); --primary09:rgba(108, 95, 252, 0.9);">
<?php
$setting = App\Models\Setting::first();
$aboutus_pages = App\Models\Page::where('page_under',1)->get();
$legal_pages = App\Models\Page::where('page_under',2)->get();
?>

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
    <meta name="author" content="Pankaj Choudhary">
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>"> <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(url('storage/favicon',$setting->favicon)); ?>"> <!-- TITLE -->
    <meta name="_token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($setting->site_name); ?> - <?php echo $__env->yieldContent('title'); ?></title> <!-- BOOTSTRAP CSS -->
    <link id="style" href="<?php echo e(url('assets/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet"> <!-- STYLE CSS -->
    <link href="<?php echo e(url('assets/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/css/dark-style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/css/transparent-style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/css/skin-modes.css')); ?>" rel="stylesheet">
    <!-- P-scroll bar css-->
    <link href="<?php echo e(url('assets/plugins/p-scroll/perfect-scrollbar.css')); ?>" rel="stylesheet">
    <!--- FONT-ICONS CSS -->
    <link href="<?php echo e(url('assets/plugins/sweet-alert/sweetalert.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('assets/plugins/SmartPhoto-master/smartphoto.min.css')); ?>" rel="stylesheet">
    <!--- FONT-ICONS CSS -->
    <link href="<?php echo e(url('assets/css/icons.css')); ?>" rel="stylesheet"> <!-- INTERNAL Jvectormap css -->
    <link href="<?php echo e(url('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')); ?>" rel="stylesheet"> <!-- SIDEBAR CSS -->
    <link href="<?php echo e(url('assets/plugins/sidebar/sidebar.css')); ?>" rel="stylesheet"> <!-- SELECT2 CSS -->
    <link href="<?php echo e(url('assets/plugins/select2/select2.min.css')); ?>" rel="stylesheet">
    <!-- INTERNAL Data table css -->
    <link href="<?php echo e(url('assets/plugins/datatable/css/dataTables.bootstrap5.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/plugins/owl-carousel/owl.carousel.css')); ?>" rel="stylesheet" />

    <link href="<?php echo e(url('assets/plugins/datatable/responsive.bootstrap5.css')); ?>" rel="stylesheet"> <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo e(url('assets/colors/color1.css')); ?>"> <!-- INTERNAL Switcher css -->

    <link href="<?php echo e(url('https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css')); ?>" rel="stylesheet">

    <meta http-equiv="imagetoolbar" content="no">
    <?php echo NoCaptcha::renderJs(); ?>

    <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
    <style type="text/css">
        img.avatar {
            object-fit: cover;
        }
    </style>
    <style>
        .ps__rail-x {
            display: none !important;
        }

        .ps__rail-y {
            display: none !important;
        }

        .owl-carousel-icons2 .owl-nav {
            display: none;
        }
    </style>
    <style>
        .slide-item {
            font-size: 16px;
            font-weight: bold;
        }

        .brick img {
            border-radius: 5px;
            height: 100%;
            object-fit: cover;
        }

        footer {
            background: #fff !important;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid #e9edf4;
        }

        .horizontal .fixed-header {
            position: fixed !important;
            z-index: 999;
        }

        .oneline-ellipsis {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .mobile-login {
            display: none !important;
        }

        .one-line-ellipsis {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }

        .two-line-ellipsis {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .three-line-ellipsis {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        @media(max-width: 767px) {
            .responsive-navbar .dropdown {
                position: absolute;
                right: 5px;
                top: -63px;
            }

            .responsive-navbar .collapse.show .dropdown-menu.show {
                left: -378% !important;
                right: 15% !important;
            }

            .mobile-login {
                display: block !important;
            }
        }

        @media (min-width: 992px) {
            .product-height {
                height: 300px !important;
                object-fit: cover;
            }
        }

        .social-counter {
            margin-top: 50px;
            position: relative;
        }

        .social-counter .caption {
            /* position: absolute; */
            /* right: 15%; */
            /* top: 15%; */
            /* left: 15%; */
            z-index: 10;
            padding-top: 50px;
            padding-bottom: 50px;
            color: #fff;
            text-align: center;
        }

        .social-counter .item-background {

            background: rgba(108, 95, 252, 0.7);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .social-counter img {
            width: 100%;
            position: relative;
        }

        .social-counter .item {
            position: relative;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            margin: 0 auto;
            text-align: center;
        }
    </style>
    <style>
        .lSAction>a {
            background-color: #000;
            border-radius: 20px;
            padding-left: 1px;
        }
    </style>
    <?php echo $__env->yieldContent('style'); ?>
</head>

<!-- <body class="app sidebar-mini ltr light-mode"> -->

<body class="app ltr horizontal horizontal-hover">
    <!-- app ltr horizontal horizontal-hover -->
    <div class="horizontalMenucontainer">
        <!-- GLOBAL-LOADER -->
        <div id="global-loader"> <img src="<?php echo e(url('assets/images/loader.svg')); ?>" class="loader-img" alt="Loader"> </div>
        <!-- /GLOBAL-LOADER -->
        <!-- PAGE -->
        <div class="page">
            <div class="page-main">
                <!-- app-Header -->
                <!-- <div class="app-header header sticky" style="margin-bottom: -74px;"> -->
                <div class="hor-header header sticky fixed-header">
                    <!-- <div class="container-fluid main-container"> -->
                    <div class="container main-container">
                        <div class="d-flex"> <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="#"></a> <!-- sidebar-toggle-->
                            <a class="logo-horizontal" href="<?php echo e(route('home')); ?>" style="margin: -10px 0; max-height: 70px;">
                                <img src="<?php echo e(url('storage/logo',$setting->logo)); ?>" style="max-height: 70px;" class="header-brand-img desktop-logo" alt="logo">
                                <img src="<?php echo e(url('storage/logo',$setting->logo)); ?>" style="max-height: 70px;"  class="header-brand-img light-logo1" alt="logo">
                            </a> <!-- LOGO -->
                            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                                <div class="dropdown d-lg-none d-md-block d-none"> <a href="#" class="nav-link icon" data-bs-toggle="dropdown"> <i class="fe fe-search"></i> </a>
                                    <div class="dropdown-menu header-search dropdown-menu-start">
                                        <div class="input-group w-100 p-2"> <input type="text" class="form-control" placeholder="Search....">
                                            <div class="input-group-text btn btn-primary"> <i class="fe fe-search" aria-hidden="true"></i> </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="navbar-toggler navresponsive-toggler d-md-none ms-auto collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="true" aria-label="Toggle navigation"> <span class="navbar-toggler-icon fe fe-more-vertical"></span> </button>
                                <div class="navbar navbar-collapse responsive-navbar p-0">
                                    <div class="collapse navbar-collapse show" id="navbarSupportedContent-4">
                                        <div class="d-flex order-lg-2">

                                            <div class="app-sidebar ps ps--active-y horizontal-main" style="padding-right: 50px; box-shadow: none; border-right: 0;">

                                                <div class="main-sidemenu is-expanded container" style="overflow: visible !important;">
                                                    <ul class="side-menu " style="overflow: visible !important;">

                                                        <li class="slide is-expanded">
                                                            <a class="side-menu__item <?php echo e(Request::routeIs('home') ? 'active': ''); ?>" data-bs-toggle="slide" href="<?php echo e(route('home')); ?>#home">
                                                                <!-- <i class="side-menu__icon fe fe-home"></i> -->
                                                                <span class="side-menu__label">Home</span>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                                                <!-- <i class="side-menu__icon fe fe-cpu"></i> -->
                                                                <span class="side-menu__label">About Us</span>
                                                                <i class="angle fe fe-chevron-right"></i>
                                                            </a>
                                                            <ul class="slide-menu">
                                                                <li class="side-menu-label1"><a href="javascript:void(0)">About Us</a></li>
                                                                <li><a href="<?php echo e(url('/about-us')); ?>" class="slide-item">About Us</a></li>
                                                                <?php $__currentLoopData = $aboutus_pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about_page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li><a href="<?php echo e(route('page',$about_page->slug)); ?>" class="slide-item"><?php echo e($about_page->name); ?></a></li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </ul>
                                                        </li>
                                                        <li class="slide">
                                                            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                                                <!-- <i class="side-menu__icon fe fe-cpu"></i> -->
                                                                <span class="side-menu__label">Legal Notices</span>
                                                                <i class="angle fe fe-chevron-right"></i>
                                                            </a>
                                                            <ul class="slide-menu">
                                                                <!-- <li class="side-menu-label1"><a href="javascript:void(0)">About Us</a></li> -->
                                                                <?php $__currentLoopData = $legal_pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $legal_page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li><a href="<?php echo e(route('page',$legal_page->slug)); ?>" class="slide-item"><?php echo e($legal_page->name); ?></a></li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </ul>
                                                        </li>
                                                        <li> <a class="side-menu__item <?php echo e(Request::routeIs('reward') ? 'active': ''); ?>" href="<?php echo e(route('reward')); ?>">
                                                                <!-- <i class="side-menu__icon fe fe-settings"></i> -->
                                                                <span class="side-menu__label">Reward</span>
                                                            </a> </li>
                                                        <li> <a class="side-menu__item <?php echo e(Request::routeIs('kit') ? 'active': ''); ?>" href="<?php echo e(route('kit')); ?>">
                                                                <!-- <i class="side-menu__icon fe fe-settings"></i> -->
                                                                <span class="side-menu__label">Package</span>
                                                            </a> </li>
                                                        <li> <a class="side-menu__item <?php echo e(Request::routeIs('blog') ? 'active': ''); ?>" href="<?php echo e(route('blog')); ?>">
                                                                <!-- <i class="side-menu__icon fe fe-settings"></i> -->
                                                                <span class="side-menu__label">Blog</span>
                                                            </a> </li>
                                                        <li> <a class="side-menu__item <?php echo e(Request::routeIs('gallery') ? 'active': ''); ?>" href="<?php echo e(route('gallery')); ?>">
                                                                <!-- <i class="side-menu__icon fe fe-settings"></i> -->
                                                                <span class="side-menu__label">Gallery</span>
                                                            </a> </li>
                                                        <li> <a class="side-menu__item <?php echo e(Request::routeIs('faqs') ? 'active': ''); ?>" href="<?php echo e(route('faqs')); ?>">
                                                                <!-- <i class="side-menu__icon fe fe-settings"></i> -->
                                                                <span class="side-menu__label">Faqs</span>
                                                            </a> </li>
                                                        <li> <a class="side-menu__item" href="<?php echo e(route('contact')); ?>">
                                                                <!-- <i class="side-menu__icon fe fe-settings"></i> -->
                                                                <span class="side-menu__label">Contact Us</span>
                                                            </a> </li>
                                                        <?php if(!Auth::guard('user')->user()): ?>
                                                        <li> <a class="side-menu__item" href="<?php echo e(route('auth.login')); ?>">
                                                                <!-- <i class="side-menu__icon fe fe-alert-circle"></i> -->
                                                                <span class="side-menu__label">Login</span>
                                                            </a> </li>
                                                        <?php endif; ?>
                                                        <!-- <li> <a class="side-menu__item" href="#" id="logout" data-url="<?php echo e(route('admin.logout')); ?>"><i class="side-menu__icon fe fe-alert-circle"></i><span class="side-menu__label">Logout</span></a> </li> -->

                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- <div class="dropdown d-flex header-settings"> <a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="sidebar-right" data-target=".sidebar-right"> <i class="fe fe-align-right"></i> </a> </div> SIDE-MENU -->
                                            <?php if(Auth::guard('user')->user()): ?>
                                            <div class="dropdown d-flex profile-1"> <a href="#" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                    <img src="<?php echo e(Auth::guard('user')->user()->profile_url); ?>" alt="profile-user" class="avatar  profile-user brround cover-image"> </a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <div class="drop-heading">
                                                        <div class="text-center">
                                                            <h5 class="text-dark mb-0 fs-14 fw-semibold">Hi, <?php echo e(Auth::guard('user')->user()->name); ?> </h5> <small class="text-muted"> </small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-divider m-0"></div>
                                                    <a class="dropdown-item" href="<?php echo e(route('user.dashboard')); ?>"> <i class="dropdown-icon fe fe-user"></i> User Dashboard </a>
                                                    <!-- <a class="dropdown-item" href="email-inbox.html"> <i class="dropdown-icon fe fe-mail"></i> Inbox <span class="badge bg-primary rounded-pill float-end">5</span> </a> -->
                                                    <!-- <a class="dropdown-item" href="lockscreen.html"> <i class="dropdown-icon fe fe-lock"></i> Lockscreen </a> -->
                                                    <!-- <a class="dropdown-item" href="<?php echo e(route('admin.setting')); ?>"> <i class="dropdown-icon fe fe-settings"></i> Settings </a> -->
                                                    <button class="dropdown-item" id="logout" data-url="<?php echo e(route('user.logout')); ?>"> <i class="dropdown-icon fe fe-alert-circle"></i> Logout </button>
                                                </div>
                                            </div>
                                            <?php else: ?>
                                            <div class="dropdown d-flex profile-1 mobile-login">
                                                <a href="<?php echo e(route('auth.login')); ?>" class="nav-link leading-none d-flex">
                                                    <i class="fa fa-sign-in avatar profile-user brround cover-image fs-20" style="padding-top: 2px; background: #fff; color: var(--primary-bg-color);"></i>
                                                    <!-- <img src="<?php echo e(url('assets/images/users/21.jpg')); ?>" alt="profile-user" class="avatar profile-user brround cover-image"> -->
                                                </a>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="jumps-prevent"></div> --><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/common/header.blade.php ENDPATH**/ ?>