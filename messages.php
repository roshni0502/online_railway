
<?php
session_start();
include 'connection.php';

?>

<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    

    
    <link rel="stylesheet" type="text/css" href="add.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>bootstrap5</title>
    
</head>
<body>

   <div class="container-fluid"  >
     <div class="row">
       
        <div class="col-sm-2 border-top border-bottom border-start border-end border-black    rounded  text-center p-4    fs-5  "style=";color: ; position: fixed;">

         <div class="   text-center  fs-5  "style="color: black; padding: 15px; width: 253px; text-align: center;background: #282828;margin-left: -23px; height: 158px; margin-top: -30px;margin-bottom: -14px;">
          <i class="fas fa-user" style="font-size: 70px; border: 1px solid black; border-radius:50%; padding: 25px; background: white;margin-bottom: 10px;"></i>

         </div>
          <style type="text/css">
    .list-group-item-action{
      background: black;
    }

    .list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: white;
  text-decoration: none;
  background-color:#00c853;
  
}
  </style>

    <ul style="font-size: 14px;width: 283px;margin-left: -38px; text-align: left; padding: 15px;">

  <a href="adminlogin.php" class="list-group-item list-group-item-action  text-light" style="border-bottom: 1px solid white;"><i class="fas fa-sign-out-alt" style="margin: 8px; font-size: 20px;"></i>Log Out</a>
  <a href="homepage.php" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;"><i class="fas fa-home" style="margin: 8px; font-size: 20px;"></i>Home</a>
  <a href="admindashboard.php" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;"><i class="fas fa-bars" style="margin: 8px; font-size: 20px;"></i>DashBoard</a>
  <a href="search.php" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;"><i class="fas fa-pen" style="margin: 8px; font-size: 20px;"></i>Update Student Information</a>
  <a href="viewstudentdetails.php" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;"><i class="fas fa-info-circle" style="margin: 11px; font-size: 21px;"></i>See Student Details</a>
  <a href="previouspass.php" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;"><i class="fas fa-user" style="margin: 9px; font-size: 20px;"></i>Student Previous form Details</a>
  <a href="branchstat.php" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;"><i class="fas fa-chart-bar" style="margin: 8px; font-size: 20px;"></i>Student Statstic Branch Wise</a>
  <a href="#" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;" ><i class="fas fa-envelope" style="margin: 8px; font-size: 20px;"></i>Requests</a>
  <a href="adminlogin.php" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;"><i class="fas fa-sign-in-alt" style="margin: 8px; font-size: 20px;"></i>Back to Login</a>
   <div class="col-sm-2" style="height: 40px; background: black; width: 253px; height: 95px;">
  <div>
  </ul>
  
</div>
  
  </div>
</div>






        
       
       <div class="col-sm-10" style=" margin-left: 267px;position: fixed;">

            <div class="row" style="margin-bottom: 20px;">

             <div class="col-sm-12  border-top border-bottom border-start border-end" style=" padding-top:10px;  margin-top: 5px; margin-bottom: 5px; color: black;font-weight: bold; height:60px; background: #f1f8e9; border-radius: 5px 5px 5px 5px;">
             <p style="text-align: center;">
              WELCOME TO DATTA MEGHE COLLEGE OF ENGINEERING 

              </p>
              <div style="outline: none; background: dodgerblue; border: 1px solid dodgerblue;border-radius: 4px;color: white;height: 30px; width: 120px; text-align: center;float: right; margin-top: -40px;margin-right: 25px;">Admin Panel</div>
            </div>
            <div class="col-sm-12  border-top border-bottom border-start border-end">
              <div class="container-fluid">

     <div class="row" style="margin-top: 10px;">

        <center>
  <style type="text/css">
    .hidebutton{
           visibility: hidden;
        }
    .showbutton{
          visibility: visible;
        }
  </style>
  <form id="form" name="form"  method="post" enctype="multipart/form-data" style="margin-top: -50px;">
  <div style="margin-top: 50px; border: 1px solid black; width: 100%; height: 550px;margin-bottom: 20px;padding: 10px; display: block;overflow-y:auto; overflow-x:" id="msgbody" >

  <?php
  echo '<input type="text" value='.$_GET['from_user'].' id="fromUser" /hidden >';
  echo '<input type="text" value='.$_GET['to_user'].' id="toUser" /hidden >';
  $f_id=$_GET['from_user'];
  $to_id=$_GET['to_user'];
  $_SESSION['f_user']=$f_id;
  $_SESSION['to_user']=$to_id;
 
   ?>
  </div>
   <div style="display: flex;">
    <textarea type="text" name="message"  id="message"  required autocomplete="off" onkeyup="show_button();" style="text-align: left;" rows="3" cols="60"></textarea>
    
    <button type="submit" name="send" class="hidebutton" id="send" style="height: 40px;background:dodgerblue; border:11px solid dodgerblue;border-radius: 4px;outline:none;" onclick="hide_button(); " onclick="scrollwin(0,500);">SEND MESSAGE</button>
    
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

  function scrollwin(x,y){ 


   window.scrollBy(x,y);
   

 } 
  
</script>


      
         </div> 

</div>
</div>


              
            </div>
      
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>



  
  


</script>
</body>
</html>



          




    



