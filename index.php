<?php
$docentnaam = $_GET['doc_naam'];

$dsn = 'mysql:host=localhost;port=3306;dbname=school';
$con = new PDO($dsn, 'root', '');

$stmt = $con->prepare("select doc_naam, telefoon, straat from docent where doc_naam = '$docentnaam'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, tr {
            border-collapse: collapse;
            border: 1px solid blue;
        }

        td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <table>
<?php foreach($result as $row) { ?>
    <tr>
        <td><?= $row['doc_naam'] ?></td>
        <td><?= $row['telefoon'] ?></td>
        <td><?= $row['straat'] ?></td>
    </tr>
<?php  }  ?>
    </table>
</body>
</html>


