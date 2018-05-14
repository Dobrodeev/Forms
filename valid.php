<?php
function clear($text)
{
    $text = trim($text);
    $text = htmlspecialchars($text);
    $text = stripcslashes($text);
    $text = strip_tags($text);
    return $text;
}
if (isset($_POST['go']))
{
    if ($_POST['username'] && $_POST['userlogin'] && $_POST['userpass'] && $_POST['usermail'])
    {
        $userName = clear($_POST['username']);
        $userLogin = clear($_POST['userlogin']);
        $userPass = md5(clear($_POST['userpass'])); //очищаем и хешируем пароль
        $userMail = clear($_POST['usermail']);
        if (!preg_match("|^([a-z0-9_.-]{1,20})@([a-z0-9.-]{1,20}).([a-z]{2,4})|is", $userMail))
        {
            $error[0] = 'style="background-color: #cc4c33";';
//            "|^([a-z0-9_.-]{1,20})@([a-z0-9.-]{1,20}).([a-z]{2,4})|is"
        }
    }
}