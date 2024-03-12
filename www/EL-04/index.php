<?php

/*---Interfaces in PHP---*/

interface CalculateSquare
{
  public function calculateSquare(): float;
};

class Rectangle implements CalculateSquare
{
  private $x;
  private $y;
  public function __construct(float $x, float $y)
  {
    $this->x = $x;
    $this->y = $y;
  }
  public function calculateSquare(): float
  {
    return $this->x * $this->y;
  }
};

class Square implements CalculateSquare
{
  private $x;
  public function __construct(float $x)
  {
    $this->x = $x;
  }
  public function calculateSquare(): float
  {
    return $this->x ** 2;
  }
};

class Circle implements CalculateSquare
{
  const PI = 3.1416;
  private $r;
  public function __construct(float $r)
  {
    $this->r = $r;
  }
  public function calculateSquare(): float
  {
//    $pi = 3.1416;
//    return $pi * ($this->r ** 2);
    return self::PI * ($this->r**2);
  }
};

$circle1 = new Circle(2.5);
var_dump($circle1 instanceof Circle);
var_dump($circle1 instanceof Rectangle);
var_dump($circle1 instanceof CalculateSquare);

echo '<hr>';
$objects = [
  new Square(5),
  new Rectangle(2, 4),
  new Circle(5)
];

foreach ($objects as $object) {
  if ($object instanceof CalculateSquare) {
    echo 'Объект реализует интерфейс CalculateSquare. Площадь: ' . $object->calculateSquare();
    echo '<br>';
  }
}

/*Homework*/
//Познакомьтесь самостоятельно с функцией get_class().
//Дополните информацию об объекте, для которого считается площадь – пишите что это объект такого-то класса.
//Для объектов, которые не реализуют интерфейс CalculateSquare пишите:
//Объект класса ТУТ_НАЗВАНИЕ_КЛАССА не реализует интерфейс CalculateSquare.

echo '<hr>';
foreach ($objects as $object) {
  if ($object instanceof CalculateSquare) {
    echo 'Объект реализует интерфейс CalculateSquare. Относится к классу ' .get_class($object) . '. Площадь: ' . $object->calculateSquare();
    echo '<br>';
  } else {
    'Объект класса' .get_class($object) . 'не реализует интерфейс CalculateSquare.';
  };
}