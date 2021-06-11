
const form = document.getElementById('form');
 const email = document.getElementById('email');


  
form.addEventListener('submit', (e) => {
    e.preventDefault();
    validate();
    successmsg();

  })

const sendData=(srate,count) =>{
      

    if (srate===count) {
     forgotpass();
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
   
  
 
  const emailValue = email.value.trim();
  
   if (emailValue=== '') {
      setErrorFor(email,'email cannot be blank');
      
       
    }else if (!(emailValue.includes("@gmail.com",emailValue.length-10))) {
    setErrorFor(email,'invalid email address');
   }
    else{

      setSuccessFor(email);
       
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
    othercontrol.className="other-control success ";


   }

function forgotpass() {
 
 var email= document.getElementById('email').value;



 $.ajax({
 url:'present_mail.php',
 type:'post',
 data:{ 'email':email,
        

 },
 success:function(response){
 if(response == 1) {

 $.ajax({
 url:'forgot_pass.php',
 type:'post',
 data:{ 'email':email,
        

 },
 success:function(response){
 if(response == 1) {

 $('#email').val("");
  var element1=document.getElementById("success");
 element1.className="show";
 var element1=document.getElementById("error");
 element1.className="hide";
    
 
 }
 else{
   alert("Email not send successfully")
 }
 }
 });
  
    
 
 }
 else{
   $('#email').val("");
   var element1=document.getElementById("error");
 element1.className="show";
 var element1=document.getElementById("success");
 element1.className="hide";
 }
 }
 });
 }