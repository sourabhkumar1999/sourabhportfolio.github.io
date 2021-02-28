<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message']

$email_from='sourabhkumar.sks2018@gmail.com';
$email_subject='New Form Submision';
$email_body= "User Name: $name.\n".
              "User Email:$visitor_email.\n".
              "User Message:$message.\n".;

$to="sourabhkumar.sks1999@gmail.com";
$headers="From: $email_from \r\n";
$headers.="Reply-To:$visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: Contact.html");

 ?>
