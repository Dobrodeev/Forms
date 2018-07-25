<?php
//session_start();
//$_SESSION = array();
//session_destroy();
require_once 'ConnectDB.php';

if (isset($_POST['go']))
{
    if ($_POST['userlogin'] && $_POST['userpass'])
    {
        $userLogin = $_POST['userlogin'];
        $userPass = md5($_POST['userpass']);
        $query = mysqli_query($connect, "SELECT * FROM reg WHERE userlogin = '$userLogin' AND userpass = '$userPass'");
        $num = mysqli_num_rows($query);
//        echo 'Выведем mysqli_num_rows(): <br>';
//        print_r($num).'<br>';
//        echo '<br>';
        if ($num != 0)
        {
//            $_SESSION['login'] = $userLogin;
            $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
//            echo 'Выведем mysqli_fetch_array():<br>';
//            print_r($result);
//            echo '<br>';
            if ($userLogin == $result['userlogin'] && $userPass == $result['userpass'])
            {
//                $_SESSION['name'] = $result['username'];
//                echo 'name: '.$result['username'].' login: '.$result['userlogin'];
                SetCookie('test', $userLogin, time() + 3600); // 1 час жизни Cookie
//                echo $userLogin;
//                print_r($_COOKIE['test']);
//                echo '<a href="mylist.php">Зайти на личную страницу</
                header('Location: mylist.php'); // перед header не должно быть выводдов print_r echo html
            }
        }
        else
        {
            echo 'Логин или пароль не верен';
        }
    }
    else
    {
        echo 'Заполните пустые значения';
    }
}
?>
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
<form action="#" method="post" name="auto">
    <input type="text" placeholder="Your login" name="userlogin"><br>
    <input type="password" placeholder="Your password" name="userpass"><br>
    <input type="submit" name="go" value="autorization"><br>
</form>
</body>
</html>