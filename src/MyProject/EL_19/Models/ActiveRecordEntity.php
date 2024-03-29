<?php

namespace src\MyProject\EL_19\Models;

use src\MyProject\EL_19\Services\Db;
abstract class ActiveRecordEntity
{
  /** @var int */
  protected $id;
  /** @return int */
  public function getId(): int
  {
    return $this->id;
  }

  public function __set(string $name, $value)
  {
    $camelCaseName = $this->underscoreToCamelCase($name);
    $this->$camelCaseName = $value;
  }
  private function underscoreToCamelCase(string $source): string
  {
    return lcfirst(str_replace('_', '', ucwords($source, '_')));
  }

  /** @return static[] */
  public static function findAll(): array
  {
//    $db = new Db();
    $db = Db::getInstance();
    return $db->query('SELECT * FROM `' . static::getTableName() . '`;', [], static::class );
  }

  /**
   * @param int $id
   * @return static|null
   */
  public static function getById(int $id): ?self
  {
//    $db = new Db();
    $db = Db::getInstance();
    $entities = $db->query(
      'SELECT * FROM `' . static::getTableName() . '` WHERE id=:id;',
      [':id' => $id],
      static::class
    );
    return $entities ? $entities[0] : null;
  }


  abstract protected static function getTableName(): string;
}