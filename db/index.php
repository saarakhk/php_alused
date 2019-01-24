<?php
/**
 * Created by PhpStorm.
 * User: saara.vallik
 * Date: 24.01.2019
 * Time: 12:17
 */





require_once 'conn.php';
require_once 'db_fnk.php';
$iktConn = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);
echo '<pre>';
print_r($iktConn);