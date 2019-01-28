<?php
// Ülesanne 9

// kasutaja lisab varomi nime, seda näiteks suured ja väiksed tähed läbisegi. Loo kood,
// mis tervitab kenasti nimepidi, kus nimi algab suure algustähega. Nt seisend->mARiO; väljund->Tere, Mario!
$kasutajaNimi = $_GET['nimi'];
echo 'Tere, '.ucfirst(strtolower($kasutajaNimi)).'!';
echo '<br>';

// tükelda etteantud teksti. Nt sisend->saara; väljund->s.a.a.r.a
$sona = $_GET['sona'];
$sona_array = (str_split($sona));
echo strtoupper(implode('.', $sona_array));
echo '<br>';

// koosta tekstiväli, mis kuvab kasutaja sisestatud sõnumeid. Kasutaja ropud sõnad asendatakse tärnidega.
$tekst = $_GET['roppus'];
$otsitav = array('noob', 'loll', 'jobu');
$asendus = '****';
echo 'Ise oled üks '.str_replace($otsitav, $asendus, $tekst).'!';
echo '<br>';

// kasutajalt saadud enimi ja pnime põhjal luuakse talle email lõpuga @khk.ee. Täpitähed asendatatkse ja kogu email on väikeste tähtedega. Nt sisend -> Saara Vällik; välujnd->saara.vallik@khk.ee
$eesnimi = $_GET['eesnimi'];
$perenimi = $_GET['perenimi'];
$email = strtolower($eesnimi.'.'.$perenimi).'@khk.ee';
$otsitav2 = array('ä', 'ö', 'ü', 'õ');
$asendus2 = array('a', 'o', 'u', 'o');
echo str_replace($otsitav2, $asendus2, $email);
echo '<br>';
