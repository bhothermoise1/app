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
			<a class="a" href="in_pro_secre.php">
				<div class="icon">
			           <i class="fas fa-users" aria-hidden="true"></i>
						<i class="fas fa-users" aria-hidden="true"></i>
					</div>
					<div class="name" data-text="Home" ><span>Personal </span> </div>

			</a>
		</div>

		<div class="li">
			<a class="a" href="bus_pe_secre.php">
				<div class="icon">
			           <i class="fas fa-chalkboard" aria-hidden="true" ></i>
						<i class="fas fa-chalkboard" aria-hidden="true" ></i>
					</div>
				<div class="name" data-text="Home" ><span> Buscar Personal </span> </div>

			</a>
		</div> -->


	<main>

		<div class="main-menu">

			<a href="in_pro_secre.php">
				<div class="option">
					<img src="../img/kind_worker.png">
					<h2>Personal </h2>
				</div>

			</a>
			<a href="bus_pe_secre.php">
				<div class="option">
					<img src="../img/search.png">
					<h2>Buscar Personal</h2>
				</div>
			</a>

	</main>

	<script type="text/javascript" src="../bootstrap4/js/jquery.js"></script>


</body>

</html>