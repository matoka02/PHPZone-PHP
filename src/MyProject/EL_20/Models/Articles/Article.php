<?php

namespace src\MyProject\EL_20\Models\Articles;

use src\MyProject\EL_20\Models\ActiveRecordEntity;
use src\MyProject\EL_20\Models\Users\User;
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
  protected static function getTableName(): string
  {
    return 'articles';
  }
}