<?php

namespace src\MyProject\EL_11\Models\Articles;
use src\MyProject\EL_11\Models\Users\User;

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
    //public function getAuthor(): \MyProject\EL_11\Models\Users\User
  {
    return $this->author;
  }
}