<?php


$birthyear = $GET_["birthYear"];


if(strlen($birthyear)> 0) {
    $age = 2019 - $birthyear;
    if ($age % 5 == 0) {
        echo "Sul on juubel, oled ".$age."aastat vana";
    } else {
        echo "Sul on tava sünnipäev.";
    }

}