<!DOCTYPE html>
<html>
<head>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="add.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    
    <title>bootstrap5</title>
	
</head>
<body>


<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#add" style="background: green;color:white; ">
 Add
</button>


<center>

<div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="width: 700px; ">

      <div class="modal-header" style="background: green; color: white;text-align: center;">
        <h5   style="text-align: center;">Add student details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: white;"></button>
      </div>
      <div class="modal-body" >
      
       <form class="form" id="form">
       <div style="display:flex;">
       	<div class="other-control ">
       	<label>
       		First name:
       	</label>
        <br>
       	<input type="text" name=""  id="fname" onkeyup="validate();" >
       	<i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small style="margin-bottom :50px; margin-left: 8px;"></small>
       		<br>
       <br>
       </div>
       	<div class="other-control">
        	<label>
       		Last Name:
       	</label>
       	<br>
       	<input type="text" name=""  id="lname" onkeyup="validate();">
       	<i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small style="margin-bottom :50px; margin-left: 8px;"></small>
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
        <input type="text" name=""  id="mname" onkeyup="validate();">
        <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small style="margin-bottom :50px; margin-left: 8px;"></small>
          <br>
       <br>
         </div>
       	<div class="other-control">
       	<label>
       		Father's Name:
       	</label>
       	<br>
       	<input type="text" name=""  id="faname" onkeyup="validate();">
       	<i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small style="margin-bottom :50px; margin-left: 8px;"></small>
       		<br>
       <br>
         </div>
           </div>
          <div class="other-control ">
       <label>
          Home-Station:
        </label>
       
        <select data-live-search="true" class="select w-100" name="des" id="des"  onkeyup="validate();" required>

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
    <i class="fas fa-check-circle"></i>    
  <i class="fas fa-exclamation-circle"></i>
  <small style="margin-bottom :30px; margin-left: 8px;"></small>
          <br>
       <br>
         </div>
         <div style="display:flex;">
         <div class="other-control">
          <label>
          Day:
        </label>
        <br>
           <select name="gender" id="gender"  style="width: 180px; height:40px;margin: 10px 10px 10px 0px; border: 1px solid gray;text-align: center;border-radius: 3px;" >
         <option selected disabled value="" style="color:black;"><------select here-----></option>
          <option value="M"onkeyup="validate();">01</option>
          <option value="F"onkeyup="validate();">02</option>
           <option value="Other"onkeyup="validate();">03</option>
            <option value="M"onkeyup="validate();">04</option>
          <option value="F"onkeyup="validate();">05</option>
           <option value="Other"onkeyup="validate();">06</option>
            <option value="M"onkeyup="validate();">07</option>
          <option value="F"onkeyup="validate();">08</option>
           <option value="Other"onkeyup="validate();">09</option>
            <option value="M"onkeyup="validate();">10</option>
          <option value="F"onkeyup="validate();">11</option>
           <option value="Other"onkeyup="validate();">12</option>
            <option value="M"onkeyup="validate();">13</option>
          <option value="F"onkeyup="validate();">14</option>
           <option value="Other"onkeyup="validate();">15</option>
            <option value="M"onkeyup="validate();">16</option>
          <option value="F"onkeyup="validate();">17</option>
           <option value="Other"onkeyup="validate();">18</option>
            <option value="M"onkeyup="validate();">19</option>
          <option value="F"onkeyup="validate();">20</option>
           <option value="Other"onkeyup="validate();">21</option>
            <option value="M"onkeyup="validate();">22</option>
          <option value="F"onkeyup="validate();">23</option>
           <option value="Other"onkeyup="validate();">24</option>
              <option value="M"onkeyup="validate();">25</option>
          <option value="F"onkeyup="validate();">26</option>
           <option value="Other"onkeyup="validate();">27</option>
            <option value="M"onkeyup="validate();">28</option>
          <option value="F"onkeyup="validate();">29</option>
           <option value="Other"onkeyup="validate();">30</option>
            <option value="M"onkeyup="validate();">31</option>
         
           
           
        </select>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small style="margin-bottom :50px; margin-left: 8px;"></small>
          <br>
       <br>
         </div>
           <div class="other-control">
          <label>
          Month:
        </label>
        <br>
           <select name="gender" id="gender"  style="width: 180px; height:40px;margin: 10px 10px 10px 0px; border: 1px solid gray;text-align: center;border-radius: 3px;" >
         <option selected disabled value="" style="color:black;"><------select here-----></option>
          <option value="M"onkeyup="validate();">01</option>
          <option value="F"onkeyup="validate();">02</option>
           <option value="Other"onkeyup="validate();">03</option>
            <option value="M"onkeyup="validate();">04</option>
          <option value="F"onkeyup="validate();">05</option>
           <option value="Other"onkeyup="validate();">06</option>
            <option value="M"onkeyup="validate();">07</option>
          <option value="F"onkeyup="validate();">08</option>
           <option value="Other"onkeyup="validate();">09</option>
            <option value="M"onkeyup="validate();">10</option>
          <option value="F"onkeyup="validate();">11</option>
           <option value="Other"onkeyup="validate();">12</option>
            
         
           
           
        </select>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small style="margin-bottom :50px; margin-left: 8px;"></small>
          <br>
       <br>
         </div>
          
          
          <div class="other-control">
          <label>
          Year:
        </label>
        <br>
           <select name="gender" id="gender"  style="width: 180px; height:40px;margin: 10px 10px 10px 0px; border: 1px solid gray;text-align: center;border-radius: 3px;" >
         <option selected disabled value="" style="color:black;"><------select here-----></option>
          <option value="M"onkeyup="validate();">1990</option>
          <option value="F"onkeyup="validate();">1991</option>
           <option value="Other"onkeyup="validate();">1992</option>
            <option value="M"onkeyup="validate();">1993</option>
          <option value="F"onkeyup="validate();">1994</option>
           <option value="Other"onkeyup="validate();">1995</option>
            <option value="M"onkeyup="validate();">1996</option>
          <option value="F"onkeyup="validate();">1997</option>
           <option value="Other"onkeyup="validate();">1998</option>
            <option value="M"onkeyup="validate();">1999</option>
          <option value="F"onkeyup="validate();">2000</option>
           <option value="Other"onkeyup="validate();">2001</option>
           <option value="F"onkeyup="validate();">2002</option>
           <option value="Other"onkeyup="validate();">2003</option>
            <option value="M"onkeyup="validate();">2004</option>
          <option value="F"onkeyup="validate();">2005</option>
           <option value="Other"onkeyup="validate();">2006</option>
            <option value="M"onkeyup="validate();">2007</option>
          <option value="F"onkeyup="validate();">2008</option>
           <option value="Other"onkeyup="validate();">2009</option>
            <option value="Other"onkeyup="validate();">2010</option>
            
         
           
           
        </select>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small style="margin-bottom :50px; margin-left: 8px;"></small>
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
       	<input type="text" name=""  maxlength="2" id="age" onkeyup="validate();">
       	<i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small style="margin-bottom :50px; margin-left: 8px;"></small>
       		<br>
       <br>
         </div>

       	<div class="other-control">
       		<label>
       		Gender:
       	</label>
       	<br>
       	   <select name="gender" id="gender"  style="width: 300px; height:40px;margin: 10px 10px 10px 0px; border: 1px solid gray;text-align: left;border-radius: 3px;" >
         <option selected disabled value="" style="color:black;"><---------------select here---------------></option>
          <option value="M"onkeyup="validate();">M</option>
          <option value="F"onkeyup="validate();">F</option>
           <option value="Other"onkeyup="validate();">Other</option>
           
           
        </select>
       	<i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small style="margin-bottom :50px; margin-left: 8px;"></small>
       		<br>
       <br>
         </div>
          </div>
       	<div class="other-control">
       		<label>
       		Student-Id:
       	</label>
       	<br>
       <input type="text" name="" id="id" onkeyup="validate();" style="width: 600px;">
       	<i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
  <small style="margin-bottom :50px; margin-left: 8px;"></small>
       		<br>
       <br>
         </div>

       <div style="display:flex;">
       	<div class="other-control">
       		<label>
       		Branch:
       	</label>
       	<br>
       
          <select name="branch" id="branch"  style="width: 290px; height:40px;margin: 10px 10px 10px 0px; border: 1px solid gray;text-align: left;border-radius: 3px;" >
         <option selected disabled value="" style="color:black;"><---------------select here-----------></option>
          <option value="Computer"onkeyup="validate();">Computer</option>
          <option value="Information Technology"onkeyup="validate();">Information Technology</option>
           <option value="Mechanical"onkeyup="validate();">Mechancial</option>
            <option value="Electronics"onkeyup="validate();">Electronics</option>
             <option value="Civil"onkeyup="validate();">Civil</option>
              <option value="Electronics and TeleCommunication"onkeyup="validate();">Electronics and TeleCommunication</option>
           <option value="Chemical"onkeyup="validate();">Chemical</option>
           
              
        </select>
       	<i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small style="margin-bottom :50px; margin-left: 8px;"></small>
       		<br>
       <br>
         </div>

       	<div class="other-control"> 
       	<label>
       		Year:
       	</label><br>
       	 <select name="year" id="year"  style="width: 290px; height:40px;margin: 10px 10px 10px 0px; border: 1px solid gray;text-align: left;border-radius: 3px;" >
         <option selected disabled value="" style="color:black;"><---------------select here-----------></option>
          <option value="F.E"onkeyup="validate();">F.E</option>
          <option value="S.E"onkeyup="validate();">S.E</option>
           <option value="T.E"onkeyup="validate();">T.E</option>
            <option value="B.E"onkeyup="validate();">B.E</option>
           
        </select>
       	<i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small style="margin-bottom :50px; margin-left: 8px;"></small>
       		<br>
       <br>
         </div>
         </div>
       	<div class="other-control">
       <label>
       		Year of joining:
       	</label>
       	<br>
        <select name="yoj" id="yoj"  style="width: 585px; height:40px; border: 1px solid gray;margin: 10px 10px 10px 0px;text-align: left;border-radius: 3px;" onkeyup="validate();">
         <option selected disabled value="" style="color:black;"><----------------------------------select here------------------------------------></option>
           <option value="2017-2018"onkeyup="validate();">2017-2018</option>
          <option value="2018-2019"onkeyup="validate();">2018-2019</option>
           <option value="2019-2020"onkeyup="validate();">2019-2020</option>
            <option value="2020-2021"onkeyup="validate();">2020-2021</option>
        </select>

   <i class="fas fa-check-circle"></i>   
  <i class="fas fa-exclamation-circle"></i>
  <small style="margin-bottom :50px; margin-left: 8px;"></small>
       		<br>
       <br>
         </div>
        <div style="display:flex;">
       	<div class="other-control">
         <label>
           Email-ID:
        </label>
        <br>
        <input type="text" name="" id="email"  maxlength="30" onkeyup="validate();">
        <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small style="margin-bottom :50px; margin-left: 8px;">
    
  </small>
          <br>
       <br>
         </div>
       

       	<div class="other-control">
       	 <label>
       		Contact No:
       	</label>
       	<br>
       	<input type="text" name="" id="number"  maxlength="10" onkeyup="validate();">
       	<i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small style="margin-bottom :50px; margin-left: 8px;"></small>
       		<br>
       <br>
         </div>
       </div>
      <center>
      <div  style="border-top: 1px solid gray; height:90px; padding: 20px; ">
       
        <button  id="badd" type="submit" >Add Student</button>
        
      </div>
      </center>
    </div>
     </div>
       </form>
      
      

  </div>
</div>
</center>





<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>



</body>
</html>