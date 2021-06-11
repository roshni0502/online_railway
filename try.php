<?php
 


    $email="guptasanket9181@gmail.com";
    $subject="Password Reset";
		$body="Click here to reset your password";
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
 ?> 
