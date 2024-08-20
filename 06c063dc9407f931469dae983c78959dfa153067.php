
<?php $__env->startSection('title', 'Blogs'); ?>
<?php $__env->startSection('keywords', 'Blogs Keywords'); ?>
<?php $__env->startSection('description', 'Blogs Description'); ?>
<?php $__env->startSection('contant'); ?>
<div class="main-content hor-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Blog Details</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('blog')); ?>">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                    </ol>
                </div>
            </div> <!-- PAGE-HEADER END -->
            <div class="row">
                <div class="col-xl-8">
                    <div class="card"> 
                        <!-- <div> -->
                            <img class="card-img-top br-tr-7 br-tl-7" src="<?php echo e(url('storage/blog',$blog->image)); ?>" alt="Card image cap">
                        <!-- </div> -->
                        <div class="card-body">
                            <div class="d-md-flex">
                                <a href="javascript:void(0);" class="d-flex me-4 mb-2"><i class="fa fa-list-alt fs-16 me-1 p-3 bg-secondary-transparent text-secondary bradius"></i>
                                    <div class="mt-0 mt-3 ms-1 text-muted font-weight-semibold"><?php echo e($blog->category->name); ?></div>
                                </a>
                                <!-- <a href="profile.html" class="d-flex mb-2"><i class="fe fe-user fs-16 me-1 p-3 bg-primary-transparent text-primary bradius"></i>
                                    <div class="mt-0 mt-3 ms-1 text-muted font-weight-semibold">Harry Fisher</div>
                                </a> -->
                                <!-- <div class="ms-auto">
                                    <a href="javascript:void(0);" class="d-flex mb-2"><i class="fe fe-message-square fs-16 me-1 p-3 bg-success-transparent text-success bradius"></i>
                                        <div class="mt-0 mt-3 ms-1 text-muted font-weight-semibold">13 Comments</div>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <h3><a href="javascript:void(0)"> <?php echo e($blog->name); ?> </a></h3>
                            <!--<p class="card-text"><?php echo e($blog->excerpt); ?></p>-->
                            <p style="font-size:16px; line-height:30px;"><?php echo $blog->description; ?></p>
                        </div>
                    </div>
                    <!-- <div class="card">
                        <div class="card-header">
                            <div class="card-title">Comments</div>
                        </div>
                        <div class="card-body pb-0">
                            <div class="media mb-5 overflow-visible d-block d-sm-flex">
                                <div class="me-3 mb-2"> <a href="profile.html"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="<?php echo e(url('assets/images/users/5.jpg')); ?>"> </a> </div>
                                <div class="media-body overflow-visible">
                                    <div class="border mb-5 p-4 br-5">
                                        <nav class="nav float-end">
                                            <div class="dropdown"> <a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end" style=""> <a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a> <a class="dropdown-item" href="#"><i class="fe fe-corner-up-left me-1"></i> Reply</a> <a class="dropdown-item" href="#"><i class="fe fe-flag me-1"></i> Report Abuse</a> <a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a> </div>
                                            </div>
                                        </nav>
                                        <h5 class="mt-0">Gavin Murray</h5> <span><i class="fe fe-thumb-up text-danger"></i></span>
                                        <p class="font-13 text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter what industry you’re working in, as a blogger, you should live and die by this statement.</p><a class="like" href="javascript:;"> <span class="badge btn-danger-light rounded-pill py-2 px-3"> <i class="fe fe-heart me-1"></i>56</span> </a> <span class="reply" id="1"> <a href="javascript:;"><span class="badge btn-primary-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a> </span>
                                    </div>
                                    <div class="media mb-5 overflow-visible">
                                        <div class="me-3"> <a href="profile.html"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="<?php echo e(url('assets/images/users/2.jpg')); ?>"> </a> </div>
                                        <div class="media-body border p-4 overflow-visible br-5">
                                            <nav class="nav float-end">
                                                <div class="dropdown"> <a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end" style=""> <a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a> <a class="dropdown-item" href="#"><i class="fe fe-corner-up-left me-1"></i> Reply</a> <a class="dropdown-item" href="#"><i class="fe fe-flag me-1"></i> Report Abuse</a> <a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a> </div>
                                                </div>
                                            </nav>
                                            <h5 class="mt-0">Mozelle Belt</h5> <span><i class="fe fe-thumb-up text-danger"></i></span>
                                            <p class="font-13 text-muted">Nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter what industry you’re working in, as a blogger, you should live and die by this statement.</p><a class="like" href="javascript:;"><span class="badge btn-danger-light rounded-pill py-2 px-3"><i class="fe fe-heart me-1"></i>56</span></a> <span class="reply" id="2"> <a href="javascript:;"><span class="badge btn-primary-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media mb-5 overflow-visible">
                                <div class="me-3"> <a href="profile.html"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="<?php echo e(url('assets/images/users/15.jpg')); ?>"> </a> </div>
                                <div class="media-body overflow-visible">
                                    <div class="border mb-5 p-4 br-5">
                                        <nav class="nav float-end">
                                            <div class="dropdown"> <a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end" style=""> <a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a> <a class="dropdown-item" href="#"><i class="fe fe-corner-up-left me-1"></i> Reply</a> <a class="dropdown-item" href="#"><i class="fe fe-flag me-1"></i> Report Abuse</a> <a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a> </div>
                                            </div>
                                        </nav>
                                        <h5 class="mt-0">Paul Smith</h5>
                                        <p class="font-13 text-muted">Very nice ! On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the </p><a class="like" href="javascript:;"><span class="badge btn-danger-light rounded-pill py-2 px-3"><i class="fe fe-heart me-1"></i>56</span></a> <span class="reply" id="3"> <a href="javascript:;"><span class="badge btn-primary-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="media mb-5 overflow-visible d-block d-sm-flex">
                                <div class="me-3 mb-1"> <a href="profile.html"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="<?php echo e(url('assets/images/users/5.jpg')); ?>"> </a> </div>
                                <div class="media-body overflow-visible">
                                    <div class="border mb-5 p-4 br-5">
                                        <nav class="nav float-end">
                                            <div class="dropdown"> <a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end" style=""> <a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a> <a class="dropdown-item" href="#"><i class="fe fe-corner-up-left me-1"></i> Reply</a> <a class="dropdown-item" href="#"><i class="fe fe-flag me-1"></i> Report Abuse</a> <a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a> </div>
                                            </div>
                                        </nav>
                                        <h5 class="mt-0">Gavin Murray</h5> <span><i class="fe fe-thumb-up text-danger"></i></span>
                                        <p class="font-13 text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter what industry you’re working in, as a blogger, you should live and die by this statement.</p><a class="like" href="javascript:;"><span class="badge btn-danger-light rounded-pill py-2 px-3"><i class="fe fe-heart me-1"></i>56</span></a> <span class="reply" id="4"> <a href="javascript:;"><span class="badge btn-primary-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a> </span>
                                    </div>
                                    <div class="media mb-5 overflow-visible d-block d-sm-flex">
                                        <div class="me-3 mb-1"> <a href="profile.html"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="<?php echo e(url('assets/images/users/2.jpg')); ?>"> </a> </div>
                                        <div class="media-body overflow-visible">
                                            <div class="border p-4 mb-5 br-5">
                                                <nav class="nav float-end">
                                                    <div class="dropdown"> <a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end" style=""> <a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a> <a class="dropdown-item" href="#"><i class="fe fe-corner-up-left me-1"></i> Reply</a> <a class="dropdown-item" href="#"><i class="fe fe-flag me-1"></i> Report Abuse</a> <a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a> </div>
                                                    </div>
                                                </nav>
                                                <h5 class="mt-0">Mozelle Belt</h5> <span><i class="fe fe-thumb-up text-danger"></i></span>
                                                <p class="font-13 text-muted">Nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter what industry you’re working in, as a blogger, you should live and die by this statement.</p><a class="like" href="javascript:;"><span class="badge btn-danger-light rounded-pill py-2 px-3"><i class="fe fe-heart me-1"></i>56</span></a> <span class="reply" id="5"> <a href="javascript:;"><span class="badge btn-primary-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a> </span>
                                            </div>
                                            <div class="media overflow-visible">
                                                <div class="me-3"> <a href="profile.html"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="<?php echo e(url('assets/images/users/9.jpg')); ?>"> </a> </div>
                                                <div class="media-body border p-4 overflow-visible br-5">
                                                    <nav class="nav float-end">
                                                        <div class="dropdown"> <a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end" style=""> <a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a> <a class="dropdown-item" href="#"><i class="fe fe-corner-up-left me-1"></i> Reply</a> <a class="dropdown-item" href="#"><i class="fe fe-flag me-1"></i> Report Abuse</a> <a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a> </div>
                                                        </div>
                                                    </nav>
                                                    <h5 class="mt-0">Paul Smith</h5> <span><i class="fe fe-thumb-up text-danger"></i></span>
                                                    <p class="font-13 text-muted">Nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter what industry you’re working in, as a blogger, you should live and die by this statement.</p><a class="like" href="javascript:;"><span class="badge btn-danger-light rounded-pill py-2 px-3"><i class="fe fe-heart me-1"></i>56</span></a> <span class="reply" id="6"> <a href="javascript:;"><span class="badge btn-primary-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="card">
                        <div class="card-header">
                            <div class="card-title">Add a Comments</div>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal  m-t-20" action="index.html">
                                <div class="form-group">
                                    <div class="col-xs-12"> <input class="form-control" type="text" required="" placeholder="Username*"> </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12"> <input class="form-control" type="email" required="" placeholder="Email*"> </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12"> <textarea class="form-control" rows="5">Your Comment*</textarea> </div>
                                </div>
                                <div class=""> <a href="#" class="btn btn-primary btn-rounded  waves-effect waves-light">Submit</a> </div>
                            </form>
                        </div>
                    </div> -->
                </div>
                <div class="col-xl-4">
                    <!-- <div class="card">
                        <div class="card-body">
                            <div class="input-group"> <input type="text" class="form-control border-end-0" placeholder="Search ..."> <button class="btn input-group-text bg-transparent border-start-0 text-muted"> <i class="fe fe-search" aria-hidden="true"></i> </button> </div>
                        </div>
                    </div> -->
                    <!-- <div class="card">
                        <div class="card-header">
                            <div class="card-title">Categories</div>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item border-0 p-0"><a href="#"><i class="fe fe-chevron-right"></i> Development</a> <span class="product-label">22</span> </li>
                                <li class="list-group-item border-0 p-0"><a href="#"><i class="fe fe-chevron-right"></i> Web Design</a> <span class="product-label">15</span> </li>
                                <li class="list-group-item border-0 p-0"><a href="#"><i class="fe fe-chevron-right"></i> Technology</a> <span class="product-label">10</span> </li>
                                <li class="list-group-item border-0 p-0"><a href="#"><i class="fe fe-chevron-right"></i> Sports</a> <span class="product-label">88</span> </li>
                            </ul>
                        </div>
                    </div> -->
                    <!-- <div class="card">
                        <div class="card-header">
                            <div class="card-title">Professional Blog Writers</div>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="d-flex overflow-visible"> <img class="avatar bradius avatar-xl me-3" src="<?php echo e(url('assets/images/users/1.jpg')); ?>" alt="avatar-img">
                                    <div class="media-body valign-middle"> <a href="profile.html" class="fw-semibold text-dark">Simon Sais</a>
                                        <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                    </div>
                                </div>
                                <div class="d-flex overflow-visible mt-5"> <img class="avatar bradius avatar-xl me-3" src="<?php echo e(url('assets/images/users/3.jpg')); ?>" alt="avatar-img">
                                    <div class="media-body valign-middle"> <a href="profile.html" class="fw-semibold text-dark">Cherry Blossom</a>
                                        <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                    </div>
                                </div>
                                <div class="d-flex overflow-visible mt-5"> <img class="avatar bradius avatar-xl me-3" src="<?php echo e(url('assets/images/users/5.jpg')); ?>" alt="avatar-img">
                                    <div class="media-body valign-middle"> <a href="profile.html" class="fw-semibold text-dark">Ivan Notheridiya</a>
                                        <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                    </div>
                                </div>
                                <div class="d-flex overflow-visible mt-5"> <img class="avatar bradius avatar-xl me-3" src="<?php echo e(url('assets/images/users/15.jpg')); ?>" alt="avatar-img">
                                    <div class="media-body valign-middle"> <a href="profile.html" class="fw-semibold text-dark">Manny Jah</a>
                                        <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <?php if($popular_blogs->count()): ?>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Recent Blogs</div>
                        </div>
                        <div class="card-body" style="min-height: 70vh;">
                            <?php $__currentLoopData = $popular_blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="d-flex overflow-visible mb-5">
                                <a href="<?php echo e(route('blog.detail',$pb->slug)); ?>" class="card-aside-column br-5 cover-image" data-bs-image-src="<?php echo e(url('storage/blog',$pb->image)); ?>" style="background: url('<?php echo e(url('storage/blog',$pb->image)); ?>') center center;"></a>
                                <div class="ps-3 flex-column">
                                    <span class="badge bg-danger me-1 mb-1 mt-1"><?php echo e($pb->category->name); ?></span>
                                    <h4><a href="<?php echo e(route('blog.detail',$pb->slug)); ?>"><?php echo e($pb->name); ?></a></h4>
                                    <div class="text-muted three-line-ellipsis"><?php echo e($pb->excerpt); ?></div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <!-- <div class="card">
                        <div class="card-header">
                            <div class="card-title">Tags</div>
                        </div>
                        <div class="card-body">
                            <div class="tags"> <a href="#" class="tag">Development</a> <a href="#" class="tag">Design</a> <a href="#" class="tag">Technology</a> <a href="#" class="tag">Popular</a> <a href="#" class="tag">Codiegniter</a> <a href="#" class="tag">JavaScript</a> <a href="#" class="tag">Bootstrap</a> <a href="#" class="tag">PHP</a> </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/inc/blogdetail.blade.php ENDPATH**/ ?>