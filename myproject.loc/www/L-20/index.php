<?php

/*---Processing POST requests in PHP---*/
?>

<html lang="ru">
<head>
  <title>Форма входа</title>
</head>
<body>
<form action="/L-20/login.php" method="post">
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
