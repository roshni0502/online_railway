<?php
 date_default_timezone_set('Asia/Kolkata');
 include 'connect.php';
 
$id=$_POST['id'];
$selectquery= "select* from  student_reg where student_id='$id'";
$query= mysqli_query($con,$selectquery);
$row=mysqli_num_rows($query);
$selectquery1= "select* from  student_login where student_id='$id'";
$query1= mysqli_query($con,$selectquery1);
$row1=mysqli_num_rows($query1);

if($row==0){
$query= " delete  from student_details where student_id ='$id' ";
$quer_run= mysqli_query($con,$query);
}elseif ($row1==0) {
$query= " delete student_details,student_reg from student_details inner join student_reg on student_details.student_id = student_reg.student_id where student_details.student_id ='$id' ";
$quer_run= mysqli_query($con,$query);
	# code...
}else{
$query= "delete student_details,student_reg ,student_login from student_details inner join student_reg  on student_details.student_id = student_reg.student_id inner join student_login on student_login.student_id= student_details.student_id where student_details.student_id ='$id' ";
$quer_run= mysqli_query($con,$query);
}  
  if($quer_run){
  	echo $id;
   
  }else{
   ?>
  	<script>
  		alert("not updated");
  	</script>
  	<?php
}
?>
