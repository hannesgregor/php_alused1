<?php

require_once "DB_fnk.php";

// lisame kasutusele kasutaja andmed, et saaks ühendatud
require_once "DB.php";

require_once "valjund.php";

// ühenduys ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);

$sql = 'INSERT INTO Kliendid SET'.
    'enimi="Karu",'.
    'pnimi="Poeg",'.
    'kontakt="karu.poeg@puhh.com"';

//saadame päringu andmebaasi
$result = query($sql, $ikt);
if($result) {
    echo "Andmebaasi on lisatud".mysqli_affected_rows($ikt)."rida<br>";
    echo "Viimane muudetud id on ".mysqli_insert_id($ikt)."<br";
}

