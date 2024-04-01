<?php

namespace src\MyProject\EL_30\Controllers;

use src\MyProject\EL_30\Exceptions\InvalidArgumentException;
use src\MyProject\EL_30\Exceptions\NotFoundException;
use src\MyProject\EL_30\Exceptions\UnauthorizedException;
use src\MyProject\EL_30\Models\Articles\Article;
use src\MyProject\EL_30\Models\Users\User;
class ArticlesController extends AbstractController
{
  public function view(int $articleId): void
  {
    $article = Article::getById($articleId);

    if ($article === null) {
      throw new NotFoundException();
    }
    $this->view->renderHtml('EL_30/articles/view.php', ['article' => $article]);
  }

  public function edit(int $articleId): void
  {
    /** @var Article $article */
    $article = Article::getById($articleId);
    if ($article === null) {
      $this->view->renderHtml('EL_30/errors/404.php', [], 404);
      return;
    }
    $article->setName('Новое название статьи');
    $article->setText('Новый текст статьи');
    $article->save();
  }

  public function add(): void
  {
    // $author = User::getById(5);

    // $article = new Article();
    // $article->setAuthor($author);
    // $article->setName('Новое название статьи');
    // $article->setText('Новый текст статьи');

    // $article->save();
    // $article->delete();

    // var_dump($article);

    if ($this->user === null) {
      throw new UnauthorizedException();
    }

    if (!empty($_POST)) {
      try {
        $article = Article::createFormArray($_POST, $this->user);
      } catch (InvalidArgumentException $e) {
        $this->view->renderHtml('EL_30/articles/add.php', ['error'=>$e->getMessage()]);
        return;
      }

      header('Location: /EL-30/articles/'. $article->getId(), true, 302);
      exit();
    }
    $this->view->renderHtml('EL_30/articles/add.php');
  }
}
