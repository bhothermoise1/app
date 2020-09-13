<?php 


session_start();
require 'conexion.php';

$usuario =$_POST['usuario'];
$contraseña =$_POST['password'];

$sql=" SELECT * from usuarios where usuario='$usuario' and password='$contraseña' ";

$resultado = $mysqli->query($sql);



if (mysqli_num_rows($resultado) > 0 ){
$_SESSION['user']=$usuario;
echo '<script type="text/javascript">
    alert("Bienvenido: Usted ha iniciado como Administrador");
    window.location.href="vistas/admin.php";
    </script>';
}else{

 echo'<script type="text/javascript">
    alert("Los Datos que usted ha ingresado son incorrectos o no existen");

    window.location.href="login_vista.php";
    </script>';


}
echo $_SESSION['user'];





 ?>


 
