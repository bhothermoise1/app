<?php 
require'conexion.php';
//Recibiendo los datos de los alumnos
	$correo=$_POST['correo'];
	$password=$_POST['password'];



$sql1=" INSERT INTO user_secre ( user_secre, pass_secre)VALUES ('$correo','$password') ";
$resultado1 = $mysqli->query($sql1);



if ($resultado1) {
header("Location: ../vistas/msvalidar_in_user_secre.php");

}

 ?>
