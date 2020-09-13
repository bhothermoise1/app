<?php 
require'conexion.php';
//Recibiendo los datos de los alumnos
$nombre=$_POST['nombre_p'];
$sexo_pres=$_POST['sexo_pres'];
$edad= $_POST['edad'];
$talla= $_POST['talla'];
$peso=$_POST['peso'];
$nacimiento= $_POST['nacimiento'];
$lugar=$_POST['lugar'];
$direccion=$_POST['direccion'];
$repre=$_POST['repre'];
$cedula=$_POST['cedula'];
$civil_r=$_POST['civil_r'];
$parentesco_r=$_POST['parentesco_r'];
$correo_r=$_POST['correo_r'];
$phone_r=$_POST['phone_r'];
$ocupacion_r=$_POST['ocupacion_r'];
$alimento_pres=$_POST['alimento_pres'];
$palabra_pres=$_POST['palabra_pres'];
$panal_pres=$_POST['panal_pres'];
$periodo_pres=$_POST['periodo_pres'];
$nivel_pres=$_POST['nivel_pres'];
$inscripcion_pres=$_POST['inscripcion_pres'];


$sql1=" INSERT INTO `alum_pres`( `name_pres`, `sexo_pres`, `edad_pres`, `talla_pres`, `peso_pres`, `nacimient_pres`, `lugar_pres`, `direccion_pres`, `repre_pres`, `cedula_pres`, `civil_pres`, `parentesco_pres`, `correo_pres`, `phone_pres`, `ocupacion_pres`, `question_1`, `question_2`, `question_3`, `periodo_pres`, `nivel_pres`, `inscripcion_pres`) VALUES ('$nombre','$sexo_pres','$edad','$talla','$peso','$nacimiento','$lugar','$direccion','$repre','$cedula','$civil_r','$parentesco_r','$correo_r','$phone_r','$ocupacion_r','$alimento_pres','$palabra_pres','$panal_pres','$periodo_pres', '$nivel_pres', '$inscripcion_pres') ";
$resultado1 = $mysqli->query($sql1);




