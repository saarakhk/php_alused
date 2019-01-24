<?php
/**
 * Created by PhpStorm.
 * User: Saara
 * Date: 24.01.2019
 * Time: 19:40
 */

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

?>