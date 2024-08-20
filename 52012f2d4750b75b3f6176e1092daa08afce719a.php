<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Add Reward</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.reward.index')); ?>">Reward</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Reward</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <!-- ROW OPEN -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Reward</h3>
                        </div>
                        <div class="card-body">
                            <?php echo e(Form::open(['url' => route('admin.reward.store'), 'method'=>'POST', 'files' => true, 'class' => 'needs-validation','novalidate'])); ?>

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
                            <?php
                            $lavelArr = [
                                '' => 'Select lavel',
                                1 => 'lavel 1',
                                2 => 'lavel 2',
                                3 => 'lavel 3',
                                4 => 'lavel 4',
                                5 => 'lavel 5',
                                6 => 'lavel 6',
                                7 => 'lavel 7',
                            ];
                            ?>
                            <div class="form-row">
                                <div class="col-xl-8 mb-3">
                                    <?php echo e(Form::label('name', 'Name')); ?>

                                    <?php echo e(Form::text('name', '', ['class' => 'form-control', 'placeholder'=>'Name','required'=>'required'])); ?>

                                    <div class="invalid-feedback">Please enter name.</div>
                                </div>
                                <div class="col-xl-4 mb-3">
                                    <?php echo e(Form::label('image', 'Image')); ?>

                                    <?php echo e(Form::file('image',['class'=>'form-control','required'=>'required'])); ?>

                                    <div class="invalid-feedback">Please choose image.</div>
                                </div>
                                <div class="col-xl-4 mb-3">
                                    <?php echo e(Form::label('lavel', 'Lavel')); ?>

                                    <?php echo e(Form::select('lavel', $lavelArr, '', ['class' => 'form-control select2','required'=>'required'])); ?>

                                    <div class="invalid-feedback">Please select lavel.</div>
                                </div>
                                <div class="col-xl-4 mb-3">
                                    <?php echo e(Form::label('user', 'User')); ?>

                                    <?php echo e(Form::number('user', '', ['class' => 'form-control', 'placeholder'=>'User','required'=>'required','min'=>1])); ?>

                                    <div class="invalid-feedback">Please enter user.</div>
                                </div>
                                <div class="col-xl-4 mb-3">
                                    <?php echo e(Form::label('reward', 'Reward')); ?>

                                    <?php echo e(Form::number('reward', '', ['class' => 'form-control', 'placeholder'=>'Reward','required'=>'required'])); ?>

                                    <div class="invalid-feedback">Please enter reward.</div>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <?php echo e(Form::label('notes', 'Notes')); ?>

                                    <?php echo e(Form::textarea('notes', '', ['class' => 'form-control', 'placeholder'=>'Notes','rows'=>'3'])); ?>

                                    <div class="invalid-feedback">Please enter notes.</div>
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
</div><?php /**PATH /home2/vijaycku/public_html/resources/views/backend/inc/reward/add.blade.php ENDPATH**/ ?>