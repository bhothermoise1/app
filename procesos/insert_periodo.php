<?php 
require'conexion.php';

	$periodo=$_POST['periodo'];

	$sql1=" INSERT INTO periodo_grado (periodo_escolar) VALUES ('$periodo') ";


  $resultado1 = $mysqli->query($sql1);





if ($resultado1) {
	
	header("Location: ../vistas/msvalidar_periodo.php");
}
 ?>
