
<?php $__env->startSection('title', 'Income'); ?>
<?php $__env->startSection('keywords', 'Income Keywords'); ?>
<?php $__env->startSection('description', 'Income Description'); ?>
<?php $__env->startSection('contant'); ?>
<?php $__env->startSection('style'); ?>


<?php $__env->stopSection(); ?>
<div class="main-content hor-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Income</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Income</li>
                    </ol>
                </div>
            </div> <!-- PAGE-HEADER END -->
            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Income</h3>
                            &nbsp; &nbsp;<a href="<?php echo e(route('user.income',@$query)); ?>" title="Refesh" class="btn btn-success text-right"><i class="fa fa-refresh"></i></a>
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
                                        <!-- <div style="margin-right: 10px;">
                                            <select name="type" class="form-control select2" style="margin-right: 20px; min-width: 100px;">
                                                <option value="">Select Type</option>
                                                <option value="credit" <?php if(@$query['type']=='credit' ): ?> selected <?php endif; ?>>Credit</option>
                                                <option value="debit" <?php if(@$query['type']=='debit' ): ?> selected <?php endif; ?>>Debit</option>
                                            </select>
                                        </div> -->
                                        <div style="margin-right: 10px;"><Button class="btn btn-primary">Submit</Button></div>
                                        <!-- <div style="margin-right: 10px;"><a href="<?php echo e(route('user.income')); ?>" class="btn btn-danger" style="background-color: #e74c3c;">Clear All</a></div> -->
                                    </div>
                                </form>
                                <table class="table border text-nowrap text-md-nowrap table-bordered mb-0 mt-5">
                                    <thead>
                                        <tr>
                                            <th>S. No.</th>
                                            <th>Amount</th>
                                            <th>Notes</th>
                                            <th>Created at</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sn = $lists->firstItem();
                                        ?>
                                        <?php if($lists->count()): ?>
                                        <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($sn + $key); ?>.</td>
                                            <td>₹ <?php echo e($list->amount); ?></td>
                                            <!-- <td>
                                                <div class="d-flex" style="align-items: center;">
                                                    <?php if($list->type == 'credit'): ?>
                                                    <div class="bg-success-transparent rounded-pill text-success p-2"><i class="fe fe-arrow-up"> </i></div>
                                                    <?php else: ?>
                                                    <div class="bg-danger-transparent rounded-pill text-danger p-2"><i class="fe fe-arrow-down"> </i></div>
                                                    <?php endif; ?>
                                                    &nbsp;&nbsp;
                                                    <div class="ml-5"><?php echo e($list->type); ?></div>
                                                </div>
                                            </td>
                                            <td>₹ <?php echo e($list->last_balance); ?></td> -->
                                            <td><?php echo e($list->notes); ?></td>
                                            <td><?php echo e(date('d M Y h:i A', strtotime($list->created_at))); ?></td>
                                            <!-- <td>
                                                            <div class="btn-list">
                                                                <a href="<?php echo e(route('admin.user.edit',$list->id)); ?>" class="btn btn-sm btn-primary">
                                                                    <span class="fe fe-edit"> </span>
                                                                </a>
                                                                <a href="#" data-url="<?php echo e(route('admin.user.delete',$list->id)); ?>" id="single_delete" class="btn btn-sm btn-danger">
                                                                    <span class="fe fe-trash-2"> </span>
                                                                </a>
                                                            </div>
                                                        </td> -->
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                        <tr>
                                            <td colspan="10" style="text-align: center;">No records found</td>
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
            title: "Success",
            text: "Your Order is placed successfully.",
            type: "success"
        });
    }

    function removeParam(parameter) {
        var url = document.location.href;
        var urlparts = url.split('?');

        if (urlparts.length >= 2) {
            var urlBase = urlparts.shift();
            var queryString = urlparts.join("?");

            var prefix = encodeURIComponent(parameter) + '=';
            var pars = queryString.split(/[&;]/g);
            for (var i = pars.length; i-- > 0;)
                if (pars[i].lastIndexOf(prefix, 0) !== -1)
                    pars.splice(i, 1);
            url = urlBase + '?' + pars.join('&');
            window.history.pushState('', document.title, url); // added this line to push the new url directly to url bar .

        }
        return url;
    }
    var queryString = window.location.search;
    var parameters = new URLSearchParams(queryString);
    var value = parameters.get('msg');
    console.log('params', value);
    if (value) {
        setTimeout(message(), 100000)
        console.log(removeParam('msg'));
    }
</script>


<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.usermaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/user/income.blade.php ENDPATH**/ ?>