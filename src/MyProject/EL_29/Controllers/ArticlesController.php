<?php

namespace src\MyProject\EL_29\Controllers;

use src\MyProject\EL_29\Exceptions\NotFoundException;
use src\MyProject\EL_29\Models\Articles\Article;
use src\MyProject\EL_29\Models\Users\User;
// use src\MyProject\EL_29\Models\Users\UsersAuthService;
// use src\MyProject\EL_29\View\View;

class ArticlesController extends AbstractController
{
  /** @var View */
  // private $view;

  /** @var User|null */
  // private $user;

  // public function __construct()
  // {
  //   $this->user = UsersAuthService::getUserByToken();
  //   $this->view = new View(__DIR__ . '/../../../templates');
  //   $this->view->setVar('user', $this->user);
  // }
  public function view(int $articleId): void
  {
    $article = Article::getById($articleId);

    if ($article === null) {
      throw new NotFoundException();
    }
    $this->view->renderHtml('EL_29/articles/view.php', ['article' => $article]);
  }

  public function edit(int $articleId): void
  {
    /** @var Article $article */
    $article = Article::getById($articleId);
    if ($article === null) {
      $this->view->renderHtml('EL_29/errors/404.php', [], 404);
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
