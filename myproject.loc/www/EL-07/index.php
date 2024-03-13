<?php

/*---Static methods and properties in PHP---*/

class A
{
  public static function test(int $x)
  {
    return 'x = '. $x;
  }
};
echo A::test(8);

class User
{
  private $role;
  private $name;
  public function __construct(string $role, string $name)
  {
    $this->role = $role;
    $this->name = $name;
  }
  public static function createAdmin(string $name)
  {
    return new self('admin', $name);
  }
};

//$admin = new User('admin', 'Иван');
$admin = User::createAdmin('Иван');
var_dump($admin);

echo '<hr>';
class B
{
  public static $x;
  public static function getX()
  {
    return self::$x;
  }
};
B::$x=5;
var_dump(B::$x);
$b = new B();
var_dump($b::$x);
var_dump($b->getX());

/*Применение статических свойств*/

echo '<hr>';

class Human
{
  private static $count = 0;
  public function __construct()
  {
    self::$count++;
  }
  public static function getCount()
  {
    return self::$count;
  }
};
$human1 = new Human();
$human2 = new Human();
$human3 = new Human();
echo 'Людей уже ' .Human::getCount();

