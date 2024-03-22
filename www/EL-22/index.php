<?php

/*---Insert using Active Record---*/
/*---Delete in Active Record---*/

// Перейти в браузере
// http://127.0.0.1/openserver/phpmyadmin/index.php

spl_autoload_register(function (string $className) {
  require_once __DIR__ . '/../../' . str_replace('\\', '/', $className) . '.php';
});


$route = $_GET['route'] ?? '';
$routes = require __DIR__ . '/../../src/routes_EL_22.php';

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

$controllerName = $controllerAndAction[0];
$actionName = $controllerAndAction[1];

$controller = new $controllerName();
$controller->$actionName(...$matches);

// создаём в нашем классе ActiveRecordEntity метод delete().
// src/MyProject/EL_22/Models/ActiveRecordEntity.php


