
<?php $__env->startSection('title', 'Profile'); ?>
<?php $__env->startSection('keywords', 'Profile Keywords'); ?>
<?php $__env->startSection('description', 'Profile Description'); ?>
<?php $__env->startSection('contant'); ?>
<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<div class="main-content mt-0 hor-content">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container">
            <!-- PAGE-HEADER -->
            <div class="mt-3">
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
            </div>
            <div class="page-header">
                <h1 class="page-title">Profile</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </div>
            </div> <!-- PAGE-HEADER END -->
            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <?php echo e(Form::open(['url' => route('user.changepassword'), 'method'=>'POST', 'files' => true, 'class' => 'needs-validation','novalidate'])); ?>

                        <div class="card-header">
                            <div class="card-title">Edit Password</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="text-center chat-image mb-5">
                                        <div class="avatar avatar-xxl chat-profile mb-3 brround">
                                            <a class="" href="javascript:void(0)" style="position:relative;">
                                                <img alt="avatar" src="<?php echo e($user->profile_url); ?>" class="brround" style="height: 80px; width: 100%;">
                                                <?php if($user->status == 'true'): ?>
                                                <span style="position:absolute;border:10px solid green;border-radius: 100%;top: -30px;left: 0;"></span>
                                                <?php else: ?>
                                                <span style="position:absolute;border:10px solid #ccc;border-radius: 100%;top: -30px;left: 0;"></span>
                                                <?php endif; ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 table-responsive">
                                    <table class="table" style="border: 0;">
                                        <tr style="border: 0;">
                                            <th style="border: 0;">Name</th>
                                            <td style="border: 0;"><?php echo e($user->name); ?></td>
                                        </tr>
                                        <?php if($user->rewards->count()): ?>
                                        <tr style="border: 0;">
                                            <th style="border: 0;">Rank</th>
                                            <?php $__currentLoopData = $user->rewards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $reward): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($i < 1): ?>
                                            <td style="border: 0;"><?php echo e($reward->rewarddetail->name); ?></td>
                                            <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                        <?php endif; ?>
                                        <tr style="border: 0;">
                                            <th style="border: 0;">Document Status</th>
                                            <td style="border: 0;">

                                                <?php if($user->aadhar_number): ?>
                                                <?php if($user->is_document == 'pending'): ?>
                                                <span class="mb-1 fw-13 badge bg-warning-transparent rounded-pill text-warning p-2 px-3" style="text-transform: capitalize;"><?php echo e($user->is_document); ?></span>
                                                <?php elseif($user->is_document == 'canceled'): ?>
                                                <span class="mb-1 fw-13 badge bg-danger-transparent rounded-pill text-danger p-2 px-3" style="text-transform: capitalize;"><?php echo e($user->is_document); ?></span>
                                                <?php else: ?>
                                                <span class="mb-1 fw-13 badge bg-success-transparent rounded-pill text-success p-2 px-3" style="text-transform: capitalize;"><?php echo e($user->is_document); ?></span>
                                                <?php endif; ?>
                                                <?php else: ?>
                                                <span class="mb-1 fw-13 badge bg-warning-transparent rounded-pill text-warning p-2 px-3" style="text-transform: capitalize;">Not Uploaded</span>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group"> <label class="form-label">Current Password</label>
                                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                    <a href="#" class="input-group-text bg-white text-muted"> <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i> </a>
                                    <input class="input100 form-control" name="oldpassword" type="password" placeholder="Current Password" required>
                                    <div class="invalid-feedback">Please enter current password.</div>
                                </div>
                            </div>
                            <div class="form-group"> <label class="form-label">New Password</label>
                                <div class="wrap-input100 validate-input input-group" id="Password-toggle1">
                                    <a href="#" class="input-group-text bg-white text-muted"> <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i> </a>
                                    <input class="input100 form-control" type="password" name="newpassword" placeholder="New Password" required>
                                    <div class="invalid-feedback">Please enter new password.</div>
                                </div>
                            </div>
                            <div class="form-group"> <label class="form-label">Confirm Password</label>
                                <div class="wrap-input100 validate-input input-group" id="Password-toggle2">
                                    <a href="#" class="input-group-text bg-white text-muted"> <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i> </a>
                                    <input class="input100 form-control" type="password" name="confirmpassword" placeholder="Confirm Password" required>
                                    <div class="invalid-feedback">Please enter confirm password.</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        </form>
                    </div>

                    <div class="card panel-theme">
                        <div class="panel panel-primary">
                            <div class="card-header tab-menu-heading px-5 pt-3">
                                <div class="tabs-menu1" style="overflow: scroll;">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs" style="flex-wrap: nowrap;">
                                        <li style="border: 0;"><a href="#tab8" class="active" data-bs-toggle="tab">About</a></li>
                                        <li style="border: 0;"><a href="#tab9" data-bs-toggle="tab" class="">Nominee</a></li>
                                        <li style="border: 0;"><a href="#tab13" data-bs-toggle="tab" class="">Bank Details</a></li>
                                        <li style="border: 0;"><a href="#tab12" data-bs-toggle="tab" class="">Visiting Card</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body panel-body tabs-menu-body p-5">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab8">
                                        <ul class="list-group no-margin">
                                            <li class="list-group-item d-flex ps-3">
                                                <div class="social social-profile-buttons me-2">
                                                    <a class="social-icon text-primary" href="mailto:<?php echo e($user->email); ?>">
                                                        <i class="fe fe-mail"></i></a>
                                                </div> <span class="my-auto"><?php echo e($user->email); ?></span>
                                            </li>
                                            <li class="list-group-item d-flex ps-3">
                                                <div class="social social-profile-buttons me-2">
                                                    <a class="social-icon text-primary" href="mailto:<?php echo e($user->mobile); ?>">
                                                        <i class="fe fe-phone"></i></a>
                                                </div> <span class="my-auto"><?php echo e($user->mobile); ?></span>
                                            </li>
                                            <!-- <li class="list-group-item d-flex ps-3">
                                                <div class="social social-profile-buttons me-2">
                                                    <a class="social-icon text-primary" href="javascript:void(0)">
                                                        <i class="fe fe-arrow-right"></i></a>
                                                </div> <span class="my-auto">Lavel <?php echo e($user->lavel); ?></span>
                                            </li> -->
                                            <li class="list-group-item d-flex ps-3">
                                                <div class="social social-profile-buttons me-2">
                                                    <a class="social-icon text-primary" href="javascript:void(0)">
                                                        <i class="fa fa-qrcode"></i></a>
                                                </div> <span class="my-auto"><?php echo e($user->referal_code); ?></span>
                                            </li>
                                            <?php if($user->referal_id): ?>
                                            <li class="list-group-item d-flex ps-3">
                                                <div class="social social-profile-buttons me-2">
                                                    <a class="social-icon text-primary" href="javascript:void(0)">
                                                        <i class="fa fa-qrcode"></i></a>
                                                </div> <span class="my-auto"><?php echo e($user->referal_id ? $user->referal_user_name : 'N/A'); ?></span>
                                            </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="tab9">
                                        <div class="panel panel-primary">
                                            <div class="tab-menu-heading" style="border: 0 !important;">
                                                <div class="tabs-menu1">
                                                    <ul class="nav panel-tabs" style="flex-direction: row-reverse !important; flex-wrap: nowrap;">
                                                        <li style="border: 0;"><a href="#tab11" style="padding: 0px 15px 10px 10px;" data-bs-toggle="tab" class=""><i class="fe fe-edit"></i></a></li>
                                                        <li style="border: 0;"><a href="#tab10" style="padding: 0px 15px 10px 10px;" class="active" data-bs-toggle="tab"><i class="fe fe-list"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="panel-body tabs-menu-body" style="padding: 10px 0;">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab10">
                                                        <?php if($user->nominee): ?>
                                                        <ul class="list-group no-margin">
                                                            <li class="list-group-item d-flex ps-3">
                                                                <b class="my-auto">Name - </b>&nbsp;
                                                                <span class="my-auto"> <?php echo e($user->nominee->name); ?></span>
                                                            </li>
                                                            <li class="list-group-item d-flex ps-3">
                                                                <b class="my-auto">Email - </b>&nbsp;
                                                                <span class="my-auto"> <?php echo e($user->nominee->email); ?></span>
                                                            </li>
                                                            <li class="list-group-item d-flex ps-3">
                                                                <b class="my-auto">Mobile - </b>&nbsp;
                                                                <span class="my-auto"> <?php echo e($user->nominee->mobile); ?></span>
                                                            </li>
                                                            <li class="list-group-item d-flex ps-3">
                                                                <b class="my-auto">Aadhar Number - </b>&nbsp;
                                                                <span class="my-auto"> <?php echo e($user->nominee->aadhar_number); ?></span>
                                                            </li>
                                                            <li class="list-group-item d-flex ps-3">
                                                                <b class="my-auto">Pan Number - </b>&nbsp;
                                                                <span class="my-auto"> <?php echo e($user->nominee->pan_number); ?></span>
                                                            </li>
                                                            <li class="list-group-item d-flex ps-3">
                                                                <b class="my-auto">Relation - </b>&nbsp;
                                                                <span class="my-auto"> <?php echo e($user->nominee->relation); ?></span>
                                                            </li>
                                                        </ul>
                                                        <?php else: ?>
                                                        <div class="text-center">
                                                            No record found.
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="tab-pane" id="tab11">
                                                        <?php echo e(Form::open(['url' => route('user.nominee'), 'method'=>'POST', 'files' => true, 'class' => 'needs-validation','novalidate'])); ?>

                                                        <?php echo e(csrf_field()); ?>

                                                        <div class="form-group">
                                                            <div class="wrap-input100 validate-input">
                                                                <label for="record[name]">Name</label>
                                                                <?php echo e(Form::text('record[name]', @$user->nominee ? @$user->nominee->name : '', ['class' => 'input100 form-control', 'placeholder'=>'Name','required'=>'required'])); ?>

                                                                <div class="invalid-feedback">Please enter name.</div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <div class="wrap-input100 validate-input">
                                                                        <label for="record[email]">Email</label>
                                                                        <?php echo e(Form::email('record[email]', @$user->nominee ? @$user->nominee->email : '', ['class' => 'input100 form-control', 'placeholder'=>'Email'])); ?>

                                                                        <div class="invalid-feedback">Please enter email.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <div class="wrap-input100 validate-input">
                                                                        <label for="record[mobile]">Mobile</label>
                                                                        <?php echo e(Form::tel('record[mobile]', @$user->nominee ? @$user->nominee->mobile : '', ['class' => 'input100 form-control', 'placeholder'=>'Mobile','required'=>'required'])); ?>

                                                                        <div class="invalid-feedback">Please enter email.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <div class="wrap-input100 validate-input">
                                                                        <label for="record[aadhar_number]">Aadhar Number</label>
                                                                        <?php echo e(Form::number('record[aadhar_number]', @$user->nominee ? @$user->nominee->aadhar_number : '', ['class' => 'input100 form-control', 'required'=>'required','placeholder'=>'Aadhar Number'])); ?>

                                                                        <div class="invalid-feedback">Please enter valid aadhar number.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <div class="wrap-input100 validate-input">
                                                                        <label for="record[pan_number]">Pan Number</label>
                                                                        <?php echo e(Form::text('record[pan_number]', @$user->nominee ? @$user->nominee->pan_number : '', ['class' => 'input100 form-control', 'placeholder'=>'Pan Number','length'=>10])); ?>

                                                                        <div class="invalid-feedback">Please enter valid pan number.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="wrap-input100 validate-input">
                                                                <label for="record[relation]">Relation</label>
                                                                <select name="record[relation]" class="input100 form-control" required>
                                                                    <option value="">Select Relation</option>
                                                                    <option value="father" <?php if(@$user->nominee && @$user->nominee->relation == 'father'): ?> selected <?php endif; ?>>Father</option>
                                                                    <option value="mother" <?php if(@$user->nominee && @$user->nominee->relation == 'mother'): ?> selected <?php endif; ?>>Mother</option>
                                                                    <option value="son" <?php if(@$user->nominee && @$user->nominee->relation == 'son'): ?> selected <?php endif; ?>>Son</option>
                                                                    <option value="daughter" <?php if(@$user->nominee && @$user->nominee->relation == 'daughter'): ?> selected <?php endif; ?>>Daughter</option>
                                                                    <option value="wife" <?php if(@$user->nominee && @$user->nominee->relation == 'wife'): ?> selected <?php endif; ?>>Wife</option>
                                                                    <option value="husband" <?php if(@$user->nominee && @$user->nominee->relation == 'husband'): ?> selected <?php endif; ?>>Husband</option>
                                                                    <option value="brother" <?php if(@$user->nominee && @$user->nominee->relation == 'brother'): ?> selected <?php endif; ?>>Brother</option>
                                                                    <option value="sister" <?php if(@$user->nominee && @$user->nominee->relation == 'sister'): ?> selected <?php endif; ?>>Sister</option>
                                                                    <option value="uncle" <?php if(@$user->nominee && @$user->nominee->relation == 'uncle'): ?> selected <?php endif; ?>>Uncle</option>
                                                                    <option value="other" <?php if(@$user->nominee && @$user->nominee->relation == 'other'): ?> selected <?php endif; ?>>Other</option>
                                                                </select>
                                                                <div class="invalid-feedback">Please select relation.</div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab13">
                                        <div class="panel panel-primary">
                                            <div class="col-lg-12 col-md-12 mb-2">
                                                <?php if($user->bankdetail): ?>
                                                <?php if($user->bankdetail->status == 'completed'): ?>
                                                <div class="alert alert-block" style="color: #09ad95; background-color: rgba(9, 173, 149, 0.2); border-color: rgba(9, 173, 149, 0.1);">
                                                    Bank Details Approved Successfully. Please do not upload again.
                                                </div>
                                                <?php elseif($user->bankdetail->status == 'canceled'): ?>
                                                <div class="alert alert-block" style="color: #e82646; background-color: rgba(232, 38, 70, 0.2); border-color: rgba(232, 38, 70, 0.1);">
                                                    Bank Details has been Rejected. Please upload again.
                                                </div>
                                                <?php else: ?>
                                                <div class="alert alert-block" style="color: #f7b731; background-color: rgba(247, 183, 49, 0.2); border-color: rgba(247, 183, 49, 0.1);">
                                                    Bank Details is in Queue. Please have some Patience.
                                                </div>
                                                <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                            <?php if($user->bankdetail): ?>
                                            <?php if($user->bankdetail->status != 'completed'): ?>
                                            <div class="tab-menu-heading" style="border: 0 !important;">
                                                <div class="tabs-menu1">
                                                    <ul class="nav panel-tabs" style="flex-direction: row-reverse !important; flex-wrap: nowrap;">
                                                        <li style="border: 0;"><a href="#tab15" style="padding: 0px 15px 10px 10px;" data-bs-toggle="tab" class=""><i class="fe fe-edit"></i></a></li>
                                                        <li style="border: 0;"><a href="#tab14" style="padding: 0px 15px 10px 10px;" class="active" data-bs-toggle="tab"><i class="fe fe-list"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php else: ?>
                                            <div class="tab-menu-heading" style="border: 0 !important;">
                                                <div class="tabs-menu1">
                                                    <ul class="nav panel-tabs" style="flex-direction: row-reverse !important; flex-wrap: nowrap;">
                                                        <li style="border: 0;"><a href="#tab15" style="padding: 0px 15px 10px 10px;" data-bs-toggle="tab" class=""><i class="fe fe-edit"></i></a></li>
                                                        <li style="border: 0;"><a href="#tab14" style="padding: 0px 15px 10px 10px;" class="active" data-bs-toggle="tab"><i class="fe fe-list"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <div class="panel-body tabs-menu-body" style="padding: 10px 0;">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab14">
                                                        <?php if($user->bankdetail): ?>
                                                        <ul class="list-group no-margin">
                                                            <li class="list-group-item d-flex ps-3">
                                                                <b class="my-auto">Name - </b>&nbsp;
                                                                <span class="my-auto"> <?php echo e($user->bankdetail->name); ?></span>
                                                            </li>
                                                            <li class="list-group-item d-flex ps-3">
                                                                <b class="my-auto">Account Number - </b>&nbsp;
                                                                <span class="my-auto"> <?php echo e($user->bankdetail->account_number); ?></span>
                                                            </li>
                                                            <li class="list-group-item d-flex ps-3">
                                                                <b class="my-auto">IFSC Code - </b>&nbsp;
                                                                <span class="my-auto"> <?php echo e($user->bankdetail->ifsc_code); ?></span>
                                                            </li>
                                                            <li class="list-group-item d-flex ps-3">
                                                                <b class="my-auto">Bank Name - </b>&nbsp;
                                                                <span class="my-auto"> <?php echo e($user->bankdetail->bank_name); ?></span>
                                                            </li>
                                                            <li class="list-group-item d-flex ps-3">
                                                                <b class="my-auto">Bank Passbook / Cheque Copy - </b>&nbsp;
                                                                <span class="my-auto">
                                                                    Image &nbsp;&nbsp;<a target="_blank" href="<?php echo e(url('/storage/userbank',$user->bankdetail->image)); ?>"><span> <i class="fa fa-paperclip fs-20"></i></span></a></span>
                                                            </li>
                                                            <li class="list-group-item d-flex ps-3">
                                                                <b class="my-auto">UPI Id - </b>&nbsp;
                                                                <span class="my-auto"> <?php echo e($user->bankdetail->upi_id); ?></span>
                                                            </li>
                                                        </ul>
                                                        <?php else: ?>
                                                        <div class="text-center">
                                                            No record found.
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="tab-pane" id="tab15">
                                                        <?php echo e(Form::open(['url' => route('user.bankdetail'), 'method'=>'POST', 'files' => true, 'class' => 'needs-validation','novalidate'])); ?>

                                                        <?php echo e(csrf_field()); ?>

                                                        <div class="form-group">
                                                            <div class="wrap-input100 validate-input">
                                                                <label for="record[name]">Account Holder Name</label>
                                                                <?php echo e(Form::text('record1[name]', @$user->bankdetail ? @$user->bankdetail->name : '', ['class' => 'input100 form-control', 'placeholder'=>'Account Holder Name','required'=>'required'])); ?>

                                                                <div class="invalid-feedback">Please enter name.</div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <div class="wrap-input100 validate-input">
                                                                        <label for="record[account_number]">Account Number</label>
                                                                        <?php echo e(Form::text('record1[account_number]', @$user->bankdetail ? @$user->bankdetail->account_number : '', ['class' => 'input100 form-control', 'placeholder'=>'Account Number','required'=>'required'])); ?>

                                                                        <div class="invalid-feedback">Please enter account number.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <div class="wrap-input100 validate-input">
                                                                        <label for="record[ifsc_code]">IFSC Code</label>
                                                                        <?php echo e(Form::text('record1[ifsc_code]', @$user->bankdetail ? @$user->bankdetail->ifsc_code : '', ['class' => 'input100 form-control', 'placeholder'=>'IFSC Code','required'=>'required'])); ?>

                                                                        <div class="invalid-feedback">Please enter ifsc code.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <div class="wrap-input100 validate-input">
                                                                        <label for="record[bank_name]">Bank Name</label>
                                                                        <?php echo e(Form::text('record1[bank_name]', @$user->bankdetail ? @$user->bankdetail->bank_name : '', ['class' => 'input100 form-control', 'required'=>'required','placeholder'=>'Bank Name'])); ?>

                                                                        <div class="invalid-feedback">Please enter valid bank name.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <div class="wrap-input100 validate-input">
                                                                        <label for="bank_image">Image</label>
                                                                        <input type="file" class="form-control" accept="image/png, image/jpeg" name="bank_image" id="image" placeholder="Image" required>
                                                                        <div class="invalid-feedback">Please choose image.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <div class="wrap-input100 validate-input">
                                                                        <label for="record1[upi_id]">UPI Id</label>
                                                                        <?php echo e(Form::text('record1[upi_id]', @$user->bankdetail ? @$user->bankdetail->upi_id : '', ['class' => 'input100 form-control', 'placeholder'=>'UPI Id','length'=>10])); ?>

                                                                        <div class="invalid-feedback">Please enter valid upi id.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab12">
                                        <div id="divToPrint" style="overflow: scroll;">
                                            <div style="margin-left: auto; margin-right: auto; display: flex; flex-wrap: wrap;">
                                                <div style="margin: 5px 5px; page-break-after: always;">
                                                    <div style="page-break-before: always"></div>
                                                    <div style="border-radius: 8px; background-color: #fff; height: 225px; width: 426px; position: relative; overflow: hidden; margin: auto; background-size: 100% 100%;background-position: 0px 0px;background-image: linear-gradient(90deg, #A100FFFF 0%, #71C4FFFF 100%);">
                                                        <!-- <div class="">&nbsp;</div> -->
                                                        <div style="position: relative; color: #fff;">
                                                            <div style="padding: 30px;">
                                                                <div style="position: absolute; right: 25px; top: 25px;">
                                                                    <img src="<?php echo e(url('storage/logo',$setting->logo)); ?>" width="100px">
                                                                </div>
                                                                <div style="display:flex;">
                                                                    <img alt="avatar" src="<?php echo e($user->profile_url); ?>" width="40px" height="40px" style="border-radius:50%">
                                                                    <div style="padding-left:10px;"> <span style="font-size: 1.0em; font-weight: bold; text-transform: capitalize;"><?php echo e($user->name); ?></span> <br><?php echo e($user->referal_code); ?></div>
                                                                </div>
                                                                <!-- <div style="font-size: 2.0em; font-weight: bold; text-transform: capitalize;"><?php echo e($user->name); ?></div>
                                                                <div style="text-transform: capitalize;"></div>
                                                                <div><?php echo e($user->referal_code); ?></div> -->
                                                                <div style="margin-top: 100px; line-height: 20px; display: flex; justify-content: space-between;">
                                                                    <div style="font-weight: bold;"><i class="fa fa-envelope" style="color: #fff;"></i> <?php echo e($user->email); ?></div>
                                                                    <div style="font-weight: bold;"><i class="fa fa-phone" style="color: #fff;"></i> <?php echo e($user->mobile); ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="clear: both"></div>
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <!-- <div class="btn btn-primary" onclick="printIdCards()">Download</div> -->
                                            <a href="<?php echo e(route('card.print',$user->id)); ?>" target="_blank" class="btn btn-primary">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card">
                        <?php echo e(Form::open(['url' => route('user.editprofile'), 'method'=>'POST', 'files' => true, 'class' => 'needs-validation','novalidate'])); ?>

                        <div class="card-header">
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <?php echo e(Form::text('name', '', ['class' => 'form-control', 'placeholder'=>'Name','id'=>'name','required'=>'required'])); ?>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <?php echo e(Form::email('email', '', ['class' => 'form-control', 'placeholder'=>'Email','id'=>'email','required'=>'required','disabled'])); ?>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <label for="mobile">Mobile</label>
                                        <?php echo e(Form::number('mobile', '', ['class' => 'form-control', 'placeholder'=>'Mobile','id'=>'mobile','required'=>'required','disabled' ])); ?>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <label for="mobile">Gender</label>
                                        <select name="gender" class="form-control" required>
                                            <option>Select Gender</option>
                                            <option value="male" <?php if($user->gender == 'male'): ?> selected <?php endif; ?>>Male</option>
                                            <option value="female" <?php if($user->gender == 'female'): ?> selected <?php endif; ?>>Female</option>
                                            <option value="other" <?php if($user->gender == 'other'): ?> selected <?php endif; ?>>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">About Me</label>
                                        <textarea class="form-control" name="bio" rows="6"><?php echo e($user->bio); ?></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 mb-2">
                                    <?php if($user->aadhar_number): ?>
                                    <?php if($user->is_document == 'completed'): ?>
                                    <div class="alert alert-block" style="color: #09ad95; background-color: rgba(9, 173, 149, 0.2); border-color: rgba(9, 173, 149, 0.1);">
                                        Document Approved Successfully. Please do not upload again.
                                    </div>
                                    <?php elseif($user->is_document == 'canceled'): ?>
                                    <div class="alert alert-block" style="color: #e82646; background-color: rgba(232, 38, 70, 0.2); border-color: rgba(232, 38, 70, 0.1);">
                                        Document has been Rejected. Please upload again.
                                    </div>
                                    <?php else: ?>
                                    <div class="alert alert-block" style="color: #f7b731; background-color: rgba(247, 183, 49, 0.2); border-color: rgba(247, 183, 49, 0.1);">
                                        Document is in Queue. Please have some Patience.
                                    </div>
                                    <?php endif; ?>
                                    <?php else: ?>
                                    <div class="alert alert-block" style="color: #f7b731; background-color: rgba(247, 183, 49, 0.2); border-color: rgba(247, 183, 49, 0.1);">
                                        Document not uploaded. Please upload documents.
                                    </div>
                                    <?php endif; ?>
                                </div>
                                    <?php if($user->is_document == 'completed'): ?>
                                    <input type="hidden" name="aadhar_number" value="<?php echo e($user->aadhar_number); ?>" />
                                    <input type="hidden" name="pan_number" value="<?php echo e($user->pan_number); ?>" />
                                    <?php endif; ?>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <label for="aadhar">Aadhar Number</label>
                                        <?php echo e(Form::number('aadhar_number', '', ['class' => 'form-control', 'placeholder'=>'Aadhar Number','id'=>'aadhar','required'=>'required','disabled'=> $user->is_document == 'completed' ? true : false])); ?>

                                        <div class="invalid-feedback">Please enter aadhar number.</div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <label for="pan">Pan Number</label>
                                        <?php echo e(Form::text('pan_number', '', ['class' => 'form-control', 'placeholder'=>'Pan Number','id'=>'pan','required'=>'required','disabled'=> $user->is_document == 'completed' ? true : false])); ?>

                                        <div class="invalid-feedback">Please enter pan number.</div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control" accept="image/*" name="image" id="image" placeholder="Image" <?php if(!$user->image): ?>required <?php endif; ?> <?php if($user->is_document == 'completed'): ?>disabled <?php endif; ?>>
                                        <div class="invalid-feedback">Please choose image.</div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <label for="aadhar_front">Aadharcard Front</label>
                                        <input type="file" class="form-control" accept="image/*" name="aadhar_front" id="aadhar_front" placeholder="Aadharcard Front" <?php if(!$user->aadhar_front): ?>required <?php endif; ?> <?php if($user->is_document == 'completed'): ?>disabled <?php endif; ?>>
                                        <div class="invalid-feedback">Please choose aadharcard front image.</div>
                                        <?php if($user->aadhar_front): ?>
                                        <div><img src="<?php echo e(url('storage/aadharcard',$user->aadhar_front)); ?>" width="100%" class="mt-3" style="height: 200px; object-fit: contain;"></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <label for="aadhar_back">Aadharcard Back</label>
                                        <input type="file" class="form-control" accept="image/*" name="aadhar_back" id="aadhar_back" placeholder="Aadharcard Back" <?php if(!$user->aadhar_back): ?>required <?php endif; ?> <?php if($user->is_document == 'completed'): ?>disabled <?php endif; ?>>
                                        <div class="invalid-feedback">Please choose aadharcard back image.</div>
                                        <?php if($user->aadhar_back): ?>
                                        <div><img src="<?php echo e(url('storage/aadharcard',$user->aadhar_back)); ?>" width="100%" class="mt-3" style="height: 200px; object-fit: contain;"></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <label for="pan_image">Pancard Image</label>
                                        <input type="file" class="form-control" accept="image/*" name="pan_image" id="pan_image" placeholder="Pancard Image" <?php if(!$user->pan_image): ?>required <?php endif; ?> <?php if($user->is_document == 'completed'): ?>disabled <?php endif; ?>>
                                        <div class="invalid-feedback">Please choose pancard image.</div>
                                        <?php if($user->pan_image): ?>
                                        <div><img src="<?php echo e(url('storage/pancard',$user->pan_image)); ?>" width="100%" class="mt-3" style="height: 200px; object-fit: contain;"></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <!-- <a href="#" class="btn btn-success my-1">Save</a>  -->

                            <button type="submit" class="btn btn-success my-1 mt-5">Update</button>
                            <!-- <a href="#" class="btn btn-danger my-1">Cancel</a>  -->
                        </div>
                        </form>
                    </div>
                </div>
            </div> <!-- ROW-1 CLOSED -->
        </div>
        <!--CONTAINER CLOSED -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.usermaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/user/profile.blade.php ENDPATH**/ ?>