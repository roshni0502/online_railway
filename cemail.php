<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
 include 'connect.php';
 
 extract($_POST);

 
  # code...

 
 	
  
    $id=$_POST['id'];
    $email=$_POST['email'];
   
   

 

 $query= " update student_details set  email= '$email' where student_id='$id' ";
 $quer_run= mysqli_query($con,$query);
   
  if($quer_run){
  	?>
  	<script>
  		alert("updated");
  	</script>
  	<?php
  	
  }else{
   ?>
  	<script>
  		alert("not updated");
  	</script>
  	<?php
}


?>

          