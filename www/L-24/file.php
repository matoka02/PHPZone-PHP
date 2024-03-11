<?php

/*Построчное чтение из файла*/

$file = fopen(__DIR__ . '/file.txt', 'r');
for ($i = 0; $i < 4; $i++) {
  echo fgets($file);
  echo '<br>';
}
fclose($file);

// рефакторинг
echo '<hr>';
$file = fopen(__DIR__ . '/file.txt', 'r');
while (!feof($file)) {
  echo fgets($file);
  echo '<br>';
}
fclose($file);

/*Построчная запись в файл*/

echo '<hr>';
$file = fopen(__DIR__ . '/file2.txt', 'w');
for ($i = 1; $i < 101; $i++) {
  fputs($file, $i . PHP_EOL);
}
fclose($file);

$file = fopen(__DIR__ . '/file2.txt', 'r');
while (!feof($file)) {
  echo fgets($file);
  echo '<br>';
}
fclose($file);

/*Дозаписываем в конец файла*/

echo '<hr>';
$file = fopen(__DIR__ . '/file3.txt', 'a');
fputs($file, 'abc' . PHP_EOL);
fclose($file);

$file = fopen(__DIR__ . '/file3.txt', 'r');
while (!feof($file)) {
  echo fgets($file);
  echo '<br>';
}
fclose($file);

/*Читаем файл целиком*/

echo '<hr>';
$data = file_get_contents(__DIR__ . '/file.txt');
echo $data;

/*Запись в файл данных целиком*/

echo '<hr>';
// перезапись
$data = 'abc' . PHP_EOL . 'def' . PHP_EOL;
file_put_contents(__DIR__ . '/file3.txt', $data);
// дополнение
$data = 'abc' . PHP_EOL . 'def' . PHP_EOL;
file_put_contents(__DIR__ . '/file3.txt', $data, FILE_APPEND);