<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>
<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
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
            <div class="page-header">
                <h1 class="page-title">Debit Request create</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Debit Request create</li>
                    </ol>
                </div>
            </div> <!-- PAGE-HEADER END -->
            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Debit Request create</h3>
                            &nbsp; &nbsp;<a href="<?php echo e(route('admin.debit.user',@$query)); ?>" title="Refesh" class="btn btn-success text-right"><i class="fa fa-refresh"></i></a>
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
                                        <div style="margin-right: 10px;"><Button class="btn btn-primary">Submit</Button></div>
                                        <div style="margin-right: 10px;"><a href="<?php echo e(route('admin.debit.user')); ?>" class="btn btn-danger" style="background-color: #e74c3c;">Clear All</a></div>
                                        <div style="margin-right: 10px;"><a href="javascript:void(0)" data-url="<?php echo e(route('admin.debit.request_all')); ?>" class="statusCheckAll btn btn-success" style="background-color: #e74c3c;">Add Request</a></div>
                                    </div>
                                </form>
                                <table class="table border text-nowrap text-md-nowrap table-bordered mb-0 mt-5">
                                    <thead>
                                        <tr>
                                            <th>S. No. | <input type="checkbox" id="selectAllUser" /></th>
                                            <th>Name</th>
                                            <th>Wallet</th>
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
                                            <td><?php echo e($sn + $key); ?>. | <input type="checkbox" class="<?php if((int)$list->wallet->balance > 1): ?>select_user <?php endif; ?>" name="check[]" value="<?php echo e($list->id); ?>" <?php if(!(int)$list->wallet->balance>0): ?>disabled <?php endif; ?> />
                                            </td>
                                            <td>
                                                <?php echo e($list->name); ?>

                                            </td>
                                            <td>₹ <?php echo e(number_format($list->wallet->balance,2)); ?>/-
                                            </td>
                                            <td>
                                                <div class="btn-list">
                                                    <?php if($list->wallet->balance > 0): ?>
                                                    <a href="<?php echo e(route('admin.debit.request.create',$list->id)); ?>" class="btn btn-sm btn-primary">
                                                        <span class="fe fe-plus"> </span> Add Request
                                                    </a>
                                                    <?php else: ?>
                                                    <div class="btn btn-sm btn-primary" onclick="message()">
                                                        <span class="fe fe-plus"> </span> Add Request
                                                    </div>
                                                    <?php endif; ?>
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
    function message() {
        swal({
            title: "Warning",
            text: "This user wallet balance is less than 0.",
            type: "warning"
        });
    }

    $('#selectAllUser').click(function() {
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

            // Prompt
            // $('body').removeClass('timer-alert');
            swal({
                title: "Debit Request",
                text: "Enter your message",
                type: "input",
                showCancelButton: true,
                closeOnConfirm: false,
                inputPlaceholder: "Your message"
            }, function(inputValue) {
                if (inputValue != "") {
                    $.ajax({
                        method: 'post',
                        url: url,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        },
                        data: {
                            selected,
                            inputValue
                        },
                        dataType: "json",
                        success: function(r) {
                            // swal("Success", "Debit Requests Added Successfully.");
                            swal({
                                    title: "Success",
                                    text: "Debit Requests Added Successfully.",
                                    type: "success",
                                    showCancelButton: false,
                                    // confirmButtonText: 'Yes, I am sure!',
                                    // cancelButtonText: 'No, cancel it!'
                                },
                                function(isConfirm) {
                                    if (isConfirm) {
                                        window.location.reload();
                                    }
                                });
                        }
                    })
                }
            });
        } else {
            swal({
                title: "Alert",
                text: "Please select atleast one record.",
                type: "warning"
            });
        }
    });
</script>
<?php $__env->stopSection(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/backend/inc/debit/user.blade.php ENDPATH**/ ?>