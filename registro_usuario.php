<?php
require 'conexion.php';

$correo =$_POST['correo'];
$contraseña =$_POST['password'];
$q1 =$_POST['q1'];
$q2 =$_POST['q2'];
$q3 =$_POST['q3'];


$sql1=" SELECT usuario from usuarios where  usuario ='$correo' ";
$resultado1 = $mysqli->query($sql1);

  if (mysqli_fetch_array ($resultado1) > 0 ) {

	echo " <script >
							alertify.alert('Este usuario ya ha sido registrado')
						
                          window.location.replace('login.php'); 
			
						</script> "; 
  	
  } else{
  	$sql=" INSERT INTO  usuarios ( usuario, password, lock1, lock2, lock3) VALUES ('$correo','$contraseña', '$q1','$q2','$q3') ";

  $resultado = $mysqli->query($sql);

  }
if ($resultado1) {

	header("Location: vistas/msvalidar_regist_admin.php");
	
	# code...
}
