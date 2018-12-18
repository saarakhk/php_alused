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
        'Liddle',
        'female'
    ),
    array (
        'bob',
        'Bob',
        'Builder',
        'male'
    )
);

foreach ($kasutajad1 as $kasutaja1) {
    foreach ($kasutaja1 as $element) {
        for($i = 0; $i < count($kasutaja1); $i++){
            if($kasutaja1[3] == 'female') {
                echo '<div style="color: tomato">';
            } else {
                echo '<div style="color: cornflowerblue">';
            }
            echo $kasutaja1[$i].'</div>';
        }
        echo '<hr>';
    }

}
// lisavõimalused massivitöötluseks
// php.net/manual/en/book.array.php

echo '<hr>';
echo '<pre>';
print_r($kasutajad1);
echo '</pre>';



