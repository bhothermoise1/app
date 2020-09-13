<?php
require'fpdf.php';

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(70,10,'Constancia de trabajo',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}



}
require'conexion.php';

 $id=$_GET['id'];
$consulta="SELECT * from docentes where id_doc='$id'";
$resultado=$mysqli->query($consulta);


$pdf = new PDF('P');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',13);


while ($row=$resultado->fetch_assoc()) {
$hola= $row['name_d'];
$hola2=$row['apell_d'];
    # code..15
$pdf->MultiCell(190,5,utf8_decode('El Director de Recursos Humanos del Instituto de Salud Pública del Estado Bolívar, por
medio de la presente hace constar que el (la) ciudadano (a):' .'   '.$hola.'  '.$hola2.'  presta sus servicios en esta Institución desde
el: 01/06/2016, como trabajador (a) desempeñando el cargo nominal de: VIGILANTE,cumpliendo una jornada laboral de 36 horas semanales.'));


}


$pdf->Output();
?>