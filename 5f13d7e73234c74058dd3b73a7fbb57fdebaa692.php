
<?php $__env->startSection('title', 'Gallery'); ?>
<?php $__env->startSection('keywords', 'Gallery Keywords'); ?>
<?php $__env->startSection('description', 'Gallery Description'); ?>
<?php $__env->startSection('contant'); ?>
<div class="main-content hor-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title" style="text-transform: capitalize;">Gallery</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize;">Gallery</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <!-- ROW-1 OPEN -->
            <div class=" mt-5">
                <div class="masonry row">
                    <?php
                    $sn = $lists->firstItem();
                    ?>
                    <?php if($lists->count()): ?>
                    <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-5">
                        <div class="brick">
                            <a href="<?php echo e(url('storage/gallery',$list->image)); ?>" class="js-img-viewer" data-caption="<?php echo e($list->name); ?>" data-id="<?php echo e($sn + $key); ?>" data-group="nogroup" data-index="0">
                                <img src="<?php echo e(url('storage/gallery',$list->image)); ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div style="text-align: center;">No records found.</div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <!-- ROW-1 CLOSED -->
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/gallery.blade.php ENDPATH**/ ?>