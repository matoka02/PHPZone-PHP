<?php

namespace src\MyProject\EL_32\Controllers;

use src\MyProject\EL_32\Models\Users\User;
use src\MyProject\EL_32\Models\Users\UsersAuthService;
use src\MyProject\EL_32\View\View;

abstract class AbstractController
{
  /** @var View */
  protected $view;
  /** @var User|null */
  protected $user;

  public function __construct()
  {
    $this->user = UsersAuthService::getUserByToken();
    $this->view = new View(__DIR__ . '/../../../../templates');
    $this->view->setVar('user', $this->user);
  }
}