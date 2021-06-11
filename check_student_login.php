<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
include 'connect.php';
 
 extract($_POST);

 
  # code...

 

  
    $id=$_POST['id'];
    $password=$_POST['password'];
    $selectquery= "select* from student_reg where student_id='$id' && password='$password' ";
    $quer_run= mysqli_query($con,$selectquery);
    $row=mysqli_num_rows($quer_run);
   
 


  if($row==1){
   $_SESSION['id']=$id;
   $_SESSION['cur_date']=date("Y-m-d");
   $_SESSION['cur_time']=date("H:i:s");
   echo 1;
  }else{
    echo 2;
}


?>

