<?php
$fechaHoy = date('Y-m-d');
require 'conexion.php';


$sql = "SELECT * FROM asistencia_personal LEFT JOIN docentes 
ON asistencia_personal.id_personal_asistencia = docentes.id_doc WHERE asistencia_personal.fecha = '$fechaHoy'";
$editar= 1;
$docentes = mysqli_query($mysqli, $sql);

if( $docentes->num_rows === 0 ){
  // Mostramos todos los docentes ya que no hay registros previos el dia de hoy
  $sql = "SELECT * FROM docentes";
  $docentes = mysqli_query($mysqli, $sql);
  $editar = 0;
}

$docentes = $docentes->fetch_all(MYSQLI_ASSOC);

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

<body style="background-color: #339FFF; ">
  <input type="checkbox" id="check">
  <label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
  </label>
  <?php
  include 'includes/menu-secretaria.php';
  ?>

  <br>
  <br>
  <br>
  <div class="container">

    <form action="../procesos/registro_asistencia.php" method="POST">
    <input type="text" value="<?php echo $editar?>" name="editar" hidden>

      <div class="form-group">
        <center> <img src="../img/kind_worker.png">
          <label for="exampleInputtext1" class="form-control form-control-lg"> Registro de asistencias diarias de trabajadores </label>
        </center>



        <div class="form-group">
          <input type="date" name="fecha" class="form-control form-control-lg" readonly value="<?php echo $fechaHoy; ?>">

        </div>

        <button type="submit" id="asistencia" class="btn btn-warning btn-sm btn-block">Registrar Asistencia </button>
      </div>

      <div class="card mb-5">
        <table class="table">
          <thead>
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Cargo</th>
            <th>Asistencia</th>
          </thead>
          <tbody>
            <?php
            foreach ($docentes as $docente) {
              echo "<tr>";
              echo '<td>' . $docente['name_d'] . ' ' . $docente['apell_d'] . '</td>';
              echo '<td>' . $docente['cedu_d'] . '</td>';
              echo '<td>' . $docente['cargo'] . '</td>';
              echo "<td><select name='asistio[]' id=''>
              <option value='0'>No Asistio</option>
              <option value='1' ";
              if(isset($docente['asistencia']) && $docente['asistencia'] == 1){ echo 'selected';}
              echo ">Asistio</option>
              </select>
              <input type='hidden' value=" . $docente['id_doc'] . " name='docente_id[]'>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </form>


    <script type="text/javascript" src="jquery-.js"></script>
    <script type="text/javascript" src="../bootstrap4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../datatable/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../datatable/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="../datatable/dataTables.spanish.js"></script>
    <script type="text/javascript" src="../librerias/alertify.js"></script>
    <script type="text/javascript" src="codigo.js"></script>

</html>


<script type="text/javascript">
  $(document).ready(function() {
    $('#asistencia').click(function() {
      if ($('#personal').val() == "") {
        alertify.alert("<center> Atencion: todos los campos deben ser completados</center>",
          " <img  src='../img/error.png' style='margin-left:160px;'>  ");
        return false;
      } else if ($('#personal').val() == "") {


      }

    });

  });
</script>


<!--<script type="text/javascript">
	

	$(document).ready(function() {
    $('#tablapersonal').DataTable();
} );
</script>
<script type="text/javascript">
		function pila() {

 alertify.confirm(
                    "<center>¿ Desea eliminar registro? </center>",
                    " <img  src='../img/successful2.png' style='margin-left:160px;'>  ",
                    return false
                );

  
	
</script>-->

</body>

</html>