<?php
  require 'conexion.php';
  
  $id = $_GET['id'];
  
  $sql = "SELECT * FROM docentes WHERE id_doc = '$id'";
  $resultado = $mysqli->query($sql);
  $row = $resultado->fetch_array(MYSQLI_ASSOC);
  
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
</head>
<body style="background-color: #339FFF; ">


<form id="regForm" action="../procesos/update_teacher.php" method="POST">


<!-- One "tab" for each step in the form: -->
<div class="tab"><center> <img src="../img/id_worker.png" >
</center>

        <input type="hidden" id="id" name="id" value="<?php echo $row['id_doc']; ?>" />
        <p><input type="text" name="cod" value="<?php echo $row['cod_doc']; ?>" oninput="this.className = ''"></p>  
  <p><input type="text" name="nombre" value="<?php echo $row['name_d']; ?>" oninput="this.className = ''"></p>
  <p><input type="text" name="apellido" value="<?php echo $row['apell_d']; ?>" oninput="this.className = ''"></p>
    <p><input  type="number" name="cedula" value="<?php echo $row['cedu_d']; ?>" oninput="this.className = ''"></p>
     <p><input  type="text" name=" cargo" value="<?php echo $row['cargo']; ?>" oninput="this.className = ''"></p>
        <p> <select id="sexo" name="sexo" class="form-control form-control-lg">
    <option value="0"> Sexo </option>
    <option value="Masculino">Masculino</option>
    <option value="Femenino"> Femenino</option>
  </select></p>
    
</div>

<div class="tab"><center> <img src="../img/contact.png" >
</center>
  <p><input type="E-mail" name="correo" value="<?php echo $row['email_d']; ?>" oninput="this.className = ''"></p>
  <p><input  type="text" name="phone" value=" <?php echo $row['phone_d']; ?>" oninput="this.className = ''"></p>
  <p><input  type="text" name="direccion" value="<?php echo $row['direccion']; ?>" oninput="this.className = ''"></p>
</div>

<div class="tab"><center> <img src="../img/date.png" >
</center>
<label class="input-group-lg">Fecha de Nacimiento</label>
  <p><input type="text" name="nacimiento" value="<?php echo $row['date_n']; ?>"  oninput="this.className = ''"></p>

</div>

<div class="tab"><center> <img src="../img/kind_worker.png" >
</center>

  <label class="input-group-lg">Fecha Ingreso</label>
  <p><input type="text" name="ingreso" value="<?php echo $row['date_i']; ?>"  oninput="this.className = ''"></p>



</div>

<div style="overflow:auto;">
  <div style="float:right;">
  

    <button type="button" class="btn btn-primary"   id="nextBtn" onclick="nextPrev(1)">Siguiente</button>
  </div>
    <button type="button" class="btn btn-primary"  id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
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
  <a class="btn btn-danger btn-lg" style="margin-top: -80px;"  href="bus_pe.php"> <i class="fas fa-arrow-circle-left"></i> </a>
</div>

<script type="text/javascript" src="../bootstrap4/js/jquery.js"></script>
<script type="text/javascript" src="../bootstrap4/js/bootstrap.min.js"></script>
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
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
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

</body>
</html>