</div>
<!-- Sidebar-right -->
<?php
$pages = App\Models\Page::select('id', 'name', 'slug', 'page_under')->where('page_under', '=', null)->orWhere('page_under', '=', 0)->get();
?>
<div class="sidebar sidebar-right sidebar-animate ps">
    <div class="panel panel-primary card mb-0 shadow-none border-0">
        <div class="tab-menu-heading border-0 d-flex p-3">
            <div class="card-title mb-0"><i class="fe fe-bell me-2"></i><span class=" pulse"></span>Notifications</div>
            <div class="card-options ms-auto"> <a href="javascript:void(0);" class="sidebar-icon text-end float-end me-3 mb-1" data-bs-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x text-white"></i></a> </div>
        </div>
        <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
            <div class="tabs-menu border-bottom">
                <!-- Tabs -->
                <ul class="nav panel-tabs">
                    <li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i class="fe fe-settings me-1"></i>Feeds</a></li>
                    <li><a href="#side2" data-bs-toggle="tab"><i class="fe fe-message-circle"></i> Chat</a></li>
                    <li><a href="#side3" data-bs-toggle="tab"><i class="fe fe-anchor me-1"></i>Timeline</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="side1">
                    <div class="p-3 fw-semibold ps-5">Feeds</div>
                    <div class="card-body pt-2">
                        <div class="browser-stats">
                            <div class="row mb-4">
                                <div class="col-sm-2 mb-sm-0 mb-3"> <span class="feeds avatar-circle brround bg-primary-transparent"><i class="fe fe-user text-primary"></i></span> </div>
                                <div class="col-sm-10 ps-sm-0">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="">New user registered</h6>
                                        <div> <a href="#"><i class="fe fe-settings me-1"></i></a> <a href="#"><i class="fe fe-x"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-sm-2 mb-sm-0 mb-3"> <span class="feeds avatar-circle avatar-circle-secondary brround bg-secondary-transparent"><i class="fe fe-shopping-cart text-secondary"></i></span> </div>
                                <div class="col-sm-10 ps-sm-0">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="">New order delivered</h6>
                                        <div> <a href="#"><i class="fe fe-settings me-1"></i></a> <a href="#"><i class="fe fe-x"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-sm-2 mb-sm-0 mb-3"> <span class="feeds avatar-circle avatar-circle-danger brround bg-danger-transparent"><i class="fe fe-bell text-danger"></i></span> </div>
                                <div class="col-sm-10 ps-sm-0">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="">You have pending tasks</h6>
                                        <div> <a href="#"><i class="fe fe-settings me-1"></i></a> <a href="#"><i class="fe fe-x"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-sm-2 mb-sm-0 mb-3"> <span class="feeds avatar-circle avatar-circle-warning brround bg-warning-transparent"><i class="fe fe-gitlab text-warning"></i></span> </div>
                                <div class="col-sm-10 ps-sm-0">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="">New version arrived</h6>
                                        <div> <a href="#"><i class="fe fe-settings me-1"></i></a> <a href="#"><i class="fe fe-x"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-sm-2 mb-sm-0 mb-3"> <span class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i class="fe fe-database text-pink"></i></span> </div>
                                <div class="col-sm-10 ps-sm-0">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="">Server #1 overloaded</h6>
                                        <div> <a href="#"><i class="fe fe-settings me-1"></i></a> <a href="#"><i class="fe fe-x"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 mb-sm-0 mb-3"> <span class="feeds avatar-circle avatar-circle-info brround bg-info-transparent"><i class="fe fe-check-circle text-info"></i></span> </div>
                                <div class="col-sm-10 ps-sm-0">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="">New project launched</h6>
                                        <div> <a href="#"><i class="fe fe-settings me-1"></i></a> <a href="#"><i class="fe fe-x"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 fw-semibold ps-5">Settings</div>
                    <div class="card-body pt-2">
                        <div class="browser-stats">
                            <div class="row mb-4">
                                <div class="col-sm-2 mb-sm-0 mb-3"> <span class="feeds avatar-circle brround bg-primary-transparent"><i class="fe fe-settings text-primary"></i></span> </div>
                                <div class="col-sm-10 ps-sm-0">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="">General Settings</h6>
                                        <div> <a href="#"><i class="fe fe-settings me-1"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-sm-2 mb-sm-0 mb-3"> <span class="feeds avatar-circle avatar-circle-secondary brround bg-secondary-transparent"><i class="fe fe-map-pin text-secondary"></i></span> </div>
                                <div class="col-sm-10 ps-sm-0">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="">Map Settings</h6>
                                        <div> <a href="#"><i class="fe fe-settings me-1"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-sm-2 mb-sm-0 mb-3"> <span class="feeds avatar-circle avatar-circle-danger brround bg-danger-transparent"><i class="fe fe-headphones text-danger"></i></span> </div>
                                <div class="col-sm-10 ps-sm-0">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="">Support Settings</h6>
                                        <div> <a href="#"><i class="fe fe-settings me-1"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-sm-2 mb-sm-0 mb-3"> <span class="feeds avatar-circle avatar-circle-warning brround bg-warning-transparent"><i class="fe fe-credit-card text-warning"></i></span> </div>
                                <div class="col-sm-10 ps-sm-0">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="">Payment Settings</h6>
                                        <div> <a href="#"><i class="fe fe-settings me-1"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-sm-2 mb-sm-0 mb-3"> <span class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i class="fe fe-bell text-pink"></i></span> </div>
                                <div class="col-sm-10 ps-sm-0">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="">Notification Settings</h6>
                                        <div> <a href="#"><i class="fe fe-settings me-1"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="side2">
                    <div class="list-group list-group-flush">
                        <div class="pt-3 fw-semibold ps-5">Today</div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="me-2"> <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/2.jpg" style="background: url(&quot;../assets/images/users/2.jpg&quot;) center center;"></span> </div>
                            <div class=""> <a href="chat.html">
                                    <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Addie Minstra</div>
                                    <p class="mb-0 fs-12 text-muted"> Hey! there I' am available.... </p>
                                </a> </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="me-2"> <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/11.jpg" style="background: url(&quot;../assets/images/users/11.jpg&quot;) center center;"><span class="avatar-status bg-success"></span></span> </div>
                            <div class=""> <a href="chat.html">
                                    <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Rose Bush</div>
                                    <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                </a> </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="me-2"> <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/10.jpg" style="background: url(&quot;../assets/images/users/10.jpg&quot;) center center;"></span> </div>
                            <div class=""> <a href="chat.html">
                                    <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Claude Strophobia</div>
                                    <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                </a> </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="me-2"> <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/13.jpg" style="background: url(&quot;../assets/images/users/13.jpg&quot;) center center;"></span> </div>
                            <div class=""> <a href="chat.html">
                                    <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Eileen Dover</div>
                                    <p class="mb-0 fs-12 text-muted"> New product Launching... </p>
                                </a> </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="me-2"> <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/12.jpg" style="background: url(&quot;../assets/images/users/12.jpg&quot;) center center;"><span class="avatar-status bg-success"></span></span> </div>
                            <div class=""> <a href="chat.html">
                                    <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Willie Findit</div>
                                    <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                </a> </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="me-2"> <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/15.jpg" style="background: url(&quot;../assets/images/users/15.jpg&quot;) center center;"></span> </div>
                            <div class=""> <a href="chat.html">
                                    <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Manny Jah</div>
                                    <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                </a> </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="me-2"> <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/4.jpg" style="background: url(&quot;../assets/images/users/4.jpg&quot;) center center;"></span> </div>
                            <div class=""> <a href="chat.html">
                                    <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Cherry Blossom</div>
                                    <p class="mb-0 fs-12 text-muted"> Hey! there I' am available....</p>
                                </a> </div>
                        </div>
                        <div class="pt-3 fw-semibold ps-5">Yesterday</div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="me-2"> <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/7.jpg" style="background: url(&quot;../assets/images/users/7.jpg&quot;) center center;"><span class="avatar-status bg-success"></span></span> </div>
                            <div class=""> <a href="chat.html">
                                    <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Simon Sais</div>
                                    <p class="mb-0 fs-12 text-muted">Schedule Realease...... </p>
                                </a> </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="me-2"> <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/9.jpg" style="background: url(&quot;../assets/images/users/9.jpg&quot;) center center;"></span> </div>
                            <div class=""> <a href="chat.html">
                                    <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Laura Biding</div>
                                    <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                </a> </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="me-2"> <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/2.jpg" style="background: url(&quot;../assets/images/users/2.jpg&quot;) center center;"><span class="avatar-status bg-success"></span></span> </div>
                            <div class=""> <a href="chat.html">
                                    <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Addie Minstra</div>
                                    <p class="mb-0 fs-12 text-muted">Contact me for details....</p>
                                </a> </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="me-2"> <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/9.jpg" style="background: url(&quot;../assets/images/users/9.jpg&quot;) center center;"></span> </div>
                            <div class=""> <a href="chat.html">
                                    <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Ivan Notheridiya</div>
                                    <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                </a> </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="me-2"> <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/14.jpg" style="background: url(&quot;../assets/images/users/14.jpg&quot;) center center;"></span> </div>
                            <div class=""> <a href="chat.html">
                                    <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Dulcie Veeta</div>
                                    <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                </a> </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="me-2"> <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/11.jpg" style="background: url(&quot;../assets/images/users/11.jpg&quot;) center center;"></span> </div>
                            <div class=""> <a href="chat.html">
                                    <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
                                    <p class="mb-0 fs-12 text-muted">New product Launching...</p>
                                </a> </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="me-2"> <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/4.jpg" style="background: url(&quot;../assets/images/users/4.jpg&quot;) center center;"><span class="avatar-status bg-success"></span></span> </div>
                            <div class=""> <a href="chat.html">
                                    <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Cherry Blossom</div>
                                    <p class="mb-0 fs-12 text-muted">cherryblossom@gmail.com</p>
                                </a> </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="side3">
                    <ul class="task-list timeline-task">
                        <li class="d-sm-flex mt-4">
                            <div> <i class="task-icon1"></i>
                                <h6 class="fw-semibold">Task Finished<span class="text-muted fs-11 ms-2 fw-normal">09 July 2021</span></h6>
                                <p class="text-muted fs-12">Adam Berry finished task on<a href="#" class="fw-semibold"> Project Management</a></p>
                            </div>
                            <div class="ms-auto d-md-flex me-3"> <a href="#" class="text-muted me-2"><span class="fe fe-edit"></span></a> <a href="#" class="text-muted"><span class="fe fe-trash-2"></span></a> </div>
                        </li>
                        <li class="d-sm-flex">
                            <div> <i class="task-icon1"></i>
                                <h6 class="fw-semibold">New Comment<span class="text-muted fs-11 ms-2 fw-normal">05 July 2021</span></h6>
                                <p class="text-muted fs-12">Victoria commented on Project <a href="#" class="fw-semibold"> AngularJS Template</a></p>
                            </div>
                            <div class="ms-auto d-md-flex me-3"> <a href="#" class="text-muted me-2"><span class="fe fe-edit"></span></a> <a href="#" class="text-muted"><span class="fe fe-trash-2"></span></a> </div>
                        </li>
                        <li class="d-sm-flex">
                            <div> <i class="task-icon1"></i>
                                <h6 class="fw-semibold">New Comment<span class="text-muted fs-11 ms-2 fw-normal">25 June 2021</span></h6>
                                <p class="text-muted fs-12">Victoria commented on Project <a href="#" class="fw-semibold"> AngularJS Template</a></p>
                            </div>
                            <div class="ms-auto d-md-flex me-3"> <a href="#" class="text-muted me-2"><span class="fe fe-edit"></span></a> <a href="#" class="text-muted"><span class="fe fe-trash-2"></span></a> </div>
                        </li>
                        <li class="d-sm-flex">
                            <div> <i class="task-icon1"></i>
                                <h6 class="fw-semibold">Task Overdue<span class="text-muted fs-11 ms-2 fw-normal">14 June 2021</span></h6>
                                <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="#" class="fw-semibold"> Integrated management</a></p>
                            </div>
                            <div class="ms-auto d-md-flex me-3"> <a href="#" class="text-muted me-2"><span class="fe fe-edit"></span></a> <a href="#" class="text-muted"><span class="fe fe-trash-2"></span></a> </div>
                        </li>
                        <li class="d-sm-flex">
                            <div> <i class="task-icon1"></i>
                                <h6 class="fw-semibold">Task Overdue<span class="text-muted fs-11 ms-2 fw-normal">29 June 2021</span></h6>
                                <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="#" class="fw-semibold"> Integrated management</a></p>
                            </div>
                            <div class="ms-auto d-md-flex me-3"> <a href="#" class="text-muted me-2"><span class="fe fe-edit"></span></a> <a href="#" class="text-muted"><span class="fe fe-trash-2"></span></a> </div>
                        </li>
                        <li class="d-sm-flex">
                            <div> <i class="task-icon1"></i>
                                <h6 class="fw-semibold">Task Finished<span class="text-muted fs-11 ms-2 fw-normal">09 July 2021</span></h6>
                                <p class="text-muted fs-12">Adam Berry finished task on<a href="#" class="fw-semibold"> Project Management</a></p>
                            </div>
                            <div class="ms-auto d-md-flex me-3"> <a href="#" class="text-muted me-2"><span class="fe fe-edit"></span></a> <a href="#" class="text-muted"><span class="fe fe-trash-2"></span></a> </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
    </div>
</div>
<!--/Sidebar-right-->

<!-- FOOTER -->

<?php
$setting = App\Models\Setting::first();
$social_links = json_decode($setting->social_links);
?>
<footer class="footer border-top-0 footer-1" style="margin-top: 50px;">
    <div class="container" style="max-width: 85%;">
        <div class="row align-items-center text-center">
            <div class="col-lg-3 col-md-4  d-md-block ">
                <div class="social">
                    <ul class="text-center m-0">
                        <?php if(@$social_links->youtube): ?>
                        <li> <a class="social-icon" href="<?php echo e(@$social_links->youtube); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a> </li>
                        <?php endif; ?>
                        <?php if(@$social_links->facebook): ?>
                        <li> <a class="social-icon" href="<?php echo e(@$social_links->facebook); ?>" target="_blank"><i class="fa fa-facebook"></i></a> </li>
                        <?php endif; ?>
                        <?php if(@$social_links->instagram): ?>
                        <li> <a class="social-icon" href="<?php echo e(@$social_links->instagram); ?>" target="_blank"><i class="fa fa-instagram"></i></a> </li>
                        <?php endif; ?>
                        <?php if(@$social_links->twitter): ?>
                        <li> <a class="social-icon" href="<?php echo e(@$social_links->twitter); ?>" target="_blank"><i class="fa fa-twitter"></i></a> </li>
                        <?php endif; ?>
                        <?php if(@$social_links->linkedin): ?>
                        <li> <a class="social-icon" href="<?php echo e(@$social_links->linkedin); ?>" target="_blank"><i class="fa fa-linkedin"></i></a> </li>
                        <?php endif; ?>
                        <?php if(@$social_links->whatsapp): ?>
                        <li> <a class="social-icon" href="https://api.whatsapp.com/send?phone=<?php echo e(@$social_links->whatsapp); ?>&text=Hello!!" target="_blank"><i class="fa fa-whatsapp"></i></a> </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 text-end privacy">
                <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('page',$page->slug)); ?>" style="text-decoration: none;font-weight: bold;font-size: 16px;" class="btn btn-link"><?php echo e($page->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- <a href="#" class="btn btn-link">Terms</a>
                <a href="#" class="btn btn-link">About Us</a> -->
            </div>
        </div>
        <div class="row align-items-center flex-row-reverse">
            <?php if($setting->android_app): ?>
            <div class="text-center mb-3">
                <a href="<?php echo e($setting->android_app); ?>" target="_blank"> <img src="<?php echo e(url('assets/images/app.png')); ?>" /></a>
            </div>
            <?php endif; ?>
            <div class="col-md-12 col-sm-12 text-center"> Copyright © 2022 <a href="#"></a>. Powered by <a href="https://www.a2zproviders.com"> A2Z Providers</a>. All rights reserved. </div>
        </div>
    </div>
</footer><!-- FOOTER END -->
</div>
<!-- BACK-TO-TOP -->
<!-- <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a> -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
<!-- JQUERY JS -->
<script src="<?php echo e(url('assets/js/jquery.min.js')); ?>"></script>
<!-- BOOTSTRAP JS -->
<script src="<?php echo e(url('assets/plugins/bootstrap/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
<!-- SPARKLINE JS-->
<script src="<?php echo e(url('assets/js/jquery.sparkline.min.js')); ?>"></script>
<!-- Sticky js -->
<script src="<?php echo e(url('assets/js/sticky.js')); ?>"></script>

<script src="<?php echo e(url('assets/plugins/SmartPhoto-master/smartphoto.js')); ?>"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new SmartPhoto(".js-img-viewer", {
            resizeStyle: 'fit',
            arrows: false,
        });
    });
</script>

<!-- SIDEBAR JS -->
<script src="<?php echo e(url('assets/plugins/sidebar/sidebar.js')); ?>"></script>


<!-- Perfect SCROLLBAR JS-->
<script src="<?php echo e(url('assets/plugins/p-scroll/perfect-scrollbar.js')); ?>"></script>
<script src="<?php echo e(url('assets/plugins/p-scroll/pscroll.js')); ?>"></script>
<script src="<?php echo e(url('assets/plugins/p-scroll/pscroll-1.js')); ?>"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="<?php echo e(url('assets/plugins/select2/select2.full.min.js')); ?>"></script>
<!-- INTERNAL Data tables js-->
<script src="<?php echo e(url('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/plugins/datatable/js/dataTables.bootstrap5.js')); ?>"></script>
<script src="<?php echo e(url('assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>


<script src="<?php echo e(url('assets/plugins/owl-carousel/owl.carousel.js')); ?>"></script>
<script src="<?php echo e(url('assets/js/owl-carousel.js')); ?>"></script>
<script src="<?php echo e(url('assets/plugins/owl-carousel/owl.carouseljs.js')); ?>"></script>
<!-- INTERNAL Vector js -->
<script src="<?php echo e(url('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')); ?>"></script>

<script src="<?php echo e(url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
<!-- SIDE-MENU JS-->
<script src="<?php echo e(url('assets/plugins/sidemenu/sidemenu1.js')); ?>"></script>
<!-- Sweet Alert js -->
<script src="<?php echo e(url('assets/plugins/sweet-alert/sweetalert.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/js/sweet-alert.js')); ?>"></script>
<!-- INTERNAL INDEX JS -->
<script src="<?php echo e(url('assets/js/index1.js')); ?>"></script>
<script src="<?php echo e(url('assets/js/form-validation.js')); ?>"></script>
<!-- Color Theme js -->
<script src="<?php echo e(url('assets/js/themeColors.js')); ?>"></script>
<script src="<?php echo e(url('https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.js')); ?>"></script>

<!-- CUSTOM JS -->

<?php echo $__env->yieldContent('script'); ?>

<!-- Source code , inspect, copy etc. off -->
<!-- <script type="text/javascript">
    $(function() {
        $(this).bind("contextmenu", function(e) {
            e.preventDefault();
        });
    });
</script>
<script type="text/JavaScript">
    document.onkeydown = function(e) {
    if(e.keyCode == 123) {
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
     return false;
    }      
 }
</script> -->
<script>
    $(document).ready(function() {
        $('.lightSliderReward').lightSlider({
            item: 6,
            loop: false,
            slideMove: 1,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed: 600,
            controls: true,
            pager: false,
            responsive: [{
                    breakpoint: 1445,
                    settings: {
                        item: 4,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },{
                    breakpoint: 1030,
                    settings: {
                        item: 3,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },{
                    breakpoint: 800,
                    settings: {
                        item: 2,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        item: 1,
                        slideMove: 1
                    }
                }
            ]
        });
        
        $('.lightSliderProduct').lightSlider({
            item: 4,
            loop: false,
            slideMove: 1,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed: 600,
            controls: true,
            pager: false,
            responsive: [{
                    breakpoint: 1445,
                    settings: {
                        item: 4,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },{
                    breakpoint: 1030,
                    settings: {
                        item: 3,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },{
                    breakpoint: 800,
                    settings: {
                        item: 2,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        item: 1,
                        slideMove: 1
                    }
                }
            ]
        });
        
        $('.lightSliderPackage').lightSlider({
            item: 4,
            loop: false,
            slideMove: 1,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed: 600,
            controls: true,
            pager: false,
            responsive: [{
                    breakpoint: 1445,
                    settings: {
                        item: 4,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },{
                    breakpoint: 1030,
                    settings: {
                        item: 3,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },{
                    breakpoint: 800,
                    settings: {
                        item: 2,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        item: 1,
                        slideMove: 1
                    }
                }
            ]
        });
    });
</script>

<script src="<?php echo e(url('assets/js/custom.js')); ?>"></script>
</div>
<div class="jvectormap-tip"></div>
<script>
    setTimeout(function() {
        $('.alert.alert-danger').remove();
        $('.alert.alert-success').remove();
        $('.alert.alert-warning').remove();
    }, 5000);
    $('.side-menu__item').click(function(e) {
        $(this).parent().toggleClass('is-expanded').siblings().removeClass('is-expanded');
    });
    $(document).ready(function() {
        // ______________Owl-carousel-icons2
        $('.owl-carousel-icons2').owlCarousel({
            loop: true,
            rewind: false,
            margin: 25,
            animateIn: 'fadeInDowm',
            animateOut: 'fadeOutDown',
            autoplay: false,
            autoplayTimeout: 5000, // set value to change speed
            autoplayHoverPause: true,
            dots: false,
            autoplay: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1300: {
                    items: 4,
                }

            }
        });

    });
</script>

<script>
    // $(window).on('load', function() {
    //     $('#global-loader').fadeOut('slow');
    // });
    $(window).on("load", function() {
        var urlHash = window.location.href.split("#")[1];
        $('html,body').animate({
            scrollTop: $('#' + urlHash).offset().top - 100
        }, 100);
    });

    setTimeout(function() {
        $('#global-loader').fadeOut('slow');
    }, 200);

    function shareFunction(id) {
        let url = $('#share_url').data('url');
        $.ajax({
            url: url + `?id=${id}`,
            method: "GET",
            success: function(res) {},
        });
    }
</script>
</div>
<div class="sweet-overlay" tabindex="-1" style="opacity: -0.1; display: none;"></div>
<div class="sweet-alert hideSweetAlert" data-custom-class="" data-has-cancel-button="true" data-has-confirm-button="true" data-allow-outside-click="false" data-has-done-function="false" data-animation="pop" data-timer="null" style="display: none; margin-top: -170px; opacity: -0.09;">
    <div class="sa-icon sa-error" style="display: none;">
        <span class="sa-x-mark">
            <span class="sa-line sa-left"></span>
            <span class="sa-line sa-right"></span>
        </span>
    </div>
    <div class="sa-icon sa-warning" style="display: block;">
        <span class="sa-body"></span>
        <span class="sa-dot"></span>
    </div>
    <div class="sa-icon sa-info" style="display: none;"></div>
    <div class="sa-icon sa-success" style="display: none;">
        <span class="sa-line sa-tip"></span>
        <span class="sa-line sa-long"></span>

        <div class="sa-placeholder"></div>
        <div class="sa-fix"></div>
    </div>
    <div class="sa-icon sa-custom" style="display: none;"></div>
    <h2>Alert</h2>
    <p style="display: block;">Waring alert</p>
    <fieldset>
        <input type="text" tabindex="3" placeholder="">
        <div class="sa-input-error"></div>
    </fieldset>
    <div class="sa-error-container">
        <div class="icon">!</div>
        <p>Not valid!</p>
    </div>
    <div class="sa-button-container">
        <button class="cancel" tabindex="2" style="display: inline-block; box-shadow: none;">Stay on the page</button>
        <div class="sa-confirm-button-container">
            <button class="confirm" tabindex="1" style="display: inline-block; background-color: rgb(140, 212, 245); box-shadow: rgba(140, 212, 245, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset;">Exit</button>
            <div class="la-ball-fall">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</div>


</body>

</html><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/common/footer.blade.php ENDPATH**/ ?>