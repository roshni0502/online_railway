<?php


$email=$_POST['email'];
smtp_mailer($email);


function smtp_mailer($to){
include 'connect.php';


$subject="Password Reset";	
require_once("smtp/PHPMailerAutoload.php");
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'TLS';
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPAuth=true;
$mail->IsHTML(true);
$mail->Username = "projectgroupsem2@gmail.com";
$mail->Password = "sem2@123456";
$mail->SetFrom("projectgroupsem2@gmail.com");
$mail->Subject = $subject;
$mail->Body ="Click here to reset your password http://localhost/database/fpass.php?email=$to";
$mail->AddAddress($to);
$mail->SMTPOption=array('ssl'=>array(
 'verify_peer'=>false,
 'verify_peer_name'=>false,
 'allow_self_signed'=>false));
if(!$mail->Send()){
echo 2;
}else{
echo 1;
}
}
?>