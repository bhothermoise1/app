<?php 
require'conexion.php';
//Recibiendo los datos de los alumnos
$id=$_POST['id'];
$correo=$_POST['correo'];
$pass=$_POST['password'];
$passA=$_POST['passA'];


$sql= " SELECT * FROM usuarios where password='$passA' ";
$resultado = $mysqli->query($sql);
if ($resultado) {

$sql1= "UPDATE user_secre SET user_secre ='$correo', pass_secre ='$pass' WHERE id_user_secre='$id' ";
$resultado2 = $mysqli->query($sql1);
	if ($resultado2) {
header("Location: ../vistas/bus_user_secre.php");

	}
}else
 {
	echo "Los datos que usted ha ingresado son incorrectos,verifique contraseña de administrador e intente nuevamente";
}



 ?>