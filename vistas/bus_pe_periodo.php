<?php 
require'conexion.php';
 ?>
 <!DOCTYPE html>
<html>
<head>
    <title>App 2020</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
 <link rel="stylesheet" type="text/css" href="../bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/nav.css">
  <link rel="stylesheet" type="text/css" href="../datatable/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="loader.css">
  <link rel="stylesheet" type="text/css" href="../librerias/css/alertify.css">
</head>

<body style="background-color: #339FFF; ">
	<input type="checkbox"  id="check">
	<label for="check">
		<i class="fas fa-bars" id="btn"></i>
		<i class="fas fa-times" id="cancel"></i>
	</label>
	<div class="sidebar">
	 <header> <img src="../img/school.png"> My App</header> 
<ul>

<li><a href="periodo.php"><i class="fas fa-calendar-alt"></i>Perido Escolar </a></li>	

<li><a href="admin_ico_per.php"><i class="fas fa-users"></i>Personal </a></li>	

<li><a href="admin_ico.php"><i class="fas fa-school"></i>Estudiantes</a></li>	

<li><a href="#"><i class="fas fa-file"></i>Boletines</a></li>	

<li><a href=""><i class="fas fa-chart-bar"></i>Estadisticas </a></li>	

<li><a href="../Respaldo/index.php"><i class="fas fa-window-restore"></i> Respaldo </a></li>	
</ul>
	</div>




<div class="container" style="margin-right: 10%;">
	<div class="col-sm-12" >
		<br>
		<h2 style="text-align: center;"><img src="../img/date.png"> Lista de Periodos Escolares 
		<br>

<br>
<br>
<center>
	
	<table class="table table-responsive table-hover table-condensed table-bordered " id="tablapersonal"
	 >
			<thead class="ml-auto"  >
			<tr class="bg-warning">
<td>Peridodo Escolar </td>		
<td>Editar</td>
<td>Eliminar</td>
			</tr>	
			</thead>

			
<tbody  class="ml-auto" >
			<?php 
			$sql="SELECT periodo_escolar FROM periodo_grado";
			$resultado= mysqli_query($mysqli,$sql);
			while ($ver=mysqli_fetch_row($resultado)) {
				
			$datos=$ver[0]."||";
			 ?>

			 
			

			<tr>
				
				<td><?php echo $ver[0]?></td>
				<td>
				<a href="#"  class="btn btn-warning" ><i class="fas fa-pencil-alt"></i> </a> 
				</td>
				
				<td><a class="btn btn-danger" href="../procesos/eliminar_periodo.php?id=<?php echo $ver[0]; ?>"  onclick=" return confirm('Estas seguro que quiere eliminar este registro ?') ; "><i class="fas fa-user-times" 
				></i></a>  
		           
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
  <a class="btn btn-danger btn-lg" style="margin-top: -20px;"  href="bus_pres_admin_ico.php"> <i class="fas fa-arrow-circle-left"></i> </a>
</div>

 <script type="text/javascript" src="jquery-.js"></script>
<script type="text/javascript" src="../bootstrap4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../datatable/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../datatable/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="../datatable/dataTables.spanish.js"></script>
<script type="text/javascript" src="../librerias/alertify.js"></script>
<script type="text/javascript" src="codigo.js"></script>

<script type="text/javascript">
	

	$(document).ready(function() {
    $('#tablapersonal').DataTable();
} );
</script>
<script type="text/javascript">
		function pila() {

 alertify.confirm(
                    "<center>¿ Desea eliminar registro? </center>",
                    " <img  src='../img/successful2.png' style='margin-left:160px;'>  ",
                    return false
                );

  
	
</script>

</body>
</html>