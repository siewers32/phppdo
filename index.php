<?php
$docentnaam = $_GET['doc_naam'];

$dsn = 'mysql:host=localhost;port=3306;dbname=school';
$con = new PDO($dsn, 'root', '');

$stmt = $con->prepare("select doc_naam, telefoon, straat from docent where doc_naam = '$docentnaam'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($result);
