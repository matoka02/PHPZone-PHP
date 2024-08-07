<?php

namespace src\MyProject\EL_26\Controllers;

use src\MyProject\EL_26\View\View;
use src\MyProject\EL_26\Models\Articles\Article;

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
    $this->view->renderHtml('EL_26/main/main.php', ['articles' => $articles]);
  }
  public function sayHello(string $name)
  {
//    echo 'Hello ' . $name . '!';
    $this->view->renderHtml('EL_26/main/hello.php', ['name' => $name]);
  }
}