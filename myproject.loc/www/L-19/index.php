<?php

/*---GET requests in PHP---*/

//echo 'Hello world!';

// Ввести в браузер
// http://myproject.loc/L-19/index.php?arg1=123&arg2=scrrr
//var_dump($_GET);

// Ввести в браузер
// http://myproject.loc/L-19/index.php?login=admin&password=12345
//var_dump($_GET);
//echo $_GET['login'];
$login = !empty($_GET['login']) ? $_GET['login'] : 'логин не передан!';
$password = !empty($_GET['password']) ? $_GET['password'] : 'пароль не передан!';
?>

<html lang="ru">
<head>
  <title>Знакомство с GET-запросами</title>
</head>
<body>
<p>
  Переданный логин: <?= $login ?>
  <br>
  Переданный пароль: <?= $password ?>
</p>
</body>
</html>

<?php
// Ввести в браузер
// http://myproject.loc/L-19/index.php
echo '<hr>';
?>

<html lang="ru">
<head>
  <title>Форма входа</title>
</head>
<body>
<form action="/L-19/login.php" method="get">
  <label>
    Логин <input type="text" name="login">
  </label>
  <br>
  <label>
    Пароль <input type="password" name="password">
  </label>
  <br>
  <input type="submit" value="Войти">
</form>
</body>
</html>

<?php
// admin
// Pa$$w0rd
// Ввести в браузер
// http://myproject.loc/L-19/login.php?login=admin&password=Pa%24%24w0rd;
echo '<hr>';

