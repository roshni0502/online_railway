<?php
 date_default_timezone_set('Asia/Kolkata');
 include 'connect.php';
 

 extract($_POST);

 
  # code...

    
    
    $student_id=$_POST['id'];
    $pass=$_POST['pass'];
    
       $query=" insert into student_reg values('$student_id','$pass') ";
       $quer_run=mysqli_query($con,$query);
   
  if($quer_run){
    ?>
    <script>
      alert("inserted");
    </script>
    <?php
  }else{
   ?>
    <script>
      alert("not inserted");
    </script>
    <?php
}
     
?>