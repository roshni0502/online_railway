<?php
if(!empty($_GET['status'])){
  echo "<div style='margin:10px;color:red'>you have been successfully logged out!!!</div>";
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <title>bootstrap5</title>
</head>
<body>
  
 <div class="container-fluid">

 	   <div class="row">
 	     <div class="col-lg-12 border-top border-bottom border-start border-white   rounded  text-center   mb-2 ml-1    "style="background-color: lavender;color: black; height: 80px; font-size: 20px; padding-top: 3px;">
 	     	 WELCOME TO DATTA MEGHE COLLEGE OF ENGINEERING
         <p style="text-align: center;font-style: italic;font-size:18px;">Student Login </p>
        </div>

 
    
 	  
 	 <div class="row">
 	      <div class="col-12   ">
 	     <nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
       
        <li class="nav-item dropdown  text-white" style="font-weight: normal; border-radius: 5px;background-color: dodgerblue;">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbar Dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         Student Login
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbar Dropdown" style="background-color: black;">
            <li><a class="dropdown-item text-white" href="homepage.php">Home </a></li>
            <li><hr class="dropdown-divider text-white"></li>
            <li><a class="dropdown-item text-white" href="#">About Us</a></li>

            <li><hr class="dropdown-divider text-white"></li>
            <li><a class="dropdown-item text-white" href="#">Contact Us </a></li>
            <li><hr class="dropdown-divider text-white"></li>
            <li><a class="dropdown-item text-white" href="#">Procedure</a></li>
            <li><hr class="dropdown-divider text-white"></li>
            <li><a class="dropdown-item text-white" href="#">Admin Login</a></li>
          </ul>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
    
</div>
<form  id="form" class="row g-3" >  
<style type="text/css">
  .other-control{
 position: relative;
}
.other-control.success input{
  border-color:#2ecc71;
}
.other-control.success select{
  border-color:#2ecc71;
}
.other-control.error input{
  border-color:#e74c3c;
}
.other-control.error select{
  border-color:#e74c3c;
}
.other-control  input:focus{
  outline-width: 5px;
  outline-color: dodgerblue;
 
}
.other-control i.fa-exclamation-circle{
 position: absolute;
 visibility:hidden; 
 right: 170px;
 top:20px;
 
}
.other-control i.fa-check-circle{
 position: absolute;
 visibility:hidden; 
 right: 170px;
 top:20px;
 
}
.other-control.error input:focus{

  outline-width: 5px;
  outline-color: #e74c3c; 
  
}

.other-control.error select:focus{
  outline: 0;
  box-shadow: 0px 0px  8px  0px #e74c3c;
}
.other-control.success input:focus{
  outline-width: 5px;
  outline-color:  #2ecc71;
  
}
.other-control.success select:focus{
  outline: 0;
  box-shadow: 0px 0px  8px  0px #2ecc71;
}


.other-control.error i.fa-exclamation-circle{
  color:#e74c3c;
    visibility:visible;
}

.other-control.success i.fa-check-circle{
  color:#2ecc71;
    visibility:visible;
}
.other-control input{
 width: 380px;
 height: 50px;
 border-radius:3px;
 border: 1px solid #EBECF0 ;
 background: white;
 padding-left: 10px;
}


</style>
<center> 	 
 <div class="col-12 bg-light  border border -1 rounded   w-50   fs-6" >
 <div class="mb-4">
 	<i class=" fas fa-users border border -2 rounded-circle m-2 p-3 " style="font-size: 70px;">
 	</i>
 </div>
 <center> 
   <div class="other-control" >

  <span style="background:#EBECF0;margin-right: -5px; border: 1px solid #EBECF0; padding: 5px;height: 50px;display: inline-block;" ><i class=" fas fa-user" style="font-size: 30px;"></i></span>
  <input id="id" placeholder="Enter College Code" type="text" name="id"  onkeyup="validate();" autocomplete="off">
   <i class="fas fa-exclamation-circle"></i>
   <i class="fas fa-check-circle"></i>
 
  <br>
  <br>
</div>
<div class="other-control">
 
  <span style="background:#EBECF0;margin-right: -5px; border: 1px solid #EBECF0; padding: 5px;height: 50px;display: inline-block;" ><i class=" fas fa-key" style="font-size: 30px;"></i></span>
  <input type="password" id="password" placeholder="Enter College Code" type="text" name="password"  onkeyup="validate();" autocomplete="off">
 
  <i class="fas fa-exclamation-circle"></i>
  <i class="fas fa-check-circle"></i>
 <br>
 
  </div>
  
<div class="input-group flex-nowrap w-50 " style="display: flex;margin-left: -40px;">
<input  type="checkbox" style="margin-top: 20px;margin-right: 7px;"> 
<span style="margin-top: 14px;">Remember  me</span>

</div>


<div class="mt-3">

<button type="submit" class="btn btn-primary  text-center" style="width: 420px;">Login</button>
</div>
<div class="mt-3" style="margin-bottom: 40px;">
	New?
	<br>
	<a href="reg.php">click here to register</a>
	<br>
	<br>
	<a href="email.php">forgot password ?</a>
  <br>



</div>

</center> 
   
 </div>	
 
 </center>   
 	  
  </div>

   </form>
   

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

 <script type="text/javascript">
   

 const id = document.getElementById('id');
 const password = document.getElementById('password');

 form.addEventListener('submit', (e) => {
    e.preventDefault();
    validate();
    successmsg();
  


  })

  const sendData=(srate,count) =>{
      

    if (srate===count) {
     
    login();

   
}
}

  function login(){

    var form=$('#form');
   
   
    $.ajax({ 

           type:"POST",
           url:'check_student_login.php',
           data: form.serialize(),
           success: function(response)
           { 
             if (response == 1) {
               window.location='information.php';
             }
             else{
               swal({
 
              text: "seems like you have entered wrong Student-ID or password",
              icon: "error",
              button: "OK",
             });  
             }
            }
         });

}
 const successmsg = () => {

  let formcon= document.getElementsByClassName('other-control');
  var count=formcon.length-1;
  for (var i=0;i<formcon.length;i++){
    if (formcon[i].className ==="other-control success"){
       var srate=0+i;

       sendData(srate,count);


    }else{
      return false;
    }
  }

 }
  function  validate() {
   
  
 
 
 const idValue =id.value.trim();
  const passwordValue =password.value.trim();
  var letters=/^[A-Za-z\s]*$/;
  var numbers=('^[0-9]+$');


   if (idValue === '') {
      setErrorFor(id,'cannot be blank');
      
   }else{
      setSuccessFor(id,'');
      
  }
   if (passwordValue === '') {
      setErrorFor(password,'cannot be blank');
      
   }else{
      setSuccessFor(password,'');
      
  }

  
  

}
 function setErrorFor(input,message)
   {
    const othercontrol =input.parentElement;
   
    othercontrol.className="other-control error";
    
   
   }
   function setSuccessFor(input,message)
   {
    const othercontrol =input.parentElement;
   
  
    othercontrol.className="other-control success";
   }


 
 </script>




    


 

  
  

</body>
</html>


