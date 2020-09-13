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
    $this->Cell(70,10,'Reporte de Productos',0,0,'C');
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
$consulta="SELECT * from docentes";
$resultado=$mysqli->query($consulta);


$pdf = new PDF('P');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',5);


while ($row=$resultado->fetch_assoc()) {
	# code..15
$pdf->Cell(20,10,$row['id'],1,0,'C',0);
$pdf->Cell(20,10,$row['cedu_d'],1,0,'C',0);
$pdf->Cell(20,10,$row['name_d'],1,0,'C',0);
$pdf->Cell(20,10,$row['apell_d'],1,0,'C',0);
$pdf->Cell(20,10,$row['email_d'],1,0,'C',0);
$pdf->Cell(20,10,$row['phone_d'],1,0,'C',0);
$pdf->Cell(20,10,$row['direccion'],1,0,'C',0);
$pdf->Cell(20,10,$row['date_n'],1,0,'C',0);
$pdf->Cell(20,10,$row['date_i'],1,0,'C',0);
$pdf->Cell(20,10,$row['sueldo'],1,1,'C',0);


}

$pdf->Output();
?>