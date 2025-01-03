<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Submitted</title>
</head>

<body>
    @if($loanApplication)
    <h1>Thank You for Your Submission!</h1>
    <p>Dear {{ $loanApplication->name }},</p>
    <p>Your application has been successfully submitted.</p>
    <p>Loan Amount: {{ $loanApplication->loan_amount }}</p>
    <p>We will get back to you shortly.</p>
    @else
    <p>Error: No enquiry data found.</p>
    @endif
    <p>Best regards,<br>Team</p>
</body>

</html>