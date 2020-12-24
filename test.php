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

<!--<h2>Счетчик</h2>-->
<!--<p>В текущей сессии работы с браузером Вы открыли эту страницу --><? //= $_SESSION['count'] ?><!-- раз(а).</p>-->
<?
if ($_SESSION['count'] == 1) {
    echo 'Уже 20 раз.';
} elseif ($_SESSION['count'] == 2) {

} elseif ($_SESSION['count'] == 3) {

} elseif ($_SESSION['count'] == 4) {

} elseif ($_SESSION['count'] == 5) {

} else {
    return true;
}
?>
<?
$_SESSION['question1'] = 'Столица Украины?';
$_SESSION['answer1'] = ['Варшава', 'Умань', 'Киев', 'Париж'];
$_SESSION['question2'] = 'Столица Казахстана?';
$_SESSION['answer2'] = ['Ереваан', 'Нур-Султан', 'Батуми', 'Тебриз'];
$_SESSION['question3'] = 'Столица Украины?';
$_SESSION['answer3'] = ['Варшава', 'Умань', 'Киев', 'Париж'];
$_SESSION['question4'] = 'Столица Украины?';
$_SESSION['answer4'] = ['Варшава', 'Умань', 'Киев', 'Париж'];
$_SESSION['question5'] = 'Столица Украины?';
$_SESSION['answer5'] = ['Варшава', 'Умань', 'Киев', 'Париж'];

$question = $_SESSION['question1'];
$answer1 = $_SESSION['answer1'][0];
$answer2 = $_SESSION['answer1'][1];
$answer3 = $_SESSION['answer1'][2];
$answer4 = $_SESSION['answer1'][3];

?>
<form action="">
    <p><?= $question ?></p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
        <label class="form-check-label" for="exampleRadios1">
            <?= $answer1 ?>
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
        <label class="form-check-label" for="exampleRadios2">
            <?= $answer2 ?>
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
        <label class="form-check-label" for="exampleRadios2">
            <?= $answer3 ?>
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
        <label class="form-check-label" for="exampleRadios2">
            <?= $answer4 ?>
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Дальше</button>
</form>

<!--<a href="test.php">Нажмите сюда для обновления страницы!</a>
<p>Закройте браузер, чтобы обнулить этот счетчик.</p>-->
<?php
/*echo '<pre>';
print_r($_SESSION);
echo '</pre>';*/
?>
</body>
</html>