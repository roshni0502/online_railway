<?php
session_start();
if(!isset($_SESSION['code']))
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
    <link rel="stylesheet" type="text/css" href="admindashboard.css">
      <link rel="stylesheet" type="text/css" href="update.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <title>bootstrap5</title>
    
</head>
<body>
  <center>
<style type="text/css">
  .Center{
    top:0%;
    transform:translateX(-35%) !important;
}
</style>

<div class="modal fade" id="view" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

  <div class="modal-dialog Center ">

    <div class="modal-content" style="width: 860px; ">
       <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">student details</h5>
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

  <a href="admin_logout.php" class="list-group-item list-group-item-action  text-light" style="border-bottom: 1px solid white;"><i class="fas fa-sign-out-alt" style="margin: 8px; font-size: 20px;"></i>Log Out</a>
  <a href="homepage.php" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;"><i class="fas fa-home" style="margin: 8px; font-size: 20px;"></i>Home</a>
  <a href="admindashboard.php" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;"><i class="fas fa-bars" style="margin: 8px; font-size: 20px;"></i>DashBoard</a>
  <a href="search1.php" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;"><i class="fas fa-pen" style="margin: 8px; font-size: 20px;"></i>Update Student Information</a>
  <a href="viewstudentdetails.php" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;"><i class="fas fa-info-circle" style="margin: 11px; font-size: 21px;"></i>See Student Details</a>
  <a href="previouspass.php" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;"><i class="fas fa-user" style="margin: 9px; font-size: 20px;"></i>Student Previous form Details</a>
  <a href="branchstat.php" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;"><i class="fas fa-chart-bar" style="margin: 8px; font-size: 20px;"></i>Student Statstic Branch Wise</a>
  <a href="request.php" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;" ><i class="fas fa-envelope" style="margin: 8px; font-size: 20px;"></i>Requests</a>
  <a href="adminlogin.php" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;"><i class="fas fa-sign-in-alt" style="margin: 8px; font-size: 20px;"></i>Back to Login</a>
   <div class="col-sm-2" style="height: 40px; background: black; width: 253px; height: 95px;">
  <div>
  </ul>
  
    
 
  
</div>
         

        <style type="text/css">
          #mytable  tr:last-of-type{
  border-bottom: 2px solid black;

}
#mytable th{
 color:white;
}
        </style>
       
       <div class="col-sm-10" style=" margin-left: 255px;">

            <div class="row" style="margin-bottom: 20px;">

             <div class="col-sm-12  border-top border-bottom border-start border-end" style=" padding-top:10px;  margin-top: 5px; margin-bottom: 5px; color: black;font-weight: bold; height:60px; background: #f1f8e9; border-radius: 5px 0px 0px 5px; ">
             <p style="text-align: center;">
              WELCOME TO DATTA MEGHE COLLEGE OF ENGINEERING 

              </p>
              <div style="outline: none; background: dodgerblue; border: 1px solid dodgerblue;border-radius: 4px;color: white;height: 30px; width: 120px; text-align: center;margin-left: 1100px; margin-top: -40px;padding: px;">Admin Panel</div>
            </div>
           </div>

          <div class="row" style=" margin-bottom: 30px; ">
          <center>
             <div class="col-sm-10  border-top border-bottom border-start border-end" style=" padding-top:10px;  margin-top: 5px; margin-bottom: 5px; color:white;font-weight: bold;  background:  border-radius: 5px 5px 5px 5px;  width: 1257px; ">
             <center>
        <div class="input-group mb-3" style="width: 1050px; margin: 10px;">
  <span class="input-group-text" id="basic-addon1" style="width: 60px; height: 35px;background: black;"><i class="fas fa-search" style="font-size: 25px; color: white; background: black;"></i></span>
  <input type="text" class="form-control" placeholder="Search Student By ID" aria-label="Username" aria-describedby="basic-addon1" id="myinput" onkeyup="searchfun();" style="font-style: italic; height: 35px;" >
     </div>
     <style type="text/css">
   
  .table-fixed1 table th{
     padding: 10px;
    text-align: center;
    position: sticky;
    font-style: italic;
   top: 0;
  }
  .table-fixed1 table td{
    text-align: center;
    padding: 10px;
  }
  .table-fixed1 {
  
   height: 520px;
   overflow-y: auto;
   display: inline-block;
   width: 1050px;
  }
  

  
  

  
</style>   
         <div class="table-fixed1">
         <table id="mytable" class=" table  table-hover table-bordered ">
         <thead class="table-dark">
          
           <th >
             Sr.No
           </th>
           <th>
          Student-ID
           </th>
           <th>
           Name Of the student
           </th>
           <th>
           Branch
           </th>
            <th>
          View Details
           </th>
           
         </thead>
         <tbody>
           <?php
             include 'connect.php' ;
             $selectquery1= "select* from student_details where branch='Computer'";
              $selectquery2= "select* from student_details where branch='Information Technology'";
               $selectquery3= "select* from student_details where branch='Mechanical'";
                $selectquery4= "select* from student_details where branch='Electronics'";
                 $selectquery5= "select* from student_details where branch='Electronics and TeleCommunication'";
                  $selectquery6= "select* from student_details where branch='Chemical'";
                   $selectquery7= "select* from student_details where branch='Civil'";

             
             $query1= mysqli_query($con,$selectquery1);
             $query2= mysqli_query($con,$selectquery2);
             $query3= mysqli_query($con,$selectquery3);
             $query4= mysqli_query($con,$selectquery4);
             $query5= mysqli_query($con,$selectquery5);
             $query6= mysqli_query($con,$selectquery6);
             $query7= mysqli_query($con,$selectquery7);
             $sr=0;
           







            while($result1=mysqli_fetch_assoc($query1)){

      ?>
          <tr>
             <td>
             <?php echo ++$sr; ?>
             </td>
             <td id="td">
             <?php echo $result1['student_id'];?>
             </td>
            <td>
              <?php echo $result1['branch'];?>
            </td>
                 
             
             <td>
              <?php echo $result1['fname']."  ".$result1['lname'];?>
             </td>
                  <td>
                   <button class="view" data-id="<?php echo $result1['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
                 View Details
                  </button>
               </td>
                 


        </tr>
        <?php
 }
        
       
           

          while($result2=mysqli_fetch_assoc($query2)){
          ?> 
            <tr>
             <td>
             <?php echo ++$sr; ?>
             </td>
             <td >
               <?php echo $result2['student_id']; ?>
             </td>
             <td>
              <?php echo $result2['branch']; ?>
            </td>
           
            <td> <?php echo $result2['fname']."  ".$result2['lname'];?></td>

             <td>

               <button  class="view" data-id="<?php echo $result2['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
            View Details
          </button>
             </td>
             
             
             

            
                 </tr>
           <?php
 }
         
         while($result3=mysqli_fetch_assoc($query3)){
          ?>
            <tr>
             <td>
           <?php echo ++$sr; ?>  
             </td>
             <td>
              <?php echo $result3['student_id']; ?>  
             </td>
             <td>
                <?php echo $result3['branch']; ?>  
            </td>
            <td>
              <?php echo $result3['fname']."  ".$result3['lname'];?>
             </td>
             <td>

              <button  class="view" data-id="<?php echo $result3['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
            View Details
          </button>
             </td>
             
             

            </tr>

                            <?php
 }

        while($result4=mysqli_fetch_assoc($query4)){
          ?>
               <tr id="1">

             <td>
             <?php echo ++$sr; ?>  
             </td>
             <td>
              <?php echo $result4['student_id']; ?>  
             </td>
             <td>
            <?php echo $result4['branch']; ?>  
            </td>
             <td>
               <?php echo $result4['fname']."  ".$result4['lname'];?>

             </td>
             <td>

               <button  class="view" data-id="<?php echo $result4['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
            View Details
          </button>
             </td>
            
           

            
                 </tr>
                            <?php
 }
        
        while($result5=mysqli_fetch_assoc($query5)){
          ?>
            <tr>
             <td>
            <?php echo ++$sr; ?>  
             </td>
             <td>
           <?php echo $result5['student_id']; ?>  
             </td>
             <td>
             <?php echo $result5['branch']; ?>  
            </td>
            <td>
             <?php echo $result5['fname']."  ".$result5['lname'];?>
             </td>
             <td>
              <button  class="view" data-id="<?php echo $result5['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
            View Details
          </button>
             </td>
             
             
            </tr>
             <?php
 }
           
           while($result6=mysqli_fetch_assoc($query6)){
          ?>
            <tr>
             <td>
              <?php echo ++$sr; ?>  
             </td>
             <td>
               <?php echo $result6['student_id']; ?>  
             </td>
             <td>
               <?php echo $result6['branch']; ?>  
            </td>
            <td>
               <?php echo $result6['fname']."  ".$result6['lname'];?>
             </td>
             <td>
               <button  class="view" data-id="<?php echo $result6['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
            View Details
          </button>
             </td>
             
            

            
                 </tr>
                 <?php
 }
         while($result7=mysqli_fetch_assoc($query7)){
          ?>
            <tr>
             <td>
            <?php echo ++$sr; ?>  
             </td>
             <td>
             <?php echo $result7['student_id']; ?>  
             </td>
             <td>
              <?php echo $result7['branch']; ?>  
            </td>
             <td>
              <?php echo $result7['fname']."  ".$result7['lname'];?>
             </td>
             <td>
              <button  class="view" data-id="<?php echo $result7['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
            View Details
          </button>
             </td>
            
             

            </tr>


                   <?php
 }
            
             ?>

            

         </tbody>
           
         </table>
</div>

         <center>
        
    </div>
  
    
    </div>












            </div>
          </center>
          </div>
          
  

  </div>
</div>

  

              
            

  
       

     </div>
 




 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="jquery-3.6.0.min.js"></script>


 <script type="text/javascript">

   const searchfun= () =>{
    let filter= document.getElementById('myinput').value.toUpperCase();
    let mytable= document.getElementById('mytable');
    let tr = mytable.getElementsByTagName('tr');
    for (var i = 0 ; i <tr.length; i++) {
        let td= tr[i].getElementsByTagName('td')[1];

        if(td){
           let textvalue=td.textContent || td.innerHtml;
           if(textvalue.toUpperCase().indexOf(filter)> -1){
            tr[i].style.display="";
           }
           else{
            tr[i].style.display= "none";
             
           }
        } 
        
           
           
    }
   }
</script>
 
<script type="text/javascript">
 
  
      $(".view").on("click",function(e){
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
   

</script>

</body>
</html>