<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initialscale=1">
 <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-
beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
crossorigin="anonymous">
 <link rel="stylesheet" type="text/css"
href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="notp.css">
 <link rel="stylesheet" type="text/css"
href="fontawesome/css/all.css">
 <title>bootstrap5</title>

</head>
<body>
<div style="margin:100px;">
 <center>

 <div class="col-lg-12 border border-1 rounded
"style="background-color: ;color: black; width: 700px; padding-top:
20px; padding-bottom:20px; padding-left: 50px; padding-right:
50px;">


<form id="form" >

 <div class="other-control " >
 <label for="validationCustom01" class="form-label" style="marginright: 520px;" >Enter OTP:</label>
 <input type="number" class="form-control" id="otp" placeholder=""
style="text-align: left;" onkeyup="validate();" >
 <i class="fas fa-exclamation-circle"></i>
 <small style="margin-top: 5px;">error message</small>
 </div>
 <center>
 <button type="submit" id="submit" class="btn btn-dark"
style="margin-bottom: 15px; margin-top: 25px;" >Submit </button>
 <button type="button" class="btn btn-dark" style="margin-bottom:
15px; margin-top: 25px;" onclick="Resendotp()">Resend OTP </button>
 </center>
 <center>
 <button type="button" class="btn btn-primary
"style="background:lightblue; color: black;font-weight: bold;border:
1px solid lightblue;">Back</button>
 </center>
 </form>

 </div>
 </div>

 </div>
 </center>
</form>
</div>
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"
></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
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
 function validate() {


 const otpValue = otp.value.trim();
 if (otpValue === '') {
 setErrorFor(otp,'otp cannot be blank');
 }else{
 setSuccessFor(otp,'');

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
function verifyotp() {
 var otp=jQuery('#otp').val();
 jQuery.ajax({
 url:'submitotp.php',
 type:'post',
 data:'otp='+otp,
 success:function(result){
 if(result=='yes') {
 alert("done");
 }
 if (result=='not_exit') {
 alert('invalid OTP');
 }
 }
 });
 }
function Resendotp() {

 jQuery.ajax({
 url:'resend.php',


 success:function(result){
 if(result=='yes') {

 alert("OTP SEND");
 }
 else{
 alert('');
 }
 }
 });
 }
 </script>
</body>
</html>