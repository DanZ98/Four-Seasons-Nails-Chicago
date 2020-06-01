<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$tel = $_REQUEST['tel'];
$email_body = 'Name: $name. \n'.
              'Email: $email. \n'.
              'Telephone: $tel. \n';
$message = $_REQUEST['message'];
$headers = 'From: danzins15@gmail.com' . "\r\n" .
    'Reply-To:'.$email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$to = "danzins15@gmail.com";
mail($to,$message,$headers,$email_body);
echo 'You are booked!';

?>