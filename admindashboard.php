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
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <title>bootstrap5</title>
    
</head>
<body>

	 <div class="container-fluid" style="height: ">
 	   <div class="row">
 	   	 
 	     <div class="col-sm-2 border-top border-bottom border-start border-end border-black    rounded  text-center p-4    fs-5  "style=";color: ; position: fixed;">

         <div class="   text-center  fs-5  "style="color: black; padding: 15px; width: 253px; text-align: center;margin-left: -23px; height: 158px; margin-top: -30px;margin-bottom: -14px; background: black;">
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
  background-color:#00c853;
  
}
  </style>

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





         </div>
         
 	     
 	     <div class="col-sm-10" style=" margin-left: 255px;">

            <div class="row" style="margin-bottom: 20px;">

             <div class="col-sm-10  border-top border-bottom border-start border-end" style=" padding-top:10px;  margin-top: 5px; margin-bottom: 5px; color: black;font-weight: bold; height:60px; background: #f1f8e9; border-radius: 5px 0px 0px 5px; position: fixed;">
             <p style="text-align: center;">
              WELCOME TO DATTA MEGHE COLLEGE OF ENGINEERING 

              </p>
              <div style="outline: none; background: dodgerblue; border: 1px solid dodgerblue;border-radius: 4px;color: white;height: 30px; width: 120px; text-align: center;margin-left: 1100px; margin-top: -40px;padding: px;">Admin Panel</div>
            </div>
           </div>

          <div class="row" style="margin-top: 70px; margin-bottom: 30px; ">
          <center>
             <div class="col-sm-10  border-top border-bottom border-start border-end" style=" padding-top:10px;  margin-top: 5px; margin-bottom: 5px; color:white;font-weight: bold; height:60px; background: #282828; border-radius: 5px 5px 5px 5px; position: fixed; height: 50px;width: 1257px;">
             <p style="text-align: left;margin-left: 350px; ">
              Welcome Admin!!

              </p>
            <?php
            include 'connect.php';
            
             $selectquery= "select* from  admin_login ";
        $query= mysqli_query($con,$selectquery);
        $result=mysqli_fetch_assoc($query);
         $year=date('Y',strtotime($result['date']));
          $day=date('d',strtotime($result['date']));
           $month=date('M',strtotime($result['date']));  

             

            ?>
              <p style="outline: none; background: #282828; border: 1px solid #282828;border-radius: 4px;color: white;height: 30px; width: 200px; text-align: center;margin-left: 1000px; margin-top: -40px;font-size: 10px;">Last Login :   <?php echo $day ." " . $month ." " . $year ."  ". $result['time'] ; ?></p>
            </div>
            </center>
           </div>
            <?php

            include 'connect.php';
           
             
             $selectquery= "select* from  student_reg ";
             $selectquery1= "select* from  student_details ";
             $query= mysqli_query($con,$selectquery);
             $query1= mysqli_query($con,$selectquery1);
            $row=mysqli_num_rows($query);
             $row1=mysqli_num_rows($query1);
             
         ?>
           
          <div class="row" style="bottom: 1px solid black;">
             <div class="row" style="margin-left: 280px; margin-top: 130px;">
              <div class="col-3 border" style=" border-width: 1px; border-color: : gainsboro; margin: 10px;width: 300px; height: 120px; border-radius: 4px; background: dodgerblue;">
                <h4 style="text-align: center; color: white;padding:10px; ">Total Students  <i class="fas fa-user-graduate" style="font-size: 30px;"></i></h4>
                <h1 style="text-align: center; color: white"><?php echo $row1 ; ?></h1>
               </div>
             

                 <div class="col-3 border" style="border-width: 1px;  border-color: : gainsboro; margin: 10px;width: 300px; height: 120px;border-radius: 4px; background: lightseagreen;">
                   <h5 style="text-align: left; padding:12px; color: white;">Total Students Registered</h5>
                   <h1 style="text-align: center; color: white"><?php echo $row ; ?></h1>
                 </div>
             </div>
              <div class="row " style="margin-left: 450px; margin-top: 10px;">
                 <div class="col-3 border" style=" border-width: 1px; border-color: : gainsboro; margin: 10px;width: 300px; height: 120px;border-radius: 4px;background: #e53935;">
                 <h5 style="text-align:center; color: white;padding:5px; ">Total Students Currently Logged </h5>
                <h1 style="text-align: center; color: white">1</h1>
               </div>
                 </div>

  

  </div>
</div>

  

             	
            

	
 	     

 	   </div>
 




 <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>


