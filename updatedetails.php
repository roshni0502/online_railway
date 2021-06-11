<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
 include 'connect.php';
 
 extract($_POST);

 
  # code...

 
 	
  
    $station=$_POST['station'];
    $branch=$_POST['branch'];
    $year=$_POST['year'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $id=$_GET['s_id'];

 

 $query= " update student_details set station= '$station', branch= '$branch' , year= '$year', email= '$email', number= '$number' where student_id='$id' ";
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

          