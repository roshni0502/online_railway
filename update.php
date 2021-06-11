<!DOCTYPE html>
<html>
<head>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 
    <link rel="stylesheet" type="text/css" href="update.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    
    <title>bootstrap5</title>
	
</head>
<body>



<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#update" style="background: black; color:white; ">
 Add
</button>

<!-- Modal -->
<center>

<div class="modal fade" id="update" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="width: 700px; ">

      <div class="modal-header" >
        <h5   style="text-align: center; margin-left: 230px;">Update student details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: white;"></button>
      </div>
      <div class="modal-body" >
      
       <form class="form-u" id="form-u">
          <div style="font-size: 20px;">
          <label>
          Student-Id:
        </label>
       
       <span style="  margin:6px; padding: 5px; font-size: 20px; color: red; font-style: italic;">201957809776</span>
      
          <br>
       <br>
         </div>

          <div>
       <label>
          Home-Station:
        </label>
       
        <select data-live-search="true" class="select w-100" name="des1" id="des1" required>

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
         </div>
        
       	<div class="form-control-1">
       <label>
       		Age:
       	</label>
       	<br>
       	<input type="text" name=""  maxlength="2" id="age" onkeyup="validateu();">
       	<i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small style="margin-bottom :50px; margin-left: 8px;"></small>
       		<br>
       <br>
         </div>

       	<div class="form-control-1">
       		<label>
       		Branch:
       	</label>
       	<br>
       
          <select name="branch" id="branch"  style="width: 585px; height:40px;margin: 10px; border: 1px solid gray;text-align: left;" onkeyup="validateu();">
         <option selected disabled value="" style="color:black;"><----------------------------------select here------------------------------------></option>
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
  <small style="margin-bottom :50px; margin-left: 8px;"></small>
       		<br>
       <br>
         </div>
       	<div class="form-control-1"> 
       	<label>
       		Year:
       	</label><br>
       	 <select name="year" id="year"  style="width: 585px; height:40px;margin: 10px; border: 1px solid gray;text-align: left;" onkeyup="validateu();">
         <option selected disabled value="" style="color:black;"><----------------------------------select here------------------------------------></option>
          <option value="F.E">F.E</option>
          <option value="S.E">S.E</option>
           <option value="T.E">T.E</option>
            <option value="B.E">B.E</option>
           
        </select>
       	<i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small style="margin-bottom :50px; margin-left: 8px;"></small>
       		<br>
       <br>
         </div>
       
       	<div class="form-control-1">
         <label>
           Email-ID:
        </label>
        <br>
        <input type="text" name="" id="email"  maxlength="30" onkeyup="validateu();">
        <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small style="margin-bottom :50px; margin-left: 8px;">
    
  </small>
          <br>
       <br>
         </div>
       

       	<div class="form-control-1">
       	 <label>
       		Contact No:
       	</label>
       	<br>
       	<input type="text" name="" id="number"  maxlength="10" onkeyup="validateu();">
       	<i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small style="margin-bottom :50px; margin-left: 8px;"></small>
       		<br>
       <br>
         </div>
       </div>
      <center>
      <div  style="border-top: 1px solid gray; height:90px; padding: 20px; ">
       
       
       
        <button  id="baddd" type="submit" >Update</button>
        
     
      </div>
      </center>
    </div>
       </form>
      
      

  </div>
</div>
</center>




<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="update.js"></script>


<script type="text/javascript">
  $('.select').selectpicker();
</script>



</body>
</html>