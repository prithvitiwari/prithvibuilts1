
<?php $__env->startSection('title', 'faqs'); ?>
<?php $__env->startSection('keywords', 'faqs Keywords'); ?>
<?php $__env->startSection('description', 'faqs Description'); ?>
<?php $__env->startSection('contant'); ?>
<div class="main-content hor-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title" style="text-transform: capitalize;">Faqs</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize;">Faqs</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <!-- ROW-1 OPEN -->
            <div class="mt-5">
                <div class="row">
                    <?php
                    $sn = $lists->firstItem();
                    ?>
                    <?php if($lists->count()): ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="accordion my-3" id="accordionExample">
                                <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?php echo e($faq->id); ?>">
                                        <button class="accordion-button <?php if($key > 1): ?> collapsed <?php endif; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($faq->id); ?>" aria-expanded="<?php echo e($key < 1 ? true : false); ?>" aria-controls="collapse<?php echo e($faq->id); ?>"> <?php echo e($faq->name); ?> </button>
                                    </h2>
                                    <div id="collapse<?php echo e($faq->id); ?>" class="accordion-collapse collapse <?php if($key < 1): ?> show <?php endif; ?>" aria-labelledby="heading<?php echo e($faq->id); ?>" data-bs-parent="#accordionExample">
                                        <div class="accordion-body"> <?php echo $faq->description; ?> </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
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
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/faqs.blade.php ENDPATH**/ ?>