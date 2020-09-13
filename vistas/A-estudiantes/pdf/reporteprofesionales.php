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
Informe Pedagogico</h2> </center>

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
<center> <h1>Bolentin Estudiantil </h1></center><br>
<br>
<br>
<br>
<h3> <strong> </strong> </h3>
<p style="text-align: justify; ">


El Alumno <strong><?php echo $datos1 ['name_alum'] . '  ' . $datos1 ['apell_alum']?> </strong> titular de la Cedula de Identidad
 <strong><?php echo $datos1 ['iden_alum'] ?></strong>, natural de <strong><?php echo $datos1 ['lugar_alum'] ?></strong>, Ha sido promovido(a) al
________________________________ grado del subsistema de Eduacion Primaria de acuerdo al articulo 108 de la Reforma del Reglamento
general de la ley Organica de Educacion con  Literal ________________________________ .

 <br>
 <br>
<label class="form-group"> Observaciones </label>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Primer Lapso</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
  </div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Segundo Lapso</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Tercer Lapso</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
  </div>
<p>
  <strong>Literal A:</strong> El alumno (a) alcanzo todas las competencias y en algunos casos supero las expectativas previstas para el grado.
</p>
<p>
  <strong>Literal B:</strong> El alumno (a) alcanzo todas las competencias previstas para el grado.
</p>
<p>
  <strong>Literal C:</strong> El alumno (a) alcanzo la mayoria de las competencias previstas para el grado.
</p>
<p>
  <strong>Literal D:</strong> El alumno (a) alcanzo algunas de las competencias previstas para el grado, pero requiere de un proceso de nivelacion al inicio  del nuevo año escolar.
</p>

<p>
  <strong>Literal E:</strong> El alumno (a) no  alcanzo adquirir las competencias  minimas para ser promovido (a) al grado inmediato superior.
</p>


<br>
<br>
<P>
<strong>FIRMA DEL DIRECTOR:________________________________  </strong> 
</p>

<P>
<strong>FIRMA DEL DOCENTE:________________________________  </strong> 
</p>
<P>
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
