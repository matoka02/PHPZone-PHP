<?php

namespace src\MyProject\EL_32\Models\Articles;

use src\MyProject\EL_32\Exceptions\InvalidArgumentException;
use src\MyProject\EL_32\Models\ActiveRecordEntity;
use src\MyProject\EL_32\Models\Users\User;

class Article extends ActiveRecordEntity
{
  /** @var string */
  protected $name;
  /** @var string */
  protected $text;
  /** @var int */
  protected $authorId;
  /** @var string */
  protected $createdAt;

  /** @return string */
  public function getName(): string
  {
    return $this->name;
  }

  /** @return string */
  public function getText(): string
  {
    return $this->text;
  }

  /** @return User */
  public function getAuthor(): User
  {
    return User::getById($this->authorId);
  }
  /** @param string $name */
  public function setName(string $name): void
  {
    $this->name = $name;
  }
  public function setText(string $text): void
  {
    $this->text = $text;
  }
  /** @param User $user */
  public function setAuthor(User $user): void
  {
    $this->authorId = $user->getId();
  }

  public static function createFormArray(array $fields, User $author): Article
  {
    if (empty($fields['name'])) {
      throw new InvalidArgumentException('Не передано название статьи');
    }

    if (empty($fields['text'])) {
      throw new InvalidArgumentException('Не передан текст статьи');
    }

    $article = new Article();

    $article->setAuthor($author);
    $article->setName($fields['name']);
    $article->setText($fields['text']);

    $article->save();

    return $article;
  }

  public function updateFromArray(array $fields): Article
  {
    if (empty($fields['name'])) {
      throw new InvalidArgumentException('Не передано название статьи');
    }

    if (empty($fields['text'])) {
      throw new InvalidArgumentException('Не передан текст статьи');
    }

    $this->setName($fields['name']);
    $this->setText($fields['text']);

    $this->save();

    return $this;
  }
  protected static function getTableName(): string
  {
    return 'articles';
  }
}