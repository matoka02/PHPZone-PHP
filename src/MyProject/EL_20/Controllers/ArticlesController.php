<?php

namespace src\MyProject\EL_20\Controllers;

use src\MyProject\EL_20\View\View;
use src\MyProject\EL_20\Models\Articles\Article;

class ArticlesController
{
  /** @var View */
  private $view;

  public function __construct()
  {
    $this->view = new View(__DIR__ . '/../../../../templates');
  }
  public function view(int $articleId)
  {
    $article = Article::getById($articleId);

    $reflector = new \ReflectionObject($article);
    $properties = $reflector->getProperties();
//    var_dump($properties);
//    return;
    $propertiesNames = [];
    foreach ($properties as $property) {
      $propertiesNames[] = $property->getName();
    }
    var_dump($propertiesNames);
    return;

    if ($article === null) {
      $this->view->renderHtml('EL_20/errors/404.php', [], 404);
      return;
    }
    $this->view->renderHtml('EL_20/articles/view.php', ['article' => $article]);

  }
}