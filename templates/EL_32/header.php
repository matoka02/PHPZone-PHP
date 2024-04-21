<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Мой блог</title>
  <link rel="stylesheet" href="/EL-32/styles.css">
</head>

<body>

  <table class="layout">
    <tr>
      <td colspan="2" class="header">
        Мой блог
      </td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: right">
        <?php if (!empty($user)): ?>
          Привет, 
        <?= $user->getNickname() ?> | <a href="http://myproject.loc/EL-32/users/logout">Выйти</a>
        <?php else: ?>
          <a href="http://myproject.loc/EL-32/users/login">Войти</a> 
          | 
          <a href="http://myproject.loc/EL-32/users/register">Зарегистрироваться</a>
        <? endif; ?>
      </td>
    </tr>
    <tr>
      <td>