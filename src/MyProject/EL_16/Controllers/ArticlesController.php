<?php

namespace src\MyProject\EL_16\Controllers;
use src\MyProject\EL_16\Services\Db;
use src\MyProject\EL_16\View\View;
class ArticlesController
{
  /** @var View */
  private $view;

  /** @var Db */
  private $db;

  public function __construct()
  {
    $this->view = new View(__DIR__ . '/../../../templates');
    $this->db = new Db();
  }

//  public function view()
//  {
//    echo 'Здесь будет получение статьи и рендеринг шаблона';
//  }
  public function view(int $articleId)
  {
//    $result = $this->db->query(
//      "SELECT * FROM `articles` WHERE id = :id;",
//      ["id" => $articleId],
//    );
//    var_dump($result);

    $result = $this->db->query('SELECT * FROM `articles` a JOIN `users` u ON a.author_id = u.id WHERE a.id = :id;',[':id' => $articleId]);

    if ($result===[]) {
      $this->view->renderHtml('EL_16/errors/404.php', [], 404);
      return;
    };
    $this->view->renderHtml('EL_16/articles/view.php', ["article" => $result[0]]);
  }

}