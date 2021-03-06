<?php
require 'conexion.php';
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

			50%,
			100% {
				top: 24px;
				height: 32px;
			}
		}

		.centrado {

			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.hidden {

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
	<input type="checkbox" id="check">
	<label for="check">
		<i class="fas fa-bars" id="btn"></i>
		<i class="fas fa-times" id="cancel"></i>
	</label>
	<?php
  include 'includes/menu-secretaria.php';
  ?>





	<div class="container" style="margin-right: 10%;">
		<div class="col-sm-12">
			<br>
			<h2 style="text-align: center;"> Gestion de Secretaria <img src="../img/user_admin.png" /></h2>
			<br>
			<caption>
				<a href="in_secre_admin.php" class="btn btn-success"><i class="fas fa-plus"></i> Agregar Nuevo</a>
			</caption>

			<br>
			<br>
			<center>

				<table class="table table-responsive table-hover table-condensed table-bordered " id="tablapersonal">
					<thead class="ml-auto">
						<tr class="bg-primary">

							<td>Id</td>
							<td>Secretaria</td>
							<td>Contraseña </td>
							<td>Actualizar</td>
							<td>Eliminar</td>


						</tr>
					</thead>


					<tbody class="ml-auto">
						<?php
						$sql = "SELECT `id_user_secre`,  `user_secre`, `pass_secre`FROM `user_secre`";
						$resultado = mysqli_query($mysqli, $sql);
						while ($ver = mysqli_fetch_row($resultado)) {

							$datos = $ver[0] . "||" . $ver[1] . "||" . $ver[2] . "||";
						?>




							<tr>


								<td><?php echo $ver[0] ?></td>
								<td><?php echo $ver[1] ?></td>
								<td><?php echo $ver[2] ?></td>





								<td>
									<a href="update_secre.php?id=<?php echo $ver[0]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> </a>
								</td>

								<td><a class="btn btn-danger" href="../procesos/eliminar_secre_user.php?id=<?php echo $ver[0]; ?>" onclick=" return confirm('Estas seguro que quiere eliminar este registro ?') ; "><i class="fas fa-user-times"></i></a>

								</td>

							</tr>

						<?php }  ?>
					</tbody>
				</table>
			</center>


			<br>
			<br>
			<br>
			<div class="container">
				<a class="btn btn-danger btn-lg" style="margin-top: -20px;" href="admin_user_ico.php"> <i class="fas fa-arrow-circle-left"></i> </a>
			</div>

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
				});
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