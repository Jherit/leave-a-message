<?php
session_start();

$email = htmlspecialchars(stripslashes(trim($_POST['email']))); 
$to = $_SESSION["email_who"]; 
$subject = 'page message submission';
$message1 = htmlspecialchars(stripslashes(trim($_POST['message'])));
$thisPage = trim($_POST['window']);
$message = "Message from page: $thisPage" . " .\r\n" . $email . " asked: " . "\r\n" . $message1;
$header = "MIME-Version: 1.0" . "\r\n" .
"Content-type:text/html;charset=UTF-8" . "\r\n" .
"From: ". $email . "\r\n";
// "Bcc: email@bcc.co.uk";



if($_POST['fullname'] != "") {
    //botz - do not send email
 }else{
    //no botz - send email
    if (mail($to, $subject, $message, $header)) {
        echo "Your message has been sent!";
    } else {
        echo "Message sending failed, try again";
    } 
  }