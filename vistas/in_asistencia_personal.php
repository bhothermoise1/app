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


<li><a href="secre_ico_per.php"><i class="fas fa-users"></i>Personal </a></li>	

<li><a href="secre_ico.php"><i class="fas fa-school"></i>Estudiantes</a></li>	

<li><a href="#"><i class="fas fa-file"></i>Boletines</a></li>	


<li><a href=""><i class="fas fa-window-restore"></i> Asistencia</a></li>	
</ul>
	</div>


	<br>
	<br>
	<br>
	 <div class="container">
	 
<form action="../procesos/registro_asistencia.php" method="POST">
 
     <div class="form-group">
     	<center> <img src="../img/kind_worker.png" >
     		   <label for="exampleInputtext1" class="form-control form-control-lg" > Seleccione Empleado </label>
     	</center>
 
 <div class="form-group">
   <input type="text" name="personal"  id="personal" placeholder="Nombre y Apellido" class="form-control form-control-lg" >

 </div>

 <div class="form-group">
   <input type="number" name="cedula" placeholder="Introduzca Numero de Cedula" class="form-control form-control-lg" >

 </div>

 <div class="form-group">
    <label for="exampleFormControlSelect2">Asistencia</label>
    <select name="asistencia" multiple class="form-control" id="exampleFormControlSelect2">
      <option value="Asistio">Asistio</option>
      <option value="No Asistio">No Asistio</option>

    </select>
  </div>
 <div class="form-group">
   <input type="" name="fecha" class="form-control form-control-lg" readonly="" value="<?php 
 echo date("d") . " / " . date("m") . " /" . date("Y"); ?>">

 </div>

  <button type="submit" id="asistencia" class="btn btn-warning btn-lg btn-block">Registrar Asistencia </button>
</form>	
	 </div>





 <script type="text/javascript" src="jquery-.js"></script>
<script type="text/javascript" src="../bootstrap4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../datatable/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../datatable/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="../datatable/dataTables.spanish.js"></script>
<script type="text/javascript" src="../librerias/alertify.js"></script>
<script type="text/javascript" src="codigo.js"></script>

</html>


<script type="text/javascript">
  $(document).ready(function () {
    $('#asistencia').click(function()
    {
        if($('#personal').val()==""){
alertify.alert("<center> Atencion: todos los campos deben ser completados</center>",
                    " <img  src='../img/error.png' style='margin-left:160px;'>  ");
return false;
}else if ($('#personal').val()=="") {


} 

    });
    
  });



</script>


<!--<script type="text/javascript">
	

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

  
	
</script>-->

</body>
</html>


