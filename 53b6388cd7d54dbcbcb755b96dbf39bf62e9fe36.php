<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>
<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">User List</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User</li>
                    </ol>
                </div>
            </div> <!-- PAGE-HEADER END -->
            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">User List </h3>
                            &nbsp; &nbsp;<a href="<?php echo e(route('admin.user.index',@$query)); ?>" title="Refesh" class="btn btn-success text-right"><i class="fa fa-refresh"></i></a>
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
                                            <select name="user" class="form-control select2" style="margin-right: 20px; min-width: 100px;">
                                                <option value=""> Select User </option>
                                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($cat->id); ?>" <?php if(@$query['user']==$cat->id): ?> selected <?php endif; ?>><?php echo e($cat->name); ?></option>
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
                                        <div style="margin-right: 10px;">
                                            <select name="lavel" class="form-control select2" style="margin-right: 20px; min-width: 100px;">
                                                <option value="">Select Lavel</option>
                                                <option value="1" <?php if(@$query['lavel']==1 ): ?> selected <?php endif; ?>>Lavel 1</option>
                                                <option value="2" <?php if(@$query['lavel']==2 ): ?> selected <?php endif; ?>>Lavel 2</option>
                                                <option value="3" <?php if(@$query['lavel']==3 ): ?> selected <?php endif; ?>>Lavel 3</option>
                                                <option value="4" <?php if(@$query['lavel']==4 ): ?> selected <?php endif; ?>>Lavel 4</option>
                                                <option value="5" <?php if(@$query['lavel']==5 ): ?> selected <?php endif; ?>>Lavel 5</option>
                                                <option value="6" <?php if(@$query['lavel']==6 ): ?> selected <?php endif; ?>>Lavel 6</option>
                                                <option value="7" <?php if(@$query['lavel']==7 ): ?> selected <?php endif; ?>>Lavel 7</option>
                                            </select>
                                        </div>
                                        <?php if(request()->package): ?>
                                        <input type="hidden" name="package" value="<?php echo e(request()->package); ?>" />
                                        <?php endif; ?>
                                        <div style="margin-right: 10px;">
                                            <input type="date" name="date" value="<?php echo e(@$query['date']); ?>" class="form-control" placeholder="" style="min-width: 100px;" />
                                        </div>
                                        <div style="margin-right: 10px;"><Button class="btn btn-primary">Submit</Button></div>
                                        <div style="margin-right: 10px;"><a href="<?php echo e(route('admin.user.index')); ?>" class="btn btn-danger" style="background-color: #e74c3c;">Clear All</a></div>
                                        <div style="margin-right: 10px;"><a href="<?php echo e(route('admin.user.csv',@$query)); ?>" class="btn btn-danger" style="background-color: #e74c3c;">Export CSV</a></div>
                                        <div style="margin-right: 10px;"><a href="<?php echo e(route('admin.user.pdf',@$query)); ?>" target="_blank" class="btn btn-danger" style="background-color: #e74c3c;">Export PDF</a></div>
                                    </div>
                                </form>
                                <table class="table border text-nowrap text-md-nowrap table-bordered mb-0 mt-5">
                                    <thead>
                                        <tr>
                                            <th>S. No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <!-- <th>Aadhar card</th> -->
                                            <!-- <th>Pancard</th> -->
                                            <th>Referal By</th>
                                            <!-- <th>Lavel</th> -->
                                            <th>Code</th>
                                            <!--<th>Created at</th>-->
                                            <th>Doc. Status</th>
                                            <th>Buy Product</th>
                                            <th>Status</th>
                                            <th>Buy Package</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sn = $lists->firstItem();
                                        ?>
                                        <?php if($lists->count(0)): ?>
                                        <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($sn + $key); ?>.</td>
                                            <td>
                                                <div class="d-flex">
                                                    <span class="avatar bradius" style="background-image: url('<?php echo e($list->profile_url); ?>');"></span>
                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                        <h6 class="mb-0 fs-14 fw-semibold"> <?php echo e($list->name); ?></h6>
                                                        <?php if($list->is_verified == 'true'): ?>
                                                        <span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Verified</span>
                                                        <?php else: ?>
                                                        <span class="badge bg-danger-transparent rounded-pill text-warning p-2 px-3">Unverified</span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="mailto:<?php echo e($list->email); ?>"><?php echo e($list->email); ?></a>
                                            </td>
                                            <td>
                                                <a href="tel:<?php echo e($list->mobile); ?>"><?php echo e($list->mobile); ?></a>
                                            </td>
                                            <!-- <td>
                                                <div class="d-flex">
                                                    <span class="avatar bradius" style="background-image: url('<?php echo e(url('storage/aadharcard',$list->aadhar_front)); ?>');"></span>
                                                    <span class="avatar bradius" style="background-image: url('<?php echo e(url('storage/aadharcard',$list->aadhar_back)); ?>');"></span>
                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                        <h6 class="mb-0 fs-14 fw-semibold"> <?php echo e($list->aadhar_number); ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <span class="avatar bradius" style="background-image: url('<?php echo e(url('storage/pancard',$list->pan_image)); ?>');"></span>
                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                        <h6 class="mb-0 fs-14 fw-semibold"> <?php echo e($list->pan_number); ?></h6>
                                                    </div>
                                                </div>
                                            </td> -->
                                            <td><?php echo e($list->referal_id ? $list->referal_user_name : 'N/A'); ?></td>
                                            <!-- <td>Lavel <?php echo e($list->lavel); ?></td> -->
                                            <td><?php echo e($list->referal_code); ?></td>
                                            <!--<td><?php echo e(date('d M Y h:i A', strtotime($list->created_at))); ?></td>-->
                                            <td>
                                                <div class="mt-sm-1 d-block">
                                                    <select class="form-control badge rounded-pill p-2 px-3
                                                    <?php if($list->is_document == 'completed'): ?> bg-success-transparent
                                                    <?php elseif($list->is_document == 'pending'): ?> bg-warning-transparent
                                                    <?php elseif($list->is_document == 'canceled'): ?> bg-danger-transparent
                                                    <?php endif; ?>
                                                    " id="order_status" data-url="<?php echo e(route('admin.user.documentstatus',$list->id)); ?>">
                                                        </option>
                                                        <option value="pending" <?php if($list->is_document == 'pending'): ?> selected <?php endif; ?>>
                                                            <a href="#">
                                                                <span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                            </a>
                                                        </option>
                                                        <option value="completed" <?php if($list->is_document == 'completed'): ?> selected <?php endif; ?>>
                                                            <a href="#">
                                                                <span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Completed</span>
                                                            </a>
                                                        <option value="canceled" <?php if($list->is_document == 'canceled'): ?> selected <?php endif; ?>>
                                                            <a href="#">
                                                                <span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Canceled</span>
                                                            </a>
                                                        </option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="mt-sm-1 d-block">
                                                    <?php if($list->buy_package == 'true'): ?>

                                                    <a href="<?php echo e(route('admin.user.product.list',$list->id)); ?>">
                                                        <span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Buy Product</span>
                                                    </a>
                                                    <?php else: ?>

                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="mt-sm-1 d-block">
                                                    <?php if($list->status == 'true'): ?>
                                                    <a href="#" data-url="<?php echo e(route('admin.user.status',$list->id)); ?>" id="single_status">
                                                        <span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Unblock</span>
                                                    </a>
                                                    <?php else: ?>
                                                    <a href="#" data-url="<?php echo e(route('admin.user.status',$list->id)); ?>" id="single_status">
                                                        <span class="badge bg-danger-transparent rounded-pill text-warning p-2 px-3">Block</span>
                                                    </a>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="mt-sm-1 d-block">
                                                    <?php if($list->buy_package == 'true'): ?>
                                                    <span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Active</span>
                                                    <?php else: ?>
                                                    <a href="<?php echo e(route('admin.user.package',$list->id)); ?>">
                                                        <span class=" btn-primary badge bg-danger-transparent rounded-pill text-warning p-2 px-3">Buy</span>
                                                    </a>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-list">
                                                    <a href="<?php echo e(route('admin.user.edit',$list->id)); ?>" class="btn btn-sm btn-primary">
                                                        <span class="fe fe-edit"> </span>
                                                    </a>
                                                    <?php if(!$list->members_count): ?>
                                                    <a href="#" data-url="<?php echo e(route('admin.user.delete',$list->id)); ?>" id="single_delete" class="btn btn-sm btn-danger">
                                                        <span class="fe fe-trash-2"> </span>
                                                    </a>
                                                    <?php endif; ?>
                                                    <a href="<?php echo e(route('admin.user.show',$list->id)); ?>" class="btn btn-sm btn-warning">
                                                        <span class="fe fe-eye"> </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                        <tr>
                                            <td class="text-center" colspan="15">No record found.</td>
                                        </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-3">
                                <?php if(method_exists($lists, 'links')): ?>
                                <?php echo $__env->make('frontend.templete.pagination', ['paginator' => $lists,'query'=>$query,'link_limit'=>5], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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


<?php $__env->stopSection(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/backend/inc/user/list.blade.php ENDPATH**/ ?>