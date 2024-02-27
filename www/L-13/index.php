<?php

/*---Learning Arrays in PHP---*/

$fruits = [];
var_dump($fruits);
// C:\OSPanel\domains\myproject.loc\www\L-13\index.php:6: array (size=0) empty

// устаревшая запись
// $fruits = array();

echo '<hr>';
$fruits = ['apple', 'orange', 'grape'];
var_dump($fruits);
// C:\OSPanel\domains\myproject.loc\www\L-13\index.php:13:array (size=3)
//  0 => string 'apple' (length=5)
//  1 => string 'orange' (length=6)
//  2 => string 'grape' (length=5)
echo '<br>';
echo $fruits[0];
echo '<br>';
echo $fruits[2];
echo '<br>';
echo $fruits[6];    // Warning: Undefined array key 6 in C:\OSPanel\domains\myproject.loc\www\L-13\index.php on line 24

/*Добавление и удаление элементов массива*/

echo '<hr>';
$fruits[] = 'mango';
echo $fruits[3];
var_dump($fruits);

/*
 * ПОСЛЕ УДАЛЕНИЯ ЭЛЕМЕНТА МАССИВА ПОРЯДОК КЛЮЧЕЙ НЕ МЕНЯЕТСЯ/НЕ ПЕРЕСЧИТЫВАЕТСЯ!
*/
unset($fruits[2]);
var_dump($fruits);

echo '<hr>';
$fruits = [5 => 'apple', 3 => 'orange', 9 => 'grape'];
var_dump($fruits);
$fruits[20] = 'mango';
var_dump($fruits);

// замена по ключу
echo '<hr>';
$fruits = [5 => 'apple', 3 => 'orange', 9 => 'grape'];
var_dump($fruits);
$fruits[5] = 'mango';
var_dump($fruits);

/*Ассоциативные массивы*/

echo '<hr>';
echo '<hr>';
$article = ['title' => 'Название статьи', 'text' => 'Текст статьи'];
$article['author'] = 'Имя автора';
var_dump($article);
?>

<html lang="ru">
<head>
  <title><?= $article['title'] ?></title>
</head>
<body>
<h1><?= $article['title'] ?></h1>
<p><?= $article['text'] ?></p>
<p><?= $article['author'] ?></p>
</body>
</html>

<?php
/*Многомерные массивы*/

echo '<hr>';
echo '<hr>';
$article2 = [
  'title' => 'Название статьи',
  'text' => 'Текст статьи',
  'author' => [
    'first_name' => 'Иван',
    'last_name' => 'Иванов'
  ]
];
var_dump($article2);
echo $article2['author']['first_name'];
?>
<html lang="en">
<head>
  <title><?= $article2['title'] ?></title>
</head>
<body>
<h1><?= $article2['title'] ?></h1>
<p><?= $article2['text'] ?></p>
<p><?= $article2['author']['first_name'] . ' ' . $article2['author']['last_name'] ?></p>
</body>
</html>

<?php
/*Homework*/
echo '<hr>';
echo '<hr>';
$arrayFilm = [
  'film' => [
    'The Dark Knight' => [
      'Stars' => [
        ['Christian Bale' => 'born - January 30, 1974'],
        ['Aaron Eckhart' => 'born -  March 12, 1968']
      ]
    ]
  ]
];
$arrayFilm['film']['The Dark Knight']['Stars'][] = ['Heath Ledger' => 'born - April 4, 1979'];
var_dump($arrayFilm['film']['The Dark Knight']['Stars']);

