<?php
/**
 * Created by PhpStorm.
 * User: saara.vallik
 * Date: 14.12.2018
 * Time: 12:32
 */

// TINGIMUSLAUSED

/* if(tingimus) {
        tegevused, mis toimuvad siis kui tingimus kehtib
} else if (tingimus2){
        muidu, kui tingimus ei kehti, toimuvad siin kirjutatud tegevsued, kui tingimus 2 kehtib
} else {
        muidu, kui kõik eelnevalt kirjutatud ei sobi töötab see osa
}
*/

echo '<h5>Ülesanne 1</h5>';

$arv = 68;
// kui arv on paaris
if ($arv % 2 == 0){
    echo '<div style="color: green">'.$arv.'</div>';
    // kui arv ei ole paaris
} else {
    echo '<div style="color: red">'.$arv.'</div>';
}

echo '<hr>';

echo '<h5>Ülesanne 2</h5>';

$arv2 = rand(0, 100);

if ($arv2 >= 0 and $arv2 < 25) {
    echo '<div style="color: red">'.$arv2.'</div>';
} else if ($arv2 >= 25 and $arv2 < 50){
    echo '<div style="color: green">'.$arv2.'</div>';
} else if ($arv2 >= 50 and $arv2 < 75) {
    echo '<div style="color: blue">'.$arv2.'</div>';
} else if ($arv2 >= 75 and $arv2 < 100) {
    echo '<div style="color: orange">'.$arv2.'</div>';
} else {
    echo '<div style="color: black">'.$arv2.'</div>';
}

echo '<hr>';

?>

<style>
    .ring {
        width: 100px;
        height: 100px;
        border-radius: 50px;
        border: solid 1px black;
    }
</style>

<?php


/* switch (kontroll) {
        case vastus:
            tegevused, mis anutud case puhul toimivad
            break;
        default:
            tegevused, mmis otimuvad siis kui mdiagi muud ei sobi
            break;

}
*/

echo '<h5>Ülesanne 3 - valgusfoor</h5>';

$aktiivne = 'punane';

switch ($aktiivne) {
    case 'punane':
        echo '<div class="ring" style="background-color: red"></div>';
        echo '<div class="ring" style=""></div>';
        echo '<div class="ring" style=""></div>';
        break;
    case 'kollane':

        echo '<div class="ring" style=""></div>';
        echo '<div class="ring" style="background-color: yellow"></div>';
        echo '<div class="ring" style=""></div>';
        break;
    case 'roheline':

        echo '<div class="ring" style=""></div>';
        echo '<div class="ring" style=""></div>';
        echo '<div class="ring" style="background-color: green"></div>';
        break;
    default:
        echo '<div class="ring" style=""></div>';
        echo '<div class="ring" style="background-color: yellow"></div>';
        echo '<div class="ring" style=""></div>';
        break;
}
?>