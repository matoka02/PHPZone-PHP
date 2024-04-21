<?php

namespace src\MyProject\EL_32\Controllers;

use src\MyProject\EL_32\Exceptions\InvalidArgumentException;
use src\MyProject\EL_32\Exceptions\NotFoundException;
use src\MyProject\EL_32\Exceptions\UnauthorizedException;
use src\MyProject\EL_32\Exceptions\Forbidden;
use src\MyProject\EL_32\Models\Articles\Article;
use src\MyProject\EL_32\Models\Articles\Comment;

class ArticlesController extends AbstractController
{
  public function view(int $articleId): void
  {
    $article = Article::getById($articleId);

    if ($article === null) {
      throw new NotFoundException();
    }
    // $this->view->renderHtml('EL_32/articles/view.php', ['article' => $article]);

    $comments = Comment::findByArticleId($articleId);

    if ($this->user) {
      $admin = $this->user->isAdmin();
    } else {
      $admin = null;
      $this->view->renderHtml('EL_32/articles/view.php', [
        'article' => $article,
        'comments' => $comments,
        'admin' => $admin
      ]);
    }
  }

  public function edit(int $articleId): void
  {
    /** @var Article $article */
    $article = Article::getById($articleId);

    if ($article === null) {
      throw new NotFoundException();
    }

    if ($this->user === null) {
      throw new UnauthorizedException();
    }

    // проверка на администратора
    if (!$this->user->isAdmin()) {
      throw new Forbidden('Для доступа к данной странице необходимы права администратора!');
    }

    if (!empty($_POST)) {
      try {
        $article->updateFromArray($_POST);
      } catch (InvalidArgumentException $e) {
        $this->view->renderHtml('EL_32/articles/edit.php', ['error' => $e->getMessage(), 'article' => $article]);
        return;
      }

      header('Location: /EL-32/articles/' . $article->getId(), true, 302);
      exit();
    }
    $this->view->renderHtml('EL_32/articles/edit.php', ['article' => $article]);
  }

  public function add(): void
  {
    if ($this->user === null) {
      throw new UnauthorizedException();
    }

    if ($this->user->isAdmin()) {
      throw new Forbidden();
    }

    if (!empty($_POST)) {
      try {
        $article = Article::createFormArray($_POST, $this->user);
      } catch (InvalidArgumentException $e) {
        $this->view->renderHtml('EL_32/articles/add.php', ['error' => $e->getMessage()]);
        return;
      }

      header('Location: /EL-32/articles/' . $article->getId(), true, 302);
      exit();
    }
    $this->view->renderHtml('EL_32/articles/add.php');
  }

  public function comments(int $articleId): void
  {
    if (!empty($_POST)) {
      try {
        $comment = Comment::createComment($_POST, $this->user, $articleId);
      } catch (InvalidArgumentException $e) {
        $this->view->renderHtml('EL_32/articles/view.php', ['error' => $e->getMessage()]);
        return;
      }
      ;
      header('Location: /EL-32/articles/' . $comment->getArticleId() . '#comment' . $comment->getId(), true, 302);
    }
  }
}
