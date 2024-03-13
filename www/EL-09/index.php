<?php

/*---Namespaces and autoloading in PHP---*/

// выделение структуры классов
//require __DIR__ . '/../../src/MyProject/Models/Users/User.php';
//require __DIR__ . '/../../src/MyProject/Models/Articles/Article.php';

// $author = new User('Иван');
// $article = new Article('Заголовок', 'Текст', $author);
// var_dump($article);

// рефакторинг после добавления namespace
// $author = new \MyProject\Models\Users\User('Иван');
// $article = new \MyProject\Models\Articles\Article('Заголовок', 'Текст', $author);
// var_dump($article);

// рефакторинг с функцией автозагрузки классов
//function myAutoLoader(string $className)
//{
//  var_dump($className);
//  require_once __DIR__ . '/../../' . str_replace('\\', '/', $className) . '.php';
//};

//spl_autoload_register('myAutoLoader');

// рефакторинг функции автозагрузки классов в анонимную функцию
spl_autoload_register(function (string $className) {
  require_once __DIR__ . '/../../' . str_replace('\\', '/', $className) . '.php';
});

$author = new \src\MyProject\Models\Users\User('2Иван');
$article = new \src\MyProject\Models\Articles\Article('Заголовок', 'Текст', $author);
var_dump($article);
