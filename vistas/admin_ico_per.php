<!DOCTYPE html>
<html>
<head>
	<title>SIAA-APP</title>
	<link rel="shortcut icon" href="../img/school.ico" />
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
	<!--<link rel="stylesheet" type="text/css" href="../css/barIco.css">-->
<link rel="stylesheet" type="text/css" href="../css/nav.css">
<link rel="stylesheet" type="text/css" href="loader.css">
<link rel="stylesheet" type="text/css" href="../efecto hover/css/estilos.css">
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
<!--

	<div class="ul">
		<div class="li">
			<a class="a" href="in_pro.php">
				<div class="icon">
					<i class="fas fa-chalkboard-teacher" aria-hidden="true" ></i>
						<i class="fas fa-chalkboard-teacher" aria-hidden="true" ></i>
					</div>
					<div class="name" data-text="Home" ><span>Personal </span> </div>

			</a>
		</div>

		<div class="li">
			<a class="a" href="bus_pe.php">
				<div class="icon">
					<i class="fas fa-briefcase" aria-hidden="true" ></i>
						<i class="fas fa-briefcase" aria-hidden="true" ></i>
					</div>
				<div class="name" data-text="Home" ><span> Buscar Personal </span> </div>

			</a>
		</div>
	
	-->
<main >
	
	<div class="main-menu" >
		
		<a href="in_pro.php">
			<div class="option">
				<img src="../img/kind_worker.png">
				<h2>Personal </h2>
			</div>

		</a>
		<a href="vistas/bus_pe.php">
			<div class="option">
				<img src="../img/search.png">
				<h2>Buscar Personal</h2>
			</div>
		</a>
	
</main>
		<script type="text/javascript" src="../bootstrap4/js/jquery.js"></script>

	
<script type="text/javascript" src="jquery-.js"></script>
<script type="text/javascript" src="codigo.js"></script>
<script type="text/javascript" src="../js/loader.js"></script>
</body>
</html>