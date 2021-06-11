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
</body>


<center>


<div class="modal fade" id="view" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="width: 900px; ">

      
      <div class="modal-body" >
      
       <style type="text/css">
    th{
      border: 1px solid gray;
      color: black;
      border-collapse: separate;
      text-align: center;
      
    }
    td{
      border: 1px solid gray;
      text-align: center;
     
    }
    #mytr td{
      height: 100px;
      text-align: left;

    }
    #fit td{
      height: 10px;
    }
  </style>
  <center>
  <table   style="width: 600px;height: 700px;font-size: 10px;padding: 10px;border-collapse: separate;">
  <tbody >
    <tr id="fit">
      
      <td colspan="12" rowspan="3"  style="margin: 0;padding: 0;">
      <div style="width: 110px;height: 100px;margin-left: 20px;margin-top: -15px;">
        <img src="logo8.jpg">
      </div>
      <p style="text-align:center;font-size:23px;color: blue;margin-left: 80px;margin-top: -90px;">Datta Meghe College Of Engineering</p>
      <p style="text-align:left;font-size:18px;margin-top: -20px; margin-left: 145px;color: cornflowerblue;">Airoli,Navi Mumbai</p>
      </td>
         
   </tr>

      <tr>
        
      </tr>
       <tr>
        
      </tr>
     
     


      <tr>
        <th colspan="4" >
        FULL NAME
      </th>
      <td colspan="8" >
        ROSHNI SATYANARAYAN GUPTA
      </td>
      </tr>
       <tr>
        <th colspan="3" >
        STUDENT ID
      </th>
      <td colspan="4" >
        2019FHCO111
      </td>
      <td colspan="5" rowspan="3"  style="background: url(ronaldo.jpg); background-size:cover;" >
      
      </td>
      </tr>
       <tr>
        <th colspan="3" >
        MOTHER'S NAME
      </th>
      <td colspan="4" >
        NIRJALA
      </td >
      
      </tr>
       <tr>
        <th colspan="3" >
        FATHER'S NAME
      </th>
      <td colspan="4" >
        SATYANARAYAN
      </td>
      
      </tr>
       <tr>
        <th colspan="3" >
        DATE 0F BIRTH
      </th>
      <td colspan="3" >
        21/12/2001
      </td>
      <th colspan="3" >
        AGE
      </th>
      <td colspan="3" >
        19
      </td>
      
      
      </tr>
       <tr id="mytr">
        <th colspan="4" >
        ADDRESS
      </th>
      <td colspan="8" >
       
      </td> 
      
        </tr>


        <th colspan="4" colspan="">
        HOME-STATION
      </th>
      <td colspan="8" colspan="">
        AMBERNATH
      </td>
      
      </tr>
       <tr>
        <th colspan="4" >
         BRANCH
      </th>
      <td colspan="8" >
        COMPUTER
      </td>

      
      
      </tr>
       <tr>
        <th colspan="4" >
      CURRENT YEAR
      </th>
      <td colspan="8" >
        II
      </td>
      
      
      </tr>
        </tr>
       <tr>
        <th colspan="4" >
      YEAR OF JOINING
      </th>
      <td colspan="8" >
       2019-2020
      </td>
      
      
      </tr>
        </tr>
        </tr>
       <tr>
        <th colspan="4" >
      E-MAIL ID
      </th>
      <td colspan="8" >
       guptaroshni5627727@gmail.com
      </td>
      
      
      </tr>
        </tr>
        </tr>
       <tr>
        <th colspan="4" >
      CONTACT NO
      </th>
      <td colspan="8" >
      7902982727
      </td>
      
      
      </tr>



    </tbody>
  </table>
  </center>
        
      <div  style=" height:70px; padding: 20px;width: 550px; ">
        <button   type="button"  id="baddd" data-bs-dismiss="modal">Close</button>
      </div>
      </center>
       </center>
      

  </div>
</div>
</center>



<center>
 

<center>
<style type="text/css">
  .modalCenter{
    top:0%;
    transform:translateX(-15%) !important;
}


</style>
<div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modalCenter">
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
        <input type="text" name=""  id="fname" onkeyup="validate();" style="width: 300px;" >
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
        <input type="text" name=""  id="laname" onkeyup="validate();" style="width: 300px;">
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
        <input type="text" name=""  id="mname" onkeyup="validate();" style="width: 300px;">
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
        <input type="text" name=""  id="faname" onkeyup="validate();" style="width: 300px;">
        <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small ></small>
          <br>
       <br>
         </div>
           </div>
          <div class="other-control ">
       <label>
          Home-Station:
        </label>
       
        <select data-live-search="true" class="selectpicker w-100" name="des" id="des"  onkeyup="validate();"  >

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
  <small ></small>
          <br>
       <br>
         </div>
         <div style="display:flex;">
         <div class="other-control">
          <label>
          Date Of Birth:
        </label>
        <br>
           <select name="day" id="day"  style="width: 195px; height:40px;margin: 10px 10px 10px 0px; border: 1px solid gray;text-align: center;border-radius: 3px;" >
         <option selected disabled value="" style="color:black;"><------select day-----></option>
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
        <small ></small>
          <br>
       <br>
         </div>
           <div class="other-control">
         
        <br>
           <select name="month" id="month"  style="width: 195px; height:40px;margin: 10px 10px 10px 0px; border: 1px solid gray;text-align: center;border-radius: 3px;" >
         <option selected disabled value="" style="color:black;"><------select month-----></option>
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
        <small></small>
          <br>
       <br>
         </div>
          
          
          <div class="other-control">
          
        <br>
           <select name="byear" id="byear"  style="width: 195px; height:40px;margin: 10px 10px 10px 0px; border: 1px solid gray;text-align: center;border-radius: 3px;" >
         <option selected disabled value="" style="color:black;"><------select year-----></option>
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
        <small ></small>
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
        <input type="text" name=""  maxlength="2" id="age" onkeyup="validate();" style="width: 300px;">
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
           <select name="gender" id="gender"  style="width: 300px; height:40px;margin: 10px 10px 10px 0px; border: 1px solid gray;text-align: left;border-radius: 3px;" >
         <option selected disabled value="" style="color:black;"><---------------select here---------------></option>
          <option value="M"onkeyup="validate();">M</option>
          <option value="F"onkeyup="validate();">F</option>
           <option value="Other"onkeyup="validate();">Other</option>
           
           
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
       <input type="text" name="" id="id" onkeyup="validate();" style="width: 610px;">
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
       
          <select name="branch" id="branch"  style="width: 300px; height:40px;margin: 10px 10px 10px 0px; border: 1px solid gray;text-align: left;border-radius: 3px;" >
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
  <small ></small>
          <br>
       <br>
         </div>

        <div class="other-control"> 
        <label>
          Year:
        </label><br>
         <select name="year" id="year"  style="width: 300px; height:40px;margin: 10px 10px 10px 0px; border: 1px solid gray;text-align: left;border-radius: 3px;" >
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
        <select name="yoj" id="yoj"  style="width: 610px; height:40px; border: 1px solid gray;margin: 10px 10px 10px 0px;text-align: left;border-radius: 3px;" onkeyup="validate();">
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
        <input type="text" name="" id="email"  maxlength="30" onkeyup="validate();" style="width: 400px;">
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
        <input type="text" name="" id="number"  maxlength="10" onkeyup="validate();" style="width: 200px;">
        <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small ></small>
          <br>
       <br>
         </div>
       </div>
      <center>

      <div  style=" height:90px; padding: 20px; display: flex;">
       
        <button  id="badd" type="submit" >Add Student</button>
        
      </div>
      </center>
    </div>
     </div>
       </form>
      
          
      
      

  </div>
</div>
</center>




<div class="container-fluid">

 	   <div class="row">
 	     

         <div class="col-lg-12 border-top border-bottom border-start border-white   rounded  text-center mb-2 ml-1 mt-1 fs-6  "style="background-color: ;color: black; height:670px; padding: 5px; ">
         <center>
        <button type="button"  data-bs-toggle="modal" data-bs-target="#add" style="background: green;color:white; width: 150px;margin-left: 1240px; margin-top: 30px;  height: 40px; border: 1px solid green; border-radius:6px; outline: none;">
<b style="font-size: 20px;">+</b> Add Student
</button>
        <div class="input-group mb-3" style="width: 1410px; margin: 10px;">
  <span class="input-group-text" id="basic-addon1" style="width: 60px; height: 50px;background: #009879;"><i class="fas fa-search" style="font-size: 25px; color: white; background: #009879;"></i></span>
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
  
  margin-bottom: 40px;
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
#mytable tr:hover{
  background: #dddddd;
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
         
          
         <div class="table-fixed1">
         	<table id="mytable" style="text-align: center; width: 1390px;">
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
         
         <tbody>
           <?php
             include 'connection.php' ;
             $selectquery1= "select* from find where branch='Computer'";
              $selectquery2= "select* from find where branch='Information Technology'";
               $selectquery3= "select* from find where branch='Mechanical'";
                $selectquery4= "select* from find where branch='Electronics'";
                 $selectquery5= "select* from find where branch='TeleCommunication'";
                  $selectquery6= "select* from find where branch='Chemical'";
                   $selectquery7= "select* from find where branch='Civil'";

             
             $query1= mysqli_query($con,$selectquery1);
             $query2= mysqli_query($con,$selectquery2);
             $query3= mysqli_query($con,$selectquery3);
             $query4= mysqli_query($con,$selectquery4);
             $query5= mysqli_query($con,$selectquery5);
             $query6= mysqli_query($con,$selectquery6);
             $query7= mysqli_query($con,$selectquery7);
             

            while($result1=mysqli_fetch_assoc($query1)){
      ?>
         	<tr>
         		 <td>
         		 <?php echo $result1['sr']; ?>
         		 </td>
         		 <td>
         		 <?php echo $result1['id'];?>
         		 </td>
         		<td>
         		 	<?php echo $result1['branch'];?>
         		</td>
                 
         		 
         		 <td>
         		 	Roshni Gupta
         		 </td>
                  <td>
                   <button type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
                 View Details
                  </button>
               </td>
                 <td>
                  <button type="close" data-bs-toggle="modal" data-bs-target="#update" data-bs-dismiss ="modal" style="background: #329B24; color:white;border-color:#329B24; outline: none; margin: 2px;border-radius:4px;">UPDATE</button>
              <button style="background: #ff4242; color:white;border-color:#ff4242; outline: none; margin: 2px;border-radius:4px; ">DELETE</button>
                 </td>


        </tr>
        <?php
 }
        
       
           

          while($result2=mysqli_fetch_assoc($query2)){
          ?> 
         		<tr>
         		 <td>
         		 <?php echo $result2['sr']; ?>
         		 </td>
         		 <td>
         		 	 <?php echo $result2['id']; ?>
         		 </td>
         		 <td>
         		  <?php echo $result2['branch']; ?>
         		</td>
           
            <td>Roshni Gupta</td>

         		 <td>
         		 	 <button type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
            View Details
          </button>
         		 </td>
         		 
         		 
         		 <td>  
                   
                    <button type="close" data-bs-toggle="modal" data-bs-target="#update" data-bs-dismiss ="modal" style="background: #329B24; color:white;border-color:#329B24; outline: none; margin: 2px;border-radius:4px;">UPDATE</button>
         		 	<button style="background: #ff4242; color:white;border-color:#ff4242; outline: none; margin: 2px;border-radius:4px; ">DELETE</button>

         		 </td>
          

         		
                 </tr>
           <?php
 }
         
         while($result3=mysqli_fetch_assoc($query3)){
          ?>
         		<tr>
         		 <td>
         	 <?php echo $result3['sr']; ?>	
         		 </td>
         		 <td>
         		  <?php echo $result3['id']; ?>  
         		 </td>
         		 <td>
         		    <?php echo $result3['branch']; ?>  
         		</td>
            <td>
             Roshni Gupta
             </td>
         		 <td>

         		 	<button type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
            View Details
          </button>
         		 </td>
         		 
         		 <td>
         		 	    <button type="close" data-bs-toggle="modal" data-bs-target="#update" data-bs-dismiss ="modal" style="background: #329B24; color:white;border-color:#329B24; outline: none; margin: 2px;border-radius:4px;">UPDATE</button>
              <button style="background: #ff4242; color:white;border-color:#ff4242; outline: none; margin: 2px;border-radius:4px; ">DELETE</button>

         		 </td>

         		</tr>

                            <?php
 }

        while($result4=mysqli_fetch_assoc($query4)){
          ?>
               <tr>

             <td>
             <?php echo $result4['sr']; ?>  
             </td>
             <td>
              <?php echo $result4['id']; ?>  
             </td>
             <td>
            <?php echo $result4['branch']; ?>  
            </td>
             <td>
              Roshni Gupta

             </td>
             <td>
               <button type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
            View Details
          </button>
             </td>
            
             <td>  
                   
                    <button type="close" data-bs-toggle="modal" data-bs-target="#update" data-bs-dismiss ="modal" style="background: #329B24; color:white;border-color:#329B24; outline: none; margin: 2px;border-radius:4px;">UPDATE</button>
              <button style="background: #ff4242; color:white;border-color:#ff4242; outline: none; margin: 2px;border-radius:4px; ">DELETE</button>

             </td>
          

            
                 </tr>
                            <?php
 }
        
        while($result5=mysqli_fetch_assoc($query5)){
          ?>
            <tr>
             <td>
            <?php echo $result5['sr']; ?>  
             </td>
             <td>
           <?php echo $result5['id']; ?>  
             </td>
             <td>
             <?php echo $result5['branch']; ?>  
            </td>
            <td>
            Roshni Gupta
             </td>
             <td>
              <button type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
            View Details
          </button>
             </td>
             
             <td>
                  <button type="close" data-bs-toggle="modal" data-bs-target="#update"  style="background: #329B24; color:white;border-color:#329B24; outline: none; margin: 2px;border-radius:4px;">UPDATE</button>
              <button style="background: #ff4242; color:white;border-color:#ff4242; outline: none; margin: 2px;border-radius:4px; ">DELETE</button>

             </td>

            </tr>
             <?php
 }
           
           while($result6=mysqli_fetch_assoc($query6)){
          ?>
            <tr>
             <td>
              <?php echo $result6['sr']; ?>  
             </td>
             <td>
               <?php echo $result6['id']; ?>  
             </td>
             <td>
               <?php echo $result6['branch']; ?>  
            </td>
            <td>
              Roshni Gupta
             </td>
             <td>
               <button type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
            View Details
          </button>
             </td>
             
             <td>  
                   
                    <button type="close" data-bs-toggle="modal" data-bs-target="#update" data-bs-dismiss ="modal" style="background: #329B24; color:white;border-color:#329B24; outline: none; margin: 2px;border-radius:4px;">UPDATE</button>
              <button style="background: #ff4242; color:white;border-color:#ff4242; outline: none; margin: 2px;border-radius:4px; ">DELETE</button>

             </td>
          

            
                 </tr>
                 <?php
 }
         while($result7=mysqli_fetch_assoc($query7)){
          ?>
            <tr>
             <td>
            <?php echo $result7['sr']; ?>  
             </td>
             <td>
             <?php echo $result7['id']; ?>  
             </td>
             <td>
              <?php echo $result7['branch']; ?>  
            </td>
             <td>
             Roshni Gupta
             </td>
             <td>
              <button type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
            View Details
          </button>
             </td>
            
             <td>
                  <button type="close" data-bs-toggle="modal" data-bs-target="#update" data-bs-dismiss ="modal" style="background: #329B24; color:white;border-color:#329B24; outline: none; margin: 2px;border-radius:4px;">UPDATE</button>
              <button style="background: #ff4242; color:white;border-color:#ff4242; outline: none; margin: 2px;border-radius:4px; ">DELETE</button>

             </td>

            </tr>


                   <?php
 }
            
             ?>
         		</tbody>
                </table>

      </div>
            
      
 	     	</center>
         </div>	

</div>
</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="add.js"></script>

<script type="text/javascript">

   const searchfun= () =>{
    let filter= document.getElementById('myinput').value.toUpperCase();
    let mytable= document.getElementById('mytable');
    let tr = mytable.getElementsByTagName('tr');
    for (var i = 0 ; i <tr.length; i++) {
        let td= tr[i].getElementsByTagName('td')[1];

        if(td){
           let textvalue=td.textContent || td.innerHtml;
           if(textvalue.toUpperCase().indexOf(filter)> -1){
            tr[i].style.display="";
           }
           else{
            tr[i].style.display= "none";
             
           }
        } 
        
           
           
    }
   }
</script>





</body>
</html>


