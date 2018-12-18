<?php

// massivid


$kasutajad = array(
    'alice',
    'bob',
    'lucy'
);

// väljastamine

foreach ($kasutajad as $kasutaja) {
    echo $kasutaja.'<br>';
}

echo '<hr>';
echo '<br>';

$kasutajad1 = array();

array_push($kasutajad1,'lucy');
$kasutajad1[] = 'alice';
$kasutajad1[] = 'bob';

sort($kasutajad1);

echo '<hr>';
echo '<pre>';
print_r($kasutajad1);
echo '</pre>';

