<?php
session_start();
include 'connection.php';

?>
1
<!DOCTYPE html>
<html>
<head>
  <title>chat</title>
  j
</head>
<script type="text/javascript">
  

     $(document).ready(function(){
      $("#send").on("click",function(){

      var message=$('#message').val();
      var fromUser =$('#fromUser').val();
      var toUser =$('#toUser').val();
     
      $.ajax({
        url:"insertchat.php",
        type:"POST",
        data:{'message':message,
              'fromUser':fromUser,
              'toUser':toUser
         },
        dataType:"json",
       success:function(data)
       {
          alert(message);                
       }


      });
      });
       setInterval(function(){
     
         $.ajax({
            url:"realTimeChat.php",
            method:"POST",
            data:{
              
              fromUser:$("#fromUser").val(),
              toUser:$("#toUser").val(),
            },
             dataType:"json",
             success: function(response){
            
          $('#msgbody').html(response);

        }
 
      
         })
          
},100);
      
});

  
</script>
<body>


  <?php
  $from_user=$_SESSION['y_id'];
  $to_user=$_SESSION['o_id'];
  $selectquery= "select* from chat where (from_user='$from_user' && to_user='$to_user') || (from_user='$to_user' && to_user='$from_user')";
  $query= mysqli_query($con,$selectquery);
  ?>
  <center>
  <form name="form" method="POST" id="form">
  <div style="margin-top: 100px; border: 1px solid black; width: 400px; height: 500px;margin-bottom: 20px;padding: 10px; display: block;overflow-y:auto;overflow-x: hidden; " id="msgbody" >
  <?php
  echo '<input type="text" value='.$_SESSION['y_id'].' id="fromUser" hidden/ >';
  echo '<input type="text" value='.$_SESSION['o_id'].' id="toUser" hidden/ >';
   ?>
  </div>
   
    <textarea  name="message"  id="message" required="" autocomplete="off"></textarea>>
    <button type="submit" name="send" id="send" >SEND MESSAGE</button>
  </form>
</center>




</body>



</html>


