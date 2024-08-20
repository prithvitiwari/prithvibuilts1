<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Product Details</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.product.index')); ?>">Product</a></li>
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
                                        <h3 class="mb-3" style="text-transform: capitalize;"><?php echo e($product->name); ?></h3>
                                        <!-- <p class="text-muted float-start me-3"> <span class="fa fa-star text-warning"></span> <span class="fa fa-star text-warning"></span> <span class="fa fa-star text-warning"></span> <span class="fa fa-star-half-o text-warning"></span> <span class="fa fa-star-o text-warning"></span> </p>
                                        <p class="text-muted mb-4">( 40 Customers Reviews) </p> -->
                                        <h4 class="mt-4"><b> </b></h4>
                                        <p><?php echo e($product->excerpt); ?></p>
                                        <h3 class="mb-4">
                                            <span class="me-2 fw-bold fs-25">₹ <?php echo e($product->price); ?> /- </span>
                                            <!-- <span><del class="fs-18 text-muted">$599</del></span> -->
                                        </h3>
                                        <hr>
                                        <!-- <div class="btn-list mt-4">
                                                    <a href="<?php echo e(route('user.checkout',$product->slug)); ?>" class="btn ripple btn-primary me-2"><i class="fe fe-shopping-cart"> </i> Buy Now</a>
                                                </div> -->
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
                                <div class="panel-body tabs-menu-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <h4 class="mb-5 mt-3 fw-bold">Description :</h4>
                                            <p class="mb-3 fs-15">
                                                <?php echo $product->description; ?>

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
</div><?php /**PATH /home2/vijaycku/public_html/resources/views/backend/inc/product/view.blade.php ENDPATH**/ ?>