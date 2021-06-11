<!DOCTYPE html>
<html>
<head lang="en">

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fpass.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
   
    
	<title></title>
</head>
<body>
<style type="text/css">
  .hide{
    visibility: hidden;
    display: none;
  }
  .show{
    visibility: visible;
  }
</style>
 <div class="col-lg-10 border-top border-bottom border-start border-white   rounded  text-left  fs-5  "style="background-color:black; ;color: black; height: 50px; width:1527px; margin-top:10px; ">
 	<div>
 <center>	
<div  id="message" class="hide">
  <p style="color: black; margin: 10px;font-size: 15px;text-align: center;"> your password has been successfully changed. <a href="login.php">Go back to login page.</a></p>

<div> 
  </center> 
<center>  
<form  style=" width: 1100px; font-size: 15px;text-align: left; padding: 40px;" id="form">
      <br>
  <div class="container w-50 p-3 border border-3">
    <div class="other-control">
   <label for="exampleInputPassword1" class="form-label"> Enter New Password:</label>
    <input type="password" class="form-control" id="password" value="" style="margin-bottom: 20px;"onkeyup="validate();"maxlength="20">
    
     <i class="fas fa-check-circle"></i>
    <i class="fas fa-exclamation-circle"></i>
  <small></small>
  <p id="p" class="hide">password must be minimum of 6 characters and maximum of 20 characters long. Alphabets from A-Z and a-z are allowed, digits from 0-9 are allowed. special characters are also allowed</p>
 </div>

  <div class="mb-3 other-control" >
    <label for="exampleInputPassword2" class="form-label"> Confirm  Password:</label>
    <input type="password" class="form-control" id="cpassword" value=""onkeyup="validate();">
     <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small></small>
  </div >
 <div style="margin-top:40px;">
  <button type="submit" class="btn btn-primary" id="btn" style="margin: 5px;">RECOVER PASSWORD</button>
  
  </div>
  </div>
</form>

</center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
 <script type="text/javascript" src="jquery-3.6.0.min.js"></script>  
<script >
 const form = document.getElementById('form');
 const password = document.getElementById('password');
 const cpassword = document.getElementById('cpassword');
  
form.addEventListener('submit', (e) => {
    e.preventDefault();
    validate();
    successmsg();

  })
$('#password').click(function(){
   var y=$("#pass").attr('class');
  
   if(y==="other-control success "){
  var element1=document.getElementById("p");
   element1.className="hide";
 }else{
   var element2=document.getElementById("p");
   element2.className="show";
 }
 });
const sendData=(srate,count) =>{
      

    if (srate===count) {
     change_password();
}
}


  const successmsg = () => {

 
  let formcon= document.getElementsByClassName('other-control');
  var count=formcon.length-1;

  for (var i=0;i<formcon.length;i++){


    if (formcon[i].className != "other-control error"){
       
       var srate=0+i;
       sendData(srate,count);


    }else{
      return false;
    }
  }

 }
  
  function  validate() {
   
  const passwordValue= password.value.trim();
  const cpasswordValue= cpassword.value.trim();


  
    if (passwordValue === '') {
      setErrorFor(password,' password cannot be blank');
    }else if (passwordValue.length<6) 
    {  var element1=document.getElementById("p");
       element1.className="show";
      setErrorFor(password,' password length should be minimum 6 characters');
    }else{
      var element1=document.getElementById("p");
      element1.className="hide";
      setSuccessFor(password);
    }
    

     if (cpasswordValue === '') {
      setErrorFor(cpassword,' confirm password cannot be blank');
    } 
    else if (cpasswordValue.length<6) 
    {
      setErrorFor(cpassword,'pasword and confirm pasword are not matching');
    }

    else if (cpasswordValue != passwordValue) 
    {
      setErrorFor(cpassword,'pasword and confirm pasword are not matching');
    }else{
      setSuccessFor(cpassword);

     
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
    othercontrol.className="other-control success ";
  }
  
   


  function change_password() {
 var url_string=window.location.href;
 var url=new URL(url_string);
 var email=url.searchParams.get("email");
 var password= document.getElementById('password').value;



 $.ajax({
 url:'change_password.php',
 type:'post',
 data:{ 'password':password,
        'email':email

 },
 success:function(response){
 if(response == 1) {

 
  $('#password').val("");
  $('#cpassword').val("");
  var element1=document.getElementById("message");
 element1.className="show message";
 
    
 
 }
 else{
  alert("password not changed succcessfully")
 }
 }
 });
 }





</script>







</body>
</html>