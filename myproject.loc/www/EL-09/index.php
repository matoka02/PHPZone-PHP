<?php

/*---Namespaces and autoloading in PHP---*/

var_dump(__DIR__);
//C:\OSPanel\domains\myproject.loc\www\EL-09
require '/src/MyProject/Models/Articles/Article.php';
require __DIR__ . '/../src/MyProject/Models/Users/User.php';
$author = new User('Иван');
$article = new Article('Заголовок', 'Текст', $author);
var_dump($article);

//C:\OSPanel\domains\myproject.loc\src\MyProject\Models\Articles\Article.php