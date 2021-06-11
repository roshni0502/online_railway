<!DOCTYPE html>
<html>
<head>
	<title>fetch chats</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>

	<table class="table table-bordered table-centered " style="width: 600px;">
		<thead cla>
			<th>
				ID
			</th>
			<th>
				View Chats
			</th>
		</thead>
		<tbody >
		<?php
           include 'connection.php' ;
             $selectquery= "select* from s_id ";
             $query= mysqli_query($con,$selectquery);
            
              while($result=mysqli_fetch_assoc($query)){
              	
      ?>

			<td>
				<?php echo $result['studentid']; ?>
			</td>
			<td>  
				<a href="another.php?to_user=<?php echo $result['studentid']; ?>&from_user=123">Chats</a>
			</td>
     <?php
        
		}
		?>
		
		</tbody>

	</table>


</body>
</html>