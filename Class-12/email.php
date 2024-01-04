<?php
// email
$to = "almamuneco@gmail.com";
$subject = "PHP email";
$message = "This is a test email";
$from = "almamun14@gmail.com";
$headers = "From:" . $from;
$sendEmail = mail($to, $subject, $message, $headers);
if ($sendEmail) {
    echo "Email sent successfully";
} else {
    echo "Email not sent";
}
;
