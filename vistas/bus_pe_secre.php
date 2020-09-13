<?php 
require'conexion.php';
 ?>
 <!DOCTYPE html>
<html>
<head>
 <title>SIAA-APP</title>
<link rel="shortcut icon" href="../img/school.ico" />
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
	 <header> <img src="../img/school.png"></header> 
<ul>

<li><a href="secre.php"><i class="fas fa-home"></i>Inicio </a></li>	
<li><a href="secre_ico_per.php"><i class="fas fa-users"></i>Personal </a></li>	
<li><a href="secre_ico.php"><i class="fas fa-school"></i>Estudiantes</a></li>	
<li><a href="#"><i class="fas fa-file"></i>Boletines</a></li>	
<li><a href="in_asistencia_personal.php"><i class="fas fa-window-restore"></i> Asistencia</a></li>	
<li><a href="../procesos/salir_secre.php"><i class="fas fa-sign-out-alt"></i>Salir</a></li>

</ul>
	</div>


<div class="container" style="margin-right: 10%;">
	<div class="col-sm-12" >
		<br>
		<h2 style="text-align: center;"><img src="../img/id_worker.png"/> Lista de Empleados <img src="../img/teacher1.png"/><img src="../img/teacher2.png"/></h2>
		<br>
<caption>
<a href="in_pro_secre.php" class="btn btn-success"><i class="fas fa-plus"></i> Agregar Nuevo</a>
</caption> 

<br>
<br>
<center>
	
	<table class="table  table-hover table-condensed table-bordered " id="tablapersonal"
	 >
			<thead class="ml-auto"  >
			<tr class="bg-primary">

			<td>Id</td>
			<td>Codigo </td>
				<td>Nombre </td>
				<td>Apellido</td>
				<td>Cedula</td>
						<td>Cargo</td>
				<td>Correo</td>
				<td>telefono</td>
			
				<td>Constancia</td>

				<td>Editar</td>
					<td>Eliminar</td>


			</tr>	
			</thead>

			
<tbody  class="ml-auto" >
			<?php 
			$sql="SELECT `id_doc`,  `cod_doc`, `name_d`, `apell_d`,`cedu_d`,`cargo`, `email_d`, `phone_d` FROM `docentes`";
			$resultado= mysqli_query($mysqli,$sql);
			while ($ver=mysqli_fetch_row($resultado)) {
				
			$datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5]."||".$ver[6]."||".$ver[7]."||";
			 ?>

			 
			

			<tr>
				
	
				<td><?php echo $ver[0]?></td>
			    <td><?php echo $ver[1]?></td>
			     <td><?php echo $ver[2]?></td>
			       <td><?php echo $ver[3]?></td>
			       <td><?php echo $ver[4]?></td>
			    <td><?php echo $ver[5]?></td>
			     <td><?php echo $ver[6]?></td>
			        <td><?php echo $ver[7]?></td>
			        <td>
				<a href="../pdf/reporteprofesionales.php?id=<?php echo $ver[0]; ?>"  class="btn btn-success" ><i class="far fa-file-pdf"></i></a> 
				</td>
				<td>
				<a href="upd_pro.php?id=<?php echo $ver[0]; ?>"  class="btn btn-warning" ><i class="fas fa-pencil-alt"></i> </a> 
				</td>
				
				<td><a class="btn btn-danger" href="eliminar.php?id=<?php echo $ver[0]; ?>" onclick=" return pila();"><i class="fas fa-user-times" 
				></i></a>  
		           
				</td>

			</tr>
			
<?php }  ?>
</tbody>
		</table>
</center>	




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


