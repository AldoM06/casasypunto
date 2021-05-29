<?php
require('fpdf/fpdf.php');
require('connect/connect.php');

$consulta = "SELECT * FROM inmuebles WHERE id_inmuebles = '2' ";
//$result = $conn->query($conuslta);

    class PDF extends FPDF
    {
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('img/casa.png',10,8,33);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30,10,utf8_decode('Ficha técnica'),'C');
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
        $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
    }
    }


    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,30,utf8_decode('¡Hola, Casas y Punto!'));
    $pdf->Output();
?>