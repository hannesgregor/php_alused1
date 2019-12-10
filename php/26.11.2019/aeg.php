<?php
date_default_timezone_set('Europe/Tallinn');

echo date("d.m.Y G:i");
echo "<br>";
//Päevade massiiv
$eesti_paevad = array("1"=>"esmaspäev", "teisipäev", "kolmapäev", "neljapäev", "reede", "laupäev", "pühapäev");

$paev = $eesti_paevad[date("w")];
echo "<br>";
$aasta = date("Y");
echo "<br>";

echo "N: ".$paev;
echo "<br>";
echo "<br>";

$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$mitmes = date('d');
$kuu = $eesti_kuud[date('n')];
//kuupäeva väljastamine
echo $mitmes.'.'.$kuu.' '.$aasta." ".$paev;	//22.veebruar2013
echo "<br>";
echo "<br>";
$hetkel = time();
$jaanid=mktime(0, 0, 0, 06 ,24 , 2020);
$vahe=$jaanid-$hetkel;


echo "2020 Jaanipäevani on jäänud: ".round($vahe/(60*60*24),0 )." päeva.";

echo "<br>";
echo "<br>";
$m_synd = mktime(0,0,0,11, 6, 1980);
$h_synd = mktime(0, 0, 0,3,12,1997);
$vanem = ($h_synd - $m_synd)/(60*60*24*365);
echo round($vanem, 0)." aastat vanem";
echo "<br>";
echo "<br>";

if(checkdate(2,29,2016)) {
    echo('Kuupäev korras!');
} else {
    echo ('Kuupäev on valesti sisestatud');
}