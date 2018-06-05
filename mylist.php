<?php
require_once 'ConnectDB.php';
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
<h4>Вставить аватарку</h4>
    <form enctype="multipart/form-data" method="post">
        <input type="password" name="userpass" placeholder="password">
        Send this file: <input name="userfile" type="file">
        <input type="submit" value="Send File" class="btn btn-primary" name="go">
    </form>
<?php

$max_image_width = 1280;
$max_image_height = 960;
$max_image_size = 960 * 1280;
$valid_types = array("gif","jpg", "png", "jpeg");
if ($_POST['userpass'])
{
    $userpass = md5($_POST['userpass']);
    echo $userpass.'<br>';
    $query = "SELECT * FROM reg WHERE userpass = '$userpass'";
    echo $query.'<br>';

    $forDB = mysqli_query($connect, $query);
    $connectQuery = mysqli_fetch_array($forDB, MYSQLI_ASSOC);
    print_r($connectQuery);
    $num = mysqli_num_rows($forDB);
    if ($num == 1)
    {
        if (isset($_FILES["userfile"]))
        {
//            echo 1;
            if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
                $filename=basename($_FILES['userfile']['name']);
                $ext = substr($_FILES['userfile']['name'], 1 + strrpos($_FILES['userfile']['name'], "."));
                // strpos --  Возвращает позицию первого вхождения подстроки

                // получим массив свойств файла
                $size = GetImageSize($_FILES['userfile']['tmp_name']);

                //проверим размер фото
                if (filesize($_FILES['userfile']['tmp_name']) > $max_image_size) {
                    echo "Error: File size > " . $max_image_size;
                }
                elseif(!in_array($ext, $valid_types)){
                    echo 'Error: Invalid file type.';
                }
                elseif(($size) && ($size[0] < $max_image_width) && ($size[1] < $max_image_height)){
                    $uploaddir = 'uploads/';
                    $uploadfile = $uploaddir.$filename;
                    move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
                    echo "<img src='$uploadfile' alt='$filename' title='$filename' />";
                    $query = mysqli_query($connect, "UPDATE reg SET img = '$uploadfile' WHERE userpass = '$userpass'");
                }
                else {
                    echo 'Error: invalid image properties.';
                }

            }
            else { echo "Error: empty file.";}
        }
    }
    else
    {
        echo 'Введите правильный пароль';
    }
}
?>

<h4>Изменить пароль</h4>
<form method="post">
    <div class="form-group">
        <label for="exampleInputPassword1">Old Password</label>
        <input type="password" class="form-control" placeholder="Password" name="userpass">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">New Password</label>
        <input type="password" class="form-control" placeholder="Password" name="userpassNew">
    </div>

    <button type="submit" class="btn btn-default" name="go">Submit</button>
</form>
<?php
    if (isset($_POST['go']))
    {
        if ($_POST['userpass'] && $_POST['userpassNew'])
        {
            $userPass = md5($_POST['userpass']);
            $userPassNew = md5($_POST['userpassNew']);
            // if $arr['userPassNew'] усть то нельзя
            $query = mysqli_query($connect, "UPDATE reg SET userpass = '$userPassNew' WHERE userpass = '$userpass'");
            // добавить clear()
            if ($query)
            {
                echo 'Обновили пароль';
            }
        }
    }
?>
</body>
</html>