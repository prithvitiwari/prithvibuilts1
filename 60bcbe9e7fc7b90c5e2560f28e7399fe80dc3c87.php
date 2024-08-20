<!DOCTYPE html>
<html lang="en" dir="ltr" style="--primary-bg-color:#000000; --primary-bg-hover:#00000095; --primary-bg-border:#000000; --primary-transparentcolor:#00000020; --primary01:rgba(0, 0, 0, 0.1); --primary02:rgba(0, 0, 0, 0.2); --primary03:rgba(0, 0, 0, 0.3); --primary06:rgba(0, 0, 0, 0.6); --primary09:rgba(0, 0, 0, 0.9);">
<?php
$setting = App\Models\Setting::first();
?>
<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo e(@$description); ?>">
    <meta name="author" content="Pankaj Choudhary">
    <meta name="keywords" content="<?php echo e(@$keywords); ?>"> <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(url('storage/favicon',$setting->favicon)); ?>">
    <meta name="_token" content="<?php echo e(csrf_token()); ?>">
    <base href="<?php echo e(url('/')); ?>" />
    <!-- TITLE -->
    <title><?php echo e(@$title); ?></title>
    <!-- BOOTSTRAP CSS -->
    <link id="style" href="<?php echo e(url('assets/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- STYLE CSS -->
    <link href="<?php echo e(url('assets/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/css/dark-style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/css/transparent-style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/css/skin-modes.css')); ?>" rel="stylesheet">
    <!-- SINGLE-PAGE CSS -->
    <link href="<?php echo e(url('assets/plugins/single-page/css/main.css')); ?>" rel="stylesheet" type="text/css">
    <!-- P-scroll bar css-->
    <link href="<?php echo e(url('assets/plugins/p-scroll/perfect-scrollbar.css')); ?>" rel="stylesheet">
    <!--- FONT-ICONS CSS -->
    <link href="<?php echo e(url('assets/css/icons.css')); ?>" rel="stylesheet">
    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo e(url('assets/colors/color1.css')); ?>">
    <!-- INTERNAL Switcher css -->
    <meta http-equiv="imagetoolbar" content="no">

    <style>
        /* input[type="date"]:before {
            color: #74829c !important;
            content: attr(placeholder) !important;
            margin-right: 3px;
        }

        input[type="date"]:focus:before {
            content: '' !important;
            margin-right: 0px;
        } */

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

        .form-control~label.error {
            color: #dc3545;
        }
    </style>
</head>

<body class="app sidebar-mini light-mode">
    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">
        <!-- GLOABAL LOADER -->
        <div id="global-loader" style="display: none;"> <img src="<?php echo e(url('assets/images/loader.svg')); ?>" class="loader-img" alt="Loader"> </div> <!-- /GLOABAL LOADER -->
        <?php echo $__env->make('frontend.inc.'.$page, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="<?php echo e(url('assets/js/jquery.min.js')); ?>"></script>
    <!-- BOOTSTRAP JS -->
    <script src="<?php echo e(url('assets/plugins/bootstrap/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <!-- SHOW PASSWORD JS -->
    <script src="<?php echo e(url('assets/js/show-password.min.js')); ?>"></script>
    <!-- GENERATE OTP JS -->
    <script src="<?php echo e(url('assets/js/generate-otp.js')); ?>"></script>
    <!-- Perfect SCROLLBAR JS-->
    <script src="<?php echo e(url('assets/plugins/p-scroll/perfect-scrollbar.js')); ?>"></script>
    <!-- Color Theme js -->
    <script src="<?php echo e(url('assets/js/validation.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/themeColors.js')); ?>"></script>
    <!-- CUSTOM JS -->
    <script src="<?php echo e(url('assets/js/custom.js')); ?>"></script>
    <script>
        setTimeout(function() {
            $('.alert.alert-danger').fadeOut();
            $('.alert.alert-success').fadeOut();
            $('.alert.alert-warning').fadeOut();
        }, 5000);
    </script>
    <?php echo $__env->yieldContent('style'); ?>
    <?php echo $__env->yieldContent('script'); ?>
</body>

</html><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/guestlayout.blade.php ENDPATH**/ ?>