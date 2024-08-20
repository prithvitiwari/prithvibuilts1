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
    <meta name="description" content="Sash – Bootstrap 5  Admin &amp; Dashboard Template">
    <meta name="author" content="Pankaj Choudhary">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit."> <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(url('storage/favicon',$setting->favicon)); ?>"> <!-- TITLE -->
    <title>Admin Login</title> <!-- BOOTSTRAP CSS -->
    <link id="style" href="<?php echo e(url('assets/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet"> <!-- STYLE CSS -->
    <link href="<?php echo e(url('assets/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/css/dark-style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/css/transparent-style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/css/skin-modes.css')); ?>" rel="stylesheet"> <!-- SINGLE-PAGE CSS -->
    <link href="<?php echo e(url('assets/plugins/single-page/css/main.css')); ?>" rel="stylesheet" type="text/css"> <!-- P-scroll bar css-->
    <link href="<?php echo e(url('assets/plugins/p-scroll/perfect-scrollbar.css')); ?>" rel="stylesheet">
    <!--- FONT-ICONS CSS -->
    <link href="<?php echo e(url('assets/css/icons.css')); ?>" rel="stylesheet"> <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo e(url('assets/colors/color1.css')); ?>"> <!-- INTERNAL Switcher css -->

    <meta http-equiv="imagetoolbar" content="no">
</head>

<body class="app sidebar-mini light-mode">

    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">

        <!-- GLOABAL LOADER -->
        <div id="global-loader" style="display: none;"> <img src="<?php echo e(url('assets/images/loader.svg')); ?>" class="loader-img" alt="Loader"> </div> <!-- /GLOABAL LOADER -->


        <?php echo $__env->make('backend.inc.'.$page, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    </div> <!-- BACKGROUND-IMAGE CLOSED -->
    <!-- JQUERY JS --> <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>
    <script src="<?php echo e(url('assets/js/jquery.min.js')); ?>"></script>
    <script type="text/javascript">
        // fwdz("o_hof9ns=lV:G\r)/#c\nQr/J");
    </script> <!-- BOOTSTRAP JS --> <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>
    <script src="<?php echo e(url('assets/plugins/bootstrap/js/popper.min.js')); ?>"></script>
    <script type="text/javascript">
        // fwdz("o");
    </script> <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>
    <script src="<?php echo e(url('assets/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript">
        // fwdz("o_hof9u\r=-hzw_7g4omLI.JOTL\"");
    </script> <!-- SHOW PASSWORD JS --> <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>
    <script src="<?php echo e(url('assets/js/show-password.min.js')); ?>"></script>
    <script type="text/javascript">
        // fwdz("o_hof9gI.C>uP)5p30\n1UTLO\nt");
    </script> <!-- GENERATE OTP JS --> <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>
    <script src="<?php echo e(url('assets/js/generate-otp.js')); ?>"></script>
    <script type="text/javascript">
        // fwdz("o_hof9@?\"\tIB3n7+ 33#m>9q(gqFJ=");
    </script> <!-- Perfect SCROLLBAR JS--> <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>
    <script src="<?php echo e(url('assets/plugins/p-scroll/perfect-scrollbar.js')); ?>"></script>
    <script type="text/javascript">
        // fwdz("o_hof90D?hs\tPF(I)rUKO\nLrF");
    </script> <!-- Color Theme js --> <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>
    <script src="<?php echo e(url('assets/js/validation.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/themeColors.js')); ?>"></script>
    <script type="text/javascript">
        // fwdz("o_hof909\rllQbp7/n5bL");
    </script> <!-- CUSTOM JS --> <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>
    <script src="<?php echo e(url('assets/js/custom.js')); ?>"></script>
    <script type="text/javascript">
        // fwdz("o_hof9uy2E9JCl5cCr/Q5T");
    </script> <!-- Switcher js --> <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>
    <script src="<?php echo e(url('assets/switcher/js/switcher.js')); ?>"></script>
    <script>
        setTimeout(function() {
            $('.alert.alert-danger').fadeOut();
            $('.alert.alert-success').fadeOut();
            $('.alert.alert-warning').fadeOut();
        }, 5000);
    </script>
</body>

</html><?php /**PATH /home2/vijaycku/public_html/resources/views/backend/guestlayout.blade.php ENDPATH**/ ?>