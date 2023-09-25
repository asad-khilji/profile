<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['phone']))
$phone = $_POST['phone'];
if(isset( $_POST['message']))
$message = $_POST['message'];

$content="Name: $name \r\n
Email: $email \r\n
Phone: $phone \r\n
Message: $message";
$recipient = "khiljiasad2@gmail.com";
$mailheader = "From: $email \r\n";
$subject = "New Contact Form Submission";
mail($recipient, $subject, $content, $mailheader) or die("Error");
echo "Email sent!";
?>