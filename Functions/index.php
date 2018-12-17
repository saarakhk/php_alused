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

// funktsiooni, mis tagastab väärtuseid, loomine

function addNums($firstnum, $secondnum) {
    return ($firstnum + $secondnum);
}
print "viis pluss viis on = ".addNums(5, 5);

echo '<br>';
echo '<br>';

// funkstiooni dünaamilised väljakutsed

function sayHello() {
    print "hello<br>";
}

$function_holder = "sayHello";
$function_holder();
