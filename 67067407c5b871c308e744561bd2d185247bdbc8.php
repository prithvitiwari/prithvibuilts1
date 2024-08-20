<?php $__env->startSection('style'); ?>
<link href="<?php echo e(url('assets/plugins/multipleselect/multiple-select.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Add Package</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.kit.index')); ?>">Package</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Package</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <!-- ROW OPEN -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Package</h3>
                        </div>
                        <div class="card-body">
                            <?php echo e(Form::open(['url' => route('admin.kit.store'), 'method'=>'POST', 'files' => true, 'class' => 'needs-validation','novalidate'])); ?>

                            <!-- <form method="post" action="<?php echo e(route('admin.kit.store')); ?>" files="true" class="needs-validation" novalidate=""> -->
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
                                <div class="col-xl-6 mb-3">
                                    <?php echo e(Form::label('name', 'Name')); ?>

                                    <?php echo e(Form::text('name', '', ['class' => 'form-control', 'placeholder'=>'Name','required'=>'required'])); ?>

                                    <div class="invalid-feedback">Please enter name.</div>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <?php echo e(Form::label('slug', 'Slug')); ?>

                                    <?php echo e(Form::text('slug', '', ['class' => 'form-control', 'placeholder'=>'Slug'])); ?>

                                    <div class="invalid-feedback">Please enter slug.</div>
                                </div>
                                <div class="col-xl-2 mb-3">
                                    <?php echo e(Form::label('price', 'Price')); ?>

                                    <?php echo e(Form::number('price', '', ['class' => 'form-control', 'placeholder'=>'Price','required'=>'required','min'=>'2999','max'=>'2999'])); ?>

                                    <div class="invalid-feedback">Please enter price equal to ₹2,999.</div>
                                </div>
                                <div class="col-xl-2 mb-3">
                                    <?php echo e(Form::label('sale_price', 'MRP')); ?>

                                    <?php echo e(Form::number('sale_price', '', ['class' => 'form-control', 'placeholder'=>'MRP','required'=>'required','min'=>'2999','style'=>'pointer-events: none; background-color: #ccc;'])); ?>

                                    <div class="invalid-feedback">Please select product and selected products price min. ₹2,999.</div>
                                </div>
                                <div class="col-xl-3 mb-3">
                                    <?php echo e(Form::label('image', 'Image')); ?>

                                    <?php echo e(Form::file('image',['class'=>'form-control','required'=>'required'])); ?>

                                    <div class="invalid-feedback">Please choose image.</div>
                                </div>
                                <div class="col-xl-5 mb-3">
                                    <label for="validationCustom05">Products</label>
                                    <select multiple="multiple" name="products[]" class="multi-select select-product" style="display: none;" data-url="<?php echo e(route('admin.get_products_price')); ?>" id="validationCustom05" required>
                                        <option selected="" disabled="" value="">Select Product</option>
                                        <?php $__currentLoopData = $productArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($key); ?>"><?php echo e($u); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <div class="invalid-feedback">Please select product.</div>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <?php echo e(Form::label('excerpt', 'Short Description')); ?>

                                    <?php echo e(Form::textarea('excerpt', '', ['class' => 'form-control', 'placeholder'=>'Short Description','rows'=>'4'])); ?>

                                    <div class="invalid-feedback">Please enter short description.</div>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <?php echo e(Form::label('description', 'Description')); ?>

                                    <?php echo e(Form::textarea('description', '', ['class' => 'form-control  tinymce-editor', 'placeholder'=>'Description','rows'=>'4'])); ?>

                                    <div class="invalid-feedback">Please enter description.</div>
                                </div>
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
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
        }
    });
    $('.select-product').on('change', function() {
        // console.log('dfkj');
        let url = $(this).data('url');
        let data = $(this).val();
        // console.log('data', data);
        $.ajax({
            url: url,
            method: "POST",
            data: {
                'products': data,
            },
            success: function(res) {
                console.log('res', res);
                $('input[name=sale_price]').val(res.price);
            },
        });
    });
</script>

<!-- Edit Table -->
<script src="<?php echo e(url('assets/plugins/multipleselect/multiple-select.js')); ?>"></script>
<script src="<?php echo e(url('assets/plugins/multipleselect/multi-select.js')); ?>"></script>
<?php $__env->stopSection(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/backend/inc/kit/add.blade.php ENDPATH**/ ?>