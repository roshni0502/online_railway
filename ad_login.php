<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
include 'connect.php';
 
 extract($_POST);

 
  # code...

 

  
    $code=$_POST['code'];
    $password=$_POST['password'];
    $selectquery= "select* from admin_details where code='$code' && password='$password' ";
    $quer_run= mysqli_query($con,$selectquery);
    $row=mysqli_num_rows($quer_run);
   
 


  if($row==1){
   $_SESSION['code']=$code;
   $_SESSION['cur_date']=date("Y-m-d");
   $_SESSION['cur_time']=date("H:i:s");
   echo 1;
  }else{
    echo 2;
}


?>