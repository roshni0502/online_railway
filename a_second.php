<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modalCenter">
    <div class="modal-content" style="width:860px;">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">student details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
       <style type="text/css">
       	 .modalCenter{
    top:0%;
    transform:translateX(-35%) !important;
}
		th{
			border: 1px solid lightgray;
			padding: 5px;
			font-size: 12px;
			font-weight: normal;
			color: gray;
			text-align: center;

		}
		td{
			border: 1px solid lightgray;
			padding-left:6px;
			font-size: 13px;
			font-weight: bold;

		}
	</style>
<center>
<div style="display: flex;">
<div >
	<table style="border: 1px solid lightgray;border-collapse: collapse;width: 700px;padding: 5px;color: dimgray;height: 120px;">
		
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
	 <img style="width: 120px;height: 120px;" src=""> 
</div>
</div>
<table style="border: 1px solid lightgray;border-collapse: collapse;width: 820px;padding: 5px;color: dimgray;float: left;margin-top: 5px;height: 380px;">
		
		<tbody>
			<tr>
				<th>Father's Name</th>
				<td><?php echo $result['faname'];?></td>
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
	 <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>
