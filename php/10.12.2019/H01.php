<?php
// Lisame andmebaasitöötlus funktsioon

require_once "DB_fnk.php";

// lisame kasutusele kasutaja andmed, et saaks ühendatud
require_once "DB.php";

// ühenduys ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);

// vaatame andmeid
$sql = "SELECT Kool,Kokku FROM koolid2015";
$result = getData(), $ikt);
$tabeliPealkirjad = array("Kool", "2015");

