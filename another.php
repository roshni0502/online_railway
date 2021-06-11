
<?php
session_start();
include 'connect.php';

?>


  
  <center>
  <style type="text/css">
    .hidebutton{
           visibility: hidden;
        }
    .showbutton{
          visibility: visible;
        }
  </style>
  <?php

  $f_id= $_POST['from'];
  $to_id= $_POST['to'];
  
  $_SESSION['f_user']=$f_id;
  $_SESSION['to_user']=$to_id;
 
   ?>
  <form id="form" name="form" style="border:1px solid lightgray;background-image: url('whatsapp1.jpg');"  method="post" enctype="multipart/form-data" >
     
<?php
if ($f_id=="123") {
  
 echo" <div  style='background: #009879; height: 60px; border-radius: 2px; text-align: left;color: white; font-weight: bold;padding-left: 20px; padding-top: 15px;box-shadow: 0px 2px 2px 0px #009879; '> STUDENT-ID : $to_id </div> " ;

}
  ?>
  <div id="msgbody" style=" border-radius: 5px; width: 100%; height: 470px;margin-bottom: 20px;padding: 10px; display: block;overflow-y:auto; overflow-x:"  >
 </div>
  <div style="display: flex;">
    <textarea type="text" name="message"  id="message"  required autocomplete="off" onkeyup="show_button();" style="text-align: left;border-radius: 60px;flex:1;
    margin: 5px;box-shadow: 0px 0px 4px lightgray; outline: none;padding-left: 40px;font-size: 19px;height: 60px;" rows="3" cols="40"  autofocus="autofocus"></textarea>
    
    <button type="submit" name="send" class="hidebutton" id="send" style="background: #009879; border:11px solid  #009879;outline:none;border-radius: 50%; " onclick="hide_button(); " onclick="scrollwin(0,500);">   <i class="fas fa-paper-plane" style="font-size: 40px;color: white;font-weight: bold;"></i></button>
 </div>
  
  </form>


</center>






<script type="text/javascript">
  
 $(document).ready(function(){
      $("#send").on("click",function(e){
        e.preventDefault();
      var message=$('#message').val();
      var fromUser=$('#fromUser').val();
     
     if(message){
      $.ajax({
        url:'insertchat.php',
        type:'post',
        data:{'message':message,
              'fromUser':fromUser},

        success :function(data){
         
           $('#message').val("");
         
        }

       });
     
     }


});

   setInterval(function(){
    var fromUser=$('#fromUser').val();
     
     $.ajax({
        url:'realTimeChat.php',
        type:'post',
        data:{'fromUser':fromUser
             },
        dataType:"text",
        success :function(data){

            $('#msgbody').html(data);
    
        }

       } );


          
},100);   

});
     

  function show_button (){
   const blank=  document.getElementById("message");
   const blank1 = blank.value.trim();
   var button=document.getElementById("send");
   
   if(blank1===""){
     button.className="hidebutton";
    
   }
   else{
     button.className="showbutton";
     
   }
  }
  function hide_button (){
  
   var button=document.getElementById("send");
     button.className="hidebutton";
   }

 


     

            $("#send").click(function() { 

               $('#msgbody').animate({scrollTop:100000},800);
            }); 

       

  
  
</script>

         
      
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>





</body>


</html>


