<?php

/*---Polymorphism in PHP---*/

class A
{
  public function sayHello()
  {
    return 'Hello, I am A';
  }
};

$a = new A();
var_dump($a instanceof A);

//class B extends A
//{
//
//}
//
//$b = new B();
//var_dump($b instanceof A);
//var_dump($a instanceof B);
//echo $b->sayHello();

echo '<hr>';
class B extends A
{
  public function sayHello()
  {
//    return 'Hello, I am B';
    return parent::sayHello().'. It was joke, I am B :)';
  }
}
$b = new B();
echo $b->sayHello();

echo '<hr>';
class C
{
  public function method1()
  {
    return $this->method2();
  }
  protected function method2()
  {
    return 'C';
  }
};

class D extends C
{
  public function method2()
  {
    return 'D';
  }
};

$d = new D();
echo $d->method1();
