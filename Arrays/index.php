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

echo '<hr>';
echo '<table style="border: solid 1px">';
echo '<tr>
            <th>kasutaja</th>
            <th>Eesnimi</th>
            <th>Perenimi</th>
            <th>Sugu</th>
       </tr>';
foreach ($kasutajad1 as $kasutaja1) {
    echo '<tr>';
        for($i = 0; $i < count($kasutaja1); $i++){
            if($kasutaja1[3] == 'female') {
                echo '<td style="background: tomato">';
            } else {
                echo '<td style="background: cornflowerblue">';
            }
            echo $kasutaja1[$i].'</td>';
        }
        echo '<hr>';
    }
// lisavõimalused massivitöötluseks
// php.net/manual/en/book.array.php

echo '<hr>';
echo '<pre>';
print_r($kasutajad1);
echo '</pre>';



