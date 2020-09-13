
<?php
	
	require 'conexion.php';
 
	$id = $_GET['id'];
	
	$sql = "DELETE FROM docentes WHERE id_doc = '$id'";
	$resultado = $mysqli->query($sql);
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/alertify.css">
<link rel="stylesheet" type="text/css" href="css/themes/default.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="css/formulario.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">
 
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
					<script type="text/javascript">
							alert('Registro Eliminado');
						
                          window.location.replace('bus_pe.php'); 
			
						</script>
					<?php }  ?>
			
				
				<a href="bus_pe.php" class="btn btn-primary">Regresar</a>
				
				</div>
			</div>
		</div>
<script src="form.js"></script>
<script src="jquery-.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>
<script src="loader.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/alertify.js"></script>
</body>



</html>