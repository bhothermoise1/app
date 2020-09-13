<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>SIAA-APP</title>
<link rel="shortcut icon" href="img/alimento5.ico" />
<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
 <link rel="stylesheet" type="text/css" href="../bootstrap4/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../librerias/css/alertify.css">
<link rel="stylesheet" type="text/css" href="../librerias/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="../css/loader.css">
<link rel="stylesheet" type="text/css" href="../css/login.css">

<link rel="stylesheet" type="text/css" href="../css/main.css">

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
<?php 
require 'conexion.php';

$resultado=("SELECT periodo_escolar FROM periodo_grado");
$query=$mysqli->query($resultado);
 ?>

<br><br><br><br>

	<form class="formulario-login"  method="POST" action="../procesos/insert_user.php" >

	<h1 class="h1"> <img src="../img/user_admin.png"/> Registrar Nuevo Usuario</h1>
		<div class="contenedor-login">

			<div class="input-contenedor-login">
				<i class="fas fa-user-tie"></i>
				<input type="text" name="correo" id="correo" placeholder="Usuario" class="input-l" maxlength="10">
			</div>
			 

			<div class="input-contenedor-login">
				<i class="fas fa-key"></i>
				<input type="password" name="password" id="password" placeholder="Contraseña"  class="input-l" maxlength="10">
			</div>

			<div class="input-contenedor-login">
				  <select id="sexo" name="grado" class="form-control form-control-lg">
  	<option value="0"> Nivel O Grado Escolar </option>
  	<option value="Nivel I">Nivel I</option>
  	<option value="Nivel II"> Nivel II</option>
  	 <option value="Nivel II">Nivel III</option>
  	<option value="Primer Grado"> Primer Grado</option>
  	 <option value="Segundo Grado">Segundo Grado</option>
  	<option value="Tercer Grado<"> Tercer Grado</option>
  	 <option value="Cuarto Grado">Cuarto Grado</option>
  	<option value="Quinto Grado"> Quinto Grado</option>
  	 <option value="Sexto Grado">Sexto Grado</option>
  	
  </select>
			</div>

			<div class="input-contenedor-login">
 <p> <select id="sexo" name="periodo_pres" class="form-control form-control-lg">
    <option value="0">Periodo Escolar</option>
     <?php while ($datos1 = mysqli_fetch_array($query) ){
            # code...
            ?>
<option value="<?php echo $datos1 ['periodo_escolar'] ?> "> <?php echo $datos1 ['periodo_escolar'] ?> </option> 
  <?php } ?>
    </select>
			</div>
			 	 
			<button type="submit" class="regis btn btn-sm"  id="registronuevo"> Registrar</button>
		</div>

	
</form>




<div class="container">
  <a class="btn btn-danger btn-lg" style="margin-top: -20px;"  href="bus_admin_users.php"> <i class="fas fa-arrow-circle-left"></i> </a>
</div>




<script type="text/javascript" src="../bootstrap4/js/jquery-.js"></script>
<script type="text/javascript" src="../bootstrap4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../librerias/alertify.js"></script>
<script type="text/javascript" src="../librerias/validar_doc.js"></script>
<script type="text/javascript" src="../js/loader.js"></script>
<script type="text/javascript"></script>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function () {
		$('#registronuevo').click(function()
		{
        if($('#nombre').val()==""){
alertify.alert("Debes agregar el Nombre y Apellido");
return false;
}else if ($('#nombre').val()=="") {


} 
 if($('#correo').val()==""){
alertify.alert("Debe anotar el nombre de usuario");
return false;
}else if ($('#correo').val()=="") {

	
}     
   if($('#password').val()==""){
alertify.alert("Debe anotar su contraseña");
return false;
}else if ($('#password').val()=="") {

	
}   if($('#color').val()==""){
alertify.alert("Debe anotar su color Favorito");
return false;
}else if ($('#color').val()=="") {

	
}   if($('#mascota').val()==""){
alertify.alert("Debe anotar el nombre de su mascota");
return false;
}else if ($('#mascota').val()=="") {

	
}   if($('#lugar').val()==""){
alertify.alert("Debe anotar su lugar Favorito");
return false;
}else if ($('#lugar').val()=="") {

	
}  

		});
		
	});



</script>

