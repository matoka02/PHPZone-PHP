<?php

namespace src\MyProject\EL_13\Controllers;
use src\MyProject\EL_13\View\View;

class MainController
{
  private $view;
  public function __construct()
  {
    $this->view = new View(__DIR__ . '/../../../templates');
  }
  public function main()
  {
    $articles = [
      ['name' => 'Статья 1', 'text' => 'Текст статьи 1'],
      ['name' => 'Статья 2', 'text' => 'Текст статьи 2'],
    ];
//    include __DIR__ . '/../../../templates/main/main.php';
    $this->view->renderHtml('EL_13/main/main.php', ['articles' => $articles]);
  }
  public function sayHello(string $name)
  {
//    echo 'Hello ' . $name . '!';
    $this->view->renderHtml('EL_13/main/hello.php', ['name' => $name]);
  }
}