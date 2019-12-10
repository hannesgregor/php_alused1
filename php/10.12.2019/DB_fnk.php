<?php

function connect($host, $user, $pass, $DBNAME) {
    // ühendus andmebaasiga
    $link = mysqli_connect($host, $user, $pass, $DBNAME);
    // kui ühendust ei tekkinud
    if($link === false){
       echo "Probleem andmbebaasi ühendamisega<br>";
       exit;
    }
    // olemasoleva ühenduse tagastame põhiprogrammile
    return $link;
}

// päringu saatmine
function query($sql, $link) {
    $result = mysqli_query($link, $sql);
}
