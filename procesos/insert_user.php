<?php 
require'conexion.php';
//Recibiendo los datos de los alumnos
	$correo=$_POST['correo'];
	$password=$_POST['password'];
	$grado= $_POST['grado'];
	$periodo= $_POST['periodo_pres'];


$sql1=" INSERT INTO user_docente (correo, pass, grado, periodo)VALUES ('$correo','$password','$grado','$periodo') ";
$resultado1 = $mysqli->query($sql1);



if ($resultado1) {
header("Location: ../vistas/msvalidar_in_user.php");

}

 ?>
