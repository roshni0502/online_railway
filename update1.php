<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="update1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

    <title>bootstrap5</title>
    
</head>
<body>

	 <div class="container-fluid" style="height: ">
 	   <div class="row">
 	   	 
 	     <div class="col-sm-2 border-top border-bottom border-start border-end border-black    rounded  text-center p-4    fs-5  "style=";color: ; position: fixed;">
       <div class="   text-center  fs-5  "style="color: black; padding: 15px; width: 253px; text-align: center;margin-left: -23px; height: 158px; margin-top: -30px;margin-bottom: -14px; background: black;">
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
  background-color:#00c853;
  
}
  </style>

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

         </div>
         
 	     
 	     <div class="col-sm-10" style="margin-left:255px;">

            <div class="row" style="margin-bottom: 20px;">

             <div class="col-sm-10 " style=" padding-top:10px;  margin-top: 5px; margin-bottom: 5px; color: black;font-weight: bold; height:60px; background: #f1f8e9; border-radius: 5px 5px 5px 5px; position: fixed;">
             <p style="text-align: center;">
              WELCOME TO DATTA MEGHE COLLEGE OF ENGINEERING 

              </p>
              <div style="outline: none; background: dodgerblue; border: 1px solid dodgerblue;border-radius: 4px;color: white;height: 30px; width: 120px; text-align: center;float: right; margin-top: -40px;padding: px;">Admin Panel</div>
            </div>
     </div>
    <center>
    <div class="col-sm-10  border-top border-bottom border-start border-end" style="border: 1px solid black;margin-top: 90px;" >
      <div class="modal-header" style="background: dodgerblue; color: white;text-align: center;">
        <h5   style="text-align: center;">Update student details</h5>
        
      </div>
      <form  class="form-fixed" id="form">
       
<style type="text/css">
            
.message{

width:550px;
margin-bottom: 10px;
box-shadow: 0px 0px 4px 0px lightgreen;
 border: 0px solid black;
border-radius: 5px;

}

.hide{
visibility: hidden;
  }


.bootstrap-select .dropdown-toggle {
  width: 700px;
}

    
</style>

 <div  id="mess" class="hide" style="background:lightgreen;">
         
        </div> 
<?php

        include 'connect.php';
        $id=$_GET['s_id'];
        $selectquery= "select* from student_details where student_id='$id'";
        $query= mysqli_query($con,$selectquery);
        $result=mysqli_fetch_assoc($query)

 ?>
        <div style="display: flex;">

        <div style="font-size: 20px;">
          <label>
          Student-Id:
        </label>
       
       <span  id="id" style=" margin:3px;  font-size: 20px; color: red; font-style: italic;"><?php echo $result['student_id'];?></span>
      
          <br>
       <br>
         </div>
        
        
         
      
         
        
        <div style="margin-left: auto;width: 130px;height: 130px; ">
         <img style="width: 120px;height: 120px;" src=" documents_upload/<?php echo $result['photo']; ?>"> 
        </div>
       

         </div>

         
       <label style="margin-bottom: 10px;">
          Home-Station:
        </label>
        <br>
        <select name="station" data-live-search="true" class="selectpicker"  id="des">
-
         <option value="<?php echo $result['station'];?>" style="color:black;"><?php echo $result['station'];?></option>
                     
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
      <div style="display: flex;">
        <div class="other-control">


          <label>
          Branch:
        </label>
        <br>
       
          <select name="branch" id="branch"  onclick="validate();">
         <option  value= "<?php echo $result['branch'];?>" style="color:black;"><?php echo $result['branch'];?></option>
          <option value="Computer">Computer</option>
          <option value="Information Technology">Information Technology</option>
           <option value="Mechanical">Mechancial</option>
            <option value="Electronics">Electronics</option>
             <option value="Civil">Civil</option>
              <option value="Electronics and TeleCommunication">Electronics and TeleCommunication</option>
           <option value="Chemical">Chemical</option>
           
              
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
         <select  name="year" id="year" onclick="validate();">
         <option value="<?php echo $result['year'];?>" style="color:black;"><?php echo $result['year'];?></option>
          <option value="F.E">F.E</option>
          <option value="S.E">S.E</option>
           <option value="T.E">T.E</option>
            <option value="B.E">B.E</option>
           
        </select>
        <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small ></small>
          <br>
       <br>
         </div>
       </div>

      
       
       <div style="display: flex;">
        <div class="other-control">
         <label>
           Email-ID:
        </label>
        <br>
        <input type="text" name="email" id="email" autocomplete="off"  onkeyup="validate();" value="<?php echo $result['email'];?>">
        <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small>
    
  </small>
          <br>
       <br>
         </div>
       

        <div class="other-control">
         <label>
          Contact No:
        </label>
        <br>
        <input type="text" name="number" value="<?php echo $result['number'];?>" id="number" autocomplete="off"  maxlength="10" onkeyup="validate();">
        <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small></small>
          <br>
       <br>
         </div>
       </div>
       
      
        <button  id="baddd" type="submit" name="update" style="background: black;">Update</button>
        
     
       </div>


      </form>
  <?php
       
        ?>
    </div>
     </center>
    </div>

  

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="update.js"></script>


</body>

</html>
