<?php
// Lisame andmebaasitöötlus funktsioon

require_once "DB_fnk.php";

// lisame kasutusele kasutaja andmed, et saaks ühendatud
require_once "DB.php";

// ühenduys ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);

// vaatame andmeid
$sql = "SELECT * FROM TABLE 1";
$result = query($sql, $ikt);
echo "<pre>";
print_r($result);

