<?php

namespace src\MyProject\EL_18\Controllers;

//use src\MyProject\EL_18\Services\Db;
use src\MyProject\EL_18\View\View;
use src\MyProject\EL_18\Models\Articles\Article;

class MainController
{
  /** @var View */
  private $view;

  /** @var Db */
//  private $db;

  public function __construct()
  {
    $this->view = new View(__DIR__ . '/../../../templates');
//    $this->db = new Db();
  }
  public function main()
  {
//    $articles = $this->db->query('SELECT * FROM `articles`;', [], Article::class);
    $articles = Article::findAll();
    $this->view->renderHtml('EL_18/main/main.php', ['articles' => $articles]);
  }
  public function sayHello(string $name)
  {
//    echo 'Hello ' . $name . '!';
    $this->view->renderHtml('EL_18/main/hello.php', ['name' => $name]);
  }
}