<?php

namespace src\MyProject\EL_21\Models\Users;

use src\MyProject\EL_21\Models\ActiveRecordEntity;
class User extends ActiveRecordEntity
{
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

  public function getNickname(): string
  {
    return $this->nickname;
  }
  protected static function getTableName(): string
  {
    return 'users';
  }
}