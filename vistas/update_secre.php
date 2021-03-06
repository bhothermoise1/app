<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SIAA-APP</title>
  <link rel="shortcut icon" href="img/alimento5.ico" />
  <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="stylesheet" type="text/css" href="../librerias/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="../librerias/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="../css/loader.css">
  <link rel="stylesheet" type="text/css" href="../css/login.css">

  <link rel="stylesheet" type="text/css" href="../css/main.css">

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

  <?php
  require 'conexion.php';
  $id = $_GET['id'];


  $sql1 = "SELECT * FROM user_secre WHERE id_user_secre='$id'";
  $query1 = $mysqli->query($sql1);
  ?>

  <br><br><br><br>

  <form class="formulario-login" method="POST" action="../procesos/up_user_secre.php">

    <h1 class="h1"> <img src="../img/secretary3.png" /> Actualizar Datos de la Secretaria</h1>
    <div class="contenedor-login">
      <?php while ($row = mysqli_fetch_array($query1)) {
        # code...
      ?>
        <div class="input-contenedor-login">
          <i class="fas fa-user-tie"></i>
          <input type="hidden" id="id" name="id" value="<?php echo $row['id_user_secre']; ?>" />
          <input type="text" name="correo" id="correo" value=" <?php echo $row['user_secre']; ?>  " placeholder="Usuario" class="input-l" maxlength="10">
        </div>


        <div class="input-contenedor-login">
          <i class="fas fa-key"></i>
          <input type="password" name="password" id="password" value="<?php echo $row['pass_secre']; ?>" placeholder="Contraseña" class="input-l" maxlength="10">
        </div>



      <?php } ?>
      <button type="submit" class="regis btn btn-sm" id="registronuevo">Actualizar Secretataria</button>
    </div>


  </form>



  <div class="container">
    <a class="btn btn-danger btn-lg" style="margin-top: -20px;" href="bus_user_secre.php"> <i class="fas fa-arrow-circle-left"></i> </a>
  </div>



  <script type="text/javascript" src="../bootstrap4/js/jquery-.js"></script>
  <script type="text/javascript" src="../bootstrap4/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../librerias/alertify.js"></script>
  <script type="text/javascript" src="../librerias/validar_doc.js"></script>
  <script type="text/javascript" src="../js/loader.js"></script>
  <script type="text/javascript"></script>
</body>

</html>

<script type="text/javascript">
  $(document).ready(function() {
    $('#registronuevo').click(function() {
      if ($('#correo').val() == "") {
        alertify.alert(
          "<center> Debe agregar el nombre de usuario</center>",
          " <img  src='../img/error.png' style='margin-left:160px;'>  ",
        );
        return false;
      } else if ($('#correo').val() == "") {


      }
      if ($('#password').val() == "") {
        alertify.alert(
          "<center> Debe agregar la contraseña</center>",
          " <img  src='../img/error.png' style='margin-left:160px;'>  ",
        );
        return false;
      } else if ($('#password').val() == "") {


      }


    });

  });
</script>