<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autorization</title>
</head>
<body>
<form action="#" method="post" name="auto">
    <input type="text" placeholder="Your login" name="userlogin"><br>
    <input type="password" placeholder="Your password" name="userpass"><br>
    <input type="submit" name="go" value="autorization"><br>
</form>

<?php
require_once 'ConnectDB.php';
if (isset($_POST['go']))
{
    if ($_POST['userlogin'] && $_POST['userpass'])
    {
        $userLogin = $_POST['userlogin'];
        $userPass = $_POST['userpass'];
        $query = mysqli_query($connect, "SELECT userpass FROM reg WHERE userlogin = '$userLogin'");
        $num = mysqli_num_rows($query);
        echo $num;
    }
}
?>
</body>
</html>