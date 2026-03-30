<?php
// MoreValueCoupons.com - Hotel Savings Card Submission Handler
// This receives form submissions and emails them to you

$to = "morevaluecoupons@gmail.com";
$subject = "New Hotel Savings Card Request - MoreValueCoupons";

// Get form data
$fullname = $_POST['fullname'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';

// Validate
if (empty($fullname) || empty($email)) {
    echo "Error: Name and email are required.";
    exit;
}

// Build email message
$message = "New Hotel Savings Card Request\n";
$message .= "================================\n";
$message .= "Name: $fullname\n";
$message .= "Email: $email\n";
$message .= "Phone: " . (empty($phone) ? "Not provided" : $phone) . "\n";
$message .= "Date: " . date("Y-m-d H:i:s") . "\n";

// Send email to you
$headers = "From: morevaluecoupons@gmail.com";
mail($to, $subject, $message, $headers);

// Show thank you page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You! | MoreValueCoupons.com</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px 20px;
            background: #f8f9fa;
        }
        .success-box {
            max-width: 500px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .check-icon {
            font-size: 80px;
            margin-bottom: 20px;
        }
        h1 {
            color: #28a745;
        }
        p {
            font-size: 1.2em;
            color: #666;
        }
        .next-steps {
            background: #e9ecef;
            padding: 20px;
            border-radius: 10px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="success-box">
        <div class="check-icon">✅</div>
        <h1>Thank You, <?php echo htmlspecialchars($fullname); ?>!</h1>
        <p>Your request has been received.</p>
        
        <div class="next-steps">
            <h3>What's Next?</h3>
            <p>We're preparing your FREE Hotel Savings Card now!</p>
            <p><strong>Check your email (<?php echo htmlspecialchars($email); ?>) within the next few minutes.</strong></p>
            <p>You'll receive your card with instructions on how to use it.</p>
        </div>
        
        <p style="margin-top: 30px;">
            <a href="https://morevaluecoupons.com">← Back to MoreValueCoupons.com</a>
        </p>
    </div>
</body>
</html>