<?php

/*---Object Oriented Approach in PHP---*/

class User
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
};

class Article
{
  private $title;
  private $text;
  private $author;
  public function __construct(string $title, string $text, User $author)
  {
    $this->title = $title;
    $this->text = $text;
    $this->author = $author;
  }
  public function getTitle(): string
  {
    return $this->title;
  }
  public function getText(): string
  {
    return $this->text;
  }
  public function getAuthor(): User
  {
    return $this->author;
  }
};

$author = new User('Иван');
$article = new Article('Заголовок', 'Текст', $author);
var_dump($article);
echo 'Имя автора: '.$article->getAuthor()->getName();

class Cat {
  private $name;
  public function __construct(string $name)
  {
    $this->name = $name;
  }
  public function getName(): string
  {
    return $this->name;
  }
};

$author = new User('Иван');
$cat = new Cat('Барсик');
//$article = new Article('Заголовок', 'Текст', $cat);

echo '<hr>';

class Admin extends User
{
}

$author = new Admin('Пётр');
$article = new Article('Заголовок', 'Текст', $author);
var_dump($article);
