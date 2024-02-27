<?php

/*---For loop: working with numbers---*/

for ($i = 0; $i < 100; $i++) {
  echo $i;
  echo ', ';
};

echo '<hr>';
for ($i = 1;$i <= 50;$i++) {
  if ($i % 2 === 0) {
    echo $i;
    echo ', ';
  }
};

echo '<hr>';
$randomValues = [];
for ($i = 1;$i <= 50;$i++) {
  $randomValues[] = mt_rand();
};
var_dump($randomValues);

echo '<hr>';
$sum = 0;
for ($i = 1;$i <= 1000;$i++) {
  $sum += $i;
};
echo 'Сумма чисел от 1 до 1000: '.$sum;