<?php
// PHP - Tekstifunktsioonid

// Teksti vormindamine
$tekst = 'Life Is About Ignoring The Drama.';
echo strtolower($tekst);
echo '<br>';
echo strtoupper($tekst);
echo '<br>';
echo ucfirst(strtolower($tekst));
echo '<br>';

// Teksti pikkus
$tekst2 = 'Experience is the teacher of fools';
echo strlen($tekst2);
echo '<br>';
echo str_word_count($tekst2);
echo '<br>';

// teksti kärpimine
$tekst3 = '    A woman should soften but not weaken a man   ';
echo "<pre>$tekst3</pre>";
echo '<br>';
echo "<pre>".trim($tekst3)."</pre>";
echo '<br>';
echo "<pre>".ltrim($tekst3)."</pre>";
echo '<br>';
echo "<pre>".rtrim($tekst3)."</pre>";
echo '<br>';
echo trim($tekst3, "A, a, k..n, w");
echo '<br>';
$tekst33 = '<b>Experience</b> <a href="#">is</a> the teacher <br> of fools';
echo strip_tags($tekst33);
echo '<br>';
echo strip_tags($tekst33, '<b>, <br>');
echo '<br>';

// tekst kui massiiv
$tekst4='All thinking men are atheists';
echo $tekst4[0];
echo '<br>';
echo $tekst4[4];
echo '<br>';
echo substr($tekst4, 3, 5);
echo '<br>';
echo substr($tekst4, 4, -13);
echo '<br>';
echo substr($tekst4, -8, 7);
echo '<br>';
print_r(str_word_count($tekst4, 1));
echo '<br>';
$sona = str_word_count($tekst4, 1);
echo $sona[2];
echo '<br>';
print_r(str_word_count($tekst4, 2));
echo '<br>';

// teksti otsimine
$tekst5 = 'Happiness in intelligent people is the rarest thing I know';
$otsitav = 'in';
$leia_tekstist = strpos($tekst5, $otsitav, 0);
echo $leia_tekstist;
echo '<br>';
$leia_tekstist2 = strpos($tekst5, $otsitav, 6);
echo $leia_tekstist2;
echo '<br>';
// mul ei andnud kahjuks järgneva funksiooniga mingisugust vastust:
$nihe = 0;
while($leia_tekstist3 = strpos($tekst5, $nihe)){
    echo $leia_tekstist3.'<br>';
    $nihe = $leia_tekstist3+strlen($otsitav);
}
echo '<br>';

// teksti asendamine
$tekst6 = 'Pai papa, pane paadile punased purjed peale';
$asendus = 'emme';
$otsitav_algus = 4;
$otsitav_pikkus = 4;
echo substr_replace($tekst6, $asendus, $otsitav_algus, $otsitav_pikkus);
echo '<br>';
$otsitav_papa = 'papa';
$nihe2 = 0;
$asenduse_algus = strpos($tekst6, $otsitav_papa, $nihe2);
$asenduse_markide_arv = strlen($otsitav_papa);
echo substr_replace($tekst6, $asendus, $asenduse_algus, $asenduse_markide_arv);
echo '<br>';
$tekst7 = 'Musta lehma saba musta lehma taga, valge lehma saba valge lehma taga';
$otsi = 'lehm';
$asenda = 'koer';
echo str_replace($otsi, $asenda, $tekst7);
echo '<br>';
$otsi2 = array('lehm', 'saba', 'taga');
$asenda2 = array('koer', 'nina', 'ees');
echo str_replace($otsi2, $asenda2, $tekst7);
echo '<br>';

