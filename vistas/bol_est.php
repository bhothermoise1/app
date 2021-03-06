<?php 
require'conexion.php';
 ?>
 <!DOCTYPE html>
<html>
<head>
    <title>SIAA-APP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
 <link rel="stylesheet" type="text/css" href="../bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/nav.css">
  <link rel="stylesheet" type="text/css" href="../datatable/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="loader.css">
  <link rel="stylesheet" type="text/css" href="../librerias/css/alertify.css">
</head>
<body class="hidden" style="background-color: #339FFF; ">

	   <style type="text/css">
  
  .lds-facebook {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-facebook div {
  display: inline-block;
  position: absolute;
  left: 8px;
  width: 16px;
  background: blue;
  animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
}
.lds-facebook div:nth-child(1) {
  left: 8px;
  animation-delay: -0.50s;
}
.lds-facebook div:nth-child(2) {
  left: 32px;
  animation-delay: -0.24s;
}
.lds-facebook div:nth-child(3) {
  left: 56px;
  animation-delay: 0;
}
@keyframes lds-facebook {
  0% {
    top: 8px;
    height: 64px;
  }
  50%, 100% {
    top: 24px;
    height: 32px;
  }
}

.centrado{

  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.hidden{

  overflow: hidden;
}
</style>
<div class="centrado" id="onload">
  
<div class="lds-facebook">
<div></div>
<div></div>
<div></div>
</div>
</div>
	<input type="checkbox"  id="check">
	<label for="check">
		<i class="fas fa-bars" id="btn"></i>
		<i class="fas fa-times" id="cancel"></i>
	</label>
	<div class="sidebar">
	 <header> <img src="../img/school.png"> My App</header> 
<ul>
<li><a href="admin.php"><i class="fas fa-home"></i>Inicio </a></li>	
<li><a href="periodo.php"><i class="fas fa-calendar-alt"></i>Perido Escolar </a></li>	

<li><a href="admin_ico_per.php"><i class="fas fa-users"></i>Personal </a></li>	

<li><a href="admin_ico.php"><i class="fas fa-school"></i>Estudiantes</a></li>	

<li><a href="admin_ico_bol.php"><i class="fas fa-file"></i>Boletines</a></li>	

<li><a href="admin_ico_chart.php"><i class="fas fa-chart-bar"></i>Estadisticas </a></li>	
<li><a href="admin_user_ico.php"><i class="fas fa-users-cog"></i> Usuarios </a></li>	
<li><a href="../Respaldo/index.php"><i class="fas fa-window-restore"></i> Respaldo </a></li>
<li><a href="../procesos/salir.php"><i class="fas fa-sign-out-alt"></i>Salir</a></li>		
</ul>
	</div>


<div class="container" style="margin-right: 10%;">
	<div class="col-sm-12" >
		<br>
		<h2 style="text-align: center;"><img src="../img/id_worker.png"/> Generar Boletines  <img src="../img/teacher1.png"/><img src="../img/teacher2.png"/></h2>
		<br>
<br>
<br>
<center>
	
	<table class="table table-responsive table-hover table-condensed table-bordered " id="tablapersonal"
	 >
			<thead class="ml-auto"  >
			<tr class="bg-primary">

			<td>Id</td>
				<td>Nombre </td>
				<td>Apellido</td>
				<td>Cedula</td>
				<td>Sexo</td>
				<td>Periodo </td>
				<td>Grado</td>
				<td>Boletin Escolar</td>
	



			</tr>	
			</thead>

			
<tbody  class="ml-auto" >
			<?php 
			$sql="SELECT `id_alum`,  `name_alum`, `apell_alum`,`iden_alum`, `sexo_alum`,`periodo_es`,`grado_es` FROM `alumnos`";
			$resultado= mysqli_query($mysqli,$sql);
			while ($ver=mysqli_fetch_row($resultado)) {
				
			$datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5]."||".$ver[6]."||";
			 ?>

			 
			

			<tr>
				
	
				<td><?php echo $ver[0]?></td>
			    <td><?php echo $ver[1]?></td>
			     <td><?php echo $ver[2]?></td>
			       <td><?php echo $ver[3]?></td>
			       <td><?php echo $ver[4]?></td>
			    <td><?php echo $ver[5]?></td>
			     <td><?php echo $ver[6]?></td>
			     
			        <td>
				<a href="A-estudiantes/pdf/reporteprofesionales.php?id=<?php echo $ver[0]; ?>"  class="btn btn-success" ><i class="far fa-file-pdf"></i></a> 
				</td>

			</tr>
			
<?php }  ?>
</tbody>
		</table>
</center>	
<br>
<br>
<br>
<div class="container">
  <a class="btn btn-danger btn-lg" style="margin-top: -20px;"  href="admin_ico_bol.php"> <i class="fas fa-arrow-circle-left"></i> </a>
</div>

<script type="text/javascript" src="jquery-.js"></script>
<script type="text/javascript" src="../bootstrap4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../datatable/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../datatable/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="../datatable/dataTables.spanish.js"></script>
<script type="text/javascript" src="../librerias/alertify.js"></script>
<script type="text/javascript" src="codigo.js"></script>
<script type="text/javascript" src="../js/loader.js"></script>
<script type="text/javascript">
	

	$(document).ready(function() {
    $('#tablapersonal').DataTable();
} );
</script>
</body>
</html>