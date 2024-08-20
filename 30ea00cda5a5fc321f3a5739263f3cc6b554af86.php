
<?php $__env->startSection('title','Products'); ?>
<?php $__env->startSection('keywords','Products Keywords'); ?>
<?php $__env->startSection('description','Products Description'); ?>
<?php $__env->startSection('contant'); ?>

<div class="main-content hor-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Product</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row row-cards mt-5">
                <div class="col-xl-3 col-lg-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="input-group d-flex w-100 float-start">
                                            <input type="text" name="s" class="form-control border-end-0 my-2" placeholder="Search ...">
                                            <button class="btn input-group-text bg-transparent border-start-0 text-muted my-2">
                                                <i class="fe fe-search text-muted" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php if($popular_kits->count()): ?>
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Top Packages</div>
                                </div>
                                <div class="card-body" style="min-height: 40vh;">
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
                </div> <!-- COL-END -->
                <div class="col-xl-9 col-lg-8">
                    <div class="row">
                        <?php if($lists->count()): ?>
                        <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 col-xl-4">
                            <div class="card">
                                <div class="product-grid6">
                                    <div class="product-image6 p-5">
                                        <a href="<?php echo e(route('product.detail',$list->slug)); ?>" class="bg-light">
                                            <div id="carousel-indicators4" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <?php $__currentLoopData = $list->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="carousel-item <?php if($key < 1): ?> active <?php endif; ?>">
                                                        <img class="d-block w-100 br-5" alt="" src="<?php echo e(url('storage/product',$img->image)); ?>" data-bs-holder-rendered="true">
                                                    </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="product-content text-center">
                                            <h1 class="title fw-bold fs-20"><a href="<?php echo e(route('product.detail',$list->slug)); ?>"><?php echo e($list->name); ?></a></h1>
                                            <!-- <div class="mb-2 text-warning"> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star-half-o text-warning"></i> <i class="fa fa-star-o text-warning"></i> </div> -->
                                            <!-- <p class="p-0 m-0 three-line-ellipsis"><?php echo e($list->excerpt); ?></p> -->
                                            <div class="price">₹<?php echo e(number_format($list->price)); ?> /-
                                                <!-- <span class="ms-4">$799</span>  -->
                                            </div>
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
                        <div class="mt-3">
                            <?php if(method_exists($lists, 'links')): ?>
                            <?php echo $__env->make('frontend.templete.pagination', ['paginator' => $lists,'link_limit'=>4], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        </div>
                        <?php else: ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">No records found.</div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div> <!-- COL-END -->
            </div> <!-- ROW-1 CLOSED -->
        </div> <!-- ROW-1 END -->
    </div> <!-- CONTAINER CLOSED -->
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/product.blade.php ENDPATH**/ ?>