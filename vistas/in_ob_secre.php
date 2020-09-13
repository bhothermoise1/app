
<?php 


require 'conexion.php';

$resultado=("SELECT periodo_escolar FROM periodo_grado");
$query=$mysqli->query($resultado);
 ?>



<!DOCTYPE html>
<html>
<head>
<title>SIAA-APP</title>
<link rel="shortcut icon" href="../img/school.ico" />
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
 <link rel="stylesheet" type="text/css" href="../bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/nav.css">
   <link rel="stylesheet" type="text/css" href="../css/form_step.css">
   <link rel="stylesheet" type="text/css" href="../librerias/css/alertify.css">
<link rel="stylesheet" type="text/css" href="../librerias/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="loader.css">
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

<form id="regForm" action="../procesos/insert_teacher.php" method="POST">


<!-- One "tab" for each step in the form: -->
<div class="tab"><center> <img src="../img/student_one.png" >
</center>

  <p><input type="text" name="nombre" placeholder="Nombre" oninput="this.className = ''"></p>
  <p><input type="text" name="apellido" placeholder="Apellido" oninput="this.className = ''"></p>
   <p><input type="text" name="identificacion" placeholder="Identificacion" oninput="this.className = ''"></p>
 <p> <select id="sexo" name="sexo" class="form-control form-control-lg">
    <option value="0"> Sexo </option>
    <option value="1">Masculino</option>
    <option value="2"> Femenino</option>
  </select></p>
     <p><input type="text" name="peso" placeholder="Peso" oninput="this.className = ''"></p>
       <p><input type="text" name="talla" placeholder="Talla" oninput="this.className = ''"></p>
</div>

<div class="tab"><center> <img src="../img/date_student.png" >
</center>
<label class="form-control form-control-lg">Fecha de Nacimiento</label>
  <p><input type="date" name="nacimiento"  oninput="this.className = ''"></p>

  <p><input type="text" name="lugar" placeholder="Lugar de Nacimiento" oninput="this.className = ''"></p>

  <p><input type="text" name="estado" placeholder="Estado" oninput="this.className = ''"></p>

  <p><input type="text" name="nacionalidad" placeholder="Nacionalidad" oninput="this.className = ''"></p>
  <p><input type="text" name="direccion" placeholder="Direccion" oninput="this.className = ''"></p>
</div>

<div class="tab"><center> <img src="../img/kind_worker.png" >
</center>
  <label class="form-control form-control-lg">Datos del Representante </label>
  <p><input type="text" name="madre" placeholder="Nombres y Apellidos" oninput="this.className = ''"></p>

  <p><input type="text" name="cedula_m" placeholder="Cedula " oninput="this.className = ''"></p>

  <p> <select id="sexo" name="civil_m" class="form-control form-control-lg">
    <option value="0">Estado Civil</option>
    <option value="1">Soltera</option>
    <option value="2"> Casada</option>
    <option value="3">Divorciada</option>
    <option value="4">Viuda</option>
    </select></p>

  <p><input type="text" name="parentesco" placeholder="Parentesco" oninput="this.className = ''"></p>
  <p><input type="E-mail" name="correo_m" placeholder="E-mail" oninput="this.className = ''"></p>
  <p><input  type="number" name="phone_m" placeholder="Telefono" oninput="this.className = ''"></p>
  <p><input  type="text" name="Ocupacion_m" placeholder="Ocupacion" oninput="this.className = ''"></p>
</div>


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
    <option value="1"> Primer Grado </option>
    <option value="2"> Segundo Grado </option>
    <option value="3"> Tercer Grado </option>
    <option value="4"> Cuarto Grado </option>
    <option value="5"> Quinto Grado </option>
    <option value="6"> Sexto Grado </option>
    </select></p>
   <label class="form-control form-control-lg">Fecha de Inscripcion</label>
  <p><input  type="text" name="inscripcion"  oninput="this.className = ''"></p>
</div>

<div class="tab"><center> <img src="../img/kind_worker.png" >
</center>

<button type="submit" class="btn btn-info btn-lg btn-block"> Culminar Inscripcion </button>
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
  <a class="btn btn-danger btn-lg" style="margin-top: -80px;"  href="secre_ico.php"> <i class="fas fa-arrow-circle-left"></i> </a>
</div>


<script type="text/javascript" src="../bootstrap4/js/jquery-.js"></script>
<script type="text/javascript" src="../bootstrap4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../librerias/alertify.js"></script>
<script type="text/javascript" src="../librerias/validar_doc.js"></script>
<script type="text/javascript" src="../js/loader.js"></script>
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
<!--formulario de preescolar

<form id="regForm" action="../procesos/insert_pres.php" method="POST">


<div class="tab"><center> <img src="../img/toy2.png" >
</center>
  <p><input type="text" id="cod" name="cod" placeholder="Nombres y Apellidos" oninput="this.className = ''"></p>
     <p> <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="Sexon" id="inlineRadio1" value="Masculino">
  <label class="form-check-label" for="inlineRadio1">Masculino</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="Sexon" id="inlineRadio2" value="Femenino">
  <label class="form-check-label" for="inlineRadio2">Femenino</label>
</div></p>
    
  <p><input type="text" name="edad" placeholder="Edad" oninput="this.className = ''"></p>
 <p><input  type="text" name="talla" placeholder="talla" oninput="this.className = ''"></p>
 <p><input  type="text" name="peso" placeholder="peso" oninput="this.className = ''"></p>
      <p> <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="Sexo" id="inlineRadio1" value="Masculino">
  <label class="form-check-label" for="inlineRadio1">Masculino</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="Sexo" id="inlineRadio2" value="Femenino">
  <label class="form-check-label" for="inlineRadio2">Femenino</label>
</div></p>
    
</div>

<div class="tab"><center> <img src="../img/date.png" >
</center>
<label class="input-group-lg">Fecha de Nacimiento</label>
  <p><input type="date" name="nacimiento"  oninput="this.className = ''"></p>
   <p><input type="text" id="cod" name="lugar" placeholder="Lugar de Nacimiento" oninput="this.className = ''"></p>

</div>

<div class="tab"><center> <img src="../img/kind_worker.png" >
</center>
  <label class="form-control form-control-lg">Datos del Representante </label>
  <p><input type="text" name="madre" placeholder="Nombres y Apellidos" oninput="this.className = ''"></p>

  <p><input type="text" name="cedula_m" placeholder="Cedula " oninput="this.className = ''"></p>

  <p> <select id="sexo" name="civil_m" class="form-control form-control-lg">
    <option value="0">Estado Civil</option>
    <option value="1">Soltera</option>
    <option value="2"> Casada</option>
    <option value="3">Divorciada</option>
    <option value="4">Viuda</option>
    </select></p>

  <p><input type="text" name="parentesco" placeholder="Parentesco" oninput="this.className = ''"></p>
  <p><input type="E-mail" name="correo_m" placeholder="E-mail" oninput="this.className = ''"></p>
  <p><input  type="number" name="phone_m" placeholder="Telefono" oninput="this.className = ''"></p>
  <p><input  type="text" name="ocupacion_m" placeholder="Ocupacion" oninput="this.className = ''"></p>
</div>
<div class="tab"><center> <img src="../img/toy3.png" >
</center>
  <label class="form-control form-control-lg">Desarrollo del Niño  </label>

  <p> <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="d1" id="inlineRadio1" value="Masculino">
  <label class="form-check-label" for="inlineRadio1">Si</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="d2" id="inlineRadio2" value="Femenino">
  <label class="form-check-label" for="inlineRadio2">No</label>
</div></p>

</div>


<div class="tab"><center> <img src="../img/toy3.png" >
</center>
  <label class="form-control form-control-lg"> Informacion Academica  </label>

  <label class="form-control form-control-lg"> 1.- ¿Consume algun alimento antes de ir a preescolar?  </label>
<p> <div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="d1" id="inlineRadio1" value="Masculino">
<label class="form-check-label" for="inlineRadio1">Si</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="d2" id="inlineRadio2" value="Femenino">
  <label class="form-check-label" for="inlineRadio2">No</label>

<label class="form-control form-control-lg"> 2.- Edad en la empezo a decir sus primeras palabras  </label>
 <p><input type="text" name="" placeholder="Respuesta" oninput="this.className = ''"></p>


<label class="form-control form-control-lg"> 3.- ¿Usa?  </label>
<p> <div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="d1" id="inlineRadio1" value="Masculino">
<label class="form-check-label" for="inlineRadio1">Si</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="d2" id="inlineRadio2" value="Femenino">
<label class="form-check-label" for="inlineRadio2">No</label>


</div></p>

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
  <span class="step"></span>
</div>

</form>
-->