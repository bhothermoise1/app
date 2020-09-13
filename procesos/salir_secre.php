<?php 
session_start();
unset( $_SESION['user']);
header("location:../choose_user.php");
 ?>