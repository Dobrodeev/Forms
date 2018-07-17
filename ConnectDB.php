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
function clear($text)
{
    $text = trim($text);
    $text = htmlspecialchars($text);
    $text = stripcslashes($text);
    $text = strip_tags($text);
    return $text;
}
