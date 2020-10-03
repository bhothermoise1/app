<!DOCTYPE html>
<html>

<head>
  <title>SIAA-APP</title>

  <link rel="shortcut icon" href="../img/school.ico" />
  <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../css/barIco.css">
  <link rel="stylesheet" type="text/css" href="../css/nav.css">
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

    <?php include 'includes/menu-principal.php'; ?>
  </div>

  <div class="container-fluid m-auto">

    <img style="margin-left: 50%;

		margin-top: 20%;
		height: 50px;
" class="card-img" src="../img/manager.png" height="150px">

    <h1 style="margin-left: 47%;" class="font-italic"> Administrador</h1>



  </div>


  <script type="text/javascript" src="jquery-.js"></script>
  <script type="text/javascript" src="codigo.js"></script>
  <script type="text/javascript" src="../js/loader.js"></script>
</body>

</html>