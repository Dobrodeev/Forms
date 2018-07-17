<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
<script src="bootstrap4/jquery-3.3.1.js"></script>
<script src="bootstrap4/js/bootstrap.min.js"></script>
<?php
session_start();
require_once ('ConnectDB.php');
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
        $userName = htmlentities(mysqli_real_escape_string($connect, clear($_POST['username'])));
        $userLogin = htmlentities(mysqli_real_escape_string($connect, clear($_POST['userlogin'])));
        $userPass = md5(clear($_POST['userpass'])); //очищаем и хешируем пароль
        $userMail = htmlentities(mysqli_real_escape_string($connect, clear($_POST['usermail'])));
        if (!preg_match("|^([a-z0-9_.-]{1,20})@([a-z0-9.-]{1,20}).([a-z]{2,4})|is", $userMail))
        {
            $error[0] = 'style="background-color: #cc4c33";';
        }

        $query = mysqli_query($connect, "SELECT * FROM reg WHERE usermail = '$userMail'");
        $num = mysqli_num_rows($query);
        if ($num == 0 && ($error[0]) == '')
        {
            $query2 = "INSERT INTO reg (username, userlogin, userpass, usermail) VALUES ('{$userName}', '{$userLogin}', '{$userPass}', '{$userMail}')";
            $insert = mysqli_query($connect, $query2);
            $result = 'Все успешно';
            $_SESSION['login'] = $userlogin;
            $login = '<a href="auto.php"> перейти на авторизацию </a>';
        }
        elseif ($error[0] != '') {
            $result = 'Введите корректное мыло';
        }
            else
            {
                $result = 'Мыло уже существует';
            }
        }
        else
        {
            $result = 'Заполните пустые строки';
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
?>
</body>
</html>