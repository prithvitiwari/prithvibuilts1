<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Package Details</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.kit.index')); ?>">Package</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Package Details</li>
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
                                            <img src="<?php echo e(url('storage/kit',$kit->image)); ?>" alt="img" class="img-fluid mx-auto d-block">
                                        </div>
                                    </div>
                                </div>
                                <div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0">
                                    <div class="mt-2 mb-4">
                                        <h3 class="mb-3" style="text-transform: capitalize;"><?php echo e($kit->name); ?></h3>
                                        <h3 class="mb-4">
                                            <div class="price me-2 "><span class="fw-bold  fs-25">₹ <?php echo e($kit->price); ?> /- </span>
                                                <span class="ms-4" style="text-decoration: line-through;">₹ <?php echo e($kit->sale_price); ?> /- </span>
                                            </div>
                                        </h3>
                                        <p><?php echo e($kit->excerpt); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="card productdesc">
                        <div class="card-header">
                            <h3 class="card-title">Description</h3>
                        </div>
                        <div class="card-body">
                            <?php echo $kit->description; ?>

                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="card productdesc">
                        <div class="card-header">
                            <h3 class="card-title">Products</h3>
                        </div>
                        <div class="card-body">
                            <div id="responsive-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered text-nowrap border-bottom dataTable no-footer" id="responsive-datatable" role="grid" aria-describedby="responsive-datatable_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>S. No.</th>
                                                    <th>Name</th>
                                                    <th>Image</th>
                                                    <th>Price</th>
                                                    <!-- <th>Short Description</th> -->
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $kit->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                $sn = $key + 1;
                                                ?>
                                                <tr>
                                                    <td><?php echo e($sn); ?>.</td>
                                                    <td><?php echo e($list->product->name); ?></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <?php $__currentLoopData = $list->product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <span class="avatar bradius" style="background-image: url('<?php echo e(url('storage/product',$img->image)); ?>');"></span>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    </td>
                                                    <td>₹ <?php echo e($list->product->price); ?> /-</td>
                                                    <!-- <td style="max-width: 300px; overflow: hidden; text-overflow: ellipsis;"><?php echo e($list->product->excerpt); ?></td> -->
                                                    <td>
                                                        <div class="btn-list">

                                                            <a href="<?php echo e(route('admin.product.show',$list->product->id)); ?>" class="btn btn-sm btn-warning">
                                                                <span class="fe fe-eye"> </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- ROW-1 CLOSED -->
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div><?php /**PATH /home2/vijaycku/public_html/resources/views/backend/inc/kit/view.blade.php ENDPATH**/ ?>