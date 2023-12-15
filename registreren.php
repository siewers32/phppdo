<?php
$cursistnr = $_POST['cursistnr'];
$naam = $_POST['naam'];
$roepnaam = $_POST['roepnaam'];
$straat = $_POST['straat'];
$postcode = $_POST['postcode'];
$plaats = $_POST['plaats'];
$geslacht = $_POST['geslacht'];
$geb_datum = $_POST['geb_datum'];

$data  = [
    'cursistnr' => $cursistnr,
    'naam' => $naam,
    'roepnaam' => $roepnaam,
    'straat' => $straat,
    'postcode' => $postcode,
    'plaats' => $plaats,
    'geslacht' => $geslacht,
    'geb_datum' => $geb_datum,
];

$sql = "insert into cursist (cursistnr, naam, roepnaam, straat, postcode, plaats ) 
values (:cursistnr, :naam, :roepnaam, :straat, :postcode, :plaats)";


$dsn = 'mysql:host=localhost;port=3306;dbname=school';
$con = new PDO($dsn, 'root', '');

$stmt = $con->prepare($sql);
$stmt->execute($data);



//$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//print_r($result);
