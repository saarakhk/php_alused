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

?>