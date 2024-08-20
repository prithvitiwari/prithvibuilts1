<?php $__env->startSection('style'); ?>
<style>
    .custom-radio-lg.custom-control {
        padding-top: 0;
    }

    /* .custom-radio-lg .custom-control-label::before {
        display: block;
    }

    .custom-radio-lg .custom-control-label::after {
        display: block;
    } */
</style>
<?php $__env->stopSection(); ?>
<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            
            <div class="page-header">
                <h1 class="page-title">Cart</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.user.product.list',$user->id)); ?>">Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                    </ol>
                </div>
            </div> <!-- PAGE-HEADER END -->
            <div class="mt-3 mb-3">
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
        
            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-8">
                    <div class="card cart">
                        <div class="card-header">
                            <h3 class="card-title">Products</h3>
                        </div>
                        <?php echo e(Form::open(['url' => route('admin.cart.update',$user->id), 'method'=>'POST', 'files' => true, 'class' => ''])); ?>

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered table-vcenter">
                                    <?php if($lists->count()): ?>
                                    <thead>
                                        <tr class="border-top">
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Subtotal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <div class="text-center">

                                                    <?php $__currentLoopData = $list->product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($key < 1): ?> <img class="cart-img text-center" src="<?php echo e(url('storage/product',$img->image)); ?>" alt="img">
                                                        <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </td>
                                            <td><?php echo e($list->product->name); ?></td>
                                            <td class="fw-bold">₹ <?php echo e($list->product->price); ?></td>
                                            <td>
                                                <div class="handle-counter" id="handleCounter4">
                                                    <button type="button" data-id="<?php echo e($list->id); ?>" class="counter-minus btn btn-white lh-2 shadow-none">
                                                        <i class="fa fa-minus text-muted"></i>
                                                    </button>
                                                    <input type="text" name="<?php echo e($list->id); ?>" value="<?php echo e($list->quantity); ?>" class="qty input_<?php echo e($list->id); ?>" readonly>
                                                    <button type="button" data-id="<?php echo e($list->id); ?>" class="counter-plus btn btn-white lh-2 shadow-none">
                                                        <i class="fa fa-plus text-muted"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>₹ <span><?php echo e((float)$list->product->price*$list->quantity); ?></span></td>
                                            <td>
                                                <div class=" d-flex g-2">
                                                    <a href="<?php echo e(route('admin.cart.delete',[$user->id,$list->id])); ?>" class="btn text-danger bg-danger-transparent btn-icon py-1" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                        <span class="bi bi-trash fs-16"></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <?php else: ?>
                                    <div class="text-center">
                                        Cart Empty.
                                    </div>
                                    <?php endif; ?>
                                </table>
                            </div>
                        </div>
                        <?php if($lists->count()): ?>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-end"><button href="javascript:void(0)" class="btn btn-default btn-md">Update Cart</button></div>
                            </div>
                        </div>
                        <?php endif; ?>

                        </form>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-4 col-sm-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Cart Totals</div>
                        </div>
                        <div class="card-body py-2">
                            <div class="table-responsive">
                                <table class="table table-borderless text-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="text-start">Product </td>
                                            <td class="text-end"><span class="fw-bold  ms-auto"><span><?php echo e(number_format($lists->count())); ?></span></span></td>
                                        </tr>

                                        <tr>
                                            <td class="text-start fs-18">Total</td>
                                            <td class="text-end"><span class="ms-2 fw-bold fs-23">₹ <span><?php echo e(number_format($total_price,2)); ?></span></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php if($lists->count()): ?>
                        <div class="card-footer">
                            <div class="btn-list">
                                <a href="<?php echo e(route('admin.cart.checkout',$user->id)); ?>" class="btn btn-success float-sm-end">Submit<i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- ROW-1 CLOSED -->
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div>

<?php $__env->startSection('script'); ?>
<script>
    $(document).on("click", "#handleCounter4 .counter-minus", function(e) {
        let id = $(this).data('id');
        let class_name = 'input_' + id;
        let val = $('.' + class_name).val();
        if (val > 1) {
            $('.' + class_name).val(parseInt(val) - 1);
        }
    });
    $(document).on("click", "#handleCounter4 .counter-plus", function(e) {
        let id = $(this).data('id');
        let class_name = 'input_' + id;
        let val = $('.' + class_name).val();
        $('.' + class_name).val(parseInt(val) + 1);
    });
</script>
<?php $__env->stopSection(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/backend/inc/userproduct/cart.blade.php ENDPATH**/ ?>