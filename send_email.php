<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['qSenderName']));
    $email = htmlspecialchars(trim($_POST['qEmailID']));
    $mobile = htmlspecialchars(trim($_POST['qMobileNo']));
    $lookingFor = htmlspecialchars(trim($_POST['sources']));
    $message = htmlspecialchars(trim($_POST['qMessage']));

    if (empty($name) || empty($email) || empty($mobile) || $lookingFor == "select" || empty($message)) {
        die("All fields are required!");
    }

    if (strlen($mobile) != 10) {
        die("Please enter a valid 10-digit mobile number.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Please enter a valid email address.");
    }

    $mail = new PHPMailer(true);
    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'attendancedigitalizetheglobe@gmail.com'; // Your Gmail address
        $mail->Password = 'Adarsh@123'; // Your App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Email content
        $mail->setFrom($email, $name);
        $mail->addAddress('attendancedigitalizetheglobe@gmail.com');
        $mail->Subject = 'New Message from Knowhere Real Estate';
        $mail->Body = "Name: $name\nEmail: $email\nMobile: $mobile\nLooking For: $lookingFor\nMessage:\n$message";

        // Send email
        $mail->send();
        echo "Message sent successfully!";
    } catch (Exception $e) {
        echo "Failed to send the message. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    die("Invalid request.");
}
?>
