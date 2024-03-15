<?php

namespace src\MyProject\EL_16\Controllers;
use src\MyProject\EL_16\Services\Db;
use src\MyProject\EL_16\View\View;

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
    $articles = $this->db->query('SELECT * FROM `articles` a JOIN `users` u ON a.author_id = u.id');
//    var_dump($articles);
    $this->view->renderHtml('EL_16/main/main.php', ['articles' => $articles]);
  }
  public function sayHello(string $name)
  {
//    echo 'Hello ' . $name . '!';
    $this->view->renderHtml('EL_16/main/hello.php', ['name' => $name]);
  }
}