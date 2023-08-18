<?php 

require("fpdf186/fpdf.php");

$pdf = new FPDF("P", "mm", "A4");
$pdf->AddPage();
$pdf->SetFont("Helvetica", "", 14);
$pdf->Cell(0, 12, "Data Mahasiswa", 1, 1, "C");

$pdf->Cell(30, 12, "No.", 1, 0);
$pdf->Cell(45, 12, "NIM", 1, 0);
$pdf->Cell(45, 12, "Nama", 1, 0);
$pdf->Cell(70, 12, "Prodi", 1, 1);

$pdf->Cell(30, 12, "1", 1, 0);
$pdf->Cell(45, 12, "001", 1, 0);
$pdf->Cell(45, 12, "John Thor", 1, 0);
$pdf->Cell(70, 12, "Informatika", 1, 1);

$pdf->Cell(30, 12, "2", 1, 0);
$pdf->Cell(45, 12, "002", 1, 0);
$pdf->Cell(45, 12, "John Wick", 1, 0);
$pdf->Cell(70, 12, "Sistem Informasi", 1, 1);

$pdf->Cell(30, 12, "3", 1, 0);
$pdf->Cell(45, 12, "003", 1, 0);
$pdf->Cell(45, 12, "John Doe", 1, 0);
$pdf->Cell(70, 12, "Teknik Komputer", 1, 1);

$pdf->Output();

?>