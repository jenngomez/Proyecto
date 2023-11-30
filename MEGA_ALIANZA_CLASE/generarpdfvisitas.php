<?php
include 'conexion.php';
require('fpdf186/fpdf.php');

// Recibe los datos de la URL
$Nombre_empleado = mb_strtoupper($_POST['nombre_empleado']);
$Ruta = mb_strtoupper($_POST['ruta']);

// Crear una instancia de FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Definir la plantilla (puedes personalizarla según tus necesidades)
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'Nombre del empleado:');
$pdf->Cell(60, 10, $Nombre_empleado, 1);
$pdf->Ln(20);
$pdf->Cell(40, 10, 'Ruta');
$pdf->Cell(60, 10, $Ruta, 1);

// Generar el PDF
$pdf->Output('formulario.pdf', 'D');
?>
