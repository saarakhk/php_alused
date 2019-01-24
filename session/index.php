<?php

session_start();
require_once 'fnk.php';

if(isset($_SESSION['user'])) {
    echo 'Tere tulemast, '.$_SESSION['user']['last_name'].'!<br>';
    echo '<form action="acts/logout.php" method="get"><input type="submit" value="Logi välja"></form>';
} else {
    $loginForm = htmlFromFile('login');
    echo $loginForm;
}

