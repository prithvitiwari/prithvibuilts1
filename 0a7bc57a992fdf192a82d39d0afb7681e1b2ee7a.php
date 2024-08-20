<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Enquery Details</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.enquery.index')); ?>">Enquery</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Enquery Details</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                            <!-- <div class=""> -->
                                <table class="table border table-bordered mb-0 mt-0">
                                    <tbody>
                                        <tr>
                                            <td>Name</td>
                                            <td><?php echo e($enquery->name ? $enquery->name : 'N/A'); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><?php echo e($enquery->email ? $enquery->email : 'N/A'); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Mobile</td>
                                            <td><?php echo e($enquery->mobile ? $enquery->mobile : 'N/A'); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td><?php echo e($enquery->status ? $enquery->status : 'N/A'); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Subject</td>
                                            <td><?php echo e($enquery->subject ? $enquery->subject : 'N/A'); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Message</td>
                                            <td><?php echo e($enquery->message ? $enquery->message : 'N/A'); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- ROW-1 CLOSED -->
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div><?php /**PATH /home2/vijaycku/public_html/resources/views/backend/inc/enquery/view.blade.php ENDPATH**/ ?>