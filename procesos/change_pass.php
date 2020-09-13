<?php
require 'conexion.php';


$correo =$_POST['correo'];
$q1 =$_POST['q1'];

$q2 =$_POST['q2'];
$q3 =$_POST['q3'];


$n1= $_POST['n1'];

$sql1=" SELECT lock1 ,lock2 , lock3,  usuario  from usuarios where   lock1 = '$q1' and  lock2 = '$q2' and lock3 ='$q3' and  usuario ='$correo' ";
$resultado1 = $mysqli->query($sql1);

  if (mysqli_fetch_array($resultado1) > 0) {

$sql="  UPDATE  usuarios  set  password ='$n1' where usuario='$correo' ";

 $resultado = $mysqli->query($sql);
   echo " <script >
							alert('Clave cambiada exitosamente')
						
                          window.location.replace('../login_vista.php'); 
			
						</script> ";
  } else{
  	echo " <script >
							alert('Los datos Ingresados son Incorrectos')
						
                          window.location.replace('reestablecer.php'); 
			
						</script> "; 
  }


 ?>

