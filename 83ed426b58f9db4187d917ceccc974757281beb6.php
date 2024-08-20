<html lang="en" dir="ltr" style="--primary01:rgba(108, 95, 252, 0.1); --primary02:rgba(108, 95, 252, 0.2); --primary03:rgba(108, 95, 252, 0.3); --primary06:rgba(108, 95, 252, 0.6); --primary09:rgba(108, 95, 252, 0.9);">
<?php
$setting = App\Models\Setting::first();
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
    <!--- FONT-ICONS CSS -->
    <link href="<?php echo e(url('assets/css/icons.css')); ?>" rel="stylesheet"> <!-- INTERNAL Jvectormap css -->
    <link href="<?php echo e(url('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')); ?>" rel="stylesheet"> <!-- SIDEBAR CSS -->
    <link href="<?php echo e(url('assets/plugins/sidebar/sidebar.css')); ?>" rel="stylesheet"> <!-- SELECT2 CSS -->
    <link href="<?php echo e(url('assets/plugins/select2/select2.min.css')); ?>" rel="stylesheet">
    <!-- INTERNAL Data table css -->
    <link href="<?php echo e(url('assets/plugins/datatable/css/dataTables.bootstrap5.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('assets/plugins/datatable/responsive.bootstrap5.css')); ?>" rel="stylesheet"> <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo e(url('assets/colors/color1.css')); ?>"> <!-- INTERNAL Switcher css -->
    <base href="<?php echo e(url('/')); ?>" />
    <meta http-equiv="imagetoolbar" content="no">
    <?php echo NoCaptcha::renderJs(); ?>


    <style type="text/css">
        /* input,textarea{-webkit-touch-callout:default;-webkit-user-select:auto;-khtml-user-select:auto;-moz-user-select:text;-ms-user-select:text;user-select:text} *{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:-moz-none;-ms-user-select:none;user-select:none}  */
    </style>
    <style>
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

        .handle-counter input {
            float: left;
            text-align: center;
            height: 35px;
            border-radius: 0;
            width: 50px;
            border: 1px solid #ededf5;
            outline: none;
            border-left: 0;
            border-right: 0;
        }

        .handle-counter .counter-plus {
            border-radius: 0px 3px 3px 0px !important;
        }

        .handle-counter .btn {
            padding: 9px 10px !important;
        }

        .handle-counter .counter-minus {
            border-radius: 3px 0px 0px 3px !important;
        }

        .handle-counter .counter-minus,
        .handle-counter .handle-counter .counter-plus {
            float: left;
            text-align: center;
            border-radius: 1px;
        }

        .handle-counter {
            overflow: hidden;
            display: flex;
            justify-content: center;
        }
    </style>
    <style>
        .tree {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .tree .card {
            margin-bottom: 0;
            box-shadow: none;
            background-color: transparent;
        }

        .tree .card-body {
            padding-top: 0;
            padding-bottom: 0;
            margin: 0;
        }

        .tree h4 {
            text-transform: capitalize;
        }

        .tree ul {
            padding-top: 20px;
            position: relative;

            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }

        .tree li {
            float: left;
            text-align: center;
            list-style-type: none;
            position: relative;
            padding: 20px 5px 0 5px;

            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }

        .tree li ul {
            display: flex;
            overflow: auto !important;
        }

        .tree li::before,
        .tree li::after {
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            border-top: 3px solid #ccc;
            width: 50%;
            height: 20px;
        }

        .tree li::after {
            right: auto;
            left: 50%;
            border-left: 3px solid #ccc;
        }

        .tree li:only-child::after,
        .tree li:only-child::before {
            display: none;
        }

        .tree li:only-child {
            padding-top: 0;
        }

        .tree li:first-child::before,
        .tree li:last-child::after {
            border: 0 none;
        }

        .tree li:last-child::before {
            border-right: 3px solid #ccc;
            border-radius: 0 5px 0 0;
            -webkit-border-radius: 0 5px 0 0;
            -moz-border-radius: 0 5px 0 0;
        }

        .tree li:first-child::after {
            border-radius: 5px 0 0 0;
            -webkit-border-radius: 5px 0 0 0;
            -moz-border-radius: 5px 0 0 0;
        }

        .tree ul li ul:hover {
            display: flex;
            overflow: scroll;
        }

        .tree ul ul::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            border-left: 3px solid #ccc;
            width: 0;
            height: 20px;
            display: flex;
            overflow: auto;
        }

        .tree li a {
            border: 3px solid #ccc;
            padding: 5px 10px;
            text-decoration: none;
            color: #666;
            font-family: arial, verdana, tahoma;
            font-size: 11px;
            display: inline-block;

            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;

            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }

        .tree li a:hover,
        .tree li a:hover+ul li a {
            background: #c8e4f8;
            color: #000;
            border: 3px solid #94a0b4;
        }

        .tree li a:hover+ul li::after,
        .tree li a:hover+ul li::before,
        .tree li a:hover+ul::before,
        .tree li a:hover+ul ul::before {
            border-color: #94a0b4;
        }
    </style>

    <style>
        .swal-overlay--show-modal,
        .swal-modal {
            animation: none !important;
        }

        .swal-overlay {
            transition: none !important;
        }

        .badge.cart-badge {
            margin-top: -30px !important;
        }

        @media (max-width: 768px) {
            .header-wallet {
                display: none !important;
            }
        }


        @media (max-width: 768px) {
            .badge.cart-badge {
                margin-top: -30px !important;
                margin-right: -8px !important;
            }
        }
        @media (max-width: 425px) {
            .badge.cart-badge {
                margin-top: 0px !important;
                margin-right: -8px !important;
            }
        }

        .header .dropdown-menu {
            top: 0 !important;
        }
    </style>
    <style>
        @import  url('https://fonts.googleapis.com/css?family=Raleway:400,700');

        .business-card {
            display: grid;
            overflow: hidden;
            position: relative;
            line-height: 1.6;
            font-size: 4.5vmin;
            width: 426px;
            height: auto;
            padding: 7vmin;
            border-radius: 6px;
            box-shadow: 0 5px 15px -5px rgba(0, 0, 0, 0.4);
        }

        .content {
            z-index: 2;
            display: grid;
            /* grid-template-columns: 1fr;
            grid-template-rows: 1fr 1fr 1fr; */
            font-family: 'Raleway', sans-serif;
            color: #58242a;
        }

        .name {
            font-size: 30px;
            font-weight: 700;
            line-height: 1;
        }

        .profession {
            color: #732d35;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: 700;
        }

        .bottom {
            display: grid;
            grid-column: 1 / 3;
            grid-row: 3;
            grid-template-columns: 1fr 1fr 1fr;
            align-content: end;
        }

        .bottom.left {
            font-weight: 700;
            font-size: 0.9em;
            grid-column: 1;
            animation: inLeft;
            animation-duration: 1s;
        }

        .top.right {
            grid-column: 3;
            align-self: end;
            animation: inRight;

            animation-duration: 1s;
        }

        .bottom.right {
            grid-column: 3;
            align-self: end;
            animation: inRight;
            animation-duration: 1s;
        }

        .website {
            color: #732d35;
            font-weight: 400;
        }

        .location {
            white-space: nowrap;
            text-align: right;
            color: #ee473b;
            text-transform: uppercase;
            font-size: 0.9em;
        }

        .background {
            z-index: 1;
            background-color: #FFFFFF;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        .slice {
            top: -120%;
            left: -50%;
            position: absolute;
            width: 100%;
            height: 150vmin;
            background: #ef473a;
            background: -webkit-linear-gradient(to right, #ef473a, #cb2d3e);
            background: linear-gradient(to right, #ef473a, #cb2d3e);
            transform: rotate(38deg);
            animation: inRotate;
            animation-duration: 1s;
        }
    </style>
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
    <style>
        @media(min-width: 768px) {
            .horizontal .side-menu>li>a {
                padding: 5px 10px !important;
                margin: 10px 0 10px 0px !important;
            }

            .horizontal .side-menu>li>a.active {
                border: 1px solid;
                border-radius: 20px;
            }
        }

        .js-copytextarea:focus {
            outline: none;
        }
    </style>
    <?php echo $__env->yieldContent('style'); ?>
</head>
<?php
$user = Auth::guard('user')->user();
$cart_count = App\Models\Cart::where('user_id',$user->id)->count();
?>
<!-- <body class="app sidebar-mini ltr light-mode"> -->

<body class="app ltr horizontal horizontal-hover">
    <!-- app ltr horizontal horizontal-hover -->
    <div class="horizontalMenucontainer">
        <!-- GLOBAL-LOADER -->
        <div id="global-loader"> <img src="<?php echo e(url('assets/images/loader.svg')); ?>" class="loader-img" alt="Loader"> </div> <!-- /GLOBAL-LOADER -->
        <!-- PAGE -->
        <div class="page">
            <div class="page-main">
                <!-- app-Header -->
                <!-- <div class="app-header header sticky" style="margin-bottom: -74px;"> -->
                <div class="hor-header header sticky" style="margin-bottom: -74px;">
                    <!-- <div class="container-fluid main-container"> -->
                    <div class="container main-container">
                        <div class="d-flex"> <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="#"></a> <!-- sidebar-toggle-->
                            <a class="logo-horizontal " href="<?php echo e(route('home')); ?>">
                                <img src="<?php echo e(url('storage/logo',$setting->logo)); ?>" style="width: 100px;" class="header-brand-img desktop-logo" alt="logo">
                                <img src="<?php echo e(url('storage/logo',$setting->logo)); ?>" style="width: 100px;" class="header-brand-img light-logo1" alt="logo">
                            </a> <!-- LOGO -->
                            <!-- <div class="main-header-center ms-3 d-none d-lg-block">
                                <input class="form-control" placeholder="Search for results..." type="search">
                                <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
                            </div> -->
                            <!-- <div class="app-sidebar ps ps--active-y horizontal-main" style="width:70%; box-shadow: none; border-right: 0;">
                                <div class="main-sidemenu is-expanded container">
                                    <ul class="side-menu open">
                                        <li class="sub-category">
                                            <h3>Main</h3>
                                        </li>
                                        <li class="slide is-expanded"> <a class="side-menu__item active" data-bs-toggle="slide" href="<?php echo e(route('admin.dashboard')); ?>"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a> </li>

                                        <li class="sub-category">
                                            <h3>Body</h3>
                                        </li>
                                        <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-user"></i><span class="side-menu__label">Users</span><i class="angle fe fe-chevron-right"></i></a>
                                            <ul class="slide-menu">
                                                <li class="side-menu-label1"><a href="#">Users</a></li>
                                                <li><a href="<?php echo e(route('admin.user.create')); ?>" class="slide-item">Add</a></li>
                                                <li><a href="<?php echo e(route('admin.user.index')); ?>" class="slide-item">View</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-category">
                                            <h3>General</h3>
                                        </li>
                                        <li> <a class="side-menu__item" href="<?php echo e(route('admin.setting')); ?>"><i class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">Setting</span></a> </li>
                                        <li> <a class="side-menu__item" href="#" id="logout" data-url="<?php echo e(route('admin.logout')); ?>"><i class="side-menu__icon fe fe-alert-circle"></i><span class="side-menu__label">Logout</span></a> </li>

                                    </ul>
                                </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                </div>
                            </div> -->
                            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                                <!-- <div class="dropdown d-lg-none d-md-block d-none"> <a href="#" class="nav-link icon" data-bs-toggle="dropdown"> <i class="fe fe-search"></i> </a>
                                    <div class="dropdown-menu header-search dropdown-menu-start">
                                        <div class="input-group w-100 p-2"> <input type="text" class="form-control" placeholder="Search....">
                                            <div class="input-group-text btn btn-primary"> <i class="fe fe-search" aria-hidden="true"></i> </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- SEARCH -->
                                <!-- <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div> -->
                                <div class="dropdown  d-flex header-wallet">
                                    <a class="nav-link icon">
                                        <span class="btn-success" style="border-radius: 20px; padding: 5px 10px;"><i class="mdi mdi-wallet"> </i> <span>₹
                                                <?php if(!empty($user->wallet)): ?><?php echo e(number_format($user->wallet->balance,2)); ?> <?php else: ?> 0.0 <?php endif; ?></span></span>
                                    </a>
                                </div>

                                <div class="dropdown  d-flex shopping-cart">
                                    <a href="<?php echo e(route('user.cart')); ?>" class="nav-link icon text-center">
                                        <i class="fe fe-shopping-cart"></i>
                                        <?php if($cart_count): ?>
                                        <span class="badge cart-badge bg-secondary header-badge"><?php echo e($cart_count); ?></span>
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="dropdown d-flex profile-1"> <a href="#" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                        <img src="<?php echo e(Auth::guard('user')->user()->profile_url); ?>" alt="profile-user" class="avatar  profile-user brround cover-image">
                                        <?php if(Auth::guard('user')->user()->status == 'true'): ?> <span style="position:absolute;border:5px solid green;border-radius: 100%;top: 9px;right: 0;"></span>

                                        <?php else: ?>
                                        <span style="position:absolute;border:10px solid #ccc;border-radius: 100%;top: -30px;left: 0;"></span>
                                        <?php endif; ?>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <div class="drop-heading">
                                            <div class="text-center">
                                                <h5 class="text-dark mb-0 fs-14 fw-semibold">Hi, <?php echo e(Auth::guard('user')->user()->name); ?> </h5> <small class="text-muted"> </small>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider m-0"></div>
                                        <a class="dropdown-item" href="<?php echo e($user->buy_package == 'true' ? route('user.profile') : 'javascript:void(0)'); ?>"> <i class="dropdown-icon fe fe-user"></i> Profile </a>
                                        <!-- <a class="dropdown-item" href="email-inbox.html"> <i class="dropdown-icon fe fe-mail"></i> Inbox <span class="badge bg-primary rounded-pill float-end">5</span> </a> -->
                                        <!-- <a class="dropdown-item" href="lockscreen.html"> <i class="dropdown-icon fe fe-lock"></i> Lockscreen </a> -->
                                        <!-- <a class="dropdown-item" href="<?php echo e(route('admin.setting')); ?>"> <i class="dropdown-icon fe fe-settings"></i> Settings </a> -->
                                        <button class="dropdown-item" id="logout" data-url="<?php echo e(route('user.logout')); ?>"> <i class="dropdown-icon fe fe-alert-circle"></i> Logout </button>
                                    </div>
                                </div>
                                <!-- <div class="demo-icon nav-link icon"> <i class="fe fe-settings fa-spin  text_primary"></i> </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="jumps-prevent" style="padding-top: 74px;"></div> -->
                <!-- /app-Header -->
                <!--APP-SIDEBAR-->
                <div class="sticky" style="margin-bottom: -74px;">
                    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                    <div class="app-sidebar ps ps--active-y horizontal-main">
                        <div class="side-header">
                            <a class="header-brand1" href="<?php echo e($user->buy_package == 'true' ? route('user.dashboard') : 'javascript:void(0)'); ?>">
                                <img src="<?php echo e(url('storage/logo',$setting->logo)); ?>" style="width: 100px;" class="header-brand-img desktop-logo" alt="logo">
                                <img src="<?php echo e(url('storage/logo',$setting->logo)); ?>" style="width: 100px;" class="header-brand-img toggle-logo" alt="logo">
                                <img src="<?php echo e(url('storage/logo',$setting->logo)); ?>" style="width: 100px;" class="header-brand-img light-logo" alt="logo">
                                <img src="<?php echo e(url('storage/logo',$setting->logo)); ?>" style="width: 100px;" class="header-brand-img light-logo1" alt="logo">
                            </a>
                            LOGO
                        </div>
                        <div class="main-sidemenu is-expanded container">
                            <div class="slide-left disabled active is-expanded" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                                </svg>
                            </div>
                            <ul class="side-menu open">
                                <li> <a class="side-menu__item dashboard <?php echo e(Request::routeIs('user.dashboard') ? 'active': ''); ?>" data-bs-toggle="slide" href="<?php echo e($user->buy_package == 'true' ? route('user.dashboard') : 'javascript:void(0)'); ?>"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a> </li>
                                <li> <a class="side-menu__item <?php echo e(Request::routeIs('user.order') ? 'active': ''); ?>" href="<?php echo e($user->buy_package == 'true' ? route('user.order') : 'javascript:void(0)'); ?>"><i class="side-menu__icon fe fe-truck"></i><span class="side-menu__label">Order</span></a> </li>
                                <li> <a class="side-menu__item <?php echo e(Request::routeIs('user.members') ? 'active': ''); ?> <?php echo e(Request::routeIs('user.members_lavel') ? 'active': ''); ?>" href="<?php echo e($user->buy_package == 'true' ? route('user.members') : 'javascript:void(0)'); ?>"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Members</span></a> </li>
                                <li> <a class="side-menu__item <?php echo e(Request::routeIs('user.wallethistory') ? 'active': ''); ?>" href="<?php echo e($user->buy_package == 'true' ? route('user.wallethistory') : 'javascript:void(0)'); ?>"><i class="side-menu__icon mdi mdi-wallet"></i><span class="side-menu__label">Wallet History</span></a> </li>
                                <li> <a class="side-menu__item <?php echo e(Request::routeIs('user.income') ? 'active': ''); ?>" href="<?php echo e($user->buy_package == 'true' ? route('user.income') : 'javascript:void(0)'); ?>"><i class="side-menu__icon mdi mdi-currency-inr"></i><span class="side-menu__label">Income</span></a> </li>
                                <li> <a class="side-menu__item <?php echo e(Request::routeIs('user.debit') ? 'active': ''); ?>" href="<?php echo e($user->buy_package == 'true' ? route('user.debit') : 'javascript:void(0)'); ?>"><i class="side-menu__icon mdi mdi-cash-100"></i><span class="side-menu__label">Debit Request</span></a> </li>
                                <!-- <li> <a class="side-menu__item <?php echo e(Request::routeIs('user.tds_transfer') ? 'active': ''); ?>" href="<?php echo e($user->buy_package == 'true' ? route('user.tds_transfer') : 'javascript:void(0)'); ?>"><i class="side-menu__icon mdi mdi-cash-100"></i><span class="side-menu__label">TDS Transfer</span></a> </li> -->
                                <li> <a class="side-menu__item <?php echo e(Request::routeIs('user.support') ? 'active': ''); ?>" href="<?php echo e($user->buy_package == 'true' ? route('user.support') : 'javascript:void(0)'); ?>"><i class="side-menu__icon zmdi zmdi-help-outline"></i><span class="side-menu__label">Support</span></a> </li>
                                <li> <a class="side-menu__item <?php echo e(Request::routeIs('user.reward') ? 'active': ''); ?>" href="<?php echo e($user->buy_package == 'true' ? route('user.reward') : 'javascript:void(0)'); ?>"><i class="side-menu__icon fa fa-trophy"></i><span class="side-menu__label">Rewards</span></a> </li>
                                <li> <a class="side-menu__item" target="_blank" href="<?php echo e($user->buy_package == 'true' ? $setting->marketing_plan_url : 'javascript:void(0)'); ?>"><i class="side-menu__icon fa fa-bullhorn"></i><span class="side-menu__label">Marketing Plan</span></a> </li>
                                <li> <a class="side-menu__item <?php echo e(Request::routeIs('user.product') ? 'active': ''); ?>" href="<?php echo e($user->buy_package == 'true' ? route('user.product') : 'javascript:void(0)'); ?>"><i class="side-menu__icon fa fa-shopping-cart"></i><span class="side-menu__label">Re-Purchase</span></a> </li>
                            </ul>
                            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                                </svg></div>
                        </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                        </div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
                <!-- <div class="jumps-prevent" style="padding-top: 74px;"></div> --><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/common/userheader.blade.php ENDPATH**/ ?>