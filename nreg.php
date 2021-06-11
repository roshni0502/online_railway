<!DOCTYPE HTML>
<html lang="en">
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initialscale=1">
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-
beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-
beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
crossorigin="anonymous"></script>

 <title>EMAIL VRIFICATION</title>
 </head>
 <body>
 <div class="mx-auto d-grid border border-dark" style="width: 500px;
margin: 50px auto;">
 <form style="margin: 10px auto;" method="post">
 <div class="mb-3">
 <h3>Email verification</h3>
 </div>
 <div class="mb-3 firstbox">
 <label for="exampleInputEmail1" class="form-label">Email
address</label>
 <input type="email" class="form-control" id="email" name="email"
aria-describedby="emailHelp" required/>
 <div id="emailHelp" class="form-text">We'll never share your email
with anyone else.</div>
 <span id="email_error"></span>
 </div>

 <div class="firstbox">
 <button type="button" class="btn btn-primary" onclick="sendotp()"
>send otp</button>
 </div>


</form>
 <script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"
></script>
 <script>
 function sendotp() {
 var email=jQuery('#email').val();
 jQuery.ajax({
 url:'ver.php',
 type:'post',
 data:'email='+email,
 success:function(result){
 
 window.location='notp.php';

 }

 });
 
}
 </script>

 </body>
</html>
<style>
#email_error{color: red;}
</style>