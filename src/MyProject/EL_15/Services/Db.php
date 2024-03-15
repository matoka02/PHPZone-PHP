<?php

namespace src\MyProject\EL_15\Services;
class Db
{
  /** @var \PDO */
  private $pdo;
  public function __construct()
  {
    $dbOptions = (require __DIR__ . "/../../../settings.php")['db'];

    $this->pdo = new \PDO(
      'mysql:host=' . $dbOptions['host'] . ';dbname=' . $dbOptions['dbname'],
      $dbOptions['user'],
      $dbOptions['password']
    );
    $this->pdo->exec("SET CHARACTER SET utf8");
  }

  public function query(string $sql, $params = []): ?array
  {
    $sth = $this->pdo->prepare($sql);
    $result = $sth->execute($params);
    if (false === $result) {
      return null;
    }
    return $sth->fetchAll();
  }
};