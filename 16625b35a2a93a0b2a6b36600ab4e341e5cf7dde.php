
<?php $__env->startSection('title', 'Cart Checkout'); ?>
<?php $__env->startSection('keywords', 'Cart Checkout Keywords'); ?>
<?php $__env->startSection('description', 'Cart Checkout Description'); ?>
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
                    <div class="card cart">
                        <div class="card-header">
                            <h3 class="card-title">Your Order</h3>
                        </div>
                        <?php echo e(Form::open(['id'=>'productCheckoutForm'])); ?>

                        <?php
                        $cart_ids = [];
                        foreach($carts as $cart){

                        $val = [
                        'id'=>$cart->id,
                        'quantity'=>$cart->quantity
                        ];
                        $cart_ids[] = $val;
                        }
                        $cart_ids = json_encode($cart_ids);
                        ?>
                        <div class="card-body">
                            <ul class="list-group border br-7 mt-5">
                                <li class="list-group-item border-0"> Sub Total <span class="h6 fw-bold mb-0 float-end">₹ <span class="subtotal_view"><?php echo e(number_format($total_price,2)); ?></span></span> </li>
                                <li class="list-group-item border-0"> Discount % <span class="h6 fw-bold mb-0 float-end">20%</span> </li>
                                <li class="list-group-item border-0"> Discount Price <span class="h6 fw-bold mb-0 float-end">₹ <span class="discount_price_view"><?php echo e(number_format($total_price / 100 * 20,2)); ?></span></span> </li>
                                <li class="list-group-item border-0"> Shipping <span class="h6 fw-bold mb-0 float-end">Free</span> </li>
                                <li class="list-group-item border-0"> Total <span class="h4 fw-bold mb-0 float-end">₹ <span class="total_view"><?php echo e(number_format($user->buy_package == 'true' ? $total_price - $total_price / 100 * 20 : $total_price ,2)); ?></span></span> </li>
                            </ul>
                            <input type="hidden" name="cart" value="<?php echo e($cart_ids); ?>" />
                            <input type="hidden" name="txn_id" id="paymentID" />
                            <input type="hidden" name="product_id" value="" />
                            <input type="hidden" name="address_id" class="address_id" />
                            <input type="hidden" name="quantity" value="1" />
                            <input type="hidden" name="discount" value="<?php echo e($total_price / 100 * 20); ?>" />
                            <input type="hidden" name="subtotal" value="<?php echo e($total_price); ?>" />
                            <input type="hidden" name="shipping" value="0" />
                            <input type="hidden" name="total" value="<?php echo e($total_price - $total_price / 100 * 20); ?>" />

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
<script>

</script>

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
        let form = $('#productCheckoutForm');
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
            url: "<?php echo route('user.product.checkout.store'); ?>",
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


    // window.r = new Razorpay(options);
    $(document).on('submit', '#productCheckoutForm', function(e) {
        let amount = $('input[name=total]').val();
        // options.amount = parseInt(amount);
        e.preventDefault();
        let address_id = $('.address:checked').val();
        console.log('address_id', address_id);
        if (address_id && address_id != 'undefined') {
            $('.address_message').addClass('d-none');
            $('.address_message').removeClass('d-block');

            let url = `<?php echo route('user.cart.checkout.store'); ?>`;

            $('#productCheckoutForm').attr('action', url);
            $('#productCheckoutForm').attr('method', 'POST');
            $('#productCheckoutForm').attr('id', 'productFrom');
            $('#productFrom').submit();
            // var win = window.open(url, "Pay U", "height=1000,width=1000");
            // win.focus();

        } else {
            $('.address_message').addClass('d-block');
            $('.address_message').removeClass('d-none');
        }
    });
    // QUANTITY CART INCREASE AND DECREASE

    $(function() {
        'use strict'

        $('.counter-plus').on('click', function() {
            var price = "<?php echo e($total_price); ?>";
            var $qty = $(this).closest('div').find('.qty');
            var currentVal = parseInt($qty.val());
            if (!isNaN(currentVal)) {
                var qty = currentVal + 1;
                $qty.val(qty);
                $('.quantity_view').html(qty);
                $('input[name=quantity]').val(qty);
                var total_price = qty * price;
                var discount_price = total_price / 100 * 20;
                var total = total_price - discount_price;
                $('.subtotal_view').html(total_price.toFixed(2));
                $('input[name=subtotal]').val(total_price);
                $('.discount_price_view').html(discount_price.toFixed(2));
                $('input[name=discount]').val(discount_price);
                $('.total_view').html(total.toFixed(2));
                $('input[name=total]').val(total);
            }
        });
        $('.counter-minus').on('click', function() {
            var price = "<?php echo e($total_price); ?>";
            var $qty = $(this).closest('div').find('.qty');
            var currentVal = parseInt($qty.val());
            if (!isNaN(currentVal) && currentVal > 1) {
                var qty = currentVal - 1;
                $qty.val(qty);
                $('.quantity_view').html(qty);
                $('input[name=quantity]').val(qty);
                var total_price = qty * price;
                var discount_price = total_price / 100 * 20;
                var total = total_price - discount_price;
                $('.subtotal_view').html(total_price.toFixed(2));
                $('input[name=subtotal]').val(total_price);
                $('.discount_price_view').html(discount_price.toFixed(2));
                $('input[name=discount]').val(discount_price);
                $('.total_view').html(total.toFixed(2));
                $('input[name=total]').val(total);
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.usermaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/user/cart_checkout.blade.php ENDPATH**/ ?>