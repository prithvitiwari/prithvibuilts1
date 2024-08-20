<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>
<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Send Email</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Send Email</li>
                    </ol>
                </div>
            </div> <!-- PAGE-HEADER END -->
            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Send Email</h3>
                            &nbsp; &nbsp;<a href="<?php echo e(route('admin.email.index',@$query)); ?>" title="Refesh" class="btn btn-success text-right"><i class="fa fa-refresh"></i></a>
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
                                        <div style="margin-right: 10px;"><a href="<?php echo e(route('admin.email.index')); ?>" class="btn btn-danger" style="background-color: #e74c3c;">Clear All</a></div>
                                        <div style="margin-right: 10px;"><a href="#" id="sendEmail" data-url="<?php echo e(route('admin.email.index')); ?>" class="btn btn-danger" style="background-color: #e74c3c;">Send Email</a></div>
                                    </div>
                                </form>
                                <form id="sendEmailForm">
                                    <table class="table border text-nowrap text-md-nowrap table-bordered mb-0 mt-5">
                                        <thead>
                                            <tr>
                                                <th>S. No. | <input type="checkbox" id="selectAll" /></th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Sended Mail</th>
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
                                                <td><?php echo e($sn + $key); ?>. | <input type="checkbox" class="select_user" name="check[]" value="<?php echo e($list->id); ?>" /></td>
                                                <td><?php echo e($list->name); ?></td>
                                                <td><?php echo e($list->email); ?></td>
                                                <td><?php echo e($list->emails->count()); ?></td>
                                                <td>
                                                    <div class="btn-list">
                                                        <a href="<?php echo e(route('admin.email.user',$list->id)); ?>" class="btn btn-sm btn-warning">
                                                            <span class="fe fe-mail"> </span>
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
                                </form>
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
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $('#selectAll').click(function() {
        if ($(this).prop('checked')) {
            $('.select_user').prop('checked', true);
        } else {
            $('.select_user').prop('checked', false);
        }
    });

    $(document).on('click', '#sendEmail', function(e) {
        let url = $('#sendEmail').data('url');
        let data = $('#sendEmailForm').serializeArray();
        if (data.length) {
            $.ajax({
                method: 'post',
                url: url,
                data: data,
                dataType: "json",
                success: function(r) {
                    localStorage.setItem("selected_users", r.check);
                    window.location.href = "<?php echo e(route('admin.email.create')); ?>"
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
<?php $__env->stopSection(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/backend/inc/email/list.blade.php ENDPATH**/ ?>