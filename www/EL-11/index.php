<?php

/*---Controller in MVC---*/

spl_autoload_register(function (string $className) {
  require_once __DIR__ . '/../../' . str_replace('\\', '/', $className) . '.php';
});

$controller = new \src\MyProject\Controllers\MainController();
// $controller->main();

if (!empty($_GET['name'])) {
  $controller->sayHello($_GET['name']);
} else {
  $controller->main();
};

// Перейти в браузере
// http://myproject.loc/EL-11/?name=Иван