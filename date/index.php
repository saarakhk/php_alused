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

/* kasutajasõbraliku kuupäeva kuvamine - kuvab hetke aja kui argumente ei lisa */

echo date('d.m.Y G:i');

/* ajavöönd */

date_default_timezone_set('Europe/Tallinn');

/* pika kuupäeva eestistamine */

// kuude massiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta;
?>