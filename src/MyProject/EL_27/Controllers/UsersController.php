<?php

namespace src\MyProject\EL_27\Controllers;

use src\MyProject\EL_27\Exceptions\InvalidArgumentException;
use src\MyProject\EL_27\Models\Users\User;
use src\MyProject\EL_27\View\View;


class UsersController
{
  /** @var View */
  private $view;

  public function __construct()
  {
    $this->view = new View(__DIR__ . '/../../../../templates');
  }

  public function signUp()
  {
    // echo 'здесь будет код для регистрации пользователей';
    if (!empty($_POST)) {
      // $user = User::signUp($_POST);
      try {
        $user = User::signUp($_POST);
      } catch (InvalidArgumentException $e) {
        $this->view->renderHtml('EL_27/users/signUp.php', ['error' => $e->getMessage()]);
        return;
      }
      if ($user instanceof User) {
        $this->view->renderHtml('EL_27/users/signUpSuccessful.php');
        return;
    }
    }
    $this->view->renderHtml('EL_27/users/signUp.php');
  }
}