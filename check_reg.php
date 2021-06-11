<?php
date_default_timezone_set('Asia/Kolkata');
include 'connect.php';
 
 extract($_POST);

 
  # code...

 
 	
  
    $id=$_POST['s_id'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
   
 
   $selectquery= "select* from student_details where student_id='$id' && dob='$dob' ";
   $selectquery1= "select* from student_details where student_id='$id' && dob='$dob' && email='$email' ";
   $selectquery2= "select* from student_reg where student_id='$id'  ";
   $quer_run= mysqli_query($con,$selectquery);
   $quer_run1= mysqli_query($con,$selectquery1);
   $quer_run2= mysqli_query($con,$selectquery2);
   $row=mysqli_num_rows($quer_run);
   $row1=mysqli_num_rows($quer_run1);
   $row2=mysqli_num_rows($quer_run2);
   
  if ($row2 == 1) {
    echo 0;
  }
 elseif($row1 == 1){
  	 echo 1;
  }elseif ($row == 1) {
   
    echo  2;

  }else{
    echo 3;
  }

?>
