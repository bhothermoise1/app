<?php 
session_start();
unset( $_SESION['user']);
header("location:../index.html");
 ?>