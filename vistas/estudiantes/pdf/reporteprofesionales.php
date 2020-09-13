<?php ob_start(); ?>
<div>
	<img src="img/school.png" >
	<br>
	<br>

</div>
<br>
<br>
<br>
<center> <h2>Unidad Educativa Bolivariana Br. "Jose Luis Aristiguieta"</h2> </center>
<br>
<br>
<br>
<center> <h2>
Constancia de Inscripcion</h2> </center>

 <br>  


<?php 


require'conexion.php';
    $id=$_GET['id'];
$consulta="SELECT * from alumnos where id_alum='$id' ";

$resultado=$mysqli->query($consulta);


 while ($datos1 = mysqli_fetch_array($resultado) ){
           
       

 ?>

 <html>
 <head>
 	<title></title>
 </head>
 <body >

<center> <h3>Datos del Estudiante <img src="img/user-m.png"></h3></center>
<center>
  <table style="  
    margin: 0 auto !important;
    border: solid 1px blue;
    width: 100%;">

  <tr style="   
    margin: 0 auto !important;">
  <td ><strong>Nombre:</strong> <?php echo $datos1 ['name_alum'] ?> </td>
 <td><STRONG>Apellido:  </STRONG> <?php echo $datos1 ['apell_alum'] ?></td>
<td><STRONG>Idenficacion:  </STRONG> <?php echo $datos1 ['iden_alum'] ?> </td>
<td><strong>sexo: </strong> <?php echo $datos1 ['sexo_alum'] ?> </td>
  <td><strong>Peso:   </strong>  <?php echo $datos1 ['peso_alum'] ?> </td>
  <td><strong> talla: </strong> <?php echo $datos1 ['talla_alum'] ?> </td><

  </tr>

  <tr>

    <td><strong> Nacimiento </strong>  <?php echo $datos1 ['nac_alum'] ?></td><br>
    <td> <strong>Lugar de Nacimiento: </strong>  </td><?php echo $datos1 ['lugar_alum'] ?></td>
    <td> <strong> Estado de Nacimiento: </strong>  <?php echo $datos1 ['estado_alum'] ?></td>
        <td><strong> Nacionalidad: </strong>  <?php echo $datos1 ['nacionalidad_alum'] ?></td>
            <td><strong>Direccion: </strong> <?php echo $datos1 ['direccion_alum'] ?></td><


  </tr>

</table>

</center>




<center> <h3>Datos del Representante <img src="img/parents.png"></h3></center>
<center>
  <table style="  
    margin: 0 auto !important;
    border: solid 1px blue;
    width: 100%">

  <tr style="   
    margin: 0 auto !important;">
  <td ><strong>Nombre y Apellido:</strong> <?php echo $datos1 ['name_m'] ?> </td>
 <td><STRONG>Cedula:  </STRONG> <?php echo $datos1 ['cedula_m'] ?></td>
<td><STRONG>Estado Civil:  </STRONG> <?php echo $datos1 ['civil_m'] ?> </td>
<td><strong>Parentesco: </strong> <?php echo $datos1 ['parentesco_m'] ?> </td>
  <td><strong>Correo:   </strong>  <?php echo $datos1 ['email_m'] ?> </td>
  <td><strong> telefono: </strong> <?php echo $datos1 ['telefono_m'] ?> </td>

  </tr>

  <tr>
  <td><strong> Ocupacion: </strong>  <?php echo $datos1 ['ocupacion_m'] ?></td>
  
  </tr>

</table>

</center>

<center> <h3>Datos Academicos <img src="img/date_student.png"></h3></center>
<center>
  <table style="  
    margin: 0 auto !important;
    border: solid 1px blue;
    width: 100%;">

  <tr style="   
    margin: 0 auto !important;">
  <td ><strong>Periodo Escolar: </strong> <?php echo $datos1 ['periodo_es'] ?> </td>
 <td><STRONG>Grado Escolar:  </STRONG> <?php echo $datos1 ['grado_es'] ?></td>
<td><STRONG>Fecha de Inscripcion:  </STRONG> <?php echo $datos1 ['inscripcion_es'] ?> </td>

  </tr>

</table>
<br>
<br>
<br>
<h3> <strong> NORMATIVA DE LA INSTITUCION </strong> </h3>
<p style="text-align: justify; ">

<strong>A) </strong>EL HORARIO DE CLASES PARA INICIAL  y BASICA SERA COMPRENDIDO ENTRE LAS 7:00 AM Y 12:00 PM, ºPOR LO QUE SE DEBE CUMPLIR CON EL HORARIO ESTABLECIDO.<br>
<strong>B) </strong> EL REPRESENTANTE DEBE RESPONDER CIVILMENTE POR LOS DAÑOS O DETERIOROS QUE OCASIONEN SU REPRESENTADO EN EL LOCAL MOBILIARIO O CUALQUIER OTRO MATERIAL DE LA UNIDAD EDUCATIVA.<br>
<strong>C) </strong> SE PROHIBE LA ENTRADA A LA INSTITUCION EN SHORES, DESCOTES, LICRAS, CHANCLETLAS, MINIFALDAS. <br>
<strong> D </strong> LOS PADRES DEBEN PARTICIPAR ACTIVAMENTE EN EL PROCESO EDUCATIVO DE SUS HIJOS. (ASAMBLEAS DE PADRES Y REPRESENTANTES).<br>

 ME COMPROMETO A CUMPLIR CON LAS NORMAS ESTABLECIDAS EN LA INSTITUCION.<br>

 <br>
 <br>
 <br>

<strong>FIRMA DEL REPRESENTANTE:________________________________  </strong> 
</p>
</center>

 </body>
 </html>


	


 
<?php }  ?>


<?php
require_once '../pdf/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "estudiante.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>
