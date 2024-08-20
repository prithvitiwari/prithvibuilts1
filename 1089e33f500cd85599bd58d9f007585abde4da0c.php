<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Add Debit Request</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.debit.user')); ?>">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Debit Request</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <!-- ROW OPEN -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Debit Request</h3>
                        </div>
                        <div class="card-body">
                            <?php echo e(Form::open(['url' => route('admin.debit.request.store',$user->id), 'method'=>'POST', 'files' => true, 'class' => 'needs-validation','novalidate'])); ?>

                            <?php echo e(csrf_field()); ?>


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
                            <div class="form-row">
                                <div class="col-xl-12 mb-3">
                                    <?php echo e(Form::label('amount', 'Amount')); ?>

                                    <div class="fs-10 text-warning">10% of your transfer amount will be deducted.</div>
                                    <?php echo e(Form::number('amount', (int)@$wallet->balance, ['class' => 'input100 form-control', 'placeholder'=>'Amount','required'=>'required','min'=>1])); ?>

                                    <div class="invalid-feedback">Please enter amount.</div>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <?php echo e(Form::label('message', 'Message')); ?>

                                    <textarea class="input100 form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                    <div class="invalid-feedback">Please enter message.</div>
                                </div>
                            </div>
                            <button class="btn btn-primary mt-5" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- ROW CLOSED -->
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div><?php /**PATH /home2/vijaycku/public_html/resources/views/backend/inc/debit/add.blade.php ENDPATH**/ ?>