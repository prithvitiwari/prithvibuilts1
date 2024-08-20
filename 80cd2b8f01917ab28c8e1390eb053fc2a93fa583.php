<!DOCTYPE html>
<html>

<head>
    <title>Users</title>
</head>
<style>
    table {
        width: 100%;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
    }

    th {
        text-align: left;
    }

    h3 {
        text-align: center;
    }
</style>
<body>
    <h3>Users</h3>
    <table>
        <thead>
            <tr>
                <th>Detail</th>
                <!-- <th>Email</th> -->
                <!-- <th>Mobile</th> -->
                <th>Aadhar or Pan Number</th>
                <!-- <th>Pan Number</th> -->
                <th>Referal By</th>
                <th>Code</th>
                <th>Lavel</th>
                <!-- <th>Bio</th> -->
                <th>Created At</th>
                <th>Document Status</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $lists['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($list->name); ?><br><?php echo e($list->email); ?><br><?php echo e($list->mobile); ?></td>
                <!-- <td><?php echo e($list->email); ?></td> -->
                <!-- <td><?php echo e($list->mobile); ?></td> -->
                <td><?php echo e($list->aadhar_number); ?> <br> <?php echo e($list->pan_number); ?></td>
                <!-- <td><?php echo e($list->pan_number); ?></td> -->
                <td><?php echo e($list->accept_code); ?></td>
                <td><?php echo e($list->referal_code); ?></td>
                <td>Lavel <?php echo e($list->lavel); ?></td>
                <!-- <td><?php echo e($list->bio); ?></td> -->
                <td><?php echo e(date('d M Y h:i A', strtotime($list->created_at))); ?></td>
                <td><?php echo e($list->is_document); ?></td>
                <td><?php echo e($list->status); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>

</html><?php /**PATH /home2/vijaycku/public_html/resources/views/backend/pdf/user.blade.php ENDPATH**/ ?>