<?php

/*---Debugging PHP 8 with Xdebug 3 in PHPStorm---*/

$x=5+2;
$x*=2;
$x+=2;
echo $x;

/*
 * Включить расширение Xdebug: OpenServer->Дополнительно->Конфигурация->PHP_8.1->PHP_8.1_php.ini
 * раскомментировать
 * ;zend_extension = xdebug
 * в секции [xdebug] раскомментировать
 * ;xdebug.client_host              = "localhost"
 * ;xdebug.client_port              = 9003
 * изменить значения с/на
 * xdebug.mode                     = develop,debug
 * xdebug.mode                     = off
 */

/*
 * Далее заходим в магазин расширений Google Chrome, находим расширение XDebug helper и устанавливаем его.
 * В правом верхнем углу Google Chrome находим иконку с паззлом, жмем на нее, и напротив XDebug helper жмём на три точки. Выбираем пункт "Параметры".
 * В  секции IDE key выбираем PhpStorm и обязательно! жмём кнопку Save.
 * Жмём на паззл ещё раз, и напротив пункта Xdebug helper жмём кнопку для закрепления плагина на панели.
*/



echo '<hr>';
function getSum(float $x, float $y)
{
  return $x + $y;
}
function getSumOfCos(float $x, float $y)
{
  $cosX = cos($x);
  $cosY = cos($y);
  return getSum($cosX, $cosY);
};
echo getSumOfCos(1.44, 2);

/*Пример с рекурсией*/
echo '<hr>';
function numbers(int $x) {
  if ($x == 0) {
    echo $x;
    return;
  }
  numbers($x - 1);
  echo ', ' . $x;
};
numbers(3);