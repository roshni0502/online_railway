
<?php
session_start();
include 'connect.php';
    

$from_user=$_SESSION['f_user'];
$to_user=$_SESSION['to_user'];
$message=$_POST['message'];

$query=" insert into chat values('$from_user','$to_user','$message',curdate(),curtime()) ";
$quer_run=mysqli_query($con,$query);




?>

