<?php

/*---Functions in PHP---*/

$result = cos(3.14);
var_dump($result);

echo '<br>';
$string = 'abracadabra';
echo $string;
echo '<br>';
echo str_replace('a', 'E', $string);

echo '<br>';
function getSum($x, $y)
{
  return $x + $y;
};
$a = 5;
$b = 10;
echo getSum($a, $b) . '<br>';
echo getSum(-3, 4);

/*Области видимости*/

echo '<hr>';
function getSum2($x, $y)
{
  return $x + $y;
};
$x = 3;
$y = 5;
echo getSum2($x, $y);

/*Передача параметров по ссылке*/

echo '<hr>';
function plus5(&$x)
{
  $x = $x + 5;
};
$a = 3;
plus5($a);
echo $a;

/*Тайп-хинтинг (type hinting)*/

echo '<hr>';
/*
 * строгая типизация
 * declare(strict_types=1);
 */
function getSum3(int $x, int $y)
{
  var_dump($x);               // int(5)
  var_dump($y);               // int(4)
  return $x + $y;
};
echo getSum3(5, 4);           // 9

/*Функции без аргументов*/

echo '<hr>';
echo rand();
echo '<br>';
function getSinOfRandom()
{
return sin(rand());
};
echo 'Синус случайного числа: '. getSinOfRandom();

/*Функция внутри функции*/

echo '<hr>';
function getSumOfCos(float $x, float $y)
{
  $cosX = cos($x);
  $cosY = cos($y);
  return $cosX + $cosY;
};
echo 'Сумма косинусов двух чисел: '. getSumOfCos(1.44, 2);

echo '<br>';
function getMax(int $x, int $y)
{
  if ($x > $y) {
    return $x;
  } else {
    return $y;
  }
};
$a = 5;
$b = 8;
echo 'Наибольшее число: ' . getMax($a, $b);

// рефакторинг
echo '<br>';
function getMax2(int $x, int $y)
{
  if ($x > $y) {
    return $x;
  };

  return $y;
};
$a = 44;
$b = 18;
echo 'Наибольшее число:' . getMax2($a, $b);

/*Рекурсивные функции*/

// Возведение в степень
echo '<hr>';
function power(int $x, int $n)
{
  var_dump($x, $n);
  // Если сейчас степень равна нулю, то возвращаем единицу
  if ($n === 0) {
    return 1;
  }
  // В остальных случаях - умножаем число на возведённое в степень n - 1 и возвращаем его
  return $x * power($x, $n - 1);
};
echo 'Результат: ' . power(2, 4);

// Кумулятивная сумма
echo '<br>';
function getSumOfNumbersFromZero(int $n)
{
  // Если сейчас 1, то просто возвращаем 1
  if ($n == 1) {
    return 1;
  };
  // В остальных случаях - прибавляем текущее число к сумме всех предыдущих
  return $n + getSumOfNumbersFromZero($n - 1);
}

echo 'Результат: ' . getSumOfNumbersFromZero(5);

/*Homework*/

/*
 * Напишите функцию, которая будет принимать на вход 3 аргумента с типом float и возвращать минимальное значение.
 * Напишите функцию, которая принимает на вход два аргумента по ссылкам и умножает каждый из них на 2.
 * Напишите функцию, считающую факториал числа (произведение целых чисел от единицы до переданного). Реализуйте с помощью рекурсии.
 * Напишите функцию, которая будет выводить на экран целые числа от 0 до переданного значения. И да, тут тоже нужно реализовать с помощью рекурсии (чтобы лучше с ней познакомиться, несмотря на то что вариант с циклом проще).
 */
echo '<hr>';
function getMin(float $a, float $b, float $c)
{
  if ($a < $b && $a < $c) {
    return $a;
  }
  if ($b < $c) {
    return $b;
  }
  return $c;
};
$a=5.5;
$b=8.4;
$c=2.1;
echo 'Результат: ' .getMin($a, $b, $c);   // Результат: 2.1

echo '<br>';
function multiplyBy2(int &$x, int &$y)
{
  $x = 2 * $x;
  $y = 2 * $y;
};
$x=5;
$y=8;
multiplyBy2($x, $y);
echo 'Результат: '.$x.'/'.$y;           // Результат: 10/16

echo '<br>';
function factorial(int $x)
{
  if ($x === 0) {
    return 1;
  }
  return $x * factorial($x - 1);
};
echo 'Результат: ' . factorial(5);  // Результат: 120

echo '<br>';
function numbers(int $x) {
  if ($x === 0) {
    echo $x;
    return;
  }
  numbers($x - 1);
  echo ', ' . $x;
};
echo numbers(5);                    // 0, 1, 2, 3, 4, 5

