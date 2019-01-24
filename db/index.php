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

/*
echo '<pre>';
print_r($iktConn);
*/

// insert/update tüüpi sql tetsimine
$sql = 'update user SET last_name = "ebatavaline" where user_id=1';
$res = query($sql, $iktConn);

// select tüüpi sql testimine

$sql ='SELECT * FROM user';
$users = getData ($sql, $iktConn);


echo '<pre>';
print_r($users);

echo 'Tere, '.$users[0]['first_name'].' '.$users[0]['last_name'].'<br>';

// select tüüpi sql tetsimine

$sql = 'SELECT NOW()';
$aeg = getData($sql, $iktConn);
echo '<pre>';
print_r($aeg);

echo $aeg[0]['NOW()'].'<br>';
