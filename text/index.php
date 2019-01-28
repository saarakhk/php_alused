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