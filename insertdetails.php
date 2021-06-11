<?php
 date_default_timezone_set('Asia/Kolkata');
 include 'connect.php';
 session_start();

 extract($_POST);

 
  # code...

    
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mname=$_POST['mname'];
    $faname=$_POST['faname'];
    $station=$_POST['station'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $student_id=$_POST['student_id'];
    $branch=$_POST['branch'];
    $year=$_POST['year'];
    $yoj=$_POST['yoj'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $day=$_POST['day'];
    $month=$_POST['month'];
    $byear=$_POST['byear'];
    $dob=$byear."-".$month."-".$day;
    $files=$_FILES['file'];

    $filename=$files['name'];
    $fileerror=$files['error'];
    $filetmp=$files['tmp_name'];
    $fileext=explode('.', $filename);
    $filecheck=strtolower(end($fileext));
    $fileextstored= array('png','jpg','jpeg','jfif');
    if(in_array($filecheck, $fileextstored)){
      $destinationfile='documents_upload/'.$filename;
      move_uploaded_file($filetmp,$destinationfile);
    }


     
       $query=" insert into student_details values('$fname','$lname','$mname','$faname','$station','$age','$gender','$student_id','$branch','$year','$yoj','$email','$number','$dob','$filename') ;";
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
