<?php 


require 'conexion.php';

$resultado=("SELECT periodo_escolar FROM periodo_grado");
$query=$mysqli->query($resultado);



  
  $id = $_GET['id'];
 

  $sql1 = "SELECT * FROM alumnos WHERE id_alum = '$id'";
    $query1=$mysqli->query($sql1);
  
 ?>



<!DOCTYPE html>
<html>
<head>
    <title>App 2020</title>  <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
 <link rel="stylesheet" type="text/css" href="../bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/nav.css">
   <link rel="stylesheet" type="text/css" href="../css/form_step.css">
   <link rel="stylesheet" type="text/css" href="../librerias/css/alertify.css">
<link rel="stylesheet" type="text/css" href="../librerias/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="loader.css">
</head>
<body style="background-color: #339FFF; ">



<form id="regForm" action="../procesos/update_alum_secre.php" method="POST">


<!-- One "tab" for each step in the form: -->
<div class="tab"><center> <img src="../img/student_one.png" >
   <?php while ($row = mysqli_fetch_array($query1) ){
            # code...
            ?>
</center>
   <input type="hidden" id="id" name="id" value="<?php echo $row ['id_alum']; ?>" />
  <p><input type="text" name="nombre" value="<?php echo $row ['name_alum']; ?> " placeholder="Nombre" oninput="this.className = ''"></p>
  <p><input type="text" name="apellido" value="<?php echo $row ['apell_alum']; ?> "  placeholder="Apellido" oninput="this.className = ''"></p>
   <p><input type="text" name="identificacion" value="<?php echo $row ['iden_alum']; ?> "  placeholder="Identificacion" oninput="this.className = ''"></p>
 <p> <select id="sexo" name="sexo" value="<?php echo $row ['sexo_alum']; ?> "  class="form-control form-control-lg">
  	<option value="0"> Sexo </option>
  	<option value="Masculino">Masculino</option>
  	<option value="Femenino"> Femenino</option>
  </select></p>
     <p><input type="text" name="peso" value="<?php echo $row ['peso_alum']; ?> "  placeholder="Peso" oninput="this.className = ''"></p>
       <p><input type="text" name="talla" value="<?php echo $row ['talla_alum']; ?> "  placeholder="Talla" oninput="this.className = ''"></p>
</div>

<div class="tab"><center> <img src="../img/date_student.png" >
</center>
<label class="form-control form-control-lg">Fecha de Nacimiento</label>
  <p><input type="text" name="nacimiento" value="<?php echo $row ['nac_alum']; ?> "   oninput="this.className = ''"></p>

  <p><input type="text" name="lugar" value="<?php echo $row ['lugar_alum']; ?> "  placeholder="Lugar de Nacimiento" oninput="this.className = ''"></p>

  <p><input type="text" name="estado" value="<?php echo $row ['estado_alum']; ?> "  placeholder="Estado" oninput="this.className = ''"></p>

  <p><input type="text" name="nacionalidad" value="<?php echo $row ['nacionalidad_alum']; ?> "  placeholder="Nacionalidad" oninput="this.className = ''"></p>
  <p><input type="text" name="direccion" value="<?php echo $row ['direccion_alum']; ?> "  placeholder="Direccion" oninput="this.className = ''"></p>
</div>



<div class="tab"><center> <img src="../img/kind_worker.png" >
</center>
  
  <label class="form-control form-control-lg">Datos del Representante </label>
  <p><input type="text" name="madre"  value="<?php echo $row ['name_m']; ?>"  placeholder="Nombres y Apellidos" oninput="this.className = ''"></p>

  <p><input type="text" name="cedula_m"  value="<?php echo $row ['cedula_m']; ?>" placeholder="Cedula " oninput="this.className = ''"></p>

  <p> <select id="sexo" name="civil_m" class="form-control form-control-lg">
  	<option value="0">Estado Civil</option>
  	<option value="Soltero(a)">Soltero(a)</option>
  	<option value="Casado(a)"> Casado (a)</option>
  	<option value="Divorciado(a)">Divorciado (a)</option>
  	<option value="Viudo(a) ">Viudo (a)</option>
    </select></p>

  <p><input type="text" name="parentesco"  value="<?php echo $row ['parentesco_m']; ?>" placeholder="Parentesco" oninput="this.className = ''"></p>
  <p><input type="E-mail" name="correo_m"  value="<?php echo $row ['email_m']; ?>" placeholder="E-mail" oninput="this.className = ''"></p>
  <p><input  type="number" name="phone_m"  value="<?php echo $row ['telefono_m']; ?>" placeholder="Telefono" oninput="this.className = ''"></p>
  <p><input  type="text" name="ocupacion_m"  value="<?php echo $row ['ocupacion_m']; ?>" placeholder="Ocupacion" oninput="this.className = ''"></p>
</div>
  <?php } ?>


<div class="tab"><center> <img src="../img/kind_worker.png" >
</center>

<label class="form-control form-control-lg">Informacion Academica</label>
 <p> <select id="sexo" name="periodo" class="form-control form-control-lg">
  	<option value="0">Periodo Escolar</option>
  	 <?php while ($datos1 = mysqli_fetch_array($query) ){
            # code...
            ?>
<option value="<?php echo $datos1 ['periodo_escolar'] ?> "> <?php echo $datos1 ['periodo_escolar'] ?> </option> 
  <?php } ?>
    </select></p>

     
 <p> <select id="sexo" name="grado" class="form-control form-control-lg">
  	<option value="0">Grado</option>
  	<option value="Primer Grado"> Primer Grado </option>
  	<option value="Segundo Grado"> Segundo Grado </option>
  	<option value="Tercer Grado"> Tercer Grado </option>
  	<option value="Cuarto Grado"> Cuarto Grado </option>
  	<option value="Quinto Grado"> Quinto Grado </option>
  	<option value="Sexto Grado"> Sexto Grado </option>
    </select></p>
   <label class="form-control form-control-lg">Fecha de Inscripcion</label>
  <p><input  type="text" name="inscripcion"   oninput="this.className = ''"></p>
</div>

<div class="tab"><center> <img src="../img/kind_worker.png" >
</center>

<button type="submit" class="btn btn-info btn-lg btn-block"> Actualizar Informacion </button>
</div>
<br>
<br>

<div style="overflow:auto;">
  <div style="float:right;">
  

    <button type="button" id="guardarNuevo" class="btn btn-primary"   id="nextBtn" onclick="nextPrev(1)"> Siguiente </button>
  </div>
    <button type=" button"  class="btn btn-primary"  id="prevBtn" onclick="nextPrev(-1)"> Anterior</button>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
    <span class="step"></span>

    <span class="step"></span>
</div>

</form>
<div class="container">
  <a class="btn btn-danger btn-lg" style="margin-top: -80px;"  href="bus_est_secre.php"> <i class="fas fa-arrow-circle-left"></i> </a>
</div>


<script type="text/javascript" src="../bootstrap4/js/jquery-.js"></script>
<script type="text/javascript" src="../bootstrap4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../librerias/alertify.js"></script>
<script type="text/javascript" src="../librerias/validar_doc.js"></script>

<script type="text/javascript" >
  

  var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className +=   alertify.alert("Complete todos los campos");  
      // and set the current valid status to false:
      valid = false;
    }
  }
  var cod = document.getElementById("sexo").value;
if (cod == 0) {
  alertify.alert("empty"); 
   return false;
}
  
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
</script>

<script type="text/javascript" src="codigo.js"></script>
</body>
</html>