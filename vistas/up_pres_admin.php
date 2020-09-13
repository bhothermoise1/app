<?php 
require 'conexion.php';

$resultado=("SELECT periodo_escolar FROM periodo_grado");
$query=$mysqli->query($resultado);


  $id = $_GET['id'];
 

  $sql1 = "SELECT * FROM alum_pres WHERE id_pres= '$id'";
    $query1=$mysqli->query($sql1);
  

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>App 2020</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
 <link rel="stylesheet" type="text/css" href="../bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/nav.css">
   <link rel="stylesheet" type="text/css" href="../css/form_step.css">
   <link rel="stylesheet" type="text/css" href="../librerias/css/alertify.css">
<link rel="stylesheet" type="text/css" href="../librerias/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="loader.css">
</head>
<body style="background-color: #339FFF; ">

<form id="regForm" action="../procesos/up_pres_secre.php" method="POST">
<div class="tab"><center> <img src="../img/toy2.png" >
    <?php while ($row = mysqli_fetch_array($query1) ){
            # code...
            ?>
</center>
   <input type="hidden" id="id" name="id" value="<?php echo $row ['id_pres']; ?>" />
 <p><input type="text" id="cod" name="nombre_p"  value="<?php echo $row ['name_pres']; ?>" placeholder="Nombres y Apellidos" oninput="this.className = ''"></p>
<p><input type="text" id="cod" name="sexo_pres"  value="<?php echo $row ['sexo_pres']; ?>" placeholder="Sexo" oninput="this.className = ''"></p>

 <p><input type="text" name="edad" value="<?php echo $row ['edad_pres']; ?>"  placeholder="Edad" oninput="this.className = ''"></p>
 <p><input  type="text" name="talla"value="<?php echo $row ['talla_pres']; ?>"  placeholder="talla" oninput="this.className = ''"></p>
 <p><input  type="text" name="peso" value="<?php echo $row ['peso_pres']; ?>"  placeholder="Peso" oninput="this.className = ''"></p>  
</div>

<div class="tab"><center> <img src="../img/baby.png" >
</center>
  <label class="input-group-lg">Fecha de Nacimiento</label>
  <p><input type="text" name="nacimiento" value="<?php echo $row ['nacimient_pres']; ?>"  placeholder="Fecha de Nacimiento" oninput="this.className = ''"></p>
  <p><input type="text" name="lugar" value="<?php echo $row ['lugar_pres']; ?>"  placeholder="Lugar de Nacimiento" oninput="this.className = ''"></p>
  <p><input  type="text" name="direccion" value="<?php echo $row ['direccion_pres']; ?>"  placeholder="Direccion" oninput="this.className = ''"></p>
</div>

<div class="tab"><center> <img src="../img/black.png" >
</center>
<label class="form-control form-control-lg">Datos del Representante </label>
  <p><input type="text" name="repre" value="<?php echo $row ['repre_pres']; ?>"  placeholder="Nombres y Apellidos" oninput="this.className = ''"></p>

  <p><input type="text" name="cedula" value="<?php echo $row ['cedula_pres']; ?>"  placeholder="Cedula " oninput="this.className = ''"></p>


  <p><input type="text" name="civil_pres" value="<?php echo $row ['civil_pres']; ?>"  placeholder="Cedula " oninput="this.className = ''"></p>
  <p><input type="text" name="parentesco_r"value="<?php echo $row ['parentesco_pres']; ?>"  placeholder="Parentesco" oninput="this.className = ''"></p>
  <p><input type="E-mail" name="correo_r" value="<?php echo $row ['correo_pres']; ?>" placeholder="E-mail" oninput="this.className = ''"></p>
  <p><input  type="number" name="phone_r" value="<?php echo $row ['phone_pres']; ?>" placeholder="Telefono" oninput="this.className = ''"></p>
  <p><input  type="text" name="ocupacion_r"value="<?php echo $row ['ocupacion_pres']; ?>" placeholder="Ocupacion" oninput="this.className = ''"></p>
</div>

<div class="tab"><center> <img src="../img/toy3.png" >
</center>
 <label class="form-control form-control-lg">Desarrollo del Niño  </label>
 <label class="form-control form-control-lg"> 1.- ¿Consume algun alimento antes de ir a preescolar?  </label>
<p> <select id="" name="alimento_pres" class="form-control form-control-lg">
    <option value="si">Si</option>
    <option value="no">No</option>

    </select></p>
<label class="form-control form-control-lg"> 2.- Edad en la empezo a decir sus primeras palabras  </label>
 <p><input type="text" name="palabra_pres" placeholder="Respuesta"  value="<?php echo $row ['question_2']; ?>" oninput="this.className = ''"></p>
<label class="form-control form-control-lg"> 3.- ¿Usa Pañal?  </label>
<p> <select id="" name="panal_pres" class="form-control form-control-lg">
    <option value="si">Si</option>
    <option value="no">No</option>

    </select></p>

</div>

<div class="tab"><center> <img src="../img/adress_student.png" >
</center>

<label class="form-control form-control-lg">Informacion Academica</label>
 <p> <select id="sexo" name="periodo_pres" class="form-control form-control-lg">
    <option value="0">Periodo Escolar</option>
     <?php while ($datos1 = mysqli_fetch_array($query) ){
            # code...
            ?>
<option value="<?php echo $datos1 ['periodo_escolar'] ?> "> <?php echo $datos1 ['periodo_escolar'] ?> </option> 
  <?php } ?>
    </select></p>

     
 <p> <select id="sexo" name="nivel_pres" class="form-control form-control-lg">
    <option value="0">Seleccione Nivel</option>
    <option value="Nivel I"> Primer Nivel</option>
    <option value="Nivel II"> Segundo Nivel </option>
    <option value="Nivel III"> Tercer Nivel </option>
    </select></p>
   <label class="form-control form-control-lg">Fecha de Inscripcion</label>
  <p><input  type="text" name="inscripcion_pres" value="<?php echo $row ['inscripcion_pres']; ?>" oninput="this.className = ''"></p>
   <?php } ?>
</div>

<div style="overflow:auto;">
  <div style="float:right;">
  

    <button type="button" id="guardarNuevo" class="btn btn-primary"   id="nextBtn" onclick="nextPrev(1)">Siguiente</button>
  </div>
    <button type="button"  class="btn btn-primary"  id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
</div>

<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
 <span class="step"></span>
</div>

</form>
<div class="container">
  <a class="btn btn-danger btn-lg" style="margin-top: -20px;"  href="secre_ico.php"> <i class="fas fa-arrow-circle-left"></i> </a>
</div>

<script type="text/javascript" src="jquery-.js"></script>
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
      y[i].className +=    alertify.alert(
                    "<center> Atencion: Todos los campos deben ser completados</center>",
                    " <img  src='../img/error.png' style='margin-left:160px;'>  ",
                );
      // and set the current valid status to false:
      valid = false;
    }
  }
  var cod = document.getElementById("cod").value;
if (cod == 1) {
  alertify.alert("No puede marcar uno"); 
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
<script type="text/javascript" src="jquery-.js"></script>
<script type="text/javascript" src="codigo.js"></script>
</body>
</html>