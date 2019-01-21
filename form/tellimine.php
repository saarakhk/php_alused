<?php
/**
 * Created by PhpStorm.
 * User: Saara
 * Date: 21.01.2019
 * Time: 12:29
 */

// Ülesanne 3

// kera ruumala arvutamine
$keraRaadius = $_GET['t1'];
$keraRuumala = 4/3 * 3.14 * ($_GET['t1'] * $_GET['t1'] * $_GET['t1']);
echo 'Kera ruumala on: '.$keraRuumala;

echo '<br>';

// koonuse ruumala arvutamine

$koonuseSp = $_GET['kSp'];
$koonuseH = $_GET['kH'];
$koonuseV = 1/3 * $koonuseSp * $koonuseH;

echo 'Koonuse ruumala on: ' .$koonuseV;
echo '<br>';

// Silindri ruumala arvutamine

$silindriSp = $_GET['sSp'];
$silindriH = $_GET['sH'];
$silindriV = $silindriSp * $silindriH;

echo 'Silindri ruumala on: ' .$silindriV;
echo '<br>';
?>
