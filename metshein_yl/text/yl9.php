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

// koosta tekstiväli, mis kuvab kasutaja sisestatud sõnumeid. Kasutaja ropud sõnad asendatakse tärnidega