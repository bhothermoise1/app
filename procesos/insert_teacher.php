<?php 
require'conexion.php';
//Recibiendo los datos de los alumnos
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

$sql1=" INSERT INTO alumnos (name_alum, apell_alum, iden_alum, sexo_alum, peso_alum, talla_alum, nac_alum, lugar_alum, estado_alum, nacionalidad_alum,direccion_alum,periodo_es,grado_es,inscripcion_es,name_m, cedula_m, civil_m, email_m, telefono_m, parentesco_m, ocupacion_m ) VALUES ('$nombre','$apellido','$identificacion','$sexo','$peso','$talla','$nacimiento','$lugar','$estado','$nacionalidad','$direccion','$periodo','$grado','$inscripcion','$name_m','$cedula_m','$civil_m','$correo_m','$phone_m','$parestesco', '$ocupacion_m') ";
$resultado1 = $mysqli->query($sql1);

 



 ?>


