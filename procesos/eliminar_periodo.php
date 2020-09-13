
<?php
	
	require 'conexion.php';
 
	$id = $_GET['id'];
	
	$sql = "DELETE FROM periodo_grado WHERE periodo_escolar='$id'";
	$resultado = $mysqli->query($sql);

echo $resultado;
	if ($resultado==true) {

		
	header("Location: ../vistas/msvalidar_deletep.php");
}
	
?>
