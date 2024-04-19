<?php

namespace src\MyProject\EL_28\Controllers;

use src\MyProject\EL_28\Exceptions\NotFoundException;
use src\MyProject\EL_28\Models\Articles\Article;
use src\MyProject\EL_28\Models\Users\User;
use src\MyProject\EL_28\View\View;

class ArticlesController
{
  /** @var View */
  private $view;

  public function __construct()
  {
    $this->view = new View(__DIR__ . '/../../../../templates');
  }
  public function view(int $articleId): void
  {
    $article = Article::getById($articleId);

    if ($article === null) {
      throw new NotFoundException();
    }
    $this->view->renderHtml('EL_28/articles/view.php', ['article' => $article]);
  }

  public function edit(int $articleId): void
  {
    /** @var Article $article */
    $article = Article::getById($articleId);
    if ($article === null) {
      $this->view->renderHtml('EL_28/errors/404.php', [], 404);
      return;
    }
    $article->setName('Новое название статьи');
    $article->setText('Новый текст статьи');
    $article->save();
  }

  public function add(): void
  {
    $author = User::getById(5);

    $article = new Article();
    $article->setAuthor($author);
    $article->setName('Новое название статьи');
    $article->setText('Новый текст статьи');

    $article->save();

    var_dump($article);
  }
}
