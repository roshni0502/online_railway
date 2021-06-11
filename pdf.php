<?php
session_start();
?>

<html>
<head>
  
</head>
<body>

<?php


include 'connect.php';
require('vendor/autoload.php');
date_default_timezone_set('Asia/Kolkata');

$id=$_SESSION['id'];
$date=date("Y-m-d");
$time=date("H:i:s");
$pass_type=$_POST['pass_type'];
$pass_dur=$_POST['pass_dur'];


$selectquery= "select* from  student_details where student_id='$id'";
$query= mysqli_query($con,$selectquery);
$result=mysqli_fetch_assoc($query);

$from=$result['station'] ;
$to="Airoli";
$query=" insert into form_details values('$id','$from','$to','$pass_type','$pass_dur','$date','$time') ;";
$quer_run=mysqli_query($con,$query);

   ob_start();
	 ?> 
 

  
<center>
  <style>
    body{
    text-align: center;
  }
 

   
  }
  #dash{
    
   border-style: dashed;
   outline: none;
   border-top: 0px;
   border-left: 0px;
   border-right: 0px;
   width: 100px;
   padding: 0px;
  }
  
   
   </style>
<div id="container" style="border: 1px solid black;padding: 10px;">
      
        <div style="text-align: center;margin: 5px;width: 90%;">
     <span style=" font-weight: bold;"> DATTA MEGHE COLLEGE OF ENGINEERING, Airoli Navi Mumbai</span>
      <br>
      <span  style=" font-weight: bold;">CONCESSION CERTIFICATE</span>
      
      <p style=" ">(Form for the purpose of issue of rail concession to students to be used by the office-in charge of institute)</p>

    </div>

         
        
       

<div style="text-align: left;float: left; ">
    <span style="">The Station Master</span>
      <br>
       <span style="width: 420px;border-style: solid ;border-top: 0px; border-left: 0px; border-right: 0px;border-bottom: 2px;font-size: 15px;font-weight: bold;"><?php echo $result['station'] ;?></span>
      <br>
       <span style="width: 420px;border-style: solid ;border-top: 0px; border-left: 0px; border-right: 0px;border-bottom: 2px;font-size: 15px;color: gray;"></span>
    </div>
    
       <div style="text-align:left; margin: 6px;">
    <div style="display: block;padding: 2px;">
      <p style="padding: 3px;">This is to certify that Sri/Smt  <span style="width: 420px; ;border-top: 0px; border-left: 0px; border-right: 0px;border-bottom: 2px;font-size: 15px;color: black;font-weight: bold;border-style:solid;"><?php echo $result['lname']." ".$result['fname']." ".$result['faname'] ;?></span>
       Whose particulars are furnished below is a student of Datta Meghe College Of Engineering and is travelling from  <span style="width: 420px;border-top: 0px; border-left: 0px; border-right: 0px;border-bottom: 2px;font-size: 15px;color: black;font-weight: bold;border-style:solid;"><?php echo $result['station'] ;?></span>(Station) 
       to  <span style="width: 420px;border-top: 0px; border-left: 0px; border-right: 0px;border-bottom: 2px;font-size: 15px;font-weight: bold;border-style:solid;">Airoli</span>(Station).Please issue pass at concessional rates applicable to the following student of my Institution proceeding from their Institution/Home/Examination Center/Training Center/ in India to their Institution//Home/Examination Center/Training Center.</p>
    </div>
<br>



<div>
        <span style="">Particulars of the student</span>
        <br>
        <br>
        <div style="display: flex;">
        <span style=" margin-right: 15px;">(a)Age   <span style="width: 420px;border-style: solid ;border-top: 0px; border-left: 0px; border-right: 0px;border-bottom: 2px;font-size: 15px;font-weight: bold;"><?php echo $result['age'] ;?></span></span>

        <span style="">(b)Gender   <span style="width: 420px;border-style:solid ;border-top: 0px; border-left: 0px; border-right: 0px;border-bottom: 2px;font-size: 15px;font-weight: bold;"><?php echo $result['gender'] ;?></span></span>
        </div>
        
      </div>
      <br>
      <div style="margin-left: 500px; direction: flex; text-align: center;margin-top: 80px;">
         <span style="width: 420px;border-style: solid ;border-top: 0px; border-left: 0px; border-right: 0px;border-bottom: 2px;font-size: 15px;color: black;font-weight: bold;"><?php echo $result['fname']." ".$result['lname'] ;?></span>
        <br>
        <span style="">Signature of Student</span>
      </div>
       <br>
      <div >
      <div style="float: left;direction: flex; text-align:left;margin-top: -100px;">
        <span style="">Station:</span>
        <span style="display: block; width: 420px;border-style: solid ;border-top: 0px; border-left: 0px; border-right: 0px;border-bottom: 1px;font-size: 15px;color: black;font-weight: bold;"><?php echo $result['station'] ;?></span>
        <br>
        <span style="">Class:</span>
        <span style="width: 420px;border-style: solid ;border-top: 0px; border-left: 0px; border-right: 0px;border-bottom: 2px;font-size: 15px;font-weight: bold;"><?php echo $pass_type ;?></span>
        <br>
        <span style="">Duration:</span>
       <span style="width: 420px;border-style: solid ;border-top: 0px; border-left: 0px; border-right: 0px;border-bottom: 2px;font-size: 15px;font-weight: bold;"><?php echo $pass_dur ;?></span>
        <br>
        <span style="">Date:</span>
         <span style="width: 420px;border-style: solid ;border-top: 0px; border-left: 0px; border-right: 0px;border-bottom: 2px;font-size: 15px;font-weight: bold;"><?php echo $date ;?></span>
       
        
      </div>
       <div style="float: right;text-align: center;margin-left: 300px;margin-top: -50px;">
        <div style="height: 120px; width: 120px;text-align: center;margin-left: 20px;margin-bottom: -30px;" >
             <img src="stamp.png">
        </div>
        <br>
        <p style=" width: 150px;">Signature/Stamp of office-in-charge of the Institute</p>
      </div>
      </div>
     
    </div>
     
      <div style="border:  1px solid  black;text-align: left;padding: 9px;border: 2px solid black; border-left: 0px; border-right: 0px;border-bottom: 0px;">
        <span  style="font-weight: bold;">Note:</span>
        <br>
        <span style="">1.This certificate is valid for three days from the date of issue.</span>
        <br>
        <span style="margin-left: 35px;">2.No Alteration in the form is permitted unless affected by the issuing officer.</span>
        <br>
        <span style=" margin-left: 32px;margin-top: 0px;">3.Certificate should be issued for students only for travelling from and to stations serving his place of residence to and from the stations serving the institute.</span>
      
      </div>
 </div>
</center>





 <?php



$body=ob_get_clean();
$mpdf=new \Mpdf\Mpdf([
  'default_font_size'=> 12,
   'default_font' => 'sarabun'

]);
$mpdf->WriteHtml($body);
$file=time().'.pdf';
$mpdf->output($file,'D');


?>


</body> 
</html>
