<?php

/*---BreLearning functions for working with arrays---*/

/*Проверка существования ключа в массиве*/
$array = [
  'login' => 'admin'
];
//echo $array['password'];
if (array_key_exists('password', $array)){
  echo $array['password'];
} else {
  echo 'Ключ "password" в массиве не найден';
};

/*Проверка существования значения*/
echo '<hr>';
$numbers = [ 1, 0, 7, 4 ];
if (in_array(7, $numbers)) {
  echo 'В массиве есть число 7.';
};

/*Объединение массивов*/

echo '<hr>';
$articlesFromIvan = [ 'Статья 1', 'Статья 2' ];
$articlesFromMaria = [ 'Статья 3', 'Статья 4' ];
$allArticles = array_merge($articlesFromIvan, $articlesFromMaria);
var_dump($allArticles);

// при строковіх ключах значения перепишутся
$array1 = [ 'login' => 'admin', 'password' => '123' ];
$array2 = [ 'password' => '666'];
var_dump(
  array_merge($array1, $array2)
);


/*Homework*/
echo '<hr>';
$array = [1, 3, 2];
sort($array);
$string=implode(":", $array);
echo $string;

echo '<br>';
$array = [1, 2, 3, 4, 5];
$slice=array_slice($array, 1, 3);
var_dump($slice);