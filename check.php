<html>
<head>
    <title></title>
<center>
 <form action="check.php"   method="POST">
     ENTER YOUR ID:
     <input type="text"  name="your_id" required autocomplete="off"></input>
     <br>
     <a href="another.php?from_user= 1&to_user=123">Chats</a>

</form>
</center>
</head>
<body>

</body>
</html>



<?php
  
             if(isset($_POST['submit'])){
                $yourid=$_POST['your_id'];
                $otherid='123';
                session_start();
                $_SESSION['y_id']= $yourid;
                $_SESSION['o_id']= $otherid;
                header('location:another.php?from_user= 1 & to_user=123');
          }
              
?>