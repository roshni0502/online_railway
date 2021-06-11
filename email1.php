<html>
<head>
  <link href="concessionform.css" rel="stylesheet"  type="text/css">
    <title></title>
<center>
 <form action="email.php"   method="POST">
     Email:
     <input type="text"  name="email"></input>
     <button  type="submit" name="submit" > Send Email</button>
</form>
</center>
</head>
<body>
</body>
</html>

<?php

include 'connection.php';


 
if(isset($_POST['submit'])){
	
  
$email=$_POST['email'];

session_start();
$_SESSION['email']=$email;
 $queryrows="SELECT * FROM mailid WHERE  mailid= '$email' ";
  $quer_run=mysqli_query($con,$queryrows);
  
  if(mysqli_num_rows($quer_run)>0)
	{
		$subject="Password Reset";
		$body="Click here to reset your password http://localhost/database/forgot.php";
		$sender_email="From:guptanirjala21122001@gmail.com";
		if(mail($email,$subject,$body,$sender_email))
{
		
   ?>
  <script>
     alert('email sent');
    </script> 
   
  <?php
 } else
{
   ?> 
  <script>
     alert('email not sent');
   </script> 
  <?php
 }
}
}
?>


