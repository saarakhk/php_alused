<?php
/**
 * Created by PhpStorm.
 * User: saara.vallik
 * Date: 13.12.2018
 * Time: 13:07
 */
// muutujate defineerimine
// $muutjuaNimi = väärtus;

$taisArv = 3;
$reaalArv = 3.3;
$sone = '3';
$toevaartusTrue = true;
$toevaartusFalse = false;

//väljastme muutujate väärtused koos selgitustega

echo 'Täisarv '.$taisArv.'<br>';
echo 'Reaalarv '.$reaalArv.'<br>';
echo 'Sõne '.$sone.'<br>';
echo 'true '.$toevaartusTrue.'<br>';
echo 'false '.$toevaartusFalse.'<br>';
echo '<hr>';

// tüübikontroll

echo gettype($sone);
echo '<br>';
$summa = $sone.$sone;
// $settype($summa, type:'string');
echo gettype($summa);
echo 'summa = '.$summa.'<br>';
