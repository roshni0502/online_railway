<?php
if (isset($_POST['id'])) {
include 'connect.php';
$return_arr=array();
 $id = $_POST['id'];
$selectquery= "select * from form_details where student_id= '$id' ORDER BY date,time DESC  LIMIT 1";


 $query=mysqli_query($con,$selectquery);
 $row=mysqli_num_rows($query);
 if($row==0){
 	echo 0;
 }else{
 $result=mysqli_fetch_assoc($query);
 $date=$result['date'];
 $time=$result['time'];
 $return_arr[]=array("date" => $date,"time" => $time);
 echo json_encode($return_arr);
 }

}
?>