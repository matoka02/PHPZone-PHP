<?php

/*---Front controller and routing in PHP---*/

spl_autoload_register(function (string $className) {
  require_once __DIR__ . '/../../' . str_replace('\\', '/', $className) . '.php';
});

//$controller = new \src\MyProject\EL_12\Controllers\MainController();
//
//if (!empty($_GET['name'])) {
//  $controller->sayHello($_GET['name']);
//} else {
//  $controller->main();
//};

// Перейти в браузере
// http://myproject.loc/EL-12/abracadabra

//var_dump($_GET['route']);

// Перейти в браузере
// http://myproject.loc/EL-12/hello/username

//$route = $_GET['route'] ?? '';

//$pattern = '~^hello/(.*)$~';
//preg_match($pattern, $route, $matches);

//var_dump($matches);

//if (!empty($matches)) {
//  $controller = new \src\MyProject\EL_12\Controllers\MainController();
//  $controller->sayHello($matches[1]);
//  return;
//};

//$pattern = '~^$~';
//preg_match($pattern, $route, $matches);

//if (!empty($matches)) {
//  $controller = new \src\MyProject\EL_12\Controllers\MainController();
//  $controller->main();
//  return;
//};

//echo 'Страница не найдена';

// Перейти в браузере
// http://myproject.loc/EL-12/blabla

// рефакторинг с добалением страницы роутинга
$route = $_GET['route'] ?? '';
$routes = require __DIR__ . '/../../src/routes.php';
//var_dump($routes);

$isRouteFound = false;
foreach ($routes as $pattern => $controllerAndAction) {
  preg_match($pattern, $route, $matches);
  if (!empty($matches)) {
    $isRouteFound = true;
    break;
  }
}

if (!$isRouteFound) {
  echo 'Страница не найдена!';
  return;
}

unset($matches[0]);

var_dump($controllerAndAction);
var_dump($matches);

$controllerName = $controllerAndAction[0];
$actionName = $controllerAndAction[1];

$controller = new $controllerName();
//$controller->$actionName();
$controller->$actionName(...$matches);