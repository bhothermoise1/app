<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Si existe una peticion post
	$id_docentes = $_POST['docente_id'];
	$asistio = $_POST['asistio'];
	$fecha = $_POST['fecha'];

	if ($_POST['editar']) {
		// Editamos
		foreach ($id_docentes as $clave => $id_docente) {
			$asistencia = $asistio[$clave];
			$datoUnico[] = '("' . $id_docente . '", "' . $asistencia . '", "' . $fecha . '")';
			$consulta = "UPDATE asistencia_personal SET asistencia = $asistencia WHERE id_personal_asistencia = $id_docente";
			mysqli_query($mysqli, $consulta);
		}
		// Colocale js si quieres
		echo "Editado correctamente";
	} else {
		// Agregamos
		//Obtenemos cada clave y su valor para poder contar la cantidad de datos e ingresarlos acorde a cada clave
		foreach ($id_docentes as $clave => $id_docente) {
			$asistencia = $asistio[$clave];
			$datoUnico[] = '("' . $id_docente . '", "' . $asistencia . '", "' . $fecha . '")';
			$consulta = "INSERT INTO asistencia_personal  (id_personal_asistencia, asistencia, fecha) VALUES " . implode(', ', $datoUnico);
		}
		$resConsulta = mysqli_query($mysqli, $consulta);
		//Realizamos la consulta y damos una respuesta
		if ($resConsulta) {
					// Colocale js si quieres
			echo "Registro guardado correctamente";
		}
	}
}else{
	header("Location: ../vistas/in_asistencia_personal.php");
}
