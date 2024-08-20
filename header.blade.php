
<!DOCTYPE html>
<html lang="en" dir="ltr" style="--primary01:rgba(108, 95, 252, 0.1); --primary02:rgba(108, 95, 252, 0.2); --primary03:rgba(108, 95, 252, 0.3); --primary06:rgba(108, 95, 252, 0.6); --primary09:rgba(108, 95, 252, 0.9);">
@php
$site_details = App\Models\Setting::first();
@endphp

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Admin &amp; Dashboard">
    <meta name="author" content="Pankaj Choudhary">
    <meta name="keywords" content=""> <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('storage/favicon',$site_details->favicon) }}"> <!-- TITLE -->
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Admin Panel - {{ $title }}</title> <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ url('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> <!-- STYLE CSS -->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/dark-style.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/transparent-style.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/skin-modes.css') }}" rel="stylesheet">
    <!-- P-scroll bar css-->
    <link href="{{ url('assets/plugins/p-scroll/perfect-scrollbar.css') }}" rel="stylesheet">
    <!--- FONT-ICONS CSS -->
    <link href="{{ url('assets/plugins/sweet-alert/sweetalert.css') }}" rel="stylesheet">
    <!--- FONT-ICONS CSS -->
    <link href="{{ url('assets/plugins/fancyuploader/fancy_fileupload.css') }}" rel="stylesheet">

    <link href="{{ url('assets/css/icons.css') }}" rel="stylesheet"> <!-- INTERNAL Jvectormap css -->
    <link href="{{ url('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"> <!-- SIDEBAR CSS -->
    <link href="{{ url('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet"> <!-- SELECT2 CSS -->
    <link href="{{ url('assets/plugins/select2/select2.min.css') }}" rel="stylesheet">
    <!-- INTERNAL Data table css -->
    <link href="{{ url('assets/plugins/datatable/css/dataTables.bootstrap5.css') }}" rel="stylesheet">

    <link href="{{ url('assets/plugins/datatable/responsive.bootstrap5.css') }}" rel="stylesheet"> <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ url('assets/colors/color1.css') }}"> <!-- INTERNAL Switcher css -->

    <link href="{{ url('assets/plugins/multipleselect/multiple-select.css') }}" rel="stylesheet">

    @yield('style')
    <meta http-equiv="imagetoolbar" content="no">
    {!! NoCaptcha::renderJs() !!}
    <style type="text/css">
        /* input,textarea{-webkit-touch-callout:default;-webkit-user-select:auto;-khtml-user-select:auto;-moz-user-select:text;-ms-user-select:text;user-select:text} *{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:-moz-none;-ms-user-select:none;user-select:none}  */
    </style>
    <style>
    
        .sweet-alert fieldset {
            display: block !important;
        }

        .one-line-ellipsis {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
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
    </style>
    <style>
        .tox-notification {
            display: none !important;
        }
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

        .header .dropdown-menu {
            top: 0 !important;
        }
        

        .handle-counter input {
            float: left;
            text-align: center;
            height: 45px;
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
</head>

<body class="app sidebar-mini ltr light-mode">
    <div class="horizontalMenucontainer">
        <!-- GLOBAL-LOADER -->
        <div id="global-loader"> <img src="{{ url('assets/images/loader.svg') }}" class="loader-img" alt="Loader"> </div> <!-- /GLOBAL-LOADER -->
        <!-- PAGE -->
        <div class="page">
            <div class="page-main">
                <!-- app-Header -->
                <div class="app-header header sticky" style="margin-bottom: -74px;">
                    <div class="container-fluid main-container">
                        <div class="d-flex"> <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="#"></a> <!-- sidebar-toggle-->
                            <a class="logo-horizontal " href="{{ route('admin.dashboard') }}">
                                <img src="{{ url('storage/logo',$site_details->logo) }}" style="width: 100px;" class="header-brand-img desktop-logo" alt="logo">
                                <img src="{{ url('storage/logo',$site_details->logo) }}" style="width: 100px;" class="header-brand-img light-logo1" alt="logo">
                            </a> <!-- LOGO -->
                            <!-- <div class="main-header-center ms-3 d-none d-lg-block"> <input class="form-control" placeholder="Search for results..." type="search"> <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button> </div> -->
                            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                                <!-- <div class="dropdown d-lg-none d-md-block d-none"> <a href="#" class="nav-link icon" data-bs-toggle="dropdown"> <i class="fe fe-search"></i> </a>
                                    <div class="dropdown-menu header-search dropdown-menu-start">
                                        <div class="input-group w-100 p-2"> <input type="text" class="form-control" placeholder="Search....">
                                            <div class="input-group-text btn btn-primary"> <i class="fe fe-search" aria-hidden="true"></i> </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- SEARCH -->
                                <div class="dropdown d-flex profile-1"> <a href="#" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                        <img src="{{ url('assets/images/users/21.jpg') }}" alt="profile-user" class="avatar  profile-user brround cover-image"> </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <div class="drop-heading">
                                            <div class="text-center">
                                                <h5 class="text-dark mb-0 fs-14 fw-semibold"> {{ Auth::guard('admin')->user()->name }} </h5> <small class="text-muted"> {{ Auth::guard('admin')->user()->email }} </small>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider m-0"></div>
                                        <!-- <a class="dropdown-item" href="profile.html"> <i class="dropdown-icon fe fe-user"></i> Profile </a> -->
                                        <!-- <a class="dropdown-item" href="email-inbox.html"> <i class="dropdown-icon fe fe-mail"></i> Inbox <span class="badge bg-primary rounded-pill float-end">5</span> </a> -->
                                        <!-- <a class="dropdown-item" href="lockscreen.html"> <i class="dropdown-icon fe fe-lock"></i> Lockscreen </a> -->
                                        <a class="dropdown-item" href="{{ route('admin.setting') }}"> <i class="dropdown-icon fe fe-settings"></i> Settings </a>
                                        <a class="dropdown-item" href="{{ route('admin.setting.admin') }}"> <i class="dropdown-icon fa fa-key"></i> Change Password </a>
                                        <button class="dropdown-item" id="logout" data-url="{{ route('admin.logout') }}"> <i class="dropdown-icon fa fa-sign-out"></i> Logout </button>
                                    </div>
                                </div>
                                <!-- <button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon fe fe-more-vertical"></span> </button>
                                <div class="navbar navbar-collapse responsive-navbar p-0">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                        <div class="d-flex order-lg-2">
                                            <div class="dropdown d-md-none d-flex"> <a href="#" class="nav-link icon" data-bs-toggle="dropdown"> <i class="fe fe-search"></i> </a>
                                                <div class="dropdown-menu header-search dropdown-menu-start">
                                                    <div class="input-group w-100 p-2"> <input type="text" class="form-control" placeholder="Search....">
                                                        <div class="input-group-text btn btn-primary"> <i class="fa fa-search" aria-hidden="true"></i> </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            COUNTRY
                                            <div class="d-flex country"> <a class="nav-link icon text-center" data-bs-target="#country-selector" data-bs-toggle="modal"> <i class="fe fe-globe"></i><span class="fs-16 ms-2 d-none d-xl-block">English</span> </a> </div>
                                            SEARCH
                                            <div class="dropdown  d-flex"> <a class="nav-link icon theme-layout nav-link-bg layout-setting"> <span class="dark-layout"><i class="fe fe-moon"></i></span> <span class="light-layout"><i class="fe fe-sun"></i></span> </a> </div>
                                            Theme-Layout
                                            <div class="dropdown d-flex"> <a class="nav-link icon full-screen-link nav-link-bg"> <i class="fe fe-minimize fullscreen-button"></i> </a> </div> 
                                            FULL-SCREEN
                                             <div class="dropdown  d-flex notifications"> <a class="nav-link icon" data-bs-toggle="dropdown"><i class="fe fe-bell"></i><span class=" pulse"></span> </a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <div class="drop-heading border-bottom">
                                                        <div class="d-flex">
                                                            <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Notifications </h6>
                                                        </div>
                                                    </div>
                                                    <div class="notifications-menu"> <a class="dropdown-item d-flex" href="notify-list.html">
                                                            <div class="me-3 notifyimg  bg-primary brround box-shadow-primary"> <i class="fe fe-mail"></i> </div>
                                                            <div class="mt-1">
                                                                <h5 class="notification-label mb-1">New Application received </h5> <span class="notification-subtext">3 days ago</span>
                                                            </div>
                                                        </a> <a class="dropdown-item d-flex" href="notify-list.html">
                                                            <div class="me-3 notifyimg  bg-secondary brround box-shadow-secondary"> <i class="fe fe-check-circle"></i> </div>
                                                            <div class="mt-1">
                                                                <h5 class="notification-label mb-1">Project has been approved</h5> <span class="notification-subtext">2 hours ago</span>
                                                            </div>
                                                        </a> <a class="dropdown-item d-flex" href="notify-list.html">
                                                            <div class="me-3 notifyimg  bg-success brround box-shadow-success"> <i class="fe fe-shopping-cart"></i> </div>
                                                            <div class="mt-1">
                                                                <h5 class="notification-label mb-1">Your Product Delivered </h5> <span class="notification-subtext">30 min ago</span>
                                                            </div>
                                                        </a> <a class="dropdown-item d-flex" href="notify-list.html">
                                                            <div class="me-3 notifyimg bg-pink brround box-shadow-pink"> <i class="fe fe-user-plus"></i> </div>
                                                            <div class="mt-1">
                                                                <h5 class="notification-label mb-1">Friend Requests</h5> <span class="notification-subtext">1 day ago</span>
                                                            </div>
                                                        </a> </div>
                                                    <div class="dropdown-divider m-0"></div> <a href="notify-list.html" class="dropdown-item text-center p-3 text-muted">View all Notification</a>
                                                </div>
                                            </div> 
                                            NOTIFICATIONS
                                            <div class="dropdown  d-flex message"> <a class="nav-link icon text-center" data-bs-toggle="dropdown"> <i class="fe fe-message-square"></i><span class="pulse-danger"></span> </a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <div class="drop-heading border-bottom">
                                                        <div class="d-flex">
                                                            <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">You have 5 Messages</h6>
                                                            <div class="ms-auto"> <a href="#" class="text-muted p-0 fs-12">make all unread</a> </div>
                                                        </div>
                                                    </div>
                                                    <div class="message-menu"> <a class="dropdown-item d-flex" href="chat.html"> <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="../assets/images/users/1.jpg" style="background: url(&quot;../assets/images/users/1.jpg&quot;) center center;"></span>
                                                            <div class="wd-90p">
                                                                <div class="d-flex">
                                                                    <h5 class="mb-1">Peter Theil</h5> <small class="text-muted ms-auto text-end"> 6:45 am </small>
                                                                </div> <span>Commented on file Guest list....</span>
                                                            </div>
                                                        </a> <a class="dropdown-item d-flex" href="chat.html"> <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="../assets/images/users/15.jpg" style="background: url(&quot;../assets/images/users/15.jpg&quot;) center center;"></span>
                                                            <div class="wd-90p">
                                                                <div class="d-flex">
                                                                    <h5 class="mb-1">Abagael Luth</h5> <small class="text-muted ms-auto text-end"> 10:35 am </small>
                                                                </div> <span>New Meetup Started......</span>
                                                            </div>
                                                        </a> <a class="dropdown-item d-flex" href="chat.html"> <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="../assets/images/users/12.jpg" style="background: url(&quot;../assets/images/users/12.jpg&quot;) center center;"></span>
                                                            <div class="wd-90p">
                                                                <div class="d-flex">
                                                                    <h5 class="mb-1">Brizid Dawson</h5> <small class="text-muted ms-auto text-end"> 2:17 pm </small>
                                                                </div> <span>Brizid is in the Warehouse...</span>
                                                            </div>
                                                        </a> <a class="dropdown-item d-flex" href="chat.html"> <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="../assets/images/users/4.jpg" style="background: url(&quot;../assets/images/users/4.jpg&quot;) center center;"></span>
                                                            <div class="wd-90p">
                                                                <div class="d-flex">
                                                                    <h5 class="mb-1">Shannon Shaw</h5> <small class="text-muted ms-auto text-end"> 7:55 pm </small>
                                                                </div> <span>New Product Realease......</span>
                                                            </div>
                                                        </a> </div>
                                                    <div class="dropdown-divider m-0"></div> <a href="#" class="dropdown-item text-center p-3 text-muted">See all Messages</a>
                                                </div>
                                            </div>
                                            MESSAGE-BOX
                                            <div class="dropdown d-flex header-settings"> <a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="sidebar-right" data-target=".sidebar-right"> <i class="fe fe-align-right"></i> </a> </div> SIDE-MENU
                                            <div class="dropdown d-flex profile-1"> <a href="#" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                    <img src="{{ url('assets/images/users/21.jpg') }}" alt="profile-user" class="avatar  profile-user brround cover-image"> </a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <div class="drop-heading">
                                                        <div class="text-center">
                                                            <h5 class="text-dark mb-0 fs-14 fw-semibold"> {{ Auth::guard('admin')->user()->name }} </h5> <small class="text-muted"> {{ Auth::guard('admin')->user()->email }} </small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-divider m-0"></div>
                                                    <a class="dropdown-item" href="profile.html"> <i class="dropdown-icon fe fe-user"></i> Profile </a>
                                                    <a class="dropdown-item" href="email-inbox.html"> <i class="dropdown-icon fe fe-mail"></i> Inbox <span class="badge bg-primary rounded-pill float-end">5</span> </a>
                                                    <a class="dropdown-item" href="lockscreen.html"> <i class="dropdown-icon fe fe-lock"></i> Lockscreen </a>
                                                    <a class="dropdown-item" href="{{ route('admin.setting') }}"> <i class="dropdown-icon fe fe-settings"></i> Settings </a>
                                                    <button class="dropdown-item" id="logout" data-url="{{ route('admin.logout') }}"> <i class="dropdown-icon fa fa-sign-out"></i> Logout </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="demo-icon nav-link icon"> <i class="fe fe-settings fa-spin  text_primary"></i> </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="jumps-prevent" style="padding-top: 74px;"></div> -->
                <!-- /app-Header -->
                <!--APP-SIDEBAR-->
                <div class="sticky is-expanded" style="margin-bottom: -74px;">
                    <div class="app-sidebar__overlay active" data-bs-toggle="sidebar"></div>
                    <div class="app-sidebar ps open">
                        <div class="side-header">
                            <a class="header-brand1" href="{{ route('admin.dashboard') }}">
                                <img src="{{ url('storage/logo',$site_details->logo) }}" style="width: 50px;" class="header-brand-img desktop-logo" alt="logo">
                                <img src="{{ url('storage/logo',$site_details->logo) }}" style="width: 50px;" class="header-brand-img toggle-logo" alt="logo">
                                <img src="{{ url('storage/logo',$site_details->logo) }}" style="width: 50px;" class="header-brand-img light-logo" alt="logo">
                                <img src="{{ url('storage/logo',$site_details->logo) }}" style="width: 50px;" class="header-brand-img light-logo1" alt="logo">
                            </a> <!-- LOGO -->
                        </div>
                        <div class="main-sidemenu is-expanded">
                            <div class="slide-left disabled active is-expanded" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                                </svg></div>
                            <ul class="side-menu open">
                                <li class="sub-category">
                                    <h3>Main</h3>
                                </li>
                                <li class="slide is-expanded"> <a class="side-menu__item active" data-bs-toggle="slide" href="{{ route('admin.dashboard') }}"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a> </li>

                                <li class="sub-category">
                                    <h3>Body</h3>
                                </li>
                                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('admin.order') }}"><i class="side-menu__icon fe fe-truck"></i><span class="side-menu__label">Order</span></a> </li>
                                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('admin.user.index') }}"><i class="side-menu__icon fe fe-user"></i><span class="side-menu__label">Users</span></a> </li>
                                <!-- <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-user"></i><span class="side-menu__label">Users</span><i class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="#">Users</a></li>
                                        <li><a href="{{ route('admin.user.create') }}" class="slide-item">Add</a></li>
                                        <li><a href="{{ route('admin.user.index') }}" class="slide-item">View</a></li>
                                    </ul>
                                </li> -->
                                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fa fa-product-hunt"></i><span class="side-menu__label">Product</span><i class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="#">Product</a></li>
                                        <li><a href="{{ route('admin.product.create') }}" class="slide-item">Add</a></li>
                                        <li><a href="{{ route('admin.product.index') }}" class="slide-item">View</a></li>
                                    </ul>
                                </li>
                                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Package</span><i class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="#">Package</a></li>
                                        <li><a href="{{ route('admin.kit.create') }}" class="slide-item">Add</a></li>
                                        <li><a href="{{ route('admin.kit.index') }}" class="slide-item">View</a></li>
                                    </ul>
                                </li>
                                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"> <i class="side-menu__icon fe fe-cpu"></i> <span class="side-menu__label">Blogs</span><i class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu" style="display: none;">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Blogs</a></li>
                                        <li><a href="{{ route('admin.blog.create') }}" class="slide-item">Add</a></li>
                                        <li><a href="{{ route('admin.blog.index') }}" class="slide-item">View</a></li>
                                        <li class="sub-slide"> <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Category</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                            <ul class="sub-slide-menu" style="display: none;">
                                                <li><a href="{{ route('admin.blogcategory.create') }}" class="sub-slide-item2">Add</a></li>
                                                <li><a href="{{ route('admin.blogcategory.index') }}" class="sub-slide-item2">View</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fa fa-newspaper-o"></i><span class="side-menu__label">News</span><i class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="#">News</a></li>
                                        <li><a href="{{ route('admin.news.create') }}" class="slide-item">Add</a></li>
                                        <li><a href="{{ route('admin.news.index') }}" class="slide-item">View</a></li>
                                    </ul>
                                </li>
                                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fa fa-sliders"></i><span class="side-menu__label">Slider</span><i class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="#">Slider</a></li>
                                        <li><a href="{{ route('admin.slider.create') }}" class="slide-item">Add</a></li>
                                        <li><a href="{{ route('admin.slider.index') }}" class="slide-item">View</a></li>
                                    </ul>
                                </li>
                                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fa fa-picture-o"></i><span class="side-menu__label">Gallery</span><i class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="#">Gallery</a></li>
                                        <li><a href="{{ route('admin.gallery.create') }}" class="slide-item">Add</a></li>
                                        <li><a href="{{ route('admin.gallery.index') }}" class="slide-item">View</a></li>
                                    </ul>
                                </li>
                                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fa fa-question-circle-o"></i><span class="side-menu__label">Faqs</span><i class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="#">Faqs</a></li>
                                        <li><a href="{{ route('admin.faqs.create') }}" class="slide-item">Add</a></li>
                                        <li><a href="{{ route('admin.faqs.index') }}" class="slide-item">View</a></li>
                                    </ul>
                                </li>
                                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fa fa-file-o"></i><span class="side-menu__label">Pages</span><i class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="#">Pages</a></li>
                                        <li><a href="{{ route('admin.page.create') }}" class="slide-item">Add</a></li>
                                        <li><a href="{{ route('admin.page.index') }}" class="slide-item">View</a></li>
                                    </ul>
                                </li>
                                
                                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon mdi mdi-cash-100"></i><span class="side-menu__label">Debit Request</span><i class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="#">Debit Request</a></li>
                                        <li><a href="{{ route('admin.debit.user') }}" class="slide-item">Add Request</a></li>
                                        <li><a href="{{ route('admin.debit.index') }}" class="slide-item">View Request</a></li>
                                    </ul>
                                </li>

                                <li> <a class="side-menu__item" href="{{ route('admin.enquery.index') }}"><i class="side-menu__icon fa fa-check-square-o"></i><span class="side-menu__label">Enquery</span></a> </li>
                                <li> <a class="side-menu__item" href="{{ route('admin.support.index') }}"><i class="side-menu__icon zmdi zmdi-help-outline"></i><span class="side-menu__label">Support</span></a> </li>
                                <li> <a class="side-menu__item" href="{{ route('admin.tdstransfer.index') }}"><i class="side-menu__icon mdi mdi-cash-100"></i><span class="side-menu__label">TDS Transfer</span></a> </li>
                                <li> <a class="side-menu__item" href="{{ route('admin.email.index') }}"><i class="side-menu__icon fe fe-mail"></i><span class="side-menu__label">Send Email</span></a> </li>
                                <li class="sub-category">
                                    <h3>General</h3>
                                </li>

                                <li class="slide"> <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-award"></i><span class="side-menu__label">Rewards</span><i class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="#">Rewards</a></li>
                                        <li><a href="{{ route('admin.reward.create') }}" class="slide-item">Add</a></li>
                                        <li><a href="{{ route('admin.reward.index') }}" class="slide-item">View</a></li>
                                        <li><a href="{{ route('admin.reward.user') }}" class="slide-item">User</a></li>
                                    </ul>
                                </li>
                                <li> <a class="side-menu__item" href="{{ route('admin.setting') }}"><i class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">Setting</span></a> </li>
                                <li> <a class="side-menu__item" href="#" id="logout" data-url="{{ route('admin.logout') }}"><i class="side-menu__icon fa fa-sign-out"></i><span class="side-menu__label">Logout</span></a> </li>

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
                <!-- <div class="jumps-prevent" style="padding-top: 74px;"></div> -->