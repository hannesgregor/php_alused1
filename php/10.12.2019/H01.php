<?php
// Lisame andmebaasitöötlus funktsioon

require_once "DB_fnk.php";

// lisame kasutusele kasutaja andmed, et saaks ühendatud
require_once "DB.php";

require_once 'valjund.php';

// ühenduys ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);


echo "<h1>HARJUTUS 1 </h1>"
// vaatame andmeid
$sql = "SELECT Kool,Kokku FROM koolid2015";
$result = getdata($sql, $ikt);
echo "<pre>";
print_r($result);

