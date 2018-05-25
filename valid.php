<?php
require_once 'ConnectDB.php';
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
        $userName = htmlentities(mysqli_real_escape_string(clear($connect, $_POST['username'])));
        $userLogin = htmlentities(mysqli_real_escape_string(clear($connect, $_POST['userlogin'])));
        $userPass = md5(clear($_POST['userpass'])); //очищаем и хешируем пароль
        $userMail = htmlentities(mysqli_real_escape_string(clear($connect, $_POST['usermail'])));
        if (!preg_match("|^([a-z0-9_.-]{1,20})@([a-z0-9.-]{1,20}).([a-z]{2,4})|is", $userMail))
        {
            $error[0] = 'style="background-color: #cc4c33";';
//            "|^([a-z0-9_.-]{1,20})@([a-z0-9.-]{1,20}).([a-z]{2,4})|is"
        }
        $query = mysqli_query($connect, "SELECT * FROM reg WHERE usermail = '$userMail'");
        $num = mysqli_num_rows($query);
        $query = "INSERT INTO reg (username, userlogin, userpass, usermail) VALUES ('{$userName}', '{$userLogin}', '{$userPass}', '{$userMail}'";
        if ($num == 0 && ($error[0]) == '')
        {
            $insert = mysqli_query($connect, $query);
        }
        if($insert)
            {
                echo "<span style='color:blue;'>Данные добавлены</span>";
            }
        else
            echo "<span style='color:blue;'>Данные не добавлены</span>";
        // закрываем подключение
        mysqli_close($insert);

    }
}