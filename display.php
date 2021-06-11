<?php
 if (isset($_POST['action'])) {
 

            
             
         
               # code...
             
             include 'connect.php' ;
             $selectquery1= "select* from student_details where branch='Computer'";
              $selectquery2= "select* from student_details where branch='Information Technology'";
               $selectquery3= "select* from student_details where branch='Mechanical'";
                $selectquery4= "select* from student_details where branch='Electronics'";
                 $selectquery5= "select* from student_details where branch='Electronics and TeleCommunication'";
                  $selectquery6= "select* from student_details where branch='Chemical'";
                   $selectquery7= "select* from student_details where branch='Civil'";

             
             $query1= mysqli_query($con,$selectquery1);
             $query2= mysqli_query($con,$selectquery2);
             $query3= mysqli_query($con,$selectquery3);
             $query4= mysqli_query($con,$selectquery4);
             $query5= mysqli_query($con,$selectquery5);
             $query6= mysqli_query($con,$selectquery6);
             $query7= mysqli_query($con,$selectquery7);
             $sr=0;
           







            while($result1=mysqli_fetch_assoc($query1)){

      ?>
          <tr>
             <td>
             <?php echo ++$sr; ?>
             </td>
             <td id="td">
             <?php echo $result1['student_id'];?>
             </td>
            <td>
              <?php echo $result1['branch'];?>
            </td>
                 
             
             <td>
              <?php echo $result1['fname']."  ".$result1['lname'];?>
             </td>
                  <td>
                   <button class="view" data-id="<?php echo $result1['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
                 View Details
                  </button>
               </td>
                 <td>
                  <button style="background: #329B24; color:white;border-color:#329B24; outline: none; margin: 2px;border-radius:4px;"><a href="update1.php?s_id=<?php echo $result1['student_id']; ?>" data style="color:white;text-decoration: none;">UPDATE</a></button>
              <button class="delete" data-id="<?php echo $result1['student_id']; ?>" style="background: #ff4242; color:white;border-color:#ff4242; outline: none; margin: 2px;border-radius:4px; ">DELETE</button>
                 </td>


        </tr>
        <?php
 }
        
       
           

          while($result2=mysqli_fetch_assoc($query2)){
          ?> 
            <tr>
             <td>
             <?php echo ++$sr; ?>
             </td>
             <td >
               <?php echo $result2['student_id']; ?>
             </td>
             <td>
              <?php echo $result2['branch']; ?>
            </td>
           
            <td> <?php echo $result2['fname']."  ".$result2['lname'];?></td>

             <td>
             <button class="view" data-id="<?php echo $result2['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
                 View Details
                  </button>
               
             </td>
             
             
             <td>  
                   
               <button style="background: #329B24; color:white;border-color:#329B24; outline: none; margin: 2px;border-radius:4px;"><a href="update1.php?s_id=<?php echo $result2['student_id']; ?>" data style="color:white;text-decoration: none;">UPDATE</a></button>
                <button class="delete" data-id="<?php echo $result2['student_id']; ?>" style="background: #ff4242; color:white;border-color:#ff4242; outline: none; margin: 2px;border-radius:4px; ">DELETE</button>
 
             </td>
          

            
                 </tr>
           <?php
 }
         
         while($result3=mysqli_fetch_assoc($query3)){
          ?>
            <tr>
             <td>
           <?php echo ++$sr; ?>  
             </td>
             <td>
              <?php echo $result3['student_id']; ?>  
             </td>
             <td>
                <?php echo $result3['branch']; ?>  
            </td>
            <td>
              <?php echo $result3['fname']."  ".$result3['lname'];?>
             </td>
             <td>
               <button class="view" data-id="<?php echo $result3['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
                 View Details
                  </button>

             
             </td>
             
             <td>
               <button style="background: #329B24; color:white;border-color:#329B24; outline: none; margin: 2px;border-radius:4px;"><a href="update1.php?s_id=<?php echo $result3['student_id']; ?>" data style="color:white;text-decoration: none;">UPDATE</a></button>
                <button class="delete" data-id="<?php echo $result3['student_id']; ?>" style="background: #ff4242; color:white;border-color:#ff4242; outline: none; margin: 2px;border-radius:4px; ">DELETE</button>

             </td>

            </tr>

                            <?php
 }

        while($result4=mysqli_fetch_assoc($query4)){
          ?>
               <tr id="1">

             <td>
             <?php echo ++$sr; ?>  
             </td>
             <td>
              <?php echo $result4['student_id']; ?>  
             </td>
             <td>
            <?php echo $result4['branch']; ?>  
            </td>
             <td>
               <?php echo $result4['fname']."  ".$result4['lname'];?>

             </td>
             <td>
               <button class="view" data-id="<?php echo $result4['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
                 View Details
                  </button>

               
             </td>
            
             <td>  
                   
                 <button style="background: #329B24; color:white;border-color:#329B24; outline: none; margin: 2px;border-radius:4px;"><a href="update1.php?s_id=<?php echo $result4['student_id']; ?>" data style="color:white;text-decoration: none;">UPDATE</a></button>
                <button class="delete" data-id="<?php echo $result4['student_id']; ?>" style="background: #ff4242; color:white;border-color:#ff4242; outline: none; margin: 2px;border-radius:4px; ">DELETE</button>

             </td>
          

            
                 </tr>
                            <?php
 }
        
        while($result5=mysqli_fetch_assoc($query5)){
          ?>
            <tr>
             <td>
            <?php echo ++$sr; ?>  
             </td>
             <td>
           <?php echo $result5['student_id']; ?>  
             </td>
             <td>
             <?php echo $result5['branch']; ?>  
            </td>
            <td>
             <?php echo $result5['fname']."  ".$result5['lname'];?>
             </td>
             <td>
               <button class="view" data-id="<?php echo $result5['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
                 View Details
                  </button>
             
             </td>
             
             <td>
                  <button style="background: #329B24; color:white;border-color:#329B24; outline: none; margin: 2px;border-radius:4px;"><a href="update1.php?s_id=<?php echo $result5['student_id']; ?>" data style="color:white;text-decoration: none;">UPDATE</a></button>
               <button class="delete" data-id="<?php echo $result5['student_id']; ?>" style="background: #ff4242; color:white;border-color:#ff4242; outline: none; margin: 2px;border-radius:4px; ">DELETE</button>
             </td>

            </tr>
             <?php
 }
           
           while($result6=mysqli_fetch_assoc($query6)){
          ?>
            <tr>
             <td>
              <?php echo ++$sr; ?>  
             </td>
             <td>
               <?php echo $result6['student_id']; ?>  
             </td>
             <td>
               <?php echo $result6['branch']; ?>  
            </td>
            <td>
               <?php echo $result6['fname']."  ".$result6['lname'];?>
             </td>
             <td>
               <button class="view" data-id="<?php echo $result6['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
                 View Details
                  </button>
              
             </td>
             
             <td>  
                   
                <button style="background: #329B24; color:white;border-color:#329B24; outline: none; margin: 2px;border-radius:4px;"><a href="update1.php?s_id=<?php echo $result6['student_id']; ?>" data style="color:white;text-decoration: none;">UPDATE</a></button>    
             <button class="delete" data-id="<?php echo $result6['student_id']; ?>" style="background: #ff4242; color:white;border-color:#ff4242; outline: none; margin: 2px;border-radius:4px; ">DELETE</button>
             </td>
          

            
                 </tr>
                 <?php
 }
         while($result7=mysqli_fetch_assoc($query7)){
          ?>
            <tr>
             <td>
            <?php echo ++$sr; ?>  
             </td>
             <td>
             <?php echo $result7['student_id']; ?>  
             </td>
             <td>
              <?php echo $result7['branch']; ?>  
            </td>
             <td>
              <?php echo $result7['fname']."  ".$result7['lname'];?>
             </td>
             <td>
               <button class="view" data-id="<?php echo $result7['student_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#view" style="outline: none;border: none; font-style: italic;">
                 View Details
                  </button>
             
             </td>
            
             <td>
                  <button style="background: #329B24; color:white;border-color:#329B24; outline: none; margin: 2px;border-radius:4px;"><a href="update1.php?s_id=<?php echo $result7['student_id']; ?>" data style="color:white;text-decoration: none;">UPDATE</a></button> 
               <button class="delete" data-id="<?php echo $result7['student_id']; ?>" style="background: #ff4242; color:white;border-color:#ff4242; outline: none; margin: 2px;border-radius:4px; ">DELETE</button>
             </td>

            </tr>


                   <?php
 }
           
            
	
}
?>

<script type="text/javascript">
	 $(".delete").on("click",function(e){
        e.preventDefault();
    var element=$(this);
     var id= $(this).attr('data-id');
     swal({
  title: "Are you sure",
  text: " you want to delete student with Student-ID = "+id+" ? ",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $.ajax({
        url:'delete.php',
        type:'post',
        data:{'id':id
             },

        success :function(data){

         
      

 load_data();       

         
        }                                                            

       });
    
  } 
});
      
     
     


});


      $(".view").on("click",function(e){
        e.preventDefault();
    var element=$(this);
     var id= $(this).attr('data-id');
   
      $.ajax({
        url:'view_modal.php',
        type:'post',
        data:{'id':id
             },

        success :function(response){
         $('.view_data').html(response);
         $('#view').modal('show');
        
        
         
        }                                                            

       });
     
     


});
   
</script>