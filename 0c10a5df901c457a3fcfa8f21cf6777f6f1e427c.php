
<?php $__env->startSection('title', 'User Dashboard'); ?>
<?php $__env->startSection('keywords', 'User Dashboard Keywords'); ?>
<?php $__env->startSection('description', 'User Dashboard Description'); ?>
<?php $__env->startSection('contant'); ?>
<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>
<!--app-content open-->
<div class="main-content hor-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container">
            <!-- MESSAGE -->
            <div class="success-alert"></div>
            <?php if($message = Session::get('error')): ?>
            <div class="alert alert-danger alert-block" style="margin: 1.5rem 0rem 1.5rem;">
                <?php echo e($message); ?>

            </div>
            <?php endif; ?>
            <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success alert-block" style="margin: 1.5rem 0rem 1.5rem;">
                <?php echo e($message); ?>

            </div>
            <?php endif; ?>
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Dashboard</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <div class="row">
                <div class="col-sm-12 col-lg-6 col-md-12 col-xl-3">
                    <div class="card">
                        <div class="row">
                            <div class="col-4">
                                <div class="circle-icon bg-primary text-center align-self-center box-primary-shadow bradius">
                                    <img src="<?php echo e(url('assets/images/svgs/circle.svg')); ?>" alt="img" class="card-img-absolute">
                                    <i class="lnr lnr-users fs-30  text-white mt-4"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card-body p-4">
                                    <h2 class="mb-2 fw-normal mt-2"><?php echo e(number_format($total_members)); ?></h2>
                                    <h5 class="fw-normal mb-0">Members</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-12 col-xl-3">
                    <div class="card">
                        <div class="row">
                            <div class="col-4">
                                <div class="circle-icon bg-success text-center align-self-center box-primary-shadow bradius">
                                    <img src="<?php echo e(url('assets/images/svgs/circle.svg')); ?>" alt="img" class="card-img-absolute">
                                    <i class="mdi mdi-currency-inr fs-30  text-white mt-4"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card-body p-4">
                                    <h2 class="mb-2 fw-normal mt-2">₹<?php echo e(number_format($total_income ? $total_income : 0,2)); ?></h2>
                                    <h5 class="fw-normal mb-0">Total Income</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-12 col-xl-3">
                    <div class="card">
                        <div class="row">
                            <div class="col-4">
                                <div class="circle-icon bg-danger text-center align-self-center box-primary-shadow bradius">
                                    <img src="<?php echo e(url('assets/images/svgs/circle.svg')); ?>" alt="img" class="card-img-absolute">
                                    <i class="mdi mdi-wallet fs-30  text-white mt-4"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card-body p-4">
                                    <h2 class="mb-2 fw-normal mt-2">₹<?php echo e(number_format($wallet ? $wallet->balance : 0,2)); ?></h2>
                                    <h5 class="fw-normal mb-0">Total Wallet Amount</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-12 col-xl-3">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-10">
                                    <div class="mb-2 fw-normal mt-2 p-1 one-line-ellipsis" style="background-color: #f7f7f7; border: 2px dashed #cfcfcf; border-radius: 6px;">
                                        <input type="text" class="js-copytextarea" value="<?php echo e(route('auth.register')); ?>?referal_code=<?php echo e($user->referal_code); ?>" readonly style="border: 0; width: 100%;background-color: #f7f7f7;">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="bg-secondary text-center align-self-center box-primary-shadow bradius mt-1 js-textareacopybtn">
                                        <i class="fa fa-copy fs-20 text-white p-2"></i>
                                    </div>
                                </div>
                                <h5 class="fw-normal mb-0">Referal Url</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-2 -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Member Analytics</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <canvas id="MemberChart" width="100%"></canvas>
                            </div>
                        </div>
                    </div>
                </div> <!-- COL END -->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Income Analytics</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <canvas id="IncomeChart" width="100%"></canvas>
                            </div>
                        </div>
                    </div>
                </div> <!-- COL END -->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title fw-semibold">Social</h4>
                        </div>
                        <div class="card-body">
                            <div class="browser-stats">

                                <div class="row mb-4">
                                    <div class="col-3 mb-sm-0 mb-3">
                                        <span class="avatar avatar-md bradius cover-image">
                                            <i class="fa fa-envelope" style="color: #dc4e41; font-size: 23px; padding-top: 8px;"></i>
                                        </span>
                                    </div>
                                    <div class="col-9 ps-sm-0">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <h5 class="mb-1 mt-3">Email</h5>
                                            <div>
                                                <a href="mailto:?body=Check out this site <?php echo e(url('/')); ?>">
                                                    <i class="fa fa-share-alt" style="font-size: 18px;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-3 mb-sm-0 mb-3">
                                        <span class="avatar avatar-md bradius cover-image">
                                            <i class="fa fa-facebook" style="color: #3b5998; font-size: 23px; padding-top: 9px;"></i>
                                        </span>
                                    </div>
                                    <div class="col-9 ps-sm-0">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <h5 class="mb-1 mt-3">Facebook</h5>
                                            <div>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(url('/')); ?>" target="_blank">
                                                    <i class="fa fa-share-alt" style="font-size: 18px;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-3 mb-sm-0 mb-3">
                                        <span class="avatar avatar-md bradius cover-image">
                                            <i class="fa fa-pinterest" style="color: #E60023; font-size: 23px; padding-top: 9px;"></i>
                                        </span>
                                    </div>
                                    <div class="col-9 ps-sm-0">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <h5 class="mb-1 mt-3">Pinterest</h5>
                                            <div>
                                                <a href="http://pinterest.com/pin/create/button/?url=<?php echo e(url('/')); ?>" target="_blank">
                                                    <i class="fa fa-share-alt" style="font-size: 18px;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-3 mb-sm-0 mb-3">
                                        <span class="avatar avatar-md bradius cover-image">
                                            <i class="fa fa-twitter" style="color: #55acee; font-size: 23px; padding-top: 9px;"></i>
                                        </span>
                                    </div>
                                    <div class="col-9 ps-sm-0">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <h5 class="mb-1 mt-3">Twitter</h5>
                                            <div>
                                                <a href="http://twitter.com/share?url=<?php echo e(url('/')); ?>&hashtags=mlm,share,join" target="_blank">
                                                    <i class="fa fa-share-alt" style="font-size: 18px;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-3 mb-sm-0 mb-3">
                                        <span class="avatar avatar-md bradius cover-image">
                                            <i class="fa fa-telegram" style="color: #00405d; font-size: 23px; padding-top: 9px;"></i>
                                        </span>
                                    </div>
                                    <div class="col-9 ps-sm-0">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <h5 class="mb-1 mt-3">Telegram</h5>
                                            <div>
                                                <a href="https://telegram.me/share/url?url=<?php echo e(url('/')); ?>" target="_blank">
                                                    <i class="fa fa-share-alt" style="font-size: 18px;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-3 mb-sm-0 mb-3">
                                        <span class="avatar avatar-md bradius cover-image">
                                            <i class="fa fa-whatsApp" style="color: #43d854; font-size: 23px; padding-top: 9px;"></i>
                                        </span>
                                    </div>
                                    <div class="col-9 ps-sm-0">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <h5 class="mb-1 mt-3">WhatsApp</h5>
                                            <div>
                                                <a href="https://api.whatsapp.com/send?text=<?php echo e(url('/')); ?>" target="_blank">
                                                    <i class="fa fa-share-alt" style="font-size: 18px;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- ROW-2 END -->
        </div> <!-- CONTAINER END -->
    </div>
</div>
<!--app-content close-->
<?php $__env->startSection('script'); ?>
<!-- External Scripts -->

<script src="<?php echo e(url('assets/plugins/chart/Chart.bundle.js')); ?>"></script>

<script src="<?php echo e(url('assets/js/charts.js')); ?>"></script>
<script>
    var chart_users = "<?php echo e($chart_users); ?>"
    var chart_income = "<?php echo e($chart_income); ?>"
    var income_ctx = document.getElementById("IncomeChart").getContext("2d");
    var IncomeChart = new Chart(income_ctx, {
        type: "line",
        data: {
            labels: [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
            ],
            datasets: [{
                label: "Income",
                data: chart_income.split(','),
                backgroundColor: "rgba(9,173,149,0.6)",
            }],
        },
    });
    var member_ctx = document.getElementById("MemberChart").getContext("2d");
    var MemberChart = new Chart(member_ctx, {
        type: "line",
        data: {
            labels: [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
            ],
            datasets: [{
                label: "Member",
                data: chart_users.split(','),
                backgroundColor: "rgba(108,95,252,0.6)",
            }],
        },
    });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.usermaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/user/dashboard.blade.php ENDPATH**/ ?>