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
<body  class="hidden" style="background-color: #339FFF; ">

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
<form id="regForm" action="../procesos/insert_work.php" method="POST">


<!-- One "tab" for each step in the form: -->
<div class="tab"><center> <img src="../img/id_worker.png" >
</center>
  <p><input type="number" id="cod"  name="cod" required pattern="[0-9]+"  minlength="3"  maxlength="13" placeholder="Codigo De Empleado" oninput="this.className = ''"></p>
  <p><input type="text" id="nombre" name="nombre" required="" minlength="3"  maxlength="13" placeholder="Nombre" oninput="this.className = ''"></p>
  <p><input type="text" id="apellido" name="apellido"  required="" minlength="3"  maxlength="13" placeholder="Apellido" oninput="this.className = ''"></p>
    <p><input  type="number" id="cedula" name="cedula"  required="" minlength="3"  maxlength="14" placeholder="Identificacion" oninput="this.className = ''"></p>
     <p><input  type="text" id="cargo" name="cargo" required="" minlength="5"  maxlength="14" placeholder="Cargo" oninput="this.className = ''"></p>
      <p> <select id="sexo" id="sexo" name="sexo"  required=""minlength="5"  maxlength="9" class="form-control form-control-lg">
    <option value="0"> Sexo </option>
    <option value="Masculino">Masculino</option>
    <option value="Femenino"> Femenino</option>
  </select></p>
    
</div>

<div class="tab"><center> <img src="../img/contact.png" >
</center>
  <p><input type="E-mail" name="correo" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength="20" placeholder="E-mail" oninput="this.className = ''"></p>
  <p><input  type="number" name="phone" maxlength="15" mplaceholder="Telefono" oninput="this.className = ''"></p>
  <p><input  type="text" name="direccion"  maxlength="20" placeholder="Direccion" oninput="this.className = ''"></p>
</div>

<div class="tab"><center> <img src="../img/date.png" >
</center>
<label class="input-group-lg">Fecha de Nacimiento</label>
  <p><input type="date" name="nacimiento"  oninput="this.className = ''"></p>

</div>

<div class="tab"><center> <img src="../img/kind_worker.png" >
</center>

  <label class="input-group-lg">Fecha Ingreso</label>
  <p><input type="date" name="ingreso" oninput="this.className = ''"></p>

</div>

<div style="overflow:auto;">
  <div style="float:right;">
  

    <button type="button" id="guardarNuevo" class="btn btn-primary"   id="nextBtn" onclick="nextPrev(1)">Siguiente</button>
  </div>
    <button type="button"  class="btn btn-primary"  id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
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
  <a class="btn btn-danger btn-lg" style="margin-top: -20px;"  href="secre_ico_per.php"> <i class="fas fa-arrow-circle-left"></i> </a>
</div>

<script type="text/javascript" src="jquery-.js"></script>
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
<script type="text/javascript">

  
  $(document).ready(function () {
    $('#guardarNuevo').click(function()
    {
               if($('#sexo').val()==0){
 alertify.alert(
                    "<center> Atencion: El compo sexo debe ser completado</center>",
                    " <img  src='../img/error.png' style='margin-left:160px;'>  ",
                );
return false;
}else if ($('sexo').val()=="") {


} 
 if($('#cod').val()==[a-zA-Z ]){
alertify.alert("Solo marque numero");
return false;

}


 if($('#rproveedor').val()==""){
alertify.alert("Introduzca el Rif del proveedor");
return false;
}else if ($('#rproveedor').val()=="") {

} 
 if($('#observacion').val()==""){
alertify.alert("El campo observacion es requerido");
return false;
}else if ($('#observacion').val()=="") {


} if($('#fecha').val()==""){
alertify.alert("Introduca la fecha de ingreso de la factura");
return false;
}else if ($('#fecha').val()=="") {


}  
  if($('#valor').val()==""){
alertify.alert("Introduca el valor total de la factura");
return false;
}else if ($('#valor').val()=="") {


}  
    });
    
  });



</script>


</body>
</html>