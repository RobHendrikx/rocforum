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
$y_axis_initial = 20;

//beginhoogte van de data uit database
$y_axis = 55;

$pdf->SetFont('Arial','B',15);

// Logo laden.
 //$pdf->Image('`../img/logo_printen.jpg', 80, 10, 50, 0);

// we gaan de resultaten ophalen uit database
// Page header

$id = $_GET["id"];

$sth = $conn->prepare("SELECT * FROM post WHERE idpost = '$id' ");
$sth->execute();

/* Fetch all of the values of the first column */
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);



foreach($result as $sss => $row) {

    //positie waar het feest van de Y-as moet beginnen
      $pdf->SetY($y_axis_initial);
    //posistie waar de X-as begind
    $pdf->SetX(65);

    //Lettertype + letter grote
    $pdf->SetFont('Arial','',30);    //Titel

    $pdf->Cell(24,1, ' '.$row['projectnaam'],0 ,0);
    $pdf->Image('img/ICT-college.png', 150, 10, 50, 0);

    // $pdf->SetY(40);
    $pdf->Image("../".$row["afbeeldingen"], 70, 150, 50);



    //Lettertype + letter grote
    $pdf->SetFont('Arial','',20);
    $pdf->SetY($y_axis);
    $pdf->SetX(25);

    //Aan wie willen we een fax sturen.
    $pdf->SetX(140);

    //Naam 1 wordt uit de database gehaald
    //$pdf->Cell(1,25,$row['projectnaam'],0,0,'L',2);
    $pdf->SetX(10);

    //Fax nummer
    $pdf->SetFont('Arial','', 10);
    $pdf->Cell(4,60, 'opleverdatum :',0 ,0);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetX(35);
    $pdf->Cell(4,60, $row["opleverdatum"],0,0);
    $pdf->SetY(62);
    $pdf->SetFont('Arial','', 10);
    $pdf->Cell(4,60, 'Aantal Projectleden :',0 ,0);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetX(44);
    $pdf->Cell(4,60, $row["aantal_leden"],0,0);
    $pdf->SetY(82);
    $pdf->SetFont('Arial','B', 10);
    $pdf->Cell(4,60, 'omschrijving :',0 ,0);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetY(95);
    $pdf->SetX(20);
    $pdf->Cell(140,60, $row["omschrijving"],40,40);
    $pdf->SetY(222);
    $pdf->SetX(148);
    $pdf->Cell(4,60, 'contact',0,0);
    $pdf->SetY(232);
    $pdf->SetX(148);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(4,60, 'Email: ',0,0);
    $pdf->SetY(232);
    $pdf->SetX(160);
    $pdf->Cell(4,60, $row["email_opdrachtgever"],0,0);
    $pdf->SetY(240);
    $pdf->SetX(148);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(4,60, 'Telefoon: ',0,0);
    $pdf->SetX(164);
    $pdf->Cell(4,60, $row["telefoon_opdrachtgever"],0,0);







    $pdf->SetX(140);
    $pdf->SetY($y_axis+500);

    //Faxnummer wordt uit de database gehaald
    $pdf->Cell(1,40,$row['email_opdrachtgever'],0,0,'L',2); // kolomnaam
    $pdf->SetX(254);

    $pdf->Cell(1,55, 'Van :',0 ,0);
    $pdf->SetX(60);


//Arial cursief 8

$pdf->SetFont('Arial','', '6');
$pdf->SetX(4);
$pdf->Cell(2,460,'  Voorwaarden:
Dit project kan dienen als vervanging van een bestaande schoolopdracht. Dit is echter iets dat authentieker is dan een schoolopdracht.
Een schoolopdracht is voorwaardelijk voor de examinering en als het dus vervangen wordt voor een dergelijk alternatief is dus deze opdracht voorwaardelijk voor de examinering.
',0,0,'L',8);
$pdf->SetX(4);
$pdf->Cell(1,470,'
 Deze alternatieve opdracht zal dus ook met een voldoende moeten worden afgesloten.
  Studiebelastingsuren (SBU):
Onder de SBU wordt het aantal uren verstaan die nodig zijn voor de uitvoering van dit project. Het aantal uren is een inschatting door de docenten van het vak en is bespreekbaar',0,0,'L',2);


// En uit eindelijk hebben we dan een PDF bestand gemaakt.
}
$pdf->Output();
?>
