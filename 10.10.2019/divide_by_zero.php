<?php

$numberOne = (int)$_GET["numberOne"];
$numberTwo = (int)$_GET["numberTwo"];

var_dump($numberOne);
var_dump($numberTwo);

if strlen($numberOne) > 0 or strlen($numberTwo) >0 {
    if($numberTwo==0) {
        echo "ei tohi jagada 0-ga";
    } else {
        echo $numberOne / $numberTwo;
    }
} else {
    echo "sisesta väärtused";
}