<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Thank you for register</title>
</head>

<body>
    <div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2;">
        <div style="margin:50px auto;width:70%;padding:20px 20px; background-color:#f1f2f2;">
            <div style="border-bottom: 1px solid #d7d7d7; padding-bottom: 15px;display: block; margin: auto; text-align: center;">
                <img src="<?php echo e($message->embed($setting->logo_url)); ?>" style="justify-content: center; align-items: center; text-align: center;width: 100px;">
                <!-- <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600"><?php echo e($setting->site_name); ?></a> -->
            </div>
            <p style="font-size:1.1em">Hi, <?php echo e($user->name); ?></p>
            <p>Greeting of the day,</p>
            <p><?php echo e($setting->register_message); ?></p>
            <p style="font-size:0.9em;">Regards,<br /><?php echo e($setting->site_name); ?></p>
            <hr style="border:none;border-top:1px solid #d7d7d7" />
            <div style="text-align:center;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
                <p>© <?php echo e(date('Y')); ?> <a style="text-decoration: none; " href="<?php echo e(url('/')); ?>" ><?php echo e($setting->site_name); ?></a>. All rights reserved.</p>
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH /home2/vijaycku/public_html/resources/views/email/register.blade.php ENDPATH**/ ?>