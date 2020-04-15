<?php
/**
 * @package
 * @author Tarannic Pavel
 * @copyright 2018
 */
$login = 'root';
$password = '';
$localhost = 'localhost';
$db = 'regandauto';
$connect = mysqli_connect($localhost, $login, $password, $db);
if (!$connect) {
    die('Error');
}
/**
 * фильтруем данные полученные из $_POST
 * @param $text
 * @return string
 */
function clear($text)
{
    $text = trim($text);
    $text = htmlspecialchars($text);
    $text = stripcslashes($text);
    $text = strip_tags($text);
    return $text;
}
