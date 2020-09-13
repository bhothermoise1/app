<?php 
require'conexion.php';
//Recibiendo los datos de los alumnos
$id=$_POST['id'];
$correo=$_POST['correo'];
$pass=$_POST['password'];
$grado=$_POST['grado'];
$periodo=$_POST['periodo'];





$sql1= "UPDATE user_docente SET correo ='$correo',pass='$pass', grado='$grado', periodo='$periodo' WHERE id_doc_u='$id' ";
$resultado2 = $mysqli->query($sql1);
	if ($resultado2) {
header("Location: ../vistas/msvalidar_up_user_admin.php");

	}
else
 {
	echo "Los datos que usted ha ingresado son incorrectos,verifique contraseña de administrador e intente nuevamente";
}



 ?>