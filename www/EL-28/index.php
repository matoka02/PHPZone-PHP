<?php

/*---User activation system by email in PHP---*/

// Перейти в браузере
// http://127.0.0.1/openserver/phpmyadmin/index.php

// Перейти в браузере
// http://myproject.loc/example.php

try {
  spl_autoload_register(function (string $className) {
    require_once __DIR__ . '/../../' . str_replace('\\', '/', $className) . '.php';
  });

  $route = $_GET['route'] ?? '';
  $routes = require __DIR__ . '/../../src/routes_EL_28.php';
  $isRouteFound = false;

  foreach ($routes as $pattern => $controllerAndAction) {
    preg_match($pattern, $route, $matches);
    if (!empty ($matches)) {
      $isRouteFound = true;
      break;
    }
  }

  if (!$isRouteFound) {
    throw new src\MyProject\EL_28\Exceptions\NotFoundException();
  }

  unset($matches[0]);

  $controllerName = $controllerAndAction[0];
  $actionName = $controllerAndAction[1];

  $controller = new $controllerName();
  $controller->$actionName(...$matches);
} catch (\src\MyProject\EL_28\Exceptions\DbException $e) {
  $view = new \src\MyProject\EL_28\View\View(__DIR__ . '/../../templates/EL_28/errors');
  $view->renderHtml('500.php', ['error' => $e->getMessage()], 500);
} catch (\src\MyProject\EL_28\Exceptions\NotFoundException $e) {
  $view = new \src\MyProject\EL_28\View\View(__DIR__ . '/../../templates/EL_28/errors');
  $view->renderHtml('404.php', ['error' => $e->getMessage()], 404);
}