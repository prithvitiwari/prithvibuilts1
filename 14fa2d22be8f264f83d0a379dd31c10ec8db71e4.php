<?php $__env->startSection('style'); ?>
<style>
    .validate-input .form-control {
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
                <!-- <form class="login100-form validate-form login100-form-register" action="javascript:void(0);" id="register" data-url="<?php echo e(route('ajex.check')); ?>"> -->
                <form class="login100-form validate-form login100-form-register registerForm" method="POST" action="<?php echo e(route('auth.register.store')); ?>">
                    <span class="login100-form-title"> Registration </span>
                    <div id="errors" class="mb-3">
                    </div>
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
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="wrap-input100 validate-input" title="Name">
                                <?php echo e(Form::text('name', '', ['class' => 'input100 form-control', 'placeholder'=>'Name','required'=>'required'])); ?>

                            </div>
                            <div class="invalid-feedback">Please enter name.</div>
                        </div>
                        <div class="col-md-4">
                            <div class="wrap-input100 validate-input" title="Email">
                                <?php echo e(Form::email('email', '', ['class' => 'input100 form-control', 'placeholder'=>'Email','required'=>'required'])); ?>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wrap-input100 validate-input" title="Mobile">
                                <?php echo e(Form::tel('mobile', '', ['class' => 'input100 form-control', 'placeholder'=>'Mobile','pattern'=>'[0-9]{10}','required'=>'required'])); ?>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wrap-input100 validate-input" title="Gender">
                                <select class="input100 form-control" name="gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-1" style="font-size: 12px;" title="Date of Birth">Enter Date of Birth (min age 18 years)</div>
                            <div class="wrap-input100 validate-input">
                                <?php echo e(Form::date('dateofbirth', '', ['class' => 'input100 form-control', 'placeholder'=>'Email','max'=>$date,'required'=>'required'])); ?>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-1" style="font-size: 12px;" title="one capital & one small letter, one number and min length eight">Enter Password (ex. Abcd1234)</div>
                            <div class="wrap-input100 validate-input" id="Password-toggle" title="one capital & one small letter, one number and min length eight" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                <input class="input100 form-control" type="password" name="password" placeholder="Password" title="one capital & one small letter, one number and min length eight" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                <!-- <a href="#" class="input-group-text bg-white text-muted"> <i class="zmdi zmdi-eye" aria-hidden="true"></i> </a> -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wrap-input100 validate-input" title="State">
                                <?php echo e(Form::text('state', '', ['class' => 'input100 form-control', 'placeholder'=>'State','required'=>'required'])); ?>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wrap-input100 validate-input" title="City">
                                <?php echo e(Form::text('city', '', ['class' => 'input100 form-control', 'placeholder'=>'City','required'=>'required'])); ?>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wrap-input100 validate-input" title="Pincode">
                                <?php echo e(Form::text('pincode', '', ['class' => 'input100 form-control', 'placeholder'=>'Pincode','required'=>'required','pattern'=>'[0-9]{6}'])); ?>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="wrap-input100 validate-input" title="Address">
                                <?php echo e(Form::text('address', '', ['class' => 'input100 form-control', 'placeholder'=>'Address','required'=>'required'])); ?>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="wrap-input100 validate-input" title="E-Pin Code">
                                <?php echo e(Form::text('accept_code', @Request::query()['referal_code'], ['class' => 'input100 form-control', 'placeholder'=>'E-Pin Code','required'=>'required'])); ?>

                            </div>
                        </div>

                        <div class="col-md-12">
                            <label class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" checked name="termcondition" class="custom-control-input" required>
                                <span class="custom-control-label">Agree the <a href="<?php echo e(route('page','term-condition')); ?>" target="_blank" style="color: #0a58ca;">terms and policy</a></span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <?php echo NoCaptcha::renderJs(); ?>

                            <?php echo NoCaptcha::display(); ?>

                        </div>
                    </div>
                    <div>
                    </div>
                    <div class="container-login100-form-btn form-btn-submit d-block">
                        <button type="submit" class="login100-form-btn btn-primary"> Submit </button>
                    </div>
                    <div class="container-login100-form-btn form-btn-submit d-none">
                        <div class="login100-form-btn btn-primary" style="cursor: pointer;"> Processing... </div>
                    </div>
                    <div class="text-center pt-3">
                        <p class="text-dark mb-0">Already have account?<a href="<?php echo e(route('auth.login')); ?>" class="text-primary ms-1">Sign In</a></p>
                    </div>
                    <!-- <label class="login-social-icon"><span>Register with Social</span></label>
                    <div class="d-flex justify-content-center"> <a href="#">
                            <div class="social-login me-4 text-center"> <i class="fa fa-google"></i> </div>
                        </a> <a href="#">
                            <div class="social-login me-4 text-center"> <i class="fa fa-facebook"></i> </div>
                        </a> <a href="#">
                            <div class="social-login text-center"> <i class="fa fa-twitter"></i> </div>
                        </a>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End PAGE -->

<?php $__env->startSection('script'); ?>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script> -->
<!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script> -->
<script>
    $(document).on('submit', '.registerForm', function(e) {
        $('.form-btn-submit').toggleClass('d-none d-block');
        setTimeout(checkSubmit(), 1000);
    });

    function checkSubmit() {
        $('.form-btn-submit').toggleClass('d-none d-block')
    }
</script>
<?php $__env->stopSection(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/register.blade.php ENDPATH**/ ?>