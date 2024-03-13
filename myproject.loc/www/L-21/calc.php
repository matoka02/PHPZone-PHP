<?php
if (empty($_GET)) {
  return 'Ничего не передано!';
};
if (empty($_GET['operation'])) {
  return 'Не передана операция';
};
//if (empty($_GET['x1']) || empty($_GET['x2'])) {
//  return 'Не переданы аргументы';
//};
// рефакторинг
//if (!isset($_GET['x1'], $_GET['x2'])) {
//  return 'Аргументы 1 или 2 не переданы';
//};
// рефакторинг
//if (!array_key_exists('x1', $_GET) || !array_key_exists('x2', $_GET)) {
//  return 'Аргументы 1 или 2 не переданы';
//};
// рефакторинг
$x1 = $_GET['x1'] ?? null;
$x2 = $_GET['x2'] ?? null;
if ($x1 === null || $x2 === null) {
  return 'Аргументы 1 или 2 не переданы';
};

//$x1 = $_GET['x1'];
//$x2 = $_GET['x2'];

//$expression = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = ';
//return $expression;

//switch ($_GET['operation']) {
//  case '+':
//    $result = $x1 + $x2;
//    break;
//  case '-':
//    $result = $x1 - $x2;
//    break;
//  default:
//    return 'Операция не поддерживается';
//}
//
//return $expression . $result;

/*Homework*/

$operations = $_GET['operation'];

if (!is_numeric($x1) && !is_numeric($x2)) {
  return 'Введите число';
};

$x1 = (float)$x1;
$x2 = (float)$x2;

switch ($operations) {
  case '+':
    $result = $x1 + $x2;
    break;
  case  '-':
    $result = $x1 - $x2;
    break;
  case  '/':
    $result = $x2 != 0 ? ($x1 / $x2) : 'На ноль делить нельзя';
    break;
  case  '*':
    $result = $x1 * $x2;
    break;

  default:
    return 'Операция не поддерживается';
}

$expression = $x1 . ' ' . $operations . ' ' . $x2 . ' = ';

return $expression . $result;