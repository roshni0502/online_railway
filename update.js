
 const form = document.getElementById('form');
 
 const branch = document.getElementById('branch');
 const year = document.getElementById('year');

 const email = document.getElementById('email');
 const number = document.getElementById('number');
 
 

 form.addEventListener('submit', (e) => {
    e.preventDefault();
    validate();
    successmsg();


  })

  const sendData=(srate,count) =>{
      

    if (srate===count) {
    update();
   

   
}
}
 function update(){

   
    var form=$('#form');
    var id= $("#id").text();
   
    $.ajax({ 

           type:"POST",
           url:'updatedetails.php?s_id='+id,
           data: form.serialize(),
           success: function(data)
           { 
            swal({
 
              text: "details updated successfully!",
              icon: "success",
              button: "OK",
             });  
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
   
  
 
 
 const branchValue =branch.value.trim();
  const yearValue =year.value.trim();
 
  const emailValue = email.value.trim();
  const numberValue = number.value.trim();
 
  var letters=/^[A-Za-z\s]*$/;
  var numbers=('^[0-9]+$');
  
  


  
  
  
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

  


function message(){
    var element=document.getElementById("mess");
    element.className="message";
    $('#mess').delay(5000).hide(0);
    return true;
   
}