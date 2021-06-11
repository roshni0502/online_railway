<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
include 'connect.php';
 
 extract($_POST);

 
  # code...

 

  
    $email=$_POST['email'];
    
    $selectquery= "select * from student_details where email='$email' ";
    $quer_run= mysqli_query($con,$selectquery);
    $row=mysqli_num_rows($quer_run);
  
 


  if($row==1){
   $result1=mysqli_fetch_assoc($quer_run);
 $id=$result1['student_id'];
  $selectquery1= "select * from student_reg where student_id='$id' ";
  $quer_run1= mysqli_query($con,$selectquery1);
  $row1=mysqli_num_rows($quer_run1);
  
   if ($row1==1) {
   	echo 1;
   }else{
   	echo 2;
   }
  }else{
    echo 2;
}


?>
