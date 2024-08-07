<?php

namespace src\MyProject\EL_28\Models\Articles;

use src\MyProject\EL_28\Models\ActiveRecordEntity;
use src\MyProject\EL_28\Models\Users\User;
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
  protected static function getTableName(): string
  {
    return 'articles';
  }
}