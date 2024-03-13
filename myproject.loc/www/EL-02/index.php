<?php

/*---Encapsulation in PHP---*/

class Cat
{
//  public $name;
  private $name;
  public function __construct(string $name)
  {
    $this->name = $name;
  }
  public $color;
  public $weight;
  public function sayHello()
  {
//    echo 'Мяу!';
    echo 'Привет! Меня зовут ' . $this->name . '.';
  }

  public function setName(string $name)
  {
    $this->name = $name;
  }
  public function getName(): string
  {
    return $this->name;
  }
};

//$cat1 = new Cat();
//$cat1->name = 'Снежок';
//$cat1->setName('Снежок');
$cat1 = new Cat('Снежок');
$cat1->color = 'white';
$cat1->weight = 3.5;

//$cat2 = new Cat();
//$cat2->name = 'Барсик';
//$cat2->setName('Барсик');
$cat2 = new Cat('Барсик');
$cat2->color = 'black';
$cat2->weight = 6.2;

var_dump($cat1);
var_dump($cat2);

echo "<hr>";
//echo $cat1->name;
echo $cat1->getName();
echo '<br>';
$cat1->sayHello();
echo '<br>';
$cat2->sayHello();

/*Homework*/
//Дополните метод sayHello(), чтобы котики после того, как назвали своё имя, говорили о том, какого они цвета.
//Сделайте свойство color приватным и добавьте в конструктор ещё один аргумент, через который при создании котика будет задаваться его цвет.
//Сделайте геттер, который будет позволять получить свойство color.
//Подумайте, стоит ли давать возможность менять котикам цвета после их создания? Если вам хватило совести сказать да - добавьте ещё и сеттер для этого свойства. Это вам в наказание - хорошие люди котов не перекрашивают.
//Создайте теперь белого Снежка и рыжего Барсика и попросите их рассказать о себе.

echo "<hr>";
class Cat2
{
  private $name;
  private $color;
  public $weight;
  // при создании обязательно указать имя и цвет
  public function __construct (string $name, string $color)
  {
    $this->name = $name;
    $this->color = $color;
  }
  // при приветсвии озвучены обязательные параметры
  public function sayHello()
  {
    echo 'Здравствуйте, меня зовут ' . $this->name . ', моя шерстка цвета ' . $this->color . '<br>';
  }
  public function setName(string $name)
  {
    $this-> name = $name;
  }
  // метод для присвоения цвета шерсти кота
  public function setColor(string $color)
  {
    $this-> color = $color;
  }
  public function  getName():string
  {
    return $this->name;
  }
  // получаем значения цвета шерсти
  public function getColor():string
  {
    return $this->color;
  }
};

$cat1 = new Cat2('Снежок', 'белый');
$cat1-> sayHello();
$cat1-> setName('Снег');
$cat1->setColor('серый');
$cat2 = new Cat2('Барсик', 'рыжий');
$cat2->sayHello();
$cat1->sayHello();

