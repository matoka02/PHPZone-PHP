<?php

namespace src\MyProject\EL_31\Controllers;

use src\MyProject\EL_31\Exceptions\InvalidArgumentException;
use src\MyProject\EL_31\Exceptions\NotFoundException;
use src\MyProject\EL_31\Exceptions\UnauthorizedException;
use src\MyProject\EL_31\Exceptions\Forbidden;
use src\MyProject\EL_31\Models\Articles\Article;

class ArticlesController extends AbstractController
{
  public function view(int $articleId): void
  {
    $article = Article::getById($articleId);

    if ($article === null) {
      throw new NotFoundException();
    }
    $this->view->renderHtml('EL_31/articles/view.php', ['article' => $article]);
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
        $this->view->renderHtml('EL_31/articles/edit.php', ['error'=>$e->getMessage(), 'article' => $article]);
        return;
      }

      header('Location: /EL-31/articles/'. $article->getId(), true, 302);
      exit();
    }
    $this->view->renderHtml('EL_31/articles/edit.php', ['article' => $article]);
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
        $this->view->renderHtml('EL_31/articles/add.php', ['error'=>$e->getMessage()]);
        return;
      }

      header('Location: /EL-31/articles/'. $article->getId(), true, 302);
      exit();
    }
    $this->view->renderHtml('EL_31/articles/add.php');
  }
}
