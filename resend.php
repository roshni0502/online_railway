<?php
 session_start();
 $mail=$_SESSION['email'];
 $con=mysqli_connect('localhost','root','','railway_concession');
 require_once("mailer.php");
 smtp_mailer($mail);
 
?>