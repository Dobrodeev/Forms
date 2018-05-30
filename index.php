<?php require_once 'valid.php'?>
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