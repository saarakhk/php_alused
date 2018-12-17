<?php

// funktsioonid

// abs () funktsioon tagastab arvu absoluutväärtue. Näide:

$num = 321;
$newnum = abs($num);
print $newnum;

// funktsiooni defineerimine

function bighello() {
    print "<h1>HELLO!</h1>";
}
bighello();

// funktsioon argumentidega

function printBR($txt) {
    print ("$txt<br>\n");
}
printBR("this is a line");
printBR("this is a new line");
printBR("this is yet another line");