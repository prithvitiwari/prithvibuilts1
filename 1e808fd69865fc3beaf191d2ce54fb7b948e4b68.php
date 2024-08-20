
<?php $__env->startSection('title', 'Wallet History'); ?>
<?php $__env->startSection('keywords', 'Wallet History Keywords'); ?>
<?php $__env->startSection('description', 'Wallet History Description'); ?>
<?php $__env->startSection('contant'); ?>
<?php $__env->startSection('style'); ?>


<?php $__env->stopSection(); ?>
<?php
$auth_user = auth()->guard('user')->user();
?>
<div class="main-content hor-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Wallet History</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Wallet History</li>
                    </ol>
                </div>
            </div> <!-- PAGE-HEADER END -->

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

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-3">
                    <div class="card">
                        <form id="transferAmount" action="javascript:void(0)" class="needs-validation" novalidate>
                            <div class="card-header">
                                <div class="card-title">Transfer Amount</div>
                            </div>
                            <div class="card-body">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group"> <label class="form-label">Select User</label>
                                    <div class="wrap-input100 validate-input">
                                        <?php echo e(Form::select('from_id', $userArr,'', ['class' => 'form-control js-example-basic-single user-select', 'placeholder'=>'Select User','required'=>'required'])); ?>

                                        <div class="invalid-feedback">Please select user.</div>
                                    </div>
                                </div>
                                <div class="form-group"> <label class="form-label">Amount</label>
                                    <div class="wrap-input100 validate-input">
                                        <?php echo e(Form::number('amount', '', ['class' => 'input100 form-control amount-check', 'placeholder'=>'Amount','required'=>'required','min'=>1])); ?>

                                        <div class="invalid-feedback">Please enter amount garater than 0 and less than or equal to wallet balance.</div>
                                    </div>
                                </div>
                                <div class="otp_input">
                                </div>
                                <div class="form-group"> <label class="form-label">Message</label>
                                    <div class="wrap-input100 validate-input">
                                        <!-- <?php echo e(Form::number('amount', '', ['class' => 'input100 form-control', 'placeholder'=>'Amount','required'=>'required'])); ?> -->
                                        <textarea class="input100 form-control transfer-message" name="message" placeholder="Message"></textarea>
                                        <div class="invalid-feedback">Please enter message.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end transfer-button d-block">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <div class="card-footer text-end transfer-button d-none">
                                <div style="cursor: pointer;" class="btn btn-primary">Processing...</div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Wallet History</h3>
                            &nbsp; &nbsp;<a href="<?php echo e(route('user.wallethistory',@$query)); ?>" title="Refesh" class="btn btn-success text-right"><i class="fa fa-refresh"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
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
                                            <select name="type" class="form-control select2" style="margin-right: 20px; min-width: 100px;">
                                                <option value="">Select Type</option>
                                                <option value="credit" <?php if(@$query['type']=='credit' ): ?> selected <?php endif; ?>>Credit</option>
                                                <option value="debit" <?php if(@$query['type']=='debit' ): ?> selected <?php endif; ?>>Debit</option>
                                            </select>
                                        </div>
                                        <div style="margin-right: 10px;">
                                            <select name="category" class="form-control select2" style="margin-right: 20px; min-width: 100px;">
                                                <option value="">Select Category</option>
                                                <option value="reward" <?php if(@$query['category']=='reward' ): ?> selected <?php endif; ?>>Reward</option>
                                                <option value="transfer" <?php if(@$query['category']=='transfer' ): ?> selected <?php endif; ?>>Transfer</option>
                                            </select>
                                        </div>
                                        <div style="margin-right: 10px;"><Button class="btn btn-primary">Submit</Button></div>
                                        <div style="margin-right: 10px;"><a href="<?php echo e(route('user.wallethistory')); ?>" class="btn btn-danger" style="background-color: #e74c3c;">Clear All</a></div>
                                    </div>
                                </form>
                                <table class="table border text-nowrap text-md-nowrap table-bordered mb-0 mt-5">
                                    <thead>
                                        <tr>
                                            <th>S. No.</th>
                                            <th>Amount</th>
                                            <th>Type</th>
                                            <!-- <th>Last Balance</th> -->
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
                                            <td>
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
                                            <!-- <td>₹ <?php echo e($list->last_balance); ?></td> -->
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".js-example-basic-single").select2();
    });
</script>
<script>
    function message() {
        swal({
            title: "Success",
            text: "Otp send successfully.",
            type: "success"
        });
    }
    let wallet_amount = "<?php echo e($auth_user->wallet && $auth_user->wallet != 'null' ? $auth_user->wallet->balance : 0); ?>";
    $('.amount-check').attr('max', wallet_amount);

    $(document).on('submit', '#transferAmount', function(e) {
        is_valid = $(this).valid();
        if (is_valid) {
            $('.transfer-button').toggleClass('d-block d-none');
            $('.amount-check').attr('disabled', 'disabled');
            $('.transfer-message').attr('disabled', 'disabled');
            $('.user-select').attr('disabled', 'disabled');
            $.ajax({
                method: 'post',
                url: "<?php echo route('user.transferotp',$auth_user->id); ?>",
                dataType: "json",
                success: function(r) {
                    if (r.status) {
                        message();
                        $('.otp_input').append('<div class="form-group"> <label class="form-label">OTP</label><div class="wrap-input100 validate-input"><input type="number" name="otp" class="input100 form-control transfer-otp" placeholder="OTP" required><div class="invalid-feedback">Please enter otp.</div></div></div>')
                        $('#transferAmount').attr('id', 'verifyTransferAmount');
                        localStorage.setItem("transfer_otp", r.data);
                        $('.transfer-button').toggleClass('d-block d-none');
                    }
                }
            })
        }
    });

    $(document).on('submit', '#verifyTransferAmount', function(e) {
        is_valid = $(this).valid();
        if (is_valid) {
            let otp = $('.transfer-otp').val();

            let store_otp = localStorage.getItem("transfer_otp");
            if (otp == store_otp) {
                $('.amount-check').attr('disabled', false);
                $('.transfer-message').attr('disabled', false);
                $('.user-select').attr('disabled', false);
                $('.transfer-button').toggleClass('d-block d-none');
                
                $.ajax({
                    method: 'post',
                    url: "<?php echo route('user.transfer_request',$auth_user->id); ?>",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(r) {
                        if (r.status) {
                            localStorage.setItem("transfer_otp", '');
                            window.location.href = "<?php echo route('user.wallethistory'); ?>"
                            swal({
                                title: "Success",
                                text: "Wallet amount transfer successfully.",
                                type: "success"
                            });
                        }
                    }
                })
            } else {
                swal({
                    title: "Alert",
                    text: "Otp not match. Please enter valid otp.",
                    type: "warning"
                });
            }
        }

    });
</script>


<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.usermaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/user/wallet.blade.php ENDPATH**/ ?>