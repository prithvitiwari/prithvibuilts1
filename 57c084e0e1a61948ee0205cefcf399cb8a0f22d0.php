
<?php $__env->startSection('title', $product->name); ?>
<?php $__env->startSection('keywords', $product->name); ?>
<?php $__env->startSection('description', $product->name); ?>
<?php $__env->startSection('contant'); ?>
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
                <h1 class="page-title" style="text-transform: capitalize;"><?php echo e($product->name); ?></h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="<?php echo e(route('product')); ?>">Product</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize;"><?php echo e($product->name); ?></li>
                    </ol>
                </div>
            </div> <!-- PAGE-HEADER END -->
            <!-- ROW-1 OPEN -->
            <div class="row mt-5">
                <div class="col-xl-9 col-lg-8">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row row-sm">
                                        <div class="col-xl-4 col-lg-12 col-md-12">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="product-carousel">
                                                        <div id="Slider" class="carousel slide border" data-bs-ride="false">
                                                            <div class="carousel-inner">
                                                                <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="carousel-item  <?php if($key < 1): ?> active <?php endif; ?> p-0">
                                                                    <img src="<?php echo e(url('storage/product',$img->image)); ?>" alt="img" class="img-fluid mx-auto d-block">
                                                                    <!-- <div class="text-center mt-5 mb-5 btn-list"> </div> -->
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
                                                <h3 class="mb-3 fw-bold" style="text-transform: capitalize;"><?php echo e($product->name); ?></h3>
                                                <!-- <p class="text-muted float-start me-3"> <span class="fa fa-star text-warning"></span> <span class="fa fa-star text-warning"></span> <span class="fa fa-star text-warning"></span> <span class="fa fa-star-half-o text-warning"></span> <span class="fa fa-star-o text-warning"></span> </p>
                                        <p class="text-muted mb-4">( 40 Customers Reviews) </p> -->
                                                <h4 class="mt-4"><b> </b></h4>
                                                <p><?php echo e($product->excerpt); ?></p>
                                                <h3 class="mb-4">
                                                    <span class="me-2 fs-25">₹ <?php echo e(number_format($product->price)); ?> /- </span>
                                                    
                                                    <!-- <span><del class="fs-18 text-muted">$599</del></span> -->
                                                </h3>
                                                <hr>
                                                <?php if(auth()->guard('user')->user() && auth()->guard('user')->user()->buy_package == 'true'): ?>
                                                <div class="btn-list mt-4">
                                                    <!-- <a href="<?php echo e(route('user.product.checkout',$product->slug)); ?>" class="btn ripple btn-primary me-2"><i class="fe fe-shopping-cart"> </i> Buy Now</a> -->
                                                    <a href="javascript:void(0)" data-url="<?php echo e(route('user.cart.store',$product->id)); ?>" class="btn ripple btn-primary me-2 add_cart"><i class="fe fe-shopping-cart"></i> Buy Now</a>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <div class="card productdesc">
                                <div class="card-body">
                                    <h4 class="mb-5 mt-3 fw-bold">Description :</h4>
                                    <p class="mb-3 fs-15">
                                        <?php echo $product->description; ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ROW-1 CLOSED -->
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="col-md-12 col-lg-12">
                        <?php if($popular_kits->count()): ?>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Top Packages</div>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <?php $__currentLoopData = $popular_kits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $kit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="d-flex overflow-visible <?php if($key>1): ?> mt-5 <?php endif; ?>"> <img class="avatar bradius avatar-xl me-4 p-2 bg-white border" src="<?php echo e(url('storage/kit',$kit->image)); ?>" alt="avatar-img">
                                        <div class="media-body valign-middle oneline-ellipsis"> <a href="<?php echo e(route('kit.detail',$kit->slug)); ?>" class="fw-semibold text-dark" style="text-transform: capitalize;"><?php echo e($kit->name); ?></a>
                                            <p class="p-0 m-0 oneline-ellipsis"><?php echo e($kit->excerpt); ?></p>
                                            <!-- <div class="mb-1 text-warning"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div> -->
                                            <!-- <h5 class="fw-bold">₹<?php echo e($kit->price); ?> /-</h5> -->
                                            <h5><span class="fw-bold">₹ <?php echo e(number_format($kit->price)); ?> /- </span><span class="ms-4" style="text-decoration: line-through;">₹ <?php echo e(number_format($kit->sale_price)); ?> /- </span> </h5>

                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/productdetail.blade.php ENDPATH**/ ?>