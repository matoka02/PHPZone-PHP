<?php

namespace src\MyProject\EL_21\Models;

use ReflectionClass;
use src\MyProject\EL_21\Services\Db;
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
    $db = Db::getInstance();
    $entities = $db->query(
      'SELECT * FROM `' . static::getTableName() . '` WHERE id=:id;',
      [':id' => $id],
      static::class
    );
    return $entities ? $entities[0] : null;
  }

  public function save(): void
  {
    $mappedProperties = $this->mapPropertiesToDbFormat();
//    var_dump($mappedProperties);
    if ($this->id !== null){
      $this->update($mappedProperties);
    } else {
      $this->insert($mappedProperties);
    }
  }
  private function update(array $mappedProperties): void
  {
    $columns2params = [];
    $params2values = [];
    $index = 1;
    foreach ($mappedProperties as $column => $value) {
      $param = ':param' . $index; // :param1
      $columns2params[] = $column . ' = ' . $param; // column1 = :param1
      $params2values[$param] = $value; // [:param1 => value1]
      $index++;
    }
//    var_dump($columns2params);
//    var_dump($params2values);
    $sql = 'UPDATE ' . static::getTableName() . ' SET ' . implode(', ', $columns2params) . ' WHERE id = ' . $this->id;
    $db::getInstance();
    $db->query($sql, $columns2values, static::class);
  }
  private function insert(array $mappedProperties): void{
    $filteredProperties = array_filter($mappedProperties);

    $columns = [];
    $paramsNames = [];
    $params2values = [];
    foreach ($filteredProperties as $columnName => $value) {
      $columns[] = '`' . $columnName. '`';
      $paramName = ':' . $columnName;
      $paramsNames[] = $paramName;
      $params2values[$paramName] = $value;
    };

    $columnsViaSemicolon = implode(', ', $columns);
    $paramsNamesViaSemicolon = implode(', ', $paramsNames);

    $sql = 'INSERT INTO ' . static::getTableName() . ' (' . $columnsViaSemicolon . ') VALUES (' . $paramsNamesViaSemicolon . ');';

    $db::getInstance();
    $db->query($sql, $params2values, static::class);
    $this->id = $db->getLastInsertId();
    $this->refresh();
  }
  private function mapPropertiesToDbFormat(): array
  {
    $reflector = new \ReflectionObject($this);
    $properties = $reflector->getProperties();

    $mappedProperties = [];
    foreach ($properties as $property) {
      $propertyName = $property->getName();
      $propertyNameAsUnderscore = $this->camelCaseToUnderscore($propertyName);
      $mappedProperties[$propertyNameAsUnderscore] = $this->$propertyName;
    }
    return $mappedProperties;
  }
  private function camelCaseToUnderscore(string $source): string
  {
    return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $source));
  }

  abstract protected static function getTableName(): string;
}