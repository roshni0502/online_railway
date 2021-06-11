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
          table tbody tr:last-of-type{
  border-bottom: 2px solid black;
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
        

  
  

  
</style>   
         <table class=" table  table-hover table-bordered " style="width: 1050px; margin: 10px; text-align: center; padding: 10px; font-style: italic; font-size: 15px; border-color: gray;">

           <?php
             include 'connect.php' ;
             $selectquery1= "select* from student_details where branch='Computer'";
              $selectquery2= "select* from student_details where branch='Information Technology'";
               $selectquery3= "select* from student_details where branch='Mechanical'";
                $selectquery4= "select* from student_details where branch='Electronics'";
                 $selectquery5= "select* from student_details where branch='Electronics and TeleCommunication'";
                  $selectquery6= "select* from student_details where branch='Chemical'";
                   $selectquery7= "select* from student_details where branch='Civil'";
                    $selectquery8="select student_details.student_id,student_details.branch from student_details, student_reg where student_details.student_id=student_reg.student_id and student_details.branch='Computer' ";
                    $selectquery9="select student_details.student_id,student_details.branch from student_details, student_reg where student_details.student_id=student_reg.student_id and student_details.branch='Information Technology' ";
                    $selectquery10="select student_details.student_id,student_details.branch from student_details, student_reg where student_details.student_id=student_reg.student_id and student_details.branch='Mechanical' ";
                    $selectquery11="select student_details.student_id,student_details.branch from student_details, student_reg where student_details.student_id=student_reg.student_id and student_details.branch='Electronics' ";
                    $selectquery12="select student_details.student_id,student_details.branch from student_details, student_reg where student_details.student_id=student_reg.student_id and student_details.branch='Electronics and TeleCommunication' ";
                    $selectquery13="select student_details.student_id,student_details.branch from student_details, student_reg where student_details.student_id=student_reg.student_id and student_details.branch='Chemical' ";
                      $selectquery14="select student_details.student_id,student_details.branch from student_details, student_reg where student_details.student_id=student_reg.student_id and student_details.branch='Civil' ";

     
             
             $query1= mysqli_query($con,$selectquery1);
             $query2= mysqli_query($con,$selectquery2);
             $query3= mysqli_query($con,$selectquery3);
             $query4= mysqli_query($con,$selectquery4);
             $query5= mysqli_query($con,$selectquery5);
             $query6= mysqli_query($con,$selectquery6);
             $query7= mysqli_query($con,$selectquery7);
             $query8= mysqli_query($con,$selectquery8);
             $query9= mysqli_query($con,$selectquery9);
             $query10= mysqli_query($con,$selectquery10);
             $query11= mysqli_query($con,$selectquery11);
             $query12= mysqli_query($con,$selectquery12);
             $query13= mysqli_query($con,$selectquery13);
             $query14= mysqli_query($con,$selectquery14);


             $row1=mysqli_num_rows($query1);
             $row2=mysqli_num_rows($query2);
             $row3=mysqli_num_rows($query3);
             $row4=mysqli_num_rows($query4);
             $row5=mysqli_num_rows($query5);
             $row6=mysqli_num_rows($query6);
             $row7=mysqli_num_rows($query7);
             $row8=mysqli_num_rows($query8);
             $row9=mysqli_num_rows($query9);
             $row10=mysqli_num_rows($query10);
             $row11=mysqli_num_rows($query11);
             $row12=mysqli_num_rows($query12);
             $row13=mysqli_num_rows($query13);
             $row14=mysqli_num_rows($query14);

          ?>

         <thead class="table-dark">
        
           <th >
             Sr.No
           </th>
           <th>
             Branch
           </th>
           <th>
            Total Students
           </th>
           <th>
            Total Students Registered
           </th>
           
         </thead>
         <tbody>
           <tr>
             <td>1</td>
             <td>Computer</td>
             <td><?php echo $row1; ?></td>
             <td><?php echo $row8; ?></td>
           </tr>
           <tr>
             <td>2</td>
             <td>Information Technology</td>
             <td><?php echo $row2; ?></td>
             <td><?php echo $row9; ?></td>
           </tr>
          <tr>
             <td>3</td>
             <td>Mechanical</td>
             <td><?php echo $row3; ?></td>
             <td><?php echo $row10; ?></td>
           </tr>

           <tr>
             <td>4</td>
             <td>Electronics</td>
             <td><?php echo $row4; ?></td>
             <td><?php echo $row11; ?></td>
           </tr>

          <tr>
             <td>5</td>
             <td>Electronics and Telecommunication</td>
             <td><?php echo $row5; ?></td>
             <td><?php echo $row12; ?></td>
           </tr>
           <tr>
             <td>6</td>
             <td>Chemical</td>
             <td><?php echo $row6; ?></td>
             <td><?php echo $row13; ?></td>
           </tr>
          <tr>
             <td>7</td>
             <td>Civil</td>
             <td><?php echo $row7; ?></td>
             <td><?php echo $row14; ?></td>
           </tr>
<tr>
            

         </tbody>
           
         </table>


         <center>
        <button  class="showbutton"  id="control"  onclick="show();" style="margin-left: 900px; background: white;border-color: white;outline: none;color: green;border:none;font-weight: bold; ">show bar graph</button>
         <button  class="hidebutton"  id="control1"  onclick="hide();" style="margin-left: -128px;background: white;border-color: white;outline: none;color: red;border:none;font-weight: bold;">hide bar graph</button>
      <style type="text/css">


        .hide{
          visibility: hidden;
        }
        
        .show{
         
          
          padding: 50px;
          margin: 50px;


        }
        .hidebutton{
           visibility: hidden;
        }
        .showbutton{
          visibility: visible;
        }
        button{
          position:relative;
        }

      </style>
    <div class="hide" id="columnchart_material" style=" width: 900px; 
          height: 500px;">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Branch', ' Total Students ', 'Total Students Registered', 'Total Students Not Registered'],
          ['Computer', <?php echo $row1; ?>,  <?php echo $row8; ?>,<?php echo $row1- $row8; ?> ],
          ['Information', <?php echo $row2; ?>,  <?php echo $row9; ?>,<?php echo $row2- $row9; ?>],
          ['Mechanical', <?php echo $row3; ?>,  <?php echo $row10; ?>, <?php echo $row3- $row10; ?>],
          ['Electronics', <?php echo $row4; ?>,  <?php echo $row11; ?>, <?php echo $row4- $row11; ?>],
          ['EXTC', <?php echo $row5; ?>,  <?php echo $row12; ?>, <?php echo $row5- $row12; ?>],
          ['Chemical', <?php echo $row6; ?>,  <?php echo $row13; ?>,<?php echo $row6- $row13; ?> ],
          ['Civil', <?php echo $row7; ?>,  <?php echo $row14; ?>,<?php echo $row7- $row14; ?> ],

        ]);

        var options = {
          chart: {
            title: 'Student Statstic Branch Wise',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    </div>
  
    
    </div>












            </div>
          </center>
          </div>
          
  

  </div>
</div>

  

              
            

  
       

     </div>
 




 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript">
   function show(){
    var element=document.getElementById("columnchart_material");
    var button=document.getElementById("control");
    var button1=document.getElementById("control1");
    element.className="show";
    button.className="hidebutton";
    button1.className="showbutton";
    
    
    
}
function hide(){
    var element=document.getElementById("columnchart_material");
    var button=document.getElementById("control");
    var button1=document.getElementById("control1");
    element.className="hide";
    button.className="showbutton";
    button1.className="hidebutton";
    
}

 </script>
</body>
</html>
