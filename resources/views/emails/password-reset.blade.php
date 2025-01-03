<!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
</head>
<body>
    <p>Dear {{ $name }},</p>
    <p>Your password has been successfully reset. Below is your new password:</p>
    <p><strong>{{ $newPassword }}</strong></p>
    <p>Your original password is also updated to match the new password for your convenience.</p>
    <p>Please log in and change your password as soon as possible for security purposes.</p>
    <p>Regards,<br>Support Team</p>
</body>
</html>
