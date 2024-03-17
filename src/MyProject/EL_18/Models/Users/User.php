<?php

namespace src\MyProject\EL_18\Models\Users;

use src\MyProject\EL_18\Models\ActiveRecordEntity;
class User extends ActiveRecordEntity
{
//  private $name;
//  public function __construct(string $name)
//  {
//    $this->name = $name;
//  }
//  public function getName(): string
//  {
//    return $this->name;
//  }
  /** @var string */
  protected $nickname;
  /** @var string */
  protected $email;
  /** @var int */
  protected $isConfirmed;
  /** @var string */
  protected $role;
  /** @var string */
  protected $passwordHash;
  /** @var string */
  protected $authToken;
  /** @var string */
  protected $createdAt;

  /** @return string */
//  public function getEmail(): string
//  {
//    return $this->email;
//  }
  public function getNickname(): string
  {
    return $this->nickname;
  }
  protected static function getTableName(): string
  {
    return 'users';
  }
}