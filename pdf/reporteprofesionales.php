<?php ob_start(); ?>
<div>
	<img src="img/logo1.png" width="400px" >
	<br>
	<br>

</div>
<br>
<br>
<br>

<center> <h2>
Constancia de trabajo</h2> </center>

 <br>  


<?php 


require'../conexion.php';
    $id=$_GET['id'];
$consulta="SELECT * from docentes where id_doc='$id' ";
$resultado=$mysqli->query($consulta);


 while ($datos1 = mysqli_fetch_array($resultado) ){
           
       


 ?>

 <html>
 <head>
 	<title></title>
 </head>
 <body >
 
<p style="text-align: justify;">

El Director(a) de la <STRONG> Unidad Educativa Bolivariana Br. "Jose Luis Aristigueta" </STRONG>, por
medio de la presente hace constar que el (la) ciudadano (a):<strong> <?php echo $datos1 ['name_d'] .'  '. $datos1 ['apell_d'] ?> </strong> ,
titular de la Cédula de Identidad: <strong> <?php echo $datos1 ['cedu_d'] ?> </strong>, presta sus servicios en esta Institución desde
el: <strong> <?php echo $datos1 ['date_i'] ?> </strong>, como trabajador (a) desempeñando el cargo nominal de: <?php echo $datos1 ['cargo'] ?> </strong>,
cumpliendo una jornada laboral de 36 horas semanales.
</p>
<p>

Constancia que expide a peticion de la parte interesada, en fecha:  <strong> <?php 
echo " " . date("d") . " / " . date("m") . " /" . date("Y"); ?>.
 </strong>
</p>


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
$filename = "profesionales.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>
