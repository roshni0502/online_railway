<?php
session_start();
include 'connect.php';
$otp=$_POST['otp'];
$s_id = $_POST['id'];
$selectquery1= "select* from email_ver where student_id='$s_id' && otp='$otp' ";
$query1= mysqli_query($con,$selectquery1);
$row1=mysqli_num_rows($query1);
if ($row1==0) {
 echo 0;
}else{
 echo 1;
}

?>