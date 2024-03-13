<?php
$login = !empty($_GET['login']) ? $_GET['login'] : '';
$password = !empty($_GET['password']) ? $_GET['password'] : '';

if ($login === 'admin' && $password === 'Pa$$w0rd') {
  $isAuthorized = true;
} else {
  $isAuthorized = false;
}
?>
<html lang="ru">
<head>
  <title>Результат авторизации</title>
</head>
<body>
<p>
  <?= $isAuthorized ? 'Логин и пароль верные!' : 'Неправильный логин или пароль' ?>
</p>
</body>
</html>

<?php
/*Homework*/
$login = $_GET['login'] ?? '';
$password = $_GET['password'] ?? '';

if ($login === 'admin' && $password === 'Pa$$w0rd') {
  $authResult = 'Авторизация прошла успешно';
} else if($login !== 'admin') {
  $authResult = 'Логин неверный';
} else {
  $authResult = 'Пароль неверный';
}
?>

<html lang="ru">
<head>
  <title>Результат авторизации</title>
</head>
<body>
<?= $authResult ?>
</body>
</html>


