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

/* ajavöönd - märkides ära ajavööndi saab selle kellaja, mis ajavööndi sa valid */

date_default_timezone_get('Europe/Tallinn');
?>