<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'k4rth1k_05@icloud.com';
    
$email_subject = 'New Contact Request';

$email_body ="Name: $name.\n". 
    "Email: $email.\n". 
    "Message: $message.\n";


$to =  'karthik.chilakapati2005@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");

?>
