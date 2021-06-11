
<?php
session_start();
if(!isset($_SESSION['id']))
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
    <link rel="stylesheet" type="text/css" href="information.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <title>bootstrap5</title>
    
</head>
<body>
<center>
<style type="text/css">
  .Center{
    top:0%;
    transform:translateX(-30%) !important;
}
   
 

.table-fixed table th{
     padding: 10px;
    text-align: center;
    position: sticky;
   top: 0;
  }
  .table-fixed table td{
    text-align: center;
    padding: 10px;
    font-size: 14px;
  }
  .table-fixed {
   height: 400px;
   overflow-y: auto;
   display: inline-block;
   width: 100%;
  }
  
  

  
  

  
 

</style>
<div class="modal fade" id="view_pass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

  <div class="modal-dialog Center ">

    <div class="modal-content" style="width: 860px; ">
       <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="view_data1">
          
        </div>
      </div>

     
    </div>
  </div>
</div>
<div class="modal fade" id="view" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

  <div class="modal-dialog Center ">

    <div class="modal-content" style="width: 860px; ">
       <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="view_data">
          
        </div>
      </div>

     
    </div>
  </div>
</div>
</center>
	 <div class="container-fluid" style="height: ">
     <div class="row">
       
       <div class="col-sm-2 border-top border-bottom border-start border-end border-black    rounded  text-center p-4    fs-5  "style=";color: ; position: fixed; border-radius: 2px;">

         <div class="   text-center  fs-5  "style="color: black; padding: 15px; width: 253px; text-align: center;margin-left: -23px; height: 158px; margin-top: -30px;margin-bottom: -14px; background: black;border-radius: 2px;">
          <i class="fas fa-user" style="font-size: 70px; border: 4px solid white; border-radius:50%; padding: 25px; background: white;margin-bottom: 10px;"></i>

         </div>
    <ul style="font-size: 14px;width: 283px;margin-left: -38px; text-align: left; padding: 15px;">
  <style type="text/css">
    .list-group-item-action{
      background: black;
    }

    .list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: white;
  text-decoration: none;
  background-color:red;
  
}
a{
  
  font-size: 19px;
}
  </style>
  <?php
  $student_id=$_SESSION['id'];
  ?>
  <a href="homepage.php" class="list-group-item list-group-item-action  text-light" style="border-bottom: 1px solid white;">Home</a>
   <a href="information.php" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;">DashBoard</a>

  <a id="show" data-id= "<?php echo  $student_id ; ?>" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;"></i>Your Details</a>
  <a id="show_details" data-id= "<?php echo  $student_id ; ?>" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;">Previous Form Details</a>
  <a href="#" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;">Procedure</a>
  <a  href="#" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;">About us</a>
  <a  href="#"  class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;">Contact Us</a>
  <a href="student_message.php?from_user=<?php echo  $student_id ; ?>&to_user=123" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;"></i>Address Change Request</a>
  <a href="#" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;" >Help</a>
  <a href="login.php" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;">Back to Login</a>
  <a href="student_logout.php" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;">Log Out</a>

  
   <div class="col-sm-2" style="height: 40px; background: black; width: 253px; height: 140px;border-radius: 2px;">
  <div>
  </ul>
  
    
 
  
</div>





         </div>

 	     
 	     <div class="col-sm-10" style="margin-left: 255px;">

            <div class="row">
             <div class="col-sm-12  " style="border: 1px solid white; padding-top:20px;  margin-top: 5px; margin-bottom: 5px; border-radius: 5px ;color: black;font-weight: bold; height:60px; background: gainsboro;">
             <p style="text-align: center;">
              WELCOME TO DATTA MEGHE COLLEGE OF ENGINEERING
              </p>
              </div>
              <div class="row">
               <div class="row" style="margin-bottom: 30px; ">
          <center>
              <?php
            include 'connect.php';
            if(isset($_SESSION['id'])){
             $id=$_SESSION['id'];
             $selectquery= "select* from  student_login where student_id='$id'";
             $selectquery1= "select* from  student_details where student_id='$id'";
             $query= mysqli_query($con,$selectquery);
             $query1= mysqli_query($con,$selectquery1);
             $result1=mysqli_fetch_assoc($query1);
             $row=mysqli_num_rows($query);
             
         ?>
             <div class="col-sm-10  border-top border-bottom border-start border-end" style=" padding-top:10px;  margin-top: 5px; margin-bottom: 5px; color:white;font-weight: bold; height:60px; background:dodgerblue; border-radius: 5px 5px 5px 5px; position: fixed; height: 50px;width: 1257px;">
             <p style="text-align: left;margin-left: 350px; ">
              Welcome  <?php echo $result1['fname'] ;?> !!
              <?php
              if($row==0){
          
              ?>
               <p style="outline: none; background: dodgerblue; border: 1px solid dodgerblue;border-radius: 4px;color: white;height: 30px; width: 200px; text-align: center;margin-left: 1000px; margin-top: -40px;font-size: 10px;">Last Login :   <?php echo "never" ; ?></p>
              <?php
              }else{
                 $result=mysqli_fetch_assoc($query);
                $year=date('Y',strtotime($result['date']));
                $day=date('d',strtotime($result['date']));
                $month=date('M',strtotime($result['date']));  
                 ?>
              <p style="outline: none; background: dodgerblue; border: 1px solid dodgerblue;border-radius: 4px;color: white;height: 30px; width: 200px; text-align: center;margin-left: 1000px; margin-top: -40px;font-size: 10px;">Last Login :   <?php echo $day ." " . $month ." " . $year ."  ". $result['time'] ; ?></p>
              <?php
              }
              ?>
            </div>
            </center>
           </div>
            <?php
          }
           ?>
               
               <div class="col-sm-12   fs-5 border   "style="height:430px; margin-right:80px; margin-left:30px;  margin-top:80px; padding: 60px;width: 1200px; border-color: : gainsboro;">

             
<label style="margin-left: 145px; text-decoration: underline; margin-bottom: 3px;">Destination details:</label>             		
<center>

<table class="table  table-hover table-light table-striped  table-bordered bordered-primary" style="font-size: 15px;width: 800px; margin-top: 15px;">


  <thead >
    <tr>
    
      <th scope="col">Home-Station</th>
      <th scope="col">Destination</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td><?php echo $result1['station'] ;?></td>
      <td>Airoli</td>
      
   
    </tr>
  </tbody>
</table>
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
 right: 7px;
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
.other-control small{
  color:#e74c3c;
  position: absolute;
  bottom: -20px;
  left:3px;
  visibility: hidden;
  

}
.other-control.error small{
   visibility: visible;
  
}

.other-control.success  i.fa-check-circle{
  color:#2ecc71;
    visibility: visible;
}
.other-control.error i.fa-exclamation-circle{
  color:#e74c3c;
    visibility: visible;
}
  .hide{
    visibility: hidden;
    display: none;
  }
  .show{
    visibility: visible;
  }
</style>
<form id="form" style="padding-bottom: 10px;">
<div class="other-control" style="text-align: left; margin-left: 140px; font-size: 17px;color: black;">
  
  <input id="check_it" type="checkbox" onclick="validate();" onchange="validate();">
  <label    class="form-check-label" for="invalidCheck2" style="font-size: 17px;" >
   confirm destination 
  </label>
  <br>
  <br>
  <p id="small" class="hide" style="width: 700px;color: red; margin-top: -25px;">you need to confirm your destination first in order to fill the details.if you find it wrong contact your college administrator.</p>


  

 </div>
  <br> 
<div id="timer" class="hide" style="margin-top: -40px;margin-bottom:15px;">     
<div style="font-size: 15px;text-align: left;float: left;margin-left: 140px;color: red;">Your Next Concession Form Will be in: </div>
<br>
<div  class="" style="color: green;text-align: left;float: left;margin-left: 140px;display: flex;"><div style="margin: 10px;"><span id="days" style="margin: 5px;"> </span><p style="color: black;font-weight: bold;">Days</p></div>
<div style="margin: 10px;"><span id="hours" style="margin: 5px;"> </span><p style="color: black;font-weight: bold;">Hours</p></div><div style="margin: 10px;"><span id="min" style="margin: 5px;"> </span><p style="color: black;font-weight: bold;">Min</p></div><div style="margin: 10px;"><span id="sec" style="margin: 5px;"> </span><p style="color: black;font-weight: bold;">Sec</p></div>
</div>
<br>
<br>
<br>
 </div>     
  
<div style="display: block;">
 <button type="submit"  class="btn btn-primary" form-id= "<?php echo  $student_id ; ?>" id="generate">
  Generate Form
</button>
 </div>
</form>
<!-- Button trigger modal -->


<!-- Modal -->

<div class="modal fade" id="fill_details" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Fill your pass Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
  <form action="pdf.php" method="post">
      <div class="modal-body">


    <label for="floatingSelect" style="font-size: 15px;float: left;margin-top: 5px;" >Pass type</label> 
    <div style="margin-bottom: 20px;margin-top: 30px;">
  
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="pass_type">
    <option selected default value=""> select your pass type</option>
    <option value="First Class">First Class</option>
    <option value="Second Class">Second Class</option>
   
  </select>
 </div>
<label for="floatingSelect" style="font-size: 15px; float: left;">Pass Duration</label>
<div style="margin-bottom: 20px;margin-top: 30px;">

  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="pass_dur">
    <option selected default value="">select your pass duration</option>
    <option value="Monthly">Monthly</option>
    <option value="Quaterly">Quaterly</option>
    <option value="Half-Yearly">Half-Yearly</option>
  </select>
  </div>

      </div>
 
      <div class="modal-footer">
       
        <button type="submit"  id="download" class="btn btn-primary">Download form</button>
      

      </div>
       </form>
    </div>
  </div>
</div>
  


          




<script type="text/javascript">
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
 
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
 <script type="text/javascript">
 


 form.addEventListener('submit', (e) => {
    e.preventDefault();
    validate();
    successmsg();
  


  })
 
  const sendData=(srate,count) =>{
      

    if (srate===count) {
    fill();
      
      
   
}
$('#download').click(function(){
   $('#fill_details').modal('hide');
});
function fill(){
  
     var id= $("#generate").attr('form-id');
    
      $.ajax({
        url:'set_timer.php',
        type:'post',
       
        data:{'id':id
             },

        success :function(response){
         
          if (response==0){
             $('#fill_details').modal('show');
          }
          else {
         
         
        
          var data=$.parseJSON(response);
          var date=data[0].date;
          var time=data[0].time;
          
         const down_time =time;
         arr = down_time.split(':');
         hour = parseInt(arr[0]) ;
         min = parseInt(arr[1]) ;
         sec = parseInt(arr[2]) ;
        const total_milli = (((hour*60*60) + (min*60) +sec))*1000;
       
        var re= new Date(date);
        re.setTime(re.getTime()+((30*24*60*60*1000)-330*60*1000+total_milli));
       
        
        var ab=new Date();
        ab.setTime(ab.getTime());
        
        if (ab >= re) {
           $('#fill_details').modal('show');
        }
   else{
    var element1=document.getElementById('timer');
          element1.className="show";
   var x= setInterval(function(){
  
  var now=new Date();
  now.setTime(now.getTime());
  var dif=re-now;

  var day=Math.floor(dif/86400000);
  
  var hours=Math.floor((dif/86400000-day)*24);
  var min=Math.floor((((dif/86400000-day)*24)-hours)*60);
  var sec=Math.floor((((((dif/86400000-day)*24)-hours)*60)-min)*60);


  var element1=document.getElementById('timer');
  element1.className="show";  
  document.getElementById('days').innerHTML=day;
  document.getElementById('hours').innerHTML=hours;
  document.getElementById('min').innerHTML=min;
  document.getElementById('sec').innerHTML=sec;
  if (day==0 && hours==0 && min==0 && sec==0) {

          var element1=document.getElementById('timer');
          element1.className="hide";
          clearInterval(x); 
         
          

}

  },1000);

   

 }


         
        }                                                            
}
       });
     
     


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
   
  
 
 const check = document.getElementById('check_it');
 
  

   if (!(check.checked)) {
     setErrorFor(check,'');
     var element1=document.getElementById('small');
          element1.className="show";
      
   }else{
      setSuccessFor(check,'');
      var element1=document.getElementById('small');
          element1.className="hide";
      
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
    
    othercontrol.className="other-control success ";

   }

   $("#show").on("click",function(e){
        e.preventDefault();
    var element=$(this);
     var id= $(this).attr('data-id');
    
      $.ajax({
        url:'view_modal.php',
        type:'post',
        data:{'id':id
             },

        success :function(response){
         $('.view_data').html(response);
         $('#view').modal('show');

        
         
        }                                                            

       });
     
     


});
 $("#show_details").on("click",function(e){
        e.preventDefault();
    var element=$(this);
     var id= $(this).attr('data-id');
    
      $.ajax({
        url:'pass_details.php',
        type:'post',
        data:{'id':id
             },

        success :function(response){
         
         $('.view_data1').html(response);
         $('#view_pass').modal('show');

        
         
        }                                                            

       });
     
     


});

  
 </script>
</body>
</html>


