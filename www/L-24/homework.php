<?php

//1.Напишите программу, которая выводит свой собственный код.
//Сделайте так, чтобы в этой программе не было упоминания имени самого скрипта (если программа лежит в файле homework.php, то упоминания homework.php не должно быть в исходнике).
//$file = file_get_contents(__FILE__);
//echo $file;

// рефакторинг
//$file = fopen(__FILE__ , 'r');
//while  (!feof($file)) {
//  echo fgets($file);
//  echo '<br>';
//}

// рефакторинг
//$file = fopen(__FILE__, 'r');
//while (!feof($file)) {
//  echo fgets($file);
//  echo '<br>';
//}
//fclose($file);

//2.Выведите список всех файлов в текущей директории скрипта.
//Создайте теперь в директории со скриптом несколько папок.
//Сделайте так, чтобы в списке, выводимом программой, остались только папки.

//выводим файлы
$files = scandir(__DIR__ . '/');
foreach ($files as $file) {
  echo $file . '<br>';
}

//выводим папки как папки, прокольно что есть is_dir)
$files = scandir(__DIR__ . '/');
foreach ($files as $dirr) {
  if (is_dir($dirr)) {
    echo $dirr . '<br>';
  }
}

// 3.Создайте теперь в директории со скриптом несколько папок.
// Сделайте так, чтобы в списке, выводимом программой, остались только папки.

// Массив с именами новых папок
$newfolders = ['folder-1', 'folder-2', 'folder-3'];

// Если папки еще не существуют, создаем новые
foreach ($newfolders as $folder) {
  if (!is_dir($folder)) {
    mkdir($folder, 0700);
  }
}

// Задаем директорию и получаем массив с файлами
$dir = __DIR__ . '/';
$files = scandir($dir);

// Выводит список всех папок
foreach ($files as $value) {
  if (is_dir($value))
    echo $value . '</br>';
}