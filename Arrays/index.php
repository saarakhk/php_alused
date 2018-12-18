<?php

// massivid

$kasutajad = array(
    'alice',
    'bob',
    'lucy'
);

// väljastamine

for ($i = 0; $i < count($kasutajad); $i++) {
    echo $i.' - '.$kasutajad[$i].'<br>';
};