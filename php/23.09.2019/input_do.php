<?php
$firstName=$_GET["firstName"];
$lastName=$_GET["lastName"];
$age=$_GET["age"];
$weight=$_GET["weight"];
$height=$_GET["height"];


echo 'Eesnimi:'.$firstName.'<br>';
echo 'Perenimi:'.$lastName.'<br>';
echo 'Vanus:' .$age.'<br>';
echo 'Kaal:'.$weight.'<br>';

$BMI=$weight / ($height * $height);



