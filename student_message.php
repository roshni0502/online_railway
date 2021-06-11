
<?php
session_start();
if(!isset($_SESSION['id']))
{
  header("location:homepage.php");
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="information.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <title>bootstrap5</title>
    
</head>
<body>
<center>
<style type="text/css">
  .Center{
    top:0%;
    transform:translateX(-30%) !important;
}
</style>
<center>
<style type="text/css">
  .Center{
    top:0%;
    transform:translateX(-30%) !important;
}
   
 

.table-fixed table th{
     padding: 10px;
    text-align: center;
    position: sticky;
   top: 0;
  }
  .table-fixed table td{
    text-align: center;
    padding: 10px;
    font-size: 14px;
  }
  .table-fixed {
   height: 400px;
   overflow-y: auto;
   display: inline-block;
   width: 100%;
  }
  
  

  
  

  
 

</style>
<div class="modal fade" id="view_pass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

  <div class="modal-dialog Center ">

    <div class="modal-content" style="width: 860px; ">
       <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="view_data1">
          
        </div>
      </div>

     
    </div>
  </div>
</div>
<div class="modal fade" id="view" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

  <div class="modal-dialog Center ">

    <div class="modal-content" style="width: 860px; ">
       <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="view_data">
          
        </div>
      </div>

     
    </div>
  </div>
</div>
</center>
<div class="modal fade" id="view" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

  <div class="modal-dialog Center ">

    <div class="modal-content" style="width: 860px; ">
       <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="view_data">
          
        </div>
      </div>

     
    </div>
  </div>
</div>
</center>
   <div class="container-fluid" style="height: ">
     <div class="row">
       
       <div class="col-sm-2 border-top border-bottom border-start border-end border-black    rounded  text-center p-4    fs-5  "style=";color: ; position: fixed; border-radius: 2px;">

         <div class="   text-center  fs-5  "style="color: black; padding: 15px; width: 253px; text-align: center;margin-left: -23px; height: 158px; margin-top: -30px;margin-bottom: -14px; background: black;border-radius: 2px;">
          <i class="fas fa-user" style="font-size: 70px; border: 4px solid white; border-radius:50%; padding: 25px; background: white;margin-bottom: 10px;"></i>

         </div>
    <ul style="font-size: 14px;width: 283px;margin-left: -38px; text-align: left; padding: 15px;">
  <style type="text/css">
    .list-group-item-action{
      background: black;
    }

    .list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: white;
  text-decoration: none;
  background-color:red;
  
}
a{
  
  font-size: 19px;
}
  </style>
  <?php
  $student_id=$_SESSION['id'];
  ?>
  <a href="homepage.php" class="list-group-item list-group-item-action  text-light" style="border-bottom: 1px solid white;">Home</a>
   <a href="information.php" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;">DashBoard</a>

  <a id="show" data-id= "<?php echo  $student_id ; ?>" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;"></i>Your Details</a>
  <a id="show_details" data-id= "<?php echo  $student_id ; ?>" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;">Previous Form Details</a>
  <a href="#" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;">Procedure</a>
  <a  href="#" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;">About us</a>
  <a  href="#"  class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;">Contact Us</a>
  <a href="student_message.php?from_user=<?php echo  $student_id ; ?>&to_user=123" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;"></i>Address Change Request</a>
  <a href="#" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;" >Help</a>
  <a href="login.php" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;">Back to Login</a>
  <a href="student_logout.php" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;">Log Out</a>

  
  
   <div class="col-sm-2" style="height: 40px; background: black; width: 253px; height: 140px;border-radius: 2px;">
  <div>
  </ul>
  
    
 
  
</div>





         </div>

       
       
       <div class="col-sm-10" style=" margin-left: 267px;position: fixed;">

            <div class="row" style="margin-bottom: 20px;">

             <div class="col-sm-12  border-top border-bottom border-start border-end" style=" padding-top:10px;  margin-top: 5px; margin-bottom: 5px; color: black;font-weight: bold; height:60px; background: gainsboro; border-radius: 5px 5px 5px 5px;">
             <p style="text-align: center;">
              WELCOME TO DATTA MEGHE COLLEGE OF ENGINEERING 

              </p>
       </div>
            
     <div class="row" style="margin-top: 50px;margin-left: -20px;" id="chat" >
         </div> 





   <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="jquery-3.6.0.min.js"></script>

          

 <script type="text/javascript">
   $(document).ready(function(){


 var url_string=window.location.href;
 var url=new URL(url_string);
 var from_user=url.searchParams.get("from_user");
 var to_user=url.searchParams.get("to_user");
 
 
 $.ajax({
 url:'another.php',
 type:'post',
 data:{ 'from':from_user,
        'to':to_user

},
 success :function(response){
         
        $("#chat").html(response);
         
        }     
 
 });
 
 });
    $("#show").on("click",function(e){
        e.preventDefault();
    var element=$(this);
     var id= $(this).attr('data-id');
    
      $.ajax({
        url:'view_modal.php',
        type:'post',
        data:{'id':id
             },

        success :function(response){
         $('.view_data').html(response);
         $('#view').modal('show');

        
         
        }                                                            

       });
     
     


});
 $("#show_details").on("click",function(e){
        e.preventDefault();
    var element=$(this);
     var id= $(this).attr('data-id');
    
      $.ajax({
        url:'pass_details.php',
        type:'post',
        data:{'id':id
             },

        success :function(response){
         
         $('.view_data1').html(response);
         $('#view_pass').modal('show');

        
         
        }                                                            

       });
     
     


});


 </script>
</body>
</html>