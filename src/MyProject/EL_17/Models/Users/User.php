<?php

namespace src\MyProject\EL_17\Models\Users;
class User
{
  private $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function getName(): string
  {
    return $this->name;
  }
}