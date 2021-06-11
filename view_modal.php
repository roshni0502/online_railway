<div >
  <?php

        include 'connect.php';
        $id=$_POST['id'];
        $selectquery= "select* from student_details where student_id='$id'";
        $query= mysqli_query($con,$selectquery);
        $result=mysqli_fetch_assoc($query);

 ?>
      
      <style type="text/css">
         
   .displaytable th{
      border: 1px solid lightgray;
      padding: 5px;
      font-size: 12px;
      font-weight: normal;
      color: gray;
      text-align: center;

    }
 .displaytable td{
      border: 1px solid lightgray;
      padding-left:6px;
      font-size: 13px;
      font-weight: bold;


    }
  </style>
<center>
<div style="display: flex;">
<div >
  <table class="displaytable" style="border: 1px solid lightgray;border-collapse: collapse;width: 700px;padding: 5px;height: 120px;">
    
    <tbody>
      <tr>
        <th>Full Name</th>
        <td><?php echo $result['lname']."   ".$result['fname']."   ".$result['faname'];?></td>
      </tr>
      <tr>
        <th>Student ID</th>
        <td><?php echo $result['student_id'];?></td>
      </tr>
      <tr>
        <th>Mother's Name</th>
        <td> <?php echo $result['mname'];?></td>
      </tr>
      
      
      

    </tbody>
  </table>
</div>
<div style="border: 1px solid lightgray; height: 120px; width: 120px;margin-left: 3px;">
   <img style="width: 120px;height: 120px;" src=" documents_upload/<?php echo $result['photo']; ?>"> 
</div>
</div>
<table  class="displaytable" style="border: 1px solid lightgray;border-collapse: collapse;width: 820px;padding: 5px;float: left;margin-top: 5px;height: 380px;">
    
    <tbody>
      <tr>
        <th>Father's Name</th>
        <td><?php echo $result['faname'];?></td>
      </tr>
       <tr>
        <th>Gender</th>
        <td><?php echo $result['gender'];?></td>
      </tr>
      <tr>
        <th>Date of Birth</th>
        <td><?php echo $result['dob'];?></td>
      </tr>
      <tr>
        <th>Age</th>
        <td><?php echo $result['age'];?></td>
      </tr>
      <tr>
        <th>HOME-STATION</th>
        <td> <?php echo $result['station'];?></td>
      </tr>
        <th>Branch</th>
        <td><?php echo $result['branch'];?></td>
      </tr>
      <tr>
        <th>Current Year</th>
        <td><?php echo $result['year'];?></td>
      </tr>
      <tr>
        <th>Year of joining</th>
        <td><?php echo $result['yoj'];?></td>
      </tr>
      <tr>
        <th>E-mail ID</th>
        <td><?php echo $result['email'];?></td>
      </tr>
      <tr>
        <th>Conatact No</th>
        <td><?php echo $result['number'];?></td>
      </tr>

    </tbody>
  </table>
</center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" >Close</button>
        
      </div>
    </div>
  </div>
</div>

  </div>