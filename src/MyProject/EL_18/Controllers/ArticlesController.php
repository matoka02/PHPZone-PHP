<?php

namespace src\MyProject\EL_18\Controllers;

//use src\MyProject\EL_18\Services\Db;
use src\MyProject\EL_18\View\View;
use src\MyProject\EL_18\Models\Articles\Article;
use src\MyProject\EL_18\Models\Users\User;
class ArticlesController
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
  public function view(int $articleId)
  {

//    $result = $this->db->query('SELECT * FROM `articles` WHERE id = :id;', [':id' => $articleId], Article::class);
//    if ($result===[]) {
//      $this->view->renderHtml('EL_18/errors/404.php', [], 404);
//      return;
//    };
//    $this->view->renderHtml('EL_18/articles/view.php', ["article" => $result[0]]);

    $article = Article::getById($articleId);
    if ($article === null) {
      $this->view->renderHtml('EL_18/errors/404.php', [], 404);
      return;
    }
//    $this->view->renderHtml('EL_18/articles/view.php', ["article" => $article]);
//    $articleAuthor = User::getById($article->getAuthorId());
//    $this->view->renderHtml('EL_18/articles/view.php', ['article' => $article, 'author' => $articleAuthor]);
    $this->view->renderHtml('EL_18/articles/view.php', ['article' => $article]);

  }
}