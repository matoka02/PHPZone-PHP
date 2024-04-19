<?php

namespace src\MyProject\EL_26\Controllers;

use src\MyProject\EL_26\View\View;
use src\MyProject\EL_26\Models\Articles\Article;
use src\MyProject\EL_26\Models\Users\User;
use src\MyProject\EL_26\Exceptions\NotFoundException;

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
      // $this->view->renderHtml('EL_26/errors/404.php', [], 404);
      // return;
      throw new NotFoundException();
    }
    $this->view->renderHtml('EL_26/articles/view.php', ['article' => $article]);
  }

  public function edit(int $articleId): void
  {
    /** @var Article $article */
    $article = Article::getById($articleId);
    if ($article === null) {
      $this->view->renderHtml('EL_26/errors/404.php', [], 404);
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
