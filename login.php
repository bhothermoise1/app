<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>SIAA-APP</title>
<link rel="shortcut icon" href="img/school.ico" />
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
 <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="librerias/css/alertify.css">
<link rel="stylesheet" type="text/css" href="librerias/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">
<link rel="stylesheet" type="text/css" href="css/login.css">

<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body class="hidden" style=" background:url(img/img1.jpg);
background-size: cover;
background-attachment: fixed;">

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


<header>
<div class="container-header">
	<div class="logo-title">
		<img src="img/school.png">
		<h2 style="color:white;
		padding: 1px;"> SIAA-APP </h2>	
	</div>
	
</div>

</header>
<br><br><br><br>

	<form class="formulario-login"  method="POST" action="registro_usuario.php" >

	<h1 class="h1">Registrarse</h1>
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
				<i class="fas fa-palette"></i>
				<input type="password" name="q1" id="color" placeholder=" Color Favorito"  class="input-l" maxlength="10">
			</div>

			<div class="input-contenedor-login">
		<i class="fas fa-paw"></i>
				<input type="password" name="q2" id="mascota" placeholder="Nombre de tu mascota"  class="input-l" maxlength="10">
			</div>
			<div class="input-contenedor-login">
			<i class="fas fa-location-arrow"></i>
				<input type="password" name="q3" id="lugar" placeholder="Lugar Favorito"  class="input-l" maxlength="10">
			</div>
			 
			 
			 
			<button type="submit" class="regis btn btn-sm"  id="registronuevo"> Registrarse</button>

<p class="p-login">¿ya tienes cuenta? <a class="link" href="choose_user.php" style="text-decoration: none;">Iniciar Sesion</a>  </p>
		</div>

	
</form>







<script type="text/javascript" src="bootstrap4/js/jquery-.js"></script>
<script type="text/javascript" src="bootstrap4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="librerias/alertify.js"></script>
<script type="text/javascript" src="librerias/validar_doc.js"></script>
<script type="text/javascript" src="js/loader.js"></script>
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

