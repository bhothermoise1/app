<?php 
require'conexion.php';
//Recibiendo los datos de los alumnos
$id=$_POST['id'];
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
$civil_pres=$_POST['civil_pres'];
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


$sql1="UPDATE `alum_pres` SET `name_pres`='$nombre',`sexo_pres`='$sexo_pres',`edad_pres`='$edad',`talla_pres`='$talla',`peso_pres`='$peso',`nacimient_pres`='$nacimiento',`lugar_pres`='$lugar',`direccion_pres`='$direccion',`repre_pres`='$repre',`cedula_pres`='$cedula',`civil_pres`='$civil_pres',`parentesco_pres`='$parentesco_r',`correo_pres`='$correo_r',`phone_pres`='$phone_r',`ocupacion_pres`='$ocupacion_r',`question_1`='$alimento_pres',`question_2`='$palabra_pres',`question_3`='$panal_pres',`periodo_pres`='$periodo_pres',`nivel_pres`='$nivel_pres',`inscripcion_pres`='$inscripcion_pres' WHERE `id_pres`='$id'";

$resultado1 = $mysqli->query($sql1);

if ($resultado1) {
	header("Location: ../vistas/msvalidar_upda_pres_secre.php");
}
 ?>
