<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>SIAA-APP</title>

<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
 <link rel="stylesheet" type="text/css" href="../bootstrap4/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../librerias/css/alertify.css">
<link rel="stylesheet" type="text/css" href="../librerias/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="../css/loader.css">
<link rel="stylesheet" type="text/css" href="../css/login.css">

<link rel="stylesheet" type="text/css" href="../css/main.css">

</head>
<body>



<header>
<div class="container-header">
	<div class="logo-title">
		<img src="../img/school.png">
		<h2> SIAA-APP</h2>	
	</div>
	
</div>

</header>

<br><br><br><br><br><br>

	<form class="formulario-login" method="POST" action="../procesos/change_pass.php">

	<h3 class="h1">Validacion de Datos</h3>
		<div class="contenedor-login">


				<i class="fas fa-user-tie"></i>
				<input type="text" name="correo" id="correo" placeholder="Usuario" class="input-l" maxlength="10">
			</div>
			 
			<div class="input-contenedor-login">
				<i class="fas fa-palette"></i>
				<input type="password" name="q1" id="" id="Color" placeholder="Color Favorito"  class="input-l" maxlength="10">
			</div>


			<div class="input-contenedor-login">
				<i class="fas fa-paw"></i>
				<input type="password" name="q2" id="pets" placeholder="Nombre de tu mascosta"  class="input-l" maxlength="10">
			</div>
			<div class="input-contenedor-login">
				<i class="fas fa-location-arrow"></i>
				<input type="password" name="q3" id="place" placeholder="Lugar Favorito"  class="input-l" maxlength="10">
			</div>
			<br>
			<br>
			 <h3 class="h1">Nueva Contaseña</h3>
		<div class="contenedor-login">

			 

			<div class="input-contenedor-login">
			<i class="fas fa-key"></i>
				<input type="password" name="n1" id="password" placeholder=" Nueva Contraseña"  class="input-l" maxlength="10">
			</div>

			<div class="input-contenedor-login">
				<i class="fas fa-key"></i>
				<input type="password" name="n2" id="password1" placeholder="Repita La contraseña"  class="input-l" maxlength="10">
			</div>
			 
			 
			 <input type="submit" name="" id="entrar" value="Cambiar Contraseña" class="regis">

	 <a class="link" href="vista.html" style="text-decoration: none;">Iniciar Sesion</a> 
		</div>

	
</form>


	

<script src="jquery-.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>
<script src="loader.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/alertify.js"></script>

<script type="text/javascript"></script>
</body>
<footer style="margin-bottom: 0px;
margin-top: 80px;"> 
			
	Unidad Educativa Bolivariana Estadal  "Jose Luis Aristigueta"- 2020 &copy; </footer>
</html>
<script type="text/javascript">
	$(document).ready(function () {
		$('#entrar').click(function()
		{

    
   if($('#password').val() == $('#password1').val()){
alertify.alert("Espere");

}else  {
alertify.alert("Las Contraseñas no coinciden");
return false;	
}



		});
		
	});



</script>

<script type="text/javascript">
	$(document).ready(function () {
		$('#entrar').click(function()
		{

 if($('#correo').val()==""){
alertify.alert("Debe ingresar Nombre de Usuario");
return false;
}else if ($('#correo').val()=="") {

	
}     
   if($('#Color').val()==""){
alertify.alert("Debe responder todas  las preguntas de seguridad");
return false;
}else if ($('#Color').val()=="") {

	
}
 if($('#pets').val()==""){
alertify.alert("Debe responder todas  las preguntas de seguridad");
return false;
}else if ($('#pets').val()=="") {

	
}
if($('#place').val()==""){
alertify.alert("Debe responder todas  las preguntas de seguridad");
return false;
}else if ($('#place').val()=="") {

	
}




if($('#password').val()==""){
alertify.alert("Ingrese su nueva Contraseña");
return false;
}else if ($('#password').val()=="") {

	
}

if($('#password1').val()==""){
alertify.alert("Confirme su nueva Contraseña");
return false;
}else if ($('#password1').val()=="") {

	
}


		});
		
	});



</script>