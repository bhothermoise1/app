<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>SIAA-APP</title>
<link rel="stylesheet" type="text/css" href="loader.css">
<link rel="stylesheet" type="text/css" href="efecto hover/css/estilos.css">
</head>
<body class="hidden" style="background-color:#33A7F7;">

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


<br><br><br><br><br><br>



<main>
	<h1 class="title"> Elegir tipo de Usurario</h1>
	<div class="main-menu">
		
		<a href="login_vista.php">
			<div class="option">
				<img src="img/manager.png">
				<h2>Administrador </h2>
			</div>

		</a>
		<a href="vistas/secre_vista.php">
			<div class="option">
				<img src="img/secretary3.png">
				<h2>Secretaria </h2>
			</div>
		</a>
		<a href="login.php">
			<div class="option">
				<img src="img/go_back1.png">
				<h2>Regresar </h2>
			</div>
		</a>

		
	</div>
</main>


<script type="text/javascript" src="bootstrap4/js/jquery-.js"></script>
<script type="text/javascript" src="js/loader.js"></script>
</body>
</html>