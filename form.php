<html>
<head>
  <link href="concessionform.css" rel="stylesheet"  type="text/css">
</head>
<body>
<style type="text/css">
  body{
    text-align: center;
  }
  form{
    margin-left: auto;
    margin-right: auto;
    text-align:left;
    display: inline-block;
    justify-content: center;
    border: 1px solid black;
    padding: 10px;
    width: 500px;
  }
  input{
    
   border-style: dashed;
   outline: none;
   border-top: 0px;
   border-left: 0px;
   border-right: 0px;
   width: 100px;
   padding: 0px;
  }
  
   
  
</style>





<center>
 <form action="form.php"   method="POST">
     Email:
     <input type="text"  name="email"></input>
     <button  type="submit" name="submit">Submit</button>
</form>
</center>




<?php


include 'connection.php';
require('vendor/autoload.php');

if(isset($_POST['submit'])){
  
  
$email=$_POST['email'];


 $queryrows="SELECT * FROM form WHERE  email= '$email' ";
  $quer_run=mysqli_query($con,$queryrows);
  
  if(mysqli_num_rows($quer_run)>0)
  {
  
   $row= mysqli_fetch_array($quer_run);
   
   ob_start();
   ?> 
 
   <center>
 <form >
 
  <div  style=" margin: 5px; border: 2px solid black; border-top: 0px;border-left: 0px;border-right: 0px;">
    <div style=" width: 70px; height: 70px;margin: 5px;margin-top: 15px;">
       <img src="DMCE_Logo.jpg">
    </div>
 
    <div style="text-align: center;margin: 5px;width: 90%;">
     <span style=" font-size: 13px;font-weight: bold;"> DATTA MEGHE COLLEGE OF ENGINEERING, Airoli Navi Mumbai</span>
      <br>
      <span  style=" font-size: 13px;font-weight: bold;">CONCESSION CERTIFICATE</span>
      
      <p style=" font-size: 12px;">(Form for the purpose of issue of rail concession to students to be used by the office-in charge of institute)</p>

    </div>


    
  </div>
    <div style="text-align: left;float: left;">
    <span style="font-size: 11px;">The Station Master</span>
      <br>
      <input >
      <br>
      <input>
    </div>
    <br>
    <br>
    <br>
       <div style="text-align:left; margin: 6px;">
    <div style="display: block;padding: 2px;">
      <p style="font-size: 12px;padding: 3px;">This is to certify that Sri/Smt <input style="width: 330px;">
       Whose particulars are furnished below is a student of Datta Meghe College Of Engineering and is travelling from <input style="width: 130px;" >(Station) 
       to <input style="width: 130px;" >(Station).Please issue pass at concessional rates applicable to the following student of my Institution proceeding from their Institution/Home/Examination Center/Training Center/ in India to their Institution//Home/Examination Center/Training Center.</p>
    </div>
    <br>
     
      <div>
        <span style="font-size: 12px;">Particulars of the student</span>
        <br>
        <br>
        <div style="display: flex;">
        <span style="font-size: 11px; margin-right: 15px;">(a)Age  <input style="width: 180px;"></span>

        <span style="font-size: 11px;">(b)Gender  <input  style="width: 180px;"></span>
        </div>
        
      </div>
      <br>
      <div style="float: right;direction: flex; text-align: center;margin-top: 20px;">
        <input style="width: 120px;">
        <br>
        <span style="font-size: 11px;">Signature of Student</span>
      </div>
       <br>
      <div >
      <div style="float: left;direction: flex; text-align:left;">
        <span style="font-size: 11px;">Station:</span>
        <input style="width: 120px;">
        <br>
        <span style="font-size: 11px;">Class:</span>
        <input style="width: 120px;">
        <br>
        <span style="font-size: 11px;">Duration:</span>
        <input style="width: 120px;">
        <br>
        <span style="font-size: 11px;">Date:</span>
        <input style="width: 130px;">
        <br>
        
      </div>
       <div style="float: right;text-align: center; ">
        <div style="height: 90px; width: 90px;text-align: center;margin-left: 10px;margin-bottom: -10px;" >
             <img src="stamp3.png"> 
        </div>
        <br>
        <p style="font-size: 11px; width: 150px;">Signature/Stamp of office-in-charge of the Institute</p>
      </div>
      </div>
     
    </div>
     
      <div style="margin-top: 150px;border:  1px solid  black;text-align: left;padding: 9px;border: 2px solid black; border-left: 0px; border-right: 0px;border-bottom: 0px;">
        <span  style="font-size: 12px;font-weight: bold;">Note:</span>
        <span style="font-size: 11px;">1.This certificate is valid for three days from the date of issue.</span>
        <br>
        <span style="font-size: 11px; margin-left: 32px;">2.No Alteration in the form is permitted unless affected by the issuing officer.</span>
        <p style="font-size: 11px; margin-left: 32px;margin-top: 0px;">3.Certificate should be issued for students only for travelling from and to stations serving his place of residence to and from the stations serving the institute.</p>
        <br>
      </div>
 </form>
 </center>


 <?php
$body=ob_get_clean();
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHtml($body);
$file=time().'.pdf';
$mpdf->output($file,'D');





} else
{
   ?> 
  <script>
     alert('email not sent');
   </script> 
  <?php
 }
}




?>


</body> 
</html>
