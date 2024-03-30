<?php

namespace src\MyProject\EL_28\Controllers;

use src\MyProject\EL_28\Exceptions\InvalidArgumentException;
use src\MyProject\EL_28\Exceptions\ActivationException;
use src\MyProject\EL_28\Models\Users\User;
use src\MyProject\EL_28\Models\Users\UserActivationService;
use src\MyProject\EL_28\Services\EmailSender;
use src\MyProject\EL_28\View\View;


class UsersController
{
  /** @var View */
  private $view;

  public function __construct()
  {
    $this->view = new View(__DIR__ . '/../../../templates');
  }

  public function signUp()
  {
    if (!empty($_POST)) {
      try {
        $user = User::signUp($_POST);
      } catch (InvalidArgumentException $e) {
        $this->view->renderHtml('EL_28/users/signUp.php', ['error' => $e->getMessage()]);
        return;
      }
      // if ($user instanceof User) {
      //   $this->view->renderHtml('EL_28/users/signUpSuccessful.php');
      //   return;
      // }
      if ($user instanceof User) {
        $code = UserActivationService::createActivationCode($user);
        EmailSender::send($user, 'Активация', 'userActivation.php', [
          'userId' => $user->getId(),
          'code' => $code
        ]);
        $this->view->renderHtml('EL_28/users/signUpSuccessful.php');
        return;
      }
    }
    $this->view->renderHtml('EL_28/users/signUp.php');
  }

  public function activate(int $userId, string $activationCode)
  {
    // $user = User::getById($userId);
    // $isCodeValid = UserActivationService::checkActivationCode($user, $activationCode);
    // if ($isCodeValid) {
    //   $user->activate();
    //   echo 'OK!';
    // }
    try {
      $user = User::getById($userId);
      if ($user == null) {
        throw new ActivationException('Такой пользователь не существует');
      }
      $isCodeValid = UserActivationService::checkActivationCode($user, $activationCode);
      if ($isCodeValid) {
        throw new ActivationException('Код активации неверный');
      } else {
        $user->activate();
        $this->view->renderHtml('EL_28/users/activationSuccessful.php');
        UserActivationService::deleteActivationCode($user, $activationCode);
        return;
      }
    } catch (ActivationException $e) {
      $this->view->renderHtml('EL_28/users/activationFailed.php', ['error' => $e->getMessage()]);
    }
  }
}