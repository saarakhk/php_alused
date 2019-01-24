<?php
/**
 * Created by PhpStorm.
 * User: Saara
 * Date: 23.01.2019
 * Time: 21:25
 */

/* PHP - Ajafunktsioonid (Ülesanne 8) */

/* aja loomine */
echo time();

echo '<br>';
/* kasutajasõbraliku kuupäeva kuvamine - kuvab hetke aja kui argumente ei lisa */

echo date('d.m.Y G:i');

echo '<br>';
/* ajavöönd */

date_default_timezone_set('Europe/Tallinn');

echo '<br>';
/* pika kuupäeva eestistamine */

// kuude massiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta;

echo '<br>';
/* muu soovitud kuupäeva genereerimine */

$minu_synnipaev = mktime(0, 0, 0, 11, 3, 1995);
echo date('d.m.Y', $minu_synnipaev);

echo '<br>';
/* tehted kuupäevadega */

//1min pärast hetkeaeg ja kuupäev
echo date('d.m.Y G:i' , time()+60);
//1h pärast hetke aeg
echo date('d.m.Y G:i' , time()+60*60);
// 24h pärast
echo date('d.m.Y G:i' , time()+60*60*24);

echo '<br>';
// tehted kuupäevadega: arvutan oma sünnipäeva kui tean vanust

$vanus = mktime(0, 0, 0, 11, 0, 2019-24);
echo date('d.m.Y', $vanus);
echo '<br>';

// kuupäevade arvutamine inglise keelsete lausetega

echo strtotime("+1 day");
echo '<br>';
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo '<br>';

/* kuupäeva valideerimine */

if (checkdate(12, 23, 2013)) {
    echo ('kuupäev korras!');
} else {
    echo ('kuupäev on valesti sisestatud');
}
echo '<br>';

/* ÜLESANNE 8 */

// Kuva kuupäev ja kellaaeg formaadis 20.03.2013 12.31
$kp = mktime(12, 31, 0, 3, 20, 2013);
echo date('d.m.Y', $kp);
echo '<br>';

// kuva tänane eestikeelne nädalapäev
$nadalapaevad = array(1=>'esmaspäev', 'teisipäev', 'kolmapäev', 'neljapäev', 'reede', 'laupäev', 'pühapäev');
$tana = $nadalapaevad[date('w', time())];
echo $tana;
echo '<br>';

// kuva eestikeelne kuupäev koos nädalapäevaga.
echo $paev.'.'.$kuu.' '.$aasta.' '.$tana;
echo '<br>';

//Leia mitu päeva on jäänud järgmise jaanipäevani
$jaanipaev = mktime(0,0,0,6,24,2019);
$tanapaev = time();
$jaanipaevani = $jaanipaev - $tanapaev;
echo '2019 aasta jaanipäevani on jäänud '. floor($jaanipaevani /60/60/24).' päeva!';
echo '<br>';

// minu sünnipäev on 06.11.1980, leia kumb on meist vanem. Kuva mõlema sünnipäevad ning vahe aastates
$metshein = mktime(0, 0, 0,11, 6, 1980);
$minusynna = mktime(0, 0, 0, 11, 3, 1995);

$vahe1 = date('Y', $metshein);
$vahe2 = date('Y', $minusynna);
$vahe3 = $vahe2 - $vahe1;

echo 'Metsheina sünnipäev on '.date('d.m.Y', $metshein).' ja minu sünnipäev on '.date('d.m.Y', $minusynna).', meie vanusevahe on '.$vahe3.' aastat. Seega on Metshein minust vanem.';
echo '<br>';

// maailmalõpp saabub 29.02.2016! Las PHP otsustab, kas see on võimalik.
// ma ei oska seda ülesannet teha...

// leia, kas sul on järgmine aasta juubel

//leian oma sünniaasta
$minusynna = mktime(0, 0, 0, 11, 3, 1995);
$minuaasta = date('Y', $minusynna);
echo 'Minu sünniaasta on: '.$minuaasta;
echo '<br>';

// leian järgmise aasta praegusest aastast
$uusAasta = strtotime("+1 year");
$jarkaAasta = date('Y', $uusAasta);
// üritan teha funktsiooni, mis kontrollib, kas mul on juubel tulemas
    if ($jarkaAasta%5 === 0 or $jarkaAasta%10 === 0) {
        echo 'Saara, sul on juubel tulemas aastal '.$jarkaAasta;
    }
    else {
        echo 'Saara, sul ei ole juubelit aastal '.$jarkaAasta;
    }
echo '<br>';
    // Koosta kood, mis tervitab sind vastavalt ajale

$time = date("H");

if ($time < 13) {
    echo 'Tere hommikust!';
} elseif ($time < 17) {
    echo 'Ilusat päeva!';
} else {
    echo 'Kaunist õhtu jätku!';
}


?>