<?php

$eesNimi= "Hannes-Gregor";
$pereNimi= "Galkin";
$vanus= "22";
$pikkus= "1.84m";
$kool= "TKHK";
$kaal="76kg";
$info="Muu vajalik info";

echo '<h1>Minu andmed</h1>';
echo 'Eesnimi:'.$eesNimi.'<br>';
echo 'Perenimi:'.$pereNimi.'<br>';
echo 'Vanus:' .$vanus.'<br>';
echo $pikkus.'<br>';
echo $kool.'<br>';
echo $kaal.'<br>';
echo $info.'<br>';

$kmi= $kaal / ($pikkus*$pikkus);

echo $kmi;

