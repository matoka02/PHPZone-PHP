<?php

namespace src\MyProject\EL_30\Controllers;

use src\MyProject\EL_30\Models\Articles\Article;


class MainController extends AbstractController
{
  public function main()
  {
    $articles = Article::findAll();
    $this->view->renderHtml('EL_30/main/main.php', ['articles' => $articles]);
  }
  public function sayHello(string $name)
  {
    //    echo 'Hello ' . $name . '!';
    $this->view->renderHtml('EL_30/main/hello.php', ['name' => $name]);
  }
}