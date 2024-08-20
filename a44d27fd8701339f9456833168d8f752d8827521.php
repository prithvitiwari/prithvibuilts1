<!DOCTYPE html>
<html>

<head>
    <title>Visiting Card</title>
</head>
<style>
    table {
        width: 100%;
    }

    table,
    th,
    td {
        border-collapse: collapse;
    }

    th,
    td {
        border-collapse: collapse;
        padding: 5px;
    }

    th {
        text-align: left;
    }

    .table,
    .th,
    .td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
    }


    h3 {
        text-align: center;
    }

    .text-end {
        text-align: right;
    }
</style>

<body style="font-family: inherit;">
    <div style="border-radius: 8px; background-color: #7f89ff; height: 225px; width: 426px; overflow: hidden; margin: auto; background-size: 100% 100%;background-position: 0px 0px;background-image: url('<?php echo e(url('assets/images/card-background.jpg')); ?>');">
        <div style="color: #000;">
            <div style="padding: 30px;">
                <div>
                    <table>
                        <tr>
                            <td>
                                <?php if($lists['user']->profile_url): ?>
                                <img alt="avatar" src="<?php echo e($lists['user']->profile_url); ?>" width="80px" height="80px" style="border-radius:2px;">
                                <?php endif; ?>
                            </td>
                            <td style="width: 100%;">
                                <div style="padding-left:0px;text-align: left;"> <span style="font-size: 1.0em; font-weight: bold; text-transform: capitalize; "><?php echo e($lists['user']->name); ?></span> <br><?php echo e($lists['user']->referal_code); ?> <br> <?php echo e(date('d F, Y',strtotime($lists['user']->dateofbirth))); ?></div>
                            </td>
                            <td class="text-end" style="text-align: right; width: 70px;">
                                <img src="<?php echo e(url('storage/logo',$lists['setting']->logo)); ?>" style="object-fit:cover; width: 70px;">
                            </td>
                        </tr>
                    </table>
                    <!-- <table>
                        <tr class="text-end">
                            <td>
                                <div style="font-weight: bold;"><?php echo e(date('d F, Y',strtotime($lists['user']->dateofbirth))); ?></div>
                            </td>
                        </tr>
                    </table> -->
                    <table style="margin-top: 50px;">
                        <tr>
                            <td>
                                <div style="font-weight: bold;"><i class="fa fa-envelope" style="color: #fff;"></i> <?php echo e($lists['user']->email); ?></div>
                            </td>
                            <td>
                                <div style="font-weight: bold; text-align: right;"><i class="fa fa-phone" style="color: #fff;"></i> <?php echo e($lists['user']->mobile); ?></div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div style="border-radius: 8px; background-color: #7f89ff; height: 225px; width: 426px; overflow: hidden; margin: auto; margin-top:10px; background-size: 100% 100%;background-position: 0px 0px;background-image: url('<?php echo e(url('assets/images/card-background.jpg')); ?>');">
        <!-- <div style="color: #000;">
            <div style="padding: 30px;">
                <div>
                    <table style="margin-top: 30px;">
                        <tr>
                            <td style="text-align: center; font-weight: bold; font-size: 20px; text-transform: uppercase;">
                                <svg viewBox="0 0 500 500">
                                    <path id="curve" d="M73.2,148.6c4-6.1,65.5-96.8,178.6-95.6c111.3,1.2,170.8,90.3,175.1,97" style="fill: transparent;" />
                                    <text width="500" style="fill: #FF9800;">
                                        <textPath xlink:href="#curve">
                                            Vijaysree RK Private Limited
                                        </textPath>
                                    </text>
                                </svg>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="text-align: center;">
                                <?php if($lists['user']->profile_url): ?>
                                <img src="<?php echo e(url('storage/logo',$lists['setting']->logo)); ?>" width="200px">
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div> -->
        <img src="<?php echo e(url('assets/images/card-back.png')); ?>">
    </div>
</body>

</html><?php /**PATH /home2/vijaycku/public_html/resources/views/backend/pdf/card.blade.php ENDPATH**/ ?>