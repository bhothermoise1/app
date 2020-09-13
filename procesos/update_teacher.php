<?php 
require'conexion.php';
    $id=$_POST['id'];
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


	$sql1=" UPDATE docentes SET  cod_doc='$cod', name_d='$nombre',apell_d='$apellido', cedu_d='$cedula',cargo='$cargo',email_d='$correo',phone_d='$phone',direccion='$direccion', date_n='$nacimiento', date_i='$ingreso', sexo_work ='$sexo' WHERE id_doc='$id'";


  $resultado1 = $mysqli->query($sql1);

if ($sql1) {
	
	header('location:../vistas/msvalidar_up_teacher.php');
}

 ?>


 