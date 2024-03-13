<?php

/*---Foreach loop in PHP---*/

$carsSpeeds = [
  95,
  140,
  78
];

$averageSpeed = ($carsSpeeds[0] + $carsSpeeds[1] + $carsSpeeds[2]) / 3;
echo $averageSpeed;

echo '<br>';
foreach ($carsSpeeds as $index => $speed) {
  echo $index . '-' . $speed . '<br>';
};

echo '<br>';
$sumOfSpeeds = 0;
foreach ($carsSpeeds as $speed) {
  $sumOfSpeeds += $speed;
};
echo $sumOfSpeeds;
$countOfCars = count($carsSpeeds);
$averageSpeed = $sumOfSpeeds / $countOfCars;
echo '<br>';
echo 'Средняя скорость движения по трассе: ' . $averageSpeed;

/*Homework*/
echo '<br>';
$sumOfSpeeds = 0;
$countOfCars = 0;
foreach ($carsSpeeds as $speed) {
  $sumOfSpeeds += $speed;
  $countOfCars++;
};
$averageSpeed = $sumOfSpeeds / $countOfCars;
echo 'Средняя скорость движения по трассе: ' . $averageSpeed;