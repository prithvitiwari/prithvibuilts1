
<?php $__env->startSection('title', 'Blogs'); ?>
<?php $__env->startSection('keywords', 'Blogs Keywords'); ?>
<?php $__env->startSection('description', 'Blogs Description'); ?>
<?php $__env->startSection('contant'); ?>
<div class="main-content hor-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title" style="text-transform: capitalize;">Blogs</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize;">Blogs</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <!-- ROW-1 OPEN -->
            <div class="row mt-5">
                <div class="col-sm-6 col-md-12 col-lg-8 col-xl-8">
                    <div class="row">
                        <?php if($blogs->count()): ?>
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-6 col-md-12 col-lg-6 col-xl-4">
                            <div class="card">
                                <a href="<?php echo e(route('blog.detail',$blog->slug)); ?>"><img class="card-img-top br-tr-7 br-tl-7" style="height: 200px;" src="<?php echo e(url('storage/blog',$blog->image)); ?>" alt=""></a>
                                <div class="card-body d-flex flex-column">
                                    <h3><a href="<?php echo e(route('blog.detail',$blog->slug)); ?>"><?php echo e($blog->name); ?></a></h3>
                                    <div class="text-muted three-line-ellipsis"><?php echo e($blog->excerpt); ?></div>
                                    <!-- <div class="d-flex align-items-center pt-5 mt-auto">
                                        <div class="avatar brround avatar-md me-3 cover-image" data-bs-image-src="<?php echo e(url('assets/images/users/18.jpg')); ?>" style="background: url('<?php echo e(url('assets/images/users/18.jpg')); ?>') center center;"></div>
                                        <div> <a href="profile.html" class="text-default">Megan Peters</a> <small class="d-block text-muted">1 days ago</small> </div>
                                        <div class="ms-auto"> <a href="javascript:void(0)" class="icon d-none d-md-inline-block text-muted"><i class="fe fe-heart me-1 border brround"></i></a> <a href="javascript:void(0)" class="icon d-none d-md-inline-block text-muted"><i class="fa fa-thumbs-o-up border brround"></i></a> </div>
                                    </div> -->
                                </div>
                            </div>
                        </div> <!-- COL-END -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <div class="col-sm-6 col-md-12 col-lg-8 col-xl-8">
                            <div class="card">
                                <div class="card-body text-center">
                                    No records found.
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div> <!-- ROW-END -->
                </div> <!-- COL-END -->
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="input-group"> <input type="text" name="s" class="form-control border-end-0" placeholder="Search ...">
                                    <button class="btn input-group-text bg-transparent border-start-0 text-muted"> <i class="fe fe-search" aria-hidden="true"></i> </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php if($popular_blogs->count()): ?>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Recent Blogs</div>
                        </div>
                        <div class="card-body">
                            <?php $__currentLoopData = $popular_blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="d-flex overflow-visible mb-5">
                                <a href="<?php echo e(route('blog.detail',$pb->slug)); ?>" class="card-aside-column br-5 cover-image" data-bs-image-src="<?php echo e(url('storage/blog',$pb->image)); ?>" style="background: url('<?php echo e(url('storage/blog',$pb->image)); ?>') center center;"></a>
                                <div class="ps-3 flex-column">
                                    <span class="badge bg-danger me-1 mb-1 mt-1"><?php echo e($pb->category->name); ?></span>
                                    <h4><a href="<?php echo e(route('blog.detail',$pb->slug)); ?>"><?php echo e($pb->name); ?></a></h4>
                                    <div class="text-muted three-line-ellipsis"><?php echo e($pb->excerpt); ?></div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <?php endif; ?>
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
                                        <h5><span class="fw-bold">₹ <?php echo e(number_format($kit->price)); ?> /- </span><span class="ms-4" style="text-decoration: line-through;">₹ <?php echo e(number_format($kit->sale_price)); ?> /- </span> </h5>
                                    
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <!-- <div class="card">
                        <div class="card-body">
                            <h4 class="fw-bold">NEVER MISS A POST !</h4>
                            <p>Signup for free to get the latest posts.</p><input class="form-control" placeholder="Enter your name *" type="text"> <a href="#" class="btn btn-danger mt-5">Subscribe</a>
                        </div>
                    </div> -->
                </div>
            </div> <!-- ROW-1 CLOSED -->
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/blog.blade.php ENDPATH**/ ?>