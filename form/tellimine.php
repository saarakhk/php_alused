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

?>
