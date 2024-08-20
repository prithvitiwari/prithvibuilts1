<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>
<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Add Product</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.product.index')); ?>">Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <!-- ROW OPEN -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Product</h3>
                        </div>
                        <div class="card-body">
                            <?php echo e(Form::open(['url' => route('admin.product.store'), 'method'=>'POST', 'files' => true, 'class' => 'needs-validation','novalidate'])); ?>

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
                            <div class="form-row">
                                <div class="col-xl-12 mb-3">
                                    <?php echo e(Form::label('name', 'Name')); ?>

                                    <?php echo e(Form::text('name', '', ['class' => 'form-control', 'placeholder'=>'Name','required'=>'required'])); ?>

                                    <div class="invalid-feedback">Please enter name.</div>
                                </div>
                                <div class="col-xl-4 mb-3">
                                    <?php echo e(Form::label('slug', 'Slug')); ?>

                                    <?php echo e(Form::text('slug', '', ['class' => 'form-control', 'placeholder'=>'Slug'])); ?>

                                    <div class="invalid-feedback">Please enter slug.</div>
                                </div>
                                <div class="col-xl-4 mb-3">
                                    <?php echo e(Form::label('price', 'Price')); ?>

                                    <?php echo e(Form::number('price', '', ['class' => 'form-control', 'placeholder'=>'Price','required'=>'required'])); ?>

                                    <div class="invalid-feedback">Please enter price.</div>
                                </div>
                                <div class="col-xl-4 mb-3">
                                    <?php echo e(Form::label('image', 'Image')); ?>

                                    <?php echo e(Form::file('image',['class'=>'form-control','required'=>'required'])); ?>

                                    <div class="invalid-feedback">Please choose image.</div>
                                </div>

                                <div class="col-xl-12 mb-3">
                                    <?php echo e(Form::label('excerpt', 'Short Description')); ?>

                                    <?php echo e(Form::textarea('excerpt', '', ['class' => 'form-control', 'placeholder'=>'Short Description','rows'=>'3'])); ?>

                                    <div class="invalid-feedback">Please enter short description.</div>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <?php echo e(Form::label('description', 'Description')); ?>

                                    <?php echo e(Form::textarea('description', '', ['class' => 'form-control tinymce-editor', 'placeholder'=>'Description','rows'=>'6'])); ?>

                                    <div class="invalid-feedback">Please enter description.</div>
                                </div>
                                <!-- <div class="col-xl-12 mb-3">
                                    <?php echo e(Form::label('description', 'Upload Images')); ?>

                                    <input id="demo" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png" multiple="" class="ff_fileupload_hidden">
                                </div> -->
                            </div>
                            <button class="btn btn-primary mt-5" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- ROW CLOSED -->
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/backend/inc/product/add.blade.php ENDPATH**/ ?>