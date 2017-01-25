<?php
// PDF functie laden.
require('fpdf.php');

// Database gegevens laden.
include ('../mydatabase.php');

// Hiermee maken we een pdf bestand
$pdf = new FPDF();
// $pdf->Open();
$pdf->SetAutoPageBreak(false);
$pdf->AddPage();

//beginhoogte van de rijkoppen
$y_axis_initial = 50;

//beginhoogte van de data uit database
$y_axis = 55;

$pdf->SetFont('Arial','B',15);

// Logo laden.
// $pdf->Image('`../img/logo_printen.jpg', 80, 10, 50, 0);

// we gaan de resultaten ophalen uit database

$sth = $conn->prepare("SELECT * FROM post WHERE idpost = '23' ");
$sth->execute();

/* Fetch all of the values of the first column */
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);


// $result = $conn->query();


foreach($result as $sss => $row) {

    //positie waar het feest van de Y-as moet beginnen
      $pdf->SetY($y_axis_initial);
    //posistie waar de X-as begind
    $pdf->SetX(25);

    //Titel
    $pdf->Cell(25,6, 'Faxbericht',0 ,0);

    //Lettertype + letter grote
    $pdf->SetFont('Arial','',12);

    $pdf->SetY($y_axis);
    $pdf->SetX(25);

    //Aan wie willen we een fax sturen.
    $pdf->Cell(1,25, 'Aan :',0 ,0);
    $pdf->SetX(60);

    //Naam 1 wordt uit de database gehaald
    $pdf->Cell(1,25,$row['projectnaam'],0,0,'L',2);
    $pdf->SetX(25);

    //Fax nummer
    $pdf->Cell(1,40, 'Fax :',0 ,0);
    $pdf->SetX(60);

    //Faxnummer wordt uit de database gehaald
    $pdf->Cell(1,40,$row['email_opdrachtgever'],0,0,'L',2); // kolomnaam
    $pdf->SetX(25);

    $pdf->Cell(1,55, 'Van :',0 ,0);
    $pdf->SetX(60);


//Arial cursief 8

$pdf->SetFont('Arial','', '8');
$pdf->SetX(25);
$pdf->Cell(2,460,'  Voorwaarden:
Dit project kan dienen als vervanging van een bestaande schoolopdracht. Dit is echter iets dat authentieker is dan een schoolopdracht.
',0,0,'L',2);
$pdf->SetX(35);
$pdf->Cell(1,470,'Een schoolopdracht is voorwaardelijk voor de examinering en als het dus vervangen wordt voor een dergelijk alternatief is dus deze opdracht voorwaardelijk voor de examinering. Deze alternatieve opdracht zal dus ook met een voldoende moeten worden afgesloten.
  Studiebelastingsuren (SBU):
Onder de SBU wordt het aantal uren verstaan die nodig zijn voor de uitvoering van dit project. Het aantal uren is een inschatting door de docenten van het vak en is bespreekbaar',0,0,'L',2);


// En uit eindelijk hebben we dan een PDF bestand gemaakt.
}
$pdf->Output();
?>
