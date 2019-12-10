<?php
//lisab vormist saadud andmed muutujasse
$Raadius = $_GET['t1'];
$Kera_S = $_GET['t2'];
$Kera_V = $_GET['t3'];
$Koonuse_p_raadius = $_GET['t4'];
$Koonuse_korgus = $_GET['t5'];
$Silindri_raadius = $_GET['t6'];
$Silindri_korgus = $_GET['t7'];

$Kera_S = 4*pi()*($Raadius*$Raadius);
$Kera_V = (1/3)*$Kera_S*$Raadius;
$Kera_V = (4/3)*pi()*($Raadius*$Raadius*$Raadius);
$Koonuse_V = (1/3)*pi()*($Koonuse_p_raadius*$Koonuse_p_raadius)*$Koonuse_korgus;
$Silindri_V = pi()*($Silindri_raadius*$Silindri_raadius)*$Silindri_korgus;

echo 'Kera raadius: '.$Raadius;
echo "<br>";
echo 'Kera pindala: '.$Kera_S;
echo "<br>";
echo 'Kera ruumala: '.$Kera_V;
echo "<br>";
echo 'Koonuse ruumala kuupmeetrites: '.$Koonuse_V;
echo "<br>";
echo 'Silindri ruumala kuupmeetrites: '.$Silindri_V;
echo "<br>";
echo time();

?>