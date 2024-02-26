<?php

/*---Operators in PHP---*/

var_dump(5/2);          // float(2.5)

echo '<br>';
$result=2<4;
var_dump($result);            // bool(true)

echo '<br>';
$result = 2 + 2 * 2;
var_dump($result);            // int(6)


/*Арифметические операторы*/

echo '<hr>';
$a = 6;
$b = 3;
// Сложение
var_dump($a + $b);
// Вычитание
var_dump($a - $b);
// Умножение
var_dump($a * $b);
// Деление
var_dump($a / $b);
// Остаток от деления
var_dump($a % 4);
// Возведение в степень
var_dump($a ** 2);


/*Оператор присваивания*/

echo '<hr>';
$a = 55;

$result = ($x = 5) * 2;
var_dump($result);           // int(10)

echo '<br>';
$x = 5;
$y = 7;
$y += $x;
var_dump($y);               // int(12)

echo '<br>';
$x = 6;
$y = 3;
$x /= $y;
var_dump($x);               // int(2)

echo '<br>';
$hello = 'Hello ';
$hello .= 'world!';
var_dump($hello);           // string(12) "Hello world!"

/*Операторы сравнения*/

echo '<hr>';
$x = 2;
$y = '2';
var_dump($x == $y);     // bool(true) - проверка на равенство
var_dump($x === $y);    // bool(false) - проверка на тождественное равенство
var_dump($x != $y);     // bool(false) - проверка на неравенство
var_dump($x !== $y);    // bool(true) - проверка на тождественное неравенство

echo '<br>';
$x = 2;
$y = 4;
var_dump($x > $y);      // bool(false) - $x больше $y
var_dump($x < $y);      // bool(true) - $x меньше $y
var_dump($x >= $y);     // bool(false) - $x больше или равно $y
var_dump($x <= $y);     // bool(true) - $x меньше или равно $y


/*Spaceship*/

echo '<hr>';
var_dump(2 <=> 4);      // int(-1)
var_dump(2 <=> 2);      // int(0)
var_dump(5 <=> 3);      // int(1)


/*Инкремент и декремент*/

echo '<hr>';
$x=4;
// постфиксный инкремент
//$y=$x++;
//var_dump($y);                 // int(4)
//var_dump($x);                 // int(5)
// без переменной
//$x++;
//var_dump($x);                 // int(5)
//var_dump($x);                 // int(5)
// префиксный инкремент
$y=++$x;
var_dump($y);                 // int(5)
var_dump($x);                 // int(5)


/*Логические операторы*/

echo '<hr>';
// логическое И
var_dump(true && true);     // Результат: true
var_dump(true && false);    // Результат: false
// логическое ИЛИ
var_dump(true || true);     // Результат: true
var_dump(true || false);    // Результат: true
var_dump(false || true);    // Результат: true
// ОТРИЦАНИЕ
var_dump(!true);                  // Результат: false
var_dump(!false);                 // Результат: true
// исключающее ИЛИ
var_dump(false xor true);   // Результат: true
var_dump(true xor true);    // Результат: false
var_dump(true xor false);   // Результат: true
var_dump(false xor false);  // Результат: false

echo '<br>';
$x=13;
$isEven=$x%2==0;
var_dump($isEven);                  // bool(false)
$isMoreThen10=$x>10;
var_dump($isMoreThen10);            // bool(true)
$isEvenAndMoreThen10=$isEven&&$isMoreThen10;
var_dump($isEvenAndMoreThen10);     // bool(false)


/*Строковый оператор конкатенации*/

echo '<hr>';
$string1 = 'Привет';
$string2 = 'мир!';

echo $string1 . ', ' . $string2;    // Привет, мир!


/*Homework*/

echo '<hr>';
var_dump(!1);                     // bool(false)
var_dump(!0);                     // bool(true)
var_dump(!true);                  // bool(false)
var_dump(2 && 3);           // bool(true)
var_dump(5 && 0);           // bool(false)
var_dump(3 || 0);           // bool(true)
var_dump(5 / 1);            // int(5)
var_dump(1 / 5);            // float(0.2)
var_dump(5 + '5string');    // Warning: A non-numeric value encountered in C:\OSPanel\domains\myproject.loc\www\L-08\index.php on line 154
var_dump('5' == 5);         // bool(true)
var_dump('05' == 5);        // bool(true)
var_dump('05' == '5');      // bool(true)

