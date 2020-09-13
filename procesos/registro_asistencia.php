<?php 
require'conexion.php';


$personal=$_POST['personal'];
$asistencia=$_POST['asistencia'];
$fecha=$_POST['fecha'];
$cedula=$_POST['cedula'];




$sql1="INSERT INTO asistencia_personal( Personal_asistencia, asistencia,fecha,cedula_personal) VALUES ('$personal','$asistencia','$fecha', '$cedula')";
$resultado1 = $mysqli->query($sql1);

if ($resultado1) {


echo "Ingreso Exitoso";}

elseif ($resultado1==false) {
	echo "Hubo un error";

}
 ?>