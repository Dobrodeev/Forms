<?php
//session_start();
//$_SESSION = array();
//session_destroy();
require_once 'ConnectDB.php';

if (isset($_POST['doLog']))
{
    /*echo '<pre>';
    print_r($_POST);
    echo '</pre>';*/
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
<!--<!doctype html>
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
</html>-->
<!--<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Animated Login and Sign up</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300, 400, 500" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


    <link rel="stylesheet" href="css/style.css">


</head>

<body>-->
<!--
This was created based on the Dribble shot by Deepak Yadav that you can find at https://goo.gl/XRALsw
I am @hurickkrugner on Twitter or @hk95 on GitHub. Feel free to message me anytime.
-->

<!--<section class="user">
    <div class="user_options-container">
        <div class="user_options-text">
            <div class="user_options-unregistered">
                <h2 class="user_unregistered-title">Don't have an account?</h2>
                <p class="user_unregistered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever street art fap.</p>
                <button class="user_unregistered-signup" id="signup-button">Sign up</button>
            </div>

            <div class="user_options-registered">
                <h2 class="user_registered-title">Have an account?</h2>
                <p class="user_registered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever street art fap.</p>
                <button class="user_registered-login" id="login-button">Login</button>
            </div>
        </div>

        <div class="user_options-forms" id="user_options-forms">
            <div class="user_forms-login">
                <h2 class="forms_title">Login</h2>
                <form class="forms_form" method="post">
                    <fieldset class="forms_fieldset">
                        <div class="forms_field">
                            <input type="email" placeholder="Email" name="userlogin" class="forms_field-input" required autofocus />
                        </div>
                        <div class="forms_field">
                            <input type="password" placeholder="Password" name="userpass" class="forms_field-input" required />
                        </div>
                    </fieldset>
                    <div class="forms_buttons">
                        <button type="button" class="forms_buttons-forgot">Forgot password?</button>
                        <input type="submit" value="Log In" name="Go" class="forms_buttons-action">
                    </div>
                </form>
            </div>
            <div class="user_forms-signup">
                <h2 class="forms_title">Sign Up</h2>
                <form class="forms_form">
                    <fieldset class="forms_fieldset">
                        <div class="forms_field">
                            <input type="text" placeholder="Full Name" class="forms_field-input" required />
                        </div>
                        <div class="forms_field">
                            <input type="email" placeholder="Email" class="forms_field-input" required />
                        </div>
                        <div class="forms_field">
                            <input type="password" placeholder="Password" class="forms_field-input" required />
                        </div>
                    </fieldset>
                    <div class="forms_buttons">
                        <input type="submit" value="Sign up" class="forms_buttons-action">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script  src="js/index.js"></script>-->

</body>
</html>