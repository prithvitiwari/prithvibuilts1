<!-- PAGE -->
<div class="page">
    <div class="">
        <!-- Theme-Layout -->
        <!-- CONTAINER OPEN -->
        <div class="col col-login mx-auto mt-7">
            <div class="text-center"> <img src="<?php echo e(url('storage/logo',$setting->logo)); ?>" style="width: 100px" class="header-brand-img" alt=""> </div>
        </div>
        <div class="container-login100">
            <div class="wrap-login100 p-6">
                <form class="login100-form validate-form forgotSubmit" method="post" action="<?php echo e(route('auth.forgot_password_store',$user->id)); ?>">
                    <span class="login100-form-title pb-5"> Forgot Password </span>
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
                    <div class="wrap-input100 validate-input">
                        <!-- <a href="#" class="input-group-text bg-white text-muted"> <i class="mdi mdi-account" aria-hidden="true"></i> </a> -->
                        <?php echo e(Form::text('otp', '', ['class' => 'input100 form-control w-100','id'=>'otp', 'placeholder'=>'OTP','minlength'=>'6','maxlength'=>'6','required'=>'required'])); ?>

                        <div class="invalid-feedback">Please enter valid OTP.</div>
                    </div>
                    <div class="wrap-input100 validate-input" id="password">
                        <!-- <a href="#" class="input-group-text bg-white text-muted"> <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i> </a> -->
                        <?php echo e(Form::input('password', 'password', '', ['class' => 'input100 form-control w-100','id'=>'password', 'placeholder'=>'Password','minlength'=>'6','required'=>'required'])); ?>

                    </div>
                    <div class="wrap-input100 validate-input" id="confirm_password">
                        <!-- <a href="#" class="input-group-text bg-white text-muted"> <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i> </a> -->
                        <?php echo e(Form::input('password', 'confirm_password', '', ['class' => 'input100 form-control w-100','id'=>'confirm_password', 'placeholder'=>'Confirm Password','minlength'=>'6','required'=>'required'])); ?>

                    </div>
                    <div class="container-login100-form-btn form-btn-submit d-block">
                        <button type="submit" class="login100-form-btn btn-primary"> Submit </button>
                    </div>
                    <div class="container-login100-form-btn form-btn-submit d-none">
                        <div class="login100-form-btn btn-primary" style="cursor: pointer;"> Processing... </div>
                    </div>
                    <div class="text-center pt-3">
                        <p class="text-dark mb-0">Not recevied OTP?<a href="<?php echo e(route('auth.forgot_resend',$user->id)); ?>" class="text-primary ms-1">Resend</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End PAGE -->
<?php $__env->startSection('script'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>

<script>
    $(document).on('submit', '.forgotSubmit', function(e) {
        is_valid = $(this).valid();
        console.log(is_valid);
        if (is_valid) {
            $('.form-btn-submit').toggleClass('d-none d-block');
        }
    });
</script>
<?php $__env->stopSection(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/forgotpassword.blade.php ENDPATH**/ ?>