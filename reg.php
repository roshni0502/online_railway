<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="reg.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <title>bootstrap5</title>
    
</head>
<body>
  
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="change" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form id="email_change">
    <div class="mb-3 other-control">
   <label for="email" class="form-label" style=" margin-top: 10px;"> New Email-ID: </label> 
  <input  id="c_email" class="form-control" name="email_change" placeholder="Enter Your  New Mail-ID" style="margin-bottom: 10px;" maxlength="30" >
  <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small>error message</small>

  </div>
      
      <div >
        <button  id= "cemail"  type="button"  class="btn btn-primary">Change Email</button>

      </div>

    </form>
        
      </div>
     
    </div>
  </div>
</div>





	<div class="container-fluid">
 	   <div class="row">
 	   	 <div class="col-lg-12 border-top border-bottom border-start border-gray  rounded   pt-4 pb-4  mb-2 h-50 mt-1 fs-5  "style="background-color: white ;color: black;text-align:center;">
 	   Student Registration for Online Railway Concession Form
 	     	 </div>
       
       <div class="col-12" style="margin-bottom: 20px;margin-top: 4px;background-color:black; padding: 1px;border: 1px solid lightgray;border-radius: 3px; height: 40px;">
 	     
<ul class="nav nav-pills">
  <li class="nav-item" style="background-color: black; height: 25px;">
    <a class="nav-link active" aria-current="page" href="#" style="background-color: black;border: 1px solid black; border-radius:5px; height:15px; ">Registration</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" >Student Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Procedure</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" href="#">About Us</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="#">Contact Us</a>
  </li>
  
</ul>
    
</div>


 	   	<center>
 	     <div class="col-lg-12 border-top border-bottom border-start border-white   rounded  text-center  mb-2  mt-2  mt-1 fs-5  "style="background-color: lightblue;color: black; width: 700px; height: 60px; padding: 10px;">
 	     	Student Registration 
 	     </div>

 	     <div class="col-lg-12 border border-1  rounded   "style="background-color: ;color: black; width: 700px; padding-top: 20px; padding-bottom:20px; padding-left:  50px; padding-right:   50px;">
 	    
       
<form  class="form" id="form">
<style type="text/css">
  .hide{
    visibility: hidden;
    display: none;
  }
  .show{
    visibility: visible;
  }
</style>
  <div class="mb-3 other-control">
  <label for="id" class="form-label" style="margin-right: 515px; " >Student-ID</label>
  <input type="text" class="form-control " id="id" name="s_id"  placeholder="Enter Your Student-ID" style="margin-bottom: 10px;" maxlength="6" onkeyup="validate();">
  <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small style=" margin-bottom:5px;">error message</small>
  </div>
  <div class="mb-3 other-control">
   <label for="dob" class="form-label"  style="margin-right: 500px; margin-top: 10px;"placeholder="dd-mm-yyyy">Date Of Birth </label>	
  <input type="date" class="form-control" id="dob" name="dob" style="margin-bottom: 10px;" onchange="validate();"  >
  <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small></small>
  <div class="invalid-feedback" style="text-align: left;">
      required feild
  </div>
  </div>
  <div class="mb-3 other-control">
   <label for="email" class="form-label" style="margin-right: 525px; margin-top: 10px;">Email-ID </label>	
  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Mail-ID" style="margin-bottom: 10px;" maxlength="30" onkeyup="validate();" onchange="validate();">
  <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small>error message</small>
  <div class="invalid-feedback" style="text-align: left;">
      required feild
  </div>
  </div>

  <?php
 
  ?>
  <button id="change_email"   class="hide" type="button" style="border: 1px solid dodgerblue; border-radius: 5px; outline: none; color: white;background: dodgerblue;" data-bs-toggle="modal" data-bs-target="#change">
   Click here to change your mail ID
  </button>
   <?php
   ?>
  
  <div class=" other-control" id="pass">
   <label for="password" class="form-label" style="margin-right: 525px; margin-top: 10px;">Password</label>	
  <input type="Password" class="form-control" id="password" style="margin-bottom: 10px;" maxlength="20" onkeyup="validate();">
  <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small>error message</small>
  <p id="p" class="hide">password must be minimum of 6 characters and maximum of 20 characters long. Alphabets from A-Z and a-z are allowed, digits from 0-9 are allowed. special characters are also allowed</p>
  <div class="invalid-feedback" style="text-align: left;">
      required feild
  </div>
  </div>
  <div class="mb-3 other-control">
   <label for="cpassword" class="form-label" style="margin-right: 470px; margin-top: 10px;">Confirm Password </label>	
  <input type="Password" class="form-control" id="cpassword" style="margin-bottom: 10px;" maxlength="20" onkeyup="validate();">
  <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small>error message</small>
  </div>
 
  

 
  
  


<!-- Button trigger modal -->
<button id="submit" type="submit" class="btn" style="width: 600px;margin-bottom: 20px;background: black;margin-top: 20px;color: white;" >
 Send OTP 
</button>
 


 <center>
 <button type="reset"  class="btn btn-dark" style="margin-bottom: 20px; background: white;color: black;">Reset</button>
  </center>
 </form>	    
  	      
 	    </div>
 	

 	   </div> 	 
 	     	 
 	</div>
 	</center>



<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="reg.js"></script>
<script type="text/javascript" src="change_email.js"></script>
<script type="text/javascript">
  

</script>

</body>
</html>