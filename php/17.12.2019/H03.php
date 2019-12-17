<?php
// Lisame andmebaasitöötlus funktsioon

require_once "DB_fnk.php";

// lisame kasutusele kasutaja andmed, et saaks ühendatud
require_once "DB.php";

require_once "valjund.php";

// ühenduys ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);

//näitame otsinguvormi
otsinguVorm();

//kasutame vormi kaudu andmed
if(isset($_GET['otsi'])){
    $otsi = $_GET['otsi'];
    //koostame päringu
    $sql = 'SELECT `2015`,Kool FROM TABLE 1 WHERE Kool LIKE "%'.$otsi.'%"';

    //saadame päringu andmebaasi
    $result = getData($sql, $ikt);
    //kui andmed on olemas
    if(!$result){
        //väljastame need
        $pealkirjad = array("2015", "Kool");
        tabel($result, $pealkirjad);
    }
}
