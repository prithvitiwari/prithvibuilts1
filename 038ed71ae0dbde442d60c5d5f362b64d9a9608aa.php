
<?php $__env->startSection('title', 'Reward'); ?>
<?php $__env->startSection('keywords', 'Reward Keywords'); ?>
<?php $__env->startSection('description', 'Reward Description'); ?>
<?php $__env->startSection('contant'); ?>
<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>
<div class="main-content hor-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Rewards</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Rewards</li>
                    </ol>
                </div>
            </div> <!-- PAGE-HEADER END -->
            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Reward List</h3>
                            &nbsp; &nbsp;<a href="<?php echo e(route('user.reward',@$query)); ?>" title="Refesh" class="btn btn-success text-right"><i class="fa fa-refresh"></i></a>
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
                                        <div style="margin-right: 10px;"><a href="<?php echo e(route('user.reward')); ?>" class="btn btn-danger" style="background-color: #e74c3c;">Clear All</a></div>
                                    </div>
                                </form>
                                <table class="table border text-nowrap text-md-nowrap table-bordered mb-0 mt-5">
                                    <thead>
                                        <tr>
                                            <th>S. No.</th>
                                            <th>Name</th>
                                            <th>Members</th>
                                            <th>Lavel</th>
                                            <th>Reward</th>
                                            <th>Notes</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sn = $lists->firstItem();
                                        ?>
                                        <?php if($lists->count()): ?>
                                        <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <?php if(method_exists($lists, 'links')): ?>
                                            <td><?php echo e($key + $lists->firstItem()); ?>.</td>
                                            <?php else: ?>
                                            <td><?php echo e($key + 1); ?>.</td>
                                            <?php endif; ?>
                                            <td>
                                                <div class="d-flex" style="align-items: center;">
                                                    <span class="avatar bradius" style="background-image: url('<?php echo e(url('storage/reward',$list->image)); ?>');"></span>
                                                    <div style="margin-left: 10px;">
                                                        <?php echo e($list->name); ?>

                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo e($list->user); ?></td>
                                            <td>Lavel <?php echo e($list->lavel); ?></td>
                                            <td>₹ <?php echo e($list->reward); ?>/-</td>
                                            <td><?php echo e($list->notes ? $list->notes : 'N/A'); ?></td>
                                            <td>
                                                <?php
                                                $arr = [];
                                                foreach($rewardArr as $re){
                                                $arr[]= $re;
                                                }
                                                ?>
                                                <?php if($arr && in_array($list->id,$arr,TRUE)): ?>
                                                <a href="javascript:void(0)" onclick="rewarded()">
                                                    <span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Rewarded</span>
                                                </a>
                                                <?php else: ?>
                                                <?php if($list->user <= $user_member_count['lavel_'.$list->lavel]): ?>
                                                    <a href="<?php echo e(route('user.get_reward',$list->id)); ?>">
                                                        <span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Get Reward</span>
                                                    </a>
                                                    <?php else: ?>
                                                    <a href="javascript:void(0)" onclick="get_rewarded()">
                                                        <span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Get Reward</span>
                                                    </a>
                                                    <?php endif; ?>
                                                    <?php endif; ?>
                                            </td>
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

    function rewarded() {
        swal({
            title: "Success",
            text: "You are already collect this reward.",
            type: "success"
        });
    }

    function get_rewarded() {
        swal({
            title: "Warning",
            text: "You are not archive this goal.",
            type: "warning"
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
    // console.log('params', value);
    if (value) {
        setTimeout(message(), 100000)
        console.log(removeParam('msg'));
    }
</script>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.usermaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/user/rewards.blade.php ENDPATH**/ ?>