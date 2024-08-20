<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Edit User</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.user.index')); ?>">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <!-- ROW OPEN -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit User</h3>
                        </div>
                        <div class="card-body">
                            <?php echo e(Form::open(['url' => route('admin.user.update',$user->id), 'method'=>'PUT', 'files' => true, 'class' => 'needs-validation','novalidate'])); ?>

                            <!-- <form method="post" action="<?php echo e(route('admin.user.store')); ?>" files="true" class="needs-validation" novalidate=""> -->
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
                                <div class="col-xl-4 mb-3">
                                    <?php echo e(Form::label('name', 'Name')); ?>

                                    <?php echo e(Form::text('name', '', ['class' => 'form-control', 'placeholder'=>'Name','required'=>'required'])); ?>

                                    <div class="invalid-feedback">Please enter name.</div>
                                </div>
                                <div class="col-xl-4 mb-3">
                                    <?php echo e(Form::label('email', 'Email')); ?>

                                    <?php echo e(Form::email('email', '', ['class' => 'form-control', 'placeholder'=>'Email','required'=>'required'])); ?>

                                    <div class="invalid-feedback">Please enter valid email.</div>
                                </div>
                                <div class="col-xl-4 mb-3">
                                    <?php echo e(Form::label('password', 'Password')); ?>

                                    <?php if(@!$user): ?>
                                    <?php echo e(Form::input('password','password', '', ['class' => 'form-control', 'placeholder'=>'Password','required'=>'required','minlength'=>'6'])); ?>

                                    <?php else: ?>
                                    <?php echo e(Form::input('password','password', '', ['class' => 'form-control', 'placeholder'=>'Password'])); ?>

                                    <?php endif; ?>
                                    <div class="invalid-feedback">Please enter valid password.</div>
                                </div>
                                <div class="col-xl-3 mb-3">
                                    <?php echo e(Form::label('mobile', 'Mobile')); ?>

                                    <?php echo e(Form::text('mobile', '', ['class' => 'form-control', 'placeholder'=>'Mobile','required'=>'required','minlength'=>'10','maxlength'=>'12'])); ?>

                                    <div class="invalid-feedback">Please enter valid mobile number.</div>
                                </div>
                                <div class="col-xl-3 mb-3">
                                    <?php echo e(Form::label('aadhar_number', 'Aadhar Number')); ?>

                                    <?php echo e(Form::text('aadhar_number', '', ['class' => 'form-control', 'placeholder'=>'Aadhar Number','required'=>'required','minlength'=>'12','maxlength'=>'12'])); ?>

                                    <div class="invalid-feedback">Please enter valid aadhar number.</div>
                                </div>
                                <div class="col-xl-3 mb-3">
                                    <?php echo e(Form::label('aadhar_front', 'Aadhar Front Image')); ?>

                                    <?php if(@!$user->aadhar_front): ?>
                                    <?php echo e(Form::file('aadhar_front',['class'=>'form-control','required'=>'required'])); ?>

                                    <?php else: ?>
                                    <?php echo e(Form::file('aadhar_front',['class'=>'form-control'])); ?>

                                    <?php endif; ?>
                                    <div class="invalid-feedback">Please choose aadhar front image.</div>
                                </div>
                                <div class="col-xl-3 mb-3">
                                    <?php echo e(Form::label('aadhar_back', 'Aadhar Back Image')); ?>

                                    <?php if(@!$user->aadhar_back): ?>
                                    <?php echo e(Form::file('aadhar_back',['class'=>'form-control','required'=>'required'])); ?>

                                    <?php else: ?>
                                    <?php echo e(Form::file('aadhar_back',['class'=>'form-control'])); ?>

                                    <?php endif; ?>
                                    <div class="invalid-feedback">Please choose aadhar back image.</div>
                                </div>
                                <div class="col-xl-4 mb-3">
                                    <?php echo e(Form::label('image', 'Image')); ?>

                                    <?php if(@!$user->image): ?>
                                    <?php echo e(Form::file('image',['class'=>'form-control','required'=>'required'])); ?>

                                    <?php else: ?>
                                    <?php echo e(Form::file('image',['class'=>'form-control'])); ?>

                                    <?php endif; ?>
                                    <div class="invalid-feedback">Please choose image.</div>
                                </div>
                                <div class="col-xl-4 mb-3">
                                    <?php echo e(Form::label('pan_number', 'Pancard Number')); ?>

                                    <?php echo e(Form::text('pan_number', '', ['class' => 'form-control', 'placeholder'=>'Pancard Number','required'=>'required','minlength'=>'10','maxlength'=>'10','id'=>'pancard_number'])); ?>

                                    <div class="invalid-feedback">Please enter valid pancard number.</div>
                                </div>
                                <div class="col-xl-4 mb-3">
                                    <?php echo e(Form::label('pan_image', 'Pancard Image')); ?>

                                    <?php if(@!$user->pan_image): ?>
                                    <?php echo e(Form::file('pan_image',['class'=>'form-control','required'=>'required'])); ?>

                                    <?php else: ?>
                                    <?php echo e(Form::file('pan_image',['class'=>'form-control'])); ?>

                                    <?php endif; ?>
                                    <div class="invalid-feedback">Please choose pancard image.</div>
                                </div>
                            </div>
                            <!-- <div class="form-row">
                                    <div class="col-xl-6 mb-3"> <label for="validationCustom03">City</label> <input type="text" class="form-control" id="validationCustom03" required="">
                                        <div class="invalid-feedback">Please provide a valid city.</div>
                                    </div>
                                    <div class="col-xl-3 mb-3"> <label for="validationCustom04">State</label>
                                        <select class="form-control  select2" id="validationCustom04" required="">
                                            <option selected="" disabled="" value="">State</option>
                                            <option>New york</option>
                                            <option>New york</option>
                                            <option>New york</option>
                                            <option>New york</option>
                                            <option>New york</option>
                                            <option>New york</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid state.</div>
                                    </div>
                                    <div class="col-xl-3 mb-3"> <label for="validationCustom05">Zip</label>
                                        <input type="text" class="form-control" id="validationCustom05" required="">
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>
                                </div> -->
                            <button class="btn btn-primary mt-5" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- ROW CLOSED -->
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div><?php /**PATH /home2/vijaycku/public_html/resources/views/backend/inc/user/edit.blade.php ENDPATH**/ ?>