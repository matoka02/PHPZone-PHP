<?php

/*---Break and continue statements in PHP---*/

$array = [2, 3, 6, 1, 23, 2, 56, 7, 1, 15];
$number = 1;
$isNumberFound = false;
foreach ($array as $item) {
  echo 'Сравниваем с числом элемент ' . $item . '<br>';
  if ($item === $number) {
    $isNumberFound = true;
    // рефакторинг
    break;
  }
};
echo $isNumberFound ? 'Число найдено' : 'Число не найдено';

echo '<hr>';
for ($i = 1; $i <= 20; $i++) {
  if ($i % 3 != 0) {
    echo $i;
    echo ', ';
  }
};
// рефакторинг
echo '<br>';
for ($i = 1; $i <= 20; $i++) {
  if ($i % 3 === 0) {
    continue;
  };
  echo $i;
  echo ', ';
};


/*Homework*/
echo '<hr>';
function findNum(array $array, int $num)
{
  foreach ($array as $volume){
    if ($volume===$num) return true;
  };
  return false;
};
var_dump(findNum([5,8,14], 8));

echo '<hr>';
function countInArray(array $array, int $num)
{
  $i=0;
  foreach ($array as $volume){
    if ($volume===$num) {
      $i++;
    }
  };
  return $i;
};
var_dump(countInArray([5,8,14,10,16,8,14,2], 8));
