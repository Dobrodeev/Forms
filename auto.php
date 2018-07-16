<?php
session_start();
require_once 'ConnectDB.php';
?>
<form action="#" method="post" name="auto">
    <input type="text" placeholder="Your login" name="userlogin"><br>
    <input type="password" placeholder="Your password" name="userpass"><br>
    <input type="submit" name="go" value="autorization"><br>
</form>

<?php

if (isset($_POST['go']))
{
    if ($_POST['userlogin'] && $_POST['userpass'])
    {
        $userLogin = $_POST['userlogin'];
        $userPass = md5($_POST['userpass']);
        $query = mysqli_query($connect, "SELECT * FROM reg WHERE userlogin = '$userLogin' AND userpass = '$userPass'");
        $num = mysqli_num_rows($query);
        echo 'Выведем mysqli_num_rows(): <br>';
        print_r($num).'<br>';
        echo '<br>';
        if ($num != 0)
        {
            $_SESSION['login'] = $userLogin;
            $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
            echo 'Выведем mysqli_fetch_array():<br>';
            print_r($result);
            echo '<br>';
            if ($userLogin == $result['userlogin'] && $userPass == $result['userpass'])
            {
                echo '<a href="mylist.php">Зайти на личную страницу</a>';
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