<!DOCTYPE html>
<html>
<head>
      <title>SIAA-APP</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../img/school.ico" />
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
  <input type="checkbox"  id="check">
  <label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
  </label>
  <div class="sidebar">
   <header> <img src="../img/school.png"> My App</header> 
<ul>
<li><a href="admin.php"><i class="fas fa-home"></i>Inicio </a></li>	
<li><a href="periodo.php"><i class="fas fa-calendar-alt"></i>Perido Escolar </a></li>	

<li><a href="admin_ico_per.php"><i class="fas fa-users"></i>Personal </a></li>	

<li><a href="admin_ico.php"><i class="fas fa-school"></i>Estudiantes</a></li>	

<li><a href="admin_ico_bol.php"><i class="fas fa-file"></i>Boletines</a></li>	

<li><a href="admin_ico_chart.php"><i class="fas fa-chart-bar"></i>Estadisticas </a></li>	
<li><a href="admin_user_ico.php"><i class="fas fa-users-cog"></i> Usuarios </a></li>	
<li><a href="../Respaldo/index.php"><i class="fas fa-window-restore"></i> Respaldo </a></li>
<li><a href="../procesos/salir.php"><i class="fas fa-sign-out-alt"></i>Salir</a></li>		
</ul>
  </div>


	<div class="container">
<form action="../procesos/insert_periodo.php" method="POST">
  <div class="form-group row">
<img src="../img/date.png">
    <div class="col-sm-11">
      <input type="text" class="form-control"  name="periodo" id="input" minlength="5" maxlength="10" required pattern="[-0-9]+" placeholder="Ejemplo: 2018-2019" >
    </div>
  </div>
<!--
<div class="form-group row">

    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Primer Nivel
        </label>
      </div>
    </div>
  </div>

<div class="form-group row">

    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Segundo Nivel
        </label>
      </div>
    </div>
  </div>



<div class="form-group row">

    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Tercer Nivel
        </label>
      </div>
    </div>
  </div>

  <div class="form-group row">

    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Primer Grado
        </label>
      </div>
    </div>
  </div>

  <div class="form-group row">

    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Segundo Grado        </label>
      </div>
    </div>
  </div>


 <div class="form-group row">

    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
            Tercer Grado       </label>
      </div>
    </div>
  </div>

 <div class="form-group row">

    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
            Cuarto Grado       </label>
      </div>
    </div>
  </div>


   <div class="form-group row">

    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
            Quinto Grado       </label>
      </div>
    </div>
  </div>



   <div class="form-group row">

    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
            Sexto Grado       </label>
      </div>
    </div>
  </div>-->


   <div class="form-group row">
    <div class="col-sm">
    <button type="submit"  id="periodo" class="btn btn-success btn-lg btn-block" >Establecer Periodo Escolar</button>
    </div>
  </div>
	</div> 
		
</form>
 
<center>
	
</center>

<script type="text/javascript" src="../bootstrap4/js/jquery-.js"></script>
<script type="text/javascript" src="../bootstrap4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../librerias/alertify.js"></script>
<script type="text/javascript" src="codigo.js"></script>
<script type="text/javascript" src="../js/loader.js"></script>

 <script type="text/javascript">

  
  $(document).ready(function () {
    $('#periodo').click(function()
    {
               if($('#input').val()==""){
 alertify.alert(
                    "<center> Atencion: Todos los campos deben ser completados</center>",
                    " <img  src='../img/error.png' style='margin-left:160px;'>  ",
                );
return false;
}else if ($('input').val()=="") {


} 
 if($('#input').val()=="/^[a-zA-Z ]+$/"){
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


