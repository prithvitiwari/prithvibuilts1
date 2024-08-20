
<?php $__env->startSection('title', $kit->name); ?>
<?php $__env->startSection('keywords', $kit->name); ?>
<?php $__env->startSection('description', $kit->name); ?>
<?php $__env->startSection('contant'); ?>
<div class="main-content hor-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title" style="text-transform: capitalize;"><?php echo e($kit->name); ?></h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('kit')); ?>">Package</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize;"><?php echo e($kit->name); ?></li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
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
                                                    <img src="<?php echo e(url('storage/kit',$kit->image)); ?>" alt="img" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="details col-xl-8 col-lg-12 col-md-12 mt-4 mt-xl-0">
                                            <div class="mt-2 mb-4">
                                                <h3 class="mb-3" style="text-transform: capitalize;"><?php echo e($kit->name); ?></h3>
                                                <!-- <p class="text-muted float-start me-3"> <span class="fa fa-star text-warning"></span> <span class="fa fa-star text-warning"></span> <span class="fa fa-star text-warning"></span> <span class="fa fa-star-half-o text-warning"></span> <span class="fa fa-star-o text-warning"></span> </p>
                                        <p class="text-muted mb-4">( 40 Customers Reviews) </p> -->
                                                <h4 class="mt-4"><b></b></h4>
                                                <h3 class="mb-4">
                                                    <div class="price me-2 "><span class="fw-bold  fs-25">₹ <?php echo e(number_format($kit->price)); ?> /- </span>
                                                        <span class="ms-4" style="text-decoration: line-through;">₹ <?php echo e(number_format($kit->sale_price)); ?> /- </span>
                                                    </div>
                                                    <div class="mt-2">(<?php echo e(number_format(($kit->sale_price-$kit->price)/$kit->sale_price*100)); ?>% off*)</div>

                                                </h3>
                                                <hr>
                                                <div class="btn-list mt-4">
                                                    <?php if(auth()->guard('user')->user()): ?>
                                                    <a href="<?php echo e(route('user.checkout',$kit->slug)); ?>" class="btn btn-primary mb-1"><i class="fe fe-shopping-cart me-2"></i>Buy Now</a>
                                                    <?php else: ?>
                                                    <!-- <a href="<?php echo e(route('kit.detail',$kit->slug)); ?>" class="btn btn-primary mb-1"><i class="fe fe-eye me-2"></i>View Detail</a> -->
                                                    <?php endif; ?>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-xl-12 pt-5">
                                            <!-- <h3 class="mt-5">Description: </h3> -->
                                            <p style="line-height:30px; font-size:16px;"><?php echo $kit->description; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <h4 class="fw-bold">Products</h4>
                            <div class="row">
                                <?php $__currentLoopData = $kit->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kit_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-6 col-xl-4">
                                    <div class="card">
                                        <div class="product-grid6">
                                            <div class="product-image6 p-5">
                                                <a href="<?php echo e(route('product.detail',$kit_product->product->slug)); ?>" class="bg-light">
                                                    <div id="carousel-indicators4" class="carousel slide" data-bs-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <?php $__currentLoopData = $kit_product->product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="carousel-item <?php if($key < 1): ?> active <?php endif; ?>">
                                                                <img class="d-block w-100 br-5" alt="" src="<?php echo e(url('storage/product',$img->image)); ?>" data-bs-holder-rendered="true">
                                                            </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <!-- <div class="carousel-item active"> <img class="d-block w-100 br-5" alt="" src="<?php echo e(url('storage/kit',$kit->image)); ?>" data-bs-holder-rendered="true"> </div> -->
                                                        </div>
                                                    </div>
                                                    <!-- <img class="img-fluid br-7 w-100" src="<?php echo e(url('assets/images/pngs/4.jpg')); ?>" alt="img"> -->
                                                </a>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="product-content text-center">
                                                    <h1 class="title fw-bold fs-17"><a href="<?php echo e(route('product.detail',$kit_product->product->slug)); ?>"><?php echo e($kit_product->product->name); ?></a></h1>
                                                    <!-- <div class="mb-2 text-warning"> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star-half-o text-warning"></i> <i class="fa fa-star-o text-warning"></i> </div> -->
                                                    <!-- <p class="p-0 m-0 three-line-ellipsis"><?php echo e($kit_product->product->excerpt); ?></p> -->
                                                   
                                                    <span style="font-size:16px !important"><i>₹</i></span> <span class="price" style="font-size:16px !important; font-weight:400;"> <?php echo e(number_format($kit_product->product->price)); ?> /-</span>
                                                </div>
                                            </div>
                                            <!-- <div class="card-footer text-center">
                                                <a href="#" class="btn btn-primary mb-1"><i class="fe fe-shopping-cart me-2"></i>Buy Now</a>
                                                <a href="#" class="btn btn-outline-primary mb-1"><i class="fe fe-heart me-2 wishlist-icon"></i>Add to wishlist</a> 
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <div class="card-body" style="min-height: 70vh;">
                                <div class="">
                                    <?php $__currentLoopData = $popular_kits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $kit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="d-flex overflow-visible <?php if($key>1): ?> mt-5 <?php endif; ?>"> <img class="avatar bradius avatar-xl me-4 p-2 bg-white border" src="<?php echo e(url('storage/kit',$kit->image)); ?>" alt="avatar-img">
                                        <div class="media-body valign-middle oneline-ellipsis"> <a href="<?php echo e(route('kit.detail',$kit->slug)); ?>" class="fw-semibold text-dark" style="text-transform: capitalize;"><?php echo e($kit->name); ?></a>
                                            <p class="p-0 m-0 oneline-ellipsis"><?php echo e($kit->excerpt); ?></p>
                                            <!-- <div class="mb-1 text-warning"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div> -->
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
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/kitdetail.blade.php ENDPATH**/ ?>