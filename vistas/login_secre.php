<?php 


session_start();
require 'conexion.php';

$usuario =$_POST['usuario'];
$contraseña =$_POST['password'];

$sql=" SELECT * from user_secre where user_secre='$usuario' and pass_secre='$contraseña' ";

$resultado = $mysqli->query($sql);



if (mysqli_num_rows($resultado) > 0 ){
$_SESSION['user']=$usuario;
echo '<script type="text/javascript">
    alert("Bienvenido: Usted ha iniciado sesion como secretaria");
    window.location.href="secre.php";
    </script>';
}else{

 echo'<script type="text/javascript">
    alert("Los Datos que usted ha ingresado son incorrectos o no existen");

    window.location.href="secre_vista.php";
    </script>';


}
echo $_SESSION['user'];





 ?>
