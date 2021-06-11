


<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="otp.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <title>bootstrap5</title>
    
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





<div style="margin:100px;">
 	   	<center>
       <div id="error" class="hide" style="width: 700px; font-size: 23px;">
      <div class="alert alert-danger" role="alert">
  E-mail verification unsuccessful !!!
</div> 
 </div> 
<div id="success" class="hide" style="width: 700px; font-size: 23px;">
<div class="alert alert-success" role="alert">
   E-mail verification successful !!!
</div>
</div> 
 	     <div class="col-lg-12 border border-1  rounded   "style="background-color: ;color: black; width: 700px; padding-top: 20px; padding-bottom:20px; padding-left:  50px; padding-right:   50px;">
 	   
<form   id="form" >

 	   
  <div class="other-control " >
   <label for="validationCustom01" class="form-label" style="margin-right: 515px;" >Enter Code:</label>	
  <input type="number" class="form-control" id="otp" placeholder="" style="text-align: left;" onkeyup="validate();" autofocus="on">
  
  <small style="margin-top: 5px;">error message</small>
  </div>

  <center>
  <button type="submit" class="btn btn-dark" style="margin-bottom: 15px; margin-top: 25px;" >Submit  </button>
  </center>
 
  <br>
  <p style="font-size: 23px;">Didn't receive the code?</p>
  <button  id="resend" type="button" class="btn btn-primary "style="background:lightblue; color: black;font-weight: bold;border: 1px solid lightblue;" >Resend Code</button>
  	      </form>
  	      
 	    </div>
 	

 	   </div> 	 
 	     	 
 	</div>
 	</center>
</form>
</div>





 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
 <script type="text/javascript" >
   const form = document.getElementById('form');
const otp = document.getElementById('otp');
  
form.addEventListener('submit', (e) => {
    e.preventDefault();
    validate();
    successmsg();

  })

const sendData=(srate,count) =>{
      

    if (srate===count) {
     verifyotp();
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
   
  
 
  const otpValue = otp.value.trim();
 
   if (otpValue === '') {
      setErrorFor(otp,'otp cannot be blank');  
    }else{
      setSuccessFor(otp);
      
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
$('#resend').click(function(){
     resendotp();
  });




function verifyotp() {
 var url_string=window.location.href;
 var url=new URL(url_string);
 var id=url.searchParams.get("s_id");
 var pass=url.searchParams.get("pass");
 var otp= document.getElementById('otp').value;



 $.ajax({
 url:'submitotp.php',
 type:'post',
 data:{ 'id':id,
        'otp': otp

 },
 success:function(response){
 if(response == 1) {


   
    $.ajax({ 
           url:'insert_into_reg.php',
           type:"POST",
            data:{ 'id':id,
                   'pass':pass

            },
          
           success: function(data)
           { 
             
          } 
            
         });
 
 $('#otp').val("");
 var element1=document.getElementById("error");
 element1.className="hide";
              swal({
              html:true,
              title:"Registration Successful",
              icon: "success",
              text:"Redirecting to login page in 5 seconds........." ,
              button:false,
             })
                   setTimeout(function(){
                   window.location='login.php';
                   },5000);
 }
 else{
 var element1=document.getElementById("error");
 element1.className="show";
 var element1=document.getElementById("success");
 element1.className="hide";
 }
 }
 });
 }
 function resendotp() {

 var url_string=window.location.href;
 var url=new URL(url_string);
 var email=url.searchParams.get("email");
 var id=url.searchParams.get("s_id");
 
 $.ajax({
 url:'mailer.php',
 type:'post',
 data:{ 'email':email,
        'id':id

}
 
 
 });
  swal({
             
              text:"we have again send verification code to your mail id.kindly recheck it" ,
              button:"OK",
             })

 }
 </script>
</body>
</html>