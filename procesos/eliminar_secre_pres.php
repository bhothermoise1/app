<?php
	
	require 'conexion.php';
 
	$id = $_GET['id'];
	
	$sql = "DELETE FROM alum_pres WHERE id_pres='$id'";
	$resultado = $mysqli->query($sql);

	if ($resultado) {

		
		header("Location:../vistas/msvalidar_delete_secre.php");
	}
	
?>