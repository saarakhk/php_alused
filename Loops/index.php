<?php
// header('Refresh: 1');
/**
 * Created by PhpStorm.
 * User: saara.vallik
 * Date: 14.12.2018
 * Time: 13:57
 */

// for TSÜKKEL

/* jm - juhtimimuutuja
 * for($jmn = alg; $jm <= lopp; $jm++){
 *      tegevused, mis toimuvad nii kaua kui jm väärtus ei ole lõppväärtust saavutanud
 * }
 */

echo '<h5>Ülesanne 1</h5>';
echo '<p>väljasta 10 esimest arvu....</p>';

for($arv = 1; $arv <= 10; $arv++){

    /* $varv = ' ';
     * if($arv % 2 == 0){
        $varv = 'green';
    } else {
        $varv = 'red';
    }*/

    $varv = ($arv % 2 == 0) ? 'green' : 'red';
    echo '<div style="color: >'.$arv.'</div>';

}

echo '<hr>';
?>

    <style>
        table, tr, td{
            width: 100px;
            border: solid 1px black;
            border-collapse: collapse;
        }
    </style>

<?php

echo '<h5>Ülesanne 2</h5>';
echo '<p>tabel, mis vahetab 1 sekundi pärast värve</p>';

echo '<table>';
    for($reaNumber = 1; $reaNumber <= 5; $reaNumber++){
        echo '<tr>';
        for($veeruNumber = 1; $veeruNumber <= 5; $veeruNumber++) {
            $varv = '#';
            for($kord = 1; $kord <= 6; $kord++){
                $varv = $varv.dechex(rand(0, 15));
            }
            echo '<td style="background-color: '.$varv.'">&nbsp;</tb>';
        }
            /*nii saan juurde tabelile kaste, aga vaja kasutatada tsükleid!
             * echo '<td style="background-color: '.$varv.'">&nbsp;</tb>';
            echo '<td style="background-color: '.$varv.'">&nbsp;</tb>';
            echo '<td style="background-color: '.$varv.'">&nbsp;</tb>';
            echo '<td style="background-color: '.$varv.'">&nbsp;</tb>';
            */
        echo '</tr>';
    }
    echo '</table>';

echo '<hr>';
// väljasta korrutustabel

echo '<h5>Ülesanne 3</h5>';

echo '<table>';
    for($reaNumber = 1; $reaNumber <= 11; $reaNumber++) {
        for($arv = 1; $arv <= 10; $arv++)
        echo '<tr>';
        for($veeruNumber = 1; $veeruNumber <= 5; $veeruNumber++) {
            echo '<td style="background-color: '.$varv.'">$arv</tb>';
        }
    }

echo '</tr>';
echo '</table>';

echo '<h5>Ülesanne 3 - õpetaja lahendus</h5>';

echo '<table>';
    echo '<tr>';
    for($arv1 = 0; $arv1 <= 10; $arv1++){
        $txt = ($arv1 == 0) ? '&nbsp;' : $arv1;
        echo '<th style="background-color: deepskyblue">'.$txt.'</th>';
    }
    for($arv1 = 1; $arv1 <= 10; $arv1++){
        echo '<tr>';
            echo '<th style="background-color: coral">'.$arv1.'</th>';
            for($arv2 = 1; $arv2 <= 10; $arv2++) {
                echo '<td>';
                echo ($arv1 * $arv2);
                echo '</td>';
            }
    }

echo '<hr>';
// ülesanne: liida kokku arvud 1234 et vastus oleks 10, kasutades while tsükklit?
