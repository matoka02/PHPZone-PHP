<?php

/*---Authorization system using cookies in PHP---*/
require __DIR__ . '/auth.php';
$login = getUserLogin();
?>
<html lang="ru">
<head>
  <title>Главная страница</title>
</head>
<body>
<?php if ($login === null): ?>
  <a href="/L-23/login.php">Авторизуйтесь</a>
<?php else: ?>
  Добро пожаловать, <?= $login ?>
  <br>
  <a href="/L-23/logout.php">Выйти</a>
<?php endif; ?>
</body>
</html>