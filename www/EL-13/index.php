<?php

/*---View in PHP---*/

spl_autoload_register(function (string $className) {
  require_once __DIR__ . '/../../' . str_replace('\\', '/', $className) . '.php';
});


$route = $_GET['route'] ?? '';
$routes = require __DIR__ . '/../../src/routes_EL_13.php';

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

//var_dump($controllerAndAction);
//var_dump($matches);

$controllerName = $controllerAndAction[0];
$actionName = $controllerAndAction[1];

$controller = new $controllerName();
$controller->$actionName(...$matches);

// Перейти в браузере
// http://myproject.loc/EL-13/hello/username