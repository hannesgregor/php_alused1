<?php
// circle_do.php
$circleRadius = $_GET["circle-radius"];
// $circleRadius sisu kontroll
// var_dump($circleRadius);
// arvutused
$circleArea = 3.14 * $circleRadius * $circleRadius;
$circleCircumference = pi() * 2 * $circleRadius;
// ümmardamine
$circleAreaRound = round($circleArea, 3);
// print
echo "</hr>";
echo "Ringi pindala = ".$circleAreaRound. "<br>";
echo "Ringi ümbermõõt= ".$circleCircumference. "<br>";
echo "Raadius = ".$circleRadius. "<br>";

// sain teada, mis on var_dump;
// õppisin kasutama PHP arvutamist
// Õppisin kasutama HTML PHP faili sees