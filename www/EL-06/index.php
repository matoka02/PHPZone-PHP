<?php

/*---Learning abstract classes in PHP---*/

abstract class AbstractClass
{
  abstract public function getValue();
  public function printValue()
  {
    echo "Value: " . $this->getValue() . "\n";
  }
}

//$object = new AbstractClass();

class ClassA extends AbstractClass
{
 private $value;
 public function __construct(string $value)
 {
   $this->value = $value;
 }
 public function getValue()
 {
   return $this->value;
 }
};

$object = new ClassA("AAA");
$object->printValue();

/*Homework*/

//Создайте абстрактный класс Human.
//Отнаследуйте от него 2 класса: FinnishHuman и EnglishHuman.
//Реализуйте в них методы getGreetings(), которые будут возвращать приветствие на разных языках, вроде «Привет».
//Реализуйте в них методы getMyNameIs(), которые будут возвращать на разных языках слова «Меня зовут».
//В итоге метод introduceYourself должен возвращать строку, вроде «Привет! Меня зовут Иван.»
//Создайте объекты этих классов и заставьте их поздороваться.

echo '<hr>';
abstract class HumanAbstract
{
  private $name;
  public function __construct(string $name)
  {
    $this->name = $name;
  }
  public function getName(): string
  {
    return $this->name;
  }
  abstract public function getGreetings(): string;
  abstract public function getMyNameIs(): string;
  public function introduceYourself(): string
  {
    return $this->getGreetings() . '! ' . $this->getMyNameIs() . ' ' . $this->getName() . '.';
  }
};

class FinnishHuman extends HumanAbstract
{
  public function getGreetings(): string
  {
    return 'Hei';
  }
  public function getMyNameIs(): string
  {
    return 'Mina olen';
  }
};

class EnglishHuman extends HumanAbstract
{
  public function getGreetings(): string
  {
    return 'Hi';
  }
  public function getMyNameIs(): string
  {
    return 'My name is';
  }
};

$finnish = new FinnishHuman('Pekka');
$english = new EnglishHuman('John');

echo $finnish->introduceYourself();
echo '<br>';
echo $english->introduceYourself();
