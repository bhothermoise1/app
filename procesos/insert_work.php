<?php 
require'conexion.php';
//Recibiendo los datos de los alumnos
	$cod=$_POST['cod'];
	$nombre=$_POST['nombre'];
	$apellido= $_POST['apellido'];
	$cedula= $_POST['cedula'];
	$cargo=$_POST['cargo'];
    $correo=$_POST['correo'];
	$phone= $_POST['phone'];
	$direccion=$_POST['direccion'];
	$nacimiento=$_POST['nacimiento'];
	$ingreso=$_POST['ingreso'];
	$sexo=$_POST['sexo'];


	$sql1="INSERT INTO `docentes`( `cod_doc` ,`name_d`, `apell_d`,`cedu_d`, `cargo`,`email_d`, `phone_d`, `direccion`, `date_n`, `date_i`, `sexo_work`) VALUES ('$cod','$nombre','$apellido','$cedula','$cargo','$correo','$phone','$direccion','$nacimiento','$ingreso','$sexo')";
$resultado1 = $mysqli->query($sql1);

if ($resultado1) {

header("Location: ../vistas/msvalidar_in_teacher.php");
	
}
 ?>
