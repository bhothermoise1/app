<?php
	
	require 'conexion.php';
 
	$id = $_GET['id'];
	
	$sql = "DELETE FROM user_secre WHERE id_user_secre='$id'";
	$resultado = $mysqli->query($sql);

	if ($resultado) {

		
		header("Location:../vistas/msvalidar_delete_secre_user.php");
	}
	
?>