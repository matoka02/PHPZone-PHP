<?php

return [
  '~^hello/(.*)$~' => [\src\MyProject\EL_21\Controllers\MainController::class, 'sayHello'],
  '~^bye/(.*)$~' => [\src\MyProject\EL_21\Controllers\MainController::class, 'sayBay'],
  '~^articles/(\d+)$~' => [\src\MyProject\EL_21\Controllers\ArticlesController::class, 'view'],
  '~^articles/(\d+)/edit$~' => [\src\MyProject\EL_21\Controllers\ArticlesController::class, 'edit'],
  '~^$~' => [\src\MyProject\EL_21\Controllers\MainController::class, 'main'],
];
