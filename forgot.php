

<html>
<head>
    <title></title>
<center>
 <form action="forgot.php"   method="POST">
     PASSWORD:
     <input type="text"  name="pass"></input>
     <br>
     <br>
      CONFIRM PASSWORD:
     <input type="text"  name="cpass"></input>
     <br>
     <br>
     <button  type="submit" name="submit" > SUBMIT</button>
</form>
</center>
</head>
<body>
</body>
</html>

<?php
   include 'connection.php' ;
           if(isset($_POST['submit']))
           {

               
              $pass=$_POST['pass'];
              $cpass=$_POST['cpass'];
              session_start();
              $mail=$_SESSION['email'];
              $updatequery = "  UPDATE  mailid  SET  password ='$pass'   WHERE  mailid = '$mail' " ; 
	           $query= mysqli_query($con,$updatequery);
 if($query)
{
   ?>
  <script>
     alert('password changed');
    </script> 
  <?php
 } else
{
   ?> 
  <script>
     alert('password not changed');
   </script> 
  <?php
 }
}


              
?>