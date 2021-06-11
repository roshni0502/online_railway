
<?php
include 'connect.php';
session_start();
 $id=$_SESSION['id'];
 $cur_date=$_SESSION['cur_date'];
 $cur_time=$_SESSION['cur_time'];
 $selectquery1= "select* from student_login where student_id='$id'";
 $query1= mysqli_query($con,$selectquery1);
 $row1=mysqli_num_rows($query1);
if ($row1==0) {
$query=" insert into student_login values('$id','$cur_date','$cur_time') ";
$quer_run=mysqli_query($con,$query);	
}else{
 $query=" update student_login set date = '$cur_date', time= '$cur_time' where student_id='$id' ";
 $quer_run=mysqli_query($con,$query);
}
 
unset($_SESSION['id']);
unset($_SESSION['cur_date']);
unset($_SESSION['cur_time']);
session_destroy();
header("location:login.php?status=loggedout");
?>
