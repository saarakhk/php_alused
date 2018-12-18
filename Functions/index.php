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

// Muutuja väärtuse säilitamine global instruktsiooni abil

$num_of_calls = 0;
function andAnotherThing($txt){
    global $num_of_calls;
    $num_of_calls++;
    print "<h1>$num_of_calls. $txt</h1>";
}
andAnotherThing("Midagi");
print ("Ehitame midagi");
andAnotherThing("Blabla ");
print("Parimad ");
andAnotherThing("Kolmas ");
print("number kolm ");

echo '<hr>';
// static instruktsiooni kasutamine

function andAnotherThing2($txt) {
    static $num_of_calls2 = 0;
    $num_of_calls2++;
    print "<h1>$num_of_calls2.$txt</h1>";
}

andAnotherThing2("Mäletame");
print ("Ehitame midagi");
andAnotherThing2("eelmist ");
print("Parimad ");
andAnotherThing2("numbrit ");
print("number kolm ");

echo '<br>';
echo '<br>';


// ARGUMENDID

// Funktsioon, mis kasutab kahte argumenti

function fontWrap($txt, $size) {
    print "<font size=\"$size\" face=\"Helvetica, Arial, Sans-Seriff\">$txt</font>";
}
fontWrap("A heading <br>", 5);
fontWrap("kiri kiri kiri <br>", 3);
fontWrap("veel mingi kiri <br>", 3);
fontWrap("jutt kiri jutt <br>", 3);

// Funktsioon mittekohustuslikku argumendiga

function fontWrap2($txt, $size=3) {
    print "<font size=\"$size\" face=\"Helvetica, Arial, Sans-Seriff\">$txt</font>";
}

fontWrap2("A heading <br>", 5);
fontWrap2("kiri kiri kiri <br>");
fontWrap2("kiri kiri kiri <br>");
fontWrap2("kiri kiri kiri <br>");

echo '<br>';
// Argumentide andmine viite abil

// iseseisev ül.

function tabel ($txt1, $txt2, $txt3, $txt4) {
    echo '<table>';
        echo '<tr>';
            for ($i = 1; $i<=4; $i++) {
                echo '<td>';
                    echo ${'txt'.$i};
                echo '</td>';
            }
        echo '</tr>';
    echo '</table>';
}

tabel('see', 'on', 'üks', 'tabel');
