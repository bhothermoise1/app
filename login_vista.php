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
<link rel="stylesheet" type="text/css" href="loader.css">
<link rel="stylesheet" type="text/css" href="css/login.css">

<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body class="hidden" style="background-color: #33E2F7; ">

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
		<h3 style="color: white;" > SIAA-APP</h3>	
	</div>
	
</div>

</header>

<br><br><br><br><br><br>

	<form class="formulario-login" method="POST" action="login_admin.php">

	<h1 class="h1">  <img src="img/manager.png"/>  Iniciar Sesion</h1>
		<div class="contenedor-login">


			<div class="input-contenedor-login">
					<i class="fas fa-user-tie"></i>
				<input type="text" name="usuario"  id="Usuario" placeholder="Usuario" class="input-l">
			</div>
			 

			<div class="input-contenedor-login">
				<i class="fas fa-key"></i>
				<input type="password" name="password" id="contraseña" placeholder="Contraseña"  class="input-l">
			</div>
			 
			 <input type="submit" name="" id="entrar" value="Iniciar Sesion" class="regis">
<p class="p-login"> <a  style="text-decoration: none;" class="link" href="vistas/reestablecer.php">¿Has olvidado la contraseña? </a>  <a style="text-decoration: none;" class="link" href="login.php">Registrase</a>  
		</div>

	
</form>
<div class="container">
  <a class="btn btn-warning btn-lg" style="margin-top: -20px;"  href="choose_user.php"> <i class="fas fa-arrow-circle-left"></i> </a>
</div>

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
		$('#entrar').click(function()
		{

 if($('#Usuario').val()==""){
alertify.alert("<center> Atencion: Debe ingresar el usuario</center>",
                    " <img  src='img/error.png' style='margin-left:160px;'>  ",);
return false;
}else if ($('#Usuario').val()=="") {

	
}     
   if($('#contraseña').val()==""){
alertify.alert("<center> Atencion: Debe ingresar su contraseña </center>",
                    " <img  src='img/error.png' style='margin-left:160px;'>  ",);
return false;
}else if ($('#password').val()=="") {

	
}


		});
		
	});



</script>