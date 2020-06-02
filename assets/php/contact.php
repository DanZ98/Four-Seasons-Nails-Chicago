<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$date = $_POST['date'];
$servicetimes = $_POST['servicetimes'];
$nailtechnicians = $_POST['nailtechnicians'];

$formcontent=" From: $name \n Email: $email \n Phone: $phone \n Booking Date: $date \n Service Time: $servicetimes \n Nail Technician: $nailtechnicians \n Message: $message";

$recipient = "loanvi229@gmail.com";

$subject = "Appointment";

$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader);
echo "You are booked!";

?>