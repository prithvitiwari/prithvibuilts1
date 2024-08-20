
<?php $__env->startSection('title', 'Checkout'); ?>
<?php $__env->startSection('keywords', 'Checkout Keywords'); ?>
<?php $__env->startSection('description', 'Checkout Description'); ?>
<?php $__env->startSection('contant'); ?>
<?php $__env->startSection('style'); ?>
<style>
    .custom-radio-lg.custom-control {
        padding-top: 0;
    }

    /* .custom-radio-lg .custom-control-label::before {
        display: block;
    }

    .custom-radio-lg .custom-control-label::after {
        display: block;
    } */
</style>
<?php $__env->stopSection(); ?>

<div class="main-content mt-0 hor-content">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container">
            <!-- PAGE-HEADER -->
            <div class="mt-3">
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
            </div>
            <div class="page-header">
                <h1 class="page-title">Checkout</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e($user->buy_package == 'true' ? route('user.dashboard') : 'javascript:void(0)'); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </div>
            </div> <!-- PAGE-HEADER END -->
            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-xl-8 col-md-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card p-0">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-8 col-md-8 col-sm-8">
                                            <div class="input-group d-flex w-100 float-start">
                                                <h3 class="card-title my-2">Billing Information</h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-4 col-md-4 col-sm-4">
                                            <ul class="nav float-end my-2">
                                                <li class="mr-3"><a href="#tab-11" class="" data-bs-toggle="tab" title="List style">New Address</a></li>
                                                <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                                <li><a href="#tab-12" data-bs-toggle="tab" class="show active" title="Grid">Select Address</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane " id="tab-11">
                            <?php echo e(Form::open(['url' => route('user.address.store'), 'method'=>'POST', 'files' => true, 'class' => 'needs-validation','novalidate'])); ?>

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Name <span class="text-red">*</span></label>
                                                <input type="text" class="form-control" name="name" placeholder="Name" required>
                                                <div class="invalid-feedback">Please enter name.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Email <span class="text-red">*</span></label>
                                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                <div class="invalid-feedback">Please enter email.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Mobile <span class="text-red">*</span></label>
                                                <input type="text" class="form-control" name="mobile" placeholder="Mobile" required>
                                                <div class="invalid-feedback">Please enter mobile number.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Company Name <span class="text-red"></span></label>
                                                <input type="text" class="form-control" name="company" placeholder="Company Name">
                                                <div class="invalid-feedback">Please enter compnay name.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Country <span class="text-red">*</span></label>
                                                <input type="text" class="form-control" name="country" placeholder="Country" required>
                                                <div class="invalid-feedback">Please enter country name.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">State <span class="text-red">*</span></label>
                                                <input type="text" class="form-control" name="state" placeholder="State" required>
                                                <div class="invalid-feedback">Please enter state name.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">City <span class="text-red">*</span></label>
                                                <input type="text" class="form-control" name="city" placeholder="City" required>
                                                <div class="invalid-feedback">Please enter city name.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Postal Code <span class="text-red">*</span></label>
                                                <input type="number" class="form-control" name="pincode" placeholder="Postal Code" required>
                                                <div class="invalid-feedback">Please enter postal code.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Address Type <span class="text-red">*</span></label>
                                                <!-- <input type="number" class="form-control" placeholder="Postal Code"> -->
                                                <select name="type" class="form-control" required>
                                                    <option>Home</option>
                                                    <option>Work</option>
                                                    <option>Other</option>
                                                </select>
                                                <div class="invalid-feedback">Please select address type.</div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Address <span class="text-red">*</span></label>
                                                <textarea class="form-control" rows="3" name="address" placeholder="Address" required></textarea>
                                                <div class="invalid-feedback">Please enter address.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer"> <button type="submit" class="btn btn-primary">Save and Deliver Here</button> </div>
                            </div>
                            </form>
                        </div>
                        <div class="tab-pane active" id="tab-12">
                            <div class="alert address_message d-none" style="color: #e82646; background-color: rgba(232, 38, 70, 0.2); border-color: rgba(232, 38, 70, 0.1);">
                                Please select address.
                            </div>
                            <div class="row">
                                <?php if($addresses->count()): ?>
                                <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-xl-4 col-md-12">
                                    <div class="card cart">
                                        <div class="card-header">
                                            <h3 class="card-title"><?php echo e($address->type); ?></h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="">
                                                <h4 class="fw-semibold"><?php echo e($address->name); ?></h4>
                                                <p><?php echo e($address->address); ?></p>
                                                <p><?php echo e($address->city); ?>, <?php echo e($address->state); ?>, <?php echo e($address->country); ?>, <?php echo e($address->pincode); ?></p>
                                                <p><?php echo e($address->email); ?></p>
                                                <p class="mb-0"><?php echo e($address->mobile); ?> </p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <!-- <a href="#" class="btn btn-primary">Deliver to this Address</a> -->
                                            <div class="form-group">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-radio-lg">
                                                        <input type="radio" class="custom-control-input address" name="address" value="<?php echo e($address->id); ?>">
                                                        <span class="custom-control-label btn btn-primary">Deliver to this Address</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                <div class="col-xl-12 col-md-12">
                                    <div class="card cart">
                                        <div class="card-body text-center">
                                            No address found.
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12">
                    <!-- <div class="card cart">
                        <div class="card-header">
                            <h3 class="card-title">Address</h3>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <h4 class="fw-semibold">Percy Kewshun</h4>
                                <p>4231 Bingamon Branch Road </p>
                                <p>Chicago, IL-60654</p>
                                <p>UTC-5: Eastern Standard Time (EST)</p>
                                <p class="mb-0">+125 254 3562 </p>
                            </div>
                        </div>
                        <div class="card-footer"> <a href="#" class="btn btn-primary">Deliver to this Address</a> </div>
                    </div> -->
                    <div class="card cart">
                        <div class="card-header">
                            <h3 class="card-title">Your Order</h3>
                        </div>
                        <?php echo e(Form::open(['id'=>'checkoutForm'])); ?>

                        <div class="card-body">

                            <div class="">
                                <div class="d-flex">
                                    <img class="avatar-xxl br-7" src="<?php echo e(url('storage/kit',$kit->image)); ?>" style="object-fit: cover;" alt="img">
                                    <div class="ms-3">
                                        <h4 class="mb-1 fw-semibold fs-14" class="one-line-ellipsis"><a href="javascript:void(0)" style="text-transform: capitalize;"><?php echo e($kit->name); ?></a></h4>
                                        <!-- <div class="text-warning fs-14"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div> -->
                                        <div class="ms-auto"> <span class="fs-16 fw-semibold">₹ <?php echo e(number_format($kit->price)); ?> /-</span> </div>
                                        <p class="two-line-ellipsis"><?php echo e($kit->excerpt); ?></p>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-group border br-7 mt-5">
                                <li class="list-group-item border-0"> Sub Total <span class="h6 fw-bold mb-0 float-end">₹ <?php echo e(number_format($kit->price)); ?></span> </li>
                                <?php if($user->buy_package == 'true'): ?>
                                <li class="list-group-item border-0"> Discount % <span class="h6 fw-bold mb-0 float-end">20%</span> </li>
                                <li class="list-group-item border-0"> Discount Price <span class="h6 fw-bold mb-0 float-end">₹ <?php echo e(number_format($kit->price / 100 * 20,2)); ?></span> </li>
                                <?php endif; ?>
                                <li class="list-group-item border-0"> Shipping <span class="h6 fw-bold mb-0 float-end">Free</span> </li>
                                <li class="list-group-item border-0"> Total <span class="h4 fw-bold mb-0 float-end">₹ <?php echo e(number_format($user->buy_package == 'true' ? $kit->price - $kit->price / 100 * 20 : $kit->price ,2)); ?></span> </li>
                            </ul>
                            <input type="hidden" name="txn_id" id="paymentID" />
                            <input type="hidden" name="product_id" value="<?php echo e($kit->id); ?>" />
                            <input type="hidden" name="address_id" class="address_id" />
                            <?php if($user->buy_package == 'true'): ?>
                            <input type="hidden" name="discount" value="<?php echo e($kit->price / 100 * 20); ?>" />
                            <?php else: ?>
                            <input type="hidden" name="discount" value="0" />
                            <?php endif; ?>
                            <input type="hidden" name="subtotal" value="<?php echo e($kit->price); ?>" />
                            <input type="hidden" name="shipping" value="0" />
                            <?php if($user->buy_package == 'true'): ?>
                            <input type="hidden" name="total" value="<?php echo e($kit->price - $kit->price / 100 * 20); ?>" />
                            <?php else: ?>
                            <input type="hidden" name="total" value="<?php echo e($kit->price); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="card-footer text-end">
                            <input type="submit" class="btn btn-primary" value="Place Order">
                        </div>
                        </form>
                    </div>
                </div>
            </div> <!-- ROW-1 CLOSED -->
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script src="<?php echo e(url('https://checkout.razorpay.com/v1/checkout.js')); ?>"></script>

<script>
    $('.address').change(function(e) {
        let value = $(this).val();
        $('.address_id').val(value);

    });
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
        let form = $('#checkoutForm');
        // var photo = $('.photo')[0].files[0];
        // console.log(photo);
        // var formdata = new FormData();
        // formdata.append("photo", photo);
        // console.log(formdata);
        // You can write success code here. If you want to store some data in database.
        $("#paymentDetail").removeAttr('style');
        if (transaction) {
            $('#paymentID').val(transaction.razorpay_payment_id);
        }

        $.ajax({
            method: 'post',
            url: "<?php echo route('user.checkout.store'); ?>",
            data: form.serialize(),
            // enctype: 'multipart/form-data',
            //contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function(r) {
                window.location = "<?php echo e(url('/user/order')); ?>";
                // setTimeout(message(), 100000)
            }
        })
    }

    var options = {
        key: "<?php echo e(env('RAZORPAY_KEY')); ?>",
        amount: "<?php echo e($user->buy_package == 'true' ? ($kit->price - $kit->price / 100 * 20) * 100 : $kit->price * 100); ?>",
        name: "<?php echo e($setting->site_name); ?>",
        description: '',
        image: '<?php echo e(url("storage/logo",$setting->logo)); ?>',
        prefill: {
            "email": "<?php echo e(Auth::guard('user')->user()->email); ?>",
            "contact": "<?php echo e(Auth::guard('user')->user()->mobile); ?>"
        },
        handler: demoSuccessHandler
    }

    window.r = new Razorpay(options);
    $(document).on('submit', '#checkoutForm', function(e) {
        e.preventDefault();
        let address_id = $('.address:checked').val();
        console.log('address_id', address_id);
        if (address_id && address_id != 'undefined') {
            $('.address_message').addClass('d-none');
            $('.address_message').removeClass('d-block');

            let url = `<?php echo route('user.checkout.store'); ?>`;

            $('#checkoutForm').attr('action', url);
            $('#checkoutForm').attr('method', 'POST');
            $('#checkoutForm').attr('id', 'packageFrom');
            $('#packageFrom').submit();
        } else {
            $('.address_message').addClass('d-block');
            $('.address_message').removeClass('d-none');
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.usermaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/user/checkout.blade.php ENDPATH**/ ?>