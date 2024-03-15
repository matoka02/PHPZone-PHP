<?php

namespace src\MyProject\EL_15\Controllers;
use src\MyProject\EL_15\Services\Db;
use src\MyProject\EL_15\View\View;

class MainController
{
  /** @var View */
  private $view;

  /** @var Db */
  private $db;

  public function __construct()
  {
    $this->view = new View(__DIR__ . '/../../../templates');
    $this->db = new DB();
  }
  public function main()
  {
//    $articles = [
//      ['name' => 'Статья 1', 'text' => 'Текст статьи 1'],
//      ['name' => 'Статья 2', 'text' => 'Текст статьи 2'],
//    ];
//    $this->view->renderHtml('EL_15/main/main.php', ['articles' => $articles]);
    $articles = $this->db->query('SELECT * FROM `articles`;');
    var_dump($articles);
  }
  public function sayHello(string $name)
  {
//    echo 'Hello ' . $name . '!';
    $this->view->renderHtml('EL_15/main/hello.php', ['name' => $name]);
  }
}