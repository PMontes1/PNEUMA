<?php
require('fpdf.php');

/*require_once("../../conexion.php");
$consulta="SELECT * FROM RegBau";
$resultado = mysqli_query($conexion, $consulta);*/

use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;
require_once('../reportebautizo/FPDI-2.5.0/src/autoload.php');



class PDF extends FPDI
{
    function Header()
    {
        if($this->PageNo(). !-2)
        {
            $this->Image('imgr/EXPBAUTIZO_page-0001.jpg',3,8,200);
        // Arial bold 15
        //$this->SetFont('Arial','B',15);
        // Movernos a la derecha
        //$this->Cell(80);
        // Título
        //$this->Cell(30,10,'Title',1,0,'C');
        // Salto de línea
        //$this->Ln(20);
        }
    }
    
    function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página '.$this->PageNo().''),0,0,'C');
}
}

$pdf = new PDF();
$pdf->AddPage();
//HOJA 1 
//NUMERAL 
$pdf->SetXY(125,65);
$pdf->SetTextColor(247,66,22);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(100,0,utf8_decode('N° B00001-2023'),0,1,'C',0);
$pdf->Ln(0);
//FIN DE NUMERAL
$pdf->SetTextColor(247,66,22);//COLO DE PRUEBA ROJO
//$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',16);
$pdf->SetXY(50,87);
$pdf->Cell(100,0,utf8_decode('DIOCESIS DE CAJATAMBO ALTO LIM'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(3,102);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(100,0,utf8_decode('VEINTE Y SIETE'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(60,102);
$pdf->Cell(100,0,utf8_decode('SETIEMBRE'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(110,102);
$pdf->Cell(100,0,utf8_decode('2023'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(50,117);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(100,0,utf8_decode('DIOCESIS DE CAJATAMBO ALTO LIM'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(3,131);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(100,0,utf8_decode('VEINTE Y SIETE'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(60,131);
$pdf->Cell(100,0,utf8_decode('SETIEMBRE'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(110,131);
$pdf->Cell(100,0,utf8_decode('2023'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(50,145);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(100,0,utf8_decode('DIOCESIS DE CAJATAMBO ALTO LIM'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(50,178);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(100,0,utf8_decode('DIOCESIS DE CAJATAMBO ALTO LIM'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(15,186);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(100,0,utf8_decode('78945612'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(50,200);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(100,0,utf8_decode('DIOCESIS DE CAJATAMBO ALTO LIM'),0,1,'C',0);
$pdf->Ln(0);
//SACRAMENTOS
$pdf->SetXY(50,215);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(100,0,utf8_decode('X'),0,1,'C',0);
$pdf->Ln(0);
//FIN DE SACRAMENTOS
$pdf->SetXY(50,229);//178
$pdf->SetFont('Arial','B',16);
$pdf->Cell(100,0,utf8_decode('DIOCESIS DE CAJATAMBO ALTO LIM'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(15,238);//186 8
$pdf->SetFont('Arial','B',16);
$pdf->Cell(100,0,utf8_decode('78945612'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(50,252);//200 14
$pdf->SetFont('Arial','B',16);
$pdf->Cell(100,0,utf8_decode('DIOCESIS DE CAJATAMBO ALTO LIM'),0,1,'C',0);
$pdf->Ln(0);
//HOJA 2



/*// Cabecera de página
function Header()
{
    if($this->PageNo(). !-2)
    {
     
    
          $this->Image('imgr/HG.jpg',3,8,200);
    // Arial bold 15
    //$this->SetFont('Arial','B',15);
    // Movernos a la derecha
    //$this->Cell(80);
    // Título
    //$this->Cell(30,10,'Title',1,0,'C');
    // Salto de línea
    //$this->Ln(20);
    }
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página '.$this->PageNo().''),0,0,'C');
}
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetXY(50,95);
$pdf->Cell(100,0,utf8_decode('Rojas Peña Ruth'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(20,120);
$pdf->Cell(50,0,utf8_decode('CINCO'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(80,120);
$pdf->Cell(50,0,utf8_decode('OCTUBRE'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(130,120);
$pdf->Cell(50,0,utf8_decode('2023'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(19,143);
$pdf->Cell(100,0,utf8_decode('AL COSTADO DEL RIO RIMAC'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(20,167);
$pdf->Cell(50,0,utf8_decode('CINCO'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(80,167);
$pdf->Cell(50,0,utf8_decode('OCTUBRE'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(130,167);
$pdf->Cell(50,0,utf8_decode('2023'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(50,190);
$pdf->Cell(50,0,utf8_decode('ROBERTO ROJAS FERNANDEZ'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(138,179);
$pdf->Cell(50,0,utf8_decode('78945612'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(145,191);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(50,0,utf8_decode('DIVORCIADO'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(50,215);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(50,0,utf8_decode('ROBERTO ROJAS FERNANDEZ'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(138,203);
$pdf->Cell(50,0,utf8_decode('78945612'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(145,215);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(50,0,utf8_decode('DIVORCIADO'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(50,238);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(50,0,utf8_decode('ROBERTO ROJAS FERNANDEZ'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(138,227);
$pdf->Cell(50,0,utf8_decode('78945612'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(145,238);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(50,0,utf8_decode('DIVORCIADO'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(50,262);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(50,0,utf8_decode('ROBERTO ROJAS FERNANDEZ'),0,1,'C',0);
$pdf->Ln(0);
$pdf->SetXY(138,251);
$pdf->Cell(50,0,utf8_decode('78945612'),0,1,'C',0);
*/

/*//IMAGEN DOC 2
$pdf->SetXY(145,280);
$pdf->Image('imgr/HG.jpg',53,290,50);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(50,0,utf8_decode('DIVORCIADO'),0,1,'C',0);
$pdf->Ln(20);*/
/*


$pageCount = $pdf->setSourceFile('CONSBAUTIZO.pdf');
$PageId = $pdf->importPage(2, PdfReader\PageBoundaries::MEDIA_BOX);
$pdf->addPage();
$pdf->useImportedPage($PageId);
*/

$pageCount = $pdf->setSourceFile('EXPBAUTIZO.pdf');
$PageId = $pdf->importPage(2, PdfReader\PageBoundaries::MEDIA_BOX);
$pdf->addPage();
$pdf->useImportedPage($PageId);
$pageCount = $pdf->setSourceFile('EXPBAUTIZO.pdf');
$PageId = $pdf->importPage(3, PdfReader\PageBoundaries::MEDIA_BOX);
$pdf->addPage();
$pdf->useImportedPage($PageId);
$pageCount = $pdf->setSourceFile('EXPBAUTIZO.pdf');
$PageId = $pdf->importPage(4, PdfReader\PageBoundaries::MEDIA_BOX);
$pdf->addPage();
$pdf->useImportedPage($PageId);


$pdf->Output();
?>