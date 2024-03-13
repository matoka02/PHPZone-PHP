<?php

/*---Data Types in PHP---*/

//$var = 123;
//$var = 'string';
//$var = 3.14;

//$var = 'string';
//$var = "string";
//$var = `string`;   // обратный кавычки не работают
//echo $var;

$var = 123;
echo "Значение переменной: $var";       // Значение переменной: 123
echo '<br>';
echo 'Значение переменной: $var';       // Значение переменной: $var
echo '<br>';
echo 'Значение переменной: '.$var;      // Значение переменной: 123

$string = 'Значение переменной: '.$var;

echo '<br>';
$x=1;
echo $x+'2';

$string2 = '123';
$numeric = (int) $string2;

$x=true;
$y=false;

