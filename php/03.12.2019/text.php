<?php

$nimi =$_GET["nimi"];
echo "Tere ".ucfirst(strtolower($nimi))."!";



echo "<br>";

$sisend = $_GET["sisend"];
for ($indeks = 0; $indeks < strlen($sisend); $indeks++ ) {
    $symbol = strtoupper($sisend[$indeks]); // teisendame
    echo $symbol . "."; //
}

$eesnimi = $_GET['eesnimi'];
$perenimi = $_GET['perenimi'];
$lopp = "@hkhk.edu.ee";

$otsi = array('õ', 'ä', 'ö', "ü");
$asenda = array('o', 'a', 'o', "y");
echo str_replace($otsi, $asenda, $eesnimi).".".str_replace($otsi, $asenda, $perenimi).$lopp;

