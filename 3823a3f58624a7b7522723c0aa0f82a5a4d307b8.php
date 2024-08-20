
<?php $__env->startSection('title', $product->name); ?>
<?php $__env->startSection('keywords', $product->name); ?>
<?php $__env->startSection('description', $product->name); ?>
<?php $__env->startSection('contant'); ?>
<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<div class="main-content hor-content mt-0">
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
                <h1 class="page-title">Product Details</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('user.product')); ?>">Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                    </ol>
                </div>
            </div> <!-- PAGE-HEADER END -->
            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row row-sm">
                                <div class="col-xl-5 col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="product-carousel">
                                                <div id="Slider" class="carousel slide border" data-bs-ride="false">
                                                    <div class="carousel-inner">
                                                        <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="carousel-item  <?php if($key < 1): ?> active <?php endif; ?>">
                                                            <img src="<?php echo e(url('storage/product',$img->image)); ?>" alt="img" class="img-fluid mx-auto d-block">
                                                            <div class="text-center mt-5 mb-5 btn-list"> </div>
                                                        </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix carousel-slider">
                                                <div id="thumbcarousel" class="carousel slide" data-bs-interval="t">
                                                    <div class="carousel-inner">
                                                        <ul class="carousel-item active">
                                                            <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li data-bs-target="#Slider" data-bs-slide-to="<?php echo e($key); ?>" class="thumb <?php if($key < 1): ?> active <?php endif; ?> m-2"><img src="<?php echo e(url('storage/product',$img->image)); ?>" alt="img"></li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0">
                                    <div class="mt-2 mb-4">
                                        <h3 class="mb-3" style="text-transform: capitalize;"><?php echo e($product->name); ?></h3>
                                        <!-- <p class="text-muted float-start me-3"> <span class="fa fa-star text-warning"></span> <span class="fa fa-star text-warning"></span> <span class="fa fa-star text-warning"></span> <span class="fa fa-star-half-o text-warning"></span> <span class="fa fa-star-o text-warning"></span> </p>
                                        <p class="text-muted mb-4">( 40 Customers Reviews) </p> -->
                                        <h4 class="mt-4"><b> </b></h4>
                                        <p><?php echo e($product->excerpt); ?></p>
                                        <h3 class="mb-4">
                                            <span class="me-2 fw-bold fs-25">₹ <?php echo e(number_format($product->price)); ?> /- </span>
                                            <!-- <span><del class="fs-18 text-muted">$599</del></span> -->
                                        </h3>
                                        <!-- <div class=" mt-4 mb-5"><span class="fw-bold me-2">Offer :</span><span class="fw-bold text-primary">15% Cashback </span>by using icici bank credit card.<small class="text-muted">Terms and Conditions Applies!</small></div>
                                        <div class=" mt-4 mb-5"><span class="fw-bold me-2">Availability :</span><span class="fw-bold text-success">In-stock</span></div>
                                        <div class="colors d-flex me-3 mt-4 mb-5"> <span class="mt-2 fw-bold">Colors:</span>
                                            <div class="row gutters-xs ms-4">
                                                <div class="col-3"> <label class="colorinput"> <input name="color" type="radio" value="azure" class="colorinput-input" checked=""> <span class="colorinput-color bg-danger rounded-10"></span> </label> </div>
                                                <div class="col-3"> <label class="colorinput"> <input name="color" type="radio" value="indigo" class="colorinput-input"> <span class="colorinput-color bg-dark rounded-10"></span> </label> </div>
                                                <div class="col-3"> <label class="colorinput"> <input name="color" type="radio" value="purple" class="colorinput-input"> <span class="colorinput-color bg-info rounded-10"></span> </label> </div>
                                                <div class="col-3"> <label class="colorinput"> <input name="color" type="radio" value="pink" class="colorinput-input"> <span class="colorinput-color bg-success rounded-10"></span> </label> </div>
                                            </div>
                                        </div>
                                        <div class="row row-sm">
                                            <div class="col">
                                                <div class="mb-2 me-2 sizes"> <span class="fw-bold me-4">Quantity:</span>
                                                    <div class="input-group input-indec input-indec1 w-20 w-sm-50 mt-3"> <span class="input-group-btn"> <button type="button" class="minus btn btn-white btn-number btn-icon br-tl-7 br-tr-7 br-bl-7 br-br-7 "> <i class="fa fa-minus text-muted"></i> </button> </span> <input type="text" name="quantity" class="form-control text-center qty" value="1"> <span class="input-group-btn"> <button type="button" class="quantity-right-plus btn btn-white btn-number btn-icon br-tl-7 br-tr-7 br-bl-7 br-br-7 add"> <i class="fa fa-plus text-muted"></i> </button> </span> </div>
                                                </div>
                                            </div>
                                        </div>-->
                                        <hr>
                                        <div class="btn-list mt-4">
                                            <!-- <a href="<?php echo e(route('user.checkout',$product->slug)); ?>" class="btn ripple btn-primary me-2"><i class="fe fe-shopping-cart"> </i> Buy Now</a> -->
                                            <!-- <a href="checkout.html" class="btn ripple btn-secondary"><i class="fe fe-credit-card"> </i> Buy Now</a>  -->
                                            <a href="javascript:void(0)" data-url="<?php echo e(route('user.cart.store',$product->id)); ?>" class="btn ripple btn-primary me-2 add_cart"><i class="fe fe-shopping-cart"></i> Buy Now</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="card productdesc">
                        <div class="card-body">
                            <div class="panel panel-primary">
                                <!-- <div class=" tab-menu-heading">
                                    <div class="tabs-menu1">
                                        Tabs
                                        <ul class="nav panel-tabs">
                                            <li><a href="#tab5" class="active" data-bs-toggle="tab">Specifications</a></li>
                                            <li><a href="#tab6" data-bs-toggle="tab" class="">Dimensions</a></li>
                                            <li><a href="#tab7" data-bs-toggle="tab" class="">Features</a></li>
                                        </ul>
                                    </div>
                                </div> -->
                                <div class="panel-body tabs-menu-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <h4 class="mb-5 mt-3 fw-bold">Description :</h4>
                                            <p class="mb-3 fs-15">
                                                <?php echo e($product->description); ?>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- ROW-1 CLOSED -->
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.usermaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/user/productdetail.blade.php ENDPATH**/ ?>