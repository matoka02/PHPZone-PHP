<?php

/*---While: the simplest loop in PHP---*/

$i = 0;
while ($i <= 10) {
  echo $i++;
  echo '<br>';
};

echo '<hr>';
$i = 2;
while ($i < 100000) {
  echo $i;
  $i *= 2;
  echo '<br>';
};

/*Homework*/
echo '<hr>';
$arr = [];
$x = 345;
while ($x <= 357) {
  if ($x % 2 == 0) {
    $arr[] = $x;
  }
  $x++;
};
foreach ($arr as $value) {
  echo $value . ', ';
};

//echo '<hr>';
//while (true) {
//  echo 1;
//};

/*
 * Включить расширение Xdebug: OpenServer->Дополнительно->Конфигурация->PHP_8.1->PHP_8.1_php.ini
 * изменить значения с/на
 * max_execution_time           = 60
 * max_execution_time           = 1
 */

