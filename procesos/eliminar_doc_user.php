<?php
	
	require 'conexion.php';
 
	$id = $_GET['id'];
	
	$sql = "DELETE FROM user_docente WHERE id_doc_u='$id'";
	$resultado = $mysqli->query($sql);

	if ($resultado) {

		
		header("Location:../vistas/msvalidar_delete_docente_user.php");
	}
	
?>