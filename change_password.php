<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
 include 'connect.php';
 
 extract($_POST);

 
  # code...

 
 	
   $email=$_POST['email'];
    
    $password=$_POST['password'];
   
   

 $query1=" select * from student_details where email='$email' ";
 $quer_run1= mysqli_query($con,$query1);
 $result1=mysqli_fetch_assoc($quer_run1);
 $id=$result1['student_id'];
 

 $query= " update student_reg set  password= '$password' where student_id='$id' ";
 $quer_run= mysqli_query($con,$query);
   
  if($quer_run){
  	echo 1;
  }else{
   echo 2;
}


?>

          