<?php

namespace src\MyProject\EL_19\Controllers;

use src\MyProject\EL_19\View\View;
use src\MyProject\EL_19\Models\Articles\Article;
use src\MyProject\EL_19\Models\Users\User;
class ArticlesController
{
  /** @var View */
  private $view;

  public function __construct()
  {
    $this->view = new View(__DIR__ . '/../../../templates');
  }
  public function view(int $articleId)
  {
    $article = Article::getById($articleId);
    if ($article === null) {
      $this->view->renderHtml('EL_19/errors/404.php', [], 404);
      return;
    }
    $this->view->renderHtml('EL_19/articles/view.php', ['article' => $article]);

  }
}