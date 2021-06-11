 
 const form = document.getElementById('form');
 const id = document.getElementById('id');
 const dob = document.getElementById('dob');
 const email = document.getElementById('email');
 const password = document.getElementById('password');
 const cpassword = document.getElementById('cpassword');



  
 form.addEventListener('submit', (e) => {
    e.preventDefault();
    validate();
    successmsg();

  })

 $('#password').click(function(){
   var y=$("#pass").attr('class');
  
   if(y==="other-control success "){
  var element1=document.getElementById("p");
   element1.className="hide";
 }else{
   var element2=document.getElementById("p");
   element2.className="show";
 }
 });

const sendData=(srate,count) =>{
      

    if (srate===count) {
    reg();
   

   
}
}
function reg(){

    var form=$('#form');
    var email= document.getElementById('email').value;
    var id= document.getElementById('id').value;
    var pass= document.getElementById('password').value;
   
   
    $.ajax({ 

           type:"POST",
           url:'check_reg.php',
           data: form.serialize(),
           success: function(response)
           { 
             if (response == 0) {
              swal({
 
              text: "you are already registered",
              icon: "error",
              button: "CLOSE",

             }); 
                $('#form :input').val("");
              

             }
            else if (response == 1) {    
             $('#form :input').val("");
              
             
            $.ajax({
            url:'mailer.php',
            type:'post',
            data:{'id':id,
              'email':email},
         success:function(result){
       
          }

         });
 

               swal({
              html:true,
              text:"we have sent a verification code to your registered mail id: " + email +" To finish registering ,please enter the verification code we gave you.it might take a few minutes to receive the code" ,
              icon: "success",
              
             }).then(function(){

            
                   window.location='otp.php?s_id='+id+'&email='+email+'&pass='+pass;
        
               
             });


             
  
                
             
             }
             else if(response == 2){
               swal({
             
              text: "seems like you have entered wrong email id",
              icon: "error",
              button: "OK",
             });  
               var element1=document.getElementById("change_email");
               element1.className="show";
             }else{
               swal({
 
              text: "you are not a student of college",
              icon: "warning",
              button: "CLOSE",
             }); 

             }
            }

         });

}

 
 const successmsg = () => {

  let formcon= document.getElementsByClassName('other-control');
  var count=formcon.length-1;
  for (var i=0;i<formcon.length;i++){
    if (formcon[i].className !="other-control error"){
       var srate=0+i;

       sendData(srate,count);


    }else{
      return false;
    }
  }

 }
  
  function  validate() {
   
  
 
  const idValue = id.value.trim();
  const dobValue = dob.value.trim();
  const emailValue = email.value.trim();
  const passwordValue= password.value.trim();
  const cpasswordValue= cpassword.value.trim();
 
  
  
  
   if (idValue === '') {
      setErrorFor(id,'otp cannot be blank');
      
   }else{
      setSuccessFor(id);
      
  }
  
   if (dobValue === '') {
      setErrorFor(dob,'dob cannot be blank');
      
   }
   else {
     setSuccessFor(dob);
    }

   if (emailValue === '') {
      setErrorFor(email,'email cannot be blank');
      
   }else if (!(emailValue.includes("@gmail.com",emailValue.length-10))) {
    setErrorFor(email,'invalid email address');
   }
   else {
     setSuccessFor(email);
    }


    if (passwordValue === '') {

      setErrorFor(password,' password cannot be blank');
    }
    else if (passwordValue.length<6) 
    {  var element1=document.getElementById("p");
       element1.className="show";
      setErrorFor(password,' password length should be minimum 6 characters');
    }else{
      var element1=document.getElementById("p");
      element1.className="hide";
      setSuccessFor(password);
    }

     if (cpasswordValue === '') {
      setErrorFor(cpassword,' confirm password cannot be blank');
    } 
    else if (cpasswordValue.length<6) 
    {
      setErrorFor(cpassword,'pasword and confirm pasword are not matching');
    }

    else if (cpasswordValue != passwordValue) 
    {
      setErrorFor(cpassword,'pasword and confirm pasword are not matching');
    }else{
      setSuccessFor(cpassword);
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




