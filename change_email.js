const email_change = document.getElementById('email_change');
const c_email = document.getElementById('c_email');

$('#cemail').click(function(){
 var change_form=$('#email_change');
 var email=document.getElementById('c_email').value;
    
    var id= document.getElementById('id').value;
   
   
    $.ajax({ 

           type:"POST",
           url:'cemail.php',
           data: {'id':id,
                  'email':email

             },
           success: function(data)
           { 

            $('#change form :input').val("");
             $('#change').modal('hide');

            swal({
              text: "email changed successfully!",
              icon: "success",
              button: "OK",
             });  
             

              var element1=document.getElementById("change_email");
              element1.className="hide";
              document.getElementById('email').value='';
              
              
              

             } 
            
         });

});



 