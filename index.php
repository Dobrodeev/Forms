<?php
session_start();
require_once 'valid.php'
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
<h3>Registration</h3>
<form action="#" method="post" name="reg">
    <input type="text" placeholder="Your name" name="username"><br>
    <input type="text" placeholder="Your login" name="userlogin"><br>
    <input type="password" placeholder="Your password" name="userpass"><br>
    <input type="email" placeholder="Your email" name="usermail" <?php echo $error[0]?>><br>
    <input type="submit" name="go" value="registration"><br>
    <a href="auto.php">I already registered</a>
</form>
<h4><?php echo $result?></h4>
<h4><?php echo $login?></h4>
<?php

?>
</body>
</html>