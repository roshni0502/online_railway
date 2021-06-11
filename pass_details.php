<div >

      
      
  
<center>
  <div class="table-fixed">
    <?php

        include 'connect.php';
        $id=$_POST['id'];
        $selectquery= "select* from form_details where student_id='$id'";
        $query= mysqli_query($con,$selectquery);
        $result=mysqli_fetch_assoc($query);
        $row=mysqli_num_rows($query);
        
 ?>
    <span style="float: left; margin-bottom: 25px;font-size: 20px; color:black;">Student ID:  <span style="color: red;"><?php echo $id;?></span></span>
         <table cellspacing="0" cellpadding="0" class=" table table-bordered ">
          <thead class="table-dark">
          
           <th>
             Sr.No
           </th>
          
           <th>
            Home-Station
           </th>
           <th>
             Pass Type
           </th>
           <th>
             Pass Duration
           </th>
           <th>
             Date
           </th>
           <th>
             Time
           </th>
         </thead>

         <tbody>

          <?php
          $sr= 0;
          $selectquery1= "select* from form_details where student_id='$id'";
        $query1= mysqli_query($con,$selectquery1);
        if (mysqli_num_rows($query1)>0) {
          # code...
        
           while($result1=mysqli_fetch_assoc($query1)){
          ?>
           <tr>

             <td><?php echo ++$sr; ?></td>
             <td><?php echo $result1['from_station'];?></td>
             <td><?php echo $result1['pass_type'];?></td>
             <td><?php echo $result1['pass_dur'];?></td>
             <td><?php echo $result1['date'];?></td>
             <td><?php echo $result1['time'];?></td>

           </tr>
           <?php
         }
    }    
          
?>

         </tbody>

           
         </table>
         </div>
</center>
      </div>
      <div class="modal-footer">
       
        
      </div>
    </div>
  </div>
</div>

  </div>