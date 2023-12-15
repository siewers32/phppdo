<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Zoeken...</h2>
    <form action="index.php" method="GET">
        Geef docentnaam: <input type="text" name="doc_naam"><br>
        <input type="submit">
    </form>
    <h2>Registreren</h2>
    <form action="registreren.php" method="POST">
    Cursistnummer: <input type="text" name="cursistnr"><br>
    Naam: <input type="text" name="naam"><br>
    Roepnaam: <input type="text" name="roepnaam"><br>
    Straat: <input type="text" name="straat"><br>
    Postcode: <input type="text" name="postcode"><br>
    Plaats: <input type="text" name="plaats"><br>
    Geslacht: <input type="text" name="geslacht"><br>
    Geboortedatum: <input type="text" name="geb_datum"><br>
    <input type="submit" value="registreer" name="registreren">
    </form>
</body>
</html>