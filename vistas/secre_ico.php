<!DOCTYPE html>
<html>

<head>
	<title>SIAA-APP</title>
	<link rel="shortcut icon" href="../img/school.ico" />
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
	<!--<link rel="stylesheet" type="text/css" href="../css/barIco.css">-->
	<link rel="stylesheet" type="text/css" href="../css/nav.css">
	<link rel="stylesheet" type="text/css" href="../efecto hover/css/estilos.css">
</head>

<body style="background-color: #339FFF; ">
	<input type="checkbox" id="check">
	<label for="check">
		<i class="fas fa-bars" id="btn"></i>
		<i class="fas fa-times" id="cancel"></i>
	</label>
	<?php
  include 'includes/menu-secretaria.php';
  ?>

	<!--

	<div class="ul">
		<div class="li">
			<a class="a" href="in_ob_secre.php">
				<div class="icon">
					<i class="fas fa-child" aria-hidden="true"></i>
					<i class="fas fa-child" aria-hidden="true"></i>
					</div>
					<div class="name" data-text="Home" ><span>Primaria</span> </div>

			</a>
		</div>

		<div class="li">
			<a class="a" href="in_pres_secre.php">
				<div class="icon">
					<i class="fas fa-shapes" aria-hidden="true"  ></i>
					<i class="fas fa-shapes" aria-hidden="true"  ></i>
					</div>
				<div class="name" data-text="Home" ><span> Pre-Escolar</span> </div>

			</a>
		</div>
			<div class="li">
			<a class="a" href="bus_secre_ico.php">
				<div class="icon">
				<i class="fas fa-file-invoice" aria-hidden="true"></i>
				<i class="fas fa-file-invoice" aria-hidden="true"></i>
					</div>
				<div class="name" data-text="Home" ><span>Busqueda de Estudiantes</span> </div>

			</a>
		</div>
	-->


	<main>

		<div class="main-menu">

			<a href="in_ob_secre.php">
				<div class="option">
					<img src="../img/adress_student.png">
					<h2>Primaria </h2>
				</div>

			</a>
			<a href="in_pres_secre.php">
				<div class="option">
					<img src="../img/toy3.png">
					<h2>Pre-escolar</h2>
				</div>
			</a>
			<a href="bus_secre_ico.php">
				<div class="option">
					<img src="../img/search.png">
					<h2> Busqueda de Estudiantes</h2>
				</div>
			</a>
	</main>

	<script type="text/javascript" src="../bootstrap4/js/jquery.js"></script>


</body>

</html>