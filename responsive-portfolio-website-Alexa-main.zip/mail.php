<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$text= $_POST['project'];
$message= $_POST['message'];
$to = "chintharsh12@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Project =" . $text;
$headers = "From: noreply@chintanfruitwala.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>