<?php

namespace src\MyProject\EL_17\Models\Articles;
use src\MyProject\EL_17\Models\Users\User;

class Article
{
//  private $title;
//  private $text;
//  private $author;
//
//  public function __construct(string $title, string $text, User $author)
//  {
//    $this->title = $title;
//    $this->text = $text;
//    $this->author = $author;
//  }
//
//  public function getTitle(): string
//  {
//    return $this->title;
//  }
//
//  public function getText(): string
//  {
//    return $this->text;
//  }
//
//  public function getAuthor(): User
//  {
//    return $this->author;
//  }

  /** @var int */
  private $id;
  /** @var string */
  private $name;
  /** @var string */
  private $text;
  /** @var int */
  private $authorId;
  /** @var string */
  private $createdAt;

  public function __set($name, $value)
  {
//    echo 'Пытаюсь задать для свойства ' . $name . ' значение ' . $value . '<br>';
//    $this->$name = $value;
    $camelCaseName = $this->underscoreToCamelCase($name);
    $this->$camelCaseName = $value;
  }

  /**
   * @return int
   */
  public function getId(): int
  {
    return $this->id;
  }

  /**
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @return string
   */
  public function getText(): string
  {
    return $this->text;
  }

  public function underscoreToCamelCase(string $source): string
  {
    return lcfirst(str_replace('_', '', ucwords($source, '_')));
  }
}