<?php

namespace src\MyProject\EL_28\Controllers;

use src\MyProject\EL_28\Models\Articles\Article;
use src\MyProject\EL_28\View\View;


class MainController
{
  /** @var View */
  private $view;

  public function __construct()
  {
    $this->view = new View(__DIR__ . '/../../../../templates');
  }
  public function main()
  {
    $articles = Article::findAll();
    $this->view->renderHtml('EL_28/main/main.php', ['articles' => $articles]);
  }
  public function sayHello(string $name)
  {
//    echo 'Hello ' . $name . '!';
    $this->view->renderHtml('EL_28/main/hello.php', ['name' => $name]);
  }
}