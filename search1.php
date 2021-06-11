<?php
session_start();
if(!isset($_SESSION['code']))
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
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    
</script> 

    <link rel="stylesheet" type="text/css" href="add.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <title>bootstrap5</title>
    
</head>
<body>
<center>
<style type="text/css">
  .Center{
    top:0%;
    transform:translateX(-35%) !important;
}
</style>

<div class="modal fade" id="view" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

  <div class="modal-dialog Center ">

    <div class="modal-content" style="width: 860px; ">
       <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">student details</h5>
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
   <div class="container-fluid"  >
     <div class="row">
       
        <div class="col-sm-2 border-top border-bottom border-start border-end border-black    rounded  text-center p-4    fs-5  "style=";color: ; position: fixed;">

         <div class="   text-center  fs-5  "style="color: black; padding: 15px; width: 253px; text-align: center;background: #282828;margin-left: -23px; height: 158px; margin-top: -30px;margin-bottom: -14px;">
          <i class="fas fa-user" style="font-size: 70px; border: 1px solid black; border-radius:50%; padding: 25px; background: white;margin-bottom: 10px;"></i>

         </div>
          <style type="text/css">
    .list-group-item-action{
      background: black;
    }

    .list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: white;
  text-decoration: none;
  background-color:#00c853;
  
}
  </style>

    <ul style="font-size: 14px;width: 283px;margin-left: -38px; text-align: left; padding: 15px;">

  <a href="admin_logout.php" class="list-group-item list-group-item-action  text-light" style="border-bottom: 1px solid white;"><i class="fas fa-sign-out-alt" style="margin: 8px; font-size: 20px;"></i>Log Out</a>
  <a href="homepage.php" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;"><i class="fas fa-home" style="margin: 8px; font-size: 20px;"></i>Home</a>
  <a href="admindashboard.php" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;"><i class="fas fa-bars" style="margin: 8px; font-size: 20px;"></i>DashBoard</a>
  <a href="search1.php" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;"><i class="fas fa-pen" style="margin: 8px; font-size: 20px;"></i>Update Student Information</a>
  <a href="viewstudentdetails.php" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;"><i class="fas fa-info-circle" style="margin: 11px; font-size: 21px;"></i>See Student Details</a>
  <a href="previouspass.php" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;"><i class="fas fa-user" style="margin: 9px; font-size: 20px;"></i>Student Previous form Details</a>
  <a href="branchstat.php" class="list-group-item list-group-item-action text-light" style="border-bottom: 1px solid white;"><i class="fas fa-chart-bar" style="margin: 8px; font-size: 20px;"></i>Student Statstic Branch Wise</a>
  <a href="request.php" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;" ><i class="fas fa-envelope" style="margin: 8px; font-size: 20px;"></i>Requests</a>
  <a href="adminlogin.php" class="list-group-item list-group-item-action text-light"style="border-bottom: 1px solid white;"><i class="fas fa-sign-in-alt" style="margin: 8px; font-size: 20px;"></i>Back to Login</a>
   <div class="col-sm-2" style="height: 40px; background: black; width: 253px; height: 95px;">
  <div>
  </ul>
  
    
 
  
</div>
  <style type="text/css">
.other-control.success input[type=text]{
  border-color:#2ecc71;
}
.other-control.error input{
  border-color:#e74c3c;
}
.other-control.error  input:focus{
  outline: 0;
  box-shadow: 0px 0px  8px  0px #e74c3c;
}
.other-control.error  input[type=file]:focus{
  outline: 0;
 
}
.other-control.success input:focus{
  outline: 0;
  box-shadow: 0px 0px  8px  0px #2ecc71;
}

 

</style>

<div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modalCenter">
    <div class="modal-content" style="width: 700px; ">

      <div class="modal-header" style="background: green; color: white;text-align: center;">
        <h5   style="text-align: center;">Add student details</h5>
        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: white;"></button>
      </div>
      <div class="modal-body" >
      <form id="form" name="form" action="insertdetails.php" method="POST" enctype="multipart/form-data" onsubmit="return successmsg();">
      <div id="message">
        
      </div>
       <div style="display:flex;">
        <div class="other-control ">
        <label>
          First name:
        </label>
        <br>
        <input type="text" name="fname"  id="fname" onkeyup="validate();" style="width: 300px;" autocomplete="off">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small> </small>
          <br>
       <br>
       </div>
        <div class="other-control">
          <label>
          Last Name:
        </label>
        <br>
        <input type="text" name="lname"  id="laname" onkeyup="validate();" style="width: 300px;" autocomplete="off">
        <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small ></small>
        <br>
       <br>
       </div>
       </div>
        <div style="display:inline-flex;">
          <div class="other-control">
        <label>
          Mother's Name:
        </label>
        <br>
        <input type="text" name="mname"  id="mname" onkeyup="validate();" style="width: 300px;" autocomplete="off">
        <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small ></small>
          <br>
       <br>
         </div>
        <div class="other-control">
        <label>
          Father's Name:
        </label>
        <br>
        <input type="text" name="faname"  id="faname" onkeyup="validate();" style="width: 300px;" autocomplete="off">
        <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small ></small>
          <br>
       <br>
         </div>
           </div>
          
      <label style="margin-bottom: 10px;">
          Home-Station:
        </label>
       
        <select data-live-search="true" class="selectpicker w-100"   name="station" id="des"  onclick="validate();"  autocomplete="off">

         <option selected disabled value="" style="color:black;"><----------------------------------select station------------------------------------></option>
                     
                       <option  value="Dahisar">Dahisar</option>
                       <option  value="Bhayander">Bhayander</option>
                       <option  value="Nalgaon">Nalgaon</option>
                       <option  value="Vasai Road">Vasai Road</option>
                       <option  value="Virar">Virar</option>
                       <option  value="Masjid">Masjid</option>
                       <option  value="Sandhurst Road">Sandhurst Road</option>
                       <option  value="Byculla">Byculla</option>
                       <option  value="Chinchpokli">Chinchpokli</option>
                       <option  value="Currey Road">Currey Road</option>
                       <option  value="Parel">Parel</option>
                       <option  value="Dadar">Dadar</option> 
                       <option  value="Matunga">Matunga</option>
                       <option  value="Sion">Sion</option>
                       <option  value="Kurla">Kurla</option> 
                       <option  value="Vidyavihar">Vidyavihar</option>
                       <option  value="Ghatkopar">Ghatkopar</option> 
                       <option  value="Vikhroli">Vikhroli</option>
                       <option  value="Kanjur Marg">Kanjur Marg</option>
                       <option  value="Bhandup">Bhandup</option>
                       <option  value="Nahur">Nahur</option>
                       <option  value="Mulund">Mulund</option>
                       <option  value="Thane"> Thane</option>
                       <option  value="Kalva">Kalva</option>
                       <option  value="Mumbra">Mumbra</option>
                       <option  value="Diva">Diva</option>
                       <option  value="Kopar">Kopar</option>
                       <option  value="Dombivali">Dombivali</option> 
                       <option  value="Thakurli">Thakurli</option>
                       <option  value="Kalyan">Kalyan</option>
                       <option  value="Thane">Thane</option>
                       <option  value="Dighe">Dighe</option>
                      <option   value=" Airoli">Airoli</option>
                       <option  value="Rabale">Rabale</option>
                       <option  value="Ghansoli">Ghansoli</option>
                       <option  value="Kopar Khairane">Kopar Khairane</option>
                       <option  value="Tourbhe">Tourbhe</option>
                       <option  value="Sanpada">Sanpada</option>
                       <option  value="Vashi">Vashi</option>
                       <option  value="CST">CST</option>
                       <option  value="Masjid">Masjid</option>
                       <option  value="Sandhurt Road">Sandhurt Road</option>
                      <option   value=" Docyard Road">Docyard Road</option>
                       <option  value="Reay Road">Reay Road</option>
                       <option  value="Cotton Green">Cotton Green</option>
                       <option  value="Vadala Road">Vadala Road</option>
                       <option  value="King Circle">King Circle</option>
                       <option  value="Mahim">Mahim</option>
                       <option  value="Bandra">Bandra</option>
                      <option   value="Khar Road">Khar Road</option>
                       <option  value="Santacruz">Santacruz</option>
                       <option  value="Vile Parle">Vile Parle</option>
                       <option  value="Andheri">Andheri</option>
                       <option  value="Guru Tegh Bahadur Nagar">Guru Tegh Bahadur Nagar</option>
                       <option  value="Chunabhatti">Chunabhatti</option>
                       <option  value="Kurla Junction">Kurla Junction</option>
                       <option  value="Tilaknagar">Tilaknagar</option>
                       <option  value="Chembur">Chembur</option>
                       <option  value="Govandi">Govandi</option>
                       <option  value="Vashi">Vashi</option>
                       <option  value="Sanpada">Sanpada</option>
                       <option  value="Juinagar">Juinagar</option>
                       <option  value="Nerul">Nerul</option>
                       <option  value="Seawoods – Darave">Seawoods – Darave</option>
                       <option  value="Belapur CBD">Belapur CBD</option>
                       <option  value="Kharghar">Kharghar</option>
                       <option  value="Mansarovar">Mansarovar</option>
                       <option  value="Khandeshwar">Khandeshwar</option>
                       <option  value="Panvel Junction">Panvel Junction</option>
                       <option  value="Vithalwadi">Vithalwadi </option>    
                        <option  value="Nala Sopara">Nala Sopara </option>
                        <option  value="Ambivalli">Ambivalli</option>
                       <option   value="Ulhasnagar">Ulhasnagar</option>
                        <option  value="Virar">Virar</option>
                      <option    value="Titwala">Titwala</option>
                        <option  value="Ambernath">Ambernath</option>    
                        <option  value="valtarna">valtarna</option>  
                      <option  value="Khadavli">Khadavli</option>
                        <option  value="Badlapur">Badlapur</option>    
                       <option  value="Saphale">Saphale</option> 
                        <option  value="Vasind">Vasind</option>
                        <option  value="Vangani">Vangani</option>     
                       <option  value="Kelve Road">Kelve Road</option>
                      <option  value="Asangaon">Asangaon</option>
                        <option  value="Shelu">Shelu</option>     
                        <option  value="Palghar">Palghar</option> 
                       <option  value="Atgaon">Atgaon</option>
                        <option  value="Neral">Neral</option>     
                       <option  value="Umroli">Umroli</option>  
                       <option  value="Kardi">Kardi</option>
                        <option  value="Bhivpuri Rd">Bhivpuri Rd</option>    
                      <option  value= "Boisar">Boisar</option> 
                        <option  value="Kasara">Kasara</option>
                        <option  value="Karjat">Karjat</option>      
                      <option  value="Vangaon">Vangaon </option>
                       <option  value="Kelavalli">Kelavalli</option>
                      <option  value="Dahanu Road">Dahanu Road</option>
                       <option  value="Dolavalli">Dolavalli</option>
                         <option  value="Khopoli">Khopoli</option>
          
        </select>
   
          <br>
       <br>
       
         <div style="display:flex;">

         <div class="other-control">
          <label>
          Date Of Birth:
        </label>
        <br>
           <select name="day" id="day"  style="width: 195px; height:40px;margin: 10px 10px 10px 0px; border: 1px solid gray;text-align: center;border-radius: 3px;"onclick="validate();" autocomplete="off">
         <option selected disabled value="" style="color:black;"><------select day-----></option>
          <option value="01"onkeyup="validate();">01</option>
          <option value="02"onkeyup="validate();">02</option>
           <option value="03"onkeyup="validate();">03</option>
            <option value="04"onkeyup="validate();">04</option>
          <option value="05"onkeyup="validate();">05</option>
           <option value="06"onkeyup="validate();">06</option>
            <option value="07"onkeyup="validate();">07</option>
          <option value="08"onkeyup="validate();">08</option>
           <option value="09"onkeyup="validate();">09</option>
            <option value="10"onkeyup="validate();">10</option>
          <option value="11"onkeyup="validate();">11</option>
           <option value="12"onkeyup="validate();">12</option>
            <option value="13"onkeyup="validate();">13</option>
          <option value="14"onkeyup="validate();">14</option>
           <option value="15"onkeyup="validate();">15</option>
            <option value="16"onkeyup="validate();">16</option>
          <option value="17"onkeyup="validate();">17</option>
           <option value="18"onkeyup="validate();">18</option>
            <option value="19"onkeyup="validate();">19</option>
          <option value="20"onkeyup="validate();">20</option>
           <option value="21"onkeyup="validate();">21</option>
            <option value="22"onkeyup="validate();">22</option>
          <option value="23"onkeyup="validate();">23</option>
           <option value="24"onkeyup="validate();">24</option>
              <option value="25"onkeyup="validate();">25</option>
          <option value="26"onkeyup="validate();">26</option>
           <option value="27"onkeyup="validate();">27</option>
            <option value="28"onkeyup="validate();">28</option>
          <option value="29"onkeyup="validate();">29</option>
           <option value="30"onkeyup="validate();">30</option>
            <option value="31"onkeyup="validate();">31</option>
         
           
           
        </select>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small ></small>
          <br>
       <br>
         </div>
           <div class="other-control">
         
        <br>
           <select name="month" id="month"  style="width: 195px; height:40px;margin: 10px 10px 10px 0px; border: 1px solid gray;text-align: center;border-radius: 3px;" onclick="validate();" autocomplete="off">
         <option selected disabled value="" style="color:black;"><------select month-----></option>
          <option value="01"onkeyup="validate();">01</option>
          <option value="02"onkeyup="validate();">02</option>
           <option value="03"onkeyup="validate();">03</option>
            <option value="04"onkeyup="validate();">04</option>
          <option value="05"onkeyup="validate();">05</option>
           <option value="06"onkeyup="validate();">06</option>
            <option value="07"onkeyup="validate();">07</option>
          <option value="08"onkeyup="validate();">08</option>
           <option value="09"onkeyup="validate();">09</option>
            <option value="10"onkeyup="validate();">10</option>
          <option value="11"onkeyup="validate();">11</option>
           <option value="12"onkeyup="validate();">12</option>
            
         
           
           
        </select>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small></small>
          <br>
       <br>
         </div>
          
          
          <div class="other-control">
          
        <br>
           <select name="byear" id="byear"  style="width: 195px; height:40px;margin: 10px 10px 10px 0px; border: 1px solid gray;text-align: center;border-radius: 3px;" onclick="validate();" autocomplete="off"   >
         <option selected disabled value="" style="color:black;"><------select year-----></option>
          <option value="1990"onkeyup="validate();">1990</option>
          <option value="1991"onkeyup="validate();">1991</option>
           <option value="1992"onkeyup="validate();">1992</option>
            <option value="1993"onkeyup="validate();">1993</option>
          <option value="1994"onkeyup="validate();">1994</option>
           <option value="1995"onkeyup="validate();">1995</option>
            <option value="1996"onkeyup="validate();">1996</option>
          <option value="1997"onkeyup="validate();">1997</option>
           <option value="1998"onkeyup="validate();">1998</option>
            <option value="1999"onkeyup="validate();">1999</option>
          <option value="2000"onkeyup="validate();">2000</option>
           <option value="2001"onkeyup="validate();">2001</option>
           <option value="2002"onkeyup="validate();">2002</option>
           <option value="2003"onkeyup="validate();">2003</option>
            <option value="2004"onkeyup="validate();">2004</option>
          <option value="2005"onkeyup="validate();">2005</option>
           <option value="2006"onkeyup="validate();">2006</option>
            <option value="2007"onkeyup="validate();">2007</option>
          <option value="2008"onkeyup="validate();">2008</option>
           <option value="2009"onkeyup="validate();">2009</option>
            <option value="2010"onkeyup="validate();">2010</option>
            
         
             
        </select>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small></small>
          <br>
       <br>
         </div>
          </div>
         <div style="display:flex;">
        <div class="other-control">
       <label>
          Age:
        </label>
        <br>
       
         
        <input type="text" name="age"  maxlength="2" id="age" onchange="validate();" style="width: 300px;" autocomplete="off" value=" ">
         
        <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small ></small>
          <br>
       <br>
         </div>

        <div class="other-control">
          <label>
          Gender:
        </label>
        <br>
           <select name="gender" id="gender"  style="width: 300px; height:40px;margin: 10px 10px 10px 0px; border: 1px solid gray;text-align: left;border-radius: 3px;" onclick="validate();" autocomplete="off">
         <option selected disabled value="" style="color:black;"><---------------select here---------------></option>
          <option value="M">M</option>
          <option value="F">F</option>
           <option value="Other">Other</option>
           
           
        </select>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small ></small>
          <br>
       <br>
         </div>
          </div>
        <div class="other-control">
          <label>
          Student-Id:
        </label>
        <br>
       <input type="text" name="student_id" id="id"  style="width: 610px;" autocomplete="off" onkeyup="validate();">
        <i class="fas fa-check-circle"  style="right: -10px;"></i>
        <i class="fas fa-exclamation-circle" style="right: -10px;"></i>
  <small></small>
          <br>
       
         </div>
       <div style="display:flex;">
        <div class="other-control">
          <label>
          Branch:
        </label>
        <br>
       
          <select name="branch" id="branch"  style="width: 300px; height:40px;margin: 10px 10px 10px 0px; border: 1px solid gray;text-align: left;border-radius: 3px;" onclick="validate();" autocomplete="off">
         <option selected disabled value="" style="color:black;"><---------------select here-----------></option>
          <option value="Computer">Computer</option>
          <option value="Information Technology">Information Technology</option>
           <option value="Mechanical"onkeyup="validate();">Mechancial</option>
            <option value="Electronics"onkeyup="validate();">Electronics</option>
             <option value="Civil"onkeyup="validate();">Civil</option>
              <option value="Electronics and TeleCommunication"onkeyup="validate();">Electronics and TeleCommunication</option>
           <option value="Chemical"onkeyup="validate();">Chemical</option>
           
              
        </select>
        <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small ></small>
          <br>
       <br>
         </div>

        <div class="other-control"> 
        <label>
          Year:
        </label><br>
       <select name="year" id="year"  style="width: 300px; height:40px;margin: 10px 10px 10px 0px; border: 1px solid gray;text-align: left;border-radius: 3px;" onclick="validate();" autocomplete="off">
         <option selected disabled value="" style="color:black;"><---------------select here-----------></option>
          <option value="F.E"onkeyup="validate();">F.E</option>
          <option value="S.E"onkeyup="validate();">S.E</option>
           <option value="T.E"onkeyup="validate();">T.E</option>
            <option value="B.E"onkeyup="validate();">B.E</option>
           
        </select>
        <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small ></small>
          <br>
       <br>
         </div>
         </div>
        <div class="other-control">
       <label>
          Year of joining:
        </label>
        <br>
        <select name="yoj" id="yoj"  style="width: 610px; height:40px; border: 1px solid gray;margin: 10px 10px 10px 0px;text-align: left;border-radius: 3px;" onclick="validate();" autocomplete="off">
         <option selected disabled value="" style="color:black;"><----------------------------------select here------------------------------------></option>
           <option value="2017-2018"onkeyup="validate();">2017-2018</option>
          <option value="2018-2019"onkeyup="validate();">2018-2019</option>
           <option value="2019-2020"onkeyup="validate();">2019-2020</option>
            <option value="2020-2021"onkeyup="validate();">2020-2021</option>
        </select>

   <i class="fas fa-check-circle" style="right: -10px;"></i>   
  <i class="fas fa-exclamation-circle" style="right: -10px;"></i>
  <small ></small>
          <br>
       <br>
         </div>
        <div style="display:flex;">
        <div class="other-control ">
         <label>
           Email-ID:
        </label>
        <br>
        <input type="text" name="email" id="email"  maxlength="30" onkeyup="validate();" style="width: 400px;" autocomplete="off">
        <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small ></small>
          <br>
       <br>
         </div>
       

        <div class="other-control ">
         <label>
          Contact No:
        </label>
        <br>
        <input type="text" name="number" id="number"  maxlength="10" onkeyup="validate();" style="width: 200px;" autocomplete="off">
        <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small ></small>
          <br>
       <br>
         </div>
       </div>

       <div class="other-control ">
         <label>
          Photo
        </label>
        <br>
        <input  id="photo" type="file" name="file" style="border: 0px; width: 610px; " onchange="validate();" onkeyup="validate();" autocomplete="off">
        <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small ></small>
          <br>
       <br>
         </div>
      <center>

      <div  style=" height:90px; padding: 20px; display: flex;">
       
        <button id="badd" type="submit" name="submit" >Add Student</button>
        
      </div>
      </center>
    </div>
     </div>
       </form>
    

      
      

  </div>
</div>
</center>






        
       
       <div class="col-sm-10" style=" margin-left: 255px;position: fixed;">

            <div class="row" style="margin-bottom: 20px;">

             <div class="col-sm-12  border-top border-bottom border-start border-end" style=" padding-top:10px;  margin-top: 5px; margin-bottom: 5px; color: black;font-weight: bold; height:60px; background: #f1f8e9; border-radius: 5px 0px 0px 5px;">
             <p style="text-align: center;">
              WELCOME TO DATTA MEGHE COLLEGE OF ENGINEERING 

              </p>
              <div style="outline: none; background: dodgerblue; border: 1px solid dodgerblue;border-radius: 4px;color: white;height: 30px; width: 120px; text-align: center;float: right; margin-top: -40px;">Admin Panel</div>
            </div>
            <div class="col-sm-12  border-top border-bottom border-start border-end">
              <div class="container-fluid">

     <div class="row">
       
<style type="text/css">
            
.message{
width:550px;
 margin-left: 50px;
box-shadow: 0px 0px 4px 0px lightblue;
 border: 0px solid black;
border-radius: 5px;

}

.hide{
visibility: hidden;
  }

</style>
         <div class="col-lg-12 border-top border-bottom border-start border-white   rounded  text-center  fs-6  "style="background-color: ;color: black; height:670px;margin-top: 10px; ">
         <div id="mess"  class="hide" style="background:lightblue;">
          
        </div> 

         <center>

        <button type="reset"  data-bs-toggle="modal" data-bs-target="#add" style="background: green;color:white; width: 120px;margin-left: 1000px; margin-top: 0px;  height: 35px; border: 1px solid green; border-radius:6px; outline: none;font-size: 14px;" >
<b>+</b> Add Student</button>

        <div class="input-group mb-3" style="width: 1120px; margin: 10px;">
  <span class="input-group-text" id="basic-addon1" style="width: 60px; height: 40px;background: #009879;"><i class="fas fa-search" style="font-size: 25px; color: white; background: #009879;"></i></span>
  <input type="text" class="form-control" placeholder="Search Student By ID" aria-label="Username" aria-describedby="basic-addon1" id="myinput" onkeyup="searchfun();" style="font-style: italic;">
     </div>
      <style type="text/css">
        #mytable th{
  padding: 5px;
  background: #009879;
  
  color: white;
  border-width: 1px;
  

}
#caption{
  text-align: center;
  border: 1px solid black;
}
#mytable td{
  padding: 10px;
  border-bottom: 1px solid gray;
   font-style: italic;
  border-color: white; 

}
#mytable th{
font-family: cursive;
}


#mytable table{
  text-align: center;
  
  
  padding: 20px;
  width: 1390px;
  border-collapse: collapse;
  background: white;
  border-radius: 4px 4px 0px 0px;
  overflow: hidden;
  box-shadow: 0px 0px 20px rgba(0,0,0,0.15) ;
  font-weight: bold;
 
}
#mytable tr:nth-of-type(odd){
  background: #f3f3f3;
    color:#009879 ;
    font-weight: bold;
}
#mytable tr button:nth-of-type(odd){
  background: #f3f3f3;
    color:#009879 ;
    font-weight: bold;
}
#mytable tbody tr{
  border-bottom: 1px solid #dddddd;
}
#mytable tbody tr:last-of-type{
  border-bottom: 2px solid #009879;
}


   
  .table-fixed1 table th{
    
    position: sticky;
    
   top: 0;
  }
  
  .table-fixed1 {
  
   height: 520px;
   overflow-y: auto;
   display: inline-block;
   
  }
  
      </style>
         
          <div id="message"></div>
         <div class="table-fixed1">
          <table id="mytable" style="text-align: center; width: 1100px;" class=" table table-hover">
           <thead>
          <th>
            Sr.no 
          </th>
          <th>
            Student-ID
          </th>
          <th>
            Branch
          </th>
            <th>
           Name Of the Student
          </th>
          <th>
           View Student Details
          </th>
         
          <th style="width: 200px;">
          Operations 
          </th>
          </thead>
         
        
          <tbody id="display">
          </tbody>
          
           
                </table>

      </div>
            
      
        </center>
         </div> 

</div>
</div>


              
            </div>
      
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="add.js"></script>



  
  


</script>
<script type="text/javascript">

  load_data();
  function  load_data(){
    var action="Load";


      $.ajax({
        url:'display.php',
        type:'post',
        data:{'action':action
             },

        success :function(response){
         $('#display').html(response);
       

        
         
        }                                                            

       });
     

  }

</script>

</body>
</html>



          




    



