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
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    
</script> 

    <link rel="stylesheet" type="text/css" href="add.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
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
  .modalCenter{
    top:0%;
    transform:translateX(-15%) !important;
}

</style>

    

      
      

  </div>
</div>






        <style type="text/css">
          table tbody tr:last-of-type{
  border-bottom: 2px solid black;
        </style>
       
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

        

        <div class="input-group mb-3" style="width: 1120px; margin: 10px;">
  <span class="input-group-text" id="basic-addon1" style="width: 60px; height: 40px;background: cornflowerblue;"><i class="fas fa-search" style="font-size: 25px; color: white; background: cornflowerblue;"></i></span>
<input type="text" class="form-control" placeholder="Search Student By ID" aria-label="Username" aria-describedby="basic-addon1" id="myinput" onkeyup="searchfun();" style="font-style: italic;">
     </div>
      <style type="text/css">
        #mytable th{
  padding: 5px;
  background: cornflowerblue;
  
  color: white;
  border-width: 1px;
  

}
#caption{
  text-align: center;
  border: 1px solid black;
}
#mytable td{
  padding: 10px;
  border-bottom: 1px solid gray;
   font-style: italic;
  border-color: white; 

}



#mytable table{
  text-align: center;
  
  
  padding: 20px;
  width: 1390px;
  border-collapse: collapse;
  background: white;
  border-radius: 4px 4px 0px 0px;
  overflow: hidden;
  box-shadow: 0px 0px 20px rgba(0,0,0,0.15) ;
  font-weight: bold;
 
}
#mytable tr:nth-of-type(odd){
  background:;
    color:black ;
    font-weight: bold;
}
#mytable tr button:nth-of-type(odd){
  background: #f3f3f3;
    color:white ;
    font-weight: bold;
}
#mytable tbody tr{
  border-bottom: 1px solid #dddddd;
}
#mytable tbody tr:last-of-type{
  border-bottom: 2px solid dodgerblue;
}


   
  .table-fixed1 table th{
    
    position: sticky;
    
   top: 0;
  }
  
  .table-fixed1 {
  
   height: 520px;
   overflow-y: auto;
   display: inline-block;
   
  }
  
      </style>
         
          <div id="message"></div>
         <div class="table-fixed1">
          <table id="mytable" style="text-align: center; width: 1100px;" class=" table table-hover">
           <thead>
          <th>
            Sr.no 
          </th>
          <th>
            Student-ID
          </th>
          <th>
            Branch
          </th>
            <th>
           Name Of the Student
          </th>
          <th>
            Messages
          </th>
         
          
          </thead>
          <tbody >

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
                    <button  class="message" data-id="<?php echo $result1['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;border-radius: 4px; background: black;color: white;"><a style="text-decoration: none;color: white;"href="admin_message.php?to_user=<?php echo $result1['student_id']; ?>&from_user=123">View Messages</a>
              
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
             <button  class="message" data-id="<?php echo $result1['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;border-radius: 4px; background: black;color: white;"><a style="text-decoration: none;color: white;"href="admin_message.php?to_user=<?php echo $result2['student_id']; ?>&from_user=123">View Messages</a>
              
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
               <button  class="message" data-id="<?php echo $result1['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;border-radius: 4px; background: black;color: white;"><a style="text-decoration: none;color: white;"href="admin_message.php?to_user=<?php echo $result3['student_id']; ?>&from_user=123">View Messages</a>
                  </button>
              

             </td>
             
            

            </tr>

                            <?php
 }

        while($result4=mysqli_fetch_assoc($query4)){
          ?>
               <tr>

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
              <button  class="message" data-id="<?php echo $result1['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;border-radius: 4px; background: black;color: white;"><a style="text-decoration: none;color: white;"href="admin_message.php?to_user=<?php echo $result4['student_id']; ?>&from_user=123">View Messages</a>
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
               <button  class="message" data-id="<?php echo $result1['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;border-radius: 4px; background: black;color: white;"><a style="text-decoration: none;color: white;"href="admin_message.php?to_user=<?php echo $result5['student_id']; ?>&from_user=123">View Messages</a>
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
               <button  class="message" data-id="<?php echo $result1['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;border-radius: 4px; background: black;color: white;"><a style="text-decoration: none;color: white;"href="admin_message.php?to_user=<?php echo $result6['student_id']; ?>&from_user=123">View Messages</a>
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
               <button  class="message" data-id="<?php echo $result1['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;border-radius: 4px; background: black;color: white;"><a style="text-decoration: none;color: white;"href="admin_message.php?to_user=<?php echo $result7['student_id']; ?>&from_user=123">View Messages</a>
                  </button>

             
             </td>
            
             
            </tr>


                   <?php
 }
            
             ?>
          </tbody>
          
         
        
          
           
                </table>

      </div>
            
      
        </center>
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
</body>
</html>



          




    



