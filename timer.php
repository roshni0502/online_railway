
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
<p> resend otp in :</p>
<p id="timer" class="" style="color: red;"></p>

<button id="click" class="show">click me</button>


<button id="resend" class="hide">Resend OTP</button>
 




<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">

  $('#click').click(function(){
  	     var element=document.getElementById("click");
          element.className="hide";
          timer();

          });

  $('#resend').click(function(){
  	      var element=document.getElementById("resend");
          element.className="hide";
          var element1=document.getElementById("timer");
          element1.className="show";
          timer();

   });


 function timer(){
 
	var re= new Date();
	re.setTime(re.getTime()+(0.1*60*1000));
	 var x= setInterval(function(){
	
	var now=new Date();
	now.setTime(now.getTime());
	var dif=re-now;
	var min=Math.floor((dif%(1000*60*60))/(1000*60));
	
	var sec=Math.floor((dif%(1000*60))/(1000));

	document.getElementById('timer').innerHTML=min +' : '+ sec;
	if (min==0 && sec==0) {

		  var element=document.getElementById("resend");
          element.className="show";
          var element1=document.getElementById("timer");
          element1.className="hide";
          clearInterval(x);      

	}

	
},1000);



}


    
</script>
</body>
</html>















    