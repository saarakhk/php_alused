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

$kasutajad1[] = 'alice';
$kasutajad1[] = 'bob';

array_push($kasutajad1,'lucy');

foreach ($kasutajad1 as $kasutaja1) {
    echo $kasutaja1.'<br>';
}

echo '<hr>';
array_shift($kasutajad1);
array_pop($kasutajad1);

foreach ($kasutajad1 as $kasutaja1) {
    echo $kasutaja1.'<br>';
}
