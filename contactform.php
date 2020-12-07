<?php

$name = $_POST['to_name']
$visitor_email = $_POST['from_name']
$message = $_POST['message']

$email_from = 'vindya@vindya.ml';
$email_subject = "New Form Submission";
$email_body =  "User Name : $name"
                "User Email : $visitor_email"
                "User Massage : $message"     
$to =  "vindyalakmini23@gail.com";
$headers = "From: $email_from" ;
$headers = "Reply TO: $visitor_email" ;  
mail($to,$email_subject,$email_body,$headers) ;
header("Location : index.html");                       
?>