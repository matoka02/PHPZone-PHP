<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Мой блог</title>
  <link rel="stylesheet" href="/EL-29/styles.css">
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
      <?= !empty($user) ? 'Привет, ' . $user->getNickname() : 'Войдите на сайт' ?>
    </td>
  </tr>
  <tr>
    <td>