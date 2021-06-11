
<html>
<head>
    <title></title>
<center>
 <form action="colleges.php"   method="POST">
     CODE:
     <input type="text"  name="code"></input>
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

                $collegecode=$_POST['code'];
           
                 $query="select * from  collegecode  where collegecode='$collegecode' ";
                 $query_run=mysqli_query($con,$query);
              if(mysqli_num_rows($query_run)>0)
              {
                  session_start();
                  $_SESSION['college']=$collegecode;
                  header('location:login.php');
              }
              else
              {
                echo "<script> alert('invalid college/institude code');window.location* 'code.php' </script>";
               
              }
          
           }
?>