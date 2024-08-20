
<?php $__env->startSection('title', 'Contact Us'); ?>
<?php $__env->startSection('keywords', 'Contact Us Keywords'); ?>
<?php $__env->startSection('description', 'Contact Us Description'); ?>
<?php $__env->startSection('contant'); ?>
<div class="main-content hor-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title" style="text-transform: capitalize;">Contact Us</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize;">Contact Us</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row mt-5">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Enquery</h3>
                        </div>
                        <?php echo e(Form::open(['url' => route('enquery'), 'method'=>'POST', 'files' => true, 'class' => 'needs-validation','novalidate'])); ?>

                        <div class="card-body">
                            <!-- <h5>If Your Query Not Clarifified Post Your Question, My Customer Support will help You</h5> -->
                            <?php echo e(csrf_field()); ?>


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
                            <div class="pt-4">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name1" name="name" placeholder="Name" required>
                                            <div class="invalid-feedback">Please enter name.</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                            <div class="invalid-feedback">Please enter email.</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
                                            <div class="invalid-feedback">Please enter mobile.</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                            <div class="invalid-feedback">Please enter subject.</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                            <div class="invalid-feedback">Please enter message.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Contact Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-2 text-center">
                                    <div><i class="fa fa-envelope fs-20"></i></div>
                                </div>
                                <div class="col-10">
                                    <a href="mailto:<?php echo e($setting->email); ?>"><?php echo e($setting->email); ?></a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2 text-center">
                                    <div><i class="fa fa-phone fs-20"></i></div>
                                </div>
                                <div class="col-10">
                                    <a href="tel:<?php echo e($setting->mobile); ?>"><?php echo e($setting->mobile); ?></a>
                                </div>
                            </div>
                            <div class="row mb-5 pb-4">
                                <div class="col-2 text-center">
                                    <div><i class="fa fa-map-marker fs-20"></i></div>
                                </div>
                                <div class="col-10">
                                    <?php echo e($setting->address); ?>

                                </div>
                            </div>
                            <div>
                                <?php if($setting->map): ?>
                                <iframe src="<?php echo e($setting->map); ?>" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- ROW-1 CLOSED -->
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/contact.blade.php ENDPATH**/ ?>