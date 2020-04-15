<?
session_name("test");
session_start();
$_SESSION['count'] = @$_SESSION['count'] + 1;
//зачем тут @? Напишите подругому.
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

<h2>Счетчик</h2>
В текущей сессии работы с браузером Вы открыли эту страницу
<?= $_SESSION['count'] ?> раз(а).
Закройте браузер, чтобы обнулить этот счетчик.
<a href="#">Нажмите сюда для обновления страницы!</a>
</body>
</html>