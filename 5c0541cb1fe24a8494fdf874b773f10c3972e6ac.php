<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Blog Details</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.blog.index')); ?>">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                    </ol>
                </div>
            </div> <!-- PAGE-HEADER END -->
            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row row-sm">
                                <div class="col-xl-5 col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <img src="<?php echo e($blog->image ? url('storage/blog',$blog->image) : url('assets/images/default.jpg')); ?>" alt="img" class="img-fluid mx-auto d-block">
                                        </div>
                                    </div>
                                </div>
                                <div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0">
                                    <div class="mt-2 mb-4">
                                        <h3 class="mb-3" style="text-transform: capitalize;"><?php echo e($blog->name); ?></h3>
                                        <div class="mb-4 btn-list">
                                            <span class="btn-sm btn-danger"><?php echo e($blog->category->name); ?></span>
                                        </div>
                                        <p><?php echo e($blog->excerpt); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="card productdesc">
                        <div class="card-body">
                            <div class="panel panel-primary">
                                <div class="panel-body tabs-menu-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <h4 class="mb-5 mt-3 fw-bold">Description :</h4>
                                            <p class="mb-3 fs-15">
                                                <?php echo $blog->description; ?>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- ROW-1 CLOSED -->
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div><?php /**PATH /home2/vijaycku/public_html/resources/views/backend/inc/blog/view.blade.php ENDPATH**/ ?>