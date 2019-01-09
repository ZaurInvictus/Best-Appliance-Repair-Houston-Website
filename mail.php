<?php
$name = $_POST['name'];
$number = $_POST['number'];
$message = $_POST['message'];


$email_form = 'Best Appliance Repai Site';
$email_subject ='New Message From Styles Contact';
$email_body="From: $name \n".
            "Number: $number \n".
            "Message: $message";

$to = "zaur.quliyev7@outlook.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: index.html");
?> 