<?php

namespace src\MyProject\EL_22\Controllers;

use src\MyProject\EL_22\View\View;
use src\MyProject\EL_22\Models\Articles\Article;
use src\MyProject\EL_22\Models\Users\User;

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
      $this->view->renderHtml('EL_22/errors/404.php', [], 404);
      return;
    }
    $this->view->renderHtml('EL_22/articles/view.php', ['article' => $article]);
  }

  public function edit(int $articleId): void
  {
    /** @var Article $article */
    $article = Article::getById($articleId);
    if ($article === null) {
      $this->view->renderHtml('EL_22/errors/404.php', [], 404);
      return;
    }
    $article->setName('Новое название статьи');
    $article->setText('Новый текст статьи');
    $article->save();
  }

  // public function create()
  // {
  //   $article = new Article();
  //   $article->setName('Название новой статьи');
  //   $article->setText('Текст новой статьи');
  //   $article->setAuthor(1);
  //   $article->save();
  // }

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
