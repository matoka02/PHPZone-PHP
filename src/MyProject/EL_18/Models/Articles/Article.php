<?php

namespace src\MyProject\EL_18\Models\Articles;

//use src\MyProject\EL_18\Models\Users\User;
//use src\MyProject\EL_18\Services\Db;
use src\MyProject\EL_18\Models\ActiveRecordEntity;
use src\MyProject\EL_18\Models\Users\User;
class Article extends ActiveRecordEntity
{
  /** @var int */
//  private $id;
  /** @var string */
//  private $name;
  protected $name;
  /** @var string */
//  private $text;
  protected $text;
  /** @var int */
//  private $authorId;
  protected $authorId;
  /** @var string */
//  private $createdAt;
  protected $createdAt;

//  public function __set($name, $value)
//  {
//    $camelCaseName = $this->underscoreToCamelCase($name);
//    $this->$camelCaseName = $value;
//  }

  /** @return int */
//  public function getId(): int
//  {
//    return $this->id;
//  }

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

  /** @return Article[] */
//  public static function findAll(): array
//  {
//    $db = new Db();
//    return $db->query('SELECT * FROM `articles`;', [], Article::class);
//    return $db->query('SELECT * FROM `articles`;', [], static::class);
//    return $db->query('SELECT * FROM `' . static::getTableName() . '`;', [], static::class );
//  }

  /** @return int */
//  public function getAuthorId(): int
//  {
//    return (int) $this->authorId;
//  }

  /** @return User */
  public function getAuthor(): User
  {
    return User::getById($this->authorId);
  }
  protected static function getTableName(): string
  {
    return 'articles';
  }
//  public function underscoreToCamelCase(string $source): string
//  {
//    return lcfirst(str_replace('_', '', ucwords($source, '_')));
//  }
}