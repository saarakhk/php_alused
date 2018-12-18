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

$kasutajad1 = array(
    array (
        'alice',
        'Alice',
        'Liddle'
    ),
    array (
        'bob',
        'Bob',
        'Builder'
    )
);

// lisavõimalused massivitöötluseks
// php.net/manual/en/book.array.php

echo '<hr>';
echo '<pre>';
print_r($kasutajad1);
echo '</pre>';

