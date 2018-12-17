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

// muutujate nähtavuse piirkond

// Muutuja, mis on loodud funktsiooni sees, ei ole kättesaadav väljaspoolt antud funktsiooni

function test() {
    $testvar = "this is a test var";
}
print "test var: $testvar<br>";

// funktsioon pöördub muutuja poole, mis on defineeritud väljaspoolt antud funktsiooni

$life = 42;

function meaningOfLife() {
    print "Thea meaning of life is $life <br>";
}
meaningOfLife();

// Juurdepääs globaalsele muutujale global instruktsiooni abil

$life2 = 42;
function meaningOfLife2() {
    global $life2;
    print "Thea meaning of life is $life2 <br>";
}
meaningOfLife2();

