<?php

namespace src\MyProject\EL_17\Controllers;
use src\MyProject\EL_17\Services\Db;
use src\MyProject\EL_17\View\View;
use src\MyProject\EL_17\Models\Articles\Article;
class ArticlesController
{
  /** @var View */
  private $view;

  /** @var Db */
  private $db;

  public function __construct()
  {
    $this->view = new View(__DIR__ . '/../../../../templates');
    $this->db = new Db();
  }
  public function view(int $articleId)
  {

    $result = $this->db->query('SELECT * FROM `articles` WHERE id = :id;', [':id' => $articleId], Article::class);

    if ($result===[]) {
      $this->view->renderHtml('EL_17/errors/404.php', [], 404);
      return;
    };
    $this->view->renderHtml('EL_17/articles/view.php', ["article" => $result[0]]);
  }

}