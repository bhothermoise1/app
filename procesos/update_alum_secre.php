<?php 
require'conexion.php';
//Recibiendo los datos de los alumnos
 $id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$identificacion= $_POST['identificacion'];
	$sexo= $_POST['sexo'];
	$peso=$_POST['peso'];
    $talla=$_POST['talla'];
	$nacimiento= $_POST['nacimiento'];
	$lugar=$_POST['lugar'];
	$estado=$_POST['estado'];
	$nacionalidad=$_POST['nacionalidad'];
$direccion=$_POST['direccion'];
$periodo=$_POST['periodo'];
$grado=$_POST['grado'];
$inscripcion=$_POST['inscripcion'];
 	$name_m=$_POST['madre'];
	$cedula_m=$_POST['cedula_m'];
	$civil_m=$_POST['civil_m'];
$correo_m=$_POST['correo_m'];
$phone_m=$_POST['phone_m'];
$parestesco=$_POST['parentesco'];
$ocupacion_m=$_POST['ocupacion_m'];

$sql1=" UPDATE alumnos SET name_alum='$nombre', apell_alum='$apellido', iden_alum='$identificacion', sexo_alum='$sexo', peso_alum='$peso', talla_alum='$talla', nac_alum='$nacimiento', lugar_alum='$lugar', estado_alum='$estado', nacionalidad_alum = '$nacionalidad',direccion_alum='$direccion',periodo_es='periodo',grado_es='$grado',inscripcion_es='$inscripcion',name_m='$name_m', cedula_m='$cedula_m', civil_m='$civil_m', email_m='$correo_m', telefono_m='$phone_m', parentesco_m='$parestesco', ocupacion_m='$ocupacion_m' where id_alum = '$id'";

$resultado1 = $mysqli->query($sql1);

if ($resultado1) {
	header("Location: ../vistas/msvalidar_upda.php");
}
 ?>
