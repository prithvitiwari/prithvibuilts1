<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Settings</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Settings</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <!-- ROW OPEN -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="panel panel-primary">
                            <div class="card-header tab-menu-heading px-5 pt-3">
                                <div class="tabs-menu1">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#tab5" class="active" data-bs-toggle="tab">General</a></li>
                                        <li><a href="#tab7" data-bs-toggle="tab" class="">Root (%)</a></li>
                                        <li><a href="#tab6" data-bs-toggle="tab" class="">Level (₹)</a></li>
                                        <li><a href="#tab9" data-bs-toggle="tab" class="">Product Reward (%)</a></li>
                                        <li><a href="#tab8" data-bs-toggle="tab" class="">Withdraw Amount (₹)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body panel-body tabs-menu-body p-5">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        <form method="post" action="<?php echo e(route('admin.setting.update')); ?>" files="true" class="needs-validation" novalidate="" enctype="multipart/form-data">
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
                                                <div class="col-xl-3 mb-3">
                                                    <?php echo e(Form::label('site_name', 'Site Name')); ?>

                                                    <?php echo e(Form::text('site_name', '', ['class' => 'form-control', 'placeholder'=>'Site Name','required'=>'required'])); ?>

                                                    <div class="invalid-feedback">Please enter site name.</div>
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    <label for="validationCustom02">Tagline</label>
                                                    <input type="text" class="form-control" id="validationCustom02" placeholder="Tagline">
                                                    <div class="invalid-feedback">Please enter tagline.</div>
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    <?php echo e(Form::label('email', 'Email')); ?>

                                                    <?php echo e(Form::email('email', '', ['class' => 'form-control', 'placeholder'=>'Email','required'=>'required'])); ?>

                                                    <div class="invalid-feedback">Please enter email.</div>
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    <?php echo e(Form::label('mobile', 'Mobile')); ?>

                                                    <?php echo e(Form::text('mobile', '', ['class' => 'form-control', 'placeholder'=>'Mobile'])); ?>

                                                    <div class="invalid-feedback">Please enter mobile.</div>
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    <?php echo e(Form::label('logo', 'Logo')); ?>

                                                    <?php echo e(Form::file('logo', ['class' => 'form-control', 'placeholder'=>'Logo'])); ?>

                                                    <div class="invalid-feedback">Please enter logo.</div>
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    <?php echo e(Form::label('Logo', 'Logo Image')); ?>

                                                    <div>
                                                        <?php if($setting->logo): ?>
                                                        <img src="<?php echo e(url('storage/logo',$setting->logo)); ?>" width="100px">
                                                        <?php else: ?>
                                                        N/A
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    <?php echo e(Form::label('favicon', 'Favicon')); ?>

                                                    <?php echo e(Form::file('favicon', ['class' => 'form-control', 'placeholder'=>'Favicon'])); ?>

                                                    <div class="invalid-feedback">Please enter favicon.</div>
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    <?php echo e(Form::label('favicon', 'Favicon Image')); ?>

                                                    <div>
                                                        <?php if($setting->favicon): ?>
                                                        <img src="<?php echo e(url('storage/favicon',$setting->favicon)); ?>" width="25px">
                                                        <?php else: ?>
                                                        N/A
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 mb-3">
                                                    <?php echo e(Form::label('address', 'Address')); ?>

                                                    <?php echo e(Form::textarea('address', '', ['class' => 'form-control', 'placeholder'=>'Address','rows'=>'3'])); ?>

                                                    <div class="invalid-feedback">Please enter address.</div>
                                                </div>
                                                <div class="col-xl-6 mb-3">
                                                    <?php echo e(Form::label('map', 'Map')); ?>

                                                    <?php echo e(Form::textarea('map', '', ['class' => 'form-control', 'placeholder'=>'Map','rows'=>'3'])); ?>

                                                    <div class="invalid-feedback">Please enter map.</div>
                                                </div>
                                                <hr>
                                                <?php
                                                $social_links = json_decode($setting->social_links);
                                                ?>
                                                <div class="col-xl-3 mb-3">
                                                    <label for="validationCustom02">Youtube</label>
                                                    <input type="text" name="social_links[youtube]" value="<?php echo e(@$social_links->youtube); ?>" class="form-control" id="validationCustom02" placeholder="Youtube">
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    <label for="validationCustom02">Facebook</label>
                                                    <input type="text" name="social_links[facebook]" value="<?php echo e(@$social_links->facebook); ?>" class="form-control" id="validationCustom02" placeholder="Facebook">
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    <label for="validationCustom02">Instagram</label>
                                                    <input type="text" name="social_links[instagram]" value="<?php echo e(@$social_links->instagram); ?>" class="form-control" id="validationCustom02" placeholder="Instagram">
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    <label for="validationCustom02">Twitter</label>
                                                    <input type="text" name="social_links[twitter]" value="<?php echo e(@$social_links->twitter); ?>" class="form-control" id="validationCustom02" placeholder="Twitter">
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    <label for="validationCustom02">Linkedin</label>
                                                    <input type="text" name="social_links[linkedin]" value="<?php echo e(@$social_links->linkedin); ?>" class="form-control" id="validationCustom02" placeholder="Linkedin">
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    <label for="validationCustom02">Whatsap (with country code)</label>
                                                    <input type="text" name="social_links[whatsapp]" value="<?php echo e(@$social_links->whatsapp); ?>" class="form-control" id="validationCustom02" placeholder="Whatsapp">
                                                </div>

                                                <div class="col-xl-3 mb-3">
                                                    <?php echo e(Form::label('gst_number', 'Gst Number')); ?>

                                                    <?php echo e(Form::text('gst_number', '', ['class' => 'form-control', 'placeholder'=>'Gst Number'])); ?>

                                                    <div class="invalid-feedback">Please enter gst number.</div>
                                                </div>
                                                <div class="col-xl-2 mb-3">
                                                    <?php echo e(Form::label('marketing_plan', 'Marketing Plan')); ?>

                                                    <?php echo e(Form::file('marketing_plan', ['class' => 'form-control', 'accept'=>'.pdf', 'placeholder'=>'Marketing Plan'])); ?>

                                                    <div class="invalid-feedback">Please select marketing plan.</div>
                                                </div>
                                                <div class="col-xl-1 mb-3">
                                                    <!-- <label style="margin-bottom: 20px;"></label> -->
                                                    <div  style="margin-top: 30px;">
                                                        <?php if($setting->marketing_plan): ?>
                                                        <a href="<?php echo e($setting->marketing_plan_url); ?>" target="_blank">Link</a>
                                                        <?php else: ?>
                                                        N/A
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12 mb-3">
                                                </div>
                                                <div class="col-xl-12 mb-3">
                                                    <?php echo e(Form::label('register_subject', 'After Register Email Subject')); ?>

                                                    <?php echo e(Form::text('register_subject', '', ['class' => 'form-control', 'placeholder'=>'After Register Email Subject','rows'=>'3'])); ?>

                                                    <div class="invalid-feedback">Please enter After register email subject.</div>
                                                </div>
                                                <div class="col-xl-12 mb-3">
                                                    <?php echo e(Form::label('register_message', 'After Register Email Message')); ?>

                                                    <?php echo e(Form::textarea('register_message', '', ['class' => 'form-control', 'placeholder'=>'After Register Email Message','rows'=>'3'])); ?>

                                                    <div class="invalid-feedback">Please enter After register email Message.</div>
                                                </div>
                                                <div class="col-xl-12 mb-3">
                                                    <?php echo e(Form::label('android_app', 'Android App Url')); ?>

                                                    <?php echo e(Form::textarea('android_app', '', ['class' => 'form-control', 'placeholder'=>'Android App Url','rows'=>'3'])); ?>

                                                    <div class="invalid-feedback">Please enter android app url.</div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary mt-5" type="submit">Submit</button>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab6">
                                        <form method="post" action="<?php echo e(route('admin.setting.update')); ?>" class="needs-validation" novalidate="">
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
                                            $s = json_decode($setting->reward);
                                            $val = 0;
                                            ?>
                                            <div class="form-row">
                                                <div class="col-xl-3">
                                                    <?php for($i = 1; $i <= 7; $i++): ?> <?php if(array_key_exists('lavel_'.$i,$s)): ?> <?php $v='lavel_' .$i; $val=$s->{$v};
                                                        ?>
                                                        <?php endif; ?>
                                                        <div class="form-group mb-3">
                                                            <?php echo e(Form::label('lavel', 'Lavel '.$i.' Reward')); ?>

                                                            <?php echo e(Form::number('reward[lavel_'.$i.']', $val, ['class' => 'form-control', 'placeholder'=>'Reward Price','required'=>'required','min'=>0])); ?>

                                                            <div class="invalid-feedback">Please enter reward price.</div>
                                                        </div>
                                                        <?php endfor; ?>
                                                </div>
                                            </div>
                                            <!-- <div class="col-xl-3 mb-3">
                                                    <?php echo e(Form::label('site_name', 'Site Name')); ?>

                                                    <?php echo e(Form::text('site_name', '', ['class' => 'form-control', 'placeholder'=>'Site Name','required'=>'required'])); ?>

                                                    <div class="invalid-feedback">Please enter site name.</div>
                                                </div> -->
                                            <button class="btn btn-primary mt-5" type="submit">Submit</button>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab7">
                                        <form method="post" action="<?php echo e(route('admin.setting.update')); ?>" class="needs-validation" novalidate="">
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
                                            $s = json_decode($setting->reward);
                                            $val = 0;
                                            ?>
                                            <div class="form-row">
                                                <div class="col-xl-3">
                                                    <div class="form-group mb-3">
                                                        <?php echo e(Form::label('lavel', 'Root user %')); ?>

                                                        <?php echo e(Form::number('rootuser',0 , ['class' => 'form-control', 'placeholder'=>'Root user %','required'=>'required','min'=>10])); ?>

                                                        <div class="invalid-feedback">Please enter reward price.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-xl-3 mb-3">
                                                    <?php echo e(Form::label('site_name', 'Site Name')); ?>

                                                    <?php echo e(Form::text('site_name', '', ['class' => 'form-control', 'placeholder'=>'Site Name','required'=>'required'])); ?>

                                                    <div class="invalid-feedback">Please enter site name.</div>
                                                </div> -->
                                            <button class="btn btn-primary mt-5" type="submit">Submit</button>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab9">
                                        <form method="post" action="<?php echo e(route('admin.setting.update')); ?>" class="needs-validation" novalidate="">
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
                                            $s = json_decode($setting->product_reward);
                                            $val = 0;
                                            ?>
                                            <div class="form-row">
                                                <div class="col-xl-3">
                                                    <?php for($i = 1; $i <= 7; $i++): ?> <?php if(array_key_exists('lavel_'.$i,$s)): ?> <?php $v='lavel_' .$i; $val=$s->{$v};
                                                        ?>
                                                        <?php endif; ?>
                                                        <div class="form-group mb-3">
                                                            <?php echo e(Form::label('lavel', 'Lavel '.$i.' Reward')); ?>

                                                            <?php echo e(Form::number('product_reward[lavel_'.$i.']', $val, ['class' => 'form-control', 'placeholder'=>'Reward Price','required'=>'required','min'=>0])); ?>

                                                            <div class="invalid-feedback">Please enter reward price.</div>
                                                        </div>
                                                        <?php endfor; ?>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary mt-5" type="submit">Submit</button>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab8">
                                        <form method="post" action="<?php echo e(route('admin.setting.update')); ?>" class="needs-validation" novalidate="">
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
                                            $dayArr = [
                                            ''=>'Select Day',
                                            'monday'=>'Monday',
                                            'tuesday'=>'Tuesday',
                                            'wednesday'=>'Wednesday',
                                            'thursday'=>'Thursday',
                                            'friday'=>'Friday',
                                            'saturday'=>'Saturday',
                                            'sunday'=>'Sunday',
                                            ];
                                            ?>
                                            <div class="form-row">
                                                <div class="col-xl-3">
                                                    <?php echo e(Form::label('withdraw_amount_day', 'Select Withdraw Day')); ?>

                                                    <div class="form-group mb-3">
                                                        <?php echo e(Form::select('withdraw_amount_day', $dayArr, '', ['class' => 'form-control select2 w-100','required'=>'required','style'=>'width: 100%;'])); ?>

                                                        <div class="invalid-feedback">Please select day.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-xl-3 mb-3">
                                                    <?php echo e(Form::label('site_name', 'Site Name')); ?>

                                                    <?php echo e(Form::text('site_name', '', ['class' => 'form-control', 'placeholder'=>'Site Name','required'=>'required'])); ?>

                                                    <div class="invalid-feedback">Please enter site name.</div>
                                                </div> -->
                                            <button class="btn btn-primary mt-5" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- ROW CLOSED -->
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div>
<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/backend/inc/setting.blade.php ENDPATH**/ ?>