<?php

namespace src\MyProject\EL_29\Controllers;

use src\MyProject\EL_29\Models\Articles\Article;
// use src\MyProject\EL_29\Models\Users\UsersAuthService;
// use src\MyProject\EL_29\View\View;


class MainController extends AbstractController
{
  /** @var View */
  // private $view;

  /** @var User|null */
  // private $user;

  // public function __construct()
  // {
  //   $this->user = UsersAuthService::getUserByToken();
  //   $this->view = new View(__DIR__ . '/../../../../templates');
  //   $this->view->setVar('user', $this->user);
  // }
  public function main()
  {
    $articles = Article::findAll();
    // $this->view->renderHtml('EL_29/main/main.php', [
    //   'articles' => $articles,
    //   'user' => UsersAuthService::getUserByToken()
    // ]);
    $this->view->renderHtml('EL_29/main/main.php', ['articles' => $articles]);
  }
  public function sayHello(string $name)
  {
    //    echo 'Hello ' . $name . '!';
    $this->view->renderHtml('EL_29/main/hello.php', ['name' => $name]);
  }
}