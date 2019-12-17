<?php

echo "<h1>Harjutus 05</h1>";


// kontrollitakse andmete olemasolu
if(isset($_GET['enimi']) && isset($_GET['pnimi'])){

    $enimi = $_GET['enimi'];
    $pnimi = $_GET['pnimi'];
    $kontakt = $_GET['kontakt'];

    //loome päringu
    $paring = "INSERT INTO Kliendid(enimi, pnimi,kontakt) 
                VALUES ('".$enimi."', '".$pnimi."', '".$kontakt."')";
$sql = 'INSERT INTO Kliendid SET'.
    'enimi=".$enimi.",'.
    'pnimi=".$Poeg.",'.
    'kontakt=".$kontakt."';

//saadame päringu andmebaasi
$result = query($sql, $ikt);
if($result) {
    echo "Andmebaasi on lisatud".mysqli_affected_rows($ikt)."rida<br>";
    echo "Viimane muudetud id on ".mysqli_insert_id($ikt)."<br";
}

?>

<!DOCTYPE html>
<html lang="et">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <link rel="stylesheet" href="includes/style.css">
</head>

<body>
<h1>Harjutus 05</h1>
<form action="" method="get">
    Eesnimi <input type="text" name="enimi">
    Perenimi <input type="text" name="pnimi">
    Kontakt <input type="text" name="kontakt">
    <input type="submit" value="Salvesta">
</form>
</html>


