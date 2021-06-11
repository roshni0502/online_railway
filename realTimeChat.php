<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<style type="text/css">
.div1{
  
  clear: both;
  overflow: hidden;
 
height:auto;
}


  
</style>
</body>
</html>


<?php
include 'connect.php';
session_start();


$from_user=$_SESSION['f_user'];
$to_user=$_SESSION['to_user'];
$output="";

$chats="SELECT * FROM `chat` where (from_user='$from_user' and to_user='$to_user') or (from_user='$to_user' and to_user='$from_user')   ORDER BY `date` ASC, `time` ASC" ;
$chat= mysqli_query($con,$chats);



date_default_timezone_set('Asia/Kolkata');
$date=0;

while($result=mysqli_fetch_assoc($chat)){
      
     if($date!=$result['date']){
         $year=date('Y',strtotime($result['date']));
          $day=date('d',strtotime($result['date']));
           $month=date('M',strtotime($result['date']));        
  if($result['date']==date("Y-m-d")){
    
        
   echo"

        
        <p style='text-align:center;border-radius:5px;border:1px solid lightblue;padding:5px;background:lightblue;font-size:13px;overflow:auto;width:100px;color:black;position:sticky;top:0;'>Today</p>   ";
     
     
  
     }elseif ($result['date']==date("Y-m-d",strtotime("-1 DAYS"))) {
      
       echo"
        
        
        <p style='text-align:center;border-radius:5px;border:1px solid lightblue;padding:5px;background:lightblue;font-size:13px;overflow:auto;width:100px;color:black;position:sticky;top:0;'>Yesterday</p>   ";
     
     }
     else {
      echo"

   
        <p style='text-align:center;border-radius:5px;border:1px solid lightblue;padding:5px;background:lightblue;font-size:13px;overflow:auto;width:100px;position:sticky;top:0;'>".$day." ".$month." ".$year."</p>   ";
     
     
     }
   }
      $date=$result['date'];
      
      if( $result['from_user']==$from_user &&  $result['to_user']==$to_user)
      

       echo"<div class='div1'style='text-align:left;'>
      
        <span style='border:1px solid lightgreen; border-radius: 4px; padding: 5px;background:lightgreen;padding:5px;float:right;margin:6px;max-width:280px;'>".$result['messages']."
        <span style='float:right;margin-top:15px;margin-right:4px;margin-left:5px;font-size:13px;color:gray;'>".$result['time']."
        
         </span>

         </span>
       
     
        </div> ";
      else
        echo"<div  class='div1' style='text-align:left;'>


      
        <span style='border:1px solid lightgreen; border-radius: 4px; padding: 5px;background:white;padding:5px;float:left;margin:6px;max-width:280px;'>".$result['messages']."
         <span  style='float:right;margin-top:15px;margin-right:4px;margin-left:5px;font-size:13px;color:gray;'>".$result['time']."
        
         </span>
        </span>
       
         </div>";
      
  }

?>