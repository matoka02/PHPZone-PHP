<?php

/*---Inheritance in PHP---*/

class Post
{
//  private $title;
//  private $text;

  protected $title;
  protected $text;
  public function __construct(string $title, string $text)
  {
    $this->title = $title;
    $this->text = $text;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function setTitle(string $title): void
  {
    $this->title = $title;
  }
  public function getText()
  {
    return $this->text;
  }
  public function setText(string $text): void
  {
    $this->text = $text;
  }
};

class Lesson extends Post
{
  protected $homework;
  public function __construct(string $title, string $text, string $homework)
  {
//    $this->title = $title;
//    $this->text = $text;
    parent::__construct($title, $text);
    $this->homework = $homework;
  }
  public function getHomework(): string
  {
    return $this->homework;
  }
  public function setHomework(string $homework): void
  {
    $this->homework = $homework;
  }
};

$lesson = new Lesson('Заголовок', 'Текст', 'Домашнее задание');
//echo 'Название урока: ' . $lesson->getTitle();
var_dump($lesson);

/*Homework*/
//Создайте ещё один класс, являющийся наследником класса Lesson - PaidLesson (платный урок).
//Объявите в нем свойство price (цена), а также геттеры и сеттеры для этого свойства. Добавьте в конструкторе параметр, через который это свойство будет устанавливаться при создании объекта.
//Создайте объект этого класса со следующими свойствами:
// - заголовок: Урок о наследовании в PHP
// - текст: Лол, кек, чебурек
// - домашка: Ложитесь спать, утро вечера мудренее
// - цена: 99.90
//Выведите этот объект с помощью var_dump()

echo '<hr>';
class PaidLesson extends Lesson
{
  private $price;
  public function __construct(string $title, string $text, string $homework, float $price)
  {
    parent::__construct($title, $text, $homework);
    $this->price = $price;
  }
  public function getPrice()
  {
    return $this->price;
  }
  public function setPrice(float $price): void
  {
    $this->price = $price;
  }
};

$myPaidLesson = new PaidLesson('Урок о наследовании PHP', 'лол, кек, чебурек',
  'Домашка: ложитесь спать, утро вечера мудренее', 99.90);
var_dump($myPaidLesson);