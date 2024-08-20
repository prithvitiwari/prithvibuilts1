<?php $__env->startSection('style'); ?>
<style>
    .validate-input .input100 {
        width: 100%;
    }
</style>
<?php $__env->stopSection(); ?>
<!-- PAGE -->
<div class="page">
    <div class="">
        <!-- Theme-Layout -->
        <!-- CONTAINER OPEN -->
        <div class="col col-login mx-auto mt-7">
            <div class="text-center"> <img src="<?php echo e(url('storage/logo',$setting->logo)); ?>" style="width: 100px;" class="header-brand-img" alt=""> </div>
        </div>
        <div class="container-login100">
            <div class="wrap-login100 p-6">
                <form class="login100-form validate-form loginSubmit" method="post" action="<?php echo e(route('auth.checklogin')); ?>">
                    <span class="login100-form-title pb-5"> Login </span>
                    <?php echo e(csrf_field()); ?>


                    <?php if($message = Session::get('error')): ?>
                    <div class="alert alert-danger alert-block">
                        <?php echo e($message); ?>

                    </div>
                    <?php endif; ?>
                    <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success alert-block">
                        <?php echo e($message); ?>

                    </div>
                    <?php endif; ?>
                    <?php if(count($errors->all())): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger">
                        <?php echo e($error); ?>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <div class="panel panel-primary">
                        <!-- <div class="tab-menu-heading">
                            <div class="tabs-menu1">
                                Tabs
                                <ul class="nav panel-tabs">
                                    <li class="mx-0"><a href="#tab5" class="active" data-bs-toggle="tab">Email</a></li>
                                    <li class="mx-0"><a href="#tab6" data-bs-toggle="tab" class="">Mobile</a></li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="panel-body tabs-menu-body p-0 pt-5">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab5">
                                    <div class="wrap-input100 validate-input" >
                                        <!-- <a href="#" class="input-group-text bg-white text-muted"> <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i> </a> -->
                                        <input class="input100 form-control" type="text" name="email" placeholder="Email / E-Pin" required>
                                    </div>
                                    <div class="wrap-input100 validate-input" id="Password-toggle">
                                        <!-- <a href="#" class="input-group-text bg-white text-muted"> <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i> </a> -->
                                        <input class="input100 form-control" type="password" name="password" placeholder="Password" required>
                                    </div>
                                    <div class="text-end pt-4">
                                        <p class="mb-0"><a href="<?php echo e(route('auth.forgot')); ?>" class="text-primary ms-1">Forgot Password?</a></p>
                                    </div>
                                    
                                    <div class="container-login100-form-btn form-btn-submit d-block">
                                        <button type="submit" class="login100-form-btn btn-primary"> Login </button>
                                    </div>
                                    <div class="container-login100-form-btn form-btn-submit d-none">
                                        <div class="login100-form-btn btn-primary" style="cursor: pointer;"> Processing... </div>
                                    </div>
                                    <div class="text-center pt-3">
                                        <p class="text-dark mb-0">Not a member?<a href="<?php echo e(route('auth.register')); ?>" class="text-primary ms-1">Sign Up</a></p>
                                    </div>
                                    <!-- <label class="login-social-icon"><span>Login with Social</span></label>
                                    <div class="d-flex justify-content-center"> <a href="#">
                                            <div class="social-login me-4 text-center"> <i class="fa fa-google"></i> </div>
                                        </a> <a href="#">
                                            <div class="social-login me-4 text-center"> <i class="fa fa-facebook"></i> </div>
                                        </a> <a href="#">
                                            <div class="social-login text-center"> <i class="fa fa-twitter"></i> </div>
                                        </a>
                                    </div> -->
                                </div>
                                <div class="tab-pane" id="tab6">
                                    <div id="mobile-num" class="wrap-input100 validate-input input-group mb-4">
                                        <a href="#" class="input-group-text bg-white text-muted"> <span>+91</span> </a>
                                        <input class="input100 form-control">
                                    </div>
                                    <div id="login-otp" class="justify-content-around mb-5">
                                        <input class="form-control text-center w-15" id="txt1" maxlength="1">
                                        <input class="form-control text-center w-15" id="txt2" maxlength="1">
                                        <input class="form-control text-center w-15" id="txt3" maxlength="1">
                                        <input class="form-control text-center w-15" id="txt4" maxlength="1">
                                    </div>
                                    <span>Note : Login with registered mobile number to generate OTP.</span>
                                    <div class="container-login100-form-btn ">
                                        <a href="#" class="login100-form-btn btn-primary" id="generate-otp"> Proceed </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div>
<!-- End PAGE -->
<?php $__env->startSection('script'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>

<script>
    $(document).on('submit', '.loginSubmit', function(e) {
        is_valid = $(this).valid();
        console.log(is_valid);
        if (is_valid) {
            $('.form-btn-submit').toggleClass('d-none d-block');
        }
    });
</script>
<?php $__env->stopSection(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/login.blade.php ENDPATH**/ ?>