<?php

/*---Variables---*/

//$x;
//$x=2;

//$sum=5+10;
//echo $sum;

$x = 2+3;
$y = ($x*2)/($x+1);
echo $y;
//echo $Y;

/*
 * для вывода ошибок заменить в Дополнительно->Конфигурация->PHP_8.1->PHP_8.1_php.ini
 * error_reporting              = E_ALL & ~E_NOTICE
 * на
 * error_reporting              = E_ALL
*/

/*
 * Warning: Undefined variable $Y in C:\OSPanel\domains\myproject.loc\www\L-06\index.php on line 14
*/

$email='qwerty@gmail.com';
$catName='Барсик';
$dayOfWeek='Среда';

/*Homework*/

echo '<br>';
$a=3;
$b=5;
echo $a, '_', $b;
$c=$a;
$a=$b;
$b=$c;
echo '<br>';
echo $a, '_', $b;

echo '<br>';
$a1 = 3;
$b1 = 5;
echo $a1, '_', $b1;
$a1 = $a1 + $b1;
$b1 = $a1 - $b1;
$a1 = $a1 - $b1;
echo '<br>';
echo $a1, '_', $b1;

