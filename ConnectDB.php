<?php
$login = 'root';
$password = '';
$localhost = 'localhost';
$db = 'regandauto';
$connect = mysqli_connect($localhost, $login, $password, $db);
if (!$connect)
{
    die('Error');
}
