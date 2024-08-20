<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>
<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Blog List</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Blog List</h3>
                            &nbsp; &nbsp;<a href="<?php echo e(route('admin.blog.index',@$query)); ?>" title="Refesh" class="btn btn-success text-right"><i class="fa fa-refresh"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
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
                                <form class="needs-validation">
                                    <div class="d-flex">
                                        <div style="display: flex; align-items: center; margin-right: 10px; min-width: 100px;">
                                            <label for="limit" style="margin-right: 5px;">Limit</label>
                                            <select name="limit" class="form-control select2" id="limit" style="margin-right: 10px; min-width: 60px;">
                                                <option value="10" <?php if(@$query['limit']==10): ?> selected <?php endif; ?>>10</option>
                                                <option value="50" <?php if(@$query['limit']==50): ?> selected <?php endif; ?>>50</option>
                                                <option value="100" <?php if(@$query['limit']==100): ?> selected <?php endif; ?>>100</option>
                                            </select>
                                        </div>
                                        <div style="margin-right: 10px;">
                                            <input type="text" name="s" value="<?php echo e(@$query['s']); ?>" class="form-control" placeholder="Search..." style="min-width: 100px;" />
                                        </div>
                                        <div style="margin-right: 10px;">
                                            <select name="category" class="form-control select2" style="margin-right: 20px; min-width: 100px;">
                                                <option value=""> Select Category </option>
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($cat->id); ?>" <?php if(@$query['category']==$cat->id): ?> selected <?php endif; ?>><?php echo e($cat->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div style="margin-right: 10px;">
                                            <select name="status" class="form-control select2" style="margin-right: 20px; min-width: 100px;">
                                                <option value="">Select Status</option>
                                                <option value="true" <?php if(@$query['status']=='true' ): ?> selected <?php endif; ?>>True</option>
                                                <option value="false" <?php if(@$query['status']=='false' ): ?> selected <?php endif; ?>>False</option>
                                            </select>
                                        </div>
                                        <div style="margin-right: 10px;"><Button class="btn btn-primary">Submit</Button></div>
                                        <div style="margin-right: 10px;"><a href="<?php echo e(route('admin.blog.index')); ?>" class="btn btn-danger" style="background-color: #e74c3c;">Clear All</a></div>
                                        <!-- <div style="margin-right: 10px;"><a href="<?php echo e(route('admin.blog.csv',@$query)); ?>" class="btn btn-danger" style="background-color: #e74c3c;">Export CSV</a></div> -->
                                        <!-- <div style="margin-right: 10px;"><a href="<?php echo e(route('admin.blog.pdf',@$query)); ?>" target="_blank" class="btn btn-danger" style="background-color: #e74c3c;">Export PDF</a></div> -->
                                    </div>
                                </form>
                                <table class="table border text-nowrap text-md-nowrap table-bordered mb-0 mt-5">
                                    <thead>
                                        <tr>
                                            <th>S. No.</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Image</th>
                                            <th>Created at</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sn = $lists->firstItem();
                                        ?>
                                        <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($sn + $key); ?>.</td>
                                            <td><?php echo e($list->name); ?></td>
                                            <td><?php echo e($list->category->name); ?></td>
                                            <td>
                                                <div class="d-flex">
                                                    <span class="avatar bradius" style="background-image: url('<?php echo e(url('storage/blog',$list->image)); ?>');"></span>
                                                </div>
                                            </td>
                                            <td><?php echo e(date('d M Y h:i A', strtotime($list->created_at))); ?></td>
                                            <td>
                                                <div class="mt-sm-1 d-block">
                                                    <?php if($list->status == 'true'): ?>
                                                    <a href="#" data-url="<?php echo e(route('admin.blog.status',$list->id)); ?>" id="single_status">
                                                        <span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">True</span>
                                                    </a>
                                                    <?php else: ?>
                                                    <a href="#" data-url="<?php echo e(route('admin.blog.status',$list->id)); ?>" id="single_status">
                                                        <span class="badge bg-warning-transparent rounded-pill text-danger p-2 px-3">False</span>
                                                    </a>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-list">
                                                    <a href="<?php echo e(route('admin.blog.edit',$list->id)); ?>" class="btn btn-sm btn-primary">
                                                        <span class="fe fe-edit"> </span>
                                                    </a>
                                                    <a href="#" data-url="<?php echo e(route('admin.blog.delete',$list->id)); ?>" id="single_delete" class="btn btn-sm btn-danger">
                                                        <span class="fe fe-trash-2"> </span>
                                                    </a>
                                                    <a href="<?php echo e(route('admin.blog.show',$list->id)); ?>" class="btn btn-sm btn-warning">
                                                        <span class="fe fe-eye"> </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                            </div>
                            <div class="mt-3">
                                <?php if(method_exists($lists, 'links')): ?>
                                <?php echo $__env->make('frontend.templete.pagination', ['paginator' => $lists,'link_limit'=>4], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div>
<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/backend/inc/blog/list.blade.php ENDPATH**/ ?>