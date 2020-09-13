<?php
	
	require 'conexion.php';
 
	$id = $_GET['id'];
	
	$sql = "DELETE FROM alumnos WHERE id_alum = '$id'";
	$resultado = $mysqli->query($sql);

	if ($resultado) {

		header("Location: ../vistas/msvalidar_delete_admin.php");
	}
	
?>