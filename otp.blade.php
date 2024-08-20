<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Otp for your {{ $setting->site_name }} account</title>
</head>

<body>
    <div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2;">
        <div style="margin:50px auto;width:70%;padding:20px 20px; background-color:#f1f2f2;">
            <div style="border-bottom: 1px solid #d7d7d7; padding-bottom: 15px;display: block; margin: auto; text-align: center;">
                <img src="{{ $message->embed($setting->logo_url) }}" style="justify-content: center; align-items: center; text-align: center;width: 100px;">
                <!-- <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">{{ $setting->site_name }}</a> -->
            </div>
            <p style="font-size:1.1em">Hi, {{ $user->name }}</p>
            <p>Greeting of the day,</p>
            <p>Use the following one-time password (OTP) to your {{ $setting->site_name }} account. This OTP will be valid for 15 minutes.</p>
            <p style="font-weight: bold; font-size: 20px;">{{ $otp }}</p>
            <p style="font-size:0.9em;">Regards,<br />{{ $setting->site_name }}</p>
            <hr style="border:none;border-top:1px solid #d7d7d7" />
            <div style="text-align:center;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
                <p>© {{ date('Y') }} <a style="text-decoration: none; " href="{{ url('/') }}">{{ $setting->site_name }}</a>. All rights reserved.</p>
            </div>
        </div>
    </div>
</body>

</html>