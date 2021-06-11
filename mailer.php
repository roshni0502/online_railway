<?php


$email=$_POST['email'];
smtp_mailer($email);


function smtp_mailer($to){
include 'connect.php';
$otp = rand(1111,9999);
$id=$_POST['id'];
$selectquery1= "select* from email_ver where student_id='$id'";
$query1= mysqli_query($con,$selectquery1);
$row1=mysqli_num_rows($query1);
if ($row1==0) {
$query=" insert into email_ver values('$id','$otp') ";
$quer_run=mysqli_query($con,$query);	
}else{
  $query= " update email_ver set otp = '$otp' where student_id='$id'";
  $quer_run= mysqli_query($con,$query);
}

$msg="your verification code is ".$otp;
$subject='EMAIL VERIFICATION';
require_once("smtp/PHPMailerAutoload.php");
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'TLS';
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPAuth=true;
$mail->IsHTML(true);
$mail->Username = "miniproject0502@gmail.com";
$mail->Password = "miniproject1234";
$mail->SetFrom("miniproject0502@gmail.com");
$mail->Subject = $subject;
$mail->Body =$msg;
$mail->AddAddress($to);
$mail->SMTPOption=array('ssl'=>array(
 'verify_peer'=>false,
 'verify_peer_name'=>false,
 'allow_self_signed'=>false));
if(!$mail->Send()){
return 0;
}else{
return 1;
}
}
?>