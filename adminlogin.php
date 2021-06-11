



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
    <link rel="stylesheet" type="text/css" href="adminlogin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <title>bootstrap5</title>
    




   
    
    

</head>
<body>

 <div class="container-fluid">

 	   <div class="row">
 	     <div class="col-lg-12 border-top border-bottom border-start border-white   rounded  text-center p-4  mb-2 ml-1 mt-1 fs-5  "style="background-color: white;color:black; height: 100px; box-shadow: 0px 0px 20px rgba(0,0,0,0.15) ; ">
 	     	 WELCOME TO DATTA MEGHE COLLEGE OF ENGINEERING
         <p style="text-align: center;font-style: italic;font-size:18px;">Admin Login </p>
        
          </div>
    </div>
    
 	  
 	 <div class="row">
 	      <div class="col-12   ">
 	     <nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
       
        <li class="nav-item dropdown  text-white" style="font-weight: normal; border-radius: 5px;background-color: #25AB87;">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbar Dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         Admin Login
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbar Dropdown" style="background-color: black;">
            <li><a class="dropdown-item text-white" href="homepage.php">Home </a></li>
            
            
          </ul>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
    
</div>
<center>
  <style type="text/css">
    .other-control{
 position: relative;
}
.other-control.success input{
  border-color:#2ecc71;
}

.other-control.error input{
  border-color:#e74c3c;
}

.other-control i{
 position: absolute;
 right: 110px;
 top:46px;
 visibility: hidden;
 
}
.other-control.error input:focus{
  outline: 0;
  box-shadow: 0px 0px  8px  0px #e74c3c;
}


.other-control.success input:focus{
  outline: 0;
  box-shadow: 0px 0px  8px  0px #2ecc71;
}

.other-control small{
   visibility: hidden;
}

.other-control.error small{
   visibility: visible;
  
}


.other-control.error i.fa-exclamation-circle{
  color:#e74c3c;
    visibility: visible;
}
.other-control.success i.fa-check-circle{
  color:#2ecc71;
    visibility: visible;
}







.dbox{
  height: 30px;
  background-color: red;
}
.cbox{
  height: 500px;

  border: 3px solid;
}
.dropdown-item:hover, .dropdown-item:focus {
   color: white;
 background-color:gray;
 
 }
 .dropdown-item.active, .dropdown-item:active {
   color: yellow;
}
button:hover{
  background-color: gray;
}

  </style>

<form action="ad_login.php" method="post" id="form" style="width: 700px; border: 1px solid #EBECF0;padding: 50px;">  
  <style type="text/css">
 #form input:focus{
  outline: none;
  border:2px solid white;
  box-shadow: 0px 0px 6px 0px dimgray;

}

</style>
  <div class="other-control">
  <label style="display: block; margin-left: -300px;margin-bottom: 10px; font-size: 17px;color:gray;">College Code:</label>
  <input id="code" placeholder="Enter College Code" type="text" name="code" style=" width: 400px;height: 40px;border-radius: 3px;outline: none;border: 1px solid #EBECF0 ;background: #EBECF0;padding-left: 10px;" onkeyup="validate();" autocomplete="off">
 <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small>
    
  </small>
  <br>
  <br>
  <br>
</div>
<div class="other-control">
<label style="display: block; margin-left: -320px;margin-bottom: 10px; font-size: 17px;color:gray;">Password:</label>
  <input  id="password" placeholder="Enter Password" type="password" name="password" style=" width: 400px;height: 40px;border-radius: 3px;outline: none;border: 1px solid #EBECF0 ;background: #EBECF0;padding-left: 10px;"  onkeyup="validate();" autocomplete="off">
 <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small>
    
  </small>
 <br>
 <br>
 
  </div>
<center>
 <a href="#" style="text-decoration: none;color: black;"> Forgot Password?</a>

</center>
<br>
<br>
<center>
  <style type="text/css">
   #baddd:active{
  box-shadow: 0px 0px 6px 0px black;
  }
   #baddd:hover {
    background-color:green;
  }
 
     </style>
  <button id="baddd" type="submit" name="login" style="border-radius: 60px;width: 200px; border: 1px solid  #009879;padding: 5px;background: #25AB87 ;outline: none;color: white;">Login</button>
</center>
   </form >
   </center>
  

 

 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script type="text/javascript">
   

 const code = document.getElementById('code');
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
           url:'ad_login.php',
           data: form.serialize(),
           success: function(response)
           { 
             if (response == 1) {
               window.location='admindashboard.php';
             }
             else{
               swal({
 
              text: "seems like you have entered wrong college code or password",
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
   
  
 
 
 const codeValue =code.value.trim();
  const passwordValue =password.value.trim();
  var letters=/^[A-Za-z\s]*$/;
  var numbers=('^[0-9]+$');


   if (codeValue === '') {
      setErrorFor(code,'');
      
   }else{
      setSuccessFor(code,'');
      
  }
   if (passwordValue === '') {
      setErrorFor(password,'');
      
   }else{
      setSuccessFor(password,'');
      
  }

  
  

}
 function setErrorFor(input,message)
   {
    const othercontrol =input.parentElement;
    const small= othercontrol.querySelector('small');
    small.innerText= message;
    othercontrol.className="other-control error";
    
   
   }
   function setSuccessFor(input,message)
   {
    const othercontrol =input.parentElement;
    const small= othercontrol.querySelector('small');
    small.innerText= message;
    othercontrol.className="other-control success";
   }


 
 </script>
</body>
</html>


