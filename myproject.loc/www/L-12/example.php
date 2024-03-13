<?php

echo __DIR__;
// C:\OSPanel\domains\myproject.loc\www\L-12

echo '<hr>';
// подключение файла не обязательно, остальной скрипт продолжит работу
//include __DIR__ . '/functions.php';
// подключение файла обязательно, остальной скрипт остановится
require __DIR__ . '/functions.php';
?>

<html>
<head>
  <title>Чётные и нечётные числа</title>
</head>
<body>
Число 2 <?= isEven(2) ? 'чётное' : 'нечётное' ?>
<br>
Число 5 <?= isEven(5) ? 'чётное' : 'нечётное' ?>
<br>
Число 8 <?= isEven(8) ? 'чётное' : 'нечётное' ?>
</body>
</html>
