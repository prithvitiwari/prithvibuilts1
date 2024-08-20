<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>
<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Debit Request</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Debit Request</li>
                    </ol>
                </div>
            </div> <!-- PAGE-HEADER END -->
            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Debit Request</h3>
                            &nbsp; &nbsp;<a href="<?php echo e(route('admin.debit.index',@$query)); ?>" title="Refesh" class="btn btn-success text-right"><i class="fa fa-refresh"></i></a>
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
                                        <!-- <div style="margin-right: 10px;">
                                            <input type="text" name="s" value="<?php echo e(@$query['s']); ?>" class="form-control" placeholder="Search..." style="min-width: 100px;" />
                                        </div> -->
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
                                                <option value="pending" <?php if(@$query['status']=='pending' ): ?> selected <?php endif; ?>>Pending</option>
                                                <option value="completed" <?php if(@$query['status']=='completed' ): ?> selected <?php endif; ?>>Completed</option>
                                                <option value="canceled" <?php if(@$query['status']=='canceled' ): ?> selected <?php endif; ?>>Canceled</option>
                                            </select>
                                        </div>
                                        <div style="margin-right: 10px;"><Button class="btn btn-primary">Submit</Button></div>
                                        <div style="margin-right: 10px;"><a href="<?php echo e(route('admin.debit.index')); ?>" class="btn btn-danger" style="background-color: #e74c3c;">Clear All</a></div>
                                        <div style="margin-right: 10px;"><a href="javascript:void(0)" data-url="<?php echo e(route('admin.debit.change_status')); ?>?status=completed" class="btn btn-success statusCheckAll" style="background-color: #e74c3c;">Pay Now</a></div>
                                        <div style="margin-right: 10px;"><a href="javascript:void(0)" data-url="<?php echo e(route('admin.debit.change_status')); ?>?status=canceled" class="btn btn-danger statusCheckAll" style="background-color: #e74c3c;">Cancel</a></div>
                                    </div>
                                </form>
                                <table class="table border text-nowrap text-md-nowrap table-bordered mb-0 mt-5">
                                    <thead>
                                        <tr>
                                            <th>S. No. | <input type="checkbox" id="selectAll" /></th>
                                            <th>Name</th>
                                            <th>Total Amount</th>
                                            <th>Amount</th>
                                            <th>TDS</th>
                                            <th>Message</th>
                                            <th>Created at</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sn = $lists->firstItem();
                                        ?>
                                        <?php if($lists->count()): ?>
                                        <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($sn + $key); ?>. | <input type="checkbox" class="<?php if($list->status == 'pending'): ?> select_user <?php endif; ?>" name="check[]" value="<?php echo e($list->id); ?>" <?php if($list->status != 'pending'): ?> disabled <?php endif; ?> /></td>
                                            <td>
                                                <?php echo e($list->user ? $list->user->name  : 'N/A'); ?>

                                                <?php if($list->user_id): ?>
                                                | ₹ <?php echo e($list->user ? number_format($list->user->wallet->balance,2) :  number_format(0,2)); ?>/-
                                                <?php endif; ?>
                                            </td>
                                            <td>₹ <?php echo e(number_format((float)$list->amount + (float)$list->tds,2)); ?>/-</td>
                                            <td>₹ <?php echo e(number_format($list->amount,2)); ?>/-</td>
                                            <td>₹ <?php echo e(number_format($list->tds,2)); ?>/-</td>
                                            <td><?php echo e($list->message); ?></td>
                                            <td><?php echo e(date('d M Y h:i A', strtotime($list->created_at))); ?></td>
                                            <td>
                                                <?php if($list->status == 'completed'): ?>
                                                <span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Completed</span>
                                                <?php elseif($list->status == 'canceled'): ?>
                                                <span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Canceled</span>
                                                <?php else: ?>
                                                <div class="mt-sm-1 d-block">
                                                    <div class="btn btn-success pending_complete_status" data-url="<?php echo e(route('admin.debit.status',$list->id)); ?>?status=completed">Pay Now</div>
                                                    <div class="btn btn-danger pending_complete_status" data-url="<?php echo e(route('admin.debit.status',$list->id)); ?>?status=canceled">Cancel</div>
                                                    <!-- <select class="form-control" id="order_status" data-url="<?php echo e(route('admin.debit.status',$list->id)); ?>">
                                                        <option value="pending" <?php if($list->status == 'pending'): ?> selected <?php endif; ?>>
                                                            <a href="#">
                                                                <span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Pending</span>
                                                            </a>
                                                        </option>
                                                        <option value="completed" <?php if($list->status == 'completed'): ?> selected <?php endif; ?>>
                                                            <a href="#">
                                                                <span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Completed</span>
                                                            </a>
                                                        </option>
                                                        <option value="canceled" <?php if($list->status == 'canceled'): ?> selected <?php endif; ?>>
                                                            <a href="#">
                                                                <span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Canceled</span>
                                                            </a>
                                                        </option>
                                                        </select> -->
                                                </div>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <div class="btn-list">
                                                    <a href="#" data-url="<?php echo e(route('admin.debit.delete',$list->id)); ?>" id="single_delete" class="btn btn-sm btn-danger">
                                                        <span class="fe fe-trash-2"> </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                        <tr>
                                            <td colspan="10" style="text-align: center;">No records found.</td>
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
<script>
    $('#selectAll').click(function() {
        if ($(this).prop('checked')) {
            $('.select_user').prop('checked', true);
        } else {
            $('.select_user').prop('checked', false);
        }
    });


    $(document).on('click', '.statusCheckAll', function(e) {
        var selected = new Array();

        let url = $(this).data('url');
        $("input:checkbox:checked").each(function() {
            if ($(this).val() != 'on') {
                selected.push($(this).val());
            }
        });

        if (selected.length) {
            $.ajax({
                method: 'post',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                data: {
                    selected
                },
                dataType: "json",
                success: function(r) {
                    window.location.reload();
                }
            })
        } else {
            swal({
                title: "Alert",
                text: "Please select atleast one record.",
                type: "warning"
            });
        }
    });
</script>
<?php $__env->stopSection(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/backend/inc/debit/list.blade.php ENDPATH**/ ?>