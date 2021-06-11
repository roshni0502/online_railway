<?php
include 'connect.php';
session_start();
 $cur_date=$_SESSION['cur_date'];
 $cur_time=$_SESSION['cur_time'];
 $query=" update admin_login set date = '$cur_date', time= '$cur_time' ";
 $quer_run=mysqli_query($con,$query);
unset($_SESSION['code']);
unset($_SESSION['cur_date']);
unset($_SESSION['cur_time']);
session_destroy();
header("location:adminlogin.php?status=loggedout");
?>