<?php $__env->startSection('style'); ?>
<style>
    .validate-input .input100 {
        width: 100%;
    }

    .login100-form {
        width: 320px;
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
                <form class="login100-form validate-form login100-form-register kycSubmit" method="POST" files="true" enctype="multipart/form-data" action="<?php echo e(route('auth.verify_otp',$user->id)); ?>">
                    <span class="login100-form-title"> Verify Account </span>
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
                            <!-- <label for=""> OTP </label> -->
                            <div class="wrap-input100 validate-input">
                                <!-- <a href="#" class="input-group-text bg-white text-muted"> <i class="mdi mdi-account" aria-hidden="true"></i> </a> -->
                                <?php echo e(Form::text('otp', '', ['class' => 'input100 form-control','id'=>'otp', 'placeholder'=>'OTP','minlength'=>'6','maxlength'=>'6','required'=>'required'])); ?>

                            </div>
                            <div class="invalid-feedback">Please enter valid OTP.</div>
                        </div>
                    </div>
                    <div class="container-login100-form-btn form-btn-submit d-block">
                        <button type="submit" class="login100-form-btn btn-primary"> Submit </button>
                    </div>
                    <div class="container-login100-form-btn form-btn-submit d-none">
                        <div class="login100-form-btn btn-primary" style="cursor: pointer;"> Processing... </div>
                    </div>
                    <div class="text-center pt-3">
                        <p class="text-dark mb-0">Not recevied OTP?<a href="<?php echo e(route('auth.resend',$user->id)); ?>" class="text-primary ms-1">Resend</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End PAGE -->

<?php $__env->startSection('script'); ?>

<script src="<?php echo e(url('https://checkout.razorpay.com/v1/checkout.js')); ?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>

<script>
    $('#rzp-footer-form').submit(function(e) {
        var button = $(this).find('button');
        var parent = $(this);
        button.attr('disabled', 'true').html('Please Wait...');
        $.ajax({
            method: 'get',
            url: this.action,
            data: $(this).serialize(),
            complete: function(r) {
                console.log('complete');
                //console.log(r);
            }
        })
        return false;
    })

    function padStart(str) {
        return ('0' + str).slice(-2)
    }

    function demoSuccessHandler(transaction) {
        let form = $('#registerForm');
        let dataurl = $('#registerForm').data('url');

        $("#paymentDetail").removeAttr('style');
        if (transaction) {
            $('#paymentID').val(transaction.razorpay_payment_id);
        }

        form.attr('action', dataurl);
        form.attr('method', 'post');
        form.removeAttr('id');
        $('.registerForm').submit();

        $('#global-loader').css('display', 'block');

        // registerForm
        // $.ajax({
        //     method: 'post',
        //     url: dataurl,
        //     data: formdata,
        //     headers: {
        //         "Content-Type": "multipart/form-data",
        //     },
        //     dataType: "json",
        //     cache: false,
        //     processData: false,
        //     success: function(r) {
        //         console.log('sdffgj');
        //     }
        // })
    }

    var options = {
        key: "<?php echo e(env('RAZORPAY_KEY')); ?>",
        amount: 100,
        name: 'MLM',
        description: '',
        image: '<?php echo e(url("assets/images/brand/logo-3.png")); ?>',
        // prefill: {
        //     "email": "",
        //     "contact": ""
        // },
        handler: demoSuccessHandler
    }

    window.r = new Razorpay(options);
    $(document).on('submit', '#registerForm', function(e) {
        is_valid = $(this).valid();
        console.log(is_valid);
        if (is_valid) {
            e.preventDefault();
            r.open();

        }
    });
    $(document).on('submit', '.kycSubmit', function(e) {
        is_valid = $(this).valid();
        console.log(is_valid);
        if (is_valid) {
            $('.form-btn-submit').toggleClass('d-none d-block');
        }
    });
</script>
<?php $__env->stopSection(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/verify.blade.php ENDPATH**/ ?>