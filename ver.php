<?php
session_start();
require_once("mailer.php");
$email=$_POST['email'];
$id=$_POST['id'];
$_SESSION['email']=$email;
$_SESSION['id']=$id;
smtp_mailer($email);

?>