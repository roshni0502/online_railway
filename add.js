 const form = document.getElementById('form');
 const fname = document.getElementById('fname');
 const laname = document.getElementById('laname');
 const mname = document.getElementById('mname');
 const faname = document.getElementById('faname');
 const gender = document.getElementById('gender');
 const age = document.getElementById('age');
 const id = document.getElementById('id');
 const branch = document.getElementById('branch');
 const year = document.getElementById('year');
 const yoj = document.getElementById('yoj');
 const email = document.getElementById('email');
 const number = document.getElementById('number');
 const photo = document.getElementById('photo');
 

 $(document).ready(function(){

 setInterval(function(){
    
 $('#display_table').load("display_table.php");

  },10);

 });

 form.addEventListener('submit', (e) => {
    e.preventDefault();
    validate();
   

  })
  const sendData=(srate,count) =>{
      

    if (srate===count) {
     
    insert();

   
}
}

  function insert(){

    var file=document.getElementById('photo').files[0];
    var form=$('#form')[0];
    var formData=new FormData(form);
    formData.append("photo",file);
   
   
    
    $.ajax({ 

           type:"POST",
           url:'insertdetails.php',
           data: formData,
           contentType:false,
           cache:false,
           processData:false,
           success: function(data)
           { 
              $('#add form :input').val("");
              $('#add').modal('hide');
              swal({
 
              text: "student added successfully!",
              icon: "success",
              button: "OK",
             });      
            load_data();

           }
         });

}
 const successmsg = () => {

  let formcon= document.getElementsByClassName('other-control');
  var count=formcon.length-1;
  for (var i=0;i<formcon.length;i++){
    if (formcon[i].className ==="other-control success"){
       var srate=0+i;

       sendData(srate,count);


    }else{
      return false;
    }
  }

 }
  
  function  validate() {
   
  
 
 
  const fnameValue = fname.value.trim();
  const lanameValue = laname.value.trim();
  const mnameValue = mname.value.trim();
  const fanameValue= faname.value.trim();
  const genderValue  = gender.value.trim();
  const ageValue  = age.value.trim();
  const idValue  = id.value.trim();
  const branchValue = branch.value.trim();
  const yearValue =year.value.trim();
  const yojValue = yoj.value.trim();
  const emailValue = email.value.trim();
  const numberValue = number.value.trim();
  const dayValue = day.value.trim();
  const monthValue = month.value.trim();
  const byearValue = byear.value.trim();
  const photoValue = photo.value.trim();
  var letters=/^[A-Za-z\s]*$/;
  var numbers=('^[0-9]+$');
 
  


  
  
   if (fnameValue === '') {
      setErrorFor(fname,'cannot be blank');
      
   } else if(!(fnameValue.match(letters))){
        setErrorFor(fname,'invalid name');
        
   }
   else{
      setSuccessFor(fname,'');
  }

if (lanameValue === '') {
      setErrorFor(laname,'cannot be blank');
      
   } else if(!(lanameValue.match(letters))){
        setErrorFor(laname,'invalid name');
        
   }
   else{
      setSuccessFor(laname,'');
  }
   
   if (mnameValue === '') {
      setErrorFor(mname,'cannot be blank');
      
   }else if(!(mnameValue.match(letters))){
        setErrorFor(mname,'invalid name');
  }else{
      setSuccessFor(mname,'');
      
  }

   if (fanameValue === '') {
      setErrorFor(faname,'cannot be blank');
      
   }else if(!(fanameValue.match(letters))){
        setErrorFor(faname,'invalid name');
  }
   else{
      setSuccessFor(faname,'');
      
  }
  
  if (genderValue === '') {
      setErrorFor(gender,'cannot be blank');
      
   }
   else {
     setSuccessFor(gender,'');
    }
  
if (ageValue === '') {
      setErrorFor(age,'cannot be blank');
      
   }
   else {
     setSuccessFor(age,'');
    }
  if (idValue === '') {
      setErrorFor(id,'cannot be blank');
      
   }
   else{
      setSuccessFor(id,'');
      
  }
  if (branchValue === '') {
      setErrorFor(branch,'cannot be blank');
      
   }else if(!(branchValue.match(letters))){
        setErrorFor(branch,'invalid  branch name');
  }
   else{
      setSuccessFor(branch,'');
      
  }
  if (yearValue === '') {
      setErrorFor(year,'cannot be blank');
      
   }else{
      setSuccessFor(year,'');
      
  }
   if (yojValue === '') {
      setErrorFor(yoj,'cannot be blank');
      
   }else{
      setSuccessFor(yoj,'');
      
  }
  if (emailValue === '') {
      setErrorFor(email,'email cannot be blank');
      
   }else if (!(emailValue.includes("@gmail.com",emailValue.length-10))) {
    setErrorFor(email,'invalid email address');
   }
   else {
     setSuccessFor(email,'');
    }

    if (numberValue === '') {
      
      setErrorFor(number,'  cannot be blank');
   }else if(!(numberValue.match(numbers))){
        setErrorFor(number,'enter only numbers');
  }
   else if (numberValue.length!=10) {
    setErrorFor(number,' invalid mobile number');
   }

   else {
     setSuccessFor(number,'');
    }
     
     if (dayValue === '') {
     
      setErrorFor(day,'cannot be blank');

      
   }else{
      
      setSuccessFor(day,'');
      
  }
   if (monthValue === '') {
      setErrorFor(month,'cannot be blank');
      
   }
   else if ((monthValue == "02" && (dayValue == "30" ||(dayValue == "31")))  || (( (monthValue == "04")||(monthValue == "06")||(monthValue == "09")||(monthValue == "11") ) && (dayValue == "31")) ){

     setErrorFor(day,'invalid day choosen');
     setSuccessFor(month,'');
   }
   else{
    setSuccessFor(month,'');
   }
  
  if (byearValue === '') {
      setErrorFor(byear,'cannot be blank');
      
   }else if(((monthValue == "02") && (dayValue == "29")&& ((parseInt(byearValue)) %4 != 0))){
    setErrorFor(day,'invalid day choosen');
    setSuccessFor(byear,'');
   
   }

   else{
      setSuccessFor(byear,'');
      age1();
  }
  if (photoValue === '') {
     
      setErrorFor(photo,'');

      
   }else{
      
      setSuccessFor(photo,'');
    
      
  }

  

}

 function setErrorFor(input,message)
   {
    const othercontrol =input.parentElement;
    const small= othercontrol.querySelector('small');
    small.innerText= message;
    othercontrol.className="other-control error";
    
   
   }
   function setSuccessFor(input,message)
   {
    const othercontrol =input.parentElement;
    const small= othercontrol.querySelector('small');
    small.innerText= message;
    othercontrol.className="other-control success";
   }





  

function age1(){
  
const day = document.getElementById('day');
const month = document.getElementById('month');
const byear = document.getElementById('byear');
const dayValue = day.value.trim();
const monthValue = month.value.trim();
const byearValue = byear.value.trim();
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();

if(monthValue<mm){
  var age_year=yyyy-byearValue;
}
else{
 
  if(monthValue==mm){
    if(dayValue<dd){
      var age_year=yyyy-byearValue;
     
    }else if(dayValue>dd){
     
      var age_year=yyyy-byearValue-1;
    }else{
      var age_year=yyyy-byearValue;
    }
  
  }else{
    var age_year=yyyy-byearValue-1;
   
  }
}

document.getElementById('age').value=age_year;

}

function message(){
    var element=document.getElementById("mess");
    element.className="message";
    $('#mess').delay(5000).hide(0);
   
}


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

$("#add").on("hidden.bs.modal",function(){
   $('#add form :input').val("");
   $(".other-control error").css("display","none");
});
  

