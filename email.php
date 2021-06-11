<!doctype html>
<html lang="en">
  <head>
   
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="email.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <title>forgot password</title>
  </head>
  <body>
  <div class="container-fluid">

     <div class="row">
       <div class="col-lg-10 border-top border-bottom border-start border-white   rounded  text-left  fs-5  "style="background-color:black; ;color: black; height: 85px; width:1525px; margin: 4px; padding-top:7px;">
   
      
      <nav class=" navbar navbar-dark   text-black  nav justify-content-end " style="width: 200px;background-color:black ;">
  <div class="container-fluid">
   
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"style="background:black; margin-bottom: 20px;">
      <span class="navbar-toggler-icon" ></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" >
      <ul class="navbar-nav">
        <li class="nav-item" style="border-bottom: 1px solid white;">
          <a class="nav-link " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item" style="border-bottom: 1px solid white;">
          <a class="nav-link" href="#">Help</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" href="#">Contact us</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
 </div>
</div>

<style type="text/css">
  .hide{
    visibility: hidden;
    display: none;
  }
  .show{
    visibility: visible;
  }
</style>
<center> 

<div class="col-lg-10 border-top border-bottom border-start border-white   rounded  text-center   fs-5  "style="background-color: ;color: black; height: 100px; width:1365px;margin-top:60px;padding:20px;">
 
    <form  id="form" style="padding: 10px;" onkeyup="validate();">
      <div style="">
      <center>
       <div id="error" class="hide" style="width: 700px; font-size: 17px;">
      <div class="alert alert-danger" role="alert">
  E-mail Address Not Found
</div>
</div>

<div id="success" class="hide" style="width: 700px; font-size: 17px;">
<div class="alert alert-success" role="alert">
  We have E-mailed your password reset link .Kindly Check your spam folder also.
</div>
</div>
</center>

    <div class="container w-50 p-3 border border-3" style="font-size: 15px;  text-align: left;margin-top:40px;">

  <div class="other-control">

  <label for="exampleFormControlInput1" class="form-label">PLEASE ENTER YOUR EMAIL: </label>
  <input type="email" class="form-control" id="email" placeholder="" value="" style="width: 600px;">
  <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small></small>
</div>
<br>
<center>
<div  class="d-grid gap-2 col-4">
  <button type="submit" class="btn btn-outline-dark"style="width:135px; font-size: 15px;padding:5px;height: 30px;">SEND MAIL</button>
  <button type="button" class="btn btn-outline-dark"style="width:135px; font-size: 15px;padding:5px;height: 30px;">BACK TO LOGIN</button>
  </center>
</div>
</div>
</div>
</form>

</center>
</div>


   

   <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="email.js"></script>
     <script type="text/javascript" src="jquery-3.6.0.min.js"></script>

  </body>
</html>

